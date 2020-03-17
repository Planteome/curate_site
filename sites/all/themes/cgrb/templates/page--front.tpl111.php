<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>

  <div id="page-wrapper"><div id="page">

    <div id="header">
     	<?php if ($logo): ?>
        	<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        	<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
    	<?php endif; ?>
    	<?php print render($page['header']); ?>
    </div>

    <div id="content">
        <div id="statement">
            <div id="statement-wrapper">
                <h3>This is a statement about the project</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    	<div id="most-recent">
    		<!-- 10 genes with most recently viewed/edited annotations -->
        	<?php print_ten_most_recent_genes(); ?>
      	</div>
    	<div id="taxon-tree">
        	<!-- tree structure with links to taxons and their genes -->
        	<?php print_taxon_html_tree_string(); ?>
		</div>
    </div>

    <div id="footer">
        <?php print render($page['footer']); ?>
        <p>
            <a href="https://creativecommons.org/licenses/by/4.0/"><img alt="Creative Commons License" src="http://i.creativecommons.org/l/by/4.0/88x31.png"></a>
            <br>
            Planteome by <a href="http://planteome.org" rel="attributionURL">http://planteome.org</a> is licensed under a <a href="http://creativecommons.org/licenses/by/4.0/" rel="license">Creative Commons Attribution 4.0 International License</a>.<br>
            Based on a work at <a href="http://planteome.org" rel="source">planteome.org</a>.
        </p>

        <p>Planteome is an <a href="http://planteome.org/node/6">international collaborative effort</a> and is supported by primary funding (<a href="http://www.nsf.gov/awardsearch/showAward?AWD_ID=1340112">IOS:1340112 award</a>) from the National Science Foundation of USA.</p>
    </div>

  </div></div> <!-- /#page, /#page-wrapper -->
