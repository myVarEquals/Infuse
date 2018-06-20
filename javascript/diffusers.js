$(document).ready(function () {

  $(window).scroll(function() {
    var scrolling = $(this).scrollTop()

    if (scrolling > $('.ultra-sonic').offset().top - 400) {
      $('.ultra-sonic-image').addClass('ultra-sonic-image-appear')

      $('.ultra-sonic-text').addClass('ultra-sonic-text-appear')
    }

    if (scrolling > $('.nebulizer').offset().top - 400) {
      $('.nebulizer-image').addClass('nebulizer-image-appear')

      $('.nebulizer-text').addClass('nebulizer-text-appear')
    }

  })

})
