<?php

declare(strict_types=1);

namespace TheSeed\Characters;

use TheSeed\Characters\Attributes\Agility;
use TheSeed\Characters\Attributes\Appearance;
use TheSeed\Characters\Attributes\Charisma;
use TheSeed\Characters\Attributes\Endurance;
use TheSeed\Characters\Attributes\Intelligence;
use TheSeed\Characters\Attributes\Manipulation;
use TheSeed\Characters\Attributes\Perception;
use TheSeed\Characters\Attributes\Strength;
use TheSeed\Characters\Attributes\Wits;

/**
 * Class Attributes
 *
 * @author Unay Santisteban <usantisteban@othercode.es>
 * @package TheSeed\Characters
 */
final class Attributes
{
    /**
     * Strength value.
     *
     * @var Strength
     */
    private Strength $strength;

    /**
     * Agility value.
     *
     * @var Agility
     */
    private Agility $agility;

    /**
     * Endurance value.
     *
     * @var Endurance
     */
    private Endurance $endurance;

    /**
     * Charisma value.
     *
     * @var Charisma
     */
    private Charisma $charisma;

    /**
     * Manipulation value.
     *
     * @var Manipulation
     */
    private Manipulation $manipulation;

    /**
     * Appearance value.
     *
     * @var Appearance
     */
    private Appearance $appearance;

    /**
     * Perception value.
     *
     * @var Perception
     */
    private Perception $perception;

    /**
     * Intelligence value.
     *
     * @var Intelligence
     */
    private Intelligence $intelligence;

    /**
     * Wits value.
     *
     * @var Wits
     */
    private Wits $wits;

    /**
     * @param  Strength  $strength
     * @param  Agility  $agility
     * @param  Endurance  $endurance
     * @param  Charisma  $charisma
     * @param  Manipulation  $manipulation
     * @param  Appearance  $appearance
     * @param  Perception  $perception
     * @param  Intelligence  $intelligence
     * @param  Wits  $wits
     */
    public function __construct(
        Strength $strength,
        Agility $agility,
        Endurance $endurance,
        Charisma $charisma,
        Manipulation $manipulation,
        Appearance $appearance,
        Perception $perception,
        Intelligence $intelligence,
        Wits $wits,
    ) {
        $this->strength = $strength;
        $this->agility = $agility;
        $this->endurance = $endurance;
        $this->charisma = $charisma;
        $this->manipulation = $manipulation;
        $this->appearance = $appearance;
        $this->perception = $perception;
        $this->intelligence = $intelligence;
        $this->wits = $wits;
    }

    /**
     * Return the Character strength.
     *
     * @return Strength
     */
    public function strength(): Strength
    {
        return $this->strength;
    }

    /**
     * Return the Character agility.
     *
     * @return Agility
     */
    public function agility(): Agility
    {
        return $this->agility;
    }

    /**
     * Return the Character endurance.
     *
     * @return Endurance
     */
    public function endurance(): Endurance
    {
        return $this->endurance;
    }

    /**
     * Return the Character charisma.
     *
     * @return Charisma
     */
    public function charisma(): Charisma
    {
        return $this->charisma;
    }

    /**
     * Return the Character manipulation.
     *
     * @return Manipulation
     */
    public function manipulation(): Manipulation
    {
        return $this->manipulation;
    }

    /**
     * Return the Character appearance.
     *
     * @return Appearance
     */
    public function appearance(): Appearance
    {
        return $this->appearance;
    }

    /**
     * Return the Character perception.
     *
     * @return Perception
     */
    public function perception(): Perception
    {
        return $this->perception;
    }

    /**
     * Return the Character intelligence.
     *
     * @return Intelligence
     */
    public function intelligence(): Intelligence
    {
        return $this->intelligence;
    }

    /**
     * Return the Character wits.
     *
     * @return Wits
     */
    public function wits(): Wits
    {
        return $this->wits;
    }
}