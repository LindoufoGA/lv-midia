function initAccordion() {
  const accordionList = document.querySelectorAll(".js-accordion dt");
  const ativoClass = "ativo";

  if (accordionList.length) {
    accordionList[0].classList.add(ativoClass);
    accordionList[0].nextElementSibling.classList.add(ativoClass);

    function activeAccordion() {
      this.classList.toggle(ativoClass);
      this.nextElementSibling.classList.toggle(ativoClass);
    }

    accordionList.forEach((item) => {
      item.addEventListener("click", activeAccordion);
    });
  }
}
initAccordion();

function initAnimaScroll() {
  const sections = document.querySelectorAll(".js-content");
  if (sections.length) {
    const heigth = window.innerHeight * 0.6;

    function animaScroll() {
      sections.forEach((item) => {
        const distanciaTop = item.getBoundingClientRect().top;
        const secaoVisivel = distanciaTop - heigth < 0;
        if (secaoVisivel) {
          item.classList.add("ativo");
        }
      });
    }
    animaScroll();
    window.addEventListener("scroll", animaScroll);
  }
}
initAnimaScroll();
