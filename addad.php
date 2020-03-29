
<?php
session_start();
if($_SESSION['email']==true){

}else{
    header('location:admin_login.php');
}
?>
<?php
$page='ads';
include('include/header.php');
 ?>
<div style="margin-left:5%; width:70% ">
<div>
    <ul class="breadcrumb">
    <li class="breadcrumb-item active"><a href='home.php'>Home </a></li>
    <li class="breadcrumb-item active"><a href='ads.php'>Ads </a></li>
        <li class="breadcrumb-item active">Add Ads</li>
    </ul>
</div>
    <form   method="post" name="newsform" enctype="multipart/form-data">
        <h1> Add Ads</h1>
        <hr>
        <div class="form-group">
            <label for="email">Title</label>
            <input type="text" placeholder="Enter News Title" name="title" class="form-control" id="email">
        </div>     
       
    
     
        <div class="form-group">
            <label for="email">Picture File</label>
            <input type="file"  name="thumbnailnew" class="form-control img-thumbnail" id="email">
        </div>
        
        <input type="submit" name="submit" class="btn btn-primary" value="Add Ads">
    </form>
    
</div>
<?php
include('include/footer.php');
?>
<?php
  

  include('db/connection.php');
  if(isset($_POST["submit"])){
    $title=$_POST['title'];
    if($title!=""){
      
      $thumbnail=$_FILES['thumbnailnew']['name'];
      
      $tmp_thumbnail=$_FILES['thumbnailnew']['tmp_name'];
     

      move_uploaded_file($tmp_thumbnail,"images/$thumbnail");
          
            $query=mysqli_query($conn,"insert into ad (name,file) values('$title','$thumbnail')");
            if($query){
              echo "<script> alert('Ad Uploaded Successfully')</script>";
              echo "<script>window.location='ads.php';</script>";
            }else {
              # code...
              echo "<script> alert('Please Try Again ')</script>";
          }
        }
        
  }

?>

