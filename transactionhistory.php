<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <title>TSF Bank</title>
  <style>
      td,tr{
          border: 2px solid black;
          margin:2em;
      }
      footer{
        margin-top: 334px;
        background: black;
        color: white;
        width: 100%;
        margin-left: 0;
        height: 49px;
        display: flex;
        align-items: center;
        justify-content: center;
    
      }
          
      body
      {
          background: url('tran.jpg')no-repeat center center/cover;
      }
    </style>
</head>
<body>
<body>
        <!-- navigation part  -->
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark shadow bg-black">
            <div class="container-fluid">
            <a class="navbar-brand" href="index.html">Sparks Bank</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item me-2">
                    <a class="nav-link text-capitilize active" href="index.html">Home</a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link text-capitalize" href="transactionhistory.php">Transaction History</a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link text-capitalize" href="transfermoney.php">View and Transfer</a>
                </li>
                </ul>
            </div>
            </div>
        </nav>
        <div class="container design shadow bg-white">
        <h2 class="text-center pt-4" style="color : black;">Transaction History</h2>
        
       <br>
       <div class="table-responsive-sm md-2">
    <table class="table table-hover table-striped table-bordered">
        <thead class="table-dark"style="color : white;">
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr style="background-color : white;">
            <td class="py-2 active"><?php echo $rows['sno']; ?></td>
            <td class="py-2 success"><?php echo $rows['sender']; ?></td>
            <td class="py-2 active"><?php echo $rows['receiver']; ?></td>
            <td class="py-2 warning"><?php echo $rows['balance']; ?> </td>
            <td class="py-2 active"><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
<footer>
            <p>&copy; | Srishty Bedi | Sparks Bank || All rights reserved |</p>
            <div class="socialmedia text-right">
                    <div class="card-text img_text shadow">
                    <a href="https://www.facebook.com" target="_blank" class="fa fa-facebook"></a>
                    <a href="https://www.instagram.com/" target="_blank" class="fa fa-instagram"></a>
                    <a href="https://www.linkedin.com/" target="_blank" class="fa fa-linkedin"></a>
                    <a href="https://twitter.com/" target="_blank" class="fa fa-twitter"></a>
        </footer>
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
            crossorigin="anonymous"></script>
</body>
</html>  