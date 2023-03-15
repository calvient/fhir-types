<?php declare(strict_types=1);

namespace App\Types\FHIR\DSTU2\FHIRResource\FHIRDomainResource;

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

use App\Types\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRSupplyRequest\FHIRSupplyRequestWhen;
use App\Types\FHIR\DSTU2\FHIRElement\FHIRCode;
use App\Types\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept;
use App\Types\FHIR\DSTU2\FHIRElement\FHIRDateTime;
use App\Types\FHIR\DSTU2\FHIRElement\FHIRExtension;
use App\Types\FHIR\DSTU2\FHIRElement\FHIRId;
use App\Types\FHIR\DSTU2\FHIRElement\FHIRIdentifier;
use App\Types\FHIR\DSTU2\FHIRElement\FHIRMeta;
use App\Types\FHIR\DSTU2\FHIRElement\FHIRNarrative;
use App\Types\FHIR\DSTU2\FHIRElement\FHIRReference;
use App\Types\FHIR\DSTU2\FHIRElement\FHIRSupplyRequestStatus;
use App\Types\FHIR\DSTU2\FHIRElement\FHIRUri;
use App\Types\FHIR\DSTU2\FHIRResource\FHIRDomainResource;
use App\Types\FHIR\DSTU2\PHPFHIRConstants;
use App\Types\FHIR\DSTU2\PHPFHIRContainedTypeInterface;
use App\Types\FHIR\DSTU2\PHPFHIRTypeInterface;
use App\Types\FHIR\DSTU2\PHPFHIRTypeMap;

/**
 * A record of a request for a medication, substance or device used in the
 * healthcare setting.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRSupplyRequest
 * @package \Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIRSupplyRequest extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUPPLY_REQUEST;
	const FIELD_PATIENT = 'patient';
	const FIELD_SOURCE = 'source';
	const FIELD_DATE = 'date';
	const FIELD_DATE_EXT = '_date';
	const FIELD_IDENTIFIER = 'identifier';
	const FIELD_STATUS = 'status';
	const FIELD_STATUS_EXT = '_status';
	const FIELD_KIND = 'kind';
	const FIELD_ORDERED_ITEM = 'orderedItem';
	const FIELD_SUPPLIER = 'supplier';
	const FIELD_REASON_CODEABLE_CONCEPT = 'reasonCodeableConcept';
	const FIELD_REASON_REFERENCE = 'reasonReference';
	const FIELD_WHEN = 'when';

	/** @var string */
	private $_xmlns = '';

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A link to a resource representing the person whom the ordered item is for.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $patient = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The Practitioner , Organization or Patient who initiated this order for the
	 * supply.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $source = null;

	/**
	 * A date, date-time or partial date (e.g. just year or year + month). If hours and
	 * minutes are specified, a time zone SHALL be populated. The format is a union of
	 * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
	 * due to schema type constraints but may be zero-filled and may be ignored. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * When the request was made.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime
	 */
	protected ?FHIRDateTime $date = null;

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Unique identifier for this supply request.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier
	 */
	protected ?FHIRIdentifier $identifier = null;

	/**
	 * Status of the supply request
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Status of the supply request.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSupplyRequestStatus
	 */
	protected ?FHIRSupplyRequestStatus $status = null;

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Category of supply, e.g. central, non-stock, etc. This is used to support work
	 * flows associated with the supply process.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	protected ?FHIRCodeableConcept $kind = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The item that is requested to be supplied.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $orderedItem = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Who is intended to fulfill the request.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	protected ?array $supplier = [];

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Why the supply item was requested.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	protected ?FHIRCodeableConcept $reasonCodeableConcept = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Why the supply item was requested.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $reasonReference = null;

	/**
	 * A record of a request for a medication, substance or device used in the
	 * healthcare setting.
	 *
	 * When the request should be fulfilled.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRSupplyRequest\FHIRSupplyRequestWhen
	 */
	protected ?FHIRSupplyRequestWhen $when = null;

	/**
	 * Validation map for fields in type SupplyRequest
	 * @var array
	 */
	private static array $_validationRules = [];

	/**
	 * FHIRSupplyRequest Constructor
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
					'FHIRSupplyRequest::_construct - $data expected to be null or array, %s seen',
					gettype($data),
				),
			);
		}
		parent::__construct($data);
		if (isset($data[self::FIELD_PATIENT])) {
			if ($data[self::FIELD_PATIENT] instanceof FHIRReference) {
				$this->setPatient($data[self::FIELD_PATIENT]);
			} else {
				$this->setPatient(new FHIRReference($data[self::FIELD_PATIENT]));
			}
		}
		if (isset($data[self::FIELD_SOURCE])) {
			if ($data[self::FIELD_SOURCE] instanceof FHIRReference) {
				$this->setSource($data[self::FIELD_SOURCE]);
			} else {
				$this->setSource(new FHIRReference($data[self::FIELD_SOURCE]));
			}
		}
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
		if (isset($data[self::FIELD_IDENTIFIER])) {
			if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
				$this->setIdentifier($data[self::FIELD_IDENTIFIER]);
			} else {
				$this->setIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
			}
		}
		if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
			$value = $data[self::FIELD_STATUS] ?? null;
			$ext =
				isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])
					? $data[self::FIELD_STATUS_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRSupplyRequestStatus) {
					$this->setStatus($value);
				} elseif (is_array($value)) {
					$this->setStatus(new FHIRSupplyRequestStatus(array_merge($ext, $value)));
				} else {
					$this->setStatus(
						new FHIRSupplyRequestStatus(
							[FHIRSupplyRequestStatus::FIELD_VALUE => $value] + $ext,
						),
					);
				}
			} elseif ([] !== $ext) {
				$this->setStatus(new FHIRSupplyRequestStatus($ext));
			}
		}
		if (isset($data[self::FIELD_KIND])) {
			if ($data[self::FIELD_KIND] instanceof FHIRCodeableConcept) {
				$this->setKind($data[self::FIELD_KIND]);
			} else {
				$this->setKind(new FHIRCodeableConcept($data[self::FIELD_KIND]));
			}
		}
		if (isset($data[self::FIELD_ORDERED_ITEM])) {
			if ($data[self::FIELD_ORDERED_ITEM] instanceof FHIRReference) {
				$this->setOrderedItem($data[self::FIELD_ORDERED_ITEM]);
			} else {
				$this->setOrderedItem(new FHIRReference($data[self::FIELD_ORDERED_ITEM]));
			}
		}
		if (isset($data[self::FIELD_SUPPLIER])) {
			if (is_array($data[self::FIELD_SUPPLIER])) {
				foreach ($data[self::FIELD_SUPPLIER] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRReference) {
						$this->addSupplier($v);
					} else {
						$this->addSupplier(new FHIRReference($v));
					}
				}
			} elseif ($data[self::FIELD_SUPPLIER] instanceof FHIRReference) {
				$this->addSupplier($data[self::FIELD_SUPPLIER]);
			} else {
				$this->addSupplier(new FHIRReference($data[self::FIELD_SUPPLIER]));
			}
		}
		if (isset($data[self::FIELD_REASON_CODEABLE_CONCEPT])) {
			if ($data[self::FIELD_REASON_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
				$this->setReasonCodeableConcept($data[self::FIELD_REASON_CODEABLE_CONCEPT]);
			} else {
				$this->setReasonCodeableConcept(
					new FHIRCodeableConcept($data[self::FIELD_REASON_CODEABLE_CONCEPT]),
				);
			}
		}
		if (isset($data[self::FIELD_REASON_REFERENCE])) {
			if ($data[self::FIELD_REASON_REFERENCE] instanceof FHIRReference) {
				$this->setReasonReference($data[self::FIELD_REASON_REFERENCE]);
			} else {
				$this->setReasonReference(new FHIRReference($data[self::FIELD_REASON_REFERENCE]));
			}
		}
		if (isset($data[self::FIELD_WHEN])) {
			if ($data[self::FIELD_WHEN] instanceof FHIRSupplyRequestWhen) {
				$this->setWhen($data[self::FIELD_WHEN]);
			} else {
				$this->setWhen(new FHIRSupplyRequestWhen($data[self::FIELD_WHEN]));
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
		return "<SupplyRequest{$xmlns}></SupplyRequest>";
	}
	/**
	 * @return string
	 */
	public function _getResourceType(): string
	{
		return static::FHIR_TYPE_NAME;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A link to a resource representing the person whom the ordered item is for.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getPatient(): ?FHIRReference
	{
		return $this->patient;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A link to a resource representing the person whom the ordered item is for.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $patient
	 * @return static
	 */
	public function setPatient(?FHIRReference $patient = null): object
	{
		$this->_trackValueSet($this->patient, $patient);
		$this->patient = $patient;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The Practitioner , Organization or Patient who initiated this order for the
	 * supply.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getSource(): ?FHIRReference
	{
		return $this->source;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The Practitioner , Organization or Patient who initiated this order for the
	 * supply.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $source
	 * @return static
	 */
	public function setSource(?FHIRReference $source = null): object
	{
		$this->_trackValueSet($this->source, $source);
		$this->source = $source;
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
	 * When the request was made.
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
	 * When the request was made.
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
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Unique identifier for this supply request.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier
	 */
	public function getIdentifier(): ?FHIRIdentifier
	{
		return $this->identifier;
	}

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Unique identifier for this supply request.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier $identifier
	 * @return static
	 */
	public function setIdentifier(?FHIRIdentifier $identifier = null): object
	{
		$this->_trackValueSet($this->identifier, $identifier);
		$this->identifier = $identifier;
		return $this;
	}

	/**
	 * Status of the supply request
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Status of the supply request.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSupplyRequestStatus
	 */
	public function getStatus(): ?FHIRSupplyRequestStatus
	{
		return $this->status;
	}

	/**
	 * Status of the supply request
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Status of the supply request.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSupplyRequestStatus $status
	 * @return static
	 */
	public function setStatus(?FHIRSupplyRequestStatus $status = null): object
	{
		$this->_trackValueSet($this->status, $status);
		$this->status = $status;
		return $this;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Category of supply, e.g. central, non-stock, etc. This is used to support work
	 * flows associated with the supply process.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	public function getKind(): ?FHIRCodeableConcept
	{
		return $this->kind;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Category of supply, e.g. central, non-stock, etc. This is used to support work
	 * flows associated with the supply process.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $kind
	 * @return static
	 */
	public function setKind(?FHIRCodeableConcept $kind = null): object
	{
		$this->_trackValueSet($this->kind, $kind);
		$this->kind = $kind;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The item that is requested to be supplied.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getOrderedItem(): ?FHIRReference
	{
		return $this->orderedItem;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The item that is requested to be supplied.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $orderedItem
	 * @return static
	 */
	public function setOrderedItem(?FHIRReference $orderedItem = null): object
	{
		$this->_trackValueSet($this->orderedItem, $orderedItem);
		$this->orderedItem = $orderedItem;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Who is intended to fulfill the request.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	public function getSupplier(): ?array
	{
		return $this->supplier;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Who is intended to fulfill the request.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $supplier
	 * @return static
	 */
	public function addSupplier(?FHIRReference $supplier = null): object
	{
		$this->_trackValueAdded();
		$this->supplier[] = $supplier;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Who is intended to fulfill the request.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[] $supplier
	 * @return static
	 */
	public function setSupplier(array $supplier = []): object
	{
		if ([] !== $this->supplier) {
			$this->_trackValuesRemoved(count($this->supplier));
			$this->supplier = [];
		}
		if ([] === $supplier) {
			return $this;
		}
		foreach ($supplier as $v) {
			if ($v instanceof FHIRReference) {
				$this->addSupplier($v);
			} else {
				$this->addSupplier(new FHIRReference($v));
			}
		}
		return $this;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Why the supply item was requested.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	public function getReasonCodeableConcept(): ?FHIRCodeableConcept
	{
		return $this->reasonCodeableConcept;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Why the supply item was requested.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $reasonCodeableConcept
	 * @return static
	 */
	public function setReasonCodeableConcept(
		?FHIRCodeableConcept $reasonCodeableConcept = null,
	): object {
		$this->_trackValueSet($this->reasonCodeableConcept, $reasonCodeableConcept);
		$this->reasonCodeableConcept = $reasonCodeableConcept;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Why the supply item was requested.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getReasonReference(): ?FHIRReference
	{
		return $this->reasonReference;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Why the supply item was requested.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $reasonReference
	 * @return static
	 */
	public function setReasonReference(?FHIRReference $reasonReference = null): object
	{
		$this->_trackValueSet($this->reasonReference, $reasonReference);
		$this->reasonReference = $reasonReference;
		return $this;
	}

	/**
	 * A record of a request for a medication, substance or device used in the
	 * healthcare setting.
	 *
	 * When the request should be fulfilled.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRSupplyRequest\FHIRSupplyRequestWhen
	 */
	public function getWhen(): ?FHIRSupplyRequestWhen
	{
		return $this->when;
	}

	/**
	 * A record of a request for a medication, substance or device used in the
	 * healthcare setting.
	 *
	 * When the request should be fulfilled.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRSupplyRequest\FHIRSupplyRequestWhen $when
	 * @return static
	 */
	public function setWhen(?FHIRSupplyRequestWhen $when = null): object
	{
		$this->_trackValueSet($this->when, $when);
		$this->when = $when;
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
		if (null !== ($v = $this->getPatient())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATIENT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getSource())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_SOURCE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDate())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DATE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getIdentifier())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_IDENTIFIER] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getStatus())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_STATUS] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getKind())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_KIND] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getOrderedItem())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_ORDERED_ITEM] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getSupplier())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_SUPPLIER, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getReasonCodeableConcept())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_REASON_CODEABLE_CONCEPT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getReasonReference())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_REASON_REFERENCE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getWhen())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_WHEN] = $fieldErrs;
			}
		}
		if (isset($validationRules[self::FIELD_PATIENT])) {
			$v = $this->getPatient();
			foreach ($validationRules[self::FIELD_PATIENT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_SUPPLY_REQUEST,
					self::FIELD_PATIENT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATIENT])) {
						$errs[self::FIELD_PATIENT] = [];
					}
					$errs[self::FIELD_PATIENT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_SOURCE])) {
			$v = $this->getSource();
			foreach ($validationRules[self::FIELD_SOURCE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_SUPPLY_REQUEST,
					self::FIELD_SOURCE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_SOURCE])) {
						$errs[self::FIELD_SOURCE] = [];
					}
					$errs[self::FIELD_SOURCE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DATE])) {
			$v = $this->getDate();
			foreach ($validationRules[self::FIELD_DATE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_SUPPLY_REQUEST,
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
		if (isset($validationRules[self::FIELD_IDENTIFIER])) {
			$v = $this->getIdentifier();
			foreach ($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_SUPPLY_REQUEST,
					self::FIELD_IDENTIFIER,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_IDENTIFIER])) {
						$errs[self::FIELD_IDENTIFIER] = [];
					}
					$errs[self::FIELD_IDENTIFIER][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_STATUS])) {
			$v = $this->getStatus();
			foreach ($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_SUPPLY_REQUEST,
					self::FIELD_STATUS,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_STATUS])) {
						$errs[self::FIELD_STATUS] = [];
					}
					$errs[self::FIELD_STATUS][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_KIND])) {
			$v = $this->getKind();
			foreach ($validationRules[self::FIELD_KIND] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_SUPPLY_REQUEST,
					self::FIELD_KIND,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_KIND])) {
						$errs[self::FIELD_KIND] = [];
					}
					$errs[self::FIELD_KIND][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_ORDERED_ITEM])) {
			$v = $this->getOrderedItem();
			foreach ($validationRules[self::FIELD_ORDERED_ITEM] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_SUPPLY_REQUEST,
					self::FIELD_ORDERED_ITEM,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_ORDERED_ITEM])) {
						$errs[self::FIELD_ORDERED_ITEM] = [];
					}
					$errs[self::FIELD_ORDERED_ITEM][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_SUPPLIER])) {
			$v = $this->getSupplier();
			foreach ($validationRules[self::FIELD_SUPPLIER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_SUPPLY_REQUEST,
					self::FIELD_SUPPLIER,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_SUPPLIER])) {
						$errs[self::FIELD_SUPPLIER] = [];
					}
					$errs[self::FIELD_SUPPLIER][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_REASON_CODEABLE_CONCEPT])) {
			$v = $this->getReasonCodeableConcept();
			foreach (
				$validationRules[self::FIELD_REASON_CODEABLE_CONCEPT]
				as $rule => $constraint
			) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_SUPPLY_REQUEST,
					self::FIELD_REASON_CODEABLE_CONCEPT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_REASON_CODEABLE_CONCEPT])) {
						$errs[self::FIELD_REASON_CODEABLE_CONCEPT] = [];
					}
					$errs[self::FIELD_REASON_CODEABLE_CONCEPT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_REASON_REFERENCE])) {
			$v = $this->getReasonReference();
			foreach ($validationRules[self::FIELD_REASON_REFERENCE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_SUPPLY_REQUEST,
					self::FIELD_REASON_REFERENCE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_REASON_REFERENCE])) {
						$errs[self::FIELD_REASON_REFERENCE] = [];
					}
					$errs[self::FIELD_REASON_REFERENCE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_WHEN])) {
			$v = $this->getWhen();
			foreach ($validationRules[self::FIELD_WHEN] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_SUPPLY_REQUEST,
					self::FIELD_WHEN,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_WHEN])) {
						$errs[self::FIELD_WHEN] = [];
					}
					$errs[self::FIELD_WHEN][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_TEXT])) {
			$v = $this->getText();
			foreach ($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE,
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
		if (isset($validationRules[self::FIELD_CONTAINED])) {
			$v = $this->getContained();
			foreach ($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE,
					self::FIELD_CONTAINED,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_CONTAINED])) {
						$errs[self::FIELD_CONTAINED] = [];
					}
					$errs[self::FIELD_CONTAINED][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_EXTENSION])) {
			$v = $this->getExtension();
			foreach ($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE,
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
		if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
			$v = $this->getModifierExtension();
			foreach ($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE,
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
		if (isset($validationRules[self::FIELD_ID])) {
			$v = $this->getId();
			foreach ($validationRules[self::FIELD_ID] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_RESOURCE,
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
		if (isset($validationRules[self::FIELD_META])) {
			$v = $this->getMeta();
			foreach ($validationRules[self::FIELD_META] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_RESOURCE,
					self::FIELD_META,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_META])) {
						$errs[self::FIELD_META] = [];
					}
					$errs[self::FIELD_META][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_IMPLICIT_RULES])) {
			$v = $this->getImplicitRules();
			foreach ($validationRules[self::FIELD_IMPLICIT_RULES] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_RESOURCE,
					self::FIELD_IMPLICIT_RULES,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_IMPLICIT_RULES])) {
						$errs[self::FIELD_IMPLICIT_RULES] = [];
					}
					$errs[self::FIELD_IMPLICIT_RULES][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_LANGUAGE])) {
			$v = $this->getLanguage();
			foreach ($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_RESOURCE,
					self::FIELD_LANGUAGE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_LANGUAGE])) {
						$errs[self::FIELD_LANGUAGE] = [];
					}
					$errs[self::FIELD_LANGUAGE][$rule] = $err;
				}
			}
		}
		return $errs;
	}

	/**
	 * @param null|string|\DOMElement $element
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRSupplyRequest $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRSupplyRequest
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
						'FHIRSupplyRequest::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRSupplyRequest::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRSupplyRequest(null);
		} elseif (!is_object($type) || !($type instanceof FHIRSupplyRequest)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRSupplyRequest::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRSupplyRequest or null, %s seen.',
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
			if (self::FIELD_PATIENT === $n->nodeName) {
				$type->setPatient(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_SOURCE === $n->nodeName) {
				$type->setSource(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_DATE === $n->nodeName) {
				$type->setDate(FHIRDateTime::xmlUnserialize($n));
			} elseif (self::FIELD_IDENTIFIER === $n->nodeName) {
				$type->setIdentifier(FHIRIdentifier::xmlUnserialize($n));
			} elseif (self::FIELD_STATUS === $n->nodeName) {
				$type->setStatus(FHIRSupplyRequestStatus::xmlUnserialize($n));
			} elseif (self::FIELD_KIND === $n->nodeName) {
				$type->setKind(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_ORDERED_ITEM === $n->nodeName) {
				$type->setOrderedItem(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_SUPPLIER === $n->nodeName) {
				$type->addSupplier(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_REASON_CODEABLE_CONCEPT === $n->nodeName) {
				$type->setReasonCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_REASON_REFERENCE === $n->nodeName) {
				$type->setReasonReference(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_WHEN === $n->nodeName) {
				$type->setWhen(FHIRSupplyRequestWhen::xmlUnserialize($n));
			} elseif (self::FIELD_TEXT === $n->nodeName) {
				$type->setText(FHIRNarrative::xmlUnserialize($n));
			} elseif (self::FIELD_CONTAINED === $n->nodeName) {
				for ($ni = 0; $ni < $n->childNodes->length; $ni++) {
					$nn = $n->childNodes->item($ni);
					if ($nn instanceof \DOMElement) {
						$type->addContained(PHPFHIRTypeMap::getContainedTypeFromXML($nn));
					}
				}
			} elseif (self::FIELD_EXTENSION === $n->nodeName) {
				$type->addExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
				$type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_ID === $n->nodeName) {
				$type->setId(FHIRId::xmlUnserialize($n));
			} elseif (self::FIELD_META === $n->nodeName) {
				$type->setMeta(FHIRMeta::xmlUnserialize($n));
			} elseif (self::FIELD_IMPLICIT_RULES === $n->nodeName) {
				$type->setImplicitRules(FHIRUri::xmlUnserialize($n));
			} elseif (self::FIELD_LANGUAGE === $n->nodeName) {
				$type->setLanguage(FHIRCode::xmlUnserialize($n));
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
		$n = $element->attributes->getNamedItem(self::FIELD_ID);
		if (null !== $n) {
			$pt = $type->getId();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setId($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_IMPLICIT_RULES);
		if (null !== $n) {
			$pt = $type->getImplicitRules();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setImplicitRules($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_LANGUAGE);
		if (null !== $n) {
			$pt = $type->getLanguage();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setLanguage($n->nodeValue);
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
		if (null !== ($v = $this->getPatient())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATIENT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getSource())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_SOURCE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDate())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DATE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getIdentifier())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_IDENTIFIER);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getStatus())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_STATUS);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getKind())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_KIND);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getOrderedItem())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_ORDERED_ITEM);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getSupplier())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_SUPPLIER);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if (null !== ($v = $this->getReasonCodeableConcept())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_REASON_CODEABLE_CONCEPT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getReasonReference())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_REASON_REFERENCE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getWhen())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_WHEN);
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
		if (null !== ($v = $this->getPatient())) {
			$out->{self::FIELD_PATIENT} = $v;
		}
		if (null !== ($v = $this->getSource())) {
			$out->{self::FIELD_SOURCE} = $v;
		}
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
		if (null !== ($v = $this->getIdentifier())) {
			$out->{self::FIELD_IDENTIFIER} = $v;
		}
		if (null !== ($v = $this->getStatus())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_STATUS} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRSupplyRequestStatus::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_STATUS_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getKind())) {
			$out->{self::FIELD_KIND} = $v;
		}
		if (null !== ($v = $this->getOrderedItem())) {
			$out->{self::FIELD_ORDERED_ITEM} = $v;
		}
		if ([] !== ($vs = $this->getSupplier())) {
			$out->{self::FIELD_SUPPLIER} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_SUPPLIER}[] = $v;
			}
		}
		if (null !== ($v = $this->getReasonCodeableConcept())) {
			$out->{self::FIELD_REASON_CODEABLE_CONCEPT} = $v;
		}
		if (null !== ($v = $this->getReasonReference())) {
			$out->{self::FIELD_REASON_REFERENCE} = $v;
		}
		if (null !== ($v = $this->getWhen())) {
			$out->{self::FIELD_WHEN} = $v;
		}

		$out->{PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE} = $this->_getResourceType();

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
