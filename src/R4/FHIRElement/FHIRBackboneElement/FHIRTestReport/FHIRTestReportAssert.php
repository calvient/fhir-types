<?php declare(strict_types=1);

namespace Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRTestReport;

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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 *
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 *
 */

use Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement;
use Calvient\FhirTypes\R4\FHIRElement\FHIRExtension;
use Calvient\FhirTypes\R4\FHIRElement\FHIRMarkdown;
use Calvient\FhirTypes\R4\FHIRElement\FHIRString;
use Calvient\FhirTypes\R4\FHIRElement\FHIRTestReportActionResult;
use Calvient\FhirTypes\R4\FHIRStringPrimitive;
use Calvient\FhirTypes\R4\PHPFHIRConstants;
use Calvient\FhirTypes\R4\PHPFHIRTypeInterface;

/**
 * A summary of information based on the results of executing a TestScript.
 *
 * Class FHIRTestReportAssert
 * @package \Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRTestReport
 */
class FHIRTestReportAssert extends FHIRBackboneElement
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_TEST_REPORT_DOT_ASSERT;
	const FIELD_RESULT = 'result';
	const FIELD_RESULT_EXT = '_result';
	const FIELD_MESSAGE = 'message';
	const FIELD_MESSAGE_EXT = '_message';
	const FIELD_DETAIL = 'detail';
	const FIELD_DETAIL_EXT = '_detail';

	/** @var string */
	private $_xmlns = '';

	/**
	 * The results of executing an action.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The result of this assertion.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRTestReportActionResult
	 */
	protected ?FHIRTestReportActionResult $result = null;

	/**
	 * A string that may contain Github Flavored Markdown syntax for optional
	 * processing by a mark down presentation engine
	 * Systems are not required to have markdown support, so the text should be
	 * readable without markdown processing. The markdown syntax is GFM - see
	 * https://github.github.com/gfm/
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * An explanatory message associated with the result.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRMarkdownPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRMarkdown
	 */
	protected ?FHIRMarkdown $message = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings SHALL NOT exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A link to further details on the result.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRStringPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRString
	 */
	protected ?FHIRString $detail = null;

	/**
	 * Validation map for fields in type TestReport.Assert
	 * @var array
	 */
	private static array $_validationRules = [];

	/**
	 * FHIRTestReportAssert Constructor
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
					'FHIRTestReportAssert::_construct - $data expected to be null or array, %s seen',
					gettype($data),
				),
			);
		}
		parent::__construct($data);
		if (isset($data[self::FIELD_RESULT]) || isset($data[self::FIELD_RESULT_EXT])) {
			$value = $data[self::FIELD_RESULT] ?? null;
			$ext =
				isset($data[self::FIELD_RESULT_EXT]) && is_array($data[self::FIELD_RESULT_EXT])
					? $data[self::FIELD_RESULT_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRTestReportActionResult) {
					$this->setResult($value);
				} elseif (is_array($value)) {
					$this->setResult(new FHIRTestReportActionResult(array_merge($ext, $value)));
				} else {
					$this->setResult(
						new FHIRTestReportActionResult(
							[FHIRTestReportActionResult::FIELD_VALUE => $value] + $ext,
						),
					);
				}
			} elseif ([] !== $ext) {
				$this->setResult(new FHIRTestReportActionResult($ext));
			}
		}
		if (isset($data[self::FIELD_MESSAGE]) || isset($data[self::FIELD_MESSAGE_EXT])) {
			$value = $data[self::FIELD_MESSAGE] ?? null;
			$ext =
				isset($data[self::FIELD_MESSAGE_EXT]) && is_array($data[self::FIELD_MESSAGE_EXT])
					? $data[self::FIELD_MESSAGE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRMarkdown) {
					$this->setMessage($value);
				} elseif (is_array($value)) {
					$this->setMessage(new FHIRMarkdown(array_merge($ext, $value)));
				} else {
					$this->setMessage(
						new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setMessage(new FHIRMarkdown($ext));
			}
		}
		if (isset($data[self::FIELD_DETAIL]) || isset($data[self::FIELD_DETAIL_EXT])) {
			$value = $data[self::FIELD_DETAIL] ?? null;
			$ext =
				isset($data[self::FIELD_DETAIL_EXT]) && is_array($data[self::FIELD_DETAIL_EXT])
					? $data[self::FIELD_DETAIL_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->setDetail($value);
				} elseif (is_array($value)) {
					$this->setDetail(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->setDetail(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setDetail(new FHIRString($ext));
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
		return "<TestReportAssert{$xmlns}></TestReportAssert>";
	}

	/**
	 * The results of executing an action.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The result of this assertion.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRTestReportActionResult
	 */
	public function getResult(): ?FHIRTestReportActionResult
	{
		return $this->result;
	}

	/**
	 * The results of executing an action.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The result of this assertion.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRTestReportActionResult $result
	 * @return static
	 */
	public function setResult(?FHIRTestReportActionResult $result = null): object
	{
		$this->_trackValueSet($this->result, $result);
		$this->result = $result;
		return $this;
	}

	/**
	 * A string that may contain Github Flavored Markdown syntax for optional
	 * processing by a mark down presentation engine
	 * Systems are not required to have markdown support, so the text should be
	 * readable without markdown processing. The markdown syntax is GFM - see
	 * https://github.github.com/gfm/
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * An explanatory message associated with the result.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRMarkdownPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRMarkdown
	 */
	public function getMessage(): ?FHIRMarkdown
	{
		return $this->message;
	}

	/**
	 * A string that may contain Github Flavored Markdown syntax for optional
	 * processing by a mark down presentation engine
	 * Systems are not required to have markdown support, so the text should be
	 * readable without markdown processing. The markdown syntax is GFM - see
	 * https://github.github.com/gfm/
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * An explanatory message associated with the result.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRMarkdownPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRMarkdown $message
	 * @return static
	 */
	public function setMessage($message = null): object
	{
		if (null !== $message && !($message instanceof FHIRMarkdown)) {
			$message = new FHIRMarkdown($message);
		}
		$this->_trackValueSet($this->message, $message);
		$this->message = $message;
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings SHALL NOT exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A link to further details on the result.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRStringPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRString
	 */
	public function getDetail(): ?FHIRString
	{
		return $this->detail;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings SHALL NOT exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A link to further details on the result.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRStringPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRString $detail
	 * @return static
	 */
	public function setDetail($detail = null): object
	{
		if (null !== $detail && !($detail instanceof FHIRString)) {
			$detail = new FHIRString($detail);
		}
		$this->_trackValueSet($this->detail, $detail);
		$this->detail = $detail;
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
		if (null !== ($v = $this->getResult())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_RESULT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMessage())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MESSAGE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDetail())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DETAIL] = $fieldErrs;
			}
		}
		if (isset($validationRules[self::FIELD_RESULT])) {
			$v = $this->getResult();
			foreach ($validationRules[self::FIELD_RESULT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_TEST_REPORT_DOT_ASSERT,
					self::FIELD_RESULT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_RESULT])) {
						$errs[self::FIELD_RESULT] = [];
					}
					$errs[self::FIELD_RESULT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MESSAGE])) {
			$v = $this->getMessage();
			foreach ($validationRules[self::FIELD_MESSAGE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_TEST_REPORT_DOT_ASSERT,
					self::FIELD_MESSAGE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MESSAGE])) {
						$errs[self::FIELD_MESSAGE] = [];
					}
					$errs[self::FIELD_MESSAGE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DETAIL])) {
			$v = $this->getDetail();
			foreach ($validationRules[self::FIELD_DETAIL] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_TEST_REPORT_DOT_ASSERT,
					self::FIELD_DETAIL,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DETAIL])) {
						$errs[self::FIELD_DETAIL] = [];
					}
					$errs[self::FIELD_DETAIL][$rule] = $err;
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
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportAssert $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportAssert
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
						'FHIRTestReportAssert::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRTestReportAssert::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRTestReportAssert(null);
		} elseif (!is_object($type) || !($type instanceof FHIRTestReportAssert)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRTestReportAssert::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportAssert or null, %s seen.',
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
			if (self::FIELD_RESULT === $n->nodeName) {
				$type->setResult(FHIRTestReportActionResult::xmlUnserialize($n));
			} elseif (self::FIELD_MESSAGE === $n->nodeName) {
				$type->setMessage(FHIRMarkdown::xmlUnserialize($n));
			} elseif (self::FIELD_DETAIL === $n->nodeName) {
				$type->setDetail(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
				$type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_EXTENSION === $n->nodeName) {
				$type->addExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_ID === $n->nodeName) {
				$type->setId(FHIRStringPrimitive::xmlUnserialize($n));
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_MESSAGE);
		if (null !== $n) {
			$pt = $type->getMessage();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMessage($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_DETAIL);
		if (null !== $n) {
			$pt = $type->getDetail();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setDetail($n->nodeValue);
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
		if (null !== ($v = $this->getResult())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_RESULT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMessage())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MESSAGE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDetail())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DETAIL);
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
		if (null !== ($v = $this->getResult())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_RESULT} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRTestReportActionResult::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_RESULT_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getMessage())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_MESSAGE} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRMarkdown::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_MESSAGE_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getDetail())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_DETAIL} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRString::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_DETAIL_EXT} = $ext;
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
