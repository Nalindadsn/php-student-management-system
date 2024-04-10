<?php session_start();
include_once('includes/config.php');
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>User Profile | Registration and Login System</title>
                <link rel="stylesheet" type="text/css" href="css/style.css">

    </head>
    <body class="sb-nav-fixed">
      
        <div id="layoutSidenav">
          <?php include_once('includes/navbar.php');?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        
<?php 
$userid=$_GET['uid'];
$query=mysqli_query($con,"select *,intake.intake as year,users.id as id  from users  left join intake  on users.intake=intake.id where users.id='$userid'");
while($result=mysqli_fetch_array($query))
{?>
                        <h1 class="mt-4"><?php echo $result['fname'];?>'s Profile</h1>
                        <div class="card mb-4">
                     
                            <div class="card-body">
                                <a href="edit-profile.php?uid=<?php echo $result['id'];?>">Edit</a>
                                <table class="table table-bordered">
                                   <tr>
                                    <th>Full Name</th>
                                       <td><?php echo $result['fullName'];?></td>
                                   </tr>
                                   <tr>
                                    <th> Name with Initials</th>
                                       <td><?php echo $result['nameWithInitials'];?></td>
                                   </tr>
                                   <tr>
                                    <th>Intake</th>
                                       <td><?php echo $result['intake'];?></td>
                                   </tr>
                                   <tr>
                                    <th>First Name</th>
                                       <td><?php echo $result['fname'];?></td>
                                   </tr>
                                   <tr>
                                       <th>Last Name</th>
                                       <td><?php echo $result['lname'];?></td>
                                   </tr>
                                   <tr>
                                       <th>Email</th>
                                       <td colspan="3"><?php echo $result['email'];?></td>
                                   </tr>
                                     <tr>
                                       <th>Contact No.</th>
                                       <td colspan="3"><?php echo $result['contactno'];?></td>
                                   </tr>
                                     
                                        <tr>
                                       <th>Reg. Date</th>
                                       <td colspan="3"><?php echo $result['posting_date'];?></td>
                                   </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
<?php } ?>

                    </div>
                </main>
            </div>
        </div>
       
    </body>
</html>
<?php } ?>
