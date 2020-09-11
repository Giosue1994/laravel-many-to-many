require('./bootstrap');
var $ = require( "jquery" );

$(document).ready(function() {
  // $(document).on('click', '.delete', function() {
  //   $(this).parents().find('.box').show();
  // });
  //
  // $(document).on('click', '.no', function() {
  //   $('.box').hide();
  // });

  $('.delete').on('submit', function(){
        return confirm('Vuoi davvero cancellare l\'auto?');
    });
});
