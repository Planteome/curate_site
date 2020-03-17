<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>
<?php //echo "<pre>";  print_r($row); exit();
	$uri = $row->field_field_image[0]['raw']['uri'];
 $url = file_create_url($uri);
 $name = $row->field_field_common_name[0]['raw']['value'];
 $link = $row->field_field_genus[0]['raw']['value'];
 $id = $row->field_field_genomes_id[0]['raw']['value'];
?>
 
 <div class="col-sm-6 col-md-6">
	<div class="row">
					<div class="species-box">
					<div class="col-md-4 col-sm-4">
						<a href="<?php echo $link; ?>"><img class="img-responsive" src="<?php echo $url; ?>"/></a>
					</div>
					<div class="col-md-8 col-sm-8">
						<a href="<?php echo $link; ?>"><p><?php echo $name; ?></p></a>
						<span>???</span>
					</div>
				</div>
				</div>
			</div>