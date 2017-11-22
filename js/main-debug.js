$(document).ready(function(){

  $("body").fadeIn(2000);
  $('.text-home div').addClass('animacao-text');

  $('.background_home1').addClass('animacao-background-home1');
  $('.page-name').addClass('animacao-titulopagina-boot');

  $(".menu-item a").click(function(event){
    event.preventDefault();
    linkLocation = this.href;
    $("body").fadeOut(500, redirectPage);
  });

  function redirectPage() {
    window.location = linkLocation;
  }

  $(".menu-icon-container a").click(function(){
    $('.menu-icon-container').toggleClass('animacao-menu');
    $('.footer-menu').toggleClass('footer-menu-view');
    $('.social-menu').toggleClass('social-menuview');
    $('#primary-menu').toggleClass('menulist');
    $('.menu-icon-container').toggleClass('animacao-menu-close');
    $('.menu-icon-container').toggleClass('animacao-iconcontainer');
    $('.page-name').toggleClass('page-name-view');
    $('.content-menu').fadeIn();

  });

  $("#menu-item-14,#menu-item-15,#menu-item-21,#menu-item-22").click(function(){

    $('.page-name').toggleClass('page-name-view');
    $('.page-name').addClass('animacao-titulopagina');

    $('.page-name').removeClass('animacao-titulopagina-boot');
  });


  $('.hamburger, .page-name').click(function(){
    var hamburger = $('.hamburger');
    hamburger.toggleClass('ativo');
    header.toggleClass('open');
    if (hamburger.hasClass('ativo')) {
      hamburger.find('.texto').html('fechar');
    } else {
      hamburger.find('.texto').html('menu');
    }
  });
});


