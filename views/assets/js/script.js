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


    //Search
    $('article').on('click', '#search_btn', function () {

        //Prevent Default
        event.preventDefault();

        $tab = $('nav .active').index();

        if ($tab == 0) {
            $status = $('#search_status').val() == 'Procurar por status' ? null : $('#search_status').val();

            $data = {
                ID: $('#search_id').val(),
                Nome: $('#search_nome').val(),
                Status: $status,
                tab: $tab
            };
        }
        else{
            $data = {
                ID: $('#search_id').val(),
                Nome: $('#search_nome').val(),
                tab: $tab
            };
        }

        //AJAX
        $.ajax({
            url: 'models/search.php',
            type: "GET",
            dataType: 'html',
            data: ($data),
            success: function (data) {
                $('article table').replaceWith(data);
            },
            error: function (event) {
                console.log(event);
            }
        })
    });


    //Mdal
    $('body').on('click', '.modal .modal-footer button[type="submit"]', function () {

        //Prevent Default
        event.preventDefault();

        $modal = $(this).parent().parent().parent().parent();
        $nome = $('#' + $modal.attr('id') + ' .modal-body input[name="nome"]').val();

        //AJAX
        $.ajax({
            url: 'models/SQL_query.php',
            type: "POST",
            dataType: 'html',
            data: ({
                Nome: $nome
            }),
            success: function (data) {
                $('article table').replaceWith(data);
            },
            error: function (event) {
                console.log(event);
            }
        })

        //Close Modal
        $($modal).modal('hide');
    });

    //Auto Load Maquinas
    $("body > nav > a[href='maquinas']")[0].click();


    //Enable Tooltip
    $('.controls').ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
});
