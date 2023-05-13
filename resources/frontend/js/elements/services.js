
import {slideDown, slideUp} from '../libs/slideToggle'


document.querySelectorAll('.services-box .btn-toggle').forEach(btn => {
  btn.addEventListener('click', () => {
    if (btn.classList.contains('active')) {
      document.querySelectorAll('.services-box .services-item.to-hide').forEach(element => {
        element.classList.add('to-hide')
        slideUp(element);
      });
    }
    else {
      document.querySelectorAll('.services-box .services-item').forEach(element => {
        let styles = window.getComputedStyle(element)
        
        if (styles.display === 'none') {
          element.classList.add('to-hide')
          slideDown(element);
        }
      });
    }
    
    btn.classList.toggle('active')
  })
})
