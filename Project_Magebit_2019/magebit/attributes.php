<?php include "includes/db.php"; ?>
<?php include "functions.php"; ?>
<?php include "includes/navigation_header.php"; ?>

<?php session_start(); 

if (!isset($_SESSION['user_email'])) {
  	header("Location: index.php");
  }
  

?>


    <div id="wrapper">

<?php include "includes/navigation.php"; ?>





        <div id="page-wrapper">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">


                        <h1 class="page-header">
                            Welcome to Attributes
                            <small><?php echo $_SESSION['user_name']; ?></small>
                        </h1>


                        <div class="col-xs-3">
                        
<?php insertAttributes(); ?>


                        <form action=""method="post">
                            <div class="form-group">
                            <label for="value">User</label>
                                <input type="text" class="form-control" name="user" value="<?php echo $_SESSION['user_name'];?> ">
                            </div>
                            <label for="category">Category</label>
                                <input type="text" class="form-control" name="category">
                            
                            <div class="form-group">
                            <label for="value">Value</label>
                                <input type="text" class="form-control" name="value">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="submit" value="Add Attribute">
                            </div>
                        </form>

                        </div>



                        <div class="col-xs-12">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Record ID</th>
                                    <th>User</th>
                                    <th>Category</th>
                                    <th>Value</th>

                                </tr>
                            </thead>
                            <tbody>


<?php findAllAttributes(); ?>




                                
                            </tbody>
                        </table>


                        
                        </div>
                       
                    </div>
                </div>

            </div>

        </div>

<?php include "includes/footer.php"; ?>

