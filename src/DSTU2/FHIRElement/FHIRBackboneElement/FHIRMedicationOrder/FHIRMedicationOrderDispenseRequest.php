<?php declare(strict_types=1);

namespace Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationOrder;

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
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRExtension;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPositiveInt;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRDuration;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference;
use Calvient\FhirTypes\DSTU2\FHIRIdPrimitive;
use Calvient\FhirTypes\DSTU2\PHPFHIRConstants;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeInterface;

/**
 * An order for both supply of the medication and the instructions for
 * administration of the medication to a patient. The resource is called
 * "MedicationOrder" rather than "MedicationPrescription" to generalize the use
 * across inpatient and outpatient settings as well as for care plans, etc.
 *
 * Class FHIRMedicationOrderDispenseRequest
 * @package \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationOrder
 */
class FHIRMedicationOrderDispenseRequest extends FHIRBackboneElement
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICATION_ORDER_DOT_DISPENSE_REQUEST;
	const FIELD_MEDICATION_CODEABLE_CONCEPT = 'medicationCodeableConcept';
	const FIELD_MEDICATION_REFERENCE = 'medicationReference';
	const FIELD_VALIDITY_PERIOD = 'validityPeriod';
	const FIELD_NUMBER_OF_REPEATS_ALLOWED = 'numberOfRepeatsAllowed';
	const FIELD_NUMBER_OF_REPEATS_ALLOWED_EXT = '_numberOfRepeatsAllowed';
	const FIELD_QUANTITY = 'quantity';
	const FIELD_EXPECTED_SUPPLY_DURATION = 'expectedSupplyDuration';

	/** @var string */
	private $_xmlns = '';

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies the medication being administered. This is a link to a resource that
	 * represents the medication which may be the details of the medication or simply
	 * an attribute carrying a code that identifies the medication from a known list of
	 * medications.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	protected ?FHIRCodeableConcept $medicationCodeableConcept = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies the medication being administered. This is a link to a resource that
	 * represents the medication which may be the details of the medication or simply
	 * an attribute carrying a code that identifies the medication from a known list of
	 * medications.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $medicationReference = null;

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * This indicates the validity period of a prescription (stale dating the
	 * Prescription).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod
	 */
	protected ?FHIRPeriod $validityPeriod = null;

	/**
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * An integer indicating the number of additional times (aka refills or repeats)
	 * the patient can receive the prescribed medication. Usage Notes: This integer
	 * does NOT include the original order dispense. This means that if an order
	 * indicates dispense 30 tablets plus "3 repeats", then the order can be dispensed
	 * a total of 4 times and the patient can receive a total of 120 tablets.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPositiveInt
	 */
	protected ?FHIRPositiveInt $numberOfRepeatsAllowed = null;

	/**
	 * The amount that is to be dispensed for one fill.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
	 */
	protected ?FHIRSimpleQuantity $quantity = null;

	/**
	 * Identifies the period time over which the supplied product is expected to be
	 * used, or the length of time the dispense is expected to last.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRDuration
	 */
	protected ?FHIRDuration $expectedSupplyDuration = null;

	/**
	 * Validation map for fields in type MedicationOrder.DispenseRequest
	 * @var array
	 */
	private static array $_validationRules = [];

	/**
	 * FHIRMedicationOrderDispenseRequest Constructor
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
					'FHIRMedicationOrderDispenseRequest::_construct - $data expected to be null or array, %s seen',
					gettype($data),
				),
			);
		}
		parent::__construct($data);
		if (isset($data[self::FIELD_MEDICATION_CODEABLE_CONCEPT])) {
			if ($data[self::FIELD_MEDICATION_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
				$this->setMedicationCodeableConcept($data[self::FIELD_MEDICATION_CODEABLE_CONCEPT]);
			} else {
				$this->setMedicationCodeableConcept(
					new FHIRCodeableConcept($data[self::FIELD_MEDICATION_CODEABLE_CONCEPT]),
				);
			}
		}
		if (isset($data[self::FIELD_MEDICATION_REFERENCE])) {
			if ($data[self::FIELD_MEDICATION_REFERENCE] instanceof FHIRReference) {
				$this->setMedicationReference($data[self::FIELD_MEDICATION_REFERENCE]);
			} else {
				$this->setMedicationReference(
					new FHIRReference($data[self::FIELD_MEDICATION_REFERENCE]),
				);
			}
		}
		if (isset($data[self::FIELD_VALIDITY_PERIOD])) {
			if ($data[self::FIELD_VALIDITY_PERIOD] instanceof FHIRPeriod) {
				$this->setValidityPeriod($data[self::FIELD_VALIDITY_PERIOD]);
			} else {
				$this->setValidityPeriod(new FHIRPeriod($data[self::FIELD_VALIDITY_PERIOD]));
			}
		}
		if (
			isset($data[self::FIELD_NUMBER_OF_REPEATS_ALLOWED]) ||
			isset($data[self::FIELD_NUMBER_OF_REPEATS_ALLOWED_EXT])
		) {
			$value = $data[self::FIELD_NUMBER_OF_REPEATS_ALLOWED] ?? null;
			$ext =
				isset($data[self::FIELD_NUMBER_OF_REPEATS_ALLOWED_EXT]) &&
				is_array($data[self::FIELD_NUMBER_OF_REPEATS_ALLOWED_EXT])
					? $data[self::FIELD_NUMBER_OF_REPEATS_ALLOWED_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRPositiveInt) {
					$this->setNumberOfRepeatsAllowed($value);
				} elseif (is_array($value)) {
					$this->setNumberOfRepeatsAllowed(
						new FHIRPositiveInt(array_merge($ext, $value)),
					);
				} else {
					$this->setNumberOfRepeatsAllowed(
						new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setNumberOfRepeatsAllowed(new FHIRPositiveInt($ext));
			}
		}
		if (isset($data[self::FIELD_QUANTITY])) {
			if ($data[self::FIELD_QUANTITY] instanceof FHIRSimpleQuantity) {
				$this->setQuantity($data[self::FIELD_QUANTITY]);
			} else {
				$this->setQuantity(new FHIRSimpleQuantity($data[self::FIELD_QUANTITY]));
			}
		}
		if (isset($data[self::FIELD_EXPECTED_SUPPLY_DURATION])) {
			if ($data[self::FIELD_EXPECTED_SUPPLY_DURATION] instanceof FHIRDuration) {
				$this->setExpectedSupplyDuration($data[self::FIELD_EXPECTED_SUPPLY_DURATION]);
			} else {
				$this->setExpectedSupplyDuration(
					new FHIRDuration($data[self::FIELD_EXPECTED_SUPPLY_DURATION]),
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
		return "<MedicationOrderDispenseRequest{$xmlns}></MedicationOrderDispenseRequest>";
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies the medication being administered. This is a link to a resource that
	 * represents the medication which may be the details of the medication or simply
	 * an attribute carrying a code that identifies the medication from a known list of
	 * medications.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	public function getMedicationCodeableConcept(): ?FHIRCodeableConcept
	{
		return $this->medicationCodeableConcept;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies the medication being administered. This is a link to a resource that
	 * represents the medication which may be the details of the medication or simply
	 * an attribute carrying a code that identifies the medication from a known list of
	 * medications.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $medicationCodeableConcept
	 * @return static
	 */
	public function setMedicationCodeableConcept(
		?FHIRCodeableConcept $medicationCodeableConcept = null,
	): object {
		$this->_trackValueSet($this->medicationCodeableConcept, $medicationCodeableConcept);
		$this->medicationCodeableConcept = $medicationCodeableConcept;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies the medication being administered. This is a link to a resource that
	 * represents the medication which may be the details of the medication or simply
	 * an attribute carrying a code that identifies the medication from a known list of
	 * medications.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getMedicationReference(): ?FHIRReference
	{
		return $this->medicationReference;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies the medication being administered. This is a link to a resource that
	 * represents the medication which may be the details of the medication or simply
	 * an attribute carrying a code that identifies the medication from a known list of
	 * medications.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $medicationReference
	 * @return static
	 */
	public function setMedicationReference(?FHIRReference $medicationReference = null): object
	{
		$this->_trackValueSet($this->medicationReference, $medicationReference);
		$this->medicationReference = $medicationReference;
		return $this;
	}

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * This indicates the validity period of a prescription (stale dating the
	 * Prescription).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod
	 */
	public function getValidityPeriod(): ?FHIRPeriod
	{
		return $this->validityPeriod;
	}

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * This indicates the validity period of a prescription (stale dating the
	 * Prescription).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod $validityPeriod
	 * @return static
	 */
	public function setValidityPeriod(?FHIRPeriod $validityPeriod = null): object
	{
		$this->_trackValueSet($this->validityPeriod, $validityPeriod);
		$this->validityPeriod = $validityPeriod;
		return $this;
	}

	/**
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * An integer indicating the number of additional times (aka refills or repeats)
	 * the patient can receive the prescribed medication. Usage Notes: This integer
	 * does NOT include the original order dispense. This means that if an order
	 * indicates dispense 30 tablets plus "3 repeats", then the order can be dispensed
	 * a total of 4 times and the patient can receive a total of 120 tablets.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPositiveInt
	 */
	public function getNumberOfRepeatsAllowed(): ?FHIRPositiveInt
	{
		return $this->numberOfRepeatsAllowed;
	}

	/**
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * An integer indicating the number of additional times (aka refills or repeats)
	 * the patient can receive the prescribed medication. Usage Notes: This integer
	 * does NOT include the original order dispense. This means that if an order
	 * indicates dispense 30 tablets plus "3 repeats", then the order can be dispensed
	 * a total of 4 times and the patient can receive a total of 120 tablets.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPositiveInt $numberOfRepeatsAllowed
	 * @return static
	 */
	public function setNumberOfRepeatsAllowed($numberOfRepeatsAllowed = null): object
	{
		if (
			null !== $numberOfRepeatsAllowed &&
			!($numberOfRepeatsAllowed instanceof FHIRPositiveInt)
		) {
			$numberOfRepeatsAllowed = new FHIRPositiveInt($numberOfRepeatsAllowed);
		}
		$this->_trackValueSet($this->numberOfRepeatsAllowed, $numberOfRepeatsAllowed);
		$this->numberOfRepeatsAllowed = $numberOfRepeatsAllowed;
		return $this;
	}

	/**
	 * The amount that is to be dispensed for one fill.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
	 */
	public function getQuantity(): ?FHIRSimpleQuantity
	{
		return $this->quantity;
	}

	/**
	 * The amount that is to be dispensed for one fill.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity $quantity
	 * @return static
	 */
	public function setQuantity(?FHIRSimpleQuantity $quantity = null): object
	{
		$this->_trackValueSet($this->quantity, $quantity);
		$this->quantity = $quantity;
		return $this;
	}

	/**
	 * Identifies the period time over which the supplied product is expected to be
	 * used, or the length of time the dispense is expected to last.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRDuration
	 */
	public function getExpectedSupplyDuration(): ?FHIRDuration
	{
		return $this->expectedSupplyDuration;
	}

	/**
	 * Identifies the period time over which the supplied product is expected to be
	 * used, or the length of time the dispense is expected to last.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRDuration $expectedSupplyDuration
	 * @return static
	 */
	public function setExpectedSupplyDuration(?FHIRDuration $expectedSupplyDuration = null): object
	{
		$this->_trackValueSet($this->expectedSupplyDuration, $expectedSupplyDuration);
		$this->expectedSupplyDuration = $expectedSupplyDuration;
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
		if (null !== ($v = $this->getMedicationCodeableConcept())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MEDICATION_CODEABLE_CONCEPT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMedicationReference())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MEDICATION_REFERENCE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getValidityPeriod())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_VALIDITY_PERIOD] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getNumberOfRepeatsAllowed())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_NUMBER_OF_REPEATS_ALLOWED] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getQuantity())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_QUANTITY] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getExpectedSupplyDuration())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_EXPECTED_SUPPLY_DURATION] = $fieldErrs;
			}
		}
		if (isset($validationRules[self::FIELD_MEDICATION_CODEABLE_CONCEPT])) {
			$v = $this->getMedicationCodeableConcept();
			foreach (
				$validationRules[self::FIELD_MEDICATION_CODEABLE_CONCEPT]
				as $rule => $constraint
			) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_MEDICATION_ORDER_DOT_DISPENSE_REQUEST,
					self::FIELD_MEDICATION_CODEABLE_CONCEPT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MEDICATION_CODEABLE_CONCEPT])) {
						$errs[self::FIELD_MEDICATION_CODEABLE_CONCEPT] = [];
					}
					$errs[self::FIELD_MEDICATION_CODEABLE_CONCEPT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MEDICATION_REFERENCE])) {
			$v = $this->getMedicationReference();
			foreach ($validationRules[self::FIELD_MEDICATION_REFERENCE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_MEDICATION_ORDER_DOT_DISPENSE_REQUEST,
					self::FIELD_MEDICATION_REFERENCE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MEDICATION_REFERENCE])) {
						$errs[self::FIELD_MEDICATION_REFERENCE] = [];
					}
					$errs[self::FIELD_MEDICATION_REFERENCE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_VALIDITY_PERIOD])) {
			$v = $this->getValidityPeriod();
			foreach ($validationRules[self::FIELD_VALIDITY_PERIOD] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_MEDICATION_ORDER_DOT_DISPENSE_REQUEST,
					self::FIELD_VALIDITY_PERIOD,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_VALIDITY_PERIOD])) {
						$errs[self::FIELD_VALIDITY_PERIOD] = [];
					}
					$errs[self::FIELD_VALIDITY_PERIOD][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_NUMBER_OF_REPEATS_ALLOWED])) {
			$v = $this->getNumberOfRepeatsAllowed();
			foreach (
				$validationRules[self::FIELD_NUMBER_OF_REPEATS_ALLOWED]
				as $rule => $constraint
			) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_MEDICATION_ORDER_DOT_DISPENSE_REQUEST,
					self::FIELD_NUMBER_OF_REPEATS_ALLOWED,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_NUMBER_OF_REPEATS_ALLOWED])) {
						$errs[self::FIELD_NUMBER_OF_REPEATS_ALLOWED] = [];
					}
					$errs[self::FIELD_NUMBER_OF_REPEATS_ALLOWED][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_QUANTITY])) {
			$v = $this->getQuantity();
			foreach ($validationRules[self::FIELD_QUANTITY] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_MEDICATION_ORDER_DOT_DISPENSE_REQUEST,
					self::FIELD_QUANTITY,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_QUANTITY])) {
						$errs[self::FIELD_QUANTITY] = [];
					}
					$errs[self::FIELD_QUANTITY][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_EXPECTED_SUPPLY_DURATION])) {
			$v = $this->getExpectedSupplyDuration();
			foreach (
				$validationRules[self::FIELD_EXPECTED_SUPPLY_DURATION]
				as $rule => $constraint
			) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_MEDICATION_ORDER_DOT_DISPENSE_REQUEST,
					self::FIELD_EXPECTED_SUPPLY_DURATION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_EXPECTED_SUPPLY_DURATION])) {
						$errs[self::FIELD_EXPECTED_SUPPLY_DURATION] = [];
					}
					$errs[self::FIELD_EXPECTED_SUPPLY_DURATION][$rule] = $err;
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationOrder\FHIRMedicationOrderDispenseRequest $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationOrder\FHIRMedicationOrderDispenseRequest
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
						'FHIRMedicationOrderDispenseRequest::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRMedicationOrderDispenseRequest::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRMedicationOrderDispenseRequest(null);
		} elseif (!is_object($type) || !($type instanceof FHIRMedicationOrderDispenseRequest)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRMedicationOrderDispenseRequest::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationOrder\FHIRMedicationOrderDispenseRequest or null, %s seen.',
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
			if (self::FIELD_MEDICATION_CODEABLE_CONCEPT === $n->nodeName) {
				$type->setMedicationCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_MEDICATION_REFERENCE === $n->nodeName) {
				$type->setMedicationReference(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_VALIDITY_PERIOD === $n->nodeName) {
				$type->setValidityPeriod(FHIRPeriod::xmlUnserialize($n));
			} elseif (self::FIELD_NUMBER_OF_REPEATS_ALLOWED === $n->nodeName) {
				$type->setNumberOfRepeatsAllowed(FHIRPositiveInt::xmlUnserialize($n));
			} elseif (self::FIELD_QUANTITY === $n->nodeName) {
				$type->setQuantity(FHIRSimpleQuantity::xmlUnserialize($n));
			} elseif (self::FIELD_EXPECTED_SUPPLY_DURATION === $n->nodeName) {
				$type->setExpectedSupplyDuration(FHIRDuration::xmlUnserialize($n));
			} elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
				$type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_EXTENSION === $n->nodeName) {
				$type->addExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_ID === $n->nodeName) {
				$type->setId(FHIRIdPrimitive::xmlUnserialize($n));
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_NUMBER_OF_REPEATS_ALLOWED);
		if (null !== $n) {
			$pt = $type->getNumberOfRepeatsAllowed();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setNumberOfRepeatsAllowed($n->nodeValue);
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
		if (null !== ($v = $this->getMedicationCodeableConcept())) {
			$telement = $element->ownerDocument->createElement(
				self::FIELD_MEDICATION_CODEABLE_CONCEPT,
			);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMedicationReference())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MEDICATION_REFERENCE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getValidityPeriod())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_VALIDITY_PERIOD);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getNumberOfRepeatsAllowed())) {
			$telement = $element->ownerDocument->createElement(
				self::FIELD_NUMBER_OF_REPEATS_ALLOWED,
			);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getQuantity())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_QUANTITY);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getExpectedSupplyDuration())) {
			$telement = $element->ownerDocument->createElement(
				self::FIELD_EXPECTED_SUPPLY_DURATION,
			);
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
		if (null !== ($v = $this->getMedicationCodeableConcept())) {
			$out->{self::FIELD_MEDICATION_CODEABLE_CONCEPT} = $v;
		}
		if (null !== ($v = $this->getMedicationReference())) {
			$out->{self::FIELD_MEDICATION_REFERENCE} = $v;
		}
		if (null !== ($v = $this->getValidityPeriod())) {
			$out->{self::FIELD_VALIDITY_PERIOD} = $v;
		}
		if (null !== ($v = $this->getNumberOfRepeatsAllowed())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_NUMBER_OF_REPEATS_ALLOWED} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRPositiveInt::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_NUMBER_OF_REPEATS_ALLOWED_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getQuantity())) {
			$out->{self::FIELD_QUANTITY} = $v;
		}
		if (null !== ($v = $this->getExpectedSupplyDuration())) {
			$out->{self::FIELD_EXPECTED_SUPPLY_DURATION} = $v;
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
