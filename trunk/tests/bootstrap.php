<?php
//turn off SOAP wsdl caching
ini_set("soap.wsdl_cache_enabled", "0");

//set include path
$libraryPath = realpath(dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'library');
$testLibraryPath = realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'library');

set_include_path(get_include_path() . PATH_SEPARATOR . $libraryPath . PATH_SEPARATOR . $testLibraryPath);

//set up autoloaders
spl_autoload_register('library_autoloader');
function library_autoloader($className)
{
    include str_replace('\\', DIRECTORY_SEPARATOR, $className . '.php');
}

require_once 'credentials.php';
