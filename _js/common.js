var google_map_file= '/_includes/hopkinton_google_map.php';

$(document).ready(function(){
		
//preset classes
$('.cat-nest li:first-child,#nav li:first-child,#hours td:first-child,span:first-child').addClass('first');
$('.cat-nest li:last-child').addClass('last');
$('#hours td span:first-child').addClass('open');
$('.cat-head').wrapInner('<span/>');

	
//fix ie6 pngs
	if($.browser.msie && $.browser.version.substr(0,1)<7){DD_belatedPNG.fix("#brand,#header,#footer,#steam,#menu-panel");}
	
//slideshow function	
	$('#news-snap-container').cycle({fx: 'fade',pager:  '#snap-nav'});
	
//google map-slide-down
	
	$('#map-btn').toggle(function(){
		$(this).text('Close').addClass('hit');
		$('#map').slideDown('slow', function(){
			$('#map div').load(google_map_file,function(){$('#map div').css({'display':'block'})});
		});
		return false;
		
		},
		function(){
			$(this).text('View Map').removeClass('hit');
			
			$('#map').slideUp('slow');
			$('#map div').fadeOut('slow');
			return false;
			
		});
		
//menu accord
		$('.cat-nest a').click(function(){ return false; })
		
		//menu tab actions
		$('#menu-nav li').click(function(){
			$('#menu-nav li').removeClass('hit');
			$(this).addClass('hit');
			$('.cat-sub').hide();
			$('.cat-head').removeClass('hit');
			var target = $(this).index();
			var slide = 740;
			$('#slider').animate({'margin-left':-slide*target});
		});
		//menu category tab actions		
		$('.cat-head').click(function(){
			if($(this).is('.hit')){
					$(this).removeClass('hit');
					$(this).next().slideUp();
				return false;
			}else{
				$('.cat-head').removeClass('hit');
				$('.cat-head').next().slideUp();
				
				$(this).addClass('hit');
				$(this).next().slideDown();
				return false;
			}
		});	
});