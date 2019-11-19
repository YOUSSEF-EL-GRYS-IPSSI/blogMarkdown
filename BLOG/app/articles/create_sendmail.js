$(document).ready(function() {
  
    // will run if create product form was submitted
    $(document).on('submit','#create-mail-form', function() {
        var form_data = JSON.stringify($(this).serializeObject());
		
		 alert(form_data);
        // form data will be here
        // submit form data to api
        $.ajax({
            url: "http://localhost/BLOG/app/fonctions/sendmail.php",
            type: "POST",
            contentType: 'application/json',
            data: form_data,
            success: function(result) {
                bootbox.alert({
                        message: "mail envoyé avec succées!",
                        callback: function() {
                            console.log('This was logged in the callback!');
                        }
                    })
                    // product was created, go back to products list
                showArticles();
            },
            error: function(xhr, resp, text) {
               bootbox.alert({
                        message: "mail no envoyé !",
                        callback: function() {
                            console.log('This was logged in the callback!');
                        }
                    })
            }
        });

        return false;
    });


});