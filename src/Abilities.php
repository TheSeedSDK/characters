<?php

declare(strict_types=1);

namespace TheSeed\Characters;

use OtherCode\ComplexHeart\Domain\Collection;

/**
 * Class Abilities
 *
 * @package TheSeed\Characters
 */
final class Abilities extends Collection
{
    protected string $valueType = Ability::class;

    protected string $keyType = 'string';

    /**
     * Retrieve the talent collection.
     *
     * @return Abilities
     */
    public function talents(): Abilities
    {
        return $this->filter(fn(Ability $ability) => 'talents' === $ability->category());
    }

    /**
     * Retrieve the skill collection.
     *
     * @return Abilities
     */
    public function skills(): Abilities
    {
        return $this->filter(fn(Ability $ability) => 'skills' === $ability->category());
    }

    /**
     * Retrieve the knowledges collection.
     *
     * @return Abilities
     */
    public function knowledges(): Abilities
    {
        return $this->filter(fn(Ability $ability) => 'knowledges' === $ability->category());
    }
}
