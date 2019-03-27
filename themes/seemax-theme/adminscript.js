(function ($, root, undefined) {$(function () {
'use strict';

var pubSection = $('*[data-name="publication_section"]:not(:first)');

pubSection.prepend('<div class="acf-toggle">Show Publications List</div>')
pubSection.parent().addClass('not-this-acf');
console.log("ok");

$('*[data-name="publication_section"]').each( function() {

  var $this = $(this);
  var thisList = $this.find($('*[data-name="list"]'));
  var otherLists = $('*[data-name="publication_section"]');


  thisList.hide();

  $this.find($('.acf-toggle')).on( 'click', function() {

    if($(this).hasClass('open')) {
      thisList.hide();
      $(this).html('Show Publications List');
      $(this).removeClass('open');
      $(this).parent().parent().addClass('not-this-acf');
    } else {
      thisList.show();
      $(this).html('Hide Publications List');
      $(this).addClass('open');
      $(this).parent().parent().removeClass('not-this-acf');
    }

  });

});




});})(jQuery, this);
