<?php declare(strict_types=1);

namespace Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet;

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
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri;
use Calvient\FhirTypes\DSTU2\FHIRIdPrimitive;
use Calvient\FhirTypes\DSTU2\PHPFHIRConstants;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeInterface;

/**
 * A value set specifies a set of codes drawn from one or more code systems.
 *
 * Class FHIRValueSetCompose
 * @package \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet
 */
class FHIRValueSetCompose extends FHIRBackboneElement
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_COMPOSE;
	const FIELD_IMPORT = 'import';
	const FIELD_IMPORT_EXT = '_import';
	const FIELD_INCLUDE = 'include';
	const FIELD_EXCLUDE = 'exclude';

	/** @var string */
	private $_xmlns = '';

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Includes the contents of the referenced value set as a part of the contents of
	 * this value set. This is an absolute URI that is a reference to ValueSet.uri.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive[]|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri[]
	 */
	protected ?array $import = [];

	/**
	 * A value set specifies a set of codes drawn from one or more code systems.
	 *
	 * Include one or more codes from a code system.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude[]
	 */
	protected ?array $include = [];

	/**
	 * A value set specifies a set of codes drawn from one or more code systems.
	 *
	 * Exclude one or more codes from the value set.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude[]
	 */
	protected ?array $exclude = [];

	/**
	 * Validation map for fields in type ValueSet.Compose
	 * @var array
	 */
	private static array $_validationRules = [];

	/**
	 * FHIRValueSetCompose Constructor
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
					'FHIRValueSetCompose::_construct - $data expected to be null or array, %s seen',
					gettype($data),
				),
			);
		}
		parent::__construct($data);
		if (isset($data[self::FIELD_IMPORT]) || isset($data[self::FIELD_IMPORT_EXT])) {
			$value = $data[self::FIELD_IMPORT] ?? null;
			$ext =
				isset($data[self::FIELD_IMPORT_EXT]) && is_array($data[self::FIELD_IMPORT_EXT])
					? $data[self::FIELD_IMPORT_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRUri) {
					$this->addImport($value);
				} elseif (is_array($value)) {
					foreach ($value as $i => $v) {
						if ($v instanceof FHIRUri) {
							$this->addImport($v);
						} else {
							$iext = isset($ext[$i]) && is_array($ext[$i]) ? $ext[$i] : [];
							if (is_array($v)) {
								$this->addImport(new FHIRUri(array_merge($v, $iext)));
							} else {
								$this->addImport(new FHIRUri([FHIRUri::FIELD_VALUE => $v] + $iext));
							}
						}
					}
				} elseif (is_array($value)) {
					$this->addImport(new FHIRUri(array_merge($ext, $value)));
				} else {
					$this->addImport(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				foreach ($ext as $iext) {
					$this->addImport(new FHIRUri($iext));
				}
			}
		}
		if (isset($data[self::FIELD_INCLUDE])) {
			if (is_array($data[self::FIELD_INCLUDE])) {
				foreach ($data[self::FIELD_INCLUDE] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRValueSetInclude) {
						$this->addInclude($v);
					} else {
						$this->addInclude(new FHIRValueSetInclude($v));
					}
				}
			} elseif ($data[self::FIELD_INCLUDE] instanceof FHIRValueSetInclude) {
				$this->addInclude($data[self::FIELD_INCLUDE]);
			} else {
				$this->addInclude(new FHIRValueSetInclude($data[self::FIELD_INCLUDE]));
			}
		}
		if (isset($data[self::FIELD_EXCLUDE])) {
			if (is_array($data[self::FIELD_EXCLUDE])) {
				foreach ($data[self::FIELD_EXCLUDE] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRValueSetInclude) {
						$this->addExclude($v);
					} else {
						$this->addExclude(new FHIRValueSetInclude($v));
					}
				}
			} elseif ($data[self::FIELD_EXCLUDE] instanceof FHIRValueSetInclude) {
				$this->addExclude($data[self::FIELD_EXCLUDE]);
			} else {
				$this->addExclude(new FHIRValueSetInclude($data[self::FIELD_EXCLUDE]));
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
		return "<ValueSetCompose{$xmlns}></ValueSetCompose>";
	}

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Includes the contents of the referenced value set as a part of the contents of
	 * this value set. This is an absolute URI that is a reference to ValueSet.uri.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive[]|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri[]
	 */
	public function getImport(): ?array
	{
		return $this->import;
	}

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Includes the contents of the referenced value set as a part of the contents of
	 * this value set. This is an absolute URI that is a reference to ValueSet.uri.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive[]|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri[] $import
	 * @return static
	 */
	public function addImport($import = null): object
	{
		if (null !== $import && !($import instanceof FHIRUri)) {
			$import = new FHIRUri($import);
		}
		$this->_trackValueAdded();
		$this->import[] = $import;
		return $this;
	}

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Includes the contents of the referenced value set as a part of the contents of
	 * this value set. This is an absolute URI that is a reference to ValueSet.uri.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri[] $import
	 * @return static
	 */
	public function setImport(array $import = []): object
	{
		if ([] !== $this->import) {
			$this->_trackValuesRemoved(count($this->import));
			$this->import = [];
		}
		if ([] === $import) {
			return $this;
		}
		foreach ($import as $v) {
			if ($v instanceof FHIRUri) {
				$this->addImport($v);
			} else {
				$this->addImport(new FHIRUri($v));
			}
		}
		return $this;
	}

	/**
	 * A value set specifies a set of codes drawn from one or more code systems.
	 *
	 * Include one or more codes from a code system.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude[]
	 */
	public function getInclude(): ?array
	{
		return $this->include;
	}

	/**
	 * A value set specifies a set of codes drawn from one or more code systems.
	 *
	 * Include one or more codes from a code system.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude $include
	 * @return static
	 */
	public function addInclude(?FHIRValueSetInclude $include = null): object
	{
		$this->_trackValueAdded();
		$this->include[] = $include;
		return $this;
	}

	/**
	 * A value set specifies a set of codes drawn from one or more code systems.
	 *
	 * Include one or more codes from a code system.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude[] $include
	 * @return static
	 */
	public function setInclude(array $include = []): object
	{
		if ([] !== $this->include) {
			$this->_trackValuesRemoved(count($this->include));
			$this->include = [];
		}
		if ([] === $include) {
			return $this;
		}
		foreach ($include as $v) {
			if ($v instanceof FHIRValueSetInclude) {
				$this->addInclude($v);
			} else {
				$this->addInclude(new FHIRValueSetInclude($v));
			}
		}
		return $this;
	}

	/**
	 * A value set specifies a set of codes drawn from one or more code systems.
	 *
	 * Exclude one or more codes from the value set.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude[]
	 */
	public function getExclude(): ?array
	{
		return $this->exclude;
	}

	/**
	 * A value set specifies a set of codes drawn from one or more code systems.
	 *
	 * Exclude one or more codes from the value set.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude $exclude
	 * @return static
	 */
	public function addExclude(?FHIRValueSetInclude $exclude = null): object
	{
		$this->_trackValueAdded();
		$this->exclude[] = $exclude;
		return $this;
	}

	/**
	 * A value set specifies a set of codes drawn from one or more code systems.
	 *
	 * Exclude one or more codes from the value set.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude[] $exclude
	 * @return static
	 */
	public function setExclude(array $exclude = []): object
	{
		if ([] !== $this->exclude) {
			$this->_trackValuesRemoved(count($this->exclude));
			$this->exclude = [];
		}
		if ([] === $exclude) {
			return $this;
		}
		foreach ($exclude as $v) {
			if ($v instanceof FHIRValueSetInclude) {
				$this->addExclude($v);
			} else {
				$this->addExclude(new FHIRValueSetInclude($v));
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
		if ([] !== ($vs = $this->getImport())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_IMPORT, $i)] = $fieldErrs;
				}
			}
		}
		if ([] !== ($vs = $this->getInclude())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_INCLUDE, $i)] = $fieldErrs;
				}
			}
		}
		if ([] !== ($vs = $this->getExclude())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_EXCLUDE, $i)] = $fieldErrs;
				}
			}
		}
		if (isset($validationRules[self::FIELD_IMPORT])) {
			$v = $this->getImport();
			foreach ($validationRules[self::FIELD_IMPORT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_COMPOSE,
					self::FIELD_IMPORT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_IMPORT])) {
						$errs[self::FIELD_IMPORT] = [];
					}
					$errs[self::FIELD_IMPORT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_INCLUDE])) {
			$v = $this->getInclude();
			foreach ($validationRules[self::FIELD_INCLUDE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_COMPOSE,
					self::FIELD_INCLUDE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_INCLUDE])) {
						$errs[self::FIELD_INCLUDE] = [];
					}
					$errs[self::FIELD_INCLUDE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_EXCLUDE])) {
			$v = $this->getExclude();
			foreach ($validationRules[self::FIELD_EXCLUDE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_COMPOSE,
					self::FIELD_EXCLUDE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_EXCLUDE])) {
						$errs[self::FIELD_EXCLUDE] = [];
					}
					$errs[self::FIELD_EXCLUDE][$rule] = $err;
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetCompose $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetCompose
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
						'FHIRValueSetCompose::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRValueSetCompose::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRValueSetCompose(null);
		} elseif (!is_object($type) || !($type instanceof FHIRValueSetCompose)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRValueSetCompose::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetCompose or null, %s seen.',
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
			if (self::FIELD_IMPORT === $n->nodeName) {
				$type->addImport(FHIRUri::xmlUnserialize($n));
			} elseif (self::FIELD_INCLUDE === $n->nodeName) {
				$type->addInclude(FHIRValueSetInclude::xmlUnserialize($n));
			} elseif (self::FIELD_EXCLUDE === $n->nodeName) {
				$type->addExclude(FHIRValueSetInclude::xmlUnserialize($n));
			} elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
				$type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_EXTENSION === $n->nodeName) {
				$type->addExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_ID === $n->nodeName) {
				$type->setId(FHIRIdPrimitive::xmlUnserialize($n));
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_IMPORT);
		if (null !== $n) {
			$pt = $type->getImport();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->addImport($n->nodeValue);
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
		if ([] !== ($vs = $this->getImport())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_IMPORT);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if ([] !== ($vs = $this->getInclude())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_INCLUDE);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if ([] !== ($vs = $this->getExclude())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_EXCLUDE);
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
		if ([] !== ($vs = $this->getImport())) {
			$vals = [];
			$exts = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$val = $v->getValue();
				$ext = $v->jsonSerialize();
				unset($ext->{FHIRUri::FIELD_VALUE});
				if (null !== $val) {
					$vals[] = $val;
				}
				if ([] !== $ext) {
					$exts[] = $ext;
				}
			}
			if ([] !== $vals) {
				$out->{self::FIELD_IMPORT} = $vals;
			}
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_IMPORT_EXT} = $exts;
			}
		}
		if ([] !== ($vs = $this->getInclude())) {
			$out->{self::FIELD_INCLUDE} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_INCLUDE}[] = $v;
			}
		}
		if ([] !== ($vs = $this->getExclude())) {
			$out->{self::FIELD_EXCLUDE} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_EXCLUDE}[] = $v;
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
