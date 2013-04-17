(function() {
  requirejs.config({
    baseUrl: 'assets/js',
    paths: {
      "jquery": ["//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min", "vendor/jquery"]
    }
  });

  require(['jquery', 'bubbles', 'facetabs'], function($, bubbles) {
    bubbles();
    return $(function() {
      $('html').addClass('js');
      return $('.face-tabs').faceTabs();
    });
  });

}).call(this);
