<?php declare(strict_types=1);

namespace App\Types\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNamingSystem;

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

use App\Types\FHIR\DSTU2\FHIRElement\FHIRBackboneElement;
use App\Types\FHIR\DSTU2\FHIRElement\FHIRBoolean;
use App\Types\FHIR\DSTU2\FHIRElement\FHIRExtension;
use App\Types\FHIR\DSTU2\FHIRElement\FHIRNamingSystemIdentifierType;
use App\Types\FHIR\DSTU2\FHIRElement\FHIRPeriod;
use App\Types\FHIR\DSTU2\FHIRElement\FHIRString;
use App\Types\FHIR\DSTU2\FHIRIdPrimitive;
use App\Types\FHIR\DSTU2\PHPFHIRConstants;
use App\Types\FHIR\DSTU2\PHPFHIRTypeInterface;

/**
 * A curated namespace that issues unique symbols within that namespace for the
 * identification of concepts, people, devices, etc. Represents a "System" used
 * within the Identifier and Coding data types.
 *
 * Class FHIRNamingSystemUniqueId
 * @package \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNamingSystem
 */
class FHIRNamingSystemUniqueId extends FHIRBackboneElement
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_NAMING_SYSTEM_DOT_UNIQUE_ID;
	const FIELD_TYPE = 'type';
	const FIELD_TYPE_EXT = '_type';
	const FIELD_VALUE = 'value';
	const FIELD_VALUE_EXT = '_value';
	const FIELD_PREFERRED = 'preferred';
	const FIELD_PREFERRED_EXT = '_preferred';
	const FIELD_PERIOD = 'period';

	/** @var string */
	private $_xmlns = '';

	/**
	 * Identifies the style of unique identifier used to identify a namespace.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Identifies the unique identifier scheme used for this particular identifier.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRNamingSystemIdentifierType
	 */
	protected ?FHIRNamingSystemIdentifierType $type = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The string that should be sent over the wire to identify the code system or
	 * identifier system.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $value = null;

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Indicates whether this identifier is the "preferred" identifier of this type.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
	 */
	protected ?FHIRBoolean $preferred = null;

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies the period of time over which this identifier is considered
	 * appropriate to refer to the naming system. Outside of this window, the
	 * identifier might be non-deterministic.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod
	 */
	protected ?FHIRPeriod $period = null;

	/**
	 * Validation map for fields in type NamingSystem.UniqueId
	 * @var array
	 */
	private static array $_validationRules = [];

	/**
	 * FHIRNamingSystemUniqueId Constructor
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
					'FHIRNamingSystemUniqueId::_construct - $data expected to be null or array, %s seen',
					gettype($data),
				),
			);
		}
		parent::__construct($data);
		if (isset($data[self::FIELD_TYPE]) || isset($data[self::FIELD_TYPE_EXT])) {
			$value = $data[self::FIELD_TYPE] ?? null;
			$ext =
				isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT])
					? $data[self::FIELD_TYPE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRNamingSystemIdentifierType) {
					$this->setType($value);
				} elseif (is_array($value)) {
					$this->setType(new FHIRNamingSystemIdentifierType(array_merge($ext, $value)));
				} else {
					$this->setType(
						new FHIRNamingSystemIdentifierType(
							[FHIRNamingSystemIdentifierType::FIELD_VALUE => $value] + $ext,
						),
					);
				}
			} elseif ([] !== $ext) {
				$this->setType(new FHIRNamingSystemIdentifierType($ext));
			}
		}
		if (isset($data[self::FIELD_VALUE]) || isset($data[self::FIELD_VALUE_EXT])) {
			$value = $data[self::FIELD_VALUE] ?? null;
			$ext =
				isset($data[self::FIELD_VALUE_EXT]) && is_array($data[self::FIELD_VALUE_EXT])
					? $data[self::FIELD_VALUE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->setValue($value);
				} elseif (is_array($value)) {
					$this->setValue(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->setValue(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setValue(new FHIRString($ext));
			}
		}
		if (isset($data[self::FIELD_PREFERRED]) || isset($data[self::FIELD_PREFERRED_EXT])) {
			$value = $data[self::FIELD_PREFERRED] ?? null;
			$ext =
				isset($data[self::FIELD_PREFERRED_EXT]) &&
				is_array($data[self::FIELD_PREFERRED_EXT])
					? $data[self::FIELD_PREFERRED_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRBoolean) {
					$this->setPreferred($value);
				} elseif (is_array($value)) {
					$this->setPreferred(new FHIRBoolean(array_merge($ext, $value)));
				} else {
					$this->setPreferred(
						new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setPreferred(new FHIRBoolean($ext));
			}
		}
		if (isset($data[self::FIELD_PERIOD])) {
			if ($data[self::FIELD_PERIOD] instanceof FHIRPeriod) {
				$this->setPeriod($data[self::FIELD_PERIOD]);
			} else {
				$this->setPeriod(new FHIRPeriod($data[self::FIELD_PERIOD]));
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
		return "<NamingSystemUniqueId{$xmlns}></NamingSystemUniqueId>";
	}

	/**
	 * Identifies the style of unique identifier used to identify a namespace.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Identifies the unique identifier scheme used for this particular identifier.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRNamingSystemIdentifierType
	 */
	public function getType(): ?FHIRNamingSystemIdentifierType
	{
		return $this->type;
	}

	/**
	 * Identifies the style of unique identifier used to identify a namespace.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Identifies the unique identifier scheme used for this particular identifier.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRNamingSystemIdentifierType $type
	 * @return static
	 */
	public function setType(?FHIRNamingSystemIdentifierType $type = null): object
	{
		$this->_trackValueSet($this->type, $type);
		$this->type = $type;
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The string that should be sent over the wire to identify the code system or
	 * identifier system.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	public function getValue(): ?FHIRString
	{
		return $this->value;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The string that should be sent over the wire to identify the code system or
	 * identifier system.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString $value
	 * @return static
	 */
	public function setValue($value = null): object
	{
		if (null !== $value && !($value instanceof FHIRString)) {
			$value = new FHIRString($value);
		}
		$this->_trackValueSet($this->value, $value);
		$this->value = $value;
		return $this;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Indicates whether this identifier is the "preferred" identifier of this type.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
	 */
	public function getPreferred(): ?FHIRBoolean
	{
		return $this->preferred;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Indicates whether this identifier is the "preferred" identifier of this type.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean $preferred
	 * @return static
	 */
	public function setPreferred($preferred = null): object
	{
		if (null !== $preferred && !($preferred instanceof FHIRBoolean)) {
			$preferred = new FHIRBoolean($preferred);
		}
		$this->_trackValueSet($this->preferred, $preferred);
		$this->preferred = $preferred;
		return $this;
	}

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies the period of time over which this identifier is considered
	 * appropriate to refer to the naming system. Outside of this window, the
	 * identifier might be non-deterministic.
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
	 * Identifies the period of time over which this identifier is considered
	 * appropriate to refer to the naming system. Outside of this window, the
	 * identifier might be non-deterministic.
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
		if (null !== ($v = $this->getValue())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_VALUE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPreferred())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PREFERRED] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPeriod())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PERIOD] = $fieldErrs;
			}
		}
		if (isset($validationRules[self::FIELD_TYPE])) {
			$v = $this->getType();
			foreach ($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_NAMING_SYSTEM_DOT_UNIQUE_ID,
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
		if (isset($validationRules[self::FIELD_VALUE])) {
			$v = $this->getValue();
			foreach ($validationRules[self::FIELD_VALUE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_NAMING_SYSTEM_DOT_UNIQUE_ID,
					self::FIELD_VALUE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_VALUE])) {
						$errs[self::FIELD_VALUE] = [];
					}
					$errs[self::FIELD_VALUE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PREFERRED])) {
			$v = $this->getPreferred();
			foreach ($validationRules[self::FIELD_PREFERRED] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_NAMING_SYSTEM_DOT_UNIQUE_ID,
					self::FIELD_PREFERRED,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PREFERRED])) {
						$errs[self::FIELD_PREFERRED] = [];
					}
					$errs[self::FIELD_PREFERRED][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PERIOD])) {
			$v = $this->getPeriod();
			foreach ($validationRules[self::FIELD_PERIOD] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_NAMING_SYSTEM_DOT_UNIQUE_ID,
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNamingSystem\FHIRNamingSystemUniqueId $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNamingSystem\FHIRNamingSystemUniqueId
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
						'FHIRNamingSystemUniqueId::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRNamingSystemUniqueId::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRNamingSystemUniqueId(null);
		} elseif (!is_object($type) || !($type instanceof FHIRNamingSystemUniqueId)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRNamingSystemUniqueId::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNamingSystem\FHIRNamingSystemUniqueId or null, %s seen.',
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
				$type->setType(FHIRNamingSystemIdentifierType::xmlUnserialize($n));
			} elseif (self::FIELD_VALUE === $n->nodeName) {
				$type->setValue(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_PREFERRED === $n->nodeName) {
				$type->setPreferred(FHIRBoolean::xmlUnserialize($n));
			} elseif (self::FIELD_PERIOD === $n->nodeName) {
				$type->setPeriod(FHIRPeriod::xmlUnserialize($n));
			} elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
				$type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_EXTENSION === $n->nodeName) {
				$type->addExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_ID === $n->nodeName) {
				$type->setId(FHIRIdPrimitive::xmlUnserialize($n));
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_VALUE);
		if (null !== $n) {
			$pt = $type->getValue();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setValue($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_PREFERRED);
		if (null !== $n) {
			$pt = $type->getPreferred();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setPreferred($n->nodeValue);
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
		if (null !== ($v = $this->getValue())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_VALUE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPreferred())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PREFERRED);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPeriod())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PERIOD);
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
		if (null !== ($v = $this->getType())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_TYPE} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRNamingSystemIdentifierType::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_TYPE_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getValue())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_VALUE} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRString::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_VALUE_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getPreferred())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_PREFERRED} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRBoolean::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_PREFERRED_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getPeriod())) {
			$out->{self::FIELD_PERIOD} = $v;
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