<?php

use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Theme\ThemeSettings;
use Drupal\system\Form\ThemeSettingsForm;
use Drupal\Core\Form;

function s3v_form_system_theme_settings_alter(&$form, &$form_state) {
  // Theme Utilities.
  $form['s3v_settings'] = [
    '#type' => 'fieldset',
    '#title' => t('S3V Utilities'),
    '#collapsible' => FALSE,
    '#collapsed' => FALSE,
  ];

  $form['s3v_settings']['tabs'] = [
    '#type' => 'vertical_tabs',
  ];

  // Base unit settings.
  $form['s3v_settings']['base_unit_tab'] = [
    '#type' => 'details',
    '#title' => t('Base unit settings'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#group' => 'tabs',
  ];

  $form['s3v_settings']['base_unit_tab']['base_unit_value'] = [
    '#type' => 'number',
    '#title' => t('Base unit settings'),
    '#default_value'  => theme_get_setting('base_unit_value'),
    '#description' => t('The Base unit settings provide a base font size. Recommended setting: 16px'),
    '#size' => 20,
    '#maxlength' => 20,
  ];

  // Default font settings.
  $form['s3v_settings']['web_font_tab'] = [
    '#type' => 'details',
    '#title' => t('Default font settings'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#group' => 'tabs',
  ];

  $form['s3v_settings']['web_font_tab']['web_font_import'] = [
    '#type' => 'textfield',
    '#title' => t('Import web font'),
    '#default_value'  => theme_get_setting('web_font_import'),
    '#description' => t('Import fonts from web font providers like Google fonts. These fonts are hosted by the provider so all you need to do is add the URL of the font.'),
  ];

  // Color settings.
  $form['s3v_settings']['color_tab'] = [
    '#type' => 'details',
    '#title' => t('Color settings'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#group' => 'tabs',
  ];

  $form['s3v_settings']['color_tab']['primary_color'] = [
    '#type' => 'color',
    '#title' => t('Primary color'),
    '#default_value'  => theme_get_setting('primary_color'),
    '#description' => t('Choose color that applies to body as primary text color.'),
  ];

  $form['s3v_settings']['color_tab']['secondary_color'] = [
    '#type' => 'color',
    '#title' => t('Secondary color'),
    '#default_value'  => theme_get_setting('secondary_color'),
    '#description' => t('Choose color that applies to body as secondary text color.'),
  ];

  $form['s3v_settings']['color_tab']['link_color'] = [
    '#type' => 'color',
    '#title' => t('Link color'),
    '#default_value'  => theme_get_setting('link_color'),
    '#description' => t('Choose color that applies to the link element(anchor tag).'),
  ];

  $form['s3v_settings']['color_tab']['header_color'] = [
    '#type' => 'color',
    '#title' => t('Header background color'),
    '#default_value'  => theme_get_setting('header_color'),
    '#description' => t('If you want header with background color then choose color that applies to the top header.'),
  ];

  $form['s3v_settings']['color_tab']['footer_color'] = [
    '#type' => 'color',
    '#title' => t('Footer background color'),
    '#default_value'  => theme_get_setting('footer_color'),
    '#description' => t('If you want footer with background color then choose color that applies to the footer.'),
  ];

  // Layout settings.
  $form['s3v_settings']['layout_option_tab'] = [
    '#type' => 'details',
    '#title' => t('Layout option'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#group' => 'tabs',
  ];

  $form['s3v_settings']['layout_option_tab']['layout_option'] = [
    '#type' => 'select',
    '#title' => t('Select layout'),
    '#default_value' => theme_get_setting('layout_option'),
    '#description' => t('Choose page layout option. By default its Fluid.'),
    '#options' => [
      'fixed-layout' => t('Fixed'),
      'fluid-layout' => t('Fluid'),
    ],
  ];

  $form['s3v_settings']['layout_option_tab']['minimum_width'] = [
    '#type' => 'number',
    '#title' => t('Minimum width'),
    '#default_value' => theme_get_setting('minimum_width'),
    '#description' => t('This sets the minimum width that any settings or styles for that breakpoint will apply.'),
    '#size' => 20,
    '#maxlength' => 20,
  ];

  $form['s3v_settings']['layout_option_tab']['inner_gutter'] = [
    '#type' => 'number',
    '#title' => t('Inner gutter'),
    '#default_value' => theme_get_setting('inner_gutter'),
    '#description' => t('This sets the gap between columns in your layout.'),
    '#size' => 20,
    '#maxlength' => 20,
  ];

  $form['s3v_settings']['layout_option_tab']['outer_gutter'] = [
    '#type' => 'number',
    '#title' => t('Outer gutter'),
    '#default_value' => theme_get_setting('outer_gutter'),
    '#description' => t('This sets a gutter to the outside of your layout so that the browser edges never touch the edge of your layout.'),
    '#size' => 20,
    '#maxlength' => 20,
  ];

  // Social connect settings.
  $form['s3v_settings']['social_connect'] = [
    '#type' => 'details',
    '#title' => t('Social connect'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#group' => 'tabs',
  ];

  $form['s3v_settings']['social_connect']['social_facebook'] = [
    '#type' => 'textfield',
    '#title' => t('Facebook'),
    '#default_value' => theme_get_setting('social_facebook'),
    '#description' => t('Facebook page/profile URL.'),
  ];

  $form['s3v_settings']['social_connect']['social_googleplus'] = [
    '#type' => 'textfield',
    '#title' => t('Google+'),
    '#default_value' => theme_get_setting('social_googleplus'),
    '#description' => t('Google+ page/profile URL.'),
  ];

  $form['s3v_settings']['social_connect']['social_linkedin'] = [
    '#type' => 'textfield',
    '#title' => t('LinkedIn'),
    '#default_value' => theme_get_setting('social_linkedin'),
    '#description' => t('LinkedIn page/profile URL.'),
  ];

  $form['s3v_settings']['social_connect']['social_twitter'] = [
    '#type' => 'textfield',
    '#title' => t('Twitter'),
    '#default_value' => theme_get_setting('social_twitter'),
    '#description' => t('Twitter username (no @).'),
  ];

  $form['s3v_settings']['social_connect']['social_youtube'] = [
    '#type' => 'textfield',
    '#title' => t('Youtube'),
    '#default_value' => theme_get_setting('social_youtube'),
    '#description' => t('YouTube URL.'),
  ];

  // Footer copyright settings.
  $form['s3v_settings']['footer_tab'] = [
    '#type' => 'details',
    '#title' => t('Footer copyright'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#group' => 'tabs',
  ];

  $form['s3v_settings']['footer_tab']['footer_copyright_text'] = [
    '#type' => 'textfield',
    '#title' => t('Enter copyright text'),
    '#default_value'  => theme_get_setting('footer_copyright_text'),
    '#description' => t('The copyright text that appears in the footer. Use @year placeholder for define current year.'),
  ];
}
