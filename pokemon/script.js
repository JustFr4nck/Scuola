const list = document.getElementById("list");
const sprite = document.getElementById("sprite");


async function menu(){

    const response = await fetch("https://pokeapi.co/api/v2/pokemon?limit=100000&offset=0.");
    const data = await response.json();
    const specie = data.results;


    for(let i = 0; i < specie.length; i++){

        const option = document.createElement("option");
        option.textContent = specie[i].name;
        list.append(option);
    }
}

menu();


async function stampa(pokemon){

    const response = await fetch(`https://pokeapi.co/api/v2/pokemon/${pokemon}`);
    const data = await response.json();
    const pokeSpecie = data.sprites.front_default;

    const show = document.createElement("img");
    show.src = pokeSpecie;
    sprite.appendChild(show);


}
list.addEventListener("change", () =>{

    sprite.innerHTML = "";
    stampa(list.value);
});
