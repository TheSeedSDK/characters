<?php

declare(strict_types=1);

namespace TheSeed\Characters\Advantages;

use InvalidArgumentException;

/**
 * Class Karma
 *
 * @package TheSeed\Characters\Advantages
 */
final class Karma
{
    /**
     * The Karma value.
     *
     * @var int
     */
    protected int $karma;

    /**
     * The max value of the karma.
     *
     * @var int
     */
    protected int $max = 10;

    /**
     * The min value of the karma.
     *
     * @var int
     */
    protected int $min = 0;

    /**
     * Karma constructor.
     *
     * @param  int  $karma
     */
    public function __construct(int $karma)
    {
        if ($karma > $this->max) {
            throw new InvalidArgumentException("The max value of karma is {$this->max}.");
        }

        if ($karma < $this->min) {
            throw new InvalidArgumentException("The min value of karma is {$this->min}}.");
        }

        $this->karma = $karma;
    }

    /**
     * Return the Karma value.
     *
     * @return int
     */
    public function value(): int
    {
        return $this->karma;
    }

    /**
     * Evaluate if the given Karma is equal as the instance.
     *
     * @param  Karma  $karma
     *
     * @return bool
     */
    public function equals(Karma $karma): bool
    {
        return $this->value() === $karma->value();
    }

    /**
     * Return the Karma as string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return (string)$this->value();
    }
}
