const x = document.getElementById("menu");
function showMenu(){
    const menuId = document.getElementById("mainMenu");
    console.log(menuId);

    if(menuId==null){
    const nav = document.createElement("nav");
    const a1 = document.createElement("a");
    const a2 = document.createElement("a");
    const a3 = document.createElement("a");
    x.style.visibility="visible"
    nav.setAttribute("id","mainMenu");
    a1.textContent="Strona główna"       // NAZWA PIERWSZEJ OPCJI
    a1.href="index.html"                //LINK DO PIERWSZEJ OPCJI    
    a2.textContent="TEST"                                                   
    a2.href="kalkulator.html"
    a3.textContent="TEST"
    a3.href="galeria.html"
    nav.append(a1,a2,a3);
    x.append(nav);
    const animation = nav.animate({ opacity: 1 }, 1000);
   const promise = new Promise((res,rej)=>{
    animation.play();
    res();
   })
   setTimeout(()=>{
    nav.style.opacity="1"
   },999);
}
else{
    menuId.parentNode.removeChild(menuId)
    x.style.visibility="hidden"
}
}