<?php
$BEAUT_PATH = realpath(".") . "/Services/COPage/syntax_highlight/php";
if (!isset($BEAUT_PATH)) {
    return;
}
require_once("$BEAUT_PATH/Beautifier/HFile.php");
  class HFile_coldfusion431 extends HFile
  {
      public function HFile_coldfusion431()
      {
          $this->HFile();
          /*************************************/
          // Beautifier Highlighting Configuration File
//
          /*************************************/
          // Flags

          $this->nocase            	= "0";
          $this->notrim            	= "0";
          $this->perl              	= "0";

          // Colours

          $this->colours        	= array("blue", "purple");
          $this->quotecolour       	= "blue";
          $this->blockcommentcolour	= "green";
          $this->linecommentcolour 	= "green";

          // Indent Strings

          $this->indent            	= array();
          $this->unindent          	= array();

          // String characters and delimiters

          $this->stringchars       	= array();
          $this->delimiters        	= array("~", "!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "-", "+", "=", "|", "\\", "{", "}", "[", "]", ":", ";", "\"", "'", "<", ">", " ", ",", "	", ".", "?");
          $this->escchar           	= "";

          // Comment settings

          $this->linecommenton     	= array("");
          $this->blockcommenton    	= array("");
          $this->blockcommentoff   	= array("");

          // Keywords (keyword mapping to colour number)

          $this->keywords          	= array(
            "/L10" => "",
            "Nocase" => "",
            "Noquote" => "",
            "HTML_LANG" => "",
            "Block" => "",
            "Comment" => "",
            "On" => "",
            "=" => "",
            "<!" => "",
            "Off" => "",
            ">" => "",
            "File" => "",
            "Extensions" => "",
            "HTM" => "",
            "HTML" => "",
            "DBM" => "",
            "CFM" => "",
            "<A>" => "1",
            "</A>" => "1",
            "<ABOVE>" => "1",
            "<ADDRESS>" => "1",
            "</ADDRESS>" => "1",
            "<APPLET" => "1",
            "</APPLET>" => "1",
            "<ARRAY>" => "1",
            "<AREA" => "1",
            "</AREA>" => "1",
            "<B>" => "1",
            "</B>" => "1",
            "<BASE" => "1",
            "<BASEFONT" => "1",
            "<BGSOUND" => "1",
            "<BIG>" => "1",
            "</BIG>" => "1",
            "<BLINK>" => "1",
            "</BLINK>" => "1",
            "<BLOCKQUOTE>" => "1",
            "</BLOCKQUOTE>" => "1",
            "<BODY" => "1",
            "<BODY>" => "1",
            "</BODY>" => "1",
            "<BOX>" => "1",
            "<BR" => "1",
            "<BR>" => "1",
            "<CAPTION>" => "1",
            "</CAPTION>" => "1",
            "<CENTER>" => "1",
            "</CENTER>" => "1",
            "<CITE>" => "1",
            "</CITE>" => "1",
            "<CODE>" => "1",
            "</CODE>" => "1",
            "<CFIF>" => "1",
            "<CFELSE>" => "1",
            "</CFIF>" => "1",
            "<CFSET" => "1",
            "<CFQUERY" => "1",
            "</CFQUERY>" => "1",
            "<CFOUTPUT>" => "1",
            "</CFOUTPUT>" => "1",
            "<CFMAIL" => "1",
            "</CFMAIL>" => "1",
            "<CFINSERT" => "1",
            "<CFLOCATION" => "1",
            "<CFINCLUDE" => "1",
            "<CFOUTPUT" => "1",
            "<CFABORT>" => "1",
            "<CFSQL" => "1",
            "<CFCOOKIE" => "1",
            "<CFLOOP" => "1",
            "</CFLOOP>" => "1",
            "<DD>" => "1",
            "<DFN>" => "1",
            "<DIR>" => "1",
            "</DIR>" => "1",
            "<DIV>" => "1",
            "</DIV>" => "1",
            "<DL>" => "1",
            "</DL>" => "1",
            "<DT>" => "1",
            "<DBIF" => "1",
            "<DBELSE>" => "1",
            "</DBIF>" => "1",
            "<DBSET" => "1",
            "<DBQUERY" => "1",
            "</DBQUERY>" => "1",
            "<DBOUTPUT>" => "1",
            "</DBOUTPUT>" => "1",
            "<DBMAIL" => "1",
            "</DBMAIL>" => "1",
            "<DBINSERT" => "1",
            "<DBLOCATION" => "1",
            "<DBINCLUDE" => "1",
            "<DBOUTPUT" => "1",
            "<DBABORT>" => "1",
            "<DBSQL" => "1",
            "<DBCOOKIE>" => "1",
            "<EM>" => "1",
            "</EM>" => "1",
            "<EMBED>" => "1",
            "<FIG>" => "1",
            "<FONT" => "1",
            "</FONT>" => "1",
            "<FORM>" => "1",
            "<FORM" => "1",
            "</FORM>" => "1",
            "<FRAME" => "1",
            "<FRAMESET" => "1",
            "</FRAMESET>" => "1",
            "<H>" => "1",
            "<H1>" => "1",
            "<H2>" => "1",
            "<H3>" => "1",
            "<H4>" => "1",
            "<H5>" => "1",
            "<H6>" => "1",
            "</H1>" => "1",
            "</H2>" => "1",
            "</H3>" => "1",
            "</H4>" => "1",
            "</H5>" => "1",
            "</H6>" => "1",
            "<HEAD>" => "1",
            "</HEAD>" => "1",
            "<HR>" => "1",
            "<HR" => "1",
            "<HTML>" => "1",
            "</HTML>" => "1",
            "<I>" => "1",
            "</I>" => "1",
            "<IMG" => "1",
            "<INPUT>" => "1",
            "<INPUT" => "1",
            "</INPUT>" => "1",
            "<ISINDEX>" => "1",
            "<KBD>" => "1",
            "</KBD>" => "1",
            "<LI>" => "1",
            "<LINK" => "1",
            "</LI>" => "1",
            "<MAP" => "1",
            "</MAP>" => "1",
            "<MARQUEE" => "1",
            "</MARQUEE>" => "1",
            "<MENU>" => "1",
            "</MENU>" => "1",
            "<META>" => "1",
            "<NEXTID" => "1",
            "<NOBR>" => "1",
            "</NOBR>" => "1",
            "<NOFRAMES>" => "1",
            "</NOFRAMES>" => "1",
            "<NOTE>" => "1",
            "</NOTE>" => "1",
            "<OL>" => "1",
            "</OL>" => "1",
            "<OPTION>" => "1",
            "<P" => "1",
            "<P>" => "1",
            "</P>" => "1",
            "<PRE>" => "1",
            "</PRE>" => "1",
            "<RANGE>" => "1",
            "<ROOT>" => "1",
            "<SAMP>" => "1",
            "</SAMP>" => "1",
            "<SCRIPT" => "1",
            "</SCRIPT>" => "1",
            "<SELECT>" => "1",
            "</SELECT>" => "1",
            "<SMALL>" => "1",
            "</SMALL>" => "1",
            "<SOUND" => "1",
            "<SQRT>" => "1",
            "<STYLE>" => "1",
            "<STRIKE>" => "1",
            "</STRIKE>" => "1",
            "<STRONG>" => "1",
            "</STRONG>" => "1",
            "<SUB>" => "1",
            "</SUB>" => "1",
            "<SUP>" => "1",
            "</SUP>" => "1",
            "<SELECT" => "1",
            "<TABLE>" => "1",
            "<TABLE" => "1",
            "</TABLE>" => "1",
            "<TD" => "1",
            "<TD>" => "1",
            "</TD>" => "1",
            "<TEXT>" => "1",
            "<TEXTAREA>" => "1",
            "</TEXTAREA>" => "1",
            "<TH>" => "1",
            "</TH>" => "1",
            "<TITLE>" => "1",
            "</TITLE>" => "1",
            "<TR" => "1",
            "<TR>" => "1",
            "</TR>" => "1",
            "<TT>" => "1",
            "</TT>" => "1",
            "<U>" => "1",
            "</U>" => "1",
            "<UL>" => "1",
            "</UL>" => "1",
            "<VAR>" => "1",
            "</VAR>" => "1",
            "<WBR>" => "1",
            "ACTION=" => "2",
            "ALIGN=" => "2",
            "ALINK=" => "2",
            "ALT=" => "2",
            "AUTOSTART=" => "2",
            "BACKGROUND=" => "2",
            "BEHAVIOR" => "2",
            "BELOW" => "2",
            "BGCOLOR=" => "2",
            "BORDER=" => "2",
            "BORDER" => "2",
            "CELLPADDING" => "2",
            "CELLSPACING" => "2",
            "COLS" => "2",
            "COLSPAN" => "2",
            "COLOR=" => "2",
            "DATASOURCE=" => "2",
            "DIRECTION" => "2",
            "ENDROW=" => "2",
            "FACE=" => "2",
            "FORMFIELDS=" => "2",
            "FROM=" => "2",
            "HEIGHT=" => "2",
            "HREF=" => "2",
            "HIDDEN=" => "2",
            "ISMAP" => "2",
            "LANGUAGE" => "2",
            "LINK" => "2",
            "LOOP=" => "2",
            "MAXROWS=" => "2",
            "METHOD=" => "2",
            "MARGINHEIGHT=" => "2",
            "MARGINWIDTH=" => "2",
            "NAME=" => "2",
            "ONLOAD" => "2",
            "QUERY=" => "2",
            "ROWS" => "2",
            "ROWSPAN" => "2",
            "SIZE=" => "2",
            "SQL=" => "2",
            "SRC=" => "2",
            "START" => "2",
            "SUBJECT=" => "2",
            "STARTROW=" => "2",
            "TEXT=" => "2",
            "TOPMARGIN" => "2",
            "TYPE=" => "2",
            "TO=" => "2",
            "TEMPLATE=" => "2",
            "TABLENAME=" => "2",
            "URL=" => "2",
            "VALIGN=" => "2",
            "VALUE=" => "2",
            "VLINK=" => "2",
            "VOLUME=" => "2",
            "WIDTH=" => "2");

          // Special extensions

          // Each category can specify a PHP function that returns an altered
          // version of the keyword.
        
        

          $this->linkscripts    	= array(
            "" => "donothing",
            "1" => "donothing",
            "2" => "donothing");
      }


      public function donothing($keywordin)
      {
          return $keywordin;
      }
  }
