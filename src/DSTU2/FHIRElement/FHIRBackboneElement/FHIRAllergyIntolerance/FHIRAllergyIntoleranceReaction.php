<?php declare(strict_types=1);

namespace Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance;

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

use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAllergyIntoleranceCertainty;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAllergyIntoleranceSeverity;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAnnotation;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRExtension;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString;
use Calvient\FhirTypes\DSTU2\FHIRIdPrimitive;
use Calvient\FhirTypes\DSTU2\PHPFHIRConstants;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeInterface;

/**
 * Risk of harmful or undesirable, physiological response which is unique to an
 * individual and associated with exposure to a substance.
 *
 * Class FHIRAllergyIntoleranceReaction
 * @package \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance
 */
class FHIRAllergyIntoleranceReaction extends FHIRBackboneElement
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE_DOT_REACTION;
	const FIELD_SUBSTANCE = 'substance';
	const FIELD_CERTAINTY = 'certainty';
	const FIELD_CERTAINTY_EXT = '_certainty';
	const FIELD_MANIFESTATION = 'manifestation';
	const FIELD_DESCRIPTION = 'description';
	const FIELD_DESCRIPTION_EXT = '_description';
	const FIELD_ONSET = 'onset';
	const FIELD_ONSET_EXT = '_onset';
	const FIELD_SEVERITY = 'severity';
	const FIELD_SEVERITY_EXT = '_severity';
	const FIELD_EXPOSURE_ROUTE = 'exposureRoute';
	const FIELD_NOTE = 'note';

	/** @var string */
	private $_xmlns = '';

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identification of the specific substance considered to be responsible for the
	 * Adverse Reaction event. Note: the substance for a specific reaction may be
	 * different to the substance identified as the cause of the risk, but must be
	 * consistent with it. For instance, it may be a more specific substance (e.g. a
	 * brand medication) or a composite substance that includes the identified
	 * substance. It must be clinically safe to only process the
	 * AllergyIntolerance.substance and ignore the AllergyIntolerance.event.substance.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	protected ?FHIRCodeableConcept $substance = null;

	/**
	 * Statement about the degree of clinical certainty that a Specific Substance was
	 * the cause of the Manifestation in an reaction event.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Statement about the degree of clinical certainty that the specific substance was
	 * the cause of the manifestation in this reaction event.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAllergyIntoleranceCertainty
	 */
	protected ?FHIRAllergyIntoleranceCertainty $certainty = null;

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Clinical symptoms and/or signs that are observed or associated with the adverse
	 * reaction event.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept[]
	 */
	protected ?array $manifestation = [];

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Text description about the reaction as a whole, including details of the
	 * manifestation if required.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $description = null;

	/**
	 * A date, date-time or partial date (e.g. just year or year + month). If hours and
	 * minutes are specified, a time zone SHALL be populated. The format is a union of
	 * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
	 * due to schema type constraints but may be zero-filled and may be ignored. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Record of the date and/or time of the onset of the Reaction.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime
	 */
	protected ?FHIRDateTime $onset = null;

	/**
	 * Clinical assessment of the severity of a reaction event as a whole, potentially
	 * considering multiple different manifestations.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Clinical assessment of the severity of the reaction event as a whole,
	 * potentially considering multiple different manifestations.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAllergyIntoleranceSeverity
	 */
	protected ?FHIRAllergyIntoleranceSeverity $severity = null;

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identification of the route by which the subject was exposed to the substance.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	protected ?FHIRCodeableConcept $exposureRoute = null;

	/**
	 * A text note which also contains information about who made the statement and
	 * when.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Additional text about the adverse reaction event not captured in other fields.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAnnotation
	 */
	protected ?FHIRAnnotation $note = null;

	/**
	 * Validation map for fields in type AllergyIntolerance.Reaction
	 * @var array
	 */
	private static array $_validationRules = [
		self::FIELD_MANIFESTATION => [
			PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
		],
	];

	/**
	 * FHIRAllergyIntoleranceReaction Constructor
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
					'FHIRAllergyIntoleranceReaction::_construct - $data expected to be null or array, %s seen',
					gettype($data),
				),
			);
		}
		parent::__construct($data);
		if (isset($data[self::FIELD_SUBSTANCE])) {
			if ($data[self::FIELD_SUBSTANCE] instanceof FHIRCodeableConcept) {
				$this->setSubstance($data[self::FIELD_SUBSTANCE]);
			} else {
				$this->setSubstance(new FHIRCodeableConcept($data[self::FIELD_SUBSTANCE]));
			}
		}
		if (isset($data[self::FIELD_CERTAINTY]) || isset($data[self::FIELD_CERTAINTY_EXT])) {
			$value = $data[self::FIELD_CERTAINTY] ?? null;
			$ext =
				isset($data[self::FIELD_CERTAINTY_EXT]) &&
				is_array($data[self::FIELD_CERTAINTY_EXT])
					? $data[self::FIELD_CERTAINTY_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRAllergyIntoleranceCertainty) {
					$this->setCertainty($value);
				} elseif (is_array($value)) {
					$this->setCertainty(
						new FHIRAllergyIntoleranceCertainty(array_merge($ext, $value)),
					);
				} else {
					$this->setCertainty(
						new FHIRAllergyIntoleranceCertainty(
							[FHIRAllergyIntoleranceCertainty::FIELD_VALUE => $value] + $ext,
						),
					);
				}
			} elseif ([] !== $ext) {
				$this->setCertainty(new FHIRAllergyIntoleranceCertainty($ext));
			}
		}
		if (isset($data[self::FIELD_MANIFESTATION])) {
			if (is_array($data[self::FIELD_MANIFESTATION])) {
				foreach ($data[self::FIELD_MANIFESTATION] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRCodeableConcept) {
						$this->addManifestation($v);
					} else {
						$this->addManifestation(new FHIRCodeableConcept($v));
					}
				}
			} elseif ($data[self::FIELD_MANIFESTATION] instanceof FHIRCodeableConcept) {
				$this->addManifestation($data[self::FIELD_MANIFESTATION]);
			} else {
				$this->addManifestation(new FHIRCodeableConcept($data[self::FIELD_MANIFESTATION]));
			}
		}
		if (isset($data[self::FIELD_DESCRIPTION]) || isset($data[self::FIELD_DESCRIPTION_EXT])) {
			$value = $data[self::FIELD_DESCRIPTION] ?? null;
			$ext =
				isset($data[self::FIELD_DESCRIPTION_EXT]) &&
				is_array($data[self::FIELD_DESCRIPTION_EXT])
					? $data[self::FIELD_DESCRIPTION_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->setDescription($value);
				} elseif (is_array($value)) {
					$this->setDescription(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->setDescription(
						new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setDescription(new FHIRString($ext));
			}
		}
		if (isset($data[self::FIELD_ONSET]) || isset($data[self::FIELD_ONSET_EXT])) {
			$value = $data[self::FIELD_ONSET] ?? null;
			$ext =
				isset($data[self::FIELD_ONSET_EXT]) && is_array($data[self::FIELD_ONSET_EXT])
					? $data[self::FIELD_ONSET_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRDateTime) {
					$this->setOnset($value);
				} elseif (is_array($value)) {
					$this->setOnset(new FHIRDateTime(array_merge($ext, $value)));
				} else {
					$this->setOnset(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setOnset(new FHIRDateTime($ext));
			}
		}
		if (isset($data[self::FIELD_SEVERITY]) || isset($data[self::FIELD_SEVERITY_EXT])) {
			$value = $data[self::FIELD_SEVERITY] ?? null;
			$ext =
				isset($data[self::FIELD_SEVERITY_EXT]) && is_array($data[self::FIELD_SEVERITY_EXT])
					? $data[self::FIELD_SEVERITY_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRAllergyIntoleranceSeverity) {
					$this->setSeverity($value);
				} elseif (is_array($value)) {
					$this->setSeverity(
						new FHIRAllergyIntoleranceSeverity(array_merge($ext, $value)),
					);
				} else {
					$this->setSeverity(
						new FHIRAllergyIntoleranceSeverity(
							[FHIRAllergyIntoleranceSeverity::FIELD_VALUE => $value] + $ext,
						),
					);
				}
			} elseif ([] !== $ext) {
				$this->setSeverity(new FHIRAllergyIntoleranceSeverity($ext));
			}
		}
		if (isset($data[self::FIELD_EXPOSURE_ROUTE])) {
			if ($data[self::FIELD_EXPOSURE_ROUTE] instanceof FHIRCodeableConcept) {
				$this->setExposureRoute($data[self::FIELD_EXPOSURE_ROUTE]);
			} else {
				$this->setExposureRoute(new FHIRCodeableConcept($data[self::FIELD_EXPOSURE_ROUTE]));
			}
		}
		if (isset($data[self::FIELD_NOTE])) {
			if ($data[self::FIELD_NOTE] instanceof FHIRAnnotation) {
				$this->setNote($data[self::FIELD_NOTE]);
			} else {
				$this->setNote(new FHIRAnnotation($data[self::FIELD_NOTE]));
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
		return "<AllergyIntoleranceReaction{$xmlns}></AllergyIntoleranceReaction>";
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identification of the specific substance considered to be responsible for the
	 * Adverse Reaction event. Note: the substance for a specific reaction may be
	 * different to the substance identified as the cause of the risk, but must be
	 * consistent with it. For instance, it may be a more specific substance (e.g. a
	 * brand medication) or a composite substance that includes the identified
	 * substance. It must be clinically safe to only process the
	 * AllergyIntolerance.substance and ignore the AllergyIntolerance.event.substance.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	public function getSubstance(): ?FHIRCodeableConcept
	{
		return $this->substance;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identification of the specific substance considered to be responsible for the
	 * Adverse Reaction event. Note: the substance for a specific reaction may be
	 * different to the substance identified as the cause of the risk, but must be
	 * consistent with it. For instance, it may be a more specific substance (e.g. a
	 * brand medication) or a composite substance that includes the identified
	 * substance. It must be clinically safe to only process the
	 * AllergyIntolerance.substance and ignore the AllergyIntolerance.event.substance.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $substance
	 * @return static
	 */
	public function setSubstance(?FHIRCodeableConcept $substance = null): object
	{
		$this->_trackValueSet($this->substance, $substance);
		$this->substance = $substance;
		return $this;
	}

	/**
	 * Statement about the degree of clinical certainty that a Specific Substance was
	 * the cause of the Manifestation in an reaction event.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Statement about the degree of clinical certainty that the specific substance was
	 * the cause of the manifestation in this reaction event.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAllergyIntoleranceCertainty
	 */
	public function getCertainty(): ?FHIRAllergyIntoleranceCertainty
	{
		return $this->certainty;
	}

	/**
	 * Statement about the degree of clinical certainty that a Specific Substance was
	 * the cause of the Manifestation in an reaction event.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Statement about the degree of clinical certainty that the specific substance was
	 * the cause of the manifestation in this reaction event.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAllergyIntoleranceCertainty $certainty
	 * @return static
	 */
	public function setCertainty(?FHIRAllergyIntoleranceCertainty $certainty = null): object
	{
		$this->_trackValueSet($this->certainty, $certainty);
		$this->certainty = $certainty;
		return $this;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Clinical symptoms and/or signs that are observed or associated with the adverse
	 * reaction event.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept[]
	 */
	public function getManifestation(): ?array
	{
		return $this->manifestation;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Clinical symptoms and/or signs that are observed or associated with the adverse
	 * reaction event.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $manifestation
	 * @return static
	 */
	public function addManifestation(?FHIRCodeableConcept $manifestation = null): object
	{
		$this->_trackValueAdded();
		$this->manifestation[] = $manifestation;
		return $this;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Clinical symptoms and/or signs that are observed or associated with the adverse
	 * reaction event.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept[] $manifestation
	 * @return static
	 */
	public function setManifestation(array $manifestation = []): object
	{
		if ([] !== $this->manifestation) {
			$this->_trackValuesRemoved(count($this->manifestation));
			$this->manifestation = [];
		}
		if ([] === $manifestation) {
			return $this;
		}
		foreach ($manifestation as $v) {
			if ($v instanceof FHIRCodeableConcept) {
				$this->addManifestation($v);
			} else {
				$this->addManifestation(new FHIRCodeableConcept($v));
			}
		}
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Text description about the reaction as a whole, including details of the
	 * manifestation if required.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	public function getDescription(): ?FHIRString
	{
		return $this->description;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Text description about the reaction as a whole, including details of the
	 * manifestation if required.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString $description
	 * @return static
	 */
	public function setDescription($description = null): object
	{
		if (null !== $description && !($description instanceof FHIRString)) {
			$description = new FHIRString($description);
		}
		$this->_trackValueSet($this->description, $description);
		$this->description = $description;
		return $this;
	}

	/**
	 * A date, date-time or partial date (e.g. just year or year + month). If hours and
	 * minutes are specified, a time zone SHALL be populated. The format is a union of
	 * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
	 * due to schema type constraints but may be zero-filled and may be ignored. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Record of the date and/or time of the onset of the Reaction.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime
	 */
	public function getOnset(): ?FHIRDateTime
	{
		return $this->onset;
	}

	/**
	 * A date, date-time or partial date (e.g. just year or year + month). If hours and
	 * minutes are specified, a time zone SHALL be populated. The format is a union of
	 * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
	 * due to schema type constraints but may be zero-filled and may be ignored. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Record of the date and/or time of the onset of the Reaction.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime $onset
	 * @return static
	 */
	public function setOnset($onset = null): object
	{
		if (null !== $onset && !($onset instanceof FHIRDateTime)) {
			$onset = new FHIRDateTime($onset);
		}
		$this->_trackValueSet($this->onset, $onset);
		$this->onset = $onset;
		return $this;
	}

	/**
	 * Clinical assessment of the severity of a reaction event as a whole, potentially
	 * considering multiple different manifestations.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Clinical assessment of the severity of the reaction event as a whole,
	 * potentially considering multiple different manifestations.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAllergyIntoleranceSeverity
	 */
	public function getSeverity(): ?FHIRAllergyIntoleranceSeverity
	{
		return $this->severity;
	}

	/**
	 * Clinical assessment of the severity of a reaction event as a whole, potentially
	 * considering multiple different manifestations.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Clinical assessment of the severity of the reaction event as a whole,
	 * potentially considering multiple different manifestations.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAllergyIntoleranceSeverity $severity
	 * @return static
	 */
	public function setSeverity(?FHIRAllergyIntoleranceSeverity $severity = null): object
	{
		$this->_trackValueSet($this->severity, $severity);
		$this->severity = $severity;
		return $this;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identification of the route by which the subject was exposed to the substance.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	public function getExposureRoute(): ?FHIRCodeableConcept
	{
		return $this->exposureRoute;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identification of the route by which the subject was exposed to the substance.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $exposureRoute
	 * @return static
	 */
	public function setExposureRoute(?FHIRCodeableConcept $exposureRoute = null): object
	{
		$this->_trackValueSet($this->exposureRoute, $exposureRoute);
		$this->exposureRoute = $exposureRoute;
		return $this;
	}

	/**
	 * A text note which also contains information about who made the statement and
	 * when.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Additional text about the adverse reaction event not captured in other fields.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAnnotation
	 */
	public function getNote(): ?FHIRAnnotation
	{
		return $this->note;
	}

	/**
	 * A text note which also contains information about who made the statement and
	 * when.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Additional text about the adverse reaction event not captured in other fields.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAnnotation $note
	 * @return static
	 */
	public function setNote(?FHIRAnnotation $note = null): object
	{
		$this->_trackValueSet($this->note, $note);
		$this->note = $note;
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
		if (null !== ($v = $this->getSubstance())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_SUBSTANCE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getCertainty())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_CERTAINTY] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getManifestation())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_MANIFESTATION, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getDescription())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DESCRIPTION] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getOnset())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_ONSET] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getSeverity())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_SEVERITY] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getExposureRoute())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_EXPOSURE_ROUTE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getNote())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_NOTE] = $fieldErrs;
			}
		}
		if (isset($validationRules[self::FIELD_SUBSTANCE])) {
			$v = $this->getSubstance();
			foreach ($validationRules[self::FIELD_SUBSTANCE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE_DOT_REACTION,
					self::FIELD_SUBSTANCE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_SUBSTANCE])) {
						$errs[self::FIELD_SUBSTANCE] = [];
					}
					$errs[self::FIELD_SUBSTANCE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_CERTAINTY])) {
			$v = $this->getCertainty();
			foreach ($validationRules[self::FIELD_CERTAINTY] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE_DOT_REACTION,
					self::FIELD_CERTAINTY,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_CERTAINTY])) {
						$errs[self::FIELD_CERTAINTY] = [];
					}
					$errs[self::FIELD_CERTAINTY][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MANIFESTATION])) {
			$v = $this->getManifestation();
			foreach ($validationRules[self::FIELD_MANIFESTATION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE_DOT_REACTION,
					self::FIELD_MANIFESTATION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MANIFESTATION])) {
						$errs[self::FIELD_MANIFESTATION] = [];
					}
					$errs[self::FIELD_MANIFESTATION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DESCRIPTION])) {
			$v = $this->getDescription();
			foreach ($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE_DOT_REACTION,
					self::FIELD_DESCRIPTION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DESCRIPTION])) {
						$errs[self::FIELD_DESCRIPTION] = [];
					}
					$errs[self::FIELD_DESCRIPTION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_ONSET])) {
			$v = $this->getOnset();
			foreach ($validationRules[self::FIELD_ONSET] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE_DOT_REACTION,
					self::FIELD_ONSET,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_ONSET])) {
						$errs[self::FIELD_ONSET] = [];
					}
					$errs[self::FIELD_ONSET][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_SEVERITY])) {
			$v = $this->getSeverity();
			foreach ($validationRules[self::FIELD_SEVERITY] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE_DOT_REACTION,
					self::FIELD_SEVERITY,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_SEVERITY])) {
						$errs[self::FIELD_SEVERITY] = [];
					}
					$errs[self::FIELD_SEVERITY][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_EXPOSURE_ROUTE])) {
			$v = $this->getExposureRoute();
			foreach ($validationRules[self::FIELD_EXPOSURE_ROUTE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE_DOT_REACTION,
					self::FIELD_EXPOSURE_ROUTE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_EXPOSURE_ROUTE])) {
						$errs[self::FIELD_EXPOSURE_ROUTE] = [];
					}
					$errs[self::FIELD_EXPOSURE_ROUTE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_NOTE])) {
			$v = $this->getNote();
			foreach ($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE_DOT_REACTION,
					self::FIELD_NOTE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_NOTE])) {
						$errs[self::FIELD_NOTE] = [];
					}
					$errs[self::FIELD_NOTE][$rule] = $err;
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction
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
						'FHIRAllergyIntoleranceReaction::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRAllergyIntoleranceReaction::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRAllergyIntoleranceReaction(null);
		} elseif (!is_object($type) || !($type instanceof FHIRAllergyIntoleranceReaction)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRAllergyIntoleranceReaction::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction or null, %s seen.',
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
			if (self::FIELD_SUBSTANCE === $n->nodeName) {
				$type->setSubstance(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_CERTAINTY === $n->nodeName) {
				$type->setCertainty(FHIRAllergyIntoleranceCertainty::xmlUnserialize($n));
			} elseif (self::FIELD_MANIFESTATION === $n->nodeName) {
				$type->addManifestation(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_DESCRIPTION === $n->nodeName) {
				$type->setDescription(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_ONSET === $n->nodeName) {
				$type->setOnset(FHIRDateTime::xmlUnserialize($n));
			} elseif (self::FIELD_SEVERITY === $n->nodeName) {
				$type->setSeverity(FHIRAllergyIntoleranceSeverity::xmlUnserialize($n));
			} elseif (self::FIELD_EXPOSURE_ROUTE === $n->nodeName) {
				$type->setExposureRoute(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_NOTE === $n->nodeName) {
				$type->setNote(FHIRAnnotation::xmlUnserialize($n));
			} elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
				$type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_EXTENSION === $n->nodeName) {
				$type->addExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_ID === $n->nodeName) {
				$type->setId(FHIRIdPrimitive::xmlUnserialize($n));
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_DESCRIPTION);
		if (null !== $n) {
			$pt = $type->getDescription();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setDescription($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_ONSET);
		if (null !== $n) {
			$pt = $type->getOnset();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setOnset($n->nodeValue);
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
		if (null !== ($v = $this->getSubstance())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_SUBSTANCE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getCertainty())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_CERTAINTY);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getManifestation())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_MANIFESTATION);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if (null !== ($v = $this->getDescription())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DESCRIPTION);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getOnset())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_ONSET);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getSeverity())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_SEVERITY);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getExposureRoute())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_EXPOSURE_ROUTE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getNote())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_NOTE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		return $element;
	}

	/**
	 * @return \stdClass
	 */
	public function jsonSerialize()
	{
		$out = parent::jsonSerialize();
		if (null !== ($v = $this->getSubstance())) {
			$out->{self::FIELD_SUBSTANCE} = $v;
		}
		if (null !== ($v = $this->getCertainty())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_CERTAINTY} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRAllergyIntoleranceCertainty::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_CERTAINTY_EXT} = $ext;
			}
		}
		if ([] !== ($vs = $this->getManifestation())) {
			$out->{self::FIELD_MANIFESTATION} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_MANIFESTATION}[] = $v;
			}
		}
		if (null !== ($v = $this->getDescription())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_DESCRIPTION} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRString::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_DESCRIPTION_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getOnset())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_ONSET} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRDateTime::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_ONSET_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getSeverity())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_SEVERITY} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRAllergyIntoleranceSeverity::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_SEVERITY_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getExposureRoute())) {
			$out->{self::FIELD_EXPOSURE_ROUTE} = $v;
		}
		if (null !== ($v = $this->getNote())) {
			$out->{self::FIELD_NOTE} = $v;
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
