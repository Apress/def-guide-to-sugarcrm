<?php

$themedef = array(
 'name' => "Sugar", // theme name
 'description' => "Sugar", // short description of the theme 
 'colors' => array("sugar","red","green","blue","purple","gray"), // list of color.*.css files provided
 'fonts' => array("normal", "larger", "largest"), // list of font.*.css files provided
 'maxTabs' => $max_tabs, // maximum number of tabs shown in the bar
 'pngSupport' => true, // true if png image files are used in this theme, false if gifs
 'parentTheme' => "ParentTheme", // name of the theme this theme inherits from, if something other than the default theme.
 'barChartColors' => array(....),
 'pieChartColors' => array(....),
);
