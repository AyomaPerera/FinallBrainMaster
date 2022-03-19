<?php
session_start();
$con = mysqli_connect("localhost","root","","brain master");

if(isset($_POST['save_select']))
{
      
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
    $grade = $_POST['grade'];

    $folder="doc/";
 
 
 
 // make file name in lower case
 $new_file_name = strtolower($file);
 // make file name in lower case
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  $query = ("INSERT INTO grade(file,grade) VALUES('$final_file','$grade')");
      $data = mysqli_query($con,$query);
  ?>
  <script>
  alert('successfully uploaded');
        window.location.href='Teachers_UploadVideo.php?success';
        </script>
  <?php
 }
 else
 {
  ?>
  <script>
  alert('error while uploading file');
        window.location.href='Teachers_UploadVideo.php?fail';
        </script>
  <?php


 }
}
?>