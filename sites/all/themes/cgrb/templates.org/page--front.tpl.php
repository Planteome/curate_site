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
global $user;
?>

<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <div class="logo">
                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                        <img class="img-responsive" src="<?php print $logo; ?>">
                    </a> 
                </div>
            </div>
            <div class="col-md-9 col-sm-9 search-sec">
                <div class="col-md-9 col-sm-9 search-field">
                <?php 
                        $search_box1 = drupal_get_form('custom_search_form_form');
                        $search_box = drupal_render($search_box1);
                        //echo "<pre>"; print_r($search_box); exit();
                        print $search_box;
                ?>
                </div>
                <!-- <div class="col-md-9 col-sm-9 search-field">
                    <?php //print render($page['header']); ?>
                    <div class="col-md-8 col-sm-8 search-expl">
                        <p>Example Searches:</p>
                        <p>Ontology terms:endosperm, PO:0009089, fruit quality trait, GO:0009845</p>
                        <p>Bioentities (data objects): CONSTANS, AT5G15850, GRMZM2G061969</p>
                    </div>
                    <div class="col-md-4 col-sm-4"> 
                        <a href=""><p>Advanced Search</p></a>
                    </div>   
                </div> -->
                <div class="col-md-3 col-sm-3 link-button">
                    <?php if($user->uid) { ?>
                    <!-- <a href="<?php echo $base_path; ?>user/logout"><p>Logout</p></a> -->
                    <?php }else{ ?>
                    <a href="<?php echo $base_path; ?>user/register"><p>New user?</p></a> 
                    <a href="<?php echo $base_path; ?>user"><span>Log in</span></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</header>

<section id="bg-colour">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h1><?php echo variable_get('about_us_heading_text'); ?></h1>
                <p><?php echo variable_get('about_us_body_text'); ?></p>
                <!-- <?php print render($page['front_page']); ?> -->
            </div>
        </div>
    </div>
</section>

<section id="search-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h1>Search</h1>
                <?php //print render($page['header']); ?>
                <?php 
                        //$search_box1 = drupal_get_form('custom_search_form_form');
                        //$search_box = drupal_render($search_box1);
                        //echo "<pre>"; print_r($search_box); exit();
                        print $search_box;
                ?>
                <!-- <div class="col-md-6 col-sm-6 search-expl">
                    <p>Example Searches:</p>
                    <p>Ontology terms:endosperm, PO:0009089, fruit quality trait, GO:0009845</p>
                    <p>Bioentities (data objects): CONSTANS, AT5G15850, GRMZM2G061969</p>
                </div>
                <div class="col-md-6 col-sm-6"> 
                    <a href=""><p>Advanced Search</p></a>
                </div>   -->
            </div>
        </div>
    </div>
</section>

<section id="taxonomy-sec">
    <div class="container">
    <!-- <div class="container-fluid"> -->
        <div class="row">
            <div class="col-md-7 col-sm-7 right-content">
                <!-- 10 genes with most recently viewed/edited annotations -->
                <h2><?php echo variable_get('taxonomy_tree_block_title'); ?></h2>
                <!-- <div id="frontpage_listtree"> -->
                <!-- <div> -->
                <p><?php echo variable_get('taxonomy_tree_block_subheading'); ?></p>
                <div id="frontpage_listtree" class="listree">
                    <?php print_taxon_html_tree_string(); ?>
                </div>
            </div>
            <div class="col-md-5 col-sm-5 left-content">
                <!-- tree structure with links to taxons and their genes -->
                <?php print_ten_most_recent_genes(); ?>
            </div>
        </div>
    </div>
</section>

<section id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <div class="social-icons">
                    <a href="https://creativecommons.org/licenses/by/4.0/"><img alt="Creative Commons License" src="http://i.creativecommons.org/l/by/4.0/88x31.png"></a>
                    <i class="fa fa-twitter"></i>
                    <i class="fa fa-facebook-f"></i>
                </div>
                <?php echo variable_get('footer_text_value'); ?>

                <?php print render($page['footer']);?>
            </div>
        </div>
    </div>
</section>