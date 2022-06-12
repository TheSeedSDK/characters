<?php

declare(strict_types=1);

namespace TheSeed\Characters\Concepts;

use ComplexHeart\Domain\Model\ValueObjects\DateTimeValue;

/**
 * Class Concept
 *
 * @author Unay Santisteban <usantisteban@othercode.es>
 * @package TheSeed\Characters\Concepts
 */
final class Concept
{
    /**
     * Main name for the character.
     *
     * @var Name
     */
    private Name $name;

    /**
     * Character Sex.
     *
     * @var Sex
     */
    private Sex $sex;

    /**
     * Character date of birth.
     *
     * @var DateTimeValue
     */
    private DateTimeValue $dateOfBirth;

    /**
     * PNJ Genotype.
     *
     * @var Genotype
     */
    private Genotype $genotype;

    /**
     * PNJ Race.
     *
     * @var Race
     */
    private Race $race;

    /**
     * PNJ Condition.
     *
     * @var Condition
     */
    private Condition $condition;

    /**
     * Constructor Concept.
     *
     * @param  Name  $name
     * @param  Sex  $sex
     * @param  DateTimeValue  $dateOfBirth
     * @param  Genotype  $genotype
     * @param  Race  $race
     * @param  Condition  $condition
     */
    public function __construct(
        Name $name,
        Sex $sex,
        DateTimeValue $dateOfBirth,
        Genotype $genotype,
        Race $race,
        Condition $condition
    ) {
        $this->name = $name;
        $this->sex = $sex;
        $this->dateOfBirth = $dateOfBirth;
        $this->genotype = $genotype;
        $this->race = $race;
        $this->condition = $condition;
    }

    /**
     * Return the Character name.
     *
     * @return Name
     */
    public function name(): Name
    {
        return $this->name;
    }

    /**
     * Return the Character sex.
     *
     * @return Sex
     */
    public function sex(): Sex
    {
        return $this->sex;
    }

    /**
     * Return the character date of birth.
     *
     * @return DateTimeValue
     */
    public function dateOfBirth(): DateTimeValue
    {
        return $this->dateOfBirth;
    }

    /**
     * Return the Character genotype.
     *
     * @return Genotype
     */
    public function genotype(): Genotype
    {
        return $this->genotype;
    }

    /**
     * Return the Character race.
     *
     * @return Race
     */
    public function race(): Race
    {
        return $this->race;
    }

    /**
     * Return the Character condition.
     *
     * @return Condition
     */
    public function condition(): Condition
    {
        return $this->condition;
    }

}