(function ($, root, undefined) {$(function () {
'use strict';

var pubSection = $('*[data-name="publication_section"]:not(:first)');

pubSection.prepend('<div class="acf-toggle">Show Publications List</div>')
pubSection.parent().addClass('not-this-acf');
console.log("ok");

$('*[data-name="publication_section"]').each( function() {

  var $this = $(this);
  var thisList = $this.find($('*[data-name="list"]'));

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


var pubAppSection = $('*[data-name="public_appearance_section"]:not(:first)');

pubAppSection.prepend('<div class="acf-toggle">Show Appearance List</div>')
pubAppSection.parent().addClass('not-this-acf');
console.log("ok");

$('*[data-name="public_appearance_section"]').each( function() {

  var $this = $(this);
  var thisList = $this.find($('*[data-name="list"]'));

  thisList.hide();

  $this.find($('.acf-toggle')).on( 'click', function() {

    if($(this).hasClass('open')) {
      thisList.hide();
      $(this).html('Show Appearance List');
      $(this).removeClass('open');
      $(this).parent().parent().addClass('not-this-acf');
    } else {
      thisList.show();
      $(this).html('Hide Appearance List');
      $(this).addClass('open');
      $(this).parent().parent().removeClass('not-this-acf');
    }

  });

});


var recentSection = $('*[data-name="recent_section"]:not(:first)');

recentSection.prepend('<div class="acf-toggle">Show Recent List</div>')
recentSection.parent().addClass('not-this-acf');
console.log("ok");

$('*[data-name="recent_section"]').each( function() {

  var $this = $(this);
  var thisList = $this.find($('*[data-name="list"]'));

  thisList.hide();

  $this.find($('.acf-toggle')).on( 'click', function() {

    if($(this).hasClass('open')) {
      thisList.hide();
      $(this).html('Show Appearance List');
      $(this).removeClass('open');
      $(this).parent().parent().addClass('not-this-acf');
    } else {
      thisList.show();
      $(this).html('Hide Appearance List');
      $(this).addClass('open');
      $(this).parent().parent().removeClass('not-this-acf');
    }

  });

});




});})(jQuery, this);
