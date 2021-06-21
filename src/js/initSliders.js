import { finishedSolutionSlider, solutionSlider } from './slider';
import Swiper from 'swiper/bundle';

const initSliders = () => {
  const solutionFirst = solutionSlider('first');
  const solutionSecond = solutionSlider('second');
  const solutionThird = solutionSlider('third');

  const finishedSolutionFirst = finishedSolutionSlider('first');
  const finishedSolutionSecond = finishedSolutionSlider('second');
  const finishedSolutionThird = finishedSolutionSlider('third');

  const clientsSlider = new Swiper('#clients-slider', {
    slidesPerView: 6,
    spaceBetween: 20,
    loop: true,
    grabCursor: true,
    autoplay: {
      delay: 500,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
    breakpoints: {
      1025: {
        spaceBetween: 100,
        slidesPerView: 11,
      },
    },
  });
};

export default initSliders;
