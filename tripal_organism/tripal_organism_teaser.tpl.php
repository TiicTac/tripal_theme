<?php
$node = $variables['node'];
$organism = $variables['node']->organism;

// first look for an image with the genus/species name.  This is old-style tripal
// and we keep it for backwards compatibility.  If we don't find that file
// then look for the image with the node ID in the name. If we don't find that then
// no image tag is generated  
$base_path = realpath('.');
$image_dir = file_directory_path() . "/tripal/tripal_organism/images";
$image_name =  $organism->genus . "_" . $organism->species . ".jpg";
if (file_exists("$base_path/$image_dir/$image_name")) { 
  $image_url = file_create_url("$image_dir/$image_name");  
} else {
  $image_name = $node->nid . ".jpg";
  if (file_exists("$base_path/$image_dir/$image_name")) { 
    $image_url = file_create_url("$image_dir/$image_name");
  }  
} 
?>

<div style="clear:both">
<a href="<?php print url("node/" . $node->nid) ?>"><?php print $organism->genus. " " . $organism->species . ", " . $organism->common_name; ?></a>
<img src="<?php print $image_url ?>" width="100px" height="100px" style="float: left; padding-right: 10px; padding-bottom: 5px;">   
<?php print $organism->comment; ?>
</div>
