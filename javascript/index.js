$(document).ready(function () {

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

  $('#sidebar-close, #overlay').on('click', function () {
    document.getElementById('nav-sidebar').style.width = '0px';
    document.getElementById('overlay').style.display = 'none';
    document.getElementById('maincontent').style.marginLeft = '0px';
  //  document.getElementById('maincontent').style.marginTop = '0';

      $('#side-logo').fadeIn();

  });

  $('#burger').on('click', function () {
    $('#side-logo').fadeOut();
    document.getElementById('nav-sidebar').style.width = '150px';
    document.getElementById('maincontent').style.marginLeft = '150px';
  //  document.getElementById('maincontent').style.marginTop = '55px';
    document.getElementById('overlay').style.display = 'inherit';
  });
});
