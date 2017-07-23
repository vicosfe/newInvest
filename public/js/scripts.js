$(document).ready(function(){
// checker **************************************************

 (function($){
  $.fn.viewportChecker = function(useroptions){
        // Define options and extend with user
        var options = {
          classToAdd: 'visible',
          classToRemove : 'invisible',
          classToAddForFullView : 'full-visible',
          removeClassAfterAnimation: false,
          offset: 100,
          repeat: false,
          invertBottomOffset: true,
          callbackFunction: function(elem, action){},
          scrollHorizontal: false,
          scrollBox: window
        };
        $.extend(options, useroptions);

        // Cache the given element and height of the browser
        var $elem = this,
        boxSize = {height: $(options.scrollBox).height(), width: $(options.scrollBox).width()},
        scrollElem = ((navigator.userAgent.toLowerCase().indexOf('webkit') != -1 || navigator.userAgent.toLowerCase().indexOf('windows phone') != -1) ? 'body' : 'html');

        /*
         * Main method that checks the elements and adds or removes the class(es)
         */
         this.checkElements = function(){
          var viewportStart, viewportEnd;

            // Set some vars to check with
            if (!options.scrollHorizontal){
              viewportStart = $(scrollElem).scrollTop();
              viewportEnd = (viewportStart + boxSize.height);
            }
            else{
              viewportStart = $(scrollElem).scrollLeft();
              viewportEnd = (viewportStart + boxSize.width);
            }

            // Loop through all given dom elements
            $elem.each(function(){
              var $obj = $(this),
              objOptions = {},
              attrOptions = {};

                //  Get any individual attribution data
                if ($obj.data('vp-add-class'))
                  attrOptions.classToAdd = $obj.data('vp-add-class');
                if ($obj.data('vp-remove-class'))
                  attrOptions.classToRemove = $obj.data('vp-remove-class');
                if ($obj.data('vp-add-class-full-view'))
                  attrOptions.classToAddForFullView = $obj.data('vp-add-class-full-view');
                if ($obj.data('vp-keep-add-class'))
                  attrOptions.removeClassAfterAnimation = $obj.data('vp-remove-after-animation');
                if ($obj.data('vp-offset'))
                  attrOptions.offset = $obj.data('vp-offset');
                if ($obj.data('vp-repeat'))
                  attrOptions.repeat = $obj.data('vp-repeat');
                if ($obj.data('vp-scrollHorizontal'))
                  attrOptions.scrollHorizontal = $obj.data('vp-scrollHorizontal');
                if ($obj.data('vp-invertBottomOffset'))
                  attrOptions.scrollHorizontal = $obj.data('vp-invertBottomOffset');

                // Extend objOptions with data attributes and default options
                $.extend(objOptions, options);
                $.extend(objOptions, attrOptions);

                // If class already exists; quit
                if ($obj.data('vp-animated') && !objOptions.repeat){
                  return;
                }

                // Check if the offset is percentage based
                if (String(objOptions.offset).indexOf("%") > 0)
                  objOptions.offset = (parseInt(objOptions.offset) / 100) * boxSize.height;

                // Get the raw start and end positions
                var rawStart = (!objOptions.scrollHorizontal) ? $obj.offset().top : $obj.offset().left,
                rawEnd = (!objOptions.scrollHorizontal) ? rawStart + $obj.height() : rawStart + $obj.width();

                // Add the defined offset
                var elemStart = Math.round( rawStart ) + objOptions.offset,
                elemEnd = (!objOptions.scrollHorizontal) ? elemStart + $obj.height() : elemStart + $obj.width();

                if (objOptions.invertBottomOffset)
                  elemEnd -= (objOptions.offset * 2);

                // Add class if in viewport
                if ((elemStart < viewportEnd) && (elemEnd > viewportStart)){

                    // Remove class
                    $obj.removeClass(objOptions.classToRemove);
                    $obj.addClass(objOptions.classToAdd);

                    // Do the callback function. Callback wil send the jQuery object as parameter
                    objOptions.callbackFunction($obj, "add");

                    // Check if full element is in view
                    if (rawEnd <= viewportEnd && rawStart >= viewportStart)
                      $obj.addClass(objOptions.classToAddForFullView);
                    else
                      $obj.removeClass(objOptions.classToAddForFullView);

                    // Set element as already animated
                    $obj.data('vp-animated', true);

                    if (objOptions.removeClassAfterAnimation) {
                      $obj.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
                        $obj.removeClass(objOptions.classToAdd);
                      });
                    }

                // Remove class if not in viewport and repeat is true
              } else if ($obj.hasClass(objOptions.classToAdd) && (objOptions.repeat)){
                $obj.removeClass(objOptions.classToAdd + " " + objOptions.classToAddForFullView);

                    // Do the callback function.
                    objOptions.callbackFunction($obj, "remove");

                    // Remove already-animated-flag
                    $obj.data('vp-animated', false);
                  }
                });

};

        /**
         * Binding the correct event listener is still a tricky thing.
         * People have expierenced sloppy scrolling when both scroll and touch
         * events are added, but to make sure devices with both scroll and touch
         * are handles too we always have to add the window.scroll event
         *
         * @see  https://github.com/dirkgroenen/jQuery-viewport-checker/issues/25
         * @see  https://github.com/dirkgroenen/jQuery-viewport-checker/issues/27
         */

        // Select the correct events
        if( 'ontouchstart' in window || 'onmsgesturechange' in window ){
            // Device with touchscreen
            $(document).bind("touchmove MSPointerMove pointermove", this.checkElements);
          }

        // Always load on window load
        $(options.scrollBox).bind("load scroll", this.checkElements);

        // On resize change the height var
        $(window).resize(function(e){
          boxSize = {height: $(options.scrollBox).height(), width: $(options.scrollBox).width()};
          $elem.checkElements();
        });

        // trigger inital check if elements already visible
        this.checkElements();

        // Default jquery plugin behaviour
        return this;
      };
    })(jQuery);







// Progress bar
var progr1 = $(".investmentSize");
progr1.goalProgress({
  goalAmount: 360,
  currentAmount: 209,
  milestoneClass: 'almost-full',
  speed: 1000,
  milestoneNumber: 70,
  // textBefore: '₽ ',
  // textAfter: '  ' 
});

var PopulationOfTheCity = $(".PopulationOfTheCity");
PopulationOfTheCity.goalProgress({
  goalAmount: 1000000,
  currentAmount: 587876,
  // textBefore: '587.876',
  // textAfter: '  ' 
});

var GrossProduct = $(".GrossProduct");
GrossProduct.goalProgress({
  goalAmount: 839,
  currentAmount: 731,
  // textBefore: '₽ ',
  // textAfter: '  ' 
});


var url = location.href;
if(url.indexOf("/en")!= -1){
  var langChild = $(".ChangeLanguage__select:first-child");
  $(".ChangeLanguage__select:first-child").remove();
  $(".ChangeLanguage").append(langChild);
}

var owl =  $('.owl-carousel-header').owlCarousel({
  items: 1,
  dots: true,
  loop: true,
  autoplay: false,
  /*nav: true,*/
  autoplayTimeout: 6000,
  smartSpeed: 1000,
});



var swiper = new Swiper('.swiper-container', {

  paginationClickable: true,
  direction: 'vertical',
  nextButton: '.swiper-button-next',
  prevButton: '.swiper-button-prev',
  speed: 1000,
  loop: false,
  // autoplay: 4000,
  slidesPerView: 5,
  spaceBetween: 0
});

var loadMoreNewsButton = $(".loadMoreNews-js");
loadMoreNewsButton.on("click", function (e) {
  e.preventDefault;
  var page =  loadMoreNewsButton.attr("data-page");
  $.ajax({
    type: 'GET',
    url: "http://"+location.hostname + "/ru/newsJson?page=" +page+"&nextPage=true"
  }).done(function(data) {
    if(data==0){
      loadMoreNewsButton.hide();
      return false;
    }

  }).fail(function() {
    console.log('failGetNextPage');

  });
  $.ajax({
    type: 'GET',
    url: "http://"+location.hostname + "/ru/newsJson?page=" +page
  }).done(function(data) {
    $(".wrapperNews__content").append(data);
    $(".slideUp").slideDown(400);

  }).fail(function() {
    console.log('fail');
  });
  page++;
  loadMoreNewsButton.attr("data-page", page);
  return false;
});



/*табы*/
var tabMenu = $(".tab-menu");
var tabItem = $(".tab-item");
$(".tab-item").hide();
$(tabMenu).click(function(e) {
  event.preventDefault();
  $(tabMenu).removeClass("active-panel").eq($(this).index()).addClass("active-panel");
  $(tabItem).hide().eq($(this).index()).fadeIn()
}).eq().addClass("active-panel"); 

/*Под табы*/

var podTabMenu = $(".tab-menu-nav");
var podTabItem = $(".tab-item-pod");
$(".tab-item-pod").hide();
$(podTabMenu).click(function(e) {
  event.preventDefault();
  $(podTabMenu).removeClass("active-panel-pod").eq($(this).index()).addClass("active-panel-pod");
  $(podTabItem).hide().eq($(this).index()).fadeIn()
}).eq().addClass("active-panel-pod"); 

var podTabMenu2 = $(".tab-menu-nav2");
var podTabItem2 = $(".tab-item-pod2");
$(".tab-item-pod2").hide();
$(podTabMenu2).click(function(e) {
  event.preventDefault();
  $(podTabMenu2).removeClass("active-panel-pod").eq($(this).index()).addClass("active-panel-pod");
  $(podTabItem2).hide().eq($(this).index()).fadeIn()
}).eq().addClass("active-panel-pod"); 

var podTabMenu3 = $(".tab-menu-nav3");
var podTabItem3 = $(".tab-item-pod3");
$(".tab-item-pod3").hide();
$(podTabMenu3).click(function(e) {
  event.preventDefault();
  $(podTabMenu3).removeClass("active-panel-pod").eq($(this).index()).addClass("active-panel-pod");
  $(podTabItem3).hide().eq($(this).index()).fadeIn()
}).eq().addClass("active-panel-pod"); 

var podTabMenu4 = $(".tab-menu-nav4");
var podTabItem4 = $(".tab-item-pod4");
$(".tab-item-pod4").hide();
$(podTabMenu4).click(function(e) {
  event.preventDefault();
  $(podTabMenu4).removeClass("active-panel-pod").eq($(this).index()).addClass("active-panel-pod");
  $(podTabItem4).hide().eq($(this).index()).fadeIn()
}).eq().addClass("active-panel-pod"); 

var backMain = $(".backMain");
backMain.on("click",() =>{
 $(".tab-item , .usefulLinks, .podContent").hide();
 tabMenu.removeClass("active-panel");
 backMain.removeClass("active-panel-pod");
 $(".mainPageCenterContent, .wrapper__media , .usefulLinks").fadeIn();
});



/****************** Табы Инвестиц.проекты ******************/
var tabMenuInvProj = $(".tab-menu-nav-ivestmentProj");
var tabItemInvProj = $(".tab-item-investmentProj");
$(".content-InvestProj").hide();
$('.tab-item-investmentProj:first').show();
$(tabMenuInvProj).click(function(e) {
  event.preventDefault();
  $(tabMenuInvProj).removeClass("active-panel-invProj").eq($(this).index()).addClass("active-panel-invProj");
  $(tabItemInvProj).hide().eq($(this).index()).fadeIn()
}).eq().addClass("active-panel-invProj"); 

/****************** Табы Поддержка ******************/
var tabMenuSupport = $(".tab-menu-nav-support");
var tabItemSupport = $(".tab-item-support");
$(".content-support").hide();
$('.tab-item-support:first').show();
$(tabMenuSupport).click(function(e) {
  event.preventDefault();
  $(tabMenuSupport).removeClass("active-panel-support").eq($(this).index()).addClass("active-panel-support");
  $(tabItemSupport).hide().eq($(this).index()).fadeIn()
}).eq().addClass("active-panel-support"); 

/**********************************************************/
($(".newsMKALA__newsBlock").hasClass("load")) ? ($(".linkInMkalaNews").css("display", "none")) : ($(".linkInMkalaNews").css("display", "block"));

$.ajax({
  url : "/parseMkala",
  method: "GET",

  success: function (data) {
    var newData = data.replace(/&quot;/g, '\\"').replace(/\\/g, '');
    var dataArr = JSON.parse(newData)

    for(var i = 0; i < dataArr.length; i++){
      var htmlData = '<div class="newsMKALA__newsBlock--item">';
      htmlData += '<a href="http://mkala.ru/'+dataArr[i].href+'" class="linkNews" target="_blank"></a>';
      htmlData += '<div class="newsBlock__item--img" style="background-image: url('+dataArr[i].img+');"></div>';
      htmlData += ' <div class="newsBlock__item--info"><div class="item__info--text">';
      htmlData += dataArr[i].title;
      htmlData += '</div><div class="item__info--date"> <time>'+dataArr[i].date+'</time>';
      htmlData += '</div></div></div>';
      $(".newsMKALA__newsBlock--content").append(htmlData).removeClass("load"); $(".newsMKALA__newsBlock").removeClass("load");
    };
    $(".linkInMkalaNews").css("display", "block");
    console.log("loaded")
  }


});
$(".ChangeLanguage__select:last-child").hide();
$(".ChangeLanguage").on("click",(e) => {
  e.preventDefault();
  if ( $(".ChangeLanguage__select:last-child").is(":visible")) {
   $(".ChangeLanguage__select:last-child").hide();
   $(".ChangeLanguage").toggleClass('downArrow').removeClass("upArrow");
 } else{
   $(".ChangeLanguage__select:last-child").css({"left":"-1px","position":"absolute","border":"1px solid #e0e0e0","width":"162px","border-radius":"10px","border-top-left-radius":"0","border-top-right-radius":"0"}).show();
   $(".ChangeLanguage").css({"border-bottom":"none !important","border-bottmom-left-radius":"0px"});
   $(".ChangeLanguage").toggleClass('upArrow').removeClass("downArrow");
 }
});


/* Меню карточки инвестиционного проекта */
var navOfferJS = $(".navOfferJS");
$(navOfferJS).on("click", function(){
  $(navOfferJS).find("span").css("margin-bottom","0");
  $(navOfferJS).removeClass("navOfferJSAct");
  $(this).addClass("navOfferJSAct");
  if ( $(this).hasClass("navOfferJSAct") ){
    $(this).find("span").css("margin-bottom","20px");
  }else{
    $(this).find("span").css("margin-bottom","0");
  }
});



/*******************маленький слайдер*******************/
var  blurBlock = $(".blurBlock");
var  media__left = $(".media__left").css("background-image");
$(blurBlock).css("background-image", media__left);

$(".swiper-slide-item").on("click",function () {

  var swiperSlide = $(".swiper-slide-item");
  var bgc = $(this).css("background-image");
  $(swiperSlide).removeClass("activesmallSlideItem");
  $(this).addClass("activesmallSlideItem");
  $(".media__left").animate({
    "opacity" : 0.2
  },100, function () {
    $(".media__left").css("background-image", bgc);
    $(blurBlock).css("background-image", bgc);
    $(".media__left").animate({
      "opacity" : 1
    },200);

  });
// 
});

/*********************Логистика*********************/
$(".logistikaItem__map").hide();

$(".logistikaItem__location").on("click", function(){
  $(this).hide();
  $(this).parent().find(".logistikaItem__map").fadeIn();
});


$(".logistikaItem__map--hideJs").on("click", function(){
  $(this).parent().hide();
  $(this).parent().parent().find(".logistikaItem__location").fadeIn();
});

 var directCommunicationLabel = $(".directCommunicationLabel");
 var directCommunicationEmail = $('.directCommunicationEmail');
 $(directCommunicationEmail).on("keyup keydown change keypress",function(){
  if ($(this).val()) {
   $($(this).siblings(".directCommunicationLabel")).addClass("directCommunicationLabelVALID");
  }else $($(this).siblings(".directCommunicationLabel")).removeClass("directCommunicationLabelVALID");
 });



/**********************Language*******************/
$(".setLang").on("click", function(e){
 e.preventDefault();

 var setLang = "/"+$(this).data("lang");

 if(url.indexOf("/ru") != -1 || url.indexOf("/en")!= -1){
  if(setLang == "/ru"){
    var lang = location.href.replace('/en', setLang);
  }
  else {
    var lang = location.href.replace('/ru', setLang);
  }
}
else {
  var lang = location.href.replace( location.host, location.host+setLang);

}

location.href = lang;
return false;
});

// close PopUpForm
var OpenPopUpForm = $(".OpenPopUpForm");
var goInvestForm = $(".goInvestForm");
var goInvestFormBlockCloseForm = $(".goInvestFormBlockCloseForm");

$(OpenPopUpForm).on("click",function () {
  $(goInvestForm).fadeIn();
});
$(goInvestFormBlockCloseForm).on("click",function () {
  $(goInvestForm).fadeOut();
});





// Start Email form Valid
 var directCommunicationLabel = $(".goInvFormLabel");
 var goInvFormEmail = $('.goInvFormEmail');
 $(goInvFormEmail).on("keyup keydown change keypress",function(){
  if ($(this).val()) {
   $($(this).siblings(".goInvFormLabel")).addClass("goInvFormLabelVALID");
  }else $($(this).siblings(".goInvFormLabel")).removeClass("goInvFormLabelVALID");
 });
 var resetForm = $(".resetForm");
 $(resetForm).on("click",function () {
  if ($(goInvFormEmail).val()){
    $($(goInvFormEmail).siblings(".goInvFormLabel")).addClass("goInvFormLabelVALID");
  }else if ($(goInvFormEmail).val()){
    $($(goInvFormEmail).siblings(".goInvFormLabel")).addClass("goInvFormLabelVALID");
  }else $($(goInvFormEmail).siblings(".goInvFormLabel")).removeClass("goInvFormLabelVALID");$($(goInvFormEmail).siblings(".directCommunicationLabel")).removeClass("directCommunicationLabelVALID");

 });
// end

//Support anim

var supportMainSub = $('.supportMain__item--sub');
var wrapSup = $(".wrapSup");
var supMsub = $('.supMsub'); // подпункт
$(supportMainSub).hide();
$(wrapSup).on("click",function () {
  if ($(this).hasClass("supMsub") && $(this).parent().parent().find(".supportMain__item--sub").is(":hidden")){
    event.preventDefault();
    $(this).removeClass("supMclose").parent().parent().find(".supportMain__item--sub").fadeIn();

  }else if($(this).hasClass("supMsub")){
     event.preventDefault();
    $(this).parent().parent().find(".supportMain__item--sub").fadeOut().parent().find(".supMsub").addClass("supMclose");
  }
});


//end 




// feedBack Email Validate

// Start Email form Valid
 var feedBackLabel = $(".feedBackLabel");
 var feedBackFormEmail = $('.feedBackFormEmail');
 $(feedBackFormEmail).on("keyup keydown change keypress",function(){
  if ($(this).val()) {
   $($(this).siblings(".feedBackLabel")).addClass("feedBackLabelVALID");
  }else $($(this).siblings(".feedBackLabel")).removeClass("feedBackLabelVALID");
 });
 var resetFormFeedBack = $(".resetfeddBackForm");
 $(resetFormFeedBack).on("click",function () {
  if ($(feedBackFormEmail).val()){
    $($(feedBackFormEmail).siblings(".feedBackLabel")).addClass("feedBackLabelVALID");
  }else if ($(feedBackFormEmail).val()){
    $($(feedBackFormEmail).siblings(".feedBackLabel")).addClass("feedBackLabelVALID");
  }else $($(feedBackFormEmail).siblings(".feedBackLabel")).removeClass("feedBackLabelVALID");$($(feedBackFormEmail).siblings(".feedBackLabelVALID")).removeClass("feedBackLabelVALID");

 });
// end


//close feddBackForm
var closeFeedBackForm =  $(".closeFeedBackForm");
var goFeedBack = $(".goFeedBack");
var feedBackFilterBlock = $(".feedBackFilterBlock");
$(goFeedBack).on("click",function () {
  $(feedBackFilterBlock).fadeIn();
});
$(closeFeedBackForm).on("click",function () {
  $(feedBackFilterBlock).fadeOut();
});

//end

var singleWindJS = $(".singleWindJS");

$(singleWindJS).on("click",function (e) {
  event.preventDefault();
  $(feedBackFilterBlock).fadeIn();
});
$(closeFeedBackForm).on("click",function () {
  $(feedBackFilterBlock).fadeOut();
});


/*ANIMATE BLOCK NEWS*/

var top__itemLarge = $(".top__itemLarge");
$(top__itemLarge).addClass("hid").viewportChecker({
  classToAdd: 'vis animated zoomInUp',
  offset: 1
});

var sideBarLeftMain__item = $(".sideBarLeftMain__item");
$(sideBarLeftMain__item).addClass("hid").viewportChecker({
  classToAdd: 'vis animated fadeIn',
  offset: 1
});

var top__itemSmall = $(".top__itemSmall");
$(top__itemSmall).addClass("hid").viewportChecker({
  classToAdd: 'vis animated zoomInUp',
  offset: 1
});


var swiperSlideItem = $(".swiper-slide-item");
$(swiperSlideItem).addClass("hid").viewportChecker({
  classToAdd: 'vis animated zoomInUp',
  offset: 30
});




$.Tween.propHooks.number = {
    get: function ( tween ){
        var num = tween.elem.innerHTML.replace(/^[^\d-]+/, '');
        return  parseFloat(num) || 0;
    },
    
  set: function( tween ) {
        var opts = tween.options;
        tween.elem.innerHTML = (opts.prefix || '')
        + tween.now.toFixed(opts.fixed || 0)
        + (opts.postfix || '');
  }
};
var countSpan1 = parseInt($('#currentAmount1').data("max"));
var countSpan2 = parseInt($('#currentAmount2').data("max"));
var countSpan3 = parseInt($('#currentAmount3').data("max"));
$('#currentAmount1').animate({ number: countSpan1 }, 6000);
$('#currentAmount2').animate({ number: countSpan2 }, 6000);
$('#currentAmount3').animate({ number: countSpan3 }, 6000);






/*doc.ready-end*/
  });