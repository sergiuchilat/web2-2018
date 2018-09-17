<?
//error_reporting(E_ALL);
session_start();
require_once 'config.php';
require_once 'functions.php';
dbConnect();


/*костыль*/
if ($_GET['module'] === 'auth' && $_GET['action'] === 'logout'){
    session_start();
    unset($_SESSION);
}
/*костыль*/

if(!empty($_POST['username']) && !empty($_POST['password'])){
    $_SESSION['userAuthorised'] = (
        $_POST['username'] === $APP['admin_panel_access']['username']
        &&
        $_POST['password'] === $APP['admin_panel_access']['password']
    );
}
?>
<!doctype html>
<html>
<head>
    <title></title>
</head>
<body>
    <?
    if($_SESSION['userAuthorised'])
        include 'pages/blocks/menu.php';
    else
        include 'pages/auth/login.php';
    ?>
    <hr>
    <?

    $module = $_GET['module'] ?: 'default';
    $action = $_GET['action'] ?: 'home';

    if($_SESSION['userAuthorised']){
        if(file_exists("pages/{$module}/{$action}.php"))
            include "pages/{$module}/{$action}.php";
        else
            include "pages/error/404.php";
    }else{
        include 'pages/error/403.php';
    }
    ?>
</body>
</html>