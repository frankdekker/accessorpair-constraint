<?php
declare(strict_types=1);

namespace DigitalRevolution\AccessorPairConstraint\Tests\Unit\Constraint\ValueProvider\Pseudo;

use DigitalRevolution\AccessorPairConstraint\Constraint\ValueProvider\Pseudo\NumericStringProvider;
use DigitalRevolution\AccessorPairConstraint\Constraint\ValueProvider\Scalar\IntProvider;
use DigitalRevolution\AccessorPairConstraint\Tests\Unit\Constraint\ValueProvider\AbstractValueProviderTestCase;
use Exception;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(NumericStringProvider::class)]
#[CoversClass(IntProvider::class)]
class NumericStringProviderTest extends AbstractValueProviderTestCase
{
    /**
     * @throws Exception
     */
    public function testGetValues(): void
    {
        $valueProvider = new NumericStringProvider(new IntProvider());
        $values        = $valueProvider->getValues();

        static::assertValueTypes($values, ['numeric-string']);
        if (method_exists($this, 'assertContainsOnlyNumeric')) {
            static::assertContainsOnlyNumeric($values);
        } else {
            static::assertContainsOnly('numeric-string', $values);
        }
    }
}
