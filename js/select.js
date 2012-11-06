$(document).ready(function() {
    
    $('#select').change(function(){
        var adress = $(this).val();
        $.ajax({
            url:'/php/location.php',
            type: "POST",
            data:
                {"location": adress},  
            success:function(data){
                             
            }
        })
    })
})
