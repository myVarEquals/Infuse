$(document).ready(function () {

  $('#sidebar-close, #overlay').on('click', function () {
    document.getElementById('nav-sidebar').style.width = '0px';
    document.getElementById('maincontent').style.marginTop = '1em';
    document.getElementById('overlay').style.display = 'none';
      $('#headcontent').fadeIn();

  });

  $('#burger').on('click', function () {
    document.getElementById('nav-sidebar').style.width = '150px';
    document.getElementById('maincontent').style.marginLeft = '150px';
    document.getElementById('maincontent').style.marginTop = '45px';
    document.getElementById('overlay').style.display = 'inherit';
    $('#headcontent').fadeOut();
  });
});
