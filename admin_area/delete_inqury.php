<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_inqury'])){
        
        $delete_id = $_GET['delete_inqury'];
        
        $delete_inqury = "delete from inqury where id='$delete_id'";
        
        $run_delete = mysqli_query($con,$delete_inqury);
        
        if($run_delete){
            
            echo "<script>alert('One costumer Inqury has been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_inqury','_self')</script>";
            
        }
        
    }

?>

<?php } ?>
