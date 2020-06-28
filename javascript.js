// You may edit this file howeever you want. You may use jQuery or plain Javascript.
jQuery(function($) {
  $( document ).ready(function() {
      $("#wrapper > #link").mouseover(function()
      {
          $(this).parent().css({"backgroundColor" :"#c0c0c0"});
      });
      $("#wrapper > #link").mouseout(function()
      {
          $(this).parent().css({"backgroundColor" :"#ffd700"});
      });
  });
});
