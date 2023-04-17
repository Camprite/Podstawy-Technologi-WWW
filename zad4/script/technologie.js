
function dodajTechnologie(){
    let box = document.getElementById("technologie");
    let item = document.getElementById("input").value;
    let node = document.createElement("li");
    node.textContent = item;
    box.appendChild(node);
}
function usunTechnologie(){
    let box = document.getElementById("technologie");
    let lenght = box.children.length;
    let opacity = [{opacity:'0'}];
    if(lenght>0){
    animation = box.children[lenght-1].animate(opacity,1000);
    
    animation.onfinish = (e) => {
        box.removeChild(box.children[lenght-1]);
        };
    
    }
}
let interval = null;
function usunWszystkieTechnologie(){
    let box = document.getElementById("technologie");
    let i = box.children.length;
        let koniec =i*500
        interval = setInterval(function() {
            let j = box.children.length;
            if(j<=1){
                clearInterval(interval);
                
            }        
            usunTechnologie();
            j--;},500)
 
        
}