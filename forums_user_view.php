<?php
/**
* forums_threads_new
*
* @author Wolfgang Merkens <wmerkens@databay.de>
* @version $Id$
*
* @package ilias
*/
require_once "./include/inc.header.php";
require_once "classes/class.Forum.php";

$frm = new Forum();

$lng->setSystemLanguage($ilias->ini->readVariable("language", "default"));

$tpl->addBlockFile("CONTENT", "content", "tpl.forums_user_view.html");
$tpl->addBlockFile("BUTTONS", "buttons", "tpl.buttons.html");

$tpl->setCurrentBlock("btn_cell");
$tpl->setVariable("BTN_LINK",$_GET["backurl"].".php?obj_id=".$_GET["obj_id"]."&parent=".$_GET["parent"]."&thr_pk=".$_GET["thr_pk"]."&pos_pk=".$_GET["pos_pk"]);
$tpl->setVariable("BTN_TXT", $lng->txt("back"));
$tpl->parseCurrentBlock();

if (!$rbacsystem->checkAccess("write", $_GET["obj_id"], $_GET["parent"])) {
	$ilias->raiseError($lng->txt("permission_denied"),$ilias->error_obj->MESSAGE);
}

$tpl->setVariable("TXT_FORUM_USER", $lng->txt("userdata"));

$author = $frm->getModerator($_GET["user"]);	

$tpl->setCurrentBlock("usertable");

$tpl->setVariable("ROWCOL1", "tblrow1");
$tpl->setVariable("ROWCOL2", "tblrow2");

$tpl->setVariable("TXT_LOGIN", $lng->txt("login"));
$tpl->setVariable("LOGIN",$author["login"]);	

$tpl->setVariable("TXT_NAME", $lng->txt("name"));
$tpl->setVariable("FIRSTNAME",$author["FirstName"]);	
$tpl->setVariable("SurName",$author["SurName"]);	

$tpl->setVariable("TXT_TITLE", $lng->txt("title"));
$tpl->setVariable("TITLE",$author["Title"]);

$tpl->setVariable("TXT_GENDER", $lng->txt("gender"));
$tpl->setVariable("GENDER",$author["Gender"]);

$tpl->setVariable("TXT_EMAIL", $lng->txt("email"));
$tpl->setVariable("EMAIL",$author["Email"]);

$tpl->setVariable("TXT_REGISTERED", $lng->txt("registered_since"));
$tpl->setVariable("REGISTERED",$author["create_date"] = $frm->convertDate($author["create_date"]));

$numPosts = $frm->countUserArticles($_GET["user"]);
$tpl->setVariable("TXT_NUM_POSTS", $lng->txt("forums_posts"));
$tpl->setVariable("NUM_POSTS",$numPosts);

$tpl->parseCurrentBlock("usertable");

if ($_GET["message"])
{
    $tpl->addBlockFile("MESSAGE", "message2", "tpl.message.html");
	$tpl->setCurrentBlock("message2");
	$tpl->setVariable("MSG", urldecode( $_GET["message"]));
	$tpl->parseCurrentBlock();
}


$tpl->show();

?>