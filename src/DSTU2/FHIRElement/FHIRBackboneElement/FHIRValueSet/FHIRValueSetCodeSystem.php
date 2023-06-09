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
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRExtension;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri;
use Calvient\FhirTypes\DSTU2\FHIRIdPrimitive;
use Calvient\FhirTypes\DSTU2\PHPFHIRConstants;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeInterface;

/**
 * A value set specifies a set of codes drawn from one or more code systems.
 *
 * Class FHIRValueSetCodeSystem
 * @package \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet
 */
class FHIRValueSetCodeSystem extends FHIRBackboneElement
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_CODE_SYSTEM;
	const FIELD_SYSTEM = 'system';
	const FIELD_SYSTEM_EXT = '_system';
	const FIELD_VERSION = 'version';
	const FIELD_VERSION_EXT = '_version';
	const FIELD_CASE_SENSITIVE = 'caseSensitive';
	const FIELD_CASE_SENSITIVE_EXT = '_caseSensitive';
	const FIELD_CONCEPT = 'concept';

	/** @var string */
	private $_xmlns = '';

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * An absolute URI that is used to reference this code system, including in
	 * [Coding]{datatypes.html#Coding}.system.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri
	 */
	protected ?FHIRUri $system = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The version of this code system that defines the codes. Note that the version is
	 * optional because a well maintained code system does not suffer from versioning,
	 * and therefore the version does not need to be maintained. However many code
	 * systems are not well maintained, and the version needs to be defined and
	 * tracked.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $version = null;

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If code comparison is case sensitive when codes within this system are compared
	 * to each other.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
	 */
	protected ?FHIRBoolean $caseSensitive = null;

	/**
	 * A value set specifies a set of codes drawn from one or more code systems.
	 *
	 * Concepts that are in the code system. The concept definitions are inherently
	 * hierarchical, but the definitions must be consulted to determine what the
	 * meaning of the hierarchical relationships are.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetConcept[]
	 */
	protected ?array $concept = [];

	/**
	 * Validation map for fields in type ValueSet.CodeSystem
	 * @var array
	 */
	private static array $_validationRules = [
		self::FIELD_CONCEPT => [
			PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
		],
	];

	/**
	 * FHIRValueSetCodeSystem Constructor
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
					'FHIRValueSetCodeSystem::_construct - $data expected to be null or array, %s seen',
					gettype($data),
				),
			);
		}
		parent::__construct($data);
		if (isset($data[self::FIELD_SYSTEM]) || isset($data[self::FIELD_SYSTEM_EXT])) {
			$value = $data[self::FIELD_SYSTEM] ?? null;
			$ext =
				isset($data[self::FIELD_SYSTEM_EXT]) && is_array($data[self::FIELD_SYSTEM_EXT])
					? $data[self::FIELD_SYSTEM_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRUri) {
					$this->setSystem($value);
				} elseif (is_array($value)) {
					$this->setSystem(new FHIRUri(array_merge($ext, $value)));
				} else {
					$this->setSystem(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setSystem(new FHIRUri($ext));
			}
		}
		if (isset($data[self::FIELD_VERSION]) || isset($data[self::FIELD_VERSION_EXT])) {
			$value = $data[self::FIELD_VERSION] ?? null;
			$ext =
				isset($data[self::FIELD_VERSION_EXT]) && is_array($data[self::FIELD_VERSION_EXT])
					? $data[self::FIELD_VERSION_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->setVersion($value);
				} elseif (is_array($value)) {
					$this->setVersion(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->setVersion(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setVersion(new FHIRString($ext));
			}
		}
		if (
			isset($data[self::FIELD_CASE_SENSITIVE]) ||
			isset($data[self::FIELD_CASE_SENSITIVE_EXT])
		) {
			$value = $data[self::FIELD_CASE_SENSITIVE] ?? null;
			$ext =
				isset($data[self::FIELD_CASE_SENSITIVE_EXT]) &&
				is_array($data[self::FIELD_CASE_SENSITIVE_EXT])
					? $data[self::FIELD_CASE_SENSITIVE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRBoolean) {
					$this->setCaseSensitive($value);
				} elseif (is_array($value)) {
					$this->setCaseSensitive(new FHIRBoolean(array_merge($ext, $value)));
				} else {
					$this->setCaseSensitive(
						new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setCaseSensitive(new FHIRBoolean($ext));
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
		return "<ValueSetCodeSystem{$xmlns}></ValueSetCodeSystem>";
	}

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * An absolute URI that is used to reference this code system, including in
	 * [Coding]{datatypes.html#Coding}.system.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri
	 */
	public function getSystem(): ?FHIRUri
	{
		return $this->system;
	}

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * An absolute URI that is used to reference this code system, including in
	 * [Coding]{datatypes.html#Coding}.system.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri $system
	 * @return static
	 */
	public function setSystem($system = null): object
	{
		if (null !== $system && !($system instanceof FHIRUri)) {
			$system = new FHIRUri($system);
		}
		$this->_trackValueSet($this->system, $system);
		$this->system = $system;
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The version of this code system that defines the codes. Note that the version is
	 * optional because a well maintained code system does not suffer from versioning,
	 * and therefore the version does not need to be maintained. However many code
	 * systems are not well maintained, and the version needs to be defined and
	 * tracked.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	public function getVersion(): ?FHIRString
	{
		return $this->version;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The version of this code system that defines the codes. Note that the version is
	 * optional because a well maintained code system does not suffer from versioning,
	 * and therefore the version does not need to be maintained. However many code
	 * systems are not well maintained, and the version needs to be defined and
	 * tracked.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString $version
	 * @return static
	 */
	public function setVersion($version = null): object
	{
		if (null !== $version && !($version instanceof FHIRString)) {
			$version = new FHIRString($version);
		}
		$this->_trackValueSet($this->version, $version);
		$this->version = $version;
		return $this;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If code comparison is case sensitive when codes within this system are compared
	 * to each other.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
	 */
	public function getCaseSensitive(): ?FHIRBoolean
	{
		return $this->caseSensitive;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If code comparison is case sensitive when codes within this system are compared
	 * to each other.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean $caseSensitive
	 * @return static
	 */
	public function setCaseSensitive($caseSensitive = null): object
	{
		if (null !== $caseSensitive && !($caseSensitive instanceof FHIRBoolean)) {
			$caseSensitive = new FHIRBoolean($caseSensitive);
		}
		$this->_trackValueSet($this->caseSensitive, $caseSensitive);
		$this->caseSensitive = $caseSensitive;
		return $this;
	}

	/**
	 * A value set specifies a set of codes drawn from one or more code systems.
	 *
	 * Concepts that are in the code system. The concept definitions are inherently
	 * hierarchical, but the definitions must be consulted to determine what the
	 * meaning of the hierarchical relationships are.
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
	 * Concepts that are in the code system. The concept definitions are inherently
	 * hierarchical, but the definitions must be consulted to determine what the
	 * meaning of the hierarchical relationships are.
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
	 * Concepts that are in the code system. The concept definitions are inherently
	 * hierarchical, but the definitions must be consulted to determine what the
	 * meaning of the hierarchical relationships are.
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
		if (null !== ($v = $this->getSystem())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_SYSTEM] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getVersion())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_VERSION] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getCaseSensitive())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_CASE_SENSITIVE] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getConcept())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_CONCEPT, $i)] = $fieldErrs;
				}
			}
		}
		if (isset($validationRules[self::FIELD_SYSTEM])) {
			$v = $this->getSystem();
			foreach ($validationRules[self::FIELD_SYSTEM] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_CODE_SYSTEM,
					self::FIELD_SYSTEM,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_SYSTEM])) {
						$errs[self::FIELD_SYSTEM] = [];
					}
					$errs[self::FIELD_SYSTEM][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_VERSION])) {
			$v = $this->getVersion();
			foreach ($validationRules[self::FIELD_VERSION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_CODE_SYSTEM,
					self::FIELD_VERSION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_VERSION])) {
						$errs[self::FIELD_VERSION] = [];
					}
					$errs[self::FIELD_VERSION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_CASE_SENSITIVE])) {
			$v = $this->getCaseSensitive();
			foreach ($validationRules[self::FIELD_CASE_SENSITIVE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_CODE_SYSTEM,
					self::FIELD_CASE_SENSITIVE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_CASE_SENSITIVE])) {
						$errs[self::FIELD_CASE_SENSITIVE] = [];
					}
					$errs[self::FIELD_CASE_SENSITIVE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_CONCEPT])) {
			$v = $this->getConcept();
			foreach ($validationRules[self::FIELD_CONCEPT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_CODE_SYSTEM,
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetCodeSystem $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetCodeSystem
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
						'FHIRValueSetCodeSystem::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRValueSetCodeSystem::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRValueSetCodeSystem(null);
		} elseif (!is_object($type) || !($type instanceof FHIRValueSetCodeSystem)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRValueSetCodeSystem::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetCodeSystem or null, %s seen.',
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
			if (self::FIELD_SYSTEM === $n->nodeName) {
				$type->setSystem(FHIRUri::xmlUnserialize($n));
			} elseif (self::FIELD_VERSION === $n->nodeName) {
				$type->setVersion(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_CASE_SENSITIVE === $n->nodeName) {
				$type->setCaseSensitive(FHIRBoolean::xmlUnserialize($n));
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
		$n = $element->attributes->getNamedItem(self::FIELD_SYSTEM);
		if (null !== $n) {
			$pt = $type->getSystem();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setSystem($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_VERSION);
		if (null !== $n) {
			$pt = $type->getVersion();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setVersion($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_CASE_SENSITIVE);
		if (null !== $n) {
			$pt = $type->getCaseSensitive();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setCaseSensitive($n->nodeValue);
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
		if (null !== ($v = $this->getSystem())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_SYSTEM);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getVersion())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_VERSION);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getCaseSensitive())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_CASE_SENSITIVE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
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
		if (null !== ($v = $this->getSystem())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_SYSTEM} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRUri::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_SYSTEM_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getVersion())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_VERSION} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRString::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_VERSION_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getCaseSensitive())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_CASE_SENSITIVE} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRBoolean::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_CASE_SENSITIVE_EXT} = $ext;
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
