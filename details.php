<?php

// print_r($_POST);
if (isset($_POST["send"])){
    $username=$_POST["username"];
    $mobile_no=$_POST["mobileNo"];
    $gmail=$_POST["gmail"];
    if(!empty($username) && !empty($mobile_no) && !empty($gmail)){
        $link = mysqli_connect("localhost","root","","form");
        if($link==false){
            die(mysqli_connect_error());
        }
        $sql = "INSERT INTO details (user_Name,Mobile_no,email) values ('$username','$mobile_no','$gmail')";
        if (mysqli_query($link,$sql)){
            echo "Recorded successfully
            <script>
            alert('Recorded Successfully! we will get beack to you soon');
            document.location.href = 'final.php';
            </script>
            ";
        }else {
            echo "something went wrong";
        }
    }else{
        echo "please provide all the details";
    } 
}
?>
