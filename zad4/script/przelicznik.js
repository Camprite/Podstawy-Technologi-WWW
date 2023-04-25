function przelicz(){
    let option = document.getElementById("select")
    let val = document.getElementById("wartosc")
    let output = document.getElementById("output")
    switch(option.value){
        case 'dolar' :{
            output.innerText = (parseFloat(val.value) * 4.61).toFixed(2);
            break;
        }
        case 'euro' :{
            output.innerText = (parseFloat(val.value) * 4.22).toFixed(2);
            break;
        }
    }
}
