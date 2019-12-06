var page = 2;
jQuery(function ($) {
    $(document).ready();
    // loadmore
    $('.cv-spinner').hide();
    $('.load-more').on('click', function () {
        var data = {
            'action': 'load_posts_by_ajax',
            'page': page,
            'security': sort_isotope.security
        };
        $.ajax({
            type: 'POST',
            url: '/wp-admin/admin-ajax.php',
            data: data,
            beforeSend: function () {
                $('.load-more').hide();
                $('.cv-spinner').show();
            },
            complete: function () {
                $('.load-more').show();
                $('.cv-spinner').hide();
            },
            success: function (response) {
                var $item = $(response);
                if ($item.length != 0) {
                    $('.grid').append($item).isotope('appended', $item);
                    var $total_pages = $('#total_items').text();
                    $('#number_of_item').text(page);
                    if(page == $total_pages){
                        $('.load-more').remove();
                    }
                    page++;
                } else {
                    $('.load-more').remove();
                }
            }
        });
    });
});

