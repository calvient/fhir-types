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

use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterLocation;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterParticipant;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterStatusHistory;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIREncounterClass;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIREncounterState;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRExtension;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRId;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMeta;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRNarrative;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRDuration;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri;
use Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource;
use Calvient\FhirTypes\DSTU2\PHPFHIRConstants;
use Calvient\FhirTypes\DSTU2\PHPFHIRContainedTypeInterface;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeInterface;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeMap;

/**
 * An interaction between a patient and healthcare provider(s) for the purpose of
 * providing healthcare service(s) or assessing the health status of a patient.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIREncounter
 * @package \Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIREncounter extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_ENCOUNTER;
	const FIELD_IDENTIFIER = 'identifier';
	const FIELD_STATUS = 'status';
	const FIELD_STATUS_EXT = '_status';
	const FIELD_STATUS_HISTORY = 'statusHistory';
	const FIELD_CLASS = 'class';
	const FIELD_CLASS_EXT = '_class';
	const FIELD_TYPE = 'type';
	const FIELD_PRIORITY = 'priority';
	const FIELD_PATIENT = 'patient';
	const FIELD_EPISODE_OF_CARE = 'episodeOfCare';
	const FIELD_INCOMING_REFERRAL = 'incomingReferral';
	const FIELD_PARTICIPANT = 'participant';
	const FIELD_APPOINTMENT = 'appointment';
	const FIELD_PERIOD = 'period';
	const FIELD_LENGTH = 'length';
	const FIELD_REASON = 'reason';
	const FIELD_INDICATION = 'indication';
	const FIELD_HOSPITALIZATION = 'hospitalization';
	const FIELD_LOCATION = 'location';
	const FIELD_SERVICE_PROVIDER = 'serviceProvider';
	const FIELD_PART_OF = 'partOf';

	/** @var string */
	private $_xmlns = '';

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifier(s) by which this encounter is known.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier[]
	 */
	protected ?array $identifier = [];

	/**
	 * Current state of the encounter
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * planned | arrived | in-progress | onleave | finished | cancelled.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIREncounterState
	 */
	protected ?FHIREncounterState $status = null;

	/**
	 * An interaction between a patient and healthcare provider(s) for the purpose of
	 * providing healthcare service(s) or assessing the health status of a patient.
	 *
	 * The status history permits the encounter resource to contain the status history
	 * without needing to read through the historical versions of the resource, or even
	 * have the server store them.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterStatusHistory[]
	 */
	protected ?array $statusHistory = [];

	/**
	 * Classification of the encounter
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * inpatient | outpatient | ambulatory | emergency +.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIREncounterClass
	 */
	protected ?FHIREncounterClass $class = null;

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specific type of encounter (e.g. e-mail consultation, surgical day-care, skilled
	 * nursing, rehabilitation).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept[]
	 */
	protected ?array $type = [];

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Indicates the urgency of the encounter.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	protected ?FHIRCodeableConcept $priority = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The patient present at the encounter.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $patient = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Where a specific encounter should be classified as a part of a specific
	 * episode(s) of care this field should be used. This association can facilitate
	 * grouping of related encounters together for a specific purpose, such as
	 * government reporting, issue tracking, association via a common problem. The
	 * association is recorded on the encounter as these are typically created after
	 * the episode of care, and grouped on entry rather than editing the episode of
	 * care to append another encounter to it (the episode of care could span years).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	protected ?array $episodeOfCare = [];

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The referral request this encounter satisfies (incoming referral).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	protected ?array $incomingReferral = [];

	/**
	 * An interaction between a patient and healthcare provider(s) for the purpose of
	 * providing healthcare service(s) or assessing the health status of a patient.
	 *
	 * The list of people responsible for providing the service.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterParticipant[]
	 */
	protected ?array $participant = [];

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The appointment that scheduled this encounter.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $appointment = null;

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The start and end time of the encounter.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod
	 */
	protected ?FHIRPeriod $period = null;

	/**
	 * Quantity of time the encounter lasted. This excludes the time during leaves of
	 * absence.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRDuration
	 */
	protected ?FHIRDuration $length = null;

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Reason the encounter takes place, expressed as a code. For admissions, this can
	 * be used for a coded admission diagnosis.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept[]
	 */
	protected ?array $reason = [];

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Reason the encounter takes place, as specified using information from another
	 * resource. For admissions, this is the admission diagnosis. The indication will
	 * typically be a Condition (with other resources referenced in the
	 * evidence.detail), or a Procedure.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	protected ?array $indication = [];

	/**
	 * An interaction between a patient and healthcare provider(s) for the purpose of
	 * providing healthcare service(s) or assessing the health status of a patient.
	 *
	 * Details about the admission to a healthcare service.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization
	 */
	protected ?FHIREncounterHospitalization $hospitalization = null;

	/**
	 * An interaction between a patient and healthcare provider(s) for the purpose of
	 * providing healthcare service(s) or assessing the health status of a patient.
	 *
	 * List of locations where the patient has been during this encounter.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterLocation[]
	 */
	protected ?array $location = [];

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * An organization that is in charge of maintaining the information of this
	 * Encounter (e.g. who maintains the report or the master service catalog item,
	 * etc.). This MAY be the same as the organization on the Patient record, however
	 * it could be different. This MAY not be not the Service Delivery Location's
	 * Organization.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $serviceProvider = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Another Encounter of which this encounter is a part of (administratively or in
	 * time).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $partOf = null;

	/**
	 * Validation map for fields in type Encounter
	 * @var array
	 */
	private static array $_validationRules = [];

	/**
	 * FHIREncounter Constructor
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
					'FHIREncounter::_construct - $data expected to be null or array, %s seen',
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
				if ($value instanceof FHIREncounterState) {
					$this->setStatus($value);
				} elseif (is_array($value)) {
					$this->setStatus(new FHIREncounterState(array_merge($ext, $value)));
				} else {
					$this->setStatus(
						new FHIREncounterState([FHIREncounterState::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setStatus(new FHIREncounterState($ext));
			}
		}
		if (isset($data[self::FIELD_STATUS_HISTORY])) {
			if (is_array($data[self::FIELD_STATUS_HISTORY])) {
				foreach ($data[self::FIELD_STATUS_HISTORY] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIREncounterStatusHistory) {
						$this->addStatusHistory($v);
					} else {
						$this->addStatusHistory(new FHIREncounterStatusHistory($v));
					}
				}
			} elseif ($data[self::FIELD_STATUS_HISTORY] instanceof FHIREncounterStatusHistory) {
				$this->addStatusHistory($data[self::FIELD_STATUS_HISTORY]);
			} else {
				$this->addStatusHistory(
					new FHIREncounterStatusHistory($data[self::FIELD_STATUS_HISTORY]),
				);
			}
		}
		if (isset($data[self::FIELD_CLASS]) || isset($data[self::FIELD_CLASS_EXT])) {
			$value = $data[self::FIELD_CLASS] ?? null;
			$ext =
				isset($data[self::FIELD_CLASS_EXT]) && is_array($data[self::FIELD_CLASS_EXT])
					? $data[self::FIELD_CLASS_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIREncounterClass) {
					$this->setClass($value);
				} elseif (is_array($value)) {
					$this->setClass(new FHIREncounterClass(array_merge($ext, $value)));
				} else {
					$this->setClass(
						new FHIREncounterClass([FHIREncounterClass::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setClass(new FHIREncounterClass($ext));
			}
		}
		if (isset($data[self::FIELD_TYPE])) {
			if (is_array($data[self::FIELD_TYPE])) {
				foreach ($data[self::FIELD_TYPE] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRCodeableConcept) {
						$this->addType($v);
					} else {
						$this->addType(new FHIRCodeableConcept($v));
					}
				}
			} elseif ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
				$this->addType($data[self::FIELD_TYPE]);
			} else {
				$this->addType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
			}
		}
		if (isset($data[self::FIELD_PRIORITY])) {
			if ($data[self::FIELD_PRIORITY] instanceof FHIRCodeableConcept) {
				$this->setPriority($data[self::FIELD_PRIORITY]);
			} else {
				$this->setPriority(new FHIRCodeableConcept($data[self::FIELD_PRIORITY]));
			}
		}
		if (isset($data[self::FIELD_PATIENT])) {
			if ($data[self::FIELD_PATIENT] instanceof FHIRReference) {
				$this->setPatient($data[self::FIELD_PATIENT]);
			} else {
				$this->setPatient(new FHIRReference($data[self::FIELD_PATIENT]));
			}
		}
		if (isset($data[self::FIELD_EPISODE_OF_CARE])) {
			if (is_array($data[self::FIELD_EPISODE_OF_CARE])) {
				foreach ($data[self::FIELD_EPISODE_OF_CARE] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRReference) {
						$this->addEpisodeOfCare($v);
					} else {
						$this->addEpisodeOfCare(new FHIRReference($v));
					}
				}
			} elseif ($data[self::FIELD_EPISODE_OF_CARE] instanceof FHIRReference) {
				$this->addEpisodeOfCare($data[self::FIELD_EPISODE_OF_CARE]);
			} else {
				$this->addEpisodeOfCare(new FHIRReference($data[self::FIELD_EPISODE_OF_CARE]));
			}
		}
		if (isset($data[self::FIELD_INCOMING_REFERRAL])) {
			if (is_array($data[self::FIELD_INCOMING_REFERRAL])) {
				foreach ($data[self::FIELD_INCOMING_REFERRAL] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRReference) {
						$this->addIncomingReferral($v);
					} else {
						$this->addIncomingReferral(new FHIRReference($v));
					}
				}
			} elseif ($data[self::FIELD_INCOMING_REFERRAL] instanceof FHIRReference) {
				$this->addIncomingReferral($data[self::FIELD_INCOMING_REFERRAL]);
			} else {
				$this->addIncomingReferral(new FHIRReference($data[self::FIELD_INCOMING_REFERRAL]));
			}
		}
		if (isset($data[self::FIELD_PARTICIPANT])) {
			if (is_array($data[self::FIELD_PARTICIPANT])) {
				foreach ($data[self::FIELD_PARTICIPANT] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIREncounterParticipant) {
						$this->addParticipant($v);
					} else {
						$this->addParticipant(new FHIREncounterParticipant($v));
					}
				}
			} elseif ($data[self::FIELD_PARTICIPANT] instanceof FHIREncounterParticipant) {
				$this->addParticipant($data[self::FIELD_PARTICIPANT]);
			} else {
				$this->addParticipant(new FHIREncounterParticipant($data[self::FIELD_PARTICIPANT]));
			}
		}
		if (isset($data[self::FIELD_APPOINTMENT])) {
			if ($data[self::FIELD_APPOINTMENT] instanceof FHIRReference) {
				$this->setAppointment($data[self::FIELD_APPOINTMENT]);
			} else {
				$this->setAppointment(new FHIRReference($data[self::FIELD_APPOINTMENT]));
			}
		}
		if (isset($data[self::FIELD_PERIOD])) {
			if ($data[self::FIELD_PERIOD] instanceof FHIRPeriod) {
				$this->setPeriod($data[self::FIELD_PERIOD]);
			} else {
				$this->setPeriod(new FHIRPeriod($data[self::FIELD_PERIOD]));
			}
		}
		if (isset($data[self::FIELD_LENGTH])) {
			if ($data[self::FIELD_LENGTH] instanceof FHIRDuration) {
				$this->setLength($data[self::FIELD_LENGTH]);
			} else {
				$this->setLength(new FHIRDuration($data[self::FIELD_LENGTH]));
			}
		}
		if (isset($data[self::FIELD_REASON])) {
			if (is_array($data[self::FIELD_REASON])) {
				foreach ($data[self::FIELD_REASON] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRCodeableConcept) {
						$this->addReason($v);
					} else {
						$this->addReason(new FHIRCodeableConcept($v));
					}
				}
			} elseif ($data[self::FIELD_REASON] instanceof FHIRCodeableConcept) {
				$this->addReason($data[self::FIELD_REASON]);
			} else {
				$this->addReason(new FHIRCodeableConcept($data[self::FIELD_REASON]));
			}
		}
		if (isset($data[self::FIELD_INDICATION])) {
			if (is_array($data[self::FIELD_INDICATION])) {
				foreach ($data[self::FIELD_INDICATION] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRReference) {
						$this->addIndication($v);
					} else {
						$this->addIndication(new FHIRReference($v));
					}
				}
			} elseif ($data[self::FIELD_INDICATION] instanceof FHIRReference) {
				$this->addIndication($data[self::FIELD_INDICATION]);
			} else {
				$this->addIndication(new FHIRReference($data[self::FIELD_INDICATION]));
			}
		}
		if (isset($data[self::FIELD_HOSPITALIZATION])) {
			if ($data[self::FIELD_HOSPITALIZATION] instanceof FHIREncounterHospitalization) {
				$this->setHospitalization($data[self::FIELD_HOSPITALIZATION]);
			} else {
				$this->setHospitalization(
					new FHIREncounterHospitalization($data[self::FIELD_HOSPITALIZATION]),
				);
			}
		}
		if (isset($data[self::FIELD_LOCATION])) {
			if (is_array($data[self::FIELD_LOCATION])) {
				foreach ($data[self::FIELD_LOCATION] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIREncounterLocation) {
						$this->addLocation($v);
					} else {
						$this->addLocation(new FHIREncounterLocation($v));
					}
				}
			} elseif ($data[self::FIELD_LOCATION] instanceof FHIREncounterLocation) {
				$this->addLocation($data[self::FIELD_LOCATION]);
			} else {
				$this->addLocation(new FHIREncounterLocation($data[self::FIELD_LOCATION]));
			}
		}
		if (isset($data[self::FIELD_SERVICE_PROVIDER])) {
			if ($data[self::FIELD_SERVICE_PROVIDER] instanceof FHIRReference) {
				$this->setServiceProvider($data[self::FIELD_SERVICE_PROVIDER]);
			} else {
				$this->setServiceProvider(new FHIRReference($data[self::FIELD_SERVICE_PROVIDER]));
			}
		}
		if (isset($data[self::FIELD_PART_OF])) {
			if ($data[self::FIELD_PART_OF] instanceof FHIRReference) {
				$this->setPartOf($data[self::FIELD_PART_OF]);
			} else {
				$this->setPartOf(new FHIRReference($data[self::FIELD_PART_OF]));
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
		return "<Encounter{$xmlns}></Encounter>";
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
	 * Identifier(s) by which this encounter is known.
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
	 * Identifier(s) by which this encounter is known.
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
	 * Identifier(s) by which this encounter is known.
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
	 * Current state of the encounter
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * planned | arrived | in-progress | onleave | finished | cancelled.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIREncounterState
	 */
	public function getStatus(): ?FHIREncounterState
	{
		return $this->status;
	}

	/**
	 * Current state of the encounter
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * planned | arrived | in-progress | onleave | finished | cancelled.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIREncounterState $status
	 * @return static
	 */
	public function setStatus(?FHIREncounterState $status = null): object
	{
		$this->_trackValueSet($this->status, $status);
		$this->status = $status;
		return $this;
	}

	/**
	 * An interaction between a patient and healthcare provider(s) for the purpose of
	 * providing healthcare service(s) or assessing the health status of a patient.
	 *
	 * The status history permits the encounter resource to contain the status history
	 * without needing to read through the historical versions of the resource, or even
	 * have the server store them.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterStatusHistory[]
	 */
	public function getStatusHistory(): ?array
	{
		return $this->statusHistory;
	}

	/**
	 * An interaction between a patient and healthcare provider(s) for the purpose of
	 * providing healthcare service(s) or assessing the health status of a patient.
	 *
	 * The status history permits the encounter resource to contain the status history
	 * without needing to read through the historical versions of the resource, or even
	 * have the server store them.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterStatusHistory $statusHistory
	 * @return static
	 */
	public function addStatusHistory(?FHIREncounterStatusHistory $statusHistory = null): object
	{
		$this->_trackValueAdded();
		$this->statusHistory[] = $statusHistory;
		return $this;
	}

	/**
	 * An interaction between a patient and healthcare provider(s) for the purpose of
	 * providing healthcare service(s) or assessing the health status of a patient.
	 *
	 * The status history permits the encounter resource to contain the status history
	 * without needing to read through the historical versions of the resource, or even
	 * have the server store them.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterStatusHistory[] $statusHistory
	 * @return static
	 */
	public function setStatusHistory(array $statusHistory = []): object
	{
		if ([] !== $this->statusHistory) {
			$this->_trackValuesRemoved(count($this->statusHistory));
			$this->statusHistory = [];
		}
		if ([] === $statusHistory) {
			return $this;
		}
		foreach ($statusHistory as $v) {
			if ($v instanceof FHIREncounterStatusHistory) {
				$this->addStatusHistory($v);
			} else {
				$this->addStatusHistory(new FHIREncounterStatusHistory($v));
			}
		}
		return $this;
	}

	/**
	 * Classification of the encounter
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * inpatient | outpatient | ambulatory | emergency +.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIREncounterClass
	 */
	public function getClass(): ?FHIREncounterClass
	{
		return $this->class;
	}

	/**
	 * Classification of the encounter
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * inpatient | outpatient | ambulatory | emergency +.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIREncounterClass $class
	 * @return static
	 */
	public function setClass(?FHIREncounterClass $class = null): object
	{
		$this->_trackValueSet($this->class, $class);
		$this->class = $class;
		return $this;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specific type of encounter (e.g. e-mail consultation, surgical day-care, skilled
	 * nursing, rehabilitation).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept[]
	 */
	public function getType(): ?array
	{
		return $this->type;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specific type of encounter (e.g. e-mail consultation, surgical day-care, skilled
	 * nursing, rehabilitation).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $type
	 * @return static
	 */
	public function addType(?FHIRCodeableConcept $type = null): object
	{
		$this->_trackValueAdded();
		$this->type[] = $type;
		return $this;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specific type of encounter (e.g. e-mail consultation, surgical day-care, skilled
	 * nursing, rehabilitation).
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept[] $type
	 * @return static
	 */
	public function setType(array $type = []): object
	{
		if ([] !== $this->type) {
			$this->_trackValuesRemoved(count($this->type));
			$this->type = [];
		}
		if ([] === $type) {
			return $this;
		}
		foreach ($type as $v) {
			if ($v instanceof FHIRCodeableConcept) {
				$this->addType($v);
			} else {
				$this->addType(new FHIRCodeableConcept($v));
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
	 * Indicates the urgency of the encounter.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	public function getPriority(): ?FHIRCodeableConcept
	{
		return $this->priority;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Indicates the urgency of the encounter.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $priority
	 * @return static
	 */
	public function setPriority(?FHIRCodeableConcept $priority = null): object
	{
		$this->_trackValueSet($this->priority, $priority);
		$this->priority = $priority;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The patient present at the encounter.
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
	 * The patient present at the encounter.
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
	 * Where a specific encounter should be classified as a part of a specific
	 * episode(s) of care this field should be used. This association can facilitate
	 * grouping of related encounters together for a specific purpose, such as
	 * government reporting, issue tracking, association via a common problem. The
	 * association is recorded on the encounter as these are typically created after
	 * the episode of care, and grouped on entry rather than editing the episode of
	 * care to append another encounter to it (the episode of care could span years).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	public function getEpisodeOfCare(): ?array
	{
		return $this->episodeOfCare;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Where a specific encounter should be classified as a part of a specific
	 * episode(s) of care this field should be used. This association can facilitate
	 * grouping of related encounters together for a specific purpose, such as
	 * government reporting, issue tracking, association via a common problem. The
	 * association is recorded on the encounter as these are typically created after
	 * the episode of care, and grouped on entry rather than editing the episode of
	 * care to append another encounter to it (the episode of care could span years).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $episodeOfCare
	 * @return static
	 */
	public function addEpisodeOfCare(?FHIRReference $episodeOfCare = null): object
	{
		$this->_trackValueAdded();
		$this->episodeOfCare[] = $episodeOfCare;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Where a specific encounter should be classified as a part of a specific
	 * episode(s) of care this field should be used. This association can facilitate
	 * grouping of related encounters together for a specific purpose, such as
	 * government reporting, issue tracking, association via a common problem. The
	 * association is recorded on the encounter as these are typically created after
	 * the episode of care, and grouped on entry rather than editing the episode of
	 * care to append another encounter to it (the episode of care could span years).
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[] $episodeOfCare
	 * @return static
	 */
	public function setEpisodeOfCare(array $episodeOfCare = []): object
	{
		if ([] !== $this->episodeOfCare) {
			$this->_trackValuesRemoved(count($this->episodeOfCare));
			$this->episodeOfCare = [];
		}
		if ([] === $episodeOfCare) {
			return $this;
		}
		foreach ($episodeOfCare as $v) {
			if ($v instanceof FHIRReference) {
				$this->addEpisodeOfCare($v);
			} else {
				$this->addEpisodeOfCare(new FHIRReference($v));
			}
		}
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The referral request this encounter satisfies (incoming referral).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	public function getIncomingReferral(): ?array
	{
		return $this->incomingReferral;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The referral request this encounter satisfies (incoming referral).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $incomingReferral
	 * @return static
	 */
	public function addIncomingReferral(?FHIRReference $incomingReferral = null): object
	{
		$this->_trackValueAdded();
		$this->incomingReferral[] = $incomingReferral;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The referral request this encounter satisfies (incoming referral).
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[] $incomingReferral
	 * @return static
	 */
	public function setIncomingReferral(array $incomingReferral = []): object
	{
		if ([] !== $this->incomingReferral) {
			$this->_trackValuesRemoved(count($this->incomingReferral));
			$this->incomingReferral = [];
		}
		if ([] === $incomingReferral) {
			return $this;
		}
		foreach ($incomingReferral as $v) {
			if ($v instanceof FHIRReference) {
				$this->addIncomingReferral($v);
			} else {
				$this->addIncomingReferral(new FHIRReference($v));
			}
		}
		return $this;
	}

	/**
	 * An interaction between a patient and healthcare provider(s) for the purpose of
	 * providing healthcare service(s) or assessing the health status of a patient.
	 *
	 * The list of people responsible for providing the service.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterParticipant[]
	 */
	public function getParticipant(): ?array
	{
		return $this->participant;
	}

	/**
	 * An interaction between a patient and healthcare provider(s) for the purpose of
	 * providing healthcare service(s) or assessing the health status of a patient.
	 *
	 * The list of people responsible for providing the service.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterParticipant $participant
	 * @return static
	 */
	public function addParticipant(?FHIREncounterParticipant $participant = null): object
	{
		$this->_trackValueAdded();
		$this->participant[] = $participant;
		return $this;
	}

	/**
	 * An interaction between a patient and healthcare provider(s) for the purpose of
	 * providing healthcare service(s) or assessing the health status of a patient.
	 *
	 * The list of people responsible for providing the service.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterParticipant[] $participant
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
			if ($v instanceof FHIREncounterParticipant) {
				$this->addParticipant($v);
			} else {
				$this->addParticipant(new FHIREncounterParticipant($v));
			}
		}
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The appointment that scheduled this encounter.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getAppointment(): ?FHIRReference
	{
		return $this->appointment;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The appointment that scheduled this encounter.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $appointment
	 * @return static
	 */
	public function setAppointment(?FHIRReference $appointment = null): object
	{
		$this->_trackValueSet($this->appointment, $appointment);
		$this->appointment = $appointment;
		return $this;
	}

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The start and end time of the encounter.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod
	 */
	public function getPeriod(): ?FHIRPeriod
	{
		return $this->period;
	}

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The start and end time of the encounter.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod $period
	 * @return static
	 */
	public function setPeriod(?FHIRPeriod $period = null): object
	{
		$this->_trackValueSet($this->period, $period);
		$this->period = $period;
		return $this;
	}

	/**
	 * Quantity of time the encounter lasted. This excludes the time during leaves of
	 * absence.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRDuration
	 */
	public function getLength(): ?FHIRDuration
	{
		return $this->length;
	}

	/**
	 * Quantity of time the encounter lasted. This excludes the time during leaves of
	 * absence.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRDuration $length
	 * @return static
	 */
	public function setLength(?FHIRDuration $length = null): object
	{
		$this->_trackValueSet($this->length, $length);
		$this->length = $length;
		return $this;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Reason the encounter takes place, expressed as a code. For admissions, this can
	 * be used for a coded admission diagnosis.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept[]
	 */
	public function getReason(): ?array
	{
		return $this->reason;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Reason the encounter takes place, expressed as a code. For admissions, this can
	 * be used for a coded admission diagnosis.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $reason
	 * @return static
	 */
	public function addReason(?FHIRCodeableConcept $reason = null): object
	{
		$this->_trackValueAdded();
		$this->reason[] = $reason;
		return $this;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Reason the encounter takes place, expressed as a code. For admissions, this can
	 * be used for a coded admission diagnosis.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept[] $reason
	 * @return static
	 */
	public function setReason(array $reason = []): object
	{
		if ([] !== $this->reason) {
			$this->_trackValuesRemoved(count($this->reason));
			$this->reason = [];
		}
		if ([] === $reason) {
			return $this;
		}
		foreach ($reason as $v) {
			if ($v instanceof FHIRCodeableConcept) {
				$this->addReason($v);
			} else {
				$this->addReason(new FHIRCodeableConcept($v));
			}
		}
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Reason the encounter takes place, as specified using information from another
	 * resource. For admissions, this is the admission diagnosis. The indication will
	 * typically be a Condition (with other resources referenced in the
	 * evidence.detail), or a Procedure.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	public function getIndication(): ?array
	{
		return $this->indication;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Reason the encounter takes place, as specified using information from another
	 * resource. For admissions, this is the admission diagnosis. The indication will
	 * typically be a Condition (with other resources referenced in the
	 * evidence.detail), or a Procedure.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $indication
	 * @return static
	 */
	public function addIndication(?FHIRReference $indication = null): object
	{
		$this->_trackValueAdded();
		$this->indication[] = $indication;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Reason the encounter takes place, as specified using information from another
	 * resource. For admissions, this is the admission diagnosis. The indication will
	 * typically be a Condition (with other resources referenced in the
	 * evidence.detail), or a Procedure.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[] $indication
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
			if ($v instanceof FHIRReference) {
				$this->addIndication($v);
			} else {
				$this->addIndication(new FHIRReference($v));
			}
		}
		return $this;
	}

	/**
	 * An interaction between a patient and healthcare provider(s) for the purpose of
	 * providing healthcare service(s) or assessing the health status of a patient.
	 *
	 * Details about the admission to a healthcare service.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization
	 */
	public function getHospitalization(): ?FHIREncounterHospitalization
	{
		return $this->hospitalization;
	}

	/**
	 * An interaction between a patient and healthcare provider(s) for the purpose of
	 * providing healthcare service(s) or assessing the health status of a patient.
	 *
	 * Details about the admission to a healthcare service.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization $hospitalization
	 * @return static
	 */
	public function setHospitalization(
		?FHIREncounterHospitalization $hospitalization = null,
	): object {
		$this->_trackValueSet($this->hospitalization, $hospitalization);
		$this->hospitalization = $hospitalization;
		return $this;
	}

	/**
	 * An interaction between a patient and healthcare provider(s) for the purpose of
	 * providing healthcare service(s) or assessing the health status of a patient.
	 *
	 * List of locations where the patient has been during this encounter.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterLocation[]
	 */
	public function getLocation(): ?array
	{
		return $this->location;
	}

	/**
	 * An interaction between a patient and healthcare provider(s) for the purpose of
	 * providing healthcare service(s) or assessing the health status of a patient.
	 *
	 * List of locations where the patient has been during this encounter.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterLocation $location
	 * @return static
	 */
	public function addLocation(?FHIREncounterLocation $location = null): object
	{
		$this->_trackValueAdded();
		$this->location[] = $location;
		return $this;
	}

	/**
	 * An interaction between a patient and healthcare provider(s) for the purpose of
	 * providing healthcare service(s) or assessing the health status of a patient.
	 *
	 * List of locations where the patient has been during this encounter.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterLocation[] $location
	 * @return static
	 */
	public function setLocation(array $location = []): object
	{
		if ([] !== $this->location) {
			$this->_trackValuesRemoved(count($this->location));
			$this->location = [];
		}
		if ([] === $location) {
			return $this;
		}
		foreach ($location as $v) {
			if ($v instanceof FHIREncounterLocation) {
				$this->addLocation($v);
			} else {
				$this->addLocation(new FHIREncounterLocation($v));
			}
		}
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * An organization that is in charge of maintaining the information of this
	 * Encounter (e.g. who maintains the report or the master service catalog item,
	 * etc.). This MAY be the same as the organization on the Patient record, however
	 * it could be different. This MAY not be not the Service Delivery Location's
	 * Organization.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getServiceProvider(): ?FHIRReference
	{
		return $this->serviceProvider;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * An organization that is in charge of maintaining the information of this
	 * Encounter (e.g. who maintains the report or the master service catalog item,
	 * etc.). This MAY be the same as the organization on the Patient record, however
	 * it could be different. This MAY not be not the Service Delivery Location's
	 * Organization.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $serviceProvider
	 * @return static
	 */
	public function setServiceProvider(?FHIRReference $serviceProvider = null): object
	{
		$this->_trackValueSet($this->serviceProvider, $serviceProvider);
		$this->serviceProvider = $serviceProvider;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Another Encounter of which this encounter is a part of (administratively or in
	 * time).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getPartOf(): ?FHIRReference
	{
		return $this->partOf;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Another Encounter of which this encounter is a part of (administratively or in
	 * time).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $partOf
	 * @return static
	 */
	public function setPartOf(?FHIRReference $partOf = null): object
	{
		$this->_trackValueSet($this->partOf, $partOf);
		$this->partOf = $partOf;
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
		if ([] !== ($vs = $this->getStatusHistory())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_STATUS_HISTORY, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getClass())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_CLASS] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getType())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_TYPE, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getPriority())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PRIORITY] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatient())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATIENT] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getEpisodeOfCare())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_EPISODE_OF_CARE, $i)] = $fieldErrs;
				}
			}
		}
		if ([] !== ($vs = $this->getIncomingReferral())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_INCOMING_REFERRAL, $i)] = $fieldErrs;
				}
			}
		}
		if ([] !== ($vs = $this->getParticipant())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_PARTICIPANT, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getAppointment())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_APPOINTMENT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPeriod())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PERIOD] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getLength())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_LENGTH] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getReason())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_REASON, $i)] = $fieldErrs;
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
		if (null !== ($v = $this->getHospitalization())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_HOSPITALIZATION] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getLocation())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_LOCATION, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getServiceProvider())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_SERVICE_PROVIDER] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPartOf())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PART_OF] = $fieldErrs;
			}
		}
		if (isset($validationRules[self::FIELD_IDENTIFIER])) {
			$v = $this->getIdentifier();
			foreach ($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ENCOUNTER,
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
					PHPFHIRConstants::TYPE_NAME_ENCOUNTER,
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
		if (isset($validationRules[self::FIELD_STATUS_HISTORY])) {
			$v = $this->getStatusHistory();
			foreach ($validationRules[self::FIELD_STATUS_HISTORY] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ENCOUNTER,
					self::FIELD_STATUS_HISTORY,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_STATUS_HISTORY])) {
						$errs[self::FIELD_STATUS_HISTORY] = [];
					}
					$errs[self::FIELD_STATUS_HISTORY][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_CLASS])) {
			$v = $this->getClass();
			foreach ($validationRules[self::FIELD_CLASS] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ENCOUNTER,
					self::FIELD_CLASS,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_CLASS])) {
						$errs[self::FIELD_CLASS] = [];
					}
					$errs[self::FIELD_CLASS][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_TYPE])) {
			$v = $this->getType();
			foreach ($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ENCOUNTER,
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
		if (isset($validationRules[self::FIELD_PRIORITY])) {
			$v = $this->getPriority();
			foreach ($validationRules[self::FIELD_PRIORITY] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ENCOUNTER,
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
		if (isset($validationRules[self::FIELD_PATIENT])) {
			$v = $this->getPatient();
			foreach ($validationRules[self::FIELD_PATIENT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ENCOUNTER,
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
		if (isset($validationRules[self::FIELD_EPISODE_OF_CARE])) {
			$v = $this->getEpisodeOfCare();
			foreach ($validationRules[self::FIELD_EPISODE_OF_CARE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ENCOUNTER,
					self::FIELD_EPISODE_OF_CARE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_EPISODE_OF_CARE])) {
						$errs[self::FIELD_EPISODE_OF_CARE] = [];
					}
					$errs[self::FIELD_EPISODE_OF_CARE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_INCOMING_REFERRAL])) {
			$v = $this->getIncomingReferral();
			foreach ($validationRules[self::FIELD_INCOMING_REFERRAL] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ENCOUNTER,
					self::FIELD_INCOMING_REFERRAL,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_INCOMING_REFERRAL])) {
						$errs[self::FIELD_INCOMING_REFERRAL] = [];
					}
					$errs[self::FIELD_INCOMING_REFERRAL][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PARTICIPANT])) {
			$v = $this->getParticipant();
			foreach ($validationRules[self::FIELD_PARTICIPANT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ENCOUNTER,
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
		if (isset($validationRules[self::FIELD_APPOINTMENT])) {
			$v = $this->getAppointment();
			foreach ($validationRules[self::FIELD_APPOINTMENT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ENCOUNTER,
					self::FIELD_APPOINTMENT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_APPOINTMENT])) {
						$errs[self::FIELD_APPOINTMENT] = [];
					}
					$errs[self::FIELD_APPOINTMENT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PERIOD])) {
			$v = $this->getPeriod();
			foreach ($validationRules[self::FIELD_PERIOD] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ENCOUNTER,
					self::FIELD_PERIOD,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PERIOD])) {
						$errs[self::FIELD_PERIOD] = [];
					}
					$errs[self::FIELD_PERIOD][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_LENGTH])) {
			$v = $this->getLength();
			foreach ($validationRules[self::FIELD_LENGTH] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ENCOUNTER,
					self::FIELD_LENGTH,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_LENGTH])) {
						$errs[self::FIELD_LENGTH] = [];
					}
					$errs[self::FIELD_LENGTH][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_REASON])) {
			$v = $this->getReason();
			foreach ($validationRules[self::FIELD_REASON] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ENCOUNTER,
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
		if (isset($validationRules[self::FIELD_INDICATION])) {
			$v = $this->getIndication();
			foreach ($validationRules[self::FIELD_INDICATION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ENCOUNTER,
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
		if (isset($validationRules[self::FIELD_HOSPITALIZATION])) {
			$v = $this->getHospitalization();
			foreach ($validationRules[self::FIELD_HOSPITALIZATION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ENCOUNTER,
					self::FIELD_HOSPITALIZATION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_HOSPITALIZATION])) {
						$errs[self::FIELD_HOSPITALIZATION] = [];
					}
					$errs[self::FIELD_HOSPITALIZATION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_LOCATION])) {
			$v = $this->getLocation();
			foreach ($validationRules[self::FIELD_LOCATION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ENCOUNTER,
					self::FIELD_LOCATION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_LOCATION])) {
						$errs[self::FIELD_LOCATION] = [];
					}
					$errs[self::FIELD_LOCATION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_SERVICE_PROVIDER])) {
			$v = $this->getServiceProvider();
			foreach ($validationRules[self::FIELD_SERVICE_PROVIDER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ENCOUNTER,
					self::FIELD_SERVICE_PROVIDER,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_SERVICE_PROVIDER])) {
						$errs[self::FIELD_SERVICE_PROVIDER] = [];
					}
					$errs[self::FIELD_SERVICE_PROVIDER][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PART_OF])) {
			$v = $this->getPartOf();
			foreach ($validationRules[self::FIELD_PART_OF] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ENCOUNTER,
					self::FIELD_PART_OF,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PART_OF])) {
						$errs[self::FIELD_PART_OF] = [];
					}
					$errs[self::FIELD_PART_OF][$rule] = $err;
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIREncounter $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIREncounter
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
						'FHIREncounter::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIREncounter::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIREncounter(null);
		} elseif (!is_object($type) || !($type instanceof FHIREncounter)) {
			throw new \RuntimeException(
				sprintf(
					'FHIREncounter::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIREncounter or null, %s seen.',
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
				$type->setStatus(FHIREncounterState::xmlUnserialize($n));
			} elseif (self::FIELD_STATUS_HISTORY === $n->nodeName) {
				$type->addStatusHistory(FHIREncounterStatusHistory::xmlUnserialize($n));
			} elseif (self::FIELD_CLASS === $n->nodeName) {
				$type->setClass(FHIREncounterClass::xmlUnserialize($n));
			} elseif (self::FIELD_TYPE === $n->nodeName) {
				$type->addType(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_PRIORITY === $n->nodeName) {
				$type->setPriority(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_PATIENT === $n->nodeName) {
				$type->setPatient(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_EPISODE_OF_CARE === $n->nodeName) {
				$type->addEpisodeOfCare(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_INCOMING_REFERRAL === $n->nodeName) {
				$type->addIncomingReferral(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_PARTICIPANT === $n->nodeName) {
				$type->addParticipant(FHIREncounterParticipant::xmlUnserialize($n));
			} elseif (self::FIELD_APPOINTMENT === $n->nodeName) {
				$type->setAppointment(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_PERIOD === $n->nodeName) {
				$type->setPeriod(FHIRPeriod::xmlUnserialize($n));
			} elseif (self::FIELD_LENGTH === $n->nodeName) {
				$type->setLength(FHIRDuration::xmlUnserialize($n));
			} elseif (self::FIELD_REASON === $n->nodeName) {
				$type->addReason(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_INDICATION === $n->nodeName) {
				$type->addIndication(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_HOSPITALIZATION === $n->nodeName) {
				$type->setHospitalization(FHIREncounterHospitalization::xmlUnserialize($n));
			} elseif (self::FIELD_LOCATION === $n->nodeName) {
				$type->addLocation(FHIREncounterLocation::xmlUnserialize($n));
			} elseif (self::FIELD_SERVICE_PROVIDER === $n->nodeName) {
				$type->setServiceProvider(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_PART_OF === $n->nodeName) {
				$type->setPartOf(FHIRReference::xmlUnserialize($n));
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
		if ([] !== ($vs = $this->getStatusHistory())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_STATUS_HISTORY);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if (null !== ($v = $this->getClass())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_CLASS);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getType())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_TYPE);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if (null !== ($v = $this->getPriority())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PRIORITY);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatient())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATIENT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getEpisodeOfCare())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_EPISODE_OF_CARE);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if ([] !== ($vs = $this->getIncomingReferral())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_INCOMING_REFERRAL);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
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
		if (null !== ($v = $this->getAppointment())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_APPOINTMENT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPeriod())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PERIOD);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getLength())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_LENGTH);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getReason())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_REASON);
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
		if (null !== ($v = $this->getHospitalization())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_HOSPITALIZATION);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getLocation())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_LOCATION);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if (null !== ($v = $this->getServiceProvider())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_SERVICE_PROVIDER);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPartOf())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PART_OF);
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
			unset($ext->{FHIREncounterState::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_STATUS_EXT} = $ext;
			}
		}
		if ([] !== ($vs = $this->getStatusHistory())) {
			$out->{self::FIELD_STATUS_HISTORY} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_STATUS_HISTORY}[] = $v;
			}
		}
		if (null !== ($v = $this->getClass())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_CLASS} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIREncounterClass::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_CLASS_EXT} = $ext;
			}
		}
		if ([] !== ($vs = $this->getType())) {
			$out->{self::FIELD_TYPE} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_TYPE}[] = $v;
			}
		}
		if (null !== ($v = $this->getPriority())) {
			$out->{self::FIELD_PRIORITY} = $v;
		}
		if (null !== ($v = $this->getPatient())) {
			$out->{self::FIELD_PATIENT} = $v;
		}
		if ([] !== ($vs = $this->getEpisodeOfCare())) {
			$out->{self::FIELD_EPISODE_OF_CARE} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_EPISODE_OF_CARE}[] = $v;
			}
		}
		if ([] !== ($vs = $this->getIncomingReferral())) {
			$out->{self::FIELD_INCOMING_REFERRAL} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_INCOMING_REFERRAL}[] = $v;
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
		if (null !== ($v = $this->getAppointment())) {
			$out->{self::FIELD_APPOINTMENT} = $v;
		}
		if (null !== ($v = $this->getPeriod())) {
			$out->{self::FIELD_PERIOD} = $v;
		}
		if (null !== ($v = $this->getLength())) {
			$out->{self::FIELD_LENGTH} = $v;
		}
		if ([] !== ($vs = $this->getReason())) {
			$out->{self::FIELD_REASON} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_REASON}[] = $v;
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
		if (null !== ($v = $this->getHospitalization())) {
			$out->{self::FIELD_HOSPITALIZATION} = $v;
		}
		if ([] !== ($vs = $this->getLocation())) {
			$out->{self::FIELD_LOCATION} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_LOCATION}[] = $v;
			}
		}
		if (null !== ($v = $this->getServiceProvider())) {
			$out->{self::FIELD_SERVICE_PROVIDER} = $v;
		}
		if (null !== ($v = $this->getPartOf())) {
			$out->{self::FIELD_PART_OF} = $v;
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
