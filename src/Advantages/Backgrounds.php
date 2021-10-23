<?php

declare(strict_types=1);

namespace TheSeed\Characters\Advantages;

use OtherCode\ComplexHeart\Domain\Collection;

/**
 * Class Backgrounds.
 *
 * @package TheSeed\Characters\Advantages
 */
final class Backgrounds extends Collection
{
    protected string $valueType = Background::class;

    protected string $keyType = 'string';
}
