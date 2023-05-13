import IMask from 'imask';

document.querySelectorAll('input[phone]').forEach(el => {
  let phoneMask = IMask(el, {
    mask: '+{7} (#00) 000 - 00 - 00',
    overwrite: 'shift',
    definitions: {
      '#': /[01234569]/
    },
  });
  
  el.addEventListener('focus', (e) => {
    phoneMask.updateOptions({
      lazy: false,
    });
    
    if (e.relatedTarget) {
      el.click()
    }
  });
  
  el.addEventListener('input', () => {
    validate(el);
  });
  validate(el);
  
  function validate(el) {
    if (!phoneMask.masked.isComplete) {
      el.setCustomValidity('Введите действующий телефон');
    }
    else {
      el.setCustomValidity('');
    }
  }
});
