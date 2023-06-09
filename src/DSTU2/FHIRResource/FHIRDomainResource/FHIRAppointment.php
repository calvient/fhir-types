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

use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAppointmentStatus;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentParticipant;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRExtension;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRId;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstant;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMeta;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRNarrative;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPositiveInt;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUnsignedInt;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri;
use Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource;
use Calvient\FhirTypes\DSTU2\PHPFHIRConstants;
use Calvient\FhirTypes\DSTU2\PHPFHIRContainedTypeInterface;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeInterface;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeMap;

/**
 * A booking of a healthcare event among patient(s), practitioner(s), related
 * person(s) and/or device(s) for a specific date/time. This may result in one or
 * more Encounter(s).
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRAppointment
 * @package \Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIRAppointment extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_APPOINTMENT;
	const FIELD_IDENTIFIER = 'identifier';
	const FIELD_STATUS = 'status';
	const FIELD_STATUS_EXT = '_status';
	const FIELD_TYPE = 'type';
	const FIELD_REASON = 'reason';
	const FIELD_PRIORITY = 'priority';
	const FIELD_PRIORITY_EXT = '_priority';
	const FIELD_DESCRIPTION = 'description';
	const FIELD_DESCRIPTION_EXT = '_description';
	const FIELD_START = 'start';
	const FIELD_START_EXT = '_start';
	const FIELD_END = 'end';
	const FIELD_END_EXT = '_end';
	const FIELD_MINUTES_DURATION = 'minutesDuration';
	const FIELD_MINUTES_DURATION_EXT = '_minutesDuration';
	const FIELD_SLOT = 'slot';
	const FIELD_COMMENT = 'comment';
	const FIELD_COMMENT_EXT = '_comment';
	const FIELD_PARTICIPANT = 'participant';

	/** @var string */
	private $_xmlns = '';

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * This records identifiers associated with this appointment concern that are
	 * defined by business processes and/or used to refer to it when a direct URL
	 * reference to the resource itself is not appropriate (e.g. in CDA documents, or
	 * in written / printed documentation).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier[]
	 */
	protected ?array $identifier = [];

	/**
	 * The free/busy status of an appointment.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The overall status of the Appointment. Each of the participants has their own
	 * participation status which indicates their involvement in the process, however
	 * this status indicates the shared status.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAppointmentStatus
	 */
	protected ?FHIRAppointmentStatus $status = null;

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The type of appointment that is being booked (This may also be associated with
	 * participants for location, and/or a HealthcareService).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	protected ?FHIRCodeableConcept $type = null;

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The reason that this appointment is being scheduled. This is more clinical than
	 * administrative.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	protected ?FHIRCodeableConcept $reason = null;

	/**
	 * An integer with a value that is not negative (e.g. >= 0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The priority of the appointment. Can be used to make informed decisions if
	 * needing to re-prioritize appointments. (The iCal Standard specifies as
	 * undefined, 1 as highest, 9 as lowest priority).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUnsignedInt
	 */
	protected ?FHIRUnsignedInt $priority = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The brief description of the appointment as would be shown on a subject line in
	 * a meeting request, or appointment list. Detailed or expanded information should
	 * be put in the comment field.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $description = null;

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for precisely observed times, typically system logs etc.,
	 * and not human-reported times - for them, see date and dateTime below. Time zone
	 * is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Date/Time that the appointment is to take place.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRInstantPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstant
	 */
	protected ?FHIRInstant $start = null;

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for precisely observed times, typically system logs etc.,
	 * and not human-reported times - for them, see date and dateTime below. Time zone
	 * is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Date/Time that the appointment is to conclude.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRInstantPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstant
	 */
	protected ?FHIRInstant $end = null;

	/**
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Number of minutes that the appointment is to take. This can be less than the
	 * duration between the start and end times (where actual time of appointment is
	 * only an estimate or is a planned appointment request).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPositiveInt
	 */
	protected ?FHIRPositiveInt $minutesDuration = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The slot that this appointment is filling. If provided then the schedule will
	 * not be provided as slots are not recursive, and the start/end values MUST be the
	 * same as from the slot.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	protected ?array $slot = [];

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Additional comments about the appointment.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $comment = null;

	/**
	 * A booking of a healthcare event among patient(s), practitioner(s), related
	 * person(s) and/or device(s) for a specific date/time. This may result in one or
	 * more Encounter(s).
	 *
	 * List of participants involved in the appointment.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentParticipant[]
	 */
	protected ?array $participant = [];

	/**
	 * Validation map for fields in type Appointment
	 * @var array
	 */
	private static array $_validationRules = [
		self::FIELD_PARTICIPANT => [
			PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
		],
	];

	/**
	 * FHIRAppointment Constructor
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
					'FHIRAppointment::_construct - $data expected to be null or array, %s seen',
					gettype($data),
				),
			);
		}
		parent::__construct($data);
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
		if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
			$value = $data[self::FIELD_STATUS] ?? null;
			$ext =
				isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])
					? $data[self::FIELD_STATUS_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRAppointmentStatus) {
					$this->setStatus($value);
				} elseif (is_array($value)) {
					$this->setStatus(new FHIRAppointmentStatus(array_merge($ext, $value)));
				} else {
					$this->setStatus(
						new FHIRAppointmentStatus(
							[FHIRAppointmentStatus::FIELD_VALUE => $value] + $ext,
						),
					);
				}
			} elseif ([] !== $ext) {
				$this->setStatus(new FHIRAppointmentStatus($ext));
			}
		}
		if (isset($data[self::FIELD_TYPE])) {
			if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
				$this->setType($data[self::FIELD_TYPE]);
			} else {
				$this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
			}
		}
		if (isset($data[self::FIELD_REASON])) {
			if ($data[self::FIELD_REASON] instanceof FHIRCodeableConcept) {
				$this->setReason($data[self::FIELD_REASON]);
			} else {
				$this->setReason(new FHIRCodeableConcept($data[self::FIELD_REASON]));
			}
		}
		if (isset($data[self::FIELD_PRIORITY]) || isset($data[self::FIELD_PRIORITY_EXT])) {
			$value = $data[self::FIELD_PRIORITY] ?? null;
			$ext =
				isset($data[self::FIELD_PRIORITY_EXT]) && is_array($data[self::FIELD_PRIORITY_EXT])
					? $data[self::FIELD_PRIORITY_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRUnsignedInt) {
					$this->setPriority($value);
				} elseif (is_array($value)) {
					$this->setPriority(new FHIRUnsignedInt(array_merge($ext, $value)));
				} else {
					$this->setPriority(
						new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setPriority(new FHIRUnsignedInt($ext));
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
		if (isset($data[self::FIELD_START]) || isset($data[self::FIELD_START_EXT])) {
			$value = $data[self::FIELD_START] ?? null;
			$ext =
				isset($data[self::FIELD_START_EXT]) && is_array($data[self::FIELD_START_EXT])
					? $data[self::FIELD_START_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRInstant) {
					$this->setStart($value);
				} elseif (is_array($value)) {
					$this->setStart(new FHIRInstant(array_merge($ext, $value)));
				} else {
					$this->setStart(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setStart(new FHIRInstant($ext));
			}
		}
		if (isset($data[self::FIELD_END]) || isset($data[self::FIELD_END_EXT])) {
			$value = $data[self::FIELD_END] ?? null;
			$ext =
				isset($data[self::FIELD_END_EXT]) && is_array($data[self::FIELD_END_EXT])
					? $data[self::FIELD_END_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRInstant) {
					$this->setEnd($value);
				} elseif (is_array($value)) {
					$this->setEnd(new FHIRInstant(array_merge($ext, $value)));
				} else {
					$this->setEnd(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setEnd(new FHIRInstant($ext));
			}
		}
		if (
			isset($data[self::FIELD_MINUTES_DURATION]) ||
			isset($data[self::FIELD_MINUTES_DURATION_EXT])
		) {
			$value = $data[self::FIELD_MINUTES_DURATION] ?? null;
			$ext =
				isset($data[self::FIELD_MINUTES_DURATION_EXT]) &&
				is_array($data[self::FIELD_MINUTES_DURATION_EXT])
					? $data[self::FIELD_MINUTES_DURATION_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRPositiveInt) {
					$this->setMinutesDuration($value);
				} elseif (is_array($value)) {
					$this->setMinutesDuration(new FHIRPositiveInt(array_merge($ext, $value)));
				} else {
					$this->setMinutesDuration(
						new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setMinutesDuration(new FHIRPositiveInt($ext));
			}
		}
		if (isset($data[self::FIELD_SLOT])) {
			if (is_array($data[self::FIELD_SLOT])) {
				foreach ($data[self::FIELD_SLOT] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRReference) {
						$this->addSlot($v);
					} else {
						$this->addSlot(new FHIRReference($v));
					}
				}
			} elseif ($data[self::FIELD_SLOT] instanceof FHIRReference) {
				$this->addSlot($data[self::FIELD_SLOT]);
			} else {
				$this->addSlot(new FHIRReference($data[self::FIELD_SLOT]));
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
					$this->setComment($value);
				} elseif (is_array($value)) {
					$this->setComment(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->setComment(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setComment(new FHIRString($ext));
			}
		}
		if (isset($data[self::FIELD_PARTICIPANT])) {
			if (is_array($data[self::FIELD_PARTICIPANT])) {
				foreach ($data[self::FIELD_PARTICIPANT] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRAppointmentParticipant) {
						$this->addParticipant($v);
					} else {
						$this->addParticipant(new FHIRAppointmentParticipant($v));
					}
				}
			} elseif ($data[self::FIELD_PARTICIPANT] instanceof FHIRAppointmentParticipant) {
				$this->addParticipant($data[self::FIELD_PARTICIPANT]);
			} else {
				$this->addParticipant(
					new FHIRAppointmentParticipant($data[self::FIELD_PARTICIPANT]),
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
		return "<Appointment{$xmlns}></Appointment>";
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
	 * This records identifiers associated with this appointment concern that are
	 * defined by business processes and/or used to refer to it when a direct URL
	 * reference to the resource itself is not appropriate (e.g. in CDA documents, or
	 * in written / printed documentation).
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
	 * This records identifiers associated with this appointment concern that are
	 * defined by business processes and/or used to refer to it when a direct URL
	 * reference to the resource itself is not appropriate (e.g. in CDA documents, or
	 * in written / printed documentation).
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
	 * This records identifiers associated with this appointment concern that are
	 * defined by business processes and/or used to refer to it when a direct URL
	 * reference to the resource itself is not appropriate (e.g. in CDA documents, or
	 * in written / printed documentation).
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
	 * The free/busy status of an appointment.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The overall status of the Appointment. Each of the participants has their own
	 * participation status which indicates their involvement in the process, however
	 * this status indicates the shared status.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAppointmentStatus
	 */
	public function getStatus(): ?FHIRAppointmentStatus
	{
		return $this->status;
	}

	/**
	 * The free/busy status of an appointment.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The overall status of the Appointment. Each of the participants has their own
	 * participation status which indicates their involvement in the process, however
	 * this status indicates the shared status.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAppointmentStatus $status
	 * @return static
	 */
	public function setStatus(?FHIRAppointmentStatus $status = null): object
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
	 * The type of appointment that is being booked (This may also be associated with
	 * participants for location, and/or a HealthcareService).
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
	 * The type of appointment that is being booked (This may also be associated with
	 * participants for location, and/or a HealthcareService).
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
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The reason that this appointment is being scheduled. This is more clinical than
	 * administrative.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	public function getReason(): ?FHIRCodeableConcept
	{
		return $this->reason;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The reason that this appointment is being scheduled. This is more clinical than
	 * administrative.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $reason
	 * @return static
	 */
	public function setReason(?FHIRCodeableConcept $reason = null): object
	{
		$this->_trackValueSet($this->reason, $reason);
		$this->reason = $reason;
		return $this;
	}

	/**
	 * An integer with a value that is not negative (e.g. >= 0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The priority of the appointment. Can be used to make informed decisions if
	 * needing to re-prioritize appointments. (The iCal Standard specifies as
	 * undefined, 1 as highest, 9 as lowest priority).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUnsignedInt
	 */
	public function getPriority(): ?FHIRUnsignedInt
	{
		return $this->priority;
	}

	/**
	 * An integer with a value that is not negative (e.g. >= 0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The priority of the appointment. Can be used to make informed decisions if
	 * needing to re-prioritize appointments. (The iCal Standard specifies as
	 * undefined, 1 as highest, 9 as lowest priority).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUnsignedInt $priority
	 * @return static
	 */
	public function setPriority($priority = null): object
	{
		if (null !== $priority && !($priority instanceof FHIRUnsignedInt)) {
			$priority = new FHIRUnsignedInt($priority);
		}
		$this->_trackValueSet($this->priority, $priority);
		$this->priority = $priority;
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The brief description of the appointment as would be shown on a subject line in
	 * a meeting request, or appointment list. Detailed or expanded information should
	 * be put in the comment field.
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
	 * The brief description of the appointment as would be shown on a subject line in
	 * a meeting request, or appointment list. Detailed or expanded information should
	 * be put in the comment field.
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
	 * An instant in time - known at least to the second
	 * Note: This is intended for precisely observed times, typically system logs etc.,
	 * and not human-reported times - for them, see date and dateTime below. Time zone
	 * is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Date/Time that the appointment is to take place.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRInstantPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstant
	 */
	public function getStart(): ?FHIRInstant
	{
		return $this->start;
	}

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for precisely observed times, typically system logs etc.,
	 * and not human-reported times - for them, see date and dateTime below. Time zone
	 * is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Date/Time that the appointment is to take place.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRInstantPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstant $start
	 * @return static
	 */
	public function setStart($start = null): object
	{
		if (null !== $start && !($start instanceof FHIRInstant)) {
			$start = new FHIRInstant($start);
		}
		$this->_trackValueSet($this->start, $start);
		$this->start = $start;
		return $this;
	}

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for precisely observed times, typically system logs etc.,
	 * and not human-reported times - for them, see date and dateTime below. Time zone
	 * is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Date/Time that the appointment is to conclude.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRInstantPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstant
	 */
	public function getEnd(): ?FHIRInstant
	{
		return $this->end;
	}

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for precisely observed times, typically system logs etc.,
	 * and not human-reported times - for them, see date and dateTime below. Time zone
	 * is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Date/Time that the appointment is to conclude.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRInstantPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstant $end
	 * @return static
	 */
	public function setEnd($end = null): object
	{
		if (null !== $end && !($end instanceof FHIRInstant)) {
			$end = new FHIRInstant($end);
		}
		$this->_trackValueSet($this->end, $end);
		$this->end = $end;
		return $this;
	}

	/**
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Number of minutes that the appointment is to take. This can be less than the
	 * duration between the start and end times (where actual time of appointment is
	 * only an estimate or is a planned appointment request).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPositiveInt
	 */
	public function getMinutesDuration(): ?FHIRPositiveInt
	{
		return $this->minutesDuration;
	}

	/**
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Number of minutes that the appointment is to take. This can be less than the
	 * duration between the start and end times (where actual time of appointment is
	 * only an estimate or is a planned appointment request).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPositiveInt $minutesDuration
	 * @return static
	 */
	public function setMinutesDuration($minutesDuration = null): object
	{
		if (null !== $minutesDuration && !($minutesDuration instanceof FHIRPositiveInt)) {
			$minutesDuration = new FHIRPositiveInt($minutesDuration);
		}
		$this->_trackValueSet($this->minutesDuration, $minutesDuration);
		$this->minutesDuration = $minutesDuration;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The slot that this appointment is filling. If provided then the schedule will
	 * not be provided as slots are not recursive, and the start/end values MUST be the
	 * same as from the slot.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	public function getSlot(): ?array
	{
		return $this->slot;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The slot that this appointment is filling. If provided then the schedule will
	 * not be provided as slots are not recursive, and the start/end values MUST be the
	 * same as from the slot.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $slot
	 * @return static
	 */
	public function addSlot(?FHIRReference $slot = null): object
	{
		$this->_trackValueAdded();
		$this->slot[] = $slot;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The slot that this appointment is filling. If provided then the schedule will
	 * not be provided as slots are not recursive, and the start/end values MUST be the
	 * same as from the slot.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[] $slot
	 * @return static
	 */
	public function setSlot(array $slot = []): object
	{
		if ([] !== $this->slot) {
			$this->_trackValuesRemoved(count($this->slot));
			$this->slot = [];
		}
		if ([] === $slot) {
			return $this;
		}
		foreach ($slot as $v) {
			if ($v instanceof FHIRReference) {
				$this->addSlot($v);
			} else {
				$this->addSlot(new FHIRReference($v));
			}
		}
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Additional comments about the appointment.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	public function getComment(): ?FHIRString
	{
		return $this->comment;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Additional comments about the appointment.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString $comment
	 * @return static
	 */
	public function setComment($comment = null): object
	{
		if (null !== $comment && !($comment instanceof FHIRString)) {
			$comment = new FHIRString($comment);
		}
		$this->_trackValueSet($this->comment, $comment);
		$this->comment = $comment;
		return $this;
	}

	/**
	 * A booking of a healthcare event among patient(s), practitioner(s), related
	 * person(s) and/or device(s) for a specific date/time. This may result in one or
	 * more Encounter(s).
	 *
	 * List of participants involved in the appointment.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentParticipant[]
	 */
	public function getParticipant(): ?array
	{
		return $this->participant;
	}

	/**
	 * A booking of a healthcare event among patient(s), practitioner(s), related
	 * person(s) and/or device(s) for a specific date/time. This may result in one or
	 * more Encounter(s).
	 *
	 * List of participants involved in the appointment.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentParticipant $participant
	 * @return static
	 */
	public function addParticipant(?FHIRAppointmentParticipant $participant = null): object
	{
		$this->_trackValueAdded();
		$this->participant[] = $participant;
		return $this;
	}

	/**
	 * A booking of a healthcare event among patient(s), practitioner(s), related
	 * person(s) and/or device(s) for a specific date/time. This may result in one or
	 * more Encounter(s).
	 *
	 * List of participants involved in the appointment.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentParticipant[] $participant
	 * @return static
	 */
	public function setParticipant(array $participant = []): object
	{
		if ([] !== $this->participant) {
			$this->_trackValuesRemoved(count($this->participant));
			$this->participant = [];
		}
		if ([] === $participant) {
			return $this;
		}
		foreach ($participant as $v) {
			if ($v instanceof FHIRAppointmentParticipant) {
				$this->addParticipant($v);
			} else {
				$this->addParticipant(new FHIRAppointmentParticipant($v));
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
		if ([] !== ($vs = $this->getIdentifier())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getStatus())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_STATUS] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getType())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_TYPE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getReason())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_REASON] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPriority())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PRIORITY] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDescription())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DESCRIPTION] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getStart())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_START] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getEnd())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_END] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMinutesDuration())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MINUTES_DURATION] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getSlot())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_SLOT, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getComment())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_COMMENT] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getParticipant())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_PARTICIPANT, $i)] = $fieldErrs;
				}
			}
		}
		if (isset($validationRules[self::FIELD_IDENTIFIER])) {
			$v = $this->getIdentifier();
			foreach ($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_APPOINTMENT,
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
					PHPFHIRConstants::TYPE_NAME_APPOINTMENT,
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
		if (isset($validationRules[self::FIELD_TYPE])) {
			$v = $this->getType();
			foreach ($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_APPOINTMENT,
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
		if (isset($validationRules[self::FIELD_REASON])) {
			$v = $this->getReason();
			foreach ($validationRules[self::FIELD_REASON] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_APPOINTMENT,
					self::FIELD_REASON,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_REASON])) {
						$errs[self::FIELD_REASON] = [];
					}
					$errs[self::FIELD_REASON][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PRIORITY])) {
			$v = $this->getPriority();
			foreach ($validationRules[self::FIELD_PRIORITY] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_APPOINTMENT,
					self::FIELD_PRIORITY,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PRIORITY])) {
						$errs[self::FIELD_PRIORITY] = [];
					}
					$errs[self::FIELD_PRIORITY][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DESCRIPTION])) {
			$v = $this->getDescription();
			foreach ($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_APPOINTMENT,
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
		if (isset($validationRules[self::FIELD_START])) {
			$v = $this->getStart();
			foreach ($validationRules[self::FIELD_START] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_APPOINTMENT,
					self::FIELD_START,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_START])) {
						$errs[self::FIELD_START] = [];
					}
					$errs[self::FIELD_START][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_END])) {
			$v = $this->getEnd();
			foreach ($validationRules[self::FIELD_END] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_APPOINTMENT,
					self::FIELD_END,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_END])) {
						$errs[self::FIELD_END] = [];
					}
					$errs[self::FIELD_END][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MINUTES_DURATION])) {
			$v = $this->getMinutesDuration();
			foreach ($validationRules[self::FIELD_MINUTES_DURATION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_APPOINTMENT,
					self::FIELD_MINUTES_DURATION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MINUTES_DURATION])) {
						$errs[self::FIELD_MINUTES_DURATION] = [];
					}
					$errs[self::FIELD_MINUTES_DURATION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_SLOT])) {
			$v = $this->getSlot();
			foreach ($validationRules[self::FIELD_SLOT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_APPOINTMENT,
					self::FIELD_SLOT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_SLOT])) {
						$errs[self::FIELD_SLOT] = [];
					}
					$errs[self::FIELD_SLOT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_COMMENT])) {
			$v = $this->getComment();
			foreach ($validationRules[self::FIELD_COMMENT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_APPOINTMENT,
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
		if (isset($validationRules[self::FIELD_PARTICIPANT])) {
			$v = $this->getParticipant();
			foreach ($validationRules[self::FIELD_PARTICIPANT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_APPOINTMENT,
					self::FIELD_PARTICIPANT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PARTICIPANT])) {
						$errs[self::FIELD_PARTICIPANT] = [];
					}
					$errs[self::FIELD_PARTICIPANT][$rule] = $err;
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRAppointment $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRAppointment
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
						'FHIRAppointment::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRAppointment::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRAppointment(null);
		} elseif (!is_object($type) || !($type instanceof FHIRAppointment)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRAppointment::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRAppointment or null, %s seen.',
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
				$type->addIdentifier(FHIRIdentifier::xmlUnserialize($n));
			} elseif (self::FIELD_STATUS === $n->nodeName) {
				$type->setStatus(FHIRAppointmentStatus::xmlUnserialize($n));
			} elseif (self::FIELD_TYPE === $n->nodeName) {
				$type->setType(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_REASON === $n->nodeName) {
				$type->setReason(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_PRIORITY === $n->nodeName) {
				$type->setPriority(FHIRUnsignedInt::xmlUnserialize($n));
			} elseif (self::FIELD_DESCRIPTION === $n->nodeName) {
				$type->setDescription(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_START === $n->nodeName) {
				$type->setStart(FHIRInstant::xmlUnserialize($n));
			} elseif (self::FIELD_END === $n->nodeName) {
				$type->setEnd(FHIRInstant::xmlUnserialize($n));
			} elseif (self::FIELD_MINUTES_DURATION === $n->nodeName) {
				$type->setMinutesDuration(FHIRPositiveInt::xmlUnserialize($n));
			} elseif (self::FIELD_SLOT === $n->nodeName) {
				$type->addSlot(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_COMMENT === $n->nodeName) {
				$type->setComment(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_PARTICIPANT === $n->nodeName) {
				$type->addParticipant(FHIRAppointmentParticipant::xmlUnserialize($n));
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
		$n = $element->attributes->getNamedItem(self::FIELD_PRIORITY);
		if (null !== $n) {
			$pt = $type->getPriority();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setPriority($n->nodeValue);
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
		$n = $element->attributes->getNamedItem(self::FIELD_START);
		if (null !== $n) {
			$pt = $type->getStart();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setStart($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_END);
		if (null !== $n) {
			$pt = $type->getEnd();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setEnd($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_MINUTES_DURATION);
		if (null !== $n) {
			$pt = $type->getMinutesDuration();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMinutesDuration($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_COMMENT);
		if (null !== $n) {
			$pt = $type->getComment();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setComment($n->nodeValue);
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
		if (null !== ($v = $this->getStatus())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_STATUS);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getType())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_TYPE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getReason())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_REASON);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPriority())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PRIORITY);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDescription())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DESCRIPTION);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getStart())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_START);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getEnd())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_END);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMinutesDuration())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MINUTES_DURATION);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getSlot())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_SLOT);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if (null !== ($v = $this->getComment())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_COMMENT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getParticipant())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_PARTICIPANT);
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
		if ([] !== ($vs = $this->getIdentifier())) {
			$out->{self::FIELD_IDENTIFIER} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_IDENTIFIER}[] = $v;
			}
		}
		if (null !== ($v = $this->getStatus())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_STATUS} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRAppointmentStatus::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_STATUS_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getType())) {
			$out->{self::FIELD_TYPE} = $v;
		}
		if (null !== ($v = $this->getReason())) {
			$out->{self::FIELD_REASON} = $v;
		}
		if (null !== ($v = $this->getPriority())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_PRIORITY} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRUnsignedInt::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_PRIORITY_EXT} = $ext;
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
		if (null !== ($v = $this->getStart())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_START} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRInstant::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_START_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getEnd())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_END} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRInstant::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_END_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getMinutesDuration())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_MINUTES_DURATION} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRPositiveInt::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_MINUTES_DURATION_EXT} = $ext;
			}
		}
		if ([] !== ($vs = $this->getSlot())) {
			$out->{self::FIELD_SLOT} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_SLOT}[] = $v;
			}
		}
		if (null !== ($v = $this->getComment())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_COMMENT} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRString::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_COMMENT_EXT} = $ext;
			}
		}
		if ([] !== ($vs = $this->getParticipant())) {
			$out->{self::FIELD_PARTICIPANT} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_PARTICIPANT}[] = $v;
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
