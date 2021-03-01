<?php

//index
if( isset($_GET['c_two_post']) && !empty($_GET['c_two_post'] )) {
  $c_two_post =  $_GET['c_two_post'];
}if( isset($_GET['c_home_layout']) && !empty($_GET['c_home_layout'] )) {
  $c_home_layout =  $_GET['c_home_layout'];
}if( isset($_GET['c_sidebar_side']) && !empty($_GET['c_sidebar_side'] )) {
  $c_sidebar_side =  $_GET['c_sidebar_side'];
}

//footer
if( isset($_GET['c_footer_width']) && !empty($_GET['c_footer_width'] )) {
  $c_two_post =  $_GET['c_footer_width'];
}

//header
if( isset($_GET['c_menu_position']) && !empty($_GET['c_menu_position'] )) {
  $c_menu_position =  $_GET['c_menu_position'];
}

?>