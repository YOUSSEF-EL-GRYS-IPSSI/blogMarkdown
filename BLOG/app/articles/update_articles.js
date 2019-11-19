$(document).ready(function() {

    // show html form when 'update Articles' button was clicked
    $(document).on('click', '.update-Articles-button', function() {
        // get Articles id
        var id = $(this).attr('data-id');
        // read one record based on given Articles id
        $.getJSON("http://localhost/BLOG/app/fonctions/read_one_articles.php?id=" + id, function(data) {

            // values will be used to fill out our form
            var name = data.name;
            var description = data.description;
         
                // store 'update Articles' html to this variable
                var update_Articles_html = `
                                                <div id='read-Articles' class='btn btn-primary pull-right m-b-15px read-Articles-button'>
                                                    <span class='glyphicon glyphicon-list'></span>Lite des articles
                                                </div>
                                                <!-- build 'update Articles' html form -->
                                                <!-- we used the 'required' html5 property to prevent empty fields -->
                                                <form id='update-Articles-form' action='#' method='post' border='0'>
                                                    <table class='table table-hover  table-bordered'>
                                                
                                                        <!-- name field -->
                                                        <tr>
                                                            <td>Name</td>
                                                            <td><input value=\"` + name + `\" type='text' name='name' class='form-control' required /></td>
                                                        </tr>
                                                
                                                        
                                                
                                                        <!-- description field -->
                                                        <tr>
                                                            <td>Description</td>
                                                            <td><textarea name='description' class='form-control' required>` + description + `</textarea></td>
                                                        </tr>
                                                
                                                        
                                                
                                                        <tr>
                                                
                                                            <!-- hidden 'Articles id' to identify which record to delete -->
                                                            <td><input value=\"` + id + `\" name='id' type='hidden' /></td>
                                                
                                                            <!-- button to submit form -->
                                                            <td>
                                                                <button type='submit' class='btn btn-info'>
                                                                    <span class='glyphicon glyphicon-edit'></span> Modifier
                                                                </button>
                                                            </td>
                                                
                                                        </tr>
                                                
                                                    </table>
                                                </form>`;
                // inject to 'page-content' of our app
                $("#page-content").html(update_Articles_html);

                // chage page title
                changePageTitle("Modification article");
        });
    });

    $(document).on('submit', '#update-Articles-form', function() {

        // get form data
        var form_data = JSON.stringify($(this).serializeObject());
        // submit form data to api
        $.ajax({
            url: "http://localhost/BLOG/app/fonctions/update_articles.php",
            type: "POST",
            contentType: 'application/json',
            data: form_data,
            success: function(result) {
                // Articles was created, go back to products list
				var notify = $.notify('Modification réussie résussie...', {
                                allow_dismiss: false,
                                showProgressbar: true
                            });

                            setTimeout(function() {
                                notify.update({ 'postion': 'center', 'type': 'info', 'message': '<strong>Success</strong> Your page has been saved!', 'progress': 100 });
                            }, 4500);
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