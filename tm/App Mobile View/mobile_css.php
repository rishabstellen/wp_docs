<?php 

function my_custom_fonts() {
  echo '
  
  <style>
    #adminmenu li,
    #edit-slug-box,
    #edit-slug-box,
    #minor-publishing,
    #formatdiv,
    #postimagediv,
    #wpfooter,
    #screen-meta-links,
    #dashboard_quick_press,
    #dashboard_primary,
    .page-count
    {
      display:none;
  }

  #menu-posts,
  #menu-users,
  #menu-posts li{
    display: block !important;
  }
  #menu-posts ul li:nth-child(4),#menu-posts ul li:nth-child(5),#menu-posts ul li:nth-child(1){
    display: none !important;
  }

  </style>

  ';
}