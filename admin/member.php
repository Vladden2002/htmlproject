<?php
    $host="localhost:3306";
    $user="root";
    $password="";
    $db="geeksforgeeks";

    $data=mysqli_connect($host,$user,$password,$db);
    $sql = "SELECT * from team";
    $result=mysqli_query($data,$sql);

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

</head>
<body>
    <header class="header">
        <a href="adminpage.php">Admin Dashboard</a>
        <div class="logout">
            <a href="" class="btn btn-primary">Logout</a>
        </div>
    </header>
    <a href="add_member.php">Add member</a>
    <div class="content_team">
        <h1>TEAM</h1>

        <table class="table" border="10p">
            <tr>
            <th style="padding:10px; font-size:15px">id</th>
                <th style="padding:10px; font-size:15px">name</th>
                <th style="padding:10px; font-size:15px">function</th>
                <th style="padding:10px; font-size:15px">about</th>
                <th style="padding:10px; font-size:15px">Delete</th>
            </tr>

            <?php
            while($info=$result->fetch_assoc())
            {
            ?>

            <tr>
            <td style="padding:20px; font-size:15px">
                    <?php echo "{$info['id']}";?>
                <td style="padding:20px; font-size:15px">
                    <?php echo "{$info['name']}";?>
                </td>
                <td style="padding:20px; font-size:15px">
                    <?php echo "{$info['function']}";?>
                </td>
                <td style="padding:20px; font-size:15px">
                    <?php echo "{$info['about']}";?>
                </td>
                <td style="padding:20px; font-size:15px">
                <?php echo "<a href='delete1.php?member_id={$info['id']}'>Delete</a>";?>
                </td>
                <td style="padding:20px; font-size:15px">
                <?php echo "<a class='btn btn-primary' href='update.php?member_id={$info['id']}'>Update</a>";?>
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
