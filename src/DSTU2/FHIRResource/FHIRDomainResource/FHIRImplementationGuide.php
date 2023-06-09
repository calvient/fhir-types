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

use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideContact;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideDependency;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideGlobal;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePackage;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRExtension;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRId;
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
 * A set of rules or how FHIR is used to solve a particular problem. This resource
 * is used to gather all the parts of an implementation guide into a logical whole,
 * and to publish a computable definition of all the parts.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRImplementationGuide
 * @package \Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIRImplementationGuide extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE;
	const FIELD_URL = 'url';
	const FIELD_URL_EXT = '_url';
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
	const FIELD_DESCRIPTION = 'description';
	const FIELD_DESCRIPTION_EXT = '_description';
	const FIELD_USE_CONTEXT = 'useContext';
	const FIELD_COPYRIGHT = 'copyright';
	const FIELD_COPYRIGHT_EXT = '_copyright';
	const FIELD_FHIR_VERSION = 'fhirVersion';
	const FIELD_FHIR_VERSION_EXT = '_fhirVersion';
	const FIELD_DEPENDENCY = 'dependency';
	const FIELD_PACKAGE = 'package';
	const FIELD_GLOBAL = 'global';
	const FIELD_BINARY = 'binary';
	const FIELD_BINARY_EXT = '_binary';
	const FIELD_PAGE = 'page';

	/** @var string */
	private $_xmlns = '';

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * An absolute URL that is used to identify this implementation guide when it is
	 * referenced in a specification, model, design or an instance. This SHALL be a
	 * URL, SHOULD be globally unique, and SHOULD be an address at which this
	 * implementation guide is (or will be) published.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri
	 */
	protected ?FHIRUri $url = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The identifier that is used to identify this version of the Implementation Guide
	 * when it is referenced in a specification, model, design or instance. This is an
	 * arbitrary value managed by the Implementation Guide author manually.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $version = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A free text natural language name identifying the Implementation Guide.
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
	 * The status of the Implementation Guide.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode
	 */
	protected ?FHIRCode $status = null;

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * This Implementation Guide was authored for testing purposes (or
	 * education/evaluation/marketing), and is not intended to be used for genuine
	 * usage.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
	 */
	protected ?FHIRBoolean $experimental = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The name of the individual or organization that published the implementation
	 * guide.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $publisher = null;

	/**
	 * A set of rules or how FHIR is used to solve a particular problem. This resource
	 * is used to gather all the parts of an implementation guide into a logical whole,
	 * and to publish a computable definition of all the parts.
	 *
	 * Contacts to assist a user in finding and communicating with the publisher.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideContact[]
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
	 * The date this version of the implementation guide was published. The date must
	 * change when the business version changes, if it does, and it must change if the
	 * status code changes. In addition, it should change when the substantive content
	 * of the implementation guide changes.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime
	 */
	protected ?FHIRDateTime $date = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A free text natural language description of the Implementation Guide and its
	 * use.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $description = null;

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The content was developed with a focus and intent of supporting the contexts
	 * that are listed. These terms may be used to assist with indexing and searching
	 * of implementation guides. The most common use of this element is to represent
	 * the country / jurisdiction for which this implementation guide was defined.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept[]
	 */
	protected ?array $useContext = [];

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A copyright statement relating to the implementation guide and/or its contents.
	 * Copyright statements are generally legal restrictions on the use and publishing
	 * of the details of the constraints and mappings.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $copyright = null;

	/**
	 * Any combination of letters, numerals, "-" and ".", with a length limit of 64
	 * characters. (This might be an integer, an unprefixed OID, UUID or any other
	 * identifier pattern that meets these constraints.) Ids are case-insensitive.
	 * RFC 4122
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The version of the FHIR specification on which this ImplementationGuide is based
	 * - this is the formal version of the specification, without the revision number,
	 * e.g. [publication].[major].[minor], which is 1.0.2 for this version.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRIdPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRId
	 */
	protected ?FHIRId $fhirVersion = null;

	/**
	 * A set of rules or how FHIR is used to solve a particular problem. This resource
	 * is used to gather all the parts of an implementation guide into a logical whole,
	 * and to publish a computable definition of all the parts.
	 *
	 * Another implementation guide that this implementation depends on. Typically, an
	 * implementation guide uses value sets, profiles etc.defined in other
	 * implementation guides.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideDependency[]
	 */
	protected ?array $dependency = [];

	/**
	 * A set of rules or how FHIR is used to solve a particular problem. This resource
	 * is used to gather all the parts of an implementation guide into a logical whole,
	 * and to publish a computable definition of all the parts.
	 *
	 * A logical group of resources. Logical groups can be used when building pages.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePackage[]
	 */
	protected ?array $package = [];

	/**
	 * A set of rules or how FHIR is used to solve a particular problem. This resource
	 * is used to gather all the parts of an implementation guide into a logical whole,
	 * and to publish a computable definition of all the parts.
	 *
	 * A set of profiles that all resources covered by this implementation guide must
	 * conform to.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideGlobal[]
	 */
	protected ?array $global = [];

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A binary file that is included in the implementation guide when it is published.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive[]|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri[]
	 */
	protected ?array $binary = [];

	/**
	 * A set of rules or how FHIR is used to solve a particular problem. This resource
	 * is used to gather all the parts of an implementation guide into a logical whole,
	 * and to publish a computable definition of all the parts.
	 *
	 * A page / section in the implementation guide. The root page is the
	 * implementation guide home page.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage
	 */
	protected ?FHIRImplementationGuidePage $page = null;

	/**
	 * Validation map for fields in type ImplementationGuide
	 * @var array
	 */
	private static array $_validationRules = [
		self::FIELD_PACKAGE => [
			PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
		],
	];

	/**
	 * FHIRImplementationGuide Constructor
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
					'FHIRImplementationGuide::_construct - $data expected to be null or array, %s seen',
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
					if ($v instanceof FHIRImplementationGuideContact) {
						$this->addContact($v);
					} else {
						$this->addContact(new FHIRImplementationGuideContact($v));
					}
				}
			} elseif ($data[self::FIELD_CONTACT] instanceof FHIRImplementationGuideContact) {
				$this->addContact($data[self::FIELD_CONTACT]);
			} else {
				$this->addContact(new FHIRImplementationGuideContact($data[self::FIELD_CONTACT]));
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
		if (isset($data[self::FIELD_FHIR_VERSION]) || isset($data[self::FIELD_FHIR_VERSION_EXT])) {
			$value = $data[self::FIELD_FHIR_VERSION] ?? null;
			$ext =
				isset($data[self::FIELD_FHIR_VERSION_EXT]) &&
				is_array($data[self::FIELD_FHIR_VERSION_EXT])
					? $data[self::FIELD_FHIR_VERSION_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRId) {
					$this->setFhirVersion($value);
				} elseif (is_array($value)) {
					$this->setFhirVersion(new FHIRId(array_merge($ext, $value)));
				} else {
					$this->setFhirVersion(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setFhirVersion(new FHIRId($ext));
			}
		}
		if (isset($data[self::FIELD_DEPENDENCY])) {
			if (is_array($data[self::FIELD_DEPENDENCY])) {
				foreach ($data[self::FIELD_DEPENDENCY] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRImplementationGuideDependency) {
						$this->addDependency($v);
					} else {
						$this->addDependency(new FHIRImplementationGuideDependency($v));
					}
				}
			} elseif ($data[self::FIELD_DEPENDENCY] instanceof FHIRImplementationGuideDependency) {
				$this->addDependency($data[self::FIELD_DEPENDENCY]);
			} else {
				$this->addDependency(
					new FHIRImplementationGuideDependency($data[self::FIELD_DEPENDENCY]),
				);
			}
		}
		if (isset($data[self::FIELD_PACKAGE])) {
			if (is_array($data[self::FIELD_PACKAGE])) {
				foreach ($data[self::FIELD_PACKAGE] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRImplementationGuidePackage) {
						$this->addPackage($v);
					} else {
						$this->addPackage(new FHIRImplementationGuidePackage($v));
					}
				}
			} elseif ($data[self::FIELD_PACKAGE] instanceof FHIRImplementationGuidePackage) {
				$this->addPackage($data[self::FIELD_PACKAGE]);
			} else {
				$this->addPackage(new FHIRImplementationGuidePackage($data[self::FIELD_PACKAGE]));
			}
		}
		if (isset($data[self::FIELD_GLOBAL])) {
			if (is_array($data[self::FIELD_GLOBAL])) {
				foreach ($data[self::FIELD_GLOBAL] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRImplementationGuideGlobal) {
						$this->addGlobal($v);
					} else {
						$this->addGlobal(new FHIRImplementationGuideGlobal($v));
					}
				}
			} elseif ($data[self::FIELD_GLOBAL] instanceof FHIRImplementationGuideGlobal) {
				$this->addGlobal($data[self::FIELD_GLOBAL]);
			} else {
				$this->addGlobal(new FHIRImplementationGuideGlobal($data[self::FIELD_GLOBAL]));
			}
		}
		if (isset($data[self::FIELD_BINARY]) || isset($data[self::FIELD_BINARY_EXT])) {
			$value = $data[self::FIELD_BINARY] ?? null;
			$ext =
				isset($data[self::FIELD_BINARY_EXT]) && is_array($data[self::FIELD_BINARY_EXT])
					? $data[self::FIELD_BINARY_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRUri) {
					$this->addBinary($value);
				} elseif (is_array($value)) {
					foreach ($value as $i => $v) {
						if ($v instanceof FHIRUri) {
							$this->addBinary($v);
						} else {
							$iext = isset($ext[$i]) && is_array($ext[$i]) ? $ext[$i] : [];
							if (is_array($v)) {
								$this->addBinary(new FHIRUri(array_merge($v, $iext)));
							} else {
								$this->addBinary(new FHIRUri([FHIRUri::FIELD_VALUE => $v] + $iext));
							}
						}
					}
				} elseif (is_array($value)) {
					$this->addBinary(new FHIRUri(array_merge($ext, $value)));
				} else {
					$this->addBinary(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				foreach ($ext as $iext) {
					$this->addBinary(new FHIRUri($iext));
				}
			}
		}
		if (isset($data[self::FIELD_PAGE])) {
			if ($data[self::FIELD_PAGE] instanceof FHIRImplementationGuidePage) {
				$this->setPage($data[self::FIELD_PAGE]);
			} else {
				$this->setPage(new FHIRImplementationGuidePage($data[self::FIELD_PAGE]));
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
		return "<ImplementationGuide{$xmlns}></ImplementationGuide>";
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
	 * An absolute URL that is used to identify this implementation guide when it is
	 * referenced in a specification, model, design or an instance. This SHALL be a
	 * URL, SHOULD be globally unique, and SHOULD be an address at which this
	 * implementation guide is (or will be) published.
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
	 * An absolute URL that is used to identify this implementation guide when it is
	 * referenced in a specification, model, design or an instance. This SHALL be a
	 * URL, SHOULD be globally unique, and SHOULD be an address at which this
	 * implementation guide is (or will be) published.
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
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The identifier that is used to identify this version of the Implementation Guide
	 * when it is referenced in a specification, model, design or instance. This is an
	 * arbitrary value managed by the Implementation Guide author manually.
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
	 * The identifier that is used to identify this version of the Implementation Guide
	 * when it is referenced in a specification, model, design or instance. This is an
	 * arbitrary value managed by the Implementation Guide author manually.
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
	 * A free text natural language name identifying the Implementation Guide.
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
	 * A free text natural language name identifying the Implementation Guide.
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
	 * The status of the Implementation Guide.
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
	 * The status of the Implementation Guide.
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
	 * This Implementation Guide was authored for testing purposes (or
	 * education/evaluation/marketing), and is not intended to be used for genuine
	 * usage.
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
	 * This Implementation Guide was authored for testing purposes (or
	 * education/evaluation/marketing), and is not intended to be used for genuine
	 * usage.
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
	 * The name of the individual or organization that published the implementation
	 * guide.
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
	 * The name of the individual or organization that published the implementation
	 * guide.
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
	 * A set of rules or how FHIR is used to solve a particular problem. This resource
	 * is used to gather all the parts of an implementation guide into a logical whole,
	 * and to publish a computable definition of all the parts.
	 *
	 * Contacts to assist a user in finding and communicating with the publisher.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideContact[]
	 */
	public function getContact(): ?array
	{
		return $this->contact;
	}

	/**
	 * A set of rules or how FHIR is used to solve a particular problem. This resource
	 * is used to gather all the parts of an implementation guide into a logical whole,
	 * and to publish a computable definition of all the parts.
	 *
	 * Contacts to assist a user in finding and communicating with the publisher.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideContact $contact
	 * @return static
	 */
	public function addContact(?FHIRImplementationGuideContact $contact = null): object
	{
		$this->_trackValueAdded();
		$this->contact[] = $contact;
		return $this;
	}

	/**
	 * A set of rules or how FHIR is used to solve a particular problem. This resource
	 * is used to gather all the parts of an implementation guide into a logical whole,
	 * and to publish a computable definition of all the parts.
	 *
	 * Contacts to assist a user in finding and communicating with the publisher.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideContact[] $contact
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
			if ($v instanceof FHIRImplementationGuideContact) {
				$this->addContact($v);
			} else {
				$this->addContact(new FHIRImplementationGuideContact($v));
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
	 * The date this version of the implementation guide was published. The date must
	 * change when the business version changes, if it does, and it must change if the
	 * status code changes. In addition, it should change when the substantive content
	 * of the implementation guide changes.
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
	 * The date this version of the implementation guide was published. The date must
	 * change when the business version changes, if it does, and it must change if the
	 * status code changes. In addition, it should change when the substantive content
	 * of the implementation guide changes.
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
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A free text natural language description of the Implementation Guide and its
	 * use.
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
	 * A free text natural language description of the Implementation Guide and its
	 * use.
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
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The content was developed with a focus and intent of supporting the contexts
	 * that are listed. These terms may be used to assist with indexing and searching
	 * of implementation guides. The most common use of this element is to represent
	 * the country / jurisdiction for which this implementation guide was defined.
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
	 * of implementation guides. The most common use of this element is to represent
	 * the country / jurisdiction for which this implementation guide was defined.
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
	 * of implementation guides. The most common use of this element is to represent
	 * the country / jurisdiction for which this implementation guide was defined.
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
	 * A copyright statement relating to the implementation guide and/or its contents.
	 * Copyright statements are generally legal restrictions on the use and publishing
	 * of the details of the constraints and mappings.
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
	 * A copyright statement relating to the implementation guide and/or its contents.
	 * Copyright statements are generally legal restrictions on the use and publishing
	 * of the details of the constraints and mappings.
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
	 * Any combination of letters, numerals, "-" and ".", with a length limit of 64
	 * characters. (This might be an integer, an unprefixed OID, UUID or any other
	 * identifier pattern that meets these constraints.) Ids are case-insensitive.
	 * RFC 4122
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The version of the FHIR specification on which this ImplementationGuide is based
	 * - this is the formal version of the specification, without the revision number,
	 * e.g. [publication].[major].[minor], which is 1.0.2 for this version.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRIdPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRId
	 */
	public function getFhirVersion(): ?FHIRId
	{
		return $this->fhirVersion;
	}

	/**
	 * Any combination of letters, numerals, "-" and ".", with a length limit of 64
	 * characters. (This might be an integer, an unprefixed OID, UUID or any other
	 * identifier pattern that meets these constraints.) Ids are case-insensitive.
	 * RFC 4122
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The version of the FHIR specification on which this ImplementationGuide is based
	 * - this is the formal version of the specification, without the revision number,
	 * e.g. [publication].[major].[minor], which is 1.0.2 for this version.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRIdPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRId $fhirVersion
	 * @return static
	 */
	public function setFhirVersion($fhirVersion = null): object
	{
		if (null !== $fhirVersion && !($fhirVersion instanceof FHIRId)) {
			$fhirVersion = new FHIRId($fhirVersion);
		}
		$this->_trackValueSet($this->fhirVersion, $fhirVersion);
		$this->fhirVersion = $fhirVersion;
		return $this;
	}

	/**
	 * A set of rules or how FHIR is used to solve a particular problem. This resource
	 * is used to gather all the parts of an implementation guide into a logical whole,
	 * and to publish a computable definition of all the parts.
	 *
	 * Another implementation guide that this implementation depends on. Typically, an
	 * implementation guide uses value sets, profiles etc.defined in other
	 * implementation guides.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideDependency[]
	 */
	public function getDependency(): ?array
	{
		return $this->dependency;
	}

	/**
	 * A set of rules or how FHIR is used to solve a particular problem. This resource
	 * is used to gather all the parts of an implementation guide into a logical whole,
	 * and to publish a computable definition of all the parts.
	 *
	 * Another implementation guide that this implementation depends on. Typically, an
	 * implementation guide uses value sets, profiles etc.defined in other
	 * implementation guides.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideDependency $dependency
	 * @return static
	 */
	public function addDependency(?FHIRImplementationGuideDependency $dependency = null): object
	{
		$this->_trackValueAdded();
		$this->dependency[] = $dependency;
		return $this;
	}

	/**
	 * A set of rules or how FHIR is used to solve a particular problem. This resource
	 * is used to gather all the parts of an implementation guide into a logical whole,
	 * and to publish a computable definition of all the parts.
	 *
	 * Another implementation guide that this implementation depends on. Typically, an
	 * implementation guide uses value sets, profiles etc.defined in other
	 * implementation guides.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideDependency[] $dependency
	 * @return static
	 */
	public function setDependency(array $dependency = []): object
	{
		if ([] !== $this->dependency) {
			$this->_trackValuesRemoved(count($this->dependency));
			$this->dependency = [];
		}
		if ([] === $dependency) {
			return $this;
		}
		foreach ($dependency as $v) {
			if ($v instanceof FHIRImplementationGuideDependency) {
				$this->addDependency($v);
			} else {
				$this->addDependency(new FHIRImplementationGuideDependency($v));
			}
		}
		return $this;
	}

	/**
	 * A set of rules or how FHIR is used to solve a particular problem. This resource
	 * is used to gather all the parts of an implementation guide into a logical whole,
	 * and to publish a computable definition of all the parts.
	 *
	 * A logical group of resources. Logical groups can be used when building pages.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePackage[]
	 */
	public function getPackage(): ?array
	{
		return $this->package;
	}

	/**
	 * A set of rules or how FHIR is used to solve a particular problem. This resource
	 * is used to gather all the parts of an implementation guide into a logical whole,
	 * and to publish a computable definition of all the parts.
	 *
	 * A logical group of resources. Logical groups can be used when building pages.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePackage $package
	 * @return static
	 */
	public function addPackage(?FHIRImplementationGuidePackage $package = null): object
	{
		$this->_trackValueAdded();
		$this->package[] = $package;
		return $this;
	}

	/**
	 * A set of rules or how FHIR is used to solve a particular problem. This resource
	 * is used to gather all the parts of an implementation guide into a logical whole,
	 * and to publish a computable definition of all the parts.
	 *
	 * A logical group of resources. Logical groups can be used when building pages.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePackage[] $package
	 * @return static
	 */
	public function setPackage(array $package = []): object
	{
		if ([] !== $this->package) {
			$this->_trackValuesRemoved(count($this->package));
			$this->package = [];
		}
		if ([] === $package) {
			return $this;
		}
		foreach ($package as $v) {
			if ($v instanceof FHIRImplementationGuidePackage) {
				$this->addPackage($v);
			} else {
				$this->addPackage(new FHIRImplementationGuidePackage($v));
			}
		}
		return $this;
	}

	/**
	 * A set of rules or how FHIR is used to solve a particular problem. This resource
	 * is used to gather all the parts of an implementation guide into a logical whole,
	 * and to publish a computable definition of all the parts.
	 *
	 * A set of profiles that all resources covered by this implementation guide must
	 * conform to.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideGlobal[]
	 */
	public function getGlobal(): ?array
	{
		return $this->global;
	}

	/**
	 * A set of rules or how FHIR is used to solve a particular problem. This resource
	 * is used to gather all the parts of an implementation guide into a logical whole,
	 * and to publish a computable definition of all the parts.
	 *
	 * A set of profiles that all resources covered by this implementation guide must
	 * conform to.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideGlobal $global
	 * @return static
	 */
	public function addGlobal(?FHIRImplementationGuideGlobal $global = null): object
	{
		$this->_trackValueAdded();
		$this->global[] = $global;
		return $this;
	}

	/**
	 * A set of rules or how FHIR is used to solve a particular problem. This resource
	 * is used to gather all the parts of an implementation guide into a logical whole,
	 * and to publish a computable definition of all the parts.
	 *
	 * A set of profiles that all resources covered by this implementation guide must
	 * conform to.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideGlobal[] $global
	 * @return static
	 */
	public function setGlobal(array $global = []): object
	{
		if ([] !== $this->global) {
			$this->_trackValuesRemoved(count($this->global));
			$this->global = [];
		}
		if ([] === $global) {
			return $this;
		}
		foreach ($global as $v) {
			if ($v instanceof FHIRImplementationGuideGlobal) {
				$this->addGlobal($v);
			} else {
				$this->addGlobal(new FHIRImplementationGuideGlobal($v));
			}
		}
		return $this;
	}

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A binary file that is included in the implementation guide when it is published.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive[]|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri[]
	 */
	public function getBinary(): ?array
	{
		return $this->binary;
	}

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A binary file that is included in the implementation guide when it is published.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive[]|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri[] $binary
	 * @return static
	 */
	public function addBinary($binary = null): object
	{
		if (null !== $binary && !($binary instanceof FHIRUri)) {
			$binary = new FHIRUri($binary);
		}
		$this->_trackValueAdded();
		$this->binary[] = $binary;
		return $this;
	}

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A binary file that is included in the implementation guide when it is published.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri[] $binary
	 * @return static
	 */
	public function setBinary(array $binary = []): object
	{
		if ([] !== $this->binary) {
			$this->_trackValuesRemoved(count($this->binary));
			$this->binary = [];
		}
		if ([] === $binary) {
			return $this;
		}
		foreach ($binary as $v) {
			if ($v instanceof FHIRUri) {
				$this->addBinary($v);
			} else {
				$this->addBinary(new FHIRUri($v));
			}
		}
		return $this;
	}

	/**
	 * A set of rules or how FHIR is used to solve a particular problem. This resource
	 * is used to gather all the parts of an implementation guide into a logical whole,
	 * and to publish a computable definition of all the parts.
	 *
	 * A page / section in the implementation guide. The root page is the
	 * implementation guide home page.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage
	 */
	public function getPage(): ?FHIRImplementationGuidePage
	{
		return $this->page;
	}

	/**
	 * A set of rules or how FHIR is used to solve a particular problem. This resource
	 * is used to gather all the parts of an implementation guide into a logical whole,
	 * and to publish a computable definition of all the parts.
	 *
	 * A page / section in the implementation guide. The root page is the
	 * implementation guide home page.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage $page
	 * @return static
	 */
	public function setPage(?FHIRImplementationGuidePage $page = null): object
	{
		$this->_trackValueSet($this->page, $page);
		$this->page = $page;
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
		if (null !== ($v = $this->getDescription())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DESCRIPTION] = $fieldErrs;
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
		if (null !== ($v = $this->getFhirVersion())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FHIR_VERSION] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getDependency())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_DEPENDENCY, $i)] = $fieldErrs;
				}
			}
		}
		if ([] !== ($vs = $this->getPackage())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_PACKAGE, $i)] = $fieldErrs;
				}
			}
		}
		if ([] !== ($vs = $this->getGlobal())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_GLOBAL, $i)] = $fieldErrs;
				}
			}
		}
		if ([] !== ($vs = $this->getBinary())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_BINARY, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getPage())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PAGE] = $fieldErrs;
			}
		}
		if (isset($validationRules[self::FIELD_URL])) {
			$v = $this->getUrl();
			foreach ($validationRules[self::FIELD_URL] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE,
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
		if (isset($validationRules[self::FIELD_VERSION])) {
			$v = $this->getVersion();
			foreach ($validationRules[self::FIELD_VERSION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE,
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
					PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE,
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
					PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE,
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
					PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE,
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
					PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE,
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
					PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE,
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
					PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE,
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
		if (isset($validationRules[self::FIELD_DESCRIPTION])) {
			$v = $this->getDescription();
			foreach ($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE,
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
		if (isset($validationRules[self::FIELD_USE_CONTEXT])) {
			$v = $this->getUseContext();
			foreach ($validationRules[self::FIELD_USE_CONTEXT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE,
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
					PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE,
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
		if (isset($validationRules[self::FIELD_FHIR_VERSION])) {
			$v = $this->getFhirVersion();
			foreach ($validationRules[self::FIELD_FHIR_VERSION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE,
					self::FIELD_FHIR_VERSION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FHIR_VERSION])) {
						$errs[self::FIELD_FHIR_VERSION] = [];
					}
					$errs[self::FIELD_FHIR_VERSION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEPENDENCY])) {
			$v = $this->getDependency();
			foreach ($validationRules[self::FIELD_DEPENDENCY] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE,
					self::FIELD_DEPENDENCY,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEPENDENCY])) {
						$errs[self::FIELD_DEPENDENCY] = [];
					}
					$errs[self::FIELD_DEPENDENCY][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PACKAGE])) {
			$v = $this->getPackage();
			foreach ($validationRules[self::FIELD_PACKAGE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE,
					self::FIELD_PACKAGE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PACKAGE])) {
						$errs[self::FIELD_PACKAGE] = [];
					}
					$errs[self::FIELD_PACKAGE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_GLOBAL])) {
			$v = $this->getGlobal();
			foreach ($validationRules[self::FIELD_GLOBAL] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE,
					self::FIELD_GLOBAL,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_GLOBAL])) {
						$errs[self::FIELD_GLOBAL] = [];
					}
					$errs[self::FIELD_GLOBAL][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_BINARY])) {
			$v = $this->getBinary();
			foreach ($validationRules[self::FIELD_BINARY] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE,
					self::FIELD_BINARY,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_BINARY])) {
						$errs[self::FIELD_BINARY] = [];
					}
					$errs[self::FIELD_BINARY][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PAGE])) {
			$v = $this->getPage();
			foreach ($validationRules[self::FIELD_PAGE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE,
					self::FIELD_PAGE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PAGE])) {
						$errs[self::FIELD_PAGE] = [];
					}
					$errs[self::FIELD_PAGE][$rule] = $err;
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRImplementationGuide $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRImplementationGuide
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
						'FHIRImplementationGuide::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRImplementationGuide::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRImplementationGuide(null);
		} elseif (!is_object($type) || !($type instanceof FHIRImplementationGuide)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRImplementationGuide::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRImplementationGuide or null, %s seen.',
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
				$type->addContact(FHIRImplementationGuideContact::xmlUnserialize($n));
			} elseif (self::FIELD_DATE === $n->nodeName) {
				$type->setDate(FHIRDateTime::xmlUnserialize($n));
			} elseif (self::FIELD_DESCRIPTION === $n->nodeName) {
				$type->setDescription(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_USE_CONTEXT === $n->nodeName) {
				$type->addUseContext(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_COPYRIGHT === $n->nodeName) {
				$type->setCopyright(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_FHIR_VERSION === $n->nodeName) {
				$type->setFhirVersion(FHIRId::xmlUnserialize($n));
			} elseif (self::FIELD_DEPENDENCY === $n->nodeName) {
				$type->addDependency(FHIRImplementationGuideDependency::xmlUnserialize($n));
			} elseif (self::FIELD_PACKAGE === $n->nodeName) {
				$type->addPackage(FHIRImplementationGuidePackage::xmlUnserialize($n));
			} elseif (self::FIELD_GLOBAL === $n->nodeName) {
				$type->addGlobal(FHIRImplementationGuideGlobal::xmlUnserialize($n));
			} elseif (self::FIELD_BINARY === $n->nodeName) {
				$type->addBinary(FHIRUri::xmlUnserialize($n));
			} elseif (self::FIELD_PAGE === $n->nodeName) {
				$type->setPage(FHIRImplementationGuidePage::xmlUnserialize($n));
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
		$n = $element->attributes->getNamedItem(self::FIELD_DESCRIPTION);
		if (null !== $n) {
			$pt = $type->getDescription();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setDescription($n->nodeValue);
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
		$n = $element->attributes->getNamedItem(self::FIELD_FHIR_VERSION);
		if (null !== $n) {
			$pt = $type->getFhirVersion();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setFhirVersion($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_BINARY);
		if (null !== $n) {
			$pt = $type->getBinary();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->addBinary($n->nodeValue);
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
		if (null !== ($v = $this->getDescription())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DESCRIPTION);
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
		if (null !== ($v = $this->getFhirVersion())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FHIR_VERSION);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getDependency())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_DEPENDENCY);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if ([] !== ($vs = $this->getPackage())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_PACKAGE);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if ([] !== ($vs = $this->getGlobal())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_GLOBAL);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if ([] !== ($vs = $this->getBinary())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_BINARY);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if (null !== ($v = $this->getPage())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PAGE);
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
		if (null !== ($v = $this->getFhirVersion())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_FHIR_VERSION} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRId::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_FHIR_VERSION_EXT} = $ext;
			}
		}
		if ([] !== ($vs = $this->getDependency())) {
			$out->{self::FIELD_DEPENDENCY} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_DEPENDENCY}[] = $v;
			}
		}
		if ([] !== ($vs = $this->getPackage())) {
			$out->{self::FIELD_PACKAGE} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_PACKAGE}[] = $v;
			}
		}
		if ([] !== ($vs = $this->getGlobal())) {
			$out->{self::FIELD_GLOBAL} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_GLOBAL}[] = $v;
			}
		}
		if ([] !== ($vs = $this->getBinary())) {
			$vals = [];
			$exts = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$val = $v->getValue();
				$ext = $v->jsonSerialize();
				unset($ext->{FHIRUri::FIELD_VALUE});
				if (null !== $val) {
					$vals[] = $val;
				}
				if ([] !== $ext) {
					$exts[] = $ext;
				}
			}
			if ([] !== $vals) {
				$out->{self::FIELD_BINARY} = $vals;
			}
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_BINARY_EXT} = $exts;
			}
		}
		if (null !== ($v = $this->getPage())) {
			$out->{self::FIELD_PAGE} = $v;
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
