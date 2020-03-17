jQuery(document).ready(function($) {
	$('#taxonpage_listtree').jstree({
		"core" : {
			"themes" : {
				"icons" : false,
				"dots" : false,
				// "stripes" : true,
			}
		},
		// "plugins" : ["wholerow"],
	});	
	var title_text = $('#taxon_rank').text();
	var ind = title_text.search('pecies ');
	if(ind != -1){
		var current_taxon = title_text.slice(ind+7);
		//replace spaces with _
		//replace . with empty
		// console.log(current_taxon);
		current_taxon.replace(' ', '_').replace('.', '').replace('/', '_');
		$('#taxonpage_listtree').on('ready.jstree', function(e, data){
			data.instance._open_to(current_taxon);
			data.instance.open_node(current_taxon);
		});
	} else {
		$('#taxonpage_listtree').on('ready.jstree', function(e, data){
			data.instance._open_to('Cyanobacteria/Melainabacteria group');
			data.instance._open_to('Bangiophyceae');
			data.instance._open_to('Streptophyta');
			data.instance._open_to('Fungi');
			data.instance._open_to('Oomycetes');
		});
	}
	// var current_taxon = title_text.split('pecies').pop().shift();
	// console.log(current_taxon);
});