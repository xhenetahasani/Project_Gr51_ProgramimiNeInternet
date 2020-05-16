<?php


spl_autoload_register(function($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    include_once $_SERVER['DOCUMENT_ROOT'] . '/C:\Users\lenovo\Desktop\Project_Gr51_ProgramimiNeInternet//Application/' . $className . '.php';
});
?>
