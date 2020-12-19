<?php

namespace App\Controller;

use App\Model\HomeModel;

class HomeController
{

    public function __construct()
    {
        $this->model = new HomeModel();
    }

    /**
     * Call to get user friends surveys
     */
    function getFriendsSurveys()
    {
        $this->model->getFriendsSurveys();
    }

    /**
     * Call to get user my surveys
     */
    function getMySurveys()
    {
        $this->model->getMySurveys();
    }

    /**
     * Call to find surveys
     */
    function findSurveys($datas)
    {
        if (array_key_exists('searching', $datas)) {
            $this->model->findSurveys(
                htmlspecialchars($datas['searching'])
            );
        }
    }

    /**
     * Call to get surveys categories
     */
    function getSurveysCategories()
    {
        $this->model->getSurveysCategories();
    }

    /**
     * Call to render the view
     */
    public function render()
    {
        require ROOT . "/App/View/homeView.php";
    }
}
