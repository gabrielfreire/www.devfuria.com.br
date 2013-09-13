<?php
/**
 * Arquivo index que funciona como redirecionador
 */


/**
 * Includes
 */
require "../../../furia/boot.php";


/**
 * Instancia a matéria
 */
define("LOGICA_DE_PROGRAMACAO", 3);
$materia = new Materia();
$materia->carregarDraft(Materia::idXML_LOGICA, LOGICA_DE_PROGRAMACAO);
$materia->setNivel(Materia::BASICO);


/**
 * View
 */
require BASE_PATH.VIEWS_PATH."materias.php";

?>