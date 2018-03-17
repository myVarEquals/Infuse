$(document).ready(function () {

  $('#sidebar-close').on('click', function () {
    document.getElementById('nav-sidebar').style.width = '0px';
    document.main.style.marginLeft = '0px';
    document.body.style.backgroundColor = 'white';
  });

  $('#sidebar-open').on('click', function () {
    document.getElementById('nav-sidebar').style.width = '250px';
    document.main.style.marginLeft = '250px';
    document.body.style.backgroundColor = 'rgba(0,0,0,0.4)';
  });
});
