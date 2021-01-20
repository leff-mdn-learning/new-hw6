<?php


namespace AYakovlev\Controller;


use AYakovlev\Core\View;
use AYakovlev\Exception\DbException;
use AYakovlev\Exception\InvalidArgumentException;
use AYakovlev\Model\User;

class UsersController
{
    private View $view;

    public function __construct()
    {
        $this->view = new View();
    }
    /** use register function!
    public function signUp()
    {
        echo "Здесь будет регистрация для ползователей";
    }
    */
    public function register()
    {
        if (!empty($_POST)) {
            try {
                $user = User::register($_POST);
            } catch (InvalidArgumentException $e) {
                View::render('register', ['error' => $e->getMessage()]);
                return;
            } catch (DbException $e) {
                View::render('register', ['error' => $e->getMessage()]);
                return;
            }

            if ($user instanceof User) {
                View::render('registerSuccessful');
                return;
            }
        }

        View::render('register');
    }
}
