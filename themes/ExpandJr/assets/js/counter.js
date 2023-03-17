/* função de animação dos valores da seção Resultados (home) */
function animateValue(obj, start, end, duration) {
  let startTimestamp = null;
  const step = (timestamp) => {
    if (!startTimestamp) startTimestamp = timestamp;
    const progress = Math.min((timestamp - startTimestamp) / duration, 1);
    obj.innerHTML = Math.floor(progress * (end - start) + start);
    if (progress < 1) {
      window.requestAnimationFrame(step);
    }
  };
  window.requestAnimationFrame(step);
}

const counterNumbers = document.querySelectorAll(".counter_num");

/* feunçao para começar a animação apenas quando os valores aparecerem na tela */
function handleScroll() {
  counterNumbers.forEach(counterNumber => {
    const counterPosition = counterNumber.getBoundingClientRect().top + window.pageYOffset;
    const currentPosition = window.pageYOffset + window.innerHeight;
    if (currentPosition > counterPosition) {
      counterNumber.style.opacity = 1;
      animateValue(counterNumber, 0, parseInt(counterNumber.innerHTML), 1500);
      window.removeEventListener('scroll', handleScroll);
    }
  });
}

window.addEventListener('scroll', handleScroll);