<?php
session_start();
/**
 * config.php
 *
 * Author: pixelcave
 *
 * Global configuration file
 *
 */

// Include Template class
require 'classes/Template.php';

// Create a new Template Object
$one                               = new Template('Portal', '1.0', 'assets'); // Name, version and assets folder's name

// Global Meta Data
$one->author                       = '';
$one->robots                       = 'noindex, nofollow';
$one->title                        = 'Portal  - Admin Dashboard';
$one->description                  = 'Portal  - Admin Dashboard created by TekTrix';

// Global Included Files (eg useful for adding different sidebars or headers per page)
//$one->inc_side_overlay             = 'base_side_overlay.php';
$one->inc_sidebar                  = 'base_sidebar.php';
$one->inc_header                   = 'base_header.php';

// Global Color Theme
$one->theme                        = '';       // '' for default theme or 'amethyst', 'city', 'flat', 'modern', 'smooth'

// Global Body Background Image
$one->body_bg                      = '';       // eg 'assets/img/photos/photo10@2x.jpg' Useful for login/lockscreen pages

// Global Header Options
$one->l_header_fixed               = true;     // True: Fixed Header, False: Static Header

// Global Sidebar Options
$one->l_sidebar_position           = 'left';   // 'left': Left Sidebar and right Side Overlay, 'right;: Flipped position
$one->l_sidebar_mini               = false;    // True: Mini Sidebar Mode (> 991px), False: Disable mini mode
$one->l_sidebar_visible_desktop    = true;     // True: Visible Sidebar (> 991px), False: Hidden Sidebar (> 991px)
$one->l_sidebar_visible_mobile     = false;    // True: Visible Sidebar (< 992px), False: Hidden Sidebar (< 992px)

// Global Side Overlay Options
$one->l_side_overlay_hoverable     = false;    // True: Side Overlay hover mode (> 991px), False: Disable hover mode
$one->l_side_overlay_visible       = false;    // True: Visible Side Overlay, False: Hidden Side Overlay

// Global Sidebar and Side Overlay Custom Scrolling
$one->l_side_scroll                = true;     // True: Enable custom scrolling (> 991px), False: Disable it (native scrolling)

// Global Active Page (it will get compared with the url of each menu link to make the link active and set up main menu accordingly)
$one->main_nav_active              = basename($_SERVER['PHP_SELF']);

// Global Main Menu

      if (isset($_SESSION['usertype'])) {
                        $usertype = $_SESSION['usertype'];
                        $uid =$_SESSION['uid'];
                        }
     if(isset($_SESSION['usertype']) && $usertype=="Admin") 
     {
$one->main_nav                     = array(
    array(
        'name'  => '<span class="sidebar-mini-hide">Search</span>',
        'icon'  => 'si si-speedometer',
        'url'   => 'index.php'
    ),
  
//    array(
//        'name'  => '<span class="sidebar-mini-hide">User Interface</span>',
//        'type'  => 'heading'
//    ),
    
    
    

 







    array(
        'name'  => '<span class="sidebar-mini-hide">Data Management</span>',
        'icon'  => 'si si-note',
        'sub'   => array(
            array(
                'name'  => 'List Creation',
                'url'   => 'base_pages_list_creation.php',
            ) 

        )
    ),    array(
        'name'  => '<span class="sidebar-mini-hide">User Management</span>',
        'icon'  => 'si si-note',
        'sub'   => array(
               array(
                'name'  => 'Users',
                'url'   => 'base_pages_users.php',
            ),
            array(
                'name'  => 'User Creation',
                'url'   => 'base_pages_user_creation.php',
            )
        )
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Reports</span>',
        'icon'  => 'si si-note',
        'sub'   => array(
            array(
                'name'  => 'Billing Report',
                'url'   => 'base_report_billing.php',
            ),
           
             array(
                'name'  => 'Campaign Report',
                'url'   => 'base_report_campaign.php',
            ),
             array(
                'name'  => 'SMS Report',
                'url'   => 'base_report_sms.php',
            )
            
        )
    )  
    
    
    
     );
     }
     else{
         $one->main_nav                     = array(
    array(
        'name'  => '<span class="sidebar-mini-hide">Search</span>',
        'icon'  => 'si si-speedometer',
        'url'   => 'index.php'
    )                       
             
     );    
         
     }