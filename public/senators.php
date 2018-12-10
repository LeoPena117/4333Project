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
        return false;
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
    $Participation = ParticipationQuery::create()->findOneById($args['Id']);
    $Stance = KeystancesQuery::create()->findOneById($args['Id']);
    $RE = UpforreelectionQuery::create()->findOneByName($Senator->getName());
   


    if(!empty($RE)){
        $year = "2018";
        $opponent = OpponentsQuery::create()->findOneByOpposingSenator($args['Id']);
    }
    else{
        $NRE = NotUpForReelectionQuery::create()->findOneByName($Senator->getName());
        if($NRE->getParty()=="D"){
            $year = $Dem->getClass();
        }
        else if($NRE->getParty()=="R"){
            $year = $Rep->getClass();
        }
        else if($NRE->getParty()=="I"){
            $year = $Ind->getClass();
        }
        if($year=="Class II"){
            $year = "2020";
        }
        else
            $year="2022";
    }


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
        "Participation" => $Participation,
        "Stance" => $Stance,
        "data" => $data,
        "Opponent" => $opponent,
        "UFE" => $year
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
    $data=$_SESSION;

    $this->view->render($response, 'List.html', [
        "Senators" => $Senators,
        "Dem"=> $Dem,
        "Rep"=> $Rep,
        "Ind"=> $Ind,
        "data" => $data
    ]);

    return $response;
})->setName('home');

$app->get('/sort/Party', function($request, $response, $args) {
    $Senators = AllsenatorsQuery::create()->orderByParty();

    $Rep = RepublicansQuery::create()->groupByName();
    $Ind = IndependentsQuery::create()->groupByName();
    $Dem = DemocratsQuery::create()->groupByName();
    $data=$_SESSION;

    $this->view->render($response, 'List.html', [
        "Senators" => $Senators,
        "Dem"=> $Dem,
        "Rep"=> $Rep,
        "Ind"=> $Ind,
        "data" => $data
    ]);

    return $response;
})->setName('home');

$app->get('/sort/State', function($request, $response, $args) {
    $Senators = AllsenatorsQuery::create()->find()->toArray();

    $all=array();
    foreach($Senators as $val){
        if($val['Party']=="D"){
            $Dem = DemocratsQuery::create()->findOneByName($val['Name']);
            $val['state'] = $Dem->getState();
            array_push($all, $val);
        }
        if($val['Party']=="R"){
            $Rep = RepublicansQuery::create()->findOneByName($val['Name']);
            $val['state'] = $Rep->getState();
            array_push($all, $val);
        }
        if($val['Party']=="I"){
            $Ind = IndependentsQuery::create()->findOneByName($val['Name']);
            $val['state'] = $Ind->getState();
            array_push($all, $val);
        }
    }
    
    foreach ($all as $key => $row) {
        $state[$key] = $row['state'];
    }

    array_multisort($state, SORT_ASC, $all);
    $data=$_SESSION;


$Rep = RepublicansQuery::create()->groupByName();
    $Ind = IndependentsQuery::create()->groupByName();
    $Dem = DemocratsQuery::create()->groupByName();

    $this->view->render($response, 'List.html', [
        "Senators" => $all,
        "Dem"=> $Dem,
        "Rep"=> $Rep,
        "Ind"=> $Ind,
        "data" => $data
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
    $TestUser = UsersQuery::create()->findOneByUsername($request->getParam("username"));

    if($TestUser==null){
        $User=UsersQuery::create()->findOneById($request->getParam("user"));
        $User->setUsername($request->getParam("username"));
        $User->save();
        $data=$User->getUsername();
        $_SESSION['username'] = $User->getUsername();
    }
    else{
        $data=array("success"=>false);
    }
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
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $Users=UsersQuery::create()->find();
            $data=$_SESSION;

    $this->view->render($response, 'admin.html',["Users"=>$Users,"data"=>$data]);
    return $response;
}
});

$app->post('/handlers/deleteUser', function ($request, $response, $args) {
    $User=UsersQuery::create()->findOneById($request->getParam("user"));
    $User->delete();

    $data=array("success"=>true,"user"=>$request->getParam("user"));

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
            $data = array('success' => true,'user'=> $_SESSION['username'],'comment'=>$request->getParam("comment"),'ID'=>$C->getID());
            $this->view->render($response, 'Single.html');
            return $response->withJson($data);
        }
    }
});

$app->get('/handlers/getall/{ID}', function ($request, $response, $args) {
    $C = CommentsQuery::create()->findBySenator(intval($args['ID']));

    $data=array();
    for($i=0;$i<count($C);$i++){
        array_push($data, array($C[$i]->getUser(),$C[$i]->getComment(),$C[$i]->getID()));
    }
    
    $this->view->render($response, 'Single.html');
    return $response->withJson($data);
});
$app->post('/handlers/promote', function ($request, $response, $args) {
    $User=UsersQuery::create()->findOneById($request->getParam("user"));
    if($User->getAdmin()!="True"){
        $User->setAdmin("True");
        $User->save();

        $data=array("success"=>true);

        $this->view->render($response, 'admin.html');
        return $response->withJson($data);
    }
});

$app->post('/handlers/deleteComment', function ($request, $response, $args) {
    $C = CommentsQuery::create()->findOneByID(intval($request->getParam('comment')));
    $C->delete();
    $data=array("success"=>true);

    $this->view->render($response, 'Single.html');
    return $response->withJson($data);
});

$app->get('/handlers/search', function ($request, $response, $args) {
    $Senators = AllsenatorsQuery::create()->findByName($request->getParam('senator'));
    
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

$app->run();



?>