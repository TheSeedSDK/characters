<?php

declare(strict_types=1);

namespace TheSeed\Characters\Concepts\Conditions;

use TheSeed\Characters\Concepts\Condition;

/**
 * Class Composed
 *
 * @author Unay Santisteban <usantisteban@othercode.es>
 * @package TheSeed\Characters\Concepts\Conditions
 */
final class Composed extends Condition
{
    /**
     * List of conditions.
     *
     * @var Condition[]
     */
    private array $conditions;

    /**
     * Composed constructor.
     *
     * @param  Condition  ...$conditions
     */
    public function __construct(Condition ...$conditions)
    {
        $this->conditions = $conditions;
    }
}
