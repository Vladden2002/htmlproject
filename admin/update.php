<?php
    $host="localhost:3306";
    $user="root";
    $password="";
    $db="geeksforgeeks";

    $data=mysqli_connect($host,$user,$password,$db);
    $id=$_GET['member_id'];
    $sql="SELECT * FROM team WHERE id='$id'";
    $result = mysqli_query($data,$sql);
    $info=$result->fetch_assoc();

    if(isset($_GET['update_member'])){
        $name=$_GET['name'];
        $function=$_GET['function'];
        $about=$_GET['about'];

        $query="UPDATE team SET name='$name',function='$function',about='$function' WHERE id='$id'";
        $result2=mysqli_query($data,$query);

        if($result2){
            echo "update success";
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
        <a href="">Admin Dashboard</a>
        <div class="logout">
            <a href="" class="btn btn-primary">Logout</a>
        </div>
    </header>
    <div class="content">
        <h1>Update members</h1>
        <div>
            <form action="#" method="POST">
                <div>
                    <label>Name</label>
                    <input type="text" name="name"
                    value="<?php echo "{$info['name']}";?>">
                </div>
                <div>
                    <label>Function</label>
                    <input type="function" name="function"
                    value="<?php echo "{$info['function']}";?>">
                </div>
                <div>
                    <label>About</label>
                    <input type="about" name="about"
                    value="<?php echo "{$info['about']}";?>">
                </div>
                <div>
                    <input type="submit" class="btn btn-primary" name="update_member" value="update">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
