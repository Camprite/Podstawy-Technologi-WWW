let Lp = 1;
function dodajKontakt(){
let imie = document.getElementById("INPimie");
let nazwisko = document.getElementById("INPnazwisko");
let mail = document.getElementById("INPmail");
let wiek = document.getElementById("INPwiek");
let dataur = document.getElementById("INPdataur")
let plecK = document.getElementById("plecK")
let grupa = document.getElementById("INPgrupa")
let plec = "Mężczyzna"
if(plecK.checked){
    plec = "Kobieta"
}

// Dogo biega
if(grupa.value=="Przyjaciele"){
    let dogo = document.getElementById("piesel")
    dogo.className="pieselanimation"
    dogo.src = "../src/dog.gif"
    setTimeout(() => {
        dogo.src = "../src/dogstop.gif"
        dogo.className="piesel"
      }, 5000);
    //   dogo.style="transform: rotate(-90deg)";
    
      const bieganko = [
        { transform: "rotate(360deg) translateX(11vw) "},
        { transform: "rotate(0deg) translateX(11vw) "},

 
      ];
      
      const biegankoczas = {
        duration: 5000,
        iterations: 1,
      };
      
        dogo.animate(bieganko,biegankoczas)
}


// console.log(imie.value)
// console.log(nazwisko.value)
// console.log(mail.value)
// console.log(wiek.value)
// console.log(dataur.value)
// console.log(grupa.value)
// console.log(plec)
let child;    
let element
let output = document.getElementById("output")


element = document.createElement("tr")
element.className=grupa.value
child = document.createElement("td")
child.innerText= Lp
Lp++
element.appendChild(child)
child = document.createElement("td")
child.innerText= imie.value
element.appendChild(child)
child = document.createElement("td")
child.innerText=nazwisko.value
element.appendChild(child)
child = document.createElement("td")
child.innerText=mail.value
element.appendChild(child)
child = document.createElement("td")
child.innerText=wiek.value
element.appendChild(child)
child = document.createElement("td")
child.innerText=dataur.value
element.appendChild(child)
child = document.createElement("td")
child.innerText=plec
element.appendChild(child)
child = document.createElement("td")
child.innerText=grupa.value
element.appendChild(child)


output.appendChild(element);


}