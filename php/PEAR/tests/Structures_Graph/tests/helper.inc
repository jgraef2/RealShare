<?php
if ('/customers/6/5/d/real121.com/httpd.www/php/PEAR' == '@'.'php_dir'.'@') {
    // This package hasn't been installed.
    // Adjust path to ensure includes find files in working directory.
    set_include_path(dirname(dirname(__FILE__))
        . PATH_SEPARATOR . dirname(__FILE__)
        . PATH_SEPARATOR . get_include_path());
}

require_once 'Structures/Graph.php';
