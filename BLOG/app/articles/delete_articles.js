$(document).ready(function() {

    // will run if the delete button was clicked
    $(document).on('click', '.delete-product-button', function() {
        // get the product id
        var product_id = $(this).attr('data-id');
        // bootbox for good looking 'confirm pop up'
        bootbox.confirm({

            message: "<h4> Êtes-vous sûr , de vouloir supprimer cet article ?</h4>",
            buttons: {
                confirm: {
                    label: '<span class="glyphicon glyphicon-ok"></span> Oui',
                    className: 'btn-danger'
                },
                cancel: {
                    label: '<span class="glyphicon glyphicon-remove"></span> Non',
                    className: 'btn-primary'
                }
            },
            callback: function(result) {
                if (result == true) {

                    // send delete request to api / remote server
                    $.ajax({
                        url: "http://localhost/BLOG/app/fonctions/delete_articles.php",
                        type: "POST",
                        dataType: 'json',
                        data: JSON.stringify({ id: product_id }),
                        success: function(result) {

                            var notify = $.notify('Suppression résussie...', {
                                allow_dismiss: false,
                                showProgressbar: true
                            });

                            setTimeout(function() {
                                notify.update({ 'postion': 'center', 'type': 'info', 'message': '<strong>Success</strong> Your page has been saved!', 'progress': 100 });
                            }, 4500);
                                showArticles();
                        },
                        error: function(xhr, resp, text) {
                            console.log(xhr, resp, text);
                        }
                    });

                }
            }
        });

    });
});