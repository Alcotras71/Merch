import Swiper from 'swiper/bundle';

const slider = (
  selector,
  navigation = {},
  slidesPerView = 1,
  spaceBetween = 0,
  loop = true,
  slidesPerGroup = 1,
  autoplay = false,
  grabCursor = true,
  direction = 'horizontal',
  speed = 1000
) => {
  return new Swiper(selector, {
    direction,
    loop,
    navigation,
    speed,
    spaceBetween,
    slidesPerView,
    grabCursor,
    slidesPerGroup,
    autoplay,
  });
};

export default slider;
