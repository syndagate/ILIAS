<?php

require_once "Services/ADT/classes/Bridges/class.ilADTPresentationBridge.php";

class ilADTFloatPresentationBridge extends ilADTPresentationBridge
{
	protected function isValidADT(ilADT $a_adt)
	{
		return ($a_adt instanceof ilADTFloat);
	}
	
	public function getHTML()
	{
		if(!$this->getADT()->isNull())
		{
			// :TODO: language specific?		
			// gev-patch start
			// changed . and ,
			return number_format($this->getADT()->getNumber(), 
				$this->getADT()->getCopyOfDefinition()->getDecimals(), ".", ",");
			// gev-patch end
		}
	}
	
	public function getSortable()
	{
		if(!$this->getADT()->isNull())
		{
			return $this->getADT()->getNumber();
		}
	}
}

?>