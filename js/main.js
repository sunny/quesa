
// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());


$(function() {
  var faceTabs = $('.face-tabs')
  faceTabs.addClass('js-face-tabs')
  faceTabs.find('dt.default').hide()
  faceTabs.find('dd.default').addClass('selected')

  faceTabs.find('dt').click(function() {
    $(this).addClass('selected').siblings('dt').removeClass('selected')
    $(this).next('dd').addClass('selected').siblings('dd').removeClass('selected')
  })
})

