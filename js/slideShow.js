var div = document.getElementById("items-wrapper")
var item = document.getElementById("item")


div.addEventListener("mouseenter" , function(){

    document.querySelector("#items")
    .addEventListener("wheel" , function(event) {
        if(event.deltaY > 0) 
        {
          event.target.scrollBy(500, 0)
          document.body.style.overflow = "hidden"
        }  
        else 
        {
            event.target.scrollBy(-500, 0)
            document.body.style.overflow = "hidden"
        }
        })
    
})

div.addEventListener("mouseout" , function() {
    document.body.style.overflow = "initial"
})

document.getElementById("gap").addEventListener("mouseenter" , function(){
    document.getElementById("gap").style.cursor = "none"
})


//CARROSEL ARTES E MANIFESTACOES
var div2 = document.getElementById("items-wrapper2")
var item2 = document.getElementById("item2")


div2.addEventListener("mouseenter" , function(){

    document.querySelector("#items2")
    .addEventListener("wheel" , function(event) {
        if(event.deltaY > 0) 
        {
          event.target.scrollBy(500, 0)
          document.body.style.overflow = "hidden"
        }  
        else 
        {
            event.target.scrollBy(-500, 0)
            document.body.style.overflow = "hidden"
        }
        })
    
})

div2.addEventListener("mouseout" , function() {
    document.body.style.overflow = "initial"
})

document.getElementById("gap2").addEventListener("mouseenter" , function(){
    document.getElementById("gap2").style.cursor = "none"
})




   