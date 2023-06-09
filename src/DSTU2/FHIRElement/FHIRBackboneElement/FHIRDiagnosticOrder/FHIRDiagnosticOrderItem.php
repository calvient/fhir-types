<?php declare(strict_types=1);

namespace Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDiagnosticOrder;

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
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDiagnosticOrderStatus;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRExtension;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference;
use Calvient\FhirTypes\DSTU2\FHIRIdPrimitive;
use Calvient\FhirTypes\DSTU2\PHPFHIRConstants;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeInterface;

/**
 * A record of a request for a diagnostic investigation service to be performed.
 *
 * Class FHIRDiagnosticOrderItem
 * @package \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDiagnosticOrder
 */
class FHIRDiagnosticOrderItem extends FHIRBackboneElement
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_ORDER_DOT_ITEM;
	const FIELD_CODE = 'code';
	const FIELD_SPECIMEN = 'specimen';
	const FIELD_BODY_SITE = 'bodySite';
	const FIELD_STATUS = 'status';
	const FIELD_STATUS_EXT = '_status';
	const FIELD_EVENT = 'event';

	/** @var string */
	private $_xmlns = '';

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A code that identifies a particular diagnostic investigation, or panel of
	 * investigations, that have been requested.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	protected ?FHIRCodeableConcept $code = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the item is related to a specific specimen.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	protected ?array $specimen = [];

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Anatomical location where the request test should be performed. This is the
	 * target site.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	protected ?FHIRCodeableConcept $bodySite = null;

	/**
	 * The status of a diagnostic order.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The status of this individual item within the order.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDiagnosticOrderStatus
	 */
	protected ?FHIRDiagnosticOrderStatus $status = null;

	/**
	 * A record of a request for a diagnostic investigation service to be performed.
	 *
	 * A summary of the events of interest that have occurred as this item of the
	 * request is processed.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDiagnosticOrder\FHIRDiagnosticOrderEvent[]
	 */
	protected ?array $event = [];

	/**
	 * Validation map for fields in type DiagnosticOrder.Item
	 * @var array
	 */
	private static array $_validationRules = [];

	/**
	 * FHIRDiagnosticOrderItem Constructor
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
					'FHIRDiagnosticOrderItem::_construct - $data expected to be null or array, %s seen',
					gettype($data),
				),
			);
		}
		parent::__construct($data);
		if (isset($data[self::FIELD_CODE])) {
			if ($data[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
				$this->setCode($data[self::FIELD_CODE]);
			} else {
				$this->setCode(new FHIRCodeableConcept($data[self::FIELD_CODE]));
			}
		}
		if (isset($data[self::FIELD_SPECIMEN])) {
			if (is_array($data[self::FIELD_SPECIMEN])) {
				foreach ($data[self::FIELD_SPECIMEN] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRReference) {
						$this->addSpecimen($v);
					} else {
						$this->addSpecimen(new FHIRReference($v));
					}
				}
			} elseif ($data[self::FIELD_SPECIMEN] instanceof FHIRReference) {
				$this->addSpecimen($data[self::FIELD_SPECIMEN]);
			} else {
				$this->addSpecimen(new FHIRReference($data[self::FIELD_SPECIMEN]));
			}
		}
		if (isset($data[self::FIELD_BODY_SITE])) {
			if ($data[self::FIELD_BODY_SITE] instanceof FHIRCodeableConcept) {
				$this->setBodySite($data[self::FIELD_BODY_SITE]);
			} else {
				$this->setBodySite(new FHIRCodeableConcept($data[self::FIELD_BODY_SITE]));
			}
		}
		if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
			$value = $data[self::FIELD_STATUS] ?? null;
			$ext =
				isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])
					? $data[self::FIELD_STATUS_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRDiagnosticOrderStatus) {
					$this->setStatus($value);
				} elseif (is_array($value)) {
					$this->setStatus(new FHIRDiagnosticOrderStatus(array_merge($ext, $value)));
				} else {
					$this->setStatus(
						new FHIRDiagnosticOrderStatus(
							[FHIRDiagnosticOrderStatus::FIELD_VALUE => $value] + $ext,
						),
					);
				}
			} elseif ([] !== $ext) {
				$this->setStatus(new FHIRDiagnosticOrderStatus($ext));
			}
		}
		if (isset($data[self::FIELD_EVENT])) {
			if (is_array($data[self::FIELD_EVENT])) {
				foreach ($data[self::FIELD_EVENT] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRDiagnosticOrderEvent) {
						$this->addEvent($v);
					} else {
						$this->addEvent(new FHIRDiagnosticOrderEvent($v));
					}
				}
			} elseif ($data[self::FIELD_EVENT] instanceof FHIRDiagnosticOrderEvent) {
				$this->addEvent($data[self::FIELD_EVENT]);
			} else {
				$this->addEvent(new FHIRDiagnosticOrderEvent($data[self::FIELD_EVENT]));
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
		return "<DiagnosticOrderItem{$xmlns}></DiagnosticOrderItem>";
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A code that identifies a particular diagnostic investigation, or panel of
	 * investigations, that have been requested.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	public function getCode(): ?FHIRCodeableConcept
	{
		return $this->code;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A code that identifies a particular diagnostic investigation, or panel of
	 * investigations, that have been requested.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $code
	 * @return static
	 */
	public function setCode(?FHIRCodeableConcept $code = null): object
	{
		$this->_trackValueSet($this->code, $code);
		$this->code = $code;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the item is related to a specific specimen.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	public function getSpecimen(): ?array
	{
		return $this->specimen;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the item is related to a specific specimen.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $specimen
	 * @return static
	 */
	public function addSpecimen(?FHIRReference $specimen = null): object
	{
		$this->_trackValueAdded();
		$this->specimen[] = $specimen;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the item is related to a specific specimen.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[] $specimen
	 * @return static
	 */
	public function setSpecimen(array $specimen = []): object
	{
		if ([] !== $this->specimen) {
			$this->_trackValuesRemoved(count($this->specimen));
			$this->specimen = [];
		}
		if ([] === $specimen) {
			return $this;
		}
		foreach ($specimen as $v) {
			if ($v instanceof FHIRReference) {
				$this->addSpecimen($v);
			} else {
				$this->addSpecimen(new FHIRReference($v));
			}
		}
		return $this;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Anatomical location where the request test should be performed. This is the
	 * target site.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	public function getBodySite(): ?FHIRCodeableConcept
	{
		return $this->bodySite;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Anatomical location where the request test should be performed. This is the
	 * target site.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $bodySite
	 * @return static
	 */
	public function setBodySite(?FHIRCodeableConcept $bodySite = null): object
	{
		$this->_trackValueSet($this->bodySite, $bodySite);
		$this->bodySite = $bodySite;
		return $this;
	}

	/**
	 * The status of a diagnostic order.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The status of this individual item within the order.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDiagnosticOrderStatus
	 */
	public function getStatus(): ?FHIRDiagnosticOrderStatus
	{
		return $this->status;
	}

	/**
	 * The status of a diagnostic order.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The status of this individual item within the order.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDiagnosticOrderStatus $status
	 * @return static
	 */
	public function setStatus(?FHIRDiagnosticOrderStatus $status = null): object
	{
		$this->_trackValueSet($this->status, $status);
		$this->status = $status;
		return $this;
	}

	/**
	 * A record of a request for a diagnostic investigation service to be performed.
	 *
	 * A summary of the events of interest that have occurred as this item of the
	 * request is processed.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDiagnosticOrder\FHIRDiagnosticOrderEvent[]
	 */
	public function getEvent(): ?array
	{
		return $this->event;
	}

	/**
	 * A record of a request for a diagnostic investigation service to be performed.
	 *
	 * A summary of the events of interest that have occurred as this item of the
	 * request is processed.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDiagnosticOrder\FHIRDiagnosticOrderEvent $event
	 * @return static
	 */
	public function addEvent(?FHIRDiagnosticOrderEvent $event = null): object
	{
		$this->_trackValueAdded();
		$this->event[] = $event;
		return $this;
	}

	/**
	 * A record of a request for a diagnostic investigation service to be performed.
	 *
	 * A summary of the events of interest that have occurred as this item of the
	 * request is processed.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDiagnosticOrder\FHIRDiagnosticOrderEvent[] $event
	 * @return static
	 */
	public function setEvent(array $event = []): object
	{
		if ([] !== $this->event) {
			$this->_trackValuesRemoved(count($this->event));
			$this->event = [];
		}
		if ([] === $event) {
			return $this;
		}
		foreach ($event as $v) {
			if ($v instanceof FHIRDiagnosticOrderEvent) {
				$this->addEvent($v);
			} else {
				$this->addEvent(new FHIRDiagnosticOrderEvent($v));
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
		if ([] !== ($vs = $this->getSpecimen())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_SPECIMEN, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getBodySite())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_BODY_SITE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getStatus())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_STATUS] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getEvent())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_EVENT, $i)] = $fieldErrs;
				}
			}
		}
		if (isset($validationRules[self::FIELD_CODE])) {
			$v = $this->getCode();
			foreach ($validationRules[self::FIELD_CODE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_ORDER_DOT_ITEM,
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
		if (isset($validationRules[self::FIELD_SPECIMEN])) {
			$v = $this->getSpecimen();
			foreach ($validationRules[self::FIELD_SPECIMEN] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_ORDER_DOT_ITEM,
					self::FIELD_SPECIMEN,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_SPECIMEN])) {
						$errs[self::FIELD_SPECIMEN] = [];
					}
					$errs[self::FIELD_SPECIMEN][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_BODY_SITE])) {
			$v = $this->getBodySite();
			foreach ($validationRules[self::FIELD_BODY_SITE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_ORDER_DOT_ITEM,
					self::FIELD_BODY_SITE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_BODY_SITE])) {
						$errs[self::FIELD_BODY_SITE] = [];
					}
					$errs[self::FIELD_BODY_SITE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_STATUS])) {
			$v = $this->getStatus();
			foreach ($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_ORDER_DOT_ITEM,
					self::FIELD_STATUS,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_STATUS])) {
						$errs[self::FIELD_STATUS] = [];
					}
					$errs[self::FIELD_STATUS][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_EVENT])) {
			$v = $this->getEvent();
			foreach ($validationRules[self::FIELD_EVENT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_ORDER_DOT_ITEM,
					self::FIELD_EVENT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_EVENT])) {
						$errs[self::FIELD_EVENT] = [];
					}
					$errs[self::FIELD_EVENT][$rule] = $err;
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDiagnosticOrder\FHIRDiagnosticOrderItem $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDiagnosticOrder\FHIRDiagnosticOrderItem
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
						'FHIRDiagnosticOrderItem::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRDiagnosticOrderItem::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRDiagnosticOrderItem(null);
		} elseif (!is_object($type) || !($type instanceof FHIRDiagnosticOrderItem)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRDiagnosticOrderItem::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDiagnosticOrder\FHIRDiagnosticOrderItem or null, %s seen.',
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
				$type->setCode(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_SPECIMEN === $n->nodeName) {
				$type->addSpecimen(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_BODY_SITE === $n->nodeName) {
				$type->setBodySite(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_STATUS === $n->nodeName) {
				$type->setStatus(FHIRDiagnosticOrderStatus::xmlUnserialize($n));
			} elseif (self::FIELD_EVENT === $n->nodeName) {
				$type->addEvent(FHIRDiagnosticOrderEvent::xmlUnserialize($n));
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
		if (null !== ($v = $this->getCode())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_CODE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getSpecimen())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_SPECIMEN);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if (null !== ($v = $this->getBodySite())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_BODY_SITE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getStatus())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_STATUS);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getEvent())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_EVENT);
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
			$out->{self::FIELD_CODE} = $v;
		}
		if ([] !== ($vs = $this->getSpecimen())) {
			$out->{self::FIELD_SPECIMEN} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_SPECIMEN}[] = $v;
			}
		}
		if (null !== ($v = $this->getBodySite())) {
			$out->{self::FIELD_BODY_SITE} = $v;
		}
		if (null !== ($v = $this->getStatus())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_STATUS} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRDiagnosticOrderStatus::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_STATUS_EXT} = $ext;
			}
		}
		if ([] !== ($vs = $this->getEvent())) {
			$out->{self::FIELD_EVENT} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_EVENT}[] = $v;
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
