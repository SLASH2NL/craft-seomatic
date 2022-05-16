<?php
/**
 * SEOmatic plugin for Craft CMS 4
 *
 * A turnkey SEO implementation for Craft CMS that is comprehensive, powerful,
 * and flexible
 *
 * @link      https://nystudio107.com
 * @copyright Copyright (c) 2022 nystudio107
 */

namespace nystudio107\seomatic\models\jsonld;

/**
 * schema.org version: v14.0-release
 * Trait for MedicalCause.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @see       https://schema.org/MedicalCause
 */

trait MedicalCauseTrait
{
    
    /**
     * The condition, complication, symptom, sign, etc. caused.
     *
     * @var MedicalEntity
     */
    public $causeOf;

}