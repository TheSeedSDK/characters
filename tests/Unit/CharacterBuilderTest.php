<?php

namespace Test\Unit;

use Test\TestCase;
use TheSeed\Characters\CharacterBuilder;
use TheSeed\Characters\Abilities\Academics;
use TheSeed\Characters\Abilities\Athletics;
use TheSeed\Characters\Abilities\Computer;
use TheSeed\Characters\Abilities\Dodge;
use TheSeed\Characters\Abilities\Drive;
use TheSeed\Characters\Abilities\Melee;
use TheSeed\Characters\Ability;
use TheSeed\Characters\Abilities;
use TheSeed\Characters\Conditions\None as NoneCondition;
use TheSeed\Characters\Genotypes\Humanoid;
use TheSeed\Characters\Races\Humanoid\Human;
use TheSeed\Characters\Sources\ArrayCharacterSource;
use TheSeed\Shared\ComponentMaker;
use TheSeed\Shared\Models\Id;

class CharacterBuilderTest extends TestCase
{
    public function testShouldBuildSuccessfullyACharacterAggregate()
    {
        $builder = new CharacterBuilder(
            new ComponentMaker(
                [
                    Humanoid::class,
                    Human::class,
                    NoneCondition::class,
                    Academics::class,
                    Athletics::class,
                    Computer::class,
                    Dodge::class,
                    Drive::class,
                    Melee::class,
                ]
            )
        );

        $pnj = $builder->build(
            new ArrayCharacterSource(
                [
                    'id'           => Id::random()->value(),
                    'player'       => Id::random()->value(),
                    'genotype'     => [
                        Humanoid::class,
                    ],
                    'race'         => Human::class,
                    'condition'    => [
                        NoneCondition::class,
                    ],
                    'name'         => 'Gerald de Rivia',
                    'health'       => 100,
                    'energy'       => 100,
                    'experience'   => 0,
                    'strength'     => 1,
                    'agility'      => 1,
                    'endurance'    => 1,
                    'charisma'     => 1,
                    'manipulation' => 2,
                    'appearance'   => 2,
                    'perception'   => 2,
                    'intelligence' => 3,
                    'wits'         => 2,
                    'abilities'    => [
                        Athletics::class => 3,
                        Dodge::class     => 5,
                        Drive::class     => 4,
                        Melee::class     => 1,
                        Academics::class => 7,
                        Computer::class  => 5,
                    ],
                    'backgrounds'  => [],
                    'lucky'        => 2,
                    'karma'        => 1,
                    'specials'     => [],
                ]
            )
        );

        $this->assertEquals('Gerald de Rivia', $pnj->name());
        $this->assertInstanceOf(Humanoid::class, $pnj->genotype());
        $this->assertInstanceOf(Human::class, $pnj->race());
        $this->assertEquals(100, $pnj->health()->value());
        $this->assertEquals(100, $pnj->energy()->value());
        $this->assertEquals(0, $pnj->experience()->value());
        $this->assertEquals(1, $pnj->strength()->value());
        $this->assertEquals(1, $pnj->agility()->value());
        $this->assertEquals(1, $pnj->endurance()->value());
        $this->assertEquals(1, $pnj->charisma()->value());
        $this->assertEquals(2, $pnj->manipulation()->value());
        $this->assertEquals(2, $pnj->appearance()->value());
        $this->assertEquals(2, $pnj->perception()->value());
        $this->assertEquals(3, $pnj->intelligence()->value());
        $this->assertEquals(2, $pnj->wits()->value());
        $this->assertEquals(2, $pnj->lucky()->value());
        $this->assertEquals(1, $pnj->karma()->value());
        $this->assertInstanceOf(Abilities::class, $pnj->abilities());

        $talents = $pnj->abilities()->talents();
        $this->assertInstanceOf(Abilities::class, $talents);
        $this->assertCount(2, $talents);
        foreach ($talents as $talent) {
            $this->assertInstanceOf(Ability::class, $talent);
        }

        $skills = $pnj->abilities()->skills();
        $this->assertInstanceOf(Abilities::class, $skills);
        $this->assertCount(2, $skills);
        foreach ($skills as $skill) {
            $this->assertInstanceOf(Ability::class, $skill);
        }

        $knowledges = $pnj->abilities()->knowledges();
        $this->assertInstanceOf(Abilities::class, $knowledges);
        $this->assertCount(2, $knowledges);
        foreach ($knowledges as $knowledge) {
            $this->assertInstanceOf(Ability::class, $knowledge);
        }
    }

    public function testShouldBuildSuccessfullyACharacterWithMininalInformation()
    {
        $builder = new CharacterBuilder(
            new ComponentMaker(
                [
                    Humanoid::class,
                    Human::class,
                    NoneCondition::class,
                    Academics::class,
                    Athletics::class,
                    Computer::class,
                    Dodge::class,
                    Drive::class,
                    Melee::class,
                ]
            )
        );

        $pnj = $builder->build(
            new ArrayCharacterSource(
                [
                    'id'           => Id::random()->value(),
                    'player'       => Id::random()->value(),
                    'genotype'     => [
                        Humanoid::class,
                    ],
                    'race'         => Human::class,
                    'condition'    => [
                        NoneCondition::class,
                    ],
                    'name'         => 'Gerald de Rivia',
                    'health'       => 0,
                    'energy'       => 0,
                    'experience'   => 0,
                    'strength'     => 0,
                    'agility'      => 0,
                    'endurance'    => 0,
                    'charisma'     => 0,
                    'manipulation' => 0,
                    'appearance'   => 0,
                    'perception'   => 0,
                    'intelligence' => 0,
                    'wits'         => 0,
                    'abilities'    => [],
                    'backgrounds'  => [],
                    'lucky'        => 0,
                    'karma'        => 0,
                    'specials'     => [],
                ]
            )
        );

        $this->assertEquals('Gerald de Rivia', $pnj->name());
        $this->assertInstanceOf(Humanoid::class, $pnj->genotype());
        $this->assertInstanceOf(Human::class, $pnj->race());

        $this->assertEquals(0, $pnj->health()->value());
        $this->assertEquals(0, $pnj->energy()->value());
        $this->assertEquals(0, $pnj->experience()->value());
        $this->assertEquals(0, $pnj->strength()->value());
        $this->assertEquals(0, $pnj->agility()->value());
        $this->assertEquals(0, $pnj->endurance()->value());
        $this->assertEquals(0, $pnj->charisma()->value());
        $this->assertEquals(0, $pnj->manipulation()->value());
        $this->assertEquals(0, $pnj->appearance()->value());
        $this->assertEquals(0, $pnj->perception()->value());
        $this->assertEquals(0, $pnj->intelligence()->value());
        $this->assertEquals(0, $pnj->wits()->value());
        $this->assertEquals(0, $pnj->lucky()->value());
        $this->assertEquals(0, $pnj->karma()->value());
        $this->assertInstanceOf(Abilities::class, $pnj->abilities());
        $this->assertCount(0, $pnj->abilities());
    }
}
