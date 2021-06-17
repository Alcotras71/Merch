import Parallax from 'parallax-js';
import Rellax from 'rellax';

const parallax = (paralaxClass = '.parallax', rellaxClass = '.rellax') => {
  const scenes = document.querySelectorAll(paralaxClass);
  scenes.forEach((scene) => {
    new Parallax(scene, {
      relativeInput: true,
    });
  });

  new Rellax(rellaxClass, {
    center: true,
  });
};

export default parallax;
