<?php ob_start(); ?>

<?php include "includes/db.php"; ?>
<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>
<?php session_start(); ?>


<?php 
if(isset($_POST['login'])) {

$email = $_POST['email'];
$password = $_POST['password'];

$email = mysqli_real_escape_string($connection, $email);
$password = mysqli_real_escape_string($connection, $password);


$query = "SELECT * FROM users WHERE user_email = '{$email}' ";
$select_user_query = mysqli_query($connection, $query);
if(!$select_user_query) {
    die("LOGIN QUERY FAILED" . mysqli_error($connection));
}


while ($row = mysqli_fetch_array($select_user_query)) {

    $db_user_id = $row['user_id'];
    $db_user_name = $row['user_name'];
    $db_user_email = $row['user_email'];
    $db_user_password = $row['user_password'];
}



if(($db_user_email === $email) && ($db_user_password === $password)) {
   
    $_SESSION['user_id'] = $db_user_id;
    $_SESSION['user_name'] = $db_user_name;
    $_SESSION['user_email'] = $db_user_email;
    $_SESSION['user_password'] = $db_user_password;
    
    
    header("Location: profile.php");


} else {
    $message = "Incorrect email or password";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header("Location: index.php");

}



}

?>




<?php register_user(); ?>





    <form action="index.php" method="POST">
    <div class="container-fluid">
        <div class="bg">
            <div class="row">
                <div class="col box">
                    <p class="dont">Don’t have an account?</p>
                    <p class="line-under"></p>
                    <p class="text-rows">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.</p>
                    <p>
                        <span>
                            <button class="btn btn-outline-primary" type="button" id="button-sign-up" onclick="showhide('toggle1');"><span
                                    class="sign-up">sign up</span></button>
                        </span>
                    </p>
                </div>

                <div class="col box">
                    <p class="dont">Have an account?</p>
                    <p class="line-under"></p>
                    <p class="text-rows">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <p> <button class="btn btn-outline-primary" type="button" id="button-login" onclick="showhide('toggle2');"><span
                                class="sign-up">login</span></button></p>
                </div>
            </div>
        </div>

        <div class="bg2" id="slider">
            <div class="row">
                <div class="col box " id="hider">
                    <p class="first-up">
                        <span class="login to-change">Login</span>
                        <span class="logo"><img src="images\logo.png" alt=""></span></p>
                    <p class="line-under" id="adding"></p>

                    <p class="user">
                        <span class="email-password">Name<span class="star">*</span></span>
                        <span class="ic-lock"><img class="img-user" src="images\ic_user.png" alt=""></span>
                    <input type="text" name="fullname" class="form-control"  aria-describedby="inputGroup-sizing-sm">
                       </p> 

                    <p class="">
                        <span class="email-password">Email<span class="star">*</span></span>
                        <span class="ic-mail"><img src="images\ic_mail.png" alt=""></span>
                        <input type="text" name="email" class="form-control"  aria-describedby="inputGroup-sizing-sm" required>
                        </p> 

                    <p class="">
                        <span class="email-password">Password<span class="star">*</span></span>
                        <span class="ic-lock"><img src="images\ic_lock.png" alt=""></span>
                        <input type="password" name="password" class="form-control"  aria-describedby="inputGroup-sizing-sm" required>
                        </p> 

                    <div class="hide" id="toggle1" style="display:none">
                        <button class="btn btn-warning button-form" type="submit"  name="signup" value="Submit" >
                        <span class="sign-up" id="main-changer">sign up</span></button>
                        <span class="forgot to-hide">Forgot?</span></div>
                    <div class="hide" id="toggle2" style="">
                        <button class="btn btn-warning button-form" type="submit"  name="login" value="Submit" >
                        <span class="sign-up" id="">login</span></button>
                        <span class="forgot to-hid">Forgot?</span></div>

                </div>
            </div>
        </div>
    
<script>
        function showhide(id) {
    var divid = document.getElementById(id);
    var divs = document.getElementsByClassName('hide');
    var showElement = true;
    if (divid.style.display === 'block') {
        showElement = false;
    }
    for (var i = 0; i < divs.length; i++) {
        divs[i].style.display = 'none';
    }
    if (showElement) {
        divid.style.display = 'block';
    }
    return false;
}
        
</script>

<?php include "includes/footer.php"; ?>
