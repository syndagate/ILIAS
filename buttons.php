<?php
/**
* button bar in main screen
* adapted from ilias 2
*
* @author Peter Gabriel <pgabriel@databay.de>
* @version $Id$
*
* @package ilias-layout
*/
require_once "./include/inc.header.php";

$tpl->addBlockFile("CONTENT", "navigation", "tpl.main_buttons.html");
include("./include/inc.mainmenu.php");

$tpl->show();

?>