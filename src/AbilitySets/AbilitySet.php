<?php

declare(strict_types=1);

namespace TheSeed\Characters\AbilitySets;

use OtherCode\ComplexHeart\Domain\Collection;

/**
 * Class AbilitySet
 *
 * @author Unay Santisteban <usantisteban@othercode.es>
 * @package TheSeed\Characters\AbilitySets
 */
final class AbilitySet extends Collection
{
    protected string $valueType = Ability::class;

    protected string $keyType = 'string';

    /**
     * Retrieve the talent collection.
     *
     * @return AbilitySet
     */
    public function talents(): AbilitySet
    {
        return $this->filter(fn(Ability $ability) => 'talents' === $ability->category());
    }

    /**
     * Retrieve the skill collection.
     *
     * @return AbilitySet
     */
    public function skills(): AbilitySet
    {
        return $this->filter(fn(Ability $ability) => 'skills' === $ability->category());
    }

    /**
     * Retrieve the knowledges collection.
     *
     * @return AbilitySet
     */
    public function knowledges(): AbilitySet
    {
        return $this->filter(fn(Ability $ability) => 'knowledges' === $ability->category());
    }
}
