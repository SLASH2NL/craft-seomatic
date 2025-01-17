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
 * Trait for Hospital.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @see       https://schema.org/Hospital
 */
trait HospitalTrait
{
    /**
     * Indicates data describing a hospital, e.g. a CDC [[CDCPMDRecord]] or as
     * some kind of [[Dataset]].
     *
     * @var CDCPMDRecord|Dataset
     */
    public $healthcareReportingData;

    /**
     * A medical specialty of the provider.
     *
     * @var MedicalSpecialty
     */
    public $medicalSpecialty;

    /**
     * A medical service available from this provider.
     *
     * @var MedicalTherapy|MedicalTest|MedicalProcedure
     */
    public $availableService;
}
