$(document).ready(function () {

  $(function() {

    $('.step-one .steplists .list').each(function(i) {

      setTimeout(function() {
        $('.step-one .steplists .list').eq(i).addClass('listappear')
      }, 150 * (i+1))
    })

  })



  $(window).scroll(function() {

    var scrolling = $(this).scrollTop()

    if (scrolling > $('.step-three').offset().top - 500) {

      $('.step-three .steplists .list').each(function(i) {

        setTimeout(function() {
          $('.step-three .steplists .list').eq(i).addClass('listappear')
        }, 150 * (i+1))
      })

    }

    if (scrolling > $('.step-two').offset().top - 500) {

      $('.step-two .steplists .list').each(function(i) {

        setTimeout(function() {
          $('.step-two .steplists .list').eq(i).addClass('listappear')
        }, 150 * (i+1))
      })

    }

  })

})
