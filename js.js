$(document).ready(function () {


// Database created message
    $('#installing').delay(2000).hide(500);
    $('#db_created').delay(2000).show(500);


// Hide logout message
    $('#logout_success').delay(3000).hide(500);
    
    
// Hide comment message
    $('#comment_success').delay(4000).hide(800);
    
    
// Show Add Comment box
    $('#add_comment_btn').click(function () {
        $('#add_comment').removeClass('hidden');
    });
    

// Hide Add Comment box
    $('#cancel').click(function() {
	   $('#add_comment').addClass('hidden');
    });


});