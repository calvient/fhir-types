<?php declare(strict_types=1);

namespace Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource;

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

use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderDestination;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderResponse;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderSource;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRExtension;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRId;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstant;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMeta;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRNarrative;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri;
use Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource;
use Calvient\FhirTypes\DSTU2\PHPFHIRConstants;
use Calvient\FhirTypes\DSTU2\PHPFHIRContainedTypeInterface;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeInterface;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeMap;

/**
 * The header for a message exchange that is either requesting or responding to an
 * action. The reference(s) that are the subject of the action as well as other
 * information related to the action are typically transmitted in a bundle in which
 * the MessageHeader resource instance is the first resource in the bundle.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRMessageHeader
 * @package \Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIRMessageHeader extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MESSAGE_HEADER;
	const FIELD_TIMESTAMP = 'timestamp';
	const FIELD_TIMESTAMP_EXT = '_timestamp';
	const FIELD_EVENT = 'event';
	const FIELD_RESPONSE = 'response';
	const FIELD_SOURCE = 'source';
	const FIELD_DESTINATION = 'destination';
	const FIELD_ENTERER = 'enterer';
	const FIELD_AUTHOR = 'author';
	const FIELD_RECEIVER = 'receiver';
	const FIELD_RESPONSIBLE = 'responsible';
	const FIELD_REASON = 'reason';
	const FIELD_DATA = 'data';

	/** @var string */
	private $_xmlns = '';

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for precisely observed times, typically system logs etc.,
	 * and not human-reported times - for them, see date and dateTime below. Time zone
	 * is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The time that the message was sent.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRInstantPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstant
	 */
	protected ?FHIRInstant $timestamp = null;

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Code that identifies the event this message represents and connects it with its
	 * definition. Events defined as part of the FHIR specification have the system
	 * value "http://hl7.org/fhir/message-events".
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding
	 */
	protected ?FHIRCoding $event = null;

	/**
	 * The header for a message exchange that is either requesting or responding to an
	 * action. The reference(s) that are the subject of the action as well as other
	 * information related to the action are typically transmitted in a bundle in which
	 * the MessageHeader resource instance is the first resource in the bundle.
	 *
	 * Information about the message that this message is a response to. Only present
	 * if this message is a response.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderResponse
	 */
	protected ?FHIRMessageHeaderResponse $response = null;

	/**
	 * The header for a message exchange that is either requesting or responding to an
	 * action. The reference(s) that are the subject of the action as well as other
	 * information related to the action are typically transmitted in a bundle in which
	 * the MessageHeader resource instance is the first resource in the bundle.
	 *
	 * The source application from which this message originated.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderSource
	 */
	protected ?FHIRMessageHeaderSource $source = null;

	/**
	 * The header for a message exchange that is either requesting or responding to an
	 * action. The reference(s) that are the subject of the action as well as other
	 * information related to the action are typically transmitted in a bundle in which
	 * the MessageHeader resource instance is the first resource in the bundle.
	 *
	 * The destination application which the message is intended for.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderDestination[]
	 */
	protected ?array $destination = [];

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The person or device that performed the data entry leading to this message.
	 * Where there is more than one candidate, pick the most proximal to the message.
	 * Can provide other enterers in extensions.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $enterer = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The logical author of the message - the person or device that decided the
	 * described event should happen. Where there is more than one candidate, pick the
	 * most proximal to the MessageHeader. Can provide other authors in extensions.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $author = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Allows data conveyed by a message to be addressed to a particular person or
	 * department when routing to a specific application isn't sufficient.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $receiver = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The person or organization that accepts overall responsibility for the contents
	 * of the message. The implication is that the message event happened under the
	 * policies of the responsible party.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $responsible = null;

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Coded indication of the cause for the event - indicates a reason for the
	 * occurrence of the event that is a focus of this message.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	protected ?FHIRCodeableConcept $reason = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The actual data of the message - a reference to the root/focus class of the
	 * event.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	protected ?array $data = [];

	/**
	 * Validation map for fields in type MessageHeader
	 * @var array
	 */
	private static array $_validationRules = [];

	/**
	 * FHIRMessageHeader Constructor
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
					'FHIRMessageHeader::_construct - $data expected to be null or array, %s seen',
					gettype($data),
				),
			);
		}
		parent::__construct($data);
		if (isset($data[self::FIELD_TIMESTAMP]) || isset($data[self::FIELD_TIMESTAMP_EXT])) {
			$value = $data[self::FIELD_TIMESTAMP] ?? null;
			$ext =
				isset($data[self::FIELD_TIMESTAMP_EXT]) &&
				is_array($data[self::FIELD_TIMESTAMP_EXT])
					? $data[self::FIELD_TIMESTAMP_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRInstant) {
					$this->setTimestamp($value);
				} elseif (is_array($value)) {
					$this->setTimestamp(new FHIRInstant(array_merge($ext, $value)));
				} else {
					$this->setTimestamp(
						new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setTimestamp(new FHIRInstant($ext));
			}
		}
		if (isset($data[self::FIELD_EVENT])) {
			if ($data[self::FIELD_EVENT] instanceof FHIRCoding) {
				$this->setEvent($data[self::FIELD_EVENT]);
			} else {
				$this->setEvent(new FHIRCoding($data[self::FIELD_EVENT]));
			}
		}
		if (isset($data[self::FIELD_RESPONSE])) {
			if ($data[self::FIELD_RESPONSE] instanceof FHIRMessageHeaderResponse) {
				$this->setResponse($data[self::FIELD_RESPONSE]);
			} else {
				$this->setResponse(new FHIRMessageHeaderResponse($data[self::FIELD_RESPONSE]));
			}
		}
		if (isset($data[self::FIELD_SOURCE])) {
			if ($data[self::FIELD_SOURCE] instanceof FHIRMessageHeaderSource) {
				$this->setSource($data[self::FIELD_SOURCE]);
			} else {
				$this->setSource(new FHIRMessageHeaderSource($data[self::FIELD_SOURCE]));
			}
		}
		if (isset($data[self::FIELD_DESTINATION])) {
			if (is_array($data[self::FIELD_DESTINATION])) {
				foreach ($data[self::FIELD_DESTINATION] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRMessageHeaderDestination) {
						$this->addDestination($v);
					} else {
						$this->addDestination(new FHIRMessageHeaderDestination($v));
					}
				}
			} elseif ($data[self::FIELD_DESTINATION] instanceof FHIRMessageHeaderDestination) {
				$this->addDestination($data[self::FIELD_DESTINATION]);
			} else {
				$this->addDestination(
					new FHIRMessageHeaderDestination($data[self::FIELD_DESTINATION]),
				);
			}
		}
		if (isset($data[self::FIELD_ENTERER])) {
			if ($data[self::FIELD_ENTERER] instanceof FHIRReference) {
				$this->setEnterer($data[self::FIELD_ENTERER]);
			} else {
				$this->setEnterer(new FHIRReference($data[self::FIELD_ENTERER]));
			}
		}
		if (isset($data[self::FIELD_AUTHOR])) {
			if ($data[self::FIELD_AUTHOR] instanceof FHIRReference) {
				$this->setAuthor($data[self::FIELD_AUTHOR]);
			} else {
				$this->setAuthor(new FHIRReference($data[self::FIELD_AUTHOR]));
			}
		}
		if (isset($data[self::FIELD_RECEIVER])) {
			if ($data[self::FIELD_RECEIVER] instanceof FHIRReference) {
				$this->setReceiver($data[self::FIELD_RECEIVER]);
			} else {
				$this->setReceiver(new FHIRReference($data[self::FIELD_RECEIVER]));
			}
		}
		if (isset($data[self::FIELD_RESPONSIBLE])) {
			if ($data[self::FIELD_RESPONSIBLE] instanceof FHIRReference) {
				$this->setResponsible($data[self::FIELD_RESPONSIBLE]);
			} else {
				$this->setResponsible(new FHIRReference($data[self::FIELD_RESPONSIBLE]));
			}
		}
		if (isset($data[self::FIELD_REASON])) {
			if ($data[self::FIELD_REASON] instanceof FHIRCodeableConcept) {
				$this->setReason($data[self::FIELD_REASON]);
			} else {
				$this->setReason(new FHIRCodeableConcept($data[self::FIELD_REASON]));
			}
		}
		if (isset($data[self::FIELD_DATA])) {
			if (is_array($data[self::FIELD_DATA])) {
				foreach ($data[self::FIELD_DATA] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRReference) {
						$this->addData($v);
					} else {
						$this->addData(new FHIRReference($v));
					}
				}
			} elseif ($data[self::FIELD_DATA] instanceof FHIRReference) {
				$this->addData($data[self::FIELD_DATA]);
			} else {
				$this->addData(new FHIRReference($data[self::FIELD_DATA]));
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
		return "<MessageHeader{$xmlns}></MessageHeader>";
	}
	/**
	 * @return string
	 */
	public function _getResourceType(): string
	{
		return static::FHIR_TYPE_NAME;
	}

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for precisely observed times, typically system logs etc.,
	 * and not human-reported times - for them, see date and dateTime below. Time zone
	 * is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The time that the message was sent.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRInstantPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstant
	 */
	public function getTimestamp(): ?FHIRInstant
	{
		return $this->timestamp;
	}

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for precisely observed times, typically system logs etc.,
	 * and not human-reported times - for them, see date and dateTime below. Time zone
	 * is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The time that the message was sent.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRInstantPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstant $timestamp
	 * @return static
	 */
	public function setTimestamp($timestamp = null): object
	{
		if (null !== $timestamp && !($timestamp instanceof FHIRInstant)) {
			$timestamp = new FHIRInstant($timestamp);
		}
		$this->_trackValueSet($this->timestamp, $timestamp);
		$this->timestamp = $timestamp;
		return $this;
	}

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Code that identifies the event this message represents and connects it with its
	 * definition. Events defined as part of the FHIR specification have the system
	 * value "http://hl7.org/fhir/message-events".
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding
	 */
	public function getEvent(): ?FHIRCoding
	{
		return $this->event;
	}

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Code that identifies the event this message represents and connects it with its
	 * definition. Events defined as part of the FHIR specification have the system
	 * value "http://hl7.org/fhir/message-events".
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding $event
	 * @return static
	 */
	public function setEvent(?FHIRCoding $event = null): object
	{
		$this->_trackValueSet($this->event, $event);
		$this->event = $event;
		return $this;
	}

	/**
	 * The header for a message exchange that is either requesting or responding to an
	 * action. The reference(s) that are the subject of the action as well as other
	 * information related to the action are typically transmitted in a bundle in which
	 * the MessageHeader resource instance is the first resource in the bundle.
	 *
	 * Information about the message that this message is a response to. Only present
	 * if this message is a response.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderResponse
	 */
	public function getResponse(): ?FHIRMessageHeaderResponse
	{
		return $this->response;
	}

	/**
	 * The header for a message exchange that is either requesting or responding to an
	 * action. The reference(s) that are the subject of the action as well as other
	 * information related to the action are typically transmitted in a bundle in which
	 * the MessageHeader resource instance is the first resource in the bundle.
	 *
	 * Information about the message that this message is a response to. Only present
	 * if this message is a response.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderResponse $response
	 * @return static
	 */
	public function setResponse(?FHIRMessageHeaderResponse $response = null): object
	{
		$this->_trackValueSet($this->response, $response);
		$this->response = $response;
		return $this;
	}

	/**
	 * The header for a message exchange that is either requesting or responding to an
	 * action. The reference(s) that are the subject of the action as well as other
	 * information related to the action are typically transmitted in a bundle in which
	 * the MessageHeader resource instance is the first resource in the bundle.
	 *
	 * The source application from which this message originated.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderSource
	 */
	public function getSource(): ?FHIRMessageHeaderSource
	{
		return $this->source;
	}

	/**
	 * The header for a message exchange that is either requesting or responding to an
	 * action. The reference(s) that are the subject of the action as well as other
	 * information related to the action are typically transmitted in a bundle in which
	 * the MessageHeader resource instance is the first resource in the bundle.
	 *
	 * The source application from which this message originated.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderSource $source
	 * @return static
	 */
	public function setSource(?FHIRMessageHeaderSource $source = null): object
	{
		$this->_trackValueSet($this->source, $source);
		$this->source = $source;
		return $this;
	}

	/**
	 * The header for a message exchange that is either requesting or responding to an
	 * action. The reference(s) that are the subject of the action as well as other
	 * information related to the action are typically transmitted in a bundle in which
	 * the MessageHeader resource instance is the first resource in the bundle.
	 *
	 * The destination application which the message is intended for.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderDestination[]
	 */
	public function getDestination(): ?array
	{
		return $this->destination;
	}

	/**
	 * The header for a message exchange that is either requesting or responding to an
	 * action. The reference(s) that are the subject of the action as well as other
	 * information related to the action are typically transmitted in a bundle in which
	 * the MessageHeader resource instance is the first resource in the bundle.
	 *
	 * The destination application which the message is intended for.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderDestination $destination
	 * @return static
	 */
	public function addDestination(?FHIRMessageHeaderDestination $destination = null): object
	{
		$this->_trackValueAdded();
		$this->destination[] = $destination;
		return $this;
	}

	/**
	 * The header for a message exchange that is either requesting or responding to an
	 * action. The reference(s) that are the subject of the action as well as other
	 * information related to the action are typically transmitted in a bundle in which
	 * the MessageHeader resource instance is the first resource in the bundle.
	 *
	 * The destination application which the message is intended for.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderDestination[] $destination
	 * @return static
	 */
	public function setDestination(array $destination = []): object
	{
		if ([] !== $this->destination) {
			$this->_trackValuesRemoved(count($this->destination));
			$this->destination = [];
		}
		if ([] === $destination) {
			return $this;
		}
		foreach ($destination as $v) {
			if ($v instanceof FHIRMessageHeaderDestination) {
				$this->addDestination($v);
			} else {
				$this->addDestination(new FHIRMessageHeaderDestination($v));
			}
		}
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The person or device that performed the data entry leading to this message.
	 * Where there is more than one candidate, pick the most proximal to the message.
	 * Can provide other enterers in extensions.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getEnterer(): ?FHIRReference
	{
		return $this->enterer;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The person or device that performed the data entry leading to this message.
	 * Where there is more than one candidate, pick the most proximal to the message.
	 * Can provide other enterers in extensions.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $enterer
	 * @return static
	 */
	public function setEnterer(?FHIRReference $enterer = null): object
	{
		$this->_trackValueSet($this->enterer, $enterer);
		$this->enterer = $enterer;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The logical author of the message - the person or device that decided the
	 * described event should happen. Where there is more than one candidate, pick the
	 * most proximal to the MessageHeader. Can provide other authors in extensions.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getAuthor(): ?FHIRReference
	{
		return $this->author;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The logical author of the message - the person or device that decided the
	 * described event should happen. Where there is more than one candidate, pick the
	 * most proximal to the MessageHeader. Can provide other authors in extensions.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $author
	 * @return static
	 */
	public function setAuthor(?FHIRReference $author = null): object
	{
		$this->_trackValueSet($this->author, $author);
		$this->author = $author;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Allows data conveyed by a message to be addressed to a particular person or
	 * department when routing to a specific application isn't sufficient.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getReceiver(): ?FHIRReference
	{
		return $this->receiver;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Allows data conveyed by a message to be addressed to a particular person or
	 * department when routing to a specific application isn't sufficient.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $receiver
	 * @return static
	 */
	public function setReceiver(?FHIRReference $receiver = null): object
	{
		$this->_trackValueSet($this->receiver, $receiver);
		$this->receiver = $receiver;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The person or organization that accepts overall responsibility for the contents
	 * of the message. The implication is that the message event happened under the
	 * policies of the responsible party.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getResponsible(): ?FHIRReference
	{
		return $this->responsible;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The person or organization that accepts overall responsibility for the contents
	 * of the message. The implication is that the message event happened under the
	 * policies of the responsible party.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $responsible
	 * @return static
	 */
	public function setResponsible(?FHIRReference $responsible = null): object
	{
		$this->_trackValueSet($this->responsible, $responsible);
		$this->responsible = $responsible;
		return $this;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Coded indication of the cause for the event - indicates a reason for the
	 * occurrence of the event that is a focus of this message.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	public function getReason(): ?FHIRCodeableConcept
	{
		return $this->reason;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Coded indication of the cause for the event - indicates a reason for the
	 * occurrence of the event that is a focus of this message.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $reason
	 * @return static
	 */
	public function setReason(?FHIRCodeableConcept $reason = null): object
	{
		$this->_trackValueSet($this->reason, $reason);
		$this->reason = $reason;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The actual data of the message - a reference to the root/focus class of the
	 * event.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	public function getData(): ?array
	{
		return $this->data;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The actual data of the message - a reference to the root/focus class of the
	 * event.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $data
	 * @return static
	 */
	public function addData(?FHIRReference $data = null): object
	{
		$this->_trackValueAdded();
		$this->data[] = $data;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The actual data of the message - a reference to the root/focus class of the
	 * event.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[] $data
	 * @return static
	 */
	public function setData(array $data = []): object
	{
		if ([] !== $this->data) {
			$this->_trackValuesRemoved(count($this->data));
			$this->data = [];
		}
		if ([] === $data) {
			return $this;
		}
		foreach ($data as $v) {
			if ($v instanceof FHIRReference) {
				$this->addData($v);
			} else {
				$this->addData(new FHIRReference($v));
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
		if (null !== ($v = $this->getTimestamp())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_TIMESTAMP] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getEvent())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_EVENT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getResponse())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_RESPONSE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getSource())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_SOURCE] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getDestination())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_DESTINATION, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getEnterer())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_ENTERER] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getAuthor())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_AUTHOR] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getReceiver())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_RECEIVER] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getResponsible())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_RESPONSIBLE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getReason())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_REASON] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getData())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_DATA, $i)] = $fieldErrs;
				}
			}
		}
		if (isset($validationRules[self::FIELD_TIMESTAMP])) {
			$v = $this->getTimestamp();
			foreach ($validationRules[self::FIELD_TIMESTAMP] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_MESSAGE_HEADER,
					self::FIELD_TIMESTAMP,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_TIMESTAMP])) {
						$errs[self::FIELD_TIMESTAMP] = [];
					}
					$errs[self::FIELD_TIMESTAMP][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_EVENT])) {
			$v = $this->getEvent();
			foreach ($validationRules[self::FIELD_EVENT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_MESSAGE_HEADER,
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
		if (isset($validationRules[self::FIELD_RESPONSE])) {
			$v = $this->getResponse();
			foreach ($validationRules[self::FIELD_RESPONSE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_MESSAGE_HEADER,
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
		if (isset($validationRules[self::FIELD_SOURCE])) {
			$v = $this->getSource();
			foreach ($validationRules[self::FIELD_SOURCE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_MESSAGE_HEADER,
					self::FIELD_SOURCE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_SOURCE])) {
						$errs[self::FIELD_SOURCE] = [];
					}
					$errs[self::FIELD_SOURCE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DESTINATION])) {
			$v = $this->getDestination();
			foreach ($validationRules[self::FIELD_DESTINATION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_MESSAGE_HEADER,
					self::FIELD_DESTINATION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DESTINATION])) {
						$errs[self::FIELD_DESTINATION] = [];
					}
					$errs[self::FIELD_DESTINATION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_ENTERER])) {
			$v = $this->getEnterer();
			foreach ($validationRules[self::FIELD_ENTERER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_MESSAGE_HEADER,
					self::FIELD_ENTERER,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_ENTERER])) {
						$errs[self::FIELD_ENTERER] = [];
					}
					$errs[self::FIELD_ENTERER][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_AUTHOR])) {
			$v = $this->getAuthor();
			foreach ($validationRules[self::FIELD_AUTHOR] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_MESSAGE_HEADER,
					self::FIELD_AUTHOR,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_AUTHOR])) {
						$errs[self::FIELD_AUTHOR] = [];
					}
					$errs[self::FIELD_AUTHOR][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_RECEIVER])) {
			$v = $this->getReceiver();
			foreach ($validationRules[self::FIELD_RECEIVER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_MESSAGE_HEADER,
					self::FIELD_RECEIVER,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_RECEIVER])) {
						$errs[self::FIELD_RECEIVER] = [];
					}
					$errs[self::FIELD_RECEIVER][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_RESPONSIBLE])) {
			$v = $this->getResponsible();
			foreach ($validationRules[self::FIELD_RESPONSIBLE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_MESSAGE_HEADER,
					self::FIELD_RESPONSIBLE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_RESPONSIBLE])) {
						$errs[self::FIELD_RESPONSIBLE] = [];
					}
					$errs[self::FIELD_RESPONSIBLE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_REASON])) {
			$v = $this->getReason();
			foreach ($validationRules[self::FIELD_REASON] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_MESSAGE_HEADER,
					self::FIELD_REASON,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_REASON])) {
						$errs[self::FIELD_REASON] = [];
					}
					$errs[self::FIELD_REASON][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DATA])) {
			$v = $this->getData();
			foreach ($validationRules[self::FIELD_DATA] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_MESSAGE_HEADER,
					self::FIELD_DATA,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DATA])) {
						$errs[self::FIELD_DATA] = [];
					}
					$errs[self::FIELD_DATA][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_TEXT])) {
			$v = $this->getText();
			foreach ($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE,
					self::FIELD_TEXT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_TEXT])) {
						$errs[self::FIELD_TEXT] = [];
					}
					$errs[self::FIELD_TEXT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_CONTAINED])) {
			$v = $this->getContained();
			foreach ($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE,
					self::FIELD_CONTAINED,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_CONTAINED])) {
						$errs[self::FIELD_CONTAINED] = [];
					}
					$errs[self::FIELD_CONTAINED][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_EXTENSION])) {
			$v = $this->getExtension();
			foreach ($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE,
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
		if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
			$v = $this->getModifierExtension();
			foreach ($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE,
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
		if (isset($validationRules[self::FIELD_ID])) {
			$v = $this->getId();
			foreach ($validationRules[self::FIELD_ID] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_RESOURCE,
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
		if (isset($validationRules[self::FIELD_META])) {
			$v = $this->getMeta();
			foreach ($validationRules[self::FIELD_META] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_RESOURCE,
					self::FIELD_META,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_META])) {
						$errs[self::FIELD_META] = [];
					}
					$errs[self::FIELD_META][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_IMPLICIT_RULES])) {
			$v = $this->getImplicitRules();
			foreach ($validationRules[self::FIELD_IMPLICIT_RULES] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_RESOURCE,
					self::FIELD_IMPLICIT_RULES,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_IMPLICIT_RULES])) {
						$errs[self::FIELD_IMPLICIT_RULES] = [];
					}
					$errs[self::FIELD_IMPLICIT_RULES][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_LANGUAGE])) {
			$v = $this->getLanguage();
			foreach ($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_RESOURCE,
					self::FIELD_LANGUAGE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_LANGUAGE])) {
						$errs[self::FIELD_LANGUAGE] = [];
					}
					$errs[self::FIELD_LANGUAGE][$rule] = $err;
				}
			}
		}
		return $errs;
	}

	/**
	 * @param null|string|\DOMElement $element
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRMessageHeader $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRMessageHeader
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
						'FHIRMessageHeader::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRMessageHeader::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRMessageHeader(null);
		} elseif (!is_object($type) || !($type instanceof FHIRMessageHeader)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRMessageHeader::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRMessageHeader or null, %s seen.',
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
			if (self::FIELD_TIMESTAMP === $n->nodeName) {
				$type->setTimestamp(FHIRInstant::xmlUnserialize($n));
			} elseif (self::FIELD_EVENT === $n->nodeName) {
				$type->setEvent(FHIRCoding::xmlUnserialize($n));
			} elseif (self::FIELD_RESPONSE === $n->nodeName) {
				$type->setResponse(FHIRMessageHeaderResponse::xmlUnserialize($n));
			} elseif (self::FIELD_SOURCE === $n->nodeName) {
				$type->setSource(FHIRMessageHeaderSource::xmlUnserialize($n));
			} elseif (self::FIELD_DESTINATION === $n->nodeName) {
				$type->addDestination(FHIRMessageHeaderDestination::xmlUnserialize($n));
			} elseif (self::FIELD_ENTERER === $n->nodeName) {
				$type->setEnterer(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_AUTHOR === $n->nodeName) {
				$type->setAuthor(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_RECEIVER === $n->nodeName) {
				$type->setReceiver(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_RESPONSIBLE === $n->nodeName) {
				$type->setResponsible(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_REASON === $n->nodeName) {
				$type->setReason(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_DATA === $n->nodeName) {
				$type->addData(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_TEXT === $n->nodeName) {
				$type->setText(FHIRNarrative::xmlUnserialize($n));
			} elseif (self::FIELD_CONTAINED === $n->nodeName) {
				for ($ni = 0; $ni < $n->childNodes->length; $ni++) {
					$nn = $n->childNodes->item($ni);
					if ($nn instanceof \DOMElement) {
						$type->addContained(PHPFHIRTypeMap::getContainedTypeFromXML($nn));
					}
				}
			} elseif (self::FIELD_EXTENSION === $n->nodeName) {
				$type->addExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
				$type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_ID === $n->nodeName) {
				$type->setId(FHIRId::xmlUnserialize($n));
			} elseif (self::FIELD_META === $n->nodeName) {
				$type->setMeta(FHIRMeta::xmlUnserialize($n));
			} elseif (self::FIELD_IMPLICIT_RULES === $n->nodeName) {
				$type->setImplicitRules(FHIRUri::xmlUnserialize($n));
			} elseif (self::FIELD_LANGUAGE === $n->nodeName) {
				$type->setLanguage(FHIRCode::xmlUnserialize($n));
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_TIMESTAMP);
		if (null !== $n) {
			$pt = $type->getTimestamp();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setTimestamp($n->nodeValue);
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
		$n = $element->attributes->getNamedItem(self::FIELD_IMPLICIT_RULES);
		if (null !== $n) {
			$pt = $type->getImplicitRules();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setImplicitRules($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_LANGUAGE);
		if (null !== $n) {
			$pt = $type->getLanguage();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setLanguage($n->nodeValue);
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
		if (null !== ($v = $this->getTimestamp())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_TIMESTAMP);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getEvent())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_EVENT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getResponse())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_RESPONSE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getSource())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_SOURCE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getDestination())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_DESTINATION);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if (null !== ($v = $this->getEnterer())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_ENTERER);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getAuthor())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_AUTHOR);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getReceiver())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_RECEIVER);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getResponsible())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_RESPONSIBLE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getReason())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_REASON);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getData())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_DATA);
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
		if (null !== ($v = $this->getTimestamp())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_TIMESTAMP} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRInstant::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_TIMESTAMP_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getEvent())) {
			$out->{self::FIELD_EVENT} = $v;
		}
		if (null !== ($v = $this->getResponse())) {
			$out->{self::FIELD_RESPONSE} = $v;
		}
		if (null !== ($v = $this->getSource())) {
			$out->{self::FIELD_SOURCE} = $v;
		}
		if ([] !== ($vs = $this->getDestination())) {
			$out->{self::FIELD_DESTINATION} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_DESTINATION}[] = $v;
			}
		}
		if (null !== ($v = $this->getEnterer())) {
			$out->{self::FIELD_ENTERER} = $v;
		}
		if (null !== ($v = $this->getAuthor())) {
			$out->{self::FIELD_AUTHOR} = $v;
		}
		if (null !== ($v = $this->getReceiver())) {
			$out->{self::FIELD_RECEIVER} = $v;
		}
		if (null !== ($v = $this->getResponsible())) {
			$out->{self::FIELD_RESPONSIBLE} = $v;
		}
		if (null !== ($v = $this->getReason())) {
			$out->{self::FIELD_REASON} = $v;
		}
		if ([] !== ($vs = $this->getData())) {
			$out->{self::FIELD_DATA} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_DATA}[] = $v;
			}
		}

		$out->{PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE} = $this->_getResourceType();

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
