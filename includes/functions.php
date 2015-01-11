<?php 

// makes side menu page active
function side_menu_page_active($page_num){
	global $page_id;
if( $page_id == "$page_num") {echo "class=\"live\"";}
}

// side menu make category expand
function side_menu_cat($side_cat){
	global $menu_side;
if( $menu_side == $side_cat) { echo "class=\"dcjq-current-parent\"";}
}

//side menu category active
 function side_menu_cat_active($side_cat){
	 global $menu_side; 
 if( $menu_side == $side_cat) { echo "class=\"catactive\"";}
 }
  
?>