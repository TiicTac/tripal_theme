<?php
$nd_geolocation = $node->nd_geolocation;

// expand the nd_geolocation to include the properties.
$nd_geolocation = tripal_core_expand_chado_vars($nd_geolocation,'table', 'nd_geolocationprop', array('return_array' => 1));

$nd_geolocationprops = $nd_geolocation->nd_geolocationprop;
if (!$nd_geolocationprops) {
  return;
}
$properties = array();
foreach ($nd_geolocationprops as $property) {
    $property = tripal_core_expand_chado_vars($property,'field','nd_geolocationprop.value');
    $properties[] = $property;
}

if (count($properties) > 0) { ?>
  <div id="tripal_nd_geolocation-properties-box" class="tripal_nd_geolocation-info-box tripal-info-box">
    <div class="tripal_nd_geolocation-info-box-title tripal-info-box-title">Properties</div>
    <div class="tripal_nd_geolocation-info-box-desc tripal-info-box-desc">Properties for this nd_geolocation include:</div>
    <table class="tripal_nd_geolocation-table tripal-table tripal-table-horz">
      <tr>
        <th>Property Name</th>
        <th>Value</th>
      </tr> <?php
      $i = 0;
      foreach ($properties as $property) {
        $class = 'tripal_nd_geolocation-table-odd-row tripal-table-odd-row';
        if ($i % 2 == 0 ) {
           $class = 'tripal_nd_geolocation-table-odd-row tripal-table-even-row';
        }
        $i++; 
        ?>
        <tr class="<?php print $class ?>">
          <td><?php print ucfirst(preg_replace('/_/', ' ', $property->type_id->name)) ?></td>
          <td><?php print $property->value ?></td>
        </tr><?php 
      } ?>
    </table>
  </div> <?php
}
