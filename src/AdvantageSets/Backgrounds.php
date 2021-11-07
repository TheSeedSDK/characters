<?php

declare(strict_types=1);

namespace TheSeed\Characters\AdvantageSets;

use OtherCode\ComplexHeart\Domain\Collection;

/**
 * Class Backgrounds
 *
 * @author Unay Santisteban <usantisteban@othercode.es>
 * @package TheSeed\Characters\AdvantageSets
 */
final class Backgrounds extends Collection
{
    protected string $valueType = Background::class;

    protected string $keyType = 'string';
}
