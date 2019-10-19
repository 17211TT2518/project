
  //img-left
  var modal = document.getElementById("myModal");
  var img = document.getElementById("myImg");
  var modalImg = document.getElementById("img01");
  img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
  }
  var span = document.getElementsByClassName("close")[0];
  span.onclick = function() {
    modal.style.display = "none";
  }

  //img-right
  var modalRight = document.getElementById("myModal-2");
  var shoes = document.getElementById("myShoes");
  var modalShoes = document.getElementById("img02");
  shoes.onclick = function(){
    modalRight.style.display = "block";
    modalShoes.src = this.src;
  }
  var span = document.getElementsByClassName("close")[0];
  span.onclick = function() {
    modalRight.style.display = "none";
  }




