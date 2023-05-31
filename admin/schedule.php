<?php
    $host="localhost:3306";
    $user="root";
    $password="";
    $db="geeksforgeeks";

    $data=mysqli_connect($host,$user,$password,$db);
    $sql = "SELECT * from schedule";
    $result=mysqli_query($data,$sql);

    if(isset($_POST['schedule'])){
        $s_data=$_POST['data'];
        $s_title=$_POST['title'];
        $s_about=$_POST['about'];
        $s_place=$_POST['place'];


        $sqll="INSERT INTO team(name,function,about) VALUES ('$s_data', '$s_title', '$s_about', '$s_place')";

        $resultt=mysqli_query($data,$sqll);

        if($resultt){
            echo " <script type'text/javascript'>
            alert('Data upload success') </script";
    
        } else{
            echo "Upload Failed";
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="adminpage.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        label{
            display: inline-block;
            text-align:right;
            width: 100px;
            padding-top: 10px;
            padding-bottom: 10px;
        }
    </style>
</head>
<body>
<header class="header">
        <a href="adminpage.php">Admin Dashboard</a>
        <div class="logout">
            <a href="" class="btn btn-primary">Logout</a>
        </div>
    </header>
    <li>
        <a href="change_schedule.php">CHANGE SCHEDULE</a>
    </li>
    <div class="content">

        <table class="table_schedule" border="10p">
            <tr>
            <th style="padding:10px; font-size:15px">id</th>
                <th style="padding:10px; font-size:15px">data</th>
                <th style="padding:10px; font-size:15px">title</th>
                <th style="padding:10px; font-size:15px">about</th>
                <th style="padding:10px; font-size:15px">place</th>
                <th style="padding:10px; font-size:15px">delete</th>
            </tr>

            <?php
            while($info=$result->fetch_assoc())
            {
            ?>

            <tr>
            <td style="padding:20px; font-size:15px">
                    <?php echo "{$info['id']}";?>
                <td style="padding:20px; font-size:15px">
                    <?php echo "{$info['data']}";?>
                </td>
                <td style="padding:20px; font-size:15px">
                    <?php echo "{$info['title']}";?>
                </td>
                <td style="padding:20px; font-size:15px">
                    <?php echo "{$info['about']}";?>
                </td>
                <td style="padding:20px; font-size:15px">
                    <?php echo "{$info['place']}";?>
                </td>
                </td>
                <td style="padding:20px; font-size:15px">
                    <?php echo "<a href='delete.php?student_id={$info['id']}'>Delete</a>";?>
                </td>
            </tr>
            

            <?php
            }
            ?>

        </table>
    </div>
    <div></div>
</body>
</html>