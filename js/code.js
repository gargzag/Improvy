$(function() {
  $("#issue").load('/php/search.php', function(response) {
    //alert("LOH");
    $("#issue").empty();
    var res = $.parseJSON(response);
    var l = res.length;
    for(var i = 0; i < l; i++) {
      $("#issue").append('<p>' + res[i].id + '</p>');
    };
  });
})