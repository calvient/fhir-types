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

use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDataElement\FHIRDataElementContact;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDataElement\FHIRDataElementMapping;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDataElementStringency;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRElementDefinition;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRExtension;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRId;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMeta;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRNarrative;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri;
use Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource;
use Calvient\FhirTypes\DSTU2\PHPFHIRConstants;
use Calvient\FhirTypes\DSTU2\PHPFHIRContainedTypeInterface;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeInterface;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeMap;

/**
 * The formal description of a single piece of information that can be gathered and
 * reported.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRDataElement
 * @package \Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIRDataElement extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DATA_ELEMENT;
	const FIELD_URL = 'url';
	const FIELD_URL_EXT = '_url';
	const FIELD_IDENTIFIER = 'identifier';
	const FIELD_VERSION = 'version';
	const FIELD_VERSION_EXT = '_version';
	const FIELD_NAME = 'name';
	const FIELD_NAME_EXT = '_name';
	const FIELD_STATUS = 'status';
	const FIELD_STATUS_EXT = '_status';
	const FIELD_EXPERIMENTAL = 'experimental';
	const FIELD_EXPERIMENTAL_EXT = '_experimental';
	const FIELD_PUBLISHER = 'publisher';
	const FIELD_PUBLISHER_EXT = '_publisher';
	const FIELD_CONTACT = 'contact';
	const FIELD_DATE = 'date';
	const FIELD_DATE_EXT = '_date';
	const FIELD_USE_CONTEXT = 'useContext';
	const FIELD_COPYRIGHT = 'copyright';
	const FIELD_COPYRIGHT_EXT = '_copyright';
	const FIELD_STRINGENCY = 'stringency';
	const FIELD_STRINGENCY_EXT = '_stringency';
	const FIELD_MAPPING = 'mapping';
	const FIELD_ELEMENT = 'element';

	/** @var string */
	private $_xmlns = '';

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * An absolute URL that is used to identify this data element when it is referenced
	 * in a specification, model, design or an instance. This SHALL be a URL, SHOULD be
	 * globally unique, and SHOULD be an address at which this data element is (or will
	 * be) published.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri
	 */
	protected ?FHIRUri $url = null;

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Formal identifier that is used to identify this data element when it is
	 * represented in other formats, or referenced in a specification, model, design or
	 * an instance.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier[]
	 */
	protected ?array $identifier = [];

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The identifier that is used to identify this version of the data element when it
	 * is referenced in a StructureDefinition, Questionnaire or instance. This is an
	 * arbitrary value managed by the definition author manually.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $version = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The term used by humans to refer to the data element. Should ideally be unique
	 * within the context in which the data element is expected to be used.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $name = null;

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The status of the data element.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode
	 */
	protected ?FHIRCode $status = null;

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A flag to indicate that this search data element definition is authored for
	 * testing purposes (or education/evaluation/marketing), and is not intended to be
	 * used for genuine usage.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
	 */
	protected ?FHIRBoolean $experimental = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The name of the individual or organization that published the data element.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $publisher = null;

	/**
	 * The formal description of a single piece of information that can be gathered and
	 * reported.
	 *
	 * Contacts to assist a user in finding and communicating with the publisher.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDataElement\FHIRDataElementContact[]
	 */
	protected ?array $contact = [];

	/**
	 * A date, date-time or partial date (e.g. just year or year + month). If hours and
	 * minutes are specified, a time zone SHALL be populated. The format is a union of
	 * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
	 * due to schema type constraints but may be zero-filled and may be ignored. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The date this version of the data element was published. The date must change
	 * when the business version changes, if it does, and it must change if the status
	 * code changes. In addition, it should change when the substantive content of the
	 * data element changes.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime
	 */
	protected ?FHIRDateTime $date = null;

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The content was developed with a focus and intent of supporting the contexts
	 * that are listed. These terms may be used to assist with indexing and searching
	 * of data element definitions.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept[]
	 */
	protected ?array $useContext = [];

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A copyright statement relating to the definition of the data element. Copyright
	 * statements are generally legal restrictions on the use and publishing of the
	 * details of the definition of the data element.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $copyright = null;

	/**
	 * Indicates the degree of precision of the data element definition.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Identifies how precise the data element is in its definition.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDataElementStringency
	 */
	protected ?FHIRDataElementStringency $stringency = null;

	/**
	 * The formal description of a single piece of information that can be gathered and
	 * reported.
	 *
	 * Identifies a specification (other than a terminology) that the elements which
	 * make up the DataElement have some correspondence with.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDataElement\FHIRDataElementMapping[]
	 */
	protected ?array $mapping = [];

	/**
	 * Captures constraints on each element within the resource, profile, or extension.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Defines the structure, type, allowed values and other constraining
	 * characteristics of the data element.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRElementDefinition[]
	 */
	protected ?array $element = [];

	/**
	 * Validation map for fields in type DataElement
	 * @var array
	 */
	private static array $_validationRules = [
		self::FIELD_ELEMENT => [
			PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
		],
	];

	/**
	 * FHIRDataElement Constructor
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
					'FHIRDataElement::_construct - $data expected to be null or array, %s seen',
					gettype($data),
				),
			);
		}
		parent::__construct($data);
		if (isset($data[self::FIELD_URL]) || isset($data[self::FIELD_URL_EXT])) {
			$value = $data[self::FIELD_URL] ?? null;
			$ext =
				isset($data[self::FIELD_URL_EXT]) && is_array($data[self::FIELD_URL_EXT])
					? $data[self::FIELD_URL_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRUri) {
					$this->setUrl($value);
				} elseif (is_array($value)) {
					$this->setUrl(new FHIRUri(array_merge($ext, $value)));
				} else {
					$this->setUrl(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setUrl(new FHIRUri($ext));
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
		if (isset($data[self::FIELD_VERSION]) || isset($data[self::FIELD_VERSION_EXT])) {
			$value = $data[self::FIELD_VERSION] ?? null;
			$ext =
				isset($data[self::FIELD_VERSION_EXT]) && is_array($data[self::FIELD_VERSION_EXT])
					? $data[self::FIELD_VERSION_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->setVersion($value);
				} elseif (is_array($value)) {
					$this->setVersion(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->setVersion(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setVersion(new FHIRString($ext));
			}
		}
		if (isset($data[self::FIELD_NAME]) || isset($data[self::FIELD_NAME_EXT])) {
			$value = $data[self::FIELD_NAME] ?? null;
			$ext =
				isset($data[self::FIELD_NAME_EXT]) && is_array($data[self::FIELD_NAME_EXT])
					? $data[self::FIELD_NAME_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->setName($value);
				} elseif (is_array($value)) {
					$this->setName(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->setName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setName(new FHIRString($ext));
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
		if (isset($data[self::FIELD_EXPERIMENTAL]) || isset($data[self::FIELD_EXPERIMENTAL_EXT])) {
			$value = $data[self::FIELD_EXPERIMENTAL] ?? null;
			$ext =
				isset($data[self::FIELD_EXPERIMENTAL_EXT]) &&
				is_array($data[self::FIELD_EXPERIMENTAL_EXT])
					? $data[self::FIELD_EXPERIMENTAL_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRBoolean) {
					$this->setExperimental($value);
				} elseif (is_array($value)) {
					$this->setExperimental(new FHIRBoolean(array_merge($ext, $value)));
				} else {
					$this->setExperimental(
						new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setExperimental(new FHIRBoolean($ext));
			}
		}
		if (isset($data[self::FIELD_PUBLISHER]) || isset($data[self::FIELD_PUBLISHER_EXT])) {
			$value = $data[self::FIELD_PUBLISHER] ?? null;
			$ext =
				isset($data[self::FIELD_PUBLISHER_EXT]) &&
				is_array($data[self::FIELD_PUBLISHER_EXT])
					? $data[self::FIELD_PUBLISHER_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->setPublisher($value);
				} elseif (is_array($value)) {
					$this->setPublisher(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->setPublisher(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setPublisher(new FHIRString($ext));
			}
		}
		if (isset($data[self::FIELD_CONTACT])) {
			if (is_array($data[self::FIELD_CONTACT])) {
				foreach ($data[self::FIELD_CONTACT] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRDataElementContact) {
						$this->addContact($v);
					} else {
						$this->addContact(new FHIRDataElementContact($v));
					}
				}
			} elseif ($data[self::FIELD_CONTACT] instanceof FHIRDataElementContact) {
				$this->addContact($data[self::FIELD_CONTACT]);
			} else {
				$this->addContact(new FHIRDataElementContact($data[self::FIELD_CONTACT]));
			}
		}
		if (isset($data[self::FIELD_DATE]) || isset($data[self::FIELD_DATE_EXT])) {
			$value = $data[self::FIELD_DATE] ?? null;
			$ext =
				isset($data[self::FIELD_DATE_EXT]) && is_array($data[self::FIELD_DATE_EXT])
					? $data[self::FIELD_DATE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRDateTime) {
					$this->setDate($value);
				} elseif (is_array($value)) {
					$this->setDate(new FHIRDateTime(array_merge($ext, $value)));
				} else {
					$this->setDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setDate(new FHIRDateTime($ext));
			}
		}
		if (isset($data[self::FIELD_USE_CONTEXT])) {
			if (is_array($data[self::FIELD_USE_CONTEXT])) {
				foreach ($data[self::FIELD_USE_CONTEXT] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRCodeableConcept) {
						$this->addUseContext($v);
					} else {
						$this->addUseContext(new FHIRCodeableConcept($v));
					}
				}
			} elseif ($data[self::FIELD_USE_CONTEXT] instanceof FHIRCodeableConcept) {
				$this->addUseContext($data[self::FIELD_USE_CONTEXT]);
			} else {
				$this->addUseContext(new FHIRCodeableConcept($data[self::FIELD_USE_CONTEXT]));
			}
		}
		if (isset($data[self::FIELD_COPYRIGHT]) || isset($data[self::FIELD_COPYRIGHT_EXT])) {
			$value = $data[self::FIELD_COPYRIGHT] ?? null;
			$ext =
				isset($data[self::FIELD_COPYRIGHT_EXT]) &&
				is_array($data[self::FIELD_COPYRIGHT_EXT])
					? $data[self::FIELD_COPYRIGHT_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->setCopyright($value);
				} elseif (is_array($value)) {
					$this->setCopyright(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->setCopyright(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setCopyright(new FHIRString($ext));
			}
		}
		if (isset($data[self::FIELD_STRINGENCY]) || isset($data[self::FIELD_STRINGENCY_EXT])) {
			$value = $data[self::FIELD_STRINGENCY] ?? null;
			$ext =
				isset($data[self::FIELD_STRINGENCY_EXT]) &&
				is_array($data[self::FIELD_STRINGENCY_EXT])
					? $data[self::FIELD_STRINGENCY_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRDataElementStringency) {
					$this->setStringency($value);
				} elseif (is_array($value)) {
					$this->setStringency(new FHIRDataElementStringency(array_merge($ext, $value)));
				} else {
					$this->setStringency(
						new FHIRDataElementStringency(
							[FHIRDataElementStringency::FIELD_VALUE => $value] + $ext,
						),
					);
				}
			} elseif ([] !== $ext) {
				$this->setStringency(new FHIRDataElementStringency($ext));
			}
		}
		if (isset($data[self::FIELD_MAPPING])) {
			if (is_array($data[self::FIELD_MAPPING])) {
				foreach ($data[self::FIELD_MAPPING] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRDataElementMapping) {
						$this->addMapping($v);
					} else {
						$this->addMapping(new FHIRDataElementMapping($v));
					}
				}
			} elseif ($data[self::FIELD_MAPPING] instanceof FHIRDataElementMapping) {
				$this->addMapping($data[self::FIELD_MAPPING]);
			} else {
				$this->addMapping(new FHIRDataElementMapping($data[self::FIELD_MAPPING]));
			}
		}
		if (isset($data[self::FIELD_ELEMENT])) {
			if (is_array($data[self::FIELD_ELEMENT])) {
				foreach ($data[self::FIELD_ELEMENT] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRElementDefinition) {
						$this->addElement($v);
					} else {
						$this->addElement(new FHIRElementDefinition($v));
					}
				}
			} elseif ($data[self::FIELD_ELEMENT] instanceof FHIRElementDefinition) {
				$this->addElement($data[self::FIELD_ELEMENT]);
			} else {
				$this->addElement(new FHIRElementDefinition($data[self::FIELD_ELEMENT]));
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
		return "<DataElement{$xmlns}></DataElement>";
	}
	/**
	 * @return string
	 */
	public function _getResourceType(): string
	{
		return static::FHIR_TYPE_NAME;
	}

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * An absolute URL that is used to identify this data element when it is referenced
	 * in a specification, model, design or an instance. This SHALL be a URL, SHOULD be
	 * globally unique, and SHOULD be an address at which this data element is (or will
	 * be) published.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri
	 */
	public function getUrl(): ?FHIRUri
	{
		return $this->url;
	}

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * An absolute URL that is used to identify this data element when it is referenced
	 * in a specification, model, design or an instance. This SHALL be a URL, SHOULD be
	 * globally unique, and SHOULD be an address at which this data element is (or will
	 * be) published.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri $url
	 * @return static
	 */
	public function setUrl($url = null): object
	{
		if (null !== $url && !($url instanceof FHIRUri)) {
			$url = new FHIRUri($url);
		}
		$this->_trackValueSet($this->url, $url);
		$this->url = $url;
		return $this;
	}

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Formal identifier that is used to identify this data element when it is
	 * represented in other formats, or referenced in a specification, model, design or
	 * an instance.
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
	 * Formal identifier that is used to identify this data element when it is
	 * represented in other formats, or referenced in a specification, model, design or
	 * an instance.
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
	 * Formal identifier that is used to identify this data element when it is
	 * represented in other formats, or referenced in a specification, model, design or
	 * an instance.
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
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The identifier that is used to identify this version of the data element when it
	 * is referenced in a StructureDefinition, Questionnaire or instance. This is an
	 * arbitrary value managed by the definition author manually.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	public function getVersion(): ?FHIRString
	{
		return $this->version;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The identifier that is used to identify this version of the data element when it
	 * is referenced in a StructureDefinition, Questionnaire or instance. This is an
	 * arbitrary value managed by the definition author manually.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString $version
	 * @return static
	 */
	public function setVersion($version = null): object
	{
		if (null !== $version && !($version instanceof FHIRString)) {
			$version = new FHIRString($version);
		}
		$this->_trackValueSet($this->version, $version);
		$this->version = $version;
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The term used by humans to refer to the data element. Should ideally be unique
	 * within the context in which the data element is expected to be used.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	public function getName(): ?FHIRString
	{
		return $this->name;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The term used by humans to refer to the data element. Should ideally be unique
	 * within the context in which the data element is expected to be used.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString $name
	 * @return static
	 */
	public function setName($name = null): object
	{
		if (null !== $name && !($name instanceof FHIRString)) {
			$name = new FHIRString($name);
		}
		$this->_trackValueSet($this->name, $name);
		$this->name = $name;
		return $this;
	}

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The status of the data element.
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
	 * The status of the data element.
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
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A flag to indicate that this search data element definition is authored for
	 * testing purposes (or education/evaluation/marketing), and is not intended to be
	 * used for genuine usage.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
	 */
	public function getExperimental(): ?FHIRBoolean
	{
		return $this->experimental;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A flag to indicate that this search data element definition is authored for
	 * testing purposes (or education/evaluation/marketing), and is not intended to be
	 * used for genuine usage.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean $experimental
	 * @return static
	 */
	public function setExperimental($experimental = null): object
	{
		if (null !== $experimental && !($experimental instanceof FHIRBoolean)) {
			$experimental = new FHIRBoolean($experimental);
		}
		$this->_trackValueSet($this->experimental, $experimental);
		$this->experimental = $experimental;
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The name of the individual or organization that published the data element.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	public function getPublisher(): ?FHIRString
	{
		return $this->publisher;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The name of the individual or organization that published the data element.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString $publisher
	 * @return static
	 */
	public function setPublisher($publisher = null): object
	{
		if (null !== $publisher && !($publisher instanceof FHIRString)) {
			$publisher = new FHIRString($publisher);
		}
		$this->_trackValueSet($this->publisher, $publisher);
		$this->publisher = $publisher;
		return $this;
	}

	/**
	 * The formal description of a single piece of information that can be gathered and
	 * reported.
	 *
	 * Contacts to assist a user in finding and communicating with the publisher.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDataElement\FHIRDataElementContact[]
	 */
	public function getContact(): ?array
	{
		return $this->contact;
	}

	/**
	 * The formal description of a single piece of information that can be gathered and
	 * reported.
	 *
	 * Contacts to assist a user in finding and communicating with the publisher.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDataElement\FHIRDataElementContact $contact
	 * @return static
	 */
	public function addContact(?FHIRDataElementContact $contact = null): object
	{
		$this->_trackValueAdded();
		$this->contact[] = $contact;
		return $this;
	}

	/**
	 * The formal description of a single piece of information that can be gathered and
	 * reported.
	 *
	 * Contacts to assist a user in finding and communicating with the publisher.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDataElement\FHIRDataElementContact[] $contact
	 * @return static
	 */
	public function setContact(array $contact = []): object
	{
		if ([] !== $this->contact) {
			$this->_trackValuesRemoved(count($this->contact));
			$this->contact = [];
		}
		if ([] === $contact) {
			return $this;
		}
		foreach ($contact as $v) {
			if ($v instanceof FHIRDataElementContact) {
				$this->addContact($v);
			} else {
				$this->addContact(new FHIRDataElementContact($v));
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
	 * The date this version of the data element was published. The date must change
	 * when the business version changes, if it does, and it must change if the status
	 * code changes. In addition, it should change when the substantive content of the
	 * data element changes.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime
	 */
	public function getDate(): ?FHIRDateTime
	{
		return $this->date;
	}

	/**
	 * A date, date-time or partial date (e.g. just year or year + month). If hours and
	 * minutes are specified, a time zone SHALL be populated. The format is a union of
	 * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
	 * due to schema type constraints but may be zero-filled and may be ignored. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The date this version of the data element was published. The date must change
	 * when the business version changes, if it does, and it must change if the status
	 * code changes. In addition, it should change when the substantive content of the
	 * data element changes.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime $date
	 * @return static
	 */
	public function setDate($date = null): object
	{
		if (null !== $date && !($date instanceof FHIRDateTime)) {
			$date = new FHIRDateTime($date);
		}
		$this->_trackValueSet($this->date, $date);
		$this->date = $date;
		return $this;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The content was developed with a focus and intent of supporting the contexts
	 * that are listed. These terms may be used to assist with indexing and searching
	 * of data element definitions.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept[]
	 */
	public function getUseContext(): ?array
	{
		return $this->useContext;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The content was developed with a focus and intent of supporting the contexts
	 * that are listed. These terms may be used to assist with indexing and searching
	 * of data element definitions.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $useContext
	 * @return static
	 */
	public function addUseContext(?FHIRCodeableConcept $useContext = null): object
	{
		$this->_trackValueAdded();
		$this->useContext[] = $useContext;
		return $this;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The content was developed with a focus and intent of supporting the contexts
	 * that are listed. These terms may be used to assist with indexing and searching
	 * of data element definitions.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept[] $useContext
	 * @return static
	 */
	public function setUseContext(array $useContext = []): object
	{
		if ([] !== $this->useContext) {
			$this->_trackValuesRemoved(count($this->useContext));
			$this->useContext = [];
		}
		if ([] === $useContext) {
			return $this;
		}
		foreach ($useContext as $v) {
			if ($v instanceof FHIRCodeableConcept) {
				$this->addUseContext($v);
			} else {
				$this->addUseContext(new FHIRCodeableConcept($v));
			}
		}
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A copyright statement relating to the definition of the data element. Copyright
	 * statements are generally legal restrictions on the use and publishing of the
	 * details of the definition of the data element.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	public function getCopyright(): ?FHIRString
	{
		return $this->copyright;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A copyright statement relating to the definition of the data element. Copyright
	 * statements are generally legal restrictions on the use and publishing of the
	 * details of the definition of the data element.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString $copyright
	 * @return static
	 */
	public function setCopyright($copyright = null): object
	{
		if (null !== $copyright && !($copyright instanceof FHIRString)) {
			$copyright = new FHIRString($copyright);
		}
		$this->_trackValueSet($this->copyright, $copyright);
		$this->copyright = $copyright;
		return $this;
	}

	/**
	 * Indicates the degree of precision of the data element definition.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Identifies how precise the data element is in its definition.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDataElementStringency
	 */
	public function getStringency(): ?FHIRDataElementStringency
	{
		return $this->stringency;
	}

	/**
	 * Indicates the degree of precision of the data element definition.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Identifies how precise the data element is in its definition.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDataElementStringency $stringency
	 * @return static
	 */
	public function setStringency(?FHIRDataElementStringency $stringency = null): object
	{
		$this->_trackValueSet($this->stringency, $stringency);
		$this->stringency = $stringency;
		return $this;
	}

	/**
	 * The formal description of a single piece of information that can be gathered and
	 * reported.
	 *
	 * Identifies a specification (other than a terminology) that the elements which
	 * make up the DataElement have some correspondence with.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDataElement\FHIRDataElementMapping[]
	 */
	public function getMapping(): ?array
	{
		return $this->mapping;
	}

	/**
	 * The formal description of a single piece of information that can be gathered and
	 * reported.
	 *
	 * Identifies a specification (other than a terminology) that the elements which
	 * make up the DataElement have some correspondence with.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDataElement\FHIRDataElementMapping $mapping
	 * @return static
	 */
	public function addMapping(?FHIRDataElementMapping $mapping = null): object
	{
		$this->_trackValueAdded();
		$this->mapping[] = $mapping;
		return $this;
	}

	/**
	 * The formal description of a single piece of information that can be gathered and
	 * reported.
	 *
	 * Identifies a specification (other than a terminology) that the elements which
	 * make up the DataElement have some correspondence with.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDataElement\FHIRDataElementMapping[] $mapping
	 * @return static
	 */
	public function setMapping(array $mapping = []): object
	{
		if ([] !== $this->mapping) {
			$this->_trackValuesRemoved(count($this->mapping));
			$this->mapping = [];
		}
		if ([] === $mapping) {
			return $this;
		}
		foreach ($mapping as $v) {
			if ($v instanceof FHIRDataElementMapping) {
				$this->addMapping($v);
			} else {
				$this->addMapping(new FHIRDataElementMapping($v));
			}
		}
		return $this;
	}

	/**
	 * Captures constraints on each element within the resource, profile, or extension.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Defines the structure, type, allowed values and other constraining
	 * characteristics of the data element.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRElementDefinition[]
	 */
	public function getElement(): ?array
	{
		return $this->element;
	}

	/**
	 * Captures constraints on each element within the resource, profile, or extension.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Defines the structure, type, allowed values and other constraining
	 * characteristics of the data element.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRElementDefinition $element
	 * @return static
	 */
	public function addElement(?FHIRElementDefinition $element = null): object
	{
		$this->_trackValueAdded();
		$this->element[] = $element;
		return $this;
	}

	/**
	 * Captures constraints on each element within the resource, profile, or extension.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Defines the structure, type, allowed values and other constraining
	 * characteristics of the data element.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRElementDefinition[] $element
	 * @return static
	 */
	public function setElement(array $element = []): object
	{
		if ([] !== $this->element) {
			$this->_trackValuesRemoved(count($this->element));
			$this->element = [];
		}
		if ([] === $element) {
			return $this;
		}
		foreach ($element as $v) {
			if ($v instanceof FHIRElementDefinition) {
				$this->addElement($v);
			} else {
				$this->addElement(new FHIRElementDefinition($v));
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
		if (null !== ($v = $this->getUrl())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_URL] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getIdentifier())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getVersion())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_VERSION] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getName())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_NAME] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getStatus())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_STATUS] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getExperimental())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_EXPERIMENTAL] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPublisher())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PUBLISHER] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getContact())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_CONTACT, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getDate())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DATE] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getUseContext())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_USE_CONTEXT, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getCopyright())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_COPYRIGHT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getStringency())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_STRINGENCY] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getMapping())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_MAPPING, $i)] = $fieldErrs;
				}
			}
		}
		if ([] !== ($vs = $this->getElement())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_ELEMENT, $i)] = $fieldErrs;
				}
			}
		}
		if (isset($validationRules[self::FIELD_URL])) {
			$v = $this->getUrl();
			foreach ($validationRules[self::FIELD_URL] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DATA_ELEMENT,
					self::FIELD_URL,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_URL])) {
						$errs[self::FIELD_URL] = [];
					}
					$errs[self::FIELD_URL][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_IDENTIFIER])) {
			$v = $this->getIdentifier();
			foreach ($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DATA_ELEMENT,
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
		if (isset($validationRules[self::FIELD_VERSION])) {
			$v = $this->getVersion();
			foreach ($validationRules[self::FIELD_VERSION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DATA_ELEMENT,
					self::FIELD_VERSION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_VERSION])) {
						$errs[self::FIELD_VERSION] = [];
					}
					$errs[self::FIELD_VERSION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_NAME])) {
			$v = $this->getName();
			foreach ($validationRules[self::FIELD_NAME] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DATA_ELEMENT,
					self::FIELD_NAME,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_NAME])) {
						$errs[self::FIELD_NAME] = [];
					}
					$errs[self::FIELD_NAME][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_STATUS])) {
			$v = $this->getStatus();
			foreach ($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DATA_ELEMENT,
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
		if (isset($validationRules[self::FIELD_EXPERIMENTAL])) {
			$v = $this->getExperimental();
			foreach ($validationRules[self::FIELD_EXPERIMENTAL] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DATA_ELEMENT,
					self::FIELD_EXPERIMENTAL,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_EXPERIMENTAL])) {
						$errs[self::FIELD_EXPERIMENTAL] = [];
					}
					$errs[self::FIELD_EXPERIMENTAL][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PUBLISHER])) {
			$v = $this->getPublisher();
			foreach ($validationRules[self::FIELD_PUBLISHER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DATA_ELEMENT,
					self::FIELD_PUBLISHER,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PUBLISHER])) {
						$errs[self::FIELD_PUBLISHER] = [];
					}
					$errs[self::FIELD_PUBLISHER][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_CONTACT])) {
			$v = $this->getContact();
			foreach ($validationRules[self::FIELD_CONTACT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DATA_ELEMENT,
					self::FIELD_CONTACT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_CONTACT])) {
						$errs[self::FIELD_CONTACT] = [];
					}
					$errs[self::FIELD_CONTACT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DATE])) {
			$v = $this->getDate();
			foreach ($validationRules[self::FIELD_DATE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DATA_ELEMENT,
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
		if (isset($validationRules[self::FIELD_USE_CONTEXT])) {
			$v = $this->getUseContext();
			foreach ($validationRules[self::FIELD_USE_CONTEXT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DATA_ELEMENT,
					self::FIELD_USE_CONTEXT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_USE_CONTEXT])) {
						$errs[self::FIELD_USE_CONTEXT] = [];
					}
					$errs[self::FIELD_USE_CONTEXT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_COPYRIGHT])) {
			$v = $this->getCopyright();
			foreach ($validationRules[self::FIELD_COPYRIGHT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DATA_ELEMENT,
					self::FIELD_COPYRIGHT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_COPYRIGHT])) {
						$errs[self::FIELD_COPYRIGHT] = [];
					}
					$errs[self::FIELD_COPYRIGHT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_STRINGENCY])) {
			$v = $this->getStringency();
			foreach ($validationRules[self::FIELD_STRINGENCY] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DATA_ELEMENT,
					self::FIELD_STRINGENCY,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_STRINGENCY])) {
						$errs[self::FIELD_STRINGENCY] = [];
					}
					$errs[self::FIELD_STRINGENCY][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MAPPING])) {
			$v = $this->getMapping();
			foreach ($validationRules[self::FIELD_MAPPING] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DATA_ELEMENT,
					self::FIELD_MAPPING,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MAPPING])) {
						$errs[self::FIELD_MAPPING] = [];
					}
					$errs[self::FIELD_MAPPING][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_ELEMENT])) {
			$v = $this->getElement();
			foreach ($validationRules[self::FIELD_ELEMENT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DATA_ELEMENT,
					self::FIELD_ELEMENT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_ELEMENT])) {
						$errs[self::FIELD_ELEMENT] = [];
					}
					$errs[self::FIELD_ELEMENT][$rule] = $err;
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRDataElement $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRDataElement
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
						'FHIRDataElement::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRDataElement::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRDataElement(null);
		} elseif (!is_object($type) || !($type instanceof FHIRDataElement)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRDataElement::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRDataElement or null, %s seen.',
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
			if (self::FIELD_URL === $n->nodeName) {
				$type->setUrl(FHIRUri::xmlUnserialize($n));
			} elseif (self::FIELD_IDENTIFIER === $n->nodeName) {
				$type->addIdentifier(FHIRIdentifier::xmlUnserialize($n));
			} elseif (self::FIELD_VERSION === $n->nodeName) {
				$type->setVersion(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_NAME === $n->nodeName) {
				$type->setName(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_STATUS === $n->nodeName) {
				$type->setStatus(FHIRCode::xmlUnserialize($n));
			} elseif (self::FIELD_EXPERIMENTAL === $n->nodeName) {
				$type->setExperimental(FHIRBoolean::xmlUnserialize($n));
			} elseif (self::FIELD_PUBLISHER === $n->nodeName) {
				$type->setPublisher(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_CONTACT === $n->nodeName) {
				$type->addContact(FHIRDataElementContact::xmlUnserialize($n));
			} elseif (self::FIELD_DATE === $n->nodeName) {
				$type->setDate(FHIRDateTime::xmlUnserialize($n));
			} elseif (self::FIELD_USE_CONTEXT === $n->nodeName) {
				$type->addUseContext(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_COPYRIGHT === $n->nodeName) {
				$type->setCopyright(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_STRINGENCY === $n->nodeName) {
				$type->setStringency(FHIRDataElementStringency::xmlUnserialize($n));
			} elseif (self::FIELD_MAPPING === $n->nodeName) {
				$type->addMapping(FHIRDataElementMapping::xmlUnserialize($n));
			} elseif (self::FIELD_ELEMENT === $n->nodeName) {
				$type->addElement(FHIRElementDefinition::xmlUnserialize($n));
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
		$n = $element->attributes->getNamedItem(self::FIELD_URL);
		if (null !== $n) {
			$pt = $type->getUrl();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setUrl($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_VERSION);
		if (null !== $n) {
			$pt = $type->getVersion();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setVersion($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_NAME);
		if (null !== $n) {
			$pt = $type->getName();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setName($n->nodeValue);
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
		$n = $element->attributes->getNamedItem(self::FIELD_EXPERIMENTAL);
		if (null !== $n) {
			$pt = $type->getExperimental();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setExperimental($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_PUBLISHER);
		if (null !== $n) {
			$pt = $type->getPublisher();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setPublisher($n->nodeValue);
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
		$n = $element->attributes->getNamedItem(self::FIELD_COPYRIGHT);
		if (null !== $n) {
			$pt = $type->getCopyright();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setCopyright($n->nodeValue);
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
		if (null !== ($v = $this->getUrl())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_URL);
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
		if (null !== ($v = $this->getVersion())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_VERSION);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getName())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_NAME);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getStatus())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_STATUS);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getExperimental())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_EXPERIMENTAL);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPublisher())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PUBLISHER);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getContact())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_CONTACT);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if (null !== ($v = $this->getDate())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DATE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getUseContext())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_USE_CONTEXT);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if (null !== ($v = $this->getCopyright())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_COPYRIGHT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getStringency())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_STRINGENCY);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getMapping())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_MAPPING);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if ([] !== ($vs = $this->getElement())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_ELEMENT);
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
		if (null !== ($v = $this->getUrl())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_URL} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRUri::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_URL_EXT} = $ext;
			}
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
		if (null !== ($v = $this->getVersion())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_VERSION} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRString::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_VERSION_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getName())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_NAME} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRString::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_NAME_EXT} = $ext;
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
		if (null !== ($v = $this->getExperimental())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_EXPERIMENTAL} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRBoolean::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_EXPERIMENTAL_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getPublisher())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_PUBLISHER} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRString::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_PUBLISHER_EXT} = $ext;
			}
		}
		if ([] !== ($vs = $this->getContact())) {
			$out->{self::FIELD_CONTACT} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_CONTACT}[] = $v;
			}
		}
		if (null !== ($v = $this->getDate())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_DATE} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRDateTime::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_DATE_EXT} = $ext;
			}
		}
		if ([] !== ($vs = $this->getUseContext())) {
			$out->{self::FIELD_USE_CONTEXT} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_USE_CONTEXT}[] = $v;
			}
		}
		if (null !== ($v = $this->getCopyright())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_COPYRIGHT} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRString::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_COPYRIGHT_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getStringency())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_STRINGENCY} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRDataElementStringency::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_STRINGENCY_EXT} = $ext;
			}
		}
		if ([] !== ($vs = $this->getMapping())) {
			$out->{self::FIELD_MAPPING} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_MAPPING}[] = $v;
			}
		}
		if ([] !== ($vs = $this->getElement())) {
			$out->{self::FIELD_ELEMENT} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_ELEMENT}[] = $v;
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
