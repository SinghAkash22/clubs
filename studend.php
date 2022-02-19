<?php
$id=$_GET['code'];
include_once 'database/conn.php';
try {
    $db = new PDO(DB_INFO, DB_USER, DB_PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//                echo "successful";
} catch (PDOException $e) {
    echo "fail:" .
        $e->getMessage();
}
$sql="select * from users join userClub on userClub.useid=users.ROllnumber where userClub.cluid=$id";

$result=$db->query($sql);
$count = $result->rowCount();

//create var
$sn=1;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        table
        {
            border-radius: 2rem;
            margin: .8%;
        }
        th{
            padding: 1%;
            border: 2px solid black;
            background-color: cornflowerblue;

        }
td{
            padding: 1%;
            border: 2px solid black;
            background-color: burlywood;
    margin: .8%;
        }

        tr{

        }
    </style>
</head>
<body>
<div class="container text-center" style="justify-content: center;padding-top: 4%">
    <h1 class="text-center" style="margin: auto;margin-bottom: 4%;color: #8c4d79">STUDENT'S</h1>
    <div class="row" style="justify-content: center">
        <table class="tbl">
            <tr style="border-radius: 1rem;margin: 2%">
                <th>Name</th>
                <th>Roll Number</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Course</th>
                <th>Gender</th>
                <th>Action</th>
            </tr>
            <?php
            if($count>0)
            {
                //med in db
                //get med from db n display
                foreach ($result as $row) {
                    //get values from individual
                    $name = $row['name'];
                    $Roll_no = $row['ROllnumber'];
                    $mobile = $row['mobile'];
                    $email = $row['email'];
                    $course = $row['course'];
                    $Gender = $row['Gender'];
//									$active = $row['active'];
//									echo "hello";
                    ?>
                    <tr>
                        <td><?php echo $name ?></td>
                        <td><?php echo $Roll_no ?></td>
                        <td><?php echo $mobile ?></td>
                        <td><?php echo $email ?></td>
                        <td><?php echo $course ?></td>
                        <td><?php echo $Gender  ?></td>

                        <td>

                            <a href="delete.php?code=<?php echo $Roll_no; ?>&club=<?php echo $id;?>" class="btn-tr">Delete</a>
                        </td>
                    </tr>

                    <?php
                    echo "hh";
                }

            }
            else
            {
                //not in db
              echo "NO student ";
            }
            ?>
        </table>
        <input type="button" value="back" onclick="history.back()" style="width: 10%;background-color: purple;color: white">
    </div>
</div>

</body>
</html>
