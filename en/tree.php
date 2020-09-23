<?php 
include "../config/config.php";

?>

<!DOCTYPE html>
<html>
<head>
 <?php include "../styles.php" ?>
</head>

<body>
   <div class="container-fluid">
       
        <?php include "header.php";  ?>
      </div>
     <div class="row mt-3">
         <div class="col-md-4">
          <form method="post" action="">
                <div class="input-group my-auto">
                  <input type="text" class="form-control" placeholder="Search" id="search" size="30" autocomplete="off" name="search_value" >
                  <div class="input-group-append">
                  <input class="input-group-append" type="submit" name="submit1" value="submit">
                  </div>
                </div>

          </form>
          <div id="searchdata" class="searchdata"></div>
                <!-- <button class="btn btn-primary float-right my-3 save">Save</button> -->
                <?php if(isset($_POST['submit1'])){
                   // echo $_POST['search_value'];
                  include_once 'family_search_member.php';                  
                   

                            }

               
                ?>
         </div>
         <div id="add" class="col-md-4 ">
             
         </div>
     </div>

   </div> 

   <div class="modal fade" id="add-relation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Relation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <select class="form-control">
                      <option>Grandfather</option>
                      <option>Grandmother</option>
                      <option>Father</option>
                      <option>Mother</option>
                      <option>Son</option>
                      <option>Daughter</option>
                      <option>Brother</option>
                      <option>Sister</option>
                      <option>Son-in-law</option>
                      <option>Sister-in-law</option>
                </select>
                <button class="btn btn-primary float-right mt-3">Save</button>
            </div>
        </div>
      </div>
</div> 
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<?php include "../script.php"; ?>


</html>
