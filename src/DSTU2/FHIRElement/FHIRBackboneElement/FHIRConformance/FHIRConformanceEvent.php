<?php declare(strict_types=1);

namespace Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance;

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
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRConformanceEventMode;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRExtension;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMessageSignificanceCategory;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString;
use Calvient\FhirTypes\DSTU2\FHIRIdPrimitive;
use Calvient\FhirTypes\DSTU2\PHPFHIRConstants;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeInterface;

/**
 * A conformance statement is a set of capabilities of a FHIR Server that may be
 * used as a statement of actual server functionality or a statement of required or
 * desired server implementation.
 *
 * Class FHIRConformanceEvent
 * @package \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance
 */
class FHIRConformanceEvent extends FHIRBackboneElement
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_EVENT;
	const FIELD_CODE = 'code';
	const FIELD_CATEGORY = 'category';
	const FIELD_CATEGORY_EXT = '_category';
	const FIELD_MODE = 'mode';
	const FIELD_MODE_EXT = '_mode';
	const FIELD_FOCUS = 'focus';
	const FIELD_FOCUS_EXT = '_focus';
	const FIELD_REQUEST = 'request';
	const FIELD_RESPONSE = 'response';
	const FIELD_DOCUMENTATION = 'documentation';
	const FIELD_DOCUMENTATION_EXT = '_documentation';

	/** @var string */
	private $_xmlns = '';

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A coded identifier of a supported messaging event.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding
	 */
	protected ?FHIRCoding $code = null;

	/**
	 * The impact of the content of a message.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The impact of the content of the message.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMessageSignificanceCategory
	 */
	protected ?FHIRMessageSignificanceCategory $category = null;

	/**
	 * The mode of a message conformance statement.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The mode of this event declaration - whether application is sender or receiver.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRConformanceEventMode
	 */
	protected ?FHIRConformanceEventMode $mode = null;

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * A resource associated with the event. This is the resource that defines the
	 * event.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode
	 */
	protected ?FHIRCode $focus = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Information about the request for this event.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $request = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Information about the response for this event.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $response = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Guidance on how this event is handled, such as internal system trigger points,
	 * business rules, etc.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $documentation = null;

	/**
	 * Validation map for fields in type Conformance.Event
	 * @var array
	 */
	private static array $_validationRules = [];

	/**
	 * FHIRConformanceEvent Constructor
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
					'FHIRConformanceEvent::_construct - $data expected to be null or array, %s seen',
					gettype($data),
				),
			);
		}
		parent::__construct($data);
		if (isset($data[self::FIELD_CODE])) {
			if ($data[self::FIELD_CODE] instanceof FHIRCoding) {
				$this->setCode($data[self::FIELD_CODE]);
			} else {
				$this->setCode(new FHIRCoding($data[self::FIELD_CODE]));
			}
		}
		if (isset($data[self::FIELD_CATEGORY]) || isset($data[self::FIELD_CATEGORY_EXT])) {
			$value = $data[self::FIELD_CATEGORY] ?? null;
			$ext =
				isset($data[self::FIELD_CATEGORY_EXT]) && is_array($data[self::FIELD_CATEGORY_EXT])
					? $data[self::FIELD_CATEGORY_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRMessageSignificanceCategory) {
					$this->setCategory($value);
				} elseif (is_array($value)) {
					$this->setCategory(
						new FHIRMessageSignificanceCategory(array_merge($ext, $value)),
					);
				} else {
					$this->setCategory(
						new FHIRMessageSignificanceCategory(
							[FHIRMessageSignificanceCategory::FIELD_VALUE => $value] + $ext,
						),
					);
				}
			} elseif ([] !== $ext) {
				$this->setCategory(new FHIRMessageSignificanceCategory($ext));
			}
		}
		if (isset($data[self::FIELD_MODE]) || isset($data[self::FIELD_MODE_EXT])) {
			$value = $data[self::FIELD_MODE] ?? null;
			$ext =
				isset($data[self::FIELD_MODE_EXT]) && is_array($data[self::FIELD_MODE_EXT])
					? $data[self::FIELD_MODE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRConformanceEventMode) {
					$this->setMode($value);
				} elseif (is_array($value)) {
					$this->setMode(new FHIRConformanceEventMode(array_merge($ext, $value)));
				} else {
					$this->setMode(
						new FHIRConformanceEventMode(
							[FHIRConformanceEventMode::FIELD_VALUE => $value] + $ext,
						),
					);
				}
			} elseif ([] !== $ext) {
				$this->setMode(new FHIRConformanceEventMode($ext));
			}
		}
		if (isset($data[self::FIELD_FOCUS]) || isset($data[self::FIELD_FOCUS_EXT])) {
			$value = $data[self::FIELD_FOCUS] ?? null;
			$ext =
				isset($data[self::FIELD_FOCUS_EXT]) && is_array($data[self::FIELD_FOCUS_EXT])
					? $data[self::FIELD_FOCUS_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRCode) {
					$this->setFocus($value);
				} elseif (is_array($value)) {
					$this->setFocus(new FHIRCode(array_merge($ext, $value)));
				} else {
					$this->setFocus(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setFocus(new FHIRCode($ext));
			}
		}
		if (isset($data[self::FIELD_REQUEST])) {
			if ($data[self::FIELD_REQUEST] instanceof FHIRReference) {
				$this->setRequest($data[self::FIELD_REQUEST]);
			} else {
				$this->setRequest(new FHIRReference($data[self::FIELD_REQUEST]));
			}
		}
		if (isset($data[self::FIELD_RESPONSE])) {
			if ($data[self::FIELD_RESPONSE] instanceof FHIRReference) {
				$this->setResponse($data[self::FIELD_RESPONSE]);
			} else {
				$this->setResponse(new FHIRReference($data[self::FIELD_RESPONSE]));
			}
		}
		if (
			isset($data[self::FIELD_DOCUMENTATION]) ||
			isset($data[self::FIELD_DOCUMENTATION_EXT])
		) {
			$value = $data[self::FIELD_DOCUMENTATION] ?? null;
			$ext =
				isset($data[self::FIELD_DOCUMENTATION_EXT]) &&
				is_array($data[self::FIELD_DOCUMENTATION_EXT])
					? $data[self::FIELD_DOCUMENTATION_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->setDocumentation($value);
				} elseif (is_array($value)) {
					$this->setDocumentation(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->setDocumentation(
						new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setDocumentation(new FHIRString($ext));
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
		return "<ConformanceEvent{$xmlns}></ConformanceEvent>";
	}

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A coded identifier of a supported messaging event.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding
	 */
	public function getCode(): ?FHIRCoding
	{
		return $this->code;
	}

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A coded identifier of a supported messaging event.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding $code
	 * @return static
	 */
	public function setCode(?FHIRCoding $code = null): object
	{
		$this->_trackValueSet($this->code, $code);
		$this->code = $code;
		return $this;
	}

	/**
	 * The impact of the content of a message.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The impact of the content of the message.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMessageSignificanceCategory
	 */
	public function getCategory(): ?FHIRMessageSignificanceCategory
	{
		return $this->category;
	}

	/**
	 * The impact of the content of a message.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The impact of the content of the message.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMessageSignificanceCategory $category
	 * @return static
	 */
	public function setCategory(?FHIRMessageSignificanceCategory $category = null): object
	{
		$this->_trackValueSet($this->category, $category);
		$this->category = $category;
		return $this;
	}

	/**
	 * The mode of a message conformance statement.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The mode of this event declaration - whether application is sender or receiver.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRConformanceEventMode
	 */
	public function getMode(): ?FHIRConformanceEventMode
	{
		return $this->mode;
	}

	/**
	 * The mode of a message conformance statement.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The mode of this event declaration - whether application is sender or receiver.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRConformanceEventMode $mode
	 * @return static
	 */
	public function setMode(?FHIRConformanceEventMode $mode = null): object
	{
		$this->_trackValueSet($this->mode, $mode);
		$this->mode = $mode;
		return $this;
	}

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * A resource associated with the event. This is the resource that defines the
	 * event.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode
	 */
	public function getFocus(): ?FHIRCode
	{
		return $this->focus;
	}

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * A resource associated with the event. This is the resource that defines the
	 * event.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode $focus
	 * @return static
	 */
	public function setFocus($focus = null): object
	{
		if (null !== $focus && !($focus instanceof FHIRCode)) {
			$focus = new FHIRCode($focus);
		}
		$this->_trackValueSet($this->focus, $focus);
		$this->focus = $focus;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Information about the request for this event.
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
	 * Information about the request for this event.
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
	 * Information about the response for this event.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getResponse(): ?FHIRReference
	{
		return $this->response;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Information about the response for this event.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $response
	 * @return static
	 */
	public function setResponse(?FHIRReference $response = null): object
	{
		$this->_trackValueSet($this->response, $response);
		$this->response = $response;
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Guidance on how this event is handled, such as internal system trigger points,
	 * business rules, etc.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	public function getDocumentation(): ?FHIRString
	{
		return $this->documentation;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Guidance on how this event is handled, such as internal system trigger points,
	 * business rules, etc.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString $documentation
	 * @return static
	 */
	public function setDocumentation($documentation = null): object
	{
		if (null !== $documentation && !($documentation instanceof FHIRString)) {
			$documentation = new FHIRString($documentation);
		}
		$this->_trackValueSet($this->documentation, $documentation);
		$this->documentation = $documentation;
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
		if (null !== ($v = $this->getCategory())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_CATEGORY] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMode())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MODE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFocus())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FOCUS] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getRequest())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_REQUEST] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getResponse())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_RESPONSE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDocumentation())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DOCUMENTATION] = $fieldErrs;
			}
		}
		if (isset($validationRules[self::FIELD_CODE])) {
			$v = $this->getCode();
			foreach ($validationRules[self::FIELD_CODE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_EVENT,
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
		if (isset($validationRules[self::FIELD_CATEGORY])) {
			$v = $this->getCategory();
			foreach ($validationRules[self::FIELD_CATEGORY] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_EVENT,
					self::FIELD_CATEGORY,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_CATEGORY])) {
						$errs[self::FIELD_CATEGORY] = [];
					}
					$errs[self::FIELD_CATEGORY][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MODE])) {
			$v = $this->getMode();
			foreach ($validationRules[self::FIELD_MODE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_EVENT,
					self::FIELD_MODE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MODE])) {
						$errs[self::FIELD_MODE] = [];
					}
					$errs[self::FIELD_MODE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FOCUS])) {
			$v = $this->getFocus();
			foreach ($validationRules[self::FIELD_FOCUS] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_EVENT,
					self::FIELD_FOCUS,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FOCUS])) {
						$errs[self::FIELD_FOCUS] = [];
					}
					$errs[self::FIELD_FOCUS][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_REQUEST])) {
			$v = $this->getRequest();
			foreach ($validationRules[self::FIELD_REQUEST] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_EVENT,
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
		if (isset($validationRules[self::FIELD_RESPONSE])) {
			$v = $this->getResponse();
			foreach ($validationRules[self::FIELD_RESPONSE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_EVENT,
					self::FIELD_RESPONSE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_RESPONSE])) {
						$errs[self::FIELD_RESPONSE] = [];
					}
					$errs[self::FIELD_RESPONSE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DOCUMENTATION])) {
			$v = $this->getDocumentation();
			foreach ($validationRules[self::FIELD_DOCUMENTATION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_EVENT,
					self::FIELD_DOCUMENTATION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DOCUMENTATION])) {
						$errs[self::FIELD_DOCUMENTATION] = [];
					}
					$errs[self::FIELD_DOCUMENTATION][$rule] = $err;
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceEvent $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceEvent
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
						'FHIRConformanceEvent::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRConformanceEvent::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRConformanceEvent(null);
		} elseif (!is_object($type) || !($type instanceof FHIRConformanceEvent)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRConformanceEvent::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceEvent or null, %s seen.',
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
				$type->setCode(FHIRCoding::xmlUnserialize($n));
			} elseif (self::FIELD_CATEGORY === $n->nodeName) {
				$type->setCategory(FHIRMessageSignificanceCategory::xmlUnserialize($n));
			} elseif (self::FIELD_MODE === $n->nodeName) {
				$type->setMode(FHIRConformanceEventMode::xmlUnserialize($n));
			} elseif (self::FIELD_FOCUS === $n->nodeName) {
				$type->setFocus(FHIRCode::xmlUnserialize($n));
			} elseif (self::FIELD_REQUEST === $n->nodeName) {
				$type->setRequest(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_RESPONSE === $n->nodeName) {
				$type->setResponse(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_DOCUMENTATION === $n->nodeName) {
				$type->setDocumentation(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
				$type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_EXTENSION === $n->nodeName) {
				$type->addExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_ID === $n->nodeName) {
				$type->setId(FHIRIdPrimitive::xmlUnserialize($n));
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_FOCUS);
		if (null !== $n) {
			$pt = $type->getFocus();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setFocus($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_DOCUMENTATION);
		if (null !== $n) {
			$pt = $type->getDocumentation();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setDocumentation($n->nodeValue);
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
		if (null !== ($v = $this->getCategory())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_CATEGORY);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMode())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MODE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFocus())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FOCUS);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getRequest())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_REQUEST);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getResponse())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_RESPONSE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDocumentation())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DOCUMENTATION);
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
		if (null !== ($v = $this->getCode())) {
			$out->{self::FIELD_CODE} = $v;
		}
		if (null !== ($v = $this->getCategory())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_CATEGORY} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRMessageSignificanceCategory::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_CATEGORY_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getMode())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_MODE} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRConformanceEventMode::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_MODE_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getFocus())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_FOCUS} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRCode::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_FOCUS_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getRequest())) {
			$out->{self::FIELD_REQUEST} = $v;
		}
		if (null !== ($v = $this->getResponse())) {
			$out->{self::FIELD_RESPONSE} = $v;
		}
		if (null !== ($v = $this->getDocumentation())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_DOCUMENTATION} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRString::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_DOCUMENTATION_EXT} = $ext;
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
