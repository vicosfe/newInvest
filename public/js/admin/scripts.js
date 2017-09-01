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


// //////////////////////////////////////////////////////////



      //Превью фото
      var prewImgNews = $(".prewImgNews");
      prewImgNews.change(() => {
        var preview = document.querySelector('.imagePrev');
        var files   = document.querySelector('input[type=file]').files;

        function readAndPreview(file) {
            preview.innerHTML="";
    // Расширение у выбранного фото
    if ( /\.(jpe?g|png|gif)$/i.test(file.name)) {
      var reader = new FileReader();

      reader.addEventListener("load", function () {
        var image = new Image();
        /*image.height = 190;*/
        image.title = file.name;
        image.src = this.result;
        preview.appendChild( image );
      }, false);

      reader.readAsDataURL(file);
    };

  };

  if (files) {
    [].forEach.call(files, readAndPreview);
  };
});



  


      /********************************************************************/


      var customFileDocs = $(".asdasd");
      var customFileDocs1 =  document.getElementById("customFileDocs1");
      var addDocsForm__content = $(".addDocsForm__content");
      var addDocsFormItem = $(".addDocsFormItem");
      $(customFileDocs).on("change",function () {
        if (customFileDocs1.files.length == 0) {
          return  0;
        }else{
          files = this.files;
          for(var a=0;a<files.length;a++)

            $(addDocsForm__content).append('<div class="addDocsFormItem"><div class="addDocsFormItemDelete"><a href="#">x</a></div><div class="addDocsFormItem__img"></div><div class="addDocsFormItem__text">' + files[a].name + '</div></div>');
        }
      });



var kolichestvo = $("#kolichestvo");
var addOprosForm__group1 = $(".addOprosForm__group1"); //0
var addOprosForm__group2 = $(".addOprosForm__group2"); //1
var addOprosForm__group3 = $(".addOprosForm__group3"); //2
var addOprosForm__group4 = $(".addOprosForm__group4"); //3
var addOprosForm__group5 = $(".addOprosForm__group5"); //4
var addOprosForm__group6 = $(".addOprosForm__group6"); //5

var list = $(".addOprosForm__group2, .addOprosForm__group3, .addOprosForm__group4 ,.addOprosForm__group5, .addOprosForm__group6");
$(list).hide();
$(kolichestvo).on("change", function () {
  var showKolichestvo = this.selectedIndex;
  if(showKolichestvo == 0 ){
    $(list).hide();
    $(addOprosForm__group1).fadeIn();
  } else if (showKolichestvo == 1){
    $(list).hide();
    $(addOprosForm__group2).fadeIn();
  }else if(showKolichestvo == 2){
     $(list).hide();
    $(addOprosForm__group2).fadeIn();
    $(addOprosForm__group3).fadeIn();
  }else if(showKolichestvo == 3){
    $(list).hide();
    $(addOprosForm__group2).fadeIn();
    $(addOprosForm__group3).fadeIn();
    $(addOprosForm__group4).fadeIn();
  }else if(showKolichestvo == 4){
    $(list).hide();
    $(addOprosForm__group2).fadeIn();
    $(addOprosForm__group3).fadeIn();
    $(addOprosForm__group4).fadeIn();
    $(addOprosForm__group5).fadeIn();
  }else if (showKolichestvo == 5){
    $(list).fadeIn();
  }
});
var addContactsButt = $("#addContacts");
var blockWrapper = $(".blockWrapper");
$(addContactsButt).on("click",function () {
  $(blockWrapper).append('<div class="blockWrapper__item"><div class="settingSliderForm2__group"><input type="text" name="addOpros"  required ><span class="highlight"></span><span class="bar"></span><label>Введите имя</label></div><div class="settingSliderForm2__group"><input type="text" name="addOpros"  required ><span class="highlight"></span><span class="bar"></span><label>Введите текст (описание)</label></div><div class="settingSliderForm2__group"><input type="email" name="addOpros"  required ><span class="highlight"></span><span class="bar"></span><label>Введите Email</label></div><div class="usefulLinksButtonWrapper"><label class="CUSTOMBUTT"><div class="customFileDocs"><div class="customFileDocs__img"></div><div class="customFileDocs__text">Добавить фото</div></div><div class="inptHideDocs"><input name="photoContacts" size="50" required  class="prewImgNews" type="file"  id="customFileLink1"></div></label></div></div>')
})


var infoItem = $(".infoItem");
$(infoItem).on("click",function () {
  if($(this).hasClass("infoItemActive")){
    $(this).removeClass("infoItemActive");
  }else {
    $(this).addClass("infoItemActive");
      var id = $(this).data('id');
      var th = $(this);
      $.ajax({
          type: 'GET',
          url: "http://"+location.hostname + "/admin/messages/checked/"+id
      }).done(function(data) {
          th.removeClass("nch");
          if(data){
              var l = "/admin/notification/"+data;
              $(".nots").attr("href",l);
          }
          else {
              $(".nots").hide();
              var a = $(".notificationActive");
              a.removeClass("notificationActive").addClass("notification")
          }

      }).fail(function() {
          console.log('fail');
      });
  }
});


var infoItem1 = $(".infoItem1");
$(infoItem1).on("click",function () {
  if($(this).hasClass("infoItem1Active")){
    $(this).removeClass("infoItem1Active");
  }else {
    $(this).addClass("infoItem1Active");
      var id = $(this).data('id');
      var th = $(this);
      $.ajax({
          type: 'GET',
          url: "http://"+location.hostname + "/admin/messages/checked/"+id
      }).done(function(data) {
          th.removeClass("nch");
          if(data){
              var l = "/admin/notification/"+data;
              $(".nots").attr("href",l);
          }
          else {
              $(".nots").hide();
              var a = $(".notificationActive");
              a.removeClass("notificationActive").addClass("notification")
          }

      }).fail(function() {
          console.log('fail');
      });
  }
});


var box_popUpDelNews = $(".box_popUpDelNews");
var dontDelete =$(".dontDelete");
var infoItemDelete = $(".infoItemDelete");
var infoItem1Delete1 = $(".infoItem1Delete1");
$(infoItem1Delete1).on("click",function () {
  $(box_popUpDelNews).fadeIn();
  var id = $(this).data("id");
  $(".linkremove").attr("href", "/admin/messages/remove/"+id);
});
$(infoItemDelete).on("click",function () {
  $(box_popUpDelNews).fadeIn();
    var id = $(this).data("id");
    $(".linkremove").attr("href", "/admin/messages/remove/"+id);
});
$(dontDelete).on("click",function () {
  $(box_popUpDelNews).fadeOut();
})
// var circlePlus = $(".circlePlus");
// var contentForAdd = $(".contentForAdd");
// $(contentForAdd).hide();
// $(circlePlus).on("click", function () {
//   $(contentForAdd).fadeIn();
//   $(circlePlus).hide();
// });



var prewImgNews = $(".addArticlesMedia");
prewImgNews.change(() => {
  var preview = document.querySelector('.articlesImagePrev');
  var files   = document.querySelector('input[type=file]').files;

  function readAndPreview(file) {
      preview.innerHTML="";
    // Расширение у выбранного фото
    if ( /\.(jpe?g|png|gif)$/i.test(file.name)) {
      var reader = new FileReader();

      reader.addEventListener("load", function () {
        var image = new Image();
        /*image.height = 190;*/
        image.title = file.name;
        image.src = this.result;
        preview.appendChild( image );
      }, false);

      reader.readAsDataURL(file);
    };

  };

  if (files) {
    [].forEach.call(files, readAndPreview);
  };
});



/*doc.ready-end*/
});