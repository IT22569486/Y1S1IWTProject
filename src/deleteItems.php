<?php
    include_once'configPet.php';
?>
<?php
    $V_ID=$_GET['id'];
    $query="DELETE from vet where V_ID ='$V_ID'";
    $data=mysqli_query($conn,$query);
    if($data){
        echo"<script>alert('Record Deleted!!')</script>";
        header("location:vetindex.php" );
    }
    else{
        echo"<script>alert('Error in Delete')</script>";
    }
    mysqli_close($conn);
?>