// Include html files in a html file
// Usage: 
//     <div html-include="xxx"></div>
//
// Reference: 
//     mhanisch's answer at https://stackoverflow.com/questions/8988855/include-another-html-file-in-a-html-file


$(function(){
    var includes = $('[data-include]');
    jQuery.each(includes, function(){
      var file = $(this).data('include') + '.html';
      $(this).load(file);
    });
});