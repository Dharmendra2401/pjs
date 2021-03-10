<?php include "../config/config.php" ;

?>

<!DOCTYPE>
<html>
<head>

<?php  include "styles.php" ?>
    
</head>

<body>
<?php  include "header.php" ?>

<div class="row mx-0">
    <div class="col-md-2 px-0 menu-wrapper">
        <?php  include "sidebar.php" ?>
    </div>
    <div class="col-md-9 dashboard-wrapper business-wrapper" style="background-color: #FFFFFF;">
        <div class="mf mt-5">  
            <div class="row">
              <div class="col-md-3 col-6">
                <span class="">
                  <p>Contact details</p>
                </span>
              </div>

              <div class="col-md-3 col-6">
                <span class="">
                  <p>Business info</p>
                </span>
              </div>

              <div class="col-md-3 col-6">
                <span class="">
                  <p>Business address</p>
                </span>
              </div>

              <div class="col-md-3 col-6">
                <span class="">
                  <p>Social links</p>
                </span>
              </div>
            </div>

          <form id="save">

            <div class="part1 stage mx-2 mt-5">
              <div class="row">
                <div class="col-md-8 ">
                  <div class="row pb-2">
                    <div class="col-md-3 ">
                      <div class="form-group">
                        <label>Member ID</label>
                      </div>
                    </div>
                    <div class="col-md-9">
                      <div class="form-group">
                        <input type="text" placeholder="Member Id" name="" class="form-control">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3 ">
                      <div class="form-group">
                        <label>Owner name</label>
                      </div>
                    </div>
                    <div class="col-md-9">
                      <div class="form-group">
                        <input type="text" placeholder="Owner name" name="" class="form-control">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="avatar" style="cursor: pointer;">
                        <i class="fas fa-plus-circle plus-circle3 fa-4x" style="color: #A5A5A5; margin-left: 80px;margin-top: 20px;"></i>
                      </label>
                      <input type="file" name="" id="avatar" name="avatar" accept="image/png, image/jpeg" style="display: none;">
                  </div>
                </div>
              </div>
                
              
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-3  mx-0">
                      <div class="form-group">
                        <label>Mobile number</label>
                      </div>
                    </div>
                    <div class="col-md-9">
                      <div class="form-group">
                        <input type="text" placeholder="Enter mobile number" name="" class="form-control">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-3 ">
                      <div class="form-group">
                        <label>Alternate number</label>
                      </div>
                    </div>
                    <div class="col-md-9">
                      <div class="form-group">
                        <input type="text" placeholder="Enter alternate mobile number" name="" class="form-control">
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-3 ">
                      <div class="form-group">
                        <label>E-mail Id</label>
                      </div>
                    </div>
                    <div class="col-md-9">
                      <div class="form-group">
                        <input type="text" placeholder="Enter e-mail id" name="" class="form-control">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-3 ">
                      <div class="form-group">
                        <label>Alternate E-mail Id</label>
                      </div>
                    </div>
                    <div class="col-md-9">
                      <div class="form-group">
                        <input type="text" placeholder="Enter alternate e-mail id" name="" class="form-control">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="part2 stage">
                <div class="row mt-5">
                  <div class="col-md-8 ">
                    <div class="row">
                      <div class="col-md-3 pt-1">
                        <div class="form-group">
                          <label>Business Name</label>
                        </div>
                      </div>
                      <div class="col-md-9 mb-2">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Enter email" id="bn">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-3 pt-1">
                        <div class="form-group">
                          <label>Business Type</label>
                        </div>
                      </div>
                      <div class="col-md-9 mb-2">
                        <div class="form-group">
                          <select class="custom-select" id="inputGroupSelect01">
                              <option selected>Retailer</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label>Business Mode</label>
                        </div>
                      </div>
                      <div class="col-md-9 mb-2">
                        <div class="form-group">
                          <select class="custom-select" id="inputGroupSelect01">
                              <option selected>Product</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label>Category</label>
                        </div>
                      </div>
                      <div class="col-md-9 mb-2">
                        <div class="form-group">
                          <select class="custom-select" id="inputGroupSelect01">
                              <option selected>Categories...</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label>Description</label>
                        </div>
                      </div>
                      <div class="col-md-9 mb-2">
                        <div class="form-group">
                          <textarea class="form-control ta" id="ta" rows="3" placeholder="" ></textarea>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label>Website</label>
                        </div>
                      </div>
                      <div class="col-md-9 mb-2">
                        <div class="form-group">
                          <input type="text" name="" class="form-control">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label>Timings</label>
                        </div>
                      </div>
                      <div class="col-md-9 mb-2">
                        <div class="form-group">
                          <select class="custom-select" id="inputGroupSelect01">
                              <option selected>Select</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="upload-content" style="text-align: center;">
                      <i class="fas fa-image fa-3x"></i>
                      <p>Business Logo/Image</p>
                      <button type="button">
                        <label for="file">
                          Upload
                        </label>
                      </button>
                      <input class="" type="file" id="file" style="display:none;"/>
                      <!-- <button class="btn btn-primary">Upload</button> -->
                    </div>
                  </div>
                </div>
            </div>


            <div class="part3 stage mt-5">
                <div class="row ">
                  <div class="col-md-6 ">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label>Country</label>
                        </div>
                      </div>
                      <div class="col-md-9">
                        <div class="form-group">
                          <select class="custom-select" id="inputGroupSelect01">
                              <option selected>India</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 ">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label>State</label>
                        </div>
                      </div>
                      <div class="col-md-9">
                        <div class="form-group">
                          <select class="custom-select" id="inputGroupSelect01">
                              <option selected>Indore</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </div>

                <div class="row ">
                  <div class="col-md-6 ">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label>City</label>
                        </div>
                      </div>
                      <div class="col-md-9">
                        <div class="form-group">
                          <select class="custom-select" id="inputGroupSelect01">
                              <option selected>Indore</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 ">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label>Area</label>
                        </div>
                      </div>
                      <div class="col-md-9">
                        <div class="form-group">
                          <select class="custom-select" id="inputGroupSelect01">
                              <option selected>Indore</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              
                <div class="row ">
                  <div class="col-md-6 ">
                    <div class="row">
                      <div class="col-md-3  pt-1">
                        <div class="form-group">
                          <label>Area</label>
                        </div>
                      </div>
                      <div class="col-md-9">
                        <div class="form-group">
                          <select class="custom-select" id="inputGroupSelect01">
                              <option selected>Indore</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-2  pt-1">
                        <div class="form-group">
                          <label>Description</label>
                        </div>
                      </div>
                      <div class="col-md-10">
                        <div class="form-group">
                          <textarea class="form-control ta" id="ta" rows="3" placeholder="" ></textarea>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <!-- <div class="form-group"> -->
                      <input type="radio" name="" id="">
                      <span class="radio-4" style="font-size: 16px; color: #A5A5A5;">Want to add additional address</span>
                    <!-- </div> -->
                  </div>
                </div>

            </div>


            <div class="part4 stage mt-5">
                <div class="row">
                  <div class="col-md-8 ">
                    <div class="row">
                      <div class="col-md-3 pl-5 pt-1">
                        <div class="form-group">
                          <label>Facebook</label>
                        </div>
                      </div>
                      <div class="col-md-9 mb-3">
                        <div class="form-group">
                          <input type="text" name="" placeholder="www.test.com" class="form-control">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-3 pl-5 pt-1">
                        <div class="form-group">
                          <label>Instagram</label>
                        </div>
                      </div>
                      <div class="col-md-9 mb-3">
                        <div class="form-group">
                          <input type="text" name="" placeholder="www.test.com" class="form-control">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-3 pl-5 pt-1">
                        <div class="form-group">
                          <label>Twitter</label>
                        </div>
                      </div>
                      <div class="col-md-9 mb-3">
                        <div class="form-group">
                          <input type="text" name="" placeholder="www.test.com" class="form-control">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-3 pl-5 pt-1">
                        <div class="form-group">
                          <label>LinkedIn</label>
                        </div>
                      </div>
                      <div class="col-md-9 mb-3">
                        <div class="form-group">
                          <input type="text" name="" placeholder="www.test.com" class="form-control">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>

            <div style="overflow:auto;">
              <div class="mr-5" style="float:right; padding-bottom: 50px; padding-top: 30px;">
                <button type="button" class="btn btn-primary" id="nextBtn" onclick="nextPrev(1)">Next</button>
              </div>
            </div>

          </form>
        </div>
    </div>    
</div>


<script>
  var currentTab = 0; // Current tab is set to be the first tab (0)
  showTab(currentTab);

  function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("stage");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:

  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Save";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("stage");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("save").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() 
{
  var valid=true;
  if (valid) 
  {
    document.getElementsByClassName("col-6")[currentTab].className += " finish";
    }
    return valid;
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("col-6");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
  }
</script>
<?php include "modal.php"; ?>
<?php include "script.php"; ?>

<script>
$(document).ready(function(){
  $(".toggle-menu").click(function(){
    $(".menu").toggle();
  });
});
</script>
</body>
</html>