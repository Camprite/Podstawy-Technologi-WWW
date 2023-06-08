

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
let day = "";
let dayId = null;
let isDayMarked = false;
document.addEventListener('click', function ( e ) {
    if(dayId == null && e.target.parentNode.className == "day" ){
        dayId = e.target.parentElement.id;
        day = e.target.parentElement;
        day.style.backgroundColor = "blue";
        isDayMarked = true;
        }
});

document.addEventListener('mousedown', function ( e ) {
    console.log(e);
    // if(e.target.parentNode.className == "day" && isDayMarked == false){
    //         try{
    //             day.style.backgroundColor = "inherit";

    //         }catch{}

            
    // }
    
    if(e.target.className == "hour" && e.target.parentElement.id == dayId){
    mousePosition = true;
    e.target.style.backgroundColor = "red";
    hourSet.add(e.target.id);
    console.log(e.target.id);
    // console.log(day);
    }
    document.addEventListener("mouseover", function (event) {
        if(mousePosition){
        isMouseHover = true
        
        // event.target.textContent = "mouse in"
        if(event.target.className == "hour"){
            
            if(event === previous && event.target.parentElement.id == dayId && isDayMarked){
                console.log("Dupa")
                event.target.style.backgroundColor = "red";
            
            hourSet.add(event.target.id);
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
        // console.log(e.target.id);
        }
        mousePosition = false;
});
function resetZaznaczonejStrefy(){

}