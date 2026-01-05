$(function() {
    $('.piczoomer').piczoomer();
    $('.piclist li').on('click',function(event){
    var $pic = $(this).find('img');
    $('.piczoomer-pic').attr('src',$pic.attr('src'));
    });
  });