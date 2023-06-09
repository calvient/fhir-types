<?php declare(strict_types=1);

namespace Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense;

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
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRExtension;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRange;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRatio;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTiming;
use Calvient\FhirTypes\DSTU2\FHIRIdPrimitive;
use Calvient\FhirTypes\DSTU2\PHPFHIRConstants;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeInterface;

/**
 * Indicates that a medication product is to be or has been dispensed for a named
 * person/patient. This includes a description of the medication product (supply)
 * provided and the instructions for administering the medication. The medication
 * dispense is the result of a pharmacy system responding to a medication order.
 *
 * Class FHIRMedicationDispenseDosageInstruction
 * @package \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense
 */
class FHIRMedicationDispenseDosageInstruction extends FHIRBackboneElement
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_DOSAGE_INSTRUCTION;
	const FIELD_TEXT = 'text';
	const FIELD_TEXT_EXT = '_text';
	const FIELD_ADDITIONAL_INSTRUCTIONS = 'additionalInstructions';
	const FIELD_TIMING = 'timing';
	const FIELD_AS_NEEDED_BOOLEAN = 'asNeededBoolean';
	const FIELD_AS_NEEDED_BOOLEAN_EXT = '_asNeededBoolean';
	const FIELD_AS_NEEDED_CODEABLE_CONCEPT = 'asNeededCodeableConcept';
	const FIELD_SITE_CODEABLE_CONCEPT = 'siteCodeableConcept';
	const FIELD_SITE_REFERENCE = 'siteReference';
	const FIELD_ROUTE = 'route';
	const FIELD_METHOD = 'method';
	const FIELD_DOSE_RANGE = 'doseRange';
	const FIELD_DOSE_QUANTITY = 'doseQuantity';
	const FIELD_RATE_RATIO = 'rateRatio';
	const FIELD_RATE_RANGE = 'rateRange';
	const FIELD_MAX_DOSE_PER_PERIOD = 'maxDosePerPeriod';

	/** @var string */
	private $_xmlns = '';

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Free text dosage instructions can be used for cases where the instructions are
	 * too complex to code. When coded instructions are present, the free text
	 * instructions may still be present for display to humans taking or administering
	 * the medication.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $text = null;

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Additional instructions such as "Swallow with plenty of water" which may or may
	 * not be coded.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	protected ?FHIRCodeableConcept $additionalInstructions = null;

	/**
	 * Specifies an event that may occur multiple times. Timing schedules are used to
	 * record when things are expected or requested to occur. The most common usage is
	 * in dosage instructions for medications. They are also used when planning care of
	 * various kinds.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The timing schedule for giving the medication to the patient. The Schedule data
	 * type allows many different expressions. For example, "Every 8 hours"; "Three
	 * times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15
	 * Oct 2013, 17 Oct 2013 and 1 Nov 2013".
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTiming
	 */
	protected ?FHIRTiming $timing = null;

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Indicates whether the Medication is only taken when needed within a specific
	 * dosing schedule (Boolean option), or it indicates the precondition for taking
	 * the Medication (CodeableConcept). Specifically if 'boolean' datatype is
	 * selected, then the following logic applies: If set to True, this indicates that
	 * the medication is only taken when needed, within the specified schedule.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
	 */
	protected ?FHIRBoolean $asNeededBoolean = null;

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Indicates whether the Medication is only taken when needed within a specific
	 * dosing schedule (Boolean option), or it indicates the precondition for taking
	 * the Medication (CodeableConcept). Specifically if 'boolean' datatype is
	 * selected, then the following logic applies: If set to True, this indicates that
	 * the medication is only taken when needed, within the specified schedule.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	protected ?FHIRCodeableConcept $asNeededCodeableConcept = null;

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A coded specification of the anatomic site where the medication first enters the
	 * body.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	protected ?FHIRCodeableConcept $siteCodeableConcept = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A coded specification of the anatomic site where the medication first enters the
	 * body.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $siteReference = null;

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A code specifying the route or physiological path of administration of a
	 * therapeutic agent into or onto a subject.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	protected ?FHIRCodeableConcept $route = null;

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A coded value indicating the method by which the medication is intended to be or
	 * was introduced into or on the body.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	protected ?FHIRCodeableConcept $method = null;

	/**
	 * A set of ordered Quantities defined by a low and high limit.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The amount of therapeutic or other substance given at one administration event.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRange
	 */
	protected ?FHIRRange $doseRange = null;

	/**
	 * The amount of therapeutic or other substance given at one administration event.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
	 */
	protected ?FHIRSimpleQuantity $doseQuantity = null;

	/**
	 * A relationship of two Quantity values - expressed as a numerator and a
	 * denominator.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies the speed with which the medication was or will be introduced into
	 * the patient. Typically the rate for an infusion e.g. 100 ml per 1 hour or 100
	 * ml/hr. May also be expressed as a rate per unit of time e.g. 500 ml per 2 hours.
	 * Currently we do not specify a default of '1' in the denominator, but this is
	 * being discussed. Other examples: 200 mcg/min or 200 mcg/1 minute; 1 liter/8
	 * hours.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRatio
	 */
	protected ?FHIRRatio $rateRatio = null;

	/**
	 * A set of ordered Quantities defined by a low and high limit.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies the speed with which the medication was or will be introduced into
	 * the patient. Typically the rate for an infusion e.g. 100 ml per 1 hour or 100
	 * ml/hr. May also be expressed as a rate per unit of time e.g. 500 ml per 2 hours.
	 * Currently we do not specify a default of '1' in the denominator, but this is
	 * being discussed. Other examples: 200 mcg/min or 200 mcg/1 minute; 1 liter/8
	 * hours.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRange
	 */
	protected ?FHIRRange $rateRange = null;

	/**
	 * A relationship of two Quantity values - expressed as a numerator and a
	 * denominator.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum total quantity of a therapeutic substance that may be administered
	 * to a subject over the period of time, e.g. 1000mg in 24 hours.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRatio
	 */
	protected ?FHIRRatio $maxDosePerPeriod = null;

	/**
	 * Validation map for fields in type MedicationDispense.DosageInstruction
	 * @var array
	 */
	private static array $_validationRules = [];

	/**
	 * FHIRMedicationDispenseDosageInstruction Constructor
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
					'FHIRMedicationDispenseDosageInstruction::_construct - $data expected to be null or array, %s seen',
					gettype($data),
				),
			);
		}
		parent::__construct($data);
		if (isset($data[self::FIELD_TEXT]) || isset($data[self::FIELD_TEXT_EXT])) {
			$value = $data[self::FIELD_TEXT] ?? null;
			$ext =
				isset($data[self::FIELD_TEXT_EXT]) && is_array($data[self::FIELD_TEXT_EXT])
					? $data[self::FIELD_TEXT_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->setText($value);
				} elseif (is_array($value)) {
					$this->setText(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->setText(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setText(new FHIRString($ext));
			}
		}
		if (isset($data[self::FIELD_ADDITIONAL_INSTRUCTIONS])) {
			if ($data[self::FIELD_ADDITIONAL_INSTRUCTIONS] instanceof FHIRCodeableConcept) {
				$this->setAdditionalInstructions($data[self::FIELD_ADDITIONAL_INSTRUCTIONS]);
			} else {
				$this->setAdditionalInstructions(
					new FHIRCodeableConcept($data[self::FIELD_ADDITIONAL_INSTRUCTIONS]),
				);
			}
		}
		if (isset($data[self::FIELD_TIMING])) {
			if ($data[self::FIELD_TIMING] instanceof FHIRTiming) {
				$this->setTiming($data[self::FIELD_TIMING]);
			} else {
				$this->setTiming(new FHIRTiming($data[self::FIELD_TIMING]));
			}
		}
		if (
			isset($data[self::FIELD_AS_NEEDED_BOOLEAN]) ||
			isset($data[self::FIELD_AS_NEEDED_BOOLEAN_EXT])
		) {
			$value = $data[self::FIELD_AS_NEEDED_BOOLEAN] ?? null;
			$ext =
				isset($data[self::FIELD_AS_NEEDED_BOOLEAN_EXT]) &&
				is_array($data[self::FIELD_AS_NEEDED_BOOLEAN_EXT])
					? $data[self::FIELD_AS_NEEDED_BOOLEAN_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRBoolean) {
					$this->setAsNeededBoolean($value);
				} elseif (is_array($value)) {
					$this->setAsNeededBoolean(new FHIRBoolean(array_merge($ext, $value)));
				} else {
					$this->setAsNeededBoolean(
						new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setAsNeededBoolean(new FHIRBoolean($ext));
			}
		}
		if (isset($data[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT])) {
			if ($data[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
				$this->setAsNeededCodeableConcept($data[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT]);
			} else {
				$this->setAsNeededCodeableConcept(
					new FHIRCodeableConcept($data[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT]),
				);
			}
		}
		if (isset($data[self::FIELD_SITE_CODEABLE_CONCEPT])) {
			if ($data[self::FIELD_SITE_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
				$this->setSiteCodeableConcept($data[self::FIELD_SITE_CODEABLE_CONCEPT]);
			} else {
				$this->setSiteCodeableConcept(
					new FHIRCodeableConcept($data[self::FIELD_SITE_CODEABLE_CONCEPT]),
				);
			}
		}
		if (isset($data[self::FIELD_SITE_REFERENCE])) {
			if ($data[self::FIELD_SITE_REFERENCE] instanceof FHIRReference) {
				$this->setSiteReference($data[self::FIELD_SITE_REFERENCE]);
			} else {
				$this->setSiteReference(new FHIRReference($data[self::FIELD_SITE_REFERENCE]));
			}
		}
		if (isset($data[self::FIELD_ROUTE])) {
			if ($data[self::FIELD_ROUTE] instanceof FHIRCodeableConcept) {
				$this->setRoute($data[self::FIELD_ROUTE]);
			} else {
				$this->setRoute(new FHIRCodeableConcept($data[self::FIELD_ROUTE]));
			}
		}
		if (isset($data[self::FIELD_METHOD])) {
			if ($data[self::FIELD_METHOD] instanceof FHIRCodeableConcept) {
				$this->setMethod($data[self::FIELD_METHOD]);
			} else {
				$this->setMethod(new FHIRCodeableConcept($data[self::FIELD_METHOD]));
			}
		}
		if (isset($data[self::FIELD_DOSE_RANGE])) {
			if ($data[self::FIELD_DOSE_RANGE] instanceof FHIRRange) {
				$this->setDoseRange($data[self::FIELD_DOSE_RANGE]);
			} else {
				$this->setDoseRange(new FHIRRange($data[self::FIELD_DOSE_RANGE]));
			}
		}
		if (isset($data[self::FIELD_DOSE_QUANTITY])) {
			if ($data[self::FIELD_DOSE_QUANTITY] instanceof FHIRSimpleQuantity) {
				$this->setDoseQuantity($data[self::FIELD_DOSE_QUANTITY]);
			} else {
				$this->setDoseQuantity(new FHIRSimpleQuantity($data[self::FIELD_DOSE_QUANTITY]));
			}
		}
		if (isset($data[self::FIELD_RATE_RATIO])) {
			if ($data[self::FIELD_RATE_RATIO] instanceof FHIRRatio) {
				$this->setRateRatio($data[self::FIELD_RATE_RATIO]);
			} else {
				$this->setRateRatio(new FHIRRatio($data[self::FIELD_RATE_RATIO]));
			}
		}
		if (isset($data[self::FIELD_RATE_RANGE])) {
			if ($data[self::FIELD_RATE_RANGE] instanceof FHIRRange) {
				$this->setRateRange($data[self::FIELD_RATE_RANGE]);
			} else {
				$this->setRateRange(new FHIRRange($data[self::FIELD_RATE_RANGE]));
			}
		}
		if (isset($data[self::FIELD_MAX_DOSE_PER_PERIOD])) {
			if ($data[self::FIELD_MAX_DOSE_PER_PERIOD] instanceof FHIRRatio) {
				$this->setMaxDosePerPeriod($data[self::FIELD_MAX_DOSE_PER_PERIOD]);
			} else {
				$this->setMaxDosePerPeriod(new FHIRRatio($data[self::FIELD_MAX_DOSE_PER_PERIOD]));
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
		return "<MedicationDispenseDosageInstruction{$xmlns}></MedicationDispenseDosageInstruction>";
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Free text dosage instructions can be used for cases where the instructions are
	 * too complex to code. When coded instructions are present, the free text
	 * instructions may still be present for display to humans taking or administering
	 * the medication.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	public function getText(): ?FHIRString
	{
		return $this->text;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Free text dosage instructions can be used for cases where the instructions are
	 * too complex to code. When coded instructions are present, the free text
	 * instructions may still be present for display to humans taking or administering
	 * the medication.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString $text
	 * @return static
	 */
	public function setText($text = null): object
	{
		if (null !== $text && !($text instanceof FHIRString)) {
			$text = new FHIRString($text);
		}
		$this->_trackValueSet($this->text, $text);
		$this->text = $text;
		return $this;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Additional instructions such as "Swallow with plenty of water" which may or may
	 * not be coded.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	public function getAdditionalInstructions(): ?FHIRCodeableConcept
	{
		return $this->additionalInstructions;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Additional instructions such as "Swallow with plenty of water" which may or may
	 * not be coded.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $additionalInstructions
	 * @return static
	 */
	public function setAdditionalInstructions(
		?FHIRCodeableConcept $additionalInstructions = null,
	): object {
		$this->_trackValueSet($this->additionalInstructions, $additionalInstructions);
		$this->additionalInstructions = $additionalInstructions;
		return $this;
	}

	/**
	 * Specifies an event that may occur multiple times. Timing schedules are used to
	 * record when things are expected or requested to occur. The most common usage is
	 * in dosage instructions for medications. They are also used when planning care of
	 * various kinds.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The timing schedule for giving the medication to the patient. The Schedule data
	 * type allows many different expressions. For example, "Every 8 hours"; "Three
	 * times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15
	 * Oct 2013, 17 Oct 2013 and 1 Nov 2013".
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTiming
	 */
	public function getTiming(): ?FHIRTiming
	{
		return $this->timing;
	}

	/**
	 * Specifies an event that may occur multiple times. Timing schedules are used to
	 * record when things are expected or requested to occur. The most common usage is
	 * in dosage instructions for medications. They are also used when planning care of
	 * various kinds.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The timing schedule for giving the medication to the patient. The Schedule data
	 * type allows many different expressions. For example, "Every 8 hours"; "Three
	 * times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15
	 * Oct 2013, 17 Oct 2013 and 1 Nov 2013".
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTiming $timing
	 * @return static
	 */
	public function setTiming(?FHIRTiming $timing = null): object
	{
		$this->_trackValueSet($this->timing, $timing);
		$this->timing = $timing;
		return $this;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Indicates whether the Medication is only taken when needed within a specific
	 * dosing schedule (Boolean option), or it indicates the precondition for taking
	 * the Medication (CodeableConcept). Specifically if 'boolean' datatype is
	 * selected, then the following logic applies: If set to True, this indicates that
	 * the medication is only taken when needed, within the specified schedule.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
	 */
	public function getAsNeededBoolean(): ?FHIRBoolean
	{
		return $this->asNeededBoolean;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Indicates whether the Medication is only taken when needed within a specific
	 * dosing schedule (Boolean option), or it indicates the precondition for taking
	 * the Medication (CodeableConcept). Specifically if 'boolean' datatype is
	 * selected, then the following logic applies: If set to True, this indicates that
	 * the medication is only taken when needed, within the specified schedule.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean $asNeededBoolean
	 * @return static
	 */
	public function setAsNeededBoolean($asNeededBoolean = null): object
	{
		if (null !== $asNeededBoolean && !($asNeededBoolean instanceof FHIRBoolean)) {
			$asNeededBoolean = new FHIRBoolean($asNeededBoolean);
		}
		$this->_trackValueSet($this->asNeededBoolean, $asNeededBoolean);
		$this->asNeededBoolean = $asNeededBoolean;
		return $this;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Indicates whether the Medication is only taken when needed within a specific
	 * dosing schedule (Boolean option), or it indicates the precondition for taking
	 * the Medication (CodeableConcept). Specifically if 'boolean' datatype is
	 * selected, then the following logic applies: If set to True, this indicates that
	 * the medication is only taken when needed, within the specified schedule.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	public function getAsNeededCodeableConcept(): ?FHIRCodeableConcept
	{
		return $this->asNeededCodeableConcept;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Indicates whether the Medication is only taken when needed within a specific
	 * dosing schedule (Boolean option), or it indicates the precondition for taking
	 * the Medication (CodeableConcept). Specifically if 'boolean' datatype is
	 * selected, then the following logic applies: If set to True, this indicates that
	 * the medication is only taken when needed, within the specified schedule.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $asNeededCodeableConcept
	 * @return static
	 */
	public function setAsNeededCodeableConcept(
		?FHIRCodeableConcept $asNeededCodeableConcept = null,
	): object {
		$this->_trackValueSet($this->asNeededCodeableConcept, $asNeededCodeableConcept);
		$this->asNeededCodeableConcept = $asNeededCodeableConcept;
		return $this;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A coded specification of the anatomic site where the medication first enters the
	 * body.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	public function getSiteCodeableConcept(): ?FHIRCodeableConcept
	{
		return $this->siteCodeableConcept;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A coded specification of the anatomic site where the medication first enters the
	 * body.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $siteCodeableConcept
	 * @return static
	 */
	public function setSiteCodeableConcept(?FHIRCodeableConcept $siteCodeableConcept = null): object
	{
		$this->_trackValueSet($this->siteCodeableConcept, $siteCodeableConcept);
		$this->siteCodeableConcept = $siteCodeableConcept;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A coded specification of the anatomic site where the medication first enters the
	 * body.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getSiteReference(): ?FHIRReference
	{
		return $this->siteReference;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A coded specification of the anatomic site where the medication first enters the
	 * body.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $siteReference
	 * @return static
	 */
	public function setSiteReference(?FHIRReference $siteReference = null): object
	{
		$this->_trackValueSet($this->siteReference, $siteReference);
		$this->siteReference = $siteReference;
		return $this;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A code specifying the route or physiological path of administration of a
	 * therapeutic agent into or onto a subject.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	public function getRoute(): ?FHIRCodeableConcept
	{
		return $this->route;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A code specifying the route or physiological path of administration of a
	 * therapeutic agent into or onto a subject.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $route
	 * @return static
	 */
	public function setRoute(?FHIRCodeableConcept $route = null): object
	{
		$this->_trackValueSet($this->route, $route);
		$this->route = $route;
		return $this;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A coded value indicating the method by which the medication is intended to be or
	 * was introduced into or on the body.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	public function getMethod(): ?FHIRCodeableConcept
	{
		return $this->method;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A coded value indicating the method by which the medication is intended to be or
	 * was introduced into or on the body.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $method
	 * @return static
	 */
	public function setMethod(?FHIRCodeableConcept $method = null): object
	{
		$this->_trackValueSet($this->method, $method);
		$this->method = $method;
		return $this;
	}

	/**
	 * A set of ordered Quantities defined by a low and high limit.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The amount of therapeutic or other substance given at one administration event.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRange
	 */
	public function getDoseRange(): ?FHIRRange
	{
		return $this->doseRange;
	}

	/**
	 * A set of ordered Quantities defined by a low and high limit.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The amount of therapeutic or other substance given at one administration event.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRange $doseRange
	 * @return static
	 */
	public function setDoseRange(?FHIRRange $doseRange = null): object
	{
		$this->_trackValueSet($this->doseRange, $doseRange);
		$this->doseRange = $doseRange;
		return $this;
	}

	/**
	 * The amount of therapeutic or other substance given at one administration event.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
	 */
	public function getDoseQuantity(): ?FHIRSimpleQuantity
	{
		return $this->doseQuantity;
	}

	/**
	 * The amount of therapeutic or other substance given at one administration event.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity $doseQuantity
	 * @return static
	 */
	public function setDoseQuantity(?FHIRSimpleQuantity $doseQuantity = null): object
	{
		$this->_trackValueSet($this->doseQuantity, $doseQuantity);
		$this->doseQuantity = $doseQuantity;
		return $this;
	}

	/**
	 * A relationship of two Quantity values - expressed as a numerator and a
	 * denominator.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies the speed with which the medication was or will be introduced into
	 * the patient. Typically the rate for an infusion e.g. 100 ml per 1 hour or 100
	 * ml/hr. May also be expressed as a rate per unit of time e.g. 500 ml per 2 hours.
	 * Currently we do not specify a default of '1' in the denominator, but this is
	 * being discussed. Other examples: 200 mcg/min or 200 mcg/1 minute; 1 liter/8
	 * hours.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRatio
	 */
	public function getRateRatio(): ?FHIRRatio
	{
		return $this->rateRatio;
	}

	/**
	 * A relationship of two Quantity values - expressed as a numerator and a
	 * denominator.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies the speed with which the medication was or will be introduced into
	 * the patient. Typically the rate for an infusion e.g. 100 ml per 1 hour or 100
	 * ml/hr. May also be expressed as a rate per unit of time e.g. 500 ml per 2 hours.
	 * Currently we do not specify a default of '1' in the denominator, but this is
	 * being discussed. Other examples: 200 mcg/min or 200 mcg/1 minute; 1 liter/8
	 * hours.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRatio $rateRatio
	 * @return static
	 */
	public function setRateRatio(?FHIRRatio $rateRatio = null): object
	{
		$this->_trackValueSet($this->rateRatio, $rateRatio);
		$this->rateRatio = $rateRatio;
		return $this;
	}

	/**
	 * A set of ordered Quantities defined by a low and high limit.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies the speed with which the medication was or will be introduced into
	 * the patient. Typically the rate for an infusion e.g. 100 ml per 1 hour or 100
	 * ml/hr. May also be expressed as a rate per unit of time e.g. 500 ml per 2 hours.
	 * Currently we do not specify a default of '1' in the denominator, but this is
	 * being discussed. Other examples: 200 mcg/min or 200 mcg/1 minute; 1 liter/8
	 * hours.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRange
	 */
	public function getRateRange(): ?FHIRRange
	{
		return $this->rateRange;
	}

	/**
	 * A set of ordered Quantities defined by a low and high limit.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies the speed with which the medication was or will be introduced into
	 * the patient. Typically the rate for an infusion e.g. 100 ml per 1 hour or 100
	 * ml/hr. May also be expressed as a rate per unit of time e.g. 500 ml per 2 hours.
	 * Currently we do not specify a default of '1' in the denominator, but this is
	 * being discussed. Other examples: 200 mcg/min or 200 mcg/1 minute; 1 liter/8
	 * hours.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRange $rateRange
	 * @return static
	 */
	public function setRateRange(?FHIRRange $rateRange = null): object
	{
		$this->_trackValueSet($this->rateRange, $rateRange);
		$this->rateRange = $rateRange;
		return $this;
	}

	/**
	 * A relationship of two Quantity values - expressed as a numerator and a
	 * denominator.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum total quantity of a therapeutic substance that may be administered
	 * to a subject over the period of time, e.g. 1000mg in 24 hours.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRatio
	 */
	public function getMaxDosePerPeriod(): ?FHIRRatio
	{
		return $this->maxDosePerPeriod;
	}

	/**
	 * A relationship of two Quantity values - expressed as a numerator and a
	 * denominator.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum total quantity of a therapeutic substance that may be administered
	 * to a subject over the period of time, e.g. 1000mg in 24 hours.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRatio $maxDosePerPeriod
	 * @return static
	 */
	public function setMaxDosePerPeriod(?FHIRRatio $maxDosePerPeriod = null): object
	{
		$this->_trackValueSet($this->maxDosePerPeriod, $maxDosePerPeriod);
		$this->maxDosePerPeriod = $maxDosePerPeriod;
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
		if (null !== ($v = $this->getText())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_TEXT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getAdditionalInstructions())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_ADDITIONAL_INSTRUCTIONS] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getTiming())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_TIMING] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getAsNeededBoolean())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_AS_NEEDED_BOOLEAN] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getAsNeededCodeableConcept())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getSiteCodeableConcept())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_SITE_CODEABLE_CONCEPT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getSiteReference())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_SITE_REFERENCE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getRoute())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_ROUTE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMethod())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_METHOD] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDoseRange())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DOSE_RANGE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDoseQuantity())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DOSE_QUANTITY] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getRateRatio())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_RATE_RATIO] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getRateRange())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_RATE_RANGE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMaxDosePerPeriod())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MAX_DOSE_PER_PERIOD] = $fieldErrs;
			}
		}
		if (isset($validationRules[self::FIELD_TEXT])) {
			$v = $this->getText();
			foreach ($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_DOSAGE_INSTRUCTION,
					self::FIELD_TEXT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_TEXT])) {
						$errs[self::FIELD_TEXT] = [];
					}
					$errs[self::FIELD_TEXT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_ADDITIONAL_INSTRUCTIONS])) {
			$v = $this->getAdditionalInstructions();
			foreach (
				$validationRules[self::FIELD_ADDITIONAL_INSTRUCTIONS]
				as $rule => $constraint
			) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_DOSAGE_INSTRUCTION,
					self::FIELD_ADDITIONAL_INSTRUCTIONS,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_ADDITIONAL_INSTRUCTIONS])) {
						$errs[self::FIELD_ADDITIONAL_INSTRUCTIONS] = [];
					}
					$errs[self::FIELD_ADDITIONAL_INSTRUCTIONS][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_TIMING])) {
			$v = $this->getTiming();
			foreach ($validationRules[self::FIELD_TIMING] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_DOSAGE_INSTRUCTION,
					self::FIELD_TIMING,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_TIMING])) {
						$errs[self::FIELD_TIMING] = [];
					}
					$errs[self::FIELD_TIMING][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_AS_NEEDED_BOOLEAN])) {
			$v = $this->getAsNeededBoolean();
			foreach ($validationRules[self::FIELD_AS_NEEDED_BOOLEAN] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_DOSAGE_INSTRUCTION,
					self::FIELD_AS_NEEDED_BOOLEAN,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_AS_NEEDED_BOOLEAN])) {
						$errs[self::FIELD_AS_NEEDED_BOOLEAN] = [];
					}
					$errs[self::FIELD_AS_NEEDED_BOOLEAN][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT])) {
			$v = $this->getAsNeededCodeableConcept();
			foreach (
				$validationRules[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT]
				as $rule => $constraint
			) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_DOSAGE_INSTRUCTION,
					self::FIELD_AS_NEEDED_CODEABLE_CONCEPT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT])) {
						$errs[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT] = [];
					}
					$errs[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_SITE_CODEABLE_CONCEPT])) {
			$v = $this->getSiteCodeableConcept();
			foreach ($validationRules[self::FIELD_SITE_CODEABLE_CONCEPT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_DOSAGE_INSTRUCTION,
					self::FIELD_SITE_CODEABLE_CONCEPT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_SITE_CODEABLE_CONCEPT])) {
						$errs[self::FIELD_SITE_CODEABLE_CONCEPT] = [];
					}
					$errs[self::FIELD_SITE_CODEABLE_CONCEPT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_SITE_REFERENCE])) {
			$v = $this->getSiteReference();
			foreach ($validationRules[self::FIELD_SITE_REFERENCE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_DOSAGE_INSTRUCTION,
					self::FIELD_SITE_REFERENCE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_SITE_REFERENCE])) {
						$errs[self::FIELD_SITE_REFERENCE] = [];
					}
					$errs[self::FIELD_SITE_REFERENCE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_ROUTE])) {
			$v = $this->getRoute();
			foreach ($validationRules[self::FIELD_ROUTE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_DOSAGE_INSTRUCTION,
					self::FIELD_ROUTE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_ROUTE])) {
						$errs[self::FIELD_ROUTE] = [];
					}
					$errs[self::FIELD_ROUTE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_METHOD])) {
			$v = $this->getMethod();
			foreach ($validationRules[self::FIELD_METHOD] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_DOSAGE_INSTRUCTION,
					self::FIELD_METHOD,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_METHOD])) {
						$errs[self::FIELD_METHOD] = [];
					}
					$errs[self::FIELD_METHOD][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DOSE_RANGE])) {
			$v = $this->getDoseRange();
			foreach ($validationRules[self::FIELD_DOSE_RANGE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_DOSAGE_INSTRUCTION,
					self::FIELD_DOSE_RANGE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DOSE_RANGE])) {
						$errs[self::FIELD_DOSE_RANGE] = [];
					}
					$errs[self::FIELD_DOSE_RANGE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DOSE_QUANTITY])) {
			$v = $this->getDoseQuantity();
			foreach ($validationRules[self::FIELD_DOSE_QUANTITY] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_DOSAGE_INSTRUCTION,
					self::FIELD_DOSE_QUANTITY,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DOSE_QUANTITY])) {
						$errs[self::FIELD_DOSE_QUANTITY] = [];
					}
					$errs[self::FIELD_DOSE_QUANTITY][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_RATE_RATIO])) {
			$v = $this->getRateRatio();
			foreach ($validationRules[self::FIELD_RATE_RATIO] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_DOSAGE_INSTRUCTION,
					self::FIELD_RATE_RATIO,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_RATE_RATIO])) {
						$errs[self::FIELD_RATE_RATIO] = [];
					}
					$errs[self::FIELD_RATE_RATIO][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_RATE_RANGE])) {
			$v = $this->getRateRange();
			foreach ($validationRules[self::FIELD_RATE_RANGE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_DOSAGE_INSTRUCTION,
					self::FIELD_RATE_RANGE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_RATE_RANGE])) {
						$errs[self::FIELD_RATE_RANGE] = [];
					}
					$errs[self::FIELD_RATE_RANGE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MAX_DOSE_PER_PERIOD])) {
			$v = $this->getMaxDosePerPeriod();
			foreach ($validationRules[self::FIELD_MAX_DOSE_PER_PERIOD] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_DOSAGE_INSTRUCTION,
					self::FIELD_MAX_DOSE_PER_PERIOD,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MAX_DOSE_PER_PERIOD])) {
						$errs[self::FIELD_MAX_DOSE_PER_PERIOD] = [];
					}
					$errs[self::FIELD_MAX_DOSE_PER_PERIOD][$rule] = $err;
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseDosageInstruction $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseDosageInstruction
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
						'FHIRMedicationDispenseDosageInstruction::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRMedicationDispenseDosageInstruction::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRMedicationDispenseDosageInstruction(null);
		} elseif (
			!is_object($type) ||
			!($type instanceof FHIRMedicationDispenseDosageInstruction)
		) {
			throw new \RuntimeException(
				sprintf(
					'FHIRMedicationDispenseDosageInstruction::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseDosageInstruction or null, %s seen.',
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
			if (self::FIELD_TEXT === $n->nodeName) {
				$type->setText(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_ADDITIONAL_INSTRUCTIONS === $n->nodeName) {
				$type->setAdditionalInstructions(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_TIMING === $n->nodeName) {
				$type->setTiming(FHIRTiming::xmlUnserialize($n));
			} elseif (self::FIELD_AS_NEEDED_BOOLEAN === $n->nodeName) {
				$type->setAsNeededBoolean(FHIRBoolean::xmlUnserialize($n));
			} elseif (self::FIELD_AS_NEEDED_CODEABLE_CONCEPT === $n->nodeName) {
				$type->setAsNeededCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_SITE_CODEABLE_CONCEPT === $n->nodeName) {
				$type->setSiteCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_SITE_REFERENCE === $n->nodeName) {
				$type->setSiteReference(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_ROUTE === $n->nodeName) {
				$type->setRoute(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_METHOD === $n->nodeName) {
				$type->setMethod(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_DOSE_RANGE === $n->nodeName) {
				$type->setDoseRange(FHIRRange::xmlUnserialize($n));
			} elseif (self::FIELD_DOSE_QUANTITY === $n->nodeName) {
				$type->setDoseQuantity(FHIRSimpleQuantity::xmlUnserialize($n));
			} elseif (self::FIELD_RATE_RATIO === $n->nodeName) {
				$type->setRateRatio(FHIRRatio::xmlUnserialize($n));
			} elseif (self::FIELD_RATE_RANGE === $n->nodeName) {
				$type->setRateRange(FHIRRange::xmlUnserialize($n));
			} elseif (self::FIELD_MAX_DOSE_PER_PERIOD === $n->nodeName) {
				$type->setMaxDosePerPeriod(FHIRRatio::xmlUnserialize($n));
			} elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
				$type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_EXTENSION === $n->nodeName) {
				$type->addExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_ID === $n->nodeName) {
				$type->setId(FHIRIdPrimitive::xmlUnserialize($n));
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_TEXT);
		if (null !== $n) {
			$pt = $type->getText();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setText($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_AS_NEEDED_BOOLEAN);
		if (null !== $n) {
			$pt = $type->getAsNeededBoolean();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setAsNeededBoolean($n->nodeValue);
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
		if (null !== ($v = $this->getText())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_TEXT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getAdditionalInstructions())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_ADDITIONAL_INSTRUCTIONS);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getTiming())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_TIMING);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getAsNeededBoolean())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_AS_NEEDED_BOOLEAN);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getAsNeededCodeableConcept())) {
			$telement = $element->ownerDocument->createElement(
				self::FIELD_AS_NEEDED_CODEABLE_CONCEPT,
			);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getSiteCodeableConcept())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_SITE_CODEABLE_CONCEPT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getSiteReference())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_SITE_REFERENCE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getRoute())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_ROUTE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMethod())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_METHOD);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDoseRange())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DOSE_RANGE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDoseQuantity())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DOSE_QUANTITY);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getRateRatio())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_RATE_RATIO);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getRateRange())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_RATE_RANGE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMaxDosePerPeriod())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MAX_DOSE_PER_PERIOD);
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
		if (null !== ($v = $this->getText())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_TEXT} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRString::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_TEXT_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getAdditionalInstructions())) {
			$out->{self::FIELD_ADDITIONAL_INSTRUCTIONS} = $v;
		}
		if (null !== ($v = $this->getTiming())) {
			$out->{self::FIELD_TIMING} = $v;
		}
		if (null !== ($v = $this->getAsNeededBoolean())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_AS_NEEDED_BOOLEAN} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRBoolean::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_AS_NEEDED_BOOLEAN_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getAsNeededCodeableConcept())) {
			$out->{self::FIELD_AS_NEEDED_CODEABLE_CONCEPT} = $v;
		}
		if (null !== ($v = $this->getSiteCodeableConcept())) {
			$out->{self::FIELD_SITE_CODEABLE_CONCEPT} = $v;
		}
		if (null !== ($v = $this->getSiteReference())) {
			$out->{self::FIELD_SITE_REFERENCE} = $v;
		}
		if (null !== ($v = $this->getRoute())) {
			$out->{self::FIELD_ROUTE} = $v;
		}
		if (null !== ($v = $this->getMethod())) {
			$out->{self::FIELD_METHOD} = $v;
		}
		if (null !== ($v = $this->getDoseRange())) {
			$out->{self::FIELD_DOSE_RANGE} = $v;
		}
		if (null !== ($v = $this->getDoseQuantity())) {
			$out->{self::FIELD_DOSE_QUANTITY} = $v;
		}
		if (null !== ($v = $this->getRateRatio())) {
			$out->{self::FIELD_RATE_RATIO} = $v;
		}
		if (null !== ($v = $this->getRateRange())) {
			$out->{self::FIELD_RATE_RANGE} = $v;
		}
		if (null !== ($v = $this->getMaxDosePerPeriod())) {
			$out->{self::FIELD_MAX_DOSE_PER_PERIOD} = $v;
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
