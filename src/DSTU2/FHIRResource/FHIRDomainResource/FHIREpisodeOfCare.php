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

use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIREpisodeOfCare\FHIREpisodeOfCareCareTeam;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIREpisodeOfCare\FHIREpisodeOfCareStatusHistory;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIREpisodeOfCareStatus;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRExtension;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRId;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMeta;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRNarrative;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri;
use Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource;
use Calvient\FhirTypes\DSTU2\PHPFHIRConstants;
use Calvient\FhirTypes\DSTU2\PHPFHIRContainedTypeInterface;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeInterface;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeMap;

/**
 * An association between a patient and an organization / healthcare provider(s)
 * during which time encounters may occur. The managing organization assumes a
 * level of responsibility for the patient during this time.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIREpisodeOfCare
 * @package \Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIREpisodeOfCare extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_EPISODE_OF_CARE;
	const FIELD_IDENTIFIER = 'identifier';
	const FIELD_STATUS = 'status';
	const FIELD_STATUS_EXT = '_status';
	const FIELD_STATUS_HISTORY = 'statusHistory';
	const FIELD_TYPE = 'type';
	const FIELD_CONDITION = 'condition';
	const FIELD_PATIENT = 'patient';
	const FIELD_MANAGING_ORGANIZATION = 'managingOrganization';
	const FIELD_PERIOD = 'period';
	const FIELD_REFERRAL_REQUEST = 'referralRequest';
	const FIELD_CARE_MANAGER = 'careManager';
	const FIELD_CARE_TEAM = 'careTeam';

	/** @var string */
	private $_xmlns = '';

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifier(s) by which this EpisodeOfCare is known.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier[]
	 */
	protected ?array $identifier = [];

	/**
	 * The status of the encounter.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * planned | waitlist | active | onhold | finished | cancelled.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIREpisodeOfCareStatus
	 */
	protected ?FHIREpisodeOfCareStatus $status = null;

	/**
	 * An association between a patient and an organization / healthcare provider(s)
	 * during which time encounters may occur. The managing organization assumes a
	 * level of responsibility for the patient during this time.
	 *
	 * The history of statuses that the EpisodeOfCare has been through (without
	 * requiring processing the history of the resource).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIREpisodeOfCare\FHIREpisodeOfCareStatusHistory[]
	 */
	protected ?array $statusHistory = [];

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A classification of the type of encounter; e.g. specialist referral, disease
	 * management, type of funded care.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept[]
	 */
	protected ?array $type = [];

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A list of conditions/problems/diagnoses that this episode of care is intended to
	 * be providing care for.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	protected ?array $condition = [];

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The patient that this EpisodeOfCare applies to.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $patient = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The organization that has assumed the specific responsibilities for the
	 * specified duration.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $managingOrganization = null;

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The interval during which the managing organization assumes the defined
	 * responsibility.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod
	 */
	protected ?FHIRPeriod $period = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Referral Request(s) that are fulfilled by this EpisodeOfCare, incoming
	 * referrals.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	protected ?array $referralRequest = [];

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The practitioner that is the care manager/care co-ordinator for this patient.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $careManager = null;

	/**
	 * An association between a patient and an organization / healthcare provider(s)
	 * during which time encounters may occur. The managing organization assumes a
	 * level of responsibility for the patient during this time.
	 *
	 * The list of practitioners that may be facilitating this episode of care for
	 * specific purposes.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIREpisodeOfCare\FHIREpisodeOfCareCareTeam[]
	 */
	protected ?array $careTeam = [];

	/**
	 * Validation map for fields in type EpisodeOfCare
	 * @var array
	 */
	private static array $_validationRules = [];

	/**
	 * FHIREpisodeOfCare Constructor
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
					'FHIREpisodeOfCare::_construct - $data expected to be null or array, %s seen',
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
				if ($value instanceof FHIREpisodeOfCareStatus) {
					$this->setStatus($value);
				} elseif (is_array($value)) {
					$this->setStatus(new FHIREpisodeOfCareStatus(array_merge($ext, $value)));
				} else {
					$this->setStatus(
						new FHIREpisodeOfCareStatus(
							[FHIREpisodeOfCareStatus::FIELD_VALUE => $value] + $ext,
						),
					);
				}
			} elseif ([] !== $ext) {
				$this->setStatus(new FHIREpisodeOfCareStatus($ext));
			}
		}
		if (isset($data[self::FIELD_STATUS_HISTORY])) {
			if (is_array($data[self::FIELD_STATUS_HISTORY])) {
				foreach ($data[self::FIELD_STATUS_HISTORY] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIREpisodeOfCareStatusHistory) {
						$this->addStatusHistory($v);
					} else {
						$this->addStatusHistory(new FHIREpisodeOfCareStatusHistory($v));
					}
				}
			} elseif ($data[self::FIELD_STATUS_HISTORY] instanceof FHIREpisodeOfCareStatusHistory) {
				$this->addStatusHistory($data[self::FIELD_STATUS_HISTORY]);
			} else {
				$this->addStatusHistory(
					new FHIREpisodeOfCareStatusHistory($data[self::FIELD_STATUS_HISTORY]),
				);
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
		if (isset($data[self::FIELD_CONDITION])) {
			if (is_array($data[self::FIELD_CONDITION])) {
				foreach ($data[self::FIELD_CONDITION] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRReference) {
						$this->addCondition($v);
					} else {
						$this->addCondition(new FHIRReference($v));
					}
				}
			} elseif ($data[self::FIELD_CONDITION] instanceof FHIRReference) {
				$this->addCondition($data[self::FIELD_CONDITION]);
			} else {
				$this->addCondition(new FHIRReference($data[self::FIELD_CONDITION]));
			}
		}
		if (isset($data[self::FIELD_PATIENT])) {
			if ($data[self::FIELD_PATIENT] instanceof FHIRReference) {
				$this->setPatient($data[self::FIELD_PATIENT]);
			} else {
				$this->setPatient(new FHIRReference($data[self::FIELD_PATIENT]));
			}
		}
		if (isset($data[self::FIELD_MANAGING_ORGANIZATION])) {
			if ($data[self::FIELD_MANAGING_ORGANIZATION] instanceof FHIRReference) {
				$this->setManagingOrganization($data[self::FIELD_MANAGING_ORGANIZATION]);
			} else {
				$this->setManagingOrganization(
					new FHIRReference($data[self::FIELD_MANAGING_ORGANIZATION]),
				);
			}
		}
		if (isset($data[self::FIELD_PERIOD])) {
			if ($data[self::FIELD_PERIOD] instanceof FHIRPeriod) {
				$this->setPeriod($data[self::FIELD_PERIOD]);
			} else {
				$this->setPeriod(new FHIRPeriod($data[self::FIELD_PERIOD]));
			}
		}
		if (isset($data[self::FIELD_REFERRAL_REQUEST])) {
			if (is_array($data[self::FIELD_REFERRAL_REQUEST])) {
				foreach ($data[self::FIELD_REFERRAL_REQUEST] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRReference) {
						$this->addReferralRequest($v);
					} else {
						$this->addReferralRequest(new FHIRReference($v));
					}
				}
			} elseif ($data[self::FIELD_REFERRAL_REQUEST] instanceof FHIRReference) {
				$this->addReferralRequest($data[self::FIELD_REFERRAL_REQUEST]);
			} else {
				$this->addReferralRequest(new FHIRReference($data[self::FIELD_REFERRAL_REQUEST]));
			}
		}
		if (isset($data[self::FIELD_CARE_MANAGER])) {
			if ($data[self::FIELD_CARE_MANAGER] instanceof FHIRReference) {
				$this->setCareManager($data[self::FIELD_CARE_MANAGER]);
			} else {
				$this->setCareManager(new FHIRReference($data[self::FIELD_CARE_MANAGER]));
			}
		}
		if (isset($data[self::FIELD_CARE_TEAM])) {
			if (is_array($data[self::FIELD_CARE_TEAM])) {
				foreach ($data[self::FIELD_CARE_TEAM] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIREpisodeOfCareCareTeam) {
						$this->addCareTeam($v);
					} else {
						$this->addCareTeam(new FHIREpisodeOfCareCareTeam($v));
					}
				}
			} elseif ($data[self::FIELD_CARE_TEAM] instanceof FHIREpisodeOfCareCareTeam) {
				$this->addCareTeam($data[self::FIELD_CARE_TEAM]);
			} else {
				$this->addCareTeam(new FHIREpisodeOfCareCareTeam($data[self::FIELD_CARE_TEAM]));
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
		return "<EpisodeOfCare{$xmlns}></EpisodeOfCare>";
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
	 * Identifier(s) by which this EpisodeOfCare is known.
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
	 * Identifier(s) by which this EpisodeOfCare is known.
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
	 * Identifier(s) by which this EpisodeOfCare is known.
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
	 * The status of the encounter.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * planned | waitlist | active | onhold | finished | cancelled.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIREpisodeOfCareStatus
	 */
	public function getStatus(): ?FHIREpisodeOfCareStatus
	{
		return $this->status;
	}

	/**
	 * The status of the encounter.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * planned | waitlist | active | onhold | finished | cancelled.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIREpisodeOfCareStatus $status
	 * @return static
	 */
	public function setStatus(?FHIREpisodeOfCareStatus $status = null): object
	{
		$this->_trackValueSet($this->status, $status);
		$this->status = $status;
		return $this;
	}

	/**
	 * An association between a patient and an organization / healthcare provider(s)
	 * during which time encounters may occur. The managing organization assumes a
	 * level of responsibility for the patient during this time.
	 *
	 * The history of statuses that the EpisodeOfCare has been through (without
	 * requiring processing the history of the resource).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIREpisodeOfCare\FHIREpisodeOfCareStatusHistory[]
	 */
	public function getStatusHistory(): ?array
	{
		return $this->statusHistory;
	}

	/**
	 * An association between a patient and an organization / healthcare provider(s)
	 * during which time encounters may occur. The managing organization assumes a
	 * level of responsibility for the patient during this time.
	 *
	 * The history of statuses that the EpisodeOfCare has been through (without
	 * requiring processing the history of the resource).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIREpisodeOfCare\FHIREpisodeOfCareStatusHistory $statusHistory
	 * @return static
	 */
	public function addStatusHistory(?FHIREpisodeOfCareStatusHistory $statusHistory = null): object
	{
		$this->_trackValueAdded();
		$this->statusHistory[] = $statusHistory;
		return $this;
	}

	/**
	 * An association between a patient and an organization / healthcare provider(s)
	 * during which time encounters may occur. The managing organization assumes a
	 * level of responsibility for the patient during this time.
	 *
	 * The history of statuses that the EpisodeOfCare has been through (without
	 * requiring processing the history of the resource).
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIREpisodeOfCare\FHIREpisodeOfCareStatusHistory[] $statusHistory
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
			if ($v instanceof FHIREpisodeOfCareStatusHistory) {
				$this->addStatusHistory($v);
			} else {
				$this->addStatusHistory(new FHIREpisodeOfCareStatusHistory($v));
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
	 * A classification of the type of encounter; e.g. specialist referral, disease
	 * management, type of funded care.
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
	 * A classification of the type of encounter; e.g. specialist referral, disease
	 * management, type of funded care.
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
	 * A classification of the type of encounter; e.g. specialist referral, disease
	 * management, type of funded care.
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
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A list of conditions/problems/diagnoses that this episode of care is intended to
	 * be providing care for.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	public function getCondition(): ?array
	{
		return $this->condition;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A list of conditions/problems/diagnoses that this episode of care is intended to
	 * be providing care for.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $condition
	 * @return static
	 */
	public function addCondition(?FHIRReference $condition = null): object
	{
		$this->_trackValueAdded();
		$this->condition[] = $condition;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A list of conditions/problems/diagnoses that this episode of care is intended to
	 * be providing care for.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[] $condition
	 * @return static
	 */
	public function setCondition(array $condition = []): object
	{
		if ([] !== $this->condition) {
			$this->_trackValuesRemoved(count($this->condition));
			$this->condition = [];
		}
		if ([] === $condition) {
			return $this;
		}
		foreach ($condition as $v) {
			if ($v instanceof FHIRReference) {
				$this->addCondition($v);
			} else {
				$this->addCondition(new FHIRReference($v));
			}
		}
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The patient that this EpisodeOfCare applies to.
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
	 * The patient that this EpisodeOfCare applies to.
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
	 * The organization that has assumed the specific responsibilities for the
	 * specified duration.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getManagingOrganization(): ?FHIRReference
	{
		return $this->managingOrganization;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The organization that has assumed the specific responsibilities for the
	 * specified duration.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $managingOrganization
	 * @return static
	 */
	public function setManagingOrganization(?FHIRReference $managingOrganization = null): object
	{
		$this->_trackValueSet($this->managingOrganization, $managingOrganization);
		$this->managingOrganization = $managingOrganization;
		return $this;
	}

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The interval during which the managing organization assumes the defined
	 * responsibility.
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
	 * The interval during which the managing organization assumes the defined
	 * responsibility.
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
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Referral Request(s) that are fulfilled by this EpisodeOfCare, incoming
	 * referrals.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	public function getReferralRequest(): ?array
	{
		return $this->referralRequest;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Referral Request(s) that are fulfilled by this EpisodeOfCare, incoming
	 * referrals.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $referralRequest
	 * @return static
	 */
	public function addReferralRequest(?FHIRReference $referralRequest = null): object
	{
		$this->_trackValueAdded();
		$this->referralRequest[] = $referralRequest;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Referral Request(s) that are fulfilled by this EpisodeOfCare, incoming
	 * referrals.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[] $referralRequest
	 * @return static
	 */
	public function setReferralRequest(array $referralRequest = []): object
	{
		if ([] !== $this->referralRequest) {
			$this->_trackValuesRemoved(count($this->referralRequest));
			$this->referralRequest = [];
		}
		if ([] === $referralRequest) {
			return $this;
		}
		foreach ($referralRequest as $v) {
			if ($v instanceof FHIRReference) {
				$this->addReferralRequest($v);
			} else {
				$this->addReferralRequest(new FHIRReference($v));
			}
		}
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The practitioner that is the care manager/care co-ordinator for this patient.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getCareManager(): ?FHIRReference
	{
		return $this->careManager;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The practitioner that is the care manager/care co-ordinator for this patient.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $careManager
	 * @return static
	 */
	public function setCareManager(?FHIRReference $careManager = null): object
	{
		$this->_trackValueSet($this->careManager, $careManager);
		$this->careManager = $careManager;
		return $this;
	}

	/**
	 * An association between a patient and an organization / healthcare provider(s)
	 * during which time encounters may occur. The managing organization assumes a
	 * level of responsibility for the patient during this time.
	 *
	 * The list of practitioners that may be facilitating this episode of care for
	 * specific purposes.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIREpisodeOfCare\FHIREpisodeOfCareCareTeam[]
	 */
	public function getCareTeam(): ?array
	{
		return $this->careTeam;
	}

	/**
	 * An association between a patient and an organization / healthcare provider(s)
	 * during which time encounters may occur. The managing organization assumes a
	 * level of responsibility for the patient during this time.
	 *
	 * The list of practitioners that may be facilitating this episode of care for
	 * specific purposes.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIREpisodeOfCare\FHIREpisodeOfCareCareTeam $careTeam
	 * @return static
	 */
	public function addCareTeam(?FHIREpisodeOfCareCareTeam $careTeam = null): object
	{
		$this->_trackValueAdded();
		$this->careTeam[] = $careTeam;
		return $this;
	}

	/**
	 * An association between a patient and an organization / healthcare provider(s)
	 * during which time encounters may occur. The managing organization assumes a
	 * level of responsibility for the patient during this time.
	 *
	 * The list of practitioners that may be facilitating this episode of care for
	 * specific purposes.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIREpisodeOfCare\FHIREpisodeOfCareCareTeam[] $careTeam
	 * @return static
	 */
	public function setCareTeam(array $careTeam = []): object
	{
		if ([] !== $this->careTeam) {
			$this->_trackValuesRemoved(count($this->careTeam));
			$this->careTeam = [];
		}
		if ([] === $careTeam) {
			return $this;
		}
		foreach ($careTeam as $v) {
			if ($v instanceof FHIREpisodeOfCareCareTeam) {
				$this->addCareTeam($v);
			} else {
				$this->addCareTeam(new FHIREpisodeOfCareCareTeam($v));
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
		if ([] !== ($vs = $this->getStatusHistory())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_STATUS_HISTORY, $i)] = $fieldErrs;
				}
			}
		}
		if ([] !== ($vs = $this->getType())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_TYPE, $i)] = $fieldErrs;
				}
			}
		}
		if ([] !== ($vs = $this->getCondition())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_CONDITION, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getPatient())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATIENT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getManagingOrganization())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MANAGING_ORGANIZATION] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPeriod())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PERIOD] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getReferralRequest())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_REFERRAL_REQUEST, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getCareManager())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_CARE_MANAGER] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getCareTeam())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_CARE_TEAM, $i)] = $fieldErrs;
				}
			}
		}
		if (isset($validationRules[self::FIELD_IDENTIFIER])) {
			$v = $this->getIdentifier();
			foreach ($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_EPISODE_OF_CARE,
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
					PHPFHIRConstants::TYPE_NAME_EPISODE_OF_CARE,
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
					PHPFHIRConstants::TYPE_NAME_EPISODE_OF_CARE,
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
		if (isset($validationRules[self::FIELD_TYPE])) {
			$v = $this->getType();
			foreach ($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_EPISODE_OF_CARE,
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
		if (isset($validationRules[self::FIELD_CONDITION])) {
			$v = $this->getCondition();
			foreach ($validationRules[self::FIELD_CONDITION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_EPISODE_OF_CARE,
					self::FIELD_CONDITION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_CONDITION])) {
						$errs[self::FIELD_CONDITION] = [];
					}
					$errs[self::FIELD_CONDITION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATIENT])) {
			$v = $this->getPatient();
			foreach ($validationRules[self::FIELD_PATIENT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_EPISODE_OF_CARE,
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
		if (isset($validationRules[self::FIELD_MANAGING_ORGANIZATION])) {
			$v = $this->getManagingOrganization();
			foreach ($validationRules[self::FIELD_MANAGING_ORGANIZATION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_EPISODE_OF_CARE,
					self::FIELD_MANAGING_ORGANIZATION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MANAGING_ORGANIZATION])) {
						$errs[self::FIELD_MANAGING_ORGANIZATION] = [];
					}
					$errs[self::FIELD_MANAGING_ORGANIZATION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PERIOD])) {
			$v = $this->getPeriod();
			foreach ($validationRules[self::FIELD_PERIOD] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_EPISODE_OF_CARE,
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
		if (isset($validationRules[self::FIELD_REFERRAL_REQUEST])) {
			$v = $this->getReferralRequest();
			foreach ($validationRules[self::FIELD_REFERRAL_REQUEST] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_EPISODE_OF_CARE,
					self::FIELD_REFERRAL_REQUEST,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_REFERRAL_REQUEST])) {
						$errs[self::FIELD_REFERRAL_REQUEST] = [];
					}
					$errs[self::FIELD_REFERRAL_REQUEST][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_CARE_MANAGER])) {
			$v = $this->getCareManager();
			foreach ($validationRules[self::FIELD_CARE_MANAGER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_EPISODE_OF_CARE,
					self::FIELD_CARE_MANAGER,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_CARE_MANAGER])) {
						$errs[self::FIELD_CARE_MANAGER] = [];
					}
					$errs[self::FIELD_CARE_MANAGER][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_CARE_TEAM])) {
			$v = $this->getCareTeam();
			foreach ($validationRules[self::FIELD_CARE_TEAM] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_EPISODE_OF_CARE,
					self::FIELD_CARE_TEAM,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_CARE_TEAM])) {
						$errs[self::FIELD_CARE_TEAM] = [];
					}
					$errs[self::FIELD_CARE_TEAM][$rule] = $err;
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare
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
						'FHIREpisodeOfCare::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIREpisodeOfCare::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIREpisodeOfCare(null);
		} elseif (!is_object($type) || !($type instanceof FHIREpisodeOfCare)) {
			throw new \RuntimeException(
				sprintf(
					'FHIREpisodeOfCare::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare or null, %s seen.',
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
				$type->setStatus(FHIREpisodeOfCareStatus::xmlUnserialize($n));
			} elseif (self::FIELD_STATUS_HISTORY === $n->nodeName) {
				$type->addStatusHistory(FHIREpisodeOfCareStatusHistory::xmlUnserialize($n));
			} elseif (self::FIELD_TYPE === $n->nodeName) {
				$type->addType(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_CONDITION === $n->nodeName) {
				$type->addCondition(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_PATIENT === $n->nodeName) {
				$type->setPatient(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_MANAGING_ORGANIZATION === $n->nodeName) {
				$type->setManagingOrganization(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_PERIOD === $n->nodeName) {
				$type->setPeriod(FHIRPeriod::xmlUnserialize($n));
			} elseif (self::FIELD_REFERRAL_REQUEST === $n->nodeName) {
				$type->addReferralRequest(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_CARE_MANAGER === $n->nodeName) {
				$type->setCareManager(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_CARE_TEAM === $n->nodeName) {
				$type->addCareTeam(FHIREpisodeOfCareCareTeam::xmlUnserialize($n));
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
		if ([] !== ($vs = $this->getCondition())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_CONDITION);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if (null !== ($v = $this->getPatient())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATIENT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getManagingOrganization())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MANAGING_ORGANIZATION);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPeriod())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PERIOD);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getReferralRequest())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_REFERRAL_REQUEST);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if (null !== ($v = $this->getCareManager())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_CARE_MANAGER);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getCareTeam())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_CARE_TEAM);
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
			unset($ext->{FHIREpisodeOfCareStatus::FIELD_VALUE});
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
		if ([] !== ($vs = $this->getType())) {
			$out->{self::FIELD_TYPE} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_TYPE}[] = $v;
			}
		}
		if ([] !== ($vs = $this->getCondition())) {
			$out->{self::FIELD_CONDITION} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_CONDITION}[] = $v;
			}
		}
		if (null !== ($v = $this->getPatient())) {
			$out->{self::FIELD_PATIENT} = $v;
		}
		if (null !== ($v = $this->getManagingOrganization())) {
			$out->{self::FIELD_MANAGING_ORGANIZATION} = $v;
		}
		if (null !== ($v = $this->getPeriod())) {
			$out->{self::FIELD_PERIOD} = $v;
		}
		if ([] !== ($vs = $this->getReferralRequest())) {
			$out->{self::FIELD_REFERRAL_REQUEST} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_REFERRAL_REQUEST}[] = $v;
			}
		}
		if (null !== ($v = $this->getCareManager())) {
			$out->{self::FIELD_CARE_MANAGER} = $v;
		}
		if ([] !== ($vs = $this->getCareTeam())) {
			$out->{self::FIELD_CARE_TEAM} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_CARE_TEAM}[] = $v;
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
