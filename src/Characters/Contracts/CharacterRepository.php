<?php

declare(strict_types=1);

namespace TheSeed\Characters\Contracts;

use OtherCode\ComplexHeart\Domain\Criteria\Criteria;
use TheSeed\Characters\Character;
use TheSeed\Characters\Characters;
use TheSeed\Shared\Models\Id;

/**
 * Interface CharacterRepository
 *
 * @package TheSeed\Characters\Contract
 */
interface CharacterRepository
{
    /**
     * Find a character by Id.
     *
     * @param  Id  $id
     *
     * @return Character|null
     */
    public function find(Id $id): ?Character;

    /**
     * Find characters that match the criteria.
     *
     * @param  Criteria  $criteria
     *
     * @return Characters
     */
    public function search(Criteria $criteria): Characters;

    /**
     * Persists a character.
     *
     * @param  Character  $character
     */
    public function save(Character $character): void;

    /**
     * Delete a character by id.
     *
     * @param  Id  $id
     */
    public function delete(Id $id): void;
}
