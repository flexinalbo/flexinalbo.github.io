<?php
    define('APP_BASE_PATH', dirname(__FILE__));

    define('APP_FUNCTION_PATH', APP_BASE_PATH . '/includes');

    set_include_path($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'includes' .DIRECTORY_SEPARATOR);

?>