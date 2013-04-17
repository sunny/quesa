(function() {
  define('facetabs', ['jquery'], function($) {
    return $.fn.faceTabs = function() {
      var definitions, handler, terms;

      terms = this.find('dt');
      definitions = this.find('dd');
      handler = $('<div class="current-face"></div>');
      handler.appendTo(this);
      definitions.hide();
      terms.first().hide();
      handler.html(definitions.first().html());
      return terms.on('click', function() {
        var term;

        term = $(this);
        term.addClass('selected').siblings('.selected').removeClass('selected');
        return handler.slideUp(function() {
          $(this).html(term.next().html());
          return $(this).slideDown();
        });
      });
    };
  });

}).call(this);
