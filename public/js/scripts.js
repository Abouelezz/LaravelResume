$(function () {

    //contact form
    $(document).on("click", "contact-submit", function (event) {
        /*
        event.preventDefault();
        var email = $('#form-email').val();
        var subject = $('#form-subject').val();
        var body = $('#form-message').val();
        var vri = $('#form-vri').val();
        $.ajax('');
       */
    });


    //Timeline
    $('.timeline-item-trigger span').click(function () {
        if ($(this).hasClass('circle_plus')) {
            $(this).removeClass('circle_plus').addClass('circle_minus');
        } else {
            $(this).removeClass('circle_minus').addClass('circle_plus');
        }
    });

    $('.timeline-item-title').click(function () {
        $trigger = $(this).parent().parent().find('.timeline-item-trigger span');
        if ($trigger.hasClass('circle_plus')) {
            $trigger.removeClass('circle_plus').addClass('circle_minus');
        } else {
            $trigger.removeClass('circle_minus').addClass('circle_plus');
        }
    });


    //Scroll
    // top of page (action)
    $('.scroller').click(function (e) {
        e.preventDefault();
        var targetScroll = $(this).attr('href');
        var documentBody = $('html, body');
        $(documentBody).stop().animate({
            scrollTop: $(targetScroll).offset().top
        }, 1000, 'easeInOutCubic');
        return false;
    });

    //Sidebar height
    function sidebarHeight() {
        var height = $('#main-content').height();
        $('#sidebar .sidebar-nav').height(height);
    }
    sidebarHeight();

    $('#main-content').resize(function () {
        sidebarHeight();
    });

});