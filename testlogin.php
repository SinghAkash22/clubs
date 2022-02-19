<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Webslesson Tutorial | Make Login Form by Using Bootstrap Modal with PHP Ajax Jquery</title>
<!--    <script src="jquery.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!--    <link rel="stylesheet" href="bootstrap.css" />-->
<!--    <script src="bootstrap.js"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<br />
<div class="container" style="width:700px;">
    <h3 align="center">Make Login Form by Using Bootstrap Modal with PHP Ajax Jquery</h3><br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <?php
    if(isset($_SESSION['username']))
    {
        ?>
        <div align="center">
            <h1>Welcome - <?php echo $_SESSION['username']; ?></h1><br />
            <a href="#" id="logout">Logout</a>
        </div>
        <?php
    }
    else
    {
        ?>
        <div align="center">
            <button type="button" name="login" id="login" class="btn btn-success" data-toggle="modal" data-target="#loginModal">Login</button>
        </div>
        <?php
    }
    ?>
</div>
<br />
</body>
</html>
<div id="loginModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Login</h4>
            </div>
            <div class="modal-body">
                <label>Username</label>
                <input type="text" name="username" id="username" class="form-control" />
                <br />
                <label>Password</label>
                <input type="password" name="password" id="password" class="form-control" />
                <br />
                <button type="button" name="login_button" id="login_button" class="btn btn-warning">Login</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('#login_button').click(function(){
            var username = $('#username').val();
            var password = $('#password').val();
            if(username != '' && password != '')
            {
                $.ajax({
                    url:"action.php",
                    method:"POST",
                    data: {username:username, password:password},
                    success:function(data)
                    {
                        //alert(data);
                        if(data == 'No')
                        {
                            alert("Wrong Data");
                        }
                        else
                        {
                            $('#loginModal').hide();
                            location.reload();
                        }
                    }
                });
            }
            else
            {
                alert("Both Fields are required");
            }
        });
        $('#logout').click(function(){
            var action = "logout";
            $.ajax({
                url:"action.php",
                method:"POST",
                data:{action:action},
                success:function()
                {
                    location.reload();
                }
            });
        });
    });
</script>
