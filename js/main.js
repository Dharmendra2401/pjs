
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

  function displayInput(){
    $(".member-id").toggle();
      $(".done").hide();
  }


$(".notification i").click(function(){
    
    $(this).toggleClass("rotate-icon");

  });

$(document).mouseup(function(e) 
{
    var container = $(".notification i");
    if (!container.is(e.target) && container.has(e.target).length === 0) 
    {
        container.removeClass("rotate-icon");
    }
});



 

    
  



if ($(window).width() < 601) {

  // for mobile menu-------------------------------
      $(".mobile-menu-icon").click(function(){
    $(".navbar-menu").slideToggle("slow");
    $(".fa-bars, .fa-times").toggleClass("fa-bars fa-times");
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