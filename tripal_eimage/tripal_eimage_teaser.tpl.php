<?php
$node = $variables['node'];
$eimage = $variables['node']->eimage;

?>
<div id="tripal_eimage-base-box" class="tripal_eimage-info-box tripal-info-box">
  <div class="tripal_eimage-info-box-title tripal-info-box-title">ND Geolocation Details</div>
  <div class="tripal_eimage-info-box-desc tripal-info-box-desc"></div>   

  <table id="tripal_eimage-table-base" class="tripal_eimage-table tripal-table tripal-table-vert">
    <tr class="tripal_eimage-table-odd-row tripal-table-odd-row">
      <th>Eimage</th>
      <td><i><?php print $eimage->image_uri; ?></i></td>
    </tr>
  </table> 
</div>
