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
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri;
use Calvient\FhirTypes\DSTU2\FHIRIdPrimitive;
use Calvient\FhirTypes\DSTU2\PHPFHIRConstants;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeInterface;

/**
 * A conformance statement is a set of capabilities of a FHIR Server that may be
 * used as a statement of actual server functionality or a statement of required or
 * desired server implementation.
 *
 * Class FHIRConformanceImplementation
 * @package \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance
 */
class FHIRConformanceImplementation extends FHIRBackboneElement
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_IMPLEMENTATION;
	const FIELD_DESCRIPTION = 'description';
	const FIELD_DESCRIPTION_EXT = '_description';
	const FIELD_URL = 'url';
	const FIELD_URL_EXT = '_url';

	/** @var string */
	private $_xmlns = '';

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Information about the specific installation that this conformance statement
	 * relates to.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $description = null;

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * An absolute base URL for the implementation. This forms the base for REST
	 * interfaces as well as the mailbox and document interfaces.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri
	 */
	protected ?FHIRUri $url = null;

	/**
	 * Validation map for fields in type Conformance.Implementation
	 * @var array
	 */
	private static array $_validationRules = [];

	/**
	 * FHIRConformanceImplementation Constructor
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
					'FHIRConformanceImplementation::_construct - $data expected to be null or array, %s seen',
					gettype($data),
				),
			);
		}
		parent::__construct($data);
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
		if (isset($data[self::FIELD_URL]) || isset($data[self::FIELD_URL_EXT])) {
			$value = $data[self::FIELD_URL] ?? null;
			$ext =
				isset($data[self::FIELD_URL_EXT]) && is_array($data[self::FIELD_URL_EXT])
					? $data[self::FIELD_URL_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRUri) {
					$this->setUrl($value);
				} elseif (is_array($value)) {
					$this->setUrl(new FHIRUri(array_merge($ext, $value)));
				} else {
					$this->setUrl(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setUrl(new FHIRUri($ext));
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
		return "<ConformanceImplementation{$xmlns}></ConformanceImplementation>";
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Information about the specific installation that this conformance statement
	 * relates to.
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
	 * Information about the specific installation that this conformance statement
	 * relates to.
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
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * An absolute base URL for the implementation. This forms the base for REST
	 * interfaces as well as the mailbox and document interfaces.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri
	 */
	public function getUrl(): ?FHIRUri
	{
		return $this->url;
	}

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * An absolute base URL for the implementation. This forms the base for REST
	 * interfaces as well as the mailbox and document interfaces.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri $url
	 * @return static
	 */
	public function setUrl($url = null): object
	{
		if (null !== $url && !($url instanceof FHIRUri)) {
			$url = new FHIRUri($url);
		}
		$this->_trackValueSet($this->url, $url);
		$this->url = $url;
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
		if (null !== ($v = $this->getDescription())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DESCRIPTION] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getUrl())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_URL] = $fieldErrs;
			}
		}
		if (isset($validationRules[self::FIELD_DESCRIPTION])) {
			$v = $this->getDescription();
			foreach ($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_IMPLEMENTATION,
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
		if (isset($validationRules[self::FIELD_URL])) {
			$v = $this->getUrl();
			foreach ($validationRules[self::FIELD_URL] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_IMPLEMENTATION,
					self::FIELD_URL,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_URL])) {
						$errs[self::FIELD_URL] = [];
					}
					$errs[self::FIELD_URL][$rule] = $err;
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceImplementation $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceImplementation
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
						'FHIRConformanceImplementation::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRConformanceImplementation::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRConformanceImplementation(null);
		} elseif (!is_object($type) || !($type instanceof FHIRConformanceImplementation)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRConformanceImplementation::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceImplementation or null, %s seen.',
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
			if (self::FIELD_DESCRIPTION === $n->nodeName) {
				$type->setDescription(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_URL === $n->nodeName) {
				$type->setUrl(FHIRUri::xmlUnserialize($n));
			} elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
				$type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_EXTENSION === $n->nodeName) {
				$type->addExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_ID === $n->nodeName) {
				$type->setId(FHIRIdPrimitive::xmlUnserialize($n));
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
		$n = $element->attributes->getNamedItem(self::FIELD_URL);
		if (null !== $n) {
			$pt = $type->getUrl();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setUrl($n->nodeValue);
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
		if (null !== ($v = $this->getDescription())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DESCRIPTION);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getUrl())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_URL);
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
		if (null !== ($v = $this->getUrl())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_URL} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRUri::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_URL_EXT} = $ext;
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
