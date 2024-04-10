<?php session_start();
include_once('includes/config.php');
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{
//Code for Updation 
if(isset($_POST['update']))
{
    $intake=$_POST['intake'];
    $fullName=$_POST['fullName'];
    $nameWithInitials=$_POST['nameWithInitials'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $contact=$_POST['contact'];
$userid=$_GET['uid'];
    $msg=mysqli_query($con,"update users set fname='$fname',lname='$lname',contactno='$contact',fullName='$fullName',nameWithInitials='$nameWithInitials',intake='$intake' where id='$userid'");

if($msg)
{
    echo "<script>alert('Profile updated successfully');</script>";
       echo "<script type='text/javascript'> document.location = 'manage-users.php'; </script>";
}
}


    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Edit Profile | Registration and Login System</title>
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
// $query=mysqli_query($con,"select * from users where id='$userid'");
$query=mysqli_query($con,"select *,intake.intake as intakeCol,intake.id as intakeId  from users  left join intake  on users.intake=intake.id where users.id='$userid'");



// -- $sql = "SELECT * FROM users LEFT JOIN intake ON users.intake=intake.id WHERE users.id=$id";


while($result=mysqli_fetch_array($query))
{?>
                        <h1 class="mt-4"><?php echo $result['fname'];?>'s Profile</h1>
                        <div class="card mb-4">
                     <form method="post">
                            <div class="card-body">
                                <table class="table table-bordered">
                                   <tr>
                                    <th>Full Name</th>
                                       <td><input class="form-control" id="fullName" name="fullName" type="text" value="<?php echo $result['fullName'];?>" required /></td>
                                   </tr>
                                   <tr>
                                    <th>Name with Initials</th>
                                       <td><input class="form-control" id="nameWithInitials" name="nameWithInitials" type="text" value="<?php echo $result['nameWithInitials'];?>" required /></td>
                                   </tr>
                                   <tr>
                                    <th>Intake</th>
                                       <td>


                                  <!--       <input class="form-control" id="intake" name="intake" type="text" value="<?php echo $result['intake'];?>" required />

 -->

<select  class="form-control" id="intake" name="intake" type="text" value="<?php echo $result['intakeCol'];?>"  >
 <?php $ret=mysqli_query($con,"select * from intake ");
                              while($row=mysqli_fetch_array($ret))
                                if ($row['id']===$result['intakeId']) {
                                  ?>
                                  <option value="<?php echo $row['id']?>"><?php echo $row['intake'];?></option>
                                  <?php
                                }
                              ?>
 <?php $ret=mysqli_query($con,"select * from intake");
                              while($row=mysqli_fetch_array($ret))
                                if ($row['id']!==$result['intakeId']) {
                                  ?>
                                  <option value="<?php echo $row['id']?>"><?php echo $row['intake'];?></option>
                                  <?php
                                }
                              ?>

</select>









                                      </td>
                                   </tr>
                                   <tr>
                                    <th>First Name</th>
                                       <td><input class="form-control" id="fname" name="fname" type="text" value="<?php echo $result['fname'];?>" required /></td>
                                   </tr>
                                   <tr>
                                       <th>Last Name</th>
                                       <td><input class="form-control" id="lname" name="lname" type="text" value="<?php echo $result['lname'];?>"  required /></td>
                                   </tr>
                                         <tr>
                                       <th>Contact No.</th>
                                       <td colspan="3"><input class="form-control" id="contact" name="contact" type="text" value="<?php echo $result['contactno'];?>"  pattern="[0-9]{10}" title="10 numeric characters only"  maxlength="10" required /></td>
                                   </tr>
                                   <tr>
                                       <th>Email</th>
                                       <td colspan="3"><?php echo $result['email'];?></td>
                                   </tr>
                               
                                     
                                        <tr>
                                       <th>Reg. Date</th>
                                       <td colspan="3"><?php echo $result['posting_date'];?></td>
                                   </tr>
                                   <tr>
                                       <td colspan="4" style="text-align:center ;"><button type="submit" class="btn btn-primary btn-block" name="update">Update</button></td>

                                   </tr>
                                    </tbody>
                                </table>
                            </div>
                            </form>
                        </div>
<?php } ?>

                    </div>
                </main>
            </div>
        </div>
      
    </body>
</html>
<?php } ?>
