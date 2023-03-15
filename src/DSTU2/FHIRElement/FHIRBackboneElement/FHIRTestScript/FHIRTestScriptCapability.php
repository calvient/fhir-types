<?php declare(strict_types=1);

namespace Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript;

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
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInteger;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri;
use Calvient\FhirTypes\DSTU2\FHIRIdPrimitive;
use Calvient\FhirTypes\DSTU2\PHPFHIRConstants;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeInterface;

/**
 * TestScript is a resource that specifies a suite of tests against a FHIR server
 * implementation to determine compliance against the FHIR specification.
 *
 * Class FHIRTestScriptCapability
 * @package \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript
 */
class FHIRTestScriptCapability extends FHIRBackboneElement
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_CAPABILITY;
	const FIELD_REQUIRED = 'required';
	const FIELD_REQUIRED_EXT = '_required';
	const FIELD_VALIDATED = 'validated';
	const FIELD_VALIDATED_EXT = '_validated';
	const FIELD_DESCRIPTION = 'description';
	const FIELD_DESCRIPTION_EXT = '_description';
	const FIELD_DESTINATION = 'destination';
	const FIELD_DESTINATION_EXT = '_destination';
	const FIELD_LINK = 'link';
	const FIELD_LINK_EXT = '_link';
	const FIELD_CONFORMANCE = 'conformance';

	/** @var string */
	private $_xmlns = '';

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Whether or not the test execution will require the given capabilities of the
	 * server in order for this test script to execute.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
	 */
	protected ?FHIRBoolean $required = null;

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Whether or not the test execution will validate the given capabilities of the
	 * server in order for this test script to execute.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
	 */
	protected ?FHIRBoolean $validated = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Description of the capabilities that this test script is requiring the server to
	 * support.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $description = null;

	/**
	 * A whole number
	 * 32 bit number; for values larger than this, use decimal
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Which server these requirements apply to.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRIntegerPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInteger
	 */
	protected ?FHIRInteger $destination = null;

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Links to the FHIR specification that describes this interaction and the
	 * resources involved in more detail.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive[]|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri[]
	 */
	protected ?array $link = [];

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Minimum conformance required of server for test script to execute successfully.
	 * If server does not meet at a minimum the reference conformance definition, then
	 * all tests in this script are skipped.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $conformance = null;

	/**
	 * Validation map for fields in type TestScript.Capability
	 * @var array
	 */
	private static array $_validationRules = [];

	/**
	 * FHIRTestScriptCapability Constructor
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
					'FHIRTestScriptCapability::_construct - $data expected to be null or array, %s seen',
					gettype($data),
				),
			);
		}
		parent::__construct($data);
		if (isset($data[self::FIELD_REQUIRED]) || isset($data[self::FIELD_REQUIRED_EXT])) {
			$value = $data[self::FIELD_REQUIRED] ?? null;
			$ext =
				isset($data[self::FIELD_REQUIRED_EXT]) && is_array($data[self::FIELD_REQUIRED_EXT])
					? $data[self::FIELD_REQUIRED_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRBoolean) {
					$this->setRequired($value);
				} elseif (is_array($value)) {
					$this->setRequired(new FHIRBoolean(array_merge($ext, $value)));
				} else {
					$this->setRequired(
						new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setRequired(new FHIRBoolean($ext));
			}
		}
		if (isset($data[self::FIELD_VALIDATED]) || isset($data[self::FIELD_VALIDATED_EXT])) {
			$value = $data[self::FIELD_VALIDATED] ?? null;
			$ext =
				isset($data[self::FIELD_VALIDATED_EXT]) &&
				is_array($data[self::FIELD_VALIDATED_EXT])
					? $data[self::FIELD_VALIDATED_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRBoolean) {
					$this->setValidated($value);
				} elseif (is_array($value)) {
					$this->setValidated(new FHIRBoolean(array_merge($ext, $value)));
				} else {
					$this->setValidated(
						new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setValidated(new FHIRBoolean($ext));
			}
		}
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
		if (isset($data[self::FIELD_DESTINATION]) || isset($data[self::FIELD_DESTINATION_EXT])) {
			$value = $data[self::FIELD_DESTINATION] ?? null;
			$ext =
				isset($data[self::FIELD_DESTINATION_EXT]) &&
				is_array($data[self::FIELD_DESTINATION_EXT])
					? $data[self::FIELD_DESTINATION_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRInteger) {
					$this->setDestination($value);
				} elseif (is_array($value)) {
					$this->setDestination(new FHIRInteger(array_merge($ext, $value)));
				} else {
					$this->setDestination(
						new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setDestination(new FHIRInteger($ext));
			}
		}
		if (isset($data[self::FIELD_LINK]) || isset($data[self::FIELD_LINK_EXT])) {
			$value = $data[self::FIELD_LINK] ?? null;
			$ext =
				isset($data[self::FIELD_LINK_EXT]) && is_array($data[self::FIELD_LINK_EXT])
					? $data[self::FIELD_LINK_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRUri) {
					$this->addLink($value);
				} elseif (is_array($value)) {
					foreach ($value as $i => $v) {
						if ($v instanceof FHIRUri) {
							$this->addLink($v);
						} else {
							$iext = isset($ext[$i]) && is_array($ext[$i]) ? $ext[$i] : [];
							if (is_array($v)) {
								$this->addLink(new FHIRUri(array_merge($v, $iext)));
							} else {
								$this->addLink(new FHIRUri([FHIRUri::FIELD_VALUE => $v] + $iext));
							}
						}
					}
				} elseif (is_array($value)) {
					$this->addLink(new FHIRUri(array_merge($ext, $value)));
				} else {
					$this->addLink(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				foreach ($ext as $iext) {
					$this->addLink(new FHIRUri($iext));
				}
			}
		}
		if (isset($data[self::FIELD_CONFORMANCE])) {
			if ($data[self::FIELD_CONFORMANCE] instanceof FHIRReference) {
				$this->setConformance($data[self::FIELD_CONFORMANCE]);
			} else {
				$this->setConformance(new FHIRReference($data[self::FIELD_CONFORMANCE]));
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
		return "<TestScriptCapability{$xmlns}></TestScriptCapability>";
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Whether or not the test execution will require the given capabilities of the
	 * server in order for this test script to execute.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
	 */
	public function getRequired(): ?FHIRBoolean
	{
		return $this->required;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Whether or not the test execution will require the given capabilities of the
	 * server in order for this test script to execute.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean $required
	 * @return static
	 */
	public function setRequired($required = null): object
	{
		if (null !== $required && !($required instanceof FHIRBoolean)) {
			$required = new FHIRBoolean($required);
		}
		$this->_trackValueSet($this->required, $required);
		$this->required = $required;
		return $this;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Whether or not the test execution will validate the given capabilities of the
	 * server in order for this test script to execute.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
	 */
	public function getValidated(): ?FHIRBoolean
	{
		return $this->validated;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Whether or not the test execution will validate the given capabilities of the
	 * server in order for this test script to execute.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean $validated
	 * @return static
	 */
	public function setValidated($validated = null): object
	{
		if (null !== $validated && !($validated instanceof FHIRBoolean)) {
			$validated = new FHIRBoolean($validated);
		}
		$this->_trackValueSet($this->validated, $validated);
		$this->validated = $validated;
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Description of the capabilities that this test script is requiring the server to
	 * support.
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
	 * Description of the capabilities that this test script is requiring the server to
	 * support.
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
	 * A whole number
	 * 32 bit number; for values larger than this, use decimal
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Which server these requirements apply to.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRIntegerPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInteger
	 */
	public function getDestination(): ?FHIRInteger
	{
		return $this->destination;
	}

	/**
	 * A whole number
	 * 32 bit number; for values larger than this, use decimal
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Which server these requirements apply to.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRIntegerPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInteger $destination
	 * @return static
	 */
	public function setDestination($destination = null): object
	{
		if (null !== $destination && !($destination instanceof FHIRInteger)) {
			$destination = new FHIRInteger($destination);
		}
		$this->_trackValueSet($this->destination, $destination);
		$this->destination = $destination;
		return $this;
	}

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Links to the FHIR specification that describes this interaction and the
	 * resources involved in more detail.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive[]|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri[]
	 */
	public function getLink(): ?array
	{
		return $this->link;
	}

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Links to the FHIR specification that describes this interaction and the
	 * resources involved in more detail.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive[]|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri[] $link
	 * @return static
	 */
	public function addLink($link = null): object
	{
		if (null !== $link && !($link instanceof FHIRUri)) {
			$link = new FHIRUri($link);
		}
		$this->_trackValueAdded();
		$this->link[] = $link;
		return $this;
	}

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Links to the FHIR specification that describes this interaction and the
	 * resources involved in more detail.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri[] $link
	 * @return static
	 */
	public function setLink(array $link = []): object
	{
		if ([] !== $this->link) {
			$this->_trackValuesRemoved(count($this->link));
			$this->link = [];
		}
		if ([] === $link) {
			return $this;
		}
		foreach ($link as $v) {
			if ($v instanceof FHIRUri) {
				$this->addLink($v);
			} else {
				$this->addLink(new FHIRUri($v));
			}
		}
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Minimum conformance required of server for test script to execute successfully.
	 * If server does not meet at a minimum the reference conformance definition, then
	 * all tests in this script are skipped.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getConformance(): ?FHIRReference
	{
		return $this->conformance;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Minimum conformance required of server for test script to execute successfully.
	 * If server does not meet at a minimum the reference conformance definition, then
	 * all tests in this script are skipped.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $conformance
	 * @return static
	 */
	public function setConformance(?FHIRReference $conformance = null): object
	{
		$this->_trackValueSet($this->conformance, $conformance);
		$this->conformance = $conformance;
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
		if (null !== ($v = $this->getRequired())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_REQUIRED] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getValidated())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_VALIDATED] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDescription())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DESCRIPTION] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDestination())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DESTINATION] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getLink())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_LINK, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getConformance())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_CONFORMANCE] = $fieldErrs;
			}
		}
		if (isset($validationRules[self::FIELD_REQUIRED])) {
			$v = $this->getRequired();
			foreach ($validationRules[self::FIELD_REQUIRED] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_CAPABILITY,
					self::FIELD_REQUIRED,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_REQUIRED])) {
						$errs[self::FIELD_REQUIRED] = [];
					}
					$errs[self::FIELD_REQUIRED][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_VALIDATED])) {
			$v = $this->getValidated();
			foreach ($validationRules[self::FIELD_VALIDATED] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_CAPABILITY,
					self::FIELD_VALIDATED,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_VALIDATED])) {
						$errs[self::FIELD_VALIDATED] = [];
					}
					$errs[self::FIELD_VALIDATED][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DESCRIPTION])) {
			$v = $this->getDescription();
			foreach ($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_CAPABILITY,
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
		if (isset($validationRules[self::FIELD_DESTINATION])) {
			$v = $this->getDestination();
			foreach ($validationRules[self::FIELD_DESTINATION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_CAPABILITY,
					self::FIELD_DESTINATION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DESTINATION])) {
						$errs[self::FIELD_DESTINATION] = [];
					}
					$errs[self::FIELD_DESTINATION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_LINK])) {
			$v = $this->getLink();
			foreach ($validationRules[self::FIELD_LINK] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_CAPABILITY,
					self::FIELD_LINK,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_LINK])) {
						$errs[self::FIELD_LINK] = [];
					}
					$errs[self::FIELD_LINK][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_CONFORMANCE])) {
			$v = $this->getConformance();
			foreach ($validationRules[self::FIELD_CONFORMANCE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_CAPABILITY,
					self::FIELD_CONFORMANCE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_CONFORMANCE])) {
						$errs[self::FIELD_CONFORMANCE] = [];
					}
					$errs[self::FIELD_CONFORMANCE][$rule] = $err;
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptCapability $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptCapability
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
						'FHIRTestScriptCapability::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRTestScriptCapability::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRTestScriptCapability(null);
		} elseif (!is_object($type) || !($type instanceof FHIRTestScriptCapability)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRTestScriptCapability::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptCapability or null, %s seen.',
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
			if (self::FIELD_REQUIRED === $n->nodeName) {
				$type->setRequired(FHIRBoolean::xmlUnserialize($n));
			} elseif (self::FIELD_VALIDATED === $n->nodeName) {
				$type->setValidated(FHIRBoolean::xmlUnserialize($n));
			} elseif (self::FIELD_DESCRIPTION === $n->nodeName) {
				$type->setDescription(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_DESTINATION === $n->nodeName) {
				$type->setDestination(FHIRInteger::xmlUnserialize($n));
			} elseif (self::FIELD_LINK === $n->nodeName) {
				$type->addLink(FHIRUri::xmlUnserialize($n));
			} elseif (self::FIELD_CONFORMANCE === $n->nodeName) {
				$type->setConformance(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
				$type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_EXTENSION === $n->nodeName) {
				$type->addExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_ID === $n->nodeName) {
				$type->setId(FHIRIdPrimitive::xmlUnserialize($n));
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_REQUIRED);
		if (null !== $n) {
			$pt = $type->getRequired();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setRequired($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_VALIDATED);
		if (null !== $n) {
			$pt = $type->getValidated();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setValidated($n->nodeValue);
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
		$n = $element->attributes->getNamedItem(self::FIELD_DESTINATION);
		if (null !== $n) {
			$pt = $type->getDestination();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setDestination($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_LINK);
		if (null !== $n) {
			$pt = $type->getLink();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->addLink($n->nodeValue);
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
		if (null !== ($v = $this->getRequired())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_REQUIRED);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getValidated())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_VALIDATED);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDescription())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DESCRIPTION);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDestination())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DESTINATION);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getLink())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_LINK);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if (null !== ($v = $this->getConformance())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_CONFORMANCE);
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
		if (null !== ($v = $this->getRequired())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_REQUIRED} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRBoolean::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_REQUIRED_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getValidated())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_VALIDATED} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRBoolean::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_VALIDATED_EXT} = $ext;
			}
		}
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
		if (null !== ($v = $this->getDestination())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_DESTINATION} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRInteger::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_DESTINATION_EXT} = $ext;
			}
		}
		if ([] !== ($vs = $this->getLink())) {
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
				$out->{self::FIELD_LINK} = $vals;
			}
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_LINK_EXT} = $exts;
			}
		}
		if (null !== ($v = $this->getConformance())) {
			$out->{self::FIELD_CONFORMANCE} = $v;
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
