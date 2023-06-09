<?php declare(strict_types=1);

namespace Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim;

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
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDate;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRExtension;
use Calvient\FhirTypes\DSTU2\FHIRIdPrimitive;
use Calvient\FhirTypes\DSTU2\PHPFHIRConstants;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeInterface;

/**
 * A provider issued list of services and products provided, or to be provided, to
 * a patient which is provided to an insurer for payment recovery.
 *
 * Class FHIRClaimProsthesis
 * @package \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim
 */
class FHIRClaimProsthesis extends FHIRBackboneElement
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_PROSTHESIS;
	const FIELD_INITIAL = 'initial';
	const FIELD_INITIAL_EXT = '_initial';
	const FIELD_PRIOR_DATE = 'priorDate';
	const FIELD_PRIOR_DATE_EXT = '_priorDate';
	const FIELD_PRIOR_MATERIAL = 'priorMaterial';

	/** @var string */
	private $_xmlns = '';

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Indicates whether this is the initial placement of a fixed prosthesis.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
	 */
	protected ?FHIRBoolean $initial = null;

	/**
	 * A date or partial date (e.g. just year or year + month). There is no time zone.
	 * The format is a union of the schema types gYear, gYearMonth and date. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Date of the initial placement.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRDatePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDate
	 */
	protected ?FHIRDate $priorDate = null;

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Material of the prior denture or bridge prosthesis. (Oral).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding
	 */
	protected ?FHIRCoding $priorMaterial = null;

	/**
	 * Validation map for fields in type Claim.Prosthesis
	 * @var array
	 */
	private static array $_validationRules = [];

	/**
	 * FHIRClaimProsthesis Constructor
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
					'FHIRClaimProsthesis::_construct - $data expected to be null or array, %s seen',
					gettype($data),
				),
			);
		}
		parent::__construct($data);
		if (isset($data[self::FIELD_INITIAL]) || isset($data[self::FIELD_INITIAL_EXT])) {
			$value = $data[self::FIELD_INITIAL] ?? null;
			$ext =
				isset($data[self::FIELD_INITIAL_EXT]) && is_array($data[self::FIELD_INITIAL_EXT])
					? $data[self::FIELD_INITIAL_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRBoolean) {
					$this->setInitial($value);
				} elseif (is_array($value)) {
					$this->setInitial(new FHIRBoolean(array_merge($ext, $value)));
				} else {
					$this->setInitial(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setInitial(new FHIRBoolean($ext));
			}
		}
		if (isset($data[self::FIELD_PRIOR_DATE]) || isset($data[self::FIELD_PRIOR_DATE_EXT])) {
			$value = $data[self::FIELD_PRIOR_DATE] ?? null;
			$ext =
				isset($data[self::FIELD_PRIOR_DATE_EXT]) &&
				is_array($data[self::FIELD_PRIOR_DATE_EXT])
					? $data[self::FIELD_PRIOR_DATE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRDate) {
					$this->setPriorDate($value);
				} elseif (is_array($value)) {
					$this->setPriorDate(new FHIRDate(array_merge($ext, $value)));
				} else {
					$this->setPriorDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setPriorDate(new FHIRDate($ext));
			}
		}
		if (isset($data[self::FIELD_PRIOR_MATERIAL])) {
			if ($data[self::FIELD_PRIOR_MATERIAL] instanceof FHIRCoding) {
				$this->setPriorMaterial($data[self::FIELD_PRIOR_MATERIAL]);
			} else {
				$this->setPriorMaterial(new FHIRCoding($data[self::FIELD_PRIOR_MATERIAL]));
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
		return "<ClaimProsthesis{$xmlns}></ClaimProsthesis>";
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Indicates whether this is the initial placement of a fixed prosthesis.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
	 */
	public function getInitial(): ?FHIRBoolean
	{
		return $this->initial;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Indicates whether this is the initial placement of a fixed prosthesis.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean $initial
	 * @return static
	 */
	public function setInitial($initial = null): object
	{
		if (null !== $initial && !($initial instanceof FHIRBoolean)) {
			$initial = new FHIRBoolean($initial);
		}
		$this->_trackValueSet($this->initial, $initial);
		$this->initial = $initial;
		return $this;
	}

	/**
	 * A date or partial date (e.g. just year or year + month). There is no time zone.
	 * The format is a union of the schema types gYear, gYearMonth and date. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Date of the initial placement.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRDatePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDate
	 */
	public function getPriorDate(): ?FHIRDate
	{
		return $this->priorDate;
	}

	/**
	 * A date or partial date (e.g. just year or year + month). There is no time zone.
	 * The format is a union of the schema types gYear, gYearMonth and date. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Date of the initial placement.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRDatePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDate $priorDate
	 * @return static
	 */
	public function setPriorDate($priorDate = null): object
	{
		if (null !== $priorDate && !($priorDate instanceof FHIRDate)) {
			$priorDate = new FHIRDate($priorDate);
		}
		$this->_trackValueSet($this->priorDate, $priorDate);
		$this->priorDate = $priorDate;
		return $this;
	}

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Material of the prior denture or bridge prosthesis. (Oral).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding
	 */
	public function getPriorMaterial(): ?FHIRCoding
	{
		return $this->priorMaterial;
	}

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Material of the prior denture or bridge prosthesis. (Oral).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding $priorMaterial
	 * @return static
	 */
	public function setPriorMaterial(?FHIRCoding $priorMaterial = null): object
	{
		$this->_trackValueSet($this->priorMaterial, $priorMaterial);
		$this->priorMaterial = $priorMaterial;
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
		if (null !== ($v = $this->getInitial())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_INITIAL] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPriorDate())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PRIOR_DATE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPriorMaterial())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PRIOR_MATERIAL] = $fieldErrs;
			}
		}
		if (isset($validationRules[self::FIELD_INITIAL])) {
			$v = $this->getInitial();
			foreach ($validationRules[self::FIELD_INITIAL] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_PROSTHESIS,
					self::FIELD_INITIAL,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_INITIAL])) {
						$errs[self::FIELD_INITIAL] = [];
					}
					$errs[self::FIELD_INITIAL][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PRIOR_DATE])) {
			$v = $this->getPriorDate();
			foreach ($validationRules[self::FIELD_PRIOR_DATE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_PROSTHESIS,
					self::FIELD_PRIOR_DATE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PRIOR_DATE])) {
						$errs[self::FIELD_PRIOR_DATE] = [];
					}
					$errs[self::FIELD_PRIOR_DATE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PRIOR_MATERIAL])) {
			$v = $this->getPriorMaterial();
			foreach ($validationRules[self::FIELD_PRIOR_MATERIAL] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_PROSTHESIS,
					self::FIELD_PRIOR_MATERIAL,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PRIOR_MATERIAL])) {
						$errs[self::FIELD_PRIOR_MATERIAL] = [];
					}
					$errs[self::FIELD_PRIOR_MATERIAL][$rule] = $err;
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimProsthesis $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimProsthesis
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
						'FHIRClaimProsthesis::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRClaimProsthesis::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRClaimProsthesis(null);
		} elseif (!is_object($type) || !($type instanceof FHIRClaimProsthesis)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRClaimProsthesis::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimProsthesis or null, %s seen.',
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
			if (self::FIELD_INITIAL === $n->nodeName) {
				$type->setInitial(FHIRBoolean::xmlUnserialize($n));
			} elseif (self::FIELD_PRIOR_DATE === $n->nodeName) {
				$type->setPriorDate(FHIRDate::xmlUnserialize($n));
			} elseif (self::FIELD_PRIOR_MATERIAL === $n->nodeName) {
				$type->setPriorMaterial(FHIRCoding::xmlUnserialize($n));
			} elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
				$type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_EXTENSION === $n->nodeName) {
				$type->addExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_ID === $n->nodeName) {
				$type->setId(FHIRIdPrimitive::xmlUnserialize($n));
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_INITIAL);
		if (null !== $n) {
			$pt = $type->getInitial();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setInitial($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_PRIOR_DATE);
		if (null !== $n) {
			$pt = $type->getPriorDate();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setPriorDate($n->nodeValue);
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
		if (null !== ($v = $this->getInitial())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_INITIAL);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPriorDate())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PRIOR_DATE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPriorMaterial())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PRIOR_MATERIAL);
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
		if (null !== ($v = $this->getInitial())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_INITIAL} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRBoolean::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_INITIAL_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getPriorDate())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_PRIOR_DATE} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRDate::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_PRIOR_DATE_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getPriorMaterial())) {
			$out->{self::FIELD_PRIOR_MATERIAL} = $v;
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
