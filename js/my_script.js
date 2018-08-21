$(document).ready(function () {
    var $grid = $('.grid').masonry({
        itemSelector: '.element-item'
    });

    $grid.imagesLoaded().progress( function() {
        $grid.masonry('layout');
    });


    var $news = $('.news-list').masonry({
        itemSelector: '.blog-element-item'
    });

    $news.imagesLoaded().progress( function() {
        $news.masonry('layout');
    });

    var $postlist = $('.post-list').masonry({
        itemSelector: '.post'
    });

    $postlist.imagesLoaded().progress( function() {
        $postlist.masonry('layout');
    });

    var $videolist = $('.video-list').masonry({
        itemSelector: '.video-element-item'
    });

    $videolist.imagesLoaded().progress( function() {
        $videolist.masonry('layout');
    });
    // ---------mobile nav----------------
    $('.top-icon-bar').click(function(){
        $(this).toggleClass('fa-bars');
        $(this).toggleClass('fa-times');
        $('.top-bg-header-menu').toggleClass('top-header-menu-navigation');
        $('.front-page-logo-bg').toggleClass('offset-fpg');
        $('.top-navbar-mobile-fa-bg').toggleClass('offset-fpg-fa');
    });
    $('.icon-bar').click(function(){
        $(this).toggleClass('fa-bars');
        $(this).toggleClass('fa-times');
        $('.bg-header-menu').toggleClass('header-menu-navigation');
        $('.hm-menu').toggleClass('hmc-menu');
    });
    //------------arrow scroll top--------------------
    $('a[href^="#top"]').click(function(){
      var $element = $('a[name=' + $(this).attr('href').substr(1) + ']');
      if($element.length == 1) { 
       $('html, body').animate({ scrollTop: $element.offset().top }, 1000);
   }     
   return false;
});
});


//----------top fixed header--------------
$(document).ready ( function(f){
    var element = f('#header-top-navbar');
    f(window).scroll(function(){
        element['fade'+ (f(this).scrollTop() > 600 ? 'In': 'Out')](300);           
    });
});
//---------arrow scroll-------------------
$(document).ready ( function(f){
    var element = f('#arrow-top');
    f(window).scroll(function(){
        element['fade'+ (f(this).scrollTop() > 500 ? 'In': 'Out')](300);           
    });
});