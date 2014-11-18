<?php
/**
 * Bootstrapping functions, essential and needed for Valla to work together with some common helpers. 
 *
 */
 
/**
 * Default exception handler.
 *
 */
function myExceptionHandler($exception) {
  echo "Valla: Uncaught exception: <p>" . $exception->getMessage() . "</p><pre>" . $exception->getTraceAsString(), "</pre>";
}
set_exception_handler('myExceptionHandler');
 
 
/**
 * Autoloader for classes.
 *
 */
function myAutoloader($class) {
  $path = VALLA_INSTALL_PATH . "/src/{$class}/{$class}.php";
  if(is_file($path)) {
    include($path);
  }
  else {
    throw new Exception("Classfile '{$class}' does not exists.");
  }
}
spl_autoload_register('myAutoloader');

/**
 * Dump all contents of a variable.
 *
 * @param mixed $value as the variable/array/object to dump.
 */
function dump($value) {
  echo '<pre>' . print_r($value, 1) . '</pre>';
}
