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
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRExtension;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString;
use Calvient\FhirTypes\DSTU2\FHIRIdPrimitive;
use Calvient\FhirTypes\DSTU2\PHPFHIRConstants;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeInterface;

/**
 * A value set specifies a set of codes drawn from one or more code systems.
 *
 * Class FHIRValueSetConcept
 * @package \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet
 */
class FHIRValueSetConcept extends FHIRBackboneElement
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_CONCEPT;
	const FIELD_CODE = 'code';
	const FIELD_CODE_EXT = '_code';
	const FIELD_ABSTRACT = 'abstract';
	const FIELD_ABSTRACT_EXT = '_abstract';
	const FIELD_DISPLAY = 'display';
	const FIELD_DISPLAY_EXT = '_display';
	const FIELD_DEFINITION = 'definition';
	const FIELD_DEFINITION_EXT = '_definition';
	const FIELD_DESIGNATION = 'designation';
	const FIELD_CONCEPT = 'concept';

	/** @var string */
	private $_xmlns = '';

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * A code - a text symbol - that uniquely identifies the concept within the code
	 * system.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode
	 */
	protected ?FHIRCode $code = null;

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If this code is not for use as a real concept.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
	 */
	protected ?FHIRBoolean $abstract = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A human readable string that is the recommended default way to present this
	 * concept to a user.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $display = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The formal definition of the concept. The value set resource does not make
	 * formal definitions required, because of the prevalence of legacy systems.
	 * However, they are highly recommended, as without them there is no formal meaning
	 * associated with the concept.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $definition = null;

	/**
	 * A value set specifies a set of codes drawn from one or more code systems.
	 *
	 * Additional representations for the concept - other languages, aliases,
	 * specialized purposes, used for particular purposes, etc.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetDesignation[]
	 */
	protected ?array $designation = [];

	/**
	 * A value set specifies a set of codes drawn from one or more code systems.
	 *
	 * Defines children of a concept to produce a hierarchy of concepts. The nature of
	 * the relationships is variable (is-a/contains/categorizes) and can only be
	 * determined by examining the definitions of the concepts.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetConcept[]
	 */
	protected ?array $concept = [];

	/**
	 * Validation map for fields in type ValueSet.Concept
	 * @var array
	 */
	private static array $_validationRules = [];

	/**
	 * FHIRValueSetConcept Constructor
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
					'FHIRValueSetConcept::_construct - $data expected to be null or array, %s seen',
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
		if (isset($data[self::FIELD_ABSTRACT]) || isset($data[self::FIELD_ABSTRACT_EXT])) {
			$value = $data[self::FIELD_ABSTRACT] ?? null;
			$ext =
				isset($data[self::FIELD_ABSTRACT_EXT]) && is_array($data[self::FIELD_ABSTRACT_EXT])
					? $data[self::FIELD_ABSTRACT_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRBoolean) {
					$this->setAbstract($value);
				} elseif (is_array($value)) {
					$this->setAbstract(new FHIRBoolean(array_merge($ext, $value)));
				} else {
					$this->setAbstract(
						new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setAbstract(new FHIRBoolean($ext));
			}
		}
		if (isset($data[self::FIELD_DISPLAY]) || isset($data[self::FIELD_DISPLAY_EXT])) {
			$value = $data[self::FIELD_DISPLAY] ?? null;
			$ext =
				isset($data[self::FIELD_DISPLAY_EXT]) && is_array($data[self::FIELD_DISPLAY_EXT])
					? $data[self::FIELD_DISPLAY_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->setDisplay($value);
				} elseif (is_array($value)) {
					$this->setDisplay(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->setDisplay(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setDisplay(new FHIRString($ext));
			}
		}
		if (isset($data[self::FIELD_DEFINITION]) || isset($data[self::FIELD_DEFINITION_EXT])) {
			$value = $data[self::FIELD_DEFINITION] ?? null;
			$ext =
				isset($data[self::FIELD_DEFINITION_EXT]) &&
				is_array($data[self::FIELD_DEFINITION_EXT])
					? $data[self::FIELD_DEFINITION_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->setDefinition($value);
				} elseif (is_array($value)) {
					$this->setDefinition(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->setDefinition(
						new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setDefinition(new FHIRString($ext));
			}
		}
		if (isset($data[self::FIELD_DESIGNATION])) {
			if (is_array($data[self::FIELD_DESIGNATION])) {
				foreach ($data[self::FIELD_DESIGNATION] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRValueSetDesignation) {
						$this->addDesignation($v);
					} else {
						$this->addDesignation(new FHIRValueSetDesignation($v));
					}
				}
			} elseif ($data[self::FIELD_DESIGNATION] instanceof FHIRValueSetDesignation) {
				$this->addDesignation($data[self::FIELD_DESIGNATION]);
			} else {
				$this->addDesignation(new FHIRValueSetDesignation($data[self::FIELD_DESIGNATION]));
			}
		}
		if (isset($data[self::FIELD_CONCEPT])) {
			if (is_array($data[self::FIELD_CONCEPT])) {
				foreach ($data[self::FIELD_CONCEPT] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRValueSetConcept) {
						$this->addConcept($v);
					} else {
						$this->addConcept(new FHIRValueSetConcept($v));
					}
				}
			} elseif ($data[self::FIELD_CONCEPT] instanceof FHIRValueSetConcept) {
				$this->addConcept($data[self::FIELD_CONCEPT]);
			} else {
				$this->addConcept(new FHIRValueSetConcept($data[self::FIELD_CONCEPT]));
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
		return "<ValueSetConcept{$xmlns}></ValueSetConcept>";
	}

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * A code - a text symbol - that uniquely identifies the concept within the code
	 * system.
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
	 * A code - a text symbol - that uniquely identifies the concept within the code
	 * system.
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
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If this code is not for use as a real concept.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
	 */
	public function getAbstract(): ?FHIRBoolean
	{
		return $this->abstract;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If this code is not for use as a real concept.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean $abstract
	 * @return static
	 */
	public function setAbstract($abstract = null): object
	{
		if (null !== $abstract && !($abstract instanceof FHIRBoolean)) {
			$abstract = new FHIRBoolean($abstract);
		}
		$this->_trackValueSet($this->abstract, $abstract);
		$this->abstract = $abstract;
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A human readable string that is the recommended default way to present this
	 * concept to a user.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	public function getDisplay(): ?FHIRString
	{
		return $this->display;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A human readable string that is the recommended default way to present this
	 * concept to a user.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString $display
	 * @return static
	 */
	public function setDisplay($display = null): object
	{
		if (null !== $display && !($display instanceof FHIRString)) {
			$display = new FHIRString($display);
		}
		$this->_trackValueSet($this->display, $display);
		$this->display = $display;
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The formal definition of the concept. The value set resource does not make
	 * formal definitions required, because of the prevalence of legacy systems.
	 * However, they are highly recommended, as without them there is no formal meaning
	 * associated with the concept.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	public function getDefinition(): ?FHIRString
	{
		return $this->definition;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The formal definition of the concept. The value set resource does not make
	 * formal definitions required, because of the prevalence of legacy systems.
	 * However, they are highly recommended, as without them there is no formal meaning
	 * associated with the concept.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString $definition
	 * @return static
	 */
	public function setDefinition($definition = null): object
	{
		if (null !== $definition && !($definition instanceof FHIRString)) {
			$definition = new FHIRString($definition);
		}
		$this->_trackValueSet($this->definition, $definition);
		$this->definition = $definition;
		return $this;
	}

	/**
	 * A value set specifies a set of codes drawn from one or more code systems.
	 *
	 * Additional representations for the concept - other languages, aliases,
	 * specialized purposes, used for particular purposes, etc.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetDesignation[]
	 */
	public function getDesignation(): ?array
	{
		return $this->designation;
	}

	/**
	 * A value set specifies a set of codes drawn from one or more code systems.
	 *
	 * Additional representations for the concept - other languages, aliases,
	 * specialized purposes, used for particular purposes, etc.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetDesignation $designation
	 * @return static
	 */
	public function addDesignation(?FHIRValueSetDesignation $designation = null): object
	{
		$this->_trackValueAdded();
		$this->designation[] = $designation;
		return $this;
	}

	/**
	 * A value set specifies a set of codes drawn from one or more code systems.
	 *
	 * Additional representations for the concept - other languages, aliases,
	 * specialized purposes, used for particular purposes, etc.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetDesignation[] $designation
	 * @return static
	 */
	public function setDesignation(array $designation = []): object
	{
		if ([] !== $this->designation) {
			$this->_trackValuesRemoved(count($this->designation));
			$this->designation = [];
		}
		if ([] === $designation) {
			return $this;
		}
		foreach ($designation as $v) {
			if ($v instanceof FHIRValueSetDesignation) {
				$this->addDesignation($v);
			} else {
				$this->addDesignation(new FHIRValueSetDesignation($v));
			}
		}
		return $this;
	}

	/**
	 * A value set specifies a set of codes drawn from one or more code systems.
	 *
	 * Defines children of a concept to produce a hierarchy of concepts. The nature of
	 * the relationships is variable (is-a/contains/categorizes) and can only be
	 * determined by examining the definitions of the concepts.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetConcept[]
	 */
	public function getConcept(): ?array
	{
		return $this->concept;
	}

	/**
	 * A value set specifies a set of codes drawn from one or more code systems.
	 *
	 * Defines children of a concept to produce a hierarchy of concepts. The nature of
	 * the relationships is variable (is-a/contains/categorizes) and can only be
	 * determined by examining the definitions of the concepts.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetConcept $concept
	 * @return static
	 */
	public function addConcept(?FHIRValueSetConcept $concept = null): object
	{
		$this->_trackValueAdded();
		$this->concept[] = $concept;
		return $this;
	}

	/**
	 * A value set specifies a set of codes drawn from one or more code systems.
	 *
	 * Defines children of a concept to produce a hierarchy of concepts. The nature of
	 * the relationships is variable (is-a/contains/categorizes) and can only be
	 * determined by examining the definitions of the concepts.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetConcept[] $concept
	 * @return static
	 */
	public function setConcept(array $concept = []): object
	{
		if ([] !== $this->concept) {
			$this->_trackValuesRemoved(count($this->concept));
			$this->concept = [];
		}
		if ([] === $concept) {
			return $this;
		}
		foreach ($concept as $v) {
			if ($v instanceof FHIRValueSetConcept) {
				$this->addConcept($v);
			} else {
				$this->addConcept(new FHIRValueSetConcept($v));
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
		if (null !== ($v = $this->getCode())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_CODE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getAbstract())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_ABSTRACT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDisplay())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DISPLAY] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefinition())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFINITION] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getDesignation())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_DESIGNATION, $i)] = $fieldErrs;
				}
			}
		}
		if ([] !== ($vs = $this->getConcept())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_CONCEPT, $i)] = $fieldErrs;
				}
			}
		}
		if (isset($validationRules[self::FIELD_CODE])) {
			$v = $this->getCode();
			foreach ($validationRules[self::FIELD_CODE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_CONCEPT,
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
		if (isset($validationRules[self::FIELD_ABSTRACT])) {
			$v = $this->getAbstract();
			foreach ($validationRules[self::FIELD_ABSTRACT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_CONCEPT,
					self::FIELD_ABSTRACT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_ABSTRACT])) {
						$errs[self::FIELD_ABSTRACT] = [];
					}
					$errs[self::FIELD_ABSTRACT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DISPLAY])) {
			$v = $this->getDisplay();
			foreach ($validationRules[self::FIELD_DISPLAY] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_CONCEPT,
					self::FIELD_DISPLAY,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DISPLAY])) {
						$errs[self::FIELD_DISPLAY] = [];
					}
					$errs[self::FIELD_DISPLAY][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFINITION])) {
			$v = $this->getDefinition();
			foreach ($validationRules[self::FIELD_DEFINITION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_CONCEPT,
					self::FIELD_DEFINITION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFINITION])) {
						$errs[self::FIELD_DEFINITION] = [];
					}
					$errs[self::FIELD_DEFINITION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DESIGNATION])) {
			$v = $this->getDesignation();
			foreach ($validationRules[self::FIELD_DESIGNATION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_CONCEPT,
					self::FIELD_DESIGNATION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DESIGNATION])) {
						$errs[self::FIELD_DESIGNATION] = [];
					}
					$errs[self::FIELD_DESIGNATION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_CONCEPT])) {
			$v = $this->getConcept();
			foreach ($validationRules[self::FIELD_CONCEPT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_CONCEPT,
					self::FIELD_CONCEPT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_CONCEPT])) {
						$errs[self::FIELD_CONCEPT] = [];
					}
					$errs[self::FIELD_CONCEPT][$rule] = $err;
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetConcept $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetConcept
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
						'FHIRValueSetConcept::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRValueSetConcept::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRValueSetConcept(null);
		} elseif (!is_object($type) || !($type instanceof FHIRValueSetConcept)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRValueSetConcept::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetConcept or null, %s seen.',
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
			} elseif (self::FIELD_ABSTRACT === $n->nodeName) {
				$type->setAbstract(FHIRBoolean::xmlUnserialize($n));
			} elseif (self::FIELD_DISPLAY === $n->nodeName) {
				$type->setDisplay(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_DEFINITION === $n->nodeName) {
				$type->setDefinition(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_DESIGNATION === $n->nodeName) {
				$type->addDesignation(FHIRValueSetDesignation::xmlUnserialize($n));
			} elseif (self::FIELD_CONCEPT === $n->nodeName) {
				$type->addConcept(FHIRValueSetConcept::xmlUnserialize($n));
			} elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
				$type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_EXTENSION === $n->nodeName) {
				$type->addExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_ID === $n->nodeName) {
				$type->setId(FHIRIdPrimitive::xmlUnserialize($n));
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
		$n = $element->attributes->getNamedItem(self::FIELD_ABSTRACT);
		if (null !== $n) {
			$pt = $type->getAbstract();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setAbstract($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_DISPLAY);
		if (null !== $n) {
			$pt = $type->getDisplay();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setDisplay($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_DEFINITION);
		if (null !== $n) {
			$pt = $type->getDefinition();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setDefinition($n->nodeValue);
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
		if (null !== ($v = $this->getAbstract())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_ABSTRACT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDisplay())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DISPLAY);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefinition())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEFINITION);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getDesignation())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_DESIGNATION);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if ([] !== ($vs = $this->getConcept())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_CONCEPT);
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
		if (null !== ($v = $this->getAbstract())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_ABSTRACT} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRBoolean::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_ABSTRACT_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getDisplay())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_DISPLAY} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRString::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_DISPLAY_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getDefinition())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_DEFINITION} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRString::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_DEFINITION_EXT} = $ext;
			}
		}
		if ([] !== ($vs = $this->getDesignation())) {
			$out->{self::FIELD_DESIGNATION} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_DESIGNATION}[] = $v;
			}
		}
		if ([] !== ($vs = $this->getConcept())) {
			$out->{self::FIELD_CONCEPT} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_CONCEPT}[] = $v;
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
