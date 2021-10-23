<?php

declare(strict_types=1);

namespace TheSeed\Characters;

use TheSeed\Characters\Advantages\Background;
use TheSeed\Characters\Advantages\Karma;
use TheSeed\Characters\Advantages\Lucky;
use TheSeed\Characters\Attributes\Agility;
use TheSeed\Characters\Attributes\Appearance;
use TheSeed\Characters\Attributes\Charisma;
use TheSeed\Characters\Attributes\Endurance;
use TheSeed\Characters\Attributes\Intelligence;
use TheSeed\Characters\Attributes\Manipulation;
use TheSeed\Characters\Attributes\Perception;
use TheSeed\Characters\Attributes\Strength;
use TheSeed\Characters\Attributes\Wits;
use TheSeed\Characters\Meta\Energy;
use TheSeed\Characters\Meta\Experience;
use TheSeed\Characters\Meta\Health;
use TheSeed\Characters\Meta\Name;
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
     * Main name for the PJ.
     *
     * @var Name
     */
    private Name $name;

    /**
     * The PNJ experience.
     *
     * @var Experience
     */
    private Experience $experience;

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
     * Set of PNJ Attributes
     *
     * @var Attributes
     */
    private Attributes $attributes;

    /**
     * Ability collection.
     *
     * @var Abilities
     */
    private Abilities $abilities;

    /**
     * Set of PNJ Advantages.
     *
     * @var Advantages
     */
    private Advantages $advantages;

    /**
     * Character constructor.
     *
     * @param  Id  $id
     * @param  Id  $player
     * @param  Genotype  $genotype
     * @param  Race  $race
     * @param  Condition  $condition
     * @param  Name  $name
     * @param  Health  $health
     * @param  Energy  $energy
     * @param  Experience  $experience
     * @param  Attributes  $attributes
     * @param  Abilities  $abilities
     * @param  Advantages  $advantages
     */
    public function __construct(
        Id $id,
        Id $player,
        Genotype $genotype,
        Race $race,
        Condition $condition,
        Name $name,
        Health $health,
        Energy $energy,
        Experience $experience,
        Attributes $attributes,
        Abilities $abilities,
        Advantages $advantages
    ) {
        $this->id = $id;
        $this->player = $player;
        $this->genotype = $genotype;
        $this->race = $race;
        $this->condition = $condition;
        $this->name = $name;
        $this->health = $health;
        $this->energy = $energy;
        $this->experience = $experience;
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
     * @return Abilities
     */
    public function abilities(): Abilities
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
