$(document).ready(function() {

    // handle 'read one' button click
    $(document).on('click', '.read-one-Articles-button', function() {
        // Articles ID will be here
        // get Articles id
        var id = $(this).attr('data-id');
        // read Articles record based on given ID
        $.getJSON("http://localhost/BLOG/app/fonctions/read_one_articles.php?id=" + id, function(data) {
            // read Articles button will be here
            // start html
            var read_one_Articles_html = `
                                    <!-- when clicked, it will show the product's list -->
                                    <div id='read-Articles' class='btn btn-primary pull-right m-b-15px read-Articles-button'>
                                        <span class='glyphicon glyphicon-list'></span> Liste des artciles
                                    </div>
                                        <!-- product data will be shown in this table -->
                                        <table class='table table-bordered table-hover'>
                                        
                                            <!-- article name -->
                                            <tr>
                                                <td class='w-30-pct'>Name</td>
                                                <td class='w-70-pct'>` + data.name + `</td>
                                            </tr>
                                        
                                          
                                            <!-- article description -->
                                            <tr>
                                                <td>Description</td>
                                                <td>` + data.description + `</td>
                                            </tr>
                                        
                                            
                                        
                                        </table>`;
            // inject html to 'page-content' of our app
            $("#page-content").html(read_one_Articles_html);

            // chage page title
            changePageTitle("Détails article");

        });
    });
});