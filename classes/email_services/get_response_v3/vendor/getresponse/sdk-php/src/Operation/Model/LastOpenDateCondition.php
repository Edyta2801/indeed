<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class LastOpenDateCondition extends ConditionType
{
    /** @var string */
    private $operatorType;

    /** @var string */
    private $operator;

    /** @var string */
    private $value;


    /**
     * @param string $operatorType
     * @param string $operator
     * @param string $value
     */
    public function __construct($operatorType, $operator, $value)
    {
        parent::__construct('last_open_date');
        $this->operatorType = $operatorType;
        $this->operator = $operator;
        $this->value = $value;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'operatorType' => $this->operatorType,
            'operator' => $this->operator,
            'value' => $this->value,
        ];

        return array_merge(parent::jsonSerialize(), $this->filterUnsetFields($data));
    }
}
