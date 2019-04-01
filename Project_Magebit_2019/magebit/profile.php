<?php include "includes/db.php"; ?>
<?php include "includes/navigation_header.php"; ?>
<?php include "functions.php"; ?>



<?php session_start(); 

if (!isset($_SESSION['user_email'])) {
  	header("Location: index.php");
  }
  
?>






<?php

if(isset($_SESSION['user_email'])) {


    $the_user_email = $_SESSION['user_email'];
    $query = "SELECT * FROM users WHERE user_email = '{$the_user_email}' ";
    $select_user_profile_query = mysqli_query($connection, $query);


    while($row = mysqli_fetch_assoc($select_user_profile_query)) {

        $user_id = $row['user_id'];
        $user_name = $row['user_name'];
        $user_email = $row['user_email'];
        $user_password = $row['user_password'];
        
    }
 
}

?>






<?php 

if(isset($_POST['update_password'])) {

    global $connection;

   
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];

   
    $query = "UPDATE users SET ";
    $query .="user_name = '{$user_name}', ";
    $query .="user_email = '{$user_email}', ";
    $query .="user_password = '{$user_password}' ";
    $query .="WHERE user_email = '{$user_email}'";

    $edit_user_query = mysqli_query($connection, $query);

    confirmQuery($edit_user_query);

}

?>








<div id="wrapper">



<?php include "includes/navigation.php"; ?>



<div id="page-wrapper">

    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">

            <h1 class="page-header">
                    Welcome to Profile
                    <small><?php echo $_SESSION['user_name']; ?></small>

                </h1>




            <form action="" method="post" enctype="multipart/form-data">


            <div class="form-group">
                    <label for="title">Full Name</label>
                    <input type="text" class="form-control" value="<?php echo $user_name; ?>" 
                    name="user_name">    
                </div>

                <div class="form-group">
                    <label for="post_status">Email</label>
                    <input type="email" class="form-control" value="<?php echo $user_email; ?>" name="user_email">    
                </div>
                </select>
            </div>

                <div class="form-group">
                    <label for="post_content">Password</label>
                    <input type="password" class="form-control" value="<?php echo $user_password; ?>" name="user_password">    
                </div>

                <div class="form-group">
                    <input class="btn btn-primary" type="submit" name="update_password" value="Update Password">
                </div>

            </form>
        
            </div>
        </div>

    </div>


</div>


<?php include "includes/footer.php"; ?>

