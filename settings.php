<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Moodle's newlook theme, an example of how to make a Bootstrap theme
 *
 * DO NOT MODIFY THIS THEME!
 * COPY IT FIRST, THEN RENAME THE COPY AND MODIFY IT INSTEAD.
 *
 * For full information about creating Moodle themes, see:
 * http://docs.moodle.org/dev/Themes_2.0
 *
 * @package   theme_newlook
 * @copyright 2013 Moodle, moodle.org
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

    // Custom CSS file.
    $name = 'theme_newlook/customcss';
    $title = get_string('customcss', 'theme_newlook');
    $description = get_string('customcssdesc', 'theme_newlook');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Footnote setting.
    $name = 'theme_newlook/footnote';
    $title = get_string('footnote', 'theme_newlook');
    $description = get_string('footnotedesc', 'theme_newlook');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    
    // Academic year setting
    $name = 'theme_newlook/academicyear';
    $title = get_string('academicyear','theme_newlook');
    $description = get_string('academicyeardesc', 'theme_newlook');
    //Build dropdown
    $red = '2015/16';
    $amber = '2016/17';
    //
    $default = $amber;
    //format is value=>label
    $choices = array($red=>"$red", $amber=>"$amber");
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    //If ticked, display course warning according to the academic year 
    $name = 'theme_newlook/academicyearwarning';
    $title = get_string('academicyearwarning', 'theme_newlook');
    $description = get_string('academicyearwarningdesc', 'theme_newlook');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

}
