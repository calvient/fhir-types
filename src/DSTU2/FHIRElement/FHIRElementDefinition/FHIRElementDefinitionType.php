<?php declare(strict_types=1);

namespace Calvient\FhirTypes\DSTU2\FHIRElement\FHIRElementDefinition;

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

use Calvient\FhirTypes\DSTU2\FHIRElement;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAggregationMode;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRExtension;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri;
use Calvient\FhirTypes\DSTU2\FHIRIdPrimitive;
use Calvient\FhirTypes\DSTU2\PHPFHIRConstants;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeInterface;

/**
 * Captures constraints on each element within the resource, profile, or extension.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 *
 * Class FHIRElementDefinitionType
 * @package \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRElementDefinition
 */
class FHIRElementDefinitionType extends FHIRElement
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_TYPE;
	const FIELD_CODE = 'code';
	const FIELD_CODE_EXT = '_code';
	const FIELD_PROFILE = 'profile';
	const FIELD_PROFILE_EXT = '_profile';
	const FIELD_AGGREGATION = 'aggregation';
	const FIELD_AGGREGATION_EXT = '_aggregation';

	/** @var string */
	private $_xmlns = '';

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Name of Data type or Resource that is a(or the) type used for this element.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode
	 */
	protected ?FHIRCode $code = null;

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Identifies a profile structure or implementation Guide that SHALL hold for
	 * resources or datatypes referenced as the type of this element. Can be a local
	 * reference - to another structure in this profile, or a reference to a structure
	 * in another profile. When more than one profile is specified, the content must
	 * conform to all of them. When an implementation guide is specified, the resource
	 * SHALL conform to at least one profile defined in the implementation guide.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive[]|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri[]
	 */
	protected ?array $profile = [];

	/**
	 * How resource references can be aggregated.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If the type is a reference to another resource, how the resource is or can be
	 * aggregated - is it a contained resource, or a reference, and if the context is a
	 * bundle, is it included in the bundle.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAggregationMode[]
	 */
	protected ?array $aggregation = [];

	/**
	 * Validation map for fields in type ElementDefinition.Type
	 * @var array
	 */
	private static array $_validationRules = [];

	/**
	 * FHIRElementDefinitionType Constructor
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
					'FHIRElementDefinitionType::_construct - $data expected to be null or array, %s seen',
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
		if (isset($data[self::FIELD_PROFILE]) || isset($data[self::FIELD_PROFILE_EXT])) {
			$value = $data[self::FIELD_PROFILE] ?? null;
			$ext =
				isset($data[self::FIELD_PROFILE_EXT]) && is_array($data[self::FIELD_PROFILE_EXT])
					? $data[self::FIELD_PROFILE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRUri) {
					$this->addProfile($value);
				} elseif (is_array($value)) {
					foreach ($value as $i => $v) {
						if ($v instanceof FHIRUri) {
							$this->addProfile($v);
						} else {
							$iext = isset($ext[$i]) && is_array($ext[$i]) ? $ext[$i] : [];
							if (is_array($v)) {
								$this->addProfile(new FHIRUri(array_merge($v, $iext)));
							} else {
								$this->addProfile(
									new FHIRUri([FHIRUri::FIELD_VALUE => $v] + $iext),
								);
							}
						}
					}
				} elseif (is_array($value)) {
					$this->addProfile(new FHIRUri(array_merge($ext, $value)));
				} else {
					$this->addProfile(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				foreach ($ext as $iext) {
					$this->addProfile(new FHIRUri($iext));
				}
			}
		}
		if (isset($data[self::FIELD_AGGREGATION]) || isset($data[self::FIELD_AGGREGATION_EXT])) {
			$value = $data[self::FIELD_AGGREGATION] ?? null;
			$ext =
				isset($data[self::FIELD_AGGREGATION_EXT]) &&
				is_array($data[self::FIELD_AGGREGATION_EXT])
					? $data[self::FIELD_AGGREGATION_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRAggregationMode) {
					$this->addAggregation($value);
				} elseif (is_array($value)) {
					foreach ($value as $i => $v) {
						if ($v instanceof FHIRAggregationMode) {
							$this->addAggregation($v);
						} else {
							$iext = isset($ext[$i]) && is_array($ext[$i]) ? $ext[$i] : [];
							if (is_array($v)) {
								$this->addAggregation(
									new FHIRAggregationMode(array_merge($v, $iext)),
								);
							} else {
								$this->addAggregation(
									new FHIRAggregationMode(
										[FHIRAggregationMode::FIELD_VALUE => $v] + $iext,
									),
								);
							}
						}
					}
				} elseif (is_array($value)) {
					$this->addAggregation(new FHIRAggregationMode(array_merge($ext, $value)));
				} else {
					$this->addAggregation(
						new FHIRAggregationMode(
							[FHIRAggregationMode::FIELD_VALUE => $value] + $ext,
						),
					);
				}
			} elseif ([] !== $ext) {
				foreach ($ext as $iext) {
					$this->addAggregation(new FHIRAggregationMode($iext));
				}
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
		return "<ElementDefinitionType{$xmlns}></ElementDefinitionType>";
	}

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Name of Data type or Resource that is a(or the) type used for this element.
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
	 * Name of Data type or Resource that is a(or the) type used for this element.
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
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Identifies a profile structure or implementation Guide that SHALL hold for
	 * resources or datatypes referenced as the type of this element. Can be a local
	 * reference - to another structure in this profile, or a reference to a structure
	 * in another profile. When more than one profile is specified, the content must
	 * conform to all of them. When an implementation guide is specified, the resource
	 * SHALL conform to at least one profile defined in the implementation guide.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive[]|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri[]
	 */
	public function getProfile(): ?array
	{
		return $this->profile;
	}

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Identifies a profile structure or implementation Guide that SHALL hold for
	 * resources or datatypes referenced as the type of this element. Can be a local
	 * reference - to another structure in this profile, or a reference to a structure
	 * in another profile. When more than one profile is specified, the content must
	 * conform to all of them. When an implementation guide is specified, the resource
	 * SHALL conform to at least one profile defined in the implementation guide.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive[]|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri[] $profile
	 * @return static
	 */
	public function addProfile($profile = null): object
	{
		if (null !== $profile && !($profile instanceof FHIRUri)) {
			$profile = new FHIRUri($profile);
		}
		$this->_trackValueAdded();
		$this->profile[] = $profile;
		return $this;
	}

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Identifies a profile structure or implementation Guide that SHALL hold for
	 * resources or datatypes referenced as the type of this element. Can be a local
	 * reference - to another structure in this profile, or a reference to a structure
	 * in another profile. When more than one profile is specified, the content must
	 * conform to all of them. When an implementation guide is specified, the resource
	 * SHALL conform to at least one profile defined in the implementation guide.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri[] $profile
	 * @return static
	 */
	public function setProfile(array $profile = []): object
	{
		if ([] !== $this->profile) {
			$this->_trackValuesRemoved(count($this->profile));
			$this->profile = [];
		}
		if ([] === $profile) {
			return $this;
		}
		foreach ($profile as $v) {
			if ($v instanceof FHIRUri) {
				$this->addProfile($v);
			} else {
				$this->addProfile(new FHIRUri($v));
			}
		}
		return $this;
	}

	/**
	 * How resource references can be aggregated.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If the type is a reference to another resource, how the resource is or can be
	 * aggregated - is it a contained resource, or a reference, and if the context is a
	 * bundle, is it included in the bundle.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAggregationMode[]
	 */
	public function getAggregation(): ?array
	{
		return $this->aggregation;
	}

	/**
	 * How resource references can be aggregated.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If the type is a reference to another resource, how the resource is or can be
	 * aggregated - is it a contained resource, or a reference, and if the context is a
	 * bundle, is it included in the bundle.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAggregationMode $aggregation
	 * @return static
	 */
	public function addAggregation(?FHIRAggregationMode $aggregation = null): object
	{
		$this->_trackValueAdded();
		$this->aggregation[] = $aggregation;
		return $this;
	}

	/**
	 * How resource references can be aggregated.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If the type is a reference to another resource, how the resource is or can be
	 * aggregated - is it a contained resource, or a reference, and if the context is a
	 * bundle, is it included in the bundle.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAggregationMode[] $aggregation
	 * @return static
	 */
	public function setAggregation(array $aggregation = []): object
	{
		if ([] !== $this->aggregation) {
			$this->_trackValuesRemoved(count($this->aggregation));
			$this->aggregation = [];
		}
		if ([] === $aggregation) {
			return $this;
		}
		foreach ($aggregation as $v) {
			if ($v instanceof FHIRAggregationMode) {
				$this->addAggregation($v);
			} else {
				$this->addAggregation(new FHIRAggregationMode($v));
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
		if ([] !== ($vs = $this->getProfile())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_PROFILE, $i)] = $fieldErrs;
				}
			}
		}
		if ([] !== ($vs = $this->getAggregation())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_AGGREGATION, $i)] = $fieldErrs;
				}
			}
		}
		if (isset($validationRules[self::FIELD_CODE])) {
			$v = $this->getCode();
			foreach ($validationRules[self::FIELD_CODE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_TYPE,
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
		if (isset($validationRules[self::FIELD_PROFILE])) {
			$v = $this->getProfile();
			foreach ($validationRules[self::FIELD_PROFILE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_TYPE,
					self::FIELD_PROFILE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PROFILE])) {
						$errs[self::FIELD_PROFILE] = [];
					}
					$errs[self::FIELD_PROFILE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_AGGREGATION])) {
			$v = $this->getAggregation();
			foreach ($validationRules[self::FIELD_AGGREGATION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_TYPE,
					self::FIELD_AGGREGATION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_AGGREGATION])) {
						$errs[self::FIELD_AGGREGATION] = [];
					}
					$errs[self::FIELD_AGGREGATION][$rule] = $err;
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType
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
						'FHIRElementDefinitionType::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRElementDefinitionType::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRElementDefinitionType(null);
		} elseif (!is_object($type) || !($type instanceof FHIRElementDefinitionType)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRElementDefinitionType::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType or null, %s seen.',
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
			} elseif (self::FIELD_PROFILE === $n->nodeName) {
				$type->addProfile(FHIRUri::xmlUnserialize($n));
			} elseif (self::FIELD_AGGREGATION === $n->nodeName) {
				$type->addAggregation(FHIRAggregationMode::xmlUnserialize($n));
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
		$n = $element->attributes->getNamedItem(self::FIELD_PROFILE);
		if (null !== $n) {
			$pt = $type->getProfile();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->addProfile($n->nodeValue);
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
		if ([] !== ($vs = $this->getProfile())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_PROFILE);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if ([] !== ($vs = $this->getAggregation())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_AGGREGATION);
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
		if ([] !== ($vs = $this->getProfile())) {
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
				$out->{self::FIELD_PROFILE} = $vals;
			}
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_PROFILE_EXT} = $exts;
			}
		}
		if ([] !== ($vs = $this->getAggregation())) {
			$vals = [];
			$exts = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$val = $v->getValue();
				$ext = $v->jsonSerialize();
				unset($ext->{FHIRAggregationMode::FIELD_VALUE});
				if (null !== $val) {
					$vals[] = $val;
				}
				if ([] !== $ext) {
					$exts[] = $ext;
				}
			}
			if ([] !== $vals) {
				$out->{self::FIELD_AGGREGATION} = $vals;
			}
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_AGGREGATION_EXT} = $exts;
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
