var fnGet = {};
(function($, window, document) {
	'use strict';
	// scroll top   
	function scrollTopEle(query, val, cb) {
		val = typeof val !== 'undefined' ? val : 0;
		//newinvest-plans-none;
		var target = query;
		if (target.length >= 1) {
			$('html, body').animate({
				scrollTop: target.offset().top - val
			}, 500);
		}
		if(cb) cb();
	}

	// Append Script files on Ajax Call
	function appendScript(filepath, cb) {
		var ele = document.createElement('script');
		ele.setAttribute("type", "text/javascript");
		ele.setAttribute("src", filepath);

		if ($('head script[src="' + filepath + '"]').length > 0) {
			$('head script[src="' + filepath + '"]').remove();
		}
		$('head').append(ele);

		if(cb) cb(event, status);
	}



	fnGet.scrollTopEle = scrollTopEle;
	fnGet.appendScript = appendScript;

}(jQuery, window, document))
