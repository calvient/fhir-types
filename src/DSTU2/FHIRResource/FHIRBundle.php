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

use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBundleType;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRId;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMeta;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSignature;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUnsignedInt;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri;
use Calvient\FhirTypes\DSTU2\FHIRResource;
use Calvient\FhirTypes\DSTU2\PHPFHIRConstants;
use Calvient\FhirTypes\DSTU2\PHPFHIRContainedTypeInterface;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeInterface;

/**
 * A container for a collection of resources.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRBundle
 * @package \Calvient\FhirTypes\DSTU2\FHIRResource
 */
class FHIRBundle extends FHIRResource implements PHPFHIRContainedTypeInterface
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_BUNDLE;
	const FIELD_TYPE = 'type';
	const FIELD_TYPE_EXT = '_type';
	const FIELD_TOTAL = 'total';
	const FIELD_TOTAL_EXT = '_total';
	const FIELD_LINK = 'link';
	const FIELD_ENTRY = 'entry';
	const FIELD_SIGNATURE = 'signature';

	/** @var string */
	private $_xmlns = '';

	/**
	 * Indicates the purpose of a bundle - how it was intended to be used.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Indicates the purpose of this bundle- how it was intended to be used.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBundleType
	 */
	protected ?FHIRBundleType $type = null;

	/**
	 * An integer with a value that is not negative (e.g. >= 0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * If a set of search matches, this is the total number of matches for the search
	 * (as opposed to the number of results in this bundle).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUnsignedInt
	 */
	protected ?FHIRUnsignedInt $total = null;

	/**
	 * A container for a collection of resources.
	 *
	 * A series of links that provide context to this bundle.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink[]
	 */
	protected ?array $link = [];

	/**
	 * A container for a collection of resources.
	 *
	 * An entry in a bundle resource - will either contain a resource, or information
	 * about a resource (transactions and history only).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry[]
	 */
	protected ?array $entry = [];

	/**
	 * A digital signature along with supporting context. The signature may be
	 * electronic/cryptographic in nature, or a graphical image representing a
	 * hand-written signature, or a signature process. Different Signature approaches
	 * have different utilities.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Digital Signature - base64 encoded. XML DigSIg or a JWT.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSignature
	 */
	protected ?FHIRSignature $signature = null;

	/**
	 * Validation map for fields in type Bundle
	 * @var array
	 */
	private static array $_validationRules = [];

	/**
	 * FHIRBundle Constructor
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
					'FHIRBundle::_construct - $data expected to be null or array, %s seen',
					gettype($data),
				),
			);
		}
		parent::__construct($data);
		if (isset($data[self::FIELD_TYPE]) || isset($data[self::FIELD_TYPE_EXT])) {
			$value = $data[self::FIELD_TYPE] ?? null;
			$ext =
				isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT])
					? $data[self::FIELD_TYPE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRBundleType) {
					$this->setType($value);
				} elseif (is_array($value)) {
					$this->setType(new FHIRBundleType(array_merge($ext, $value)));
				} else {
					$this->setType(
						new FHIRBundleType([FHIRBundleType::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setType(new FHIRBundleType($ext));
			}
		}
		if (isset($data[self::FIELD_TOTAL]) || isset($data[self::FIELD_TOTAL_EXT])) {
			$value = $data[self::FIELD_TOTAL] ?? null;
			$ext =
				isset($data[self::FIELD_TOTAL_EXT]) && is_array($data[self::FIELD_TOTAL_EXT])
					? $data[self::FIELD_TOTAL_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRUnsignedInt) {
					$this->setTotal($value);
				} elseif (is_array($value)) {
					$this->setTotal(new FHIRUnsignedInt(array_merge($ext, $value)));
				} else {
					$this->setTotal(
						new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setTotal(new FHIRUnsignedInt($ext));
			}
		}
		if (isset($data[self::FIELD_LINK])) {
			if (is_array($data[self::FIELD_LINK])) {
				foreach ($data[self::FIELD_LINK] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRBundleLink) {
						$this->addLink($v);
					} else {
						$this->addLink(new FHIRBundleLink($v));
					}
				}
			} elseif ($data[self::FIELD_LINK] instanceof FHIRBundleLink) {
				$this->addLink($data[self::FIELD_LINK]);
			} else {
				$this->addLink(new FHIRBundleLink($data[self::FIELD_LINK]));
			}
		}
		if (isset($data[self::FIELD_ENTRY])) {
			if (is_array($data[self::FIELD_ENTRY])) {
				foreach ($data[self::FIELD_ENTRY] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRBundleEntry) {
						$this->addEntry($v);
					} else {
						$this->addEntry(new FHIRBundleEntry($v));
					}
				}
			} elseif ($data[self::FIELD_ENTRY] instanceof FHIRBundleEntry) {
				$this->addEntry($data[self::FIELD_ENTRY]);
			} else {
				$this->addEntry(new FHIRBundleEntry($data[self::FIELD_ENTRY]));
			}
		}
		if (isset($data[self::FIELD_SIGNATURE])) {
			if ($data[self::FIELD_SIGNATURE] instanceof FHIRSignature) {
				$this->setSignature($data[self::FIELD_SIGNATURE]);
			} else {
				$this->setSignature(new FHIRSignature($data[self::FIELD_SIGNATURE]));
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
		return "<Bundle{$xmlns}></Bundle>";
	}
	/**
	 * @return string
	 */
	public function _getResourceType(): string
	{
		return static::FHIR_TYPE_NAME;
	}

	/**
	 * Indicates the purpose of a bundle - how it was intended to be used.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Indicates the purpose of this bundle- how it was intended to be used.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBundleType
	 */
	public function getType(): ?FHIRBundleType
	{
		return $this->type;
	}

	/**
	 * Indicates the purpose of a bundle - how it was intended to be used.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Indicates the purpose of this bundle- how it was intended to be used.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBundleType $type
	 * @return static
	 */
	public function setType(?FHIRBundleType $type = null): object
	{
		$this->_trackValueSet($this->type, $type);
		$this->type = $type;
		return $this;
	}

	/**
	 * An integer with a value that is not negative (e.g. >= 0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * If a set of search matches, this is the total number of matches for the search
	 * (as opposed to the number of results in this bundle).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUnsignedInt
	 */
	public function getTotal(): ?FHIRUnsignedInt
	{
		return $this->total;
	}

	/**
	 * An integer with a value that is not negative (e.g. >= 0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * If a set of search matches, this is the total number of matches for the search
	 * (as opposed to the number of results in this bundle).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUnsignedInt $total
	 * @return static
	 */
	public function setTotal($total = null): object
	{
		if (null !== $total && !($total instanceof FHIRUnsignedInt)) {
			$total = new FHIRUnsignedInt($total);
		}
		$this->_trackValueSet($this->total, $total);
		$this->total = $total;
		return $this;
	}

	/**
	 * A container for a collection of resources.
	 *
	 * A series of links that provide context to this bundle.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink[]
	 */
	public function getLink(): ?array
	{
		return $this->link;
	}

	/**
	 * A container for a collection of resources.
	 *
	 * A series of links that provide context to this bundle.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink $link
	 * @return static
	 */
	public function addLink(?FHIRBundleLink $link = null): object
	{
		$this->_trackValueAdded();
		$this->link[] = $link;
		return $this;
	}

	/**
	 * A container for a collection of resources.
	 *
	 * A series of links that provide context to this bundle.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink[] $link
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
			if ($v instanceof FHIRBundleLink) {
				$this->addLink($v);
			} else {
				$this->addLink(new FHIRBundleLink($v));
			}
		}
		return $this;
	}

	/**
	 * A container for a collection of resources.
	 *
	 * An entry in a bundle resource - will either contain a resource, or information
	 * about a resource (transactions and history only).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry[]
	 */
	public function getEntry(): ?array
	{
		return $this->entry;
	}

	/**
	 * A container for a collection of resources.
	 *
	 * An entry in a bundle resource - will either contain a resource, or information
	 * about a resource (transactions and history only).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry $entry
	 * @return static
	 */
	public function addEntry(?FHIRBundleEntry $entry = null): object
	{
		$this->_trackValueAdded();
		$this->entry[] = $entry;
		return $this;
	}

	/**
	 * A container for a collection of resources.
	 *
	 * An entry in a bundle resource - will either contain a resource, or information
	 * about a resource (transactions and history only).
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry[] $entry
	 * @return static
	 */
	public function setEntry(array $entry = []): object
	{
		if ([] !== $this->entry) {
			$this->_trackValuesRemoved(count($this->entry));
			$this->entry = [];
		}
		if ([] === $entry) {
			return $this;
		}
		foreach ($entry as $v) {
			if ($v instanceof FHIRBundleEntry) {
				$this->addEntry($v);
			} else {
				$this->addEntry(new FHIRBundleEntry($v));
			}
		}
		return $this;
	}

	/**
	 * A digital signature along with supporting context. The signature may be
	 * electronic/cryptographic in nature, or a graphical image representing a
	 * hand-written signature, or a signature process. Different Signature approaches
	 * have different utilities.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Digital Signature - base64 encoded. XML DigSIg or a JWT.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSignature
	 */
	public function getSignature(): ?FHIRSignature
	{
		return $this->signature;
	}

	/**
	 * A digital signature along with supporting context. The signature may be
	 * electronic/cryptographic in nature, or a graphical image representing a
	 * hand-written signature, or a signature process. Different Signature approaches
	 * have different utilities.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Digital Signature - base64 encoded. XML DigSIg or a JWT.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSignature $signature
	 * @return static
	 */
	public function setSignature(?FHIRSignature $signature = null): object
	{
		$this->_trackValueSet($this->signature, $signature);
		$this->signature = $signature;
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
		if (null !== ($v = $this->getType())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_TYPE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getTotal())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_TOTAL] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getLink())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_LINK, $i)] = $fieldErrs;
				}
			}
		}
		if ([] !== ($vs = $this->getEntry())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_ENTRY, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getSignature())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_SIGNATURE] = $fieldErrs;
			}
		}
		if (isset($validationRules[self::FIELD_TYPE])) {
			$v = $this->getType();
			foreach ($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_BUNDLE,
					self::FIELD_TYPE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_TYPE])) {
						$errs[self::FIELD_TYPE] = [];
					}
					$errs[self::FIELD_TYPE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_TOTAL])) {
			$v = $this->getTotal();
			foreach ($validationRules[self::FIELD_TOTAL] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_BUNDLE,
					self::FIELD_TOTAL,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_TOTAL])) {
						$errs[self::FIELD_TOTAL] = [];
					}
					$errs[self::FIELD_TOTAL][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_LINK])) {
			$v = $this->getLink();
			foreach ($validationRules[self::FIELD_LINK] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_BUNDLE,
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
		if (isset($validationRules[self::FIELD_ENTRY])) {
			$v = $this->getEntry();
			foreach ($validationRules[self::FIELD_ENTRY] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_BUNDLE,
					self::FIELD_ENTRY,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_ENTRY])) {
						$errs[self::FIELD_ENTRY] = [];
					}
					$errs[self::FIELD_ENTRY][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_SIGNATURE])) {
			$v = $this->getSignature();
			foreach ($validationRules[self::FIELD_SIGNATURE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_BUNDLE,
					self::FIELD_SIGNATURE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_SIGNATURE])) {
						$errs[self::FIELD_SIGNATURE] = [];
					}
					$errs[self::FIELD_SIGNATURE][$rule] = $err;
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRResource\FHIRBundle $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRResource\FHIRBundle
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
						'FHIRBundle::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRBundle::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRBundle(null);
		} elseif (!is_object($type) || !($type instanceof FHIRBundle)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRBundle::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRResource\FHIRBundle or null, %s seen.',
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
			if (self::FIELD_TYPE === $n->nodeName) {
				$type->setType(FHIRBundleType::xmlUnserialize($n));
			} elseif (self::FIELD_TOTAL === $n->nodeName) {
				$type->setTotal(FHIRUnsignedInt::xmlUnserialize($n));
			} elseif (self::FIELD_LINK === $n->nodeName) {
				$type->addLink(FHIRBundleLink::xmlUnserialize($n));
			} elseif (self::FIELD_ENTRY === $n->nodeName) {
				$type->addEntry(FHIRBundleEntry::xmlUnserialize($n));
			} elseif (self::FIELD_SIGNATURE === $n->nodeName) {
				$type->setSignature(FHIRSignature::xmlUnserialize($n));
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
		$n = $element->attributes->getNamedItem(self::FIELD_TOTAL);
		if (null !== $n) {
			$pt = $type->getTotal();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setTotal($n->nodeValue);
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
		if (null !== ($v = $this->getType())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_TYPE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getTotal())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_TOTAL);
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
		if ([] !== ($vs = $this->getEntry())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_ENTRY);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if (null !== ($v = $this->getSignature())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_SIGNATURE);
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
		if (null !== ($v = $this->getType())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_TYPE} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRBundleType::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_TYPE_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getTotal())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_TOTAL} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRUnsignedInt::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_TOTAL_EXT} = $ext;
			}
		}
		if ([] !== ($vs = $this->getLink())) {
			$out->{self::FIELD_LINK} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_LINK}[] = $v;
			}
		}
		if ([] !== ($vs = $this->getEntry())) {
			$out->{self::FIELD_ENTRY} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_ENTRY}[] = $v;
			}
		}
		if (null !== ($v = $this->getSignature())) {
			$out->{self::FIELD_SIGNATURE} = $v;
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
