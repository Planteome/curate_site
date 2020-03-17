<?php
function gramene_form_search_block_form_alter(&$form, &$form_state, $form_id) {
	
		if($form_id == 'search_block_form'){
			$form['search_block_form']['#attributes']['placeholder'] = t('Search for genes, species, pathways, ontology terms, domains…') ;
		}
 	
 	}