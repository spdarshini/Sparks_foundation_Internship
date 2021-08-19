<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/createuser.css">
    <style>
      body {
           background-image: url('background.jpg');
           background-size:cover;
        }
      </style>
</head>

<body>
<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Hurray! User created');
                               window.location='transfermoney.php';
                     </script>";
                    
    }
  }
?>

<?php
  include 'navbar.php';
?>

        <h2 class="text-center pt-4">Create a User</h2>
        <br>

  <div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <br><br>
      <div class="screen-body">
        <div align="center">
           <img class="img-container" src="user3.jpg" style="border-radius:4px;width:200px;height:200px;">
        </div>
        
        <br><br>
        <div align="center">
          <form class="app-form-group" method="post">
            <table cellpadding="10px" cellspacing="10px">
              <tr>
              <div class="app-form-elements">
             <th ><p style="fontsize:150px"> Enter User name <p> </th><th><input class="btn-btn-primary" placeholder="NAME" type="text" name="name" required> </th>
            </div>
            </tr>
            <tr>
            <div class="app-form-group">
            <th><p style="fontsize:200px">  Enter Mail Id  </p></th><th> <input class="btn-btn-secondary" placeholder="EMAIL" type="email" name="email" required ></th>
            </div>
            </tr>
            <tr>
            <div class="app-form-group">
            <th><p style="fontsize:150px">  Balance </p>    <t/h> <th><input class="btn-btn-success" placeholder="BALANCE" type="number" name="balance" required></th>
            </div>
           </tr>
            <br>
            <tr>
            <div class="app-form-group button" >
              <th></th>
              <th> 
             <input class="app-form-button" type="submit" value="CREATE" name="submit"></input>
             <input class="app-form-button" type="reset" value="RESET" name="reset" ></input></th></tr>
            </div>
            </table>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>