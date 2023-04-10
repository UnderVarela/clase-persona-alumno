<?php
declare(strict_types = 1);
// Cargamos variables/constantes globales del sistema
require_once('config.php');
require_once(MODELS.'Profesor.php');
require_once(MODELS.'Alumno.php');



// Lógica
$fechaActual = new DateTime();
$p = new Profesor("Capullo", "García", new DateTime('1977-04-14'));
$p->setNombre("Crápula");



// Cargar vista (lo que ve el usuario)
require_once(VIEWS.'alumno-view.php');