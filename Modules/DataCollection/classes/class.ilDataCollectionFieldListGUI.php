<?php
/* Copyright (c) 1998-2009 ILIAS open source, Extended GPL, see docs/LICENSE */

require_once ("./Modules/DataCollection/classes/class.ilDataCollectionField.php");
require_once ("./Modules/DataCollection/classes/class.ilDataCollectionTable.php");
include_once("class.ilDataCollectionDatatype.php");
require_once "class.ilDataCollectionCache.php";
require_once('./Services/Utilities/classes/class.ilConfirmationGUI.php');


/**
* Class ilDataCollectionFieldListGUI
*
* @author Martin Studer <ms@studer-raimann.ch>
* @author Marcel Raimann <mr@studer-raimann.ch>
* @author Fabian Schmid <fs@studer-raimann.ch>
* @author Oskar Truffer <ot@studer-raimann.ch>
* @author Stefan Wanzenried <sw@studer-raimann.ch>
* @version $Id: 
*
*
* @ingroup ModulesDataCollection
*/
class ilDataCollectionFieldListGUI
{
	/**
	 * Constructor
	 *
	 * @param	object	$a_parent_obj
	 * @param	int $table_id
	 */
	public function  __construct(ilObjDataCollectionGUI $a_parent_obj, $table_id)
	{
		$this->main_table_id = $a_parent_obj->object->getMainTableId();
		$this->table_id = $table_id;
		$this->parent_obj = $a_parent_obj;
		$this->obj_id = $a_parent_obj->obj_id;
	}
	
	
	/**
	 * execute command
	 */
	public function executeCommand()
	{
		global $tpl, $ilCtrl;
		
		$cmd = $ilCtrl->getCmd();
		
		switch($cmd)
		{
			default:
				$this->$cmd();
				break;
		}
	}

    /**
     * Delete multiple fields
     */
    public function deleteFields() {
        global $ilCtrl, $lng;

        $field_ids = isset($_POST['dcl_field_ids']) ? $_POST['dcl_field_ids'] : array();
        $table = ilDataCollectionCache::getTableCache($this->table_id);
        foreach ($field_ids as $field_id) {
            $table->deleteField($field_id);
        }
        ilUtil::sendSuccess($lng->txt('dcl_msg_fields_deleted'), true);
        $ilCtrl->redirect($this, 'listFields');
    }

    /**
     * Confirm deletion of multiple fields
     */
    public function confirmDeleteFields() {
        global $ilCtrl, $lng, $tpl, $ilTabs;
        /** @var ilTabsGUI $ilTabs */
        $ilTabs->clearSubTabs();
        $conf = new ilConfirmationGUI();
        $conf->setFormAction($ilCtrl->getFormAction($this));
        $conf->setHeaderText($lng->txt('dcl_confirm_delete_fields'));
        $field_ids = isset($_POST['dcl_field_ids']) ? $_POST['dcl_field_ids'] : array();
        foreach ($field_ids as $field_id) {
            /** @var ilDataCollectionField $field */
            $field = ilDataCollectionCache::getFieldCache($field_id);
            $conf->addItem('dcl_field_ids[]', $field_id, $field->getTitle());
        }
        $conf->setConfirm($lng->txt('delete'), 'deleteFields');
        $conf->setCancel($lng->txt('cancel'), 'listFields');
        $tpl->setContent($conf->getHTML());
    }

    /*
     * save
     */
	public function save()
	{
		global $lng;
		$table = ilDataCollectionCache::getTableCache($_GET['table_id']);
		$fields = $table->getFields();

		foreach($fields as $field)
		{
			$field->setVisible($_POST['visible'][$field->getId()] == "on");
			$field->setEditable($_POST['editable'][$field->getId()] == "on");
			$field->setFilterable($_POST['filterable'][$field->getId()] == "on");
			$field->setLocked($_POST['locked'][$field->getId()] == "on");
			$field->setExportable($_POST['exportable'][$field->getId()] == "on");
			$field->setOrder($_POST['order'][$field->getId()]);
			$field->doUpdate();
		}
		$table->buildOrderFields();
		ilUtil::sendSuccess($lng->txt("dcl_table_settings_saved"));
		$this->listFields();
	}
	
	/**
	 * list fields
	 */
	public function listFields()
	{
		global $tpl, $lng, $ilCtrl, $ilToolbar;

		// Show tables
		require_once("./Modules/DataCollection/classes/class.ilDataCollectionTable.php");
		$tables = $this->parent_obj->object->getTables();

		foreach($tables as $table)
		{
				$options[$table->getId()] = $table->getTitle();
		}
		include_once './Services/Form/classes/class.ilSelectInputGUI.php';
		$table_selection = new ilSelectInputGUI('', 'table_id');
		$table_selection->setOptions($options);
		$table_selection->setValue($this->table_id);

		$ilToolbar->setFormAction($ilCtrl->getFormActionByClass("ilDataCollectionFieldListGUI", "doTableSwitch"));
        $ilToolbar->addText($lng->txt("dcl_table"));
		$ilToolbar->addInputItem($table_selection);
		$ilToolbar->addFormButton($lng->txt('change'),'doTableSwitch');
        $ilToolbar->addSeparator();
		$ilToolbar->addButton($lng->txt("dcl_add_new_table"), $ilCtrl->getLinkTargetByClass("ildatacollectiontableeditgui", "create"));
        $ilToolbar->addSeparator();
        $ilCtrl->setParameterByClass("ildatacollectiontableeditgui", "table_id", $this->table_id);
		$ilToolbar->addButton($lng->txt("dcl_table_settings"), $ilCtrl->getLinkTargetByClass("ildatacollectiontableeditgui", "edit"));
		$ilToolbar->addButton($lng->txt("dcl_delete_table"), $ilCtrl->getLinkTargetByClass("ildatacollectiontableeditgui", "confirmDelete"));
        $ilToolbar->addButton($lng->txt("dcl_add_new_field"), $ilCtrl->getLinkTargetByClass("ildatacollectionfieldeditgui", "create"));

        // requested not to implement this way...
//        $tpl->addJavaScript("Modules/DataCollection/js/fastTableSwitcher.js");

		require_once('./Modules/DataCollection/classes/class.ilDataCollectionFieldListTableGUI.php');
		$list = new ilDataCollectionFieldListTableGUI($this, $ilCtrl->getCmd(), $this->table_id);

		$tpl->setContent($list->getHTML());

	}
	
	/*
	 * doTableSwitch
	 */
	public function doTableSwitch()
	{
		global $ilCtrl;

		$ilCtrl->setParameterByClass("ilObjDataCollectionGUI", "table_id", $_POST['table_id']);
		$ilCtrl->redirectByClass("ilDataCollectionFieldListGUI", "listFields"); 			
	}
}

?>