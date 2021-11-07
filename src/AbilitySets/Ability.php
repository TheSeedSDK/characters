<?php

declare(strict_types=1);

namespace TheSeed\Characters\AbilitySets;

use InvalidArgumentException;

/**
 * Class Ability
 *
 * @author Unay Santisteban <usantisteban@othercode.es>
 * @package TheSeed\Characters\AbilitySets
 */
abstract class Ability
{
    /**
     * The Ability value.
     *
     * @var int
     */
    protected int $ability;

    /**
     * ability category (talent/knowledge/skill).
     *
     * @var string
     */
    protected string $category;

    /**
     * The max value of the ability.
     *
     * @var int
     */
    protected int $max = 10;

    /**
     * The min value of the ability.
     *
     * @var int
     */
    protected int $min = 0;

    /**
     * Ability constructor.
     *
     * @param  int  $ability
     */
    public function __construct(int $ability)
    {
        if ($ability > $this->max) {
            throw new InvalidArgumentException("The max value of an ability is $this->max.");
        }

        if ($ability < $this->min) {
            throw new InvalidArgumentException("The min value of an ability is $this->min.");
        }

        $this->ability = $ability;
    }

    /**
     * Return the Ability value.
     *
     * @return int
     */
    public function value(): int
    {
        return $this->ability;
    }

    /**
     * Evaluate if the given Ability is equal as the instance.
     *
     * @param  Ability  $ability
     *
     * @return bool
     */
    public function equals(Ability $ability): bool
    {
        return $this->value() === $ability->value();
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
     * Return the Ability as string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return (string)$this->value();
    }
}
