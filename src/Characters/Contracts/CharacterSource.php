<?php

declare(strict_types=1);

namespace TheSeed\Characters\Contracts;

/**
 * Interface CharacterSource
 *
 * @author Unay Santisteban <usantisteban@othercode.es>
 * @package TheSeed\Characters\Contracts
 */
interface CharacterSource
{
    public function id(): string;

    public function player(): string;

    public function name(): string;

    public function genotypes(): array;

    public function conditions(): array;

    public function race(): string;

    public function health(): int;

    public function energy(): int;

    public function experience(): int;

    public function strength(): int;

    public function agility(): int;

    public function endurance(): int;

    public function charisma(): int;

    public function manipulation(): int;

    public function appearance(): int;

    public function perception(): int;

    public function intelligence(): int;

    public function wits(): int;

    public function lucky(): int;

    public function karma(): int;

    public function abilities(): array;

    public function backgrounds(): array;

    public function specials(): array;
}