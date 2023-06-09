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

use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventEvent;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventObject;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventParticipant;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventSource;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRExtension;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRId;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMeta;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRNarrative;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri;
use Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource;
use Calvient\FhirTypes\DSTU2\PHPFHIRConstants;
use Calvient\FhirTypes\DSTU2\PHPFHIRContainedTypeInterface;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeInterface;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeMap;

/**
 * A record of an event made for purposes of maintaining a security log. Typical
 * uses include detection of intrusion attempts and monitoring for inappropriate
 * usage.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRAuditEvent
 * @package \Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIRAuditEvent extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT;
	const FIELD_EVENT = 'event';
	const FIELD_PARTICIPANT = 'participant';
	const FIELD_SOURCE = 'source';
	const FIELD_OBJECT = 'object';

	/** @var string */
	private $_xmlns = '';

	/**
	 * A record of an event made for purposes of maintaining a security log. Typical
	 * uses include detection of intrusion attempts and monitoring for inappropriate
	 * usage.
	 *
	 * Identifies the name, action type, time, and disposition of the audited event.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventEvent
	 */
	protected ?FHIRAuditEventEvent $event = null;

	/**
	 * A record of an event made for purposes of maintaining a security log. Typical
	 * uses include detection of intrusion attempts and monitoring for inappropriate
	 * usage.
	 *
	 * A person, a hardware device or software process.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventParticipant[]
	 */
	protected ?array $participant = [];

	/**
	 * A record of an event made for purposes of maintaining a security log. Typical
	 * uses include detection of intrusion attempts and monitoring for inappropriate
	 * usage.
	 *
	 * Application systems and processes.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventSource
	 */
	protected ?FHIRAuditEventSource $source = null;

	/**
	 * A record of an event made for purposes of maintaining a security log. Typical
	 * uses include detection of intrusion attempts and monitoring for inappropriate
	 * usage.
	 *
	 * Specific instances of data or objects that have been accessed.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventObject[]
	 */
	protected ?array $object = [];

	/**
	 * Validation map for fields in type AuditEvent
	 * @var array
	 */
	private static array $_validationRules = [
		self::FIELD_PARTICIPANT => [
			PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
		],
	];

	/**
	 * FHIRAuditEvent Constructor
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
					'FHIRAuditEvent::_construct - $data expected to be null or array, %s seen',
					gettype($data),
				),
			);
		}
		parent::__construct($data);
		if (isset($data[self::FIELD_EVENT])) {
			if ($data[self::FIELD_EVENT] instanceof FHIRAuditEventEvent) {
				$this->setEvent($data[self::FIELD_EVENT]);
			} else {
				$this->setEvent(new FHIRAuditEventEvent($data[self::FIELD_EVENT]));
			}
		}
		if (isset($data[self::FIELD_PARTICIPANT])) {
			if (is_array($data[self::FIELD_PARTICIPANT])) {
				foreach ($data[self::FIELD_PARTICIPANT] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRAuditEventParticipant) {
						$this->addParticipant($v);
					} else {
						$this->addParticipant(new FHIRAuditEventParticipant($v));
					}
				}
			} elseif ($data[self::FIELD_PARTICIPANT] instanceof FHIRAuditEventParticipant) {
				$this->addParticipant($data[self::FIELD_PARTICIPANT]);
			} else {
				$this->addParticipant(
					new FHIRAuditEventParticipant($data[self::FIELD_PARTICIPANT]),
				);
			}
		}
		if (isset($data[self::FIELD_SOURCE])) {
			if ($data[self::FIELD_SOURCE] instanceof FHIRAuditEventSource) {
				$this->setSource($data[self::FIELD_SOURCE]);
			} else {
				$this->setSource(new FHIRAuditEventSource($data[self::FIELD_SOURCE]));
			}
		}
		if (isset($data[self::FIELD_OBJECT])) {
			if (is_array($data[self::FIELD_OBJECT])) {
				foreach ($data[self::FIELD_OBJECT] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRAuditEventObject) {
						$this->addObject($v);
					} else {
						$this->addObject(new FHIRAuditEventObject($v));
					}
				}
			} elseif ($data[self::FIELD_OBJECT] instanceof FHIRAuditEventObject) {
				$this->addObject($data[self::FIELD_OBJECT]);
			} else {
				$this->addObject(new FHIRAuditEventObject($data[self::FIELD_OBJECT]));
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
		return "<AuditEvent{$xmlns}></AuditEvent>";
	}
	/**
	 * @return string
	 */
	public function _getResourceType(): string
	{
		return static::FHIR_TYPE_NAME;
	}

	/**
	 * A record of an event made for purposes of maintaining a security log. Typical
	 * uses include detection of intrusion attempts and monitoring for inappropriate
	 * usage.
	 *
	 * Identifies the name, action type, time, and disposition of the audited event.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventEvent
	 */
	public function getEvent(): ?FHIRAuditEventEvent
	{
		return $this->event;
	}

	/**
	 * A record of an event made for purposes of maintaining a security log. Typical
	 * uses include detection of intrusion attempts and monitoring for inappropriate
	 * usage.
	 *
	 * Identifies the name, action type, time, and disposition of the audited event.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventEvent $event
	 * @return static
	 */
	public function setEvent(?FHIRAuditEventEvent $event = null): object
	{
		$this->_trackValueSet($this->event, $event);
		$this->event = $event;
		return $this;
	}

	/**
	 * A record of an event made for purposes of maintaining a security log. Typical
	 * uses include detection of intrusion attempts and monitoring for inappropriate
	 * usage.
	 *
	 * A person, a hardware device or software process.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventParticipant[]
	 */
	public function getParticipant(): ?array
	{
		return $this->participant;
	}

	/**
	 * A record of an event made for purposes of maintaining a security log. Typical
	 * uses include detection of intrusion attempts and monitoring for inappropriate
	 * usage.
	 *
	 * A person, a hardware device or software process.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventParticipant $participant
	 * @return static
	 */
	public function addParticipant(?FHIRAuditEventParticipant $participant = null): object
	{
		$this->_trackValueAdded();
		$this->participant[] = $participant;
		return $this;
	}

	/**
	 * A record of an event made for purposes of maintaining a security log. Typical
	 * uses include detection of intrusion attempts and monitoring for inappropriate
	 * usage.
	 *
	 * A person, a hardware device or software process.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventParticipant[] $participant
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
			if ($v instanceof FHIRAuditEventParticipant) {
				$this->addParticipant($v);
			} else {
				$this->addParticipant(new FHIRAuditEventParticipant($v));
			}
		}
		return $this;
	}

	/**
	 * A record of an event made for purposes of maintaining a security log. Typical
	 * uses include detection of intrusion attempts and monitoring for inappropriate
	 * usage.
	 *
	 * Application systems and processes.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventSource
	 */
	public function getSource(): ?FHIRAuditEventSource
	{
		return $this->source;
	}

	/**
	 * A record of an event made for purposes of maintaining a security log. Typical
	 * uses include detection of intrusion attempts and monitoring for inappropriate
	 * usage.
	 *
	 * Application systems and processes.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventSource $source
	 * @return static
	 */
	public function setSource(?FHIRAuditEventSource $source = null): object
	{
		$this->_trackValueSet($this->source, $source);
		$this->source = $source;
		return $this;
	}

	/**
	 * A record of an event made for purposes of maintaining a security log. Typical
	 * uses include detection of intrusion attempts and monitoring for inappropriate
	 * usage.
	 *
	 * Specific instances of data or objects that have been accessed.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventObject[]
	 */
	public function getObject(): ?array
	{
		return $this->object;
	}

	/**
	 * A record of an event made for purposes of maintaining a security log. Typical
	 * uses include detection of intrusion attempts and monitoring for inappropriate
	 * usage.
	 *
	 * Specific instances of data or objects that have been accessed.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventObject $object
	 * @return static
	 */
	public function addObject(?FHIRAuditEventObject $object = null): object
	{
		$this->_trackValueAdded();
		$this->object[] = $object;
		return $this;
	}

	/**
	 * A record of an event made for purposes of maintaining a security log. Typical
	 * uses include detection of intrusion attempts and monitoring for inappropriate
	 * usage.
	 *
	 * Specific instances of data or objects that have been accessed.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventObject[] $object
	 * @return static
	 */
	public function setObject(array $object = []): object
	{
		if ([] !== $this->object) {
			$this->_trackValuesRemoved(count($this->object));
			$this->object = [];
		}
		if ([] === $object) {
			return $this;
		}
		foreach ($object as $v) {
			if ($v instanceof FHIRAuditEventObject) {
				$this->addObject($v);
			} else {
				$this->addObject(new FHIRAuditEventObject($v));
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
		if (null !== ($v = $this->getEvent())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_EVENT] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getParticipant())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_PARTICIPANT, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getSource())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_SOURCE] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getObject())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_OBJECT, $i)] = $fieldErrs;
				}
			}
		}
		if (isset($validationRules[self::FIELD_EVENT])) {
			$v = $this->getEvent();
			foreach ($validationRules[self::FIELD_EVENT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT,
					self::FIELD_EVENT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_EVENT])) {
						$errs[self::FIELD_EVENT] = [];
					}
					$errs[self::FIELD_EVENT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PARTICIPANT])) {
			$v = $this->getParticipant();
			foreach ($validationRules[self::FIELD_PARTICIPANT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT,
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
		if (isset($validationRules[self::FIELD_SOURCE])) {
			$v = $this->getSource();
			foreach ($validationRules[self::FIELD_SOURCE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT,
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
		if (isset($validationRules[self::FIELD_OBJECT])) {
			$v = $this->getObject();
			foreach ($validationRules[self::FIELD_OBJECT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT,
					self::FIELD_OBJECT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_OBJECT])) {
						$errs[self::FIELD_OBJECT] = [];
					}
					$errs[self::FIELD_OBJECT][$rule] = $err;
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRAuditEvent $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRAuditEvent
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
						'FHIRAuditEvent::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRAuditEvent::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRAuditEvent(null);
		} elseif (!is_object($type) || !($type instanceof FHIRAuditEvent)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRAuditEvent::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRAuditEvent or null, %s seen.',
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
			if (self::FIELD_EVENT === $n->nodeName) {
				$type->setEvent(FHIRAuditEventEvent::xmlUnserialize($n));
			} elseif (self::FIELD_PARTICIPANT === $n->nodeName) {
				$type->addParticipant(FHIRAuditEventParticipant::xmlUnserialize($n));
			} elseif (self::FIELD_SOURCE === $n->nodeName) {
				$type->setSource(FHIRAuditEventSource::xmlUnserialize($n));
			} elseif (self::FIELD_OBJECT === $n->nodeName) {
				$type->addObject(FHIRAuditEventObject::xmlUnserialize($n));
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
		if (null !== ($v = $this->getEvent())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_EVENT);
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
		if (null !== ($v = $this->getSource())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_SOURCE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getObject())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_OBJECT);
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
		if (null !== ($v = $this->getEvent())) {
			$out->{self::FIELD_EVENT} = $v;
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
		if (null !== ($v = $this->getSource())) {
			$out->{self::FIELD_SOURCE} = $v;
		}
		if ([] !== ($vs = $this->getObject())) {
			$out->{self::FIELD_OBJECT} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_OBJECT}[] = $v;
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
