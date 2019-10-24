<?php 
$router = ["domain"=>"localhost/MVC"];
if(!empty($_GET["url"])){
    require_once "./mvc/Bridge.php";
    $myapp = new App();
}

?>