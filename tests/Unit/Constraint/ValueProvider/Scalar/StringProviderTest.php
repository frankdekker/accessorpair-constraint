<?php
declare(strict_types=1);

namespace DigitalRevolution\AccessorPairConstraint\Tests\Unit\Constraint\ValueProvider\Scalar;

use DigitalRevolution\AccessorPairConstraint\Constraint\ValueProvider\Scalar\StringProvider;
use DigitalRevolution\AccessorPairConstraint\Tests\Unit\Constraint\ValueProvider\AbstractValueProviderTest;
use Exception;

/**
 * @coversDefaultClass \DigitalRevolution\AccessorPairConstraint\Constraint\ValueProvider\Scalar\StringProvider
 */
class StringProviderTest extends AbstractValueProviderTest
{
    /**
     * @covers ::getValues
     * @throws Exception
     */
    public function testGetValues()
    {
        $valueProvider = new StringProvider();

        static::assertValueTypes($valueProvider->getValues(), ['string']);
    }
}
