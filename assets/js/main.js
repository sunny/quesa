(function() {
  var bubbles;

  jQuery(function() {
    var div, faceTabs;

    faceTabs = $('.face-tabs');
    faceTabs.addClass('js-face-tabs');
    faceTabs.find('dt.default').hide();
    faceTabs.find('dd.default').addClass('selected');
    faceTabs.find('dd').hide();
    div = $('<div>').css({
      clear: 'both'
    }).appendTo(faceTabs);
    faceTabs.find('dt').click(function() {
      $(this).addClass('selected').siblings('dt').removeClass('selected');
      div.slideUp();
      div.html($(this).next('dd').html());
      return div.slideDown();
    });
    return bubbles();
  });

  bubbles = function(options) {
    var bubble, defaults, documentHeight, documentWidth, mouse, newBubble;

    bubble = $('<div class="js-bulle">o</div>');
    documentHeight = $(document).height();
    documentWidth = $(document).width();
    defaults = {
      minSize: 5,
      maxSize: 20,
      minOpacity: 0.2,
      maxOpacity: 0.7,
      newOn: 1000
    };
    mouse = {};
    $(document).mousemove(function(e) {
      mouse.x = e.pageX;
      return mouse.y = e.pageY;
    });
    options = $.extend({}, defaults, options);
    newBubble = function() {
      var durationFall, endPositionLeft, endPositionTop, sizeFlake, startOpacity, startPositionLeft, startPositionTop;

      sizeFlake = options.minSize + Math.random() * options.maxSize;
      startPositionLeft = mouse.x - sizeFlake - 6 + Math.random() * 6;
      startOpacity = options.minOpacity + Math.random() * options.maxOpacity;
      startPositionTop = mouse.y - sizeFlake;
      endPositionTop = -sizeFlake * 2;
      endPositionLeft = startPositionLeft - 100 + Math.random() * 100;
      durationFall = startPositionTop * 10 + Math.random() * 5000;
      return bubble.clone().appendTo('body').css({
        top: startPositionTop,
        left: startPositionLeft,
        opacity: startOpacity,
        fontSize: sizeFlake
      }).animate({
        top: endPositionTop,
        left: endPositionLeft,
        opacity: 0.1
      }, durationFall, 'linear', function() {
        return $(this).remove();
      });
    };
    setInterval(newBubble, options.newOn);
    return $(document).click(function() {
      newBubble();
      return setTimeout(newBubble, 500);
    });
  };

}).call(this);
