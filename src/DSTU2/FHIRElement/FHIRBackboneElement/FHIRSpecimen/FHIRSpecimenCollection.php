<?php declare(strict_types=1);

namespace Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRSpecimen;

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
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString;
use Calvient\FhirTypes\DSTU2\FHIRIdPrimitive;
use Calvient\FhirTypes\DSTU2\PHPFHIRConstants;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeInterface;

/**
 * A sample to be used for analysis.
 *
 * Class FHIRSpecimenCollection
 * @package \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRSpecimen
 */
class FHIRSpecimenCollection extends FHIRBackboneElement
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SPECIMEN_DOT_COLLECTION;
	const FIELD_COLLECTOR = 'collector';
	const FIELD_COMMENT = 'comment';
	const FIELD_COMMENT_EXT = '_comment';
	const FIELD_COLLECTED_DATE_TIME = 'collectedDateTime';
	const FIELD_COLLECTED_DATE_TIME_EXT = '_collectedDateTime';
	const FIELD_COLLECTED_PERIOD = 'collectedPeriod';
	const FIELD_QUANTITY = 'quantity';
	const FIELD_METHOD = 'method';
	const FIELD_BODY_SITE = 'bodySite';

	/** @var string */
	private $_xmlns = '';

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Person who collected the specimen.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $collector = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * To communicate any details or issues encountered during the specimen collection
	 * procedure.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive[]|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString[]
	 */
	protected ?array $comment = [];

	/**
	 * A date, date-time or partial date (e.g. just year or year + month). If hours and
	 * minutes are specified, a time zone SHALL be populated. The format is a union of
	 * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
	 * due to schema type constraints but may be zero-filled and may be ignored. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Time when specimen was collected from subject - the physiologically relevant
	 * time.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime
	 */
	protected ?FHIRDateTime $collectedDateTime = null;

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Time when specimen was collected from subject - the physiologically relevant
	 * time.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod
	 */
	protected ?FHIRPeriod $collectedPeriod = null;

	/**
	 * The quantity of specimen collected; for instance the volume of a blood sample,
	 * or the physical measurement of an anatomic pathology sample.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
	 */
	protected ?FHIRSimpleQuantity $quantity = null;

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A coded value specifying the technique that is used to perform the procedure.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	protected ?FHIRCodeableConcept $method = null;

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Anatomical location from which the specimen was collected (if subject is a
	 * patient). This is the target site. This element is not used for environmental
	 * specimens.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	protected ?FHIRCodeableConcept $bodySite = null;

	/**
	 * Validation map for fields in type Specimen.Collection
	 * @var array
	 */
	private static array $_validationRules = [];

	/**
	 * FHIRSpecimenCollection Constructor
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
					'FHIRSpecimenCollection::_construct - $data expected to be null or array, %s seen',
					gettype($data),
				),
			);
		}
		parent::__construct($data);
		if (isset($data[self::FIELD_COLLECTOR])) {
			if ($data[self::FIELD_COLLECTOR] instanceof FHIRReference) {
				$this->setCollector($data[self::FIELD_COLLECTOR]);
			} else {
				$this->setCollector(new FHIRReference($data[self::FIELD_COLLECTOR]));
			}
		}
		if (isset($data[self::FIELD_COMMENT]) || isset($data[self::FIELD_COMMENT_EXT])) {
			$value = $data[self::FIELD_COMMENT] ?? null;
			$ext =
				isset($data[self::FIELD_COMMENT_EXT]) && is_array($data[self::FIELD_COMMENT_EXT])
					? $data[self::FIELD_COMMENT_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->addComment($value);
				} elseif (is_array($value)) {
					foreach ($value as $i => $v) {
						if ($v instanceof FHIRString) {
							$this->addComment($v);
						} else {
							$iext = isset($ext[$i]) && is_array($ext[$i]) ? $ext[$i] : [];
							if (is_array($v)) {
								$this->addComment(new FHIRString(array_merge($v, $iext)));
							} else {
								$this->addComment(
									new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext),
								);
							}
						}
					}
				} elseif (is_array($value)) {
					$this->addComment(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->addComment(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				foreach ($ext as $iext) {
					$this->addComment(new FHIRString($iext));
				}
			}
		}
		if (
			isset($data[self::FIELD_COLLECTED_DATE_TIME]) ||
			isset($data[self::FIELD_COLLECTED_DATE_TIME_EXT])
		) {
			$value = $data[self::FIELD_COLLECTED_DATE_TIME] ?? null;
			$ext =
				isset($data[self::FIELD_COLLECTED_DATE_TIME_EXT]) &&
				is_array($data[self::FIELD_COLLECTED_DATE_TIME_EXT])
					? $data[self::FIELD_COLLECTED_DATE_TIME_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRDateTime) {
					$this->setCollectedDateTime($value);
				} elseif (is_array($value)) {
					$this->setCollectedDateTime(new FHIRDateTime(array_merge($ext, $value)));
				} else {
					$this->setCollectedDateTime(
						new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setCollectedDateTime(new FHIRDateTime($ext));
			}
		}
		if (isset($data[self::FIELD_COLLECTED_PERIOD])) {
			if ($data[self::FIELD_COLLECTED_PERIOD] instanceof FHIRPeriod) {
				$this->setCollectedPeriod($data[self::FIELD_COLLECTED_PERIOD]);
			} else {
				$this->setCollectedPeriod(new FHIRPeriod($data[self::FIELD_COLLECTED_PERIOD]));
			}
		}
		if (isset($data[self::FIELD_QUANTITY])) {
			if ($data[self::FIELD_QUANTITY] instanceof FHIRSimpleQuantity) {
				$this->setQuantity($data[self::FIELD_QUANTITY]);
			} else {
				$this->setQuantity(new FHIRSimpleQuantity($data[self::FIELD_QUANTITY]));
			}
		}
		if (isset($data[self::FIELD_METHOD])) {
			if ($data[self::FIELD_METHOD] instanceof FHIRCodeableConcept) {
				$this->setMethod($data[self::FIELD_METHOD]);
			} else {
				$this->setMethod(new FHIRCodeableConcept($data[self::FIELD_METHOD]));
			}
		}
		if (isset($data[self::FIELD_BODY_SITE])) {
			if ($data[self::FIELD_BODY_SITE] instanceof FHIRCodeableConcept) {
				$this->setBodySite($data[self::FIELD_BODY_SITE]);
			} else {
				$this->setBodySite(new FHIRCodeableConcept($data[self::FIELD_BODY_SITE]));
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
		return "<SpecimenCollection{$xmlns}></SpecimenCollection>";
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Person who collected the specimen.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getCollector(): ?FHIRReference
	{
		return $this->collector;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Person who collected the specimen.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $collector
	 * @return static
	 */
	public function setCollector(?FHIRReference $collector = null): object
	{
		$this->_trackValueSet($this->collector, $collector);
		$this->collector = $collector;
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * To communicate any details or issues encountered during the specimen collection
	 * procedure.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive[]|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString[]
	 */
	public function getComment(): ?array
	{
		return $this->comment;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * To communicate any details or issues encountered during the specimen collection
	 * procedure.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive[]|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString[] $comment
	 * @return static
	 */
	public function addComment($comment = null): object
	{
		if (null !== $comment && !($comment instanceof FHIRString)) {
			$comment = new FHIRString($comment);
		}
		$this->_trackValueAdded();
		$this->comment[] = $comment;
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * To communicate any details or issues encountered during the specimen collection
	 * procedure.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString[] $comment
	 * @return static
	 */
	public function setComment(array $comment = []): object
	{
		if ([] !== $this->comment) {
			$this->_trackValuesRemoved(count($this->comment));
			$this->comment = [];
		}
		if ([] === $comment) {
			return $this;
		}
		foreach ($comment as $v) {
			if ($v instanceof FHIRString) {
				$this->addComment($v);
			} else {
				$this->addComment(new FHIRString($v));
			}
		}
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
	 * Time when specimen was collected from subject - the physiologically relevant
	 * time.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime
	 */
	public function getCollectedDateTime(): ?FHIRDateTime
	{
		return $this->collectedDateTime;
	}

	/**
	 * A date, date-time or partial date (e.g. just year or year + month). If hours and
	 * minutes are specified, a time zone SHALL be populated. The format is a union of
	 * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
	 * due to schema type constraints but may be zero-filled and may be ignored. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Time when specimen was collected from subject - the physiologically relevant
	 * time.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime $collectedDateTime
	 * @return static
	 */
	public function setCollectedDateTime($collectedDateTime = null): object
	{
		if (null !== $collectedDateTime && !($collectedDateTime instanceof FHIRDateTime)) {
			$collectedDateTime = new FHIRDateTime($collectedDateTime);
		}
		$this->_trackValueSet($this->collectedDateTime, $collectedDateTime);
		$this->collectedDateTime = $collectedDateTime;
		return $this;
	}

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Time when specimen was collected from subject - the physiologically relevant
	 * time.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod
	 */
	public function getCollectedPeriod(): ?FHIRPeriod
	{
		return $this->collectedPeriod;
	}

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Time when specimen was collected from subject - the physiologically relevant
	 * time.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod $collectedPeriod
	 * @return static
	 */
	public function setCollectedPeriod(?FHIRPeriod $collectedPeriod = null): object
	{
		$this->_trackValueSet($this->collectedPeriod, $collectedPeriod);
		$this->collectedPeriod = $collectedPeriod;
		return $this;
	}

	/**
	 * The quantity of specimen collected; for instance the volume of a blood sample,
	 * or the physical measurement of an anatomic pathology sample.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
	 */
	public function getQuantity(): ?FHIRSimpleQuantity
	{
		return $this->quantity;
	}

	/**
	 * The quantity of specimen collected; for instance the volume of a blood sample,
	 * or the physical measurement of an anatomic pathology sample.
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
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A coded value specifying the technique that is used to perform the procedure.
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
	 * A coded value specifying the technique that is used to perform the procedure.
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
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Anatomical location from which the specimen was collected (if subject is a
	 * patient). This is the target site. This element is not used for environmental
	 * specimens.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	public function getBodySite(): ?FHIRCodeableConcept
	{
		return $this->bodySite;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Anatomical location from which the specimen was collected (if subject is a
	 * patient). This is the target site. This element is not used for environmental
	 * specimens.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $bodySite
	 * @return static
	 */
	public function setBodySite(?FHIRCodeableConcept $bodySite = null): object
	{
		$this->_trackValueSet($this->bodySite, $bodySite);
		$this->bodySite = $bodySite;
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
		if (null !== ($v = $this->getCollector())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_COLLECTOR] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getComment())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_COMMENT, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getCollectedDateTime())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_COLLECTED_DATE_TIME] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getCollectedPeriod())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_COLLECTED_PERIOD] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getQuantity())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_QUANTITY] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMethod())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_METHOD] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getBodySite())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_BODY_SITE] = $fieldErrs;
			}
		}
		if (isset($validationRules[self::FIELD_COLLECTOR])) {
			$v = $this->getCollector();
			foreach ($validationRules[self::FIELD_COLLECTOR] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_SPECIMEN_DOT_COLLECTION,
					self::FIELD_COLLECTOR,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_COLLECTOR])) {
						$errs[self::FIELD_COLLECTOR] = [];
					}
					$errs[self::FIELD_COLLECTOR][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_COMMENT])) {
			$v = $this->getComment();
			foreach ($validationRules[self::FIELD_COMMENT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_SPECIMEN_DOT_COLLECTION,
					self::FIELD_COMMENT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_COMMENT])) {
						$errs[self::FIELD_COMMENT] = [];
					}
					$errs[self::FIELD_COMMENT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_COLLECTED_DATE_TIME])) {
			$v = $this->getCollectedDateTime();
			foreach ($validationRules[self::FIELD_COLLECTED_DATE_TIME] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_SPECIMEN_DOT_COLLECTION,
					self::FIELD_COLLECTED_DATE_TIME,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_COLLECTED_DATE_TIME])) {
						$errs[self::FIELD_COLLECTED_DATE_TIME] = [];
					}
					$errs[self::FIELD_COLLECTED_DATE_TIME][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_COLLECTED_PERIOD])) {
			$v = $this->getCollectedPeriod();
			foreach ($validationRules[self::FIELD_COLLECTED_PERIOD] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_SPECIMEN_DOT_COLLECTION,
					self::FIELD_COLLECTED_PERIOD,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_COLLECTED_PERIOD])) {
						$errs[self::FIELD_COLLECTED_PERIOD] = [];
					}
					$errs[self::FIELD_COLLECTED_PERIOD][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_QUANTITY])) {
			$v = $this->getQuantity();
			foreach ($validationRules[self::FIELD_QUANTITY] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_SPECIMEN_DOT_COLLECTION,
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
		if (isset($validationRules[self::FIELD_METHOD])) {
			$v = $this->getMethod();
			foreach ($validationRules[self::FIELD_METHOD] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_SPECIMEN_DOT_COLLECTION,
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
		if (isset($validationRules[self::FIELD_BODY_SITE])) {
			$v = $this->getBodySite();
			foreach ($validationRules[self::FIELD_BODY_SITE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_SPECIMEN_DOT_COLLECTION,
					self::FIELD_BODY_SITE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_BODY_SITE])) {
						$errs[self::FIELD_BODY_SITE] = [];
					}
					$errs[self::FIELD_BODY_SITE][$rule] = $err;
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenCollection $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenCollection
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
						'FHIRSpecimenCollection::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRSpecimenCollection::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRSpecimenCollection(null);
		} elseif (!is_object($type) || !($type instanceof FHIRSpecimenCollection)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRSpecimenCollection::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenCollection or null, %s seen.',
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
			if (self::FIELD_COLLECTOR === $n->nodeName) {
				$type->setCollector(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_COMMENT === $n->nodeName) {
				$type->addComment(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_COLLECTED_DATE_TIME === $n->nodeName) {
				$type->setCollectedDateTime(FHIRDateTime::xmlUnserialize($n));
			} elseif (self::FIELD_COLLECTED_PERIOD === $n->nodeName) {
				$type->setCollectedPeriod(FHIRPeriod::xmlUnserialize($n));
			} elseif (self::FIELD_QUANTITY === $n->nodeName) {
				$type->setQuantity(FHIRSimpleQuantity::xmlUnserialize($n));
			} elseif (self::FIELD_METHOD === $n->nodeName) {
				$type->setMethod(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_BODY_SITE === $n->nodeName) {
				$type->setBodySite(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
				$type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_EXTENSION === $n->nodeName) {
				$type->addExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_ID === $n->nodeName) {
				$type->setId(FHIRIdPrimitive::xmlUnserialize($n));
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_COMMENT);
		if (null !== $n) {
			$pt = $type->getComment();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->addComment($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_COLLECTED_DATE_TIME);
		if (null !== $n) {
			$pt = $type->getCollectedDateTime();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setCollectedDateTime($n->nodeValue);
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
		if (null !== ($v = $this->getCollector())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_COLLECTOR);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getComment())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_COMMENT);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if (null !== ($v = $this->getCollectedDateTime())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_COLLECTED_DATE_TIME);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getCollectedPeriod())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_COLLECTED_PERIOD);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getQuantity())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_QUANTITY);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMethod())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_METHOD);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getBodySite())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_BODY_SITE);
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
		if (null !== ($v = $this->getCollector())) {
			$out->{self::FIELD_COLLECTOR} = $v;
		}
		if ([] !== ($vs = $this->getComment())) {
			$vals = [];
			$exts = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$val = $v->getValue();
				$ext = $v->jsonSerialize();
				unset($ext->{FHIRString::FIELD_VALUE});
				if (null !== $val) {
					$vals[] = $val;
				}
				if ([] !== $ext) {
					$exts[] = $ext;
				}
			}
			if ([] !== $vals) {
				$out->{self::FIELD_COMMENT} = $vals;
			}
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_COMMENT_EXT} = $exts;
			}
		}
		if (null !== ($v = $this->getCollectedDateTime())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_COLLECTED_DATE_TIME} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRDateTime::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_COLLECTED_DATE_TIME_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getCollectedPeriod())) {
			$out->{self::FIELD_COLLECTED_PERIOD} = $v;
		}
		if (null !== ($v = $this->getQuantity())) {
			$out->{self::FIELD_QUANTITY} = $v;
		}
		if (null !== ($v = $this->getMethod())) {
			$out->{self::FIELD_METHOD} = $v;
		}
		if (null !== ($v = $this->getBodySite())) {
			$out->{self::FIELD_BODY_SITE} = $v;
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
