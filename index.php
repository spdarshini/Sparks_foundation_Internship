<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
    <style>
      body {
           background-image: url('bank.jpg');
           background-size:cover;
        }
      </style>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1">
              <div class="col-sm-1 col-md">
                <div class="heading text-center my-0">
                  <h3 style="color:red">Welcome to</h3>
                  <h1 style="color:red">Sparks Bank</h1>
                </div>
              </div>
              
            </div>

      <!-- Activity section -->
            <div>
                  <div class="col-md act">
                  <a href="createuser.php"><img src="User.jpg" class="img-fluid" style="border-radius:10px">
                    <a href="createuser.php"><button style="border-radius:4px; height:50px;">Create a User</button></a>
                      </div>
                  <br>
                  <div class="col-md act">
                  <a href="transfermoney.php"> <img src="moneytransfer%20(1).jpg" class="img-fluid" style="border-radius:20px">
                    <a href="transfermoney.php"><button style="border: radius 4px;height:50px;"> Make a Transaction </button></a>
                  </div>
                  <br>
                  <div class="col-md act">
                  <a href="transactionhistory.php" > <img src="transactionhistoty.jpg" style="border-radius:20px ;height: 250px; width: 250px;">
                    <a href="transactionhistory.php" ><button>Transaction History</button></a>
                  </div>
                  <br>
            </div>
      </div>
      <br><br><br><br><br>
      <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>PriyaDarshini Sanchana</b> <br> The Sparks Foundation</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>