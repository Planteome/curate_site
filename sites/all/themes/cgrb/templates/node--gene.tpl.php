<?php
/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct URL of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type; for example, "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type; for example, story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode; for example, "full", "teaser".
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined; for example, $node->body becomes $body. When needing to
 * access a field's raw values, developers/themers are strongly encouraged to
 * use these variables. Otherwise they will have to explicitly specify the
 * desired field language; for example, $node->body['en'], thus overriding any
 * language negotiation rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>

<?php 
   //echo "<pre>"; print_r($node); exit();
  $symbol = '';
  if(isset($node->field_gene_symbol['und'][0]['value'])){
    $symbol = $node->field_gene_symbol['und'][0]['value'];
    //echo "<pre>"; print_r($symbol); exit();
  } else {
    $symbol = "N/A";
  }
  $name = '';
  if(isset($node->field_gene_name['und'][0]['value']) && $node->field_gene_name['und'][0]['value'] != ''){
    $name = $node->field_gene_name['und'][0]['value'];
  } else {
    $name = "N/A";
  }
  $id = '';
  if(isset($node->field_gene_id['und'][0]['value'])){
    $id = $node->field_gene_id['und'][0]['value'];
  } else {
    $id = "N/A";
  }
  // return_homolog_array($node->field_gene_id['und'][0]['value'], $node->field_ref_species['und'][0]['target_id'], $node->field_synonyms);

  // echo'<pre>';var_dump($node->field_gene_id['und'][0]['value']);exit;
  // echo'<pre>';var_dump($node->field_ref_species['und'][0]['target_id']);exit;


?> <h2 class="text-center">Gene: <?php echo $symbol; ?> | <?php echo $name; ?> | <?php echo $id; ?></h2>
	<h3 class="text-center"><span>
          <?php global $user;
            if ( $user->uid ) {
              echo l('Edit Gene', "node/$node->nid/edit/gene", [
                          'attributes' => [
                            // 'class' => [
                            //   'edit-button'
                            // ]
                          ],
                          'query' => [
                            'gene' => $node->nid,
                          ],
                        ]);
            } else {
              echo l('Edit Gene', "$base_path/user", [
                          'attributes' => [
                            // 'class' => [
                            //   'edit-button'
                            // ]
                          ],
                          // 'query' => [
                          //   'gene' => $node->nid,
                          // ],
                        ]);
            }
          ?>
        </span>|
        <span><?php echo l('Add Annotation', "node/add/annotation", [
              'attributes' => [
                // 'class' => [
                //   'edit-button'
                // ]
              ],
              'query' => [
                'gene' => $node->nid,
              ],
            ]); ?></span>
        <span>| <a href="#comments">Add Comment</a></span>    
        </h3>
       

  <div id="gene-page">
    <div class="row">
      <div class="col-md-6 col-sm-6 gene-left-sec" style="padding-left: 0;">
        <!-- <div class="top">
          <h2>Gene: <?php echo $symbol; ?> | <?php echo $name; ?> | <?php echo $id; ?></h2>
          <h3><?php echo l('Add Annotation', "node/add/annotation?gene=".$node->nid, ['attributes' => ['class' => ['edit-button']]]); ?></h3>
        </div> -->
       <!--  <h2>Gene: <?php //echo $symbol; ?> | <?php //echo $name; ?> | <?php //echo $id; ?></h2> -->
        <!-- <div><a href=""><h3>Edit Annotation<h3></a></div> -->
        <!-- <h3 class="h3-padded">
          <?php global $user;
            if ( $user->uid ) {
              //echo l('Edit Gene', "node/$node->nid/edit/gene", [
                          //'attributes' => [
                            // 'class' => [
                            //   'edit-button'
                            // ]
                          //],
                         // 'query' => [
                           // 'gene' => $node->nid,
                          //],
                        //]);
            } //else {
              //echo l('Edit Gene', "$base_path/user", [
                          //'attributes' => [
                            // 'class' => [
                            //   'edit-button'
                            // ]
                          //],
                          // 'query' => [
                          //   'gene' => $node->nid,
                          // ],
                        //]);
            //}
          ?>
        </h3> -->
        <div class="col-md-12 col-sm-12 pdng-none">
          <div class="right-content-border">
            <!-- <i><h3><?php echo $symbol; ?> | <?php echo $name; ?> | <?php echo $id; ?></h3></i> -->
            <span>GENE SYMBOL:</span>
            <p><?php if(isset($node->field_gene_symbol['und'][0]['value'])){ echo $node->field_gene_symbol['und'][0]['value'];} else{ echo "N/A"; } ?><!-- PNT1 (&#60;120) --></p>
            <span>GENE NAME:</span>
            <p><?php if(isset($node->field_gene_name['und'][0]['value']) && $node->field_gene_name['und'][0]['value'] != ''){ echo $node->field_gene_name['und'][0]['value'];} else { echo "N/A"; } ?><!-- PEANUT 1 (&#60;120) --></p>
            <span>GENE ID:</span>
            <p><?php if(isset($node->field_gene_id['und'][0]['value'])){ echo $node->field_gene_id['und'][0]['value'];} else{ echo "N/A"; } ?><!-- AT5G22130 (&#60;120) --></p>
            <span>GENE TYPE:</span>
            <p><?php if(isset($node->field_gene_type['und'][0]['tid'])){ echo $node->field_gene_type['und'][0]['taxonomy_term']->name;} else{ echo "N/A"; } ?><!-- AT5G22130 (&#60;120) --></p>
            <span>SPECIES:</span>
            <p><i><?php if(isset($node->field_ref_species['und'][0]['entity']->title)){ echo return_species_link($node); } else{ echo "N/A"; } ?></i><!-- Arabidopsis Thaliana (&#60;120) --></p>
            <span>SYNONYMS:</span>
            <p><?php if(!empty(return_gene_synonyms($node))){ echo return_gene_synonyms($node); } else{ echo "N/A"; } ?></p>
            <!-- <p>Peanut Synonym 1 | Peanut Synonym 2 (&#60;120 x 4 (estimated) </p> -->
            <span>GENE LOCATION:</span>
            <p><?php if(!empty(return_gene_location($node))){ echo return_gene_location($node);} else{ echo "N/A"; } ?><!-- Chro mosome Number: Start - Stop (&#60;120) --></p>
            <span>SUMMARY:</span>
            <p><?php if(isset($node->body['und'][0]['value'])){ echo $node->body['und'][0]['summary'];} else{ echo "N/A"; } ?><!-- GPI mannosyltransferase 1 [Source:UniProtKB/TrEMBL;F4K8F7 --></p>
            <span>DESCRIPTION:</span>
            <p><?php if(isset($node->body['und'][0]['value'])){ echo $node->body['und'][0]['value'];} else{ echo "N/A"; } ?><!-- GPI mannosyltransferase 1 [Source:UniProtKB/TrEMBL;F4K8F7 --></p>
            <span>PHENOTYPE:</span>
            <p><?php if(!empty(return_gene_phenotype($node))){ echo return_gene_phenotype($node);} else{ echo "N/A"; } ?><!-- Phenotype (&#60;120) --></p>
            <span>DATA SOURCE:</span>
            <p><?php 
            $fc_id = $node->field_data_source['und'][0]['value'];
            //echo "<pre>"; print_r($fc_id);exit();
            $fc = field_collection_item_load($fc_id);
            //echo "<pre>"; print_r($fc);exit();
            if(!empty(return_data_source_fc($node))){ 
              if($fc->field_source_name['und'][0]['tid'] == 2345){
                $ob_id = $fc->field_object_id[LANGUAGE_NONE][0]['value'];
                $node_bilio = node_load($ob_id);
                $node_view = node_view($node_bilio,'teaser');
                $rendered_node = drupal_render($node_view);
                echo $rendered_node;
              }else{
                echo return_data_source_fc($node);                
              }
            } else{ 
              echo "N/A"; 
            } ?><!--  Object ID:AT5G22130 (&#60;120)<br>
            Source Name:Gramene (GR_GENE) (&#60;120) --></p>
            <!-- <span>PUBLICATIONS:</span> -->
            <!-- <p><i> --><?php //echo "<pre>"; print_r($node->field_publication); exit();
            /*$Publication = 0;
            foreach ($node->field_publication['und'] as $value) {
             // echo 'keyss'; print_r($key);
              // echo "<pre>"; print_r($value); 
              //print_r($node->field_publication['und'][$Publication]['entity']->nid);
              if(!empty($node->field_publication['und'][$Publication]['entity']->nid)){
                $biblio_nid = $node->field_publication['und'][$Publication]['entity']->nid;
                $node_bilio = node_load($biblio_nid);
                $node_view = node_view($node_bilio,'teaser');
                $rendered_node = drupal_render($node_view);
                echo $rendered_node;
              }else{
                 echo "N/A";          
              }
              $Publication++;
            }*/
            // if(isset($node->field_publication['und'][0]['entity']->nid)){ echo $node->field_publication['und'][0]['entity']->title; } else{ echo "N/A"; } 
            ?>
              
            <!-- </i></p> -->
            <!-- <span>PLANTEOME ACCESSION ID:</span>
            <p><?php if(isset($node->field_accession['und'][0]['value'])){ echo $node->field_accession['und'][0]['value'];} else{ echo "N/A"; } ?></p> -->
          </div>  
        </div>
        <div class="col-md-12 col-sm-12 pdng-none">
          <h2>Ontology Summary</h2>
          <div class="table-sec">
             <h3><?php echo l('Add Annotation', "node/add/annotation", [
              'attributes' => [
                // 'class' => [
                //   'edit-button'
                // ]
              ],
              'query' => [
                'gene' => $node->nid,
              ],
            ]); ?></h3>
          <?php echo return_ontology_summary($node); ?>
          </div>
          <!-- <h2>Ontology Summary</h2>
          <div class="table-sec text-center">
           <table class="table table-bordered">
              <thead>
                <tr>
                  <th>ASPECT</th>
                  <th>ONTOLOGY TERMS</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>PO: Plant Anatomy (A)</td>
                  <td>whole plant, seed</td>
                </tr>
                <tr>
                  <td>PO: Plant  Structure Development (C)</td>
                  <td>growth, photosynthesis</td>
                </tr>
                <tr>
                  <td>TO: Plant Trait Ontology (T)</td>
                  <td>fast-growing, hybridized</td>
                </tr>
              </tbody>
            </table>
          </div> -->
        </div>        
      </div>  

      <div class="col-md-6 col-sm-6 gene-right-sec" style="padding-right:0;">
        <div class="col-md-12 col-sm-12 pdng-none">
          <!-- <h3 class="h3-padded"><?php //echo l('Add Annotation', "node/add/annotation", [
              //'attributes' => [
                // 'class' => [
                //   'edit-button'
                // ]
             // ],
             // 'query' => [
              //  'gene' => $node->nid,
             //],
            //]); ?></h3> -->
          <div class="right-content-border">
            <h3>Latest annotations for this gene</h3>
            <?php print views_embed_view('annotations_from_gene','block_1'); ?>
            <!-- <ol>
              <li>A000000003612</li>
              <li>A000000003613</li>
              <li>A000000003614</li>
              <li>A000000003615</li>
              <li>A000000003616</li>
              <p>...More</p>
            </ol> -->
          </div>
        </div>
        <div class="col-md-12 col-sm-12 pdng-none">
          <div class="right-content-border">
            <!-- <p>PO:0000003</p> -->
            <h3>Paralogous Genes</h3>
            <ol>
              <li><p>Gene Name | <span>Gene Symbol</span></p><a href=""><span>genelinkname.com/1/234/567</span></a></li>
              <li><p>Gene Name | <span>Gene Symbol</span></p><a href=""><span>genelinkname.com/1/234/567</span></a></li>
              <li><p>Gene Name | <span>Gene Symbol</span></p><a href=""><span>genelinkname.com/1/234/567</span></a></li>
              <li><p>Gene Name | <span>Gene Symbol</span></p><a href=""><span>genelinkname.com/1/234/567</span></a></li>
              <li><p>Gene Name | <span>Gene Symbol</span></p><a href=""><span>genelinkname.com/1/234/567</span></a></li>
              <p>...View all homologs</p>
            </ol>
          </div>
        </div>
        <div class="col-md-12 col-sm-12 pdng-none">
          <div class="right-content-border">
            <!-- <p>PO:0000003</p> -->
            <h3>Orthologous Genes</h3>
            <ol>
              <li><p>Gene Name | <span>Gene Symbol</span></p><a href=""><span>genelinkname.com/1/234/567</span></a></li>
              <li><p>Gene Name | <span>Gene Symbol</span></p><a href=""><span>genelinkname.com/1/234/567</span></a></li>
              <li><p>Gene Name | <span>Gene Symbol</span></p><a href=""><span>genelinkname.com/1/234/567</span></a></li>
              <li><p>Gene Name | <span>Gene Symbol</span></p><a href=""><span>genelinkname.com/1/234/567</span></a></li>
              <li><p>Gene Name | <span>Gene Symbol</span></p><a href=""><span>genelinkname.com/1/234/567</span></a></li>
              <p>...View all homologs</p>
            </ol>
          </div>
        </div>
        <!-- <div class="col-md-12 col-sm-12 pdng-none">
          <div class="right-content-border">
            <h3>Gene 2 Gene Interaction</h3>
            <ol>
              <li>A000000003612</li>
              <li>A000000003613</li>
              <li>A000000003614</li>
              <li>A000000003615</li>
              <li>A000000003616</li>
              <p>...More</p>
            </ol>
          </div>
        </div> -->
      </div>  
    </div>

    <div class="row">
      <div class="col-md-12 col-sm-12 pdng-none">
        <h2>Annotations</h2>
        <div class="table-sec text-center">
        <?php print views_embed_view('annotations_from_gene','page_1',$node->nid); ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 pdng-none">
        <h2>Publications</h2>
        <div class='publication-list'>
          <?php //echo "<pre>"; print_r($node->field_publication); exit();
            $Publication = 0;
            foreach ($node->field_publication['und'] as $value) {
             // echo 'keyss'; print_r($key);
              // echo "<pre>"; print_r($value); 
              //print_r($node->field_publication['und'][$Publication]['entity']->nid);
              if(!empty($node->field_publication['und'][$Publication]['entity']->nid)){
                $biblio_nid = $node->field_publication['und'][$Publication]['entity']->nid;
                $node_bilio = node_load($biblio_nid);
                $node_view = node_view($node_bilio,'teaser');
                $rendered_node = drupal_render($node_view);
                echo $rendered_node;
              }else{
                 echo "N/A";          
              }
              $Publication++;
            }
            // if(isset($node->field_publication['und'][0]['entity']->nid)){ echo $node->field_publication['und'][0]['entity']->title; } else{ echo "N/A"; } 
          ?>
        </div>
      </div>
    </div>
    <?php print render($content['links']); ?>
    <?php print render($content['comments']); ?>
  </div>

