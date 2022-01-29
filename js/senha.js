const passwordInput = document.getElementById("password")
const eyeSVG = document.getElementsById("eyeSVG")

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
    eyeSVG.setAttribute("src", "eye-regular.svg")

}
function hidePassword(){
    passwordInput.setAttribute("type", "password")
    eyeSVG.setAttribute("src", "eye-slash-regular.svg")
}
