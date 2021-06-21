import parallax from './parallax';
import initSLiders from './initSliders';
import inputMask from './inputMask';
import scrollByAnchors from './smoothScroll';
import burgerMenu from './burgerMenu';

document.addEventListener('DOMContentLoaded', () => {
  // Parallax + Rellax
  parallax();

  // Sliders
  initSLiders();

  // Mask
  inputMask();

  // Scroll
  scrollByAnchors();

  // Menu
  burgerMenu('.burger', '.header');
});
