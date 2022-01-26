var imagemAcervo = document.getElementsByClassName("imgCollection");
var hoverAcervo = document.getElementsByClassName("hover");

for (let index = 0; index < imagemAcervo.length; index++) 
{
    imagemAcervo[index].addEventListener("mouseenter", function() {
        hoverAcervo[index].style.opacity = "0.8";
    })
    imagemAcervo[index].addEventListener("mouseout", function() {
        hoverAcervo[index].style.opacity = "0";
    })
}

var imagemDestaque = document.getElementById("imgHighlight");
        var close = document.getElementsByClassName("menu-toggleSearch");
        var fundo = document.getElementById("fundo");

        function onClickProv(evento, imagem) {

            evento.preventDefault();

            fundo.style.display = "block";
            imagemDestaque.style.display = "block"
            imagemDestaque.setAttribute('src', imagem);


        }
        function closePage() {

            fundo.style.display = "none";
            imagemDestaque.style.display = "none"

        }