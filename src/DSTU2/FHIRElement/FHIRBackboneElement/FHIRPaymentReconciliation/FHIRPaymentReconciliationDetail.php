<?php declare(strict_types=1);

namespace Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPaymentReconciliation;

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
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDate;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRExtension;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference;
use Calvient\FhirTypes\DSTU2\FHIRIdPrimitive;
use Calvient\FhirTypes\DSTU2\PHPFHIRConstants;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeInterface;

/**
 * This resource provides payment details and claim references supporting a bulk
 * payment.
 *
 * Class FHIRPaymentReconciliationDetail
 * @package \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPaymentReconciliation
 */
class FHIRPaymentReconciliationDetail extends FHIRBackboneElement
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_PAYMENT_RECONCILIATION_DOT_DETAIL;
	const FIELD_TYPE = 'type';
	const FIELD_REQUEST = 'request';
	const FIELD_RESPONCE = 'responce';
	const FIELD_SUBMITTER = 'submitter';
	const FIELD_PAYEE = 'payee';
	const FIELD_DATE = 'date';
	const FIELD_DATE_EXT = '_date';
	const FIELD_AMOUNT = 'amount';

	/** @var string */
	private $_xmlns = '';

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Code to indicate the nature of the payment, adjustment, funds advance, etc.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding
	 */
	protected ?FHIRCoding $type = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The claim or financial resource.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $request = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The claim response resource.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $responce = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The Organization which submitted the invoice or financial transaction.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $submitter = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The organization which is receiving the payment.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $payee = null;

	/**
	 * A date or partial date (e.g. just year or year + month). There is no time zone.
	 * The format is a union of the schema types gYear, gYearMonth and date. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The date of the invoice or financial resource.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRDatePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDate
	 */
	protected ?FHIRDate $date = null;

	/**
	 * Amount paid for this detail.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney
	 */
	protected ?FHIRMoney $amount = null;

	/**
	 * Validation map for fields in type PaymentReconciliation.Detail
	 * @var array
	 */
	private static array $_validationRules = [];

	/**
	 * FHIRPaymentReconciliationDetail Constructor
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
					'FHIRPaymentReconciliationDetail::_construct - $data expected to be null or array, %s seen',
					gettype($data),
				),
			);
		}
		parent::__construct($data);
		if (isset($data[self::FIELD_TYPE])) {
			if ($data[self::FIELD_TYPE] instanceof FHIRCoding) {
				$this->setType($data[self::FIELD_TYPE]);
			} else {
				$this->setType(new FHIRCoding($data[self::FIELD_TYPE]));
			}
		}
		if (isset($data[self::FIELD_REQUEST])) {
			if ($data[self::FIELD_REQUEST] instanceof FHIRReference) {
				$this->setRequest($data[self::FIELD_REQUEST]);
			} else {
				$this->setRequest(new FHIRReference($data[self::FIELD_REQUEST]));
			}
		}
		if (isset($data[self::FIELD_RESPONCE])) {
			if ($data[self::FIELD_RESPONCE] instanceof FHIRReference) {
				$this->setResponce($data[self::FIELD_RESPONCE]);
			} else {
				$this->setResponce(new FHIRReference($data[self::FIELD_RESPONCE]));
			}
		}
		if (isset($data[self::FIELD_SUBMITTER])) {
			if ($data[self::FIELD_SUBMITTER] instanceof FHIRReference) {
				$this->setSubmitter($data[self::FIELD_SUBMITTER]);
			} else {
				$this->setSubmitter(new FHIRReference($data[self::FIELD_SUBMITTER]));
			}
		}
		if (isset($data[self::FIELD_PAYEE])) {
			if ($data[self::FIELD_PAYEE] instanceof FHIRReference) {
				$this->setPayee($data[self::FIELD_PAYEE]);
			} else {
				$this->setPayee(new FHIRReference($data[self::FIELD_PAYEE]));
			}
		}
		if (isset($data[self::FIELD_DATE]) || isset($data[self::FIELD_DATE_EXT])) {
			$value = $data[self::FIELD_DATE] ?? null;
			$ext =
				isset($data[self::FIELD_DATE_EXT]) && is_array($data[self::FIELD_DATE_EXT])
					? $data[self::FIELD_DATE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRDate) {
					$this->setDate($value);
				} elseif (is_array($value)) {
					$this->setDate(new FHIRDate(array_merge($ext, $value)));
				} else {
					$this->setDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setDate(new FHIRDate($ext));
			}
		}
		if (isset($data[self::FIELD_AMOUNT])) {
			if ($data[self::FIELD_AMOUNT] instanceof FHIRMoney) {
				$this->setAmount($data[self::FIELD_AMOUNT]);
			} else {
				$this->setAmount(new FHIRMoney($data[self::FIELD_AMOUNT]));
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
		return "<PaymentReconciliationDetail{$xmlns}></PaymentReconciliationDetail>";
	}

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Code to indicate the nature of the payment, adjustment, funds advance, etc.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding
	 */
	public function getType(): ?FHIRCoding
	{
		return $this->type;
	}

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Code to indicate the nature of the payment, adjustment, funds advance, etc.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding $type
	 * @return static
	 */
	public function setType(?FHIRCoding $type = null): object
	{
		$this->_trackValueSet($this->type, $type);
		$this->type = $type;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The claim or financial resource.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getRequest(): ?FHIRReference
	{
		return $this->request;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The claim or financial resource.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $request
	 * @return static
	 */
	public function setRequest(?FHIRReference $request = null): object
	{
		$this->_trackValueSet($this->request, $request);
		$this->request = $request;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The claim response resource.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getResponce(): ?FHIRReference
	{
		return $this->responce;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The claim response resource.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $responce
	 * @return static
	 */
	public function setResponce(?FHIRReference $responce = null): object
	{
		$this->_trackValueSet($this->responce, $responce);
		$this->responce = $responce;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The Organization which submitted the invoice or financial transaction.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getSubmitter(): ?FHIRReference
	{
		return $this->submitter;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The Organization which submitted the invoice or financial transaction.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $submitter
	 * @return static
	 */
	public function setSubmitter(?FHIRReference $submitter = null): object
	{
		$this->_trackValueSet($this->submitter, $submitter);
		$this->submitter = $submitter;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The organization which is receiving the payment.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getPayee(): ?FHIRReference
	{
		return $this->payee;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The organization which is receiving the payment.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $payee
	 * @return static
	 */
	public function setPayee(?FHIRReference $payee = null): object
	{
		$this->_trackValueSet($this->payee, $payee);
		$this->payee = $payee;
		return $this;
	}

	/**
	 * A date or partial date (e.g. just year or year + month). There is no time zone.
	 * The format is a union of the schema types gYear, gYearMonth and date. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The date of the invoice or financial resource.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRDatePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDate
	 */
	public function getDate(): ?FHIRDate
	{
		return $this->date;
	}

	/**
	 * A date or partial date (e.g. just year or year + month). There is no time zone.
	 * The format is a union of the schema types gYear, gYearMonth and date. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The date of the invoice or financial resource.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRDatePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDate $date
	 * @return static
	 */
	public function setDate($date = null): object
	{
		if (null !== $date && !($date instanceof FHIRDate)) {
			$date = new FHIRDate($date);
		}
		$this->_trackValueSet($this->date, $date);
		$this->date = $date;
		return $this;
	}

	/**
	 * Amount paid for this detail.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney
	 */
	public function getAmount(): ?FHIRMoney
	{
		return $this->amount;
	}

	/**
	 * Amount paid for this detail.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney $amount
	 * @return static
	 */
	public function setAmount(?FHIRMoney $amount = null): object
	{
		$this->_trackValueSet($this->amount, $amount);
		$this->amount = $amount;
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
		if (null !== ($v = $this->getRequest())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_REQUEST] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getResponce())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_RESPONCE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getSubmitter())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_SUBMITTER] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPayee())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PAYEE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDate())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DATE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getAmount())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_AMOUNT] = $fieldErrs;
			}
		}
		if (isset($validationRules[self::FIELD_TYPE])) {
			$v = $this->getType();
			foreach ($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PAYMENT_RECONCILIATION_DOT_DETAIL,
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
		if (isset($validationRules[self::FIELD_REQUEST])) {
			$v = $this->getRequest();
			foreach ($validationRules[self::FIELD_REQUEST] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PAYMENT_RECONCILIATION_DOT_DETAIL,
					self::FIELD_REQUEST,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_REQUEST])) {
						$errs[self::FIELD_REQUEST] = [];
					}
					$errs[self::FIELD_REQUEST][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_RESPONCE])) {
			$v = $this->getResponce();
			foreach ($validationRules[self::FIELD_RESPONCE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PAYMENT_RECONCILIATION_DOT_DETAIL,
					self::FIELD_RESPONCE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_RESPONCE])) {
						$errs[self::FIELD_RESPONCE] = [];
					}
					$errs[self::FIELD_RESPONCE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_SUBMITTER])) {
			$v = $this->getSubmitter();
			foreach ($validationRules[self::FIELD_SUBMITTER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PAYMENT_RECONCILIATION_DOT_DETAIL,
					self::FIELD_SUBMITTER,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_SUBMITTER])) {
						$errs[self::FIELD_SUBMITTER] = [];
					}
					$errs[self::FIELD_SUBMITTER][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PAYEE])) {
			$v = $this->getPayee();
			foreach ($validationRules[self::FIELD_PAYEE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PAYMENT_RECONCILIATION_DOT_DETAIL,
					self::FIELD_PAYEE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PAYEE])) {
						$errs[self::FIELD_PAYEE] = [];
					}
					$errs[self::FIELD_PAYEE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DATE])) {
			$v = $this->getDate();
			foreach ($validationRules[self::FIELD_DATE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PAYMENT_RECONCILIATION_DOT_DETAIL,
					self::FIELD_DATE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DATE])) {
						$errs[self::FIELD_DATE] = [];
					}
					$errs[self::FIELD_DATE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_AMOUNT])) {
			$v = $this->getAmount();
			foreach ($validationRules[self::FIELD_AMOUNT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PAYMENT_RECONCILIATION_DOT_DETAIL,
					self::FIELD_AMOUNT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_AMOUNT])) {
						$errs[self::FIELD_AMOUNT] = [];
					}
					$errs[self::FIELD_AMOUNT][$rule] = $err;
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPaymentReconciliation\FHIRPaymentReconciliationDetail $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPaymentReconciliation\FHIRPaymentReconciliationDetail
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
						'FHIRPaymentReconciliationDetail::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRPaymentReconciliationDetail::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRPaymentReconciliationDetail(null);
		} elseif (!is_object($type) || !($type instanceof FHIRPaymentReconciliationDetail)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRPaymentReconciliationDetail::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPaymentReconciliation\FHIRPaymentReconciliationDetail or null, %s seen.',
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
				$type->setType(FHIRCoding::xmlUnserialize($n));
			} elseif (self::FIELD_REQUEST === $n->nodeName) {
				$type->setRequest(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_RESPONCE === $n->nodeName) {
				$type->setResponce(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_SUBMITTER === $n->nodeName) {
				$type->setSubmitter(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_PAYEE === $n->nodeName) {
				$type->setPayee(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_DATE === $n->nodeName) {
				$type->setDate(FHIRDate::xmlUnserialize($n));
			} elseif (self::FIELD_AMOUNT === $n->nodeName) {
				$type->setAmount(FHIRMoney::xmlUnserialize($n));
			} elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
				$type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_EXTENSION === $n->nodeName) {
				$type->addExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_ID === $n->nodeName) {
				$type->setId(FHIRIdPrimitive::xmlUnserialize($n));
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_DATE);
		if (null !== $n) {
			$pt = $type->getDate();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setDate($n->nodeValue);
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
		if (null !== ($v = $this->getType())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_TYPE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getRequest())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_REQUEST);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getResponce())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_RESPONCE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getSubmitter())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_SUBMITTER);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPayee())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PAYEE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDate())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DATE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getAmount())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_AMOUNT);
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
			$out->{self::FIELD_TYPE} = $v;
		}
		if (null !== ($v = $this->getRequest())) {
			$out->{self::FIELD_REQUEST} = $v;
		}
		if (null !== ($v = $this->getResponce())) {
			$out->{self::FIELD_RESPONCE} = $v;
		}
		if (null !== ($v = $this->getSubmitter())) {
			$out->{self::FIELD_SUBMITTER} = $v;
		}
		if (null !== ($v = $this->getPayee())) {
			$out->{self::FIELD_PAYEE} = $v;
		}
		if (null !== ($v = $this->getDate())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_DATE} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRDate::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_DATE_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getAmount())) {
			$out->{self::FIELD_AMOUNT} = $v;
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
