<?php
session_start();
require '../consts/dbcon.php';

if(isset($_POST['edit_students_button']))
{
    $std_id = mysqli_real_escape_string($con, $_POST['id']);
    $std_name = mysqli_real_escape_string($con, $_POST['std_name']);
    $std_email = mysqli_real_escape_string($con, $_POST['std_email']);
    $std_phone = mysqli_real_escape_string($con, $_POST['std_phone']);
    $std_course = mysqli_real_escape_string($con, $_POST['std_course']);

    /* to prevent cross site scripting 
    $std_name = htmlspecialchars($std_name);
    */

    $query = "UPDATE students SET std_name='$std_name', std_email='$std_email', std_phone='$std_phone', std_course='$std_course' WHERE id='$std_id' ";

    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Update Successfully";
        header("Location: ../index.php");
        exit(0);

    } else {
        $_SESSION['message'] = "Student Failed to Update";
        header("Location: ../index.php");
        exit(0);
    }
}

?>