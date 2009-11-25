/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


(function($){
     $.fn.extend({
         limit: function(limit,element) {

			var interval;
			var self = $(this);

			$(this).focus(function(){
				interval = window.setInterval(substring,100);
			});

			$(this).blur(function(){
				clearInterval(interval);
				substring();
			});

			function substring(){
				length = $(self).val().length;
				if(element)
					$(element).html((limit-length<=0)?'0':limit-length);
				if(length > limit)
					$(self).val($(self).val().substring(0,limit));
			}

			substring();

        }
    });
})(jQuery);