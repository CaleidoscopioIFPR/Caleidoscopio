var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}

var botao = document.getElementsByClassName("collapsible");
var icon = document.getElementsByClassName("fas fa-arrow-down");
var isFalse = false;
for (let index = 0; index < botao.length; index++) {
  botao[index].addEventListener("click", function(){
    if (icon[index].style.transform == "") {
      icon[index].style.transform = "rotate(180deg)";
  } else if (icon[index].style.transform == "rotate(180deg)") {
      icon[index].style.transform = "rotate(0deg)";
  }
  else if (icon[index].style.transform == "rotate(0deg)") {
      icon[index].style.transform = "rotate(180deg)";
  }
    isFalse = !isFalse;
  })
}
