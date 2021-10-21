<?php declare(strict_types=1);
/* Copyright (c) 1998-2009 ILIAS open source, Extended GPL, see docs/LICENSE */


/**
 * Factory for didactic template filter patterns
 *
 * @author Stefan Meyer <meyer@leifos.com>
 * @ingroup ServicesDidacticTemplate
 */
class ilDidacticTemplateFilterPatternFactory
{
    /**
     * Get patterns by template id
     * @param int $a_tpl_id
     * @param array Array of ilDidacticTemplateFilterPattern
     */
    public static function lookupPatternsByParentId($a_parent_id, $a_parent_type)
    {
        global $DIC;

        $ilDB = $DIC['ilDB'];
        
        $query = 'SELECT pattern_id,pattern_type FROM didactic_tpl_fp ' .
            'WHERE parent_id = ' . $ilDB->quote($a_parent_id) . ' ' .
            'AND parent_type = ' . $ilDB->quote($a_parent_type, 'text');
        $res = $ilDB->query($query);

        $patterns = array();
        while ($row = $res->fetchRow(ilDBConstants::FETCHMODE_OBJECT)) {
            

            switch ($row->pattern_type) {
                case ilDidacticTemplateFilterPattern::PATTERN_INCLUDE:
                    

                    $patterns[] = new ilDidacticTemplateIncludeFilterPattern($row->pattern_id);
                    break;

                case ilDidacticTemplateFilterPattern::PATTERN_EXCLUDE:
                    

                    $patterns[] = new ilDidacticTemplateExcludeFilterPattern($row->pattern_id);
                    break;
            }
        }
        return $patterns;
    }
}
