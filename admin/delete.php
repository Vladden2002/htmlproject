<?php
    $host="localhost:3306";
    $user="root";
    $password="";
    $db="geeksforgeeks";

    $data=mysqli_connect($host,$user,$password,$db);
    if($_GET['member_id']){
        $user_id=$_GET['member_id'];
        $sql="DELETE FROM schedule WHERE id='$user_id' ";
    
        $result = mysqli_query($data,$sql);

        if($result){
            header("location:schedule.php");
        }
    }

?>