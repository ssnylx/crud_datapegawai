document.addEventListener('DOMContentLoaded', function () {
  const carousel = document.getElementById('carousel');
  const content = document.getElementById('content');
  const items = document.querySelectorAll('.item');
  const prevButton = document.getElementById('prev');
  const nextButton = document.getElementById('next');

  let currentIndex = 0;
  const itemCount = items.length;
  const itemWidth = items[0].clientWidth;

  function updateCarousel() {
    content.style.transform = `translateX(-${currentIndex * itemWidth}px)`;
  }

  prevButton.addEventListener('click', function () {
    if (currentIndex > 0) {
      currentIndex--;
      updateCarousel();
    }
  });

  nextButton.addEventListener('click', function () {
    if (currentIndex < itemCount - 1) {
      currentIndex++;
      updateCarousel();
    }
  });

  // Initial update
  updateCarousel();
});
