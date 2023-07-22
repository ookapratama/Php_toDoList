<?php
    $conn= mysqli_connect("localhost","root","","startup");
    $data= mysqli_query($conn,"SELECT * FROM todolist");
?>