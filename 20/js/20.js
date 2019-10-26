$(document).ready(function() {
$(".dropdown-menu li a").click(function(){ 
    $(".dropdown-menu li a").removeClass('selected');
   
    $(this).addClass('selected');
    var selText = $(this).text();  
    $(this).parents('.btn-group').find('.dropdown-toggle').html(selText+' <span class="caret"></span>');
  });

  $('.save').click(function() {
            
    if($('#check').is(':checked')){
      $('#check').prop("checked", false);
    }else{
      $('#check').prop("checked", true);
    }
});
$('.click2').click(function() {
    
    if($('#check2').is(':checked')){
      $('#check2').prop("checked", false);
    }else{
      $('#check2').prop("checked", true);
    }
});
$('.click3').click(function() {
    
    if($('#check3').is(':checked')){
      $('#check3').prop("checked", false);
    }else{
      $('#check3').prop("checked", true);
    }
});
$('.click4').click(function() {
    
    if($('#check4').is(':checked')){
      $('#check4').prop("checked", false);
    }else{
      $('#check4').prop("checked", true);
    }
});
$('.click5').click(function() {
    
    if($('#check5').is(':checked')){
      $('#check5').prop("checked", false);
    }else{
      $('#check5').prop("checked", true);
    }
});
$('.click6').click(function() {
    
    if($('#check6').is(':checked')){
      $('#check6').prop("checked", false);
    }else{
      $('#check6').prop("checked", true);
    }
});
$('.click7').click(function() {
    
    if($('#check7').is(':checked')){
      $('#check7').prop("checked", false);
    }else{
      $('#check7').prop("checked", true);
    }
});
$('.click8').click(function() {
    
    if($('#check8').is(':checked')){
      $('#check8').prop("checked", false);
    }else{
      $('#check8').prop("checked", true);
    }
});
});