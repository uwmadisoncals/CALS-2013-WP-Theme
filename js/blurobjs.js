$(document).ready(function(){
		var count = 1;
	
		/*$( ".slideImage" ).each(function( index ) {
				
				var source = ".slideImage" + count;
				var obj = ".slideBlur" + count;
				console.log($(this).html());
				$(obj).blurjs({
					source: source, 
					radius:30
				});
				count = count + 1;
  		});*/
	
	
	
	
	$('.slideBlur2,#access').blurjs({
		source: '.slideImage2', 
		radius:30,
		cache: true,
		cacheKeyPrefix: 'blurjs-1'
	});
	
	
	$('.slideBlur1,#access').blurjs({
		source: '.slideImage1', 
		radius:30,
		cache: false,
		cacheKeyPrefix: 'blurjs-2'
	});
	
});