$(document).ready(function(){function a(){window.location=linkLocation}$("body").fadeIn(2e3),$(".text-home div").addClass("animacao-text"),$(".background_home1").addClass("animacao-background-home1"),$(".page-name").addClass("animacao-titulopagina-boot"),$(".menu-item a").click(function(e){e.preventDefault(),linkLocation=this.href,$("body").fadeOut(500,a)}),$(".menu-icon-container a").click(function(){$(".menu-icon-container").toggleClass("animacao-menu"),$(".footer-menu").toggleClass("footer-menu-view"),$(".social-menu").toggleClass("social-menuview"),$("#primary-menu").toggleClass("menulist"),$(".menu-icon-container").toggleClass("animacao-menu-close"),$(".menu-icon-container").toggleClass("animacao-iconcontainer"),$(".page-name").toggleClass("page-name-view"),$(".content-menu").fadeIn()}),$("#menu-item-14,#menu-item-15,#menu-item-21,#menu-item-22").click(function(){$(".page-name").toggleClass("page-name-view"),$(".page-name").addClass("animacao-titulopagina"),$(".page-name").removeClass("animacao-titulopagina-boot")}),$(".hamburger, .page-name").click(function(){var a=$(".hamburger");a.toggleClass("ativo"),header.toggleClass("open"),a.hasClass("ativo")?a.find(".texto").html("fechar"):a.find(".texto").html("menu")})});