<?php

declare(strict_types=1);

namespace TheSeed\Characters\Characters\Sources;

use TheSeed\Characters\Characters\Contracts\CharacterSource;

/**
 * Class ArrayCharacterSource
 *
 * @author Unay Santisteban <usantisteban@othercode.es>
 * @package TheSeed\Characters\Sources
 */
class ArrayCharacterSource implements CharacterSource
{
    /**
     * @var array<string, mixed>
     */
    private array $source;

    /**
     * ArrayCharacterSource constructor.
     *
     * @param  array<string, mixed>  $source
     */
    public function __construct(array $source)
    {
        $this->source = $source;
    }

    public function id(): string
    {
        return $this->source['id'];
    }

    public function player(): string
    {
        return $this->source['player'];
    }


    public function name(): string
    {
        return $this->source['name'];
    }

    public function genotypes(): array
    {
        return $this->source['genotype'];
    }

    public function conditions(): array
    {
        return $this->source['condition'];
    }

    public function race(): string
    {
        return $this->source['race'];
    }

    public function health(): int
    {
        return $this->source['health'];
    }

    public function energy(): int
    {
        return $this->source['energy'];
    }

    public function experience(): int
    {
        return $this->source['experience'];
    }

    public function strength(): int
    {
        return $this->source['strength'];
    }

    public function agility(): int
    {
        return $this->source['agility'];
    }

    public function endurance(): int
    {
        return $this->source['endurance'];
    }

    public function charisma(): int
    {
        return $this->source['charisma'];
    }

    public function manipulation(): int
    {
        return $this->source['manipulation'];
    }

    public function appearance(): int
    {
        return $this->source['appearance'];
    }

    public function perception(): int
    {
        return $this->source['perception'];
    }

    public function intelligence(): int
    {
        return $this->source['intelligence'];
    }

    public function wits(): int
    {
        return $this->source['wits'];
    }

    public function lucky(): int
    {
        return $this->source['lucky'];
    }

    public function karma(): int
    {
        return $this->source['karma'];
    }

    public function abilities(): array
    {
        return $this->source['abilities'];
    }

    public function backgrounds(): array
    {
        return $this->source['backgrounds'];
    }

    public function specials(): array
    {
        return $this->source['specials'];
    }

}
