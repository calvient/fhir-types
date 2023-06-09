<?php declare(strict_types=1);

namespace Calvient\FhirTypes\DSTU2\FHIRResource;

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

use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBase64Binary;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRId;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMeta;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri;
use Calvient\FhirTypes\DSTU2\FHIRResource;
use Calvient\FhirTypes\DSTU2\PHPFHIRConstants;
use Calvient\FhirTypes\DSTU2\PHPFHIRContainedTypeInterface;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeInterface;

/**
 * A binary resource can contain any content, whether text, image, pdf, zip
 * archive, etc.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRBinary
 * @package \Calvient\FhirTypes\DSTU2\FHIRResource
 */
class FHIRBinary extends FHIRResource implements PHPFHIRContainedTypeInterface
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_BINARY;
	const FIELD_CONTENT_TYPE = 'contentType';
	const FIELD_CONTENT_TYPE_EXT = '_contentType';
	const FIELD_CONTENT = 'content';
	const FIELD_CONTENT_EXT = '_content';

	/** @var string */
	private $_xmlns = '';

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * MimeType of the binary content represented as a standard MimeType (BCP 13).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode
	 */
	protected ?FHIRCode $contentType = null;

	/**
	 * A stream of bytes
	 * A stream of bytes, base64 encoded
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The actual content, base64 encoded.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRBase64BinaryPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBase64Binary
	 */
	protected ?FHIRBase64Binary $content = null;

	/**
	 * Validation map for fields in type Binary
	 * @var array
	 */
	private static array $_validationRules = [];

	/**
	 * FHIRBinary Constructor
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
					'FHIRBinary::_construct - $data expected to be null or array, %s seen',
					gettype($data),
				),
			);
		}
		parent::__construct($data);
		if (isset($data[self::FIELD_CONTENT_TYPE]) || isset($data[self::FIELD_CONTENT_TYPE_EXT])) {
			$value = $data[self::FIELD_CONTENT_TYPE] ?? null;
			$ext =
				isset($data[self::FIELD_CONTENT_TYPE_EXT]) &&
				is_array($data[self::FIELD_CONTENT_TYPE_EXT])
					? $data[self::FIELD_CONTENT_TYPE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRCode) {
					$this->setContentType($value);
				} elseif (is_array($value)) {
					$this->setContentType(new FHIRCode(array_merge($ext, $value)));
				} else {
					$this->setContentType(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setContentType(new FHIRCode($ext));
			}
		}
		if (isset($data[self::FIELD_CONTENT]) || isset($data[self::FIELD_CONTENT_EXT])) {
			$value = $data[self::FIELD_CONTENT] ?? null;
			$ext =
				isset($data[self::FIELD_CONTENT_EXT]) && is_array($data[self::FIELD_CONTENT_EXT])
					? $data[self::FIELD_CONTENT_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRBase64Binary) {
					$this->setContent($value);
				} elseif (is_array($value)) {
					$this->setContent(new FHIRBase64Binary(array_merge($ext, $value)));
				} else {
					$this->setContent(
						new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setContent(new FHIRBase64Binary($ext));
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
		return "<Binary{$xmlns}></Binary>";
	}
	/**
	 * @return string
	 */
	public function _getResourceType(): string
	{
		return static::FHIR_TYPE_NAME;
	}

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * MimeType of the binary content represented as a standard MimeType (BCP 13).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode
	 */
	public function getContentType(): ?FHIRCode
	{
		return $this->contentType;
	}

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * MimeType of the binary content represented as a standard MimeType (BCP 13).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode $contentType
	 * @return static
	 */
	public function setContentType($contentType = null): object
	{
		if (null !== $contentType && !($contentType instanceof FHIRCode)) {
			$contentType = new FHIRCode($contentType);
		}
		$this->_trackValueSet($this->contentType, $contentType);
		$this->contentType = $contentType;
		return $this;
	}

	/**
	 * A stream of bytes
	 * A stream of bytes, base64 encoded
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The actual content, base64 encoded.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRBase64BinaryPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBase64Binary
	 */
	public function getContent(): ?FHIRBase64Binary
	{
		return $this->content;
	}

	/**
	 * A stream of bytes
	 * A stream of bytes, base64 encoded
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The actual content, base64 encoded.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRBase64BinaryPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBase64Binary $content
	 * @return static
	 */
	public function setContent($content = null): object
	{
		if (null !== $content && !($content instanceof FHIRBase64Binary)) {
			$content = new FHIRBase64Binary($content);
		}
		$this->_trackValueSet($this->content, $content);
		$this->content = $content;
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
		if (null !== ($v = $this->getContentType())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_CONTENT_TYPE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getContent())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_CONTENT] = $fieldErrs;
			}
		}
		if (isset($validationRules[self::FIELD_CONTENT_TYPE])) {
			$v = $this->getContentType();
			foreach ($validationRules[self::FIELD_CONTENT_TYPE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_BINARY,
					self::FIELD_CONTENT_TYPE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_CONTENT_TYPE])) {
						$errs[self::FIELD_CONTENT_TYPE] = [];
					}
					$errs[self::FIELD_CONTENT_TYPE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_CONTENT])) {
			$v = $this->getContent();
			foreach ($validationRules[self::FIELD_CONTENT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_BINARY,
					self::FIELD_CONTENT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_CONTENT])) {
						$errs[self::FIELD_CONTENT] = [];
					}
					$errs[self::FIELD_CONTENT][$rule] = $err;
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRResource\FHIRBinary $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRResource\FHIRBinary
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
						'FHIRBinary::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRBinary::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRBinary(null);
		} elseif (!is_object($type) || !($type instanceof FHIRBinary)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRBinary::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRResource\FHIRBinary or null, %s seen.',
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
			if (self::FIELD_CONTENT_TYPE === $n->nodeName) {
				$type->setContentType(FHIRCode::xmlUnserialize($n));
			} elseif (self::FIELD_CONTENT === $n->nodeName) {
				$type->setContent(FHIRBase64Binary::xmlUnserialize($n));
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
		$n = $element->attributes->getNamedItem(self::FIELD_CONTENT_TYPE);
		if (null !== $n) {
			$pt = $type->getContentType();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setContentType($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_CONTENT);
		if (null !== $n) {
			$pt = $type->getContent();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setContent($n->nodeValue);
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
		if (null !== ($v = $this->getContentType())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_CONTENT_TYPE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getContent())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_CONTENT);
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
		if (null !== ($v = $this->getContentType())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_CONTENT_TYPE} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRCode::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_CONTENT_TYPE_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getContent())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_CONTENT} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRBase64Binary::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_CONTENT_EXT} = $ext;
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
