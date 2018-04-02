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

        //Current tab
        $tab = $('nav .active').index();

        if ($tab == 0) {
            $status = $('#search_status').val() == 'Procurar por status' ? null : $('#search_status').val();

            $data = {
                ID: $('#search_id').val(),
                Nome: $('#search_nome').val(),
                Status: $status,
                tab: $tab,
                SQL_type: null
            };
        }
        else{
            $data = {
                ID: $('#search_id').val(),
                Nome: $('#search_nome').val(),
                tab: $tab,
                SQL_type: null
            };
        }

        //AJAX
        $.ajax({
            url: 'models/SQL_query.php',
            type: "POST",
            dataType: 'html',
            data: ($data),
            success: function (data) {
                $('article table').replaceWith(data);
            }
        })
    });

    //Modal
    $('body').on('click', '.modal .modal-footer button[type="submit"]', function () {

        //Prevent Default
        event.preventDefault();

        //Get Modal
        $modal = $(this).parent().parent().parent().parent();

        //Nome field
        $nome = $('#' + $modal.attr('id') + ' .modal-body input[type="text"]').val();

        //ID field
        $id = $('#' + $modal.attr('id') + ' .modal-body input[type="number"]').val();

        //Current tab
        $tab = $('nav .active').index();

        //AJAX
        $.ajax({
            url: 'models/SQL_query.php',
            type: "POST",
            dataType: 'html',
            data: ({
                ID: $id,
                Nome: $nome,
                SQL_type: $modal.attr('id'),
                tab: $tab
            }),
            success: function (data) {
                $('article table').replaceWith(data);
            }
        })

        //Close Modal
        $($modal).modal('hide');

        //Show Success
        $('#successAlert').toggleClass('show'); //FIXME: works x1 only
    });

    //Auto Load Maquinas
    $("body > nav > a[href='maquinas']")[0].click();


    //Enable Tooltip
    $('.controls').ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
});
