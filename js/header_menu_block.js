/**
 * @file
 * Behaviors for Devel.
 */

(function ($) {

Backdrop.behaviors.header_menu_block = {
  attach: function() {
    const search = document.querySelector('.header-search')
    const btn = document.querySelector('.btn')
    const input = document.querySelector('.custom-header-wrapper .search-block-form')
    btn.addEventListener('click', () => {
        search.classList.toggle('active')
        input.focus()
    })

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
