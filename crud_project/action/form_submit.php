
<?php
    require_once dirname(__DIR__)."/layout/user/header.php";

    if(isset($_POST["submit"]) && !empty($_POST["submit"])){
        $email = Filter_data($_POST["email"]);
        $pass = Filter_data($_POST["password"]);
    }
?>


<?php
    require_once dirname(__DIR__)."/layout/user/footer.php";

?>