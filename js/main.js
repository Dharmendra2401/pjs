
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
    $('.login-container').load('modal.html .login-help');
  });

  $(document).on('click', '.open-login',function(){
    $('.login-container').load('modal.html .loginContent');
     
  });

  $(document).on('click', '.submit',function(){
    $('.login-container').load('modal.html .submit-contact');
     
  });


  $(document).on('click', '.send-credential',function(){
    $('.login-container').load('modal.html .credential-msg');

    return false;
     
  });

  $(document).on('click', '.contact-modal',function(){
    
      $('.contact-container').load('modal.html .contact-content');
  });

  $(document).on('click', '.contact',function(){
    
      $('.modal-body').load('modal.html .adminform');
  });

  $(document).on('click', '.submit-credential',function(){
    
      $('.modal-body').load('modal.html .verify-msg');
  });

  $(document).on('click', '.login-signup', function(){
      $('.lgn-sgn-container').load('modal.html .lgn-sgn-wrapper');
  });

  $(document).on('click', '.done',function(){
    $('.login-container').load('modal.html .loginContent');
     
  });

  $(document).on('click', '.openBtn-feed',function(){
    
      $('.feeback-body').load('modal.html .feeback');
  });

  $(document).on('click', '.open-update',function(){
    
      $('.update-body').load('modal.html .death-update');
  });

   $(document).on('click', '.feedback-msg',function(){
    
      $('.feeback-body').load('modal.html .feedback-success');
      return false;
  });

    $(document).on('click', '.update-msg',function(){
    
      $('.update-body').load('modal.html .update-success');
      return false;
  });

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
// for mobile menu-------------------------------
    $(".mobile-menu-icon").click(function() {
      $('.navbar-menu').toggle("slide");
    });

// for admin filter in mobile----------------------------
if ($(window).width() < 601) {
   $(".filter-header").click(function() {
      $('#filterForm').toggle("slide");
    });
}



    $(".btn-more").click(function() {
      $('.more-info').show();
      $('.btn-more').hide();
    
    });  