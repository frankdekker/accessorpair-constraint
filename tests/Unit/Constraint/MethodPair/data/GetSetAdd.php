<?php
declare(strict_types=1);

namespace DigitalRevolution\AccessorPairConstraint\Tests\Unit\Constraint\MethodPair\data;

use DigitalRevolution\AccessorPairConstraint\Tests\Unit\Constraint\MethodPair\DataInterface;

class GetSetAdd implements DataInterface
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

    /**
     * @param string[] $param
     */
    public function setProperty(array $param): self
    {
        $this->property = $param;

        return $this;
    }

    public function addProperty(string $param): self
    {
        $this->property[] = $param;

        return $this;
    }

    public function getExpectedMethodPairs(): array
    {
        return [['getProperty', 'setProperty', false], ['getProperty', 'addProperty', true]];
    }
}
