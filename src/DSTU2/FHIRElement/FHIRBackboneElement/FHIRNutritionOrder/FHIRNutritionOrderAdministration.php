<?php declare(strict_types=1);

namespace Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder;

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
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRatio;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTiming;
use Calvient\FhirTypes\DSTU2\FHIRIdPrimitive;
use Calvient\FhirTypes\DSTU2\PHPFHIRConstants;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeInterface;

/**
 * A request to supply a diet, formula feeding (enteral) or oral nutritional
 * supplement to a patient/resident.
 *
 * Class FHIRNutritionOrderAdministration
 * @package \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder
 */
class FHIRNutritionOrderAdministration extends FHIRBackboneElement
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_NUTRITION_ORDER_DOT_ADMINISTRATION;
	const FIELD_SCHEDULE = 'schedule';
	const FIELD_QUANTITY = 'quantity';
	const FIELD_RATE_QUANTITY = 'rateQuantity';
	const FIELD_RATE_RATIO = 'rateRatio';

	/** @var string */
	private $_xmlns = '';

	/**
	 * Specifies an event that may occur multiple times. Timing schedules are used to
	 * record when things are expected or requested to occur. The most common usage is
	 * in dosage instructions for medications. They are also used when planning care of
	 * various kinds.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The time period and frequency at which the enteral formula should be delivered
	 * to the patient.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTiming
	 */
	protected ?FHIRTiming $schedule = null;

	/**
	 * The volume of formula to provide to the patient per the specified administration
	 * schedule.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
	 */
	protected ?FHIRSimpleQuantity $quantity = null;

	/**
	 * The rate of administration of formula via a feeding pump, e.g. 60 mL per hour,
	 * according to the specified schedule.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
	 */
	protected ?FHIRSimpleQuantity $rateQuantity = null;

	/**
	 * A relationship of two Quantity values - expressed as a numerator and a
	 * denominator.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The rate of administration of formula via a feeding pump, e.g. 60 mL per hour,
	 * according to the specified schedule.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRatio
	 */
	protected ?FHIRRatio $rateRatio = null;

	/**
	 * Validation map for fields in type NutritionOrder.Administration
	 * @var array
	 */
	private static array $_validationRules = [];

	/**
	 * FHIRNutritionOrderAdministration Constructor
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
					'FHIRNutritionOrderAdministration::_construct - $data expected to be null or array, %s seen',
					gettype($data),
				),
			);
		}
		parent::__construct($data);
		if (isset($data[self::FIELD_SCHEDULE])) {
			if ($data[self::FIELD_SCHEDULE] instanceof FHIRTiming) {
				$this->setSchedule($data[self::FIELD_SCHEDULE]);
			} else {
				$this->setSchedule(new FHIRTiming($data[self::FIELD_SCHEDULE]));
			}
		}
		if (isset($data[self::FIELD_QUANTITY])) {
			if ($data[self::FIELD_QUANTITY] instanceof FHIRSimpleQuantity) {
				$this->setQuantity($data[self::FIELD_QUANTITY]);
			} else {
				$this->setQuantity(new FHIRSimpleQuantity($data[self::FIELD_QUANTITY]));
			}
		}
		if (isset($data[self::FIELD_RATE_QUANTITY])) {
			if ($data[self::FIELD_RATE_QUANTITY] instanceof FHIRSimpleQuantity) {
				$this->setRateQuantity($data[self::FIELD_RATE_QUANTITY]);
			} else {
				$this->setRateQuantity(new FHIRSimpleQuantity($data[self::FIELD_RATE_QUANTITY]));
			}
		}
		if (isset($data[self::FIELD_RATE_RATIO])) {
			if ($data[self::FIELD_RATE_RATIO] instanceof FHIRRatio) {
				$this->setRateRatio($data[self::FIELD_RATE_RATIO]);
			} else {
				$this->setRateRatio(new FHIRRatio($data[self::FIELD_RATE_RATIO]));
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
		return "<NutritionOrderAdministration{$xmlns}></NutritionOrderAdministration>";
	}

	/**
	 * Specifies an event that may occur multiple times. Timing schedules are used to
	 * record when things are expected or requested to occur. The most common usage is
	 * in dosage instructions for medications. They are also used when planning care of
	 * various kinds.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The time period and frequency at which the enteral formula should be delivered
	 * to the patient.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTiming
	 */
	public function getSchedule(): ?FHIRTiming
	{
		return $this->schedule;
	}

	/**
	 * Specifies an event that may occur multiple times. Timing schedules are used to
	 * record when things are expected or requested to occur. The most common usage is
	 * in dosage instructions for medications. They are also used when planning care of
	 * various kinds.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The time period and frequency at which the enteral formula should be delivered
	 * to the patient.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTiming $schedule
	 * @return static
	 */
	public function setSchedule(?FHIRTiming $schedule = null): object
	{
		$this->_trackValueSet($this->schedule, $schedule);
		$this->schedule = $schedule;
		return $this;
	}

	/**
	 * The volume of formula to provide to the patient per the specified administration
	 * schedule.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
	 */
	public function getQuantity(): ?FHIRSimpleQuantity
	{
		return $this->quantity;
	}

	/**
	 * The volume of formula to provide to the patient per the specified administration
	 * schedule.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity $quantity
	 * @return static
	 */
	public function setQuantity(?FHIRSimpleQuantity $quantity = null): object
	{
		$this->_trackValueSet($this->quantity, $quantity);
		$this->quantity = $quantity;
		return $this;
	}

	/**
	 * The rate of administration of formula via a feeding pump, e.g. 60 mL per hour,
	 * according to the specified schedule.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
	 */
	public function getRateQuantity(): ?FHIRSimpleQuantity
	{
		return $this->rateQuantity;
	}

	/**
	 * The rate of administration of formula via a feeding pump, e.g. 60 mL per hour,
	 * according to the specified schedule.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity $rateQuantity
	 * @return static
	 */
	public function setRateQuantity(?FHIRSimpleQuantity $rateQuantity = null): object
	{
		$this->_trackValueSet($this->rateQuantity, $rateQuantity);
		$this->rateQuantity = $rateQuantity;
		return $this;
	}

	/**
	 * A relationship of two Quantity values - expressed as a numerator and a
	 * denominator.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The rate of administration of formula via a feeding pump, e.g. 60 mL per hour,
	 * according to the specified schedule.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRatio
	 */
	public function getRateRatio(): ?FHIRRatio
	{
		return $this->rateRatio;
	}

	/**
	 * A relationship of two Quantity values - expressed as a numerator and a
	 * denominator.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The rate of administration of formula via a feeding pump, e.g. 60 mL per hour,
	 * according to the specified schedule.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRatio $rateRatio
	 * @return static
	 */
	public function setRateRatio(?FHIRRatio $rateRatio = null): object
	{
		$this->_trackValueSet($this->rateRatio, $rateRatio);
		$this->rateRatio = $rateRatio;
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
		if (null !== ($v = $this->getSchedule())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_SCHEDULE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getQuantity())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_QUANTITY] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getRateQuantity())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_RATE_QUANTITY] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getRateRatio())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_RATE_RATIO] = $fieldErrs;
			}
		}
		if (isset($validationRules[self::FIELD_SCHEDULE])) {
			$v = $this->getSchedule();
			foreach ($validationRules[self::FIELD_SCHEDULE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_NUTRITION_ORDER_DOT_ADMINISTRATION,
					self::FIELD_SCHEDULE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_SCHEDULE])) {
						$errs[self::FIELD_SCHEDULE] = [];
					}
					$errs[self::FIELD_SCHEDULE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_QUANTITY])) {
			$v = $this->getQuantity();
			foreach ($validationRules[self::FIELD_QUANTITY] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_NUTRITION_ORDER_DOT_ADMINISTRATION,
					self::FIELD_QUANTITY,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_QUANTITY])) {
						$errs[self::FIELD_QUANTITY] = [];
					}
					$errs[self::FIELD_QUANTITY][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_RATE_QUANTITY])) {
			$v = $this->getRateQuantity();
			foreach ($validationRules[self::FIELD_RATE_QUANTITY] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_NUTRITION_ORDER_DOT_ADMINISTRATION,
					self::FIELD_RATE_QUANTITY,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_RATE_QUANTITY])) {
						$errs[self::FIELD_RATE_QUANTITY] = [];
					}
					$errs[self::FIELD_RATE_QUANTITY][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_RATE_RATIO])) {
			$v = $this->getRateRatio();
			foreach ($validationRules[self::FIELD_RATE_RATIO] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_NUTRITION_ORDER_DOT_ADMINISTRATION,
					self::FIELD_RATE_RATIO,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_RATE_RATIO])) {
						$errs[self::FIELD_RATE_RATIO] = [];
					}
					$errs[self::FIELD_RATE_RATIO][$rule] = $err;
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderAdministration $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderAdministration
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
						'FHIRNutritionOrderAdministration::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRNutritionOrderAdministration::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRNutritionOrderAdministration(null);
		} elseif (!is_object($type) || !($type instanceof FHIRNutritionOrderAdministration)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRNutritionOrderAdministration::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderAdministration or null, %s seen.',
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
			if (self::FIELD_SCHEDULE === $n->nodeName) {
				$type->setSchedule(FHIRTiming::xmlUnserialize($n));
			} elseif (self::FIELD_QUANTITY === $n->nodeName) {
				$type->setQuantity(FHIRSimpleQuantity::xmlUnserialize($n));
			} elseif (self::FIELD_RATE_QUANTITY === $n->nodeName) {
				$type->setRateQuantity(FHIRSimpleQuantity::xmlUnserialize($n));
			} elseif (self::FIELD_RATE_RATIO === $n->nodeName) {
				$type->setRateRatio(FHIRRatio::xmlUnserialize($n));
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
		if (null !== ($v = $this->getSchedule())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_SCHEDULE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getQuantity())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_QUANTITY);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getRateQuantity())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_RATE_QUANTITY);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getRateRatio())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_RATE_RATIO);
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
		if (null !== ($v = $this->getSchedule())) {
			$out->{self::FIELD_SCHEDULE} = $v;
		}
		if (null !== ($v = $this->getQuantity())) {
			$out->{self::FIELD_QUANTITY} = $v;
		}
		if (null !== ($v = $this->getRateQuantity())) {
			$out->{self::FIELD_RATE_QUANTITY} = $v;
		}
		if (null !== ($v = $this->getRateRatio())) {
			$out->{self::FIELD_RATE_RATIO} = $v;
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
