import { CountUp } from 'countup.js';


document.querySelectorAll('.int-js').forEach(function(int) {
  let end = int.dataset.end
  let countUp = new CountUp(int, end, {
    duration: 2,
    startVal: 0,
    separator: '',
    prefix: int.dataset.prefix || '',
    suffix: int.dataset.suffix || '',
    enableScrollSpy: true,
    scrollSpyDelay: 300,
  });
  
  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        countUp.start();
      }
    });
    });
    
  observer.observe(int);
  
})