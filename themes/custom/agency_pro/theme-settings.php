<?php

/**
 * @file
 * Provides an additional config form for theme settings.
 */

use Drupal\Core\Extension\Extension;
use Drupal\Core\Extension\ExtensionDiscovery;
use Drupal\system\Controller\ThemeController;
use Drupal\Core\Theme\ThemeManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Drupal\Core\Form\FormStateInterface;
use Drupal\color\ColorSystemBrandingBlockAlter;
use \Drupal\paragraphs\Entity\Paragraph;

/**
 * Implements hook_form_system_theme_settings_alter() for settings form.
 * 
 */
function agency_pro_form_system_theme_settings_alter(array &$form, FormStateInterface $form_state) {
  /*Core theme  settings*/
  $form['pannel_color'] = array(
    '#type' => 'details',
    '#title' => t('Color Settings'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
    '#group' => 'visibility',
    '#open' => FALSE,
    '#weight' => -992,
  );
  $form['color_options'] = array(
  '#type' => 'value',
  '#value' => array('APPLICATION' => t('Application'),
                    'DEVELOPMENT' => t('Development'),
                    'ENHANCEMENT' => t('Enhancement'))
  );
  $form['pannel_color']['default_color'] = [
  '#type' => 'checkbox',
  '#title' => t('Use the Default Color'),
  '#default_value' => theme_get_setting('default_color'),
  '#tree' => FALSE,
  ];
  $form['pannel_color']['color_settings'] = [
    '#type' => 'container',
    '#states' => [
      // Hide the logo settings when using the default logo.
      'invisible' => [
        'input[name="default_color"]' => ['checked' => TRUE],
      ],
    ],
  ];
  $form['pannel_color']['color_settings']['primary_color'] = [
    '#type' => 'color',
    '#title' => t('Select Primary Color'),
    '#default_value' => theme_get_setting('primary_color'),
  ];
  $form['pannel_color']['color_settings']['secondary_color'] = [
    '#type' => 'color',
    '#title' => t('Select Secondary Color'),
    '#default_value' => theme_get_setting('secondary_color'),
  ];
  /*Core theme  settings*/
  $form['logo']['#group'] = 'visibility';
  $form['logo']['#title'] = t('Logo Image');
  $form['logo']['#weight'] = -995;
  $form['favicon']['#group'] = 'visibility';
  $form['favicon']['#weight'] = -994;
  $form['logo']['#open'] = TRUE;
  $form['favicon']['#open'] = TRUE;
  unset($form['theme_settings']); 
  unset($form['bootstrap_barrio_source']); 

  $form['visibility'] = [
    '#type' => 'vertical_tabs',
    '#title' => t('Agency Pro Settings'),
    '#weight' => -999,
  ];
  //general settings 
  $form['general'] = [
    '#type' => 'details',
    '#title' => t('General Options'),
    '#weight' => -999,
    '#group' => 'visibility',
    '#open' => FALSE,
  ];
  //loader
  $form['general']['loader-stricky'] = array(
    '#type' => 'fieldset',
    '#title' => t('Page Pre-Loader'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  $form['general']['loader-stricky']['loader'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('For Pre-Loader'),
    '#default_value' => theme_get_setting('loader'),
  );
   // Header Style
   $form['header'] = [
    '#type' => 'details',
    '#title' => t('Header Options'),
    '#weight' => -998,
    '#group' => 'visibility',
    '#open' => FALSE,
  ];
  $form['header']['header_variation'] = [
    '#title' => 'Header', 
    '#type' => 'select',
    '#options' => array(
      'header-1' => 'Header Style 1',
      'header-2' => 'Header Style 2',
      'header-3' => 'Header Style 3',
    ),
    '#default_value' => theme_get_setting('header_variation'),
    '#description' => t('Please choose your prefered header style'),
  ];
  $form['header']['sticky'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Sticky menu'),
    '#default_value' => theme_get_setting('sticky'),
  );
  $form['header']['welcome_text'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Welcome Text'),
    '#default_value' => theme_get_setting('welcome_text'),
    '#description'   => t("Please enter text for welcome text shown in Header."),
  );

// Footer section
$form['footer'] = array(
  '#type' => 'details',
  '#title' => t('Footer Options'),
  '#collapsible' => TRUE,
  '#collapsed' => FALSE,
  '#group' => 'visibility',
  '#weight' => -997,
);
$form['footer']['footer_logo'] = array(
'#type' => 'managed_file',
'#title'    => t('Footer Logo'),
'#default_value' => theme_get_setting('footer_logo'),
'#upload_location' => 'public://',
'#description' => t('Upload your site logo to show in footer.'),
);
$form ['footer']['copyrights'] = array(
  '#type'          => 'text_format',
  '#title'         => t('Copyrights'),
  '#default_value' => theme_get_setting('copyrights')['value'],
  '#description'   => t("Please enter your coptrights content here."),
  );
$form['footer']['copyrights_link'] = array(
  '#type'          => 'textfield',
  '#title'         => t('Copyrights Link'),
  '#default_value' => theme_get_setting('copyrights_link'),
  '#description'   => t("Please enter text for Copyrights Link to shown in Footer."),
);
$form['footer']['copyrights_text'] = array(
  '#type'          => 'textfield',
  '#title'         => t('Copyrights Link Text'),
  '#default_value' => theme_get_setting('copyrights_text'),
  '#description'   => t("Please enter text for Copyrights Link Text to shown in Footer."),
);
// custom css Section Start
$form['custom_css'] = array(
  '#type' => 'details',
  '#title' => t('Custom CSS'),
  '#collapsible' => TRUE,
  '#collapsed' => FALSE,
  '#group' => 'visibility',
  '#open' => FALSE,
  '#weight' => -993,
);
$form['custom_css']['styles'] = array(
  '#type'          => 'textarea',
  '#title'         => t('Custom Style'),
  '#default_value' => theme_get_setting('styles'),
  '#description'   => t("Place your custom style for your site."),
);

// SEARCH RESULT PAGE
$form['general']['search'] = array(
  '#type' => 'details',
  '#title' => t('Search Result Page'),
  '#collapsible' => TRUE,
  '#collapsed' => FALSE,
);  
$form['general']['search']['search_banner_img'] = array(
  '#type' => 'managed_file',
  '#title'    => t('Banner Image'),
  '#default_value' => theme_get_setting('search_banner_img'),
  '#upload_location' => 'public://',
  '#description' => t('Upload image for search result page banner.'),
); 
$form['general']['search']['search_banner_title'] = array(
  '#type'          => 'textfield',
  '#title'         => t('Banner Title'),
  '#default_value' => theme_get_setting('search_banner_title'),
  '#description'   => t("Please enter title for search result page banner."),
);  
// Login page 
$form['general']['login'] = array(
  '#type' => 'details',
  '#title' => t('Login Page Settings'),
  '#collapsible' => TRUE,
  '#collapsed' => FALSE,
);
$form['general']['login']['login_banner_title'] = array(  
  '#type'          => 'textfield',
  '#title'         => t('Banner Title'),
  '#default_value' => theme_get_setting('login_banner_title'),
  '#description'   => t("Please enter the banner title of Login Page."),
);
// $form['general']['login']['login_banner_img'] = array(  
//   '#type'          => 'textfield',
//   '#title'         => t('Banner Image'),
//   '#default_value' => theme_get_setting('login_banner_img'),
//   '#description'   => t("Please enter the Login Banner Image Path."),
// );

$form['general']['login']['login_banner_img'] = array(
  '#type' => 'managed_file',
  '#title'    => t('Login Banner Image'),
  '#default_value' => theme_get_setting('login_banner_img'),
  '#upload_location' => 'public://',
  '#description'   => t("Please enter the banner image Login page."),
);
$form['general']['login']['login_title'] = array(
  '#type'          => 'textfield',
  '#title'         => t('Page Title'),
  '#default_value' => theme_get_setting('login_title'),
  '#description'   => t("Please enter the title for Login page."),
);
$form['general']['login']['login_name_description'] = array(
  '#type'          => 'textfield',
  '#title'         => t('Name field description'),
  '#default_value' => theme_get_setting('login_name_description'),
  '#description'   => t("Please enter the description for name field in Login page."),
);
$form['general']['login']['login_password_description'] = array(
  '#type'          => 'textfield',
  '#title'         => t('Password field description'),
  '#default_value' => theme_get_setting('login_password_description'),
  '#description'   => t("Please enter the description for password field in Login page."),
);
// Register page 
$form['general']['register'] = array(
  '#type' => 'details',
  '#title' => t('Register Page Settings'),
  '#collapsible' => TRUE,
  '#collapsed' => FALSE,
);
$form['general']['register']['register_banner_title'] = array(
  '#type'          => 'textfield',
  '#title'         => t('Banner Title'),
  '#default_value' => theme_get_setting('register_banner_title'),
  '#description'   => t("Please enter the title of Register page banner."),
);
// $form['general']['register']['register_banner_img'] = array(  
//   '#type'          => 'textfield',
//   '#title'         => t('Register Banner Image'),
//   '#default_value' => theme_get_setting('register_banner_img'),
//   '#description'   => t("Please enter the Register Banner Image Path."),
// );
$form['general']['register']['register_banner_img'] = array(
  '#type' => 'managed_file',
  '#title'    => t('Register Banner Image'),
  '#default_value' => theme_get_setting('register_banner_img'),
  '#upload_location' => 'public://',
  '#description'   => t("Please enter the banner image Register page."),
);
$form['general']['register']['register_title'] = array(
  '#type'          => 'textfield',
  '#title'         => t('Title'),
  '#default_value' => theme_get_setting('register_title'),
  '#description'   => t("Please enter the title of the Register page."),
);
// Reset password page 
$form['general']['reset_pass'] = array(
  '#type' => 'details',
  '#title' => t('Reset Password Page Settings'),
  '#collapsible' => TRUE,
  '#collapsed' => FALSE,
);
$form['general']['reset_pass']['reset_banner_title'] = array(
  '#type'          => 'textfield',
  '#title'         => t('Banner Title'),
  '#default_value' => theme_get_setting('reset_banner_title'),
  '#description'   => t("Please enter the Reset Password Page banner title."),
);
$form['general']['reset_pass']['resetpassword_banner_img'] = array(
  '#type' => 'managed_file',
  '#title'    => t('Banner Image'),
  '#default_value' => theme_get_setting('resetpassword_banner_img'),
  '#upload_location' => 'public://',
  '#description'   => t("Please enter the banner image of Reset Password Page."),
);
$form['general']['reset_pass']['reset_page_title'] = array(
  '#type'          => 'textfield',
  '#title'         => t('Page Title'),
  '#default_value' => theme_get_setting('reset_page_title'),
  '#description'   => t("Please enter the title of the Reset Password page."),
);
 // 404 and 403 page 
 $form['general']['error_page'] = array(
  '#type' => 'details',
  '#title' => t('404 and 403 Page Settings'),
  '#collapsible' => TRUE,
  '#collapsed' => FALSE,
);
// 403 page
$form['general']['error_page']['403_page'] = array(
  '#type'          => 'details',
  '#title'         => t('403 Page Details'),
  '#collapsible' => TRUE,
  '#collapsed' => FALSE,
);
$form['general']['error_page']['403_page']['page_403_banner_title'] = array(
  '#type'          => 'textfield',
  '#title'         => t('Banner Title'),
  '#default_value' => theme_get_setting('page_403_banner_title'),
  '#description'   => t("Please Enter the Banner title to be shown in 403 page."), 
);
$form['general']['error_page']['403_page']['page_403_title'] = array(
  '#type'          => 'textfield',
  '#title'         => t('Title'),
  '#default_value' => theme_get_setting('page_403_title'),
  '#description'   => t("Please Enter the title to be shown in 403 page."), 
);
$form['general']['error_page']['403_page']['page_403_message_title'] = array(
  '#type'          => 'textfield',
  '#title'         => t('Message Title'),
  '#default_value' => theme_get_setting('page_403_message_title'),
  '#description'   => t("Please Enter the Message title to be shown in 403 page."), 
);
$form['general']['error_page']['403_page']['page_403_banner_img'] = array(
  '#type' => 'managed_file',
  '#title'    => t('Banner Image'),
  '#default_value' => theme_get_setting('page_403_banner_img'),
  '#upload_location' => 'public://',
  '#description'   => t("Please Choose the image for 403 page Banner."),
  '#upload_validators' => array(
    'file_validate_extensions' => array('gif png jpg jpeg'),
  ),
);
$form['general']['error_page']['403_page']['page_403_img'] = array(
  '#type' => 'managed_file',
  '#title'    => t('403 Image'),
  '#default_value' => theme_get_setting('page_403_img'),
  '#upload_location' => 'public://',
  '#description'   => t("Please Choose the image for 403 page."),
  '#upload_validators' => array(
    'file_validate_extensions' => array('gif png jpg jpeg'),
  ),
);
$form['general']['error_page']['403_page']['page_403_description'] = array(
  '#type'          => 'textarea',
  '#title'         => t('Description'),
  '#default_value' => theme_get_setting('page_403_description'),
  '#description'   => t("Please enter the description to be shown in 403 page."), 
);
$form['general']['error_page']['403_page']['page_403_button'] = array(
  '#type'          => 'textfield',
  '#title'         => t('Button Text'),
  '#default_value' => theme_get_setting('page_403_button'),
  '#description'   => t("Please enter the button (return to home page) text to be shown in 403 page."), 
);
// 404 page
$form['general']['error_page']['404_page'] = array(
  '#type'          => 'details',
  '#title'         => t('404 Page Details'),
  '#collapsible' => TRUE,
  '#collapsed' => FALSE,
);
$form['general']['error_page']['404_page']['page_404_banner_title'] = array(
  '#type'          => 'textfield',
  '#title'         => t('Banner Title'),
  '#default_value' => theme_get_setting('page_404_banner_title'),
  '#description'   => t("Please enter the banner title to be shown in 404 page."), 
);
$form['general']['error_page']['404_page']['page_404_img'] = array(
  '#type' => 'managed_file',
  '#title'    => t('404 Image'),
  '#default_value' => theme_get_setting('page_404_img'),
  '#upload_location' => 'public://',
  '#description'   => t("Please choose the image for 404 page."),
);
$form['general']['error_page']['404_page']['page_404_banner_img'] = array(
  '#type' => 'managed_file',
  '#title'    => t('Banner Image'),
  '#default_value' => theme_get_setting('page_404_banner_img'),
  '#upload_location' => 'public://',
  '#description'   => t("Please Choose the Banner image for 404 page."),
);
$form['general']['error_page']['404_page']['page_404_title'] = array(
  '#type'          => 'textfield',
  '#title'         => t('Title'),
  '#default_value' => theme_get_setting('page_404_title'),
  '#description'   => t("Please enter the title to be shown in 404 page."), 
);
$form['general']['error_page']['404_page']['page_404_title_message'] = array(
  '#type'          => 'textfield',
  '#title'         => t('Message Title'),
  '#default_value' => theme_get_setting('page_404_title_message'),
  '#description'   => t("Please enter the title Message to be shown in 404 page."), 
);
$form['general']['error_page']['404_page']['page_404_description'] = array(
  '#type'          => 'textarea',
  '#title'         => t('Description'),
  '#default_value' => theme_get_setting('page_404_description'),
  '#description'   => t("Please enter the description to be shown in 404 page."), 
);
$form['general']['error_page']['404_page']['page_404_button'] = array(
  '#type'          => 'textfield',
  '#title'         => t('Button Text'),
  '#default_value' => theme_get_setting('page_404_button'),
  '#description'   => t("Please enter the button (return to home page) text to be shown in 404 page."), 
);

 // Maintenance and coming soon Section Start
 $form['general']['maintenance_coming_soon'] = array(
  '#type' => 'details',
  '#title' => t('Maintenance Mode and Coming Soon Settings'),
  '#collapsible' => TRUE,
  '#collapsed' => FALSE,
);
$form['general']['maintenance_coming_soon']['mode_type'] = array(
  '#type'        => 'select',
  '#title'       => t('Mode Type'),
  '#options'     => ['1' => t('Maintenance Mode'),'2' => t('Coming Soon')],
  '#default_value' => theme_get_setting('mode_type'),
  '#description'   => t("Please select any one mode to change the content of Maintenance page. If Coming soon mode selected, while site under Maintenance, Coming Soon page content will be displayed"),
);
// Maintenace mode
$form['general']['maintenance_coming_soon']['maintenance_mode'] = array(
  '#type' => 'details',
  '#title' => t('Maintenance'),
  '#collapsible' => TRUE,
  '#collapsed' => FALSE,
);
$form['general']['maintenance_coming_soon']['maintenance_mode']['maintenance_mode_title'] = array(
  '#type'          => 'textfield',
  '#title'         => t('Title'),
  '#default_value' => theme_get_setting('maintenance_mode_title'),
  '#description'   => t("Please enter the title of Maintenance Page."),
);
$form['general']['maintenance_coming_soon']['maintenance_mode']['maintenance_mode_description'] = array(
  '#type'          => 'textarea',
  '#title'         => t('Description'),
  '#default_value' => theme_get_setting('maintenance_mode_description'),
  '#description'   => t("Please enter the description of Maintenance Page."),
);
$form['general']['maintenance_coming_soon']['maintenance_mode']['maintenance_img'] = [
  '#type' => 'managed_file',
  '#title'    => t('Maintenance Image'),
  '#default_value' => theme_get_setting('maintenance_img'),
  '#upload_location' => 'public://',
  '#description'   => t("Please Choose the image for Maintenance Page"),
  '#upload_validators' => array(
    'file_validate_extensions' => array('gif png jpg jpeg svg'),
  ),
];
$form['general']['maintenance_coming_soon']['maintenance_mode']['maintenance_logo'] = [
  '#type' => 'managed_file',
  '#title'    => t('Maintenance LOGO'),
  '#default_value' => theme_get_setting('maintenance_logo'),
  '#upload_location' => 'public://',
  '#description'   => t("Please Choose the LOGO Image for Maintenance Page"),
  '#upload_validators' => array(
    'file_validate_extensions' => array('gif png jpg jpeg svg'),
  ),
];
// Comming soon
$form['general']['maintenance_coming_soon']['coming_soon'] = array(
  '#type' => 'details',
  '#title' => t('Coming Soon'),
  '#collapsible' => TRUE,
  '#collapsed' => FALSE,
);
$form['general']['maintenance_coming_soon']['coming_soon']['coming_soon_title'] = array(
  '#type'          => 'textfield',
  '#title'         => t('Title'),
  '#default_value' => theme_get_setting('coming_soon_title'),
  '#description'   => t("Please enter the title of Coming soon Page."),
);
$form['general']['maintenance_coming_soon']['coming_soon']['coming_soon_description'] = array(
  '#type'          => 'textarea',
  '#title'         => t('Description'),
  '#default_value' => theme_get_setting('coming_soon_description'),
  '#description'   => t("Please enter the description of Coming soon Page."),
);
$form['general']['maintenance_coming_soon']['coming_soon']['launch_date'] = [
  '#type' => 'date',
  '#title' => t('Launch Date'),
  '#description' => t('Please enter the date of site coming to alive, This date will be displayed in Coming soon page.'),
  '#default_value' => theme_get_setting('launch_date'),
];
$form['general']['maintenance_coming_soon']['coming_soon']['coming_soon_img'] = [
  '#type' => 'managed_file',
  '#title'    => t('Background Image'),
  '#default_value' => theme_get_setting('coming_soon_img'),
  '#upload_location' => 'public://',
  '#description' => t('Choose background image for Coming Soon page.'),
  '#upload_validators' => array(
    'file_validate_extensions' => array('gif png jpg jpeg svg'),
  ),
];
$form['general']['maintenance_coming_soon']['coming_soon']['coming_soon_logo_img'] = [
  '#type' => 'managed_file',
  '#title'    => t('Coming soon logo Image'),
  '#default_value' => theme_get_setting('coming_soon_logo_img'),
  '#upload_location' => 'public://',
  '#description' => t('Choose coming soon logo image for Coming Soon page.'),
  '#upload_validators' => array(
    'file_validate_extensions' => array('gif png jpg jpeg svg'),
  ),
];

$form['#submit'][] = 'agency_pro_form_submit';
}

function agency_pro_form_submit(&$form, $form_state) {
  if ($file_id = $form_state->getValue(['page_403_img', '0'])) {
    $file = \Drupal::entityTypeManager()->getStorage('file')->load($file_id);
    $file->setPermanent();
    $file->save();
  }
  if ($file_id = $form_state->getValue(['page_403_banner_img', '0'])) {
    $file = \Drupal::entityTypeManager()->getStorage('file')->load($file_id);
    $file->setPermanent();
    $file->save();
  }
  if ($file_id = $form_state->getValue(['page_404_img', '0'])) {
    $file = \Drupal::entityTypeManager()->getStorage('file')->load($file_id);
    $file->setPermanent();
    $file->save();
  }
  if ($file_id = $form_state->getValue(['page_404_banner_img', '0'])) {
    $file = \Drupal::entityTypeManager()->getStorage('file')->load($file_id);
    $file->setPermanent();
    $file->save();
  }
  if ($file_id = $form_state->getValue(['maintenance_img', '0'])) {
    $file = \Drupal::entityTypeManager()->getStorage('file')->load($file_id);
    $file->setPermanent();
    $file->save();
  }
  if ($file_id = $form_state->getValue(['maintenance_logo', '0'])) {
    $file = \Drupal::entityTypeManager()->getStorage('file')->load($file_id);
    $file->setPermanent();
    $file->save();
  }
  if ($file_id = $form_state->getValue(['coming_soon_img', '0'])) {
    $file = \Drupal::entityTypeManager()->getStorage('file')->load($file_id);
    $file->setPermanent();
    $file->save();
  }
  if ($file_id = $form_state->getValue(['coming_soon_logo_img', '0'])) {
    $file = \Drupal::entityTypeManager()->getStorage('file')->load($file_id);
    $file->setPermanent();
    $file->save();
  }
  if ($file_id = $form_state->getValue(['login_banner_img', '0'])) {
    $file = \Drupal::entityTypeManager()->getStorage('file')->load($file_id);
    $file->setPermanent();
    $file->save();
  }
  if ($file_id = $form_state->getValue(['search_banner_img', '0'])) {
    $file = \Drupal::entityTypeManager()->getStorage('file')->load($file_id);
    $file->setPermanent();
    $file->save();
  }
  if ($file_id = $form_state->getValue(['register_banner_img', '0'])) {
    $file = \Drupal::entityTypeManager()->getStorage('file')->load($file_id);
    $file->setPermanent();
    $file->save();
  }
  if ($file_id = $form_state->getValue(['resetpassword_banner_img', '0'])) {
    $file = \Drupal::entityTypeManager()->getStorage('file')->load($file_id);
    $file->setPermanent();
    $file->save();
  }
}
