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
 * A two column layout for the Bootstrapbase theme.
 *
 * @package   theme_newwave
 * @copyright 2016 Sam Moulem,
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

?>

<?php
//$html = theme_newwave_get_html_for_settings($OUTPUT, $PAGE);
$left = (!right_to_left());  // To know if to add 'pull-right' and 'desktop-first-column' classes in the layout for LTR.
echo $OUTPUT->doctype() 
?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); if($is_staff) echo " - staff page"; else echo " - non-staff page"; ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
    /* Services */
    .service-icon {
        /*display: table;*/
        margin: 0 auto;
        font-size: 35px;
        color: #fff;
        background-color: #ff6b53;
        line-height: 1;
        border-radius: 50%;
        width: 50px;
        height: 60px;
        text-align: center;
    }
    .service-icon .fa {
        margin-top: 12px;
    }
    .container {
        padding-left: 30px;
        padding-right: 30px;
        max-width: 1170px;
        width: auto !important;
        margin-right: auto;
        margin-left: auto;
    }
    .services-area, .employees-area {
        text-align: center;
    }
    .service-icon{
        display: inline-block;
        margin: 0 0 10px 5px;
        padding: 4px 12px;
        line-height: 20px;
        vertical-align: middle;
        cursor: pointer;

    }
    </style>
</head>

