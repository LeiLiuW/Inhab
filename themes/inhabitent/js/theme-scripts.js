// (function($){
// put everything in here to solve the problem of $
// })(jQuery);
// = replace $ to jQuery

(function($){
  $('#close-comments').on('click',function(event) {
    event.preventDefault();

    $.ajax({
      method:'post',
      url:comment_vars.rest_url + 'wp/v2/posts/' + comment_vars.post_id,
      data:{
        comment_status:'open'
      },
      beforeSend: function(xhr){
        xhr.setRequestHeader('X-WP-Nonce', comment_vars.wpapi_nonce);
      }
    }) .done(function(response){
      alert("Success! Comments closed");
    });
  });

})(jQuery);
