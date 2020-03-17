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
   //echo'<pre>';var_dump($node);exit;
  $title = '';
  if(isset($node->title)){
    $title = $node->title;
  } else {
    $title = "N/A";
  }
?>

<div id="annotation-page">
    <div class="row">
      <div class="top">
        <h2 class="text-center">Annotation: <?php echo $title; ?> for Gene: <?php echo $node->field_gene['und'][0]['entity']->title; ?></h2>
        
        <h3 class="text-center"><span><?php echo l('Edit Annotation', "node/".$node->nid."/clone/confirm", ['attributes' => [
          
          ]
        ]

        ); ?> | <a href="#comments">Add Comment</a></span></h3>
      </div>
      <!-- <h2>Annotation: <?php echo $title; ?> for<br>Gene: <?php echo $node->field_gene['und'][0]['entity']->title; ?></h2> -->
      <!-- <div><h3><?php echo l('Edit Annotation', "node/".$node->nid."/clone/confirm", ['attributes' => ['class' => ['edit-button']]]); ?></h3></div> -->
      <div id="gene-page">
      <div class="row">
      <div class="col-md-6 col-sm-6 annotation-left-sec">
        <!-- <h3><?php if(isset($node->title)) { echo $node->title; } else{ echo "N/A"; } ?></h3> -->
         <div class="right-content-border">
        <span>GENE:</span>
        <p><?php if(isset($node->field_gene['und'][0]['target_id'])){ echo return_gene_link($node); } else{ echo "N/A"; } ?><!-- Gene Product Form ID Data (&#60;30) --></p>
        <span>ONTOLOGY TERM:</span>
        <p><?php if(!empty(return_translated_ontology_term($node))) { echo return_translated_ontology_term($node); } else{ echo "N/A"; } ?><!--  - Whole Plant (&#60;50) --></p>
        <span>ONTOLOGY TYPE:</span>
        <p><?php if(isset($node->field_aspect['und'][0]['taxonomy_term']->name)) { echo $node->field_aspect['und'][0]['taxonomy_term']->name; } else{ echo "N/A"; } ?><!-- PO: Plant Anatomy (A) (&#60;50) --></p>
        <span>EVIDENCE CODE:</span>
        <p><?php if(isset($node->field_evidence_code['und'][0]['taxonomy_term']->name)) { echo $node->field_evidence_code['und'][0]['taxonomy_term']->name; } else{ echo "NA"; } ?><!--  (&#60;50) --></p>
        <span>ANNOTATION EXTENSION:</span>
        <p><?php if(isset($node->field_annotation_extension['und'][0]['value']) && $node->field_annotation_extension['und'][0]['value'] != ""){ echo $node->field_annotation_extension['und'][0]['value']; } else{ echo "N/A"; } ?><!-- Extension (&#60;173) --></p>
        <span>QUALIFIER:</span>
        <p><?php  if(isset($node->field_qualifier['und'][0]['value']) && $node->field_qualifier['und'][0]['value'] != ""){ echo $node->field_qualifier['und'][0]['value']; } else{ echo "N/A"; } ?><!-- Qualifier (&#60;52) --></p>
        <span>GENE PRODUCT FORM ID:</span>
        <p><?php if(isset($node->field_gene_product_form_id['und'][0]['value'])){ echo $node->field_gene_product_form_id['und'][0]['value']; } else{ echo "N/A"; } ?><!-- Gene Product Form ID Data (&#60;30) --></p>
        <!-- WITH/FROM -->
        <span>WITH OR FROM:</span>
        <?php echo return_with_or_from($node); ?>
        <!-- DATA SOURCE -->
        <span>REFERENCE:</span>
        <p><?php
        $fc_id = $node->field_data_source['und'][0]['value'];
        $fc = field_collection_item_load($fc_id);
         if(!empty(return_data_source($node))) { if($fc->field_source_name['und'][0]['tid'] == 2345){
                $ob_id = $fc->field_object_id[LANGUAGE_NONE][0]['value'];
                $node_bilio = node_load($ob_id);
                $node_view = node_view($node_bilio,'teaser');
                $rendered_node = drupal_render($node_view);
                echo $rendered_node;
              }else{
                echo return_data_source_fc($node);                
                  }
               }else{ echo "N/A"; }?><!-- PubMED (PMID) (&#60;51) --></p>
        <!-- <span>REFERENCE SOURCE:</span>
        <p><?php if(!empty(return_data_source_source($node))) { echo return_data_source_source($node); } else{ echo "N/A"; }?></p>
        <span>PUBLICATION ID:</span>
        <p><?php if(!empty(return_data_source_id($node))) { echo return_data_source_id($node); } else{ echo "N/A"; } ?></p> -->
        <!-- DB:Reference -->
        <!-- <span>CITATIONS:</span>
        <?php echo return_db_ref($node); ?> -->
        <!-- <p>PubMED, PMID:20003448192</p>
        <p>TAIR, locus:2758934</p> -->
        <!-- <span>SOURCE NAME:</span>
        <p>The Arabidopsis Information Resource (&#60;14)</p> -->
        <span>ASSIGNED BY:</span>
        <p><?php if(isset($node->field_assigned_by['und'][0]['value'])) { echo $node->field_assigned_by['und'][0]['value']; } else{ echo "N/A"; } ?><!-- Planteome: Ethan_Johnson (&#60;47) --></p>
        <span>CONTRIBUTOR(S):</span>
        <p><?php if(!empty(return_formatted_author($node))) { echo return_formatted_author($node); } else{ echo "N/A"; } ?><!-- Contributor 1 (&#60;60) --></p>
        <span>CURATOR(S):</span>
        <p><?php if(!empty(return_annotation_curators($node))) { echo return_annotation_curators($node); } else{ echo "N/A"; } ?><!-- Curator 1 (&#60;60) --></p>
        <!-- <span>PUBLICATIONS:</span>
            <?php
              if(count($node->field_publication) != 0){
            ?>
                <p><i>
            <?php 
                  $Publication = 0;
                  foreach ($node->field_publication['und'] as $value) {
                   // echo 'keyss'; print_r($key);
                    // echo "<pre>"; print_r($value); 
                    //print_r($node->field_publication['und'][$Publication]['entity']->nid);
                    if($node->field_publication['und'][$Publication]['entity']->nid){
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
            ?>
                </i></p>
            <?php
              } else {
            ?>
              <p>N/A</p>
            <?php
              }
            ?> -->
            <!-- <p><i> --><?php //echo "<pre>"; print_r($node->field_publication); exit(); -->
            // $Publication = 0;
            // foreach ($node->field_publication['und'] as $value) {
            //  // echo 'keyss'; print_r($key);
            //   // echo "<pre>"; print_r($value); 
            //   //print_r($node->field_publication['und'][$Publication]['entity']->nid);
            //   if($node->field_publication['und'][$Publication]['entity']->nid){
            //     $biblio_nid = $node->field_publication['und'][$Publication]['entity']->nid;
            //     $node_bilio = node_load($biblio_nid);
            //     $node_view = node_view($node_bilio,'teaser');
            //     $rendered_node = drupal_render($node_view);
            //     echo $rendered_node;
            //   }else{
            //      echo "N/A";          
            //   }
            //   $Publication++;
            // }
            // if(isset($node->field_publication['und'][0]['entity']->nid)){ echo $node->field_publication['und'][0]['entity']->title; } else{ echo "N/A"; } 
            ?>
              
            <!-- </i> --><!-- Arabidopsis Thaliana (&#60;120)</p>
        <span>LAST UPDATED ON:</span>
        <p><?php if(isset($node->changed)) { echo date('l, F d, Y', $node->changed); } else{ echo "N/A"; } ?><!--  (&#60;40) --></p>
      </div>
    </div>

      <div class="col-md-6 col-sm-6 annotation-right-sec">
        <div class="right-content-border">
          <h3>Other Annotations <br>for this Gene</h3>
          <?php print views_embed_view('annotations_from_gene','block', $node->field_gene['und'][0]['target_id']); ?>
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
      <div class="col-md-6 col-sm-6 annotation-right-sec">
        <div class="right-content-border">
          <h3>Paralogous Genes (Under Construction)</h3>
          <ol>
            <li><p>Gene Name | <span>Gene Symbol</span></p><a href=""><span>coming soon - under construction</span></a></li>
            <li><p>Gene Name | <span>Gene Symbol</span></p><a href=""><span>coming soon - under construction</span></a></li>
            <li><p>Gene Name | <span>Gene Symbol</span></p><a href=""><span>coming soon - under construction</span></a></li>
            <li><p>Gene Name | <span>Gene Symbol</span></p><a href=""><span>coming soon - under construction</span></a></li>
            <li><p>Gene Name | <span>Gene Symbol</span></p><a href=""><span>coming soon - under construction</span></a></li>
            <p>...View all homologus genes</p>
          </ol>
        </div>
      </div>
      <div class="col-md-6 col-sm-6 annotation-right-sec">
        <div class="right-content-border">
          <h3>Orthologous Genes (Under Construction)</h3>
          <ol>
            <li><p>Gene Name | <span>Gene Symbol</span></p><a href=""><span>coming soon - under construction</span></a></li>
            <li><p>Gene Name | <span>Gene Symbol</span></p><a href=""><span>coming soon - under construction</span></a></li>
            <li><p>Gene Name | <span>Gene Symbol</span></p><a href=""><span>coming soon - under construction</span></a></li>
            <li><p>Gene Name | <span>Gene Symbol</span></p><a href=""><span>coming soon - under construction</span></a></li>
            <li><p>Gene Name | <span>Gene Symbol</span></p><a href=""><span>coming soon - under construction</span></a></li>
            <p>...View all homologus genes</p>
          </ol>
        </div>
      </div>

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
              echo'<pre>';var_dump($node->field_publication);exit;
              $Publication++;
            }
            // if(isset($node->field_publication['und'][0]['entity']->nid)){ echo $node->field_publication['und'][0]['entity']->title; } else{ echo "N/A"; } 
          ?>
        </div>
      </div>
    </div>
    <?php print render($content['comments']); ?>
</div>
  <?php //print render($content['links']); ?>

  

