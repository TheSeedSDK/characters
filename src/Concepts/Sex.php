<?php

declare(strict_types=1);

namespace TheSeed\Characters\Concepts;

use OtherCode\ComplexHeart\Domain\ValueObjects\EnumValue;

/**
 * Class Sex
 *
 * @author Unay Santisteban <usantisteban@othercode.es>
 * @package TheSeed\Characters\Concepts
 */
final class Sex extends EnumValue
{
    public const MALE = 'male';
    public const FEMALE = 'female';
}
