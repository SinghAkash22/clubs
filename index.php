<?php
session_start();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
    <title>clubs</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"
            integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://kit.fontawesome.com/98c9b2a931.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="source/style1.css">
    <style>
        .nav-link {
            letter-spacing: 1.6px;
            color: red;
            /*margin-left: 2%;*/
        }
    </style>
    <!--	-->
    <style>
        .nav-white {
            letter-spacing: 1.2px;
        }

        .n-whi {
            color: white;
        }

        .nav-white a:hover {
            color: blue;
            background-color: #8c4d79;
        }
    </style>
    <script src="source/script.js"></script>


</head>
<body>
<section id="home">

    <div id="id01" class="modal container-fluid" style="align-content: center;justify-items: center;align-items: center">
        <div class="modal-content animate col-lg-4 col-sm-12 col-md-11 for">
            <div class="row" style="padding-top: 8%;">
                <div class="col-md-12 for_img">
                    <h3 style="margin-bottom: 5%;color: #495057">Login </h3>
                </div>


            </div>
            <!--		Modal Content-->

            <div class="row text-center" style="margin-bottom: 3%;">
                <img src="images/csjm3.png" style="width:48%;  margin: auto" alt="rocket_contact"/>
            </div>
            <div class="row">
                <form onsubmit="return confirm('Do you want to submit')" TARGET="_self"
                      class="cust_form " action="source/function.php" method="post"
                      style="width: 80%;margin: auto">
                    <div class="row for_row text-center">

                        <div class="col-md-12 text-center">
                            <div class="form-group text-center">
                                <input type="text" class="form-control mar" name="email"
                                       placeholder="Email Id *" required style="margin: auto">
                            </div>
                            <div class="form-group text-center">
                                <input type="text"  class="form-control mar"
                                       name="pasw" placeholder="Password *" required style="margin: auto">
                            </div>

                        </div>
                        <div class="row justify-content-center">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="submit" name="submit-admin" class="btnContact" value="Submit"
                                           style="    margin-top: 6%;margin-left: 10%;"/>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <button type="button" onclick="document.getElementById('id01').style.display='none'"
                                            name="submit-admin" class="btnContact" value="Cancel"
                                            style=" margin-top: 6%;margin-right: 10%">Cancel
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>

        </div>
    </div>

    <div id="id03" class="modal container-fluid">
        <div class="modal-content animate container for">
            <div class="row" style="padding-top: 8%;">
                <div class="col-md-12 for_img">
                    <h3 style="margin-bottom: 5%;color: #495057">Login </h3>
                </div>
            </div>
            <!--		Modal Content-->
            <div class="row text-center" style="margin-bottom: 3%;">
                <img src="images/csjm3.png" style="width:48%;  margin: auto" alt="rocket_contact"/>
            </div>
            <div class="row">
                <p class="status"></p>
                <form onsubmit="return confirm('Do you want to submit')"
                      class="cust_form " role="form" action="source/function.php" method="post"
                      style="width: 80%;margin: auto">
                    <div class="row for_row text-center">
                        <div class="col-md-12 text-center">
                            <div class="form-group text-center">
                                <input type="text" class="form-control mar" name="roll" id="roll"
                                       placeholder="Roll Number *" required style="margin: auto">
                            </div>
                            <div class="form-group text-center">
                                <input type="password" class="form-control mar" id="pass"
                                       name="pasw" placeholder="Password *" required style="margin: auto">

                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="submit" name="submit-user" class="btnContact" value="Submit" id="submit_user"
                                           style="    margin-top: 6%;"/>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <button type="button" onclick="document.getElementById('id03').style.display='none'" id="submit-btn"
                                            name="submit_user" class="btnContact" value="Cancel" style=" margin-top: 6%;">
                                        Cancel
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>

        </div>
    </div>


    <nav class="navbar navbar-expand-lg navbar-dark mainnav justify-content-between navbar-fixed-top"
         style="margin-top: 0px">
        <!--					<img id="fev-img" src="source/plane%20(2).png" height="270px" width="170px" alt="plane">-->

        <a class="navbar-brand" style="font-family: 'ubuntu-Bold',sans-serif;font-size: 1.5em;background-color: purple;border-radius: .5rem;padding: .2%" href="#">CSJMU</a>
        <button style="color: black!important;" class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="color: purple;background-color: purple"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ">
                <li class="nav-item active">
                    <div class="nav-li">
                        <a class="nav-white" aria-current="page"
                           style=" margin-top: 15%; font-family: 'Open Sans', sans-serif;font-weight: bold" href="#home"
                        >Home</a>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="nav-li">
                        <a class=" nav-white"
                           style=" margin-top: 15%; font-family: 'Open Sans', sans-serif;font-weight: bold"
                           href="#about-us"><span>About</span></a>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="nav-li">
                        <a class=" nav-white "
                           style=" margin-top: 15%; font-family: 'Open Sans', sans-serif;font-weight: bold"
                           href="#clubs">Clubs</a>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="dropdown whi-li">
                        <a class="n-whi" type="button" id="dropdownMenuButton1"
                           data-bs-toggle="dropdown"
                           aria-expanded="false"
                           style="margin-top: 15%; font-family: 'Open Sans', sans-serif; font-weight: bold">
                            Login
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1"
                            style="background-color: #000000">
                            <li><a class="dropdown-item" href="#"
                                   style="color: white; font-family: 'Open Sans', sans-serif;font-weight: bold"
                                   onclick="document.getElementById('id01').style.display='block'">Head</a></li>

                            <li><a class="dropdown-item" href="#"
                                   style="color: white; font-family: 'Open Sans', sans-serif;font-weight: bold"
                                   onclick="document.getElementById('id03').style.display='block'">Users</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="nav-li" style="margin-top: 10%">
                        <a class=" nav-white"
                           style=" font-family: 'Open Sans', sans-serif;font-weight: bold"
                           href="register.php">Register
                        </a>
                    </div>
                </li>
            </ul>
        </div>

    </nav>
    <div class="col" id="logo">
        <div class="row" id="logotext1" style="justify-content: center;   ">C C U</div>
        <div class="row" id="logotext2" style="justify-content: center;  ">Clubs of csjm University</div>
    </div>
    <div id="particles-js"></div>
    <script src="source/particles.js"></script>
    <script src="source/app.js"></script>


</section>

<section id="about-us" class="features " style="margin-top: 5%;">
    <div class="container" id="i18_about_me">
        <div class="row m-b-lg  aba">
            <div class="col-lg-12 text-center"><h1 class="about"><span data-i18n="about_me.about_me">About Us</span>
                </h1>
                <!-- <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p> --> </div>
        </div>
        <div class="row moto-img text-center"> <!-- first two icons -->

            <div>
                <div class="team-member wow zoomIn animated" style="visibility: visible; animation-name: zoomIn;"><img
                            src="https://www.copsiitbhu.co.in/static/assets/img/landing/avatar.jpg" height="110"
                            width="110"
                            class="img-responsive img-circle" alt=""><h4><span
                                class="navy">Club of Csjm University,</span>
                        Kanpur</h4>
                    <ul class="list-inline social-icon" style="margin:auto">
                        <li style="padding: .6%"><a title="Github" href=""
                                                    target="blank"><i class="fa fa-github"></i></a></li>
                        <li style="padding: .6%"><a title="Facebook" href="https://facebook.com/csjmuknp"
                                                    target="blank"><i class="fa fa-facebook"></i></a></li>
                        <li style="padding: .6%"><a title="Linkedin"
                                                    href=""
                                                    target="blank"><i class="fa fa-linkedin"></i></a></li>
                        <li style="padding: .6%"><a title="Google Group"
                                                    href=""
                                                    target="blank"><i class="fa fa-google"></i></a></li>
                        <li style="padding: .6%"><a title="Mail" href=""><i
                                        class="fa fa-envelope-o"></i></a></li>
                        <li><a title="RSS Feed" href="http://csjmu.ac.in/geotagging/colleges-geotagging.php" target="blank"><i class="fa fa-rss"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row text-center zom">
            <div class="moto col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg wow zoomIn"
                 style="visibility: visible; animation-name: zoomIn;"><p><span data-i18n="about_me.des"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad amet beatae consectetur cum dicta dolorem eaque earum eligendi enim esse ex exercitationem facilis impedit in, ipsa, itaque nobis numquam officia perferendis perspiciatis quos rem repellat reprehenderit repudiandae tenetur unde vel.</span>
                </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur dolore ea harum illo ipsa ipsam
                    nam neque nulla odit quaerat, quis quisquam repellendus sapiente tempore temporibus tenetur ullam
                    unde voluptates! Cumque deleniti ea ex inventore laboriosam nemo, officiis optio quaerat sunt!
                    Consequuntur corporis culpa et ipsa nihil praesentium, quo quos.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad corporis distinctio error voluptate?
                    Architecto autem delectus est nostrum officia, quasi sint soluta voluptates? Adipisci alias cum
                    eligendi libero nesciunt nihil porro, quos tempore? Accusamus at, cumque dolores ea est ex expedita
                    facilis fugit illo illum ipsa iusto labore laudantium libero magni maiores, necessitatibus nemo nisi
                    non odio pariatur praesentium quis quos repellat sed soluta suscipit tempore tenetur vel velit
                    veniam!</p>
            </div>
        </div>
    </div>
</section>
<section id="clubs">
    <div class="container">
        <div class="row text-center">
            <h3 class="about" style="color:#8c4d79;">Clubs</h3>
        </div>
        <div class="row">
            <div class="col-md-6 text-center left1">
                <div class="team-member" style="padding: 5%"><img src="images/cultural.png"
                                                                  class="img-responsive img-circle img-small"
                                                                  width="200" alt=""> <h4><a href="Cultural.php"
                                                                                             target="_blank"><span
                                    class="navy">Cultural Club</span></a></h4>
                    <p><span data-i18n="projects.google">Art is not What you see,it is what you make others
												see".With this belief in mind,CSJM University endeavors
												to
												showcase life as they see it through th eyes of art.
												Arts and Cultural CLub is an ambitious, all-inclusive
												one.The club
												provide
												alot of opportunities for igniting the spark of interest
												present in the Budding Technocrats and
												Honing there skills towards showcasing their talents.</span></p>
                    <div class="ghbtn"><a target="_blank" style="width: 65px;"
                                          href="register.php">Register
                           </a></div>
                </div>
            </div>
            <div class="col-md-6 text-center right1">
                <div class="team-member" style="padding: 5%"><img src="images/fitness.jpg"
                                                                  class="img-responsive img-circle img-small"
                                                                  width="200" alt=""> <h4><a href="Fitness.php"
                                                                                             target="_blank"><span
                                    class="navy">Fitness Club</span></a></h4>
                    <p><span data-i18n="projects.google">Yoga and Meditation helps in
												Understanding
												physical and psychical controls whose aim is to make
												practitioner aware of the identity of soul.
												The main objective of the club is to reduce
												Stress,anxiety,weakness,fear,negative thoughts etc.
												which
												are increased day by day in this mechanical
												human life and Also to bring out the Talents of the
												students
												interested in physical activities and sports.</span></p>
                    <div class="ghbtn"><a target="_blank" style="width: 65px;"
                                          href="register.php">Register
                            </a></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 text-center left2">
                <div class="team-member" style="padding: 5%"><img src="images/gardening.png"
                                                                  class="img-responsive img-circle img-small"
                                                                  width="200" alt=""> <h4><a href="Gardening.php"
                                                                                             target="_blank"><span
                                    class="navy">gardening Club</span></a></h4>
                    <p><span data-i18n="projects.google">This Gardening club has been initiated with a vision to
												make
												the campus
												green and Eco-friendly and also to educate the community
												about the importance of sustainable development.
												</span></p>
                    <div class="ghbtn"><a target="_blank" style="width: 65px;"
                                          href="register.php">Register
                            </a></div>
                </div>
            </div>
            <div class="col-md-6 text-center right2">
                <div class="team-member" style="padding: 5%"><img src="images/photography.png"
                                                                  class="img-responsive img-circle img-small"
                                                                  width="200" alt=""> <h4><a href="Photography.php"
                                                                                             target="_blank"><span
                                    class="navy">Photography Club</span></a></h4>
                    <p><span data-i18n="projects.google">PhotoGraphy Club s open to all students
												interestred in photography,editing student films and
												photography in our campus.
												Our goal is to bring together students who are
												interested in
												Photography and videography.</span></p>
                    <div class="ghbtn"><a target="_blank" style="width: 65px;"
                                          href="register.php">Register
                            </a></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 text-center left3">
                <div class="team-member" style="padding: 5%"><img src="images/literary.png"
                                                                  class="img-responsive img-circle img-small"
                                                                  width="200" alt=""> <h4><a href="Literary.php"
                                                                                             target="_blank"><span
                                    class="navy">Literary Club</span></a></h4>
                    <p><span data-i18n="projects.google">This club envisages conducive platform to explore
												student
												latent talents and also to enable them to come out with
												their
												inovative ideas.The Student are encouraged to become a
												member of literary club to help broaden their skill and
												horizons.
												  </span></p>
                    <div class="ghbtn"><a target="_blank" style="width: 65px;"
                                          href="register.php">Register
                           </a></div>
                </div>
            </div>
            <div class="col-md-6 text-center right3">
                <div class="team-member" style="padding: 5%"><img src="images/robotic.png"
                                                                  class="img-responsive img-circle img-small"
                                                                  width="200" alt=""> <h4><a href="Robotics%20and%20Drone.php"
                                                                                             target="_blank"><span
                                    class="navy">Robotics And Drone Club</span></a></h4>
                    <p><span data-i18n="projects.google">Robotics is the branch of technology that deals with the
												design, construction, operation, structural disposition,
												manufacture and application of robots.
												the Robotics Club of CSJMU strives to stimulate interest
												in
												robotics among the students of the institute.
												</span></p>
                    <div class="ghbtn"><a target="_blank" style="width: 65px;"
                                          href="register.php">Register
                            </a></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 text-center left4">
                <div class="team-member" style="padding: 5%"><img src="images/cooking.png"
                                                                  class="img-responsive img-circle img-small"
                                                                  width="200" alt=""> <h4><a href="Cooking.php"
                                                                                             target="_blank"><span
                                    class="navy">Cooking Club</span></a></h4>
                    <p><span data-i18n="projects.google">While discussing the problems that came up with the
												students’ internships, we found out that many faced food
												problems (especially the ones with a foreign
												internship).
												</span></p>
                    <div class="ghbtn"><a target="_blank" style="width: 65px;"
                                          href="register.php">Register
                            </a></div>
                </div>
            </div>
            <div class="col-md-6 text-center right4">
                <div class="team-member" style="padding: 5%"><img src="images/code.png"
                                                                  class="img-responsive img-circle img-small"
                                                                  width="200" alt=""> <h4><a href="Coding.php"
                                                                                             target="_blank"><span
                                    class="navy">Coding Club</span></a></h4>
                    <p><span data-i18n="projects.google">This Club "EVOLUTION: UIET CODING CLUB"
												is
												for those Who
												want to interact with like-Minded Peers and explore the
												World of Computer Science. </span></p>
                    <div class="ghbtn"><a target="_blank" style="width: 65px;"
                                          href="register.php">Register
                            </a></div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
//    $massage='';
if(isset($_GET['code']))
{
    $code=$_GET['code'];
    if($code==0)
    {
        $massage=$_SESSION['mage'];
        echo "<script type='text/JavaScript'>";
        echo "alert('wrong credential')";
        echo "</script>";
    }
}

include 'footr.php';
?>

</body>
    </html>

