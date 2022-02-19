<?php
session_start();
if(!isset($_SESSION['login-admin']))
{
    die("not login");
}
//
$id= $_SESSION['roll'];
//
$sql = "select * from HeadCommittee  where email='$id'";
include_once 'database/conn.php';
try {
    $db = new PDO(DB_INFO, DB_USER, DB_PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//			echo "successful";
} catch (PDOException $e) {
    echo "fail:" .
        $e->getMessage();
}
$res = $db->query($sql);
//
foreach ($res as $data) {
    $name = $data['name'];
    $email = $data['email'];
    $mobile = $data['mobile'];
}
//?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://kit.fontawesome.com/98c9b2a931.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="source/style1.css">
    <link rel="stylesheet" href="source/userstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="https://kit.fontawesome.com/98c9b2a931.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        #navbarNav {
            margin-right: -1%;
        }
            .col-md-6
            {
                background-color: #f4f4f4;
                border:1px solid #30363d;
                width: 42%;
                margin: 4%
            }


    </style>
</head>
<body>
<div class="container-fluid head">


    <nav class="navbar navbar-expand-lg navbar-dark mainnav justify-content-between navbar-fixed-top"
         style="margin-top: 0px;position: static">
        <!--					<img id="fev-img" src="source/plane%20(2).png" height="270px" width="170px" alt="plane">-->
        <a class="navbar-brand" style="font-family: 'ubuntu-Bold',sans-serif;font-size: 1.4em;color: black" href="#">CSJMU</a>
        <button style="color: black" class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <div class="nav-li" style="margin-top: 10%">
                        <a class=" nav-white"
                           style=" font-family: 'Open Sans', sans-serif;font-weight: bold;color: black"
                           href="register.php">Logout
                        </a>
                    </div>
                </li>
                <li class="nav-item" style="padding-top: 4%">
                    <a href="source/logout.php"><i class="fas fa-sign-out-alt"
                                                   style="width: 50%;margin-top: 3%;color: #8c4d79;"></i></a>
                </li>

            </ul>
        </div>
    </nav>
</div>
<div class="container-fluid">
    <section>
        <div class="row">
            <div class="col-md-3 userin">
                <div class="row img text-center" style="justify-content: center">
                    <img src="images/user2.png " width=14 style="width: 70%">
                </div>
                <div class="row  text-center" style="justify-content: center">
                                        <h3><?php echo  $name;?></h3>
                </div>
                <div class="row  text-center" style="justify-content: center">
                                        <h3><?php echo  $email;?></h3>
                </div>
                <div class="row  text-center" style="justify-content: center">
                                        <h3><?php echo  $mobile;?></h3>
                </div>
            </div>
            <div class="col-md-9 info">
                <h4>
                    All Clubs
                </h4>
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <?php
                            include_once 'database/conn.php';
                            try {
                                $db = new PDO(DB_INFO, DB_USER, DB_PASS);
                                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//                echo "successful";
                            } catch (PDOException $e) {
                                echo "fail:" .
                                    $e->getMessage();
                            }
                            $sql1 = "select Candidates from clubs where Clubid=1";
                            $sql2 = "select Candidates from clubs where Clubid=2";
                            $sql3 = "select Candidates from clubs where Clubid=3";
                            $sql4 = "select Candidates from clubs where Clubid=4";
                            $sql5 = "select Candidates from clubs where Clubid=5";
                            $sql6 = "select Candidates from clubs where Clubid=6";
                            $sql7 = "select Candidates from clubs where Clubid=7";
                            $sql8 = "select Candidates from clubs where Clubid=8";
                            $no1 = $db->query($sql1);
                            $no2 = $db->query($sql2);
                            $no3 = $db->query($sql3);
                            $no4 = $db->query($sql4);
                            $no5 = $db->query($sql5);
                            $no6 = $db->query($sql6);
                            $no7 = $db->query($sql7);
                            $no8 = $db->query($sql8);
                            foreach ($no1 as $co) {
                                $cand1 = $co[0];
                            }
                            foreach ($no2 as $co) {
                                $cand2 = $co[0];
                            }
                            foreach ($no3 as $co) {
                                $cand3 = $co[0];
                            }
                            foreach ($no4 as $co) {
                                $cand4 = $co[0];
                            }
                            foreach ($no5 as $co) {
                                $cand6 = $co[0];
                            }
                            foreach ($no7 as $co) {
                                $cand7 = $co[0];
                            }
                            foreach ($no8 as $co) {
                                $cand8 = $co[0];
                            }
                            ?>
                            <h4>Cultural CLub</h4>
                            <div class="row"></div>
                            <div class="row">
                                <h4> Total registration:<?php echo $cand1; ?></h4>
                                <h4><a href="studend.php?code=1">All Students</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h4>Fitness CLub</h4>
                        <div class="row"></div>
                        <div class="row">
                            <h4> Total registration:<?php echo $cand2; ?></h4>
                            <h4><a href="studend.php?code=2">All Students</a></h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h4>Gardening CLub</h4>
                        <div class="row"></div>
                        <div class="row">
                            <h4> Total registration:<?php echo $cand3; ?></h4>
                            <h4><a href="studend.php?code=3">All Students</a></h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h4>Photography CLub</h4>
                        <div class="row"></div>
                        <div class="row">
                            <h4> Total registration:<?php echo $cand4; ?></h4>
                            <h4><a href="studend.php?code=4">All Students</a></h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h4>Literary CLub</h4>
                        <div class="row"></div>
                        <div class="row">
                            <h4> Total registration:<?php echo $cand5; ?></h4>
                            <h4><a href="studend.php?code=5">All Students</a></h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h4>Robotics and Drone CLub</h4>
                        <div class="row"></div>
                        <div class="row">
                            <h4> Total registration:<?php echo $cand6; ?></h4>
                            <h4><a href="studend.php?code=6">All Students</a></h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h4>Coding CLub</h4>
                        <div class="row"></div>
                        <div class="row">
                            <h4> Total registration:<?php echo $cand7; ?></h4>
                            <h4><a href="studend.php?code=7">All Students</a></h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h4>Cooking CLub</h4>
                        <div class="row"></div>
                        <div class="row">
                            <h4> Total registration:<?php echo $cand8; ?></h4>
                            <h4><a href="studend.php?code=8">All Students</a></h4>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>
