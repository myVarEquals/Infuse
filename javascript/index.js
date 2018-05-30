$(document).ready(function () {

  $('#sidebar-close, #overlay').on('click', function () {
    document.getElementById('nav-sidebar').style.width = '0px';
    document.getElementById('overlay').style.display = 'none';
    document.getElementById('maincontent').style.marginLeft = '0px';
    document.getElementById('maincontent').style.marginTop = '0';

      $('#headcontent').fadeIn();

  });

  $('#burger').on('click', function () {
    $('#headcontent').fadeOut();
    document.getElementById('nav-sidebar').style.width = '150px';
    document.getElementById('maincontent').style.marginLeft = '150px';
    document.getElementById('maincontent').style.marginTop = '55px';
    document.getElementById('overlay').style.display = 'inherit';
  });
});
