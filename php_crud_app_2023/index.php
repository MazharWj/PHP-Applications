<?php
session_start();
    require 'consts/dbcon.php';
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIMPLE LARAVEL 9 CRUD APP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Simple Crud App</title>
</head>
<body>
    <div class="bg-dark py-3">
        <div class="container">
            <div class="h4 text-white">
                SIMPLE CRUD APP
            </div>
        </div>
    </div>

    <div class="container mt-4">
        
        <?php include('consts/alert_message.php'); ?>

        <div class="d-flex justify-content-between py-3">
            <div class="h4">Add Student Record</div>
            <div>
                <a href="student_create.php" class="btn btn-primary">Create</a>
            </div>
        </div>


    <div class="card border-0 shadow-lg">
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Student Name</th>
                    <th>Student Email</th>
                    <th>Student Address</th>
                    <th>Student Course</th>
                    <th>Action</th>
                </tr>
               <?php
                    $query = "SELECT * FROM students";
                    $query_run = mysqli_query($con, $query);
                    if(mysqli_num_rows($query_run)>0){

                      foreach($query_run as $student){
                        ?>
                        <tr>

                        <td><?= $student['id']; ?></td>
                        <td><?= $student['std_name']; ?></td>
                        <td><?= $student['std_email']; ?></td>
                        <td><?= $student['std_phone']; ?></td>
                        <td><?= $student['std_course']; ?></td>
                        <td><a href="student_edit.php?id=<?= $student['id']; ?>" class="btn btn-primary">Edit</a>
                        <form action="controllers/delete_students_controller.php" method="POST" class="d-inline">
                            <button class="btn btn-danger" type="submit" name="delete_student_button" value="<?=$student['id'];?>">Delete</button>
                        </form>
                        </td>

                        </tr>

                        <?php
                      }

                    } else {
                      echo "<h5>No Records Found!</h5>";
                    }
                ?>
                  
                    
                  
            </table>
        </div>
    </div>

  

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
</body>
</html>

<script>
    function deleteEmployee(id) {
        if(confirm("Are you sure delete this employee?")){
        document.getElementById('employee-edit-action-'+id).submit();
        }
    }
</script>