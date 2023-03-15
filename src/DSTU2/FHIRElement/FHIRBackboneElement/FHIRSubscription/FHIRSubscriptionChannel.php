<?php declare(strict_types=1);

namespace App\Types\FHIR\DSTU2\FHIRElement\FHIRBackboneElement\FHIRSubscription;

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
use App\Types\FHIR\DSTU2\FHIRElement\FHIRExtension;
use App\Types\FHIR\DSTU2\FHIRElement\FHIRString;
use App\Types\FHIR\DSTU2\FHIRElement\FHIRSubscriptionChannelType;
use App\Types\FHIR\DSTU2\FHIRElement\FHIRUri;
use App\Types\FHIR\DSTU2\FHIRIdPrimitive;
use App\Types\FHIR\DSTU2\PHPFHIRConstants;
use App\Types\FHIR\DSTU2\PHPFHIRTypeInterface;

/**
 * The subscription resource is used to define a push based subscription from a
 * server to another system. Once a subscription is registered with the server, the
 * server checks every resource that is created or updated, and if the resource
 * matches the given criteria, it sends a message on the defined "channel" so that
 * another system is able to take an appropriate action.
 *
 * Class FHIRSubscriptionChannel
 * @package \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRSubscription
 */
class FHIRSubscriptionChannel extends FHIRBackboneElement
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_DOT_CHANNEL;
	const FIELD_TYPE = 'type';
	const FIELD_TYPE_EXT = '_type';
	const FIELD_ENDPOINT = 'endpoint';
	const FIELD_ENDPOINT_EXT = '_endpoint';
	const FIELD_PAYLOAD = 'payload';
	const FIELD_PAYLOAD_EXT = '_payload';
	const FIELD_HEADER = 'header';
	const FIELD_HEADER_EXT = '_header';

	/** @var string */
	private $_xmlns = '';

	/**
	 * The type of method used to execute a subscription.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The type of channel to send notifications on.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSubscriptionChannelType
	 */
	protected ?FHIRSubscriptionChannelType $type = null;

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The uri that describes the actual end-point to send messages to.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri
	 */
	protected ?FHIRUri $endpoint = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The mime type to send the payload in - either application/xml+fhir, or
	 * application/json+fhir. If the mime type is blank, then there is no payload in
	 * the notification, just a notification.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $payload = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Additional headers / information to send as part of the notification.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $header = null;

	/**
	 * Validation map for fields in type Subscription.Channel
	 * @var array
	 */
	private static array $_validationRules = [];

	/**
	 * FHIRSubscriptionChannel Constructor
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
					'FHIRSubscriptionChannel::_construct - $data expected to be null or array, %s seen',
					gettype($data),
				),
			);
		}
		parent::__construct($data);
		if (isset($data[self::FIELD_TYPE]) || isset($data[self::FIELD_TYPE_EXT])) {
			$value = $data[self::FIELD_TYPE] ?? null;
			$ext =
				isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT])
					? $data[self::FIELD_TYPE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRSubscriptionChannelType) {
					$this->setType($value);
				} elseif (is_array($value)) {
					$this->setType(new FHIRSubscriptionChannelType(array_merge($ext, $value)));
				} else {
					$this->setType(
						new FHIRSubscriptionChannelType(
							[FHIRSubscriptionChannelType::FIELD_VALUE => $value] + $ext,
						),
					);
				}
			} elseif ([] !== $ext) {
				$this->setType(new FHIRSubscriptionChannelType($ext));
			}
		}
		if (isset($data[self::FIELD_ENDPOINT]) || isset($data[self::FIELD_ENDPOINT_EXT])) {
			$value = $data[self::FIELD_ENDPOINT] ?? null;
			$ext =
				isset($data[self::FIELD_ENDPOINT_EXT]) && is_array($data[self::FIELD_ENDPOINT_EXT])
					? $data[self::FIELD_ENDPOINT_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRUri) {
					$this->setEndpoint($value);
				} elseif (is_array($value)) {
					$this->setEndpoint(new FHIRUri(array_merge($ext, $value)));
				} else {
					$this->setEndpoint(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setEndpoint(new FHIRUri($ext));
			}
		}
		if (isset($data[self::FIELD_PAYLOAD]) || isset($data[self::FIELD_PAYLOAD_EXT])) {
			$value = $data[self::FIELD_PAYLOAD] ?? null;
			$ext =
				isset($data[self::FIELD_PAYLOAD_EXT]) && is_array($data[self::FIELD_PAYLOAD_EXT])
					? $data[self::FIELD_PAYLOAD_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->setPayload($value);
				} elseif (is_array($value)) {
					$this->setPayload(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->setPayload(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setPayload(new FHIRString($ext));
			}
		}
		if (isset($data[self::FIELD_HEADER]) || isset($data[self::FIELD_HEADER_EXT])) {
			$value = $data[self::FIELD_HEADER] ?? null;
			$ext =
				isset($data[self::FIELD_HEADER_EXT]) && is_array($data[self::FIELD_HEADER_EXT])
					? $data[self::FIELD_HEADER_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->setHeader($value);
				} elseif (is_array($value)) {
					$this->setHeader(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->setHeader(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setHeader(new FHIRString($ext));
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
		return "<SubscriptionChannel{$xmlns}></SubscriptionChannel>";
	}

	/**
	 * The type of method used to execute a subscription.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The type of channel to send notifications on.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSubscriptionChannelType
	 */
	public function getType(): ?FHIRSubscriptionChannelType
	{
		return $this->type;
	}

	/**
	 * The type of method used to execute a subscription.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The type of channel to send notifications on.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSubscriptionChannelType $type
	 * @return static
	 */
	public function setType(?FHIRSubscriptionChannelType $type = null): object
	{
		$this->_trackValueSet($this->type, $type);
		$this->type = $type;
		return $this;
	}

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The uri that describes the actual end-point to send messages to.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri
	 */
	public function getEndpoint(): ?FHIRUri
	{
		return $this->endpoint;
	}

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The uri that describes the actual end-point to send messages to.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri $endpoint
	 * @return static
	 */
	public function setEndpoint($endpoint = null): object
	{
		if (null !== $endpoint && !($endpoint instanceof FHIRUri)) {
			$endpoint = new FHIRUri($endpoint);
		}
		$this->_trackValueSet($this->endpoint, $endpoint);
		$this->endpoint = $endpoint;
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The mime type to send the payload in - either application/xml+fhir, or
	 * application/json+fhir. If the mime type is blank, then there is no payload in
	 * the notification, just a notification.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	public function getPayload(): ?FHIRString
	{
		return $this->payload;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The mime type to send the payload in - either application/xml+fhir, or
	 * application/json+fhir. If the mime type is blank, then there is no payload in
	 * the notification, just a notification.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString $payload
	 * @return static
	 */
	public function setPayload($payload = null): object
	{
		if (null !== $payload && !($payload instanceof FHIRString)) {
			$payload = new FHIRString($payload);
		}
		$this->_trackValueSet($this->payload, $payload);
		$this->payload = $payload;
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Additional headers / information to send as part of the notification.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	public function getHeader(): ?FHIRString
	{
		return $this->header;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Additional headers / information to send as part of the notification.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString $header
	 * @return static
	 */
	public function setHeader($header = null): object
	{
		if (null !== $header && !($header instanceof FHIRString)) {
			$header = new FHIRString($header);
		}
		$this->_trackValueSet($this->header, $header);
		$this->header = $header;
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
		if (null !== ($v = $this->getEndpoint())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_ENDPOINT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPayload())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PAYLOAD] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getHeader())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_HEADER] = $fieldErrs;
			}
		}
		if (isset($validationRules[self::FIELD_TYPE])) {
			$v = $this->getType();
			foreach ($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_DOT_CHANNEL,
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
		if (isset($validationRules[self::FIELD_ENDPOINT])) {
			$v = $this->getEndpoint();
			foreach ($validationRules[self::FIELD_ENDPOINT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_DOT_CHANNEL,
					self::FIELD_ENDPOINT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_ENDPOINT])) {
						$errs[self::FIELD_ENDPOINT] = [];
					}
					$errs[self::FIELD_ENDPOINT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PAYLOAD])) {
			$v = $this->getPayload();
			foreach ($validationRules[self::FIELD_PAYLOAD] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_DOT_CHANNEL,
					self::FIELD_PAYLOAD,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PAYLOAD])) {
						$errs[self::FIELD_PAYLOAD] = [];
					}
					$errs[self::FIELD_PAYLOAD][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_HEADER])) {
			$v = $this->getHeader();
			foreach ($validationRules[self::FIELD_HEADER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_DOT_CHANNEL,
					self::FIELD_HEADER,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_HEADER])) {
						$errs[self::FIELD_HEADER] = [];
					}
					$errs[self::FIELD_HEADER][$rule] = $err;
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionChannel $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionChannel
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
						'FHIRSubscriptionChannel::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRSubscriptionChannel::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRSubscriptionChannel(null);
		} elseif (!is_object($type) || !($type instanceof FHIRSubscriptionChannel)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRSubscriptionChannel::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionChannel or null, %s seen.',
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
				$type->setType(FHIRSubscriptionChannelType::xmlUnserialize($n));
			} elseif (self::FIELD_ENDPOINT === $n->nodeName) {
				$type->setEndpoint(FHIRUri::xmlUnserialize($n));
			} elseif (self::FIELD_PAYLOAD === $n->nodeName) {
				$type->setPayload(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_HEADER === $n->nodeName) {
				$type->setHeader(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
				$type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_EXTENSION === $n->nodeName) {
				$type->addExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_ID === $n->nodeName) {
				$type->setId(FHIRIdPrimitive::xmlUnserialize($n));
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_ENDPOINT);
		if (null !== $n) {
			$pt = $type->getEndpoint();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setEndpoint($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_PAYLOAD);
		if (null !== $n) {
			$pt = $type->getPayload();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setPayload($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_HEADER);
		if (null !== $n) {
			$pt = $type->getHeader();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setHeader($n->nodeValue);
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
		if (null !== ($v = $this->getEndpoint())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_ENDPOINT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPayload())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PAYLOAD);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getHeader())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_HEADER);
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
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_TYPE} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRSubscriptionChannelType::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_TYPE_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getEndpoint())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_ENDPOINT} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRUri::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_ENDPOINT_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getPayload())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_PAYLOAD} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRString::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_PAYLOAD_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getHeader())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_HEADER} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRString::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_HEADER_EXT} = $ext;
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