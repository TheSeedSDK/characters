<?php

declare(strict_types=1);

namespace TheSeed\Characters;

use OtherCode\ComplexHeart\Domain\Collection;

/**
 * Class Characters
 *
 * @package TheSeed\Characters
 */
final class Characters extends Collection
{
    protected string $valueType = Character::class;

    protected string $keyType = 'string';
}
