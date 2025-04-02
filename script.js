
const lista = document.getElementById("lista");
const dogImg = document.getElementById("dogImg");


async function menu(){

    const response = await fetch("https://dog.ceo/api/breeds/list/all");
    const data = await response.json();
    const breeds = data.message;

   

    for(let element in breeds) {
       
        const opzione = document.createElement("option");
        opzione.innerHTML = element;
        lista.append(opzione);
    };

}

menu();


async function printImg(cane){

    const response = await fetch(`https://dog.ceo/api/breed/${cane}/images`);
    const data = await response.json();
    const dogImmagine = data.message;

   for(let i = 0; dogImmagine.length > i; i++){

    console.log(dogImmagine[i]);
        const imagin = document.createElement("img");
        imagin.src = dogImmagine[i];
        dogImg.appendChild(imagin);
   }
}
lista.addEventListener('change', element =>{

    dogImg.innerHTML = "";

    printImg(lista.value);


});