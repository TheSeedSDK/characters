<?php

declare(strict_types=1);

namespace TheSeed\Characters;

use TheSeed\Characters\Advantages\Backgrounds;
use TheSeed\Characters\Advantages\Karma;
use TheSeed\Characters\Advantages\Lucky;

/**
 * Class Advantages
 *
 * @author Unay Santisteban <usantisteban@othercode.es>
 * @package TheSeed\Characters
 */
final class Advantages
{
    /**
     * Lucky value.
     *
     * @var Lucky
     */
    private Lucky $lucky;

    /**
     * Karma value.
     *
     * @var Karma
     */
    private Karma $karma;

    /**
     * The list of backgrounds.
     *
     * @var Backgrounds
     */
    private Backgrounds $backgrounds;

    /**
     * @param  Lucky  $lucky
     * @param  Karma  $karma
     * @param  Backgrounds  $backgrounds
     */
    public function __construct(Lucky $lucky, Karma $karma, Backgrounds $backgrounds)
    {
        $this->backgrounds = $backgrounds;
        $this->lucky = $lucky;
        $this->karma = $karma;
    }

    /**
     * Returns the Lucky value.
     *
     * @return Lucky
     */
    public function lucky(): Lucky
    {
        return $this->lucky;
    }

    /**
     * Returns the Karma value.
     *
     * @return Karma
     */
    public function karma(): Karma
    {
        return $this->karma;
    }

    /**
     * Returns the list of backgrounds.
     *
     * @return Backgrounds
     */
    public function backgrounds(): Backgrounds
    {
        return $this->backgrounds;
    }
}