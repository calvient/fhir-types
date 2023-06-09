<?php declare(strict_types=1);

namespace Calvient\FhirTypes\DSTU2\FHIRElement;

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
use Calvient\FhirTypes\DSTU2\FHIRIdPrimitive;
use Calvient\FhirTypes\DSTU2\PHPFHIRConstants;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeInterface;

/**
 * A digital signature along with supporting context. The signature may be
 * electronic/cryptographic in nature, or a graphical image representing a
 * hand-written signature, or a signature process. Different Signature approaches
 * have different utilities.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 *
 * Class FHIRSignature
 * @package \Calvient\FhirTypes\DSTU2\FHIRElement
 */
class FHIRSignature extends FHIRElement
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SIGNATURE;
	const FIELD_TYPE = 'type';
	const FIELD_WHEN = 'when';
	const FIELD_WHEN_EXT = '_when';
	const FIELD_WHO_URI = 'whoUri';
	const FIELD_WHO_URI_EXT = '_whoUri';
	const FIELD_WHO_REFERENCE = 'whoReference';
	const FIELD_CONTENT_TYPE = 'contentType';
	const FIELD_CONTENT_TYPE_EXT = '_contentType';
	const FIELD_BLOB = 'blob';
	const FIELD_BLOB_EXT = '_blob';

	/** @var string */
	private $_xmlns = '';

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * An indication of the reason that the entity signed this document. This may be
	 * explicitly included as part of the signature information and can be used when
	 * determining accountability for various actions concerning the document.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding[]
	 */
	protected ?array $type = [];

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for precisely observed times, typically system logs etc.,
	 * and not human-reported times - for them, see date and dateTime below. Time zone
	 * is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * When the digital signature was signed.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRInstantPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstant
	 */
	protected ?FHIRInstant $when = null;

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A reference to an application-usable description of the person that signed the
	 * certificate (e.g. the signature used their private key).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri
	 */
	protected ?FHIRUri $whoUri = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A reference to an application-usable description of the person that signed the
	 * certificate (e.g. the signature used their private key).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $whoReference = null;

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * A mime type that indicates the technical format of the signature. Important mime
	 * types are application/signature+xml for X ML DigSig, application/jwt for JWT,
	 * and image/* for a graphical image of a signature.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode
	 */
	protected ?FHIRCode $contentType = null;

	/**
	 * A stream of bytes
	 * A stream of bytes, base64 encoded
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The base64 encoding of the Signature content.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRBase64BinaryPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBase64Binary
	 */
	protected ?FHIRBase64Binary $blob = null;

	/**
	 * Validation map for fields in type Signature
	 * @var array
	 */
	private static array $_validationRules = [
		self::FIELD_TYPE => [
			PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
		],
	];

	/**
	 * FHIRSignature Constructor
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
					'FHIRSignature::_construct - $data expected to be null or array, %s seen',
					gettype($data),
				),
			);
		}
		parent::__construct($data);
		if (isset($data[self::FIELD_TYPE])) {
			if (is_array($data[self::FIELD_TYPE])) {
				foreach ($data[self::FIELD_TYPE] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRCoding) {
						$this->addType($v);
					} else {
						$this->addType(new FHIRCoding($v));
					}
				}
			} elseif ($data[self::FIELD_TYPE] instanceof FHIRCoding) {
				$this->addType($data[self::FIELD_TYPE]);
			} else {
				$this->addType(new FHIRCoding($data[self::FIELD_TYPE]));
			}
		}
		if (isset($data[self::FIELD_WHEN]) || isset($data[self::FIELD_WHEN_EXT])) {
			$value = $data[self::FIELD_WHEN] ?? null;
			$ext =
				isset($data[self::FIELD_WHEN_EXT]) && is_array($data[self::FIELD_WHEN_EXT])
					? $data[self::FIELD_WHEN_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRInstant) {
					$this->setWhen($value);
				} elseif (is_array($value)) {
					$this->setWhen(new FHIRInstant(array_merge($ext, $value)));
				} else {
					$this->setWhen(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setWhen(new FHIRInstant($ext));
			}
		}
		if (isset($data[self::FIELD_WHO_URI]) || isset($data[self::FIELD_WHO_URI_EXT])) {
			$value = $data[self::FIELD_WHO_URI] ?? null;
			$ext =
				isset($data[self::FIELD_WHO_URI_EXT]) && is_array($data[self::FIELD_WHO_URI_EXT])
					? $data[self::FIELD_WHO_URI_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRUri) {
					$this->setWhoUri($value);
				} elseif (is_array($value)) {
					$this->setWhoUri(new FHIRUri(array_merge($ext, $value)));
				} else {
					$this->setWhoUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setWhoUri(new FHIRUri($ext));
			}
		}
		if (isset($data[self::FIELD_WHO_REFERENCE])) {
			if ($data[self::FIELD_WHO_REFERENCE] instanceof FHIRReference) {
				$this->setWhoReference($data[self::FIELD_WHO_REFERENCE]);
			} else {
				$this->setWhoReference(new FHIRReference($data[self::FIELD_WHO_REFERENCE]));
			}
		}
		if (isset($data[self::FIELD_CONTENT_TYPE]) || isset($data[self::FIELD_CONTENT_TYPE_EXT])) {
			$value = $data[self::FIELD_CONTENT_TYPE] ?? null;
			$ext =
				isset($data[self::FIELD_CONTENT_TYPE_EXT]) &&
				is_array($data[self::FIELD_CONTENT_TYPE_EXT])
					? $data[self::FIELD_CONTENT_TYPE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRCode) {
					$this->setContentType($value);
				} elseif (is_array($value)) {
					$this->setContentType(new FHIRCode(array_merge($ext, $value)));
				} else {
					$this->setContentType(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setContentType(new FHIRCode($ext));
			}
		}
		if (isset($data[self::FIELD_BLOB]) || isset($data[self::FIELD_BLOB_EXT])) {
			$value = $data[self::FIELD_BLOB] ?? null;
			$ext =
				isset($data[self::FIELD_BLOB_EXT]) && is_array($data[self::FIELD_BLOB_EXT])
					? $data[self::FIELD_BLOB_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRBase64Binary) {
					$this->setBlob($value);
				} elseif (is_array($value)) {
					$this->setBlob(new FHIRBase64Binary(array_merge($ext, $value)));
				} else {
					$this->setBlob(
						new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setBlob(new FHIRBase64Binary($ext));
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
		return "<Signature{$xmlns}></Signature>";
	}

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * An indication of the reason that the entity signed this document. This may be
	 * explicitly included as part of the signature information and can be used when
	 * determining accountability for various actions concerning the document.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding[]
	 */
	public function getType(): ?array
	{
		return $this->type;
	}

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * An indication of the reason that the entity signed this document. This may be
	 * explicitly included as part of the signature information and can be used when
	 * determining accountability for various actions concerning the document.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding $type
	 * @return static
	 */
	public function addType(?FHIRCoding $type = null): object
	{
		$this->_trackValueAdded();
		$this->type[] = $type;
		return $this;
	}

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * An indication of the reason that the entity signed this document. This may be
	 * explicitly included as part of the signature information and can be used when
	 * determining accountability for various actions concerning the document.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding[] $type
	 * @return static
	 */
	public function setType(array $type = []): object
	{
		if ([] !== $this->type) {
			$this->_trackValuesRemoved(count($this->type));
			$this->type = [];
		}
		if ([] === $type) {
			return $this;
		}
		foreach ($type as $v) {
			if ($v instanceof FHIRCoding) {
				$this->addType($v);
			} else {
				$this->addType(new FHIRCoding($v));
			}
		}
		return $this;
	}

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for precisely observed times, typically system logs etc.,
	 * and not human-reported times - for them, see date and dateTime below. Time zone
	 * is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * When the digital signature was signed.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRInstantPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstant
	 */
	public function getWhen(): ?FHIRInstant
	{
		return $this->when;
	}

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for precisely observed times, typically system logs etc.,
	 * and not human-reported times - for them, see date and dateTime below. Time zone
	 * is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * When the digital signature was signed.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRInstantPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstant $when
	 * @return static
	 */
	public function setWhen($when = null): object
	{
		if (null !== $when && !($when instanceof FHIRInstant)) {
			$when = new FHIRInstant($when);
		}
		$this->_trackValueSet($this->when, $when);
		$this->when = $when;
		return $this;
	}

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A reference to an application-usable description of the person that signed the
	 * certificate (e.g. the signature used their private key).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri
	 */
	public function getWhoUri(): ?FHIRUri
	{
		return $this->whoUri;
	}

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A reference to an application-usable description of the person that signed the
	 * certificate (e.g. the signature used their private key).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri $whoUri
	 * @return static
	 */
	public function setWhoUri($whoUri = null): object
	{
		if (null !== $whoUri && !($whoUri instanceof FHIRUri)) {
			$whoUri = new FHIRUri($whoUri);
		}
		$this->_trackValueSet($this->whoUri, $whoUri);
		$this->whoUri = $whoUri;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A reference to an application-usable description of the person that signed the
	 * certificate (e.g. the signature used their private key).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getWhoReference(): ?FHIRReference
	{
		return $this->whoReference;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A reference to an application-usable description of the person that signed the
	 * certificate (e.g. the signature used their private key).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $whoReference
	 * @return static
	 */
	public function setWhoReference(?FHIRReference $whoReference = null): object
	{
		$this->_trackValueSet($this->whoReference, $whoReference);
		$this->whoReference = $whoReference;
		return $this;
	}

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * A mime type that indicates the technical format of the signature. Important mime
	 * types are application/signature+xml for X ML DigSig, application/jwt for JWT,
	 * and image/* for a graphical image of a signature.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode
	 */
	public function getContentType(): ?FHIRCode
	{
		return $this->contentType;
	}

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * A mime type that indicates the technical format of the signature. Important mime
	 * types are application/signature+xml for X ML DigSig, application/jwt for JWT,
	 * and image/* for a graphical image of a signature.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode $contentType
	 * @return static
	 */
	public function setContentType($contentType = null): object
	{
		if (null !== $contentType && !($contentType instanceof FHIRCode)) {
			$contentType = new FHIRCode($contentType);
		}
		$this->_trackValueSet($this->contentType, $contentType);
		$this->contentType = $contentType;
		return $this;
	}

	/**
	 * A stream of bytes
	 * A stream of bytes, base64 encoded
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The base64 encoding of the Signature content.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRBase64BinaryPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBase64Binary
	 */
	public function getBlob(): ?FHIRBase64Binary
	{
		return $this->blob;
	}

	/**
	 * A stream of bytes
	 * A stream of bytes, base64 encoded
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The base64 encoding of the Signature content.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRBase64BinaryPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBase64Binary $blob
	 * @return static
	 */
	public function setBlob($blob = null): object
	{
		if (null !== $blob && !($blob instanceof FHIRBase64Binary)) {
			$blob = new FHIRBase64Binary($blob);
		}
		$this->_trackValueSet($this->blob, $blob);
		$this->blob = $blob;
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
		if ([] !== ($vs = $this->getType())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_TYPE, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getWhen())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_WHEN] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getWhoUri())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_WHO_URI] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getWhoReference())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_WHO_REFERENCE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getContentType())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_CONTENT_TYPE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getBlob())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_BLOB] = $fieldErrs;
			}
		}
		if (isset($validationRules[self::FIELD_TYPE])) {
			$v = $this->getType();
			foreach ($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_SIGNATURE,
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
		if (isset($validationRules[self::FIELD_WHEN])) {
			$v = $this->getWhen();
			foreach ($validationRules[self::FIELD_WHEN] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_SIGNATURE,
					self::FIELD_WHEN,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_WHEN])) {
						$errs[self::FIELD_WHEN] = [];
					}
					$errs[self::FIELD_WHEN][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_WHO_URI])) {
			$v = $this->getWhoUri();
			foreach ($validationRules[self::FIELD_WHO_URI] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_SIGNATURE,
					self::FIELD_WHO_URI,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_WHO_URI])) {
						$errs[self::FIELD_WHO_URI] = [];
					}
					$errs[self::FIELD_WHO_URI][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_WHO_REFERENCE])) {
			$v = $this->getWhoReference();
			foreach ($validationRules[self::FIELD_WHO_REFERENCE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_SIGNATURE,
					self::FIELD_WHO_REFERENCE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_WHO_REFERENCE])) {
						$errs[self::FIELD_WHO_REFERENCE] = [];
					}
					$errs[self::FIELD_WHO_REFERENCE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_CONTENT_TYPE])) {
			$v = $this->getContentType();
			foreach ($validationRules[self::FIELD_CONTENT_TYPE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_SIGNATURE,
					self::FIELD_CONTENT_TYPE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_CONTENT_TYPE])) {
						$errs[self::FIELD_CONTENT_TYPE] = [];
					}
					$errs[self::FIELD_CONTENT_TYPE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_BLOB])) {
			$v = $this->getBlob();
			foreach ($validationRules[self::FIELD_BLOB] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_SIGNATURE,
					self::FIELD_BLOB,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_BLOB])) {
						$errs[self::FIELD_BLOB] = [];
					}
					$errs[self::FIELD_BLOB][$rule] = $err;
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSignature $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSignature
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
						'FHIRSignature::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRSignature::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRSignature(null);
		} elseif (!is_object($type) || !($type instanceof FHIRSignature)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRSignature::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSignature or null, %s seen.',
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
				$type->addType(FHIRCoding::xmlUnserialize($n));
			} elseif (self::FIELD_WHEN === $n->nodeName) {
				$type->setWhen(FHIRInstant::xmlUnserialize($n));
			} elseif (self::FIELD_WHO_URI === $n->nodeName) {
				$type->setWhoUri(FHIRUri::xmlUnserialize($n));
			} elseif (self::FIELD_WHO_REFERENCE === $n->nodeName) {
				$type->setWhoReference(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_CONTENT_TYPE === $n->nodeName) {
				$type->setContentType(FHIRCode::xmlUnserialize($n));
			} elseif (self::FIELD_BLOB === $n->nodeName) {
				$type->setBlob(FHIRBase64Binary::xmlUnserialize($n));
			} elseif (self::FIELD_EXTENSION === $n->nodeName) {
				$type->addExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_ID === $n->nodeName) {
				$type->setId(FHIRIdPrimitive::xmlUnserialize($n));
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_WHEN);
		if (null !== $n) {
			$pt = $type->getWhen();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setWhen($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_WHO_URI);
		if (null !== $n) {
			$pt = $type->getWhoUri();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setWhoUri($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_CONTENT_TYPE);
		if (null !== $n) {
			$pt = $type->getContentType();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setContentType($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_BLOB);
		if (null !== $n) {
			$pt = $type->getBlob();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setBlob($n->nodeValue);
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
		if ([] !== ($vs = $this->getType())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_TYPE);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if (null !== ($v = $this->getWhen())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_WHEN);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getWhoUri())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_WHO_URI);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getWhoReference())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_WHO_REFERENCE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getContentType())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_CONTENT_TYPE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getBlob())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_BLOB);
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
		if ([] !== ($vs = $this->getType())) {
			$out->{self::FIELD_TYPE} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_TYPE}[] = $v;
			}
		}
		if (null !== ($v = $this->getWhen())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_WHEN} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRInstant::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_WHEN_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getWhoUri())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_WHO_URI} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRUri::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_WHO_URI_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getWhoReference())) {
			$out->{self::FIELD_WHO_REFERENCE} = $v;
		}
		if (null !== ($v = $this->getContentType())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_CONTENT_TYPE} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRCode::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_CONTENT_TYPE_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getBlob())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_BLOB} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRBase64Binary::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_BLOB_EXT} = $ext;
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
