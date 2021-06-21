const burgerMenu = (selector, modalSelector) => {
  const burger = document.querySelector(selector);
  const modal = document.querySelector(modalSelector);

  function closeMenu() {
    modal.classList.remove('active');
    burger.removeAttribute('data-close');
    document.body.style.overflow = '';
  }

  function openMenu() {
    modal.classList.add('active');
    burger.setAttribute('data-close', '');
    document.body.style.overflow = 'hidden';
  }

  modal.addEventListener('click', (e) => {
    if (
      (e.target === modal && modal.classList.contains('active')) ||
      (e.target.getAttribute('data-close') === '' &&
        modal.classList.contains('active'))
    ) {
      closeMenu();
    } else if (e.target === burger) {
      openMenu();
    }
  });

  window.addEventListener('keydown', (e) => {
    if (e.code === 'Escape' && modal.classList.contains('active')) {
      closeMenu();
    }
  });
};

export default burgerMenu;
