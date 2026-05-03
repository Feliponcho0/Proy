window.addEventListener("DOMContentLoaded", () => {
    const contenedor = document.getElementById("burbujas-container");

    function crearBurbujas(){
        const div = document.createElement("div");
        div.classList.add("burbuja");

        div.style.left = Math.random() * 100 + "%";

        const size = Math.random() * 15 + 10;
        div.style.width = size + "px";
        div.style.height = size + "px";

        div.style.animation = `moverArriba ${Math.random() * 3 + 2}s linear`;

        contenedor.appendChild(div);

        div.addEventListener("animationend", () => {
            div.remove();
        });
    }

    setInterval(crearBurbujas, 300);
});

// const btn = document.querySelector(".btn-toggle");

// if(localStorage.getItem("dark-mode") === "true"){
//     document.body.classList.add("dark-theme");
//     btn.checked = true;
// }

// btn.addEventListener("change", function() {
//     document.body.classList.toggle("dark-theme", btn.checked);

//     localStorage.setItem("dark-mode", btn.checked);
// });
