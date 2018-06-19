$(document).ready(function () {
    $(".project-images").hide();
    $(".more").hide();
    $(".even-more").hide();
    $(".project-heading-text").click(function () {
        $(this).parent().next().toggle(1100);
    });

    $(".project-heading-text").hover(
        function () {
            $(this).toggleClass('animated pulse');
        },
    );

    $(".view-more-button").click(function () {
        $(".more").show(1100);
        $(".view-more-button").hide();
        $(".even-more").show();
       
    });

});