<?php
// Set the title of the page
define('PAGENAME', 'Clearsite Dashboard');

// Set the current date and time constants
define('DATE', date('Y-m-d'));
define('TIME', date('H:i'));

// Set needed folders for page loading
define('VIEW', 'view/');
define('PARTS', VIEW . 'parts/');
define('ERRORS', PARTS . 'errors/');
define('MAILS', PARTS . 'mails/');

// Set img, ico and svg directories
define('IMG', '/img/');
define('ICO', IMG . 'ico/');
define('SVG', IMG . 'svg/');

// Set needed index directories
define('META', PARTS . '/index/meta.phtml');
define('CSS', PARTS . '/index/css.phtml');
define('JS', PARTS . '/index/js.phtml');

// Set the directories of the error pages
define('ERROR_403_PAGE', ERRORS . '403.phtml');
define('ERROR_404_PAGE', ERRORS . '404.phtml');
define('ERROR_500_PAGE', ERRORS . '500.phtml');
define('ERROR_UNSUPPORTED', ERRORS . 'unsupported.phtml');

// Server information
define('INFO', 'Server info: ' . apache_get_version());