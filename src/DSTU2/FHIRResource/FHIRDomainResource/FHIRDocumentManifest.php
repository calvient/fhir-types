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

use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDocumentManifest\FHIRDocumentManifestContent;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDocumentManifest\FHIRDocumentManifestRelated;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRExtension;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRId;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMeta;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRNarrative;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri;
use Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource;
use Calvient\FhirTypes\DSTU2\PHPFHIRConstants;
use Calvient\FhirTypes\DSTU2\PHPFHIRContainedTypeInterface;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeInterface;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeMap;

/**
 * A manifest that defines a set of documents.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRDocumentManifest
 * @package \Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIRDocumentManifest extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DOCUMENT_MANIFEST;
	const FIELD_MASTER_IDENTIFIER = 'masterIdentifier';
	const FIELD_IDENTIFIER = 'identifier';
	const FIELD_SUBJECT = 'subject';
	const FIELD_RECIPIENT = 'recipient';
	const FIELD_TYPE = 'type';
	const FIELD_AUTHOR = 'author';
	const FIELD_CREATED = 'created';
	const FIELD_CREATED_EXT = '_created';
	const FIELD_SOURCE = 'source';
	const FIELD_SOURCE_EXT = '_source';
	const FIELD_STATUS = 'status';
	const FIELD_STATUS_EXT = '_status';
	const FIELD_DESCRIPTION = 'description';
	const FIELD_DESCRIPTION_EXT = '_description';
	const FIELD_CONTENT = 'content';
	const FIELD_RELATED = 'related';

	/** @var string */
	private $_xmlns = '';

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A single identifier that uniquely identifies this manifest. Principally used to
	 * refer to the manifest in non-FHIR contexts.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier
	 */
	protected ?FHIRIdentifier $masterIdentifier = null;

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Other identifiers associated with the document manifest, including version
	 * independent identifiers.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier[]
	 */
	protected ?array $identifier = [];

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Who or what the set of documents is about. The documents can be about a person,
	 * (patient or healthcare practitioner), a device (i.e. machine) or even a group of
	 * subjects (such as a document about a herd of farm animals, or a set of patients
	 * that share a common exposure). If the documents cross more than one subject,
	 * then more than one subject is allowed here (unusual use case).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $subject = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A patient, practitioner, or organization for which this set of documents is
	 * intended.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	protected ?array $recipient = [];

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies the kind of this set of documents (e.g. Patient Summary, Discharge
	 * Summary, Prescription, etc.). The type of a set of documents may be the same as
	 * one of the documents in it - especially if there is only one - but it may be
	 * wider.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	protected ?FHIRCodeableConcept $type = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies who is responsible for creating the manifest, and adding documents to
	 * it.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	protected ?array $author = [];

	/**
	 * A date, date-time or partial date (e.g. just year or year + month). If hours and
	 * minutes are specified, a time zone SHALL be populated. The format is a union of
	 * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
	 * due to schema type constraints but may be zero-filled and may be ignored. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * When the document manifest was created for submission to the server (not
	 * necessarily the same thing as the actual resource last modified time, since it
	 * may be modified, replicated, etc.).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime
	 */
	protected ?FHIRDateTime $created = null;

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Identifies the source system, application, or software that produced the
	 * document manifest.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri
	 */
	protected ?FHIRUri $source = null;

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The status of this document manifest.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode
	 */
	protected ?FHIRCode $status = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Human-readable description of the source document. This is sometimes known as
	 * the "title".
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $description = null;

	/**
	 * A manifest that defines a set of documents.
	 *
	 * The list of Documents included in the manifest.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDocumentManifest\FHIRDocumentManifestContent[]
	 */
	protected ?array $content = [];

	/**
	 * A manifest that defines a set of documents.
	 *
	 * Related identifiers or resources associated with the DocumentManifest.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDocumentManifest\FHIRDocumentManifestRelated[]
	 */
	protected ?array $related = [];

	/**
	 * Validation map for fields in type DocumentManifest
	 * @var array
	 */
	private static array $_validationRules = [
		self::FIELD_CONTENT => [
			PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
		],
	];

	/**
	 * FHIRDocumentManifest Constructor
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
					'FHIRDocumentManifest::_construct - $data expected to be null or array, %s seen',
					gettype($data),
				),
			);
		}
		parent::__construct($data);
		if (isset($data[self::FIELD_MASTER_IDENTIFIER])) {
			if ($data[self::FIELD_MASTER_IDENTIFIER] instanceof FHIRIdentifier) {
				$this->setMasterIdentifier($data[self::FIELD_MASTER_IDENTIFIER]);
			} else {
				$this->setMasterIdentifier(
					new FHIRIdentifier($data[self::FIELD_MASTER_IDENTIFIER]),
				);
			}
		}
		if (isset($data[self::FIELD_IDENTIFIER])) {
			if (is_array($data[self::FIELD_IDENTIFIER])) {
				foreach ($data[self::FIELD_IDENTIFIER] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRIdentifier) {
						$this->addIdentifier($v);
					} else {
						$this->addIdentifier(new FHIRIdentifier($v));
					}
				}
			} elseif ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
				$this->addIdentifier($data[self::FIELD_IDENTIFIER]);
			} else {
				$this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
			}
		}
		if (isset($data[self::FIELD_SUBJECT])) {
			if ($data[self::FIELD_SUBJECT] instanceof FHIRReference) {
				$this->setSubject($data[self::FIELD_SUBJECT]);
			} else {
				$this->setSubject(new FHIRReference($data[self::FIELD_SUBJECT]));
			}
		}
		if (isset($data[self::FIELD_RECIPIENT])) {
			if (is_array($data[self::FIELD_RECIPIENT])) {
				foreach ($data[self::FIELD_RECIPIENT] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRReference) {
						$this->addRecipient($v);
					} else {
						$this->addRecipient(new FHIRReference($v));
					}
				}
			} elseif ($data[self::FIELD_RECIPIENT] instanceof FHIRReference) {
				$this->addRecipient($data[self::FIELD_RECIPIENT]);
			} else {
				$this->addRecipient(new FHIRReference($data[self::FIELD_RECIPIENT]));
			}
		}
		if (isset($data[self::FIELD_TYPE])) {
			if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
				$this->setType($data[self::FIELD_TYPE]);
			} else {
				$this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
			}
		}
		if (isset($data[self::FIELD_AUTHOR])) {
			if (is_array($data[self::FIELD_AUTHOR])) {
				foreach ($data[self::FIELD_AUTHOR] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRReference) {
						$this->addAuthor($v);
					} else {
						$this->addAuthor(new FHIRReference($v));
					}
				}
			} elseif ($data[self::FIELD_AUTHOR] instanceof FHIRReference) {
				$this->addAuthor($data[self::FIELD_AUTHOR]);
			} else {
				$this->addAuthor(new FHIRReference($data[self::FIELD_AUTHOR]));
			}
		}
		if (isset($data[self::FIELD_CREATED]) || isset($data[self::FIELD_CREATED_EXT])) {
			$value = $data[self::FIELD_CREATED] ?? null;
			$ext =
				isset($data[self::FIELD_CREATED_EXT]) && is_array($data[self::FIELD_CREATED_EXT])
					? $data[self::FIELD_CREATED_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRDateTime) {
					$this->setCreated($value);
				} elseif (is_array($value)) {
					$this->setCreated(new FHIRDateTime(array_merge($ext, $value)));
				} else {
					$this->setCreated(
						new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setCreated(new FHIRDateTime($ext));
			}
		}
		if (isset($data[self::FIELD_SOURCE]) || isset($data[self::FIELD_SOURCE_EXT])) {
			$value = $data[self::FIELD_SOURCE] ?? null;
			$ext =
				isset($data[self::FIELD_SOURCE_EXT]) && is_array($data[self::FIELD_SOURCE_EXT])
					? $data[self::FIELD_SOURCE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRUri) {
					$this->setSource($value);
				} elseif (is_array($value)) {
					$this->setSource(new FHIRUri(array_merge($ext, $value)));
				} else {
					$this->setSource(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setSource(new FHIRUri($ext));
			}
		}
		if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
			$value = $data[self::FIELD_STATUS] ?? null;
			$ext =
				isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])
					? $data[self::FIELD_STATUS_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRCode) {
					$this->setStatus($value);
				} elseif (is_array($value)) {
					$this->setStatus(new FHIRCode(array_merge($ext, $value)));
				} else {
					$this->setStatus(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setStatus(new FHIRCode($ext));
			}
		}
		if (isset($data[self::FIELD_DESCRIPTION]) || isset($data[self::FIELD_DESCRIPTION_EXT])) {
			$value = $data[self::FIELD_DESCRIPTION] ?? null;
			$ext =
				isset($data[self::FIELD_DESCRIPTION_EXT]) &&
				is_array($data[self::FIELD_DESCRIPTION_EXT])
					? $data[self::FIELD_DESCRIPTION_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->setDescription($value);
				} elseif (is_array($value)) {
					$this->setDescription(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->setDescription(
						new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setDescription(new FHIRString($ext));
			}
		}
		if (isset($data[self::FIELD_CONTENT])) {
			if (is_array($data[self::FIELD_CONTENT])) {
				foreach ($data[self::FIELD_CONTENT] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRDocumentManifestContent) {
						$this->addContent($v);
					} else {
						$this->addContent(new FHIRDocumentManifestContent($v));
					}
				}
			} elseif ($data[self::FIELD_CONTENT] instanceof FHIRDocumentManifestContent) {
				$this->addContent($data[self::FIELD_CONTENT]);
			} else {
				$this->addContent(new FHIRDocumentManifestContent($data[self::FIELD_CONTENT]));
			}
		}
		if (isset($data[self::FIELD_RELATED])) {
			if (is_array($data[self::FIELD_RELATED])) {
				foreach ($data[self::FIELD_RELATED] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRDocumentManifestRelated) {
						$this->addRelated($v);
					} else {
						$this->addRelated(new FHIRDocumentManifestRelated($v));
					}
				}
			} elseif ($data[self::FIELD_RELATED] instanceof FHIRDocumentManifestRelated) {
				$this->addRelated($data[self::FIELD_RELATED]);
			} else {
				$this->addRelated(new FHIRDocumentManifestRelated($data[self::FIELD_RELATED]));
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
		return "<DocumentManifest{$xmlns}></DocumentManifest>";
	}
	/**
	 * @return string
	 */
	public function _getResourceType(): string
	{
		return static::FHIR_TYPE_NAME;
	}

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A single identifier that uniquely identifies this manifest. Principally used to
	 * refer to the manifest in non-FHIR contexts.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier
	 */
	public function getMasterIdentifier(): ?FHIRIdentifier
	{
		return $this->masterIdentifier;
	}

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A single identifier that uniquely identifies this manifest. Principally used to
	 * refer to the manifest in non-FHIR contexts.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier $masterIdentifier
	 * @return static
	 */
	public function setMasterIdentifier(?FHIRIdentifier $masterIdentifier = null): object
	{
		$this->_trackValueSet($this->masterIdentifier, $masterIdentifier);
		$this->masterIdentifier = $masterIdentifier;
		return $this;
	}

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Other identifiers associated with the document manifest, including version
	 * independent identifiers.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier[]
	 */
	public function getIdentifier(): ?array
	{
		return $this->identifier;
	}

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Other identifiers associated with the document manifest, including version
	 * independent identifiers.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier $identifier
	 * @return static
	 */
	public function addIdentifier(?FHIRIdentifier $identifier = null): object
	{
		$this->_trackValueAdded();
		$this->identifier[] = $identifier;
		return $this;
	}

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Other identifiers associated with the document manifest, including version
	 * independent identifiers.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier[] $identifier
	 * @return static
	 */
	public function setIdentifier(array $identifier = []): object
	{
		if ([] !== $this->identifier) {
			$this->_trackValuesRemoved(count($this->identifier));
			$this->identifier = [];
		}
		if ([] === $identifier) {
			return $this;
		}
		foreach ($identifier as $v) {
			if ($v instanceof FHIRIdentifier) {
				$this->addIdentifier($v);
			} else {
				$this->addIdentifier(new FHIRIdentifier($v));
			}
		}
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Who or what the set of documents is about. The documents can be about a person,
	 * (patient or healthcare practitioner), a device (i.e. machine) or even a group of
	 * subjects (such as a document about a herd of farm animals, or a set of patients
	 * that share a common exposure). If the documents cross more than one subject,
	 * then more than one subject is allowed here (unusual use case).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getSubject(): ?FHIRReference
	{
		return $this->subject;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Who or what the set of documents is about. The documents can be about a person,
	 * (patient or healthcare practitioner), a device (i.e. machine) or even a group of
	 * subjects (such as a document about a herd of farm animals, or a set of patients
	 * that share a common exposure). If the documents cross more than one subject,
	 * then more than one subject is allowed here (unusual use case).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $subject
	 * @return static
	 */
	public function setSubject(?FHIRReference $subject = null): object
	{
		$this->_trackValueSet($this->subject, $subject);
		$this->subject = $subject;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A patient, practitioner, or organization for which this set of documents is
	 * intended.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	public function getRecipient(): ?array
	{
		return $this->recipient;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A patient, practitioner, or organization for which this set of documents is
	 * intended.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $recipient
	 * @return static
	 */
	public function addRecipient(?FHIRReference $recipient = null): object
	{
		$this->_trackValueAdded();
		$this->recipient[] = $recipient;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A patient, practitioner, or organization for which this set of documents is
	 * intended.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[] $recipient
	 * @return static
	 */
	public function setRecipient(array $recipient = []): object
	{
		if ([] !== $this->recipient) {
			$this->_trackValuesRemoved(count($this->recipient));
			$this->recipient = [];
		}
		if ([] === $recipient) {
			return $this;
		}
		foreach ($recipient as $v) {
			if ($v instanceof FHIRReference) {
				$this->addRecipient($v);
			} else {
				$this->addRecipient(new FHIRReference($v));
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
	 * Specifies the kind of this set of documents (e.g. Patient Summary, Discharge
	 * Summary, Prescription, etc.). The type of a set of documents may be the same as
	 * one of the documents in it - especially if there is only one - but it may be
	 * wider.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	public function getType(): ?FHIRCodeableConcept
	{
		return $this->type;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies the kind of this set of documents (e.g. Patient Summary, Discharge
	 * Summary, Prescription, etc.). The type of a set of documents may be the same as
	 * one of the documents in it - especially if there is only one - but it may be
	 * wider.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $type
	 * @return static
	 */
	public function setType(?FHIRCodeableConcept $type = null): object
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
	 * Identifies who is responsible for creating the manifest, and adding documents to
	 * it.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	public function getAuthor(): ?array
	{
		return $this->author;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies who is responsible for creating the manifest, and adding documents to
	 * it.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $author
	 * @return static
	 */
	public function addAuthor(?FHIRReference $author = null): object
	{
		$this->_trackValueAdded();
		$this->author[] = $author;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies who is responsible for creating the manifest, and adding documents to
	 * it.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[] $author
	 * @return static
	 */
	public function setAuthor(array $author = []): object
	{
		if ([] !== $this->author) {
			$this->_trackValuesRemoved(count($this->author));
			$this->author = [];
		}
		if ([] === $author) {
			return $this;
		}
		foreach ($author as $v) {
			if ($v instanceof FHIRReference) {
				$this->addAuthor($v);
			} else {
				$this->addAuthor(new FHIRReference($v));
			}
		}
		return $this;
	}

	/**
	 * A date, date-time or partial date (e.g. just year or year + month). If hours and
	 * minutes are specified, a time zone SHALL be populated. The format is a union of
	 * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
	 * due to schema type constraints but may be zero-filled and may be ignored. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * When the document manifest was created for submission to the server (not
	 * necessarily the same thing as the actual resource last modified time, since it
	 * may be modified, replicated, etc.).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime
	 */
	public function getCreated(): ?FHIRDateTime
	{
		return $this->created;
	}

	/**
	 * A date, date-time or partial date (e.g. just year or year + month). If hours and
	 * minutes are specified, a time zone SHALL be populated. The format is a union of
	 * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
	 * due to schema type constraints but may be zero-filled and may be ignored. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * When the document manifest was created for submission to the server (not
	 * necessarily the same thing as the actual resource last modified time, since it
	 * may be modified, replicated, etc.).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime $created
	 * @return static
	 */
	public function setCreated($created = null): object
	{
		if (null !== $created && !($created instanceof FHIRDateTime)) {
			$created = new FHIRDateTime($created);
		}
		$this->_trackValueSet($this->created, $created);
		$this->created = $created;
		return $this;
	}

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Identifies the source system, application, or software that produced the
	 * document manifest.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri
	 */
	public function getSource(): ?FHIRUri
	{
		return $this->source;
	}

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Identifies the source system, application, or software that produced the
	 * document manifest.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri $source
	 * @return static
	 */
	public function setSource($source = null): object
	{
		if (null !== $source && !($source instanceof FHIRUri)) {
			$source = new FHIRUri($source);
		}
		$this->_trackValueSet($this->source, $source);
		$this->source = $source;
		return $this;
	}

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The status of this document manifest.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode
	 */
	public function getStatus(): ?FHIRCode
	{
		return $this->status;
	}

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The status of this document manifest.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode $status
	 * @return static
	 */
	public function setStatus($status = null): object
	{
		if (null !== $status && !($status instanceof FHIRCode)) {
			$status = new FHIRCode($status);
		}
		$this->_trackValueSet($this->status, $status);
		$this->status = $status;
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Human-readable description of the source document. This is sometimes known as
	 * the "title".
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	public function getDescription(): ?FHIRString
	{
		return $this->description;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Human-readable description of the source document. This is sometimes known as
	 * the "title".
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString $description
	 * @return static
	 */
	public function setDescription($description = null): object
	{
		if (null !== $description && !($description instanceof FHIRString)) {
			$description = new FHIRString($description);
		}
		$this->_trackValueSet($this->description, $description);
		$this->description = $description;
		return $this;
	}

	/**
	 * A manifest that defines a set of documents.
	 *
	 * The list of Documents included in the manifest.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDocumentManifest\FHIRDocumentManifestContent[]
	 */
	public function getContent(): ?array
	{
		return $this->content;
	}

	/**
	 * A manifest that defines a set of documents.
	 *
	 * The list of Documents included in the manifest.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDocumentManifest\FHIRDocumentManifestContent $content
	 * @return static
	 */
	public function addContent(?FHIRDocumentManifestContent $content = null): object
	{
		$this->_trackValueAdded();
		$this->content[] = $content;
		return $this;
	}

	/**
	 * A manifest that defines a set of documents.
	 *
	 * The list of Documents included in the manifest.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDocumentManifest\FHIRDocumentManifestContent[] $content
	 * @return static
	 */
	public function setContent(array $content = []): object
	{
		if ([] !== $this->content) {
			$this->_trackValuesRemoved(count($this->content));
			$this->content = [];
		}
		if ([] === $content) {
			return $this;
		}
		foreach ($content as $v) {
			if ($v instanceof FHIRDocumentManifestContent) {
				$this->addContent($v);
			} else {
				$this->addContent(new FHIRDocumentManifestContent($v));
			}
		}
		return $this;
	}

	/**
	 * A manifest that defines a set of documents.
	 *
	 * Related identifiers or resources associated with the DocumentManifest.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDocumentManifest\FHIRDocumentManifestRelated[]
	 */
	public function getRelated(): ?array
	{
		return $this->related;
	}

	/**
	 * A manifest that defines a set of documents.
	 *
	 * Related identifiers or resources associated with the DocumentManifest.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDocumentManifest\FHIRDocumentManifestRelated $related
	 * @return static
	 */
	public function addRelated(?FHIRDocumentManifestRelated $related = null): object
	{
		$this->_trackValueAdded();
		$this->related[] = $related;
		return $this;
	}

	/**
	 * A manifest that defines a set of documents.
	 *
	 * Related identifiers or resources associated with the DocumentManifest.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDocumentManifest\FHIRDocumentManifestRelated[] $related
	 * @return static
	 */
	public function setRelated(array $related = []): object
	{
		if ([] !== $this->related) {
			$this->_trackValuesRemoved(count($this->related));
			$this->related = [];
		}
		if ([] === $related) {
			return $this;
		}
		foreach ($related as $v) {
			if ($v instanceof FHIRDocumentManifestRelated) {
				$this->addRelated($v);
			} else {
				$this->addRelated(new FHIRDocumentManifestRelated($v));
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
		if (null !== ($v = $this->getMasterIdentifier())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MASTER_IDENTIFIER] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getIdentifier())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getSubject())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_SUBJECT] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getRecipient())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_RECIPIENT, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getType())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_TYPE] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getAuthor())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_AUTHOR, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getCreated())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_CREATED] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getSource())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_SOURCE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getStatus())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_STATUS] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDescription())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DESCRIPTION] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getContent())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_CONTENT, $i)] = $fieldErrs;
				}
			}
		}
		if ([] !== ($vs = $this->getRelated())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_RELATED, $i)] = $fieldErrs;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MASTER_IDENTIFIER])) {
			$v = $this->getMasterIdentifier();
			foreach ($validationRules[self::FIELD_MASTER_IDENTIFIER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DOCUMENT_MANIFEST,
					self::FIELD_MASTER_IDENTIFIER,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MASTER_IDENTIFIER])) {
						$errs[self::FIELD_MASTER_IDENTIFIER] = [];
					}
					$errs[self::FIELD_MASTER_IDENTIFIER][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_IDENTIFIER])) {
			$v = $this->getIdentifier();
			foreach ($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DOCUMENT_MANIFEST,
					self::FIELD_IDENTIFIER,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_IDENTIFIER])) {
						$errs[self::FIELD_IDENTIFIER] = [];
					}
					$errs[self::FIELD_IDENTIFIER][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_SUBJECT])) {
			$v = $this->getSubject();
			foreach ($validationRules[self::FIELD_SUBJECT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DOCUMENT_MANIFEST,
					self::FIELD_SUBJECT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_SUBJECT])) {
						$errs[self::FIELD_SUBJECT] = [];
					}
					$errs[self::FIELD_SUBJECT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_RECIPIENT])) {
			$v = $this->getRecipient();
			foreach ($validationRules[self::FIELD_RECIPIENT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DOCUMENT_MANIFEST,
					self::FIELD_RECIPIENT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_RECIPIENT])) {
						$errs[self::FIELD_RECIPIENT] = [];
					}
					$errs[self::FIELD_RECIPIENT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_TYPE])) {
			$v = $this->getType();
			foreach ($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DOCUMENT_MANIFEST,
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
		if (isset($validationRules[self::FIELD_AUTHOR])) {
			$v = $this->getAuthor();
			foreach ($validationRules[self::FIELD_AUTHOR] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DOCUMENT_MANIFEST,
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
		if (isset($validationRules[self::FIELD_CREATED])) {
			$v = $this->getCreated();
			foreach ($validationRules[self::FIELD_CREATED] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DOCUMENT_MANIFEST,
					self::FIELD_CREATED,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_CREATED])) {
						$errs[self::FIELD_CREATED] = [];
					}
					$errs[self::FIELD_CREATED][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_SOURCE])) {
			$v = $this->getSource();
			foreach ($validationRules[self::FIELD_SOURCE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DOCUMENT_MANIFEST,
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
		if (isset($validationRules[self::FIELD_STATUS])) {
			$v = $this->getStatus();
			foreach ($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DOCUMENT_MANIFEST,
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
		if (isset($validationRules[self::FIELD_DESCRIPTION])) {
			$v = $this->getDescription();
			foreach ($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DOCUMENT_MANIFEST,
					self::FIELD_DESCRIPTION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DESCRIPTION])) {
						$errs[self::FIELD_DESCRIPTION] = [];
					}
					$errs[self::FIELD_DESCRIPTION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_CONTENT])) {
			$v = $this->getContent();
			foreach ($validationRules[self::FIELD_CONTENT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DOCUMENT_MANIFEST,
					self::FIELD_CONTENT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_CONTENT])) {
						$errs[self::FIELD_CONTENT] = [];
					}
					$errs[self::FIELD_CONTENT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_RELATED])) {
			$v = $this->getRelated();
			foreach ($validationRules[self::FIELD_RELATED] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DOCUMENT_MANIFEST,
					self::FIELD_RELATED,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_RELATED])) {
						$errs[self::FIELD_RELATED] = [];
					}
					$errs[self::FIELD_RELATED][$rule] = $err;
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRDocumentManifest $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRDocumentManifest
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
						'FHIRDocumentManifest::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRDocumentManifest::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRDocumentManifest(null);
		} elseif (!is_object($type) || !($type instanceof FHIRDocumentManifest)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRDocumentManifest::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRDocumentManifest or null, %s seen.',
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
			if (self::FIELD_MASTER_IDENTIFIER === $n->nodeName) {
				$type->setMasterIdentifier(FHIRIdentifier::xmlUnserialize($n));
			} elseif (self::FIELD_IDENTIFIER === $n->nodeName) {
				$type->addIdentifier(FHIRIdentifier::xmlUnserialize($n));
			} elseif (self::FIELD_SUBJECT === $n->nodeName) {
				$type->setSubject(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_RECIPIENT === $n->nodeName) {
				$type->addRecipient(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_TYPE === $n->nodeName) {
				$type->setType(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_AUTHOR === $n->nodeName) {
				$type->addAuthor(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_CREATED === $n->nodeName) {
				$type->setCreated(FHIRDateTime::xmlUnserialize($n));
			} elseif (self::FIELD_SOURCE === $n->nodeName) {
				$type->setSource(FHIRUri::xmlUnserialize($n));
			} elseif (self::FIELD_STATUS === $n->nodeName) {
				$type->setStatus(FHIRCode::xmlUnserialize($n));
			} elseif (self::FIELD_DESCRIPTION === $n->nodeName) {
				$type->setDescription(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_CONTENT === $n->nodeName) {
				$type->addContent(FHIRDocumentManifestContent::xmlUnserialize($n));
			} elseif (self::FIELD_RELATED === $n->nodeName) {
				$type->addRelated(FHIRDocumentManifestRelated::xmlUnserialize($n));
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
		$n = $element->attributes->getNamedItem(self::FIELD_CREATED);
		if (null !== $n) {
			$pt = $type->getCreated();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setCreated($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_SOURCE);
		if (null !== $n) {
			$pt = $type->getSource();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setSource($n->nodeValue);
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
		$n = $element->attributes->getNamedItem(self::FIELD_DESCRIPTION);
		if (null !== $n) {
			$pt = $type->getDescription();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setDescription($n->nodeValue);
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
		if (null !== ($v = $this->getMasterIdentifier())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MASTER_IDENTIFIER);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getIdentifier())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_IDENTIFIER);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if (null !== ($v = $this->getSubject())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_SUBJECT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getRecipient())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_RECIPIENT);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if (null !== ($v = $this->getType())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_TYPE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getAuthor())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_AUTHOR);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if (null !== ($v = $this->getCreated())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_CREATED);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getSource())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_SOURCE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getStatus())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_STATUS);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDescription())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DESCRIPTION);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getContent())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_CONTENT);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if ([] !== ($vs = $this->getRelated())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_RELATED);
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
		if (null !== ($v = $this->getMasterIdentifier())) {
			$out->{self::FIELD_MASTER_IDENTIFIER} = $v;
		}
		if ([] !== ($vs = $this->getIdentifier())) {
			$out->{self::FIELD_IDENTIFIER} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_IDENTIFIER}[] = $v;
			}
		}
		if (null !== ($v = $this->getSubject())) {
			$out->{self::FIELD_SUBJECT} = $v;
		}
		if ([] !== ($vs = $this->getRecipient())) {
			$out->{self::FIELD_RECIPIENT} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_RECIPIENT}[] = $v;
			}
		}
		if (null !== ($v = $this->getType())) {
			$out->{self::FIELD_TYPE} = $v;
		}
		if ([] !== ($vs = $this->getAuthor())) {
			$out->{self::FIELD_AUTHOR} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_AUTHOR}[] = $v;
			}
		}
		if (null !== ($v = $this->getCreated())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_CREATED} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRDateTime::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_CREATED_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getSource())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_SOURCE} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRUri::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_SOURCE_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getStatus())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_STATUS} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRCode::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_STATUS_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getDescription())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_DESCRIPTION} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRString::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_DESCRIPTION_EXT} = $ext;
			}
		}
		if ([] !== ($vs = $this->getContent())) {
			$out->{self::FIELD_CONTENT} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_CONTENT}[] = $v;
			}
		}
		if ([] !== ($vs = $this->getRelated())) {
			$out->{self::FIELD_RELATED} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_RELATED}[] = $v;
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
