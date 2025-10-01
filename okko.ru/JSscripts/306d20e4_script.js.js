jQuery(document).ready(function($){
$(".wpcf7-tel").mask("+7 (999) 999-9999");

var navheight = jQuery('.navbar_custom-height').height();
jQuery('.navbar_custom').height(navheight-30);


// jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".header-top").offset().top > 50) {
        $(".header-top").addClass("header-top-phone");
    } else {
        $(".header-top").removeClass("header-top-phone");
    }
});







jQuery('.hidden_title').val(jQuery('.obr-modal-title1').text());
jQuery('.hidden_url').val(jQuery('.obr-modal-title1').attr('href'));
	jQuery('.gall_min_images:first').addClass('active');
jQuery(window).scroll(function(){
if (jQuery(this).scrollTop() > 100) {
jQuery('#totop').fadeIn();
} else {
jQuery('#totop').fadeOut();
}
});
 
jQuery('#totop').click(function(){
jQuery("html, body").animate({ scrollTop: 0 }, 600);
return false;
});
	jQuery('.gallary .gall_min_images:first .gall_img_none_original').removeClass('fancyimage');
	jQuery("body").on("click", ".gall_min_images",  function(){
	
	jQuery('.gall_min_images').removeClass('active');
	jQuery(this).addClass('active');
		jQuery('.gall_img_none_original').addClass('fancyimage');
	jQuery(this).find('.gall_img_none_original').removeClass('fancyimage');
var galimg = jQuery(this).find('.gall_img_none').attr('src');
var galimgoriginal = jQuery(this).find('.gall_img_none_original').attr('src');

jQuery(".large_img_div a img").attr('src', galimg).css({opacity:0}).animate({"opacity":"1"}, "slow");

//jQuery('.large_img').attr('src', galimg);
jQuery('.fancyimage1').attr('href', galimgoriginal);
});
jQuery('.catalog-page  .catalog-page-item:last-child').addClass('catalog-page-item-last');
jQuery('.content-page-vyp  .catalog-page-item:last-child').addClass('catalog-page-item-last');
jQuery('.selectpicker').selectpicker();
jQuery(".fancyimage").fancybox(); 
});
  
 


  
;(function (jQuery, window, document, undefined) {

    var pluginName = "metisMenu",
        defaults = {
            toggle: true
        };
        
    function Plugin(element, options) {
        this.element = element;
        this.settings = jQuery.extend({}, defaults, options);
        this._defaults = defaults;
        this._name = pluginName;
        this.init();
    }

    Plugin.prototype = {
        init: function () {

            var jQuerythis = jQuery(this.element),
                jQuerytoggle = this.settings.toggle;
				jQuery('.menu-catalog li a').wrap('<span class="wrap"></span>');
jQuerythis.find('li.menu-item-has-children > span > a').after('<span class="fa arrow"></span>');
            jQuerythis.find('li.active').has('ul').children('ul').addClass('collapse in');
            jQuerythis.find('li').not('.active').has('ul').children('ul').addClass('collapse');

            jQuerythis.find('li.menu-item-has-children span span').on('click', function (e) {
                e.preventDefault();

                jQuery(this).parent().parent('li').toggleClass('active').children('ul').collapse('toggle');

                if (jQuerytoggle) {
                    jQuery(this).parent().parent('li').siblings().removeClass('active').children('ul.in').collapse('hide');
                }
            });
        }
    };

    jQuery.fn[ pluginName ] = function (options) {
        return this.each(function () {
            if (!jQuery.data(this, "plugin_" + pluginName)) {
                jQuery.data(this, "plugin_" + pluginName, new Plugin(this, options));
            }
        });
    };

})(jQuery, window, document);
    jQuery(function () {

        jQuery('.menu-catalog').metisMenu();
    });


  
;(function (jQuery, window, document, undefined) {

    var pluginName = "metisMenu1",
        defaults = {
            toggle: true
        };
        
    function Plugin(element, options) {
        this.element = element;
        this.settings = jQuery.extend({}, defaults, options);
        this._defaults = defaults;
        this._name = pluginName;
        this.init();
    }

    Plugin.prototype = {
        init: function () {

            var jQuerythis = jQuery(this.element),
                jQuerytoggle = this.settings.toggle;
				jQuery('.menu-catalog-dop li a').wrap('<span class="wrap"></span>');
jQuerythis.find('li.menu-item-has-children > span > a').after('<span class="fa arrow"></span>');
            jQuerythis.find('li.active').has('ul').children('ul').addClass('collapse in');
            jQuerythis.find('li').not('.active').has('ul').children('ul').addClass('collapse');

            jQuerythis.find('li.menu-item-has-children span span').on('click', function (e) {
                e.preventDefault();

                jQuery(this).parent().parent('li').toggleClass('active').children('ul').collapse('toggle');

                if (jQuerytoggle) {
                    jQuery(this).parent().parent('li').siblings().removeClass('active').children('ul.in').collapse('hide');
                }
            });
        }
    };

    jQuery.fn[ pluginName ] = function (options) {
        return this.each(function () {
            if (!jQuery.data(this, "plugin_" + pluginName)) {
                jQuery.data(this, "plugin_" + pluginName, new Plugin(this, options));
            }
        });
    };

})(jQuery, window, document);
    jQuery(function () {
jQuery('.menu-catalog-dop').metisMenu1();
   
    });
jQuery(function($){

    


	$("body").on("click", ".kn-zak",  function(){
  var min = $('.price-list tr:first th:first span').text();
$('.wpcf7-number').attr('min', min);
$('.wpcf7-number').attr('value', min);
		});



	    
	$("body").on("click", ".color-list-page-tovar li",  function(){
	   $('.gall_min_images:first').addClass('active');
	   var col_id = $(this).attr('data-id');
  var p_id = $(this).attr('data-idp');
$('.color-list-page-tovar li').removeClass('active');
$(this).addClass('active');
		var data = {
			'action': 'loadmore3',
			'query': true_posts,
			'col_id': col_id,
			'p_id': p_id
		};
		$.ajax({
			url:ajaxurl, 
			data:data, 
			type:'POST', 
			success:function(data){
				if( data ) { 
				    
					$('.gallary').html(data).css({opacity:0}).animate({"opacity":"1"}, "slow"); 
				
				} else {
		
				}
			}
		});
	});
});