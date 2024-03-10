<?php

namespace app\controllers;
use app\core\Controller;
class PostController extends Controller
{
//todo make a method to return some posts, post objects should come from the post model class
//also need to make a twig template to show the posts
//an example is in app/controllers/UsersController
<?php

namespace app\controllers;
use app\core\Controller;
use app\models\User;

<?php

namespace app\models;


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
        echo $Post;
    }

}


