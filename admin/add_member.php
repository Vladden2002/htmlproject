<?php
    $host="localhost:3306";
    $user="root";
    $password="";
    $db="geeksforgeeks";

    $data=mysqli_connect($host,$user,$password,$db);

    if(isset($_POST['add_member'])){
        $username=$_POST['name'];
        $user_function=$_POST['function'];
        $user_about=$_POST['about'];


        $sql="INSERT INTO team(name,function,about) VALUES ('$username', '$user_function', '$user_about')";

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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="adminpage.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

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
    <a href="member.php">BACK</a>
    <div class="add_member">
        <h1>Add Member</h1>
        <div class="div_deg">
            <form action="#" method="POST">
                <div>
                    <label>Name</label>
                    <input type="text" name="name">
                </div>
                <div>
                    <label>Function</label>
                    <input type="function" name="function">
                </div>
                <div>
                    <label>About</label>
                    <input type="about" name="about">
                </div>
                <div>
                    <input type="submit" class="btn btn-primary" name="add_member" value="Add Member">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
