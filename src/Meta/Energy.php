<?php

declare(strict_types=1);

namespace TheSeed\Characters\Meta;

use InvalidArgumentException;

/**
 * Class Energy
 *
 * @package TheSeed\Characters
 */
final class Energy
{
    /**
     * The Energy value.
     *
     * @var int
     */
    protected int $energy;

    /**
     * The max value of the energy.
     *
     * @var int
     */
    protected int $max = 100;

    /**
     * The min value of the energy.
     *
     * @var int
     */
    protected int $min = 0;

    /**
     * Energy constructor.
     *
     * @param  int  $energy
     */
    public function __construct(int $energy)
    {
        if ($energy > $this->max) {
            throw new InvalidArgumentException("The max value of energy is {$this->max}.");
        }

        if ($energy < $this->min) {
            throw new InvalidArgumentException("The min value of energy is {$this->min}}.");
        }

        $this->energy = $energy;
    }

    /**
     * Return the Energy value.
     *
     * @return int
     */
    public function value(): int
    {
        return $this->energy;
    }

    /**
     * Evaluate if the given Energy is equal as the instance.
     *
     * @param  Energy  $energy
     *
     * @return bool
     */
    public function equals(Energy $energy): bool
    {
        return $this->value() === $energy->value();
    }

    /**
     * Return the Energy as string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return (string)$this->value();
    }
}
