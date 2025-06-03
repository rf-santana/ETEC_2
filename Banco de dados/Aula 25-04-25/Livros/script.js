document.addEventListener("DOMContentLoaded", function () {
    const lista = document.getElementById("listaLivros");

    livros.forEach(item => {
        const li = document.createElement("li");
        li.innerHTML = `
            <img src="${item.imagem}" alt="Imagem do Livro">
            <span>${item.nome}</span>
            ${item.descricao}
            `;
            lista.appendChild(li);         
    });
});