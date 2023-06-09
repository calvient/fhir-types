<?php declare(strict_types=1);

namespace Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle;

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
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstant;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri;
use Calvient\FhirTypes\DSTU2\FHIRIdPrimitive;
use Calvient\FhirTypes\DSTU2\PHPFHIRConstants;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeInterface;

/**
 * A container for a collection of resources.
 *
 * Class FHIRBundleResponse
 * @package \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle
 */
class FHIRBundleResponse extends FHIRBackboneElement
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_BUNDLE_DOT_RESPONSE;
	const FIELD_STATUS = 'status';
	const FIELD_STATUS_EXT = '_status';
	const FIELD_LOCATION = 'location';
	const FIELD_LOCATION_EXT = '_location';
	const FIELD_ETAG = 'etag';
	const FIELD_ETAG_EXT = '_etag';
	const FIELD_LAST_MODIFIED = 'lastModified';
	const FIELD_LAST_MODIFIED_EXT = '_lastModified';

	/** @var string */
	private $_xmlns = '';

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The status code returned by processing this entry.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $status = null;

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The location header created by processing this operation.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri
	 */
	protected ?FHIRUri $location = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The etag for the resource, it the operation for the entry produced a versioned
	 * resource.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $etag = null;

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for precisely observed times, typically system logs etc.,
	 * and not human-reported times - for them, see date and dateTime below. Time zone
	 * is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The date/time that the resource was modified on the server.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRInstantPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstant
	 */
	protected ?FHIRInstant $lastModified = null;

	/**
	 * Validation map for fields in type Bundle.Response
	 * @var array
	 */
	private static array $_validationRules = [];

	/**
	 * FHIRBundleResponse Constructor
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
					'FHIRBundleResponse::_construct - $data expected to be null or array, %s seen',
					gettype($data),
				),
			);
		}
		parent::__construct($data);
		if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
			$value = $data[self::FIELD_STATUS] ?? null;
			$ext =
				isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])
					? $data[self::FIELD_STATUS_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->setStatus($value);
				} elseif (is_array($value)) {
					$this->setStatus(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->setStatus(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setStatus(new FHIRString($ext));
			}
		}
		if (isset($data[self::FIELD_LOCATION]) || isset($data[self::FIELD_LOCATION_EXT])) {
			$value = $data[self::FIELD_LOCATION] ?? null;
			$ext =
				isset($data[self::FIELD_LOCATION_EXT]) && is_array($data[self::FIELD_LOCATION_EXT])
					? $data[self::FIELD_LOCATION_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRUri) {
					$this->setLocation($value);
				} elseif (is_array($value)) {
					$this->setLocation(new FHIRUri(array_merge($ext, $value)));
				} else {
					$this->setLocation(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setLocation(new FHIRUri($ext));
			}
		}
		if (isset($data[self::FIELD_ETAG]) || isset($data[self::FIELD_ETAG_EXT])) {
			$value = $data[self::FIELD_ETAG] ?? null;
			$ext =
				isset($data[self::FIELD_ETAG_EXT]) && is_array($data[self::FIELD_ETAG_EXT])
					? $data[self::FIELD_ETAG_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->setEtag($value);
				} elseif (is_array($value)) {
					$this->setEtag(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->setEtag(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setEtag(new FHIRString($ext));
			}
		}
		if (
			isset($data[self::FIELD_LAST_MODIFIED]) ||
			isset($data[self::FIELD_LAST_MODIFIED_EXT])
		) {
			$value = $data[self::FIELD_LAST_MODIFIED] ?? null;
			$ext =
				isset($data[self::FIELD_LAST_MODIFIED_EXT]) &&
				is_array($data[self::FIELD_LAST_MODIFIED_EXT])
					? $data[self::FIELD_LAST_MODIFIED_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRInstant) {
					$this->setLastModified($value);
				} elseif (is_array($value)) {
					$this->setLastModified(new FHIRInstant(array_merge($ext, $value)));
				} else {
					$this->setLastModified(
						new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setLastModified(new FHIRInstant($ext));
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
		return "<BundleResponse{$xmlns}></BundleResponse>";
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The status code returned by processing this entry.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	public function getStatus(): ?FHIRString
	{
		return $this->status;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The status code returned by processing this entry.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString $status
	 * @return static
	 */
	public function setStatus($status = null): object
	{
		if (null !== $status && !($status instanceof FHIRString)) {
			$status = new FHIRString($status);
		}
		$this->_trackValueSet($this->status, $status);
		$this->status = $status;
		return $this;
	}

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The location header created by processing this operation.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri
	 */
	public function getLocation(): ?FHIRUri
	{
		return $this->location;
	}

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The location header created by processing this operation.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri $location
	 * @return static
	 */
	public function setLocation($location = null): object
	{
		if (null !== $location && !($location instanceof FHIRUri)) {
			$location = new FHIRUri($location);
		}
		$this->_trackValueSet($this->location, $location);
		$this->location = $location;
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The etag for the resource, it the operation for the entry produced a versioned
	 * resource.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	public function getEtag(): ?FHIRString
	{
		return $this->etag;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The etag for the resource, it the operation for the entry produced a versioned
	 * resource.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString $etag
	 * @return static
	 */
	public function setEtag($etag = null): object
	{
		if (null !== $etag && !($etag instanceof FHIRString)) {
			$etag = new FHIRString($etag);
		}
		$this->_trackValueSet($this->etag, $etag);
		$this->etag = $etag;
		return $this;
	}

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for precisely observed times, typically system logs etc.,
	 * and not human-reported times - for them, see date and dateTime below. Time zone
	 * is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The date/time that the resource was modified on the server.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRInstantPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstant
	 */
	public function getLastModified(): ?FHIRInstant
	{
		return $this->lastModified;
	}

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for precisely observed times, typically system logs etc.,
	 * and not human-reported times - for them, see date and dateTime below. Time zone
	 * is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The date/time that the resource was modified on the server.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRInstantPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstant $lastModified
	 * @return static
	 */
	public function setLastModified($lastModified = null): object
	{
		if (null !== $lastModified && !($lastModified instanceof FHIRInstant)) {
			$lastModified = new FHIRInstant($lastModified);
		}
		$this->_trackValueSet($this->lastModified, $lastModified);
		$this->lastModified = $lastModified;
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
		if (null !== ($v = $this->getStatus())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_STATUS] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getLocation())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_LOCATION] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getEtag())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_ETAG] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getLastModified())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_LAST_MODIFIED] = $fieldErrs;
			}
		}
		if (isset($validationRules[self::FIELD_STATUS])) {
			$v = $this->getStatus();
			foreach ($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_BUNDLE_DOT_RESPONSE,
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
		if (isset($validationRules[self::FIELD_LOCATION])) {
			$v = $this->getLocation();
			foreach ($validationRules[self::FIELD_LOCATION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_BUNDLE_DOT_RESPONSE,
					self::FIELD_LOCATION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_LOCATION])) {
						$errs[self::FIELD_LOCATION] = [];
					}
					$errs[self::FIELD_LOCATION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_ETAG])) {
			$v = $this->getEtag();
			foreach ($validationRules[self::FIELD_ETAG] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_BUNDLE_DOT_RESPONSE,
					self::FIELD_ETAG,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_ETAG])) {
						$errs[self::FIELD_ETAG] = [];
					}
					$errs[self::FIELD_ETAG][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_LAST_MODIFIED])) {
			$v = $this->getLastModified();
			foreach ($validationRules[self::FIELD_LAST_MODIFIED] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_BUNDLE_DOT_RESPONSE,
					self::FIELD_LAST_MODIFIED,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_LAST_MODIFIED])) {
						$errs[self::FIELD_LAST_MODIFIED] = [];
					}
					$errs[self::FIELD_LAST_MODIFIED][$rule] = $err;
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleResponse $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleResponse
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
						'FHIRBundleResponse::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRBundleResponse::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRBundleResponse(null);
		} elseif (!is_object($type) || !($type instanceof FHIRBundleResponse)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRBundleResponse::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleResponse or null, %s seen.',
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
			if (self::FIELD_STATUS === $n->nodeName) {
				$type->setStatus(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_LOCATION === $n->nodeName) {
				$type->setLocation(FHIRUri::xmlUnserialize($n));
			} elseif (self::FIELD_ETAG === $n->nodeName) {
				$type->setEtag(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_LAST_MODIFIED === $n->nodeName) {
				$type->setLastModified(FHIRInstant::xmlUnserialize($n));
			} elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
				$type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_EXTENSION === $n->nodeName) {
				$type->addExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_ID === $n->nodeName) {
				$type->setId(FHIRIdPrimitive::xmlUnserialize($n));
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_STATUS);
		if (null !== $n) {
			$pt = $type->getStatus();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setStatus($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_LOCATION);
		if (null !== $n) {
			$pt = $type->getLocation();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setLocation($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_ETAG);
		if (null !== $n) {
			$pt = $type->getEtag();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setEtag($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_LAST_MODIFIED);
		if (null !== $n) {
			$pt = $type->getLastModified();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setLastModified($n->nodeValue);
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
		if (null !== ($v = $this->getStatus())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_STATUS);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getLocation())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_LOCATION);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getEtag())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_ETAG);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getLastModified())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_LAST_MODIFIED);
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
		if (null !== ($v = $this->getStatus())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_STATUS} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRString::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_STATUS_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getLocation())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_LOCATION} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRUri::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_LOCATION_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getEtag())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_ETAG} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRString::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_ETAG_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getLastModified())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_LAST_MODIFIED} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRInstant::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_LAST_MODIFIED_EXT} = $ext;
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
