<?php declare(strict_types=1);

namespace Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRCompartmentDefinition;

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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 *
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 *
 */

use Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement;
use Calvient\FhirTypes\R4\FHIRElement\FHIRCode;
use Calvient\FhirTypes\R4\FHIRElement\FHIRExtension;
use Calvient\FhirTypes\R4\FHIRElement\FHIRString;
use Calvient\FhirTypes\R4\FHIRStringPrimitive;
use Calvient\FhirTypes\R4\PHPFHIRConstants;
use Calvient\FhirTypes\R4\PHPFHIRTypeInterface;

/**
 * A compartment definition that defines how resources are accessed on a server.
 *
 * Class FHIRCompartmentDefinitionResource
 * @package \Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRCompartmentDefinition
 */
class FHIRCompartmentDefinitionResource extends FHIRBackboneElement
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_COMPARTMENT_DEFINITION_DOT_RESOURCE;
	const FIELD_CODE = 'code';
	const FIELD_CODE_EXT = '_code';
	const FIELD_PARAM = 'param';
	const FIELD_PARAM_EXT = '_param';
	const FIELD_DOCUMENTATION = 'documentation';
	const FIELD_DOCUMENTATION_EXT = '_documentation';

	/** @var string */
	private $_xmlns = '';

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The name of a resource supported by the server.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRCodePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRCode
	 */
	protected ?FHIRCode $code = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings SHALL NOT exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The name of a search parameter that represents the link to the compartment. More
	 * than one may be listed because a resource may be linked to a compartment in more
	 * than one way,.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRStringPrimitive[]|\Calvient\FhirTypes\R4\FHIRElement\FHIRString[]
	 */
	protected ?array $param = [];

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings SHALL NOT exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Additional documentation about the resource and compartment.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRStringPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRString
	 */
	protected ?FHIRString $documentation = null;

	/**
	 * Validation map for fields in type CompartmentDefinition.Resource
	 * @var array
	 */
	private static array $_validationRules = [];

	/**
	 * FHIRCompartmentDefinitionResource Constructor
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
					'FHIRCompartmentDefinitionResource::_construct - $data expected to be null or array, %s seen',
					gettype($data),
				),
			);
		}
		parent::__construct($data);
		if (isset($data[self::FIELD_CODE]) || isset($data[self::FIELD_CODE_EXT])) {
			$value = $data[self::FIELD_CODE] ?? null;
			$ext =
				isset($data[self::FIELD_CODE_EXT]) && is_array($data[self::FIELD_CODE_EXT])
					? $data[self::FIELD_CODE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRCode) {
					$this->setCode($value);
				} elseif (is_array($value)) {
					$this->setCode(new FHIRCode(array_merge($ext, $value)));
				} else {
					$this->setCode(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setCode(new FHIRCode($ext));
			}
		}
		if (isset($data[self::FIELD_PARAM]) || isset($data[self::FIELD_PARAM_EXT])) {
			$value = $data[self::FIELD_PARAM] ?? null;
			$ext =
				isset($data[self::FIELD_PARAM_EXT]) && is_array($data[self::FIELD_PARAM_EXT])
					? $data[self::FIELD_PARAM_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->addParam($value);
				} elseif (is_array($value)) {
					foreach ($value as $i => $v) {
						if ($v instanceof FHIRString) {
							$this->addParam($v);
						} else {
							$iext = isset($ext[$i]) && is_array($ext[$i]) ? $ext[$i] : [];
							if (is_array($v)) {
								$this->addParam(new FHIRString(array_merge($v, $iext)));
							} else {
								$this->addParam(
									new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext),
								);
							}
						}
					}
				} elseif (is_array($value)) {
					$this->addParam(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->addParam(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				foreach ($ext as $iext) {
					$this->addParam(new FHIRString($iext));
				}
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
		return "<CompartmentDefinitionResource{$xmlns}></CompartmentDefinitionResource>";
	}

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The name of a resource supported by the server.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRCodePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRCode
	 */
	public function getCode(): ?FHIRCode
	{
		return $this->code;
	}

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The name of a resource supported by the server.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRCodePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRCode $code
	 * @return static
	 */
	public function setCode($code = null): object
	{
		if (null !== $code && !($code instanceof FHIRCode)) {
			$code = new FHIRCode($code);
		}
		$this->_trackValueSet($this->code, $code);
		$this->code = $code;
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings SHALL NOT exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The name of a search parameter that represents the link to the compartment. More
	 * than one may be listed because a resource may be linked to a compartment in more
	 * than one way,.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRStringPrimitive[]|\Calvient\FhirTypes\R4\FHIRElement\FHIRString[]
	 */
	public function getParam(): ?array
	{
		return $this->param;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings SHALL NOT exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The name of a search parameter that represents the link to the compartment. More
	 * than one may be listed because a resource may be linked to a compartment in more
	 * than one way,.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRStringPrimitive[]|\Calvient\FhirTypes\R4\FHIRElement\FHIRString[] $param
	 * @return static
	 */
	public function addParam($param = null): object
	{
		if (null !== $param && !($param instanceof FHIRString)) {
			$param = new FHIRString($param);
		}
		$this->_trackValueAdded();
		$this->param[] = $param;
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings SHALL NOT exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The name of a search parameter that represents the link to the compartment. More
	 * than one may be listed because a resource may be linked to a compartment in more
	 * than one way,.
	 *
	 * @param \Calvient\FhirTypes\R4\FHIRElement\FHIRString[] $param
	 * @return static
	 */
	public function setParam(array $param = []): object
	{
		if ([] !== $this->param) {
			$this->_trackValuesRemoved(count($this->param));
			$this->param = [];
		}
		if ([] === $param) {
			return $this;
		}
		foreach ($param as $v) {
			if ($v instanceof FHIRString) {
				$this->addParam($v);
			} else {
				$this->addParam(new FHIRString($v));
			}
		}
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings SHALL NOT exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Additional documentation about the resource and compartment.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRStringPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRString
	 */
	public function getDocumentation(): ?FHIRString
	{
		return $this->documentation;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings SHALL NOT exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Additional documentation about the resource and compartment.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRStringPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRString $documentation
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
		if (null !== ($v = $this->getCode())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_CODE] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getParam())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_PARAM, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getDocumentation())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DOCUMENTATION] = $fieldErrs;
			}
		}
		if (isset($validationRules[self::FIELD_CODE])) {
			$v = $this->getCode();
			foreach ($validationRules[self::FIELD_CODE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_COMPARTMENT_DEFINITION_DOT_RESOURCE,
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
		if (isset($validationRules[self::FIELD_PARAM])) {
			$v = $this->getParam();
			foreach ($validationRules[self::FIELD_PARAM] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_COMPARTMENT_DEFINITION_DOT_RESOURCE,
					self::FIELD_PARAM,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PARAM])) {
						$errs[self::FIELD_PARAM] = [];
					}
					$errs[self::FIELD_PARAM][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DOCUMENTATION])) {
			$v = $this->getDocumentation();
			foreach ($validationRules[self::FIELD_DOCUMENTATION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_COMPARTMENT_DEFINITION_DOT_RESOURCE,
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
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRCompartmentDefinition\FHIRCompartmentDefinitionResource $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRCompartmentDefinition\FHIRCompartmentDefinitionResource
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
						'FHIRCompartmentDefinitionResource::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRCompartmentDefinitionResource::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRCompartmentDefinitionResource(null);
		} elseif (!is_object($type) || !($type instanceof FHIRCompartmentDefinitionResource)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRCompartmentDefinitionResource::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRCompartmentDefinition\FHIRCompartmentDefinitionResource or null, %s seen.',
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
			if (self::FIELD_CODE === $n->nodeName) {
				$type->setCode(FHIRCode::xmlUnserialize($n));
			} elseif (self::FIELD_PARAM === $n->nodeName) {
				$type->addParam(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_DOCUMENTATION === $n->nodeName) {
				$type->setDocumentation(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
				$type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_EXTENSION === $n->nodeName) {
				$type->addExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_ID === $n->nodeName) {
				$type->setId(FHIRStringPrimitive::xmlUnserialize($n));
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_CODE);
		if (null !== $n) {
			$pt = $type->getCode();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setCode($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_PARAM);
		if (null !== $n) {
			$pt = $type->getParam();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->addParam($n->nodeValue);
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
		if (null !== ($v = $this->getCode())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_CODE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getParam())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_PARAM);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if (null !== ($v = $this->getDocumentation())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DOCUMENTATION);
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
		if (null !== ($v = $this->getCode())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_CODE} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRCode::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_CODE_EXT} = $ext;
			}
		}
		if ([] !== ($vs = $this->getParam())) {
			$vals = [];
			$exts = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$val = $v->getValue();
				$ext = $v->jsonSerialize();
				unset($ext->{FHIRString::FIELD_VALUE});
				if (null !== $val) {
					$vals[] = $val;
				}
				if ([] !== $ext) {
					$exts[] = $ext;
				}
			}
			if ([] !== $vals) {
				$out->{self::FIELD_PARAM} = $vals;
			}
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_PARAM_EXT} = $exts;
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
