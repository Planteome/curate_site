(function($){
	jQuery(document).ready(function(){

		$('.field-source-select').each(function(){
			var x = $(this).attr('data-key');
			if($('.field-source-select select').val() == 2345){
			   	 $('#object-field-'+x).hide();
			   	 $('#biblio-link-'+x).show();
			   }else{
			   	 $('#object-field-'+x).show();
			   	 $('#biblio-link-'+x).hide();
			   }
		});
		

		jQuery('.field-source-select select').change(function() {

		   	var k = $(this).closest('.field-source-select').attr('data-key');
			if($(this).val() == 2345){
		   	 $('#object-field-'+k).hide();
		   	 $('#biblio-link-'+k).show();
		   }else{
		   	 $('#object-field-'+k).show();
		   	 $('#biblio-link-'+k).hide();
		   }
		});
	
		    // $('#edit-type-0').click(function()
		    // {
		    //      // alert("Clicked");
		    //      $('#object-field-0').show();
		    //      $('#field-publication-add-more-wrapper').hide();
		    // });
		    // $('#edit-type-1').click(function()
		    // {
		    //      // alert("Clicked");
		    //      $('#field-publication-add-more-wrapper').show();
		    // });
	});
	
})(jQuery);

(function($, Drupal)
{
  // I want some code to run on page load, so I use Drupal.behaviors
  Drupal.behaviors.cgrb_form_alter = {
    attach:function()
    {
    	$('.operation-type-field').change(function(){
    		var id = $(this).attr('data-key');
    	 	var value =	$('#operation-type-' + id +" input:checked").val();
    	
    		if(value == 0){
    			$('#operation-target-'+ id).show();
    			$('#biblio-full_citation-'+id).show();
    			$('#biblio-link-' + id).hide();
    		}else{
    			 $('#operation-target-'+ id).hide();
    			 $('#biblio-full_citation-'+id).hide();
    			 $('#biblio-link-'+ id).show();
    		}
    	});

      // Ajaxify links
      $('a.ctools-use-modal:not(.ctools-use-modal-processed)').each(function(){
      	var $this = $(this);

      	$this.addClass('ctools-use-modal-processed')
      		.click(Drupal.CTools.Modal.clickAjaxLink);

      	var element_settings = {};
        if ($this.attr('href')) {
          element_settings.url = $this.attr('href');
          element_settings.event = 'click';
          element_settings.progress = { type: 'throbber' };
        }
        var base = $this.attr('href');
        Drupal.ajax[base] = new Drupal.ajax(base, this, element_settings);
      });
      
    }
  };
}(jQuery, Drupal));

(function($) {
	$.fn.objectIdUpdateBiblio = function(data) {
		console.log(data);
		$(data.selector).val(data.nid);
	};
})(jQuery);