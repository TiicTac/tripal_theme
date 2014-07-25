<?php
/* Typically in a Tripal template, the data needed is retrieved using a call to
 * tripal_core_expand_chado_vars function.  For example, to retrieve all 
 * of the feature relationships for this node, the following function call would be made:
 * 
 *   $feature = tripal_core_expand_chado_vars($feature,'table','feature_relationship');
 * 
 * However, this function call can be extremely slow when there are numerous relationships.
 * This is because the tripal_core_expand_chado_vars function is recursive and expands 
 * all data following the foreign key relationships tree.  Therefore, to speed retrieval
 * of data, a special variable is provided to this template:
 * 
 *   $feature->all_relationships;
 *   
 * This variable is an array with two sub arrays with the keys 'object' and 'subject'.  The array with
 * key 'object' contains relationships where the feature is the object, and the array with
 * the key 'subject' contains relationships where the feature is the subject
 */
$feature = $variables['node']->feature;

$all_relationships = $feature->all_relationships;
$object_rels = $all_relationships['object'];

// get the list of proteins in a 'derived_from' relationship
$proteins = array();
foreach ($object_rels as $rel_type => $rels){
  foreach ($rels as $subject_type => $subjects){
    if ($rel_type == 'derives from' and $subject_type == 'polypeptide') {
      $proteins = $subjects;
    }
  }
}

if (count($proteins) > 0) { ?>
  <div id="tripal_feature-proteins-box" class="tripal_feature-info-box tripal-info-box">
    <div class="tripal_feature-info-box-title tripal-info-box-title">Protein Sequence</div>
    <div class="tripal_feature-info-box-desc tripal-info-box-desc">This following proteins are derived from this <?php print $feature->type_id->name?></div> <?php
    // add the protein sequences
    foreach ($proteins as $subject){
      $protein = $subject->record->subject_id;
      $protein = tripal_core_expand_chado_vars($protein, 'field', 'feature.residues'); ?>
      <pre id="tripal_feature-sequence-residues"><?php 
      // format the sequence to break every 100 residues
      print ereg_replace("(.{60})","\\1<br>",$protein->residues); ?></pre> <?php
    } ?>
  </div> <?php
}
