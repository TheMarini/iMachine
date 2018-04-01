$(function () {
    //Nav items .click()
    $('body > .nav').on('click', '.nav-link', function () {

        //Prevent Default
        event.preventDefault();

        //Disable old active
        $('.nav-link').each(function () {
            if ($(this).hasClass('active')) {
                $(this).toggleClass('active');
            }
        });

        //Active this
        $(this).toggleClass('active');

        //AJAX
        $.ajax({
            url: $(this).attr('href'),
            type: "POST",
            dataType: 'html',
            success: function (data) {
                $('main').fadeTo('fast', 0, function () {
                    $('main > article').html(data);
                }).fadeTo('fast', 1);
            },
            error: function (event) {
                console.log(event);
            }
        })
    });

    //Auto Load Maquinas
    $("body > nav > a[href='maquinas']")[0].click();

    //Enable Tooltip
    $('[data-toggle="tooltip"]').tooltip(); //FIXME: isn't cascade load

    //Search
    $('article').on('click', '#search_btn', function () {

        //Prevent Default
        event.preventDefault();

        $status = $('#search_status').val() == 'Procurar por status' ? '' : $('#search_status').val();

        //AJAX
        $.ajax({
            url: 'search',
            type: "GET",
            dataType: 'html',
            data: ({
                ID: $('#search_id').val(),
                Nome: $('#search_nome').val(),
                Status: $status,
            }),
            success: function (data) {
                $('article table').replaceWith(data);
            },
            error: function (event) {
                console.log(event);
            }
        })
    });
});
