
// -------------ajax live search-------------//
function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    // document.getElementById("livesearch").style.border="0px";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.display="block";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}


  $(document).on('click', '.help-link', function(){
    $('.login-container').load('modal.php .login-help');
  });

  $(document).on('click', '.open-login',function(){
    $('.login-container').load('modal.php .loginContent');
     
  });

  $(document).on('click', '.submit',function(){
    $('.login-container').load('modal.php .submit-contact');
     
  });


  $(document).on('click', '.send-credential',function(){
    $('.login-container').load('modal.php .credential-msg');

    return false;
     
  });


  $(document).on('click', '.submit-credential',function(){
    
      $('.modal-body').load('modal.php .verify-msg');
  });

  $(document).on('click', '.login-signup', function(){
      $('.lgn-sgn-container').load('modal.php .lgn-sgn-wrapper');
  });

  $(document).on('click', '.done',function(){
    $('.login-container').load('modal.php .loginContent');
     
  });

  $(document).on('click', '.openBtn-feed',function(){
    
      $('.feeback-body').load('modal.php .feeback');
  });

  $(document).on('click', '.open-update',function(){
    
      $('.update-body').load('modal.php .death-update');
  });

   $(document).on('click', '.feedback-msg',function(){
    
      $('.feeback-body').load('modal.php .feedback-success');
      return false;
  });

    $(document).on('click', '.update-msg',function(){
    
      $('.update-body').load('modal.php .update-success');
      return false;
  });

  //   $(document).on('click', '.view-link', function(){
  //   $('.profile-detail').load('../modal.html .profile-modal');
  // });

  function displayInput(){
    $(".member-id").toggle();
      $(".done").hide();
  }

  function displayEmailInput(){
    $('.email-id').toggle();
    $(".done").hide();
  }

  function displayDetailForm(){
    $('.update-number').toggle();
    $(".done").hide();
  }
    
    function displayForm(){
      $(".forgot-login").toggle();
      $(".done").hide();
    }



if ($(window).width() < 601) {

  // for mobile menu-------------------------------
    $(".mobile-menu-icon").click(function() {
      $('.navbar-menu').toggle("slide");
    });

    $(".close-icon").click(function() {
      $(".navbar-menu").hide(500);
    });

 // for admin filter in mobile----------------------------   
   $(".filter-header i").click(function() {
      $(".filter-header i").toggleClass("fa-plus fa-minus");
      $('#filterForm').toggle("slide");
    });
}



    $(".btn-more").click(function() {
      $('.more-info').show();
      $('.btn-more').hide();
    
    });  