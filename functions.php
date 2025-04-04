<?php

/**
 * This file adds functions to the Frost WordPress theme.
 *
 * @package Frost
 * @author  WP Engine
 * @license GNU General Public License v3
 * @link    https://frostwp.com/
 */

if (! function_exists('frost_setup')) {

  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   *
   * @since 0.8.0
   *
   * @return void
   */
  function frost_setup()
  {

    // Make theme available for translation.
    load_theme_textdomain('frost', get_template_directory() . '/languages');

    // Enqueue editor stylesheet.
    add_editor_style(get_template_directory_uri() . '/style.css');

    // Remove core block patterns.
    remove_theme_support('core-block-patterns');
  }
}
add_action('after_setup_theme', 'frost_setup');

// Enqueue stylesheet.
add_action('wp_enqueue_scripts', 'frost_enqueue_stylesheet');
function frost_enqueue_stylesheet()
{

  wp_enqueue_style('frost', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get('Version'));

  wp_enqueue_script(
    'frost-header-js',
    get_template_directory_uri() . '/assets/js/site-header.js',
    array(), // Add 'jquery' if needed
    wp_get_theme()->get('Version'),
    true // Load in footer
  );
}

/**
 * Register block styles.
 *
 * @since 0.9.2
 */
function frost_register_block_styles()
{

  $block_styles = array(
    'core/columns' => array(
      'columns-reverse' => __('Reverse', 'frost'),
    ),
    'core/group' => array(
      'shadow-light' => __('Shadow', 'frost'),
      'shadow-solid' => __('Solid', 'frost'),
    ),
    'core/list' => array(
      'no-disc' => __('No Disc', 'frost'),
    ),
    'core/quote' => array(
      'shadow-light' => __('Shadow', 'frost'),
      'shadow-solid' => __('Solid', 'frost'),
    ),
    'core/social-links' => array(
      'outline' => __('Outline', 'frost'),
    ),
  );

  foreach ($block_styles as $block => $styles) {
    foreach ($styles as $style_name => $style_label) {
      register_block_style(
        $block,
        array(
          'name'  => $style_name,
          'label' => $style_label,
        )
      );
    }
  }
}
add_action('init', 'frost_register_block_styles');

/**
 * Register block pattern categories.
 *
 * @since 1.0.4
 */
function frost_register_block_pattern_categories()
{

  register_block_pattern_category(
    'frost-page',
    array(
      'label'       => __('Page', 'frost'),
      'description' => __('Create a full page with multiple patterns that are grouped together.', 'frost'),
    )
  );
  register_block_pattern_category(
    'frost-pricing',
    array(
      'label'       => __('Pricing', 'frost'),
      'description' => __('Compare features for your digital products or service plans.', 'frost'),
    )
  );
}

add_action('init', 'frost_register_block_pattern_categories');

// External News

function create_external_news_cpt()
{
  $args = array(
    'label'               => __('External News'),
    'public'              => true,
    'has_archive'         => true,
    'show_in_rest'        => true,
    'supports'            => array('title', 'editor', 'excerpt', 'custom-fields'),
    'rewrite'             => array('slug' => 'external-news'),
    'menu_icon'           => 'dashicons-rss',
  );
  register_post_type('external_news', $args);
}
add_action('init', 'create_external_news_cpt');

function redirect_to_external_news_url()
{
  if (is_singular('external_news')) {
    $url = get_post_meta(get_the_ID(), 'external_url', true);
    if ($url) {
      wp_redirect($url);
      exit;
    }
  }
}
add_action('template_redirect', 'redirect_to_external_news_url');

add_action('acf/init', 'register_acf_fields_for_external_news');
function register_acf_fields_for_external_news()
{
  if (function_exists('acf_add_local_field_group')):

    acf_add_local_field_group(array(
      'key' => 'group_external_news_fields',
      'title' => 'External News Fields',
      'fields' => array(
        array(
          'key' => 'field_external_url',
          'label' => 'External URL',
          'name' => 'external_url',
          'type' => 'url',
          'instructions' => 'Paste the URL of the external article.',
          'required' => 1,
        ),
      ),
      'location' => array(
        array(
          array(
            'param' => 'post_type',
            'operator' => '==',
            'value' => 'external_news',
          ),
        ),
      ),
    ));

  endif;
}
