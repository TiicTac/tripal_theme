<?php
$node = $variables['node'];
$nd_geolocation = $variables['node']->nd_geolocation;
?>
<div id="tripal_nd_geolocation-base-box" class="tripal_nd_geolocation-info-box tripal-info-box">
  <div class="tripal_nd_geolocation-info-box-title tripal-info-box-title">ND Geolocation Details</div>
  <div class="tripal_nd_geolocation-info-box-desc tripal-info-box-desc"></div>   

  <table id="tripal_nd_geolocation-table-base" class="tripal_nd_geolocation-table tripal-table tripal-table-vert">
    <tr class="tripal_nd_geolocation-table-even-row tripal-table-even-row">
      <th>ND Geolocation</th>
      <td><?php print $nd_geolocation->description; ?></td>
    </tr>
    <tr class="tripal_nd_geolocation-table-odd-row tripal-table-odd-row">
      <th>Latitude</th>
      <td><?php print $nd_geolocation->latitude?></td>
    </tr>
    <tr class="tripal_nd_geolocation-table-even-row tripal-table-even-row">
      <th>Longitude</th>
      <td><?php print $nd_geolocation->longitude?></td>
    </tr>
        <tr class="tripal_nd_geolocation-table-odd-row tripal-table-odd-row">
      <th>Altitude</th>
      <td><?php print $nd_geolocation->altitude?></td>
    </tr>
        <tr class="tripal_nd_geolocation-table-even-row tripal-table-even-row">
      <th>Geodetic Datum</th>
      <td><?php print $nd_geolocation->geodetic_datum?></td>
    </tr>
  </table> 
</div>
