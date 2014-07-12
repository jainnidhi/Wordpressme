<?php

$a = '@font-face {
    font-family: "asapregular";
    src: url("font/asap-regular-webfont.eot");
    src: url("font/asap-regular-webfont.eot?#iefix") format("embedded-opentype"),
        url("font/asap-regular-webfont.woff") format("woff"),
        url("font/asap-regular-webfont.ttf") format("truetype"),
        url("font/asap-regular-webfont.svg#asapregular") format("svg");
    font-weight: normal;
    font-style: normal;

}
@font-face {
    font-family: "FontAwesome";
    src: url("font/fontawesome-webfont.eot?v=3.2.1");
    src: url("font/fontawesome-webfont.eot?#iefix&v=3.2.1") format("embedded-opentype"), url("font/fontawesome-webfont.woff?v=3.2.1") format("woff"), url("font/fontawesome-webfont.ttf?v=3.2.1") format("truetype"), url("font/fontawesome-webfont.svg#fontawesomeregular?v=3.2.1") format("svg");
    font-weight: normal;
    font-style: normal;
}
html{
    background: #efefef;
}
body{
    font-family: "asapregular";
}
/*ul#adminmenu a.wp-has-current-submenu:after, ul#adminmenu > li.current > a.current:after{
    font-family: "FontAwesome";
    content: "\f0d9";
}*/
ul#adminmenu a.wp-has-current-submenu .wp-menu-name:after{
    font-family: "FontAwesome";
    content: "\f0d9";
    float: right;
    margin-right: 0px;
    font-size: 20px;
}
ul#adminmenu li.opensub .wp-menu-name:after{
    font-family: "FontAwesome";
    content: "\f0d9";
    float: right;
    margin-right: 0px;
    font-size: 20px;
}
#adminmenu .wp-has-current-submenu ul > li > a, .folded #adminmenu li.menu-top .wp-submenu > li > a {
    padding: 5px 0 5px 5px;
}
#wpadminbar .ab-item, #wpadminbar a.ab-item, #wpadminbar > #wp-toolbar span.ab-label, #wpadminbar > #wp-toolbar span.noticon{
    color:' . $menufontcolor . ';
}
#adminmenuback, #adminmenuwrap,#adminmenu {
    background-color: ' . $menubgcolor . ';
    border-color: ' . $menubgcolor . ';
}
#adminmenu .wp-submenu{
    left:160px;
}
#adminmenuback, #adminmenuwrap, #adminmenu, #adminmenu .wp-submenu{
    width:160px;
}
#adminmenu .wp-not-current-submenu .wp-submenu, .folded #adminmenu .wp-has-current-submenu .wp-submenu{
    width:190px;
}
#adminmenu .wp-not-current-submenu li > a, .folded #adminmenu .wp-has-current-submenu li > a {
    padding-left: 14px;
    padding-right: 16px;
 }
#adminmenu li.wp-menu-separator{
    border-width: 0;
    height: 0px;
}
#adminmenu a.menu-top, #adminmenu .wp-submenu .wp-submenu-head {
    border-bottom-color: ' . $menubgcolor . ';
    border-top-color: ' . $menubgcolor . ';
}
#adminmenu div.wp-menu-name{
    font-weight: normal;
    padding:10px 0px;
}
#adminmenu li.menu-top:hover, #adminmenu li.opensub > a.menu-top, #adminmenu li > a.menu-top:focus,#adminmenu a:hover, #adminmenu li.menu-top:hover, #adminmenu li.opensub > a.menu-top, #adminmenu li > a.menu-top:focus {
    background-color: ' . $menuhoverbgcolor . ';
    color:' . $menufontcolorhover . ';
    text-shadow: 0 0;
    /*width:160px;*/
}
#adminmenu li.wp-not-current-submenu .wp-menu-arrow {
    background: none repeat scroll 0 0 rgb(0, 0, 0);
    border-bottom-color: rgb(0, 0, 0);
    border-top-color: rgb(0, 0, 0);
}
#adminmenu li.wp-not-current-submenu .wp-menu-arrow div {
    background: none repeat scroll 0 0 rgb(0, 0, 0);
    border-color: rgb(0, 0, 0);
    display:none;
}
/*#adminmenu .wp-menu-arrow div {
    background: none repeat scroll 0 0 rgb(0, 0, 0);
}*/
#adminmenu li.wp-has-current-submenu a.wp-has-current-submenu, #adminmenu li.current a.menu-top, .folded #adminmenu li.wp-has-current-submenu, .folded #adminmenu li.current.menu-top, #adminmenu .wp-menu-arrow, #adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head{
    background: ' . $menuhoverbgcolor . ';
    border:0px;
    color: #ffffff;
    text-shadow: 0 0;
/*    width: 160px;*/
}
#wpcontent, #wpfooter {
    margin-left: 180px;
}
#adminmenu .wp-submenu, .folded #adminmenu a.wp-has-current-submenu:focus + .wp-submenu, .folded #adminmenu .wp-has-current-submenu .wp-submenu,#adminmenu .wp-submenu, #adminmenu .wp-has-current-submenu .wp-submenu, #adminmenu .wp-has-current-submenu.opensub .wp-submenu, .folded #adminmenu .wp-has-current-submenu .wp-submenu, #adminmenu a.wp-has-current-submenu:focus + .wp-submenu{
    background: ' . $submenubgcolor . ';
}
#adminmenu .wp-submenu a:hover, #adminmenu .wp-submenu a:focus{
    background: none;
    color:#ffffff;
}
#adminmenu .wp-submenu li.current, #adminmenu .wp-submenu li.current a, #adminmenu .wp-submenu li.current a:hover{
    color:#ffffff;
}
#adminmenu div.wp-menu-image:before,#adminmenu li:hover div.wp-menu-image:before{
    color: #ffffff;
}
#adminmenu .wp-submenu a, .folded #adminmenu a.wp-has-current-submenu:focus + .wp-submenu a, .folded #adminmenu .wp-has-current-submenu .wp-submenu a,#adminmenu .wp-has-current-submenu .wp-submenu a, .no-js li.wp-has-current-submenu:hover .wp-submenu a, #adminmenu a.wp-has-current-submenu:focus + .wp-submenu a, #adminmenu .wp-has-current-submenu .wp-submenu.sub-open a, #adminmenu .wp-has-current-submenu.opensub .wp-submenu a{
   color: ' . $menufontcolor . ';
}
#collapse-menu {
    color: ' . $menufontcolor . ';
}
#adminmenu a {
    color: ' . $menufontcolor . ';
}
#adminmenu .wp-menu-arrow div{
    background: #ffffff;
}
#adminmenu .wp-menu-arrow div{
    transform: matrix(-0.6, 1, 0.6, 1, 1, 4);
}
#adminmenu .wp-submenu a{
    padding:5px;
}
#collapse-menu{
    border-width: 0px;
}
#adminmenu li.wp-menu-open{
    border-color: ' . $menubgcolor . ';
}
#adminmenu .wp-submenu{
    border-width: 0px;
}
#adminmenu a:hover, #adminmenu li.menu-top > a:focus, #adminmenu .wp-submenu a:hover, #the-comment-list .comment a:hover, #rightnow a:hover, #media-upload a.del-link:hover, div.dashboard-widget-submit input:hover, .subsubsub a:hover, .subsubsub a.current:hover, .ui-tabs-nav a:hover, .plugins .inactive a:hover, #all-plugins-table .plugins .inactive a:hover, #search-plugins-table .plugins .inactive a:hover,#adminmenu .wp-submenu a:focus, #adminmenu .wp-submenu a:hover, #adminmenu .wp-has-current-submenu .wp-submenu a:focus, #adminmenu .wp-has-current-submenu .wp-submenu a:hover, .folded #adminmenu .wp-has-current-submenu .wp-submenu a:focus, .folded #adminmenu .wp-has-current-submenu .wp-submenu a:hover, #adminmenu a.wp-has-current-submenu:focus + .wp-submenu a:focus, #adminmenu a.wp-has-current-submenu:focus + .wp-submenu a:hover, #adminmenu .wp-has-current-submenu.opensub .wp-submenu a:focus, #adminmenu .wp-has-current-submenu.opensub .wp-submenu a:hover{
    color: ' . $menufontcolorhover . ';
}
#adminmenu a.menu-top, #adminmenu .wp-submenu-head{
    font-size: 14px;
    line-height:18px;
}
#adminmenu div.wp-menu-image{
    margin-top: 5px;
}
#adminmenu li.current .wp-menu-arrow, #adminmenu li.wp-has-current-submenu .wp-menu-arrow, #adminmenu li.wp-has-current-submenu .wp-menu-arrow div, #adminmenu li.wp-has-submenu .wp-menu-arrow div, #adminmenu li.current .wp-menu-arrow div, .no-js #adminmenu li.wp-has-submenu:hover .wp-menu-arrow, #adminmenu li.wp-has-submenu.opensub .wp-menu-arrow, #adminmenu a.wp-has-submenu:focus .wp-menu-arrow, #adminmenu a:hover .wp-menu-arrow{
    display: none;
}
#wpadminbar .quicklinks .menupop ul li a:hover, #wpadminbar .quicklinks .menupop ul li a:focus, #wpadminbar .quicklinks .menupop ul li a:hover strong, #wpadminbar .quicklinks .menupop ul li a:focus strong, #wpadminbar .quicklinks .menupop.hover ul li a:hover, #wpadminbar .quicklinks .menupop.hover ul li a:focus, #wpadminbar.nojs .quicklinks .menupop:hover ul li a:hover, #wpadminbar.nojs .quicklinks .menupop:hover ul li a:focus, #wpadminbar li:hover .ab-icon:before, #wpadminbar li:hover .ab-item:before, #wpadminbar li a:focus .ab-icon:before, #wpadminbar li .ab-item:focus:before, #wpadminbar li.hover .ab-icon:before, #wpadminbar li.hover .ab-item:before, #wpadminbar li:hover #adminbarsearch:before,#wpadminbar .ab-icon:before, #wpadminbar .ab-item:before, #wpadminbar #adminbarsearch:before{
    color:#ffffff;
}
#wpadminbar,#wpadminbar .ab-top-secondary{
    background:  ' . $menubgcolor . ';
}
#wpadminbar .quicklinks > ul > li,#wpadminbar .quicklinks > ul > li > a, #wpadminbar .quicklinks > ul > li > .ab-empty-item,#wpadminbar .quicklinks .ab-top-secondary > li,#wpadminbar .quicklinks .ab-top-secondary > li > a, #wpadminbar .quicklinks .ab-top-secondary > li > .ab-empty-item,#wpadminbar .quicklinks .ab-top-secondary > li{
    border-right: 1px solid ' . $menubgcolor . ' !important;
}
#wpadminbar .ab-top-menu > li:hover > .ab-item, #wpadminbar .ab-top-menu > li.hover > .ab-item, #wpadminbar .ab-top-menu > li > .ab-item:focus, #wpadminbar.nojq .quicklinks .ab-top-menu > li > .ab-item:focus,#wpadminbar .menupop li:hover, #wpadminbar .menupop li.hover, #wpadminbar .quicklinks .menupop .ab-item:focus, #wpadminbar .quicklinks .ab-top-menu .menupop .ab-item:focus,#wpadminbar .menupop li:hover, #wpadminbar .menupop li.hover, #wpadminbar .quicklinks .menupop .ab-item:focus, #wpadminbar .quicklinks .ab-top-menu .menupop .ab-item:focus{
    background: ' . $menuhoverbgcolor . ';
    text-shadow:0px 0px;
    color:#fff;
}
#wpadminbar .quicklinks .menupop ul li a, #wpadminbar .quicklinks .menupop ul li a strong, #wpadminbar .quicklinks .menupop.hover ul li a, #wpadminbar.nojs .quicklinks .menupop:hover ul li a,#wpadminbar #wp-admin-bar-user-info .display-name{
    color: #fff;
}
#wp-admin-bar-new-content-default,#wp-admin-bar-site-name-default,.ab-submenu{
    background: ' . $submenubgcolor . ' !important;
}
#wpadminbar *{
    color:#fff;
    font-family: asapregular;
}
/*Form Elements*/
.search-box input[name="s"], #search-plugins input[name="s"], .tagsdiv .newtag {
    float: left;
    height: 28px;
    margin: 0 4px 0 0;

}
input[type="text"], input[type="password"], input[type="email"], input[type="number"], input[type="search"], input[type="tel"], input[type="url"], input[type="search"], .titlewrap input, select {
    border-color: rgb(221, 221, 221);
    box-shadow: 1px 1px 6px rgb(204, 204, 204);
    height: 30px !important;
    width: 150px;
    padding: 5px !important;
    font-size: 14px !important;
}
input[type="button"]{
    border-color: rgb(221, 221, 221);
    box-shadow: 1px 1px 6px rgb(204, 204, 204);
    height: 30px !important;

}
input[type="submit"],input[type="reset"]{
    border-color: rgb(221, 221, 221);
    box-shadow: 1px 1px 6px rgb(204, 204, 204);
    height: 30px !important;
    /*    background: #FFDE00 !important;
        border:1px solid #FFDE00 !important;*/
    margin-right:4px !important;
}
.button-primary{
    background: ' . $menubgcolor . ' !important;
    border:1px solid ' . $menubgcolor . ' !important;
    color: #ffffff !important;
}
.tablenav{
    margin: 6px 0 20px;
}
table.widefat{
    background: #ffffff;
}
/*Post Display Header*/
.revisions-meta, .widget .widget-top, .postbox h3, .stuffbox h3, .widefat thead tr th, .widefat tfoot tr th, h3.dashboard-widget-title, h3.dashboard-widget-title span, h3.dashboard-widget-title small, .sidebar-name, #nav-menu-header, #nav-menu-footer, .menu-item-handle{
    /*    height:35px;*/
}
.widefat thead .check-column, .widefat tfoot .check-column{
    padding: 15px 0 0;
}
.wrap .add-new-h2, .wrap .add-new-h2:active{
    background: none repeat scroll 0 0 #c4deeb;
    padding: 7px;
    font-family: asapregular;
    color: #000000;
    text-shadow:0px 0px;
    font-weight: bold;
}
#screen-options-link-wrap, #contextual-help-link-wrap{
    background:#ffffff;
    box-shadow: 1px 1px 5px rgb(204, 204, 204);
    height: 30px;
    padding: 3px 10px 0;
    width: auto;
}
h3.hndle{
    font-family: asapregular !important;
}
.revisions-meta, .widget .widget-top, .postbox h3, .stuffbox h3, .widefat thead tr th, .widefat tfoot tr th, h3.dashboard-widget-title, h3.dashboard-widget-title span, h3.dashboard-widget-title small, .sidebar-name, #nav-menu-header, #nav-menu-footer, .menu-item-handle{
    background: none;
    padding: 10px !important;
    font-family: asapregular !important;
}
.widefat td{
    padding: 12px 7px 29px;
}
#post-preview{
    padding: 3px 3px 3px 3px !important;
    border-color: rgb(221, 221, 221);
    box-shadow: 1px 1px 6px rgb(204, 204, 204);
    height: 30px !important;
    width: 80px;
}
/*End Form Elements*/
@media only screen and ( max-width: 900px ){
#adminmenu li.menu-top:hover, #adminmenu li.opensub > a.menu-top, #adminmenu li > a.menu-top:focus, #adminmenu a:hover, #adminmenu li.menu-top:hover, #adminmenu li.opensub > a.menu-top, #adminmenu li > a.menu-top:focus,#adminmenu li.wp-has-current-submenu a.wp-has-current-submenu, #adminmenu li.current a.menu-top, .folded #adminmenu li.wp-has-current-submenu, .folded #adminmenu li.current.menu-top, #adminmenu .wp-menu-arrow, #adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head{
	/*width:36px;	*/
}	
}
@media only screen and ( max-width: 781px ) {
.auto-fold #adminmenuwrap, .auto-fold #adminmenu, .auto-fold #adminmenuback{
	width:170px;
}
ul#adminmenu a.wp-has-current-submenu .wp-menu-name:after{
	content:"";
}
#adminmenu .wp-not-current-submenu .wp-submenu, .folded #adminmenu .wp-has-current-submenu .wp-submenu{
	width:170px;
}
#adminmenu li.menu-top:hover, #adminmenu li.opensub > a.menu-top, #adminmenu li > a.menu-top:focus, #adminmenu a:hover, #adminmenu li.menu-top:hover, #adminmenu li.opensub > a.menu-top, #adminmenu li > a.menu-top:focus,#adminmenu li.wp-has-current-submenu a.wp-has-current-submenu, #adminmenu li.current a.menu-top, .folded #adminmenu li.wp-has-current-submenu, .folded #adminmenu li.current.menu-top, #adminmenu .wp-menu-arrow, #adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head{
	width:160px;	
}
}';
$fp = fopen(__DIR__."/css/custom.css", "wb");
fwrite($fp, $a);
fclose($fp);
?>