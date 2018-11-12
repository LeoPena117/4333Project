<?php
require '../vendor/autoload.php';
require '../generated-conf/config.php';

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


$app->get('/{Id}', function($request, $response, $args) {

    // access named argument from path
    $Senator = AllsenatorsQuery::create()->findPk($args['Id']);
    $Rep = RepublicansQuery::create()->findOneByName($Senator->getName());
    $Ind = IndependentsQuery::create()->findOneByName($Senator->getName());
    $Dem = DemocratsQuery::create()->findOneByName($Senator->getName());
    $Bio = BiographyQuery::create()->findOneById($args['Id']);
    
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
        "Bio"=> $Bio
    ]);

});

$app->get('/', function ($request, $response, $args) {
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



$app->get('/handlers/shuffle_steps/{RID}/{SID1}/{SID2}',
    function($request,$response,$args){
        $Recipe = StepsQuery::create()->findByRecipeId($args['RID']);
        if($args['SID2']>$args['SID1']){
            for ($i=count($Recipe)-1;$i>=0;$i--){
                if($Recipe[$i]->getStepNumber()==$args['SID2']){
                    $original = $Recipe[$i]->getDescription();
                    for(;$i>=0;$i--){
                        if($Recipe[$i]->getStepNumber()==$args['SID1']){
                            $Recipe[$i]->setDescription($original);
                            break;
                        }
                        $hold=$Recipe[$i]->getDescription();
                        $Recipe[$i]->setDescription($Recipe[$i-1]->getDescription());
                        
                    }
                }
            }
        }
        else if($args['SID1']>$args['SID2']){
              for ($i=0;$i<=count($Recipe)-1;$i++){
                if($Recipe[$i]->getStepNumber()==$args['SID2']){
                    $original = $Recipe[$i]->getDescription();
                    for(;$i<=count($Recipe)-1;$i++){
                        if($Recipe[$i]->getStepNumber()==$args['SID1']){
                            $Recipe[$i]->setDescription($original);
                            break;
                        }
                        $hold=$Recipe[$i]->getDescription();
                        $Recipe[$i]->setDescription($Recipe[$i+1]->getDescription());
                    }
                }
            }
        }
        $Recipe->save();
    });

$app->get('/handlers/add_step/{RID}/{SID}/{Step}',
    function($request,$response,$args){
        $Step = new Steps();
        $Step->setStepNumber($args['SID']);
        $Step->setDescription($args['Step']);
        $Step->setRecipeId($args['RID']);
        $Step->save();
    });


$app->run();



?>