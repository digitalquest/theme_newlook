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

<body <?php echo $OUTPUT->body_attributes('two-column'); ?>>

<?php echo $OUTPUT->standard_top_of_body_html() ?>

<header role="banner" class="navbar navbar-fixed-top moodle-has-zindex">
    <nav role="navigation" class="navbar-inner">
        <div class="container-fluid">
            <a class="brand" href="<?php echo $CFG->wwwroot;?>"><?php echo
                format_string($SITE->shortname, true, array('context' => context_course::instance(SITEID)));
                ?></a>
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <?php echo $OUTPUT->user_menu(); ?>
            <div class="nav-collapse collapse">
                <?php echo $OUTPUT->custom_menu(); ?>
                <ul class="nav pull-right">
                    <li><?php echo $OUTPUT->page_heading_menu(); ?></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div id="page" class="container-fluid">

    <header id="page-header" class="clearfix">
        <div id="page-navbar" class="clearfix">
            <nav class="breadcrumb-nav"><?php echo $OUTPUT->navbar(); ?></nav>
            <div class="breadcrumb-button"><?php echo $OUTPUT->page_heading_button(); ?></div>
        </div>
        <?php echo $OUTPUT->page_heading(); ?>
        <div id="course-header">
            <?php echo $OUTPUT->course_header(); ?>
        </div>
    </header>

    <div id="page-content" class="row-fluid">
        <section id="region-main" class="span9<?php if ($left) { echo ' pull-right'; } ?>">
            <?php
            echo $OUTPUT->course_content_header();
            ?>
            <div class="container services-area">

                <a href="http://moodle-test.warwick.ac.uk/user/index.php?id=<?php echo $COURSE->id ?>" alt="participants" title="participants">
                    <button class="service col-md-4 col-sm-6 col-xs-6">
                        <span class="service-icon wow zoomInDown"><i class="fa fa-bug"></i></span>
                    </button>
                </a>
                <a href="http://moodle-test.warwick.ac.uk/user/profile.php?id=<?php echo $USER->id ?>" alt="profile" title="profile">
                    <button class="service col-md-4 col-sm-6 col-xs-6">
                        <span class="service-icon wow zoomInDown"><i class="fa fa-bullhorn"></i></span>
                    </button>
                </a>
                <a href="http://moodle-test.warwick.ac.uk/badges/mybadges.php" alt="badges" title="badges">
                    <button class="service col-md-4 col-sm-6 col-xs-6">
                        <span class="service-icon wow zoomInDown"><i class="fa fa-android"></i></span>
                    </button>
                </a>
                <a href="http://moodle-test.warwick.ac.uk/message/index.php?user1=<?php echo $USER->id ?>" alt="messages" title="messages">
                    <button class="service col-md-4 col-sm-6 col-xs-6">
                        <span class="service-icon wow zoomInDown"><i class="fa fa-apple"></i></span>
                    </button>
                </a>
            </div>

            </p>

            <?php // Code to show a warning message if the course is hidden from students in course settings
            $is_course_view = is_course_view(); // check if we are viewing a course page
            if($is_course_view && $PAGE->theme->settings->academicyearwarning && !$CFG->currentacademicyear) {
                echo '<div id="hidden_msg" class="alert alert-warning alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
          <i class="fa fa-exclamation-triangle fa-lg"></i><strong> Please Note:</strong> This course does not seem belong to the current academic year. Please double check it is the course you want.</div>';
            }
            ?>

            <?php
            echo $OUTPUT->main_content();
            echo $OUTPUT->course_content_footer();
            ?>
        </section>
        <?php
        $classextra = '';
        if ($left) {
            $classextra = ' desktop-first-column';
        }
        echo $OUTPUT->blocks('side-pre', 'span3'.$classextra);
        ?>
    </div>
