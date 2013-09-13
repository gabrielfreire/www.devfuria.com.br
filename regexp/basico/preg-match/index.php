<?php
/**
 * Arquivo index que funciona como redirecionador
 */


/**
 * Includes
 */
require "../../../furia/boot.php";


/**
 * Instancia a matéria correta
 */
define("PREG_MATCH", 1);
$materia = new Materia();
$materia->carregar(Materia::idXML_REGEXP, PREG_MATCH);
$materia->setNivel(Materia::BASICO);

/**
 * View
 */
require BASE_PATH.VIEWS_PATH."materias.php";
?>