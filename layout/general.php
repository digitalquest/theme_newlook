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

$is_staff = is_staff();

require_once(dirname(__FILE__) . '/includes/header.php');

if ($is_staff) 
    require_once(dirname(__FILE__) . '/includes/staff2column.php'); 
else 
    require_once(dirname(__FILE__) . '/includes/staff2column.php');

require_once(dirname(__FILE__) . '/includes/footer.php');
?>


