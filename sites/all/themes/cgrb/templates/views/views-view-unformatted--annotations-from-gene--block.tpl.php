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
<!-- <li>test</li> -->
</ol>
<?php
$node = node_load(arg(1));
//echo "<pre>"; print_r($node); exit;
$gene_id = "";
if(!empty($node) && $node->type == 'annotation'){
	$gene_id = $node->field_gene['und'][0]['target_id'];
}elseif(!empty($node) && $node->type == 'gene'){
	$gene_id = $node->nid;
}
?>
<a href="<?php echo base_path(); ?>gene-annotations/<?php echo $gene_id; ?>">More ... </a>