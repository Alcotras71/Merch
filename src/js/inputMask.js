import Inputmask from 'inputmask';

const mask = () => {
  const inputsTel = document.querySelectorAll('input[type="tel"]');
  new Inputmask('+7(999) 999-99-99').mask(inputsTel);
};

export default mask;
