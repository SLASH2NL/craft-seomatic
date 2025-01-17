<?php

/**
 * SEOmatic plugin for Craft CMS 3
 *
 * A turnkey SEO implementation for Craft CMS that is comprehensive, powerful, and flexible
 *
 * @link      https://nystudio107.com
 * @copyright Copyright (c) 2023 nystudio107
 */

namespace nystudio107\seomatic\models\jsonld;

/**
 * schema.org version: v15.0-release
 * Trait for HowToDirection.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @see       https://schema.org/HowToDirection
 */
trait HowToDirectionTrait
{
    /**
     * The length of time it takes to prepare the items to be used in instructions
     * or a direction, in [ISO 8601 duration
     * format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     * @var Duration
     */
    public $prepTime;

    /**
     * A media object representing the circumstances after performing this
     * direction.
     *
     * @var MediaObject|URL
     */
    public $afterMedia;

    /**
     * A media object representing the circumstances before performing this
     * direction.
     *
     * @var MediaObject|URL
     */
    public $beforeMedia;

    /**
     * A sub property of instrument. An object used (but not consumed) when
     * performing instructions or a direction.
     *
     * @var string|HowToTool|Text
     */
    public $tool;

    /**
     * A media object representing the circumstances while performing this
     * direction.
     *
     * @var MediaObject|URL
     */
    public $duringMedia;

    /**
     * The length of time it takes to perform instructions or a direction (not
     * including time to prepare the supplies), in [ISO 8601 duration
     * format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     * @var Duration
     */
    public $performTime;

    /**
     * A sub-property of instrument. A supply consumed when performing
     * instructions or a direction.
     *
     * @var string|Text|HowToSupply
     */
    public $supply;

    /**
     * The total time required to perform instructions or a direction (including
     * time to prepare the supplies), in [ISO 8601 duration
     * format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     * @var Duration
     */
    public $totalTime;
}
