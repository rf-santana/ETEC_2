document.addEventListener("DOMContentLoaded", () => {
    const visitorForm = document.getElementById("visitorForm");
    const visitorList = document.getElementById("visitorList");
    
    function loadVisitors() {
        visitorList.innerHTML = ""; 
            const visitors = JSON.parse(localStorage.getItem("visitors")) || [];

            visitors.forEach((visitor, index) => {
                let li = document.createElement("li");
                li.textContent = `${visitor.name} - ${visitor.email}`;

                let deleteBtn = document.createElement("button");
                deleteBtn.textContent = "Remover";
                deleteBtn.onclick = () => removeVisitor(index);

                li.appendChild(deleteBtn);
                visitorList.appendChild(li);
            });
        }

visitorForm.addEventListener("submit", (event) => {
    event.preventDefault();

    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();

    if (!name || !email) {
        alert("Preencha todos os campos!");
        return;
    }

    let visitors = JSON.parse(localStorage.getItem("visitors")) || [];
    visitors.push({ name, email });

    localStorage.setItem("visitors", JSON.stringify(visitors));

    alert("Visitante cadastrado com sucesso!");
    visitorForm.reset();
    loadVisitors();
});

function removeVisitor(index) {
    let visitors = JSON.parse(localStorage.getItem("visitors")) || [];
    visitors.splice(index, 1);
    localStorage.setItem("visitors". JSON.stringify(visitors));
    loadVisitors();
}

loadVisitors();

});