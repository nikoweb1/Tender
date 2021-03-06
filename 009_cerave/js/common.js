"use strict";

$(document).ready(function () {

  var hideEl = function(data) {
    $('.sl2').removeClass('_show');
    $('.main-m').addClass('hide');
  };

  var showEl = function(data) {
    $('.sl2').addClass('_show');
    $('.main-m').removeClass('hide');
  };

  var changeBGtoMainColor = function() {
    $('.wrap .common-bg').removeClass('hide');
  };

  var changeBGtoWB = function() {
    $('.wrap .common-bg1add').removeClass('hide');
  };

  var removeWB = function() {
    $('.wrap .common-bg1add').addClass('hide');
  };

  var changeBGtoWhite = function() {
    $('.wrap .common-bg2').removeClass('hide');
  };

  var removeWhite = function() {
    $('.wrap .common-bg2').addClass('hide');
  };

  var changeBGtoGB = function() {
    $('.wrap .common-bg3').removeClass('hide');
  };

  var removeGB = function() {
    $('.wrap .common-bg3').addClass('hide');
  };

  var it1 = 768 / 100;
  var it2;
  var it4 = 1024 / 100;
  var newSize;

  function ress() {
    if ($(window).height() > 768) {
      $('.over-wrap').height(768);
    } else {
      $('.over-wrap').height($(window).height());
    }

    it2 = Math.round($(window).height() / it1);

    if ( $(window).width() > $(window).height() ) {
      newSize = $(window).height() / 1000 + ( ( $(window).height() / 1000 ) / 100 * 29.9 );
      if ( newSize > 1 && $(window).width() < 1024 && $(window).height() < 768 ) {
        newSize = 0.95;
      }
      $('#page').attr('style', '').css({
        'transform': 'scale(' + newSize + ')'
      }).css({
        '-webkit-transform': 'scale(' + newSize + ')'
      });
      return;
    }

    if ($(window).height() < 768 || $(window).width() < 1024) {
      it2 = Math.round($(window).width() / it4);
      newSize = $(window).height() / 1000 + ( ( $(window).height() / 1000 ) / 100 * 29.9 );
      $('#page').attr('style', '').css({
        'transform': 'scale(' + (it2 - 1) / 100 + ')'
      }).css({
        '-webkit-transform': 'scale(' + (it2 - 1) / 100 + ')'
      });
    }

    if ($(window).width() > 1024) {
      it2 = Math.round($(window).width() / it4) > Math.round($(window).height() / it1) ? Math.round($(window).height() / it1) : Math.round($(window).width() / it4);
      $('#page').attr('style', '');
      $('#page').css({
        'transform': 'scale(' + it2 / 100 + ')'
      });
      $('#page').css({
        '-webkit-transform': 'scale(' + it2 / 100 + ')'
      });
      $('.over-wrap').height(768 * (it2 / 100));
    }
  }

  ress();
  $(window).resize(function () {
    ress();
  });
  $(window).load(function () {
    ress();
  });

  $('.sl2 .sl2-link1').click(function() {
    $('.sl2 .ovec').removeClass('ac');
    $('.sl2 .vec1').addClass('ac');
  });
  $('.sl2 .sl2-link2').click(function() {
    $('.sl2 .ovec').removeClass('ac');
    $('.sl2 .vec2').addClass('ac');
  });
  $('.sl2 .sl2-link3').click(function() {
    $('.sl2 .ovec').removeClass('ac');
    $('.sl2 .vec3').addClass('ac');
  });
  $('.sl2 .sl2-link4').click(function() {
    $('.sl2 .ovec').removeClass('ac');
    $('.sl2 .vec4').addClass('ac');
  });

  $('.sl2 .vec1 a').click(function() {
    $('.m_pop1').fadeIn();
    hideEl();
    changeBGtoWhite();
  });
  $('.m_pop1 .x').click(function() {
    $(this).parent().fadeOut();
    showEl();
    removeWhite();
  });

  $('.sl2 .vec2 a').click(function() {
    $('.m_pop2').fadeIn();
    hideEl();
    changeBGtoWB();
  });
  $('.m_pop2 .x').click(function() {
    $(this).parent().fadeOut();
    showEl();
    removeWB();
  });

  $('.sl2 .vec3 a').click(function() {
    $('.m_pop3').fadeIn();
    hideEl();
    changeBGtoGB();
  });
  $('.m_pop3 .x').click(function() {
    $(this).parent().fadeOut();
    showEl();
    removeGB();
  });

  $('.sl2 .vec4 a').click(function() {
    $('.m_pop4').fadeIn();
    changeBGtoWhite();
    hideEl();
  });

  var changeBGtoFirstBG = function() {
    $('.wrap .common-bg4').removeClass('hide');
  };

  var removeFirstBG = function() {
    $('.wrap .common-bg4').addClass('hide');
  };

  var changeBGtoSecondBG = function() {
    $('.wrap .common-bg5').removeClass('hide');
  };

  var removeSecondBG = function() {
    $('.wrap .common-bg5').addClass('hide');
  };

  var changeBGtoThirdBG = function() {
    $('.wrap .common-bg6').removeClass('hide');
  };

  var removeThirdBG = function() {
    $('.wrap .common-bg6').addClass('hide');
  };

  var changeBGtoFourthBG = function() {
    $('.wrap .common-bg7').removeClass('hide');
  };

  var removeFourthBG = function() {
    $('.wrap .common-bg7').addClass('hide');
  };

  $('.m_pop3 .o1').click(function() {
    $('.x_pop1').fadeIn();
    $('.m_pop3').fadeOut();
    changeBGtoFirstBG();
  });

  $('.x_pop1 .x').click(function() {
    $(this).parent().fadeOut();
    $('.m_pop3').fadeIn();
    removeFirstBG();
  });

  $('.m_pop3 .o2').click(function() {
    $('.x_pop2').fadeIn();
    $('.m_pop3').fadeOut();
    changeBGtoSecondBG();
  });

  $('.x_pop2 .x').click(function() {
    $(this).parent().fadeOut();
    $('.m_pop3').fadeIn();
    removeSecondBG();
  });

  $('.m_pop3 .o3').click(function() {
    $('.x_pop3').fadeIn();
    $('.m_pop3').fadeOut();
    changeBGtoFirstBG();
  });

  $('.x_pop3 .x').click(function() {
    $(this).parent().fadeOut();
    $('.m_pop3').fadeIn();
    removeFirstBG();
  });

  $('.m_pop3 .o4').click(function() {
    $('.x_pop4').fadeIn();
    $('.m_pop3').fadeOut();
    changeBGtoThirdBG();
  });

  $('.x_pop4 .x').click(function() {
    $(this).parent().fadeOut();
    $('.m_pop3').fadeIn();
    removeThirdBG();
  });

  $('.m_pop3 .o5').click(function() {
    $('.x_pop5').fadeIn();
    $('.m_pop3').fadeOut();
    changeBGtoThirdBG();
  });

  $('.x_pop5 .x').click(function() {
    $(this).parent().fadeOut();
    $('.m_pop3').fadeIn();
    removeThirdBG();
  });

  $('.m_pop3 .o6').click(function() {
    $('.x_pop6').fadeIn();
    $('.m_pop3').fadeOut();
    changeBGtoThirdBG();
  });

  $('.x_pop6 .x').click(function() {
    $(this).parent().fadeOut();
    $('.m_pop3').fadeIn();
    removeThirdBG();
  });

  $('.m_pop3 .o7').click(function() {
    $('.x_pop7').fadeIn();
    $('.m_pop3').fadeOut();
    changeBGtoFourthBG();
  });

  $('.x_pop7 .x').click(function() {
    $(this).parent().fadeOut();
    $('.m_pop3').fadeIn();
    removeFourthBG();
  });

  $('.main-m .prev-move').click(function() {
    $('.sl._show').removeClass('_show').prev().addClass('_show');
    $(this).addClass('hide');
    $('.main-m .next-move').removeClass('hide');
  });
  $('.main-m .next-move').click(function() {
    $('.sl._show').removeClass('_show').next().addClass('_show');
    $(this).addClass('hide');
    $('.main-m .prev-move').removeClass('hide');
  });

});