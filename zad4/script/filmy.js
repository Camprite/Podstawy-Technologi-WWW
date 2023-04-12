let counter = 0;

function dodaj(){
    let title = document.getElementById("inTitle");   
    let director = document.getElementById("inDirector");
    let date = document.getElementById("inDate");
    let element = document.getElementById("output");
    let outElement = document.createElement("tr");

    let child1 = document.createElement("td");
    child1.innerHTML = counter;

    let child2 = document.createElement("td");
    child2.innerHTML = title.value;

    let child3 = document.createElement("td");
    child3.innerHTML = director.value;

    let child4 = document.createElement("td");
    child4.innerHTML = date.value;
    

    outElement.appendChild(child1);
    outElement.appendChild(child2);
    outElement.appendChild(child3);
    outElement.appendChild(child4);
    // outElement.appendChild(document.createElement("td").innerHTML= title);
    // outElement.appendChild(document.createElement("td").innerHTML = director);
    // outElement.appendChild(document.createElement("td").innerHTML = date);
    element.appendChild(outElement)
    counter++;
}