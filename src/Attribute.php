<?php

declare(strict_types=1);

namespace TheSeed\Characters;

use InvalidArgumentException;

/**
 * Class Attribute
 *
 * @package TheSeed\Characters
 */
abstract class Attribute
{
    /**
     * The Attribute value.
     *
     * @var int
     */
    protected int $attribute;

    /**
     * Attribute category (physical/social/metal).
     *
     * @var string
     */
    protected string $category;

    /**
     * The max value of the attribute.
     *
     * @var int
     */
    protected int $max = 10;

    /**
     * The min value of the attribute.
     *
     * @var int
     */
    protected int $min = 0;

    /**
     * Attribute constructor.
     *
     * @param  int  $attribute
     */
    public function __construct(int $attribute)
    {
        if ($attribute > $this->max) {
            throw new InvalidArgumentException("The max value of an attribute is {$this->max}.");
        }

        if ($attribute < $this->min) {
            throw new InvalidArgumentException("The min value of an attribute is {$this->min}.");
        }

        $this->attribute = $attribute;
    }

    /**
     * Return the category of the ability.
     *
     * @return string
     */
    public function category(): string
    {
        return $this->category;
    }

    /**
     * Return the Attribute value.
     *
     * @return int
     */
    public function value(): int
    {
        return $this->attribute;
    }

    /**
     * Evaluate if the given Attribute is equal as the instance.
     *
     * @param  Attribute  $attribute
     *
     * @return bool
     */
    public function equals(Attribute $attribute): bool
    {
        return $this->value() === $attribute->value();
    }

    /**
     * Return the Attribute as string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return (string)$this->value();
    }
}
