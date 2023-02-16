$(document).ready(function(){
    $('.menu-secondaire a').click(function(){
      $('.menu-secondaire a').removeClass("actif");
      $(this).addClass("actif");
  });
  });