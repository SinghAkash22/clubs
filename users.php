<?php
session_start();
if(!isset($_SESSION['login-user']))
{
    die("not login");
}
$id= $_SESSION['roll'];

$sql = "select * from users where ROllnumber='$id'";
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

foreach ($res as $data) {
    $name = $data['name'];
    $email = $data['email'];
    $mobile = $data['mobile'];
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/98c9b2a931.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="source/style1.css">
    <link rel="stylesheet" href="source/userstyle.css">
    <script src="https://kit.fontawesome.com/98c9b2a931.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        #navbarNav {
            margin-right: -1%;
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
                    <a href="source/logout.php"><i class="fas fa-sign-out-alt" style="width: 50%;margin-top: 3%;color: #8c4d79;"></i></a>
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
                    All Clubs You Enrolled
                </h4>
                <?php
                $sql="select * from userClub where useid=$id";
                $result=$db->query($sql);
                foreach ($result as $club)
                {
                $id=$club['cluid'];
                $sql="select name from clubs where ClubId=$id";
                $sql2="select mentr from mentor where clubid=$id";
                $clubname=$db->query($sql);
                $clubname2=$db->query($sql2);
//                echo $id;

                foreach ($clubname as $nm)
                    {
                        $clubname=$nm[0];
//                        echo $clubname ;
                    }
                $ment=array();
                $i=0;
                foreach ($clubname as $nm)
                    {
                        array_push($ment,$nm[0]);
                    }
                ?>
                <div class="row clbox">
                    <div class="col-md-12 clubcol">
                        <div class="row">
                            <div class="col-sm-6">
                            <h4><?php  echo $clubname ; ?> Club </h4>
                            </div>
                            <div class="col-sm-6">
                            <h4><?php  echo $club['Date'] ; ?></h4>
                            </div>

                        </div>
                        <p class="clubifn">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate eveniet facere fugit
                            inventore nesciunt provident quisquam recusandae repellat veritatis. Et.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab blanditiis distinctio dolore ex
                            maxime quibusdam tenetur voluptatibus!
                            <div class="row">
                            <div class="col-sm-6">
                                <h4><?php  echo $ment[0] ; ?></h4>
                            </div>
                            <div class="col-sm-6">
                                <h4><?php  echo $ment[1] ; ?></h4>
                            </div>
                        </div>
                        </p>
                        <div class="row">
                            <a href="<?php  echo $clubname ; ?>.html">Info</a>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<?php
include 'footr.php';
?>
</body>

</html>
