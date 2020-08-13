
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

  $(document).on('click', '.login-signup', function(){
      $('.lgn-sgn-container').load('modal.html .lgn-sgn-wrapper');
  });

  $(document).on('click', '.done',function(){
    $('.login-container').load('modal.html .loginContent');
     
  });

  function displayInput(){
    $(".member-id").show();
      $(".done").hide();
  }
    
    function displayForm(){
      $(".forgot-login").show();
      $(".done").hide();
    }