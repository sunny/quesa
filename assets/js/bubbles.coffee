# Bubbles!
define ['jquery'], ($) ->
  (options) ->
    bubble = $('<div class="js-bulle">o</div>')
    documentHeight  = $(document).height()
    documentWidth = $(document).width()
    defaults =
      minSize: 5,
      maxSize: 20,
      minOpacity: 0.2
      maxOpacity: 0.7
      newOn: 2000

    mouse = {}

    $(document).mousemove (e) ->
      mouse.x = e.pageX
      mouse.y = e.pageY

    options = $.extend({}, defaults, options)

    newBubble = ->
      sizeFlake = options.minSize + Math.random() * options.maxSize
      startPositionLeft = mouse.x - sizeFlake - 6 + Math.random() * 6
      startOpacity = options.minOpacity + Math.random() * options.maxOpacity
      startPositionTop = mouse.y - sizeFlake
      endPositionTop = - sizeFlake*2
      endPositionLeft = startPositionLeft - 100 + Math.random() * 100
      durationFall = startPositionTop * 10 + Math.random() * 5000
      bubble
        .clone()
        .appendTo('body')
        .css(
          top: startPositionTop
          left: startPositionLeft
          opacity: startOpacity
          fontSize: sizeFlake
        )
        .animate(
          {
            top: endPositionTop
            left: endPositionLeft
            opacity: 0.1
          },
          durationFall,
          'linear',
          -> $(this).remove()
        )

    setInterval(newBubble, options.newOn)
    $(document).click ->
      newBubble()
      setTimeout(newBubble, 500)
