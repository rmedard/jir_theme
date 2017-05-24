<?php
/**
 * Custom Galeria Template settings
 */
 
/**
 * page alter
 */
function consilium_page_alter(&$vars) {
	
	// Add custom varibales for scss
	$theme = superhero_get_theme();
	$theme->custom['header_height'] = theme_get_setting('superhero_header_height');
	$theme->custom['header_fixed_height'] = theme_get_setting('superhero_header_fixed_height');
  
	// Remove content from front page
	/*
	if (drupal_is_front_page()) {
		unset($vars['data']['content']);
	}*/
}

/**
 * Implement hook_breadcrumd
 */
function consilium_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];

  if (!empty($breadcrumb)) {
    // Provide a navigational heading to give context for breadcrumb links to
    // screen-reader users. Make the heading invisible with .element-invisible.
    //$output = '<span class="showHere left">' . t('You are here') . '</span>';

    $output = '<div class="breadcrumb"><span class="showHere left">' . t('You are here:') . '</span> ' . implode(' <span class="fa fa-angle-right"></span> ', $breadcrumb) . '</div>';
    return $output;
  }
}
//Custom codes

function consilium_node_preview($variables) {
  $node = $variables['node'];
  $elements = node_view($node, 'full');
  $full = drupal_render($elements);
  $output = '<div class="preview">';
  $output .= '<h3 class="post-preview" >' . t('Preview of your posting') . '</h3>';
  $output .= $full;
  $output .= "</div>\n";
  return $output;
}

// Remove Query Strings from CSS filenames (CacheBuster)
function consilium_process_html(&$variables) {
  $variables['styles'] = preg_replace('/\.css\?.*"/','.css"', $variables['styles']);
}

function consilium_menu_local_task($variables) {
    $link = $variables['element']['#link'];
    $link_text = $link['title'];

    if (!empty($variables['element']['#active'])) {
        // Add text to indicate active tab for non-visual users.
        $active = '<span class="element-invisible">' . t('(active tab)') . '</span>';

        // If the link does not contain HTML already, check_plain() it now.
        // After we set 'html'=TRUE the link will not be sanitized by l().
        if (empty($link['localized_options']['html'])) {
            $link['title'] = check_plain($link['title']);
        }
        $link['localized_options']['html'] = TRUE;
        $link_text = t('!local-task-title!active', array('!local-task-title' => $link['title'], '!active' => $active));
    }

    if (empty($link['localized_options']['html'])) {
        $link['title'] = check_plain($link['title']);
    }

    if ($variables['element']['#link']['path'] == 'jobs/featured' ){

    }else if ($variables['element']['#link']['path'] == 'jobs/all' ){

    }else if ($variables['element']['#link']['path'] == 'jobs/tender' ){

    }else if ($variables['element']['#link']['path'] == 'jobs/internships' ){

    }else if ($variables['element']['#link']['path'] == 'jobs/others' ){

    }else if ($variables['element']['#link']['path'] == 'jobs/public-adverts' ){

    }else if ($variables['element']['#link']['path'] == 'jobs/search-result' ){

    }
    return '<li' . (!empty($variables['element']['#active']) ? ' class="active"' : '') . '>' . l($link_text, $link['href'], $link['localized_options']) . '</li>';
}