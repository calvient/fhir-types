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
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRExtension;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri;
use Calvient\FhirTypes\DSTU2\FHIRIdPrimitive;
use Calvient\FhirTypes\DSTU2\PHPFHIRConstants;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeInterface;

/**
 * A statement of relationships from one set of concepts to one or more other
 * concepts - either code systems or data elements, or classes in class models.
 *
 * Class FHIRConceptMapTarget
 * @package \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConceptMap
 */
class FHIRConceptMapTarget extends FHIRBackboneElement
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP_DOT_TARGET;
	const FIELD_CODE_SYSTEM = 'codeSystem';
	const FIELD_CODE_SYSTEM_EXT = '_codeSystem';
	const FIELD_CODE = 'code';
	const FIELD_CODE_EXT = '_code';
	const FIELD_EQUIVALENCE = 'equivalence';
	const FIELD_EQUIVALENCE_EXT = '_equivalence';
	const FIELD_COMMENTS = 'comments';
	const FIELD_COMMENTS_EXT = '_comments';
	const FIELD_DEPENDS_ON = 'dependsOn';
	const FIELD_PRODUCT = 'product';

	/** @var string */
	private $_xmlns = '';

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * An absolute URI that identifies the code system of the target code (if the
	 * target is a value set that cross code systems).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri
	 */
	protected ?FHIRUri $codeSystem = null;

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Identity (code or path) or the element/item that the map refers to.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode
	 */
	protected ?FHIRCode $code = null;

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The equivalence between the source and target concepts (counting for the
	 * dependencies and products). The equivalence is read from target to source (e.g.
	 * the target is 'wider' than the source).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode
	 */
	protected ?FHIRCode $equivalence = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A description of status/issues in mapping that conveys additional information
	 * not represented in the structured data.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $comments = null;

	/**
	 * A statement of relationships from one set of concepts to one or more other
	 * concepts - either code systems or data elements, or classes in class models.
	 *
	 * A set of additional dependencies for this mapping to hold. This mapping is only
	 * applicable if the specified element can be resolved, and it has the specified
	 * value.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn[]
	 */
	protected ?array $dependsOn = [];

	/**
	 * A statement of relationships from one set of concepts to one or more other
	 * concepts - either code systems or data elements, or classes in class models.
	 *
	 * A set of additional outcomes from this mapping to other elements. To properly
	 * execute this mapping, the specified element must be mapped to some data element
	 * or source that is in context. The mapping may still be useful without a place
	 * for the additional data elements, but the equivalence cannot be relied on.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn[]
	 */
	protected ?array $product = [];

	/**
	 * Validation map for fields in type ConceptMap.Target
	 * @var array
	 */
	private static array $_validationRules = [];

	/**
	 * FHIRConceptMapTarget Constructor
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
					'FHIRConceptMapTarget::_construct - $data expected to be null or array, %s seen',
					gettype($data),
				),
			);
		}
		parent::__construct($data);
		if (isset($data[self::FIELD_CODE_SYSTEM]) || isset($data[self::FIELD_CODE_SYSTEM_EXT])) {
			$value = $data[self::FIELD_CODE_SYSTEM] ?? null;
			$ext =
				isset($data[self::FIELD_CODE_SYSTEM_EXT]) &&
				is_array($data[self::FIELD_CODE_SYSTEM_EXT])
					? $data[self::FIELD_CODE_SYSTEM_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRUri) {
					$this->setCodeSystem($value);
				} elseif (is_array($value)) {
					$this->setCodeSystem(new FHIRUri(array_merge($ext, $value)));
				} else {
					$this->setCodeSystem(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setCodeSystem(new FHIRUri($ext));
			}
		}
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
		if (isset($data[self::FIELD_EQUIVALENCE]) || isset($data[self::FIELD_EQUIVALENCE_EXT])) {
			$value = $data[self::FIELD_EQUIVALENCE] ?? null;
			$ext =
				isset($data[self::FIELD_EQUIVALENCE_EXT]) &&
				is_array($data[self::FIELD_EQUIVALENCE_EXT])
					? $data[self::FIELD_EQUIVALENCE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRCode) {
					$this->setEquivalence($value);
				} elseif (is_array($value)) {
					$this->setEquivalence(new FHIRCode(array_merge($ext, $value)));
				} else {
					$this->setEquivalence(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setEquivalence(new FHIRCode($ext));
			}
		}
		if (isset($data[self::FIELD_COMMENTS]) || isset($data[self::FIELD_COMMENTS_EXT])) {
			$value = $data[self::FIELD_COMMENTS] ?? null;
			$ext =
				isset($data[self::FIELD_COMMENTS_EXT]) && is_array($data[self::FIELD_COMMENTS_EXT])
					? $data[self::FIELD_COMMENTS_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->setComments($value);
				} elseif (is_array($value)) {
					$this->setComments(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->setComments(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setComments(new FHIRString($ext));
			}
		}
		if (isset($data[self::FIELD_DEPENDS_ON])) {
			if (is_array($data[self::FIELD_DEPENDS_ON])) {
				foreach ($data[self::FIELD_DEPENDS_ON] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRConceptMapDependsOn) {
						$this->addDependsOn($v);
					} else {
						$this->addDependsOn(new FHIRConceptMapDependsOn($v));
					}
				}
			} elseif ($data[self::FIELD_DEPENDS_ON] instanceof FHIRConceptMapDependsOn) {
				$this->addDependsOn($data[self::FIELD_DEPENDS_ON]);
			} else {
				$this->addDependsOn(new FHIRConceptMapDependsOn($data[self::FIELD_DEPENDS_ON]));
			}
		}
		if (isset($data[self::FIELD_PRODUCT])) {
			if (is_array($data[self::FIELD_PRODUCT])) {
				foreach ($data[self::FIELD_PRODUCT] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRConceptMapDependsOn) {
						$this->addProduct($v);
					} else {
						$this->addProduct(new FHIRConceptMapDependsOn($v));
					}
				}
			} elseif ($data[self::FIELD_PRODUCT] instanceof FHIRConceptMapDependsOn) {
				$this->addProduct($data[self::FIELD_PRODUCT]);
			} else {
				$this->addProduct(new FHIRConceptMapDependsOn($data[self::FIELD_PRODUCT]));
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
		return "<ConceptMapTarget{$xmlns}></ConceptMapTarget>";
	}

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * An absolute URI that identifies the code system of the target code (if the
	 * target is a value set that cross code systems).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri
	 */
	public function getCodeSystem(): ?FHIRUri
	{
		return $this->codeSystem;
	}

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * An absolute URI that identifies the code system of the target code (if the
	 * target is a value set that cross code systems).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri $codeSystem
	 * @return static
	 */
	public function setCodeSystem($codeSystem = null): object
	{
		if (null !== $codeSystem && !($codeSystem instanceof FHIRUri)) {
			$codeSystem = new FHIRUri($codeSystem);
		}
		$this->_trackValueSet($this->codeSystem, $codeSystem);
		$this->codeSystem = $codeSystem;
		return $this;
	}

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Identity (code or path) or the element/item that the map refers to.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode
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
	 * Identity (code or path) or the element/item that the map refers to.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode $code
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
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The equivalence between the source and target concepts (counting for the
	 * dependencies and products). The equivalence is read from target to source (e.g.
	 * the target is 'wider' than the source).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode
	 */
	public function getEquivalence(): ?FHIRCode
	{
		return $this->equivalence;
	}

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The equivalence between the source and target concepts (counting for the
	 * dependencies and products). The equivalence is read from target to source (e.g.
	 * the target is 'wider' than the source).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode $equivalence
	 * @return static
	 */
	public function setEquivalence($equivalence = null): object
	{
		if (null !== $equivalence && !($equivalence instanceof FHIRCode)) {
			$equivalence = new FHIRCode($equivalence);
		}
		$this->_trackValueSet($this->equivalence, $equivalence);
		$this->equivalence = $equivalence;
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A description of status/issues in mapping that conveys additional information
	 * not represented in the structured data.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	public function getComments(): ?FHIRString
	{
		return $this->comments;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A description of status/issues in mapping that conveys additional information
	 * not represented in the structured data.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString $comments
	 * @return static
	 */
	public function setComments($comments = null): object
	{
		if (null !== $comments && !($comments instanceof FHIRString)) {
			$comments = new FHIRString($comments);
		}
		$this->_trackValueSet($this->comments, $comments);
		$this->comments = $comments;
		return $this;
	}

	/**
	 * A statement of relationships from one set of concepts to one or more other
	 * concepts - either code systems or data elements, or classes in class models.
	 *
	 * A set of additional dependencies for this mapping to hold. This mapping is only
	 * applicable if the specified element can be resolved, and it has the specified
	 * value.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn[]
	 */
	public function getDependsOn(): ?array
	{
		return $this->dependsOn;
	}

	/**
	 * A statement of relationships from one set of concepts to one or more other
	 * concepts - either code systems or data elements, or classes in class models.
	 *
	 * A set of additional dependencies for this mapping to hold. This mapping is only
	 * applicable if the specified element can be resolved, and it has the specified
	 * value.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn $dependsOn
	 * @return static
	 */
	public function addDependsOn(?FHIRConceptMapDependsOn $dependsOn = null): object
	{
		$this->_trackValueAdded();
		$this->dependsOn[] = $dependsOn;
		return $this;
	}

	/**
	 * A statement of relationships from one set of concepts to one or more other
	 * concepts - either code systems or data elements, or classes in class models.
	 *
	 * A set of additional dependencies for this mapping to hold. This mapping is only
	 * applicable if the specified element can be resolved, and it has the specified
	 * value.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn[] $dependsOn
	 * @return static
	 */
	public function setDependsOn(array $dependsOn = []): object
	{
		if ([] !== $this->dependsOn) {
			$this->_trackValuesRemoved(count($this->dependsOn));
			$this->dependsOn = [];
		}
		if ([] === $dependsOn) {
			return $this;
		}
		foreach ($dependsOn as $v) {
			if ($v instanceof FHIRConceptMapDependsOn) {
				$this->addDependsOn($v);
			} else {
				$this->addDependsOn(new FHIRConceptMapDependsOn($v));
			}
		}
		return $this;
	}

	/**
	 * A statement of relationships from one set of concepts to one or more other
	 * concepts - either code systems or data elements, or classes in class models.
	 *
	 * A set of additional outcomes from this mapping to other elements. To properly
	 * execute this mapping, the specified element must be mapped to some data element
	 * or source that is in context. The mapping may still be useful without a place
	 * for the additional data elements, but the equivalence cannot be relied on.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn[]
	 */
	public function getProduct(): ?array
	{
		return $this->product;
	}

	/**
	 * A statement of relationships from one set of concepts to one or more other
	 * concepts - either code systems or data elements, or classes in class models.
	 *
	 * A set of additional outcomes from this mapping to other elements. To properly
	 * execute this mapping, the specified element must be mapped to some data element
	 * or source that is in context. The mapping may still be useful without a place
	 * for the additional data elements, but the equivalence cannot be relied on.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn $product
	 * @return static
	 */
	public function addProduct(?FHIRConceptMapDependsOn $product = null): object
	{
		$this->_trackValueAdded();
		$this->product[] = $product;
		return $this;
	}

	/**
	 * A statement of relationships from one set of concepts to one or more other
	 * concepts - either code systems or data elements, or classes in class models.
	 *
	 * A set of additional outcomes from this mapping to other elements. To properly
	 * execute this mapping, the specified element must be mapped to some data element
	 * or source that is in context. The mapping may still be useful without a place
	 * for the additional data elements, but the equivalence cannot be relied on.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn[] $product
	 * @return static
	 */
	public function setProduct(array $product = []): object
	{
		if ([] !== $this->product) {
			$this->_trackValuesRemoved(count($this->product));
			$this->product = [];
		}
		if ([] === $product) {
			return $this;
		}
		foreach ($product as $v) {
			if ($v instanceof FHIRConceptMapDependsOn) {
				$this->addProduct($v);
			} else {
				$this->addProduct(new FHIRConceptMapDependsOn($v));
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
		if (null !== ($v = $this->getCodeSystem())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_CODE_SYSTEM] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getCode())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_CODE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getEquivalence())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_EQUIVALENCE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getComments())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_COMMENTS] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getDependsOn())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_DEPENDS_ON, $i)] = $fieldErrs;
				}
			}
		}
		if ([] !== ($vs = $this->getProduct())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_PRODUCT, $i)] = $fieldErrs;
				}
			}
		}
		if (isset($validationRules[self::FIELD_CODE_SYSTEM])) {
			$v = $this->getCodeSystem();
			foreach ($validationRules[self::FIELD_CODE_SYSTEM] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP_DOT_TARGET,
					self::FIELD_CODE_SYSTEM,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_CODE_SYSTEM])) {
						$errs[self::FIELD_CODE_SYSTEM] = [];
					}
					$errs[self::FIELD_CODE_SYSTEM][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_CODE])) {
			$v = $this->getCode();
			foreach ($validationRules[self::FIELD_CODE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP_DOT_TARGET,
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
		if (isset($validationRules[self::FIELD_EQUIVALENCE])) {
			$v = $this->getEquivalence();
			foreach ($validationRules[self::FIELD_EQUIVALENCE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP_DOT_TARGET,
					self::FIELD_EQUIVALENCE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_EQUIVALENCE])) {
						$errs[self::FIELD_EQUIVALENCE] = [];
					}
					$errs[self::FIELD_EQUIVALENCE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_COMMENTS])) {
			$v = $this->getComments();
			foreach ($validationRules[self::FIELD_COMMENTS] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP_DOT_TARGET,
					self::FIELD_COMMENTS,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_COMMENTS])) {
						$errs[self::FIELD_COMMENTS] = [];
					}
					$errs[self::FIELD_COMMENTS][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEPENDS_ON])) {
			$v = $this->getDependsOn();
			foreach ($validationRules[self::FIELD_DEPENDS_ON] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP_DOT_TARGET,
					self::FIELD_DEPENDS_ON,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEPENDS_ON])) {
						$errs[self::FIELD_DEPENDS_ON] = [];
					}
					$errs[self::FIELD_DEPENDS_ON][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PRODUCT])) {
			$v = $this->getProduct();
			foreach ($validationRules[self::FIELD_PRODUCT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP_DOT_TARGET,
					self::FIELD_PRODUCT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PRODUCT])) {
						$errs[self::FIELD_PRODUCT] = [];
					}
					$errs[self::FIELD_PRODUCT][$rule] = $err;
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapTarget $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapTarget
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
						'FHIRConceptMapTarget::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRConceptMapTarget::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRConceptMapTarget(null);
		} elseif (!is_object($type) || !($type instanceof FHIRConceptMapTarget)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRConceptMapTarget::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapTarget or null, %s seen.',
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
			if (self::FIELD_CODE_SYSTEM === $n->nodeName) {
				$type->setCodeSystem(FHIRUri::xmlUnserialize($n));
			} elseif (self::FIELD_CODE === $n->nodeName) {
				$type->setCode(FHIRCode::xmlUnserialize($n));
			} elseif (self::FIELD_EQUIVALENCE === $n->nodeName) {
				$type->setEquivalence(FHIRCode::xmlUnserialize($n));
			} elseif (self::FIELD_COMMENTS === $n->nodeName) {
				$type->setComments(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_DEPENDS_ON === $n->nodeName) {
				$type->addDependsOn(FHIRConceptMapDependsOn::xmlUnserialize($n));
			} elseif (self::FIELD_PRODUCT === $n->nodeName) {
				$type->addProduct(FHIRConceptMapDependsOn::xmlUnserialize($n));
			} elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
				$type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_EXTENSION === $n->nodeName) {
				$type->addExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_ID === $n->nodeName) {
				$type->setId(FHIRIdPrimitive::xmlUnserialize($n));
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_CODE_SYSTEM);
		if (null !== $n) {
			$pt = $type->getCodeSystem();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setCodeSystem($n->nodeValue);
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
		$n = $element->attributes->getNamedItem(self::FIELD_EQUIVALENCE);
		if (null !== $n) {
			$pt = $type->getEquivalence();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setEquivalence($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_COMMENTS);
		if (null !== $n) {
			$pt = $type->getComments();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setComments($n->nodeValue);
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
		if (null !== ($v = $this->getCodeSystem())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_CODE_SYSTEM);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getCode())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_CODE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getEquivalence())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_EQUIVALENCE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getComments())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_COMMENTS);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getDependsOn())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_DEPENDS_ON);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if ([] !== ($vs = $this->getProduct())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_PRODUCT);
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
		if (null !== ($v = $this->getCodeSystem())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_CODE_SYSTEM} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRUri::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_CODE_SYSTEM_EXT} = $ext;
			}
		}
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
		if (null !== ($v = $this->getEquivalence())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_EQUIVALENCE} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRCode::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_EQUIVALENCE_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getComments())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_COMMENTS} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRString::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_COMMENTS_EXT} = $ext;
			}
		}
		if ([] !== ($vs = $this->getDependsOn())) {
			$out->{self::FIELD_DEPENDS_ON} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_DEPENDS_ON}[] = $v;
			}
		}
		if ([] !== ($vs = $this->getProduct())) {
			$out->{self::FIELD_PRODUCT} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_PRODUCT}[] = $v;
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
