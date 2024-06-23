$(document).ready(function () {
  const $prevButton = $('#prev');
  const $nextButton = $('#next');
  const $content = $('#content');
  const $items = $('.item');

  let currentIndex = 0;

  function updateCarousel() {
    const itemWidth = $items.eq(currentIndex).outerWidth();
    $content.css('transform', `translateX(-${itemWidth * currentIndex}px)`);
  }

  $prevButton.on('click', function () {
    if (currentIndex > 0) {
      currentIndex--;
      updateCarousel();
    }
  });

  $nextButton.on('click', function () {
    if (currentIndex < $items.length - 1) {
      currentIndex++;
      updateCarousel();
    }
  });

  // Perbarui carousel saat ukuran jendela berubah
  $(window).on('resize', function () {
    updateCarousel();
  });

  // Jalankan fungsi updateCarousel untuk inisialisasi
  updateCarousel();
});
