<?php

/**
 * Implementation of THEMEHOOK_settings() function.
 *
 * @param $saved_settings
 *   array An array of saved settings for this theme.
 * @return
 *   array A form array.
 */
function tripal_settings($saved_settings) {
  $form = array();
  
  // Create the form widgets using Forms API
  $templates = array(
     'organism' => 'Organism',
     'feature'  => 'Feature',
     'analysis' => 'Analysis',
     'stock'    => 'Stock',
     'library'  => 'Library',
     'pub'      => 'Publication',
     'contact'  => 'Contact',
     'project'  => 'Project',     
  );
  $form['tripal_no_sidebar'] = array(
    '#type' => 'checkboxes',
    '#title' => t('Templates without resources sidebars'),
    '#default_value' => $saved_settings['tripal_no_sidebar'],
    '#options' => $templates,
    '#description' => t("Select the template types that should not have a 
       right resources sidebar.  If checked, the sidebar will disappear and
       all content will appear stacked on the page"),
  );
  
  $form['tripal_feature_no_sidebar'] = array(
    '#type' => 'textarea',
    '#title' => t('Feature Types without resources sidebars'),
    '#default_value' => $saved_settings['tripal_feature_no_sidebar'],
    '#description' => t("For some features with few content, resource side bars may not be wanted. Specify the feature types for which side bars should not be used. Please place each type on a separate line."),
  );
  
  return $form;
}
