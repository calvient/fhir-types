<?php declare(strict_types=1);

namespace Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent;

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

use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAuditEventAction;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAuditEventOutcome;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRExtension;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstant;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString;
use Calvient\FhirTypes\DSTU2\FHIRIdPrimitive;
use Calvient\FhirTypes\DSTU2\PHPFHIRConstants;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeInterface;

/**
 * A record of an event made for purposes of maintaining a security log. Typical
 * uses include detection of intrusion attempts and monitoring for inappropriate
 * usage.
 *
 * Class FHIRAuditEventEvent
 * @package \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent
 */
class FHIRAuditEventEvent extends FHIRBackboneElement
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT_DOT_EVENT;
	const FIELD_TYPE = 'type';
	const FIELD_SUBTYPE = 'subtype';
	const FIELD_ACTION = 'action';
	const FIELD_ACTION_EXT = '_action';
	const FIELD_DATE_TIME = 'dateTime';
	const FIELD_DATE_TIME_EXT = '_dateTime';
	const FIELD_OUTCOME = 'outcome';
	const FIELD_OUTCOME_EXT = '_outcome';
	const FIELD_OUTCOME_DESC = 'outcomeDesc';
	const FIELD_OUTCOME_DESC_EXT = '_outcomeDesc';
	const FIELD_PURPOSE_OF_EVENT = 'purposeOfEvent';

	/** @var string */
	private $_xmlns = '';

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifier for a family of the event. For example, a menu item, program, rule,
	 * policy, function code, application name or URL. It identifies the performed
	 * function.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding
	 */
	protected ?FHIRCoding $type = null;

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifier for the category of event.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding[]
	 */
	protected ?array $subtype = [];

	/**
	 * Indicator for type of action performed during the event that generated the
	 * audit.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Indicator for type of action performed during the event that generated the
	 * audit.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAuditEventAction
	 */
	protected ?FHIRAuditEventAction $action = null;

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for precisely observed times, typically system logs etc.,
	 * and not human-reported times - for them, see date and dateTime below. Time zone
	 * is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The time when the event occurred on the source.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRInstantPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstant
	 */
	protected ?FHIRInstant $dateTime = null;

	/**
	 * Indicates whether the event succeeded or failed
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Indicates whether the event succeeded or failed.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAuditEventOutcome
	 */
	protected ?FHIRAuditEventOutcome $outcome = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A free text description of the outcome of the event.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $outcomeDesc = null;

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The purposeOfUse (reason) that was used during the event being recorded.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding[]
	 */
	protected ?array $purposeOfEvent = [];

	/**
	 * Validation map for fields in type AuditEvent.Event
	 * @var array
	 */
	private static array $_validationRules = [];

	/**
	 * FHIRAuditEventEvent Constructor
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
					'FHIRAuditEventEvent::_construct - $data expected to be null or array, %s seen',
					gettype($data),
				),
			);
		}
		parent::__construct($data);
		if (isset($data[self::FIELD_TYPE])) {
			if ($data[self::FIELD_TYPE] instanceof FHIRCoding) {
				$this->setType($data[self::FIELD_TYPE]);
			} else {
				$this->setType(new FHIRCoding($data[self::FIELD_TYPE]));
			}
		}
		if (isset($data[self::FIELD_SUBTYPE])) {
			if (is_array($data[self::FIELD_SUBTYPE])) {
				foreach ($data[self::FIELD_SUBTYPE] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRCoding) {
						$this->addSubtype($v);
					} else {
						$this->addSubtype(new FHIRCoding($v));
					}
				}
			} elseif ($data[self::FIELD_SUBTYPE] instanceof FHIRCoding) {
				$this->addSubtype($data[self::FIELD_SUBTYPE]);
			} else {
				$this->addSubtype(new FHIRCoding($data[self::FIELD_SUBTYPE]));
			}
		}
		if (isset($data[self::FIELD_ACTION]) || isset($data[self::FIELD_ACTION_EXT])) {
			$value = $data[self::FIELD_ACTION] ?? null;
			$ext =
				isset($data[self::FIELD_ACTION_EXT]) && is_array($data[self::FIELD_ACTION_EXT])
					? $data[self::FIELD_ACTION_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRAuditEventAction) {
					$this->setAction($value);
				} elseif (is_array($value)) {
					$this->setAction(new FHIRAuditEventAction(array_merge($ext, $value)));
				} else {
					$this->setAction(
						new FHIRAuditEventAction(
							[FHIRAuditEventAction::FIELD_VALUE => $value] + $ext,
						),
					);
				}
			} elseif ([] !== $ext) {
				$this->setAction(new FHIRAuditEventAction($ext));
			}
		}
		if (isset($data[self::FIELD_DATE_TIME]) || isset($data[self::FIELD_DATE_TIME_EXT])) {
			$value = $data[self::FIELD_DATE_TIME] ?? null;
			$ext =
				isset($data[self::FIELD_DATE_TIME_EXT]) &&
				is_array($data[self::FIELD_DATE_TIME_EXT])
					? $data[self::FIELD_DATE_TIME_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRInstant) {
					$this->setDateTime($value);
				} elseif (is_array($value)) {
					$this->setDateTime(new FHIRInstant(array_merge($ext, $value)));
				} else {
					$this->setDateTime(
						new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setDateTime(new FHIRInstant($ext));
			}
		}
		if (isset($data[self::FIELD_OUTCOME]) || isset($data[self::FIELD_OUTCOME_EXT])) {
			$value = $data[self::FIELD_OUTCOME] ?? null;
			$ext =
				isset($data[self::FIELD_OUTCOME_EXT]) && is_array($data[self::FIELD_OUTCOME_EXT])
					? $data[self::FIELD_OUTCOME_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRAuditEventOutcome) {
					$this->setOutcome($value);
				} elseif (is_array($value)) {
					$this->setOutcome(new FHIRAuditEventOutcome(array_merge($ext, $value)));
				} else {
					$this->setOutcome(
						new FHIRAuditEventOutcome(
							[FHIRAuditEventOutcome::FIELD_VALUE => $value] + $ext,
						),
					);
				}
			} elseif ([] !== $ext) {
				$this->setOutcome(new FHIRAuditEventOutcome($ext));
			}
		}
		if (isset($data[self::FIELD_OUTCOME_DESC]) || isset($data[self::FIELD_OUTCOME_DESC_EXT])) {
			$value = $data[self::FIELD_OUTCOME_DESC] ?? null;
			$ext =
				isset($data[self::FIELD_OUTCOME_DESC_EXT]) &&
				is_array($data[self::FIELD_OUTCOME_DESC_EXT])
					? $data[self::FIELD_OUTCOME_DESC_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->setOutcomeDesc($value);
				} elseif (is_array($value)) {
					$this->setOutcomeDesc(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->setOutcomeDesc(
						new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setOutcomeDesc(new FHIRString($ext));
			}
		}
		if (isset($data[self::FIELD_PURPOSE_OF_EVENT])) {
			if (is_array($data[self::FIELD_PURPOSE_OF_EVENT])) {
				foreach ($data[self::FIELD_PURPOSE_OF_EVENT] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRCoding) {
						$this->addPurposeOfEvent($v);
					} else {
						$this->addPurposeOfEvent(new FHIRCoding($v));
					}
				}
			} elseif ($data[self::FIELD_PURPOSE_OF_EVENT] instanceof FHIRCoding) {
				$this->addPurposeOfEvent($data[self::FIELD_PURPOSE_OF_EVENT]);
			} else {
				$this->addPurposeOfEvent(new FHIRCoding($data[self::FIELD_PURPOSE_OF_EVENT]));
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
		return "<AuditEventEvent{$xmlns}></AuditEventEvent>";
	}

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifier for a family of the event. For example, a menu item, program, rule,
	 * policy, function code, application name or URL. It identifies the performed
	 * function.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding
	 */
	public function getType(): ?FHIRCoding
	{
		return $this->type;
	}

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifier for a family of the event. For example, a menu item, program, rule,
	 * policy, function code, application name or URL. It identifies the performed
	 * function.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding $type
	 * @return static
	 */
	public function setType(?FHIRCoding $type = null): object
	{
		$this->_trackValueSet($this->type, $type);
		$this->type = $type;
		return $this;
	}

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifier for the category of event.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding[]
	 */
	public function getSubtype(): ?array
	{
		return $this->subtype;
	}

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifier for the category of event.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding $subtype
	 * @return static
	 */
	public function addSubtype(?FHIRCoding $subtype = null): object
	{
		$this->_trackValueAdded();
		$this->subtype[] = $subtype;
		return $this;
	}

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifier for the category of event.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding[] $subtype
	 * @return static
	 */
	public function setSubtype(array $subtype = []): object
	{
		if ([] !== $this->subtype) {
			$this->_trackValuesRemoved(count($this->subtype));
			$this->subtype = [];
		}
		if ([] === $subtype) {
			return $this;
		}
		foreach ($subtype as $v) {
			if ($v instanceof FHIRCoding) {
				$this->addSubtype($v);
			} else {
				$this->addSubtype(new FHIRCoding($v));
			}
		}
		return $this;
	}

	/**
	 * Indicator for type of action performed during the event that generated the
	 * audit.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Indicator for type of action performed during the event that generated the
	 * audit.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAuditEventAction
	 */
	public function getAction(): ?FHIRAuditEventAction
	{
		return $this->action;
	}

	/**
	 * Indicator for type of action performed during the event that generated the
	 * audit.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Indicator for type of action performed during the event that generated the
	 * audit.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAuditEventAction $action
	 * @return static
	 */
	public function setAction(?FHIRAuditEventAction $action = null): object
	{
		$this->_trackValueSet($this->action, $action);
		$this->action = $action;
		return $this;
	}

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for precisely observed times, typically system logs etc.,
	 * and not human-reported times - for them, see date and dateTime below. Time zone
	 * is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The time when the event occurred on the source.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRInstantPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstant
	 */
	public function getDateTime(): ?FHIRInstant
	{
		return $this->dateTime;
	}

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for precisely observed times, typically system logs etc.,
	 * and not human-reported times - for them, see date and dateTime below. Time zone
	 * is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The time when the event occurred on the source.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRInstantPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstant $dateTime
	 * @return static
	 */
	public function setDateTime($dateTime = null): object
	{
		if (null !== $dateTime && !($dateTime instanceof FHIRInstant)) {
			$dateTime = new FHIRInstant($dateTime);
		}
		$this->_trackValueSet($this->dateTime, $dateTime);
		$this->dateTime = $dateTime;
		return $this;
	}

	/**
	 * Indicates whether the event succeeded or failed
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Indicates whether the event succeeded or failed.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAuditEventOutcome
	 */
	public function getOutcome(): ?FHIRAuditEventOutcome
	{
		return $this->outcome;
	}

	/**
	 * Indicates whether the event succeeded or failed
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Indicates whether the event succeeded or failed.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAuditEventOutcome $outcome
	 * @return static
	 */
	public function setOutcome(?FHIRAuditEventOutcome $outcome = null): object
	{
		$this->_trackValueSet($this->outcome, $outcome);
		$this->outcome = $outcome;
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A free text description of the outcome of the event.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	public function getOutcomeDesc(): ?FHIRString
	{
		return $this->outcomeDesc;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A free text description of the outcome of the event.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString $outcomeDesc
	 * @return static
	 */
	public function setOutcomeDesc($outcomeDesc = null): object
	{
		if (null !== $outcomeDesc && !($outcomeDesc instanceof FHIRString)) {
			$outcomeDesc = new FHIRString($outcomeDesc);
		}
		$this->_trackValueSet($this->outcomeDesc, $outcomeDesc);
		$this->outcomeDesc = $outcomeDesc;
		return $this;
	}

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The purposeOfUse (reason) that was used during the event being recorded.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding[]
	 */
	public function getPurposeOfEvent(): ?array
	{
		return $this->purposeOfEvent;
	}

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The purposeOfUse (reason) that was used during the event being recorded.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding $purposeOfEvent
	 * @return static
	 */
	public function addPurposeOfEvent(?FHIRCoding $purposeOfEvent = null): object
	{
		$this->_trackValueAdded();
		$this->purposeOfEvent[] = $purposeOfEvent;
		return $this;
	}

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The purposeOfUse (reason) that was used during the event being recorded.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding[] $purposeOfEvent
	 * @return static
	 */
	public function setPurposeOfEvent(array $purposeOfEvent = []): object
	{
		if ([] !== $this->purposeOfEvent) {
			$this->_trackValuesRemoved(count($this->purposeOfEvent));
			$this->purposeOfEvent = [];
		}
		if ([] === $purposeOfEvent) {
			return $this;
		}
		foreach ($purposeOfEvent as $v) {
			if ($v instanceof FHIRCoding) {
				$this->addPurposeOfEvent($v);
			} else {
				$this->addPurposeOfEvent(new FHIRCoding($v));
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
		if (null !== ($v = $this->getType())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_TYPE] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getSubtype())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_SUBTYPE, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getAction())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_ACTION] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDateTime())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DATE_TIME] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getOutcome())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_OUTCOME] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getOutcomeDesc())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_OUTCOME_DESC] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getPurposeOfEvent())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_PURPOSE_OF_EVENT, $i)] = $fieldErrs;
				}
			}
		}
		if (isset($validationRules[self::FIELD_TYPE])) {
			$v = $this->getType();
			foreach ($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT_DOT_EVENT,
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
		if (isset($validationRules[self::FIELD_SUBTYPE])) {
			$v = $this->getSubtype();
			foreach ($validationRules[self::FIELD_SUBTYPE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT_DOT_EVENT,
					self::FIELD_SUBTYPE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_SUBTYPE])) {
						$errs[self::FIELD_SUBTYPE] = [];
					}
					$errs[self::FIELD_SUBTYPE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_ACTION])) {
			$v = $this->getAction();
			foreach ($validationRules[self::FIELD_ACTION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT_DOT_EVENT,
					self::FIELD_ACTION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_ACTION])) {
						$errs[self::FIELD_ACTION] = [];
					}
					$errs[self::FIELD_ACTION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DATE_TIME])) {
			$v = $this->getDateTime();
			foreach ($validationRules[self::FIELD_DATE_TIME] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT_DOT_EVENT,
					self::FIELD_DATE_TIME,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DATE_TIME])) {
						$errs[self::FIELD_DATE_TIME] = [];
					}
					$errs[self::FIELD_DATE_TIME][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_OUTCOME])) {
			$v = $this->getOutcome();
			foreach ($validationRules[self::FIELD_OUTCOME] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT_DOT_EVENT,
					self::FIELD_OUTCOME,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_OUTCOME])) {
						$errs[self::FIELD_OUTCOME] = [];
					}
					$errs[self::FIELD_OUTCOME][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_OUTCOME_DESC])) {
			$v = $this->getOutcomeDesc();
			foreach ($validationRules[self::FIELD_OUTCOME_DESC] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT_DOT_EVENT,
					self::FIELD_OUTCOME_DESC,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_OUTCOME_DESC])) {
						$errs[self::FIELD_OUTCOME_DESC] = [];
					}
					$errs[self::FIELD_OUTCOME_DESC][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PURPOSE_OF_EVENT])) {
			$v = $this->getPurposeOfEvent();
			foreach ($validationRules[self::FIELD_PURPOSE_OF_EVENT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT_DOT_EVENT,
					self::FIELD_PURPOSE_OF_EVENT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PURPOSE_OF_EVENT])) {
						$errs[self::FIELD_PURPOSE_OF_EVENT] = [];
					}
					$errs[self::FIELD_PURPOSE_OF_EVENT][$rule] = $err;
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventEvent $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventEvent
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
						'FHIRAuditEventEvent::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRAuditEventEvent::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRAuditEventEvent(null);
		} elseif (!is_object($type) || !($type instanceof FHIRAuditEventEvent)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRAuditEventEvent::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventEvent or null, %s seen.',
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
			if (self::FIELD_TYPE === $n->nodeName) {
				$type->setType(FHIRCoding::xmlUnserialize($n));
			} elseif (self::FIELD_SUBTYPE === $n->nodeName) {
				$type->addSubtype(FHIRCoding::xmlUnserialize($n));
			} elseif (self::FIELD_ACTION === $n->nodeName) {
				$type->setAction(FHIRAuditEventAction::xmlUnserialize($n));
			} elseif (self::FIELD_DATE_TIME === $n->nodeName) {
				$type->setDateTime(FHIRInstant::xmlUnserialize($n));
			} elseif (self::FIELD_OUTCOME === $n->nodeName) {
				$type->setOutcome(FHIRAuditEventOutcome::xmlUnserialize($n));
			} elseif (self::FIELD_OUTCOME_DESC === $n->nodeName) {
				$type->setOutcomeDesc(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_PURPOSE_OF_EVENT === $n->nodeName) {
				$type->addPurposeOfEvent(FHIRCoding::xmlUnserialize($n));
			} elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
				$type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_EXTENSION === $n->nodeName) {
				$type->addExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_ID === $n->nodeName) {
				$type->setId(FHIRIdPrimitive::xmlUnserialize($n));
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_DATE_TIME);
		if (null !== $n) {
			$pt = $type->getDateTime();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setDateTime($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_OUTCOME_DESC);
		if (null !== $n) {
			$pt = $type->getOutcomeDesc();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setOutcomeDesc($n->nodeValue);
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
		if (null !== ($v = $this->getType())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_TYPE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getSubtype())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_SUBTYPE);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if (null !== ($v = $this->getAction())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_ACTION);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDateTime())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DATE_TIME);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getOutcome())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_OUTCOME);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getOutcomeDesc())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_OUTCOME_DESC);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getPurposeOfEvent())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_PURPOSE_OF_EVENT);
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
		if (null !== ($v = $this->getType())) {
			$out->{self::FIELD_TYPE} = $v;
		}
		if ([] !== ($vs = $this->getSubtype())) {
			$out->{self::FIELD_SUBTYPE} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_SUBTYPE}[] = $v;
			}
		}
		if (null !== ($v = $this->getAction())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_ACTION} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRAuditEventAction::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_ACTION_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getDateTime())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_DATE_TIME} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRInstant::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_DATE_TIME_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getOutcome())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_OUTCOME} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRAuditEventOutcome::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_OUTCOME_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getOutcomeDesc())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_OUTCOME_DESC} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRString::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_OUTCOME_DESC_EXT} = $ext;
			}
		}
		if ([] !== ($vs = $this->getPurposeOfEvent())) {
			$out->{self::FIELD_PURPOSE_OF_EVENT} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_PURPOSE_OF_EVENT}[] = $v;
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
