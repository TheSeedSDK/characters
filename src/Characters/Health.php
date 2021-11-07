<?php

declare(strict_types=1);

namespace TheSeed\Characters\Characters;

use InvalidArgumentException;

/**
 * Class Health
 *
 * @author Unay Santisteban <usantisteban@othercode.es>
 * @package TheSeed\Characters\Characters
 */
final class Health
{
    /**
     * The Health value.
     *
     * @var int
     */
    protected int $health;

    /**
     * The max value of the health.
     *
     * @var int
     */
    protected int $max = 100;

    /**
     * The min value of the health.
     *
     * @var int
     */
    protected int $min = 0;

    /**
     * Health constructor.
     *
     * @param  int  $health
     */
    public function __construct(int $health)
    {
        if ($health > $this->max) {
            throw new InvalidArgumentException("The max value of health is {$this->max}.");
        }

        if ($health < $this->min) {
            throw new InvalidArgumentException("The min value of health is {$this->min}}.");
        }

        $this->health = $health;
    }

    /**
     * Return the Health value.
     *
     * @return int
     */
    public function value(): int
    {
        return $this->health;
    }

    /**
     * Evaluate if the given Health is equal as the instance.
     *
     * @param  Health  $health
     *
     * @return bool
     */
    public function equals(Health $health): bool
    {
        return $this->value() === $health->value();
    }

    /**
     * Return the Health as string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return (string)$this->value();
    }
}
