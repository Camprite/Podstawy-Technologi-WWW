

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
let hourSet = new Set;
let hourSetObjects = new Set;
let day = null;
let dayId = null;
let isDayMarked = false;
let defaultBackgroundColor  = null;
document.addEventListener('click', function ( e ) {
    if(dayId == null && e.target.parentNode.className == "day" ){
        dayId = e.target.parentElement.id;
        defaultBackgroundColor = e.target.style.backgroundColor;
        day = e.target.parentElement;
        day.style.backgroundColor = "blue";
        isDayMarked = true;
        }
});

document.addEventListener('mousedown', function ( e ) {
    // console.log(e);
   
    
    if(e.target.className == "hour" && e.target.parentElement.id == dayId){
    mousePosition = true;
    e.target.style.backgroundColor = "red";
    hourSet.add(e.target.id);
    hourSetObjects.add(e.target);
    console.log(e.target.id);
    // console.log(day);
    }
    document.addEventListener("mouseover", function (event) {
        if(mousePosition){
        isMouseHover = true
        
        // event.target.textContent = "mouse in"
        if(event.target.className == "hour"){
            
            if(event === previous && event.target.parentElement.id == dayId && isDayMarked){
                // console.log("Dupa")
                event.target.style.backgroundColor = "red";
            
            hourSet.add(event.target.id);
            hourSetObjects.add(event.target);
            }
            previous = event;
        }
        }
        });
        
  });

document.addEventListener('mouseup', function (e) {
    if(e.target.className == "hour" && e.target.parentElement.id == dayId && mousePosition == true && isDayMarked){
        e.target.style.backgroundColor = "red";
        hourSet.add(e.target.id);
        hourSetObjects.add(e.target);
        // console.log(e.target.id);
        }
        mousePosition = false;
});
function resetZaznaczonejStrefy(){
    let clear = document.getElementById(dayId);
 
    hourSetObjects.forEach(element => {
        element.style.backgroundColor = defaultBackgroundColor;
        day.style.backgroundColor = defaultBackgroundColor;
        
        console.log(element);
        console.log("tes");
    });

    defaultBackgroundColor = null;
    hourSetObjects = new Set;  
    hourSet = new Set;
    day = null;
    dayId = null;

}