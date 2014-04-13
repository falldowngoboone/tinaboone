function windowBox(s) {
    var styleString = "";
    var style = {
        "position":"fixed",
        "top":"0",
        "right":"0",
        "color":"white",
        "background":"rgba(0,0,0,.5)",
        "padding":"5px"
    };

    if (typeof s !== 'undefined') {
        for (var i in s) {
            style[i] = s[i];
        }
    }
    for (var i in style) {
        styleString += i + ":" + style[i] + ";";
    }

    $('body').prepend('<div id="js-window-box" style=' + styleString + '>' + $(window).width() + ' px wide</div>');
    $(window).resize(function(){
        $('#js-window-box').html($(window).width() + ' px wide');
    });
}