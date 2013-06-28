 $(function() {
     $("#side").accordion({
         navigation: true,
         heightStyle: "content",
         animate: false
     });
     $("#side li a").click(function() {
         $.cookie("openItem", $(this).attr("href"));
     });
     $("#side h3  ").click(function() {
         $.cookie("openItem", $(this).children().children().attr("href"));
         document.location.href = $(this).children().children().attr("href");
     });

     $("#side li a[href$='" + $.cookie("openItem") + "']").addClass("open");
     $("#side li a[href$='" + $.cookie("openItem") + "']").parent().addClass('active');

 });
 $(function() {
     var src1 = "images/png/new_coorse_minus_new.png";
     var src2 = "images/png/new_coorse_add_new.png";
     $("#APM").click(function() {
         if ($("#PM").attr("src") != src1) $("#PM").attr("src", src1);
         else $("#PM").attr("src", src2);
     })
 })

 $(function() {
     var src1 = "images/png/button_add1.png";
     var src2 = "images/png/button_add2.png";
     $("#APMI1").click(function() {
         if ($("#PMI1").attr("src") != src1) $("#PMI1").attr("src", src1);
         else $("#PMI1").attr("src", src2);
     })
     $("#APMI2").click(function() {
         if ($("#PMI2").attr("src") != src1) $("#PMI2").attr("src", src1);
         else $("#PMI2").attr("src", src2);
     })
     $("#APMI3").click(function() {
         if ($("#PMI3").attr("src") != src1) $("#PMI3").attr("src", src1);
         else $("#PMI3").attr("src", src2);
     })
     $("#APMI4").click(function() {
         if ($("#PMI4").attr("src") != src1) $("#PMI4").attr("src", src1);
         else $("#PMI4").attr("src", src2);
     })
     $("#APMI5").click(function() {
         if ($("#PMI5").attr("src") != src1) $("#PMI5").attr("src", src1);
         else $("#PMI5").attr("src", src2);
     })
     $("#APMI6").click(function() {
         if ($("#PMI6").attr("src") != src1) $("#PMI6").attr("src", src1);
         else $("#PMI6").attr("src", src2);
     })
     $("#APMI1").click(function() {
         if ($("#PMI7").attr("src") != src1) $("#PMI7").attr("src", src1);
         else $("#PMI7").attr("src", src2);
     })
     $("#APMI8").click(function() {
         if ($("#PMI8").attr("src") != src1) $("#PMI8").attr("src", src1);
         else $("#PMI8").attr("src", src2);
     })
     $("#APMI9").click(function() {
         if ($("#PMI9").attr("src") != src1) $("#PMI9").attr("src", src1);
         else $("#PMI9").attr("src", src2);
     })
     $("#APMI10").click(function() {
         if ($("#PMI10").attr("src") != src1) $("#PMI10").attr("src", src1);
         else $("#PMI10").attr("src", src2);
     })
     $("#APMI11").click(function() {
         if ($("#PMI11").attr("src") != src1) $("#PMI11").attr("src", src1);
         else $("#PMI11").attr("src", src2);
     })
     $("#APMI12").click(function() {
         if ($("#PMI12").attr("src") != src1) $("#PMI12").attr("src", src1);
         else $("#PMI12").attr("src", src2);
     })
     $("#APMI13").click(function() {
         if ($("#PMI13").attr("src") != src1) $("#PMI13").attr("src", src1);
         else $("#PMI13").attr("src", src2);
     })
     $("#APMI14").click(function() {
         if ($("#PMI14").attr("src") != src1) $("#PMI14").attr("src", src1);
         else $("#PMI14").attr("src", src2);
     })
     $("#APMI15").click(function() {
         if ($("#PMI15").attr("src") != src1) $("#PMI15").attr("src", src1);
         else $("#PMI15").attr("src", src2);
     })
     $("#APMI16").click(function() {
         if ($("#PMI16").attr("src") != src1) $("#PMI16").attr("src", src1);
         else $("#PMI16").attr("src", src2);
     })
     $("#APMI17").click(function() {
         if ($("#PMI17").attr("src") != src1) $("#PMI17").attr("src", src1);
         else $("#PMI17").attr("src", src2);
     })
     $("#APMI18").click(function() {
         if ($("#PMI18").attr("src") != src1) $("#PMI18").attr("src", src1);
         else $("#PMI18").attr("src", src2);
     })
     $("#APMI19").click(function() {
         if ($("#PMI19").attr("src") != src1) $("#PMI19").attr("src", src1);
         else $("#PMI19").attr("src", src2);
     })
 })

 $(function() {
     // alert('page');
     var page;
     $("#dsd li").click(function() {
         page = $(this).text();
         // alert(page);
         $.ajax({
             type: "POST",
             url: '/php/issue.php',
             data: {
                 "page": page
             }
         })
     })


 })

 $(function() {
     $("#inlineCheckbox1").bind("change click", function() {
         // do something
         if ($(this).prop("checked")) {
             $("input:checkbox").prop("checked", false);
         } else {
             $("input:checkbox").prop("checked", true);
         }

         //alert(1);
     });
 });
 /*
 function JSONresp() {
     $.ajax({
         type: "POST",
         url: "/php/search.php",
         //dataType: "json",
         data: {
             "search": search
         },
         cache: false,
         success: function(response) {
             //$("#result").empty();
             //res = $.parseJSON(response);
             // l = res.length;
             res = response;
             //alert(response);
         }
     });
 }
 $(function() {
     var res;
     $("#search").keyup(function(event) {
         var search = $("#search").val();
         $.ajax({
             type: "POST",
             url: "/php/search.php",
             //dataType: "json",
             data: {
                 "search": search
             },
             cache: false,
             success: function(response) {
                 //$("#result").empty();
                 //res = $.parseJSON(response);
                 // l = res.length;
                 res = response;
                 //alert(response);
             }
         });
    });
     var resp;
     $("#search").autocomplete({
         source: function() {
             $.ajax({
                 type: "POST",
                 url: "/php/search.php",
                 data: {
                     "search": search
                 },
                 cache: false,
                 success: function(response) {
                     alert(1);
                     return $.parseJSON(response);
                 }
             });
         },
         minLength: 2
     });
 });

 var glob;
 var req;
 var l;
 $(function() {
     $("#search").keyup(function(event) {
         var search = $("#search").val();
         if (search.len > 2) {
                                alert(1)
         //if (event.which == 1040 || 1041 || 1042 || 1043 || 1044 || 1045 || 1046 || 1047 || 1048 || 1049 || 1050 || 1051 || 1052 || 1053 || 1054 || 1055 || 1056 || 1057 || 1058 || 1059 || 1060 || 1061 || 1062 || 1063 || 1064 || 1065 || 1066 || 1067 || 1068 || 1069 || 1070 || 1071 || 1025 || 1072 || 1073 || 1074 || 1075 || 1076 || 1077 || 1078 || 1079 || 1080 || 1081 || 1082 || 1083 || 1084 || 1085 || 1086 || 1087 || 1088 || 1089 || 1090 || 1091 || 1092 || 1093 || 1094 || 1095 || 1096 || 1097 || 1098 || 1099 || 1100 || 1101 || 1102 || 1103 || 1105) {
         if (event.which == 40 || event.which == 38) {
             //console.log('');
         } else {
             $.ajax({
                 type: "POST",
                 url: "/php/search.php",
                 //dataType: "json",
                 data: {
                     "search": search
                 },
                 cache: false,
                 success: function(response) {
                     $("#result").empty();
                     var res = $.parseJSON(response);
                     l = res.length;
                     glob = res;
                     for (var i = 0; i < l; i++) {
                         $("#result").append('<p>' + res[i].name + '</p>');
                     }
                 }
             });
             return false;
         }
     }
     });
 search ="";
 });
 $(function() {
     $("#search").keyup(function() {
         if ($("#search").val().length !== 0) {
             $('#result').show();
         } else $('#result').hide();
     });
 });
 $(function() {
     var i = -1;

     $("#search").keydown(function(event) {
         if (event.which == 40) {
             if (i < l - 1 && i >= -1) {
                 i++;
                 $("#search").val(glob[i].id);
                 console.log(i);
             }
         }
         if (event.which == 38) {
             if (i <= l - 1 && i > 0) {
                 i--;
                 console.log(i);
                 $("#search").val(glob[i].id);
             }
         }
         if (event.which == 13) {
             $('#result').hide();
             alert(glob[i].label);

         }
         if (event.which == 13 || event.which == 8 || event.which == 46) {
             i = -1;
         }


     });


 });
 /*$(function() {
                $(document).ready(function() {
                    $("#search").focus(function() {
                        $('#result').show();
                    });
                    });
                });*/

 $(function() {
     $("#go_search").click(function() {
         var search = $("#search").val();
         $.ajax({
             type: "POST",
             url: '/php/search_course.php',
             data: {
                 "search": search
             },
             success: function(response) {
                 alert(1);
                 var res = $.parseJSON(response);
                 alert(res[1].value);
             }
         });
     });
 });