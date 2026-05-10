<?php
declare(strict_types=1);

namespace DigitalRevolution\AccessorPairConstraint\Tests\Unit\Constraint\Typehint\data\All\DocComment;

use ArrayIterator;
use DigitalRevolution\AccessorPairConstraint\Tests\Unit\Constraint\Typehint\DataInterface;
use phpDocumentor\Reflection\Fqsen;
use phpDocumentor\Reflection\PseudoTypes\Generic;
use phpDocumentor\Reflection\Type;
use phpDocumentor\Reflection\Types\Collection;
use phpDocumentor\Reflection\Types\String_;

class IteratorTypedFull implements DataInterface
{
    /**
     * @param ArrayIterator<string, string> $param
     *
     * @return ArrayIterator<string, string>
     */
    public function testMethod(ArrayIterator $param): ArrayIterator
    {
        return $param;
    }

    public function getExpectedType(): Type
    {
        // phpdocumentor/type-resolver < 2.0
        if (class_exists(Collection::class)) {
            return new Collection(new Fqsen('\\' . ArrayIterator::class), new String_(), new String_());
        }

        // phpdocumentor/type-resolver >= 2.0
        return new Generic(new Fqsen('\\' . ArrayIterator::class), [new String_(), new String_()]);
    }
}
