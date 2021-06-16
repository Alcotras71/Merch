import slider from './slider';

document.addEventListener('DOMContentLoaded', () => {
  const solutionFirst = slider('#solution-first', {
    nextEl: '#solution-first-right',
    prevEl: '#solution-first-left',
  });

  const solutionSecond = slider('#solution-second', {
    nextEl: '#solution-second-right',
    prevEl: '#solution-second-left',
  });

  const solutionThird = slider('#solution-third', {
    nextEl: '#solution-third-right',
    prevEl: '#solution-third-left',
  });

  const finishedSolutionFirst = slider(
    '#finished-solution-first',
    {
      nextEl: '#finished-solution-first-right',
      prevEl: '#finished-solution-first-left',
    },
    'auto',
    0,
    true,
    3
  );

  const finishedSolutionSecond = slider(
    '#finished-solution-second',
    {
      nextEl: '#finished-solution-second-right',
      prevEl: '#finished-solution-second-left',
    },
    'auto',
    0,
    true,
    3
  );

  const finishedSolutionThird = slider(
    '#finished-solution-third',
    {
      nextEl: '#finished-solution-third-right',
      prevEl: '#finished-solution-third-left',
    },
    'auto',
    0,
    true,
    3
  );

  const clientsSlider = slider(
    '#clients-slider',
    {},
    10,
    100,
    false,
    1,
  );
});
