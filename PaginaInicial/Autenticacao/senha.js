const passwordInput = document.getElementById("senhaCadastro")
const eyeSVG = document.getElementById("eyeSVG")

function eyeClick(){
    let inputTypeIsPassword = passwordInput.type == "password"

    if(inputTypeIsPassword){
        showPassword()
    }else{
        hidePassword()
    }
}

function showPassword(){
    passwordInput.setAttribute("type", "text")
    eyeSVG.setAttribute("src", "Imagens/eye-regular.svg")

}
function hidePassword(){
    passwordInput.setAttribute("type", "password")
    eyeSVG.setAttribute("src", "Imagens/eye-slash-regular.svg")
}
