$(document).ready(function() {
    $('#log').submit(function(e){
            e.preventDefault();
                var user,pass,b_val;
                $('#login').click(function() {
                        user = $('#user').val();
                        pass = $('#pass').val();
                        $.ajax({
                                type : "POST",
                                url : "operation.php",
                                data : {user : user,pass : pass,b_val : 'login'},
                                success : function(html) {                                    
                                    console.log(html);
                                     if(html == 1){
                                          window.location.assign("home.php")
                                     }
                                    else{ 
                                        $('#error').html('<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Warning!</strong> No Combination found for the UserId and Password entered !.</div>');
                                    }
                                }
                        });
                });
});
    $('#reg').submit(function(e){
                alert("alert");
                e.preventDefault();
                var formData = $(this).serialize();
                console.log(formData);
         $('#reg').click(function() {
                        $.ajax({
                                type : "POST",
                                url : "operation.php",
                                data : formData,
                                success : function(html) {                                    
                                    console.log(html);
                                     if(html == 1){
                                          window.location.assign("home.php")
                                     }
                                    else{ 
                                        $('#error').html('<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Warning!</strong> No Combination found for the UserId and Password entered !.</div>');
                                    }
                                }
                        });
                });
    });

});
