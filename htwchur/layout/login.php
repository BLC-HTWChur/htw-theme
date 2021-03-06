<?php
// This file is part of the HTW Chur Moodle Theme - http://moodle.org/
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
 * The one column layout for the login screen.
 *
 * @package   theme_htwchur
 * @copyright 2013 Moodle, moodle.org
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Get the HTML for the settings bits.
$html = theme_htwchur_get_html_for_settings($OUTPUT, $PAGE);

echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body <?php echo $OUTPUT->body_attributes(); ?>>

<?php echo $OUTPUT->standard_top_of_body_html() ?>

<header role="banner" class="navbar navbar-fixed-top<?php echo $html->navbarclass ?> moodle-has-zindex">
    <nav role="navigation" class="navbar-inner">
        <div class="container-fluid">
            <a class="brand htwfont" href="<?php echo $CFG->wwwroot;?>"><?php echo
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

    <?php echo $OUTPUT->full_header(); ?>

    <div id="page-content" class="row-fluid">
        <section id="region-main" class="span12">
            <!-- display the login info -->
            <div class="container">
            <div class="span12<?php if (isloggedin() and !isguestuser()) echo ' hidden';?>">
                <div id="htwlogininfo">
            <?php
            echo $html->logininfo;
            ?>
                </div>
            </div>
            <div id="loginauthsection" class="row-fluid">
            <div class="span6<?php if (isloggedin() and !isguestuser()) echo ' hidden';?>">
                <div class="loginbox clearfix onecolumn">
                <div class="aailoginpanel">
                    <h2>AAI Login</h2>
<!-- EMBEDDED-WAYF-START -->
<script type="text/javascript">// <![CDATA[
var wayf_URL = "https://wayf.switch.ch/SWITCHaai/WAYF";
var wayf_sp_entityID = "https://moodle.htwchur.ch/shibboleth";
var wayf_sp_handlerURL = "https://moodle.htwchur.ch/Shibboleth.sso";
var wayf_return_url = "https://moodle.htwchur.ch/auth/shibboleth/index.php";
var wayf_show_remember_checkbox = false;
var wayf_auto_login = false;
var wayf_hide_after_login = true;
var wayf_most_used_idps =  new Array("https://aai-login.fh-htwchur.ch/idp/Authn/UserPassword");
var wayf_hide_categories =  new Array("tertiaryb","uppersecondary");
var wayf_unhide_idps = new Array("https://aai-login.fh-htwchur.ch/idp/shibboleth");
var wayf_hide_idps = new Array();
var wayf_use_improved_drop_down_list = true;
var wayf_sp_samlDSURL = "https://moodle.htwchur.ch/Shibboleth.sso/Login";
var wayf_auto_redirect_if_logged_in = false;
// ]]></script>
<script src="https://wayf.switch.ch/SWITCHaai/WAYF/embedded-wayf.js" type="text/javascript"></script>
<noscript>
    <p><strong>Login für Studierende und Dozierende via&nbsp;<a href="https://moodle.htwchur.ch/auth/shibboleth">SWITCHaai</a> mit HTW-Account-Daten:</strong><!-- <a href="https://moodle.htwchur.ch/auth/shibboleth"><img src="http://moodle.htwchur.ch/aai_button.gif" style="margin-top: 5px; margin-left: auto; margin-right: auto;" /></a>   --></p>
</noscript>
<!-- EMBEDDED-WAYF-END -->
</div>
            </div>
            </div>
            <div class="<?php if (isloggedin() and !isguestuser()) echo 'span12'; else echo 'span6';?>">
            <?php
            echo $OUTPUT->course_content_header();
            echo $OUTPUT->main_content();
            echo $OUTPUT->course_content_footer();
            ?>
            </div>
            </div>
            </div>
        </section>
    </div>

    <footer id="page-footer">
        <div id="course-footer"><?php echo $OUTPUT->course_footer(); ?></div>
        <?php
        echo $html->footnote;
        echo $OUTPUT->standard_footer_html();
        ?>
    </footer>

    <?php echo $OUTPUT->standard_end_of_body_html() ?>

</div>
</body>
</html>
