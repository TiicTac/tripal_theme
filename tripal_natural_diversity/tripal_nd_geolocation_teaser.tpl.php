<?php
$node = $variables['node'];
$nd_geolocation = $variables['node']->nd_geolocation;

?>
<div id="tripal_nd_geolocation-base-box" class="tripal_nd_geolocation-info-box tripal-info-box">
  <div class="tripal_nd_geolocation-info-box-title tripal-info-box-title">ND Geolocation Details</div>
  <div class="tripal_nd_geolocation-info-box-desc tripal-info-box-desc"></div>   

  <table id="tripal_nd_geolocation-table-base" class="tripal_nd_geolocation-table tripal-table tripal-table-vert">
    <tr class="tripal_nd_geolocation-table-odd-row tripal-table-odd-row">
      <th>ND Geolocation</th>
      <td><i><?php print $nd_geolocation->description; ?></i></td>
    </tr>
  </table> 
</div>
