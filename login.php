<?php
SESSION_START();
include("./securite/cnx.php");
if(isset($_SESSION["id_user"]) && $_SESSION["id_user"] != null){
    header("location: ./dashboard/index.php");
}
$mes="";
if(isset($_POST["login"])){
    $email=$_POST["email_log"];
    $password=$_POST["password_log"];

    $req_log="SELECT * FROM users WHERE email ='$email' AND password= '$password' LIMIT 1";
    $res_log=mysqli_query($cnx,$req_log);
    $data_log=mysqli_fetch_array($res_log);

    if(isset($data_log['id']) && $data_log['id'] != null){
        $_SESSION['id_user'] = $data_log['id'];
        $_SESSION['nom_user'] = $data_log['nom'];
        $_SESSION['email_user'] = $data_log['email'];
        $_SESSION['role']= $data_log['role'];

        header("location: ./dashboard/index.php");
    }else{
        $mes="Email Or Password Is Incorrect !";
    }
}
?>

<!DOCTYPE html>
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="./dist/images/logo.svg" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Midone Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>Login </title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="./dist/css/app.css" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="login">
        <div class="container sm:px-10">
            <div class="block xl:grid grid-cols-2 gap-4">
                <!-- BEGIN: Login Info -->
                <div class="hidden xl:flex flex-col min-h-screen">
                    <a href="" class="-intro-x flex items-center pt-5">
                        <img alt="Midone - HTML Admin Template" class="w-6" src="./dist/images/logo.svg">
                        <span class="text-white text-lg ml-3"> Rubick </span> 
                    </a>
                    <div class="my-auto">
                        <img alt="Midone - HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="./dist/images/illustration.svg">
                        <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                            A few more clicks to 
                            <br>
                            sign in to your account.
                        </div>
                        <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400">Manage all your e-commerce accounts in one place</div>
                    </div>
                </div>
                <!-- END: Login Info -->
                <!-- BEGIN: Login Form -->
                <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                    <form method="post" class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                        <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center ">
                            Sign In
                        </h2> 
                        <div class="intro-x mt-8">
                            <h3 style="color:red;" class="text-center"><?php echo $mes; ?> <h3>
                            <input type="email" class="intro-x login__input form-control py-3 px-4 block" placeholder="Email" name="email_log">
                            <input type="password" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Password" name="password_log">
                        </div>
                        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                            <button type="submit" class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top" name="login">Login</button>
                            <a href="./register.php" class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top">Register</a>
                        </div>
                    </form>
                </div>
                <!-- END: Login Form -->
            </div>
        </div>        
        <!-- BEGIN: JS Assets-->
        <script src="./dist/js/app.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- END: JS Assets-->
    </body>
</html>