$(document).ready(function () {

  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })

  $(function() {
    if ($(window).width() >= 768) {
      $('main').addClass('mx-auto')
    }
  })

  $(window).resize(function() {
    if ($(window).width() >= 768) {
      $('main').addClass('mx-auto')
    } else {
        $('main').removeClass('mx-auto')
    }
  })
  //Close Sidenav
  $('#sidebar-close, #overlay').on('click', function () {
    document.getElementById('nav-sidebar').style.width = '0px';
    document.getElementById('overlay').style.display = 'none';
    document.getElementById('maincontent').style.marginLeft = '0px';
    $('#side-logo').fadeIn();

  });
  // Open Sidenav
  $('#burger').on('click', function () {
    $('#side-logo').fadeOut();
    document.getElementById('nav-sidebar').style.width = '150px';
    document.getElementById('maincontent').style.marginLeft = '150px';
    document.getElementById('overlay').style.display = 'inherit';
  });

  $(function() {

    $('.step-one .steplists .list').each(function(i) {

      setTimeout(function() {
        $('.step-one .steplists .list').eq(i).addClass('listappear')
      }, 150 * (i+1))
    })

  })

  $(function() {

    $('#landingHeaderWrapper').addClass('headerappear')
    
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
});
