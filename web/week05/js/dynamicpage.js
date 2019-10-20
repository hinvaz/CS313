$(function() {

    var newHash      = "",
        $container = $("#container"),
        $center    = $(".center"),
        baseHeight   = 0,
        $el;
        
    $center.height($center.height());
    baseHeight = $center.height() - $container.height();
    
    $("nav").delegate("a", "click", function() {
        window.location.hash = $(this).attr("href");
        return false;
    });
    
    $(window).bind('hashchange', function(){
    
        newHash = window.location.hash.substring(1);
        
        if (newHash) {
            $container
                .find("#content")
                .fadeOut(200, function() {
                    $container.hide().load(newHash + " #content", function() {
                        $container.fadeIn(200, function() {
                            $center.animate({
                                height: baseHeight + $container.height() + "px"
                            });
                        });
                        $("nav a").removeClass("current");
                        $("nav a[href="+newHash+"]").addClass("current");
                    });
                });
        };
        
    });
    
    $(window).trigger('hashchange');

});