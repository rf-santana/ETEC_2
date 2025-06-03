document.addEventListener("DOMContentLoaded", function () {
    const cursosContainer = document.getElementById("cursosContainer");
    const selectCategoria = document.getElementById("categoria");

    function renderizarCursos(filtro) {
        cursosContainer.innerHTML = "";
        const cursosFiltrados = filtro === "todos" ? cursos : cursos.filter(cursos => cursos.categoria === filtro);

        cursosFiltrados.forEach(curso => {
            const div = document.createElement("div");
            div.className = "curso";
            div.innerHTML = `
                <img src="${curso.imagem}" alt="Imagem do curso">
                <div class="info">
                    <H2>${curso.nome}<H2>
                    <p>${curso.descricao}</p>
                    </div>
                    `;
                    cursosContainer.appendChild(div);
        });
    }

    selectCategoria.addEventListener("change", function () {
        renderizarCursos(this.value);
    });

    renderizarCursos("todos");
});