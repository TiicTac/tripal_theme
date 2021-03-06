<?php
// Purpose: This template provides the layout of the stock node (page)
//   using the same templates used for the various stock content blocks.
//
// To Customize the Stock Node Page:
//   - This Template: customize basic layout and which elements are included
//   - Using Panels: Override the node page using Panels3 and place the blocks
//       of content as you please. This method requires no programming. See
//       the Tripal User Guide for more details
//   - Block Templates: customize the content/layout of each block of stock 
//       content. These templates are found in the tripal_stock subdirectory
//
// Variables Available:
//   - $node: a standard object which contains all the fields associated with
//       nodes including nid, type, title, taxonomy. It also includes stock
//       specific fields such as stock_name, uniquename, stock_type, synonyms,
//       properties, db_references, object_relationships, subject_relationships,
//       organism, etc.
//   NOTE: For a full listing of fields available in the node object the
//       print_r $node line below or install the Drupal Devel module which 
//       provides an extra tab at the top of the node page labelled Devel

drupal_add_css('./tripal-node-templates.css');
$stock = $variables['node']->stock;

// get the template settings
$template_settings = theme_get_settings('tripal');

// toggle the sidebar if desired
$no_sidebar = 0;
if (is_array($template_settings['tripal_no_sidebar']) and 
   $template_settings['tripal_no_sidebar']['stock']) {
  $no_sidebar = 1;
}

if ($teaser) { 
  print theme('tripal_stock_teaser',$node); 
} 
else { ?>

<script type="text/javascript">
   Drupal.behaviors.stockBehavior = function (context){ <?php 
      if ($no_sidebar) { ?>    
        // hide the resource side bar and strech the details section    
        $(".tripal_toc").hide();
        $(".tripal_details").addClass("tripal_details_full");
        $(".tripal_details_full").removeClass("tripal_details"); <?php
      } else { ?>
        // use default resource sidebar
        $(".tripal-info-box").hide(); <?php
      } ?>
 
      // iterate through all of the info boxes and add their titles
      // to the table of contents
      $(".tripal-info-box-title").each(function(){
        var parent = $(this).parent();
        var id = $(parent).attr('id');
        var title = $(this).text();
        $('#tripal_stock_toc_list').append('<li><a href="#'+id+'" class="tripal_stock_toc_item">'+title+'</a></li>');
      });

      // when a title in the table of contents is clicked, then
      // show the corresponding item in the details box
      $(".tripal_stock_toc_item").click(function(){
         $(".tripal-info-box").hide();
         href = $(this).attr('href');
         $(href).fadeIn('slow');
         // we want to make sure our table of contents and the details
         // box stay the same height
         $("#tripal_stock_toc").height($(href).parent().height());
         return false;
      }); 

      // we want the base details to show up when the page is first shown 
      // unless the user specified a specific block
      var block = window.location.href.match(/[\?|\&]block=(.+?)\&/)
      if(block == null){
         block = window.location.href.match(/[\?|\&]block=(.+)/)
      }
      if(block != null){
         $("#tripal_stock-"+block[1]+"-box").show();
      } else {
         $("#tripal_stock-base-box").show();
      }

      $("#tripal_stock_toc").height($("#tripal_stock-base-box").parent().height());
   };
</script>

<div id="tripal_stock_details" class="tripal_details">

  <!-- Base Theme -->
  <?php print theme('tripal_stock_base',$node); ?>

  <!-- Cross References -->
  <?php print theme('tripal_stock_references',$node); ?>

  <!-- Properties -->
  <?php print theme('tripal_stock_properties',$node); ?>

  <!-- Synonyms -->
  <?php print theme('tripal_stock_synonyms',$node); ?>

  <!-- Relationships -->
  <?php print theme('tripal_stock_relationships',$node); ?>
  
  <!-- Stock Collections -->
  <?php print theme('tripal_stock_collections',$node); ?>

  <!-- Stock Genotypes -->
  <?php print theme('tripal_stock_genotypes',$node); ?>

  <!-- Resource Blocks CCK elements --><?php
  for($i = 0; $i < count($node->field_resource_titles); $i++){
    if($node->field_resource_titles[$i]['value']){ ?>
      <div id="tripal_stock-resource_<?php print $i?>-box" class="tripal_stock-info-box tripal-info-box">
        <div class="tripal_stock-info-box-title tripal-info-box-title"><?php print $node->field_resource_titles[$i]['value'] ?></div>
        <?php print $node->field_resource_blocks[$i]['value']; ?>
      </div><?php
    }
  }?>
   
  <!-- Let modules add more content -->
	<?php print $content; ?>
</div>

<!-- Table of contents -->
<div id="tripal_stock_toc" class="tripal_toc">
   <div id="tripal_stock_toc_title" class="tripal_toc_title">Resources</div>
   <span id="tripal_stock_toc_desc" class="tripal_toc_desc"></span>
   <ul id="tripal_stock_toc_list" class="tripal_toc_list">
   
     <!-- Resource Links CCK elements --><?php
     for($i = 0; $i < count($node->field_resource_links); $i++){
       if($node->field_resource_links[$i]['value']){
         $matches = preg_split("/\|/",$node->field_resource_links[$i]['value']);?>
         <li><a href="<?php print $matches[1] ?>" target="_blank"><?php print $matches[0] ?></a></li><?php
       }
     }?>
     
     <?php // ADD CUSTOMIZED <li> LINKS HERE ?>
   </ul>
</div>
<?php } ?>
