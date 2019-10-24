$(document).ready(function (){
  
  //img-left
  var modal = document.getElementById("myModal");
  var img = document.getElementById("myImg");
  var modalImg = document.getElementById("img01");
  img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    var swiper = new Swiper('.sw1', {
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  }

  //img-right
  var modalRight = document.getElementById("myModal-2");
  var shoes = document.getElementById("myShoes");
  var modalShoes = document.getElementById("img02");
  shoes.onclick = function(){
    modalRight.style.display = "block";
    modalShoes.src = this.src;
    var swiper2 = new Swiper('.sw2', {
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  }

  $('.close').click(function(){
    $('#myModal').css('display', 'none');
    $('#myModal-2').css('display', 'none');
  });
    
  var elem = document.getElementById("myvideo");
function openFullscreen() {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.mozRequestFullScreen) { /* Firefox */
    elem.mozRequestFullScreen();
  } else if (elem.webkitRequestFullscreen) { /* Chrome, Safari & Opera */
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { /* IE/Edge */
    elem.msRequestFullscreen();
  }
}
});



