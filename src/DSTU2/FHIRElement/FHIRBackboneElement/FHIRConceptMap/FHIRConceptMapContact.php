<?php declare(strict_types=1);

namespace Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConceptMap;

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
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRContactPoint;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRExtension;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString;
use Calvient\FhirTypes\DSTU2\FHIRIdPrimitive;
use Calvient\FhirTypes\DSTU2\PHPFHIRConstants;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeInterface;

/**
 * A statement of relationships from one set of concepts to one or more other
 * concepts - either code systems or data elements, or classes in class models.
 *
 * Class FHIRConceptMapContact
 * @package \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConceptMap
 */
class FHIRConceptMapContact extends FHIRBackboneElement
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP_DOT_CONTACT;
	const FIELD_NAME = 'name';
	const FIELD_NAME_EXT = '_name';
	const FIELD_TELECOM = 'telecom';

	/** @var string */
	private $_xmlns = '';

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The name of an individual to contact regarding the concept map.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $name = null;

	/**
	 * Details for all kinds of technology mediated contact points for a person or
	 * organization, including telephone, email, etc.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Contact details for individual (if a name was provided) or the publisher.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRContactPoint[]
	 */
	protected ?array $telecom = [];

	/**
	 * Validation map for fields in type ConceptMap.Contact
	 * @var array
	 */
	private static array $_validationRules = [];

	/**
	 * FHIRConceptMapContact Constructor
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
					'FHIRConceptMapContact::_construct - $data expected to be null or array, %s seen',
					gettype($data),
				),
			);
		}
		parent::__construct($data);
		if (isset($data[self::FIELD_NAME]) || isset($data[self::FIELD_NAME_EXT])) {
			$value = $data[self::FIELD_NAME] ?? null;
			$ext =
				isset($data[self::FIELD_NAME_EXT]) && is_array($data[self::FIELD_NAME_EXT])
					? $data[self::FIELD_NAME_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->setName($value);
				} elseif (is_array($value)) {
					$this->setName(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->setName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setName(new FHIRString($ext));
			}
		}
		if (isset($data[self::FIELD_TELECOM])) {
			if (is_array($data[self::FIELD_TELECOM])) {
				foreach ($data[self::FIELD_TELECOM] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRContactPoint) {
						$this->addTelecom($v);
					} else {
						$this->addTelecom(new FHIRContactPoint($v));
					}
				}
			} elseif ($data[self::FIELD_TELECOM] instanceof FHIRContactPoint) {
				$this->addTelecom($data[self::FIELD_TELECOM]);
			} else {
				$this->addTelecom(new FHIRContactPoint($data[self::FIELD_TELECOM]));
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
		return "<ConceptMapContact{$xmlns}></ConceptMapContact>";
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The name of an individual to contact regarding the concept map.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	public function getName(): ?FHIRString
	{
		return $this->name;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The name of an individual to contact regarding the concept map.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString $name
	 * @return static
	 */
	public function setName($name = null): object
	{
		if (null !== $name && !($name instanceof FHIRString)) {
			$name = new FHIRString($name);
		}
		$this->_trackValueSet($this->name, $name);
		$this->name = $name;
		return $this;
	}

	/**
	 * Details for all kinds of technology mediated contact points for a person or
	 * organization, including telephone, email, etc.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Contact details for individual (if a name was provided) or the publisher.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRContactPoint[]
	 */
	public function getTelecom(): ?array
	{
		return $this->telecom;
	}

	/**
	 * Details for all kinds of technology mediated contact points for a person or
	 * organization, including telephone, email, etc.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Contact details for individual (if a name was provided) or the publisher.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRContactPoint $telecom
	 * @return static
	 */
	public function addTelecom(?FHIRContactPoint $telecom = null): object
	{
		$this->_trackValueAdded();
		$this->telecom[] = $telecom;
		return $this;
	}

	/**
	 * Details for all kinds of technology mediated contact points for a person or
	 * organization, including telephone, email, etc.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Contact details for individual (if a name was provided) or the publisher.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRContactPoint[] $telecom
	 * @return static
	 */
	public function setTelecom(array $telecom = []): object
	{
		if ([] !== $this->telecom) {
			$this->_trackValuesRemoved(count($this->telecom));
			$this->telecom = [];
		}
		if ([] === $telecom) {
			return $this;
		}
		foreach ($telecom as $v) {
			if ($v instanceof FHIRContactPoint) {
				$this->addTelecom($v);
			} else {
				$this->addTelecom(new FHIRContactPoint($v));
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
		if (null !== ($v = $this->getName())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_NAME] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getTelecom())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_TELECOM, $i)] = $fieldErrs;
				}
			}
		}
		if (isset($validationRules[self::FIELD_NAME])) {
			$v = $this->getName();
			foreach ($validationRules[self::FIELD_NAME] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP_DOT_CONTACT,
					self::FIELD_NAME,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_NAME])) {
						$errs[self::FIELD_NAME] = [];
					}
					$errs[self::FIELD_NAME][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_TELECOM])) {
			$v = $this->getTelecom();
			foreach ($validationRules[self::FIELD_TELECOM] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP_DOT_CONTACT,
					self::FIELD_TELECOM,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_TELECOM])) {
						$errs[self::FIELD_TELECOM] = [];
					}
					$errs[self::FIELD_TELECOM][$rule] = $err;
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapContact $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapContact
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
						'FHIRConceptMapContact::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRConceptMapContact::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRConceptMapContact(null);
		} elseif (!is_object($type) || !($type instanceof FHIRConceptMapContact)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRConceptMapContact::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapContact or null, %s seen.',
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
			if (self::FIELD_NAME === $n->nodeName) {
				$type->setName(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_TELECOM === $n->nodeName) {
				$type->addTelecom(FHIRContactPoint::xmlUnserialize($n));
			} elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
				$type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_EXTENSION === $n->nodeName) {
				$type->addExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_ID === $n->nodeName) {
				$type->setId(FHIRIdPrimitive::xmlUnserialize($n));
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_NAME);
		if (null !== $n) {
			$pt = $type->getName();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setName($n->nodeValue);
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
		if (null !== ($v = $this->getName())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_NAME);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getTelecom())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_TELECOM);
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
		if (null !== ($v = $this->getName())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_NAME} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRString::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_NAME_EXT} = $ext;
			}
		}
		if ([] !== ($vs = $this->getTelecom())) {
			$out->{self::FIELD_TELECOM} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_TELECOM}[] = $v;
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
