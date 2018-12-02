<?php
require '../vendor/autoload.php';
require '../generated-conf/config.php';

session_start();


$settings = ['displayErrorDetails' => true];

$app = new \Slim\App(['settings' => $settings]);

$container = $app->getContainer();
$container['view'] = function($container) {
    $view = new \Slim\Views\Twig('../templates');
    
    $basePath = rtrim(str_ireplace('index.php', '', 
    $container->get('request')->getUri()->getBasePath()), '/');

    $view->addExtension(
    new Slim\Views\TwigExtension($container->get('router'), $basePath));
    
    return $view;
};

$app->get('/', function ($request, $response, $args) {
    $data=$_SESSION;
    $this->view->render($response, 'home.html',["data"=>$data]);
    return $response;
})->setName('home');

$app->get('/handlers/login', function ($request, $response, $args) {
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        return true;
    }
    $this->view->render($response, 'login.html');
    return $response;
});

$app->post('/handlers/login', function ($request, $response, $args) {
    $User = UsersQuery::create()->findOneByUsername($request->getParam("username"));
    if($User == null){
        return "User does not exist";
    }
    else{
        $PW = $request->getParam("pw");
        $isUser = Users::login($User,$PW);
        if($isUser){
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $User->getUsername();
            $_SESSION['id'] = $User->getId();
            if($User->getAdmin()=="True")
            $_SESSION['admin'] = true;
            $data = array('username'=>$User->getUsername(), 'hash'=>$User->getPasswordHash(),'isuser'=>true);
            $this->view->render($response, 'List.html');
            return $response->withJson($data);
        }
        else{
            $data = array('username'=>"Wrong", 'hash'=>"Wrong",'isuser'=>false);
            $this->view->render($response, 'List.html');
            return $response->withJson($data);
        }
    }
});

$app->get('/{Id}', function($request, $response, $args) {

    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $Senator = AllsenatorsQuery::create()->findPk($args['Id']);
    $Rep = RepublicansQuery::create()->findOneByName($Senator->getName());
    $Ind = IndependentsQuery::create()->findOneByName($Senator->getName());
    $Dem = DemocratsQuery::create()->findOneByName($Senator->getName());
    $Bio = BiographyQuery::create()->findOneById($args['Id']);
    $data=$_SESSION;
    if(!empty($Ind))
        $Party=$Ind;
    if(!empty($Rep))
        $Party=$Rep;
    if(!empty($Dem))
        $Party=$Dem;
    // template rendering, passing data (name variable)
    return $this->view->render($response, "Single.html", [
        "Senator" => $Senator,
        "Party"=> $Party,
        "Bio"=> $Bio,
        "data" => $data
    ]);

    } else {
        $this->view->render($response, 'login.html');
        return $response;
    }

});


$app->get('/sort/Name', function($request, $response, $args) {
    $Senators = AllsenatorsQuery::create()->groupByName();

    $Rep = RepublicansQuery::create()->groupByName();
    $Ind = IndependentsQuery::create()->groupByName();
    $Dem = DemocratsQuery::create()->groupByName();
    

    $this->view->render($response, 'List.html', [
        "Senators" => $Senators,
        "Dem"=> $Dem,
        "Rep"=> $Rep,
        "Ind"=> $Ind
    ]);

    return $response;
})->setName('home');

$app->get('/sort/Party', function($request, $response, $args) {
    $Senators = AllsenatorsQuery::create()->orderByParty();

    $Rep = RepublicansQuery::create()->groupByName();
    $Ind = IndependentsQuery::create()->groupByName();
    $Dem = DemocratsQuery::create()->groupByName();
    

    $this->view->render($response, 'List.html', [
        "Senators" => $Senators,
        "Dem"=> $Dem,
        "Rep"=> $Rep,
        "Ind"=> $Ind
    ]);

    return $response;
})->setName('home');

$app->get('/sort/State', function($request, $response, $args) {
    $Senators = AllsenatorsQuery::create()->orderById();

    $Rep = RepublicansQuery::create()->orderById();
    $Ind = IndependentsQuery::create()->orderById();
    $Dem = DemocratsQuery::create()->orderById();
    

    $this->view->render($response, 'List.html', [
        "Senators" => $Senators,
        "Dem"=> $Dem,
        "Rep"=> $Rep,
        "Ind"=> $Ind
    ]);

    return $response;
})->setName('home');

$app->get('/handlers/senators',function($request,$response,$args){
    $Senators = AllsenatorsQuery::create()->groupByName();

    $Rep = RepublicansQuery::create()->groupByName();
    $Ind = IndependentsQuery::create()->groupByName();
    $Dem = DemocratsQuery::create()->groupByName();
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        $data=$_SESSION;
    }

    $this->view->render($response, 'List.html', [
        "Senators" => $Senators,
        "Dem"=> $Dem,
        "Rep"=> $Rep,
        "Ind"=> $Ind,
        "data" => $data
    ]);
});

$app->post('/handlers/signupconfirm', function ($request, $response, $args) {
    $User = UsersQuery::create()->findOneByUsername($request->getParam("username"));

if($User==null){
    $Usr = new Users();
    $hash = password_hash($request->getParam("pw"),PASSWORD_DEFAULT);
    $Usr->setUsername($request->getParam("username"));
    $Usr->setPasswordHash($hash);
    $Usr->setState($request->getParam("state"));
    $Usr->save();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $Usr->getUsername();
    $_SESSION['id'] = $Usr->getId();
    $data=array("success"=>true);
}
else{
    $data=array("success"=>false);
}
$this->view->render($response, 'signup.html');
    return $response->withJson($data);

});

$app->get('/handlers/signup', function ($request, $response, $args) {
    $this->view->render($response, 'signup.html');
    return $response;
});

$app->get('/handlers/Account', function ($request, $response, $args) {

    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        $data=$_SESSION;
        $User = UsersQuery::create()->findOneById($_SESSION["id"]);
        $this->view->render($response, 'Account.html',["data"=>$data, "User"=>$User]);
        return $response;
    }
    else{
        $this->view->render($response, 'login.html');
        return $response;
    }
});

$app->post('/handlers/changeState', function ($request, $response, $args) {
    $User=UsersQuery::create()->findOneById($request->getParam("user"));
    $User->setState($request->getParam("state"));
    $User->save();
    $data=$User->getState();

    $this->view->render($response, 'Account.html');
    return $response->withJson($data);
});

$app->post('/handlers/changeUName', function ($request, $response, $args) {
    $User=UsersQuery::create()->findOneById($request->getParam("user"));
    $User->setUsername($request->getParam("username"));
    $User->save();
    $data=$User->getUsername();

    $this->view->render($response, 'Account.html');
    return $response->withJson($data);
});

$app->post('/handlers/changePW', function ($request, $response, $args) {
    $User=UsersQuery::create()->findOneById($request->getParam("user"));
    $hash = password_hash($request->getParam("PW"),PASSWORD_DEFAULT);
    $User->setPasswordHash($hash);
    $User->save();

    $this->view->render($response, 'Account.html');
    return $response;
});

$app->get('/handlers/logout', function ($request, $response, $args) {
    session_unset(); 
    session_destroy();  
    $this->view->render($response, 'home.html');
    return $response;
});

$app->get('/handlers/Admin', function ($request, $response, $args) {
    $Users=UsersQuery::create()->find();
            $data=$_SESSION;

    $this->view->render($response, 'admin.html',["Users"=>$Users,"data"=>$data]);
    return $response;
});

$app->post('/handlers/deleteUser', function ($request, $response, $args) {
    $User=UsersQuery::create()->findOneById($request->getParam("user"));
    $User->delete();

    $data=array("success"=>true);

    $this->view->render($response, 'admin.html');
    return $response->withJson($data);
});

$app->post('/handlers/postcomment', function ($request, $response, $args) {
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        if($request->getParam("comment")!=""){
            $C = new Comments();
            $C->setUser($_SESSION['username']);
            $C->setComment($request->getParam("comment"));
            $C->setSenator($request->getParam("senator"));
            $C->save();

            $data = array('success' => true,'user'=> $_SESSION['username'],'comment'=>$request->getParam("comment"));
            $this->view->render($response, 'Single.html');
            return $response->withJson($data);
        }
    }
});

$app->get('/handlers/getall/{ID}', function ($request, $response, $args) {
    $C = CommentsQuery::create()->findBySenator(intval($args['ID']));

    $data=array();
    for($i=0;$i<count($C);$i++){
        array_push($data, array($C[$i]->getUser(),$C[$i]->getComment()));
    }
    
    $this->view->render($response, 'Single.html');
    return $response->withJson($data);
});

$app->run();



?>