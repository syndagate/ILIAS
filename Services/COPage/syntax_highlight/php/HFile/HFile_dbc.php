<?php
$BEAUT_PATH = realpath(".") . "/Services/COPage/syntax_highlight/php";
if (!isset($BEAUT_PATH)) {
    return;
}
require_once("$BEAUT_PATH/Beautifier/HFile.php");
  class HFile_dbc extends HFile
  {
      public function HFile_dbc()
      {
          $this->HFile();
          /*************************************/
          // Beautifier Highlighting Configuration File
          // DB/C
          /*************************************/
          // Flags

          $this->nocase            	= "0";
          $this->notrim            	= "0";
          $this->perl              	= "0";

          // Colours

          $this->colours        	= array("blue", "purple", "brown", "purple");
          $this->quotecolour       	= "blue";
          $this->blockcommentcolour	= "green";
          $this->linecommentcolour 	= "green";

          // Indent Strings

          $this->indent            	= array("Then");
          $this->unindent          	= array("End", "Next", "End If", "End Select");

          // String characters and delimiters

          $this->stringchars       	= array();
          $this->delimiters        	= array();
          $this->escchar           	= "";

          // Comment settings

          $this->linecommenton     	= array("");
          $this->blockcommenton    	= array("");
          $this->blockcommentoff   	= array("");

          // Keywords (keyword mapping to colour number)

          $this->keywords          	= array(
            "Abs" => "1",
            "Add" => "1",
            "Aimdex" => "1",
            "Append" => "1",
            "Arccos" => "1",
            "Arcsin" => "1",
            "Arctan" => "1",
            "Beep" => "1",
            "Build" => "1",
            "Bump" => "1",
            "Change" => "1",
            "Charrestore" => "1",
            "Charsave" => "1",
            "Check10" => "1",
            "Check11" => "1",
            "Chop" => "1",
            "Clear" => "1",
            "Clearadr" => "1",
            "Clearendkey" => "1",
            "Clearlabel" => "1",
            "Clock" => "1",
            "Close" => "1",
            "Closeall" => "1",
            "Cmatch" => "1",
            "Cmove" => "1",
            "Comclose" => "1",
            "Comclr" => "1",
            "Comctl" => "1",
            "Comopen" => "1",
            "Compare" => "1",
            "Compareadr" => "1",
            "Comtst" => "1",
            "Comwait" => "1",
            "Console" => "1",
            "Copy" => "1",
            "Cos" => "1",
            "Count" => "1",
            "Create" => "1",
            "Debug" => "1",
            "Default" => "1",
            "Delete" => "1",
            "Deletek" => "1",
            "Destroy" => "1",
            "Disable" => "1",
            "Display" => "1",
            "Divide" => "1",
            "Draw" => "1",
            "Edit" => "1",
            "Empty" => "1",
            "Enable" => "1",
            "Encode" => "1",
            "Endroutine" => "1",
            "Endset" => "1",
            "Erase" => "1",
            "Execute" => "1",
            "Exist" => "1",
            "Exp" => "1",
            "Extend" => "1",
            "Filepi" => "1",
            "Fill" => "1",
            "Flagrestore" => "1",
            "Flagsave" => "1",
            "Flusheof" => "1",
            "Format" => "1",
            "Fposit" => "1",
            "Get" => "1",
            "Getcolor" => "1",
            "Getcursor" => "1",
            "Getendkey" => "1",
            "Getglobal" => "1",
            "GetLabel" => "1",
            "Getmodules" => "1",
            "Getname" => "1",
            "Getparm" => "1",
            "Getpostion" => "1",
            "Getwindow" => "1",
            "Hide" => "1",
            "Index" => "1",
            "Insert" => "1",
            "Keyin" => "1",
            "Label" => "1",
            "Lcmove" => "1",
            "Lenset" => "1",
            "Link" => "1",
            "List" => "1",
            "Listend" => "1",
            "Load" => "1",
            "Loadadr" => "1",
            "Loadlabel" => "1",
            "Loadmod" => "1",
            "Loadparm" => "1",
            "Log" => "1",
            "Log10" => "1",
            "Lroutine" => "1",
            "Make" => "1",
            "Makeglobal" => "1",
            "Makevar" => "1",
            "Match" => "1",
            "Mod" => "1",
            "Move" => "1",
            "Moveadr" => "1",
            "Movefptr" => "1",
            "Movelength" => "1",
            "Movelptr" => "1",
            "Movesize" => "1",
            "Moveevl" => "1",
            "Mult" => "1",
            "Multiply" => "1",
            "Nformat" => "1",
            "Noeject" => "1",
            "Noreturn" => "1",
            "Open" => "1",
            "Pack" => "1",
            "Pause" => "1",
            "Perform" => "1",
            "Ploadmod" => "1",
            "Popreturn" => "1",
            "Power" => "1",
            "Prep" => "1",
            "Prepare" => "1",
            "Print" => "1",
            "Pushreturn" => "1",
            "Put" => "1",
            "Putfirst" => "1",
            "Query" => "1",
            "Read" => "1",
            "Readgplk" => "1",
            "Readkg" => "1",
            "Readglk" => "1",
            "Readkgp" => "1",
            "Readkp" => "1",
            "Readkplk" => "1",
            "Readks" => "1",
            "Readkslk" => "1",
            "Readlk" => "1",
            "Recv" => "1",
            "Recvclr" => "1",
            "Reformat" => "1",
            "Release" => "1",
            "Rename" => "1",
            "Replace" => "1",
            "Reposit" => "1",
            "Reset" => "1",
            "Resetparm" => "1",
            "Restore" => "1",
            "Retcount" => "1",
            "Rollout" => "1",
            "Routine" => "1",
            "Save" => "1",
            "Scan" => "1",
            "Scrnrestore" => "1",
            "Scrnsave" => "1",
            "Scrnsize" => "1",
            "Search" => "1",
            "Send" => "1",
            "Sendclr" => "1",
            "Set" => "1",
            "Setendkey" => "1",
            "Setflag" => "1",
            "Setlptr" => "1",
            "Setnull" => "1",
            "Sformat" => "1",
            "Show" => "1",
            "Shutdown" => "1",
            "Sin" => "1",
            "Sort" => "1",
            "Sound" => "1",
            "Splclose" => "1",
            "Splopen" => "1",
            "Splopt" => "1",
            "Splcode" => "1",
            "Splexec" => "1",
            "Sqlmsg" => "1",
            "Sqrt" => "1",
            "Squeeze" => "1",
            "Staterestore" => "1",
            "Statesave" => "1",
            "Statesize" => "1",
            "Store" => "1",
            "Storeadr" => "1",
            "Storelabel" => "1",
            "Sub" => "1",
            "Subtract" => "1",
            "Tabpage" => "1",
            "Tan" => "1",
            "Test" => "1",
            "Testadr" => "1",
            "Testlabel" => "1",
            "Trapclr" => "1",
            "Traprestore" => "1",
            "Trapsave" => "1",
            "Trapsize" => "1",
            "Type" => "1",
            "Unlink" => "1",
            "Unload" => "1",
            "Unlock" => "1",
            "Unpack" => "1",
            "Unpacklist" => "1",
            "Updatab" => "1",
            "Update" => "1",
            "Wait" => "1",
            "Weof" => "1",
            "Winrest" => "1",
            "Winrestore" => "1",
            "Winsave" => "1",
            "Winsize" => "1",
            "Write" => "1",
            "Writeab" => "1",
            "Xor" => "1",
            "@" => "1",
            "Break" => "2",
            "Branch" => "2",
            "Call" => "2",
            "Case" => "2",
            "CCall" => "2",
            "Chain" => "2",
            "Continue" => "2",
            "Else" => "2",
            "Endif" => "2",
            "Endswitch" => "2",
            "External" => "2",
            "For" => "2",
            "Goto" => "2",
            "If" => "2",
            "IFNDEF" => "2",
            "Inc" => "2",
            "Loop" => "2",
            "Movelabel" => "2",
            "Movelv" => "2",
            "Movevl" => "2",
            "Return" => "2",
            "Repeat" => "2",
            "Stop" => "2",
            "Switch" => "2",
            "Trap" => "2",
            "Until" => "2",
            "While" => "2",
            "\"" => "4",
            "Binary" => "4",
            "Cobol" => "4",
            "Colorbits" => "4",
            "Comp" => "4",
            "Compressed" => "4",
            "Data" => "4",
            "Dup" => "4",
            "Duplicates" => "4",
            "Dynamic" => "4",
            "Entries" => "4",
            "Fix" => "4",
            "Fixed" => "4",
            "H" => "4",
            "Increment" => "4",
            "Initial" => "4",
            "KeyLen" => "4",
            "Keylength" => "4",
            "Native" => "4",
            "NoDup" => "4",
            "NoDuplicates" => "4",
            "Overlap" => "4",
            "Parent" => "4",
            "Size" => "4",
            "Standard" => "4",
            "Static" => "4",
            "Text" => "4",
            "Transient" => "4",
            "UnComp" => "4",
            "UnCompressed" => "4",
            "V" => "4",
            "Var" => "4",
            "Variable" => "4",
            "AFile" => "6",
            "And" => "6",
            "BKSPC" => "6",
            "BKTAB" => "6",
            "By" => "6",
            "Char" => "6",
            "Character" => "6",
            "Class" => "6",
            "ComFile" => "6",
            "Cverb" => "6",
            "Date" => "6",
            "Definition" => "6",
            "Device" => "6",
            "Dim" => "6",
            "DOWN" => "6",
            "DEFINE" => "6",
            "END" => "6",
            "Endcalss" => "6",
            "EOS" => "6",
            "Equal" => "6",
            "Equ" => "6",
            "Equate" => "6",
            "ESC" => "6",
            "File" => "6",
            "Float" => "6",
            "Form" => "6",
            "From" => "6",
            "Gchar" => "6",
            "Giving" => "6",
            "Gnumber" => "6",
            "Ginteger" => "6",
            "Gfloat" => "6",
            "Gobject" => "6",
            "GDevice" => "6",
            "Greater" => "6",
            "Gresource" => "6",
            "Gimage" => "6",
            "Gqueue" => "6",
            "Gpfile" => "6",
            "GNum" => "6",
            "GForm" => "6",
            "GCharacter" => "6",
            "GDim" => "6",
            "HOME" => "6",
            "IFile" => "6",
            "Image" => "6",
            "In" => "6",
            "Into" => "6",
            "Init" => "6",
            "Integer" => "6",
            "Int" => "6",
            "LEFT" => "6",
            "Less" => "6",
            "Like" => "6",
            "Method" => "6",
            "Module" => "6",
            "Names" => "6",
            "Nocase" => "6",
            "Noreset" => "6",
            "Not" => "6",
            "Num" => "6",
            "Number" => "6",
            "Object" => "6",
            "Over" => "6",
            "Or" => "6",
            "PFile" => "6",
            "Prior" => "6",
            "Queue" => "6",
            "Record" => "6",
            "Recordend" => "6",
            "Resource" => "6",
            "RIGHT" => "6",
            "TAB" => "6",
            "Time" => "6",
            "To" => "6",
            "Timestamp" => "6",
            "UP" => "6",
            "Using" => "6",
            "Varlist" => "6",
            "Verb" => "6",
            "With" => "6",
            "+" => "6",
            "-" => "6",
            "=" => "6",
            "//" => "6",
            "/" => "6",
            "%" => "6",
            "&" => "6",
            ">" => "6",
            "<" => "6",
            "^" => "6",
            "!" => "6",
            "|" => "6",
            "(" => "6",
            ")" => "6");

          // Special extensions

          // Each category can specify a PHP function that returns an altered
          // version of the keyword.
        
        

          $this->linkscripts    	= array(
            "1" => "donothing",
            "2" => "donothing",
            "4" => "donothing",
            "6" => "donothing");
      }


      public function donothing($keywordin)
      {
          return $keywordin;
      }
  }
