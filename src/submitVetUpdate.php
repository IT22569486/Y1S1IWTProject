<?php 
    include_once'configPet.php';
?>
<?php
    if($_GET['submit']){
        $Vet_ID=$_GET['field0'];
        $First_name=$_GET['field1'];
        $Last_name=$_GET['field2'];
        $DOB=$_GET['field3'];
        $Address=$_GET['field4'];
        $Salary=$_GET['field5'];
        $Specialization=$_GET['field6'];
        $Email=$_GET['field7'];
        
        $query="UPDATE vet SET
                    First_name='$First_name',
                    Last_name='$Last_name',
                    DOB='$DOB',
                    Address='$Address',
                    Salary='$Salary',
                    Specialization='$Specialization',
                    Email='$Email'
                    where V_ID='$Vet_ID'";
        
        $data=mysqli_query($conn,$query);
        
        if($data){
            echo "<script>alert('Record Updated!')</script>";

        }else{
            echo"<script>alert('Error in Update')</script>";
        }
    }
    mysqli_close($conn);
?>

<script>

window.location.href = "vetindex.php";

</script>