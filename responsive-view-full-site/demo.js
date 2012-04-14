$(document).ready(function(){
    var targetWidth = 980;
    
    $('#view-full').bind('click', function(){
        $('meta[name="viewport"]').attr('content', 'width=' + targetWidth);
    });
});