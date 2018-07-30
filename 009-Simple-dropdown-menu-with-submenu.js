/* Amazon-like multi level responsive dropdown menu
 * Author: Rajesh Kumar P (rajesh1158@gmail.com) for Clay6 Education (http://clay6.com/)
 * Date created: Sep 11th, 2014
 * 
 * Credits: Amazon Side Bar Menu - by JavaScript Kit (www.javascriptkit.com)
 * 
 * This plugin was created based on the Amazon-like dropdown menu by JavaScript Kit (www.javascriptkit.com).
 * You are free to use this plugin in any project, but make sure the above comments/credits are NOT removed.
 * */

var amazonmenu = {
	defaults: {
		animateduration: 100,
		showhidedelay: [500, 500],
		addBodyOverlay: true
	},
	setting: {},
	menuzindex: 1000,
	touchenabled: !!('ontouchstart' in window) || !!('ontouchstart' in document.documentElement) || !!window.ontouchstart || !!window.Touch || !!window.onmsgesturechange || (window.DocumentTouch && window.document instanceof window.DocumentTouch),
	showhide: function($li, action, setting){
		clearTimeout( $li.data('showhidetimer') );
		if(action == 'show') {
			$li.data().showhidetimer = setTimeout(function() {
				if($li.is(':hover')) {
					hideSiblingSubMenus($li);
					$li.addClass('selected');
					$li.data('$submenu').data('fullyvisible', false).css({zIndex: amazonmenu.menuzindex++}).fadeIn(setting.animateduration, 
						function() {
							$(this).data('fullyvisible', true);
						});
				}
			}, this.setting.showhidedelay[0]);
		} else {
			$li.data().showhidetimer = setTimeout(function() {
				$li.removeClass('selected');
				$li.data('$submenu').stop(true, true).fadeOut(setting.animateduration);
				var $subuls = $li.data('$submenu').find('.issub');
				if($subuls.length > 0) {
					$subuls.css({display: 'none'});
					$subuls.data('$parentli').removeClass('selected');
				}
				$li.data('$submenu').hide();
			}, this.setting.showhidedelay[1]);
		}
	},
	setupmenu: function($menu, setting){
		var $topul = $menu.children('ul:eq(0)');

		function addevtstring(cond, evtstr) {
			return (cond)? ' ' + evtstr : '';
		}

		$topul.find('li>div, li>ul').each(function() {
			var $parentli = $(this).parent('li');
			var $dropdown = $(this);
			$dropdown.addClass('issub').data({$parentli: $parentli});
			$parentli.addClass('hassub').data({$submenu: $dropdown, showhidetimer: null}).on('mouseenter', function(e) {
				amazonmenu.showhide($(this), 'show', setting);
			});
		});

		if(setting.addBodyOverlay) {
			var bodyOverlay = $('<div></div>');
			bodyOverlay.css({'background': 'rgba(72, 72, 72, 0.8)', 'position': 'absolute', 'width': '100%', 'height': '100%', 'top': '0', 'left': '0', 'display': 'none'});
			$('body').append(bodyOverlay);

			$topul.children('li:eq(0)').on('mouseenter', function() {
				var menuTrigger = $(this);
				setTimeout(function() {
					if(menuTrigger.is(':hover')) {
						bodyOverlay.show();
					}
				}, setting.showhidedelay[1]);
			}).on('mouseleave', function() {
				setTimeout(function() {
					bodyOverlay.hide();
					$topul.find('li').removeClass('selected');
				}, setting.showhidedelay[1]);
			});
		}

		var $mainlis = $topul.children('li.hassub').on('mouseleave', function() {
			amazonmenu.showhide($(this), 'hide', setting);
		});
	},
	init: function(options) {
		var $menu = $('#' + options.menuid);
		this.setting = $.extend({}, options, this.defaults);
		this.setting.animateduration = Math.max(50, this.setting.animateduration);
		this.setupmenu($menu, this.setting);

		var hideDelay = this.setting.showhidedelay[1];
		$menu.on('mouseenter', 'li:not(.hassub)', function() {
			$li = $(this);
			setTimeout(function() {
				if($li.is(':hover')) {
					hideSiblingSubMenus($li);
				}
			}, hideDelay);
		});
	}
};

function hideSiblingSubMenus($li) {
	var $liSiblings = $li.siblings();
	$.each($liSiblings, function() {
		var $currLi = $(this);
		$currLi.removeClass('selected');
		var $submenu = $currLi.data('$submenu');
		if(typeof $submenu != 'undefined') {
			$submenu.data('fullyvisible', false);
			$submenu.stop(true, true).fadeOut(0);
			var $subuls = $submenu.find('.issub');
			if($subuls.length > 0) {
				$subuls.css({display: 'none'});
				$subuls.data('$parentli').removeClass('selected');
			}
		}
	});
}