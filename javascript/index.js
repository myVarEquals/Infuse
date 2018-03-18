$(document).ready(function () {

  $('#sidebar-close').on('click', function () {
    document.getElementById('nav-sidebar').style.width = '0px';
    document.getElementById('maincontent').style.marginLeft = '0px';
    document.body.style.backgroundColor = 'white';
      $('#headcontent').fadeIn();

  });

  $('#burger').on('click', function () {
    document.getElementById('nav-sidebar').style.width = '150px';
    document.getElementById('maincontent').style.marginLeft = '150px';
    document.body.style.backgroundColor = 'rgba(0,0,0,0.4)';
    $('#headcontent').fadeOut();
  });
});
