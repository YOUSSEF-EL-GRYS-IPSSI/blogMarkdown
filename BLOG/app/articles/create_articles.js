$(document).ready(function() {
    // show html form when 'create product' button was clicked
    $(document).on('click', '.create-product-button', function() {


        // categories api call will be here
        // we have our html form here where product information will be entered
        // we used the 'required' html5 property to prevent empty fields

        

            // we have our html form here where product information will be entered
            // we used the 'required' html5 property to prevent empty fields
            var create_product_html = `
                    <!-- 'read products' button to show list of products -->
                    <div id='read-products' class='btn btn-primary pull-right m-b-15px read-products-button'>
                        <span class='glyphicon glyphicon-list'></span> Liste des articles
                    </div>
                    <!-- 'create product' html form -->
                    <form id='create-product-form' action='#' method='post' border='0' width="100%">
                        <table class='table table-hover  table-bordered'>
                    
                            <!-- name field -->
                            <tr>
                                <td>Name</td>
                                <td><input type='text' name='name' class='form-control' required /></td>
                            </tr>
                    
                            
                    
                            <!-- description field -->
                            <tr>
                                <td>Description</td>
                                <td><textarea name='description' class='form-control' required></textarea></td>
                            </tr>
                    
                          
                    
                            <!-- button to submit form -->
                            <tr>
                                <td></td>
                                <td>
                                    <button type='submit' class='btn btn-primary'>
                                        <span class='glyphicon glyphicon-plus'></span>  Créer
                                    </button>
                                </td>
                            </tr>
                    
                        </table>
                    </form>`;

            // 'create product form' handle will be here
            // inject html to 'page-content' of our app
            $("#page-content").html(create_product_html);

            // chage page title
            changePageTitle("Ajout d'un article");

  




    });

    // will run if create product form was submitted
    $(document).on('submit', '#create-product-form', function() {
        var form_data = JSON.stringify($(this).serializeObject());
        // form data will be here
        // submit form data to api
        $.ajax({
            url: "http://localhost/BLOG/app/fonctions/create_articles.php",
            type: "POST",
            contentType: 'application/json',
            data: form_data,
            success: function(result) {
                bootbox.alert({
                        message: "Article ajoutée avec succées!",
                        callback: function() {
                            console.log('This was logged in the callback!');
                        }
                    })
                    // product was created, go back to products list
                showArticles();
            },
            error: function(xhr, resp, text) {
                // show error to console
                console.log(xhr, resp, text);
            }
        });

        return false;
    });


});