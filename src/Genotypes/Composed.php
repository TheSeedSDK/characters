<?php

declare(strict_types=1);

namespace TheSeed\Characters\Genotypes;

use TheSeed\Characters\Genotype;

/**
 * Class Composed
 *
 * @author Unay Santisteban <usantisteban@othercode.es>
 * @package TheSeed\Characters\Genotypes
 */
final class Composed extends Genotype
{
    /**
     * List of subtypes.
     *
     * @var Genotype[]
     */
    private array $genotypes;

    /**
     * Composed constructor.
     *
     * @param  Genotype  ...$genotypes
     */
    public function __construct(Genotype ...$genotypes)
    {
        $this->genotypes = $genotypes;
    }
}
