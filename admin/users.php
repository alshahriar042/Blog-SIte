<?php include "includes/admin_header.php" ?>

    <div id="wrapper">

        <!-- Navigation -->
        
       <?Php include "includes/admin_navigation.php" ?>       
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                    <h1 class="page-header">
                            WELCOME TO ADMIN
                            <small>AUTHOR</small>
                        </h1>
                       <?php
                      if(isset($_GET['source'])){
                        $source =$_GET['source'];
                        
                       }   else{
                        $source=' ';
                      }
     switch($source) {
         case 'add_user';
          include "includes/add_user.php";
         break;
         case 'edit_user';
          include "includes/edit_user.php";
          break;
         case '200';
         echo "NICE 200s";
          break;
       default:
       include "includes/view_all_users.php"; 
         break;
         
     }

    
                      ?>
                        
                     
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        
          
        </div>
          </div>
           </div>
        
        
        <!-- /#page-wrapper -->

 
    <?php include "includes/admin_footer.php" ?> 
