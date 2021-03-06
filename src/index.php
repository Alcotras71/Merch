<?php
/*
Template Name: Главная страница
*/
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Merch</title>
	<title><?php echo CFS()->get( 'seo_title' ); ?></title>
	<meta name="description" content="<?php echo CFS()->get( 'seo_description' ); ?>" />
	<meta name="keywords" content="<?php echo CFS()->get( 'seo_keywords' ); ?>">
	<?php wp_head(); ?>
    <link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="style-main.css" />
  </head>
  <body>
    <h1 class="invisible-title">Полезный мерч</h1>
    <div class="wrapper">
      <!--! -----------------------------------Start Header-------------------------------- -->
      <header class="header">
        <div class="header__container container">
          <div class="header__logo logo">
            <a href="/">
              <svg
                width="62"
                height="69"
                viewBox="0 0 62 69"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  class="hover--semi-blue"
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M29.064 0.31584C25.5792 1.75221 13.057 9.53893 8.24529 12.1044C-2.09934 17.6204 0.22298 16.223 0.22298 36.9385C0.22298 53.8537 -1.50901 51.3494 11.2081 58.4089C14.6512 60.3209 18.0581 62.5164 21.5151 64.3449C33.5778 70.7286 28.9164 70.8899 43.4477 62.6833C46.8072 60.7867 50.3158 58.865 53.7631 56.7557C63.6691 50.6904 61.8605 55.1371 61.8605 32.069C61.8605 12.7871 65.0711 18.801 40.6826 4.62078C37.9064 3.00643 32.6812 -1.17476 29.064 0.31584Z"
                  fill="#89ACD2"
                />
                <path
                  d="M32.3066 41.7711L37.8479 38.5118V41.0605C38.6457 39.5227 39.4518 38.2879 40.2649 37.3605C41.0766 36.433 42.0582 35.6293 43.2096 34.9521C44.4459 34.2249 45.4219 33.8982 46.1445 33.9677C46.8671 34.0372 47.4546 34.4293 47.9141 35.1385C48.8455 33.4476 49.6934 32.167 50.4606 31.3049C51.2277 30.4428 52.1745 29.678 53.3008 29.0148C54.9604 28.0387 56.2552 27.8329 57.1881 28.4044C58.1195 28.9703 58.5887 30.4442 58.5887 32.8191V43.8304L52.6395 47.3303V37.3201C52.6395 36.5206 52.5044 36.0089 52.2315 35.7878C51.8375 35.4124 51.3391 35.4013 50.7515 35.7475C50.054 36.1577 49.4915 36.7765 49.0627 37.6024C48.6395 38.4256 48.425 39.474 48.425 40.7407V49.8109L42.4758 53.3107V43.6552C42.4758 42.8849 42.4355 42.3843 42.3561 42.1563C42.2322 41.7906 42.0122 41.5653 41.699 41.4791C41.3899 41.3915 41.0209 41.4721 40.6032 41.7196C39.921 42.1215 39.3571 42.7444 38.9186 43.5829C38.48 44.4255 38.2614 45.5115 38.2614 46.845V55.7914L32.3122 59.2912V41.7697L32.3066 41.7711Z"
                  fill="white"
                />
              </svg>
            </a>
          </div>
          <ul class="header__menu menu">
            <li class="menu__item"><a href="#work">о компании</a></li>
            <li class="menu__item">
              <a href="#finished-solution">готовые решения</a>
            </li>
            <li class="menu__item"><a href="#solution">наши работы</a></li>
            <li class="menu__item"><a href="#contacts">контакты</a></li>
          </ul>
          <ul class="header__socials socials">
            <li class="socials__item">
              <a href="mailto:<?php echo CFS()->get( 'email' ); ?>">
                <svg
                  width="62"
                  height="69"
                  viewBox="0 0 62 69"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    class="hover--white"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M28.8283 0.313683C25.3717 1.74024 12.9511 9.47377 8.17842 12.0217C-2.08232 17.5001 0.221172 16.1122 0.221172 36.6861C0.221172 53.4859 -1.49678 50.9987 11.1172 58.01C14.5323 59.9088 17.9116 62.0894 21.3406 63.9054C33.3055 70.2455 28.6819 70.4057 43.0953 62.2551C46.4276 60.3715 49.9077 58.4629 53.3271 56.368C63.1528 50.3441 61.3589 54.7605 61.3589 31.8499C61.3589 12.6998 64.5434 18.6725 40.3527 4.58922C37.599 2.98589 32.4161 -1.16674 28.8283 0.313683Z"
                    fill="#89ACD2"
                  />
                  <path
                    class="hover--blue"
                    d="M30.7492 38.8284C31.9655 38.8284 33.0017 38.3779 33.9177 37.4919C34.8037 36.5759 35.2542 35.5398 35.2542 34.3234C35.2542 33.107 34.8037 32.0709 33.9177 31.1549C33.0017 30.2689 31.9655 29.8184 30.7492 29.8184C29.5328 29.8184 28.4967 30.2689 27.5806 31.1549C26.6947 32.0709 26.2442 33.107 26.2442 34.3234C26.2442 35.5398 26.6947 36.5759 27.5806 37.4919C28.4967 38.3779 29.5328 38.8284 30.7492 38.8284ZM30.7492 19.3066C34.8788 19.3066 38.4077 20.8083 41.336 23.7366C44.2643 26.6649 45.7659 30.1938 45.7659 34.3234V36.5008C45.7659 38.0025 45.2404 39.2789 44.2643 40.3301C43.2131 41.3362 42.0118 41.8318 40.5101 41.8318C38.7081 41.8318 37.2214 41.0809 36.0951 39.5793C34.5935 41.0809 32.8215 41.8318 30.7492 41.8318C28.6919 41.8318 26.9199 41.0809 25.4332 39.6393C23.9916 38.1527 23.2408 36.3957 23.2408 34.3234C23.2408 32.2661 23.9916 30.4941 25.4332 29.0075C26.9199 27.5659 28.6919 26.815 30.7492 26.815C32.8215 26.815 34.5785 27.5659 36.0651 29.0075C37.5067 30.4941 38.2576 32.2661 38.2576 34.3234V36.5008C38.2576 37.1165 38.4978 37.6571 38.9483 38.1226C39.3988 38.5882 39.9244 38.8284 40.5101 38.8284C41.1408 38.8284 41.6664 38.5882 42.1169 38.1226C42.5674 37.6571 42.7626 37.1165 42.7626 36.5008V34.3234C42.7626 31.0347 41.6063 28.2116 39.2337 25.8389C36.861 23.4663 34.0379 22.31 30.7492 22.31C27.4605 22.31 24.6374 23.4663 22.2647 25.8389C19.8921 28.2116 18.7358 31.0347 18.7358 34.3234C18.7358 37.6121 19.8921 40.4352 22.2647 42.8079C24.6374 45.1805 27.4605 46.3368 30.7492 46.3368H38.2576V49.3402H30.7492C26.6196 49.3402 23.0906 47.8385 20.1624 44.9102C17.2341 41.9819 15.7324 38.453 15.7324 34.3234C15.7324 30.1938 17.2341 26.6649 20.1624 23.7366C23.0906 20.8083 26.6196 19.3066 30.7492 19.3066Z"
                    fill="white"
                  />
                </svg>
              </a>
            </li>
            <li class="socials__item">
              <a href="<?php echo CFS()->get( 'telega' ); ?>">
                <svg
                  width="62"
                  height="69"
                  viewBox="0 0 62 69"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    class="hover--white"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M29.0803 0.313683C25.6237 1.74024 13.2031 9.47377 8.43038 12.0217C-1.83036 17.5001 0.473125 16.1122 0.473125 36.6861C0.473125 53.4859 -1.24482 50.9987 11.3691 58.01C14.7843 59.9088 18.1636 62.0894 21.5926 63.9054C33.5574 70.2455 28.9339 70.4057 43.3473 62.2551C46.6796 60.3715 50.1597 58.4629 53.579 56.368C63.4047 50.3441 61.6108 54.7605 61.6108 31.8499C61.6108 12.6998 64.7954 18.6725 40.6046 4.58922C37.8509 2.98589 32.6681 -1.16674 29.0803 0.313683Z"
                    fill="#89ACD2"
                  />
                  <path
                    class="hover--blue"
                    d="M26.5568 42.2898L26.89 37.7898L36.0311 30.4281C36.4358 30.0983 35.9478 29.9388 35.4122 30.226L24.1287 36.5983L19.2486 35.2154C18.2012 34.9494 18.1893 34.3005 19.4867 33.8324L38.4949 27.2792C39.3638 26.9281 40.197 27.4707 39.8637 28.6622L36.6263 42.2898C36.4001 43.2579 35.7455 43.492 34.8409 43.0451L29.9133 39.7898L27.5447 41.843C27.2709 42.0877 27.0448 42.2898 26.5568 42.2898Z"
                    fill="white"
                  />
                  <circle
                    class="hover--blue-stroke"
                    cx="31.0001"
                    cy="34.3244"
                    r="16.3771"
                    stroke="white"
                    stroke-width="3"
                  />
                </svg>
              </a>
            </li>
            <li class="socials__item">
              <a href="<?php echo CFS()->get( 'whatsapp' ); ?>">
                <svg
                  width="62"
                  height="69"
                  viewBox="0 0 62 69"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    class="hover--white"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M29.3303 0.313683C25.8737 1.74024 13.4531 9.47377 8.68038 12.0217C-1.58036 17.5001 0.723125 16.1122 0.723125 36.6861C0.723125 53.4859 -0.994823 50.9987 11.6191 58.01C15.0343 59.9088 18.4136 62.0894 21.8426 63.9054C33.8074 70.2455 29.1839 70.4057 43.5973 62.2551C46.9296 60.3715 50.4097 58.4629 53.829 56.368C63.6547 50.3441 61.8608 54.7605 61.8608 31.8499C61.8608 12.6998 65.0454 18.6725 40.8546 4.58922C38.1009 2.98589 32.9181 -1.16674 29.3303 0.313683Z"
                    fill="#89ACD2"
                  />
                  <path
                    class="hover--blue"
                    d="M31.3177 17.877C22.2926 17.877 14.9369 25.1958 14.9369 34.1759C14.9369 37.0541 15.6973 39.85 17.1188 42.3171L14.8047 50.7708L23.4827 48.5011C25.8795 49.8004 28.5738 50.4912 31.3177 50.4912C40.3429 50.4912 47.6985 43.1723 47.6985 34.1923C47.6985 29.8339 45.996 25.7386 42.905 22.663C39.8139 19.571 35.6981 17.877 31.3177 17.877ZM31.3343 20.6236C34.9708 20.6236 38.3759 22.038 40.9545 24.6037C43.5166 27.1695 44.9381 30.574 44.9381 34.1923C44.9381 41.6592 38.8222 47.7281 31.3177 47.7281C28.8714 47.7281 26.4746 47.0867 24.3918 45.8367L23.896 45.5571L18.7387 46.9058L20.1107 41.9059L19.7801 41.3796C18.4247 39.258 17.6974 36.7416 17.6974 34.1759C17.7139 26.709 23.8133 20.6236 31.3343 20.6236ZM25.5159 26.6432C25.2514 26.6432 24.8051 26.7418 24.4249 27.153C24.0612 27.5642 22.9868 28.5675 22.9868 30.5575C22.9868 32.5641 24.458 34.4884 24.6398 34.7679C24.8712 35.0475 27.549 39.1593 31.6649 40.9027C32.6401 41.3467 33.4005 41.5934 33.9955 41.7743C34.9708 42.0868 35.8634 42.0375 36.5741 41.9388C37.3676 41.8237 38.9875 40.952 39.3346 39.9981C39.6817 39.0441 39.6817 38.2383 39.5825 38.0573C39.4668 37.8929 39.2023 37.7942 38.7891 37.6133C38.3759 37.383 36.3593 36.3962 35.9956 36.2646C35.6154 36.133 35.384 36.0673 35.0699 36.462C34.8055 36.8732 34.0121 37.7942 33.7806 38.0573C33.5327 38.3369 33.3013 38.3698 32.9046 38.1725C32.4748 37.9587 31.1524 37.531 29.5987 36.1495C28.3755 35.064 27.5655 33.7318 27.3176 33.3206C27.1192 32.9259 27.301 32.6792 27.4994 32.4983C27.6812 32.3174 27.9457 32.0213 28.111 31.7746C28.3259 31.5443 28.392 31.3634 28.5242 31.1003C28.6565 30.8207 28.5904 30.5904 28.4912 30.3931C28.392 30.2121 27.5655 28.1727 27.2184 27.3668C26.8878 26.5774 26.5572 26.6761 26.2927 26.6596C26.0613 26.6596 25.7969 26.6432 25.5159 26.6432Z"
                    fill="white"
                  />
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </header>
      <!--? -----------------------------------End Header-------------------------------- -->
      <main class="main">
        <!--! -----------------------------------Start just-do section-------------------------------- -->
        <section class="just-do">
          <div class="container">
            <h3 class="just-do__title title--medium ultrabold blue">
              <?php echo CFS()->get( 'block_1_name' ); ?>
            </h3>
            <h3 class="just-do__subtitle subtitle ultrabold black">
              <?php echo CFS()->get( 'block_1_hastag' ); ?>
            </h3>
            <ul class="just-do__list text--medium">
              <li class="just-do__item-wrapper">
                <div class="hexagon-wrapper just-do__hexagon hexagon--small">
                  <div class="hexagon bg--semi-blue"></div>
                </div>
                <div class="just-do__item"><?php echo CFS()->get( 'block_1_p1' ); ?></div>
              </li>
              <li class="just-do__item-wrapper">
                <div class="hexagon-wrapper just-do__hexagon hexagon--small">
                  <div class="hexagon bg--semi-blue"></div>
                </div>
                <div class="just-do__item"><?php echo CFS()->get( 'block_1_p2' ); ?></div>
              </li>
              <li class="just-do__item-wrapper">
                <div class="hexagon-wrapper just-do__hexagon hexagon--small">
                  <div class="hexagon bg--semi-blue"></div>
                </div>
                <div class="just-do__item">
                  <?php echo CFS()->get( 'block_1_p3' ); ?>
                </div>
              </li>
            </ul>
          </div>
          <div class="just-do__image parallax just-do__image--notebook">
            <img
              data-depth="0.2"
              src="./assets/images/main/notebook.png"
              alt="Блокнот"
            />
          </div>
          <div class="just-do__image parallax just-do__image--packages">
            <img
              data-depth-Y="-0.2"
              src="./assets/images/main/packages.png"
              alt="Пакеты"
            />
          </div>
          <div class="just-do__image parallax just-do__image--charging">
            <img
              data-depth="-0.3"
              src="./assets/images/main/charging.png"
              alt="Зарядка"
            />
          </div>
          <div class="just-do__image parallax just-do__image--hook">
            <img
              data-depth-X="-0.1"
              src="./assets/images/main/hook.png"
              alt="Крюк"
            />
          </div>
          <div class="just-do__image parallax just-do__image--mask">
            <img
              data-depth-X="0.2"
              src="./assets/images/main/mask.png"
              alt="Маска"
            />
          </div>
          <div class="just-do__image parallax just-do__image--powerbank">
            <img
              data-depth-X="0.2"
              src="./assets/images/main/powerbank.png"
              alt="Повербанк"
            />
          </div>
        </section>
        <!--? -----------------------------------End just-do section-------------------------------- -->

        <div class="wrapper-grey">
          <!--! -----------------------------------Start solution section-------------------------------- -->
          <section class="solution">
            <div class="container solution__container">
              <div class="solution__title-wrapper">
                <div class="hexagon-wrapper solution__hexagon hexagon--medium">
                  <div class="hexagon bg--semi-blue"></div>
                </div>
                <h2
                  id="solution"
                  class="solution__title title--big black ultrabold"
                >
                  решения:
                </h2>
              </div>

              <!-- START FIRST SLIDER -->
              <div
                class="swiper-container solution__slider-container"
                id="solution-first"
              >
                <!-- Wrapper -->
                <div class="swiper-wrapper solution__slider-wrapper">
                  <!-- Slide -->
                  <div class="swiper-slide solution__slide">
                    <div class="solution__inner" id="solution-first-inner">
                      <div class="solution__text-wrapper">
                        <h3
                          class="solution__subtitle ultrabold black title--small"
                        >
                          события
                        </h3>
                        <div class="solution__text-inner">
                          <p class="solution__text text--bold text--big">
                            планируете реальное событие?
                          </p>
                          <p
                            class="solution__text text--medium-weight text--big blue"
                          >
                            делегируйте свои дедлайны нам
                          </p>
                        </div>
                        <ul class="just-do__list text--medium">
                          <li
                            class="just-do__item-wrapper solution__item-wrapper"
                          >
                            <div
                              class="hexagon-wrapper just-do__hexagon hexagon--small"
                            >
                              <div class="hexagon bg--semi-blue"></div>
                            </div>
                            <div class="just-do__item">
                              блок мерч для мероприятий
                            </div>
                          </li>
                          <li
                            class="just-do__item-wrapper solution__item-wrapper"
                          >
                            <div
                              class="hexagon-wrapper just-do__hexagon hexagon--small"
                            >
                              <div class="hexagon bg--semi-blue"></div>
                            </div>
                            <div class="just-do__item">
                              блок набор для безопасного мероприятия
                            </div>
                          </li>
                        </ul>
                        <button class="solution__btn btn ultrabold text--small">
                          начать проект
                        </button>
                      </div>
                      <div class="solution__image-wrapper">
                        <div class="solution__square bg--semi-blue">
                          <img
                            class="solution__notebook"
                            src="./assets/images/notebook.png"
                            alt="pen_book"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Slide -->

                  <!-- Slide -->
                  <div class="swiper-slide solution__slide">
                    <div class="solution__inner" id="solution-first-inner">
                      <div class="solution__text-wrapper">
                        <h3
                          class="solution__subtitle ultrabold black title--small"
                        >
                          события
                        </h3>
                        <div class="solution__text-inner">
                          <p class="solution__text text--bold text--big">
                            планируете реальное событие?
                          </p>
                          <p
                            class="solution__text text--medium-weight text--big blue"
                          >
                            делегируйте свои дедлайны нам
                          </p>
                        </div>
                        <ul class="just-do__list text--medium">
                          <li
                            class="just-do__item-wrapper solution__item-wrapper"
                          >
                            <div
                              class="hexagon-wrapper just-do__hexagon hexagon--small"
                            >
                              <div class="hexagon bg--semi-blue"></div>
                            </div>
                            <div class="just-do__item">
                              блок мерч для мероприятий
                            </div>
                          </li>
                          <li
                            class="just-do__item-wrapper solution__item-wrapper"
                          >
                            <div
                              class="hexagon-wrapper just-do__hexagon hexagon--small"
                            >
                              <div class="hexagon bg--semi-blue"></div>
                            </div>
                            <div class="just-do__item">
                              блок набор для безопасного мероприятия
                            </div>
                          </li>
                        </ul>
                        <button class="solution__btn btn ultrabold text--small">
                          начать проект
                        </button>
                      </div>
                      <div class="solution__image-wrapper">
                        <div class="solution__square bg--cup">
                          <img
                            class="solution__cup"
                            src="./assets/images/cup.png"
                            alt="cup"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Slide -->

                  <!-- Slide -->
                  <div class="swiper-slide solution__slide">
                    <div class="solution__inner" id="solution-first-inner">
                      <div class="solution__text-wrapper">
                        <h3
                          class="solution__subtitle ultrabold black title--small"
                        >
                          события
                        </h3>
                        <div class="solution__text-inner">
                          <p class="solution__text text--bold text--big">
                            планируете реальное событие?
                          </p>
                          <p
                            class="solution__text text--medium-weight text--big blue"
                          >
                            делегируйте свои дедлайны нам
                          </p>
                        </div>
                        <ul class="just-do__list text--medium">
                          <li
                            class="just-do__item-wrapper solution__item-wrapper"
                          >
                            <div
                              class="hexagon-wrapper just-do__hexagon hexagon--small"
                            >
                              <div class="hexagon bg--semi-blue"></div>
                            </div>
                            <div class="just-do__item">
                              блок мерч для мероприятий
                            </div>
                          </li>
                          <li
                            class="just-do__item-wrapper solution__item-wrapper"
                          >
                            <div
                              class="hexagon-wrapper just-do__hexagon hexagon--small"
                            >
                              <div class="hexagon bg--semi-blue"></div>
                            </div>
                            <div class="just-do__item">
                              блок набор для безопасного мероприятия
                            </div>
                          </li>
                        </ul>
                        <button class="solution__btn btn ultrabold text--small">
                          начать проект
                        </button>
                      </div>
                      <div class="solution__image-wrapper">
                        <div class="solution__square bg--dark-grey">
                          <img
                            class="solution__pen-book"
                            src="./assets/images/pen_book.png"
                            alt="pen_book"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Slide -->

                  <!-- Slide -->
                  <div class="swiper-slide solution__slide">
                    <div class="solution__inner" id="solution-first-inner">
                      <div class="solution__text-wrapper">
                        <h3
                          class="solution__subtitle ultrabold black title--small"
                        >
                          события
                        </h3>
                        <div class="solution__text-inner">
                          <p class="solution__text text--bold text--big">
                            планируете реальное событие?
                          </p>
                          <p
                            class="solution__text text--medium-weight text--big blue"
                          >
                            делегируйте свои дедлайны нам
                          </p>
                        </div>
                        <ul class="just-do__list text--medium">
                          <li
                            class="just-do__item-wrapper solution__item-wrapper"
                          >
                            <div
                              class="hexagon-wrapper just-do__hexagon hexagon--small"
                            >
                              <div class="hexagon bg--semi-blue"></div>
                            </div>
                            <div class="just-do__item">
                              блок мерч для мероприятий
                            </div>
                          </li>
                          <li
                            class="just-do__item-wrapper solution__item-wrapper"
                          >
                            <div
                              class="hexagon-wrapper just-do__hexagon hexagon--small"
                            >
                              <div class="hexagon bg--semi-blue"></div>
                            </div>
                            <div class="just-do__item">
                              блок набор для безопасного мероприятия
                            </div>
                          </li>
                        </ul>
                        <button class="solution__btn btn ultrabold text--small">
                          начать проект
                        </button>
                      </div>
                      <div class="solution__image-wrapper">
                        <div class="solution__square bg--semi-blue">
                          <img
                            class="solution__bags"
                            src="./assets/images/bags.png"
                            alt="bags"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Slide -->

                  <!-- Slide -->
                  <div class="swiper-slide solution__slide">
                    <div class="solution__inner" id="solution-first-inner">
                      <div class="solution__text-wrapper">
                        <h3
                          class="solution__subtitle ultrabold black title--small"
                        >
                          события
                        </h3>
                        <div class="solution__text-inner">
                          <p class="solution__text text--bold text--big">
                            планируете реальное событие?
                          </p>
                          <p
                            class="solution__text text--medium-weight text--big blue"
                          >
                            делегируйте свои дедлайны нам
                          </p>
                        </div>
                        <ul class="just-do__list text--medium">
                          <li
                            class="just-do__item-wrapper solution__item-wrapper"
                          >
                            <div
                              class="hexagon-wrapper just-do__hexagon hexagon--small"
                            >
                              <div class="hexagon bg--semi-blue"></div>
                            </div>
                            <div class="just-do__item">
                              блок мерч для мероприятий
                            </div>
                          </li>
                          <li
                            class="just-do__item-wrapper solution__item-wrapper"
                          >
                            <div
                              class="hexagon-wrapper just-do__hexagon hexagon--small"
                            >
                              <div class="hexagon bg--semi-blue"></div>
                            </div>
                            <div class="just-do__item">
                              блок набор для безопасного мероприятия
                            </div>
                          </li>
                        </ul>
                        <button class="solution__btn btn ultrabold text--small">
                          начать проект
                        </button>
                      </div>
                      <div class="solution__image-wrapper">
                        <div class="solution__square bg--semi-blue">
                          <img
                            class="solution__bag"
                            src="./assets/images/bag.png"
                            alt="bag"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Slide -->
                </div>
                <div
                  class="solution__arrow-left"
                  id="solution-first-left"
                ></div>
                <div
                  class="solution__arrow-right"
                  id="solution-first-right"
                ></div>
              </div>
              <!-- END FIRST SLIDER -->

              <!-- START SECOND SLIDER -->
              <div
                class="swiper-container solution__slider-container"
                id="solution-second"
              >
                <!-- Wrapper -->
                <div class="swiper-wrapper solution__slider-wrapper">
                  <!-- Slide -->
                  <div class="swiper-slide solution__slide">
                    <div class="solution__inner">
                      <div class="solution__text-wrapper">
                        <h3
                          class="solution__subtitle ultrabold black title--small"
                        >
                          сотрудники
                        </h3>
                        <div class="solution__text-inner">
                          <p class="solution__text text--bold text--big">
                            счастливые сотрудники остаются и растут вместе с
                            вами
                          </p>
                          <p
                            class="solution__text text--medium-weight text--big blue"
                          >
                            проявляйте заботу о них в течение года
                          </p>
                        </div>
                        <button class="solution__btn btn ultrabold text--small">
                          начать проект
                        </button>
                      </div>
                      <div class="solution__image-wrapper">
                        <div class="solution__square bg--black">
                          <img
                            class="solution__cards"
                            src="./assets/images/cards.png"
                            alt="cards"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Slide -->

                  <!-- Slide -->
                  <div class="swiper-slide solution__slide">
                    <div class="solution__inner">
                      <div class="solution__text-wrapper">
                        <h3
                          class="solution__subtitle ultrabold black title--small"
                        >
                          сотрудники
                        </h3>
                        <div class="solution__text-inner">
                          <p class="solution__text text--bold text--big">
                            годовщина работы или день рождения
                          </p>
                          <p
                            class="solution__text text--medium-weight text--big blue"
                          >
                            покажите, как много для вас значат сотрудники <br />
                            поздравьте их
                          </p>
                        </div>
                        <button class="solution__btn btn ultrabold text--small">
                          начать проект
                        </button>
                      </div>
                      <div class="solution__image-wrapper">
                        <div class="solution__square bg--semi-dark-grey">
                          <img
                            class="solution__powerbank"
                            src="./assets/images/powerbank.png"
                            alt="powerbank"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Slide -->

                  <!-- Slide -->
                  <div class="swiper-slide solution__slide">
                    <div class="solution__inner">
                      <div class="solution__text-wrapper">
                        <h3
                          class="solution__subtitle ultrabold black title--small"
                        >
                          сотрудники
                        </h3>
                        <div class="solution__text-inner">
                          <p class="solution__text text--bold text--big">
                            теплый прием сотрудника в первый день
                          </p>
                          <p
                            class="solution__text text--medium-weight text--big blue"
                          >
                            мерч компании быстрее позволит почувствовать себя
                            частью команды
                          </p>
                        </div>
                        <ul class="just-do__list text--medium">
                          <li
                            class="just-do__item-wrapper solution__item-wrapper"
                          >
                            <div
                              class="hexagon-wrapper just-do__hexagon hexagon--small"
                            >
                              <div class="hexagon bg--semi-blue"></div>
                            </div>
                            <div class="just-do__item">Welcome набор</div>
                          </li>
                        </ul>
                        <button class="solution__btn btn ultrabold text--small">
                          начать проект
                        </button>
                      </div>
                      <div class="solution__image-wrapper">
                        <div class="solution__square bg--semi-blue">
                          <img
                            class="solution__bag-tnt"
                            src="./assets/images/bag_tnt.png"
                            alt="bag_tnt"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Slide -->
                </div>
                <div
                  class="solution__arrow-left"
                  id="solution-second-left"
                ></div>
                <div
                  class="solution__arrow-right"
                  id="solution-second-right"
                ></div>
              </div>
              <!-- END SECOND SLIDER -->

              <!-- START THIRD SLIDER -->
              <div
                class="swiper-container solution__slider-container"
                id="solution-third"
              >
                <!-- Wrapper -->
                <div class="swiper-wrapper solution__slider-wrapper">
                  <!-- Slide -->
                  <div class="swiper-slide solution__slide">
                    <div class="solution__inner solution__inner--last">
                      <div class="solution__text-wrapper">
                        <h3
                          class="solution__subtitle ultrabold black title--small"
                        >
                          клиенты
                        </h3>
                        <div class="solution__text-inner">
                          <p class="solution__text text--bold text--big">
                            сохраняйте теплые отношения со своими клиентами
                          </p>
                          <p
                            class="solution__text text--medium-weight text--big blue"
                          >
                            поблагодарите своих клиентов за первое обращение
                          </p>
                        </div>
                        <ul class="just-do__list text--medium">
                          <li
                            class="just-do__item-wrapper solution__item-wrapper"
                          >
                            <div
                              class="hexagon-wrapper just-do__hexagon hexagon--small"
                            >
                              <div class="hexagon bg--semi-blue"></div>
                            </div>
                            <div class="just-do__item">
                              блок вступление в клуб
                            </div>
                          </li>
                        </ul>
                        <button class="solution__btn btn ultrabold text--small">
                          начать проект
                        </button>
                      </div>
                      <div class="solution__image-wrapper">
                        <div class="solution__square bg--dark-grey">
                          <img
                            class="solution__vine"
                            src="./assets/images/vine.png"
                            alt="bottle of vine"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Slide -->

                  <!-- Slide -->
                  <div class="swiper-slide solution__slide">
                    <div class="solution__inner solution__inner--last">
                      <div class="solution__text-wrapper">
                        <h3
                          class="solution__subtitle ultrabold black title--small"
                        >
                          клиенты
                        </h3>
                        <div class="solution__text-inner">
                          <p class="solution__text text--bold text--big">
                            сохраняйте теплые отношения со своими клиентами
                          </p>
                          <p
                            class="solution__text text--medium-weight text--big blue"
                          >
                            поблагодарите своих клиентов за первое обращение
                          </p>
                        </div>
                        <ul class="just-do__list text--medium">
                          <li
                            class="just-do__item-wrapper solution__item-wrapper"
                          >
                            <div
                              class="hexagon-wrapper just-do__hexagon hexagon--small"
                            >
                              <div class="hexagon bg--semi-blue"></div>
                            </div>
                            <div class="just-do__item">
                              блок вступление в клуб
                            </div>
                          </li>
                        </ul>
                        <button class="solution__btn btn ultrabold text--small">
                          начать проект
                        </button>
                      </div>
                      <div class="solution__image-wrapper">
                        <div class="solution__square bg--dark-grey">
                          <img
                            class="solution__tea-box"
                            src="./assets/images/tea_box.png"
                            alt="tea_box"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Slide -->

                  <!-- Slide -->
                  <div class="swiper-slide solution__slide">
                    <div class="solution__inner solution__inner--last">
                      <div class="solution__text-wrapper">
                        <h3
                          class="solution__subtitle ultrabold black title--small"
                        >
                          клиенты
                        </h3>
                        <div class="solution__text-inner">
                          <p class="solution__text text--bold text--big">
                            сохраняйте теплые отношения со своими клиентами
                          </p>
                          <p
                            class="solution__text text--medium-weight text--big blue"
                          >
                            поблагодарите своих клиентов за первое обращение
                          </p>
                        </div>
                        <ul class="just-do__list text--medium">
                          <li
                            class="just-do__item-wrapper solution__item-wrapper"
                          >
                            <div
                              class="hexagon-wrapper just-do__hexagon hexagon--small"
                            >
                              <div class="hexagon bg--semi-blue"></div>
                            </div>
                            <div class="just-do__item">
                              блок вступление в клуб
                            </div>
                          </li>
                        </ul>
                        <button class="solution__btn btn ultrabold text--small">
                          начать проект
                        </button>
                      </div>
                      <div class="solution__image-wrapper">
                        <div class="solution__square bg--semi-dark-grey">
                          <img
                            class="solution__candle"
                            src="./assets/images/candle.png"
                            alt="candle"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Slide -->

                  <!-- Slide -->
                  <div class="swiper-slide solution__slide">
                    <div class="solution__inner solution__inner--last">
                      <div class="solution__text-wrapper">
                        <h3
                          class="solution__subtitle ultrabold black title--small"
                        >
                          клиенты
                        </h3>
                        <div class="solution__text-inner">
                          <p class="solution__text text--bold text--big">
                            сохраняйте теплые отношения со своими клиентами
                          </p>
                          <p
                            class="solution__text text--medium-weight text--big blue"
                          >
                            поблагодарите своих клиентов за первое обращение
                          </p>
                        </div>
                        <ul class="just-do__list text--medium">
                          <li
                            class="just-do__item-wrapper solution__item-wrapper"
                          >
                            <div
                              class="hexagon-wrapper just-do__hexagon hexagon--small"
                            >
                              <div class="hexagon bg--semi-blue"></div>
                            </div>
                            <div class="just-do__item">
                              блок вступление в клуб
                            </div>
                          </li>
                        </ul>
                        <button class="solution__btn btn ultrabold text--small">
                          начать проект
                        </button>
                      </div>
                      <div class="solution__image-wrapper">
                        <div class="solution__square bg--semi-dark-grey">
                          <img
                            class="solution__wood"
                            src="./assets/images/wood.png"
                            alt="wood"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Slide -->
                </div>
                <div
                  class="solution__arrow-left"
                  id="solution-third-left"
                ></div>
                <div
                  class="solution__arrow-right"
                  id="solution-third-right"
                ></div>
              </div>
              <!-- END THIRD SLIDER -->
            </div>
            <div class="parallax solution__box">
              <img
                data-depth-X="-0.5"
                src="./assets/images/box.png"
                alt="box"
              />
            </div>
            <div class="solution__card parallax">
              <img
                data-depth-X="-0.3"
                src="./assets/images/card.png"
                alt="card"
              />
            </div>
          </section>
          <!--? -----------------------------------End solution section-------------------------------- -->

          <!--! -----------------------------------Start work section-------------------------------- -->
        </div>
        <section id="work" class="work">
          <div class="container work__container">
            <div class="solution__title-wrapper">
              <div class="hexagon-wrapper solution__hexagon hexagon--medium">
                <div class="hexagon bg--blue"></div>
              </div>
              <h2 class="solution__title title--big black ultrabold">
                как мы работаем
              </h2>
            </div>
            <ul class="work__list">
              <li class="work__item">
                <div>
                  <div class="hexagon-wrapper solution__hexagon hexagon--arrow">
                    <div class="hexagon bg--semi-blue"></div>
                    <span class="work__number">01</span>
                  </div>
                </div>
                <p class="work__item-text text--big">
                  <?php echo CFS()->get( 'block_3_1' ); ?>
                </p>
              </li>
              <li class="work__item">
                <div>
                  <div class="hexagon-wrapper solution__hexagon hexagon--arrow">
                    <div class="hexagon bg--semi-blue"></div>
                    <span class="work__number">02</span>
                  </div>
                </div>
                <p class="work__item-text text--big">
                 <?php echo CFS()->get( 'block_3_2' ); ?>
                </p>
              </li>
              <li class="work__item">
                <div>
                  <div class="hexagon-wrapper solution__hexagon hexagon--arrow">
                    <div class="hexagon bg--semi-blue"></div>
                    <span class="work__number">03</span>
                  </div>
                </div>
                <p class="work__item-text text--big">
				<?php echo CFS()->get( 'block_3_3' ); ?>
                </p>
              </li>
              <li class="work__item">
                <div>
                  <div class="hexagon-wrapper solution__hexagon hexagon--arrow">
                    <div class="hexagon bg--semi-blue"></div>
                    <span class="work__number">04</span>
                  </div>
                </div>
                <p class="work__item-text text--big">
                  <?php echo CFS()->get( 'block_3_4' ); ?>
                </p>
              </li>
              <li class="work__item">
                <div>
                  <div class="hexagon-wrapper solution__hexagon hexagon--arrow">
                    <div class="hexagon bg--semi-blue"></div>
                    <span class="work__number text--medium">05</span>
                  </div>
                </div>
                <p class="work__item-text text--big">
				<?php echo CFS()->get( 'block_3_5' ); ?>
				</p>
              </li>
              <li class="work__item">
                <div>
                  <div class="hexagon-wrapper solution__hexagon hexagon--arrow">
                    <div class="hexagon bg--semi-blue"></div>
                    <span class="work__number text--medium">06</span>
                  </div>
                </div>
                <p class="work__item-text text--big">
                  <?php echo CFS()->get( 'block_3_6' ); ?>
                </p>
              </li>
            </ul>
          </div>
          <div
            class="work__scotch parallax rellax"
            data-invert-y="true"
            data-rellax-speed="-2"
          >
            <img
              data-depth-Y="-0.2"
              src="./assets/images/scotch.png"
              alt="scotch"
            />
          </div>
        </section>
        <!--? -----------------------------------End work section-------------------------------- -->

        <!--! -----------------------------------Start principles section-------------------------------- -->
        <section class="principles">
          <div class="container principles__container">
            <div class="principles__title-wrapper">
              <div class="hexagon-wrapper solution__hexagon hexagon--medium">
                <div class="hexagon bg--semi-blue"></div>
              </div>
              <h2 class="solution__title title--big black ultrabold">
                принципы:
              </h2>
            </div>
            <ul class="principles__list">
              <li class="principles__item">
                <div class="principles__hexagon-inner">
                  <div class="hexagon-wrapper principles__hexagon hexagon--big">
                    <div class="hexagon bg--semi-blue"></div>
                    <span class="principles__number text--medium">01</span>
                  </div>
                </div>
                <p class="text--medium ultrabold principles__text">
                  <?php echo CFS()->get( 'block_4_1' ); ?>
                </p>
              </li>

              <li class="principles__item">
                <div class="principles__hexagon-inner">
                  <div class="hexagon-wrapper principles__hexagon hexagon--big">
                    <div class="hexagon bg--black"></div>
                    <span class="principles__number text--medium">02</span>
                  </div>
                </div>
                <p class="text--medium ultrabold principles__text">
                  <?php echo CFS()->get( 'block_4_2' ); ?>
                </p>
              </li>

              <li class="principles__item">
                <div class="principles__hexagon-inner">
                  <div class="hexagon-wrapper principles__hexagon hexagon--big">
                    <div class="hexagon bg--semi-blue"></div>
                    <span class="principles__number text--medium">03</span>
                  </div>
                </div>
                <p class="text--medium ultrabold principles__text">
                  <?php echo CFS()->get( 'block_4_3' ); ?>
                </p>
              </li>

              <li class="principles__item">
                <div class="principles__hexagon-inner">
                  <div class="hexagon-wrapper principles__hexagon hexagon--big">
                    <div class="hexagon bg--black"></div>
                    <span class="principles__number text--medium">04</span>
                  </div>
                </div>
                <p class="text--medium ultrabold principles__text">
				<?php echo CFS()->get( 'block_4_4' ); ?>
				</p>
              </li>
            </ul>
          </div>
        </section>
        <!--? -----------------------------------End principles section-------------------------------- -->

        <!--! -----------------------------------Start finished-solutions section-------------------------------- -->
        <section class="finished-solutions">
          <div class="container finished-solutions__container">
            <div class="principles__title-wrapper">
              <div class="hexagon-wrapper solution__hexagon hexagon--medium">
                <div class="hexagon bg--blue"></div>
              </div>
              <h2
                id="finished-solution"
                class="solution__title title--big black ultrabold"
              >
                готовые решения:
              </h2>
            </div>

            <!-- SOLUTION 1 -->
            <div class="finished-solutions__inner">
              <h3 class="finished-solutions__subtitle title--small ultrabold">
                события
              </h3>
              <!-- Container -->
              <div
                class="swiper-container finished-solutions__slider finished-solutions__events"
                id="finished-solution-first"
              >
                <!-- Wrapper -->
                <div class="swiper-wrapper finished-solutions__slider-wrapper">
                  <!-- Slide -->
                  <div
                    class="swiper-slide finished-solutions__slide"
                    style="width: 27.5%"
                  >
                    <div
                      class="finished-solutions__square finished-solutions__square--small bg--dark-grey"
                    >
                      <p
                        class="finished-solutions__slider-text white finished-solutions__slider-text--top text--medium"
                      >
                        Блок наборы <br />
                        <span class="text--bold">от 444р</span>
                      </p>
                      <img
                        class="finished-solutions__cup"
                        src="./assets/images/cup.png"
                        alt="cup"
                      />
                    </div>
                  </div>
                  <!-- Slide -->
                  <div
                    class="swiper-slide finished-solutions__slide"
                    style="width: 50%"
                  >
                    <div
                      class="finished-solutions__square finished-solutions__square--big bg--semi-blue"
                    >
                      <p
                        class="finished-solutions__slider-text text--medium finished-solutions__slider-text--bottom"
                      >
                        <span class="text--bold">от 444р</span> <br />
                        Блок набор для безопасного мероприятия
                      </p>
                      <img
                        class="finished-solutions__bag"
                        src="./assets/images/bag.png"
                        alt="bag"
                      />
                    </div>
                  </div>
                  <!-- Slide -->
                  <div
                    class="swiper-slide finished-solutions__slide"
                    style="width: 25%"
                  >
                    <div
                      class="finished-solutions__square finished-solutions__square--small bg--semi-blue"
                    >
                      <p
                        class="finished-solutions__slider-text text--medium finished-solutions__slider-text--bottom"
                      >
                        <span class="text--bold">от 444р</span> <br />
                        Блок наборы <br />
                        для мероприятий
                      </p>
                      <img
                        class="finished-solutions__blocks"
                        src="./assets/images/blocks.png"
                        alt="blocks"
                      />
                    </div>
                  </div>

                  <!-- NEW BLOCK -->

                  <!-- Slide -->
                  <div
                    class="swiper-slide finished-solutions__slide"
                    style="width: 50%"
                  >
                    <div
                      class="finished-solutions__square finished-solutions__square--big bg--semi-blue"
                    >
                      <p
                        class="finished-solutions__slider-text text--medium finished-solutions__slider-text--bottom"
                      >
                        <span class="text--bold">от 444р</span> <br />
                        Блок набор для безопасного мероприятия
                      </p>
                      <img
                        class="finished-solutions__school-bag"
                        src="./assets/images/school_bag.png"
                        alt="school_bag"
                      />
                    </div>
                  </div>
                  <!-- Slide -->
                  <div
                    class="swiper-slide finished-solutions__slide"
                    style="width: 27%"
                  >
                    <div
                      class="finished-solutions__square finished-solutions__square--small bg--dark-grey"
                    >
                      <p
                        class="finished-solutions__slider-text white finished-solutions__slider-text--top text--medium"
                      >
                        Блок наборы <br />
                        <span class="text--bold">от 444р</span>
                      </p>
                      <img
                        class="finished-solutions__cup"
                        src="./assets/images/cup.png"
                        alt="cup"
                      />
                    </div>
                  </div>
                  <!-- Slide -->
                  <div
                    class="swiper-slide finished-solutions__slide"
                    style="width: 25%"
                  >
                    <div
                      class="finished-solutions__square finished-solutions__square--small bg--semi-blue"
                    >
                      <p
                        class="finished-solutions__slider-text text--medium finished-solutions__slider-text--bottom"
                      >
                        <span class="text--bold">от 444р</span> <br />
                        Блок наборы <br />
                        для мероприятий
                      </p>
                      <img
                        class="finished-solutions__pen-book"
                        src="./assets/images/pen_book.png"
                        alt="pen_book"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="finished-solutions__arrow-left"
                id="finished-solution-first-left"
              ></div>
              <div
                class="events__arrow-right finished-solutions__arrow-right"
                id="finished-solution-first-right"
              ></div>
            </div>

            <!-- SOLUTION 2 -->
            <div class="finished-solutions__inner">
              <h3 class="finished-solutions__subtitle title--small ultrabold">
                сотрудники
              </h3>
              <!-- Container -->
              <div
                class="swiper-container finished-solutions__slider finished-solutions__staff"
                id="finished-solution-second"
              >
                <!-- Wrapper -->
                <div class="swiper-wrapper finished-solutions__slider-wrapper">
                  <!-- Slide -->
                  <div
                    class="swiper-slide finished-solutions__slide"
                    style="width: 27.5%"
                  >
                    <div
                      class="finished-solutions__square finished-solutions__square--small bg--semi-blue"
                    >
                      <p
                        class="finished-solutions__slider-text finished-solutions__slider-text--bottom text--medium"
                      >
                        <span class="text--bold">от 444р</span> <br />
                        Блок набор <br />
                        сотрудники
                      </p>
                      <img
                        class="finished-solutions__recepts"
                        src="./assets/images/recepts.png"
                        alt="recepts"
                      />
                    </div>
                  </div>
                  <!-- Slide -->
                  <div
                    class="swiper-slide finished-solutions__slide"
                    style="width: 27.5%"
                  >
                    <div
                      class="finished-solutions__square finished-solutions__square--small bg--dark-grey"
                    >
                      <p
                        class="finished-solutions__slider-text finished-solutions__slider-text--top white text--medium"
                      >
                        Блок набор <br />
                        сотрудники <br />
                        <span class="text--bold">от 444р</span>
                      </p>
                      <img
                        class="finished-solutions__cards"
                        src="./assets/images/cards.png"
                        alt="cards"
                      />
                    </div>
                  </div>
                  <!-- Slide -->
                  <div
                    class="swiper-slide finished-solutions__slide"
                    style="width: 50%"
                  >
                    <div
                      class="finished-solutions__square finished-solutions__square--big bg--semi-dark-grey"
                    >
                      <p
                        class="finished-solutions__slider-text text--medium white finished-solutions__slider-text--bottom"
                      >
                        <span class="text--bold">от 444р</span> <br />
                        блок набор <br />
                        сотрудники
                      </p>
                      <img
                        class="finished-solutions__powerbank"
                        src="./assets/images/powerbank.png"
                        alt="powerbank"
                      />
                    </div>
                  </div>

                  <!-- New Block -->

                  <!-- Slide -->
                  <div
                    class="swiper-slide finished-solutions__slide"
                    style="width: 27.5%"
                  >
                    <div
                      class="finished-solutions__square finished-solutions__square--small bg--dark-grey"
                    >
                      <p
                        class="finished-solutions__slider-text finished-solutions__slider-text--top white text--medium"
                      >
                        Блок набор <br />
                        сотрудники <br />
                        <span class="text--bold">от 444р</span>
                      </p>
                      <img
                        class="finished-solutions__cards"
                        src="./assets/images/cards.png"
                        alt="cards"
                      />
                    </div>
                  </div>
                  <!-- Slide -->
                  <div
                    class="swiper-slide finished-solutions__slide"
                    style="width: 50%"
                  >
                    <div
                      class="finished-solutions__square finished-solutions__square--big bg--semi-blue"
                    >
                      <p
                        class="finished-solutions__slider-text text--medium white finished-solutions__slider-text--bottom"
                      >
                        <span class="text--bold">от 444р</span> <br />
                        блок набор <br />
                        сотрудники
                      </p>
                      <img
                        class="finished-solutions__bag-tnt"
                        src="./assets/images/bag_tnt.png"
                        alt="bag_tnt"
                      />
                    </div>
                  </div>
                  <!-- Slide -->
                  <div
                    class="swiper-slide finished-solutions__slide"
                    style="width: 27.5%"
                  >
                    <div
                      class="finished-solutions__square finished-solutions__square--small bg--semi-blue"
                    >
                      <p
                        class="finished-solutions__slider-text finished-solutions__slider-text--bottom text--medium"
                      >
                        <span class="text--bold">от 444р</span> <br />
                        Блок набор <br />
                        сотрудники
                      </p>
                      <img
                        class="finished-solutions__recepts"
                        src="./assets/images/recepts.png"
                        alt="recepts"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="finished-solutions__arrow-left"
                id="finished-solution-second-left"
              ></div>
              <div
                class="events__arrow-right finished-solutions__arrow-right"
                id="finished-solution-second-right"
              ></div>
            </div>

            <!-- SOLUTION 3 -->
            <div class="finished-solutions__inner">
              <h3 class="finished-solutions__subtitle title--small ultrabold">
                Клиенты
              </h3>
              <!-- Container -->
              <div
                class="swiper-container finished-solutions__slider finished-solutions__clients"
                id="finished-solution-third"
              >
                <!-- Wrapper -->
                <div class="swiper-wrapper finished-solutions__slider-wrapper">
                  <!-- Slide -->
                  <div
                    class="swiper-slide finished-solutions__slide"
                    style="width: 50%"
                  >
                    <div
                      class="finished-solutions__square finished-solutions__square--big bg--black"
                    >
                      <p
                        class="finished-solutions__slider-text text--medium white finished-solutions__slider-text--top"
                      >
                        Блок набор <br />
                        постоянные <br />
                        клиенты <br />
                        <span class="text--bold">от 444р</span>
                      </p>
                      <img
                        class="finished-solutions__candle"
                        src="./assets/images/candle.png"
                        alt="candle"
                      />
                    </div>
                  </div>
                  <!-- Slide -->
                  <div
                    class="swiper-slide finished-solutions__slide"
                    style="width: 27.5%"
                  >
                    <div
                      class="finished-solutions__square finished-solutions__square--small bg--black"
                    >
                      <p
                        class="finished-solutions__slider-text finished-solutions__slider-text--top text--medium white"
                      >
                        Блок набор <br />
                        постоянные <br />
                        клиенты <br />
                        <span class="text--bold">от 444р</span>
                      </p>
                      <img
                        class="finished-solutions__vine"
                        src="./assets/images/vine.png"
                        alt="vine"
                      />
                    </div>
                  </div>
                  <!-- Slide -->
                  <div
                    class="swiper-slide finished-solutions__slide"
                    style="width: 25%"
                  >
                    <div
                      class="finished-solutions__square finished-solutions__square--small bg--semi-dark-grey"
                    >
                      <p
                        class="finished-solutions__slider-text finished-solutions__slider-text--top text--medium white"
                      >
                        Блок набор <br />
                        постоянные клиенты <br />
                        <span class="text--bold">от 444р</span>
                      </p>
                      <img
                        class="finished-solutions__wood"
                        src="./assets/images/wood.png"
                        alt="wood"
                      />
                    </div>
                  </div>

                  <!-- New Block -->

                  <!-- Slide -->
                  <div
                    class="swiper-slide finished-solutions__slide"
                    style="width: 27.5%"
                  >
                    <div
                      class="finished-solutions__square finished-solutions__square--small bg--black"
                    >
                      <p
                        class="finished-solutions__slider-text finished-solutions__slider-text--top text--medium white"
                      >
                        Блок набор <br />
                        постоянные <br />
                        клиенты <br />
                        <span class="text--bold">от 444р</span>
                      </p>
                      <img
                        class="finished-solutions__vine"
                        src="./assets/images/vine.png"
                        alt="vine"
                      />
                    </div>
                  </div>
                  <!-- Slide -->
                  <div
                    class="swiper-slide finished-solutions__slide"
                    style="width: 27.5%"
                  >
                    <div
                      class="finished-solutions__square finished-solutions__square--small bg--semi-dark-grey"
                    >
                      <p
                        class="finished-solutions__slider-text finished-solutions__slider-text--top text--medium white"
                      >
                        Блок набор <br />
                        постоянные клиенты <br />
                        <span class="text--bold">от 444р</span>
                      </p>
                      <img
                        class="finished-solutions__wood"
                        src="./assets/images/wood.png"
                        alt="wood"
                      />
                    </div>
                  </div>
                  <!-- Slide -->
                  <div
                    class="swiper-slide finished-solutions__slide"
                    style="width: 50%"
                  >
                    <div
                      class="finished-solutions__square finished-solutions__square--big bg--semi-dark-grey"
                    >
                      <p
                        class="finished-solutions__slider-text text--medium white finished-solutions__slider-text--top"
                      >
                        Блок набор <br />
                        постоянные <br />
                        клиенты <br />
                        <span class="text--bold">от 444р</span>
                      </p>
                      <img
                        class="finished-solutions__tea-box"
                        src="./assets/images/tea_box.png"
                        alt="tea_box"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="finished-solutions__arrow-left"
                id="finished-solution-third-left"
              ></div>
              <div
                class="events__arrow-right finished-solutions__arrow-right"
                id="finished-solution-third-right"
              ></div>
            </div>
          </div>
        </section>
        <!--? -----------------------------------End finished-solutions section-------------------------------- -->

        <!--! -----------------------------------Start Clients section-------------------------------- -->
        <section class="clients">
          <div class="container clients__container">
            <div class="principles__title-wrapper">
              <div class="hexagon-wrapper solution__hexagon hexagon--medium">
                <div class="hexagon bg--semi-blue"></div>
              </div>
              <h2 class="solution__title title--big black ultrabold">
                наши клиенты:
              </h2>
            </div>
          </div>
          <!-- Container -->
          <div class="swiper-container clients__slider" id="clients-slider">
            <!-- Wrapper -->
            <div class="swiper-wrapper clients__slider-wrapper">
              <!-- 1 -->
              <div class="swiper-slide clients__slide">
                <div class="principles__hexagon-inner">
                  <div class="hexagon-wrapper clients__hexagon hexagon--big">
                    <div class="hexagon bg--semi-grey"></div>
                    <img
                      class="principles__number clients__number text--medium"
                      src="./assets/images/clients/1.png"
                      alt=""
                    />
                  </div>
                </div>
              </div>
              <!-- 2 -->
              <div class="swiper-slide clients__slide">
                <div class="principles__hexagon-inner">
                  <div class="hexagon-wrapper clients__hexagon hexagon--big">
                    <div class="hexagon bg--semi-grey"></div>
                    <img
                      class="principles__number clients__number text--medium"
                      src="./assets/images/clients/2.png"
                      alt=""
                    />
                  </div>
                </div>
              </div>
              <!-- 3 -->
              <div class="swiper-slide clients__slide">
                <div class="principles__hexagon-inner">
                  <div class="hexagon-wrapper clients__hexagon hexagon--big">
                    <div class="hexagon bg--semi-grey"></div>
                    <img
                      class="principles__number clients__number text--medium"
                      src="./assets/images/clients/3.png"
                      alt=""
                    />
                  </div>
                </div>
              </div>
              <!-- 4 -->
              <div class="swiper-slide clients__slide">
                <div class="principles__hexagon-inner">
                  <div class="hexagon-wrapper clients__hexagon hexagon--big">
                    <div class="hexagon bg--semi-blue"></div>
                    <img
                      class="principles__number clients__number text--medium"
                      src="./assets/images/clients/4.png"
                      alt=""
                    />
                  </div>
                </div>
              </div>
              <!-- 5 -->
              <div class="swiper-slide clients__slide">
                <div class="principles__hexagon-inner">
                  <div class="hexagon-wrapper clients__hexagon hexagon--big">
                    <div class="hexagon bg--semi-grey"></div>
                    <img
                      class="principles__number clients__number text--medium"
                      src="./assets/images/clients/5.png"
                      alt=""
                    />
                  </div>
                </div>
              </div>
              <!-- 6 -->
              <div class="swiper-slide clients__slide">
                <div class="principles__hexagon-inner">
                  <div class="hexagon-wrapper clients__hexagon hexagon--big">
                    <div class="hexagon bg--semi-grey"></div>
                    <img
                      class="principles__number clients__number text--medium"
                      src="./assets/images/clients/6.png"
                      alt=""
                    />
                  </div>
                </div>
              </div>
              <!-- 7 -->
              <div class="swiper-slide clients__slide">
                <div class="principles__hexagon-inner">
                  <div class="hexagon-wrapper clients__hexagon hexagon--big">
                    <div class="hexagon bg--semi-blue"></div>
                    <img
                      class="principles__number clients__number text--medium"
                      src="./assets/images/clients/7.png"
                      alt=""
                    />
                  </div>
                </div>
              </div>
              <!-- 8 -->
              <div class="swiper-slide clients__slide">
                <div class="principles__hexagon-inner">
                  <div class="hexagon-wrapper clients__hexagon hexagon--big">
                    <div class="hexagon bg--semi-blue"></div>
                    <img
                      class="principles__number clients__number text--medium"
                      src="./assets/images/clients/1.png"
                      alt=""
                    />
                  </div>
                </div>
              </div>
              <!-- 9 -->
              <div class="swiper-slide clients__slide">
                <div class="principles__hexagon-inner">
                  <div class="hexagon-wrapper clients__hexagon hexagon--big">
                    <div class="hexagon bg--semi-grey"></div>
                    <img
                      class="principles__number clients__number text--medium"
                      src="./assets/images/clients/2.png"
                      alt=""
                    />
                  </div>
                </div>
              </div>
              <!-- 10 -->
              <div class="swiper-slide clients__slide">
                <div class="principles__hexagon-inner">
                  <div class="hexagon-wrapper clients__hexagon hexagon--big">
                    <div class="hexagon bg--semi-grey"></div>
                    <img
                      class="principles__number clients__number text--medium"
                      src="./assets/images/clients/3.png"
                      alt=""
                    />
                  </div>
                </div>
              </div>
              <!-- 5 -->
              <div class="swiper-slide clients__slide">
                <div class="principles__hexagon-inner">
                  <div class="hexagon-wrapper clients__hexagon hexagon--big">
                    <div class="hexagon bg--semi-grey"></div>
                    <img
                      class="principles__number clients__number text--medium"
                      src="./assets/images/clients/5.png"
                      alt=""
                    />
                  </div>
                </div>
              </div>
              <!-- 6 -->
              <div class="swiper-slide clients__slide">
                <div class="principles__hexagon-inner">
                  <div class="hexagon-wrapper clients__hexagon hexagon--big">
                    <div class="hexagon bg--semi-grey"></div>
                    <img
                      class="principles__number clients__number text--medium"
                      src="./assets/images/clients/6.png"
                      alt=""
                    />
                  </div>
                </div>
              </div>
              <!-- 7 -->
              <div class="swiper-slide clients__slide">
                <div class="principles__hexagon-inner">
                  <div class="hexagon-wrapper clients__hexagon hexagon--big">
                    <div class="hexagon bg--semi-blue"></div>
                    <img
                      class="principles__number clients__number text--medium"
                      src="./assets/images/clients/7.png"
                      alt=""
                    />
                  </div>
                </div>
              </div>
              <!-- 8 -->
              <div class="swiper-slide clients__slide">
                <div class="principles__hexagon-inner">
                  <div class="hexagon-wrapper clients__hexagon hexagon--big">
                    <div class="hexagon bg--semi-blue"></div>
                    <img
                      class="principles__number clients__number text--medium"
                      src="./assets/images/clients/1.png"
                      alt=""
                    />
                  </div>
                </div>
              </div>
              <!-- 9 -->
              <div class="swiper-slide clients__slide">
                <div class="principles__hexagon-inner">
                  <div class="hexagon-wrapper clients__hexagon hexagon--big">
                    <div class="hexagon bg--semi-grey"></div>
                    <img
                      class="principles__number clients__number text--medium"
                      src="./assets/images/clients/2.png"
                      alt=""
                    />
                  </div>
                </div>
              </div>
              <!-- 10 -->
              <div class="swiper-slide clients__slide">
                <div class="principles__hexagon-inner">
                  <div class="hexagon-wrapper clients__hexagon hexagon--big">
                    <div class="hexagon bg--semi-grey"></div>
                    <img
                      class="principles__number clients__number text--medium"
                      src="./assets/images/clients/3.png"
                      alt=""
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--? -----------------------------------End Clients section-------------------------------- -->

        <!--! -----------------------------------Start Start-project section-------------------------------- -->
        <section class="start-project">
          <div class="container start-project__container">
            <div class="principles__title-wrapper">
              <div class="start-project__hexagon-inner">
                <div
                  class="hexagon-wrapper solution__hexagon start-project__hexagon hexagon--medium"
                >
                  <div class="hexagon bg--blue"></div>
                  <img
                    class="principles__number start-project__number text--medium"
                    src="./assets/icons/m.svg"
                    alt=""
                  />
                </div>
              </div>
              <h2
                id="contacts"
                class="solution__title title--big black ultrabold"
              >
                начать проект:
              </h2>
            </div>
            <div class="start-project__inner">
              <div class="start-project__text-inner">
                <p
                  class="start-project__text title--medium ultrabold semi-blue"
                >
                  нам нравится воплощать ваши идеи в
                  <span class="blue">продукт</span>
                </p>
                <div class="start-project__inner-links ultrabold title--medium">
                  <a href="tel:<?php echo CFS()->get( 'block_7_phone' ); ?>" class="start-project__link"
                    ><?php echo CFS()->get( 'block_7_phone' ); ?></a
                  >
                  <a href="mailto:<?php echo CFS()->get( 'block_7_email' ); ?>" class="start-project__link"
                    ><?php echo CFS()->get( 'block_7_email' ); ?></a
                  >
                </div>
              </div>
              <div class="start-project__form text--medium">
					<?php echo do_shortcode( '[contact-form-7 id="5" title="Форма обратной связи"]' ); ?>
              </div>
            </div>
          </div>
          <div
            class="start-project__studio parallax rellax"
            data-invert-y="true"
            data-rellax-speed="-2"
          >
            <img
              data-depth-Y="-0.3"
              src="./assets/images/studio_italia.png"
              alt="studio_italia"
            />
          </div>
        </section>
        <!--? -----------------------------------End Start-project section-------------------------------- -->
      </main>
      <!--! -----------------------------------Start Footer-------------------------------- -->
      <footer class="footer">
        <div class="footer__container container">
          <ul class="footer__menu menu">
            <li class="menu__item">
              <a class="white" href="#work">о компании</a>
            </li>
            <li class="menu__item">
              <a class="white" href="#finished-solution">готовые решения</a>
            </li>
            <li class="menu__item">
              <a class="white" href="#solution">наши работы</a>
            </li>
            <li class="menu__item">
              <a class="white" href="#contacts">контакты</a>
            </li>
          </ul>
          <ul class="header__socials socials">
            <li class="socials__item">
              <a href="mailto:<?php echo CFS()->get( 'email' ); ?>">
                <svg
                  width="62"
                  height="69"
                  viewBox="0 0 62 69"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    class="hover--blue"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M28.8283 0.313683C25.3717 1.74024 12.9511 9.47377 8.17842 12.0217C-2.08232 17.5001 0.221172 16.1122 0.221172 36.6861C0.221172 53.4859 -1.49678 50.9987 11.1172 58.01C14.5323 59.9088 17.9116 62.0894 21.3406 63.9054C33.3055 70.2455 28.6819 70.4057 43.0953 62.2551C46.4276 60.3715 49.9077 58.4629 53.3271 56.368C63.1528 50.3441 61.3589 54.7605 61.3589 31.8499C61.3589 12.6998 64.5434 18.6725 40.3527 4.58922C37.599 2.98589 32.4161 -1.16674 28.8283 0.313683Z"
                    fill="#ffffff"
                  />
                  <path
                    class="hover--white"
                    d="M30.7492 38.8284C31.9655 38.8284 33.0017 38.3779 33.9177 37.4919C34.8037 36.5759 35.2542 35.5398 35.2542 34.3234C35.2542 33.107 34.8037 32.0709 33.9177 31.1549C33.0017 30.2689 31.9655 29.8184 30.7492 29.8184C29.5328 29.8184 28.4967 30.2689 27.5806 31.1549C26.6947 32.0709 26.2442 33.107 26.2442 34.3234C26.2442 35.5398 26.6947 36.5759 27.5806 37.4919C28.4967 38.3779 29.5328 38.8284 30.7492 38.8284ZM30.7492 19.3066C34.8788 19.3066 38.4077 20.8083 41.336 23.7366C44.2643 26.6649 45.7659 30.1938 45.7659 34.3234V36.5008C45.7659 38.0025 45.2404 39.2789 44.2643 40.3301C43.2131 41.3362 42.0118 41.8318 40.5101 41.8318C38.7081 41.8318 37.2214 41.0809 36.0951 39.5793C34.5935 41.0809 32.8215 41.8318 30.7492 41.8318C28.6919 41.8318 26.9199 41.0809 25.4332 39.6393C23.9916 38.1527 23.2408 36.3957 23.2408 34.3234C23.2408 32.2661 23.9916 30.4941 25.4332 29.0075C26.9199 27.5659 28.6919 26.815 30.7492 26.815C32.8215 26.815 34.5785 27.5659 36.0651 29.0075C37.5067 30.4941 38.2576 32.2661 38.2576 34.3234V36.5008C38.2576 37.1165 38.4978 37.6571 38.9483 38.1226C39.3988 38.5882 39.9244 38.8284 40.5101 38.8284C41.1408 38.8284 41.6664 38.5882 42.1169 38.1226C42.5674 37.6571 42.7626 37.1165 42.7626 36.5008V34.3234C42.7626 31.0347 41.6063 28.2116 39.2337 25.8389C36.861 23.4663 34.0379 22.31 30.7492 22.31C27.4605 22.31 24.6374 23.4663 22.2647 25.8389C19.8921 28.2116 18.7358 31.0347 18.7358 34.3234C18.7358 37.6121 19.8921 40.4352 22.2647 42.8079C24.6374 45.1805 27.4605 46.3368 30.7492 46.3368H38.2576V49.3402H30.7492C26.6196 49.3402 23.0906 47.8385 20.1624 44.9102C17.2341 41.9819 15.7324 38.453 15.7324 34.3234C15.7324 30.1938 17.2341 26.6649 20.1624 23.7366C23.0906 20.8083 26.6196 19.3066 30.7492 19.3066Z"
                    fill="#89ACD2"
                  />
                </svg>
              </a>
            </li>
            <li class="socials__item">
              <a href="<?php echo CFS()->get( 'telega' ); ?>">
                <svg
                  width="62"
                  height="69"
                  viewBox="0 0 62 69"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    class="hover--blue"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M29.0803 0.313683C25.6237 1.74024 13.2031 9.47377 8.43038 12.0217C-1.83036 17.5001 0.473125 16.1122 0.473125 36.6861C0.473125 53.4859 -1.24482 50.9987 11.3691 58.01C14.7843 59.9088 18.1636 62.0894 21.5926 63.9054C33.5574 70.2455 28.9339 70.4057 43.3473 62.2551C46.6796 60.3715 50.1597 58.4629 53.579 56.368C63.4047 50.3441 61.6108 54.7605 61.6108 31.8499C61.6108 12.6998 64.7954 18.6725 40.6046 4.58922C37.8509 2.98589 32.6681 -1.16674 29.0803 0.313683Z"
                    fill="#ffffff"
                  />
                  <path
                    class="hover--white"
                    d="M26.5568 42.2898L26.89 37.7898L36.0311 30.4281C36.4358 30.0983 35.9478 29.9388 35.4122 30.226L24.1287 36.5983L19.2486 35.2154C18.2012 34.9494 18.1893 34.3005 19.4867 33.8324L38.4949 27.2792C39.3638 26.9281 40.197 27.4707 39.8637 28.6622L36.6263 42.2898C36.4001 43.2579 35.7455 43.492 34.8409 43.0451L29.9133 39.7898L27.5447 41.843C27.2709 42.0877 27.0448 42.2898 26.5568 42.2898Z"
                    fill="#89ACD2"
                  />
                  <circle
                    class="hover--white-stroke"
                    cx="31.0001"
                    cy="34.3244"
                    r="16.3771"
                    stroke="#89ACD2"
                    stroke-width="3"
                  />
                </svg>
              </a>
            </li>
            <li class="socials__item">
              <a href="<?php echo CFS()->get( 'email' ); ?>">
                <svg
                  width="62"
                  height="69"
                  viewBox="0 0 62 69"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    class="hover--blue"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M29.3303 0.313683C25.8737 1.74024 13.4531 9.47377 8.68038 12.0217C-1.58036 17.5001 0.723125 16.1122 0.723125 36.6861C0.723125 53.4859 -0.994823 50.9987 11.6191 58.01C15.0343 59.9088 18.4136 62.0894 21.8426 63.9054C33.8074 70.2455 29.1839 70.4057 43.5973 62.2551C46.9296 60.3715 50.4097 58.4629 53.829 56.368C63.6547 50.3441 61.8608 54.7605 61.8608 31.8499C61.8608 12.6998 65.0454 18.6725 40.8546 4.58922C38.1009 2.98589 32.9181 -1.16674 29.3303 0.313683Z"
                    fill="#ffffff"
                  />
                  <path
                    class="hover--white"
                    d="M31.3177 17.877C22.2926 17.877 14.9369 25.1958 14.9369 34.1759C14.9369 37.0541 15.6973 39.85 17.1188 42.3171L14.8047 50.7708L23.4827 48.5011C25.8795 49.8004 28.5738 50.4912 31.3177 50.4912C40.3429 50.4912 47.6985 43.1723 47.6985 34.1923C47.6985 29.8339 45.996 25.7386 42.905 22.663C39.8139 19.571 35.6981 17.877 31.3177 17.877ZM31.3343 20.6236C34.9708 20.6236 38.3759 22.038 40.9545 24.6037C43.5166 27.1695 44.9381 30.574 44.9381 34.1923C44.9381 41.6592 38.8222 47.7281 31.3177 47.7281C28.8714 47.7281 26.4746 47.0867 24.3918 45.8367L23.896 45.5571L18.7387 46.9058L20.1107 41.9059L19.7801 41.3796C18.4247 39.258 17.6974 36.7416 17.6974 34.1759C17.7139 26.709 23.8133 20.6236 31.3343 20.6236ZM25.5159 26.6432C25.2514 26.6432 24.8051 26.7418 24.4249 27.153C24.0612 27.5642 22.9868 28.5675 22.9868 30.5575C22.9868 32.5641 24.458 34.4884 24.6398 34.7679C24.8712 35.0475 27.549 39.1593 31.6649 40.9027C32.6401 41.3467 33.4005 41.5934 33.9955 41.7743C34.9708 42.0868 35.8634 42.0375 36.5741 41.9388C37.3676 41.8237 38.9875 40.952 39.3346 39.9981C39.6817 39.0441 39.6817 38.2383 39.5825 38.0573C39.4668 37.8929 39.2023 37.7942 38.7891 37.6133C38.3759 37.383 36.3593 36.3962 35.9956 36.2646C35.6154 36.133 35.384 36.0673 35.0699 36.462C34.8055 36.8732 34.0121 37.7942 33.7806 38.0573C33.5327 38.3369 33.3013 38.3698 32.9046 38.1725C32.4748 37.9587 31.1524 37.531 29.5987 36.1495C28.3755 35.064 27.5655 33.7318 27.3176 33.3206C27.1192 32.9259 27.301 32.6792 27.4994 32.4983C27.6812 32.3174 27.9457 32.0213 28.111 31.7746C28.3259 31.5443 28.392 31.3634 28.5242 31.1003C28.6565 30.8207 28.5904 30.5904 28.4912 30.3931C28.392 30.2121 27.5655 28.1727 27.2184 27.3668C26.8878 26.5774 26.5572 26.6761 26.2927 26.6596C26.0613 26.6596 25.7969 26.6432 25.5159 26.6432Z"
                    fill="#89ACD2"
                  />
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </footer>
      <!--? -----------------------------------End Footer-------------------------------- -->
    </div>
  </body>
  <script src="script.js"></script>
</html>
