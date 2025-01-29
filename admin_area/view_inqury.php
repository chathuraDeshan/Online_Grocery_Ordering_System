<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / Inqury
                
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title"><!-- panel-title begin -->
               
                   <i class="fa fa-tags"></i>  View Customer Inqury
                
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
                            
                                          $get_inqury = "select * from inqury";
                                          
                                          $run_inqury = mysqli_query($con,$get_inqury);
                    
                                          while($row_inqury=mysqli_fetch_array($run_inqury)){
                                              
                                              $id = $row_inqury['id'];
                                              
                                              $name = $row_inqury['name'];
                                              
                                              $email = $row_inqury['email'];
                                              
                                              $subject = $row_inqury['subject'];
                                              
                                              $message = $row_inqury['message'];
                                              
                                              $status = $row_inqury['status'];


                                  $get_inqury = "select * from feedback where id='$id'";
                                    
                                  $run_feedback = mysqli_query($con,$get_inqury);
                                              
                                  $row_inqury = mysqli_fetch_array($run_inqury);
                                                      
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
                                    
                                        if($status=='Not Send Feedback Email'){
                                            
                                            echo $status='Not Send Feedback Email';
                                            
                                        }else{
                                            
                                            echo $status='Send Feedback Email';
                                            
                                        }
                                    
                                    ?>
                                   </td>


                                    <td> 
                                     
                                     <a href="index.php?delete_inqury=<?php echo $id; ?>">
                                     
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