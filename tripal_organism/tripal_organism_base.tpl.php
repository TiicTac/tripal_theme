<?php
$node = $variables['node'];
$organism = $variables['node']->organism;

// the comment field is a database text field so we have to expand it so that
// it is included in the organism object
$organism = tripal_core_expand_chado_vars($organism,'field','organism.comment');

 
?>
<div id="tripal_organism-base-box" class="tripal_organism-info-box tripal-info-box">
  <div class="tripal_organism-info-box-title tripal-info-box-title">Organism Details</div>
<!--  <div class="tripal_organism-info-box-desc tripal-info-box-desc"></div> --><?php  
  
  // first look for an image with the genus/species name.  This is old-style tripal
  // and we keep it for backwards compatibility.  If we don't find that file
  // then look for the image with the node ID in the name. If we don't find that then
  // no image tag is generated  
  $base_path = realpath('.');
  $image_dir = file_directory_path() . "/tripal/tripal_organism/images";
  $image_name =  $organism->genus . "_" . $organism->species . ".jpg";
  $image = '';
  if (file_exists("$base_path/$image_dir/$image_name")) { 
    $image = "<img src=\"" . file_create_url("$image_dir/$image_name") . "\">";
  } else {
     $image_name = $node->nid . ".jpg";
     if (file_exists("$base_path/$image_dir/$image_name")) { 
       $image = "<img src=\"" . file_create_url("$image_dir/$image_name") . "\">"; 
     }  
  } ?>  
  <table id="tripal_organism-table-base" class="tripal_organism-table tripal-table tripal-table-vert">
    <tr class="tripal_organism-table-even-row tripal-table-even-row">
      <th>Common Name</th>
      <td><?php print $organism->common_name; ?></td>
    </tr>
    <tr class="tripal_organism-table-odd-row tripal-table-odd-row">
      <th>Genus</th>
      <td><i><?php print $organism->genus; ?></i></td>
    </tr>
    <tr class="tripal_organism-table-even-row tripal-table-even-row">
      <th>Species</th>
      <td><i><?php print $organism->species; ?></i></td>
    </tr>
    <tr class="tripal_organism-table-odd-row tripal-table-odd-row">
      <th>Abbreviation</th>
      <td><?php print $organism->abbreviation; ?></td>
    </tr>
    <tr class="tripal_organism-table-even-row tripal-table-even-row">      
      <td style="text-align:justify;" colspan="2"><?php print $image; print $organism->comment; ?></td>
    </tr>
  </table> 
</div>
