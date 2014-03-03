<?php
/**
 * @file
 * Bartik's theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template normally located in the
 * modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/lifeecho.
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
 * - $hide_site_name: TRUE if the site name has been toggled off on the theme
 *   settings page. If hidden, the "element-invisible" class is added to make
 *   the site name visually hidden, but still accessible.
 * - $hide_site_slogan: TRUE if the site slogan has been toggled off on the
 *   theme settings page. If hidden, the "element-invisible" class is added to
 *   make the site slogan visually hidden, but still accessible.
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
 * - $page['header']: Items for the header region.
 * - $page['featured']: Items for the featured region.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['triptych_first']: Items for the first triptych.
 * - $page['triptych_middle']: Items for the middle triptych.
 * - $page['triptych_last']: Items for the last triptych.
 * - $page['footer_firstcolumn']: Items for the first footer column.
 * - $page['footer_secondcolumn']: Items for the second footer column.
 * - $page['footer_thirdcolumn']: Items for the third footer column.
 * - $page['footer_fourthcolumn']: Items for the fourth footer column.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see lifeecho_process_page()
 * @see html.tpl.php
 */

?>
  

<div id="MPOuterMost">
<div id="MPOuter">
<div class="header"></div>
<div id="menu">
<div class="logo"> <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
    <?php endif; ?></div>
<ul>
    <?php if ($main_menu): ?>
      <li>
        <?php print theme('links__system_main_menu', array(
          'links' => $main_menu,
          'attributes' => array(
            'id' => '',
            'class' => array('', ''),
          ),
          'heading' => array(
            'text' => t('Main menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
      </li> <!-- /#main-menu -->
    <?php endif; ?>

   
</ul>
</div>
   <div class="second">     
                     <!--   <div class="inner1communitybanner">              
     <div class="thumb-container">
<?php print render($page['userprofilemybio']); ?>
</div>    
        <?php if($user->uid != 0 && arg(2) != 'edit') { ?>
		<ul id="main-nav">

<?php //print render($page['userprofile_onpagemenu']); ?>

<div class="region region-userprofile-onpagemenu">
    <div id="block-nice-menus-1" class="block block-nice-menus">

    
  <div class="content">
    <ul class="nice-menu nice-menu-down" id="nice-menu-1"><li class="menu-2768 menuparent  menu-path-front  first   odd  home"><a title="Connect">Connect</a><ul><li class="menu-2773 menu-path-community-dashboard  first   odd  "><a href="<?php echo base_path(); ?>community/dashboard" title="My Community">My Community</a></li>
<li class="menu-2774 menu-path-user-matches   even  "><a href="<?php echo base_path(); ?>user/matches" title="My Matches">My Matches</a></li>
<li class="menu-2775 menu-path-searches   odd  "><a href="<?php echo base_path(); ?>searches" title="Search">Search</a></li>
<li class="menu-2776 menu-path-joincommunity   even  "><a href="<?php echo base_path(); ?>joincommunity" title="Join a Community">Join a Community</a></li>
<li class="menu-2777 menu-path-node-add-community-lifeecho   odd   last "><a href="<?php echo base_path(); ?>node/add/community-lifeecho" title="Create a Community">Create a Community</a></li>
</ul></li>
<li class="menu-2767 menuparent  menu-path-front   even  ">Create<ul><li class="menu-2771 menu-path-user  first   odd  "><a href="<?php echo base_path(); ?>user" title="Complete profile">Complete Profile</a></li>
<li class="menu-2772 menu-path-front   even   last "><a href="<?php echo base_path(); ?>user/<?php echo $user->uid; ?>/edit" title="Edit Profile">Edit Profile</a></li>
</ul></li>
<li class="menu-2770 menuparent  menu-path-front   odd  "><a  title="Disciple">Disciple</a><ul><li class="menu-2780 menu-path-user  first   odd   last "><a href="<?php echo base_path(); ?>user" title="Goes to main calendar">Goes to main calendar</a></li>
</ul></li>
<li class="menu-2769 menuparent  menu-path-front   even   last "><a  title="Equip">Equip</a><ul><li class="menu-2778 menu-path-user  first   odd  "><a href="<?php echo base_path(); ?>user" title="Discipleship Training Center">Discipleship Training Center</a></li>
<li class="menu-2779 menu-path-user   even   last "><a href="<?php echo base_path(); ?>user" title="Bible">Bible</a></li>
</ul></li>
</ul>
  </div>
</div>
  </div>
		</ul>
	<?php } ?>	
		

            </div> -->
       <div class="third">
          <!--  <?php
           global $user;
           if(($user->uid != 0) && arg(2) != 'edit') { ?>
           <div class="imgdiv">
                        <div class="user">
                            <div id="imgdiv1">
                                <?php
//                                if(arg(0) == 'user') {
                                print l(t('USER DASHBOARD'),'user').'</br>';
                                print l(t('ADMIN DASHBOARD'),'community/dashboard');
//                                }
//                                else if(arg(0) == 'node') {
//                                }
                                ?>
                            </div>
                            <div id="calender">
                                <img alt="" src="<?php echo base_path().drupal_get_path('theme','lifeecho'); ?>/images/calender.png" />
                            </div>
                        </div>
                        <div class="imgtable">
                         <?php print render($page['userprofilesidebar']); ?>
                            </div>
                    </div> <?php } ?>
                     -->
  
<div class="Search">
<?php print render($page['content']); ?>
                        <?php /*<div class="personalinfoOuter1">
                            <div class="personalinfoHead">
                                COMMUNITY SEARCH</div>
                            <div class="personalinfoContent">
                                <div class="infoDetail">
                                    <div class="lblInfo">
                                        By Name</div>
                                    <div class="txtInfo">
                                        <input type="text"></div>
                                </div>
                                <div style="clear: both">
                                </div>
                                <div class="infoDETAIL">
                                    <div class="lblInfo">
                                        By City</div>
                                    <div class="txtInfo">
                                        <input type="text"></div>
                                </div>
                                <div style="clear: both">
                                </div>
                                <div class="infoDETAIL">
                                    <div class="lblInfo">
                                        By State</div>
                                    <div class="txtInfo">
                                        <input type="text"></div>
                                </div>
                                <div style="clear: both">
                                </div>
                                <div class="infoDETAIL">
                                    <div class="lblInfo">
                                        By Proximity</div>
                                    <div class="txtInfo">
                                        <select style="width: 156px">
                                        </select></div>
                                </div>
                            </div>
                            <div style="clear: both">
                                </div>
                                <div class="personalinfoResult">
                            <div class="lblResult">3 Matches Available</div>
                            <div class="btnMatches"><input type="button" style="border:1px solid black" value="See Your Matches"></div></div>
                        </div>

                        <div class="personalinfoOuter2">
                        
                        <div class="thumb">
                        <div class="thumbNailContent">
                        <div class="thumbNail"><a href="#"><img alt="Comm ThumNail" src="images/userdashbord-image1.png"></a></div>
                        <div class="thumbContent">(This data comes from the "Tell us about your Community" feild on the Create a Community Part page2)</div>
                        </div>
                        <div style="clear: both">
                                </div>
                        <div>
                        <div class="communityLink"><a href="#">Community Name</a></div>
                        <div class="author"><span>Branson, MO</span></div>
                        </div>
                        </div>

                        <div style="clear: both">
                                </div>
                         <div class="thumb">
                        <div class="thumbNailContent">
                        <div class="thumbNail"><a href="#"><img alt="Comm ThumNail" src="images/userdashbord-image1.png"></a></div>
                        <div class="thumbContent">(This data comes from the "Tell us about your Community" feild on the Create a Community Part page2)</div>
                        </div>
                        <div style="clear: both">
                                </div>
                        <div>
                        <div class="communityLink"><a href="#">Community Name</a></div>
                        <div class="author"><span>Branson, MO</span></div>
                        </div>
                        </div>
                        
                        </div> */ ?>
                </div> <!-- personalinfoCOMMUNITY_Search END -->



                <!--     <div class="imgdivCOMMUNITY2">
                    <div class="imgdivCOMMUNITY-inner1">
                        <img width="192" height="430" src="<?php echo base_path().drupal_get_path('theme','lifeecho'); ?>/images/sponsored_ads.png" />
                    </div>
                    </div> -->

           
           

 
                    <div style="clear:both;"></div>
                     <div class="lifefooter">
                    <div class="qdisc">
                    <?php print render($page['footer']); ?>
                    </div>
                    
                 
                </div>
      </div><!-- third div end -->
   </div><!-- second div end -->
</div><!-- MPOuter END -->
</div><!-- MPOuterMost END -->
