jQuery(document).ready(function($) {
	$('#frontpage_listtree ul li').on('click',function(e){
		e.stopPropagation();
		$(this).children('ul').slideToggle('slow');
		$(this).find('.hide-rank').css( "display", "block" );
		// $(this).find('.hide-rank').siblings().removeClass('.hide-rank');
	});
	// var values  = $("[attribute=title]")
	var title1 = $(this).attr('title');
	console.log(title1);
 //$("#frontpage_listtree ul li" ).wrap('<a href="content/'+title1+'"></a>');

	$('#frontpage_listtree ul li a').on('click',function(e){
		e.stopPropagation();		
	});

	$("[data-rank-index-init]").each(function(){
		if($(this).data("rankIndexInit") != 0){
			var padding = 20*($(this).data("rankIndexInit"));
		    var bgc;
		    switch($(this).data("rankIndexInit") % 8){
		    	case 1:
		        	bgc = '#c78a0e';
		            break;
		        case 2:
		            bgc = '#facb6d';
		            break;
		        case 3:
		            bgc = '#fbd994';
		            break;
		        case 4:
		            bgc = '#f8b631';
	 	            break;
		        case 5:
		            bgc = '#facb6d';
		            break;
		        case 6:
		            bgc = '#fbd994';
		            break;
		        case 7:
		            bgc = '#fde7bc';
		            break;
		        case 0:
		            bgc = '#feefd1';
		            break;
		    }
		    if($(this).data("rankIndexInit") > 8){
		    	if(($(this).data("rankIndexInit") % 2) == 0){
		    		bgc = '#feefd1';
		    	} else {
		    		bgc = '#fde7bc';
		    	}
		    }
			$(this).css('padding-left', padding);
			$(this).css('background-color', bgc);
		} else {
			// $(this).css('background-color', 'red');
			$(this).css('height', 0);
			$(this).css('width', 0);
			$(this).css('padding', 0);
			$(this).css('margin', 0);
		}
	});


	//frontpage
	// $('#frontpage_listtree').jstree({
	// 	"core" : {
	// 		"themes" : {
	// 			"icons" : false,
	// 			"dots" : false,
	// 			// "stripes" : true,
	// 		}
	// 	},
	// 	// "plugins" : ["wholerow"],
	// });
	// $('#frontpage_listtree').on('ready.jstree', function(e, data){
	// 	//shows all nodes
	// 	// $('#frontpage_listtree').jstree('open_all');
	// 	// data.instance.hide_dots();
	// 	data.instance._open_to('Eukaryota');
	// 	data.instance._open_to('Rhodophyta');
	// 	data.instance._open_to('Viridiplantae');
	// 	data.instance._open_to('Opisthokonta');
	// 	data.instance._open_to('Stamenopiles');
	// 	// data.instance._open_to('Cyanobacteria/Melainabacteria group');
	// 	// data.instance._open_to('Bangiophyceae');
	// 	// data.instance._open_to('Streptophyta');
	// 	// data.instance._open_to('Fungi');
	// 	// data.instance._open_to('Oomycetes');
	// 	// console.log(e);
	// 	// console.log(data.instance.get_container().find('li'));
	// 	// var depth = 3;
	// 	// data.instance.get_container().find('li').each(function(i){
	// 	// 	// console.log(i);
	// 	// 	// console.log($(this));
	// 	// 	if(data.instance.get_path($(this)).length <= depth){
	// 	// 		data.instance.open_node($(this));
	// 	// 	}
	// 	// });
	// 	// var $tree = $(this);
	// 	// $($tree.jstree(true).get_json($tree, {
	// 	// 	flat: true
	// 	// }))
	// 	// .each(function(index, value) {
	// 	// 	// console.log(index);
	// 	// 	// console.log(value);
	//  //    	var node = data.instance.get_node(value.id);
	//  //    	console.log('mod level is '+(node.parents.length % 8))
	//  //    	switch(node.parents.length % 8) {
	//  //    		case 1:
	//  //    			// console.log('ahoy');
	//  //    			// var str = "#"+value.id;
	//  //    			// console.log(str);
	//  //    			// var tmp = $(str);
	//  //    			// console.log(tmp);
	//  //    			$("#"+node.id).css('background-color', '#c78a0e');
	//  //    			console.log('set background-color to #c78a0e');
	// 	//     		break;
	// 	//     	case 2:
	//  //    			$("#"+node.id).css('background-color', '#facb6d');
	// 	//     		break;
	// 	//     	case 3:
	//  //    			$("#"+node.id).css('background-color', '#fbd994');
	// 	//     		break;
	// 	//     	case 4:
	// 	//     		$("#"+node.id).css('background-color', '#f8b631');
	// 	//     		break;
	// 	//     	case 5:
	// 	//     		$("#"+node.id).css('background-color', '#facb6d');
	// 	//     		break;
	// 	//     	case 6:
	// 	//     		$("#"+node.id).css('background-color', '#fbd994');
	// 	//     		break;
	// 	//     	case 7:
	// 	//     		$("#"+node.id).css('background-color', '#fde7bc');
	// 	//     		break;
	// 	//     	case 0:
	// 	//     		$("#"+node.id).css('background-color', '#feefd1');
	// 	//     		break;
	//  //    	}
	//  //    	console.log(node);
	//  //    	var lvl = node.parents.length;
	//  //    	var idx = index;
	//  //    	console.log('node index = ' + idx + ' level = ' + lvl);
	//  //    });
	// });

	//taxonpage
	// $('#taxonpage_listtree').jstree()
	// var $('#taxon_rank')
});

// (function ($) {

//   $('#frontpage_listtree').jstree();

// }(jQuery));