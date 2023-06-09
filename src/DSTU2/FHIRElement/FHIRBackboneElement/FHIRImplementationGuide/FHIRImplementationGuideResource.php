<?php declare(strict_types=1);

namespace Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide;

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
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRGuideResourcePurpose;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri;
use Calvient\FhirTypes\DSTU2\FHIRIdPrimitive;
use Calvient\FhirTypes\DSTU2\PHPFHIRConstants;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeInterface;

/**
 * A set of rules or how FHIR is used to solve a particular problem. This resource
 * is used to gather all the parts of an implementation guide into a logical whole,
 * and to publish a computable definition of all the parts.
 *
 * Class FHIRImplementationGuideResource
 * @package \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide
 */
class FHIRImplementationGuideResource extends FHIRBackboneElement
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_RESOURCE;
	const FIELD_PURPOSE = 'purpose';
	const FIELD_PURPOSE_EXT = '_purpose';
	const FIELD_NAME = 'name';
	const FIELD_NAME_EXT = '_name';
	const FIELD_DESCRIPTION = 'description';
	const FIELD_DESCRIPTION_EXT = '_description';
	const FIELD_ACRONYM = 'acronym';
	const FIELD_ACRONYM_EXT = '_acronym';
	const FIELD_SOURCE_URI = 'sourceUri';
	const FIELD_SOURCE_URI_EXT = '_sourceUri';
	const FIELD_SOURCE_REFERENCE = 'sourceReference';
	const FIELD_EXAMPLE_FOR = 'exampleFor';

	/** @var string */
	private $_xmlns = '';

	/**
	 * Why a resource is included in the guide.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Why the resource is included in the guide.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRGuideResourcePurpose
	 */
	protected ?FHIRGuideResourcePurpose $purpose = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A human assigned name for the resource. All resources SHOULD have a name, but
	 * the name may be extracted from the resource (e.g. ValueSet.name).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $name = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A description of the reason that a resource has been included in the
	 * implementation guide.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $description = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A short code that may be used to identify the resource throughout the
	 * implementation guide.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $acronym = null;

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Where this resource is found.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri
	 */
	protected ?FHIRUri $sourceUri = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Where this resource is found.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $sourceReference = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Another resource that this resource is an example for. This is mostly used for
	 * resources that are included as examples of StructureDefinitions.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $exampleFor = null;

	/**
	 * Validation map for fields in type ImplementationGuide.Resource
	 * @var array
	 */
	private static array $_validationRules = [];

	/**
	 * FHIRImplementationGuideResource Constructor
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
					'FHIRImplementationGuideResource::_construct - $data expected to be null or array, %s seen',
					gettype($data),
				),
			);
		}
		parent::__construct($data);
		if (isset($data[self::FIELD_PURPOSE]) || isset($data[self::FIELD_PURPOSE_EXT])) {
			$value = $data[self::FIELD_PURPOSE] ?? null;
			$ext =
				isset($data[self::FIELD_PURPOSE_EXT]) && is_array($data[self::FIELD_PURPOSE_EXT])
					? $data[self::FIELD_PURPOSE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRGuideResourcePurpose) {
					$this->setPurpose($value);
				} elseif (is_array($value)) {
					$this->setPurpose(new FHIRGuideResourcePurpose(array_merge($ext, $value)));
				} else {
					$this->setPurpose(
						new FHIRGuideResourcePurpose(
							[FHIRGuideResourcePurpose::FIELD_VALUE => $value] + $ext,
						),
					);
				}
			} elseif ([] !== $ext) {
				$this->setPurpose(new FHIRGuideResourcePurpose($ext));
			}
		}
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
		if (isset($data[self::FIELD_ACRONYM]) || isset($data[self::FIELD_ACRONYM_EXT])) {
			$value = $data[self::FIELD_ACRONYM] ?? null;
			$ext =
				isset($data[self::FIELD_ACRONYM_EXT]) && is_array($data[self::FIELD_ACRONYM_EXT])
					? $data[self::FIELD_ACRONYM_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->setAcronym($value);
				} elseif (is_array($value)) {
					$this->setAcronym(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->setAcronym(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setAcronym(new FHIRString($ext));
			}
		}
		if (isset($data[self::FIELD_SOURCE_URI]) || isset($data[self::FIELD_SOURCE_URI_EXT])) {
			$value = $data[self::FIELD_SOURCE_URI] ?? null;
			$ext =
				isset($data[self::FIELD_SOURCE_URI_EXT]) &&
				is_array($data[self::FIELD_SOURCE_URI_EXT])
					? $data[self::FIELD_SOURCE_URI_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRUri) {
					$this->setSourceUri($value);
				} elseif (is_array($value)) {
					$this->setSourceUri(new FHIRUri(array_merge($ext, $value)));
				} else {
					$this->setSourceUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setSourceUri(new FHIRUri($ext));
			}
		}
		if (isset($data[self::FIELD_SOURCE_REFERENCE])) {
			if ($data[self::FIELD_SOURCE_REFERENCE] instanceof FHIRReference) {
				$this->setSourceReference($data[self::FIELD_SOURCE_REFERENCE]);
			} else {
				$this->setSourceReference(new FHIRReference($data[self::FIELD_SOURCE_REFERENCE]));
			}
		}
		if (isset($data[self::FIELD_EXAMPLE_FOR])) {
			if ($data[self::FIELD_EXAMPLE_FOR] instanceof FHIRReference) {
				$this->setExampleFor($data[self::FIELD_EXAMPLE_FOR]);
			} else {
				$this->setExampleFor(new FHIRReference($data[self::FIELD_EXAMPLE_FOR]));
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
		return "<ImplementationGuideResource{$xmlns}></ImplementationGuideResource>";
	}

	/**
	 * Why a resource is included in the guide.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Why the resource is included in the guide.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRGuideResourcePurpose
	 */
	public function getPurpose(): ?FHIRGuideResourcePurpose
	{
		return $this->purpose;
	}

	/**
	 * Why a resource is included in the guide.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Why the resource is included in the guide.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRGuideResourcePurpose $purpose
	 * @return static
	 */
	public function setPurpose(?FHIRGuideResourcePurpose $purpose = null): object
	{
		$this->_trackValueSet($this->purpose, $purpose);
		$this->purpose = $purpose;
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A human assigned name for the resource. All resources SHOULD have a name, but
	 * the name may be extracted from the resource (e.g. ValueSet.name).
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
	 * A human assigned name for the resource. All resources SHOULD have a name, but
	 * the name may be extracted from the resource (e.g. ValueSet.name).
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
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A description of the reason that a resource has been included in the
	 * implementation guide.
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
	 * A description of the reason that a resource has been included in the
	 * implementation guide.
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
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A short code that may be used to identify the resource throughout the
	 * implementation guide.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	public function getAcronym(): ?FHIRString
	{
		return $this->acronym;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A short code that may be used to identify the resource throughout the
	 * implementation guide.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString $acronym
	 * @return static
	 */
	public function setAcronym($acronym = null): object
	{
		if (null !== $acronym && !($acronym instanceof FHIRString)) {
			$acronym = new FHIRString($acronym);
		}
		$this->_trackValueSet($this->acronym, $acronym);
		$this->acronym = $acronym;
		return $this;
	}

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Where this resource is found.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri
	 */
	public function getSourceUri(): ?FHIRUri
	{
		return $this->sourceUri;
	}

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Where this resource is found.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri $sourceUri
	 * @return static
	 */
	public function setSourceUri($sourceUri = null): object
	{
		if (null !== $sourceUri && !($sourceUri instanceof FHIRUri)) {
			$sourceUri = new FHIRUri($sourceUri);
		}
		$this->_trackValueSet($this->sourceUri, $sourceUri);
		$this->sourceUri = $sourceUri;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Where this resource is found.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getSourceReference(): ?FHIRReference
	{
		return $this->sourceReference;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Where this resource is found.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $sourceReference
	 * @return static
	 */
	public function setSourceReference(?FHIRReference $sourceReference = null): object
	{
		$this->_trackValueSet($this->sourceReference, $sourceReference);
		$this->sourceReference = $sourceReference;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Another resource that this resource is an example for. This is mostly used for
	 * resources that are included as examples of StructureDefinitions.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getExampleFor(): ?FHIRReference
	{
		return $this->exampleFor;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Another resource that this resource is an example for. This is mostly used for
	 * resources that are included as examples of StructureDefinitions.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $exampleFor
	 * @return static
	 */
	public function setExampleFor(?FHIRReference $exampleFor = null): object
	{
		$this->_trackValueSet($this->exampleFor, $exampleFor);
		$this->exampleFor = $exampleFor;
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
		if (null !== ($v = $this->getPurpose())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PURPOSE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getName())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_NAME] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDescription())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DESCRIPTION] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getAcronym())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_ACRONYM] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getSourceUri())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_SOURCE_URI] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getSourceReference())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_SOURCE_REFERENCE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getExampleFor())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_EXAMPLE_FOR] = $fieldErrs;
			}
		}
		if (isset($validationRules[self::FIELD_PURPOSE])) {
			$v = $this->getPurpose();
			foreach ($validationRules[self::FIELD_PURPOSE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_RESOURCE,
					self::FIELD_PURPOSE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PURPOSE])) {
						$errs[self::FIELD_PURPOSE] = [];
					}
					$errs[self::FIELD_PURPOSE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_NAME])) {
			$v = $this->getName();
			foreach ($validationRules[self::FIELD_NAME] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_RESOURCE,
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
		if (isset($validationRules[self::FIELD_DESCRIPTION])) {
			$v = $this->getDescription();
			foreach ($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_RESOURCE,
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
		if (isset($validationRules[self::FIELD_ACRONYM])) {
			$v = $this->getAcronym();
			foreach ($validationRules[self::FIELD_ACRONYM] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_RESOURCE,
					self::FIELD_ACRONYM,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_ACRONYM])) {
						$errs[self::FIELD_ACRONYM] = [];
					}
					$errs[self::FIELD_ACRONYM][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_SOURCE_URI])) {
			$v = $this->getSourceUri();
			foreach ($validationRules[self::FIELD_SOURCE_URI] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_RESOURCE,
					self::FIELD_SOURCE_URI,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_SOURCE_URI])) {
						$errs[self::FIELD_SOURCE_URI] = [];
					}
					$errs[self::FIELD_SOURCE_URI][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_SOURCE_REFERENCE])) {
			$v = $this->getSourceReference();
			foreach ($validationRules[self::FIELD_SOURCE_REFERENCE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_RESOURCE,
					self::FIELD_SOURCE_REFERENCE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_SOURCE_REFERENCE])) {
						$errs[self::FIELD_SOURCE_REFERENCE] = [];
					}
					$errs[self::FIELD_SOURCE_REFERENCE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_EXAMPLE_FOR])) {
			$v = $this->getExampleFor();
			foreach ($validationRules[self::FIELD_EXAMPLE_FOR] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_RESOURCE,
					self::FIELD_EXAMPLE_FOR,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_EXAMPLE_FOR])) {
						$errs[self::FIELD_EXAMPLE_FOR] = [];
					}
					$errs[self::FIELD_EXAMPLE_FOR][$rule] = $err;
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource
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
						'FHIRImplementationGuideResource::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRImplementationGuideResource::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRImplementationGuideResource(null);
		} elseif (!is_object($type) || !($type instanceof FHIRImplementationGuideResource)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRImplementationGuideResource::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource or null, %s seen.',
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
			if (self::FIELD_PURPOSE === $n->nodeName) {
				$type->setPurpose(FHIRGuideResourcePurpose::xmlUnserialize($n));
			} elseif (self::FIELD_NAME === $n->nodeName) {
				$type->setName(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_DESCRIPTION === $n->nodeName) {
				$type->setDescription(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_ACRONYM === $n->nodeName) {
				$type->setAcronym(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_SOURCE_URI === $n->nodeName) {
				$type->setSourceUri(FHIRUri::xmlUnserialize($n));
			} elseif (self::FIELD_SOURCE_REFERENCE === $n->nodeName) {
				$type->setSourceReference(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_EXAMPLE_FOR === $n->nodeName) {
				$type->setExampleFor(FHIRReference::xmlUnserialize($n));
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
		$n = $element->attributes->getNamedItem(self::FIELD_DESCRIPTION);
		if (null !== $n) {
			$pt = $type->getDescription();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setDescription($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_ACRONYM);
		if (null !== $n) {
			$pt = $type->getAcronym();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setAcronym($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_SOURCE_URI);
		if (null !== $n) {
			$pt = $type->getSourceUri();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setSourceUri($n->nodeValue);
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
		if (null !== ($v = $this->getPurpose())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PURPOSE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getName())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_NAME);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDescription())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DESCRIPTION);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getAcronym())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_ACRONYM);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getSourceUri())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_SOURCE_URI);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getSourceReference())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_SOURCE_REFERENCE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getExampleFor())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_FOR);
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
		if (null !== ($v = $this->getPurpose())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_PURPOSE} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRGuideResourcePurpose::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_PURPOSE_EXT} = $ext;
			}
		}
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
		if (null !== ($v = $this->getAcronym())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_ACRONYM} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRString::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_ACRONYM_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getSourceUri())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_SOURCE_URI} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRUri::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_SOURCE_URI_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getSourceReference())) {
			$out->{self::FIELD_SOURCE_REFERENCE} = $v;
		}
		if (null !== ($v = $this->getExampleFor())) {
			$out->{self::FIELD_EXAMPLE_FOR} = $v;
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
