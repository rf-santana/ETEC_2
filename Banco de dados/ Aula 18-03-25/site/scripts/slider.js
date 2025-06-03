let index = 0;

function mudarSlide(direcao) {
    const slides = document.querySelector(".slider");
    const imagens = document.querySelectorAll(".slider img");
    const totalSlides = imagens.length;
    index += direcao;
    if (index < 0) {
        index = totalSlides - 1;
    }   else if (index >= totalSlides) {
        index = 0;
    }

    slides.style.transform = `translateX(${-index * 100}%)`;

}

setInterval(() => mudarSlide(1), 5000);