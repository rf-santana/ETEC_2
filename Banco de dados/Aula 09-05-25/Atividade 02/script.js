document.addEventListener("DOMContentLoaded", function () {
    const container = this.getElementById("eventosContainer");
    const filtroMes = document.getElementById("filtroMes");

    function renderizarEventos(mesSelecionado) {
        container.innerHTML = "";

        const eventosFiltrados = eventos.filter(evento => {
            const mesEvento = evento.data.slice(5, 7);
            return mesSelecionado === "todos" || mesEvento === mesSelecionado;
        });

        eventosFiltrados.forEach(evento => {
            const div = document.createElement("div");
            div.className = "evento";
            div.innerHTML = `
                <img src="${evento.imagem}" alt="Imagem do Evento">
                <div class="info">
                    <h2>${evento.nome}<h2>
                    <p><strong>Data:</strong> ${evento.data}</p>
                    <p>${evento.descricao}</p>
                </div>
            `;
            container.appendChild(div);
        });
    }

    filtroMes.addEventListener("change", () => renderizarEventos(filtroMes.value));
    renderizarEventos("todos");
});