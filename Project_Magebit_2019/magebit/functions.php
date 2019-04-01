<?php 

function confirmQuery($result) {
    global $connection;

if(!$result) {
    die("QUERY FAILED" . mysqli_error($connection));
    }
}




function register_user() {

global $connection;

    if(isset($_POST['signup'])) {
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    
        if(!empty($username) && !empty($email) && !empty($password)) {
            $username = mysqli_real_escape_string($connection, $username);
            $email = mysqli_real_escape_string($connection, $email);
            $password = mysqli_real_escape_string($connection, $password);
    
            
    
            $query = "INSERT INTO users (user_name, user_email, user_password) ";
            $query .= "VALUES ('{$username}','{$email}','{$password}')";
            $register_user_query = mysqli_query($connection, $query);
            if(!$register_user_query) {
                die("REGISTRATION QUERY FAILED" . mysqli_error($connection) . ' ' . mysqli_errno($connection));
            }
            $message = "Your registration has been submitted";
            echo "<script type='text/javascript'>alert('$message');</script>";
    
    
        } else { 
            $message = "Fields cannot be empty";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    
    
    
    
    } else {
        $message = "";
    }
    


}






function insertAttributes() {

    global $connection;

    if (isset($_POST['submit'])) {

        $user = $_POST['user'];
        $category = $_POST['category'];
        $value = $_POST['value'];

    
        if($user == "" || empty($user) && $category == "" || empty($category) && $value == "" || empty($value)) {
    
            echo "These fields should not be empty";
    
        } else {
    
              $query = "INSERT INTO attributes (user, category, value) ";  
              $query .= "VALUE ('{$user}', '{$category}', '{$value}' )";
    
              $create_attribute_query = mysqli_query($connection, $query);
    
              if(!$create_attribute_query) {
    
                die('QUERY FAILED' . mysqli_error($connection));
              }
        }
    
    }



}




function findAllAttributes() {
global $connection;

    if (isset($_SESSION['user_name'])) {
        $the_user_name = $_SESSION['user_name'];
    }


    $query = "SELECT * FROM attributes WHERE user = '{$the_user_name}' ";
    $select_attributes =  mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($select_attributes)) {
    $record_id = $row['record_id'];
    $user = $row['user'];
    $category = $row['category'];
    $value = $row['value'];


    echo "<tr>";
    echo "<td>{$record_id}</td>";
    echo "<td>{$user}</td>";
    echo "<td>{$category}</td>";
    echo "<td>{$value}</td>";
    echo "</tr>";
    }


}








?>