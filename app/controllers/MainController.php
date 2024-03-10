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
<?php

namespace app\controllers;
use app\core\Controller;
use app\models\User;

    //an example is in app/controllers/UsersController
    public function index()
    {
        $userModel = new User();
        //the load method will start at the public/assets/views directory
        //you can view the set up in the app/core/Controller class
        $template = $this->twig->load('users/users.twig');
        $homepageData = [
            'users' => $userModel->getAllUsers(),
        ];
        echo $template->render($homepageData);
    }

}

    public function notFound() {
        //todo create a 404 twig template in app/public/assets/views
        //and return it from this method
        return index(); 
    }

}
