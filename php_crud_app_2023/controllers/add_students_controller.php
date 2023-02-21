<?php
session_start();
require '../consts/dbcon.php';

if(isset($_POST['add_students_button']))
{
    $std_name = mysqli_real_escape_string($con, $_POST['std_name']);
    $std_email = mysqli_real_escape_string($con, $_POST['std_email']);
    $std_phone = mysqli_real_escape_string($con, $_POST['std_phone']);
    $std_course = mysqli_real_escape_string($con, $_POST['std_course']);

    /* to prevent cross site scripting 
    $std_name = htmlspecialchars($std_name);
    */

    $query = "INSERT INTO students (std_name,std_email,std_phone,std_course) VALUES ('$std_name','$std_email','$std_phone','$std_course')";

    $query_run = mysqli_query($con,$query);
    if($query_run){
        $_SESSION['message'] = "Student Created Successfully";
        header("Location: ../student_create.php");
        exit(0);

    } else {
        $_SESSION['message'] = "Student Failed to Create";
        header("Location: ../student_create.php");
        exit(0);
    }
}

?>