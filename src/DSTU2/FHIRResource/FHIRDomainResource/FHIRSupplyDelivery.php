<?php declare(strict_types=1);

namespace Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource;

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

use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRExtension;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRId;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMeta;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRNarrative;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSupplyDeliveryStatus;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri;
use Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource;
use Calvient\FhirTypes\DSTU2\PHPFHIRConstants;
use Calvient\FhirTypes\DSTU2\PHPFHIRContainedTypeInterface;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeInterface;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeMap;

/**
 * Record of delivery of what is supplied.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRSupplyDelivery
 * @package \Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIRSupplyDelivery extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUPPLY_DELIVERY;
	const FIELD_IDENTIFIER = 'identifier';
	const FIELD_STATUS = 'status';
	const FIELD_STATUS_EXT = '_status';
	const FIELD_PATIENT = 'patient';
	const FIELD_TYPE = 'type';
	const FIELD_QUANTITY = 'quantity';
	const FIELD_SUPPLIED_ITEM = 'suppliedItem';
	const FIELD_SUPPLIER = 'supplier';
	const FIELD_WHEN_PREPARED = 'whenPrepared';
	const FIELD_TIME = 'time';
	const FIELD_TIME_EXT = '_time';
	const FIELD_DESTINATION = 'destination';
	const FIELD_RECEIVER = 'receiver';

	/** @var string */
	private $_xmlns = '';

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifier assigned by the dispensing facility when the item(s) is dispensed.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier
	 */
	protected ?FHIRIdentifier $identifier = null;

	/**
	 * Status of the supply delivery.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A code specifying the state of the dispense event.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSupplyDeliveryStatus
	 */
	protected ?FHIRSupplyDeliveryStatus $status = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A link to a resource representing the person whom the delivered item is for.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $patient = null;

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Indicates the type of dispensing event that is performed. Examples include:
	 * Trial Fill, Completion of Trial, Partial Fill, Emergency Fill, Samples, etc.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	protected ?FHIRCodeableConcept $type = null;

	/**
	 * The amount of supply that has been dispensed. Includes unit of measure.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
	 */
	protected ?FHIRSimpleQuantity $quantity = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies the medication, substance or device being dispensed. This is either a
	 * link to a resource representing the details of the item or a simple attribute
	 * carrying a code that identifies the item from a known list.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $suppliedItem = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The individual responsible for dispensing the medication, supplier or device.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $supplier = null;

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The time the dispense event occurred.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod
	 */
	protected ?FHIRPeriod $whenPrepared = null;

	/**
	 * A date, date-time or partial date (e.g. just year or year + month). If hours and
	 * minutes are specified, a time zone SHALL be populated. The format is a union of
	 * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
	 * due to schema type constraints but may be zero-filled and may be ignored. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The time the dispensed item was sent or handed to the patient (or agent).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime
	 */
	protected ?FHIRDateTime $time = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identification of the facility/location where the Supply was shipped to, as part
	 * of the dispense event.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $destination = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies the person who picked up the Supply.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	protected ?array $receiver = [];

	/**
	 * Validation map for fields in type SupplyDelivery
	 * @var array
	 */
	private static array $_validationRules = [];

	/**
	 * FHIRSupplyDelivery Constructor
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
					'FHIRSupplyDelivery::_construct - $data expected to be null or array, %s seen',
					gettype($data),
				),
			);
		}
		parent::__construct($data);
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
				if ($value instanceof FHIRSupplyDeliveryStatus) {
					$this->setStatus($value);
				} elseif (is_array($value)) {
					$this->setStatus(new FHIRSupplyDeliveryStatus(array_merge($ext, $value)));
				} else {
					$this->setStatus(
						new FHIRSupplyDeliveryStatus(
							[FHIRSupplyDeliveryStatus::FIELD_VALUE => $value] + $ext,
						),
					);
				}
			} elseif ([] !== $ext) {
				$this->setStatus(new FHIRSupplyDeliveryStatus($ext));
			}
		}
		if (isset($data[self::FIELD_PATIENT])) {
			if ($data[self::FIELD_PATIENT] instanceof FHIRReference) {
				$this->setPatient($data[self::FIELD_PATIENT]);
			} else {
				$this->setPatient(new FHIRReference($data[self::FIELD_PATIENT]));
			}
		}
		if (isset($data[self::FIELD_TYPE])) {
			if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
				$this->setType($data[self::FIELD_TYPE]);
			} else {
				$this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
			}
		}
		if (isset($data[self::FIELD_QUANTITY])) {
			if ($data[self::FIELD_QUANTITY] instanceof FHIRSimpleQuantity) {
				$this->setQuantity($data[self::FIELD_QUANTITY]);
			} else {
				$this->setQuantity(new FHIRSimpleQuantity($data[self::FIELD_QUANTITY]));
			}
		}
		if (isset($data[self::FIELD_SUPPLIED_ITEM])) {
			if ($data[self::FIELD_SUPPLIED_ITEM] instanceof FHIRReference) {
				$this->setSuppliedItem($data[self::FIELD_SUPPLIED_ITEM]);
			} else {
				$this->setSuppliedItem(new FHIRReference($data[self::FIELD_SUPPLIED_ITEM]));
			}
		}
		if (isset($data[self::FIELD_SUPPLIER])) {
			if ($data[self::FIELD_SUPPLIER] instanceof FHIRReference) {
				$this->setSupplier($data[self::FIELD_SUPPLIER]);
			} else {
				$this->setSupplier(new FHIRReference($data[self::FIELD_SUPPLIER]));
			}
		}
		if (isset($data[self::FIELD_WHEN_PREPARED])) {
			if ($data[self::FIELD_WHEN_PREPARED] instanceof FHIRPeriod) {
				$this->setWhenPrepared($data[self::FIELD_WHEN_PREPARED]);
			} else {
				$this->setWhenPrepared(new FHIRPeriod($data[self::FIELD_WHEN_PREPARED]));
			}
		}
		if (isset($data[self::FIELD_TIME]) || isset($data[self::FIELD_TIME_EXT])) {
			$value = $data[self::FIELD_TIME] ?? null;
			$ext =
				isset($data[self::FIELD_TIME_EXT]) && is_array($data[self::FIELD_TIME_EXT])
					? $data[self::FIELD_TIME_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRDateTime) {
					$this->setTime($value);
				} elseif (is_array($value)) {
					$this->setTime(new FHIRDateTime(array_merge($ext, $value)));
				} else {
					$this->setTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setTime(new FHIRDateTime($ext));
			}
		}
		if (isset($data[self::FIELD_DESTINATION])) {
			if ($data[self::FIELD_DESTINATION] instanceof FHIRReference) {
				$this->setDestination($data[self::FIELD_DESTINATION]);
			} else {
				$this->setDestination(new FHIRReference($data[self::FIELD_DESTINATION]));
			}
		}
		if (isset($data[self::FIELD_RECEIVER])) {
			if (is_array($data[self::FIELD_RECEIVER])) {
				foreach ($data[self::FIELD_RECEIVER] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRReference) {
						$this->addReceiver($v);
					} else {
						$this->addReceiver(new FHIRReference($v));
					}
				}
			} elseif ($data[self::FIELD_RECEIVER] instanceof FHIRReference) {
				$this->addReceiver($data[self::FIELD_RECEIVER]);
			} else {
				$this->addReceiver(new FHIRReference($data[self::FIELD_RECEIVER]));
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
		return "<SupplyDelivery{$xmlns}></SupplyDelivery>";
	}
	/**
	 * @return string
	 */
	public function _getResourceType(): string
	{
		return static::FHIR_TYPE_NAME;
	}

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifier assigned by the dispensing facility when the item(s) is dispensed.
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
	 * Identifier assigned by the dispensing facility when the item(s) is dispensed.
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
	 * Status of the supply delivery.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A code specifying the state of the dispense event.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSupplyDeliveryStatus
	 */
	public function getStatus(): ?FHIRSupplyDeliveryStatus
	{
		return $this->status;
	}

	/**
	 * Status of the supply delivery.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A code specifying the state of the dispense event.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSupplyDeliveryStatus $status
	 * @return static
	 */
	public function setStatus(?FHIRSupplyDeliveryStatus $status = null): object
	{
		$this->_trackValueSet($this->status, $status);
		$this->status = $status;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A link to a resource representing the person whom the delivered item is for.
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
	 * A link to a resource representing the person whom the delivered item is for.
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
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Indicates the type of dispensing event that is performed. Examples include:
	 * Trial Fill, Completion of Trial, Partial Fill, Emergency Fill, Samples, etc.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	public function getType(): ?FHIRCodeableConcept
	{
		return $this->type;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Indicates the type of dispensing event that is performed. Examples include:
	 * Trial Fill, Completion of Trial, Partial Fill, Emergency Fill, Samples, etc.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $type
	 * @return static
	 */
	public function setType(?FHIRCodeableConcept $type = null): object
	{
		$this->_trackValueSet($this->type, $type);
		$this->type = $type;
		return $this;
	}

	/**
	 * The amount of supply that has been dispensed. Includes unit of measure.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
	 */
	public function getQuantity(): ?FHIRSimpleQuantity
	{
		return $this->quantity;
	}

	/**
	 * The amount of supply that has been dispensed. Includes unit of measure.
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
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies the medication, substance or device being dispensed. This is either a
	 * link to a resource representing the details of the item or a simple attribute
	 * carrying a code that identifies the item from a known list.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getSuppliedItem(): ?FHIRReference
	{
		return $this->suppliedItem;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies the medication, substance or device being dispensed. This is either a
	 * link to a resource representing the details of the item or a simple attribute
	 * carrying a code that identifies the item from a known list.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $suppliedItem
	 * @return static
	 */
	public function setSuppliedItem(?FHIRReference $suppliedItem = null): object
	{
		$this->_trackValueSet($this->suppliedItem, $suppliedItem);
		$this->suppliedItem = $suppliedItem;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The individual responsible for dispensing the medication, supplier or device.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getSupplier(): ?FHIRReference
	{
		return $this->supplier;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The individual responsible for dispensing the medication, supplier or device.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $supplier
	 * @return static
	 */
	public function setSupplier(?FHIRReference $supplier = null): object
	{
		$this->_trackValueSet($this->supplier, $supplier);
		$this->supplier = $supplier;
		return $this;
	}

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The time the dispense event occurred.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod
	 */
	public function getWhenPrepared(): ?FHIRPeriod
	{
		return $this->whenPrepared;
	}

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The time the dispense event occurred.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod $whenPrepared
	 * @return static
	 */
	public function setWhenPrepared(?FHIRPeriod $whenPrepared = null): object
	{
		$this->_trackValueSet($this->whenPrepared, $whenPrepared);
		$this->whenPrepared = $whenPrepared;
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
	 * The time the dispensed item was sent or handed to the patient (or agent).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime
	 */
	public function getTime(): ?FHIRDateTime
	{
		return $this->time;
	}

	/**
	 * A date, date-time or partial date (e.g. just year or year + month). If hours and
	 * minutes are specified, a time zone SHALL be populated. The format is a union of
	 * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
	 * due to schema type constraints but may be zero-filled and may be ignored. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The time the dispensed item was sent or handed to the patient (or agent).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime $time
	 * @return static
	 */
	public function setTime($time = null): object
	{
		if (null !== $time && !($time instanceof FHIRDateTime)) {
			$time = new FHIRDateTime($time);
		}
		$this->_trackValueSet($this->time, $time);
		$this->time = $time;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identification of the facility/location where the Supply was shipped to, as part
	 * of the dispense event.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getDestination(): ?FHIRReference
	{
		return $this->destination;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identification of the facility/location where the Supply was shipped to, as part
	 * of the dispense event.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $destination
	 * @return static
	 */
	public function setDestination(?FHIRReference $destination = null): object
	{
		$this->_trackValueSet($this->destination, $destination);
		$this->destination = $destination;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies the person who picked up the Supply.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	public function getReceiver(): ?array
	{
		return $this->receiver;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies the person who picked up the Supply.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $receiver
	 * @return static
	 */
	public function addReceiver(?FHIRReference $receiver = null): object
	{
		$this->_trackValueAdded();
		$this->receiver[] = $receiver;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies the person who picked up the Supply.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[] $receiver
	 * @return static
	 */
	public function setReceiver(array $receiver = []): object
	{
		if ([] !== $this->receiver) {
			$this->_trackValuesRemoved(count($this->receiver));
			$this->receiver = [];
		}
		if ([] === $receiver) {
			return $this;
		}
		foreach ($receiver as $v) {
			if ($v instanceof FHIRReference) {
				$this->addReceiver($v);
			} else {
				$this->addReceiver(new FHIRReference($v));
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
		if (null !== ($v = $this->getPatient())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATIENT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getType())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_TYPE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getQuantity())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_QUANTITY] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getSuppliedItem())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_SUPPLIED_ITEM] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getSupplier())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_SUPPLIER] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getWhenPrepared())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_WHEN_PREPARED] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getTime())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_TIME] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDestination())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DESTINATION] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getReceiver())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_RECEIVER, $i)] = $fieldErrs;
				}
			}
		}
		if (isset($validationRules[self::FIELD_IDENTIFIER])) {
			$v = $this->getIdentifier();
			foreach ($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_SUPPLY_DELIVERY,
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
					PHPFHIRConstants::TYPE_NAME_SUPPLY_DELIVERY,
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
		if (isset($validationRules[self::FIELD_PATIENT])) {
			$v = $this->getPatient();
			foreach ($validationRules[self::FIELD_PATIENT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_SUPPLY_DELIVERY,
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
		if (isset($validationRules[self::FIELD_TYPE])) {
			$v = $this->getType();
			foreach ($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_SUPPLY_DELIVERY,
					self::FIELD_TYPE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_TYPE])) {
						$errs[self::FIELD_TYPE] = [];
					}
					$errs[self::FIELD_TYPE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_QUANTITY])) {
			$v = $this->getQuantity();
			foreach ($validationRules[self::FIELD_QUANTITY] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_SUPPLY_DELIVERY,
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
		if (isset($validationRules[self::FIELD_SUPPLIED_ITEM])) {
			$v = $this->getSuppliedItem();
			foreach ($validationRules[self::FIELD_SUPPLIED_ITEM] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_SUPPLY_DELIVERY,
					self::FIELD_SUPPLIED_ITEM,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_SUPPLIED_ITEM])) {
						$errs[self::FIELD_SUPPLIED_ITEM] = [];
					}
					$errs[self::FIELD_SUPPLIED_ITEM][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_SUPPLIER])) {
			$v = $this->getSupplier();
			foreach ($validationRules[self::FIELD_SUPPLIER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_SUPPLY_DELIVERY,
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
		if (isset($validationRules[self::FIELD_WHEN_PREPARED])) {
			$v = $this->getWhenPrepared();
			foreach ($validationRules[self::FIELD_WHEN_PREPARED] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_SUPPLY_DELIVERY,
					self::FIELD_WHEN_PREPARED,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_WHEN_PREPARED])) {
						$errs[self::FIELD_WHEN_PREPARED] = [];
					}
					$errs[self::FIELD_WHEN_PREPARED][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_TIME])) {
			$v = $this->getTime();
			foreach ($validationRules[self::FIELD_TIME] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_SUPPLY_DELIVERY,
					self::FIELD_TIME,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_TIME])) {
						$errs[self::FIELD_TIME] = [];
					}
					$errs[self::FIELD_TIME][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DESTINATION])) {
			$v = $this->getDestination();
			foreach ($validationRules[self::FIELD_DESTINATION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_SUPPLY_DELIVERY,
					self::FIELD_DESTINATION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DESTINATION])) {
						$errs[self::FIELD_DESTINATION] = [];
					}
					$errs[self::FIELD_DESTINATION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_RECEIVER])) {
			$v = $this->getReceiver();
			foreach ($validationRules[self::FIELD_RECEIVER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_SUPPLY_DELIVERY,
					self::FIELD_RECEIVER,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_RECEIVER])) {
						$errs[self::FIELD_RECEIVER] = [];
					}
					$errs[self::FIELD_RECEIVER][$rule] = $err;
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRSupplyDelivery $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRSupplyDelivery
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
						'FHIRSupplyDelivery::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRSupplyDelivery::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRSupplyDelivery(null);
		} elseif (!is_object($type) || !($type instanceof FHIRSupplyDelivery)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRSupplyDelivery::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRSupplyDelivery or null, %s seen.',
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
			if (self::FIELD_IDENTIFIER === $n->nodeName) {
				$type->setIdentifier(FHIRIdentifier::xmlUnserialize($n));
			} elseif (self::FIELD_STATUS === $n->nodeName) {
				$type->setStatus(FHIRSupplyDeliveryStatus::xmlUnserialize($n));
			} elseif (self::FIELD_PATIENT === $n->nodeName) {
				$type->setPatient(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_TYPE === $n->nodeName) {
				$type->setType(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_QUANTITY === $n->nodeName) {
				$type->setQuantity(FHIRSimpleQuantity::xmlUnserialize($n));
			} elseif (self::FIELD_SUPPLIED_ITEM === $n->nodeName) {
				$type->setSuppliedItem(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_SUPPLIER === $n->nodeName) {
				$type->setSupplier(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_WHEN_PREPARED === $n->nodeName) {
				$type->setWhenPrepared(FHIRPeriod::xmlUnserialize($n));
			} elseif (self::FIELD_TIME === $n->nodeName) {
				$type->setTime(FHIRDateTime::xmlUnserialize($n));
			} elseif (self::FIELD_DESTINATION === $n->nodeName) {
				$type->setDestination(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_RECEIVER === $n->nodeName) {
				$type->addReceiver(FHIRReference::xmlUnserialize($n));
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
		$n = $element->attributes->getNamedItem(self::FIELD_TIME);
		if (null !== $n) {
			$pt = $type->getTime();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setTime($n->nodeValue);
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
		if (null !== ($v = $this->getPatient())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATIENT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getType())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_TYPE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getQuantity())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_QUANTITY);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getSuppliedItem())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_SUPPLIED_ITEM);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getSupplier())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_SUPPLIER);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getWhenPrepared())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_WHEN_PREPARED);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getTime())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_TIME);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDestination())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DESTINATION);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getReceiver())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_RECEIVER);
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
		if (null !== ($v = $this->getIdentifier())) {
			$out->{self::FIELD_IDENTIFIER} = $v;
		}
		if (null !== ($v = $this->getStatus())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_STATUS} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRSupplyDeliveryStatus::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_STATUS_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getPatient())) {
			$out->{self::FIELD_PATIENT} = $v;
		}
		if (null !== ($v = $this->getType())) {
			$out->{self::FIELD_TYPE} = $v;
		}
		if (null !== ($v = $this->getQuantity())) {
			$out->{self::FIELD_QUANTITY} = $v;
		}
		if (null !== ($v = $this->getSuppliedItem())) {
			$out->{self::FIELD_SUPPLIED_ITEM} = $v;
		}
		if (null !== ($v = $this->getSupplier())) {
			$out->{self::FIELD_SUPPLIER} = $v;
		}
		if (null !== ($v = $this->getWhenPrepared())) {
			$out->{self::FIELD_WHEN_PREPARED} = $v;
		}
		if (null !== ($v = $this->getTime())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_TIME} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRDateTime::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_TIME_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getDestination())) {
			$out->{self::FIELD_DESTINATION} = $v;
		}
		if ([] !== ($vs = $this->getReceiver())) {
			$out->{self::FIELD_RECEIVER} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_RECEIVER}[] = $v;
			}
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
