<?php
declare(strict_types=1);

namespace DigitalRevolution\AccessorPairConstraint\Tests\Unit\Constraint\MethodPair\data;

use DigitalRevolution\AccessorPairConstraint\Tests\Unit\Constraint\MethodPair\DataInterface;

class GetOptionalSet implements DataInterface
{
    /** @var string|null */
    private $property;

    /**
     * @return string|null
     */
    public function getProperty()
    {
        return $this->property;
    }

    public function setProperty(string $property = null): self
    {
        $this->property = $property;

        return $this;
    }

    public function getExpectedMethodPairs(): array
    {
        return [['getProperty', 'setProperty', false]];
    }
}
