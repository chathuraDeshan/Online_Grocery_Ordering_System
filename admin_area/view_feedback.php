<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / FeedBack
                
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title"><!-- panel-title begin -->
               
                   <i class="fa fa-tags"></i>  View Customer Feedback
                
               </h3><!-- panel-title finish --> 
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> No: </th>
                                <th> Customer Name: </th>
                                <th> Customer Email: </th>
                                <th> Subject: </th>
                                <th> Message: </th>
                                <th> Status: </th>
                                <th> Delete: </th>
                                <th> Feedback Edit: </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
                                          $i=0;
                            
                                          $get_feedback = "select * from feedback";
                                          
                                          $run_feedback = mysqli_query($con,$get_feedback);
                    
                                          while($row_feedback=mysqli_fetch_array($run_feedback)){
                                              
                                              $id = $row_feedback['id'];
                                              
                                              $name = $row_feedback['name'];
                                              
                                              $email = $row_feedback['email'];
                                              
                                              $subject = $row_feedback['subject'];
                                              
                                              $message = $row_feedback['message'];
                                              
                                              $status = $row_feedback['status'];


                                  $get_feedback = "select * from feedback where id='$id'";
                                    
                                  $run_feedback = mysqli_query($con,$get_feedback);
                                              
                                  $row_feedback = mysqli_fetch_array($run_feedback);
                                                      
                                  $i++;
                                  

                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $id; ?> </td>
                                <td> <?php echo $email; ?> </td>
                                <td> <?php echo $name; ?></td>
                                <td> <?php echo $subject; ?> </td>
                                <td> <?php echo $message; ?></td>
                                <td>
                                    
                                    <?php 
                                    
                                        if($status=='pending'){
                                            
                                            echo $status='pending';
                                            
                                        }else{
                                            
                                            echo $status='Complete';
                                            
                                        }
                                    
                                    ?>
                                    

                                    </td>
                                <td> 
                                     
                                     <a href="index.php?delete_feedback=<?php echo $id; ?>">
                                     
                                        <i class="fa fa-trash-o"></i> Delete
                                    
                                     </a> 
                                     
                                </td>


                            </tr><!-- tr finish -->
                            
                            <?php } ?>
                            
                        </tbody><!-- tbody finish -->
                        
                    </table><!-- table table-striped table-bordered table-hover finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php } ?>