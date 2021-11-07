<?php

declare(strict_types=1);

namespace TheSeed\Characters\Characters;

use InvalidArgumentException;

/**
 * Class Experience
 *
 * @author Unay Santisteban <usantisteban@othercode.es>
 * @package TheSeed\Characters\Characters
 */
final class Experience
{
    /**
     * The Experience value.
     *
     * @var int
     */
    protected int $experience;

    /**
     * The min value of the experience.
     *
     * @var int
     */
    protected int $min = 0;

    /**
     * Experience constructor.
     *
     * @param  int  $experience
     */
    public function __construct(int $experience)
    {
        if ($experience < $this->min) {
            throw new InvalidArgumentException("The min value of experience is {$this->min}}.");
        }

        $this->experience = $experience;
    }

    /**
     * Return the Experience value.
     *
     * @return int
     */
    public function value(): int
    {
        return $this->experience;
    }

    /**
     * Evaluate if the given Experience is equal as the instance.
     *
     * @param  Experience  $experience
     *
     * @return bool
     */
    public function equals(Experience $experience): bool
    {
        return $this->value() === $experience->value();
    }

    /**
     * Return the Experience as string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return (string)$this->value();
    }
}
