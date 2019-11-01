<?php 


class LoginController {

    public function autenticar() {

        $response_array['status'] = 'error';
        if(isset($_POST['login']) && isset($_POST['senha'])) {
            $user = $_POST['login'];        
            $senha = $_POST['senha'];
            if($user == 'admin' && $senha == 'admin') {
                session_start();
                $_SESSION['login'] = $user;
                $_SESSION['senha'] = $senha;
                $response_array['status'] = 'sucess';
            }
        }
        else {
            unset($_SESSION['login']);
            unset($_SESSION['senha']);
        }
        header('Content-type: application/json');
        echo json_encode($response_array);
    }

    public function logout() {
        session_start();
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        session_destroy();
        header('location:../login.php');
    }

}

$loginController = new LoginController();
if($_GET['action'] == 'autenticar') {
    $loginController->autenticar();
}
else if($_GET['action'] == 'logout') {
    $loginController->logout();
}

?>