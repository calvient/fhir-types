<?php declare(strict_types=1);

namespace Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance;

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
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRExtension;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUnsignedInt;
use Calvient\FhirTypes\DSTU2\FHIRIdPrimitive;
use Calvient\FhirTypes\DSTU2\PHPFHIRConstants;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeInterface;

/**
 * A conformance statement is a set of capabilities of a FHIR Server that may be
 * used as a statement of actual server functionality or a statement of required or
 * desired server implementation.
 *
 * Class FHIRConformanceMessaging
 * @package \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance
 */
class FHIRConformanceMessaging extends FHIRBackboneElement
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_MESSAGING;
	const FIELD_ENDPOINT = 'endpoint';
	const FIELD_RELIABLE_CACHE = 'reliableCache';
	const FIELD_RELIABLE_CACHE_EXT = '_reliableCache';
	const FIELD_DOCUMENTATION = 'documentation';
	const FIELD_DOCUMENTATION_EXT = '_documentation';
	const FIELD_EVENT = 'event';

	/** @var string */
	private $_xmlns = '';

	/**
	 * A conformance statement is a set of capabilities of a FHIR Server that may be
	 * used as a statement of actual server functionality or a statement of required or
	 * desired server implementation.
	 *
	 * An endpoint (network accessible address) to which messages and/or replies are to
	 * be sent.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceEndpoint[]
	 */
	protected ?array $endpoint = [];

	/**
	 * An integer with a value that is not negative (e.g. >= 0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Length if the receiver's reliable messaging cache in minutes (if a receiver) or
	 * how long the cache length on the receiver should be (if a sender).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUnsignedInt
	 */
	protected ?FHIRUnsignedInt $reliableCache = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Documentation about the system's messaging capabilities for this endpoint not
	 * otherwise documented by the conformance statement. For example, process for
	 * becoming an authorized messaging exchange partner.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $documentation = null;

	/**
	 * A conformance statement is a set of capabilities of a FHIR Server that may be
	 * used as a statement of actual server functionality or a statement of required or
	 * desired server implementation.
	 *
	 * A description of the solution's support for an event at this end-point.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceEvent[]
	 */
	protected ?array $event = [];

	/**
	 * Validation map for fields in type Conformance.Messaging
	 * @var array
	 */
	private static array $_validationRules = [
		self::FIELD_EVENT => [
			PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
		],
	];

	/**
	 * FHIRConformanceMessaging Constructor
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
					'FHIRConformanceMessaging::_construct - $data expected to be null or array, %s seen',
					gettype($data),
				),
			);
		}
		parent::__construct($data);
		if (isset($data[self::FIELD_ENDPOINT])) {
			if (is_array($data[self::FIELD_ENDPOINT])) {
				foreach ($data[self::FIELD_ENDPOINT] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRConformanceEndpoint) {
						$this->addEndpoint($v);
					} else {
						$this->addEndpoint(new FHIRConformanceEndpoint($v));
					}
				}
			} elseif ($data[self::FIELD_ENDPOINT] instanceof FHIRConformanceEndpoint) {
				$this->addEndpoint($data[self::FIELD_ENDPOINT]);
			} else {
				$this->addEndpoint(new FHIRConformanceEndpoint($data[self::FIELD_ENDPOINT]));
			}
		}
		if (
			isset($data[self::FIELD_RELIABLE_CACHE]) ||
			isset($data[self::FIELD_RELIABLE_CACHE_EXT])
		) {
			$value = $data[self::FIELD_RELIABLE_CACHE] ?? null;
			$ext =
				isset($data[self::FIELD_RELIABLE_CACHE_EXT]) &&
				is_array($data[self::FIELD_RELIABLE_CACHE_EXT])
					? $data[self::FIELD_RELIABLE_CACHE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRUnsignedInt) {
					$this->setReliableCache($value);
				} elseif (is_array($value)) {
					$this->setReliableCache(new FHIRUnsignedInt(array_merge($ext, $value)));
				} else {
					$this->setReliableCache(
						new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setReliableCache(new FHIRUnsignedInt($ext));
			}
		}
		if (
			isset($data[self::FIELD_DOCUMENTATION]) ||
			isset($data[self::FIELD_DOCUMENTATION_EXT])
		) {
			$value = $data[self::FIELD_DOCUMENTATION] ?? null;
			$ext =
				isset($data[self::FIELD_DOCUMENTATION_EXT]) &&
				is_array($data[self::FIELD_DOCUMENTATION_EXT])
					? $data[self::FIELD_DOCUMENTATION_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->setDocumentation($value);
				} elseif (is_array($value)) {
					$this->setDocumentation(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->setDocumentation(
						new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setDocumentation(new FHIRString($ext));
			}
		}
		if (isset($data[self::FIELD_EVENT])) {
			if (is_array($data[self::FIELD_EVENT])) {
				foreach ($data[self::FIELD_EVENT] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRConformanceEvent) {
						$this->addEvent($v);
					} else {
						$this->addEvent(new FHIRConformanceEvent($v));
					}
				}
			} elseif ($data[self::FIELD_EVENT] instanceof FHIRConformanceEvent) {
				$this->addEvent($data[self::FIELD_EVENT]);
			} else {
				$this->addEvent(new FHIRConformanceEvent($data[self::FIELD_EVENT]));
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
		return "<ConformanceMessaging{$xmlns}></ConformanceMessaging>";
	}

	/**
	 * A conformance statement is a set of capabilities of a FHIR Server that may be
	 * used as a statement of actual server functionality or a statement of required or
	 * desired server implementation.
	 *
	 * An endpoint (network accessible address) to which messages and/or replies are to
	 * be sent.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceEndpoint[]
	 */
	public function getEndpoint(): ?array
	{
		return $this->endpoint;
	}

	/**
	 * A conformance statement is a set of capabilities of a FHIR Server that may be
	 * used as a statement of actual server functionality or a statement of required or
	 * desired server implementation.
	 *
	 * An endpoint (network accessible address) to which messages and/or replies are to
	 * be sent.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceEndpoint $endpoint
	 * @return static
	 */
	public function addEndpoint(?FHIRConformanceEndpoint $endpoint = null): object
	{
		$this->_trackValueAdded();
		$this->endpoint[] = $endpoint;
		return $this;
	}

	/**
	 * A conformance statement is a set of capabilities of a FHIR Server that may be
	 * used as a statement of actual server functionality or a statement of required or
	 * desired server implementation.
	 *
	 * An endpoint (network accessible address) to which messages and/or replies are to
	 * be sent.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceEndpoint[] $endpoint
	 * @return static
	 */
	public function setEndpoint(array $endpoint = []): object
	{
		if ([] !== $this->endpoint) {
			$this->_trackValuesRemoved(count($this->endpoint));
			$this->endpoint = [];
		}
		if ([] === $endpoint) {
			return $this;
		}
		foreach ($endpoint as $v) {
			if ($v instanceof FHIRConformanceEndpoint) {
				$this->addEndpoint($v);
			} else {
				$this->addEndpoint(new FHIRConformanceEndpoint($v));
			}
		}
		return $this;
	}

	/**
	 * An integer with a value that is not negative (e.g. >= 0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Length if the receiver's reliable messaging cache in minutes (if a receiver) or
	 * how long the cache length on the receiver should be (if a sender).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUnsignedInt
	 */
	public function getReliableCache(): ?FHIRUnsignedInt
	{
		return $this->reliableCache;
	}

	/**
	 * An integer with a value that is not negative (e.g. >= 0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Length if the receiver's reliable messaging cache in minutes (if a receiver) or
	 * how long the cache length on the receiver should be (if a sender).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUnsignedInt $reliableCache
	 * @return static
	 */
	public function setReliableCache($reliableCache = null): object
	{
		if (null !== $reliableCache && !($reliableCache instanceof FHIRUnsignedInt)) {
			$reliableCache = new FHIRUnsignedInt($reliableCache);
		}
		$this->_trackValueSet($this->reliableCache, $reliableCache);
		$this->reliableCache = $reliableCache;
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Documentation about the system's messaging capabilities for this endpoint not
	 * otherwise documented by the conformance statement. For example, process for
	 * becoming an authorized messaging exchange partner.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	public function getDocumentation(): ?FHIRString
	{
		return $this->documentation;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Documentation about the system's messaging capabilities for this endpoint not
	 * otherwise documented by the conformance statement. For example, process for
	 * becoming an authorized messaging exchange partner.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString $documentation
	 * @return static
	 */
	public function setDocumentation($documentation = null): object
	{
		if (null !== $documentation && !($documentation instanceof FHIRString)) {
			$documentation = new FHIRString($documentation);
		}
		$this->_trackValueSet($this->documentation, $documentation);
		$this->documentation = $documentation;
		return $this;
	}

	/**
	 * A conformance statement is a set of capabilities of a FHIR Server that may be
	 * used as a statement of actual server functionality or a statement of required or
	 * desired server implementation.
	 *
	 * A description of the solution's support for an event at this end-point.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceEvent[]
	 */
	public function getEvent(): ?array
	{
		return $this->event;
	}

	/**
	 * A conformance statement is a set of capabilities of a FHIR Server that may be
	 * used as a statement of actual server functionality or a statement of required or
	 * desired server implementation.
	 *
	 * A description of the solution's support for an event at this end-point.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceEvent $event
	 * @return static
	 */
	public function addEvent(?FHIRConformanceEvent $event = null): object
	{
		$this->_trackValueAdded();
		$this->event[] = $event;
		return $this;
	}

	/**
	 * A conformance statement is a set of capabilities of a FHIR Server that may be
	 * used as a statement of actual server functionality or a statement of required or
	 * desired server implementation.
	 *
	 * A description of the solution's support for an event at this end-point.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceEvent[] $event
	 * @return static
	 */
	public function setEvent(array $event = []): object
	{
		if ([] !== $this->event) {
			$this->_trackValuesRemoved(count($this->event));
			$this->event = [];
		}
		if ([] === $event) {
			return $this;
		}
		foreach ($event as $v) {
			if ($v instanceof FHIRConformanceEvent) {
				$this->addEvent($v);
			} else {
				$this->addEvent(new FHIRConformanceEvent($v));
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
		if ([] !== ($vs = $this->getEndpoint())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_ENDPOINT, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getReliableCache())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_RELIABLE_CACHE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDocumentation())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DOCUMENTATION] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getEvent())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_EVENT, $i)] = $fieldErrs;
				}
			}
		}
		if (isset($validationRules[self::FIELD_ENDPOINT])) {
			$v = $this->getEndpoint();
			foreach ($validationRules[self::FIELD_ENDPOINT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_MESSAGING,
					self::FIELD_ENDPOINT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_ENDPOINT])) {
						$errs[self::FIELD_ENDPOINT] = [];
					}
					$errs[self::FIELD_ENDPOINT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_RELIABLE_CACHE])) {
			$v = $this->getReliableCache();
			foreach ($validationRules[self::FIELD_RELIABLE_CACHE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_MESSAGING,
					self::FIELD_RELIABLE_CACHE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_RELIABLE_CACHE])) {
						$errs[self::FIELD_RELIABLE_CACHE] = [];
					}
					$errs[self::FIELD_RELIABLE_CACHE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DOCUMENTATION])) {
			$v = $this->getDocumentation();
			foreach ($validationRules[self::FIELD_DOCUMENTATION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_MESSAGING,
					self::FIELD_DOCUMENTATION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DOCUMENTATION])) {
						$errs[self::FIELD_DOCUMENTATION] = [];
					}
					$errs[self::FIELD_DOCUMENTATION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_EVENT])) {
			$v = $this->getEvent();
			foreach ($validationRules[self::FIELD_EVENT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_MESSAGING,
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceMessaging $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceMessaging
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
						'FHIRConformanceMessaging::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRConformanceMessaging::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRConformanceMessaging(null);
		} elseif (!is_object($type) || !($type instanceof FHIRConformanceMessaging)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRConformanceMessaging::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceMessaging or null, %s seen.',
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
			if (self::FIELD_ENDPOINT === $n->nodeName) {
				$type->addEndpoint(FHIRConformanceEndpoint::xmlUnserialize($n));
			} elseif (self::FIELD_RELIABLE_CACHE === $n->nodeName) {
				$type->setReliableCache(FHIRUnsignedInt::xmlUnserialize($n));
			} elseif (self::FIELD_DOCUMENTATION === $n->nodeName) {
				$type->setDocumentation(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_EVENT === $n->nodeName) {
				$type->addEvent(FHIRConformanceEvent::xmlUnserialize($n));
			} elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
				$type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_EXTENSION === $n->nodeName) {
				$type->addExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_ID === $n->nodeName) {
				$type->setId(FHIRIdPrimitive::xmlUnserialize($n));
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_RELIABLE_CACHE);
		if (null !== $n) {
			$pt = $type->getReliableCache();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setReliableCache($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_DOCUMENTATION);
		if (null !== $n) {
			$pt = $type->getDocumentation();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setDocumentation($n->nodeValue);
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
		if ([] !== ($vs = $this->getEndpoint())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_ENDPOINT);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if (null !== ($v = $this->getReliableCache())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_RELIABLE_CACHE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDocumentation())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DOCUMENTATION);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getEvent())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_EVENT);
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
		if ([] !== ($vs = $this->getEndpoint())) {
			$out->{self::FIELD_ENDPOINT} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_ENDPOINT}[] = $v;
			}
		}
		if (null !== ($v = $this->getReliableCache())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_RELIABLE_CACHE} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRUnsignedInt::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_RELIABLE_CACHE_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getDocumentation())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_DOCUMENTATION} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRString::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_DOCUMENTATION_EXT} = $ext;
			}
		}
		if ([] !== ($vs = $this->getEvent())) {
			$out->{self::FIELD_EVENT} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_EVENT}[] = $v;
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
