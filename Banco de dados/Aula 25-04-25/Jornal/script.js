document.addEventListener("DOMContentLoaded", function () {
    const container = document.getElementById("noticiasContainer");    

    noticias.forEach(noticia => {
        const div = document.createElement("div");
        div.Classname = "noticia";

        div.innerHTML = `
            <img src="${noticia.imagem}" alt="Imagem da notícia">
            <h2>${noticia.titulo}</h2>
            <p>${noticia.texto}</p>
`;

container.appendChild(div);
    });
});