/**
 * @file
 * https://www.codingthai.com/hidden-search-bar-using-html-css-and-js/.
 */

(function ($) {

Backdrop.behaviors.header_menu_block = {
  attach: function() {
    const search = $('.header-search')
    const mas = $('.menus-and-switcher')
    const btn = $('.btn')
    const input = $('.custom-header-wrapper .search-block-wrapper')
    btn.click(function () {
      search.toggleClass('active');
      mas.toggle();
      input.focus();
    });

    // $('a.dev-explain').click(function () {
      // qid = $(this).attr("qid");
      // cell = $('#devel-query-' + qid);
      // $('.dev-explain', cell).load(Backdrop.settings.basePath + '?q=devel/explain/' + Backdrop.settings.devel.request_id + '/' + qid).show();
      // $('.dev-placeholders', cell).hide();
      // $('.dev-arguments', cell).hide();
      // return false;
    // });
  }
}

})(jQuery);
