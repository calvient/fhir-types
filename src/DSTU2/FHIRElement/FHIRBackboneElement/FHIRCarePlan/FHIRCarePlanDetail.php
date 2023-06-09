<?php declare(strict_types=1);

namespace Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCarePlan;

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
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCarePlanActivityStatus;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRExtension;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTiming;
use Calvient\FhirTypes\DSTU2\FHIRIdPrimitive;
use Calvient\FhirTypes\DSTU2\PHPFHIRConstants;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeInterface;

/**
 * Describes the intention of how one or more practitioners intend to deliver care
 * for a particular patient, group or community for a period of time, possibly
 * limited to care for a specific condition or set of conditions.
 *
 * Class FHIRCarePlanDetail
 * @package \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCarePlan
 */
class FHIRCarePlanDetail extends FHIRBackboneElement
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_DETAIL;
	const FIELD_CATEGORY = 'category';
	const FIELD_CODE = 'code';
	const FIELD_REASON_CODE = 'reasonCode';
	const FIELD_REASON_REFERENCE = 'reasonReference';
	const FIELD_GOAL = 'goal';
	const FIELD_STATUS = 'status';
	const FIELD_STATUS_EXT = '_status';
	const FIELD_STATUS_REASON = 'statusReason';
	const FIELD_PROHIBITED = 'prohibited';
	const FIELD_PROHIBITED_EXT = '_prohibited';
	const FIELD_SCHEDULED_TIMING = 'scheduledTiming';
	const FIELD_SCHEDULED_PERIOD = 'scheduledPeriod';
	const FIELD_SCHEDULED_STRING = 'scheduledString';
	const FIELD_SCHEDULED_STRING_EXT = '_scheduledString';
	const FIELD_LOCATION = 'location';
	const FIELD_PERFORMER = 'performer';
	const FIELD_PRODUCT_CODEABLE_CONCEPT = 'productCodeableConcept';
	const FIELD_PRODUCT_REFERENCE = 'productReference';
	const FIELD_DAILY_AMOUNT = 'dailyAmount';
	const FIELD_QUANTITY = 'quantity';
	const FIELD_DESCRIPTION = 'description';
	const FIELD_DESCRIPTION_EXT = '_description';

	/** @var string */
	private $_xmlns = '';

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * High-level categorization of the type of activity in a care plan.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	protected ?FHIRCodeableConcept $category = null;

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Detailed description of the type of planned activity; e.g. What lab test, what
	 * procedure, what kind of encounter.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	protected ?FHIRCodeableConcept $code = null;

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Provides the rationale that drove the inclusion of this particular activity as
	 * part of the plan.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept[]
	 */
	protected ?array $reasonCode = [];

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Provides the health condition(s) that drove the inclusion of this particular
	 * activity as part of the plan.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	protected ?array $reasonReference = [];

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Internal reference that identifies the goals that this activity is intended to
	 * contribute towards meeting.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	protected ?array $goal = [];

	/**
	 * Indicates where the activity is at in its overall life cycle.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Identifies what progress is being made for the specific activity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCarePlanActivityStatus
	 */
	protected ?FHIRCarePlanActivityStatus $status = null;

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Provides reason why the activity isn't yet started, is on hold, was cancelled,
	 * etc.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	protected ?FHIRCodeableConcept $statusReason = null;

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If true, indicates that the described activity is one that must NOT be engaged
	 * in when following the plan.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
	 */
	protected ?FHIRBoolean $prohibited = null;

	/**
	 * Specifies an event that may occur multiple times. Timing schedules are used to
	 * record when things are expected or requested to occur. The most common usage is
	 * in dosage instructions for medications. They are also used when planning care of
	 * various kinds.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The period, timing or frequency upon which the described activity is to occur.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTiming
	 */
	protected ?FHIRTiming $scheduledTiming = null;

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The period, timing or frequency upon which the described activity is to occur.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod
	 */
	protected ?FHIRPeriod $scheduledPeriod = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The period, timing or frequency upon which the described activity is to occur.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $scheduledString = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies the facility where the activity will occur; e.g. home, hospital,
	 * specific clinic, etc.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $location = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies who's expected to be involved in the activity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	protected ?array $performer = [];

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies the food, drug or other product to be consumed or supplied in the
	 * activity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	protected ?FHIRCodeableConcept $productCodeableConcept = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies the food, drug or other product to be consumed or supplied in the
	 * activity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $productReference = null;

	/**
	 * Identifies the quantity expected to be consumed in a given day.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
	 */
	protected ?FHIRSimpleQuantity $dailyAmount = null;

	/**
	 * Identifies the quantity expected to be supplied, administered or consumed by the
	 * subject.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
	 */
	protected ?FHIRSimpleQuantity $quantity = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * This provides a textual description of constraints on the intended activity
	 * occurrence, including relation to other activities. It may also include
	 * objectives, pre-conditions and end-conditions. Finally, it may convey specifics
	 * about the activity such as body site, method, route, etc.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $description = null;

	/**
	 * Validation map for fields in type CarePlan.Detail
	 * @var array
	 */
	private static array $_validationRules = [];

	/**
	 * FHIRCarePlanDetail Constructor
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
					'FHIRCarePlanDetail::_construct - $data expected to be null or array, %s seen',
					gettype($data),
				),
			);
		}
		parent::__construct($data);
		if (isset($data[self::FIELD_CATEGORY])) {
			if ($data[self::FIELD_CATEGORY] instanceof FHIRCodeableConcept) {
				$this->setCategory($data[self::FIELD_CATEGORY]);
			} else {
				$this->setCategory(new FHIRCodeableConcept($data[self::FIELD_CATEGORY]));
			}
		}
		if (isset($data[self::FIELD_CODE])) {
			if ($data[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
				$this->setCode($data[self::FIELD_CODE]);
			} else {
				$this->setCode(new FHIRCodeableConcept($data[self::FIELD_CODE]));
			}
		}
		if (isset($data[self::FIELD_REASON_CODE])) {
			if (is_array($data[self::FIELD_REASON_CODE])) {
				foreach ($data[self::FIELD_REASON_CODE] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRCodeableConcept) {
						$this->addReasonCode($v);
					} else {
						$this->addReasonCode(new FHIRCodeableConcept($v));
					}
				}
			} elseif ($data[self::FIELD_REASON_CODE] instanceof FHIRCodeableConcept) {
				$this->addReasonCode($data[self::FIELD_REASON_CODE]);
			} else {
				$this->addReasonCode(new FHIRCodeableConcept($data[self::FIELD_REASON_CODE]));
			}
		}
		if (isset($data[self::FIELD_REASON_REFERENCE])) {
			if (is_array($data[self::FIELD_REASON_REFERENCE])) {
				foreach ($data[self::FIELD_REASON_REFERENCE] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRReference) {
						$this->addReasonReference($v);
					} else {
						$this->addReasonReference(new FHIRReference($v));
					}
				}
			} elseif ($data[self::FIELD_REASON_REFERENCE] instanceof FHIRReference) {
				$this->addReasonReference($data[self::FIELD_REASON_REFERENCE]);
			} else {
				$this->addReasonReference(new FHIRReference($data[self::FIELD_REASON_REFERENCE]));
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
		if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
			$value = $data[self::FIELD_STATUS] ?? null;
			$ext =
				isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])
					? $data[self::FIELD_STATUS_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRCarePlanActivityStatus) {
					$this->setStatus($value);
				} elseif (is_array($value)) {
					$this->setStatus(new FHIRCarePlanActivityStatus(array_merge($ext, $value)));
				} else {
					$this->setStatus(
						new FHIRCarePlanActivityStatus(
							[FHIRCarePlanActivityStatus::FIELD_VALUE => $value] + $ext,
						),
					);
				}
			} elseif ([] !== $ext) {
				$this->setStatus(new FHIRCarePlanActivityStatus($ext));
			}
		}
		if (isset($data[self::FIELD_STATUS_REASON])) {
			if ($data[self::FIELD_STATUS_REASON] instanceof FHIRCodeableConcept) {
				$this->setStatusReason($data[self::FIELD_STATUS_REASON]);
			} else {
				$this->setStatusReason(new FHIRCodeableConcept($data[self::FIELD_STATUS_REASON]));
			}
		}
		if (isset($data[self::FIELD_PROHIBITED]) || isset($data[self::FIELD_PROHIBITED_EXT])) {
			$value = $data[self::FIELD_PROHIBITED] ?? null;
			$ext =
				isset($data[self::FIELD_PROHIBITED_EXT]) &&
				is_array($data[self::FIELD_PROHIBITED_EXT])
					? $data[self::FIELD_PROHIBITED_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRBoolean) {
					$this->setProhibited($value);
				} elseif (is_array($value)) {
					$this->setProhibited(new FHIRBoolean(array_merge($ext, $value)));
				} else {
					$this->setProhibited(
						new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setProhibited(new FHIRBoolean($ext));
			}
		}
		if (isset($data[self::FIELD_SCHEDULED_TIMING])) {
			if ($data[self::FIELD_SCHEDULED_TIMING] instanceof FHIRTiming) {
				$this->setScheduledTiming($data[self::FIELD_SCHEDULED_TIMING]);
			} else {
				$this->setScheduledTiming(new FHIRTiming($data[self::FIELD_SCHEDULED_TIMING]));
			}
		}
		if (isset($data[self::FIELD_SCHEDULED_PERIOD])) {
			if ($data[self::FIELD_SCHEDULED_PERIOD] instanceof FHIRPeriod) {
				$this->setScheduledPeriod($data[self::FIELD_SCHEDULED_PERIOD]);
			} else {
				$this->setScheduledPeriod(new FHIRPeriod($data[self::FIELD_SCHEDULED_PERIOD]));
			}
		}
		if (
			isset($data[self::FIELD_SCHEDULED_STRING]) ||
			isset($data[self::FIELD_SCHEDULED_STRING_EXT])
		) {
			$value = $data[self::FIELD_SCHEDULED_STRING] ?? null;
			$ext =
				isset($data[self::FIELD_SCHEDULED_STRING_EXT]) &&
				is_array($data[self::FIELD_SCHEDULED_STRING_EXT])
					? $data[self::FIELD_SCHEDULED_STRING_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->setScheduledString($value);
				} elseif (is_array($value)) {
					$this->setScheduledString(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->setScheduledString(
						new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setScheduledString(new FHIRString($ext));
			}
		}
		if (isset($data[self::FIELD_LOCATION])) {
			if ($data[self::FIELD_LOCATION] instanceof FHIRReference) {
				$this->setLocation($data[self::FIELD_LOCATION]);
			} else {
				$this->setLocation(new FHIRReference($data[self::FIELD_LOCATION]));
			}
		}
		if (isset($data[self::FIELD_PERFORMER])) {
			if (is_array($data[self::FIELD_PERFORMER])) {
				foreach ($data[self::FIELD_PERFORMER] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRReference) {
						$this->addPerformer($v);
					} else {
						$this->addPerformer(new FHIRReference($v));
					}
				}
			} elseif ($data[self::FIELD_PERFORMER] instanceof FHIRReference) {
				$this->addPerformer($data[self::FIELD_PERFORMER]);
			} else {
				$this->addPerformer(new FHIRReference($data[self::FIELD_PERFORMER]));
			}
		}
		if (isset($data[self::FIELD_PRODUCT_CODEABLE_CONCEPT])) {
			if ($data[self::FIELD_PRODUCT_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
				$this->setProductCodeableConcept($data[self::FIELD_PRODUCT_CODEABLE_CONCEPT]);
			} else {
				$this->setProductCodeableConcept(
					new FHIRCodeableConcept($data[self::FIELD_PRODUCT_CODEABLE_CONCEPT]),
				);
			}
		}
		if (isset($data[self::FIELD_PRODUCT_REFERENCE])) {
			if ($data[self::FIELD_PRODUCT_REFERENCE] instanceof FHIRReference) {
				$this->setProductReference($data[self::FIELD_PRODUCT_REFERENCE]);
			} else {
				$this->setProductReference(new FHIRReference($data[self::FIELD_PRODUCT_REFERENCE]));
			}
		}
		if (isset($data[self::FIELD_DAILY_AMOUNT])) {
			if ($data[self::FIELD_DAILY_AMOUNT] instanceof FHIRSimpleQuantity) {
				$this->setDailyAmount($data[self::FIELD_DAILY_AMOUNT]);
			} else {
				$this->setDailyAmount(new FHIRSimpleQuantity($data[self::FIELD_DAILY_AMOUNT]));
			}
		}
		if (isset($data[self::FIELD_QUANTITY])) {
			if ($data[self::FIELD_QUANTITY] instanceof FHIRSimpleQuantity) {
				$this->setQuantity($data[self::FIELD_QUANTITY]);
			} else {
				$this->setQuantity(new FHIRSimpleQuantity($data[self::FIELD_QUANTITY]));
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
		return "<CarePlanDetail{$xmlns}></CarePlanDetail>";
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * High-level categorization of the type of activity in a care plan.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	public function getCategory(): ?FHIRCodeableConcept
	{
		return $this->category;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * High-level categorization of the type of activity in a care plan.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $category
	 * @return static
	 */
	public function setCategory(?FHIRCodeableConcept $category = null): object
	{
		$this->_trackValueSet($this->category, $category);
		$this->category = $category;
		return $this;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Detailed description of the type of planned activity; e.g. What lab test, what
	 * procedure, what kind of encounter.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	public function getCode(): ?FHIRCodeableConcept
	{
		return $this->code;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Detailed description of the type of planned activity; e.g. What lab test, what
	 * procedure, what kind of encounter.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $code
	 * @return static
	 */
	public function setCode(?FHIRCodeableConcept $code = null): object
	{
		$this->_trackValueSet($this->code, $code);
		$this->code = $code;
		return $this;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Provides the rationale that drove the inclusion of this particular activity as
	 * part of the plan.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept[]
	 */
	public function getReasonCode(): ?array
	{
		return $this->reasonCode;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Provides the rationale that drove the inclusion of this particular activity as
	 * part of the plan.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $reasonCode
	 * @return static
	 */
	public function addReasonCode(?FHIRCodeableConcept $reasonCode = null): object
	{
		$this->_trackValueAdded();
		$this->reasonCode[] = $reasonCode;
		return $this;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Provides the rationale that drove the inclusion of this particular activity as
	 * part of the plan.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept[] $reasonCode
	 * @return static
	 */
	public function setReasonCode(array $reasonCode = []): object
	{
		if ([] !== $this->reasonCode) {
			$this->_trackValuesRemoved(count($this->reasonCode));
			$this->reasonCode = [];
		}
		if ([] === $reasonCode) {
			return $this;
		}
		foreach ($reasonCode as $v) {
			if ($v instanceof FHIRCodeableConcept) {
				$this->addReasonCode($v);
			} else {
				$this->addReasonCode(new FHIRCodeableConcept($v));
			}
		}
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Provides the health condition(s) that drove the inclusion of this particular
	 * activity as part of the plan.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	public function getReasonReference(): ?array
	{
		return $this->reasonReference;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Provides the health condition(s) that drove the inclusion of this particular
	 * activity as part of the plan.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $reasonReference
	 * @return static
	 */
	public function addReasonReference(?FHIRReference $reasonReference = null): object
	{
		$this->_trackValueAdded();
		$this->reasonReference[] = $reasonReference;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Provides the health condition(s) that drove the inclusion of this particular
	 * activity as part of the plan.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[] $reasonReference
	 * @return static
	 */
	public function setReasonReference(array $reasonReference = []): object
	{
		if ([] !== $this->reasonReference) {
			$this->_trackValuesRemoved(count($this->reasonReference));
			$this->reasonReference = [];
		}
		if ([] === $reasonReference) {
			return $this;
		}
		foreach ($reasonReference as $v) {
			if ($v instanceof FHIRReference) {
				$this->addReasonReference($v);
			} else {
				$this->addReasonReference(new FHIRReference($v));
			}
		}
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Internal reference that identifies the goals that this activity is intended to
	 * contribute towards meeting.
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
	 * Internal reference that identifies the goals that this activity is intended to
	 * contribute towards meeting.
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
	 * Internal reference that identifies the goals that this activity is intended to
	 * contribute towards meeting.
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
	 * Indicates where the activity is at in its overall life cycle.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Identifies what progress is being made for the specific activity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCarePlanActivityStatus
	 */
	public function getStatus(): ?FHIRCarePlanActivityStatus
	{
		return $this->status;
	}

	/**
	 * Indicates where the activity is at in its overall life cycle.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Identifies what progress is being made for the specific activity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCarePlanActivityStatus $status
	 * @return static
	 */
	public function setStatus(?FHIRCarePlanActivityStatus $status = null): object
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
	 * Provides reason why the activity isn't yet started, is on hold, was cancelled,
	 * etc.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	public function getStatusReason(): ?FHIRCodeableConcept
	{
		return $this->statusReason;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Provides reason why the activity isn't yet started, is on hold, was cancelled,
	 * etc.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $statusReason
	 * @return static
	 */
	public function setStatusReason(?FHIRCodeableConcept $statusReason = null): object
	{
		$this->_trackValueSet($this->statusReason, $statusReason);
		$this->statusReason = $statusReason;
		return $this;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If true, indicates that the described activity is one that must NOT be engaged
	 * in when following the plan.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
	 */
	public function getProhibited(): ?FHIRBoolean
	{
		return $this->prohibited;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If true, indicates that the described activity is one that must NOT be engaged
	 * in when following the plan.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean $prohibited
	 * @return static
	 */
	public function setProhibited($prohibited = null): object
	{
		if (null !== $prohibited && !($prohibited instanceof FHIRBoolean)) {
			$prohibited = new FHIRBoolean($prohibited);
		}
		$this->_trackValueSet($this->prohibited, $prohibited);
		$this->prohibited = $prohibited;
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
	 * The period, timing or frequency upon which the described activity is to occur.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTiming
	 */
	public function getScheduledTiming(): ?FHIRTiming
	{
		return $this->scheduledTiming;
	}

	/**
	 * Specifies an event that may occur multiple times. Timing schedules are used to
	 * record when things are expected or requested to occur. The most common usage is
	 * in dosage instructions for medications. They are also used when planning care of
	 * various kinds.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The period, timing or frequency upon which the described activity is to occur.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTiming $scheduledTiming
	 * @return static
	 */
	public function setScheduledTiming(?FHIRTiming $scheduledTiming = null): object
	{
		$this->_trackValueSet($this->scheduledTiming, $scheduledTiming);
		$this->scheduledTiming = $scheduledTiming;
		return $this;
	}

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The period, timing or frequency upon which the described activity is to occur.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod
	 */
	public function getScheduledPeriod(): ?FHIRPeriod
	{
		return $this->scheduledPeriod;
	}

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The period, timing or frequency upon which the described activity is to occur.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod $scheduledPeriod
	 * @return static
	 */
	public function setScheduledPeriod(?FHIRPeriod $scheduledPeriod = null): object
	{
		$this->_trackValueSet($this->scheduledPeriod, $scheduledPeriod);
		$this->scheduledPeriod = $scheduledPeriod;
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The period, timing or frequency upon which the described activity is to occur.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	public function getScheduledString(): ?FHIRString
	{
		return $this->scheduledString;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The period, timing or frequency upon which the described activity is to occur.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString $scheduledString
	 * @return static
	 */
	public function setScheduledString($scheduledString = null): object
	{
		if (null !== $scheduledString && !($scheduledString instanceof FHIRString)) {
			$scheduledString = new FHIRString($scheduledString);
		}
		$this->_trackValueSet($this->scheduledString, $scheduledString);
		$this->scheduledString = $scheduledString;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies the facility where the activity will occur; e.g. home, hospital,
	 * specific clinic, etc.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getLocation(): ?FHIRReference
	{
		return $this->location;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies the facility where the activity will occur; e.g. home, hospital,
	 * specific clinic, etc.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $location
	 * @return static
	 */
	public function setLocation(?FHIRReference $location = null): object
	{
		$this->_trackValueSet($this->location, $location);
		$this->location = $location;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies who's expected to be involved in the activity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	public function getPerformer(): ?array
	{
		return $this->performer;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies who's expected to be involved in the activity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $performer
	 * @return static
	 */
	public function addPerformer(?FHIRReference $performer = null): object
	{
		$this->_trackValueAdded();
		$this->performer[] = $performer;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies who's expected to be involved in the activity.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[] $performer
	 * @return static
	 */
	public function setPerformer(array $performer = []): object
	{
		if ([] !== $this->performer) {
			$this->_trackValuesRemoved(count($this->performer));
			$this->performer = [];
		}
		if ([] === $performer) {
			return $this;
		}
		foreach ($performer as $v) {
			if ($v instanceof FHIRReference) {
				$this->addPerformer($v);
			} else {
				$this->addPerformer(new FHIRReference($v));
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
	 * Identifies the food, drug or other product to be consumed or supplied in the
	 * activity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	public function getProductCodeableConcept(): ?FHIRCodeableConcept
	{
		return $this->productCodeableConcept;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies the food, drug or other product to be consumed or supplied in the
	 * activity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $productCodeableConcept
	 * @return static
	 */
	public function setProductCodeableConcept(
		?FHIRCodeableConcept $productCodeableConcept = null,
	): object {
		$this->_trackValueSet($this->productCodeableConcept, $productCodeableConcept);
		$this->productCodeableConcept = $productCodeableConcept;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies the food, drug or other product to be consumed or supplied in the
	 * activity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getProductReference(): ?FHIRReference
	{
		return $this->productReference;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies the food, drug or other product to be consumed or supplied in the
	 * activity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $productReference
	 * @return static
	 */
	public function setProductReference(?FHIRReference $productReference = null): object
	{
		$this->_trackValueSet($this->productReference, $productReference);
		$this->productReference = $productReference;
		return $this;
	}

	/**
	 * Identifies the quantity expected to be consumed in a given day.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
	 */
	public function getDailyAmount(): ?FHIRSimpleQuantity
	{
		return $this->dailyAmount;
	}

	/**
	 * Identifies the quantity expected to be consumed in a given day.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity $dailyAmount
	 * @return static
	 */
	public function setDailyAmount(?FHIRSimpleQuantity $dailyAmount = null): object
	{
		$this->_trackValueSet($this->dailyAmount, $dailyAmount);
		$this->dailyAmount = $dailyAmount;
		return $this;
	}

	/**
	 * Identifies the quantity expected to be supplied, administered or consumed by the
	 * subject.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
	 */
	public function getQuantity(): ?FHIRSimpleQuantity
	{
		return $this->quantity;
	}

	/**
	 * Identifies the quantity expected to be supplied, administered or consumed by the
	 * subject.
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
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * This provides a textual description of constraints on the intended activity
	 * occurrence, including relation to other activities. It may also include
	 * objectives, pre-conditions and end-conditions. Finally, it may convey specifics
	 * about the activity such as body site, method, route, etc.
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
	 * This provides a textual description of constraints on the intended activity
	 * occurrence, including relation to other activities. It may also include
	 * objectives, pre-conditions and end-conditions. Finally, it may convey specifics
	 * about the activity such as body site, method, route, etc.
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
		if (null !== ($v = $this->getCategory())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_CATEGORY] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getCode())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_CODE] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getReasonCode())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_REASON_CODE, $i)] = $fieldErrs;
				}
			}
		}
		if ([] !== ($vs = $this->getReasonReference())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_REASON_REFERENCE, $i)] = $fieldErrs;
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
		if (null !== ($v = $this->getStatus())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_STATUS] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getStatusReason())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_STATUS_REASON] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getProhibited())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PROHIBITED] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getScheduledTiming())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_SCHEDULED_TIMING] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getScheduledPeriod())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_SCHEDULED_PERIOD] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getScheduledString())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_SCHEDULED_STRING] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getLocation())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_LOCATION] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getPerformer())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_PERFORMER, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getProductCodeableConcept())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PRODUCT_CODEABLE_CONCEPT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getProductReference())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PRODUCT_REFERENCE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDailyAmount())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DAILY_AMOUNT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getQuantity())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_QUANTITY] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDescription())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DESCRIPTION] = $fieldErrs;
			}
		}
		if (isset($validationRules[self::FIELD_CATEGORY])) {
			$v = $this->getCategory();
			foreach ($validationRules[self::FIELD_CATEGORY] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_DETAIL,
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
		if (isset($validationRules[self::FIELD_CODE])) {
			$v = $this->getCode();
			foreach ($validationRules[self::FIELD_CODE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_DETAIL,
					self::FIELD_CODE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_CODE])) {
						$errs[self::FIELD_CODE] = [];
					}
					$errs[self::FIELD_CODE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_REASON_CODE])) {
			$v = $this->getReasonCode();
			foreach ($validationRules[self::FIELD_REASON_CODE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_DETAIL,
					self::FIELD_REASON_CODE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_REASON_CODE])) {
						$errs[self::FIELD_REASON_CODE] = [];
					}
					$errs[self::FIELD_REASON_CODE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_REASON_REFERENCE])) {
			$v = $this->getReasonReference();
			foreach ($validationRules[self::FIELD_REASON_REFERENCE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_DETAIL,
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
		if (isset($validationRules[self::FIELD_GOAL])) {
			$v = $this->getGoal();
			foreach ($validationRules[self::FIELD_GOAL] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_DETAIL,
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
		if (isset($validationRules[self::FIELD_STATUS])) {
			$v = $this->getStatus();
			foreach ($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_DETAIL,
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
		if (isset($validationRules[self::FIELD_STATUS_REASON])) {
			$v = $this->getStatusReason();
			foreach ($validationRules[self::FIELD_STATUS_REASON] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_DETAIL,
					self::FIELD_STATUS_REASON,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_STATUS_REASON])) {
						$errs[self::FIELD_STATUS_REASON] = [];
					}
					$errs[self::FIELD_STATUS_REASON][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PROHIBITED])) {
			$v = $this->getProhibited();
			foreach ($validationRules[self::FIELD_PROHIBITED] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_DETAIL,
					self::FIELD_PROHIBITED,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PROHIBITED])) {
						$errs[self::FIELD_PROHIBITED] = [];
					}
					$errs[self::FIELD_PROHIBITED][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_SCHEDULED_TIMING])) {
			$v = $this->getScheduledTiming();
			foreach ($validationRules[self::FIELD_SCHEDULED_TIMING] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_DETAIL,
					self::FIELD_SCHEDULED_TIMING,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_SCHEDULED_TIMING])) {
						$errs[self::FIELD_SCHEDULED_TIMING] = [];
					}
					$errs[self::FIELD_SCHEDULED_TIMING][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_SCHEDULED_PERIOD])) {
			$v = $this->getScheduledPeriod();
			foreach ($validationRules[self::FIELD_SCHEDULED_PERIOD] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_DETAIL,
					self::FIELD_SCHEDULED_PERIOD,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_SCHEDULED_PERIOD])) {
						$errs[self::FIELD_SCHEDULED_PERIOD] = [];
					}
					$errs[self::FIELD_SCHEDULED_PERIOD][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_SCHEDULED_STRING])) {
			$v = $this->getScheduledString();
			foreach ($validationRules[self::FIELD_SCHEDULED_STRING] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_DETAIL,
					self::FIELD_SCHEDULED_STRING,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_SCHEDULED_STRING])) {
						$errs[self::FIELD_SCHEDULED_STRING] = [];
					}
					$errs[self::FIELD_SCHEDULED_STRING][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_LOCATION])) {
			$v = $this->getLocation();
			foreach ($validationRules[self::FIELD_LOCATION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_DETAIL,
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
		if (isset($validationRules[self::FIELD_PERFORMER])) {
			$v = $this->getPerformer();
			foreach ($validationRules[self::FIELD_PERFORMER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_DETAIL,
					self::FIELD_PERFORMER,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PERFORMER])) {
						$errs[self::FIELD_PERFORMER] = [];
					}
					$errs[self::FIELD_PERFORMER][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PRODUCT_CODEABLE_CONCEPT])) {
			$v = $this->getProductCodeableConcept();
			foreach (
				$validationRules[self::FIELD_PRODUCT_CODEABLE_CONCEPT]
				as $rule => $constraint
			) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_DETAIL,
					self::FIELD_PRODUCT_CODEABLE_CONCEPT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PRODUCT_CODEABLE_CONCEPT])) {
						$errs[self::FIELD_PRODUCT_CODEABLE_CONCEPT] = [];
					}
					$errs[self::FIELD_PRODUCT_CODEABLE_CONCEPT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PRODUCT_REFERENCE])) {
			$v = $this->getProductReference();
			foreach ($validationRules[self::FIELD_PRODUCT_REFERENCE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_DETAIL,
					self::FIELD_PRODUCT_REFERENCE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PRODUCT_REFERENCE])) {
						$errs[self::FIELD_PRODUCT_REFERENCE] = [];
					}
					$errs[self::FIELD_PRODUCT_REFERENCE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DAILY_AMOUNT])) {
			$v = $this->getDailyAmount();
			foreach ($validationRules[self::FIELD_DAILY_AMOUNT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_DETAIL,
					self::FIELD_DAILY_AMOUNT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DAILY_AMOUNT])) {
						$errs[self::FIELD_DAILY_AMOUNT] = [];
					}
					$errs[self::FIELD_DAILY_AMOUNT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_QUANTITY])) {
			$v = $this->getQuantity();
			foreach ($validationRules[self::FIELD_QUANTITY] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_DETAIL,
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
		if (isset($validationRules[self::FIELD_DESCRIPTION])) {
			$v = $this->getDescription();
			foreach ($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_DETAIL,
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail
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
						'FHIRCarePlanDetail::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRCarePlanDetail::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRCarePlanDetail(null);
		} elseif (!is_object($type) || !($type instanceof FHIRCarePlanDetail)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRCarePlanDetail::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail or null, %s seen.',
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
			if (self::FIELD_CATEGORY === $n->nodeName) {
				$type->setCategory(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_CODE === $n->nodeName) {
				$type->setCode(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_REASON_CODE === $n->nodeName) {
				$type->addReasonCode(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_REASON_REFERENCE === $n->nodeName) {
				$type->addReasonReference(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_GOAL === $n->nodeName) {
				$type->addGoal(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_STATUS === $n->nodeName) {
				$type->setStatus(FHIRCarePlanActivityStatus::xmlUnserialize($n));
			} elseif (self::FIELD_STATUS_REASON === $n->nodeName) {
				$type->setStatusReason(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_PROHIBITED === $n->nodeName) {
				$type->setProhibited(FHIRBoolean::xmlUnserialize($n));
			} elseif (self::FIELD_SCHEDULED_TIMING === $n->nodeName) {
				$type->setScheduledTiming(FHIRTiming::xmlUnserialize($n));
			} elseif (self::FIELD_SCHEDULED_PERIOD === $n->nodeName) {
				$type->setScheduledPeriod(FHIRPeriod::xmlUnserialize($n));
			} elseif (self::FIELD_SCHEDULED_STRING === $n->nodeName) {
				$type->setScheduledString(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_LOCATION === $n->nodeName) {
				$type->setLocation(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_PERFORMER === $n->nodeName) {
				$type->addPerformer(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_PRODUCT_CODEABLE_CONCEPT === $n->nodeName) {
				$type->setProductCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_PRODUCT_REFERENCE === $n->nodeName) {
				$type->setProductReference(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_DAILY_AMOUNT === $n->nodeName) {
				$type->setDailyAmount(FHIRSimpleQuantity::xmlUnserialize($n));
			} elseif (self::FIELD_QUANTITY === $n->nodeName) {
				$type->setQuantity(FHIRSimpleQuantity::xmlUnserialize($n));
			} elseif (self::FIELD_DESCRIPTION === $n->nodeName) {
				$type->setDescription(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
				$type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_EXTENSION === $n->nodeName) {
				$type->addExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_ID === $n->nodeName) {
				$type->setId(FHIRIdPrimitive::xmlUnserialize($n));
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_PROHIBITED);
		if (null !== $n) {
			$pt = $type->getProhibited();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setProhibited($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_SCHEDULED_STRING);
		if (null !== $n) {
			$pt = $type->getScheduledString();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setScheduledString($n->nodeValue);
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
		if (null !== ($v = $this->getCategory())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_CATEGORY);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getCode())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_CODE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getReasonCode())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_REASON_CODE);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if ([] !== ($vs = $this->getReasonReference())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_REASON_REFERENCE);
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
		if (null !== ($v = $this->getStatus())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_STATUS);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getStatusReason())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_STATUS_REASON);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getProhibited())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PROHIBITED);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getScheduledTiming())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_SCHEDULED_TIMING);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getScheduledPeriod())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_SCHEDULED_PERIOD);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getScheduledString())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_SCHEDULED_STRING);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getLocation())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_LOCATION);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getPerformer())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_PERFORMER);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if (null !== ($v = $this->getProductCodeableConcept())) {
			$telement = $element->ownerDocument->createElement(
				self::FIELD_PRODUCT_CODEABLE_CONCEPT,
			);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getProductReference())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PRODUCT_REFERENCE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDailyAmount())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DAILY_AMOUNT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getQuantity())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_QUANTITY);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDescription())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DESCRIPTION);
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
		if (null !== ($v = $this->getCategory())) {
			$out->{self::FIELD_CATEGORY} = $v;
		}
		if (null !== ($v = $this->getCode())) {
			$out->{self::FIELD_CODE} = $v;
		}
		if ([] !== ($vs = $this->getReasonCode())) {
			$out->{self::FIELD_REASON_CODE} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_REASON_CODE}[] = $v;
			}
		}
		if ([] !== ($vs = $this->getReasonReference())) {
			$out->{self::FIELD_REASON_REFERENCE} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_REASON_REFERENCE}[] = $v;
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
		if (null !== ($v = $this->getStatus())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_STATUS} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRCarePlanActivityStatus::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_STATUS_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getStatusReason())) {
			$out->{self::FIELD_STATUS_REASON} = $v;
		}
		if (null !== ($v = $this->getProhibited())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_PROHIBITED} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRBoolean::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_PROHIBITED_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getScheduledTiming())) {
			$out->{self::FIELD_SCHEDULED_TIMING} = $v;
		}
		if (null !== ($v = $this->getScheduledPeriod())) {
			$out->{self::FIELD_SCHEDULED_PERIOD} = $v;
		}
		if (null !== ($v = $this->getScheduledString())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_SCHEDULED_STRING} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRString::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_SCHEDULED_STRING_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getLocation())) {
			$out->{self::FIELD_LOCATION} = $v;
		}
		if ([] !== ($vs = $this->getPerformer())) {
			$out->{self::FIELD_PERFORMER} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_PERFORMER}[] = $v;
			}
		}
		if (null !== ($v = $this->getProductCodeableConcept())) {
			$out->{self::FIELD_PRODUCT_CODEABLE_CONCEPT} = $v;
		}
		if (null !== ($v = $this->getProductReference())) {
			$out->{self::FIELD_PRODUCT_REFERENCE} = $v;
		}
		if (null !== ($v = $this->getDailyAmount())) {
			$out->{self::FIELD_DAILY_AMOUNT} = $v;
		}
		if (null !== ($v = $this->getQuantity())) {
			$out->{self::FIELD_QUANTITY} = $v;
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
