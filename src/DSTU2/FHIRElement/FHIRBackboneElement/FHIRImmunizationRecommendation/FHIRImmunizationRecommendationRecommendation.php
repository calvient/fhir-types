<?php declare(strict_types=1);

namespace Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 *
 * Class creation date: February 11th, 2023 17:09+0000
 *
 * PHPFHIR Copyright:
 *
 * Copyright 2016-2023 Daniel Carbone (daniel.p.carbone@gmail.com)
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *        http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 *
 * FHIR Copyright Notice:
 *
 *   Copyright (c) 2011+, HL7, Inc.
 *   All rights reserved.
 *
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 *
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 *
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 *
 *
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 *
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 *
 */

use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRExtension;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPositiveInt;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference;
use Calvient\FhirTypes\DSTU2\FHIRIdPrimitive;
use Calvient\FhirTypes\DSTU2\PHPFHIRConstants;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeInterface;

/**
 * A patient's point-in-time immunization and recommendation (i.e. forecasting a
 * patient's immunization eligibility according to a published schedule) with
 * optional supporting justification.
 *
 * Class FHIRImmunizationRecommendationRecommendation
 * @package \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation
 */
class FHIRImmunizationRecommendationRecommendation extends FHIRBackboneElement
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION;
	const FIELD_DATE = 'date';
	const FIELD_DATE_EXT = '_date';
	const FIELD_VACCINE_CODE = 'vaccineCode';
	const FIELD_DOSE_NUMBER = 'doseNumber';
	const FIELD_DOSE_NUMBER_EXT = '_doseNumber';
	const FIELD_FORECAST_STATUS = 'forecastStatus';
	const FIELD_DATE_CRITERION = 'dateCriterion';
	const FIELD_PROTOCOL = 'protocol';
	const FIELD_SUPPORTING_IMMUNIZATION = 'supportingImmunization';
	const FIELD_SUPPORTING_PATIENT_INFORMATION = 'supportingPatientInformation';

	/** @var string */
	private $_xmlns = '';

	/**
	 * A date, date-time or partial date (e.g. just year or year + month). If hours and
	 * minutes are specified, a time zone SHALL be populated. The format is a union of
	 * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
	 * due to schema type constraints but may be zero-filled and may be ignored. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The date the immunization recommendation was created.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime
	 */
	protected ?FHIRDateTime $date = null;

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Vaccine that pertains to the recommendation.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	protected ?FHIRCodeableConcept $vaccineCode = null;

	/**
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * This indicates the next recommended dose number (e.g. dose 2 is the next
	 * recommended dose).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPositiveInt
	 */
	protected ?FHIRPositiveInt $doseNumber = null;

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Vaccine administration status.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	protected ?FHIRCodeableConcept $forecastStatus = null;

	/**
	 * A patient's point-in-time immunization and recommendation (i.e. forecasting a
	 * patient's immunization eligibility according to a published schedule) with
	 * optional supporting justification.
	 *
	 * Vaccine date recommendations. For example, earliest date to administer, latest
	 * date to administer, etc.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion[]
	 */
	protected ?array $dateCriterion = [];

	/**
	 * A patient's point-in-time immunization and recommendation (i.e. forecasting a
	 * patient's immunization eligibility according to a published schedule) with
	 * optional supporting justification.
	 *
	 * Contains information about the protocol under which the vaccine was
	 * administered.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationProtocol
	 */
	protected ?FHIRImmunizationRecommendationProtocol $protocol = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Immunization event history that supports the status and recommendation.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	protected ?array $supportingImmunization = [];

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Patient Information that supports the status and recommendation. This includes
	 * patient observations, adverse reactions and allergy/intolerance information.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	protected ?array $supportingPatientInformation = [];

	/**
	 * Validation map for fields in type ImmunizationRecommendation.Recommendation
	 * @var array
	 */
	private static array $_validationRules = [];

	/**
	 * FHIRImmunizationRecommendationRecommendation Constructor
	 * @param null|array $data
	 */
	public function __construct($data = null)
	{
		if (null === $data || [] === $data) {
			return;
		}
		if (!is_array($data)) {
			throw new \InvalidArgumentException(
				sprintf(
					'FHIRImmunizationRecommendationRecommendation::_construct - $data expected to be null or array, %s seen',
					gettype($data),
				),
			);
		}
		parent::__construct($data);
		if (isset($data[self::FIELD_DATE]) || isset($data[self::FIELD_DATE_EXT])) {
			$value = $data[self::FIELD_DATE] ?? null;
			$ext =
				isset($data[self::FIELD_DATE_EXT]) && is_array($data[self::FIELD_DATE_EXT])
					? $data[self::FIELD_DATE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRDateTime) {
					$this->setDate($value);
				} elseif (is_array($value)) {
					$this->setDate(new FHIRDateTime(array_merge($ext, $value)));
				} else {
					$this->setDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setDate(new FHIRDateTime($ext));
			}
		}
		if (isset($data[self::FIELD_VACCINE_CODE])) {
			if ($data[self::FIELD_VACCINE_CODE] instanceof FHIRCodeableConcept) {
				$this->setVaccineCode($data[self::FIELD_VACCINE_CODE]);
			} else {
				$this->setVaccineCode(new FHIRCodeableConcept($data[self::FIELD_VACCINE_CODE]));
			}
		}
		if (isset($data[self::FIELD_DOSE_NUMBER]) || isset($data[self::FIELD_DOSE_NUMBER_EXT])) {
			$value = $data[self::FIELD_DOSE_NUMBER] ?? null;
			$ext =
				isset($data[self::FIELD_DOSE_NUMBER_EXT]) &&
				is_array($data[self::FIELD_DOSE_NUMBER_EXT])
					? $data[self::FIELD_DOSE_NUMBER_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRPositiveInt) {
					$this->setDoseNumber($value);
				} elseif (is_array($value)) {
					$this->setDoseNumber(new FHIRPositiveInt(array_merge($ext, $value)));
				} else {
					$this->setDoseNumber(
						new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setDoseNumber(new FHIRPositiveInt($ext));
			}
		}
		if (isset($data[self::FIELD_FORECAST_STATUS])) {
			if ($data[self::FIELD_FORECAST_STATUS] instanceof FHIRCodeableConcept) {
				$this->setForecastStatus($data[self::FIELD_FORECAST_STATUS]);
			} else {
				$this->setForecastStatus(
					new FHIRCodeableConcept($data[self::FIELD_FORECAST_STATUS]),
				);
			}
		}
		if (isset($data[self::FIELD_DATE_CRITERION])) {
			if (is_array($data[self::FIELD_DATE_CRITERION])) {
				foreach ($data[self::FIELD_DATE_CRITERION] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRImmunizationRecommendationDateCriterion) {
						$this->addDateCriterion($v);
					} else {
						$this->addDateCriterion(
							new FHIRImmunizationRecommendationDateCriterion($v),
						);
					}
				}
			} elseif (
				$data[self::FIELD_DATE_CRITERION] instanceof
				FHIRImmunizationRecommendationDateCriterion
			) {
				$this->addDateCriterion($data[self::FIELD_DATE_CRITERION]);
			} else {
				$this->addDateCriterion(
					new FHIRImmunizationRecommendationDateCriterion(
						$data[self::FIELD_DATE_CRITERION],
					),
				);
			}
		}
		if (isset($data[self::FIELD_PROTOCOL])) {
			if ($data[self::FIELD_PROTOCOL] instanceof FHIRImmunizationRecommendationProtocol) {
				$this->setProtocol($data[self::FIELD_PROTOCOL]);
			} else {
				$this->setProtocol(
					new FHIRImmunizationRecommendationProtocol($data[self::FIELD_PROTOCOL]),
				);
			}
		}
		if (isset($data[self::FIELD_SUPPORTING_IMMUNIZATION])) {
			if (is_array($data[self::FIELD_SUPPORTING_IMMUNIZATION])) {
				foreach ($data[self::FIELD_SUPPORTING_IMMUNIZATION] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRReference) {
						$this->addSupportingImmunization($v);
					} else {
						$this->addSupportingImmunization(new FHIRReference($v));
					}
				}
			} elseif ($data[self::FIELD_SUPPORTING_IMMUNIZATION] instanceof FHIRReference) {
				$this->addSupportingImmunization($data[self::FIELD_SUPPORTING_IMMUNIZATION]);
			} else {
				$this->addSupportingImmunization(
					new FHIRReference($data[self::FIELD_SUPPORTING_IMMUNIZATION]),
				);
			}
		}
		if (isset($data[self::FIELD_SUPPORTING_PATIENT_INFORMATION])) {
			if (is_array($data[self::FIELD_SUPPORTING_PATIENT_INFORMATION])) {
				foreach ($data[self::FIELD_SUPPORTING_PATIENT_INFORMATION] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRReference) {
						$this->addSupportingPatientInformation($v);
					} else {
						$this->addSupportingPatientInformation(new FHIRReference($v));
					}
				}
			} elseif ($data[self::FIELD_SUPPORTING_PATIENT_INFORMATION] instanceof FHIRReference) {
				$this->addSupportingPatientInformation(
					$data[self::FIELD_SUPPORTING_PATIENT_INFORMATION],
				);
			} else {
				$this->addSupportingPatientInformation(
					new FHIRReference($data[self::FIELD_SUPPORTING_PATIENT_INFORMATION]),
				);
			}
		}
	}

	/**
	 * @return string
	 */
	public function _getFHIRTypeName(): string
	{
		return self::FHIR_TYPE_NAME;
	}

	/**
	 * @return string
	 */
	public function _getFHIRXMLElementDefinition(): string
	{
		$xmlns = $this->_getFHIRXMLNamespace();
		if ('' !== $xmlns) {
			$xmlns = " xmlns=\"{$xmlns}\"";
		}
		return "<ImmunizationRecommendationRecommendation{$xmlns}></ImmunizationRecommendationRecommendation>";
	}

	/**
	 * A date, date-time or partial date (e.g. just year or year + month). If hours and
	 * minutes are specified, a time zone SHALL be populated. The format is a union of
	 * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
	 * due to schema type constraints but may be zero-filled and may be ignored. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The date the immunization recommendation was created.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime
	 */
	public function getDate(): ?FHIRDateTime
	{
		return $this->date;
	}

	/**
	 * A date, date-time or partial date (e.g. just year or year + month). If hours and
	 * minutes are specified, a time zone SHALL be populated. The format is a union of
	 * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
	 * due to schema type constraints but may be zero-filled and may be ignored. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The date the immunization recommendation was created.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime $date
	 * @return static
	 */
	public function setDate($date = null): object
	{
		if (null !== $date && !($date instanceof FHIRDateTime)) {
			$date = new FHIRDateTime($date);
		}
		$this->_trackValueSet($this->date, $date);
		$this->date = $date;
		return $this;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Vaccine that pertains to the recommendation.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	public function getVaccineCode(): ?FHIRCodeableConcept
	{
		return $this->vaccineCode;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Vaccine that pertains to the recommendation.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $vaccineCode
	 * @return static
	 */
	public function setVaccineCode(?FHIRCodeableConcept $vaccineCode = null): object
	{
		$this->_trackValueSet($this->vaccineCode, $vaccineCode);
		$this->vaccineCode = $vaccineCode;
		return $this;
	}

	/**
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * This indicates the next recommended dose number (e.g. dose 2 is the next
	 * recommended dose).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPositiveInt
	 */
	public function getDoseNumber(): ?FHIRPositiveInt
	{
		return $this->doseNumber;
	}

	/**
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * This indicates the next recommended dose number (e.g. dose 2 is the next
	 * recommended dose).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPositiveInt $doseNumber
	 * @return static
	 */
	public function setDoseNumber($doseNumber = null): object
	{
		if (null !== $doseNumber && !($doseNumber instanceof FHIRPositiveInt)) {
			$doseNumber = new FHIRPositiveInt($doseNumber);
		}
		$this->_trackValueSet($this->doseNumber, $doseNumber);
		$this->doseNumber = $doseNumber;
		return $this;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Vaccine administration status.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	public function getForecastStatus(): ?FHIRCodeableConcept
	{
		return $this->forecastStatus;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Vaccine administration status.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $forecastStatus
	 * @return static
	 */
	public function setForecastStatus(?FHIRCodeableConcept $forecastStatus = null): object
	{
		$this->_trackValueSet($this->forecastStatus, $forecastStatus);
		$this->forecastStatus = $forecastStatus;
		return $this;
	}

	/**
	 * A patient's point-in-time immunization and recommendation (i.e. forecasting a
	 * patient's immunization eligibility according to a published schedule) with
	 * optional supporting justification.
	 *
	 * Vaccine date recommendations. For example, earliest date to administer, latest
	 * date to administer, etc.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion[]
	 */
	public function getDateCriterion(): ?array
	{
		return $this->dateCriterion;
	}

	/**
	 * A patient's point-in-time immunization and recommendation (i.e. forecasting a
	 * patient's immunization eligibility according to a published schedule) with
	 * optional supporting justification.
	 *
	 * Vaccine date recommendations. For example, earliest date to administer, latest
	 * date to administer, etc.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion $dateCriterion
	 * @return static
	 */
	public function addDateCriterion(
		?FHIRImmunizationRecommendationDateCriterion $dateCriterion = null,
	): object {
		$this->_trackValueAdded();
		$this->dateCriterion[] = $dateCriterion;
		return $this;
	}

	/**
	 * A patient's point-in-time immunization and recommendation (i.e. forecasting a
	 * patient's immunization eligibility according to a published schedule) with
	 * optional supporting justification.
	 *
	 * Vaccine date recommendations. For example, earliest date to administer, latest
	 * date to administer, etc.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion[] $dateCriterion
	 * @return static
	 */
	public function setDateCriterion(array $dateCriterion = []): object
	{
		if ([] !== $this->dateCriterion) {
			$this->_trackValuesRemoved(count($this->dateCriterion));
			$this->dateCriterion = [];
		}
		if ([] === $dateCriterion) {
			return $this;
		}
		foreach ($dateCriterion as $v) {
			if ($v instanceof FHIRImmunizationRecommendationDateCriterion) {
				$this->addDateCriterion($v);
			} else {
				$this->addDateCriterion(new FHIRImmunizationRecommendationDateCriterion($v));
			}
		}
		return $this;
	}

	/**
	 * A patient's point-in-time immunization and recommendation (i.e. forecasting a
	 * patient's immunization eligibility according to a published schedule) with
	 * optional supporting justification.
	 *
	 * Contains information about the protocol under which the vaccine was
	 * administered.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationProtocol
	 */
	public function getProtocol(): ?FHIRImmunizationRecommendationProtocol
	{
		return $this->protocol;
	}

	/**
	 * A patient's point-in-time immunization and recommendation (i.e. forecasting a
	 * patient's immunization eligibility according to a published schedule) with
	 * optional supporting justification.
	 *
	 * Contains information about the protocol under which the vaccine was
	 * administered.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationProtocol $protocol
	 * @return static
	 */
	public function setProtocol(?FHIRImmunizationRecommendationProtocol $protocol = null): object
	{
		$this->_trackValueSet($this->protocol, $protocol);
		$this->protocol = $protocol;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Immunization event history that supports the status and recommendation.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	public function getSupportingImmunization(): ?array
	{
		return $this->supportingImmunization;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Immunization event history that supports the status and recommendation.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $supportingImmunization
	 * @return static
	 */
	public function addSupportingImmunization(?FHIRReference $supportingImmunization = null): object
	{
		$this->_trackValueAdded();
		$this->supportingImmunization[] = $supportingImmunization;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Immunization event history that supports the status and recommendation.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[] $supportingImmunization
	 * @return static
	 */
	public function setSupportingImmunization(array $supportingImmunization = []): object
	{
		if ([] !== $this->supportingImmunization) {
			$this->_trackValuesRemoved(count($this->supportingImmunization));
			$this->supportingImmunization = [];
		}
		if ([] === $supportingImmunization) {
			return $this;
		}
		foreach ($supportingImmunization as $v) {
			if ($v instanceof FHIRReference) {
				$this->addSupportingImmunization($v);
			} else {
				$this->addSupportingImmunization(new FHIRReference($v));
			}
		}
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Patient Information that supports the status and recommendation. This includes
	 * patient observations, adverse reactions and allergy/intolerance information.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	public function getSupportingPatientInformation(): ?array
	{
		return $this->supportingPatientInformation;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Patient Information that supports the status and recommendation. This includes
	 * patient observations, adverse reactions and allergy/intolerance information.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $supportingPatientInformation
	 * @return static
	 */
	public function addSupportingPatientInformation(
		?FHIRReference $supportingPatientInformation = null,
	): object {
		$this->_trackValueAdded();
		$this->supportingPatientInformation[] = $supportingPatientInformation;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Patient Information that supports the status and recommendation. This includes
	 * patient observations, adverse reactions and allergy/intolerance information.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[] $supportingPatientInformation
	 * @return static
	 */
	public function setSupportingPatientInformation(
		array $supportingPatientInformation = [],
	): object {
		if ([] !== $this->supportingPatientInformation) {
			$this->_trackValuesRemoved(count($this->supportingPatientInformation));
			$this->supportingPatientInformation = [];
		}
		if ([] === $supportingPatientInformation) {
			return $this;
		}
		foreach ($supportingPatientInformation as $v) {
			if ($v instanceof FHIRReference) {
				$this->addSupportingPatientInformation($v);
			} else {
				$this->addSupportingPatientInformation(new FHIRReference($v));
			}
		}
		return $this;
	}

	/**
	 * Returns the validation rules that this type's fields must comply with to be considered "valid"
	 * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
	 *
	 * @return array
	 */
	public function _getValidationRules(): array
	{
		return self::$_validationRules;
	}

	/**
	 * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
	 * passing.
	 *
	 * @return array
	 */
	public function _getValidationErrors(): array
	{
		$errs = parent::_getValidationErrors();
		$validationRules = $this->_getValidationRules();
		if (null !== ($v = $this->getDate())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DATE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getVaccineCode())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_VACCINE_CODE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDoseNumber())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DOSE_NUMBER] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getForecastStatus())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FORECAST_STATUS] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getDateCriterion())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_DATE_CRITERION, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getProtocol())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PROTOCOL] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getSupportingImmunization())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_SUPPORTING_IMMUNIZATION, $i)] = $fieldErrs;
				}
			}
		}
		if ([] !== ($vs = $this->getSupportingPatientInformation())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[
						sprintf('%s.%d', self::FIELD_SUPPORTING_PATIENT_INFORMATION, $i)
					] = $fieldErrs;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DATE])) {
			$v = $this->getDate();
			foreach ($validationRules[self::FIELD_DATE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION,
					self::FIELD_DATE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DATE])) {
						$errs[self::FIELD_DATE] = [];
					}
					$errs[self::FIELD_DATE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_VACCINE_CODE])) {
			$v = $this->getVaccineCode();
			foreach ($validationRules[self::FIELD_VACCINE_CODE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION,
					self::FIELD_VACCINE_CODE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_VACCINE_CODE])) {
						$errs[self::FIELD_VACCINE_CODE] = [];
					}
					$errs[self::FIELD_VACCINE_CODE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DOSE_NUMBER])) {
			$v = $this->getDoseNumber();
			foreach ($validationRules[self::FIELD_DOSE_NUMBER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION,
					self::FIELD_DOSE_NUMBER,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DOSE_NUMBER])) {
						$errs[self::FIELD_DOSE_NUMBER] = [];
					}
					$errs[self::FIELD_DOSE_NUMBER][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FORECAST_STATUS])) {
			$v = $this->getForecastStatus();
			foreach ($validationRules[self::FIELD_FORECAST_STATUS] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION,
					self::FIELD_FORECAST_STATUS,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FORECAST_STATUS])) {
						$errs[self::FIELD_FORECAST_STATUS] = [];
					}
					$errs[self::FIELD_FORECAST_STATUS][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DATE_CRITERION])) {
			$v = $this->getDateCriterion();
			foreach ($validationRules[self::FIELD_DATE_CRITERION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION,
					self::FIELD_DATE_CRITERION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DATE_CRITERION])) {
						$errs[self::FIELD_DATE_CRITERION] = [];
					}
					$errs[self::FIELD_DATE_CRITERION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PROTOCOL])) {
			$v = $this->getProtocol();
			foreach ($validationRules[self::FIELD_PROTOCOL] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION,
					self::FIELD_PROTOCOL,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PROTOCOL])) {
						$errs[self::FIELD_PROTOCOL] = [];
					}
					$errs[self::FIELD_PROTOCOL][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_SUPPORTING_IMMUNIZATION])) {
			$v = $this->getSupportingImmunization();
			foreach (
				$validationRules[self::FIELD_SUPPORTING_IMMUNIZATION]
				as $rule => $constraint
			) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION,
					self::FIELD_SUPPORTING_IMMUNIZATION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_SUPPORTING_IMMUNIZATION])) {
						$errs[self::FIELD_SUPPORTING_IMMUNIZATION] = [];
					}
					$errs[self::FIELD_SUPPORTING_IMMUNIZATION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_SUPPORTING_PATIENT_INFORMATION])) {
			$v = $this->getSupportingPatientInformation();
			foreach (
				$validationRules[self::FIELD_SUPPORTING_PATIENT_INFORMATION]
				as $rule => $constraint
			) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION,
					self::FIELD_SUPPORTING_PATIENT_INFORMATION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_SUPPORTING_PATIENT_INFORMATION])) {
						$errs[self::FIELD_SUPPORTING_PATIENT_INFORMATION] = [];
					}
					$errs[self::FIELD_SUPPORTING_PATIENT_INFORMATION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
			$v = $this->getModifierExtension();
			foreach ($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT,
					self::FIELD_MODIFIER_EXTENSION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
						$errs[self::FIELD_MODIFIER_EXTENSION] = [];
					}
					$errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_EXTENSION])) {
			$v = $this->getExtension();
			foreach ($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT,
					self::FIELD_EXTENSION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_EXTENSION])) {
						$errs[self::FIELD_EXTENSION] = [];
					}
					$errs[self::FIELD_EXTENSION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_ID])) {
			$v = $this->getId();
			foreach ($validationRules[self::FIELD_ID] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT,
					self::FIELD_ID,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_ID])) {
						$errs[self::FIELD_ID] = [];
					}
					$errs[self::FIELD_ID][$rule] = $err;
				}
			}
		}
		return $errs;
	}

	/**
	 * @param null|string|\DOMElement $element
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation
	 */
	public static function xmlUnserialize(
		$element = null,
		PHPFHIRTypeInterface $type = null,
		?int $libxmlOpts = 591872,
	): ?PHPFHIRTypeInterface {
		if (null === $element) {
			return null;
		}
		if (is_string($element)) {
			libxml_use_internal_errors(true);
			$dom = new \DOMDocument();
			if (false === $dom->loadXML($element, $libxmlOpts)) {
				throw new \DomainException(
					sprintf(
						'FHIRImmunizationRecommendationRecommendation::xmlUnserialize - String provided is not parseable as XML: %s',
						implode(
							', ',
							array_map(function (\libXMLError $err) {
								return $err->message;
							}, libxml_get_errors()),
						),
					),
				);
			}
			libxml_use_internal_errors(false);
			$element = $dom->documentElement;
		}
		if (!($element instanceof \DOMElement)) {
			throw new \InvalidArgumentException(
				sprintf(
					'FHIRImmunizationRecommendationRecommendation::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRImmunizationRecommendationRecommendation(null);
		} elseif (
			!is_object($type) ||
			!($type instanceof FHIRImmunizationRecommendationRecommendation)
		) {
			throw new \RuntimeException(
				sprintf(
					'FHIRImmunizationRecommendationRecommendation::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation or null, %s seen.',
					is_object($type) ? get_class($type) : gettype($type),
				),
			);
		}
		if (
			'' === $type->_getFHIRXMLNamespace() &&
			(null === $element->parentNode ||
				$element->namespaceURI !== $element->parentNode->namespaceURI)
		) {
			$type->_setFHIRXMLNamespace($element->namespaceURI);
		}
		for ($i = 0; $i < $element->childNodes->length; $i++) {
			$n = $element->childNodes->item($i);
			if (!($n instanceof \DOMElement)) {
				continue;
			}
			if (self::FIELD_DATE === $n->nodeName) {
				$type->setDate(FHIRDateTime::xmlUnserialize($n));
			} elseif (self::FIELD_VACCINE_CODE === $n->nodeName) {
				$type->setVaccineCode(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_DOSE_NUMBER === $n->nodeName) {
				$type->setDoseNumber(FHIRPositiveInt::xmlUnserialize($n));
			} elseif (self::FIELD_FORECAST_STATUS === $n->nodeName) {
				$type->setForecastStatus(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_DATE_CRITERION === $n->nodeName) {
				$type->addDateCriterion(
					FHIRImmunizationRecommendationDateCriterion::xmlUnserialize($n),
				);
			} elseif (self::FIELD_PROTOCOL === $n->nodeName) {
				$type->setProtocol(FHIRImmunizationRecommendationProtocol::xmlUnserialize($n));
			} elseif (self::FIELD_SUPPORTING_IMMUNIZATION === $n->nodeName) {
				$type->addSupportingImmunization(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_SUPPORTING_PATIENT_INFORMATION === $n->nodeName) {
				$type->addSupportingPatientInformation(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
				$type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_EXTENSION === $n->nodeName) {
				$type->addExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_ID === $n->nodeName) {
				$type->setId(FHIRIdPrimitive::xmlUnserialize($n));
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_DATE);
		if (null !== $n) {
			$pt = $type->getDate();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setDate($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_DOSE_NUMBER);
		if (null !== $n) {
			$pt = $type->getDoseNumber();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setDoseNumber($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_ID);
		if (null !== $n) {
			$pt = $type->getId();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setId($n->nodeValue);
			}
		}
		return $type;
	}

	/**
	 * @param null|\DOMElement $element
	 * @param null|int $libxmlOpts
	 * @return \DOMElement
	 */
	public function xmlSerialize(
		\DOMElement $element = null,
		?int $libxmlOpts = 591872,
	): \DOMElement {
		if (null === $element) {
			$dom = new \DOMDocument();
			$dom->loadXML($this->_getFHIRXMLElementDefinition(), $libxmlOpts);
			$element = $dom->documentElement;
		} elseif (
			null === $element->namespaceURI &&
			'' !== ($xmlns = $this->_getFHIRXMLNamespace())
		) {
			$element->setAttribute('xmlns', $xmlns);
		}
		parent::xmlSerialize($element);
		if (null !== ($v = $this->getDate())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DATE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getVaccineCode())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_VACCINE_CODE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDoseNumber())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DOSE_NUMBER);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getForecastStatus())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FORECAST_STATUS);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getDateCriterion())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_DATE_CRITERION);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if (null !== ($v = $this->getProtocol())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PROTOCOL);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getSupportingImmunization())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(
					self::FIELD_SUPPORTING_IMMUNIZATION,
				);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if ([] !== ($vs = $this->getSupportingPatientInformation())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(
					self::FIELD_SUPPORTING_PATIENT_INFORMATION,
				);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		return $element;
	}

	/**
	 * @return \stdClass
	 */
	public function jsonSerialize()
	{
		$out = parent::jsonSerialize();
		if (null !== ($v = $this->getDate())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_DATE} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRDateTime::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_DATE_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getVaccineCode())) {
			$out->{self::FIELD_VACCINE_CODE} = $v;
		}
		if (null !== ($v = $this->getDoseNumber())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_DOSE_NUMBER} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRPositiveInt::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_DOSE_NUMBER_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getForecastStatus())) {
			$out->{self::FIELD_FORECAST_STATUS} = $v;
		}
		if ([] !== ($vs = $this->getDateCriterion())) {
			$out->{self::FIELD_DATE_CRITERION} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_DATE_CRITERION}[] = $v;
			}
		}
		if (null !== ($v = $this->getProtocol())) {
			$out->{self::FIELD_PROTOCOL} = $v;
		}
		if ([] !== ($vs = $this->getSupportingImmunization())) {
			$out->{self::FIELD_SUPPORTING_IMMUNIZATION} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_SUPPORTING_IMMUNIZATION}[] = $v;
			}
		}
		if ([] !== ($vs = $this->getSupportingPatientInformation())) {
			$out->{self::FIELD_SUPPORTING_PATIENT_INFORMATION} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_SUPPORTING_PATIENT_INFORMATION}[] = $v;
			}
		}

		return $out;
	}

	/**
	 * @return string
	 */
	public function __toString(): string
	{
		return self::FHIR_TYPE_NAME;
	}
}
