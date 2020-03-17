jQuery(document).ready(function($) {
	// Code that uses jQuery's $ can follow here.
	// console.log($);
	console.log('cgrb_data_import.js loaded.')
	var checkboxes = $(':checkbox').click(function(event){
   		// console.log('clicked');
        $('#edit-submit-selected').prop("disabled", checkboxes.filter(':checked').length == 0);
    });
});