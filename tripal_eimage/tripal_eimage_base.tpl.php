<?php
$node = $variables['node'];
$eimage = $variables['node']->eimage;
?>
<div id="tripal_eimage-base-box" class="tripal_eimage-info-box tripal-info-box">
  <div class="tripal_eimage-info-box-title tripal-info-box-title">Image Details</div>
  <div class="tripal_eimage-info-box-desc tripal-info-box-desc"></div>   

  <table id="tripal_eimage-table-base" class="tripal_eimage-table tripal-table tripal-table-vert">
    <tr class="tripal_eimage-table-even-row tripal-table-even-row">
      <th>Image URI</th>
      <td><?php print $eimage->image_uri; ?></td>
    </tr>
    <tr class="tripal_eimage-table-odd-row tripal-table-odd-row">
      <th>Type</th>
      <td><?php print $eimage->eimage_type?></td>
    </tr>
    <tr class="tripal_eimage-table-even-row tripal-table-even-row">
      <th>Data</th>
      <td><?php print $eimage->eimage_data?></td>
    </tr>
  </table> 
</div>
