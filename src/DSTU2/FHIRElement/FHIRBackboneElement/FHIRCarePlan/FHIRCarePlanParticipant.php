<?php declare(strict_types=1);

namespace App\Types\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCarePlan;

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

use App\Types\FHIR\DSTU2\FHIRElement\FHIRBackboneElement;
use App\Types\FHIR\DSTU2\FHIRElement\FHIRCodeableConcept;
use App\Types\FHIR\DSTU2\FHIRElement\FHIRExtension;
use App\Types\FHIR\DSTU2\FHIRElement\FHIRReference;
use App\Types\FHIR\DSTU2\FHIRIdPrimitive;
use App\Types\FHIR\DSTU2\PHPFHIRConstants;
use App\Types\FHIR\DSTU2\PHPFHIRTypeInterface;

/**
 * Describes the intention of how one or more practitioners intend to deliver care
 * for a particular patient, group or community for a period of time, possibly
 * limited to care for a specific condition or set of conditions.
 *
 * Class FHIRCarePlanParticipant
 * @package \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCarePlan
 */
class FHIRCarePlanParticipant extends FHIRBackboneElement
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_PARTICIPANT;
	const FIELD_ROLE = 'role';
	const FIELD_MEMBER = 'member';

	/** @var string */
	private $_xmlns = '';

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Indicates specific responsibility of an individual within the care plan; e.g.
	 * "Primary physician", "Team coordinator", "Caregiver", etc.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	protected ?FHIRCodeableConcept $role = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The specific person or organization who is participating/expected to participate
	 * in the care plan.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $member = null;

	/**
	 * Validation map for fields in type CarePlan.Participant
	 * @var array
	 */
	private static array $_validationRules = [];

	/**
	 * FHIRCarePlanParticipant Constructor
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
					'FHIRCarePlanParticipant::_construct - $data expected to be null or array, %s seen',
					gettype($data),
				),
			);
		}
		parent::__construct($data);
		if (isset($data[self::FIELD_ROLE])) {
			if ($data[self::FIELD_ROLE] instanceof FHIRCodeableConcept) {
				$this->setRole($data[self::FIELD_ROLE]);
			} else {
				$this->setRole(new FHIRCodeableConcept($data[self::FIELD_ROLE]));
			}
		}
		if (isset($data[self::FIELD_MEMBER])) {
			if ($data[self::FIELD_MEMBER] instanceof FHIRReference) {
				$this->setMember($data[self::FIELD_MEMBER]);
			} else {
				$this->setMember(new FHIRReference($data[self::FIELD_MEMBER]));
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
		return "<CarePlanParticipant{$xmlns}></CarePlanParticipant>";
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Indicates specific responsibility of an individual within the care plan; e.g.
	 * "Primary physician", "Team coordinator", "Caregiver", etc.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	public function getRole(): ?FHIRCodeableConcept
	{
		return $this->role;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Indicates specific responsibility of an individual within the care plan; e.g.
	 * "Primary physician", "Team coordinator", "Caregiver", etc.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $role
	 * @return static
	 */
	public function setRole(?FHIRCodeableConcept $role = null): object
	{
		$this->_trackValueSet($this->role, $role);
		$this->role = $role;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The specific person or organization who is participating/expected to participate
	 * in the care plan.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getMember(): ?FHIRReference
	{
		return $this->member;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The specific person or organization who is participating/expected to participate
	 * in the care plan.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $member
	 * @return static
	 */
	public function setMember(?FHIRReference $member = null): object
	{
		$this->_trackValueSet($this->member, $member);
		$this->member = $member;
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
		if (null !== ($v = $this->getRole())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_ROLE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMember())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MEMBER] = $fieldErrs;
			}
		}
		if (isset($validationRules[self::FIELD_ROLE])) {
			$v = $this->getRole();
			foreach ($validationRules[self::FIELD_ROLE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_PARTICIPANT,
					self::FIELD_ROLE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_ROLE])) {
						$errs[self::FIELD_ROLE] = [];
					}
					$errs[self::FIELD_ROLE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MEMBER])) {
			$v = $this->getMember();
			foreach ($validationRules[self::FIELD_MEMBER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_PARTICIPANT,
					self::FIELD_MEMBER,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MEMBER])) {
						$errs[self::FIELD_MEMBER] = [];
					}
					$errs[self::FIELD_MEMBER][$rule] = $err;
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanParticipant $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanParticipant
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
						'FHIRCarePlanParticipant::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRCarePlanParticipant::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRCarePlanParticipant(null);
		} elseif (!is_object($type) || !($type instanceof FHIRCarePlanParticipant)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRCarePlanParticipant::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanParticipant or null, %s seen.',
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
			if (self::FIELD_ROLE === $n->nodeName) {
				$type->setRole(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_MEMBER === $n->nodeName) {
				$type->setMember(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
				$type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_EXTENSION === $n->nodeName) {
				$type->addExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_ID === $n->nodeName) {
				$type->setId(FHIRIdPrimitive::xmlUnserialize($n));
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
		if (null !== ($v = $this->getRole())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_ROLE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMember())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MEMBER);
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
		if (null !== ($v = $this->getRole())) {
			$out->{self::FIELD_ROLE} = $v;
		}
		if (null !== ($v = $this->getMember())) {
			$out->{self::FIELD_MEMBER} = $v;
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