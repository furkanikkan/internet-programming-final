var tooltipTriggerList=[].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList=tooltipTriggerList.map(function(tooltipTriggerEl){return new bootstrap.Tooltip(tooltipTriggerEl)})
$(document).ready(function(){$('.actve12').click(function(){var inputValue=$(this).attr("value");var targetBox=$("."+inputValue);$(".report-box").not(targetBox).hide();$(targetBox).show();});});$(document).ready(function(){$("#end-datetime").on("change",function(e){const isOn=e.currentTarget.checked;if(isOn){$(".end-datetime-wrapper").show();}else{$(".end-datetime-wrapper").hide();}});});$(document).ready(function(){$("#end-datetime-2").on("change",function(e){const isOn=e.currentTarget.checked;if(isOn){$(".end-datetime-wrapper-2").show();}else{$(".end-datetime-wrapper-2").hide();}});});$(document).ready(function(){$("#limit-capacity-switch").on("change",function(e){const isOn=e.currentTarget.checked;if(isOn){$(".limit-capacity-wrapper").show();}else{$(".limit-capacity-wrapper").hide();}});});$('input[name="online-location-switch"]').on('click',function(){var $value=$(this).attr('value');$('.location-wrapper').slideUp();$('[data-method="'+$value+'"]').slideDown();});$('input[name="online-location-switch-1"]').on('click',function(){var $value=$(this).attr('value');$('.location-wrapper-1').slideUp();$('[data-method="'+$value+'"]').slideDown();});$('input[name="online-location-switch-2"]').on('click',function(){var $value=$(this).attr('value');$('.location-wrapper-2').slideUp();$('[data-method="'+$value+'"]').slideDown();});$('.moreless-btn').click(function(){$('.moretext').slideToggle();if($('.moreless-btn').text()=="See more"){$(this).text("See less")}else{$(this).text("See more")}});$('.testi-owl').owlCarousel({loop:true,margin:10,nav:false,dots:true,autoplay:true,autoplayTimeout:4000,autoplayHoverPause:true,responsive:{0:{items:1},600:{items:1},1000:{items:1}}})
$('.related-owl').owlCarousel({loop:true,margin:30,nav:true,navText:["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],responsive:{0:{items:1},600:{items:2},1000:{items:3}}})
$('.organizer-owl').owlCarousel({loop:true,margin:10,nav:true,navText:["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],responsive:{0:{items:1},600:{items:1},1000:{items:3}}})
$('.blog-owl').owlCarousel({loop:true,margin:30,nav:true,navText:["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],responsive:{0:{items:1},600:{items:2},1000:{items:3},1200:{items:4}}})
$('.widget-owl').owlCarousel({loop:true,margin:10,nav:true,navText:["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],responsive:{0:{items:1},600:{items:4},1000:{items:7}}})
window.oncontextmenu=function(){return false;}
$(document).keydown(function(event){if(event.keyCode==123){return false;}
else if((event.ctrlKey&&event.shiftKey&&event.keyCode==73)||(event.ctrlKey&&event.shiftKey&&event.keyCode==74)){return false;}});