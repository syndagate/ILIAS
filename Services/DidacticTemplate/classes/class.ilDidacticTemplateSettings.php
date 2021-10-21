<?php declare(strict_types=1);
/* Copyright (c) 1998-2009 ILIAS open source, Extended GPL, see docs/LICENSE */




/**
 * Didactical template settings
 *
 * @author Stefan Meyer <meyer@leifos.com>
 * @defgroup ServicesDidacticTemplate
 */
class ilDidacticTemplateSettings
{
    private static $instance = null;
    private static $instances = [];


    private $templates = array();
    private $obj_type = '';

    /**
     * Constructor
     * @param int $a_id
     */
    private function __construct($a_obj_type = '')
    {
        $this->obj_type = $a_obj_type;
        $this->read();
    }

    /**
     * Get singelton instance
     * @return ilDidacticTemplateSettings
     */
    public static function getInstance()
    {
        if (self::$instance) {
            return self::$instance;
        }
        return self::$instance = new ilDidacticTemplateSettings();
    }

    /**
     * Get instance by obj type
     * @param string $a_obj_type
     * @return ilDidacticTemplateSettings
     */
    public static function getInstanceByObjectType($a_obj_type)
    {
        if (isset(self::$instances[$a_obj_type])) {
            return self::$instances[$a_obj_type];
        }
        return self::$instances[$a_obj_type] = new ilDidacticTemplateSettings($a_obj_type);
    }

    /**
     * @return string[]
     * @throws ilDatabaseException
     */
    public static function lookupAssignedObjectTypes() : array
    {
        global $DIC;

        $db = $DIC->database();
        $query = 'select distinct (obj_type) from didactic_tpl_sa ' .
            'group by obj_type';
        $res = $db->query($query);
        $types = [];
        while ($row = $res->fetchRow(ilDBConstants::FETCHMODE_OBJECT)) {
            $types[] = $row->obj_type;
        }
        return $types;
    }

    /**
     * Get templates
     * @return ilDidacticTemplateSetting[]
     */
    public function getTemplates()
    {
        return (array) $this->templates;
    }

    /**
     * Get object type
     * @return string
     */
    public function getObjectType()
    {
        return $this->obj_type;
    }

    /**
     * Read disabled templates
     */
    public function readInactive()
    {
        global $DIC;

        $ilDB = $DIC['ilDB'];

        $query = 'SELECT dtpl.id FROM didactic_tpl_settings dtpl ';

        if ($this->getObjectType()) {
            $query .= 'JOIN didactic_tpl_sa tplsa ON dtpl.id = tplsa.id ';
        }
        $query .= 'WHERE enabled = ' . $ilDB->quote(0, 'integer') . ' ';

        if ($this->getObjectType()) {
            $query .= 'AND obj_type = ' . $ilDB->quote($this->getObjectType(), 'text');
        }

        $res = $ilDB->query($query);
        while ($row = $res->fetchRow(ilDBConstants::FETCHMODE_OBJECT)) {
            $this->templates[$row->id] = new ilDidacticTemplateSetting($row->id);
        }
        return true;
    }

    /**
     * Read active didactic templates
     * @return bool
     */
    protected function read()
    {
        global $DIC;

        $ilDB = $DIC['ilDB'];

        $query = 'SELECT dtpl.id FROM didactic_tpl_settings dtpl ';

        if ($this->getObjectType()) {
            $query .= 'JOIN didactic_tpl_sa tplsa ON dtpl.id = tplsa.id ';
        }
        $query .= 'WHERE enabled = ' . $ilDB->quote(1, 'integer') . ' ';

        if ($this->getObjectType()) {
            $query .= 'AND obj_type = ' . $ilDB->quote($this->getObjectType(), 'text');
        }

        $res = $ilDB->query($query);
        while ($row = $res->fetchRow(ilDBConstants::FETCHMODE_OBJECT)) {
            $this->templates[$row->id] = new ilDidacticTemplateSetting($row->id);
        }
        return true;
    }
}
