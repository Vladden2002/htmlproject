<?php
    $host="localhost:3306";
    $user="root";
    $password="";
    $db="geeksforgeeks";

    $data=mysqli_connect($host,$user,$password,$db);

    if(isset($_POST['add_schedule'])){
        $s_data=$_POST['data'];
        $s_title=$_POST['title'];
        $s_about=$_POST['about'];
        $s_place=$_POST['place'];


        $sql="INSERT INTO schedule(data,title,about,place) VALUES ('$s_data', '$s_title', '$s_about', '$s_place')";

        $result=mysqli_query($data,$sql);

        if($result){
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
    <a href="schedule.php">Back</a>
    <div class="schedule">
        <h1>Change schedule</h1>
        <div class="div_deg">
            <form action="#" method="POST">
                <div>
                    <label>Data</label>
                    <input type="text" name="data">
                </div>
                <div>
                    <label>Title</label>
                    <input type="function" name="title">
                </div>
                <div>
                    <label>About</label>
                    <input type="about" name="about">
                </div>
                </div>
                    <label>Place</label>
                    <input type="about" name="place">
                </div>
                <div>
                    <input type="submit" class="btn btn-primary" name="add_schedule" value="Change-schedule">
                </div>
            </form>
        </div>
    </div>
    <div></div>
</body>
</html>