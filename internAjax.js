$("#searchInputX").keyup(function(){
    var s = $("#searchInputX").val();
    
    $.ajax({
        url : 'test.php',
        data : "usearch="+s,
        success: function (data) {
            if (s == ''){
                $('#result').html('');
            } else {
                $('#result').html(data);
            }
            
        }

    });
});