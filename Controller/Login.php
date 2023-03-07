<?php
namespace App\Controller;

use App\Helper\Functions;
use App\Helper\Profiles;
use App\Helper\View;
use App\Model\User;

class Login extends Controller
{

    function action_list() {

        $login_error = Functions::parameters('login_error', 0);
        $register_error = Functions::parameters('register_error', 0);
        $register = Functions::parameters('register', 0);

        $this->view = new View(VIEWS_PATH . '/LoginList.php', [
            'login_error' => $login_error,
            'register_error' => $register_error,
        ]);
    }

    function action_in() {

        $admin_uniq_id = filter_var(Functions::parameters('admin_uniq_id', ''),FILTER_SANITIZE_STRING);
        $admin_password = filter_var(Functions::parameters('admin_password', ''),FILTER_SANITIZE_STRING);

        $user = User::obtainUniqId($admin_uniq_id);

        if (password_verify($admin_password, $user->password)) {
            $_SESSION['user_id'] = $user->id;
            $_SESSION['user_name'] = $user->name;
            $_SESSION['user_profile'] =$user->profile;
            /* header('Location: ?c=home&a=list'); */
            header('Location: ?c=video&a=list');
            exit;
        }
        $this->view = new View(VIEWS_PATH . '/LoginList.php', [
            'login_error' => true
        ]);
    }

    function action_register() {

        $check_in_uniq_id = filter_var(Functions::parameters('check_in_uniq_id', ''),FILTER_SANITIZE_STRING);
        $check_in_password = filter_var(Functions::parameters('check_in_password', ''),FILTER_SANITIZE_STRING);
        $check_in_profile = filter_var(Functions::parameters('check_in_profile', 1),FILTER_SANITIZE_STRING);

        $user = User::obtainUniqId($check_in_uniq_id);

        if (empty($user->id)) {
            $user->name = 'admin';
            $user->uniq_id = $check_in_uniq_id;
            $user->password = password_hash($check_in_password, PASSWORD_DEFAULT);
            $user->profile = $check_in_profile;
            $user->insert();
            header('Location: ?c=login&a=list&register=1');
            exit;
        }

        $this->view = new View(VIEWS_PATH . '/LoginList.php', [
            'register_error' => true
        ]);

    }


    function action_out() {
        unset($_SESSION);
        session_destroy();
        header('Location: ?c=login&a=list');
        exit;
    }
}