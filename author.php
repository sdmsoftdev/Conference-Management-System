<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container target">
    <div class="row">
        <div class="col-sm-10">
            <br><br>
            <?php session_start();  
            $username=$_SESSION['email_address'];
            $con=mysql_connect('localhost','root','');
            $var = mysql_select_db('ucsc_conf');
            $my = mysql_query("SELECT first_name FROM member WHERE email_address='$username'");
            $tt = mysql_fetch_array($my);
            ?>
            <button type="button" class="btn btn-info"><?php  echo $tt['first_name'];?></button> <button type="button" class="btn btn-success"><a href="logout.php">Log out</a></button>  
<br>
        </div>
        
        <div class="col-sm-10"><br><h3><b>International Conference on Advances in ICT for Emerging Region</b></h3></div>
        
      <div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="http://www.rlsandbox.com/img/profile.jpg"></a>

        </div>
    </div>
  <br>
    
    <div class="col-sm-3">
            <!--left col-->
            <ul class="list-group">
                <li class="list-group-item text-muted" contenteditable="false">Profile</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Joined</strong></span> 2.13.2014</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Last seen</strong></span> Yesterday</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Real name</strong></span> Joseph
                        Doe</li>
              <li class="list-group-item text-right"><span class="pull-left"><strong class="">Role: </strong></span> Pet Sitter
               
                      </li>
            </ul>          
    </div>
  <div class="panel panel-default" style="width: 60%; position: absolute; left: 400px;">
                <div class="panel-heading">My Account</div>
                <div class="panel-body"> 
                    <a class="btn btn-info" href="edit.php">Edit My Profile</a><br><br>
                    <a class="btn btn-info" href="changepassword.php">Change Password</a><br><br>
                    <a class="btn btn-info">Upload Paper</a><br><br>
                </div>
            </div>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="panel panel-default " style="width: 60%; position: absolute; left: 400px;">
                <div class="panel-heading">Notifications</div>
                <div class="panel-body"> 
                    <a class="btn btn-info">Paper was reviewed</a><br><br>
                    <a class="btn btn-info">Papers Published</a><br><br>
                    <a class="btn btn-info">Other notifications</a><br><br>
                </div>
            </div>


            
        
        
        
        
        
       
</div>
</body>
</html>                                  		