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

use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAnnotation;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanParticipant;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanRelatedPlan;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCarePlanStatus;
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
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri;
use Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource;
use Calvient\FhirTypes\DSTU2\PHPFHIRConstants;
use Calvient\FhirTypes\DSTU2\PHPFHIRContainedTypeInterface;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeInterface;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeMap;

/**
 * Describes the intention of how one or more practitioners intend to deliver care
 * for a particular patient, group or community for a period of time, possibly
 * limited to care for a specific condition or set of conditions.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRCarePlan
 * @package \Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIRCarePlan extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CARE_PLAN;
	const FIELD_IDENTIFIER = 'identifier';
	const FIELD_SUBJECT = 'subject';
	const FIELD_STATUS = 'status';
	const FIELD_STATUS_EXT = '_status';
	const FIELD_CONTEXT = 'context';
	const FIELD_PERIOD = 'period';
	const FIELD_AUTHOR = 'author';
	const FIELD_MODIFIED = 'modified';
	const FIELD_MODIFIED_EXT = '_modified';
	const FIELD_CATEGORY = 'category';
	const FIELD_DESCRIPTION = 'description';
	const FIELD_DESCRIPTION_EXT = '_description';
	const FIELD_ADDRESSES = 'addresses';
	const FIELD_SUPPORT = 'support';
	const FIELD_RELATED_PLAN = 'relatedPlan';
	const FIELD_PARTICIPANT = 'participant';
	const FIELD_GOAL = 'goal';
	const FIELD_ACTIVITY = 'activity';
	const FIELD_NOTE = 'note';

	/** @var string */
	private $_xmlns = '';

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * This records identifiers associated with this care plan that are defined by
	 * business processes and/or used to refer to it when a direct URL reference to the
	 * resource itself is not appropriate (e.g. in CDA documents, or in written /
	 * printed documentation).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier[]
	 */
	protected ?array $identifier = [];

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies the patient or group whose intended care is described by the plan.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $subject = null;

	/**
	 * Indicates whether the plan is currently being acted upon, represents future
	 * intentions or is now a historical record.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Indicates whether the plan is currently being acted upon, represents future
	 * intentions or is now a historical record.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCarePlanStatus
	 */
	protected ?FHIRCarePlanStatus $status = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies the context in which this particular CarePlan is defined.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $context = null;

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Indicates when the plan did (or is intended to) come into effect and end.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod
	 */
	protected ?FHIRPeriod $period = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies the individual(s) or ogranization who is responsible for the content
	 * of the care plan.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	protected ?array $author = [];

	/**
	 * A date, date-time or partial date (e.g. just year or year + month). If hours and
	 * minutes are specified, a time zone SHALL be populated. The format is a union of
	 * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
	 * due to schema type constraints but may be zero-filled and may be ignored. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Identifies the most recent date on which the plan has been revised.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime
	 */
	protected ?FHIRDateTime $modified = null;

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies what "kind" of plan this is to support differentiation between
	 * multiple co-existing plans; e.g. "Home health", "psychiatric", "asthma",
	 * "disease management", "wellness plan", etc.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept[]
	 */
	protected ?array $category = [];

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A description of the scope and nature of the plan.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $description = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies the conditions/problems/concerns/diagnoses/etc. whose management
	 * and/or mitigation are handled by this plan.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	protected ?array $addresses = [];

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies portions of the patient's record that specifically influenced the
	 * formation of the plan. These might include co-morbidities, recent procedures,
	 * limitations, recent assessments, etc.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	protected ?array $support = [];

	/**
	 * Describes the intention of how one or more practitioners intend to deliver care
	 * for a particular patient, group or community for a period of time, possibly
	 * limited to care for a specific condition or set of conditions.
	 *
	 * Identifies CarePlans with some sort of formal relationship to the current plan.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanRelatedPlan[]
	 */
	protected ?array $relatedPlan = [];

	/**
	 * Describes the intention of how one or more practitioners intend to deliver care
	 * for a particular patient, group or community for a period of time, possibly
	 * limited to care for a specific condition or set of conditions.
	 *
	 * Identifies all people and organizations who are expected to be involved in the
	 * care envisioned by this plan.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanParticipant[]
	 */
	protected ?array $participant = [];

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Describes the intended objective(s) of carrying out the care plan.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	protected ?array $goal = [];

	/**
	 * Describes the intention of how one or more practitioners intend to deliver care
	 * for a particular patient, group or community for a period of time, possibly
	 * limited to care for a specific condition or set of conditions.
	 *
	 * Identifies a planned action to occur as part of the plan. For example, a
	 * medication to be used, lab tests to perform, self-monitoring, education, etc.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity[]
	 */
	protected ?array $activity = [];

	/**
	 * A text note which also contains information about who made the statement and
	 * when.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * General notes about the care plan not covered elsewhere.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAnnotation
	 */
	protected ?FHIRAnnotation $note = null;

	/**
	 * Validation map for fields in type CarePlan
	 * @var array
	 */
	private static array $_validationRules = [];

	/**
	 * FHIRCarePlan Constructor
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
					'FHIRCarePlan::_construct - $data expected to be null or array, %s seen',
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
		if (isset($data[self::FIELD_SUBJECT])) {
			if ($data[self::FIELD_SUBJECT] instanceof FHIRReference) {
				$this->setSubject($data[self::FIELD_SUBJECT]);
			} else {
				$this->setSubject(new FHIRReference($data[self::FIELD_SUBJECT]));
			}
		}
		if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
			$value = $data[self::FIELD_STATUS] ?? null;
			$ext =
				isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])
					? $data[self::FIELD_STATUS_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRCarePlanStatus) {
					$this->setStatus($value);
				} elseif (is_array($value)) {
					$this->setStatus(new FHIRCarePlanStatus(array_merge($ext, $value)));
				} else {
					$this->setStatus(
						new FHIRCarePlanStatus([FHIRCarePlanStatus::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setStatus(new FHIRCarePlanStatus($ext));
			}
		}
		if (isset($data[self::FIELD_CONTEXT])) {
			if ($data[self::FIELD_CONTEXT] instanceof FHIRReference) {
				$this->setContext($data[self::FIELD_CONTEXT]);
			} else {
				$this->setContext(new FHIRReference($data[self::FIELD_CONTEXT]));
			}
		}
		if (isset($data[self::FIELD_PERIOD])) {
			if ($data[self::FIELD_PERIOD] instanceof FHIRPeriod) {
				$this->setPeriod($data[self::FIELD_PERIOD]);
			} else {
				$this->setPeriod(new FHIRPeriod($data[self::FIELD_PERIOD]));
			}
		}
		if (isset($data[self::FIELD_AUTHOR])) {
			if (is_array($data[self::FIELD_AUTHOR])) {
				foreach ($data[self::FIELD_AUTHOR] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRReference) {
						$this->addAuthor($v);
					} else {
						$this->addAuthor(new FHIRReference($v));
					}
				}
			} elseif ($data[self::FIELD_AUTHOR] instanceof FHIRReference) {
				$this->addAuthor($data[self::FIELD_AUTHOR]);
			} else {
				$this->addAuthor(new FHIRReference($data[self::FIELD_AUTHOR]));
			}
		}
		if (isset($data[self::FIELD_MODIFIED]) || isset($data[self::FIELD_MODIFIED_EXT])) {
			$value = $data[self::FIELD_MODIFIED] ?? null;
			$ext =
				isset($data[self::FIELD_MODIFIED_EXT]) && is_array($data[self::FIELD_MODIFIED_EXT])
					? $data[self::FIELD_MODIFIED_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRDateTime) {
					$this->setModified($value);
				} elseif (is_array($value)) {
					$this->setModified(new FHIRDateTime(array_merge($ext, $value)));
				} else {
					$this->setModified(
						new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setModified(new FHIRDateTime($ext));
			}
		}
		if (isset($data[self::FIELD_CATEGORY])) {
			if (is_array($data[self::FIELD_CATEGORY])) {
				foreach ($data[self::FIELD_CATEGORY] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRCodeableConcept) {
						$this->addCategory($v);
					} else {
						$this->addCategory(new FHIRCodeableConcept($v));
					}
				}
			} elseif ($data[self::FIELD_CATEGORY] instanceof FHIRCodeableConcept) {
				$this->addCategory($data[self::FIELD_CATEGORY]);
			} else {
				$this->addCategory(new FHIRCodeableConcept($data[self::FIELD_CATEGORY]));
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
		if (isset($data[self::FIELD_ADDRESSES])) {
			if (is_array($data[self::FIELD_ADDRESSES])) {
				foreach ($data[self::FIELD_ADDRESSES] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRReference) {
						$this->addAddresses($v);
					} else {
						$this->addAddresses(new FHIRReference($v));
					}
				}
			} elseif ($data[self::FIELD_ADDRESSES] instanceof FHIRReference) {
				$this->addAddresses($data[self::FIELD_ADDRESSES]);
			} else {
				$this->addAddresses(new FHIRReference($data[self::FIELD_ADDRESSES]));
			}
		}
		if (isset($data[self::FIELD_SUPPORT])) {
			if (is_array($data[self::FIELD_SUPPORT])) {
				foreach ($data[self::FIELD_SUPPORT] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRReference) {
						$this->addSupport($v);
					} else {
						$this->addSupport(new FHIRReference($v));
					}
				}
			} elseif ($data[self::FIELD_SUPPORT] instanceof FHIRReference) {
				$this->addSupport($data[self::FIELD_SUPPORT]);
			} else {
				$this->addSupport(new FHIRReference($data[self::FIELD_SUPPORT]));
			}
		}
		if (isset($data[self::FIELD_RELATED_PLAN])) {
			if (is_array($data[self::FIELD_RELATED_PLAN])) {
				foreach ($data[self::FIELD_RELATED_PLAN] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRCarePlanRelatedPlan) {
						$this->addRelatedPlan($v);
					} else {
						$this->addRelatedPlan(new FHIRCarePlanRelatedPlan($v));
					}
				}
			} elseif ($data[self::FIELD_RELATED_PLAN] instanceof FHIRCarePlanRelatedPlan) {
				$this->addRelatedPlan($data[self::FIELD_RELATED_PLAN]);
			} else {
				$this->addRelatedPlan(new FHIRCarePlanRelatedPlan($data[self::FIELD_RELATED_PLAN]));
			}
		}
		if (isset($data[self::FIELD_PARTICIPANT])) {
			if (is_array($data[self::FIELD_PARTICIPANT])) {
				foreach ($data[self::FIELD_PARTICIPANT] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRCarePlanParticipant) {
						$this->addParticipant($v);
					} else {
						$this->addParticipant(new FHIRCarePlanParticipant($v));
					}
				}
			} elseif ($data[self::FIELD_PARTICIPANT] instanceof FHIRCarePlanParticipant) {
				$this->addParticipant($data[self::FIELD_PARTICIPANT]);
			} else {
				$this->addParticipant(new FHIRCarePlanParticipant($data[self::FIELD_PARTICIPANT]));
			}
		}
		if (isset($data[self::FIELD_GOAL])) {
			if (is_array($data[self::FIELD_GOAL])) {
				foreach ($data[self::FIELD_GOAL] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRReference) {
						$this->addGoal($v);
					} else {
						$this->addGoal(new FHIRReference($v));
					}
				}
			} elseif ($data[self::FIELD_GOAL] instanceof FHIRReference) {
				$this->addGoal($data[self::FIELD_GOAL]);
			} else {
				$this->addGoal(new FHIRReference($data[self::FIELD_GOAL]));
			}
		}
		if (isset($data[self::FIELD_ACTIVITY])) {
			if (is_array($data[self::FIELD_ACTIVITY])) {
				foreach ($data[self::FIELD_ACTIVITY] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRCarePlanActivity) {
						$this->addActivity($v);
					} else {
						$this->addActivity(new FHIRCarePlanActivity($v));
					}
				}
			} elseif ($data[self::FIELD_ACTIVITY] instanceof FHIRCarePlanActivity) {
				$this->addActivity($data[self::FIELD_ACTIVITY]);
			} else {
				$this->addActivity(new FHIRCarePlanActivity($data[self::FIELD_ACTIVITY]));
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
		return "<CarePlan{$xmlns}></CarePlan>";
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
	 * This records identifiers associated with this care plan that are defined by
	 * business processes and/or used to refer to it when a direct URL reference to the
	 * resource itself is not appropriate (e.g. in CDA documents, or in written /
	 * printed documentation).
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
	 * This records identifiers associated with this care plan that are defined by
	 * business processes and/or used to refer to it when a direct URL reference to the
	 * resource itself is not appropriate (e.g. in CDA documents, or in written /
	 * printed documentation).
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
	 * This records identifiers associated with this care plan that are defined by
	 * business processes and/or used to refer to it when a direct URL reference to the
	 * resource itself is not appropriate (e.g. in CDA documents, or in written /
	 * printed documentation).
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
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies the patient or group whose intended care is described by the plan.
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
	 * Identifies the patient or group whose intended care is described by the plan.
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
	 * Indicates whether the plan is currently being acted upon, represents future
	 * intentions or is now a historical record.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Indicates whether the plan is currently being acted upon, represents future
	 * intentions or is now a historical record.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCarePlanStatus
	 */
	public function getStatus(): ?FHIRCarePlanStatus
	{
		return $this->status;
	}

	/**
	 * Indicates whether the plan is currently being acted upon, represents future
	 * intentions or is now a historical record.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Indicates whether the plan is currently being acted upon, represents future
	 * intentions or is now a historical record.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCarePlanStatus $status
	 * @return static
	 */
	public function setStatus(?FHIRCarePlanStatus $status = null): object
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
	 * Identifies the context in which this particular CarePlan is defined.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getContext(): ?FHIRReference
	{
		return $this->context;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies the context in which this particular CarePlan is defined.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $context
	 * @return static
	 */
	public function setContext(?FHIRReference $context = null): object
	{
		$this->_trackValueSet($this->context, $context);
		$this->context = $context;
		return $this;
	}

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Indicates when the plan did (or is intended to) come into effect and end.
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
	 * Indicates when the plan did (or is intended to) come into effect and end.
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
	 * Identifies the individual(s) or ogranization who is responsible for the content
	 * of the care plan.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	public function getAuthor(): ?array
	{
		return $this->author;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies the individual(s) or ogranization who is responsible for the content
	 * of the care plan.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $author
	 * @return static
	 */
	public function addAuthor(?FHIRReference $author = null): object
	{
		$this->_trackValueAdded();
		$this->author[] = $author;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies the individual(s) or ogranization who is responsible for the content
	 * of the care plan.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[] $author
	 * @return static
	 */
	public function setAuthor(array $author = []): object
	{
		if ([] !== $this->author) {
			$this->_trackValuesRemoved(count($this->author));
			$this->author = [];
		}
		if ([] === $author) {
			return $this;
		}
		foreach ($author as $v) {
			if ($v instanceof FHIRReference) {
				$this->addAuthor($v);
			} else {
				$this->addAuthor(new FHIRReference($v));
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
	 * Identifies the most recent date on which the plan has been revised.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime
	 */
	public function getModified(): ?FHIRDateTime
	{
		return $this->modified;
	}

	/**
	 * A date, date-time or partial date (e.g. just year or year + month). If hours and
	 * minutes are specified, a time zone SHALL be populated. The format is a union of
	 * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
	 * due to schema type constraints but may be zero-filled and may be ignored. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Identifies the most recent date on which the plan has been revised.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime $modified
	 * @return static
	 */
	public function setModified($modified = null): object
	{
		if (null !== $modified && !($modified instanceof FHIRDateTime)) {
			$modified = new FHIRDateTime($modified);
		}
		$this->_trackValueSet($this->modified, $modified);
		$this->modified = $modified;
		return $this;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies what "kind" of plan this is to support differentiation between
	 * multiple co-existing plans; e.g. "Home health", "psychiatric", "asthma",
	 * "disease management", "wellness plan", etc.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept[]
	 */
	public function getCategory(): ?array
	{
		return $this->category;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies what "kind" of plan this is to support differentiation between
	 * multiple co-existing plans; e.g. "Home health", "psychiatric", "asthma",
	 * "disease management", "wellness plan", etc.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $category
	 * @return static
	 */
	public function addCategory(?FHIRCodeableConcept $category = null): object
	{
		$this->_trackValueAdded();
		$this->category[] = $category;
		return $this;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies what "kind" of plan this is to support differentiation between
	 * multiple co-existing plans; e.g. "Home health", "psychiatric", "asthma",
	 * "disease management", "wellness plan", etc.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept[] $category
	 * @return static
	 */
	public function setCategory(array $category = []): object
	{
		if ([] !== $this->category) {
			$this->_trackValuesRemoved(count($this->category));
			$this->category = [];
		}
		if ([] === $category) {
			return $this;
		}
		foreach ($category as $v) {
			if ($v instanceof FHIRCodeableConcept) {
				$this->addCategory($v);
			} else {
				$this->addCategory(new FHIRCodeableConcept($v));
			}
		}
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A description of the scope and nature of the plan.
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
	 * A description of the scope and nature of the plan.
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
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies the conditions/problems/concerns/diagnoses/etc. whose management
	 * and/or mitigation are handled by this plan.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	public function getAddresses(): ?array
	{
		return $this->addresses;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies the conditions/problems/concerns/diagnoses/etc. whose management
	 * and/or mitigation are handled by this plan.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $addresses
	 * @return static
	 */
	public function addAddresses(?FHIRReference $addresses = null): object
	{
		$this->_trackValueAdded();
		$this->addresses[] = $addresses;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies the conditions/problems/concerns/diagnoses/etc. whose management
	 * and/or mitigation are handled by this plan.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[] $addresses
	 * @return static
	 */
	public function setAddresses(array $addresses = []): object
	{
		if ([] !== $this->addresses) {
			$this->_trackValuesRemoved(count($this->addresses));
			$this->addresses = [];
		}
		if ([] === $addresses) {
			return $this;
		}
		foreach ($addresses as $v) {
			if ($v instanceof FHIRReference) {
				$this->addAddresses($v);
			} else {
				$this->addAddresses(new FHIRReference($v));
			}
		}
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies portions of the patient's record that specifically influenced the
	 * formation of the plan. These might include co-morbidities, recent procedures,
	 * limitations, recent assessments, etc.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	public function getSupport(): ?array
	{
		return $this->support;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies portions of the patient's record that specifically influenced the
	 * formation of the plan. These might include co-morbidities, recent procedures,
	 * limitations, recent assessments, etc.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $support
	 * @return static
	 */
	public function addSupport(?FHIRReference $support = null): object
	{
		$this->_trackValueAdded();
		$this->support[] = $support;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies portions of the patient's record that specifically influenced the
	 * formation of the plan. These might include co-morbidities, recent procedures,
	 * limitations, recent assessments, etc.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[] $support
	 * @return static
	 */
	public function setSupport(array $support = []): object
	{
		if ([] !== $this->support) {
			$this->_trackValuesRemoved(count($this->support));
			$this->support = [];
		}
		if ([] === $support) {
			return $this;
		}
		foreach ($support as $v) {
			if ($v instanceof FHIRReference) {
				$this->addSupport($v);
			} else {
				$this->addSupport(new FHIRReference($v));
			}
		}
		return $this;
	}

	/**
	 * Describes the intention of how one or more practitioners intend to deliver care
	 * for a particular patient, group or community for a period of time, possibly
	 * limited to care for a specific condition or set of conditions.
	 *
	 * Identifies CarePlans with some sort of formal relationship to the current plan.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanRelatedPlan[]
	 */
	public function getRelatedPlan(): ?array
	{
		return $this->relatedPlan;
	}

	/**
	 * Describes the intention of how one or more practitioners intend to deliver care
	 * for a particular patient, group or community for a period of time, possibly
	 * limited to care for a specific condition or set of conditions.
	 *
	 * Identifies CarePlans with some sort of formal relationship to the current plan.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanRelatedPlan $relatedPlan
	 * @return static
	 */
	public function addRelatedPlan(?FHIRCarePlanRelatedPlan $relatedPlan = null): object
	{
		$this->_trackValueAdded();
		$this->relatedPlan[] = $relatedPlan;
		return $this;
	}

	/**
	 * Describes the intention of how one or more practitioners intend to deliver care
	 * for a particular patient, group or community for a period of time, possibly
	 * limited to care for a specific condition or set of conditions.
	 *
	 * Identifies CarePlans with some sort of formal relationship to the current plan.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanRelatedPlan[] $relatedPlan
	 * @return static
	 */
	public function setRelatedPlan(array $relatedPlan = []): object
	{
		if ([] !== $this->relatedPlan) {
			$this->_trackValuesRemoved(count($this->relatedPlan));
			$this->relatedPlan = [];
		}
		if ([] === $relatedPlan) {
			return $this;
		}
		foreach ($relatedPlan as $v) {
			if ($v instanceof FHIRCarePlanRelatedPlan) {
				$this->addRelatedPlan($v);
			} else {
				$this->addRelatedPlan(new FHIRCarePlanRelatedPlan($v));
			}
		}
		return $this;
	}

	/**
	 * Describes the intention of how one or more practitioners intend to deliver care
	 * for a particular patient, group or community for a period of time, possibly
	 * limited to care for a specific condition or set of conditions.
	 *
	 * Identifies all people and organizations who are expected to be involved in the
	 * care envisioned by this plan.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanParticipant[]
	 */
	public function getParticipant(): ?array
	{
		return $this->participant;
	}

	/**
	 * Describes the intention of how one or more practitioners intend to deliver care
	 * for a particular patient, group or community for a period of time, possibly
	 * limited to care for a specific condition or set of conditions.
	 *
	 * Identifies all people and organizations who are expected to be involved in the
	 * care envisioned by this plan.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanParticipant $participant
	 * @return static
	 */
	public function addParticipant(?FHIRCarePlanParticipant $participant = null): object
	{
		$this->_trackValueAdded();
		$this->participant[] = $participant;
		return $this;
	}

	/**
	 * Describes the intention of how one or more practitioners intend to deliver care
	 * for a particular patient, group or community for a period of time, possibly
	 * limited to care for a specific condition or set of conditions.
	 *
	 * Identifies all people and organizations who are expected to be involved in the
	 * care envisioned by this plan.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanParticipant[] $participant
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
			if ($v instanceof FHIRCarePlanParticipant) {
				$this->addParticipant($v);
			} else {
				$this->addParticipant(new FHIRCarePlanParticipant($v));
			}
		}
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Describes the intended objective(s) of carrying out the care plan.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	public function getGoal(): ?array
	{
		return $this->goal;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Describes the intended objective(s) of carrying out the care plan.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $goal
	 * @return static
	 */
	public function addGoal(?FHIRReference $goal = null): object
	{
		$this->_trackValueAdded();
		$this->goal[] = $goal;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Describes the intended objective(s) of carrying out the care plan.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[] $goal
	 * @return static
	 */
	public function setGoal(array $goal = []): object
	{
		if ([] !== $this->goal) {
			$this->_trackValuesRemoved(count($this->goal));
			$this->goal = [];
		}
		if ([] === $goal) {
			return $this;
		}
		foreach ($goal as $v) {
			if ($v instanceof FHIRReference) {
				$this->addGoal($v);
			} else {
				$this->addGoal(new FHIRReference($v));
			}
		}
		return $this;
	}

	/**
	 * Describes the intention of how one or more practitioners intend to deliver care
	 * for a particular patient, group or community for a period of time, possibly
	 * limited to care for a specific condition or set of conditions.
	 *
	 * Identifies a planned action to occur as part of the plan. For example, a
	 * medication to be used, lab tests to perform, self-monitoring, education, etc.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity[]
	 */
	public function getActivity(): ?array
	{
		return $this->activity;
	}

	/**
	 * Describes the intention of how one or more practitioners intend to deliver care
	 * for a particular patient, group or community for a period of time, possibly
	 * limited to care for a specific condition or set of conditions.
	 *
	 * Identifies a planned action to occur as part of the plan. For example, a
	 * medication to be used, lab tests to perform, self-monitoring, education, etc.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity $activity
	 * @return static
	 */
	public function addActivity(?FHIRCarePlanActivity $activity = null): object
	{
		$this->_trackValueAdded();
		$this->activity[] = $activity;
		return $this;
	}

	/**
	 * Describes the intention of how one or more practitioners intend to deliver care
	 * for a particular patient, group or community for a period of time, possibly
	 * limited to care for a specific condition or set of conditions.
	 *
	 * Identifies a planned action to occur as part of the plan. For example, a
	 * medication to be used, lab tests to perform, self-monitoring, education, etc.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity[] $activity
	 * @return static
	 */
	public function setActivity(array $activity = []): object
	{
		if ([] !== $this->activity) {
			$this->_trackValuesRemoved(count($this->activity));
			$this->activity = [];
		}
		if ([] === $activity) {
			return $this;
		}
		foreach ($activity as $v) {
			if ($v instanceof FHIRCarePlanActivity) {
				$this->addActivity($v);
			} else {
				$this->addActivity(new FHIRCarePlanActivity($v));
			}
		}
		return $this;
	}

	/**
	 * A text note which also contains information about who made the statement and
	 * when.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * General notes about the care plan not covered elsewhere.
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
	 * General notes about the care plan not covered elsewhere.
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
		if ([] !== ($vs = $this->getIdentifier())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getSubject())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_SUBJECT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getStatus())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_STATUS] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getContext())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_CONTEXT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPeriod())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PERIOD] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getAuthor())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_AUTHOR, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getModified())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MODIFIED] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getCategory())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_CATEGORY, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getDescription())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DESCRIPTION] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getAddresses())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_ADDRESSES, $i)] = $fieldErrs;
				}
			}
		}
		if ([] !== ($vs = $this->getSupport())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_SUPPORT, $i)] = $fieldErrs;
				}
			}
		}
		if ([] !== ($vs = $this->getRelatedPlan())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_RELATED_PLAN, $i)] = $fieldErrs;
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
		if ([] !== ($vs = $this->getGoal())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_GOAL, $i)] = $fieldErrs;
				}
			}
		}
		if ([] !== ($vs = $this->getActivity())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_ACTIVITY, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getNote())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_NOTE] = $fieldErrs;
			}
		}
		if (isset($validationRules[self::FIELD_IDENTIFIER])) {
			$v = $this->getIdentifier();
			foreach ($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CARE_PLAN,
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
		if (isset($validationRules[self::FIELD_SUBJECT])) {
			$v = $this->getSubject();
			foreach ($validationRules[self::FIELD_SUBJECT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CARE_PLAN,
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
		if (isset($validationRules[self::FIELD_STATUS])) {
			$v = $this->getStatus();
			foreach ($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CARE_PLAN,
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
		if (isset($validationRules[self::FIELD_CONTEXT])) {
			$v = $this->getContext();
			foreach ($validationRules[self::FIELD_CONTEXT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CARE_PLAN,
					self::FIELD_CONTEXT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_CONTEXT])) {
						$errs[self::FIELD_CONTEXT] = [];
					}
					$errs[self::FIELD_CONTEXT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PERIOD])) {
			$v = $this->getPeriod();
			foreach ($validationRules[self::FIELD_PERIOD] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CARE_PLAN,
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
		if (isset($validationRules[self::FIELD_AUTHOR])) {
			$v = $this->getAuthor();
			foreach ($validationRules[self::FIELD_AUTHOR] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CARE_PLAN,
					self::FIELD_AUTHOR,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_AUTHOR])) {
						$errs[self::FIELD_AUTHOR] = [];
					}
					$errs[self::FIELD_AUTHOR][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MODIFIED])) {
			$v = $this->getModified();
			foreach ($validationRules[self::FIELD_MODIFIED] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CARE_PLAN,
					self::FIELD_MODIFIED,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MODIFIED])) {
						$errs[self::FIELD_MODIFIED] = [];
					}
					$errs[self::FIELD_MODIFIED][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_CATEGORY])) {
			$v = $this->getCategory();
			foreach ($validationRules[self::FIELD_CATEGORY] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CARE_PLAN,
					self::FIELD_CATEGORY,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_CATEGORY])) {
						$errs[self::FIELD_CATEGORY] = [];
					}
					$errs[self::FIELD_CATEGORY][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DESCRIPTION])) {
			$v = $this->getDescription();
			foreach ($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CARE_PLAN,
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
		if (isset($validationRules[self::FIELD_ADDRESSES])) {
			$v = $this->getAddresses();
			foreach ($validationRules[self::FIELD_ADDRESSES] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CARE_PLAN,
					self::FIELD_ADDRESSES,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_ADDRESSES])) {
						$errs[self::FIELD_ADDRESSES] = [];
					}
					$errs[self::FIELD_ADDRESSES][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_SUPPORT])) {
			$v = $this->getSupport();
			foreach ($validationRules[self::FIELD_SUPPORT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CARE_PLAN,
					self::FIELD_SUPPORT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_SUPPORT])) {
						$errs[self::FIELD_SUPPORT] = [];
					}
					$errs[self::FIELD_SUPPORT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_RELATED_PLAN])) {
			$v = $this->getRelatedPlan();
			foreach ($validationRules[self::FIELD_RELATED_PLAN] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CARE_PLAN,
					self::FIELD_RELATED_PLAN,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_RELATED_PLAN])) {
						$errs[self::FIELD_RELATED_PLAN] = [];
					}
					$errs[self::FIELD_RELATED_PLAN][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PARTICIPANT])) {
			$v = $this->getParticipant();
			foreach ($validationRules[self::FIELD_PARTICIPANT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CARE_PLAN,
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
		if (isset($validationRules[self::FIELD_GOAL])) {
			$v = $this->getGoal();
			foreach ($validationRules[self::FIELD_GOAL] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CARE_PLAN,
					self::FIELD_GOAL,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_GOAL])) {
						$errs[self::FIELD_GOAL] = [];
					}
					$errs[self::FIELD_GOAL][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_ACTIVITY])) {
			$v = $this->getActivity();
			foreach ($validationRules[self::FIELD_ACTIVITY] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CARE_PLAN,
					self::FIELD_ACTIVITY,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_ACTIVITY])) {
						$errs[self::FIELD_ACTIVITY] = [];
					}
					$errs[self::FIELD_ACTIVITY][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_NOTE])) {
			$v = $this->getNote();
			foreach ($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CARE_PLAN,
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRCarePlan $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRCarePlan
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
						'FHIRCarePlan::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRCarePlan::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRCarePlan(null);
		} elseif (!is_object($type) || !($type instanceof FHIRCarePlan)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRCarePlan::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRCarePlan or null, %s seen.',
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
			} elseif (self::FIELD_SUBJECT === $n->nodeName) {
				$type->setSubject(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_STATUS === $n->nodeName) {
				$type->setStatus(FHIRCarePlanStatus::xmlUnserialize($n));
			} elseif (self::FIELD_CONTEXT === $n->nodeName) {
				$type->setContext(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_PERIOD === $n->nodeName) {
				$type->setPeriod(FHIRPeriod::xmlUnserialize($n));
			} elseif (self::FIELD_AUTHOR === $n->nodeName) {
				$type->addAuthor(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_MODIFIED === $n->nodeName) {
				$type->setModified(FHIRDateTime::xmlUnserialize($n));
			} elseif (self::FIELD_CATEGORY === $n->nodeName) {
				$type->addCategory(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_DESCRIPTION === $n->nodeName) {
				$type->setDescription(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_ADDRESSES === $n->nodeName) {
				$type->addAddresses(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_SUPPORT === $n->nodeName) {
				$type->addSupport(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_RELATED_PLAN === $n->nodeName) {
				$type->addRelatedPlan(FHIRCarePlanRelatedPlan::xmlUnserialize($n));
			} elseif (self::FIELD_PARTICIPANT === $n->nodeName) {
				$type->addParticipant(FHIRCarePlanParticipant::xmlUnserialize($n));
			} elseif (self::FIELD_GOAL === $n->nodeName) {
				$type->addGoal(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_ACTIVITY === $n->nodeName) {
				$type->addActivity(FHIRCarePlanActivity::xmlUnserialize($n));
			} elseif (self::FIELD_NOTE === $n->nodeName) {
				$type->setNote(FHIRAnnotation::xmlUnserialize($n));
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
		$n = $element->attributes->getNamedItem(self::FIELD_MODIFIED);
		if (null !== $n) {
			$pt = $type->getModified();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setModified($n->nodeValue);
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
		if (null !== ($v = $this->getSubject())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_SUBJECT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getStatus())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_STATUS);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getContext())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_CONTEXT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPeriod())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PERIOD);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getAuthor())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_AUTHOR);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if (null !== ($v = $this->getModified())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MODIFIED);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getCategory())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_CATEGORY);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if (null !== ($v = $this->getDescription())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DESCRIPTION);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getAddresses())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_ADDRESSES);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if ([] !== ($vs = $this->getSupport())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_SUPPORT);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if ([] !== ($vs = $this->getRelatedPlan())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_RELATED_PLAN);
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
		if ([] !== ($vs = $this->getGoal())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_GOAL);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if ([] !== ($vs = $this->getActivity())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_ACTIVITY);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
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
		if ([] !== ($vs = $this->getIdentifier())) {
			$out->{self::FIELD_IDENTIFIER} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_IDENTIFIER}[] = $v;
			}
		}
		if (null !== ($v = $this->getSubject())) {
			$out->{self::FIELD_SUBJECT} = $v;
		}
		if (null !== ($v = $this->getStatus())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_STATUS} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRCarePlanStatus::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_STATUS_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getContext())) {
			$out->{self::FIELD_CONTEXT} = $v;
		}
		if (null !== ($v = $this->getPeriod())) {
			$out->{self::FIELD_PERIOD} = $v;
		}
		if ([] !== ($vs = $this->getAuthor())) {
			$out->{self::FIELD_AUTHOR} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_AUTHOR}[] = $v;
			}
		}
		if (null !== ($v = $this->getModified())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_MODIFIED} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRDateTime::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_MODIFIED_EXT} = $ext;
			}
		}
		if ([] !== ($vs = $this->getCategory())) {
			$out->{self::FIELD_CATEGORY} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_CATEGORY}[] = $v;
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
		if ([] !== ($vs = $this->getAddresses())) {
			$out->{self::FIELD_ADDRESSES} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_ADDRESSES}[] = $v;
			}
		}
		if ([] !== ($vs = $this->getSupport())) {
			$out->{self::FIELD_SUPPORT} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_SUPPORT}[] = $v;
			}
		}
		if ([] !== ($vs = $this->getRelatedPlan())) {
			$out->{self::FIELD_RELATED_PLAN} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_RELATED_PLAN}[] = $v;
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
		if ([] !== ($vs = $this->getGoal())) {
			$out->{self::FIELD_GOAL} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_GOAL}[] = $v;
			}
		}
		if ([] !== ($vs = $this->getActivity())) {
			$out->{self::FIELD_ACTIVITY} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_ACTIVITY}[] = $v;
			}
		}
		if (null !== ($v = $this->getNote())) {
			$out->{self::FIELD_NOTE} = $v;
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
