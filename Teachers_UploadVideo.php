<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uplaod meterial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Teachers_UploadVideo.css">
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                         unset($_SESSION['status']);
                    }
                ?>

                <div class="card mt-5">
                    <div class="card-header">
                        <h4>Insert student Materials</h4>
                    </div>
                    <div class="card-body">

                        <form action="code.php" method="POST" enctype="multipart/form-data">
                            <div class="from-group mb-3">
                                <label for="">File</label>
                                <input type="file" name="file" class="form-control" />
                            </div>
                            <div class="from-group mb-3">
                                <label for="">Grade</label>
                                <select name="grade" class="form-control">
                                    <option value="">--Select Grade--</option>
                                    <option value="Grade 01">Grade 01</option>
                                    <option value="Grade 02">Grade 02</option>
                                    <option value="Grade 03">Grade 03</option>
                                    <option value="Grade 04">Grade 04</option>
                                    <option value="Grade 05">Grade 05</option>
                                    <option value="Grade 06">Grade 06</option>
                                    <option value="Grade 07">Grade 07</option>
                                    <option value="Grade 08">Grade 08</option>
                                    <option value="Grade 09">Grade 09</option>
                                    <option value="Grade 10">Grade 10</option>
                                    <option value="Grade 11">Grade 11</option>
                                </select>
                            </div>
                            <div class="from-group mb-3">
                                <button type="submit" name="save_select" class="btn btn-primary">Save Selectbox</button>
                            </div>
                            <div class="from-group mb-3">
                                <button type="submit" name="" class="btn btn-primary">
                            <a href="class.html"> back</a>        
                            </button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>