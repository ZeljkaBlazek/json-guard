<?php

namespace Machete\Validation\Pointer;

class InvalidPointerException extends \InvalidArgumentException
{
    public static function invalidType($type)
    {
        return new static(sprintf('Only strings are valid pointers, got "%s"', $type));
    }

    public static function invalidFirstCharacter($character)
    {
        return new static(sprintf('A pointer must start with "/", got "%s"', $character));
    }

    public static function nonexistentValue($value)
    {
        return new static(sprintf('The pointer referenced a value that does not exist.  The value was: "%s"', $value));
    }
}
