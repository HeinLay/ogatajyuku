/**
 * UA判別
 */
var _ua = (function(u) {
  return {
    Tablet: (u.indexOf("windows") != -1 && u.indexOf("touch") != -1 && u.indexOf(
        "tablet pc") == -1) ||
      u.indexOf("ipad") != -1 ||
      (u.indexOf("android") != -1 && u.indexOf("mobile") == -1) ||
      (u.indexOf("firefox") != -1 && u.indexOf("tablet") != -1) ||
      u.indexOf("kindle") != -1 ||
      u.indexOf("silk") != -1 ||
      u.indexOf("playbook") != -1,
    Mobile: (u.indexOf("windows") != -1 && u.indexOf("phone") != -1) ||
      u.indexOf("iphone") != -1 ||
      u.indexOf("ipod") != -1 ||
      (u.indexOf("android") != -1 && u.indexOf("mobile") != -1) ||
      (u.indexOf("firefox") != -1 && u.indexOf("mobile") != -1) ||
      u.indexOf("blackberry") != -1
  }
})(window.navigator.userAgent.toLowerCase());

/**
 * デバイス別 viewport 指定
 */
if (_ua.Mobile) {
  $("meta[name='viewport']").attr('content',
    'width=device-width, initial-scale=1');
} else if (_ua.Tablet) {
  $("meta[name='viewport']").attr('content', 'width=1200');
} else {
  $("meta[name='viewport']").attr('content', 'width=1200');
}

/**
 * internal linkスムーズスクロール
 */
 $(function() {
  $('a[href*="#"]:not([href="#"])').click(function () {
    var head_h = $(".header").height();
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
        location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top - head_h
        }, 1000);
        return false;
      }
    }
  });
});

/**
 * external linkスムーズスクロール
 */
$(function() {
  setTimeout(function() {
    if (location.hash) {
      window.scrollTo(0, 0);
      target = location.hash.split('#');
      smoothScrollTo($('#' + target[1]));
    }
  }, 1);

  /**
   * taken from: https://css-tricks.com/snippets/jquery/smooth-scrolling/
   */
  $('a[href*="#"]:not([href="#"])').click(function() {
    var head_h = $(".header").height();
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
      location.hostname == this.hostname) {
      smoothScrollTo($(this.hash));
      return false;
    }
  });

  function smoothScrollTo(target) {
    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

    if (target.length) {
      $('html,body').animate({
        scrollTop: target.offset().top - 80
      }, 1000);
    }
  }
});

//ウィンドウ幅で画像を切替える
// $(document).ready(function() {
//   $(function() {
//     var $setElem = $('img'),
//       pcName = '_pc',
//       spName = '_sp',
//       replaceWidth = 767;

//     $setElem.each(function() {
//       var $this = $(this);

//       function imgSize() {
//         if (window.innerWidth > replaceWidth) {
//           $this.attr('src', $this.attr('src').replace(spName, pcName)).css({
//             visibility: 'visible'
//           });
//         } else {
//           $this.attr('src', $this.attr('src').replace(pcName, spName)).css({
//             visibility: 'visible'
//           });
//         }
//       }
//       $(window).resize(function() {
//         imgSize();
//       });
//       imgSize();
//     });
//   });
// });

/**
* スティッキーヘッダー
*/
$(function() {
  $('.header').hide();
  $(window).scroll(function() {
    if ($(this).scrollTop() > 50) {
      $('.header').css('display', 'block');
    } else {
      $('.header').css('display', 'none');
    }
  });
});

$(function() {
  $(window).scroll(function() {
    if ($(this).scrollTop() > 50) {
      $('.sp-head-right').addClass('sticky');
      $('.header').addClass('sticky');
      $('.menu-trigger-top').addClass('sticky');
      $('.apply-btn-top').addClass('sticky');
      $('.menu-trigger-single').addClass('sticky');
      $('.page-ttl').addClass('sticky');
      $('.sp-single').addClass('sticky');
    } else {
      $('.sp-head-right').removeClass('sticky');
      $('.header').removeClass('sticky');
      $('.menu-trigger-top').removeClass('sticky');
      $('.apply-btn-top').removeClass('sticky');
      $('.menu-trigger-single').removeClass('sticky');
      $('.page-ttl').removeClass('sticky');
      $('.sp-single').removeClass('sticky');
    }
  });
});

// メニューを右から開く
$(function() {
	var scrollPos;
	$('.jsSlideMenu').on('click', function() {
		if (!$('html').hasClass('scroll-prevent')) {
			// 開く処理
			scrollPos = $(window).scrollTop();
			$('.slide-menu').toggleClass('active');
			$('.menu-trigger').toggleClass('active');
			$('.jsSlideMenuOpen').toggleClass('active');
			$('.jsHeadNav').toggleClass('hidden');
			$('html').toggleClass('scroll-prevent');
		} else {
			// 閉じたときに表示位置を戻す
			$('.slide-menu').toggleClass('active');
			$('.menu-trigger').toggleClass('active');
			$('.jsSlideMenuOpen').toggleClass('active');
			$('.jsHeadNav').toggleClass('hidden');
			$('html').toggleClass('scroll-prevent');
			$(window).scrollTop(scrollPos);
		}
	});
});

$(function() {
  $("#page ol ").each(function() {
    $("li", this).prepend(function(i) {
        return $("<span />", {text: i+1 }).append(".");
     });
  });
});

// object fit css not working in IE script
$(function(){
  if (document.documentMode || /Edge/.test(navigator.userAgent)) {
      jQuery('.woocommerce-product-gallery__wrapper img,.customer-img img').each(function() {
          var t = jQuery(this),
              s = 'url(' + t.attr('src') + ')',
              p = t.parent(),
              d = jQuery('<div></div>');

          p.append(d);
          d.css({
              'height': t.parent().css('height'),
              'background-size': 'contain',
              'background-repeat': 'no-repeat',
              'background-position': 'center',
              'background-image': s
          });
          t.hide();
      });
  }
});

//ページトップへ戻るボタンの処理
$(function() {
	var topBtn = $('.jsPageTop');
	topBtn.hide();
	$(window).scroll(function() {
		if ($(this).scrollTop() > 100) {
			topBtn.fadeIn();
		} else {
			topBtn.fadeOut();
		}
		scrollHeight = $(document).height();
		scrollPosition = $(window).height() + $(window).scrollTop();
		footHeight = $("footer").innerHeight();
    var windowWidth = $(window).outerWidth();
        if ( scrollHeight - scrollPosition  <= footHeight ) {
          if (windowWidth < 768) {
            $('.jsPageTop').css({
              "bottom": footHeight,
            });
          } else {
            $(".jsPageTop").css({
              "bottom": footHeight + 60,
            });
          }
          $(".jsPageTop").css({
              "position":"absolute",
          });
            $("body").css({
              "position":"relative",
          });
        } else {
            if (windowWidth < 768) {
              $('.jsPageTop').css({
                "position":"fixed",
                "bottom": 20,
              });
            } else {
              $(".jsPageTop").css({
                "position":"fixed",
                "bottom": 60,
              });
            }
        }
	});
	topBtn.click(function() {
		$('body,html').animate({
			scrollTop: 0
		}, 500);
		return false;
	});
});

$.fn.textlimit = function(limit)
{
    return this.each(function(index,val)
    {
        var $elem = $(this);
        var $limit = limit;
        var $strLngth = $(val).text().length;
        if($strLngth > $limit)
        {
          $($elem).text($($elem).text().substr( 0, $limit )+ "...");
        }
    })
};

$(document).ready(function() {
    $(window).resize(function() {
      var windowWidth = $( window ).width();
      if(windowWidth < 767){
        $(".voice-content .content-blk").textlimit(80);
      } else if(windowWidth < 340){
        $(".voice-content .content-blk").textlimit(55);
      } else {
      $(".voice-content .content-blk").textlimit(90);
      }
    }).resize();
});

$(document).ready(function() {
	$(window).resize(function() {
		var windowWidth = $( window ).width();
		if(windowWidth < 767){
			$(".post-blk .post-txt").textlimit(57);
		} else if(windowWidth < 340){
			$(".post-blk .post-txt").textlimit(30);
		} else if(windowWidth < 1200){
			$(".post-blk .post-txt").textlimit(65);
		} else {
		$(".post-blk .post-txt").textlimit(75);
		}
	}).resize();
});

//background images lazyload
document.addEventListener("DOMContentLoaded", function() {
  var lazyloadImages;    

  if ("IntersectionObserver" in window) {
    lazyloadImages = document.querySelectorAll(".lazy");
    var imageObserver = new IntersectionObserver(function(entries, observer) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          var image = entry.target;
          image.classList.remove("lazy");
          imageObserver.unobserve(image);
        }
      });
    });

    lazyloadImages.forEach(function(image) {
      imageObserver.observe(image);
    });
  } else {  
    var lazyloadThrottleTimeout;
    lazyloadImages = document.querySelectorAll(".lazy");
    
    function lazyload () {
      if(lazyloadThrottleTimeout) {
        clearTimeout(lazyloadThrottleTimeout);
      }    

      lazyloadThrottleTimeout = setTimeout(function() {
        var scrollTop = window.pageYOffset;
        lazyloadImages.forEach(function(img) {
            if(img.offsetTop < (window.innerHeight + scrollTop)) {
              img.src = img.dataset.src;
              img.classList.remove('lazy');
            }
        });
        if(lazyloadImages.length == 0) { 
          document.removeEventListener("scroll", lazyload);
          window.removeEventListener("resize", lazyload);
          window.removeEventListener("orientationChange", lazyload);
        }
      }, 20);
    }

    document.addEventListener("scroll", lazyload);
    window.addEventListener("resize", lazyload);
    window.addEventListener("orientationChange", lazyload);
  }
})
