// $(document).ready(function(){
//     $( "#money" ).hover(
//         function() {
//           $( this ).append( $( "<a>Select options </a>" ) );
//         }, function() {
//           $( this ).find( "a" ).last().remove();
//         });
// });

$(document).ready(function(){
  var str = document.getElementsByClassName('title'), 
  textContent = str.textContent;
  var res = textContent.substring(0, 4);
  document.getElementsByClassName("title").innerHTML = res;
});