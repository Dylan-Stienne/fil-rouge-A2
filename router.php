

<?php

use App\Controller\ProfilController;
use App\Controller\CreateSurveyController;
use App\Controller\Error404Controller;
use App\Controller\HomeController;
use App\Controller\RegisterController;
use App\Controller\LoginController;
use App\Controller\FriendsController;
use App\Controller\SurveyController;
use App\Controller\ResultatController;

if (array_key_exists("page", $_GET)) {

    switch ($_GET["page"]) {
        case 'profil':
            $controller = new ProfilController();
            $controller->render();
            break;
        case 'new':
            $controller = new CreateSurveyController();
            $controller->render();
            break;
        case 'friends':
            $controller = new FriendsController();
            $controller->render();
            break;
        case 'survey':
            $controller = new SurveyController();
            $controller->render();
            break;
        case 'result':
            $controller = new ResultatController();
            $controller->render();
            break;
        default:
            $controller = new Error404Controller();
            $controller->render();
            break;
    }
} else if (array_key_exists("action", $_GET)) {
    switch ($_GET["action"]) {
        case 'register':
            $controller = new RegisterController();
            $controller->createUser($_POST);
            break;
        case 'log-in':
            $controller = new LoginController();
            $controller->login($_POST);
            break;
        case 'log-out':
            $controller = new LoginController();
            $controller->logOut();
            break;
        case 'search-user':
            $controller = new FriendsController();
            $controller->searchUser($_POST);
            break;
        case 'get-friends':
            $controller = new FriendsController();
            $controller->getFriends($_POST);
            break;
        case 'get-my-infos':
            $controller = new ProfilController();
            $controller->getMyInfos();
            break;
        case 'update-my-infos':
            $controller = new ProfilController();
            $controller->updateMyInfos($_POST);
            break;
        case 'add-friend':
            $controller = new FriendsController();
            $controller->addFriend($_POST);
            break;
        case 'remove-friend':
            $controller = new FriendsController();
            $controller->removeFriend($_POST);
            break;
        case 'create-survey':
            $controller = new CreateSurveyController();
            $controller->saveSurvey($_POST);
            break;
        case 'find-surveys':
            $controller = new HomeController();
            $controller->findSurveys($_POST);
            break;
        case 'get-friends-surveys':
            $controller = new HomeController();
            $controller->getFriendsSurveys();
            break;
        case 'get-my-surveys':
            $controller = new HomeController();
            $controller->getMySurveys();
            break;
        case 'get-surveys-categories':
            $controller = new HomeController();
            $controller->getSurveysCategories();
            break;
        case 'get-survey':
            $controller = new SurveyController();
            $controller->getSurvey($_GET);
            break;
        case 'get-result':
            $controller = new ResultatController();
            $controller->getResult($_GET);
            break;
        case 'save-vote':
            $controller = new SurveyController();
            $controller->saveVote($_POST);
            break;
        default:
            break;
    }
} else {
    $controller = new HomeController();
    $controller->render();
}
