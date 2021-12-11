export const burger = document.querySelector('.burger');
const linea1 = document.querySelector('.linea1');
const linea2 = document.querySelector('.linea2');
const linea3 = document.querySelector('.linea3');

const lineaClose1 = document.querySelectorAll('.linea1');


    export const clickEvent = () => {
        
console.log(lineaClose1[0].className)
        if(lineaClose1[0].className === 'linea1 open'){
            linea1.classList.remove("open");
            linea2.classList.remove("open");
            linea3.classList.remove("open");
            linea1.classList.add("close1");
            linea2.classList.add("close2");
            linea3.classList.add("close3");
        }else if(lineaClose1[0].className === 'linea1 close1'){
            linea1.classList.remove("close1");
            linea2.classList.remove("close2");
            linea3.classList.remove("close3");
            linea1.classList.add("open");
            linea2.classList.add("open");
            linea3.classList.add("open");
        }

    }


