<?php
declare(strict_types=1);

namespace DigitalRevolution\AccessorPairConstraint\Tests\Unit\Constraint\MethodPair\data;

use DigitalRevolution\AccessorPairConstraint\Tests\Unit\Constraint\MethodPair\DataInterface;

class GetVariadicSet implements DataInterface
{
    /** @var string[] */
    private $property = [];

    /**
     * @return string[]
     */
    public function getProperty(): array
    {
        return $this->property;
    }

    public function setProperty(string ...$param): self
    {
        $this->property = $param;

        return $this;
    }

    public function getExpectedMethodPairs(): array
    {
        return [['getProperty', 'setProperty', false]];
    }
}
