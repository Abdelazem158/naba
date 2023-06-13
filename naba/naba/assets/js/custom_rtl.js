


jQuery.noConflict()(function($) {
	$('.container audio').panzer({theme: 'light',  showduration: true, expanded: true, showvolume: true});
});
	
jQuery.noConflict()(function($) {
  if ($.browser.msie && $.browser.version.substr(0,1)<7)
  {
	$('li').has('ul').mouseover(function(){
		$(this).children('ul').css('visibility','visible');
		}).mouseout(function(){
		$(this).children('ul').css('visibility','hidden');
		})
  }
});





jQuery.noConflict()(function($){

      // Create the dropdown base
      $("<select />").appendTo("nav");

      // Create default option "Go to..." 
      $("<option />", {
         "selected": "selected",
         "value"   : "",
         "text"    : "من فضلك اختر الصفحة" 
      }).appendTo("nav select");
      //new dropdown menu
	 
      $("nav a").each(function() {
                var el = $(this);
                var perfix = '';
                switch(el.parents().length){
                        case(11):
                                perfix = '';
                        break;
                        case(13):
                                perfix = '-- ';
                        break;
                        default:
                                perfix = '';
                        break;

                }
                $("<option />", {
                "value"   : el.attr("href"),
                "text"    : perfix + el.text()
                }).appendTo("nav select");
				
			  $("nav select").change(function() {
				window.location = $(this).find("option:selected").val();
			  });
});});




jQuery.noConflict()(function($){
	$(document).ready(function() {  
		$("a[rel^='prettyPhoto']").prettyPhoto({opacity:0.80,default_width:200,default_height:344,hideflash:false,modal:false,social_tools:false});
	});
});

jQuery.noConflict()(function($){
	$(window).load(function() {
        $('#slider').nivoSlider();
    });
})






jQuery.noConflict()(function($){
	 $("div.accordion-body:first").addClass("in");
	 $("div.mymail-submit-wrapper input.submit-button").addClass("btn btn-primary btn-info");

});

// PORTFOLIO FILTERING - ISOTOPE
//**********************************
jQuery.noConflict()(function($){
var $container = $('#portfolio');
		
if($container.length) {
	$container.waitForImages(function() {
		
		// initialize isotope
		$container.isotope({
		  itemSelector : '.block',
		  layoutMode : 'fitRows'
		});
		
		// filter items when filter link is clicked
		$('#filters a').click(function(){
		  var selector = $(this).attr('data-filter');
		  $container.isotope({ filter: selector });
		  $(this).removeClass('filter_button').addClass('filter_button filter_current').siblings().removeClass('filter_button filter_current').addClass('filter_button');
		  
		  return false;
		});
		
	},null,true);
}});


// PORTFOLIO FILTERING - ISOTOPE
//**********************************
jQuery.noConflict()(function($){
var $container = $('#portfolio_sidebar');
		
if($container.length) {
	$container.waitForImages(function() {
		
		// initialize isotope
		$container.isotope({
		  itemSelector : '.block',
		  layoutMode : 'fitRows'
		});
		
		// filter items when filter link is clicked
		$('#filters_sidebar a').click(function(){
		  var selector = $(this).attr('data-filter');
		  $container.isotope({ filter: selector });
		  $(this).removeClass('filter_sidebar').addClass('filter_sidebar filter_sidebar_current').siblings().removeClass('filter_sidebar filter_sidebar_current').addClass('filter_sidebar');
		  
		  return false;
		});
		
	},null,true);
}});

jQuery.noConflict()(function($){
$('.nivoSlider').nivoSlider({

});
});


/***************************************************
				TWITTER FEED
***************************************************/
	jQuery.noConflict()(function ($) {
		$(document).ready(function () {
	
			$(".tweet").tweet({
				count: 1,
				username: "Orange_Idea_RU",
				loading_text: "loading twitter..."
			});
		});
	});
	
	
	
jQuery.noConflict()(function ($) {
		$(document).ready(function () {	
	var tpj=jQuery;
				
	tpj.noConflict();
								
				var revapi1;
				
				tpj(document).ready(function() {
				
				if (tpj.fn.cssOriginal != undefined)
					tpj.fn.css = tpj.fn.cssOriginal;
				
				if(tpj('#rev_slider_1_1_index').revolution == undefined)
					revslider_showDoubleJqueryError('#rev_slider_1_1_index');
				else
				   revapi1 = tpj('#rev_slider_1_1_index').show().revolution(
					{
						delay:9000,
						startwidth:960,
						startheight:450,
						hideThumbs:200,
						
						thumbWidth:100,
						thumbHeight:50,
						thumbAmount:3,
						
						navigationType:"none",
						navigationArrows:"solo",
						navigationStyle:"round",
						
						touchenabled:"on",
						onHoverStop:"on",
						
						navigationHAlign:"center",
						navigationVAlign:"bottom",
						navigationHOffset:0,
						navigationVOffset:20,

						soloArrowLeftHalign:"left",
						soloArrowLeftValign:"center",
						soloArrowLeftHOffset:20,
						soloArrowLeftVOffset:0,

						soloArrowRightHalign:"right",
						soloArrowRightValign:"center",
						soloArrowRightHOffset:20,
						soloArrowRightVOffset:0,
								
						shadow:0,
						fullWidth:"on",

						stopLoop:"off",
						stopAfterLoops:-1,
						stopAtSlide:-1,

						shuffle:"off",
						
						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						startWithSlide:0	
					});
				
				});	//ready
		});
	});
	
	
jQuery.noConflict()(function ($) {
$(document).ready(function () {	
var tpj=jQuery;

tpj.noConflict();

var revapi1;

tpj(document).ready(function() {

if (tpj.fn.cssOriginal != undefined)
tpj.fn.css = tpj.fn.cssOriginal;

if(tpj('#rev_slider_1_1_index2').revolution == undefined)
revslider_showDoubleJqueryError('#rev_slider_1_1_index2');
else
revapi1 = tpj('#rev_slider_1_1_index2').show().revolution(
{
delay:9000,
startwidth:960,
startheight:450,
hideThumbs:200,

thumbWidth:100,
thumbHeight:50,
thumbAmount:3,

navigationType:"none",
navigationArrows:"solo",
navigationStyle:"round",

touchenabled:"on",
onHoverStop:"on",

navigationHAlign:"center",
navigationVAlign:"bottom",
navigationHOffset:0,
navigationVOffset:20,

soloArrowLeftHalign:"left",
soloArrowLeftValign:"center",
soloArrowLeftHOffset:20,
soloArrowLeftVOffset:0,

soloArrowRightHalign:"right",
soloArrowRightValign:"center",
soloArrowRightHOffset:20,
soloArrowRightVOffset:0,

shadow:0,
fullWidth:"on",

stopLoop:"off",
stopAfterLoops:-1,
stopAtSlide:-1,

shuffle:"off",

hideSliderAtLimit:0,
hideCaptionAtLimit:0,
hideAllCaptionAtLilmit:0,
startWithSlide:0	
});

});	//ready

});
});

jQuery.noConflict()(function ($) {
$(document).ready(function () {	

var tpj=jQuery;

tpj.noConflict();

var revapi2;

tpj(document).ready(function() {

if (tpj.fn.cssOriginal != undefined)
tpj.fn.css = tpj.fn.cssOriginal;

if(tpj('#rev_slider_2_1_index3').revolution == undefined)
revslider_showDoubleJqueryError('#rev_slider_2_1_index3');
else
revapi2 = tpj('#rev_slider_2_1_index3').show().revolution(
{
delay:9000,
startwidth:960,
startheight:440,
hideThumbs:200,

thumbWidth:100,
thumbHeight:50,
thumbAmount:3,

navigationType:"none",
navigationArrows:"solo",
navigationStyle:"round",

touchenabled:"on",
onHoverStop:"on",

navigationHAlign:"center",
navigationVAlign:"bottom",
navigationHOffset:0,
navigationVOffset:20,

soloArrowLeftHalign:"left",
soloArrowLeftValign:"center",
soloArrowLeftHOffset:20,
soloArrowLeftVOffset:0,

soloArrowRightHalign:"right",
soloArrowRightValign:"center",
soloArrowRightHOffset:20,
soloArrowRightVOffset:0,

shadow:1,
fullWidth:"off",

stopLoop:"off",
stopAfterLoops:-1,
stopAtSlide:-1,

shuffle:"off",

hideSliderAtLimit:0,
hideCaptionAtLimit:0,
hideAllCaptionAtLilmit:0,
startWithSlide:0	
});

});	//ready
});
});



	

jQuery.noConflict()(function ($) {
$(document).ready(function () {		


var tpj=jQuery;

tpj.noConflict();

var revapi3;

tpj(document).ready(function() {

if (tpj.fn.cssOriginal != undefined)
tpj.fn.css = tpj.fn.cssOriginal;

if(tpj('#rev_slider_3_1_index4').revolution == undefined)
revslider_showDoubleJqueryError('#rev_slider_3_1_index4');
else
revapi3 = tpj('#rev_slider_3_1_index4').show().revolution(
{
delay:9000,
startwidth:620,
startheight:350,
hideThumbs:200,

thumbWidth:100,
thumbHeight:50,
thumbAmount:3,

navigationType:"none",
navigationArrows:"solo",
navigationStyle:"round",

touchenabled:"on",
onHoverStop:"on",

navigationHAlign:"center",
navigationVAlign:"bottom",
navigationHOffset:0,
navigationVOffset:20,

soloArrowLeftHalign:"left",
soloArrowLeftValign:"center",
soloArrowLeftHOffset:20,
soloArrowLeftVOffset:0,

soloArrowRightHalign:"right",
soloArrowRightValign:"center",
soloArrowRightHOffset:20,
soloArrowRightVOffset:0,

shadow:0,
fullWidth:"on",

stopLoop:"off",
stopAfterLoops:-1,
stopAtSlide:-1,

shuffle:"off",

hideSliderAtLimit:0,
hideCaptionAtLimit:0,
hideAllCaptionAtLilmit:0,
startWithSlide:0	
});

});	//ready
});
});
