$(function() {
    //alert("LOH");
  $(".details").load('/php/search.php', function(response) {
    
    $(".details").empty();
    var res = $.parseJSON(response);
    var l = res.length;
    for(var i = 0; i < l; i++) {
      $(".details").append('<p>' + res[i].id + '</p>');
    };
  });
})