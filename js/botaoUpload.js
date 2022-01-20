const uploadBtn = document.getElementById("uploadBtn");

const fileChosen = document.getElementById("file-chosen");

uploadBtn.addEventListener("change", function(){
  fileChosen.textContent = this.files[0].name
})