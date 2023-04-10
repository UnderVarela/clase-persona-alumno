<?php
declare(strict_types = 1);
// Cargamos variables/constantes globales del sistema
require_once('config.php');
require_once(MODELS.'Persona.php');
require_once(MODELS.'Alumno.php');



// Lógica
$fechaActual = new DateTime();
$p = new Alumno("Xurxo", "Gonzalez", new DateTime('1973-04-06'));



// Cargar vista (lo que ve el usuario)
require_once(VIEWS.'alumno-view.php');