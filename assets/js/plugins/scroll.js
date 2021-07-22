function scrollToArticoli() {
    if ($('.articoli').length != 0) {
      $("html, body").animate({
        scrollTop: $('.articoli').offset().top
      }, 1000);
    }
}