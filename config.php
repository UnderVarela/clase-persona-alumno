<?php

// Ver fichero actual:
// echo __FILE__;



// Ver directorio actual de trabajo:
// echo dirname(__FILE__);

define('DIRNAME', dirname(__FILE__));
define('MODELS', DIRNAME.DIRECTORY_SEPARATOR.'models'.DIRECTORY_SEPARATOR);
define('VIEWS', DIRNAME.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR);

