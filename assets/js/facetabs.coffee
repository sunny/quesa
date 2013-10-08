define 'facetabs', ['jquery'], ($) ->
  $.fn.faceTabs = ->
    # Find
    terms = @find('dt')
    definitions = @find('dd')
    handler = $(@data('face-tab-container'))

    # Listen
    terms.on 'click', ->
      term = $(@)
      term.addClass('selected').siblings('.selected').removeClass('selected')
      handler.slideUp ->
        $(@).html term.next().html()
        $(@).slideDown()


