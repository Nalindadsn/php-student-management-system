<?php session_start();
include_once('includes/config.php');
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{


//Code for Registration 
if(isset($_POST['submit']))
{

    $intake=$_POST['intake'];
    $msg=mysqli_query($con,"insert into intake(intake) values('$intake')");

if($msg)
{
    echo "<script>alert('Intake Created');</script>";
    echo "<script type='text/javascript'> document.location = 'intake.php'; </script>";
}

}

if(isset($_GET['id']))
{
$intakeid=$_GET['id'];
$msg=mysqli_query($con,"delete from intake where id='$intakeid'");
if($msg)
{
echo "<script>alert('Data deleted');</script>";
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
        <title>Between Dates report date selection | Registration and Login System</title>
               <link rel="stylesheet" type="text/css" href="css/style.css">

  <script type="text/javascript">
function checkpass()
{
if(document.signup.password.value!=document.signup.confirmpassword.value)
{
alert(' Password and Confirm Password field does not match');
document.signup.confirmpassword.focus();
return false;
}
return true;
} 

</script>

    </head>
    <body class="sb-nav-fixed">
      
        <div id="layoutSidenav">
          <?php include_once('includes/navbar.php');?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        

                        <h1 class="mt-4">Create Intake</h1>
                        <div class="card mb-4">
                     <main>
                    <div>
                        <div>
                            <div class="col-lg-12">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    
                                    <div class="card-body">
<form method="post" name="signup" onsubmit="return checkpass();">
<div class="row mb-3">
<div class="col-md-12">
<div class="form-floating mb-3 mb-md-0">
<input class="form-control" id="intake" name="intake" type="text" placeholder="Intake Year" required />
<label for="intake">Intake</label>
</div>
</div>

</div>


                                    

<div class="mt-4 mb-0">
<div class="d-grid"><button type="submit" class="btn btn-primary btn-block" name="submit">Create Intake</button></div>
</div>
                                        </form>







<table id="datatablesSimple border" style="width: 100%">
                                    <thead>
                                        <tr>
                                  <th>Intake</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                              <?php $ret=mysqli_query($con,"select * from intake");
                              $cnt=1;
                              while($row=mysqli_fetch_array($ret))
                              {?>
                              <tr>
                              <td><?php echo $cnt;?></td>
                                  <td><?php echo $row['intake'];?></td>
                                  <td>
                                     
                                     <a href="intake.php?id=<?php echo $row['id'];?>" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                  </td>
                              </tr>
                              <?php $cnt=$cnt+1; }?>
                                      
                                    </tbody>
                                </table>





                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </main>



                        </div>


                    </div>
                </main>
            </div>
        </div>
       
    </body>
</html>
<?php } ?>



