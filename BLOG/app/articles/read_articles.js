$(document).ready(function() {

    // afficher la liste des articles au premier chargement
    showArticles();
});

$(document).on('click', '.read-Articles-button', function() {
    showArticles();
});

// function to show list of Articles
function showArticles() {
    // html for listing Articles
    var read_Articles_html = `
	<div class="container">
                        <!-- when clicked, it will load the create product form -->
						<div class="col-lg-10">
                        </div>
                        <div class="col-lg-2"><div id='create-product' class='btn btn-primary pull-right m-b-15px create-product-button'>
                            <span class='glyphicon glyphicon-plus'></span> Ajouter des articles
                        </div>
                        </div>
						
                        <!-- start table -->
                       `;


    // get list of Articles from the API
    $.getJSON("http://localhost/BLOG/app/fonctions/read_articles.php", function(data) {
        // loop through returned list of data

        $.each(data.records, function(key, val) {
            // creating new table row per record
            read_Articles_html += `
        <!-- start article -->
		
		<div class="card w-100">
			  <div class="card-body">
				<h5 class="card-title">` + val.name + ` </h5>
				<p class="card-text">` + val.description + `</p>
				
				<button class='btn btn-primary m-r-10px read-one-Articles-button' data-id='`+ val.id + `'>
								<span class='fa fa-eye'></span> Lire
							</button>
			 
							<!-- edit button -->
							<button class='btn btn-info m-r-10px update-Articles-button' data-id='` + val.id + `'>
								<span class='fa fa-edit'></span> Modifier
							</button>
			 
							<!-- delete button -->
							<button class='btn btn-danger delete-product-button' data-id='` + val.id + `'>
								<span class='fa fa-times'></span> Supprimer
							</button>
				
			  </div>
			</div>
			<div style="height:20px">
                        </div>`;

        });
        // rows will be here
        // end table
        read_Articles_html += `</div>`;

        // inject to 'page-content' of our app
        $("#page-content").html(read_Articles_html);

        // chage page title
        changePageTitle("Blog");



    });

}