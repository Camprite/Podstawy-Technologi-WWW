

function zaloguj(){
   // document.getElementsByClassName("blurred").style.filter = "blur(1px)";


    document.getElementById("loginSection").style.display = "flex";


}
function zamknijokno(){
    document.getElementById("loginSection").style.display = "none";

}
function rejestracja(){
    window.open("rejestracja.php", '_blank').focus();
    
}
function wyloguj(){
    alert("TEST");
}
let mousePosition = false;
let previous;
let hourSet;
document.addEventListener('mousedown', function ( e ) {
    hourSet = new Set();
    if(e.target.className == "hour"){
    mousePosition = true;
    e.target.style.backgroundColor = "red";
    hourSet.add(e.fromElement);
    // console.log(e.target.id);
    }
    document.addEventListener("mouseover", function (event) {
        if(mousePosition){
        isMouseHover = true
        
        // event.target.textContent = "mouse in"
        if(event.target.className == "hour"){
       
            

            if(event === previous){
                event.target.style.backgroundColor = "red";
            console.log(event.target.id)
            hourSet.add(event.fromElement);
            }
            previous = event;
            
        }
        }

        });
        
  });

document.addEventListener('mouseup', function ( e ) {
    
    if(e.target.className == "hour" && mousePosition == true){
        e.target.style.backgroundColor = "red";
        hourSet.add(e.fromElement);
        // console.log(e.target.id);
        }
        mousePosition = false;
});