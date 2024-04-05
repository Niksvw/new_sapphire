<!doctype html>
<html lang="en">
    <head>
       
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="../image/Ns logo.png" type="image/png">
        <title>Ns Sapphire</title>
     
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../vendors/linericon/style.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="../vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="../vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/responsive.css">
        <link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
        <script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
        <script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>

        <style type="text/css">
            .btn{
                margin-right: 15px;
            }
        </style>
    </head>
    <body>
        <header class="header_area">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand logo_h" href="index.html"><img src="image/Logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="admin_dashboard.php">Home</a></li> 
                         </ul>
                    </div> 
                </nav>
            </div>
        </header>
        <br><br><br><br><br><br>
        
       <div class="row">
       	<div class="col-md-12">
       		<center><h3>Room Booking Page</h3></center>
       	</div>
       </div><br><br>
       <center><h5>Room Type:-  Single deluxe Rooms</h5></center><br>
        <div class="row">
            <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"hotel");
                $query = "select * from single_deluxe";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                        <div class="col-md-2" style="margin-left: 50px;">
                        <div class="card bg-light" style="width: 300px">
                        <div class="card-header">Room No: <?php echo $row["room_no"]?></div>
                        <div class="card-body">
                            <p class="card-text">Room Status: <?php if($row["status"]==0){echo "<b>Available</b>";}else{echo "<b>Already Booked</b>";}?></p>
                            <a href="book_room.php?rn=<?php echo $row['room_no'] . "&rt=a";?>" class="btn btn-primary <?php ?>">Book</a>
                            <a href="unbook.php?rn=<?php echo $row['room_no'] . "&rt=a";?>" class="btn btn-danger <?php if($row["status"]==0){echo "disabled";}else{echo "active";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "true";}else{echo "false";}?>">Unbook</a>
                        </div>
                    </div>
                    </div>  
                    <?php 
                }
            ?>
        </div><br><br>
        <center><h5>Room Type:-  Double deluxe Rooms</h5></center><br> 
        <div class="row">
            <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"hotel");
                $query = "select * from double_deluxe";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                        <div class="col-md-2" style="margin-left: 50px;">
                        <div class="card bg-light" style="width: 300px">
                        <div class="card-header">Room No: <?php echo $row["room_no"]?></div>
                        <div class="card-body">
                            <p class="card-text">Room Status: <?php if($row["status"]==0){echo "<b>Available</b>";}else{echo "<b>Already Booked</b>";}?></p>
                            <a href="book_room.php?rn=<?php echo $row['room_no'] . "&rt=b";?>" class="btn btn-primary <?php ?>">Book</a>
                            <a href="unbook.php?rn=<?php echo $row['room_no']. "&rt=b";?>" class="btn btn-danger <?php if($row["status"]==0){echo "disabled";}else{echo "active";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "true";}else{echo "false";}?>">Unbook</a>
                        </div>
                    </div>
                    </div>  
                    <?php 
                }
            ?>
        </div><br><br>
        <center><h5>Room Type:-  Semi luxury Rooms</h5></center><br>
        <div class="row">
            <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"hotel");
                $query = "select * from semi_luxury";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                        <div class="col-md-2" style="margin-left: 50px;">
                        <div class="card bg-light" style="width: 300px">
                        <div class="card-header">Room No: <?php echo $row["room_no"]?></div>
                        <div class="card-body">
                            <p class="card-text">Room Status: <?php if($row["status"]==0){echo "<b>Available</b>";}else{echo "<b>Already Booked</b>";}?></p>
                            <a href="book_room.php?rn=<?php echo $row['room_no'] . "&rt=c";?>" class="btn btn-primary <?php ?>">Book</a>
                            <a href="unbook.php?rn=<?php echo $row['room_no']. "&rt=c";?>" class="btn btn-danger <?php if($row["status"]==0){echo "disabled";}else{echo "active";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "true";}else{echo "false";}?>">Unbook</a>
                        </div>
                    </div>
                    </div>  
                    <?php 
                }
            ?>
        </div><br><br>
        <center><h5>Room Type:-  Super luxury Rooms</h5></center><br>
        <div class="row">
            <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"hotel");
                $query = "select * from super_luxury";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                        <div class="col-md-2" style="margin-left: 50px;">
                        <div class="card bg-light" style="width: 300px">
                        <div class="card-header">Room No: <?php echo $row["room_no"]?></div>
                        <div class="card-body">
                            <p class="card-text">Room Status: <?php if($row["status"]==0){echo "<b>Available</b>";}else{echo "<b>Already Booked</b>";}?></p>
                            <a href="book_room.php?rn=<?php echo $row['room_no'] . "&rt=d";?>" class="btn btn-primary <?php ?>">Book</a>
                            <a href="unbook.php?rn=<?php echo $row['room_no']. "&rt=d";?>" class="btn btn-danger <?php if($row["status"]==0){echo "disabled";}else{echo "active";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "true";}else{echo "false";}?>">Unbook</a>
                        </div>
                    </div>
                    </div>  
                    <?php 
                }
            ?>
        </div>
        <br><br><br><br><br><br>
       
       
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>