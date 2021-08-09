<?php

/**
 * Class arWhere
 * @author  Fabian Schmid <fs@studer-raimann.ch>
 * @version 2.0.7
 */
class arWhere extends arStatement
{
    const TYPE_STRING = 1;
    const TYPE_REGULAR = 2;
    protected int $type = self::TYPE_REGULAR;
    protected string $fieldname = '';
    /**
     * @var
     */
    protected $value;
    protected string $operator = '=';
    protected string $statement = '';
    protected string $link = 'AND';

    /**
     * @description Build WHERE Statement
     * @throws arException
     */
    public function asSQLStatement(ActiveRecord $ar) : string
    {
        $type = null;
        if ($this->getType() === self::TYPE_REGULAR) {
            $arField = $ar->getArFieldList()->getFieldByName($this->getFieldname());
            $type = $arField->getFieldType();
            if ($arField instanceof arField) {
                $statement = $ar->getConnectorContainerName() . '.' . $this->getFieldname();
            } else {
                $statement = $this->getFieldname();
            }

            if (is_array($this->getValue())) {
                if (in_array($this->getOperator(), array('IN', 'NOT IN', 'NOTIN'))) {
                    $statement .= ' ' . $this->getOperator() . ' (';
                } else {
                    $statement .= ' IN (';
                }
                $values = array();
                foreach ($this->getValue() as $value) {
                    $values[] = $ar->getArConnector()->quote($value, $type);
                }
                $statement .= implode(', ', $values);
                $statement .= ')';
            } else {
                if ($this->getValue() === null) {
                    $operator = 'IS';
                    if (in_array($this->getOperator(), array('IS', 'IS NOT'))) {
                        $operator = $this->getOperator();
                    }
                    $this->setOperator($operator);
                }
                $statement .= ' ' . $this->getOperator();
                $statement .= ' ' . $ar->getArConnector()->quote($this->getValue(), $type);
            }
            $this->setStatement($statement);
        }

        return $this->getStatement();
    }

    public function setFieldname(string $fieldname) : void
    {
        $this->fieldname = $fieldname;
    }

    public function getFieldname() : string
    {
        return $this->fieldname;
    }

    public function setOperator(string $operator) : void
    {
        $this->operator = $operator;
    }

    public function getOperator() : string
    {
        return $this->operator;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value) : void
    {
        $this->value = $value;
    }

    /**
     * @return mixed|null
     */
    public function getValue()
    {
        return $this->value;
    }

    public function setType(int $type) : void
    {
        $this->type = $type;
    }

    public function getType() : int
    {
        return $this->type;
    }

    public function setStatement(string $statement) : void
    {
        $this->statement = $statement;
    }

    public function getStatement() : string
    {
        return $this->statement;
    }

    public function setLink(string $link) : void
    {
        $this->link = $link;
    }

    public function getLink() : string
    {
        return $this->link;
    }
}
