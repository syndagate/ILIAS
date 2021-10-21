<?php declare(strict_types=1);
/* Copyright (c) 1998-2009 ILIAS open source, Extended GPL, see docs/LICENSE */




/**
 * Factory for didactic template actions
 *
 * @author Stefan Meyer <meyer@leifos.com>
 * @ingroup ServicesDidacticTemplate
 */
class ilDidacticTemplateActionFactory
{
    /**
     * Get action class by type
     * @param string $a_action_type
     * @return ilDidacticTemplateAction
     */
    public static function factoryByType($a_action_type)
    {
        switch ($a_action_type) {
            case ilDidacticTemplateAction::TYPE_LOCAL_POLICY:
                

                return new ilDidacticTemplateLocalPolicyAction();

            case ilDidacticTemplateAction::TYPE_LOCAL_ROLE:
                

                return new ilDidacticTemplateLocalRoleAction();

            case ilDidacticTemplateAction::TYPE_BLOCK_ROLE:
                

                return new ilDidacticTemplateBlockRoleAction();
        }
    }
    

    /**
     * Get instance by id and type
     * @param int $a_action_id
     * @param int $a_actions_type
     * @return ilDidacticTemplateAction
     */
    public static function factoryByTypeAndId($a_action_id, $a_action_type)
    {
        switch ($a_action_type) {
            case ilDidacticTemplateAction::TYPE_LOCAL_POLICY:
                

                return new ilDidacticTemplateLocalPolicyAction($a_action_id);

            case ilDidacticTemplateAction::TYPE_LOCAL_ROLE:
                

                return new ilDidacticTemplateLocalRoleAction($a_action_id);

            case ilDidacticTemplateAction::TYPE_BLOCK_ROLE:
                

                return new ilDidacticTemplateBlockRoleAction($a_action_id);
        }
    }


    /**
     * Get actions of one template
     * @param int $a_tpl_id
     */
    public static function getActionsByTemplateId($a_tpl_id)
    {
        global $DIC;

        $ilDB = $DIC['ilDB'];

        $query = 'SELECT id, type_id FROM didactic_tpl_a ' .
            'WHERE tpl_id = ' . $ilDB->quote($a_tpl_id, 'integer');
        $res = $ilDB->query($query);

        $actions = array();
        while ($row = $res->fetchRow(ilDBConstants::FETCHMODE_OBJECT)) {
            $actions[] = self::factoryByTypeAndId($row->id, $row->type_id);
        }
        return (array) $actions;
    }
}
