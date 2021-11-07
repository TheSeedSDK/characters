<?php

declare(strict_types=1);

namespace TheSeed\Characters;

use TheSeed\Characters\AdvantageSets\Background;
use TheSeed\Characters\AdvantageSets\Karma;
use TheSeed\Characters\AdvantageSets\Lucky;
use TheSeed\Characters\AttributeSets\Agility;
use TheSeed\Characters\AttributeSets\Appearance;
use TheSeed\Characters\AttributeSets\Charisma;
use TheSeed\Characters\AttributeSets\Endurance;
use TheSeed\Characters\AttributeSets\Intelligence;
use TheSeed\Characters\AttributeSets\Manipulation;
use TheSeed\Characters\AttributeSets\Perception;
use TheSeed\Characters\AttributeSets\Strength;
use TheSeed\Characters\AttributeSets\Wits;
use TheSeed\Characters\Meta\Energy;
use TheSeed\Characters\Meta\Experience;
use TheSeed\Characters\Meta\Health;
use TheSeed\Shared\Models\Id;

/**
 * Class Character
 *
 * @author Unay Santisteban <usantisteban@othercode.es>
 * @package TheSeed\Characters
 */
final class Character
{
    /**
     * Unique PJ Identifier.
     *
     * @var Id
     */
    private Id $id;

    /**
     * Unique Player Identifier.
     *
     * @var Id
     */
    private Id $player;

    /**
     * Health points.
     *
     * @var Health
     */
    private Health $health;

    /**
     * Energy to cast spells/skills/whatever, just a name...
     *
     * @var Energy
     */
    private Energy $energy;

    /**
     * The PNJ experience.
     *
     * @var Experience
     */
    private Experience $experience;

    /**
     * Character Concept.
     *
     * @var Concept
     */
    private Concept $concept;

    /**
     * Set of PNJ Attributes
     *
     * @var AttributeSet
     */
    private AttributeSet $attributes;

    /**
     * Ability collection.
     *
     * @var AbilitySet
     */
    private AbilitySet $abilities;

    /**
     * Set of PNJ Advantages.
     *
     * @var AdvantageSets
     */
    private AdvantageSets $advantages;

    /**
     * Character constructor.
     *
     * @param  Id  $id
     * @param  Id  $player
     * @param  Health  $health
     * @param  Energy  $energy
     * @param  Experience  $experience
     * @param  Concept  $concept
     * @param  AttributeSet  $attributes
     * @param  AbilitySet  $abilities
     * @param  AdvantageSets  $advantages
     */
    public function __construct(
        Id $id,
        Id $player,
        Health $health,
        Energy $energy,
        Experience $experience,
        Concept $concept,
        AttributeSet $attributes,
        AbilitySet $abilities,
        AdvantageSets $advantages
    ) {
        $this->id = $id;
        $this->player = $player;
        $this->health = $health;
        $this->energy = $energy;
        $this->experience = $experience;
        $this->concept = $concept;
        $this->attributes = $attributes;
        $this->abilities = $abilities;
        $this->advantages = $advantages;
    }

    /**
     * Return the Character id.
     *
     * @return Id
     */
    public function id(): Id
    {
        return $this->id;
    }

    /**
     * Returns the Player id.
     *
     * @return Id
     */
    public function player(): Id
    {
        return $this->player;
    }

    /**
     * Return the Character concept.
     *
     * @return Concept
     */
    public function concept(): Concept
    {
        return $this->concept;
    }

    /**
     * Return the Character health.
     *
     * @return Health
     */
    public function health(): Health
    {
        return $this->health;
    }

    /**
     * Return the Character energy.
     *
     * @return Energy
     */
    public function energy(): Energy
    {
        return $this->energy;
    }

    /**
     * Return the Character experience.
     *
     * @return Experience
     */
    public function experience(): Experience
    {
        return $this->experience;
    }

    /**
     * Return the Character strength.
     *
     * @return Strength
     */
    public function strength(): Strength
    {
        return $this->attributes->strength();
    }

    /**
     * Return the Character agility.
     *
     * @return Agility
     */
    public function agility(): Agility
    {
        return $this->attributes->agility();
    }

    /**
     * Return the Character endurance.
     *
     * @return Endurance
     */
    public function endurance(): Endurance
    {
        return $this->attributes->endurance();
    }

    /**
     * Return the Character charisma.
     *
     * @return Charisma
     */
    public function charisma(): Charisma
    {
        return $this->attributes->charisma();
    }

    /**
     * Return the Character manipulation.
     *
     * @return Manipulation
     */
    public function manipulation(): Manipulation
    {
        return $this->attributes->manipulation();
    }

    /**
     * Return the Character appearance.
     *
     * @return Appearance
     */
    public function appearance(): Appearance
    {
        return $this->attributes->appearance();
    }

    /**
     * Return the Character perception.
     *
     * @return Perception
     */
    public function perception(): Perception
    {
        return $this->attributes->perception();
    }

    /**
     * Return the Character intelligence.
     *
     * @return Intelligence
     */
    public function intelligence(): Intelligence
    {
        return $this->attributes->intelligence();
    }

    /**
     * Return the Character wits.
     *
     * @return Wits
     */
    public function wits(): Wits
    {
        return $this->attributes->wits();
    }

    /**
     * Return the Character lucky.
     *
     * @return Lucky
     */
    public function lucky(): Lucky
    {
        return $this->advantages->lucky();
    }

    /**
     * Return the Character karma.
     *
     * @return Karma
     */
    public function karma(): Karma
    {
        return $this->advantages->karma();
    }

    /**
     * Return the ability collection.
     *
     * @return AbilitySet
     */
    public function abilities(): AbilitySet
    {
        return $this->abilities;
    }

    /**
     * Retrieve the required ability.
     *
     * @param  string  $ability
     *
     * @return Ability|null
     */
    public function ability(string $ability): ?Ability
    {
        return $this->abilities()
            ->filter(fn(Ability $item) => $item instanceof $ability)
            ->first();
    }

    /**
     * Retrieve the required background.
     *
     * @param  string  $background
     *
     * @return Background|null
     */
    public function background(string $background): ?Background
    {
        return $this->advantages
            ->backgrounds()
            ->filter(fn(Background $item) => $item instanceof $background)
            ->first();
    }

    /**
     * Self short method agility-based.
     *
     * @param  Character  $a
     * @param  Character  $b
     *
     * @return int
     */
    public static function sortByAgility(Character $a, Character $b): int
    {
        if ($a->agility()->equals($b->agility())) {
            return 0;
        }

        return ($a->agility()->value() > $b->agility()->value()) ? -1 : +1;
    }

    /**
     * Self short method intelligence-based.
     *
     * @param  Character  $a
     * @param  Character  $b
     *
     * @return int
     */
    public static function sortByIntelligence(Character $a, Character $b): int
    {
        if ($a->intelligence()->equals($b->intelligence())) {
            return 0;
        }

        return ($a->intelligence()->value() > $b->intelligence()->value()) ? -1 : +1;
    }
}
