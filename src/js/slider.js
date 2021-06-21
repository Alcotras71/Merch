import Swiper from 'swiper/bundle';

export const solutionSlider = (count) => {
  return new Swiper(`#solution-${count}`, {
    loop: true,
    navigation: {
      nextEl: `#solution-${count}-right`,
      prevEl: `#solution-${count}-left`,
    },
    speed: 1000,
    grabCursor: true,
  });
};

export const finishedSolutionSlider = (count) => {
  return new Swiper(`#finished-solution-${count}`, {
    navigation: {
      nextEl: `#finished-solution-${count}-right`,
      prevEl: `#finished-solution-${count}-left`,
    },
    loop: false,
    slidesPerView: 'auto',
    grabCursor: true,
    slidesPerGroup: 2,
    speed: 1000,
    spaceBetween: 13,

    breakpoints: {
      600: {
        spaceBetween: 45,
      },

      1025: {
        loop: true,
        slidesPerGroup: 3,
        spaceBetween: 50,
      },
    },
  });
};
