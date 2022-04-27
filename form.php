<?php
//para capturar la info que se ingresa en los inputs del form tengo que crear variables

$nombre = $_POST ['nombre'];
$mail = $_POST ['email' ];
$mensaje = $_POST ['texterea' ];
/* ------------------------- a quien le mndo la info ------------------------ */
$para = 'guilleesquivel.ge@gmail.com'
$asunto = 'Formulario'

/* --------------------------------- funcion -------------------------------- */
mail($para, $asunto, utf8_decode($mensaje));
/* ---------------- funcion que redrirecciona a los usuarios ---------------- */

header ('Location:exito.html');
?>