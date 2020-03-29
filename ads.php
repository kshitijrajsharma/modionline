
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
<div style="margin-left:5%; margin-top: 1%;width:70% ">
    <div class="text-right">
        <button class="btn"><a href="addad.php">Add Ads</a></button>
    </div>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">File</th>
        <th scope="col">Delete</th>
       
        </tr>
    </thead>
    <tbody>
        <?php 
        include('db/connection.php');
        $query=mysqli_query($conn,"select * from ad");
        while($row=mysqli_fetch_array($query)){

        ?>

        <tr>
            <th scope="row"><?php echo $row['id'];?></th>
            <td><?php echo $row['name'];?></td>
            <td><img style="width:100px;height:100px" class="img img-thumbnail" src="images/<?php echo $row['file'];?>" ></td>
            <td><a href="deletead.php?del=<?php echo $row['id'];?>" class="btn btn-danger">Delete</td>
        </tr>
        <?php }?> 
    </tbody>
    </table>

</div>
<?php
include('include/footer.php');
?>



