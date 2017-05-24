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
/*
function consilium_menu_local_task($variables) {
    $link = $variables['element']['#link'];
    $link_text = $link['title'];

    $view = views_get_view('all_jobs');
    $view->set_display('page_featured');
    $view->preview('page_featured');
    $featured = count($view->result);

    $view = views_get_view('all_jobs');
    $view->set_display('page_jobs');
    $view->preview('page_jobs');
    $alljobs = count($view->result);

    $view = views_get_view('all_jobs');
    $view->set_display('page_publicads');
    $view->preview('page_publicads');
    $publics = count($view->result);

    $view = views_get_view('all_jobs');
    $view->set_display('page_tenders');
    $view->preview('page_tenders');
    $tenders = count($view->result);

    $view = views_get_view('all_jobs');
    $view->set_display('page_internships');
    $view->preview('page_internships');
    $intern = count($view->result);

    $view = views_get_view('all_jobs');
    $view->set_display('page_others');
    $view->preview('page_others');
    $others = count($view->result);

    $counter_badge = '';

    if ($variables['element']['#link']['path'] == 'jobs/featured' ){
        $counter_badge = '<span class="badge">' . $featured . '</span>';
    }else if ($variables['element']['#link']['path'] == 'jobs/all' ){
        $counter_badge = '<span class="badge">' . $alljobs . '</span>';
    }else if ($variables['element']['#link']['path'] == 'jobs/tender' ){
        $counter_badge = '<span class="badge">' . $tenders . '</span>';
    }else if ($variables['element']['#link']['path'] == 'jobs/internships' ){
        $counter_badge = '<span class="badge">' . $intern . '</span>';
    }else if ($variables['element']['#link']['path'] == 'jobs/others' ){
        $counter_badge = '<span class="badge">' . $others . '</span>';
    }else if ($variables['element']['#link']['path'] == 'jobs/public-adverts' ){
        $counter_badge = '<span class="badge">' . $publics . '</span>';
    }
//    else if ($variables['element']['#link']['path'] == 'jobs/search-result' ){
//        $counter_badge = '<span class="badge">' . $featured . '</span>';
//    }
    $link_text = t('!local-task-title!counter', array('!local-task-title' => $link['title'], '!counter' => $counter_badge));

    if (!empty($variables['element']['#active'])) {
        // Add text to indicate active tab for non-visual users.
        $active = '<span class="element-invisible">' . t('(active tab)') . '</span>';

        // If the link does not contain HTML already, check_plain() it now.
        // After we set 'html'=TRUE the link will not be sanitized by l().
        if (empty($link['localized_options']['html'])) {
            $link['title'] = check_plain($link['title']);
        }
        $link['localized_options']['html'] = TRUE;
        $link_text = t('!local-task-title!active', array('!local-task-title' => $link['title'], '!active' => $active, '!counter' => $counter_badge));
    }

    if (empty($link['localized_options']['html'])) {
        $link['title'] = check_plain($link['title']);
    }
    return '<li' . (!empty($variables['element']['#active']) ? ' class="active"' : '') . '>' . l($link_text, $link['href'], $link['localized_options']) . '</li>';
}

*/

function consilium_menu_local_tasks(&$variables){
//    dpm($variables['primary']);
    foreach ($variables['primary'] as $menu_item){
        dpm($menu_item['#link']);
        if ($menu_item['#link'] == 'jobs/featured'){

        } elseif ($menu_item['#link'] == 'jobs/all'){

        }elseif ($menu_item['#link'] == 'jobs/tender'){

        }elseif ($menu_item['#link'] == 'jobs/internships'){

        }elseif ($menu_item['#link'] == 'jobs/others'){

        }elseif ($menu_item['#link'] == 'jobs/public-adverts'){

        }
    }

//    if ($variables['primary']['#link']['path'] == 'jobs/featured' ){
//        $counter_badge = '<span class="badge">' . $featured . '</span>';
//    }else if ($variables['element']['#link']['path'] == 'jobs/all' ){
//        $counter_badge = '<span class="badge">' . $alljobs . '</span>';
//    }else if ($variables['element']['#link']['path'] == 'jobs/tender' ){
//        $counter_badge = '<span class="badge">' . $tenders . '</span>';
//    }else if ($variables['element']['#link']['path'] == 'jobs/internships' ){
//        $counter_badge = '<span class="badge">' . $intern . '</span>';
//    }else if ($variables['element']['#link']['path'] == 'jobs/others' ){
//        $counter_badge = '<span class="badge">' . $others . '</span>';
//    }else if ($variables['element']['#link']['path'] == 'jobs/public-adverts' ){
//        $counter_badge = '<span class="badge">' . $publics . '</span>';
//    }
}