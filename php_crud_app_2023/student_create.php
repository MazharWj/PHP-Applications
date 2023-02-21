<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
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

  <div class="container mt-5">
    <?php include('consts/alert_message.php'); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                     <h4> Add Student
                        <a href="index.php" class="btn btn-danger float-end"> BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="controllers/add_students_controller.php" method="POST" enctype="multipart/form-data">

                        <div class="mb-3">
                            <label>Student Name</label>
                            <input type="text" name="std_name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Student Email</label>
                            <input type="email" name="std_email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Student Phone No.</label>
                            <input type="text" name="std_phone" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Student Course</label>
                            <input type="text" name="std_course" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="add_students_button" class="btn btn-success">Save Student</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>

