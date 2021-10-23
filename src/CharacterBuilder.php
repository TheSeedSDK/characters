<?php

declare(strict_types=1);

namespace TheSeed\Characters;

use Exception;
use TheSeed\Characters\Contracts\CharacterSource;
use TheSeed\Characters\Exceptions\CharacterBuildFailure;
use TheSeed\Characters\Advantages\Backgrounds;
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
use TheSeed\Characters\Conditions\Composed as ComposedCondition;
use TheSeed\Characters\Genotypes\Composed as ComposedGenotype;
use TheSeed\Characters\Meta\Energy;
use TheSeed\Characters\Meta\Experience;
use TheSeed\Characters\Meta\Health;
use TheSeed\Characters\Meta\Name;
use TheSeed\Shared\ComponentMaker;
use TheSeed\Shared\Models\Id;

/**
 * Class CharacterBuilder
 *
 * @author Unay Santisteban <usantisteban@othercode.es>
 * @package TheSeed\Characters
 */
final class CharacterBuilder
{
    protected ComponentMaker $maker;

    /**
     * CharacterBuilder constructor.
     *
     * @param  ComponentMaker  $maker
     *
     * @throws Exception
     */
    public function __construct(ComponentMaker $maker)
    {
        $this->maker = $maker;
    }

    /**
     * Compose a new Character with arguments from CharacterContract.
     *
     * @param  CharacterSource  $source
     *
     * @return Character
     * @throws CharacterBuildFailure
     */
    public function build(CharacterSource $source): Character
    {
        return new Character(
            new Id($source->id()),
            new Id($source->player()),
            $this->genotype($source->genotypes()),
            $this->race($source->race()),
            $this->condition($source->conditions()),
            new Name($source->name()),
            new Health($source->health()),
            new Energy($source->energy()),
            new Experience($source->experience()),
            new Attributes(
                new Strength($source->strength()),
                new Agility($source->agility()),
                new Endurance($source->endurance()),
                new Charisma($source->charisma()),
                new Manipulation($source->manipulation()),
                new Appearance($source->appearance()),
                new Perception($source->perception()),
                new Intelligence($source->intelligence()),
                new Wits($source->wits()),
            ),
            $this->abilities($source->abilities()),
            new Advantages(
                new Lucky($source->lucky()),
                new Karma($source->karma()),
                $this->backgrounds($source->backgrounds()),
            )

        );
    }

    /**
     * Build a new Genotype object.
     *
     * @param  array  $genotypes
     *
     * @return Genotype
     * @throws CharacterBuildFailure
     */
    protected function genotype(array $genotypes): Genotype
    {
        if (empty($genotypes)) {
            throw new CharacterBuildFailure('Missing character genotype.');
        }

        $collection = [];
        foreach ($genotypes as $genotype) {
            if ($this->maker->has($genotype)) {
                $collection[] = $this->maker->make($genotype);
            }
        }

        return count($collection) > 1
            ? new ComposedGenotype(...$collection)
            : current($collection);
    }

    /**
     * Build a new Condition object.
     *
     * @param  array  $conditions
     *
     * @return Condition
     * @throws CharacterBuildFailure
     */
    protected function condition(array $conditions): Condition
    {
        if (empty($conditions)) {
            throw new CharacterBuildFailure('Missing character condition.');
        }

        $collection = [];
        foreach ($conditions as $condition) {
            if ($this->maker->has($condition)) {
                $collection[] = $this->maker->make($condition);
            }
        }

        return (count($collection) > 1)
            ? new ComposedCondition(... $collection)
            : current($collection);
    }

    /**
     * Build a new Race object.
     *
     * @param  string  $race
     *
     * @return Race
     * @throws CharacterBuildFailure
     */
    protected function race(string $race): Race
    {
        /** @var Race $race */
        if (!$race = $this->maker->make($race)) {
            throw new CharacterBuildFailure('Missing character race.');
        }

        return $race;
    }

    /**
     * Build a new ability collection.
     *
     * @param  array  $abilities
     *
     * @return Abilities
     */
    protected function abilities(array $abilities): Abilities
    {
        $collection = [];
        foreach ($abilities as $ability => $value) {
            if ($this->maker->has($ability)) {
                $collection[$ability] = $this->maker->make($ability, $value);
            }
        }

        return new Abilities($collection);
    }

    /**
     * Build a new background collection.
     *
     * @param  array  $backgrounds
     *
     * @return Backgrounds
     */
    protected function backgrounds(array $backgrounds): Backgrounds
    {
        $collection = [];
        foreach ($backgrounds as $background => $value) {
            if ($this->maker->has($background)) {
                $collection[$background] = $this->maker->make($background, $value);
            }
        }

        return new Backgrounds($collection);
    }

    /**
     * Compose a new Character with arguments from CharacterContract.
     *
     * @param  CharacterSource  $source
     *
     * @return Character
     * @throws CharacterBuildFailure
     */
    public function __invoke(CharacterSource $source): Character
    {
        return $this->build($source);
    }
}
