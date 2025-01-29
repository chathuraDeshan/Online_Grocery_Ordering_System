<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_feedback'])){
        
        $delete_id = $_GET['delete_feedback'];
        
        $delete_feedback = "delete from feedback where id='$delete_id'";
        
        $run_delete = mysqli_query($con,$delete_feedback);
        
        if($run_delete){
            
            echo "<script>alert('One costumer Feedback has been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_feedback','_self')</script>";
            
        }
        
    }

?>

<?php } ?>
