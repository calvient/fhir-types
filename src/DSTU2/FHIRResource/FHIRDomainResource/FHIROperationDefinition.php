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

use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionContact;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRExtension;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRId;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMeta;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRNarrative;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIROperationKind;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri;
use Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource;
use Calvient\FhirTypes\DSTU2\PHPFHIRConstants;
use Calvient\FhirTypes\DSTU2\PHPFHIRContainedTypeInterface;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeInterface;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeMap;

/**
 * A formal computable definition of an operation (on the RESTful interface) or a
 * named query (using the search interaction).
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIROperationDefinition
 * @package \Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIROperationDefinition extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION;
	const FIELD_URL = 'url';
	const FIELD_URL_EXT = '_url';
	const FIELD_VERSION = 'version';
	const FIELD_VERSION_EXT = '_version';
	const FIELD_NAME = 'name';
	const FIELD_NAME_EXT = '_name';
	const FIELD_STATUS = 'status';
	const FIELD_STATUS_EXT = '_status';
	const FIELD_KIND = 'kind';
	const FIELD_KIND_EXT = '_kind';
	const FIELD_EXPERIMENTAL = 'experimental';
	const FIELD_EXPERIMENTAL_EXT = '_experimental';
	const FIELD_PUBLISHER = 'publisher';
	const FIELD_PUBLISHER_EXT = '_publisher';
	const FIELD_CONTACT = 'contact';
	const FIELD_DATE = 'date';
	const FIELD_DATE_EXT = '_date';
	const FIELD_DESCRIPTION = 'description';
	const FIELD_DESCRIPTION_EXT = '_description';
	const FIELD_REQUIREMENTS = 'requirements';
	const FIELD_REQUIREMENTS_EXT = '_requirements';
	const FIELD_IDEMPOTENT = 'idempotent';
	const FIELD_IDEMPOTENT_EXT = '_idempotent';
	const FIELD_CODE = 'code';
	const FIELD_CODE_EXT = '_code';
	const FIELD_NOTES = 'notes';
	const FIELD_NOTES_EXT = '_notes';
	const FIELD_BASE = 'base';
	const FIELD_SYSTEM = 'system';
	const FIELD_SYSTEM_EXT = '_system';
	const FIELD_TYPE = 'type';
	const FIELD_TYPE_EXT = '_type';
	const FIELD_INSTANCE = 'instance';
	const FIELD_INSTANCE_EXT = '_instance';
	const FIELD_PARAMETER = 'parameter';

	/** @var string */
	private $_xmlns = '';

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * An absolute URL that is used to identify this operation definition when it is
	 * referenced in a specification, model, design or an instance. This SHALL be a
	 * URL, SHOULD be globally unique, and SHOULD be an address at which this operation
	 * definition is (or will be) published.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri
	 */
	protected ?FHIRUri $url = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The identifier that is used to identify this version of the profile when it is
	 * referenced in a specification, model, design or instance. This is an arbitrary
	 * value managed by the profile author manually and the value should be a
	 * timestamp.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $version = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A free text natural language name identifying the operation.
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
	 * The status of the profile.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode
	 */
	protected ?FHIRCode $status = null;

	/**
	 * Whether an operation is a normal operation or a query.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Whether this is an operation or a named query.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIROperationKind
	 */
	protected ?FHIROperationKind $kind = null;

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * This profile was authored for testing purposes (or
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
	 * The name of the individual or organization that published the operation
	 * definition.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $publisher = null;

	/**
	 * A formal computable definition of an operation (on the RESTful interface) or a
	 * named query (using the search interaction).
	 *
	 * Contacts to assist a user in finding and communicating with the publisher.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionContact[]
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
	 * The date this version of the operation definition was published. The date must
	 * change when the business version changes, if it does, and it must change if the
	 * status code changes. In addition, it should change when the substantive content
	 * of the Operation Definition changes.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime
	 */
	protected ?FHIRDateTime $date = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A free text natural language description of the profile and its use.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $description = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Explains why this operation definition is needed and why it's been constrained
	 * as it has.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $requirements = null;

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Operations that are idempotent (see [HTTP specification definition of
	 * idempotent](http://www.w3.org/Protocols/rfc2616/rfc2616-sec9.html)) may be
	 * invoked by performing an HTTP GET operation instead of a POST.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
	 */
	protected ?FHIRBoolean $idempotent = null;

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The name used to invoke the operation.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode
	 */
	protected ?FHIRCode $code = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Additional information about how to use this operation or named query.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $notes = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Indicates that this operation definition is a constraining profile on the base.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $base = null;

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Indicates whether this operation or named query can be invoked at the system
	 * level (e.g. without needing to choose a resource type for the context).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
	 */
	protected ?FHIRBoolean $system = null;

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Indicates whether this operation or named query can be invoked at the resource
	 * type level for any given resource type level (e.g. without needing to choose a
	 * resource type for the context).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive[]|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode[]
	 */
	protected ?array $type = [];

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Indicates whether this operation can be invoked on a particular instance of one
	 * of the given types.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
	 */
	protected ?FHIRBoolean $instance = null;

	/**
	 * A formal computable definition of an operation (on the RESTful interface) or a
	 * named query (using the search interaction).
	 *
	 * The parameters for the operation/query.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter[]
	 */
	protected ?array $parameter = [];

	/**
	 * Validation map for fields in type OperationDefinition
	 * @var array
	 */
	private static array $_validationRules = [];

	/**
	 * FHIROperationDefinition Constructor
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
					'FHIROperationDefinition::_construct - $data expected to be null or array, %s seen',
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
		if (isset($data[self::FIELD_KIND]) || isset($data[self::FIELD_KIND_EXT])) {
			$value = $data[self::FIELD_KIND] ?? null;
			$ext =
				isset($data[self::FIELD_KIND_EXT]) && is_array($data[self::FIELD_KIND_EXT])
					? $data[self::FIELD_KIND_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIROperationKind) {
					$this->setKind($value);
				} elseif (is_array($value)) {
					$this->setKind(new FHIROperationKind(array_merge($ext, $value)));
				} else {
					$this->setKind(
						new FHIROperationKind([FHIROperationKind::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setKind(new FHIROperationKind($ext));
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
					if ($v instanceof FHIROperationDefinitionContact) {
						$this->addContact($v);
					} else {
						$this->addContact(new FHIROperationDefinitionContact($v));
					}
				}
			} elseif ($data[self::FIELD_CONTACT] instanceof FHIROperationDefinitionContact) {
				$this->addContact($data[self::FIELD_CONTACT]);
			} else {
				$this->addContact(new FHIROperationDefinitionContact($data[self::FIELD_CONTACT]));
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
		if (isset($data[self::FIELD_REQUIREMENTS]) || isset($data[self::FIELD_REQUIREMENTS_EXT])) {
			$value = $data[self::FIELD_REQUIREMENTS] ?? null;
			$ext =
				isset($data[self::FIELD_REQUIREMENTS_EXT]) &&
				is_array($data[self::FIELD_REQUIREMENTS_EXT])
					? $data[self::FIELD_REQUIREMENTS_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->setRequirements($value);
				} elseif (is_array($value)) {
					$this->setRequirements(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->setRequirements(
						new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setRequirements(new FHIRString($ext));
			}
		}
		if (isset($data[self::FIELD_IDEMPOTENT]) || isset($data[self::FIELD_IDEMPOTENT_EXT])) {
			$value = $data[self::FIELD_IDEMPOTENT] ?? null;
			$ext =
				isset($data[self::FIELD_IDEMPOTENT_EXT]) &&
				is_array($data[self::FIELD_IDEMPOTENT_EXT])
					? $data[self::FIELD_IDEMPOTENT_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRBoolean) {
					$this->setIdempotent($value);
				} elseif (is_array($value)) {
					$this->setIdempotent(new FHIRBoolean(array_merge($ext, $value)));
				} else {
					$this->setIdempotent(
						new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setIdempotent(new FHIRBoolean($ext));
			}
		}
		if (isset($data[self::FIELD_CODE]) || isset($data[self::FIELD_CODE_EXT])) {
			$value = $data[self::FIELD_CODE] ?? null;
			$ext =
				isset($data[self::FIELD_CODE_EXT]) && is_array($data[self::FIELD_CODE_EXT])
					? $data[self::FIELD_CODE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRCode) {
					$this->setCode($value);
				} elseif (is_array($value)) {
					$this->setCode(new FHIRCode(array_merge($ext, $value)));
				} else {
					$this->setCode(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setCode(new FHIRCode($ext));
			}
		}
		if (isset($data[self::FIELD_NOTES]) || isset($data[self::FIELD_NOTES_EXT])) {
			$value = $data[self::FIELD_NOTES] ?? null;
			$ext =
				isset($data[self::FIELD_NOTES_EXT]) && is_array($data[self::FIELD_NOTES_EXT])
					? $data[self::FIELD_NOTES_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->setNotes($value);
				} elseif (is_array($value)) {
					$this->setNotes(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->setNotes(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setNotes(new FHIRString($ext));
			}
		}
		if (isset($data[self::FIELD_BASE])) {
			if ($data[self::FIELD_BASE] instanceof FHIRReference) {
				$this->setBase($data[self::FIELD_BASE]);
			} else {
				$this->setBase(new FHIRReference($data[self::FIELD_BASE]));
			}
		}
		if (isset($data[self::FIELD_SYSTEM]) || isset($data[self::FIELD_SYSTEM_EXT])) {
			$value = $data[self::FIELD_SYSTEM] ?? null;
			$ext =
				isset($data[self::FIELD_SYSTEM_EXT]) && is_array($data[self::FIELD_SYSTEM_EXT])
					? $data[self::FIELD_SYSTEM_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRBoolean) {
					$this->setSystem($value);
				} elseif (is_array($value)) {
					$this->setSystem(new FHIRBoolean(array_merge($ext, $value)));
				} else {
					$this->setSystem(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setSystem(new FHIRBoolean($ext));
			}
		}
		if (isset($data[self::FIELD_TYPE]) || isset($data[self::FIELD_TYPE_EXT])) {
			$value = $data[self::FIELD_TYPE] ?? null;
			$ext =
				isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT])
					? $data[self::FIELD_TYPE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRCode) {
					$this->addType($value);
				} elseif (is_array($value)) {
					foreach ($value as $i => $v) {
						if ($v instanceof FHIRCode) {
							$this->addType($v);
						} else {
							$iext = isset($ext[$i]) && is_array($ext[$i]) ? $ext[$i] : [];
							if (is_array($v)) {
								$this->addType(new FHIRCode(array_merge($v, $iext)));
							} else {
								$this->addType(new FHIRCode([FHIRCode::FIELD_VALUE => $v] + $iext));
							}
						}
					}
				} elseif (is_array($value)) {
					$this->addType(new FHIRCode(array_merge($ext, $value)));
				} else {
					$this->addType(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				foreach ($ext as $iext) {
					$this->addType(new FHIRCode($iext));
				}
			}
		}
		if (isset($data[self::FIELD_INSTANCE]) || isset($data[self::FIELD_INSTANCE_EXT])) {
			$value = $data[self::FIELD_INSTANCE] ?? null;
			$ext =
				isset($data[self::FIELD_INSTANCE_EXT]) && is_array($data[self::FIELD_INSTANCE_EXT])
					? $data[self::FIELD_INSTANCE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRBoolean) {
					$this->setInstance($value);
				} elseif (is_array($value)) {
					$this->setInstance(new FHIRBoolean(array_merge($ext, $value)));
				} else {
					$this->setInstance(
						new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setInstance(new FHIRBoolean($ext));
			}
		}
		if (isset($data[self::FIELD_PARAMETER])) {
			if (is_array($data[self::FIELD_PARAMETER])) {
				foreach ($data[self::FIELD_PARAMETER] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIROperationDefinitionParameter) {
						$this->addParameter($v);
					} else {
						$this->addParameter(new FHIROperationDefinitionParameter($v));
					}
				}
			} elseif ($data[self::FIELD_PARAMETER] instanceof FHIROperationDefinitionParameter) {
				$this->addParameter($data[self::FIELD_PARAMETER]);
			} else {
				$this->addParameter(
					new FHIROperationDefinitionParameter($data[self::FIELD_PARAMETER]),
				);
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
		return "<OperationDefinition{$xmlns}></OperationDefinition>";
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
	 * An absolute URL that is used to identify this operation definition when it is
	 * referenced in a specification, model, design or an instance. This SHALL be a
	 * URL, SHOULD be globally unique, and SHOULD be an address at which this operation
	 * definition is (or will be) published.
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
	 * An absolute URL that is used to identify this operation definition when it is
	 * referenced in a specification, model, design or an instance. This SHALL be a
	 * URL, SHOULD be globally unique, and SHOULD be an address at which this operation
	 * definition is (or will be) published.
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
	 * The identifier that is used to identify this version of the profile when it is
	 * referenced in a specification, model, design or instance. This is an arbitrary
	 * value managed by the profile author manually and the value should be a
	 * timestamp.
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
	 * The identifier that is used to identify this version of the profile when it is
	 * referenced in a specification, model, design or instance. This is an arbitrary
	 * value managed by the profile author manually and the value should be a
	 * timestamp.
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
	 * A free text natural language name identifying the operation.
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
	 * A free text natural language name identifying the operation.
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
	 * The status of the profile.
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
	 * The status of the profile.
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
	 * Whether an operation is a normal operation or a query.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Whether this is an operation or a named query.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIROperationKind
	 */
	public function getKind(): ?FHIROperationKind
	{
		return $this->kind;
	}

	/**
	 * Whether an operation is a normal operation or a query.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Whether this is an operation or a named query.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIROperationKind $kind
	 * @return static
	 */
	public function setKind(?FHIROperationKind $kind = null): object
	{
		$this->_trackValueSet($this->kind, $kind);
		$this->kind = $kind;
		return $this;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * This profile was authored for testing purposes (or
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
	 * This profile was authored for testing purposes (or
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
	 * The name of the individual or organization that published the operation
	 * definition.
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
	 * The name of the individual or organization that published the operation
	 * definition.
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
	 * A formal computable definition of an operation (on the RESTful interface) or a
	 * named query (using the search interaction).
	 *
	 * Contacts to assist a user in finding and communicating with the publisher.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionContact[]
	 */
	public function getContact(): ?array
	{
		return $this->contact;
	}

	/**
	 * A formal computable definition of an operation (on the RESTful interface) or a
	 * named query (using the search interaction).
	 *
	 * Contacts to assist a user in finding and communicating with the publisher.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionContact $contact
	 * @return static
	 */
	public function addContact(?FHIROperationDefinitionContact $contact = null): object
	{
		$this->_trackValueAdded();
		$this->contact[] = $contact;
		return $this;
	}

	/**
	 * A formal computable definition of an operation (on the RESTful interface) or a
	 * named query (using the search interaction).
	 *
	 * Contacts to assist a user in finding and communicating with the publisher.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionContact[] $contact
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
			if ($v instanceof FHIROperationDefinitionContact) {
				$this->addContact($v);
			} else {
				$this->addContact(new FHIROperationDefinitionContact($v));
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
	 * The date this version of the operation definition was published. The date must
	 * change when the business version changes, if it does, and it must change if the
	 * status code changes. In addition, it should change when the substantive content
	 * of the Operation Definition changes.
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
	 * The date this version of the operation definition was published. The date must
	 * change when the business version changes, if it does, and it must change if the
	 * status code changes. In addition, it should change when the substantive content
	 * of the Operation Definition changes.
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
	 * A free text natural language description of the profile and its use.
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
	 * A free text natural language description of the profile and its use.
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
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Explains why this operation definition is needed and why it's been constrained
	 * as it has.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	public function getRequirements(): ?FHIRString
	{
		return $this->requirements;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Explains why this operation definition is needed and why it's been constrained
	 * as it has.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString $requirements
	 * @return static
	 */
	public function setRequirements($requirements = null): object
	{
		if (null !== $requirements && !($requirements instanceof FHIRString)) {
			$requirements = new FHIRString($requirements);
		}
		$this->_trackValueSet($this->requirements, $requirements);
		$this->requirements = $requirements;
		return $this;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Operations that are idempotent (see [HTTP specification definition of
	 * idempotent](http://www.w3.org/Protocols/rfc2616/rfc2616-sec9.html)) may be
	 * invoked by performing an HTTP GET operation instead of a POST.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
	 */
	public function getIdempotent(): ?FHIRBoolean
	{
		return $this->idempotent;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Operations that are idempotent (see [HTTP specification definition of
	 * idempotent](http://www.w3.org/Protocols/rfc2616/rfc2616-sec9.html)) may be
	 * invoked by performing an HTTP GET operation instead of a POST.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean $idempotent
	 * @return static
	 */
	public function setIdempotent($idempotent = null): object
	{
		if (null !== $idempotent && !($idempotent instanceof FHIRBoolean)) {
			$idempotent = new FHIRBoolean($idempotent);
		}
		$this->_trackValueSet($this->idempotent, $idempotent);
		$this->idempotent = $idempotent;
		return $this;
	}

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The name used to invoke the operation.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode
	 */
	public function getCode(): ?FHIRCode
	{
		return $this->code;
	}

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The name used to invoke the operation.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode $code
	 * @return static
	 */
	public function setCode($code = null): object
	{
		if (null !== $code && !($code instanceof FHIRCode)) {
			$code = new FHIRCode($code);
		}
		$this->_trackValueSet($this->code, $code);
		$this->code = $code;
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Additional information about how to use this operation or named query.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	public function getNotes(): ?FHIRString
	{
		return $this->notes;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Additional information about how to use this operation or named query.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString $notes
	 * @return static
	 */
	public function setNotes($notes = null): object
	{
		if (null !== $notes && !($notes instanceof FHIRString)) {
			$notes = new FHIRString($notes);
		}
		$this->_trackValueSet($this->notes, $notes);
		$this->notes = $notes;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Indicates that this operation definition is a constraining profile on the base.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getBase(): ?FHIRReference
	{
		return $this->base;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Indicates that this operation definition is a constraining profile on the base.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $base
	 * @return static
	 */
	public function setBase(?FHIRReference $base = null): object
	{
		$this->_trackValueSet($this->base, $base);
		$this->base = $base;
		return $this;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Indicates whether this operation or named query can be invoked at the system
	 * level (e.g. without needing to choose a resource type for the context).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
	 */
	public function getSystem(): ?FHIRBoolean
	{
		return $this->system;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Indicates whether this operation or named query can be invoked at the system
	 * level (e.g. without needing to choose a resource type for the context).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean $system
	 * @return static
	 */
	public function setSystem($system = null): object
	{
		if (null !== $system && !($system instanceof FHIRBoolean)) {
			$system = new FHIRBoolean($system);
		}
		$this->_trackValueSet($this->system, $system);
		$this->system = $system;
		return $this;
	}

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Indicates whether this operation or named query can be invoked at the resource
	 * type level for any given resource type level (e.g. without needing to choose a
	 * resource type for the context).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive[]|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode[]
	 */
	public function getType(): ?array
	{
		return $this->type;
	}

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Indicates whether this operation or named query can be invoked at the resource
	 * type level for any given resource type level (e.g. without needing to choose a
	 * resource type for the context).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive[]|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode[] $type
	 * @return static
	 */
	public function addType($type = null): object
	{
		if (null !== $type && !($type instanceof FHIRCode)) {
			$type = new FHIRCode($type);
		}
		$this->_trackValueAdded();
		$this->type[] = $type;
		return $this;
	}

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Indicates whether this operation or named query can be invoked at the resource
	 * type level for any given resource type level (e.g. without needing to choose a
	 * resource type for the context).
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode[] $type
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
			if ($v instanceof FHIRCode) {
				$this->addType($v);
			} else {
				$this->addType(new FHIRCode($v));
			}
		}
		return $this;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Indicates whether this operation can be invoked on a particular instance of one
	 * of the given types.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
	 */
	public function getInstance(): ?FHIRBoolean
	{
		return $this->instance;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Indicates whether this operation can be invoked on a particular instance of one
	 * of the given types.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean $instance
	 * @return static
	 */
	public function setInstance($instance = null): object
	{
		if (null !== $instance && !($instance instanceof FHIRBoolean)) {
			$instance = new FHIRBoolean($instance);
		}
		$this->_trackValueSet($this->instance, $instance);
		$this->instance = $instance;
		return $this;
	}

	/**
	 * A formal computable definition of an operation (on the RESTful interface) or a
	 * named query (using the search interaction).
	 *
	 * The parameters for the operation/query.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter[]
	 */
	public function getParameter(): ?array
	{
		return $this->parameter;
	}

	/**
	 * A formal computable definition of an operation (on the RESTful interface) or a
	 * named query (using the search interaction).
	 *
	 * The parameters for the operation/query.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter $parameter
	 * @return static
	 */
	public function addParameter(?FHIROperationDefinitionParameter $parameter = null): object
	{
		$this->_trackValueAdded();
		$this->parameter[] = $parameter;
		return $this;
	}

	/**
	 * A formal computable definition of an operation (on the RESTful interface) or a
	 * named query (using the search interaction).
	 *
	 * The parameters for the operation/query.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter[] $parameter
	 * @return static
	 */
	public function setParameter(array $parameter = []): object
	{
		if ([] !== $this->parameter) {
			$this->_trackValuesRemoved(count($this->parameter));
			$this->parameter = [];
		}
		if ([] === $parameter) {
			return $this;
		}
		foreach ($parameter as $v) {
			if ($v instanceof FHIROperationDefinitionParameter) {
				$this->addParameter($v);
			} else {
				$this->addParameter(new FHIROperationDefinitionParameter($v));
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
		if (null !== ($v = $this->getKind())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_KIND] = $fieldErrs;
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
		if (null !== ($v = $this->getRequirements())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_REQUIREMENTS] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getIdempotent())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_IDEMPOTENT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getCode())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_CODE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getNotes())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_NOTES] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getBase())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_BASE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getSystem())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_SYSTEM] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getType())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_TYPE, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getInstance())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_INSTANCE] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getParameter())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_PARAMETER, $i)] = $fieldErrs;
				}
			}
		}
		if (isset($validationRules[self::FIELD_URL])) {
			$v = $this->getUrl();
			foreach ($validationRules[self::FIELD_URL] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION,
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
					PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION,
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
					PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION,
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
					PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION,
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
		if (isset($validationRules[self::FIELD_KIND])) {
			$v = $this->getKind();
			foreach ($validationRules[self::FIELD_KIND] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION,
					self::FIELD_KIND,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_KIND])) {
						$errs[self::FIELD_KIND] = [];
					}
					$errs[self::FIELD_KIND][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_EXPERIMENTAL])) {
			$v = $this->getExperimental();
			foreach ($validationRules[self::FIELD_EXPERIMENTAL] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION,
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
					PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION,
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
					PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION,
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
					PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION,
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
					PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION,
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
		if (isset($validationRules[self::FIELD_REQUIREMENTS])) {
			$v = $this->getRequirements();
			foreach ($validationRules[self::FIELD_REQUIREMENTS] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION,
					self::FIELD_REQUIREMENTS,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_REQUIREMENTS])) {
						$errs[self::FIELD_REQUIREMENTS] = [];
					}
					$errs[self::FIELD_REQUIREMENTS][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_IDEMPOTENT])) {
			$v = $this->getIdempotent();
			foreach ($validationRules[self::FIELD_IDEMPOTENT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION,
					self::FIELD_IDEMPOTENT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_IDEMPOTENT])) {
						$errs[self::FIELD_IDEMPOTENT] = [];
					}
					$errs[self::FIELD_IDEMPOTENT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_CODE])) {
			$v = $this->getCode();
			foreach ($validationRules[self::FIELD_CODE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION,
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
		if (isset($validationRules[self::FIELD_NOTES])) {
			$v = $this->getNotes();
			foreach ($validationRules[self::FIELD_NOTES] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION,
					self::FIELD_NOTES,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_NOTES])) {
						$errs[self::FIELD_NOTES] = [];
					}
					$errs[self::FIELD_NOTES][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_BASE])) {
			$v = $this->getBase();
			foreach ($validationRules[self::FIELD_BASE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION,
					self::FIELD_BASE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_BASE])) {
						$errs[self::FIELD_BASE] = [];
					}
					$errs[self::FIELD_BASE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_SYSTEM])) {
			$v = $this->getSystem();
			foreach ($validationRules[self::FIELD_SYSTEM] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION,
					self::FIELD_SYSTEM,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_SYSTEM])) {
						$errs[self::FIELD_SYSTEM] = [];
					}
					$errs[self::FIELD_SYSTEM][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_TYPE])) {
			$v = $this->getType();
			foreach ($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION,
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
		if (isset($validationRules[self::FIELD_INSTANCE])) {
			$v = $this->getInstance();
			foreach ($validationRules[self::FIELD_INSTANCE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION,
					self::FIELD_INSTANCE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_INSTANCE])) {
						$errs[self::FIELD_INSTANCE] = [];
					}
					$errs[self::FIELD_INSTANCE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PARAMETER])) {
			$v = $this->getParameter();
			foreach ($validationRules[self::FIELD_PARAMETER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION,
					self::FIELD_PARAMETER,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PARAMETER])) {
						$errs[self::FIELD_PARAMETER] = [];
					}
					$errs[self::FIELD_PARAMETER][$rule] = $err;
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIROperationDefinition $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIROperationDefinition
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
						'FHIROperationDefinition::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIROperationDefinition::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIROperationDefinition(null);
		} elseif (!is_object($type) || !($type instanceof FHIROperationDefinition)) {
			throw new \RuntimeException(
				sprintf(
					'FHIROperationDefinition::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIROperationDefinition or null, %s seen.',
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
			} elseif (self::FIELD_KIND === $n->nodeName) {
				$type->setKind(FHIROperationKind::xmlUnserialize($n));
			} elseif (self::FIELD_EXPERIMENTAL === $n->nodeName) {
				$type->setExperimental(FHIRBoolean::xmlUnserialize($n));
			} elseif (self::FIELD_PUBLISHER === $n->nodeName) {
				$type->setPublisher(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_CONTACT === $n->nodeName) {
				$type->addContact(FHIROperationDefinitionContact::xmlUnserialize($n));
			} elseif (self::FIELD_DATE === $n->nodeName) {
				$type->setDate(FHIRDateTime::xmlUnserialize($n));
			} elseif (self::FIELD_DESCRIPTION === $n->nodeName) {
				$type->setDescription(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_REQUIREMENTS === $n->nodeName) {
				$type->setRequirements(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_IDEMPOTENT === $n->nodeName) {
				$type->setIdempotent(FHIRBoolean::xmlUnserialize($n));
			} elseif (self::FIELD_CODE === $n->nodeName) {
				$type->setCode(FHIRCode::xmlUnserialize($n));
			} elseif (self::FIELD_NOTES === $n->nodeName) {
				$type->setNotes(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_BASE === $n->nodeName) {
				$type->setBase(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_SYSTEM === $n->nodeName) {
				$type->setSystem(FHIRBoolean::xmlUnserialize($n));
			} elseif (self::FIELD_TYPE === $n->nodeName) {
				$type->addType(FHIRCode::xmlUnserialize($n));
			} elseif (self::FIELD_INSTANCE === $n->nodeName) {
				$type->setInstance(FHIRBoolean::xmlUnserialize($n));
			} elseif (self::FIELD_PARAMETER === $n->nodeName) {
				$type->addParameter(FHIROperationDefinitionParameter::xmlUnserialize($n));
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
		$n = $element->attributes->getNamedItem(self::FIELD_REQUIREMENTS);
		if (null !== $n) {
			$pt = $type->getRequirements();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setRequirements($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_IDEMPOTENT);
		if (null !== $n) {
			$pt = $type->getIdempotent();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setIdempotent($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_CODE);
		if (null !== $n) {
			$pt = $type->getCode();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setCode($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_NOTES);
		if (null !== $n) {
			$pt = $type->getNotes();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setNotes($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_SYSTEM);
		if (null !== $n) {
			$pt = $type->getSystem();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setSystem($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_TYPE);
		if (null !== $n) {
			$pt = $type->getType();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->addType($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_INSTANCE);
		if (null !== $n) {
			$pt = $type->getInstance();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setInstance($n->nodeValue);
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
		if (null !== ($v = $this->getKind())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_KIND);
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
		if (null !== ($v = $this->getRequirements())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_REQUIREMENTS);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getIdempotent())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_IDEMPOTENT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getCode())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_CODE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getNotes())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_NOTES);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getBase())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_BASE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getSystem())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_SYSTEM);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
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
		if (null !== ($v = $this->getInstance())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_INSTANCE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getParameter())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_PARAMETER);
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
		if (null !== ($v = $this->getKind())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_KIND} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIROperationKind::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_KIND_EXT} = $ext;
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
		if (null !== ($v = $this->getRequirements())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_REQUIREMENTS} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRString::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_REQUIREMENTS_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getIdempotent())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_IDEMPOTENT} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRBoolean::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_IDEMPOTENT_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getCode())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_CODE} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRCode::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_CODE_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getNotes())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_NOTES} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRString::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_NOTES_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getBase())) {
			$out->{self::FIELD_BASE} = $v;
		}
		if (null !== ($v = $this->getSystem())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_SYSTEM} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRBoolean::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_SYSTEM_EXT} = $ext;
			}
		}
		if ([] !== ($vs = $this->getType())) {
			$vals = [];
			$exts = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$val = $v->getValue();
				$ext = $v->jsonSerialize();
				unset($ext->{FHIRCode::FIELD_VALUE});
				if (null !== $val) {
					$vals[] = $val;
				}
				if ([] !== $ext) {
					$exts[] = $ext;
				}
			}
			if ([] !== $vals) {
				$out->{self::FIELD_TYPE} = $vals;
			}
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_TYPE_EXT} = $exts;
			}
		}
		if (null !== ($v = $this->getInstance())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_INSTANCE} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRBoolean::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_INSTANCE_EXT} = $ext;
			}
		}
		if ([] !== ($vs = $this->getParameter())) {
			$out->{self::FIELD_PARAMETER} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_PARAMETER}[] = $v;
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
