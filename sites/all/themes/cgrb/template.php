<?php
// function map_1($obj){
// 	return node_load($obj->nid)/*->title*/;
// }
// function map_2($obj){
// 	return node_load($obj->nid)->field_ref_species;
// }

/*function curl_get_contents($url){
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);

    $data = curl_exec($ch);
    curl_close($ch);

    return $data;
}


function get_ontology_term_from_id($id_string) {
	$html_json = htmlspecialchars(curl_get_contents("http://browser.planteome.org/api/autocomplete/ontology?q=".url_encode_2($id_string)));
	$tmp = html_entity_decode($html_json);
	$json_obj = json_decode($tmp);
	$output = $id_string;
	if(count($json_obj->data)){
		foreach($json_obj->data as $data){
			if($data->id == $id_string){
				$output = $data->annotation_class_label;
			}
		}
	}
	return $output;
}

function get_ontology_id_from_term($term_string) {
	$html_json = htmlspecialchars(curl_get_contents("http://browser.planteome.org/api/autocomplete/ontology?q=".url_encode_2($term_string)));
	$tmp = html_entity_decode($html_json);
	$json_obj = json_decode($tmp);
	$output = $term_string;
	if(count($json_obj->data)){
		foreach($json_obj->data as $data){
			if($data->annotation_class_label == $term_string){
				$output = $data->id;
			}
		}
	}
	return $output;
}*/

// function YOUR_THEME_preprocess_page(&$variables, $hook) {
//   if (isset($variables['node'])) {
//     $variables['theme_hook_suggestions'][] = 'page__node_' . $variables['node']->type;	
//   }
// }

// function build_tree($target_id, $remaining_taxons){
// 	$return = '';
// 	foreach ($remaining_taxons as $index => $taxon){
// 		//var_dump($taxon->field_taxon_ncbi_id[$taxon->language][0]['value']);exit;
// 		if($taxon->field_taxon_ncbi_id[$taxon->language][0]['value'] == $target_id){
// 			if($target_id == 1){
// 				$return.='<ul>';
// 			}
// 			// TODO - the below currently slows down the front page load a lot, find a better way to do this
// 			$count = '';
// 			$gene_count = return_taxon_gene_count($taxon);
// 			if($gene_count){
// 				$count = ' - <span>'.$gene_count.'</span> genes';
// 			}
			
// 			$return.= '<li><a href="/osu-cgrb/website/node/'.$taxon->nid.'">'.$taxon->title.$count.'</a>';
// 			foreach($remaining_taxons as $index2 => $taxon2){
// 				// echo '<pre>'; var_dump($taxon2);exit;
// 				if(count($taxon2->field_taxon_parent)){
// 					if($taxon2->field_taxon_parent[$taxon->language][0]['target_id'] == $taxon->nid){
// 						//var_dump($taxon2);exit;
// 						$return.= '<ul>'.build_tree($taxon2->field_taxon_ncbi_id[$taxon->language][0]['value'],$remaining_taxons).'</ul>';
// 					}
// 				}
// 			}
// 			$return .= "</li>";
// 			if($target_id == 1){
// 				$return.='</ul>';
// 			}
// 			return $return;
// 		}
// 	}
// }

/*function build_tree_2($target_id, $remaining_taxons){
	foreach ($remaining_taxons as $index => $taxon){
		if($taxon->field_taxon_ncbi_id[$taxon->language][0]['value'] == $target_id){
			//need to wrap output
		}
	}
}*/

// function print_taxon_html_tree_string(){
// 	$cached_tree = cache_get('taxon_tree_cgrb','cache');
// 	//THIS NEEDS TO BE REMOVED
// 	// $cached_tree = false;
// 	if($cached_tree){
// 		print($cached_tree->data);
// 	}else{
// 		$query = new EntityFieldQuery();
// 		$query->entityCondition('entity_type', 'node')
// 			->entityCondition('bundle','taxon')
// 			->propertyCondition('type',array('taxon'));
// 		$results = $query->execute();
// 		if($results['node']){
// 			// echo '<pre>';var_dump($results['node']);
// 			$results2 = array_map("map_1", $results['node']);
// 			// echo '<br><br><h2>Results 2</h2><pre>';var_dump($results2);
// 			//$taxon no longer seems needed - verify this
// 			$taxon_tree = return_taxon_gene_count();
// 			// $tree = taxon_build_tree($taxon_tree);
// 			cache_set('taxon_tree_cgrb',$taxon_tree,'cache',CACHE_TEMPORARY);
// 			print($taxon_tree);
// 		}
// 	}
	
// }

// function taxon_build_tree($taxon_tree){
// 	foreach($taxon_tree as $value){
// 		if(empty($value['parent'])){
// 			$output = "<ul>";
// 		}

// 		$count = ' - <span>'.$value['gene_count'].'</span> genes';
// 		$output .= '<li><a href="/osu-cgrb/website/node/'.$value['nid'].'">'.$value['title'].$count.'</a>';
// 		if(!empty($value['parent'])){
// 			$output .= '<ul>'.taxon_build_tree($value['childnodes']).'</ul>';
// 		}

// 		if(empty($value['parent'])){
// 			$output .= "</ul>";
// 		}
// 	}

// 	return $output;
// }

// function print_ten_most_recent_genes(){

// 	$query = db_select('node', 'n');
// 	$query->join('field_data_field_gene', 'g', 'n.nid = g.entity_id');
// 	$query->join('field_data_field_date', 'd', 'n.nid = d.entity_id');
// 	$query->join('node', 'sn', 'sn.nid = g.field_gene_target_id');
// 	//$query->AddExpression('distinct sn.nid', 'nid');
// 	$result = $query
// 	  ->fields('sn', array('nid', 'title'))
// 	  ->distinct()
// 	  ->condition('n.type', 'annotation')
// 	  ->condition('n.status', '1')
// 	  ->orderBy('d.field_date_value', 'DESC')
// 	  ->range(0,10)
// 	  ->execute();

// 	$results = $result->fetchAll();
	
// 	$html = '<h3>10 most recently annotated genes:</h3><ul>';
// 	foreach ($results as $value){
// 		$html.= '<li><a href="'.base_path().'node/'.$value->nid.'">'.$value->title.'</a></li>';
// 	}
// 	$html.= '</ul>';
// 	print($html);
// }

// function print_taxon_parent_and_child($node){
// 	$query = new EntityFieldQuery();
// 	$query->entityCondition('entity_type', 'node')
// 		->entityCondition('bundle','taxon')
// 		->propertyCondition('type',array('taxon'))
// 		->fieldCondition('field_taxon_parent', 'target_id', $node->nid);
// 	$results = $query->execute();
// 	// $parent = node_load($node->field_taxon_parent[$node->language][0]['target_id']);
// 	// $tmp = '<p>None</p>';
// 	// $out = '<h4>Parent:</h4>';
// 	// if($parent != NULL){
// 	// 	$tmp ='<ul><li><a href="/osu-cgrb/website/node/'.$parent->nid.'">'.$parent->title.'</a></li></ul>';
// 	// }
// 	// $out.= $tmp;
// 	$out = '<h4>Children:</h4>';
// 	$tmp = '<p>None</p>';
// 	if($results['node']){
// 		$tmp = '';
// 		$out.= '<ul>';
// 		foreach ($results['node'] as $child){
// 			$child_node = node_load($child->nid);
// 			$out.= '<li><a href="/osu-cgrb/website/node/'.$child_node->nid.'">'.$child_node->title.'</a></li>';
// 		}
// 		$out.= $tmp.'</ul>';
// 	}

// 	print $out;
	


// 	//echo '<pre>'; var_dump($parent);exit;
// }

// function return_taxon_gene_count(){
// 	//$query = new EntityFieldQuery();
// 	// $query->entityCondition('entity_type', 'node')
// 	// 	->entityCondition('bundle','gene')
// 	// 	->propertyCondition('type',array('gene'))
// 	// 	->fieldCondition('field_ref_species', 'target_id', $node->nid);
// 	// // $results = $query->execute();
// 	// $results = $query->count()->execute();
// 	$query = db_select('node','n');
// 	$query->leftjoin("field_data_field_gene_count","gc","gc.entity_id = n.nid");
// 	$query->leftjoin("field_data_field_taxon_parent","tp","tp.entity_id = n.nid");
// 	$query->leftjoin("field_data_field_taxon_rank","tr","tr.entity_id = n.nid");
// 	$all_taxons= $query->fields('n',array('nid','title'))
// 					->fields('gc',array('field_gene_count_value'))
// 					->fields('tp',array('field_taxon_parent_target_id'))
// 					->fields('tr',array('field_taxon_rank_tid'))
//                    ->condition('n.type',"taxon",'=')
//                    ->condition('n.status',1,'=')
//                    ->execute()
//                    ->fetchAll(); 
    
//     $taxon_list = array();
//     foreach($all_taxons as $value){
//     	/*if($value->nid != '363'){
//     		echo'<pre>';var_dump(node_load($value->nid));exit;
//     	}*/
//     	$taxon_list[$value->nid]['nid'] = $value->nid;
//     	$taxon_list[$value->nid]['title'] = $value->title;
//     	$taxon_list[$value->nid]['gene_count'] = $value->field_gene_count_value;
//     	$taxon_list[$value->nid]['parent'] = $value->field_taxon_parent_target_id;
//     	$taxon_list[$value->nid]['rank'] = $value->field_taxon_rank_tid;
//     }

//     $taxon_tree = array();

//     foreach ($taxon_list as $key => $value) {
//     	if(!empty($value['parent'])){
//     		if(isset($taxon_tree[$value['parent']])){
//     			$taxon_tree[$value['parent']]['children'][] = $value;
//     			unset($taxon_list[$key]);
//     		}
//     	}else{

//     	}
//     }

//     $taxon_tree = convertToTree($taxon_list,'nid','parent','childnodes');
//     $return_tree = return_html_array_tree_titles($taxon_tree, 0, 1, 1);
//     // echo "<pre>"; var_dump($return_tree);exit;
//     return $return_tree['out_str'];
//     echo "<pre>"; print_r($taxon_list); exit;
// 	$q = new EntityFieldQuery();
// 	$q->entityCondition('entity_type', 'node')
// 		->entityCondition('bundle','taxon')
// 		->propertyCondition('type',array('taxon'))
// 		->fieldCondition('field_taxon_parent', 'target_id', $node->nid);
// 	$r = $q->execute();
// 	//echo '<pre>';var_dump($r);exit;
// 	// if(!array_key_exists('node', $r)){
// 	// 	echo '<pre>';var_dump($r);
// 	// }
// 	if(count($r) && $r['node']){
// 		$ret_count = 0;
// 		foreach($r['node'] as $child_taxon){
// 			$ret_count+= return_taxon_gene_count($child_taxon);
// 		}
// 		// return count($results['node'])+$ret_count;
// 		return $results+$ret_count;
// 	} else {
// 		// return count($results['node']);
// 		return $results;
// 	}
// }

// function return_html_array_tree_titles($array, $count, $rank_index_init, $rank_index_full){
//     // echo "<pre>"; var_dump($array);exit;
//     $out_str = '<ul>';
//     $parent_count = 0;
//     $rank_to_hide = array(11,9,7,6,13,15,14,20,17,16); //can add 5 to remove "no rank" taxons, but this cuts off the entire arabidopsis branch. Needs another look.
//     foreach($array as $k => $v) {
//     	// echo "<pre>"; var_dump($v['title']);var_dump($rank_index_init);
//     	// if($v['rank'] == 4 && $v['title'] == 'Eukaryota'){
//     	// 	exit;
//     	// }
//         if(is_array($v['childnodes']) && count($v['childnodes'])) {
//         	// if($v['title'] == 'Streptophyta'){
//         	// 	echo'<pre>';var_dump($rank_index_init);exit;
//         	// }
//         	if(!in_array($v['rank'], $rank_to_hide)){
//         		$tmp = return_html_array_tree_titles($v['childnodes'], 0, $rank_index_init+1, $rank_index_full+1);
//         	} else {
//         		// exit($v['title']);
//         		$tmp = return_html_array_tree_titles($v['childnodes'], 0, $rank_index_init, $rank_index_full+1);
//         	}
//         	// if($v['title'] == 'Viridiplantae'){
//         	// 	echo'<pre>';var_dump($rank_index_init);exit;
//         	// }
        	
//         	$cnt = $tmp['count']+(int)$v['gene_count'];
//         	$parent_count+= $cnt;
//         	if(in_array($v['rank'], $rank_to_hide)){
//         		$class = '';
//         		// $class = 'class="hide-rank"';
//         		// $rank_index_init = 0;
//         		$out_str.= '<li '.$class.' id="'.str_replace('/', '_', str_replace('.', '', str_replace(' ', '_', $v['title']))).'"><div data-rank-index-init="'.'0'.'" data-rank-index-full="'.$rank_index_full.'"><a href="'.base_path().'node/'.$v['nid'].'">'.$v['title'].' - '.$cnt.'</a></div>'.$tmp['out_str'].'</li>';
//         	}else{
//         		$class = '';
//         		$out_str.= '<li '.$class.' id="'.str_replace('/', '_', str_replace('.', '', str_replace(' ', '_', $v['title']))).'"><div data-rank-index-init="'.$rank_index_init.'" data-rank-index-full="'.$rank_index_full.'"><a href="'.base_path().'node/'.$v['nid'].'">'.$v['title'].' - '.$cnt.'</a></div>'.$tmp['out_str'].'</li>';
//         	}
//             // $out_str.= '<li '.$class.' id="'.str_replace('/', '_', str_replace('.', '', str_replace(' ', '_', $v['title']))).'"><div data-rank-index-init="'.$rank_index_init.'" data-rank-index-full="'.$rank_index_full.'"><a href="'.base_path().'node/'.$v['nid'].'">'.$v['title'].' - '.$cnt.'</a></div>'.$tmp['out_str'].'</li>';
//             // if($v['title'] == 'Oryza sativa'){
// 		    	// echo "<pre>";var_dump($cnt);var_dump($out_str);exit;
// 		    // }
//             // printArrayList($v);
//             // continue;
//         } else {
//         	if(in_array($v['rank'], $rank_to_hide)){
//         		$class = '';
//         		// $class = 'class="hide-rank"';
//         		// $rank_index_init = 0;
//         	}else{
//         		$class = '';
//         		$rank_index_init = $rank_index_init+1;
//         	}
//         	$out_str.= '<li '.$class.' id="'.str_replace('/', '_', str_replace('.', '', str_replace(' ', '_', $v['title']))).'"><div data-rank-index-init="'.$rank_index_init.'" data-rank-index-full="'.$rank_index_full.'"><a href="'.base_path().'node/'.$v['nid'].'">'.$v['title'].' - '.$v['gene_count'].'</a></div></li>';
//         	$cnt = (int)$v['gene_count'];
//         	$parent_count+= $cnt;
//          	// echo "<pre>";var_dump($out_str);exit;
//         }
//         // echo "<li>" . $v . "</li>";
//     }
//     $out_str.= '</ul>';
//     return ['out_str' => $out_str, 'count' => $parent_count];
// }

/*function return_html_array_tree_titles($array, $count, $rank_index_init, $rank_index_full){
    // echo "<pre>"; var_dump($array);exit;
    $out_str = '<ul>';
    $parent_count = 0;
    $rank_to_hide = array(11,9,7,6,13,15,14,20,17,16);
    foreach($array as $k => $v) {
    	 //echo "<pre>"; print_r($v); exit;
        if(is_array($v['childnodes']) && count($v['childnodes'])) {
        	if(!in_array($v['rank'], $rank_to_hide)){
        		$rank_index_init = $rank_index_init+1;
        	} else {
        		// exit($v['title']);
        	}
        	$tmp = return_html_array_tree_titles($v['childnodes'], 0, $rank_index_init, $rank_index_full+1);
        	$cnt = $tmp['count']+(int)$v['gene_count'];
        	$parent_count+= $cnt;
        	if(in_array($v['rank'], $rank_to_hide)){
        		$class = '';
        		// $class = 'class="hide-rank"';
        		$rank_index_init = 0;
        	}else{
        		$class = '';
        	}
            $out_str.= '<li '.$class.' id="'.str_replace('/', '_', str_replace('.', '', str_replace(' ', '_', $v['title']))).'"><div data-rank-index-init="'.$rank_index_init.'" data-rank-index-full="'.$rank_index_full.'"><a href="'.base_path().'node/'.$v['nid'].'">'.$v['title'].' - '.$cnt.'</a></div>'.$tmp['out_str'].'</li>';
            // if($v['title'] == 'Oryza sativa'){
		    	// echo "<pre>";var_dump($cnt);var_dump($out_str);exit;
		    // }
            // printArrayList($v);
            // continue;
        } else {
        	if(in_array($v['rank'], $rank_to_hide)){
        		$class = '';
        		// $class = 'class="hide-rank"';
        		// $rank_index_init = 0;
        	}else{
        		$class = '';
        		$rank_index_init = $rank_index_init+1;
        	}
        	$out_str.= '<li '.$class.' id="'.str_replace('/', '_', str_replace('.', '', str_replace(' ', '_', $v['title']))).'"><div data-rank-index-init="'.$rank_index_init.'" data-rank-index-full="'.$rank_index_full.'"><a href="'.base_path().'node/'.$v['nid'].'">'.$v['title'].' - '.$v['gene_count'].'</a></div></li>';
        	$cnt = (int)$v['gene_count'];
        	$parent_count+= $cnt;
         	// echo "<pre>";var_dump($out_str);exit;
        }
        // echo "<li>" . $v . "</li>";
    }
    $out_str.= '</ul>';
    return ['out_str' => $out_str, 'count' => $parent_count];
}*/

// function convertToTree(array $flat, $idField = 'id',
//                         $parentIdField = 'parentId',
//                         $childNodesField = 'childNodes') {
//     $indexed = array();
//     // first pass - get the array indexed by the primary id  
//     foreach ($flat as $row) {
//         $indexed[$row[$idField]] = $row;
//         $indexed[$row[$idField]][$childNodesField] = array();
//     }

//     //second pass  
//     $root = null;
//     foreach ($indexed as $id => $row) {
//         $indexed[$row[$parentIdField]][$childNodesField][$id] =& $indexed[$id];
//         if (!$row[$parentIdField]) {
//             $root = $id;
//         }
//     }

//     return array($root => $indexed[$root]);
// }

// function return_ontology_summary($node){
// 	$query = new EntityFieldQuery();
// 	$query->entityCondition('entity_type', 'node')
// 		->entityCondition('bundle','annotation')
// 		->fieldCondition('field_gene','target_id',$node->nid,'=');
// 	$results = $query->execute();
// 	$aspects = array();
// 	$out = '';
// 	if(count($results['node'])){
// 		foreach($results['node'] as $ann){
// 			$annotation = node_load($ann->nid);
// 			$aspect = taxonomy_term_load($annotation->field_aspect[$annotation->language][0]['tid']);
// 			$aspects[$aspect->name][] = get_ontology_term_from_id($annotation->field_ontology_id[$annotation->language][0]['value']);
// 			/*if(array_key_exists($aspect->name, $aspects)){
// 				$aspects[$aspect->name][] = get_ontology_term_from_id($annotation->field_ontology_id[$annotation->language][0]['value']);
// 			} else {

// 			}*/
// 		}
// 		if(count($aspects)){
// 			$out.= '<div class="table-sec text-center">
// 					<table id="ontology_summary_table" class="table table-bordered">
// 						<thead>
// 							<tr>
// 								<th>ASPECT</th>
// 								<th>ONTOLOGY TERMS</th>
// 							</tr>
// 						</thead>
// 						<tbody>';
// 			foreach ($aspects as $aspect_name => $terms) {
// 				$out.= '<tr><td>'.$aspect_name.'</td><td>';
// 				for($x=0;$x<count($terms);$x++){
// 					$out.= '<a href="http://browser.planteome.org/amigo/term/'.get_ontology_id_from_term($terms[$x]).'">'.$terms[$x].'('.get_ontology_id_from_term($terms[$x]).')</a>';
// 					if($x+1 < count($terms)){
// 						$out.= ', ';
// 					}
// 				}
// 				$out.= '</td></tr>';
// 			}
// 			$out.= '</tbody></table></div>';
// 		} else {
// 			$out.= '<p>No Onotology Summary to show</p>';
// 		}
// 	} else {
// 		$out.= '<p>No Onotology Summary to show</p>';
// 	}
// 	return $out;
// }


// function return_gene_annotations($node){
// 	$query = new EntityFieldQuery();
// 	$query->entityCondition('entity_type', 'node')
// 		->entityCondition('bundle','annotation')
// 		->fieldCondition('field_gene','target_id',$node->nid,'=');
// 	$results = $query->execute();
// 	$out = '';/*'<h2>Annotations Table:</h2>';*/
// 	if(count($results['node'])){
// 		$out.= '<table id="annotations_table" class="table table-bordered">
// 					<thead>
// 						<tr>
// 							<th>ANNOTATION ACCESSION</th>
// 							<th>GENE PRODUCT FORM ID</th>
// 							<th>ASPECT</th>
// 							<th>ONTOLOGY TERMS</th>
// 							<th>QUALIFIER</th>
// 							<th>EXTENSION</th>
// 							<th>EVIDENCE CODE</th>
// 							<th>ASSIGNED BY</th>
// 							<th>DATE</th>
// 						</tr>
// 					</thead>
// 					<tbody>';
// 		/*for($x=0;$x<count($results['node']);$x++){
// 			if($x == 0)
// 		}*/
// 		foreach($results['node'] as $ann){
// 			$annotation = node_load($ann->nid);
// 			$aspect = taxonomy_term_load($annotation->field_aspect[$annotation->language][0]['tid']);
// 			$data_source_fc_id = $annotation->field_data_source[$annotation->language][0]['value'];
// 			$data_source = entity_load('field_collection_item', array($data_source_fc_id));
// 			$source_term = taxonomy_term_load($data_source[$data_source_fc_id]->field_source_name[$annotation->language][0]['tid']);
// 			$db = $source_term->field_machine_name['und'][0]['value'];
// 			$db_object_id = $data_source[$data_source_fc_id]->field_object_id[$annotation->language][0]['value'];
// 			$gpfid = $annotation->field_gene_product_form_id[$annotation->language][0]['value'];
// 			$qual = $annotation->field_qualifier[$annotation->language][0]['value'];
// 			$extension = $annotation->field_extension[$annotation->language][0]['value'];
// 			$evidence = taxonomy_term_load($annotation->field_evidence_code[$annotation->language][0]['tid']);
// 			$evid = $evidence->field_machine_name[$annotation->language][0]['value'];
// 			$by = $annotation->field_assigned_by[$annotation->language][0]['value'];
// 			$date = date('Y/m/d', $annotation->field_date[$annotation->language][0]['value']);
// 			$out.= '<tr>
// 						<td><a href="/osu-cgrb/website/content/'.$annotation->title.'">'.$annotation->title.'</a></td>
// 						<td>'.$gpfid.'</td>
// 						<td>'.$aspect->name.'</td>
// 						<td><a href="http://browser.planteome.org/amigo/term/'.$annotation->field_ontology_id[$annotation->language][0]['value'].'">'.$annotation->field_ontology_id[$annotation->language][0]['value'].' - '.get_ontology_term_from_id($annotation->field_ontology_id[$annotation->language][0]['value']).'</a></td>
// 						<td>'.$qual.'</td>
// 						<td>'.$extension.'</td>
// 						<td>'.$evid.'</td>
// 						<td>'.$by.'</td>
// 						<td>'.$date.'</td>
// 					</tr>';
// 		}
// 		$out.= '</tbody></table>';
// 		return $out;
// 	} else {
// 		return '<p>No annotations currently</p>';
// 	}
// 	//echo'<pre>';var_dump($results);exit;
// }
// function print_annotation_sources($node){
// 	$out = '<table>
// 				<tr>
// 					<th>Source Name</th>
// 					<th>Source ID</th>
// 				</tr>';
// 	// echo '<pre>';var_dump($node->field_db_reference);
// 	if(count($node->field_db_reference) && count($node->field_db_reference[$node->language])){
// 		//echo 'good count';
// 		for($x=0;$x<count($node->field_db_reference[$node->language]);$x++){
// 			$db_reference_fc_id = $node->field_db_reference[$node->language][$x]['value'];
// 			$db_reference = entity_load('field_collection_item', array($db_reference_fc_id));
// 			$reference_term = taxonomy_term_load($db_reference[$db_reference_fc_id]->field_source_name[$node->language][0]['tid']);
// 			// if($x==1){
// 			// 	echo '<pre>';var_dump($reference_term);
// 			// }
// 			if($reference_term->field_machine_name['und'][0]['value'] != '' && $reference_term->field_machine_name['und'][0]['value'] != 'PMID'){
// 				//echo 'good annotation';
// 				$out.= '<tr><td>'.$reference_term->field_machine_name['und'][0]['value'].'</td>';
// 				if($db_reference[$db_reference_fc_id]->field_object_id[$node->language][0]['value'] != ''){
// 					$out.= '<td>'.$db_reference[$db_reference_fc_id]->field_object_id[$node->language][0]['value'].'</td></tr>';
// 				} else {
// 					$out.= '</tr>';
// 				}
// 			}
// 		}
// 	}
// 	// echo '<pre>';var_dump($node->field_with_or_from);exit;
// 	if(count($node->field_with_or_from) && count($node->field_with_or_from[$node->language])){
// 		//echo 'good count';
// 		for($x=0;$x<count($node->field_with_or_from[$node->language]);$x++){
// 			$with_from_fc_id = $node->field_with_or_from[$node->language][$x]['value'];
// 			$with_from = entity_load('field_collection_item', array($with_from_fc_id));
// 			$reference_term = taxonomy_term_load($with_from[$with_from_fc_id]->field_source_name[$node->language][0]['tid']);
// 			//echo '<pre>';var_dump($annotation->field_db_reference);
// 			if($reference_term->field_machine_name['und'][0]['value'] != '' && $reference_term->field_machine_name['und'][0]['value'] != 'PMID'){
// 				//echo 'good annotation';
// 				$out.= '<tr><td>'.$reference_term->field_machine_name['und'][0]['value'].'</td>';
// 				if($with_from[$with_from_fc_id]->field_object_id[$node->language][0]['value'] != ''){
// 					$out.= '<td>'.$with_from[$with_from_fc_id]->field_object_id[$node->language][0]['value'].'</td></tr>';
// 				} else {
// 					$out.= '</tr>';
// 				}
// 			}
// 		}
// 	}
// 	$out.= '</table>';
// 	print $out;
// }

// function print_gene_annotation_sources($node){
// 	$query = new EntityFieldQuery();
// 	$query->entityCondition('entity_type', 'node')
// 		->entityCondition('bundle','annotation')
// 		->fieldCondition('field_gene','target_id',$node->nid,'=');
// 	$results = $query->execute();
// 	$out = '<h4>Citations:</h4>';
// 	if(count($results['node'])){
// 		$out.= '<ol>';
// 		foreach($results['node'] as $ann){
// 			$annotation = node_load($ann->nid);
// 			//var_dump($annotation);
// 			//echo '<pre>';var_dump($annotation->field_with_or_from);

// 			if(count($annotation->field_db_reference) > 0){
// 				//echo 'good count';
// 				for($x=0;$x<count($annotation->field_db_reference[$annotation->language]);$x++){
// 					$db_reference_fc_id = $annotation->field_db_reference[$annotation->language][$x]['value'];
// 					$db_reference = entity_load('field_collection_item', array($db_reference_fc_id));
// 					$reference_term = taxonomy_term_load($db_reference[$db_reference_fc_id]->field_source_name[$annotation->language][0]['tid']);
// 					// if($x==1){
// 					// 	echo '<pre>';var_dump($reference_term);
// 					// }
// 					if($reference_term->field_machine_name['und'][0]['value'] == 'PMID'){
// 						$pminfoarray = pubmed_id_to_article_info($db_reference[$db_reference_fc_id]->field_object_id[$annotation->language][0]['value']);
// 						$out.= '<li>'.$pminfoarray['authors'].', '.$pminfoarray['title'].', '.$pminfoarray['journal'].', '.$pminfoarray['volume'].', '.$pminfoarray['issue'].', '.$pminfoarray['epubdate'].'</li>';
// 					} else if($reference_term->field_machine_name['und'][0]['value'] != '' && $reference_term->field_machine_name['und'][0]['value'] != 'PMID'){
// 						//echo 'good annotation';
// 						$out.= '<li>'.$reference_term->field_machine_name['und'][0]['value'].', '.$db_reference[$db_reference_fc_id]->field_object_id[$annotation->language][0]['value'].'</li>';
// 					}
// 				}
// 			}
// 			if(count($annotation->field_with_or_from) > 0){
// 				//echo 'good count';
// 				for($x=0;$x<count($annotation->field_with_or_from[$annotation->language]);$x++){
// 					$with_from_fc_id = $annotation->field_with_or_from[$annotation->language][$x]['value'];
// 					$with_from = entity_load('field_collection_item', array($with_from_fc_id));
// 					$reference_term = taxonomy_term_load($with_from[$with_from_fc_id]->field_source_name[$annotation->language][0]['tid']);
// 					//echo '<pre>';var_dump($annotation->field_db_reference);
// 					if($reference_term->field_machine_name['und'][0]['value'] == 'PMID'){
// 						$pminfoarray = pubmed_id_to_article_info($with_from[$with_from_fc_id]->field_object_id[$annotation->language][0]['value']);
// 						$out.= '<li>'.$pminfoarray['authors'].', '.$pminfoarray['title'].', '.$pminfoarray['journal'].', '.$pminfoarray['volume'].', '.$pminfoarray['issue'].', '.$pminfoarray['epubdate'].'</li>';
// 					} else if($reference_term->field_machine_name['und'][0]['value'] != '' && $reference_term->field_machine_name['und'][0]['value'] != 'PMID'){
// 						//echo 'good annotation';
// 						$out.= '<li>'.$reference_term->field_machine_name['und'][0]['value'].', '.$with_from[$with_from_fc_id]->field_object_id[$annotation->language][0]['value'].'</li>';
// 					}
// 				}
// 			}
// 		}
// 		$out.= '</ol>';
// 		print $out;
// 	} else {
// 		print '<p>No source information to show</p>';
// 	}
// }

// function print_annotation_pubmed_citations($node){
// 	$out = '<h4>PubMED Citations:</h4><ol>';
// 	if(count($node->field_db_reference) > 0){
// 		//echo 'good count';
// 		for($x=0;$x<count($node->field_db_reference[$node->language]);$x++){
// 			$db_reference_fc_id = $node->field_db_reference[$node->language][$x]['value'];
// 			$db_reference = entity_load('field_collection_item', array($db_reference_fc_id));
// 			$reference_term = taxonomy_term_load($db_reference[$db_reference_fc_id]->field_source_name[$node->language][$x]['tid']);
// 			//echo '<pre>';var_dump($annotation->field_db_reference);
// 			if($reference_term->field_machine_name['und'][0]['value'] != '' && $db_reference[$db_reference_fc_id]->field_object_id[$node->language][0]['value'] != '' && $reference_term->field_machine_name['und'][0]['value'] == 'PMID'){
// 				//echo 'good annotation';
// 				$pminfoarray = pubmed_id_to_article_info($db_reference[$db_reference_fc_id]->field_object_id[$node->language][0]['value']);
// 				$out.= '<li>'.$pminfoarray['authors'].', '.$pminfoarray['title'].', '.$pminfoarray['journal'].', '.$pminfoarray['volume'].', '.$pminfoarray['issue'].', '.$pminfoarray['epubdate'].'</li>';
// 			}
// 		}
// 	}
// 	$out.= '</ol>';
// 	print $out;
// }

// function return_pubmed_citations($node){
// 	//TODO - find bug related to where the source terms are pointing in annotations
// 	$query = new EntityFieldQuery();
// 	$query->entityCondition('entity_type', 'node')
// 		->entityCondition('bundle','annotation')
// 		->fieldCondition('field_gene','target_id',$node->nid,'=');
// 	$results = $query->execute();
// 	$out = '<h2>Citations</h2><ol>';
// 	if(count($results['node'])){
// 		foreach($results['node'] as $ann){
// 			$annotation = node_load($ann->nid);
// 			//var_dump($annotation);
// 			if(count($annotation->field_db_reference) > 0){
// 				// echo 'good count';
// 				for($x=0;$x<count($annotation->field_db_reference[$annotation->language]);$x++){
// 					$db_reference_fc_id = $annotation->field_db_reference[$annotation->language][$x]['value'];
// 					$db_reference = entity_load('field_collection_item', array($db_reference_fc_id));
// 					$reference_term = taxonomy_term_load($db_reference[$db_reference_fc_id]->field_source_name[$annotation->language][$x]['tid']);
// 					// echo '<pre>';var_dump($reference_term->field_machine_name['und'][0]['value']);exit;
// 					if($reference_term->field_machine_name['und'][0]['value'] != '' && $db_reference[$db_reference_fc_id]->field_object_id[$annotation->language][0]['value'] != '' && $reference_term->field_machine_name['und'][0]['value'] == 'PMID'){
// 						// echo 'good annotation';
// 						$pminfoarray = pubmed_id_to_article_info($db_reference[$db_reference_fc_id]->field_object_id[$annotation->language][0]['value']);
// 						// print_r($pminfoarray);exit;
// 						$out.= '<li>'.$pminfoarray['authors'].', '.$pminfoarray['title'].', '.$pminfoarray['journal'].', '.$pminfoarray['volume'].', '.$pminfoarray['issue'].', '.$pminfoarray['epubdate'].'</li>';
// 					} else if($reference_term->field_machine_name['und'][0]['value'] != ''){
// 						$out.= '<li>'.$reference_term->field_machine_name['und'][0]['value'].':'.$db_reference[$db_reference_fc_id]->field_object_id[$annotation->language][0]['value'].'</li>';
// 					}
// 				}
// 			}
// 		}
// 		$out.= '</ol>';
// 		return $out;
// 	} else {
// 		return '</ol><p>No citation information to show</p>';
// 	}
// }

// // returns an associative array with authors, title, journal, vol, issue, epubdate
// // https://www.ncbi.nlm.nih.gov/pmc/tools/get-metadata/
// function pubmed_id_to_article_info($pmid){
// 	$html = curl_get_contents("https://eutils.ncbi.nlm.nih.gov/entrez/eutils/esummary.fcgi?db=pubmed&id=".$pmid."&retmode=json");
// 	$json = json_decode($html);
// 	$trimmed_pmid = ltrim($pmid, '0');
// 	// $tmp = isset($json->result->$trimmed_pmid->error);
// 	// $tmp2 = $tmp->$pmid;
// 	// echo'<pre>';var_dump($tmp);
// 	// echo'<pre>';var_dump($pmid);exit;
// 	if(isset($json->result->$trimmed_pmid->error)){
// 		$out_array = array(
// 			'authors' 	=> '',
// 			'title'		=> '',
// 			'journal'	=> '',
// 			'volume'	=> '',
// 			'issue'		=> '',
// 			'epubdate'	=> '',
// 		);
// 		//echo '<pre>';var_dump($out_array);
// 		return $out_array;
// 	} else {
// 		$article_metadata = $json->result->$pmid;
// 		if(count($article_metadata->authors)>1){
// 			$authors = $article_metadata->authors[0]->name.', et. all';
// 		} else {
// 			$authors = $article_metadata->authors[0]->name;
// 		}
// 		$out_array = array(
// 			'authors' 	=> $authors,
// 			'title'		=> $article_metadata->title,
// 			'journal'	=> $article_metadata->source,
// 			'volume'	=> $article_metadata->volume,
// 			'issue'		=> $article_metadata->issue,
// 			'epubdate'	=> $article_metadata->epubdate
// 		);
// 		//echo '<pre>';var_dump($out_array);
// 		return $out_array;
// 	}
// }

// function return_gene_synonyms($node){
// 	$out = [];
// 	if(count($node->field_synonyms)){
// 		foreach($node->field_synonyms['und'] as $index){
// 			$out[] = str_replace(' ', '&nbsp;', $index['value']);
// 		}
// 		return implode(' | ', $out);
// 	} else {
// 		return 'No synonyms to show.';
// 	}
// }

// function return_gene_location($node){
// 	return 'Chromosome '.$node->field_chromosome_no['und'][0]['value'].': '.$node->field_chromosome_start['und'][0]['value'].' - '.$node->field_chromosome_stop['und'][0]['value'];
// }

// function return_gene_phenotype($node){
// 	if($node->field_has_phenotype['und'][0]['value']){
// 		return $node->field_phenotype_description['und'][0]['value'];
// 	} else {
// 		return '';
// 	}
// }

// function return_data_source_fc($node){
// 	$data_source_fc_id = $node->field_data_source['und'][0]['value'];
// 	$data_source = entity_load('field_collection_item', [$data_source_fc_id]);
// 	$source_term = taxonomy_term_load($data_source[$data_source_fc_id]->field_source_name['und'][0]['tid']);
// 	$source_name = $source_term->name;
// 	$object_id = $data_source[$data_source_fc_id]->field_object_id['und'][0]['value'];
// 	return 'Object ID: '.$object_id.'<br>Source Name: '.$source_name;
// }

// function return_data_source_source($node){
// 	$data_source_fc_id = $node->field_data_source['und'][0]['value'];
// 	$data_source = entity_load('field_collection_item', [$data_source_fc_id]);
// 	$source_term = taxonomy_term_load($data_source[$data_source_fc_id]->field_source_name['und'][0]['tid']);
// 	return $source_term->name;
// }

// function return_data_source_id($node){
// 	$data_source_fc_id = $node->field_data_source['und'][0]['value'];
// 	$data_source = entity_load('field_collection_item', [$data_source_fc_id]);
// 	$source_term = taxonomy_term_load($data_source[$data_source_fc_id]->field_source_name['und'][0]['tid']);
// 	$object_id = $data_source[$data_source_fc_id]->field_object_id['und'][0]['value'];
// 	if($source_term->name == 'Planteome (planteome)' && $object_id == ''){
// 		$object_id = $node->title;
// 	}
// 	return $object_id;
// }

// function return_translated_ontology_term($node){
// 	$term = $node->field_ontology_id['und'][0]['value'];
// 	$translated = get_ontology_term_from_id($term);
// 	return $term.' - '.$translated;
// }

// function return_annotation_curators($node){
// 	$result = db_select('workbench_moderation_node_history','wmnh')
// 				->fields('wmnh')
// 				->condition('nid', $node->nid,'=')
// 				->execute()
// 				->fetchAll();
// 	$out = 'No curator data to show';
// 	if(count($result)){
// 		$out = '';
// 		$exclude = [];
// 		$exclude[] = $node->uid;
// 		foreach($result as $tablerowobj){
// 			if(isset($tablerowobj->uid) && !in_array($tablerowobj->uid, $exclude)){
// 				$user = user_load($tablerowobj->uid);
// 				$out.= '<p><a href="/user/'.$user->uid.'">'.$user->name.'</a></p>';
// 				$exclude[] = $user->uid;
// 			}
// 		}
// 	}
// 	return $out;
// }

// function return_formatted_author($node){
// 	$user = user_load($node->uid);
// 	return '<a href="/user/'.$user->uid.'">'.$user->name.'</a>';
// }

// function return_related_synonyms($node){
// 	$out = 'N/A';
// 	if(count($node->field_taxon_related_synonyms)){
// 		$out = '';
// 		foreach($node->field_taxon_related_synonyms['und'] as $synonym_array){
// 			$targ = str_replace(' ', '&nbsp;', $synonym_array['value']);
// 			$out.= ($out == '') ? ($targ) : (' | '.$targ);
// 		}
// 	}
// 	return $out;
// }

// function return_exact_synonyms($node){
// 	$out = 'N/A';
// 	if(count($node->field_taxon_exact_synonyms)){
// 		$out = '';
// 		foreach($node->field_taxon_exact_synonyms['und'] as $synonym_array){
// 			$targ = str_replace(' ', '&nbsp;', $synonym_array['value']);
// 			$out.= ($out == '') ? ($targ) : (' | '.$targ);
// 		}
// 	}
// 	return $out;
// }

// function return_ncbi_number_link($node){
// 	$ncbi_num = $node->field_taxon_ncbi_id['und'][0]['value'];
// 	return '<a href="https://www.ncbi.nlm.nih.gov/Taxonomy/Browser/wwwtax.cgi?id='.$ncbi_num.'">'.$ncbi_num.'</a>';
// }

// function return_gene_link($node){
// 	return l($node->field_gene['und'][0]['entity']->title, '/node/'.$node->field_gene['und'][0]['target_id']);
// 	// return '<a href="node/'.$node->field_gene['und'][0]['target_id'].'">'.$node->field_gene['und'][0]['entity']->title.'</a>';
// }

// function return_with_or_from($node){
// 	$out = '<p>N/A</p>';
// 	if(count($node->field_with_or_from)){
// 		$out = '';
// 		foreach($node->field_with_or_from['und'] as $index){
// 			$with_from_fc_id = $index['value'];
// 			$with_from = entity_load('field_collection_item', [$with_from_fc_id]);
// 			$source_term = taxonomy_term_load($with_from[$with_from_fc_id]->field_source_name['und'][0]['tid']);
// 			$object_id = $with_from[$with_from_fc_id]->field_object_id['und'][0]['value'];
// 			$out.= '<p>'.$source_term->name.', '.$object_id.'</p>';
// 		}
// 	}
// 	return $out;
// }

// function return_db_ref($node){
// 	$out = '<p>N/A</p>';
// 	if(count($node->field_db_reference)){
// 		$out = '';
// 		foreach($node->field_db_reference['und'] as $index){
// 			$db_ref_fc_id = $index['value'];
// 			$db_ref = entity_load('field_collection_item', [$db_ref_fc_id]);
// 			$source_term = taxonomy_term_load($db_ref[$db_ref_fc_id]->field_source_name['und'][0]['tid']);
// 			$object_id = $db_ref[$db_ref_fc_id]->field_object_id['und'][0]['value'];
// 			$out.= '<p>'.$source_term->name.', '.$object_id.'</p>';
// 		}
// 	}
// 	return $out;
// }

// function return_data_source($node){
// 	$out = '<p>N/A</p>';
// 	if(count($node->field_data_source)){
// 		$out = '';
// 		foreach($node->field_data_source['und'] as $index){
// 			$data_source_fc_id = $index['value'];
// 			$data_source = entity_load('field_collection_item', [$data_source_fc_id]);
// 			$source_term = taxonomy_term_load($data_source[$data_source_fc_id]->field_source_name['und'][0]['tid']);
// 			$object_id = $data_source[$data_source_fc_id]->field_object_id['und'][0]['value'];
// 			$out.= $source_term->name.', '.$object_id;
// 		}
// 	}
// 	return $out;
// }

// function return_gene_counts($node){
// 	// $vocab = taxonomy_vocabulary_machine_name_load('gene_type');
// 	// $terms = entity_load('taxonomy_term', FALSE, ['vid'=>$vocab->vid]);
// 	// // echo'<pre>';var_dump($terms);exit;
// 	// foreach($terms as $term){
// 	// 	$q = new EntityFieldQuery();
// 	// }

// 	// $query = db_select('node',"n");
// 	// $query->leftjoin("field_data_field_gene_type","gt","gt.entity_id = n.nid");
// 	// $query->leftjoin("field_data_field_ref_species","rf","rf.entity_id = n.nid");
// 	// $all_taxons= $query->fields('n',array('nid','title'))
// 	// 				->fields('gc',array('field_gene_count_value'))
// 	// 				->fields('tp',array('field_taxon_parent_target_id'))
//  //                   ->condition('n.type',"taxon",'=')
//  //                   ->condition('n.status',1,'=')
//  //                   ->execute()
//  //                   ->fetchAll(); 
//     $taxon_id = arg(1);

//     $query = db_query("SELECT gt.field_gene_type_tid, count(n.nid) as total_gene FROM {node} as n
//     	LEFT JOIN {field_data_field_gene_type} as gt ON gt.entity_id = n.nid
//     	LEFT JOIN {field_data_field_ref_species} as rf ON rf.entity_id = n.nid
//     	WHERE n.type = 'gene' AND n.status = 1 AND rf.field_ref_species_target_id = ".$taxon_id." 
//     	GROUP BY gt.field_gene_type_tid
// 	");
	
// 	$result = $query->fetchAll();

// 	if(is_array($result)){
// 		$total = 0;
// 		foreach ($result as $key => $value) {
// 			$total += $value->total_gene;
// 		}

// 		$output = "<p>Total - ".$total."</p>";
// 		foreach ($result as $key => $value) {
// 			$term = taxonomy_term_load($value->field_gene_type_tid);
// 			$output .= "<p>".$term->field_human_name['und'][0]['value']." - ".$value->total_gene."</p>";
// 		}

// 		return $output;
// 	}else{
// 		return "";
// 	}
// }

// function return_species_link($node){
// 	return l($node->field_ref_species['und'][0]['entity']->title, '/node/'.$node->field_ref_species['und'][0]['entity']->nid);
// }

// /*
//  * builds two arrays, each 5 elements long, for paralogs/orthologs
//  * $base_gene - base gene, sent to justin's api
//  *		at# -> ok
//  *		os# -> replace first G w/ T
//  *		zm# -> need to translate to GRMZM number
//  * $base_species - base species, sent to justin's api. Transformed first as follows:
//  *		Oryza Sativa Japonica Group -> Oryza_sativa.japonica.IRGSP
//  *		Zea Mays -> Zea_mays
//  *		Arabidopsis Thaliana -> Arabidopsis_thaliana
//  *
//  *		More IDs will need to be added
//  *	$gene_synonyms - used for zea mays only
//  * return: [[$paralogs],[$orthologs]]
//  */
// function return_homolog_array($base_gene_id, $base_species, $gene_synonyms){
// 	//transform gene/species as needed
// 	//send gene/species to API
// 	//transform JSON into array & iterate
// 	//	first 5 paralogs go into paralog array
// 	//	maintain array of species in ortholog array
// 	//	first 5 orthologs go into ortholog array
// 	//	continue iterating over homologs, if encounter a species not in ortholog array already, replace index of array based on species in ortholog array +1
// 	//	when species in ortholog array = 5, break, or let loop run its course.
// 	switch ($base_species) {
// 		case '433':
// 			//Zea Mays
// 			foreach($gene_synonyms['und'] as $synonym){
// 				if(strpos($synonym['value'], 'GRMZM') !== false){
// 					//break out of both
// 					//this might actually need to be break 3 since we're in the if statement?
// 					$base_gene_id = $synonym['value'];
// 					$base_species = 'Zea_mays';
// 					break 2;
// 				}
// 			}
// 			//either synonyms are empty or synonyms don't contain a GRMZM, can't query API
// 			return [[],[]];
// 			break;
// 		case '465':
// 			// Oryza Sativa Japonica Group
// 			if($base_gene_id[4] == 'G'){
// 				$base_gene_id[4] = 'T';
// 				$base_species = 'Oryza_sativa.japonica.IRGSP';
// 			} else {
// 				//incorrect gene ID, can't query API
// 				return [[],[]];
// 			}
// 			break;
// 		case '636':
// 			// Arabidopsis Thaliana
// 			$base_species = 'Arabidopsis_thaliana';
// 			break;
		
// 		default:
// 			return [[],[]];
// 			break;
// 	}
// 	//if we reach here, the data should have been cleaned.
// 	// echo'<pre>';
// 	// var_dump($base_gene_id);
// 	// var_dump($base_species);
// 	// exit;
// 	$availible_species = ['Arabidopsis_thaliana', 'Oryza_sativa.japonica.IRGSP', 'Zea_mays'];
// 	$json = htmlspecialchars(curl_get_contents("http://dev.planteome.org/ortho_service/?q=".$base_gene_id."&species=".$base_species.""));
// 	$json_arr = json_decode(html_entity_decode($json));
// 	$ortholog_species = [];
// 	$paralogs = [];
// 	$orthologs = [];
// 	// $needed_unique_num = 
// 	foreach ($json_arr as $homolog_json_obj) {
// 		if($homolog_json_obj->species == $base_species){
// 			//paralog
// 			if(count($paralogs) < 5){
// 				$paralogs[] = $homolog_json_obj->gene;
// 				if(count($ortholog_species == 5) && count($paralogs) == 5){
// 					//multiple break levels?
// 					break;
// 				}
// 			}

// 		} else {
// 			//ortholog
// 			if(in_array($homolog_json_obj->species, $availible_species)){
// 				if(count($orthologs) < 5){
// 					//add ortholog
// 					$orthologs[] = $homolog_json_obj->gene;
// 					$ortholog_species[] = $homolog_json_obj->species;
// 				} elseif (count(array_unique($ortholog_species)) < min(count($availible_species)-1, 5)){
// 					//need more species in ortholog_species, can find indexes of species and then replace corresponding index in $orthologs?
// 				}
// 			}
// 		}
// 	}

// 	echo'<pre>';var_dump($json_arr);exit;
// }


// /**************theme_hooks*****************/

// function cgrb_preprocess_page(&$variables){
// 	// if($variables[''])
// 	// echo'<pre>';print_r($variables['node']->type);exit;
// 	if($variables['is_front']){
// 		// $tmp = drupal_get_path('theme', 'cgrb');
// 		// echo'<pre>';var_dump($tmp);exit;
// 		drupal_add_css(drupal_get_path('theme', 'cgrb').'/js/themes/default/style.min.css');
// 		drupal_add_js(drupal_get_path('theme', 'cgrb').'/js/jstree.min.js');
// 		// /*echo'<pre>';*/print_r(drupal_get_js());exit;
// 		// $variables['scripts'] = drupal_get_js();
// 		drupal_add_js(drupal_get_path('theme', 'cgrb').'/js/fp_scripts.js');
// 	} elseif(isset($variables['node']->type) && $variables['node']->type == 'taxon'){
// 		drupal_add_css(drupal_get_path('theme', 'cgrb').'/js/themes/default/style.min.css');
// 		drupal_add_js(drupal_get_path('theme', 'cgrb').'/js/jstree.min.js');
// 		// /*echo'<pre>';*/print_r(drupal_get_js());exit;
// 		// $variables['scripts'] = drupal_get_js();
// 		drupal_add_js(drupal_get_path('theme', 'cgrb').'/js/taxon_scripts.js');
// 	}
// 	// echo'<pre>';var_dump($variables['is_front']);exit;
// }

// function cgrb_preprocess_user_login(&$variables) {
// 	$varr = user_login(array(),$form_state);
// 	$variables['form'] = drupal_build_form('user_login', $varr); ## I have to build the user login myself.
// }

// function cgrb_theme(&$existing, $type, $theme, $path) {
//   return array(
//     'user_login' => array(
//       'template' => 'user-login',
//       'variables' => array('form' => NULL), ## you may remove this line in this case
//     ),
//   );

// }

// function cgrb_form_alter(&$form, &$form_state, $form_id){
// 	if ($form_id == 'user_register_form'){
// 		//echo "<pre>"; print_r($form); exit();
// 		$form['#prefix'] = '<section id="login-page">
// 							<div class="container">
// 								<div class="row">
// 									<div class="col-md-5 col-sm-6 col-sm-offset-3 col-md-offset-3">
// 										<div class="box-bg-color">
// 											<h1>User Register</h1>';
// 		$form['#suffix']  = '</div></div></div></div></section>';
// 	}

// 	if($form_id == 'user_pass'){
// 		$form['#prefix'] = '<section id="login-page">
// 							<div class="container">
// 								<div class="row">
// 									<div class="col-md-5 col-sm-6 col-sm-offset-3 col-md-offset-3">
// 										<div class="box-bg-color">
// 											<h1>Forgot password?</h1>';
// 		$form['#suffix']  = '</div></div></div></div></section>';
// 	}

// 	if ($form_id == 'views_exposed_form') {
//         $view = $form_state['view'];
//         if ($view->name == 'search_for_gene' && $view->current_display == 'page') {
            
//             $form['field_aspect_tid']['#attributes']['class'][] = 'selectpicker';
//             $form['field_aspect_tid']['#prefix'] = '<div class="select-field">';
//             $form['field_aspect_tid']['#suffix'] = '</div>';

//             $form['field_gene_type_tid_1']['#attributes']['class'][] = 'selectpicker';
//             $form['field_gene_type_tid_1']['#prefix'] = '<div class="select-field">';
//             $form['field_gene_type_tid_1']['#suffix'] = '</div>';

//             $options = array();
//             $query = db_select('node', 'n');
//             $query->leftjoin("field_data_field_taxon_rank","tr","tr.entity_id = n.nid");
// 			$nodes = $query->fields('n', array('nid','title'))
// 			    ->orderBy('n.title', 'ASC')
// 			    ->condition('n.type', 'taxon')
// 			    ->condition('tr.field_taxon_rank_tid', array(10,18),'IN')
// 			    ->execute()->fetchAll();
// 			 //$query; // returns an indexed array
			 
// 			$options[''] = '- Any -';
// 			foreach ($nodes as $key => $value) {				
// 				$options[$value->nid] = $value->title;
// 			}
//   			//echo "<pre>"; print_r($options); exit();
//             $form['field_ref_species_target_id']['#attributes']['class'][] = 'selectpicker selectpicker-species';
//             $form['field_ref_species_target_id']['#type'] = 'select';
//             $form['field_ref_species_target_id']['#size'] = '';
//             $form['field_ref_species_target_id']['#default_value'] = '';
//             $form['field_ref_species_target_id']['#options'] = $options;

//             $form['submit']['#value'] = html_entity_decode('<i class="fa fa-search"></i>');
//             $form['field_ref_species_target_id']['#prefix'] = '<div class="select-field" style="margin-left: 23px;">';
//             $form['field_ref_species_target_id']['#suffix'] = '</div>';
//             //echo "<pre>"; print_r($form); exit();
//         // $form['keys']['#prefix'] = '<div style="clear: both;"></div><div class="find-field">';
//         //  $form['keys']['#suffix'] = '</div>';

//         }
//     }
// 	//	echo "<pre>"; print_r($form_id); exit();
// 	// function cgrb_preprocess_node(&$variables){

// 	// }
// }

/**************theme_hooks*****************/

function cgrb_preprocess_page(&$variables){
	// if($variables[''])
	// echo'<pre>';print_r($variables['node']->type);exit;
	if($variables['is_front']){
		// $tmp = drupal_get_path('theme', 'cgrb');
		// echo'<pre>';var_dump($tmp);exit;
		drupal_add_css(drupal_get_path('theme', 'cgrb').'/js/themes/default/style.min.css');
		drupal_add_js(drupal_get_path('theme', 'cgrb').'/js/jstree.min.js');
		// /*echo'<pre>';*/print_r(drupal_get_js());exit;
		// $variables['scripts'] = drupal_get_js();
		drupal_add_js(drupal_get_path('theme', 'cgrb').'/js/fp_scripts.js');
	} elseif(isset($variables['node']->type) && $variables['node']->type == 'taxon'){
		drupal_add_css(drupal_get_path('theme', 'cgrb').'/js/themes/default/style.min.css');
		drupal_add_js(drupal_get_path('theme', 'cgrb').'/js/jstree.min.js');
		// /*echo'<pre>';*/print_r(drupal_get_js());exit;
		// $variables['scripts'] = drupal_get_js();
		drupal_add_js(drupal_get_path('theme', 'cgrb').'/js/taxon_scripts.js');
	}
	// echo'<pre>';var_dump($variables['is_front']);exit;
}

function cgrb_preprocess_user_login(&$variables) {
	$varr = user_login(array(),$form_state);
	$variables['form'] = drupal_build_form('user_login', $varr); ## I have to build the user login myself.
}

function cgrb_theme(&$existing, $type, $theme, $path) {
  return array(
    'user_login' => array(
      'template' => 'user-login',
      'variables' => array('form' => NULL), ## you may remove this line in this case
    ),
  );

}

function cgrb_form_alter(&$form, &$form_state, $form_id){
	if ($form_id == 'user_register_form'){
		//echo "<pre>"; print_r($form); exit();
		$form['#prefix'] = '<section id="login-page">
							<div class="container">
								<div class="row">
									<div class="col-md-5 col-sm-6 col-sm-offset-3 col-md-offset-3">
										<div class="box-bg-color">
											<h1>User Register</h1>';
		$form['#suffix']  = '</div></div></div></div></section>';
	}

	if($form_id == 'user_pass'){
		$form['#prefix'] = '<section id="login-page">
							<div class="container">
								<div class="row">
									<div class="col-md-5 col-sm-6 col-sm-offset-3 col-md-offset-3">
										<div class="box-bg-color">
											<h1>Forgot password?</h1>';
		$form['#suffix']  = '</div></div></div></div></section>';
	}

	if ($form_id == 'views_exposed_form') {
        $view = $form_state['view'];
        if ($view->name == 'search_for_gene' && $view->current_display == 'page') {
            
            $form['field_aspect_tid']['#attributes']['class'][] = 'selectpicker';
            $form['field_aspect_tid']['#prefix'] = '<div class="select-field">';
            $form['field_aspect_tid']['#suffix'] = '</div>';

            $form['field_gene_type_tid_1']['#attributes']['class'][] = 'selectpicker';
            $form['field_gene_type_tid_1']['#prefix'] = '<div class="select-field">';
            $form['field_gene_type_tid_1']['#suffix'] = '</div>';

            $options = array();
            $query = db_select('node', 'n');
            $query->leftjoin("field_data_field_taxon_rank","tr","tr.entity_id = n.nid");
			$nodes = $query->fields('n', array('nid','title'))
			    ->orderBy('n.title', 'ASC')
			    ->condition('n.type', 'taxon')
			    ->condition('tr.field_taxon_rank_tid', array(10,18),'IN')
			    ->execute()->fetchAll();
			 //$query; // returns an indexed array
			 
			$options[''] = '- Any -';
			foreach ($nodes as $key => $value) {				
				$options[$value->nid] = $value->title;
			}
  			//echo "<pre>"; print_r($options); exit();
            $form['field_ref_species_target_id']['#attributes']['class'][] = 'selectpicker selectpicker-species';
            $form['field_ref_species_target_id']['#type'] = 'select';
            $form['field_ref_species_target_id']['#size'] = '';
            $form['field_ref_species_target_id']['#default_value'] = '';
            $form['field_ref_species_target_id']['#options'] = $options;

            $form['submit']['#value'] = html_entity_decode('<i class="fa fa-search"></i>');
            $form['field_ref_species_target_id']['#prefix'] = '<div class="select-field" style="margin-left: 23px;">';
            $form['field_ref_species_target_id']['#suffix'] = '</div>';
            //echo "<pre>"; print_r($form); exit();
        // $form['keys']['#prefix'] = '<div style="clear: both;"></div><div class="find-field">';
        //  $form['keys']['#suffix'] = '</div>';

        }
    }
	//	echo "<pre>"; print_r($form_id); exit();
	// function cgrb_preprocess_node(&$variables){

	// }
}