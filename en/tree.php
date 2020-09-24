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
                <button id="save-type" class="btn btn-primary float-right mt-3" data-dismiss="modal">Save</button>
            </div>
        </div>
      </div>
</div> 
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<?php include "../script.php"; ?>
<script type="text/javascript">
  $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
   var gender = button.data('gender')
   var member_id= $("#current-users").val();
  // relationship_type_user
   var modal = $(this)
   if (gender=='M') {
    modal.find('.male').css('display','block');
    modal.find('.female').css('display','none');
   }
   else{
    modal.find('.female').css('display','block');
    modal.find('.male').css('display','none');
   }
   //console.log(gender);
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body #referenc-id').val(recipient)
  modal.find('.modal-body #Member_Id').val(member_id)
})
  
  $(".send_request").on("click", function () {
    var member_id=$("#Member_Id").val()
    var reference=$("#referenc-id").val()
    var relationship_type=$("select option:selected").val()
    console.log(member_id);
    console.log(reference);
    console.log(relationship_type);
  })






  $('#save-type').on("click", function () {
     var card = "";
         card += "<div class='card my-2'>";
         card += "<div class='card-body'>";
         card += "<div class='row'>";
         card += "<div class='col-md-2'>";
         card += "<img width='50' src='http://localhost/pjs_user/uploads/ae8c6497745f41803906e384ceff91ddc5b6149d.jpg'>";
         card += "</div>";
         card += "<div class='col-md-10'>";
         card += "<span>Name:</span>";
         card += "<span>munish</span>";
         card += "<br>";
         card += "<span>Brother</span>";
         card += "<span class='badge badge-primary float-right'>Request Sent</span>";
         card += "<br>";
         card += "<span class='badge badge-primary float-right ml-1'>Alive</span>";
         card += "</div>";
         card += "</div>";
         card += "</div>";
         card += "</div>";

    $("#add").append(card);
    $(".user-list-img").appendTo(card);
});


      
</script>
<script>   
        var up = document.getElementById('GFG_UP'); 
        var down = document.getElementById('GFG_DOWN'); 
        up.innerHTML = "Click on the button to " 
                + "copy a DIV into another DIV.";  
          
        function GFG_Fun() { 
            var $el = $('.child').clone(); 
            $('#parent2').append($el); 
            down.innerHTML = "Inner DIV is copied " 
                    + "to another element."; 
        }  
    </script>

</html>