<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<ol>
<?php foreach ($rows as $id => $row): ?>
  
    <?php print $row; ?>

<?php endforeach; ?>
</ol>
<?php
$node = node_load(arg(1));
//echo "<pre>"; print_r($node); exit;
$gene_id = "";
if(!empty($node) && $node->type == 'taxon'){
	$taxon_id = $node->nid;
}
?>
<a href="<?php echo base_path(); ?>gene-list/<?php echo $taxon_id; ?>">More ... </a>