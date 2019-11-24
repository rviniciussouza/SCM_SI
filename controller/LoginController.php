<?php 


class LoginController {

    public function autenticar() {

        if(isset($_POST['login']) && isset($_POST['senha'])) {
            $token = "acc63bae8cc4";
            $dados = 'login=' . $_POST['login'] . '&senha=' . $_POST['senha'] . '&token=' . $token;
            $handler = curl_init('http://crm-si.herokuapp.com/service/checkget.php/?'.$dados);
            curl_setopt($handler, CURLOPT_RETURNTRANSFER, true);            
            $response_array = json_decode(curl_exec($handler), true);
            if($response_array['success'] == true) {
                session_start();
                $_SESSION['login'] = $_POST['login'];
                $_SESSION['senha'] = $_POST['senha'];;
            }   
            curl_close($handler);
            header('Content-type: application/json');
            echo json_encode($response_array);
        }
        else {
            unset($_SESSION['login']);
            unset($_SESSION['senha']);
        }
        
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