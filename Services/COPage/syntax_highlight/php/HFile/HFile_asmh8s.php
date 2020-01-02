<?php
$BEAUT_PATH = realpath(".") . "/Services/COPage/syntax_highlight/php";
if (!isset($BEAUT_PATH)) {
    return;
}
require_once("$BEAUT_PATH/Beautifier/HFile.php");
  class HFile_asmh8s extends HFile
  {
      public function HFile_asmh8s()
      {
          $this->HFile();
          /*************************************/
          // Beautifier Highlighting Configuration File
          // H8S Assembler
          /*************************************/
          // Flags

          $this->nocase            	= "0";
          $this->notrim            	= "0";
          $this->perl              	= "0";

          // Colours

          $this->colours        	= array("blue", "purple", "gray", "brown", "blue");
          $this->quotecolour       	= "blue";
          $this->blockcommentcolour	= "green";
          $this->linecommentcolour 	= "green";

          // Indent Strings

          $this->indent            	= array();
          $this->unindent          	= array();

          // String characters and delimiters

          $this->stringchars       	= array("\"", "'");
          $this->delimiters        	= array("!", "@", "#", "%", "^", "&", "*", "(", ")", "-", "+", "=", "|", "\\", "/", "{", "}", "[", "]", ":", ";", "\"", "'", "<", ">", " ", ",", " ", ".", "?");
          $this->escchar           	= "";

          // Comment settings

          $this->linecommenton     	= array(";");
          $this->blockcommenton    	= array("");
          $this->blockcommentoff   	= array("");

          // Keywords (keyword mapping to colour number)

          $this->keywords          	= array(
            "add" => "1",
            "addx" => "1",
            "and" => "1",
            "adds" => "1",
            "andc" => "1",
            "adc" => "1",
            "adiw" => "1",
            "asr" => "1",
            "andi" => "1",
            "bset" => "1",
            "bsr" => "1",
            "bclr" => "1",
            "bnot" => "1",
            "btst" => "1",
            "bld" => "1",
            "bild" => "1",
            "bst" => "1",
            "bist" => "1",
            "band" => "1",
            "biand" => "1",
            "bor" => "1",
            "bior" => "1",
            "bxor" => "1",
            "bixor" => "1",
            "bra" => "1",
            "brn" => "1",
            "bhi" => "1",
            "bls" => "1",
            "bcc" => "1",
            "bhs" => "1",
            "bcs" => "1",
            "blo" => "1",
            "bne" => "1",
            "beq" => "1",
            "bvc" => "1",
            "bvs" => "1",
            "bpl" => "1",
            "bmi" => "1",
            "bge" => "1",
            "blt" => "1",
            "bgt" => "1",
            "ble" => "1",
            "b" => "1",
            "brbs" => "1",
            "brbc" => "1",
            "breq" => "1",
            "brne" => "1",
            "brcs" => "1",
            "br" => "1",
            "brsh" => "1",
            "brlo" => "1",
            "brmi" => "1",
            "brpl" => "1",
            "brge" => "1",
            "brlt" => "1",
            "brhs" => "1",
            "brhc" => "1",
            "brts" => "1",
            "brtc" => "1",
            "brvs" => "1",
            "brvc" => "1",
            "brie" => "1",
            "brid" => "1",
            "brcc" => "1",
            "cc" => "1",
            "cmp" => "1",
            "cp" => "1",
            "cpc" => "1",
            "cpi" => "1",
            "clc" => "1",
            "cbi" => "1",
            "cln" => "1",
            "clz" => "1",
            "cls" => "1",
            "clt" => "1",
            "clh" => "1",
            "clr" => "1",
            "cpse" => "1",
            "cli" => "1",
            "com" => "1",
            "das" => "1",
            "dec" => "1",
            "daa" => "1",
            "divxu" => "1",
            "divxs" => "1",
            "eepmov" => "1",
            "extu" => "1",
            "exts" => "1",
            "eor" => "1",
            "high" => "1",
            "inc" => "1",
            "ijmp" => "1",
            "icall" => "1",
            "in" => "1",
            "jmp" => "1",
            "jsr" => "1",
            "ldm" => "1",
            "ldc" => "1",
            "l" => "1",
            "ldi" => "1",
            "ld" => "1",
            "lpm" => "1",
            "ldd" => "1",
            "lds" => "1",
            "low" => "1",
            "lsl" => "1",
            "lsr" => "1",
            "mov" => "1",
            "movfpe" => "1",
            "movtpe" => "1",
            "mulxu" => "1",
            "mulxs" => "1",
            "not" => "1",
            "neg" => "1",
            "nop" => "1",
            "or" => "1",
            "orc" => "1",
            "out" => "1",
            "ori" => "1",
            "pop" => "1",
            "push" => "1",
            "rts" => "1",
            "rte" => "1",
            "rotl" => "1",
            "rotr" => "1",
            "rotxl" => "1",
            "rotxr" => "1",
            "rjmp" => "1",
            "rcall" => "1",
            "rol" => "1",
            "ror" => "1",
            "ret" => "1",
            "reti" => "1",
            "sub" => "1",
            "stm" => "1",
            "subs" => "1",
            "subx" => "1",
            "shal" => "1",
            "shar" => "1",
            "shll" => "1",
            "shlr" => "1",
            "sleep" => "1",
            "stc" => "1",
            "swap" => "1",
            "sbrc" => "1",
            "sbrs" => "1",
            "sbic" => "1",
            "sbis" => "1",
            "st" => "1",
            "sbi" => "1",
            "sec" => "1",
            "sen" => "1",
            "sei" => "1",
            "sev" => "1",
            "set" => "1",
            "seh" => "1",
            "ser" => "1",
            "sts" => "1",
            "subi" => "1",
            "sbc" => "1",
            "sbiw" => "1",
            "sbci" => "1",
            "std" => "1",
            "tas" => "1",
            "trapa" => "1",
            "vlv" => "1",
            "w" => "1",
            "wdr" => "1",
            "xor" => "1",
            "xcorc" => "1",
            "." => "1",
            "ascii" => "2",
            "asciz" => "2",
            "align" => "2",
            "bss" => "2",
            "comm" => "2",
            "cseg" => "2",
            "def" => "2",
            "dim" => "2",
            "dseg" => "2",
            "device" => "2",
            "equ" => "2",
            "endef" => "2",
            "end" => "2",
            "extern" => "2",
            "eseg" => "2",
            "file" => "2",
            "int" => "2",
            "include" => "2",
            "text" => "2",
            "type" => "2",
            "global" => "2",
            "long" => "2",
            "list" => "2",
            "nolist" => "2",
            "org" => "2",
            "rodata" => "2",
            "section" => "2",
            "scl" => "2",
            "size" => "2",
            "h8300h" => "2",
            "val" => "2",
            "@" => "3",
            "#" => "3",
            "ccr" => "4",
            "er0" => "4",
            "er1" => "4",
            "er2" => "4",
            "er3" => "4",
            "er4" => "4",
            "er5" => "4",
            "er6" => "4",
            "er7" => "4",
            "e0" => "4",
            "e1" => "4",
            "e2" => "4",
            "e3" => "4",
            "e4" => "4",
            "e5" => "4",
            "e6" => "4",
            "e7" => "4",
            "e8" => "4",
            "e9" => "4",
            "exr" => "4",
            "r0" => "4",
            "r1" => "4",
            "r2" => "4",
            "r3" => "4",
            "r4" => "4",
            "r5" => "4",
            "r6" => "4",
            "r7" => "4",
            "r8" => "4",
            "r9" => "4",
            "r10" => "4",
            "r11" => "4",
            "r12" => "4",
            "r13" => "4",
            "r14" => "4",
            "r15" => "4",
            "r16" => "4",
            "r17" => "4",
            "r18" => "4",
            "r19" => "4",
            "r20" => "4",
            "r21" => "4",
            "r22" => "4",
            "r23" => "4",
            "r24" => "4",
            "r25" => "4",
            "r26" => "4",
            "r27" => "4",
            "r28" => "4",
            "r29" => "4",
            "r30" => "4",
            "r31" => "4",
            "r0l" => "4",
            "r0h" => "4",
            "r1l" => "4",
            "r1h" => "4",
            "r2l" => "4",
            "r2h" => "4",
            "r3l" => "4",
            "r3h" => "4",
            "r4l" => "4",
            "r4h" => "4",
            "r5l" => "4",
            "r5h" => "4",
            "r6l" => "4",
            "r6h" => "4",
            "r7l" => "4",
            "r7h" => "4",
            "sp" => "4",
            "X" => "4",
            "XL" => "4",
            "XH" => "4",
            "Y" => "4",
            "YL" => "4",
            "YH" => "4",
            "Z" => "4",
            "ZL" => "4",
            "ZH" => "4",
            "ACSR" => "5",
            "ACD" => "5",
            "ACO" => "5",
            "ACI" => "5",
            "ACIE" => "5",
            "ACIC" => "5",
            "ACIS1" => "5",
            "ACIS0" => "5",
            "ADEN" => "5",
            "ADSC" => "5",
            "ADFR" => "5",
            "ADIF" => "5",
            "ADIE" => "5",
            "ADPS0" => "5",
            "ADPS1" => "5",
            "ADPS2" => "5",
            "ADCSR" => "5",
            "ADMUX" => "5",
            "ADCH" => "5",
            "ADCL" => "5",
            "ASSR" => "5",
            "AS2" => "5",
            "CTC1" => "5",
            "CS12" => "5",
            "CS11" => "5",
            "CS10" => "5",
            "COM1A" => "5",
            "COM1B" => "5",
            "CPOL" => "5",
            "CPHA" => "5",
            "CHR9" => "5",
            "CS02" => "5",
            "CS01" => "5",
            "CS00" => "5",
            "COM1A1" => "5",
            "COM1A0" => "5",
            "COM1B1" => "5",
            "COM1B0" => "5",
            "COM21" => "5",
            "COM20" => "5",
            "CTC2" => "5",
            "CS22" => "5",
            "CS21" => "5",
            "CS20" => "5",
            "DDRA" => "5",
            "DDRB" => "5",
            "DDRC" => "5",
            "DDRD" => "5",
            "DORD" => "5",
            "EEARH" => "5",
            "EEARL" => "5",
            "EEDR" => "5",
            "EECR" => "5",
            "EEMWE" => "5",
            "EEWE" => "5",
            "EERE" => "5",
            "EERIE" => "5",
            "EXTRF" => "5",
            "EEAR" => "5",
            "E2END" => "5",
            "FE" => "5",
            "FLASHEND" => "5",
            "GIMSK" => "5",
            "GIFR" => "5",
            "ICR1H" => "5",
            "ICR1L" => "5",
            "ICF1" => "5",
            "ISC11" => "5",
            "ISC10" => "5",
            "ISC01" => "5",
            "ISC00" => "5",
            "ICNC1" => "5",
            "ICES1" => "5",
            "INT1" => "5",
            "INT0" => "5",
            "INTF1" => "5",
            "INTF0" => "5",
            "MSTR" => "5",
            "MCUCR" => "5",
            "MCUSR" => "5",
            "MUX0" => "5",
            "MUX1" => "5",
            "MUX2" => "5",
            "OCR1AL" => "5",
            "OCR1AH" => "5",
            "OCR1BL" => "5",
            "OCR1BH" => "5",
            "OCIE1" => "5",
            "OCF1A" => "5",
            "OCF1B" => "5",
            "OR" => "5",
            "OCR2" => "5",
            "OCR2UB" => "5",
            "OCIE2" => "5",
            "OCIE1A" => "5",
            "OCIE1B" => "5",
            "OCF2" => "5",
            "PORTA" => "5",
            "PORTB" => "5",
            "PORTC" => "5",
            "PORTD" => "5",
            "PINA" => "5",
            "PINB" => "5",
            "PINC" => "5",
            "PIND" => "5",
            "PWM11" => "5",
            "PWM10" => "5",
            "PORF" => "5",
            "PWM2" => "5",
            "RXC" => "5",
            "RXCIE" => "5",
            "RXEN" => "5",
            "RXB8" => "5",
            "SPIE" => "5",
            "SPE" => "5",
            "SRE" => "5",
            "SRW" => "5",
            "SE" => "5",
            "SM" => "5",
            "SPDR" => "5",
            "SPSR" => "5",
            "SPCR" => "5",
            "SREG" => "5",
            "SPH" => "5",
            "SPL" => "5",
            "SPR1" => "5",
            "SPR0" => "5",
            "SPIF" => "5",
            "SM1" => "5",
            "SM0" => "5",
            "TIMSK" => "5",
            "TIFR" => "5",
            "TXB8" => "5",
            "TCCR0" => "5",
            "TCNT0" => "5",
            "TCCRA" => "5",
            "TCCR1B" => "5",
            "TCNT1L" => "5",
            "TCNT1H" => "5",
            "TOIE1" => "5",
            "TICIE" => "5",
            "TOIE0" => "5",
            "TOV1" => "5",
            "TOV0" => "5",
            "TXC" => "5",
            "TXCIE" => "5",
            "TXEN" => "5",
            "TCCR2" => "5",
            "TCCR1A" => "5",
            "TCNT2" => "5",
            "TCR2UB" => "5",
            "TCN2UB" => "5",
            "TOIE2" => "5",
            "TICIE1" => "5",
            "TOV2" => "5",
            "UDR" => "5",
            "USR" => "5",
            "UCR" => "5",
            "UBRR" => "5",
            "UDRE" => "5",
            "UDRIE" => "5",
            "WDTCR" => "5",
            "WDTOE" => "5",
            "WDE" => "5",
            "WDP2" => "5",
            "WDP1" => "5",
            "WDP0" => "5",
            "WCOL" => "5",
            "XRAMEND" => "5");

          // Special extensions

          // Each category can specify a PHP function that returns an altered
          // version of the keyword.
        
        

          $this->linkscripts    	= array(
            "1" => "donothing",
            "2" => "donothing",
            "3" => "donothing",
            "4" => "donothing",
            "5" => "donothing");
      }


      public function donothing($keywordin)
      {
          return $keywordin;
      }
  }
