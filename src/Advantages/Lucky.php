<?php

declare(strict_types=1);

namespace TheSeed\Characters\Advantages;

use InvalidArgumentException;

/**
 * Class Lucky
 *
 * @package TheSeed\Characters\Advantages
 */
final class Lucky
{
    /**
     * The Lucky value.
     *
     * @var int
     */
    protected int $lucky;

    /**
     * The max value of the lucky.
     *
     * @var int
     */
    protected int $max = 10;

    /**
     * The min value of the lucky.
     *
     * @var int
     */
    protected int $min = 0;

    /**
     * Lucky constructor.
     *
     * @param  int  $lucky
     */
    public function __construct(int $lucky)
    {
        if ($lucky > $this->max) {
            throw new InvalidArgumentException("The max value of lucky is {$this->max}.");
        }

        if ($lucky < $this->min) {
            throw new InvalidArgumentException("The min value of lucky is {$this->min}}.");
        }

        $this->lucky = $lucky;
    }

    /**
     * Return the Lucky value.
     *
     * @return int
     */
    public function value(): int
    {
        return $this->lucky;
    }

    /**
     * Evaluate if the given Lucky is equal as the instance.
     *
     * @param  Lucky  $lucky
     *
     * @return bool
     */
    public function equals(Lucky $lucky): bool
    {
        return $this->value() === $lucky->value();
    }

    /**
     * Return the Lucky as string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return (string)$this->value();
    }
}
