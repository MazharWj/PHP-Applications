<?php
session_start();
require '../consts/dbcon.php';

if(isset($_POST['delete_student_button']))
{
    $std_id = mysqli_real_escape_string($con, $_POST['delete_student_button']);

    /* to prevent cross site scripting 
    $std_name = htmlspecialchars($std_name);
    */

    $query = "DELETE FROM students WHERE id='$std_id'";
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: ../index.php");
        exit(0);

    } else {
        $_SESSION['message'] = "Student Failed to Delete";
        header("Location: ../index.php");
        exit(0);
    }
}

?>