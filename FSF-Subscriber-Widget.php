<?php
/*
Plugin Name: FSF Subscribe Widget
Plugin URI: http://sethradio.com/projects/wp-plugins
Description: An FSF Mailing List subscribe widget for WordPress.
Author: Seth Schroeder
Version: 1.1
Author URI: http://sethradio.com/
*/
###########################################################################
#Copyright (C) 2011  Seth Schroeder                                       #
#This program is free software: you can redistribute it and/or modify     #
#it under the terms of the GNU General Public License as published by     #
#the Free Software Foundation, either version 3 of the License, or        #
#(at your option) any later version.                                      #
#This program is distributed in the hope that it will be useful,          #
#but WITHOUT ANY WARRANTY; without even the implied warranty of           #
#MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            #
#GNU General Public License for more details.                             #
#You should have received a copy of the GNU General Public License        #
#along with this program.  If not, see <http://www.gnu.org/licenses/>.    #
###########################################################################

 
function fsfsubscribe()
{
  echo "<center><p><h4>Support software freedom!</h4></p><p>Get the new monthly newsletter-<br /><i>The Free Software supporter.</i></p><form method=\"post\" action=\"https://crm.fsf.org/civicrm/profile/create&reset=1&gid=31\"><p><input type=\"text\" onfocus=\"this.value=''\" value=\"you@example.com\" size=\"15\" name=\"email-Primary\"></p><p><input type=\"submit\" value=\"Subscribe Me\" name=\"_qf_Edit_next\" class=\"block-button\"></p></form></center>";
}
 
function widget_fsf($args) {
  extract($args);
  echo $before_widget;
  echo $before_title;?>Subscribe to the FSF<?php echo $after_title;
  fsfsubscribe();
  echo $after_widget;
}
 
function fsf_init()
{
  register_sidebar_widget(__('FSF Subscribe Widget'), 'widget_fsf');
}
add_action("plugins_loaded", "fsf_init");
?>