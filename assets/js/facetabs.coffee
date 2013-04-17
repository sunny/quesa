define 'facetabs', ['jquery'], ($) ->
  $.fn.faceTabs = ->
    # Find
    terms = @find('dt')
    definitions = @find('dd')
    handler = $('<div class="current-face"></div>')

    # Launch
    handler.appendTo(@)
    definitions.hide()
    terms.first().hide()
    handler.html definitions.first().html()

    # Listen
    terms.on 'click', ->
      term = $(@)
      term.addClass('selected').siblings('.selected').removeClass('selected')
      handler.slideUp ->
        $(@).html term.next().html()
        $(@).slideDown()


