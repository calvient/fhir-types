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
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTiming;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri;
use Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource;
use Calvient\FhirTypes\DSTU2\PHPFHIRConstants;
use Calvient\FhirTypes\DSTU2\PHPFHIRContainedTypeInterface;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeInterface;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeMap;

/**
 * A record of a device being used by a patient where the record is the result of a
 * report from the patient or another clinician.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRDeviceUseStatement
 * @package \Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIRDeviceUseStatement extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DEVICE_USE_STATEMENT;
	const FIELD_BODY_SITE_CODEABLE_CONCEPT = 'bodySiteCodeableConcept';
	const FIELD_BODY_SITE_REFERENCE = 'bodySiteReference';
	const FIELD_WHEN_USED = 'whenUsed';
	const FIELD_DEVICE = 'device';
	const FIELD_IDENTIFIER = 'identifier';
	const FIELD_INDICATION = 'indication';
	const FIELD_NOTES = 'notes';
	const FIELD_NOTES_EXT = '_notes';
	const FIELD_RECORDED_ON = 'recordedOn';
	const FIELD_RECORDED_ON_EXT = '_recordedOn';
	const FIELD_SUBJECT = 'subject';
	const FIELD_TIMING_TIMING = 'timingTiming';
	const FIELD_TIMING_PERIOD = 'timingPeriod';
	const FIELD_TIMING_DATE_TIME = 'timingDateTime';
	const FIELD_TIMING_DATE_TIME_EXT = '_timingDateTime';

	/** @var string */
	private $_xmlns = '';

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Indicates the site on the subject's body where the device was used ( i.e. the
	 * target site).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	protected ?FHIRCodeableConcept $bodySiteCodeableConcept = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Indicates the site on the subject's body where the device was used ( i.e. the
	 * target site).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $bodySiteReference = null;

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The time period over which the device was used.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod
	 */
	protected ?FHIRPeriod $whenUsed = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The details of the device used.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $device = null;

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * An external identifier for this statement such as an IRI.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier[]
	 */
	protected ?array $identifier = [];

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Reason or justification for the use of the device.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept[]
	 */
	protected ?array $indication = [];

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Details about the device statement that were not represented at all or
	 * sufficiently in one of the attributes provided in a class. These may include for
	 * example a comment, an instruction, or a note associated with the statement.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive[]|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString[]
	 */
	protected ?array $notes = [];

	/**
	 * A date, date-time or partial date (e.g. just year or year + month). If hours and
	 * minutes are specified, a time zone SHALL be populated. The format is a union of
	 * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
	 * due to schema type constraints but may be zero-filled and may be ignored. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The time at which the statement was made/recorded.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime
	 */
	protected ?FHIRDateTime $recordedOn = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The patient who used the device.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $subject = null;

	/**
	 * Specifies an event that may occur multiple times. Timing schedules are used to
	 * record when things are expected or requested to occur. The most common usage is
	 * in dosage instructions for medications. They are also used when planning care of
	 * various kinds.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * How often the device was used.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTiming
	 */
	protected ?FHIRTiming $timingTiming = null;

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * How often the device was used.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod
	 */
	protected ?FHIRPeriod $timingPeriod = null;

	/**
	 * A date, date-time or partial date (e.g. just year or year + month). If hours and
	 * minutes are specified, a time zone SHALL be populated. The format is a union of
	 * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
	 * due to schema type constraints but may be zero-filled and may be ignored. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * How often the device was used.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime
	 */
	protected ?FHIRDateTime $timingDateTime = null;

	/**
	 * Validation map for fields in type DeviceUseStatement
	 * @var array
	 */
	private static array $_validationRules = [];

	/**
	 * FHIRDeviceUseStatement Constructor
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
					'FHIRDeviceUseStatement::_construct - $data expected to be null or array, %s seen',
					gettype($data),
				),
			);
		}
		parent::__construct($data);
		if (isset($data[self::FIELD_BODY_SITE_CODEABLE_CONCEPT])) {
			if ($data[self::FIELD_BODY_SITE_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
				$this->setBodySiteCodeableConcept($data[self::FIELD_BODY_SITE_CODEABLE_CONCEPT]);
			} else {
				$this->setBodySiteCodeableConcept(
					new FHIRCodeableConcept($data[self::FIELD_BODY_SITE_CODEABLE_CONCEPT]),
				);
			}
		}
		if (isset($data[self::FIELD_BODY_SITE_REFERENCE])) {
			if ($data[self::FIELD_BODY_SITE_REFERENCE] instanceof FHIRReference) {
				$this->setBodySiteReference($data[self::FIELD_BODY_SITE_REFERENCE]);
			} else {
				$this->setBodySiteReference(
					new FHIRReference($data[self::FIELD_BODY_SITE_REFERENCE]),
				);
			}
		}
		if (isset($data[self::FIELD_WHEN_USED])) {
			if ($data[self::FIELD_WHEN_USED] instanceof FHIRPeriod) {
				$this->setWhenUsed($data[self::FIELD_WHEN_USED]);
			} else {
				$this->setWhenUsed(new FHIRPeriod($data[self::FIELD_WHEN_USED]));
			}
		}
		if (isset($data[self::FIELD_DEVICE])) {
			if ($data[self::FIELD_DEVICE] instanceof FHIRReference) {
				$this->setDevice($data[self::FIELD_DEVICE]);
			} else {
				$this->setDevice(new FHIRReference($data[self::FIELD_DEVICE]));
			}
		}
		if (isset($data[self::FIELD_IDENTIFIER])) {
			if (is_array($data[self::FIELD_IDENTIFIER])) {
				foreach ($data[self::FIELD_IDENTIFIER] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRIdentifier) {
						$this->addIdentifier($v);
					} else {
						$this->addIdentifier(new FHIRIdentifier($v));
					}
				}
			} elseif ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
				$this->addIdentifier($data[self::FIELD_IDENTIFIER]);
			} else {
				$this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
			}
		}
		if (isset($data[self::FIELD_INDICATION])) {
			if (is_array($data[self::FIELD_INDICATION])) {
				foreach ($data[self::FIELD_INDICATION] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRCodeableConcept) {
						$this->addIndication($v);
					} else {
						$this->addIndication(new FHIRCodeableConcept($v));
					}
				}
			} elseif ($data[self::FIELD_INDICATION] instanceof FHIRCodeableConcept) {
				$this->addIndication($data[self::FIELD_INDICATION]);
			} else {
				$this->addIndication(new FHIRCodeableConcept($data[self::FIELD_INDICATION]));
			}
		}
		if (isset($data[self::FIELD_NOTES]) || isset($data[self::FIELD_NOTES_EXT])) {
			$value = $data[self::FIELD_NOTES] ?? null;
			$ext =
				isset($data[self::FIELD_NOTES_EXT]) && is_array($data[self::FIELD_NOTES_EXT])
					? $data[self::FIELD_NOTES_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->addNotes($value);
				} elseif (is_array($value)) {
					foreach ($value as $i => $v) {
						if ($v instanceof FHIRString) {
							$this->addNotes($v);
						} else {
							$iext = isset($ext[$i]) && is_array($ext[$i]) ? $ext[$i] : [];
							if (is_array($v)) {
								$this->addNotes(new FHIRString(array_merge($v, $iext)));
							} else {
								$this->addNotes(
									new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext),
								);
							}
						}
					}
				} elseif (is_array($value)) {
					$this->addNotes(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->addNotes(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				foreach ($ext as $iext) {
					$this->addNotes(new FHIRString($iext));
				}
			}
		}
		if (isset($data[self::FIELD_RECORDED_ON]) || isset($data[self::FIELD_RECORDED_ON_EXT])) {
			$value = $data[self::FIELD_RECORDED_ON] ?? null;
			$ext =
				isset($data[self::FIELD_RECORDED_ON_EXT]) &&
				is_array($data[self::FIELD_RECORDED_ON_EXT])
					? $data[self::FIELD_RECORDED_ON_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRDateTime) {
					$this->setRecordedOn($value);
				} elseif (is_array($value)) {
					$this->setRecordedOn(new FHIRDateTime(array_merge($ext, $value)));
				} else {
					$this->setRecordedOn(
						new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setRecordedOn(new FHIRDateTime($ext));
			}
		}
		if (isset($data[self::FIELD_SUBJECT])) {
			if ($data[self::FIELD_SUBJECT] instanceof FHIRReference) {
				$this->setSubject($data[self::FIELD_SUBJECT]);
			} else {
				$this->setSubject(new FHIRReference($data[self::FIELD_SUBJECT]));
			}
		}
		if (isset($data[self::FIELD_TIMING_TIMING])) {
			if ($data[self::FIELD_TIMING_TIMING] instanceof FHIRTiming) {
				$this->setTimingTiming($data[self::FIELD_TIMING_TIMING]);
			} else {
				$this->setTimingTiming(new FHIRTiming($data[self::FIELD_TIMING_TIMING]));
			}
		}
		if (isset($data[self::FIELD_TIMING_PERIOD])) {
			if ($data[self::FIELD_TIMING_PERIOD] instanceof FHIRPeriod) {
				$this->setTimingPeriod($data[self::FIELD_TIMING_PERIOD]);
			} else {
				$this->setTimingPeriod(new FHIRPeriod($data[self::FIELD_TIMING_PERIOD]));
			}
		}
		if (
			isset($data[self::FIELD_TIMING_DATE_TIME]) ||
			isset($data[self::FIELD_TIMING_DATE_TIME_EXT])
		) {
			$value = $data[self::FIELD_TIMING_DATE_TIME] ?? null;
			$ext =
				isset($data[self::FIELD_TIMING_DATE_TIME_EXT]) &&
				is_array($data[self::FIELD_TIMING_DATE_TIME_EXT])
					? $data[self::FIELD_TIMING_DATE_TIME_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRDateTime) {
					$this->setTimingDateTime($value);
				} elseif (is_array($value)) {
					$this->setTimingDateTime(new FHIRDateTime(array_merge($ext, $value)));
				} else {
					$this->setTimingDateTime(
						new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setTimingDateTime(new FHIRDateTime($ext));
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
		return "<DeviceUseStatement{$xmlns}></DeviceUseStatement>";
	}
	/**
	 * @return string
	 */
	public function _getResourceType(): string
	{
		return static::FHIR_TYPE_NAME;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Indicates the site on the subject's body where the device was used ( i.e. the
	 * target site).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	public function getBodySiteCodeableConcept(): ?FHIRCodeableConcept
	{
		return $this->bodySiteCodeableConcept;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Indicates the site on the subject's body where the device was used ( i.e. the
	 * target site).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $bodySiteCodeableConcept
	 * @return static
	 */
	public function setBodySiteCodeableConcept(
		?FHIRCodeableConcept $bodySiteCodeableConcept = null,
	): object {
		$this->_trackValueSet($this->bodySiteCodeableConcept, $bodySiteCodeableConcept);
		$this->bodySiteCodeableConcept = $bodySiteCodeableConcept;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Indicates the site on the subject's body where the device was used ( i.e. the
	 * target site).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getBodySiteReference(): ?FHIRReference
	{
		return $this->bodySiteReference;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Indicates the site on the subject's body where the device was used ( i.e. the
	 * target site).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $bodySiteReference
	 * @return static
	 */
	public function setBodySiteReference(?FHIRReference $bodySiteReference = null): object
	{
		$this->_trackValueSet($this->bodySiteReference, $bodySiteReference);
		$this->bodySiteReference = $bodySiteReference;
		return $this;
	}

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The time period over which the device was used.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod
	 */
	public function getWhenUsed(): ?FHIRPeriod
	{
		return $this->whenUsed;
	}

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The time period over which the device was used.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod $whenUsed
	 * @return static
	 */
	public function setWhenUsed(?FHIRPeriod $whenUsed = null): object
	{
		$this->_trackValueSet($this->whenUsed, $whenUsed);
		$this->whenUsed = $whenUsed;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The details of the device used.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getDevice(): ?FHIRReference
	{
		return $this->device;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The details of the device used.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $device
	 * @return static
	 */
	public function setDevice(?FHIRReference $device = null): object
	{
		$this->_trackValueSet($this->device, $device);
		$this->device = $device;
		return $this;
	}

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * An external identifier for this statement such as an IRI.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier[]
	 */
	public function getIdentifier(): ?array
	{
		return $this->identifier;
	}

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * An external identifier for this statement such as an IRI.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier $identifier
	 * @return static
	 */
	public function addIdentifier(?FHIRIdentifier $identifier = null): object
	{
		$this->_trackValueAdded();
		$this->identifier[] = $identifier;
		return $this;
	}

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * An external identifier for this statement such as an IRI.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier[] $identifier
	 * @return static
	 */
	public function setIdentifier(array $identifier = []): object
	{
		if ([] !== $this->identifier) {
			$this->_trackValuesRemoved(count($this->identifier));
			$this->identifier = [];
		}
		if ([] === $identifier) {
			return $this;
		}
		foreach ($identifier as $v) {
			if ($v instanceof FHIRIdentifier) {
				$this->addIdentifier($v);
			} else {
				$this->addIdentifier(new FHIRIdentifier($v));
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
	 * Reason or justification for the use of the device.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept[]
	 */
	public function getIndication(): ?array
	{
		return $this->indication;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Reason or justification for the use of the device.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $indication
	 * @return static
	 */
	public function addIndication(?FHIRCodeableConcept $indication = null): object
	{
		$this->_trackValueAdded();
		$this->indication[] = $indication;
		return $this;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Reason or justification for the use of the device.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept[] $indication
	 * @return static
	 */
	public function setIndication(array $indication = []): object
	{
		if ([] !== $this->indication) {
			$this->_trackValuesRemoved(count($this->indication));
			$this->indication = [];
		}
		if ([] === $indication) {
			return $this;
		}
		foreach ($indication as $v) {
			if ($v instanceof FHIRCodeableConcept) {
				$this->addIndication($v);
			} else {
				$this->addIndication(new FHIRCodeableConcept($v));
			}
		}
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Details about the device statement that were not represented at all or
	 * sufficiently in one of the attributes provided in a class. These may include for
	 * example a comment, an instruction, or a note associated with the statement.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive[]|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString[]
	 */
	public function getNotes(): ?array
	{
		return $this->notes;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Details about the device statement that were not represented at all or
	 * sufficiently in one of the attributes provided in a class. These may include for
	 * example a comment, an instruction, or a note associated with the statement.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive[]|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString[] $notes
	 * @return static
	 */
	public function addNotes($notes = null): object
	{
		if (null !== $notes && !($notes instanceof FHIRString)) {
			$notes = new FHIRString($notes);
		}
		$this->_trackValueAdded();
		$this->notes[] = $notes;
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Details about the device statement that were not represented at all or
	 * sufficiently in one of the attributes provided in a class. These may include for
	 * example a comment, an instruction, or a note associated with the statement.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString[] $notes
	 * @return static
	 */
	public function setNotes(array $notes = []): object
	{
		if ([] !== $this->notes) {
			$this->_trackValuesRemoved(count($this->notes));
			$this->notes = [];
		}
		if ([] === $notes) {
			return $this;
		}
		foreach ($notes as $v) {
			if ($v instanceof FHIRString) {
				$this->addNotes($v);
			} else {
				$this->addNotes(new FHIRString($v));
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
	 * The time at which the statement was made/recorded.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime
	 */
	public function getRecordedOn(): ?FHIRDateTime
	{
		return $this->recordedOn;
	}

	/**
	 * A date, date-time or partial date (e.g. just year or year + month). If hours and
	 * minutes are specified, a time zone SHALL be populated. The format is a union of
	 * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
	 * due to schema type constraints but may be zero-filled and may be ignored. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The time at which the statement was made/recorded.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime $recordedOn
	 * @return static
	 */
	public function setRecordedOn($recordedOn = null): object
	{
		if (null !== $recordedOn && !($recordedOn instanceof FHIRDateTime)) {
			$recordedOn = new FHIRDateTime($recordedOn);
		}
		$this->_trackValueSet($this->recordedOn, $recordedOn);
		$this->recordedOn = $recordedOn;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The patient who used the device.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getSubject(): ?FHIRReference
	{
		return $this->subject;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The patient who used the device.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $subject
	 * @return static
	 */
	public function setSubject(?FHIRReference $subject = null): object
	{
		$this->_trackValueSet($this->subject, $subject);
		$this->subject = $subject;
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
	 * How often the device was used.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTiming
	 */
	public function getTimingTiming(): ?FHIRTiming
	{
		return $this->timingTiming;
	}

	/**
	 * Specifies an event that may occur multiple times. Timing schedules are used to
	 * record when things are expected or requested to occur. The most common usage is
	 * in dosage instructions for medications. They are also used when planning care of
	 * various kinds.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * How often the device was used.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTiming $timingTiming
	 * @return static
	 */
	public function setTimingTiming(?FHIRTiming $timingTiming = null): object
	{
		$this->_trackValueSet($this->timingTiming, $timingTiming);
		$this->timingTiming = $timingTiming;
		return $this;
	}

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * How often the device was used.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod
	 */
	public function getTimingPeriod(): ?FHIRPeriod
	{
		return $this->timingPeriod;
	}

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * How often the device was used.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod $timingPeriod
	 * @return static
	 */
	public function setTimingPeriod(?FHIRPeriod $timingPeriod = null): object
	{
		$this->_trackValueSet($this->timingPeriod, $timingPeriod);
		$this->timingPeriod = $timingPeriod;
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
	 * How often the device was used.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime
	 */
	public function getTimingDateTime(): ?FHIRDateTime
	{
		return $this->timingDateTime;
	}

	/**
	 * A date, date-time or partial date (e.g. just year or year + month). If hours and
	 * minutes are specified, a time zone SHALL be populated. The format is a union of
	 * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
	 * due to schema type constraints but may be zero-filled and may be ignored. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * How often the device was used.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime $timingDateTime
	 * @return static
	 */
	public function setTimingDateTime($timingDateTime = null): object
	{
		if (null !== $timingDateTime && !($timingDateTime instanceof FHIRDateTime)) {
			$timingDateTime = new FHIRDateTime($timingDateTime);
		}
		$this->_trackValueSet($this->timingDateTime, $timingDateTime);
		$this->timingDateTime = $timingDateTime;
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
		if (null !== ($v = $this->getBodySiteCodeableConcept())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_BODY_SITE_CODEABLE_CONCEPT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getBodySiteReference())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_BODY_SITE_REFERENCE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getWhenUsed())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_WHEN_USED] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDevice())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEVICE] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getIdentifier())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
				}
			}
		}
		if ([] !== ($vs = $this->getIndication())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_INDICATION, $i)] = $fieldErrs;
				}
			}
		}
		if ([] !== ($vs = $this->getNotes())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_NOTES, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getRecordedOn())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_RECORDED_ON] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getSubject())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_SUBJECT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getTimingTiming())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_TIMING_TIMING] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getTimingPeriod())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_TIMING_PERIOD] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getTimingDateTime())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_TIMING_DATE_TIME] = $fieldErrs;
			}
		}
		if (isset($validationRules[self::FIELD_BODY_SITE_CODEABLE_CONCEPT])) {
			$v = $this->getBodySiteCodeableConcept();
			foreach (
				$validationRules[self::FIELD_BODY_SITE_CODEABLE_CONCEPT]
				as $rule => $constraint
			) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DEVICE_USE_STATEMENT,
					self::FIELD_BODY_SITE_CODEABLE_CONCEPT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_BODY_SITE_CODEABLE_CONCEPT])) {
						$errs[self::FIELD_BODY_SITE_CODEABLE_CONCEPT] = [];
					}
					$errs[self::FIELD_BODY_SITE_CODEABLE_CONCEPT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_BODY_SITE_REFERENCE])) {
			$v = $this->getBodySiteReference();
			foreach ($validationRules[self::FIELD_BODY_SITE_REFERENCE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DEVICE_USE_STATEMENT,
					self::FIELD_BODY_SITE_REFERENCE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_BODY_SITE_REFERENCE])) {
						$errs[self::FIELD_BODY_SITE_REFERENCE] = [];
					}
					$errs[self::FIELD_BODY_SITE_REFERENCE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_WHEN_USED])) {
			$v = $this->getWhenUsed();
			foreach ($validationRules[self::FIELD_WHEN_USED] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DEVICE_USE_STATEMENT,
					self::FIELD_WHEN_USED,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_WHEN_USED])) {
						$errs[self::FIELD_WHEN_USED] = [];
					}
					$errs[self::FIELD_WHEN_USED][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEVICE])) {
			$v = $this->getDevice();
			foreach ($validationRules[self::FIELD_DEVICE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DEVICE_USE_STATEMENT,
					self::FIELD_DEVICE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEVICE])) {
						$errs[self::FIELD_DEVICE] = [];
					}
					$errs[self::FIELD_DEVICE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_IDENTIFIER])) {
			$v = $this->getIdentifier();
			foreach ($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DEVICE_USE_STATEMENT,
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
		if (isset($validationRules[self::FIELD_INDICATION])) {
			$v = $this->getIndication();
			foreach ($validationRules[self::FIELD_INDICATION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DEVICE_USE_STATEMENT,
					self::FIELD_INDICATION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_INDICATION])) {
						$errs[self::FIELD_INDICATION] = [];
					}
					$errs[self::FIELD_INDICATION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_NOTES])) {
			$v = $this->getNotes();
			foreach ($validationRules[self::FIELD_NOTES] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DEVICE_USE_STATEMENT,
					self::FIELD_NOTES,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_NOTES])) {
						$errs[self::FIELD_NOTES] = [];
					}
					$errs[self::FIELD_NOTES][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_RECORDED_ON])) {
			$v = $this->getRecordedOn();
			foreach ($validationRules[self::FIELD_RECORDED_ON] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DEVICE_USE_STATEMENT,
					self::FIELD_RECORDED_ON,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_RECORDED_ON])) {
						$errs[self::FIELD_RECORDED_ON] = [];
					}
					$errs[self::FIELD_RECORDED_ON][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_SUBJECT])) {
			$v = $this->getSubject();
			foreach ($validationRules[self::FIELD_SUBJECT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DEVICE_USE_STATEMENT,
					self::FIELD_SUBJECT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_SUBJECT])) {
						$errs[self::FIELD_SUBJECT] = [];
					}
					$errs[self::FIELD_SUBJECT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_TIMING_TIMING])) {
			$v = $this->getTimingTiming();
			foreach ($validationRules[self::FIELD_TIMING_TIMING] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DEVICE_USE_STATEMENT,
					self::FIELD_TIMING_TIMING,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_TIMING_TIMING])) {
						$errs[self::FIELD_TIMING_TIMING] = [];
					}
					$errs[self::FIELD_TIMING_TIMING][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_TIMING_PERIOD])) {
			$v = $this->getTimingPeriod();
			foreach ($validationRules[self::FIELD_TIMING_PERIOD] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DEVICE_USE_STATEMENT,
					self::FIELD_TIMING_PERIOD,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_TIMING_PERIOD])) {
						$errs[self::FIELD_TIMING_PERIOD] = [];
					}
					$errs[self::FIELD_TIMING_PERIOD][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_TIMING_DATE_TIME])) {
			$v = $this->getTimingDateTime();
			foreach ($validationRules[self::FIELD_TIMING_DATE_TIME] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DEVICE_USE_STATEMENT,
					self::FIELD_TIMING_DATE_TIME,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_TIMING_DATE_TIME])) {
						$errs[self::FIELD_TIMING_DATE_TIME] = [];
					}
					$errs[self::FIELD_TIMING_DATE_TIME][$rule] = $err;
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceUseStatement $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceUseStatement
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
						'FHIRDeviceUseStatement::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRDeviceUseStatement::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRDeviceUseStatement(null);
		} elseif (!is_object($type) || !($type instanceof FHIRDeviceUseStatement)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRDeviceUseStatement::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceUseStatement or null, %s seen.',
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
			if (self::FIELD_BODY_SITE_CODEABLE_CONCEPT === $n->nodeName) {
				$type->setBodySiteCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_BODY_SITE_REFERENCE === $n->nodeName) {
				$type->setBodySiteReference(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_WHEN_USED === $n->nodeName) {
				$type->setWhenUsed(FHIRPeriod::xmlUnserialize($n));
			} elseif (self::FIELD_DEVICE === $n->nodeName) {
				$type->setDevice(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_IDENTIFIER === $n->nodeName) {
				$type->addIdentifier(FHIRIdentifier::xmlUnserialize($n));
			} elseif (self::FIELD_INDICATION === $n->nodeName) {
				$type->addIndication(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_NOTES === $n->nodeName) {
				$type->addNotes(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_RECORDED_ON === $n->nodeName) {
				$type->setRecordedOn(FHIRDateTime::xmlUnserialize($n));
			} elseif (self::FIELD_SUBJECT === $n->nodeName) {
				$type->setSubject(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_TIMING_TIMING === $n->nodeName) {
				$type->setTimingTiming(FHIRTiming::xmlUnserialize($n));
			} elseif (self::FIELD_TIMING_PERIOD === $n->nodeName) {
				$type->setTimingPeriod(FHIRPeriod::xmlUnserialize($n));
			} elseif (self::FIELD_TIMING_DATE_TIME === $n->nodeName) {
				$type->setTimingDateTime(FHIRDateTime::xmlUnserialize($n));
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
		$n = $element->attributes->getNamedItem(self::FIELD_NOTES);
		if (null !== $n) {
			$pt = $type->getNotes();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->addNotes($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_RECORDED_ON);
		if (null !== $n) {
			$pt = $type->getRecordedOn();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setRecordedOn($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_TIMING_DATE_TIME);
		if (null !== $n) {
			$pt = $type->getTimingDateTime();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setTimingDateTime($n->nodeValue);
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
		if (null !== ($v = $this->getBodySiteCodeableConcept())) {
			$telement = $element->ownerDocument->createElement(
				self::FIELD_BODY_SITE_CODEABLE_CONCEPT,
			);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getBodySiteReference())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_BODY_SITE_REFERENCE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getWhenUsed())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_WHEN_USED);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDevice())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEVICE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getIdentifier())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_IDENTIFIER);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if ([] !== ($vs = $this->getIndication())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_INDICATION);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if ([] !== ($vs = $this->getNotes())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_NOTES);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if (null !== ($v = $this->getRecordedOn())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_RECORDED_ON);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getSubject())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_SUBJECT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getTimingTiming())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_TIMING_TIMING);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getTimingPeriod())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_TIMING_PERIOD);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getTimingDateTime())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_TIMING_DATE_TIME);
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
		if (null !== ($v = $this->getBodySiteCodeableConcept())) {
			$out->{self::FIELD_BODY_SITE_CODEABLE_CONCEPT} = $v;
		}
		if (null !== ($v = $this->getBodySiteReference())) {
			$out->{self::FIELD_BODY_SITE_REFERENCE} = $v;
		}
		if (null !== ($v = $this->getWhenUsed())) {
			$out->{self::FIELD_WHEN_USED} = $v;
		}
		if (null !== ($v = $this->getDevice())) {
			$out->{self::FIELD_DEVICE} = $v;
		}
		if ([] !== ($vs = $this->getIdentifier())) {
			$out->{self::FIELD_IDENTIFIER} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_IDENTIFIER}[] = $v;
			}
		}
		if ([] !== ($vs = $this->getIndication())) {
			$out->{self::FIELD_INDICATION} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_INDICATION}[] = $v;
			}
		}
		if ([] !== ($vs = $this->getNotes())) {
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
				$out->{self::FIELD_NOTES} = $vals;
			}
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_NOTES_EXT} = $exts;
			}
		}
		if (null !== ($v = $this->getRecordedOn())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_RECORDED_ON} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRDateTime::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_RECORDED_ON_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getSubject())) {
			$out->{self::FIELD_SUBJECT} = $v;
		}
		if (null !== ($v = $this->getTimingTiming())) {
			$out->{self::FIELD_TIMING_TIMING} = $v;
		}
		if (null !== ($v = $this->getTimingPeriod())) {
			$out->{self::FIELD_TIMING_PERIOD} = $v;
		}
		if (null !== ($v = $this->getTimingDateTime())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_TIMING_DATE_TIME} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRDateTime::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_TIMING_DATE_TIME_EXT} = $ext;
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
