<?php
$AdminEmail = "b211210387@sakarya.edu.tr";
$AdminSifre = "b211210387";

if($_POST)
{
    $email = $_POST['uname'];
    $sifre = $_POST['psw'];

    if($email == $AdminEmail and $sifre == $AdminSifre)
    {
        echo "Hoşgeldiniz b211210387";
    }

    else
    {
        $url = "login.html";

        // Yönlendirme işlemi
        header("Location: " . $url);
        exit();
    }
}
?>



