<?php

namespace app\controllers;
use app\core\Controller;
use app\models\Post;

class MainController extends Controller
{

    public function homepage()
    {
        $template = $this->twig->load('main/homepage.twig');
        $homepageData = [
            'title' => 'Homepage Title',
        ];

        echo $template->render($homepageData);
    }


    public function notFound() {
        //todo create a 404 twig template in app/public/assets/views
        //and return it from this method
        //an example is in app/controllers/UsersController
         $template = $this->twig->load('404/error404template.twig');
        $ErrorData = [
            'title' => '404 Not Found',
        ];

        echo $template->render($ErrorData);
    }

}
