$(function iframeHeight() {

	$('.iframe-box').each(function(){
		var iframeH = $(this).find('iframe').attr('height');
		var iframeW = $(this).find('iframe').attr('width');
		var padding = iframeH / iframeW * 100;

		// console.log(iframeH);
		// console.log(iframeW);
		// console.log(padding);

		$(this).css('padding-top', padding+'%');
	});


});
