<?php

declare(strict_types=1);

namespace TheSeed\Characters;

use TheSeed\Characters\Contracts\CharacterRepository;
use TheSeed\Characters\Exceptions\CharacterNotFound;
use TheSeed\Shared\Models\Id;

/**
 * Class CharacterFinder
 *
 * @author Unay Santisteban <usantisteban@othercode.es>
 * @package TheSeed\Characters
 */
final class CharacterFinder
{
    /**
     * The character repository
     *
     * @var CharacterRepository
     */
    private CharacterRepository $repository;

    /**
     * CharacterFinder constructor.
     *
     * @param  CharacterRepository  $repository
     */
    public function __construct(CharacterRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Find a character by Id.
     *
     * @param  Id  $id
     *
     * @return Character
     * @throws CharacterNotFound
     */
    public function byId(Id $id): Character
    {
        $character = $this->repository->find($id);

        if (is_null($character)) {
            throw new CharacterNotFound("Character with id {$id} not found.");
        }

        return $character;
    }
}
