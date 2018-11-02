$(function() {
     var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
console.log (pgurl);
//console.log($(".sub li").attr("class"));
     $(".site-menu-item").removeClass('active');
     console.log($(".site-menu-item a").attr("class"));

     $(".site-menu-item a").each(function(){
//console.log($(this).attr("href"));
          if($(this).attr("href") == pgurl){
          	
           $(this).parent().addClass("active");
           $(this).closest('.site-menu-item').addClass("active");
           $(this).closest('ul').removeAttr("style");
           $(this).parent().addClass("active");
         }
     })
});