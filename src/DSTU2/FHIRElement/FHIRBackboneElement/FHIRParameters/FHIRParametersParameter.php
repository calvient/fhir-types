<?php declare(strict_types=1);

namespace Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRParameters;

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

use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAddress;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAnnotation;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAttachment;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBase64Binary;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRContactPoint;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDate;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDecimal;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRElementDefinition;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRExtension;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRHumanName;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRId;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstant;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInteger;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMarkdown;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMeta;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIROid;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPositiveInt;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRange;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRatio;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSampledData;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSignature;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTime;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTiming;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUnsignedInt;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUuid;
use Calvient\FhirTypes\DSTU2\FHIRIdPrimitive;
use Calvient\FhirTypes\DSTU2\PHPFHIRConstants;
use Calvient\FhirTypes\DSTU2\PHPFHIRContainedTypeInterface;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeInterface;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeMap;

/**
 * This special resource type is used to represent an operation request and
 * response (operations.html). It has no other use, and there is no RESTful
 * endpoint associated with it.
 *
 * Class FHIRParametersParameter
 * @package \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRParameters
 */
class FHIRParametersParameter extends FHIRBackboneElement
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_PARAMETERS_DOT_PARAMETER;
	const FIELD_NAME = 'name';
	const FIELD_NAME_EXT = '_name';
	const FIELD_VALUE_BOOLEAN = 'valueBoolean';
	const FIELD_VALUE_BOOLEAN_EXT = '_valueBoolean';
	const FIELD_VALUE_INTEGER = 'valueInteger';
	const FIELD_VALUE_INTEGER_EXT = '_valueInteger';
	const FIELD_VALUE_DECIMAL = 'valueDecimal';
	const FIELD_VALUE_DECIMAL_EXT = '_valueDecimal';
	const FIELD_VALUE_BASE_64BINARY = 'valueBase64Binary';
	const FIELD_VALUE_BASE_64BINARY_EXT = '_valueBase64Binary';
	const FIELD_VALUE_INSTANT = 'valueInstant';
	const FIELD_VALUE_INSTANT_EXT = '_valueInstant';
	const FIELD_VALUE_STRING = 'valueString';
	const FIELD_VALUE_STRING_EXT = '_valueString';
	const FIELD_VALUE_URI = 'valueUri';
	const FIELD_VALUE_URI_EXT = '_valueUri';
	const FIELD_VALUE_DATE = 'valueDate';
	const FIELD_VALUE_DATE_EXT = '_valueDate';
	const FIELD_VALUE_DATE_TIME = 'valueDateTime';
	const FIELD_VALUE_DATE_TIME_EXT = '_valueDateTime';
	const FIELD_VALUE_TIME = 'valueTime';
	const FIELD_VALUE_TIME_EXT = '_valueTime';
	const FIELD_VALUE_CODE = 'valueCode';
	const FIELD_VALUE_CODE_EXT = '_valueCode';
	const FIELD_VALUE_OID = 'valueOid';
	const FIELD_VALUE_OID_EXT = '_valueOid';
	const FIELD_VALUE_UUID = 'valueUuid';
	const FIELD_VALUE_UUID_EXT = '_valueUuid';
	const FIELD_VALUE_ID = 'valueId';
	const FIELD_VALUE_ID_EXT = '_valueId';
	const FIELD_VALUE_UNSIGNED_INT = 'valueUnsignedInt';
	const FIELD_VALUE_UNSIGNED_INT_EXT = '_valueUnsignedInt';
	const FIELD_VALUE_POSITIVE_INT = 'valuePositiveInt';
	const FIELD_VALUE_POSITIVE_INT_EXT = '_valuePositiveInt';
	const FIELD_VALUE_MARKDOWN = 'valueMarkdown';
	const FIELD_VALUE_MARKDOWN_EXT = '_valueMarkdown';
	const FIELD_VALUE_ANNOTATION = 'valueAnnotation';
	const FIELD_VALUE_ATTACHMENT = 'valueAttachment';
	const FIELD_VALUE_IDENTIFIER = 'valueIdentifier';
	const FIELD_VALUE_CODEABLE_CONCEPT = 'valueCodeableConcept';
	const FIELD_VALUE_CODING = 'valueCoding';
	const FIELD_VALUE_QUANTITY = 'valueQuantity';
	const FIELD_VALUE_RANGE = 'valueRange';
	const FIELD_VALUE_PERIOD = 'valuePeriod';
	const FIELD_VALUE_RATIO = 'valueRatio';
	const FIELD_VALUE_REFERENCE = 'valueReference';
	const FIELD_VALUE_SAMPLED_DATA = 'valueSampledData';
	const FIELD_VALUE_SIGNATURE = 'valueSignature';
	const FIELD_VALUE_HUMAN_NAME = 'valueHumanName';
	const FIELD_VALUE_ADDRESS = 'valueAddress';
	const FIELD_VALUE_CONTACT_POINT = 'valueContactPoint';
	const FIELD_VALUE_TIMING = 'valueTiming';
	const FIELD_VALUE_META = 'valueMeta';
	const FIELD_VALUE_ELEMENT_DEFINITION = 'valueElementDefinition';
	const FIELD_RESOURCE = 'resource';
	const FIELD_PART = 'part';

	/** @var string */
	private $_xmlns = '';

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The name of the parameter (reference to the operation definition).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $name = null;

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
	 */
	protected ?FHIRBoolean $valueBoolean = null;

	/**
	 * A whole number
	 * 32 bit number; for values larger than this, use decimal
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRIntegerPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInteger
	 */
	protected ?FHIRInteger $valueInteger = null;

	/**
	 * A rational number with implicit precision
	 * Do not use a IEEE type floating point type, instead use something that works
	 * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRDecimalPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDecimal
	 */
	protected ?FHIRDecimal $valueDecimal = null;

	/**
	 * A stream of bytes
	 * A stream of bytes, base64 encoded
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRBase64BinaryPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBase64Binary
	 */
	protected ?FHIRBase64Binary $valueBase64Binary = null;

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for precisely observed times, typically system logs etc.,
	 * and not human-reported times - for them, see date and dateTime below. Time zone
	 * is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRInstantPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstant
	 */
	protected ?FHIRInstant $valueInstant = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $valueString = null;

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri
	 */
	protected ?FHIRUri $valueUri = null;

	/**
	 * A date or partial date (e.g. just year or year + month). There is no time zone.
	 * The format is a union of the schema types gYear, gYearMonth and date. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRDatePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDate
	 */
	protected ?FHIRDate $valueDate = null;

	/**
	 * A date, date-time or partial date (e.g. just year or year + month). If hours and
	 * minutes are specified, a time zone SHALL be populated. The format is a union of
	 * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
	 * due to schema type constraints but may be zero-filled and may be ignored. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime
	 */
	protected ?FHIRDateTime $valueDateTime = null;

	/**
	 * A time during the day, with no date specified
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTime
	 */
	protected ?FHIRTime $valueTime = null;

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode
	 */
	protected ?FHIRCode $valueCode = null;

	/**
	 * An oid represented as a URI
	 * RFC 3001. See also ISO/IEC 8824:1990 €
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIROidPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIROid
	 */
	protected ?FHIROid $valueOid = null;

	/**
	 * A UUID, represented as a URI
	 * See The Open Group, CDE 1.1 Remote Procedure Call specification, Appendix A.
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRUuidPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUuid
	 */
	protected ?FHIRUuid $valueUuid = null;

	/**
	 * Any combination of letters, numerals, "-" and ".", with a length limit of 64
	 * characters. (This might be an integer, an unprefixed OID, UUID or any other
	 * identifier pattern that meets these constraints.) Ids are case-insensitive.
	 * RFC 4122
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRIdPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRId
	 */
	protected ?FHIRId $valueId = null;

	/**
	 * An integer with a value that is not negative (e.g. >= 0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUnsignedInt
	 */
	protected ?FHIRUnsignedInt $valueUnsignedInt = null;

	/**
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPositiveInt
	 */
	protected ?FHIRPositiveInt $valuePositiveInt = null;

	/**
	 * A string that may contain markdown syntax for optional processing by a mark down
	 * presentation engine
	 * Systems are not required to have markdown support, and there is considerable
	 * variation in markdown syntax, so the text should be readable without markdown
	 * processing. The preferred markdown syntax is described here:
	 * http://daringfireball.net/projects/markdown/syntax (and tests here:
	 * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRMarkdownPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMarkdown
	 */
	protected ?FHIRMarkdown $valueMarkdown = null;

	/**
	 * A text note which also contains information about who made the statement and
	 * when.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAnnotation
	 */
	protected ?FHIRAnnotation $valueAnnotation = null;

	/**
	 * For referring to data content defined in other formats.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAttachment
	 */
	protected ?FHIRAttachment $valueAttachment = null;

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier
	 */
	protected ?FHIRIdentifier $valueIdentifier = null;

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	protected ?FHIRCodeableConcept $valueCodeableConcept = null;

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding
	 */
	protected ?FHIRCoding $valueCoding = null;

	/**
	 * A measured amount (or an amount that can potentially be measured). Note that
	 * measured amounts include amounts that are not precisely quantified, including
	 * amounts involving arbitrary units and floating currencies.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity
	 */
	protected ?FHIRQuantity $valueQuantity = null;

	/**
	 * A set of ordered Quantities defined by a low and high limit.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRange
	 */
	protected ?FHIRRange $valueRange = null;

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod
	 */
	protected ?FHIRPeriod $valuePeriod = null;

	/**
	 * A relationship of two Quantity values - expressed as a numerator and a
	 * denominator.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRatio
	 */
	protected ?FHIRRatio $valueRatio = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $valueReference = null;

	/**
	 * A series of measurements taken by a device, with upper and lower limits. There
	 * may be more than one dimension in the data.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSampledData
	 */
	protected ?FHIRSampledData $valueSampledData = null;

	/**
	 * A digital signature along with supporting context. The signature may be
	 * electronic/cryptographic in nature, or a graphical image representing a
	 * hand-written signature, or a signature process. Different Signature approaches
	 * have different utilities.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSignature
	 */
	protected ?FHIRSignature $valueSignature = null;

	/**
	 * A human's name with the ability to identify parts and usage.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRHumanName
	 */
	protected ?FHIRHumanName $valueHumanName = null;

	/**
	 * There is a variety of postal address formats defined around the world. This
	 * format defines a superset that is the basis for all addresses around the world.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAddress
	 */
	protected ?FHIRAddress $valueAddress = null;

	/**
	 * Details for all kinds of technology mediated contact points for a person or
	 * organization, including telephone, email, etc.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRContactPoint
	 */
	protected ?FHIRContactPoint $valueContactPoint = null;

	/**
	 * Specifies an event that may occur multiple times. Timing schedules are used to
	 * record when things are expected or requested to occur. The most common usage is
	 * in dosage instructions for medications. They are also used when planning care of
	 * various kinds.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTiming
	 */
	protected ?FHIRTiming $valueTiming = null;

	/**
	 * The metadata about a resource. This is content in the resource that is
	 * maintained by the infrastructure. Changes to the content may not always be
	 * associated with version changes to the resource.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMeta
	 */
	protected ?FHIRMeta $valueMeta = null;

	/**
	 * Captures constraints on each element within the resource, profile, or extension.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRElementDefinition
	 */
	protected ?FHIRElementDefinition $valueElementDefinition = null;

	/**
	 * If the parameter is a whole resource.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\PHPFHIRContainedTypeInterface
	 */
	protected ?PHPFHIRContainedTypeInterface $resource = null;

	/**
	 * This special resource type is used to represent an operation request and
	 * response (operations.html). It has no other use, and there is no RESTful
	 * endpoint associated with it.
	 *
	 * A named part of a parameter. In many implementation context, a set of named
	 * parts is known as a "Tuple".
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter[]
	 */
	protected ?array $part = [];

	/**
	 * Validation map for fields in type Parameters.Parameter
	 * @var array
	 */
	private static array $_validationRules = [];

	/**
	 * FHIRParametersParameter Constructor
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
					'FHIRParametersParameter::_construct - $data expected to be null or array, %s seen',
					gettype($data),
				),
			);
		}
		parent::__construct($data);
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
		if (
			isset($data[self::FIELD_VALUE_BOOLEAN]) ||
			isset($data[self::FIELD_VALUE_BOOLEAN_EXT])
		) {
			$value = $data[self::FIELD_VALUE_BOOLEAN] ?? null;
			$ext =
				isset($data[self::FIELD_VALUE_BOOLEAN_EXT]) &&
				is_array($data[self::FIELD_VALUE_BOOLEAN_EXT])
					? $data[self::FIELD_VALUE_BOOLEAN_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRBoolean) {
					$this->setValueBoolean($value);
				} elseif (is_array($value)) {
					$this->setValueBoolean(new FHIRBoolean(array_merge($ext, $value)));
				} else {
					$this->setValueBoolean(
						new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setValueBoolean(new FHIRBoolean($ext));
			}
		}
		if (
			isset($data[self::FIELD_VALUE_INTEGER]) ||
			isset($data[self::FIELD_VALUE_INTEGER_EXT])
		) {
			$value = $data[self::FIELD_VALUE_INTEGER] ?? null;
			$ext =
				isset($data[self::FIELD_VALUE_INTEGER_EXT]) &&
				is_array($data[self::FIELD_VALUE_INTEGER_EXT])
					? $data[self::FIELD_VALUE_INTEGER_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRInteger) {
					$this->setValueInteger($value);
				} elseif (is_array($value)) {
					$this->setValueInteger(new FHIRInteger(array_merge($ext, $value)));
				} else {
					$this->setValueInteger(
						new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setValueInteger(new FHIRInteger($ext));
			}
		}
		if (
			isset($data[self::FIELD_VALUE_DECIMAL]) ||
			isset($data[self::FIELD_VALUE_DECIMAL_EXT])
		) {
			$value = $data[self::FIELD_VALUE_DECIMAL] ?? null;
			$ext =
				isset($data[self::FIELD_VALUE_DECIMAL_EXT]) &&
				is_array($data[self::FIELD_VALUE_DECIMAL_EXT])
					? $data[self::FIELD_VALUE_DECIMAL_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRDecimal) {
					$this->setValueDecimal($value);
				} elseif (is_array($value)) {
					$this->setValueDecimal(new FHIRDecimal(array_merge($ext, $value)));
				} else {
					$this->setValueDecimal(
						new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setValueDecimal(new FHIRDecimal($ext));
			}
		}
		if (
			isset($data[self::FIELD_VALUE_BASE_64BINARY]) ||
			isset($data[self::FIELD_VALUE_BASE_64BINARY_EXT])
		) {
			$value = $data[self::FIELD_VALUE_BASE_64BINARY] ?? null;
			$ext =
				isset($data[self::FIELD_VALUE_BASE_64BINARY_EXT]) &&
				is_array($data[self::FIELD_VALUE_BASE_64BINARY_EXT])
					? $data[self::FIELD_VALUE_BASE_64BINARY_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRBase64Binary) {
					$this->setValueBase64Binary($value);
				} elseif (is_array($value)) {
					$this->setValueBase64Binary(new FHIRBase64Binary(array_merge($ext, $value)));
				} else {
					$this->setValueBase64Binary(
						new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setValueBase64Binary(new FHIRBase64Binary($ext));
			}
		}
		if (
			isset($data[self::FIELD_VALUE_INSTANT]) ||
			isset($data[self::FIELD_VALUE_INSTANT_EXT])
		) {
			$value = $data[self::FIELD_VALUE_INSTANT] ?? null;
			$ext =
				isset($data[self::FIELD_VALUE_INSTANT_EXT]) &&
				is_array($data[self::FIELD_VALUE_INSTANT_EXT])
					? $data[self::FIELD_VALUE_INSTANT_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRInstant) {
					$this->setValueInstant($value);
				} elseif (is_array($value)) {
					$this->setValueInstant(new FHIRInstant(array_merge($ext, $value)));
				} else {
					$this->setValueInstant(
						new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setValueInstant(new FHIRInstant($ext));
			}
		}
		if (isset($data[self::FIELD_VALUE_STRING]) || isset($data[self::FIELD_VALUE_STRING_EXT])) {
			$value = $data[self::FIELD_VALUE_STRING] ?? null;
			$ext =
				isset($data[self::FIELD_VALUE_STRING_EXT]) &&
				is_array($data[self::FIELD_VALUE_STRING_EXT])
					? $data[self::FIELD_VALUE_STRING_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->setValueString($value);
				} elseif (is_array($value)) {
					$this->setValueString(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->setValueString(
						new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setValueString(new FHIRString($ext));
			}
		}
		if (isset($data[self::FIELD_VALUE_URI]) || isset($data[self::FIELD_VALUE_URI_EXT])) {
			$value = $data[self::FIELD_VALUE_URI] ?? null;
			$ext =
				isset($data[self::FIELD_VALUE_URI_EXT]) &&
				is_array($data[self::FIELD_VALUE_URI_EXT])
					? $data[self::FIELD_VALUE_URI_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRUri) {
					$this->setValueUri($value);
				} elseif (is_array($value)) {
					$this->setValueUri(new FHIRUri(array_merge($ext, $value)));
				} else {
					$this->setValueUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setValueUri(new FHIRUri($ext));
			}
		}
		if (isset($data[self::FIELD_VALUE_DATE]) || isset($data[self::FIELD_VALUE_DATE_EXT])) {
			$value = $data[self::FIELD_VALUE_DATE] ?? null;
			$ext =
				isset($data[self::FIELD_VALUE_DATE_EXT]) &&
				is_array($data[self::FIELD_VALUE_DATE_EXT])
					? $data[self::FIELD_VALUE_DATE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRDate) {
					$this->setValueDate($value);
				} elseif (is_array($value)) {
					$this->setValueDate(new FHIRDate(array_merge($ext, $value)));
				} else {
					$this->setValueDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setValueDate(new FHIRDate($ext));
			}
		}
		if (
			isset($data[self::FIELD_VALUE_DATE_TIME]) ||
			isset($data[self::FIELD_VALUE_DATE_TIME_EXT])
		) {
			$value = $data[self::FIELD_VALUE_DATE_TIME] ?? null;
			$ext =
				isset($data[self::FIELD_VALUE_DATE_TIME_EXT]) &&
				is_array($data[self::FIELD_VALUE_DATE_TIME_EXT])
					? $data[self::FIELD_VALUE_DATE_TIME_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRDateTime) {
					$this->setValueDateTime($value);
				} elseif (is_array($value)) {
					$this->setValueDateTime(new FHIRDateTime(array_merge($ext, $value)));
				} else {
					$this->setValueDateTime(
						new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setValueDateTime(new FHIRDateTime($ext));
			}
		}
		if (isset($data[self::FIELD_VALUE_TIME]) || isset($data[self::FIELD_VALUE_TIME_EXT])) {
			$value = $data[self::FIELD_VALUE_TIME] ?? null;
			$ext =
				isset($data[self::FIELD_VALUE_TIME_EXT]) &&
				is_array($data[self::FIELD_VALUE_TIME_EXT])
					? $data[self::FIELD_VALUE_TIME_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRTime) {
					$this->setValueTime($value);
				} elseif (is_array($value)) {
					$this->setValueTime(new FHIRTime(array_merge($ext, $value)));
				} else {
					$this->setValueTime(new FHIRTime([FHIRTime::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setValueTime(new FHIRTime($ext));
			}
		}
		if (isset($data[self::FIELD_VALUE_CODE]) || isset($data[self::FIELD_VALUE_CODE_EXT])) {
			$value = $data[self::FIELD_VALUE_CODE] ?? null;
			$ext =
				isset($data[self::FIELD_VALUE_CODE_EXT]) &&
				is_array($data[self::FIELD_VALUE_CODE_EXT])
					? $data[self::FIELD_VALUE_CODE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRCode) {
					$this->setValueCode($value);
				} elseif (is_array($value)) {
					$this->setValueCode(new FHIRCode(array_merge($ext, $value)));
				} else {
					$this->setValueCode(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setValueCode(new FHIRCode($ext));
			}
		}
		if (isset($data[self::FIELD_VALUE_OID]) || isset($data[self::FIELD_VALUE_OID_EXT])) {
			$value = $data[self::FIELD_VALUE_OID] ?? null;
			$ext =
				isset($data[self::FIELD_VALUE_OID_EXT]) &&
				is_array($data[self::FIELD_VALUE_OID_EXT])
					? $data[self::FIELD_VALUE_OID_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIROid) {
					$this->setValueOid($value);
				} elseif (is_array($value)) {
					$this->setValueOid(new FHIROid(array_merge($ext, $value)));
				} else {
					$this->setValueOid(new FHIROid([FHIROid::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setValueOid(new FHIROid($ext));
			}
		}
		if (isset($data[self::FIELD_VALUE_UUID]) || isset($data[self::FIELD_VALUE_UUID_EXT])) {
			$value = $data[self::FIELD_VALUE_UUID] ?? null;
			$ext =
				isset($data[self::FIELD_VALUE_UUID_EXT]) &&
				is_array($data[self::FIELD_VALUE_UUID_EXT])
					? $data[self::FIELD_VALUE_UUID_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRUuid) {
					$this->setValueUuid($value);
				} elseif (is_array($value)) {
					$this->setValueUuid(new FHIRUuid(array_merge($ext, $value)));
				} else {
					$this->setValueUuid(new FHIRUuid([FHIRUuid::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setValueUuid(new FHIRUuid($ext));
			}
		}
		if (isset($data[self::FIELD_VALUE_ID]) || isset($data[self::FIELD_VALUE_ID_EXT])) {
			$value = $data[self::FIELD_VALUE_ID] ?? null;
			$ext =
				isset($data[self::FIELD_VALUE_ID_EXT]) && is_array($data[self::FIELD_VALUE_ID_EXT])
					? $data[self::FIELD_VALUE_ID_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRId) {
					$this->setValueId($value);
				} elseif (is_array($value)) {
					$this->setValueId(new FHIRId(array_merge($ext, $value)));
				} else {
					$this->setValueId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setValueId(new FHIRId($ext));
			}
		}
		if (
			isset($data[self::FIELD_VALUE_UNSIGNED_INT]) ||
			isset($data[self::FIELD_VALUE_UNSIGNED_INT_EXT])
		) {
			$value = $data[self::FIELD_VALUE_UNSIGNED_INT] ?? null;
			$ext =
				isset($data[self::FIELD_VALUE_UNSIGNED_INT_EXT]) &&
				is_array($data[self::FIELD_VALUE_UNSIGNED_INT_EXT])
					? $data[self::FIELD_VALUE_UNSIGNED_INT_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRUnsignedInt) {
					$this->setValueUnsignedInt($value);
				} elseif (is_array($value)) {
					$this->setValueUnsignedInt(new FHIRUnsignedInt(array_merge($ext, $value)));
				} else {
					$this->setValueUnsignedInt(
						new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setValueUnsignedInt(new FHIRUnsignedInt($ext));
			}
		}
		if (
			isset($data[self::FIELD_VALUE_POSITIVE_INT]) ||
			isset($data[self::FIELD_VALUE_POSITIVE_INT_EXT])
		) {
			$value = $data[self::FIELD_VALUE_POSITIVE_INT] ?? null;
			$ext =
				isset($data[self::FIELD_VALUE_POSITIVE_INT_EXT]) &&
				is_array($data[self::FIELD_VALUE_POSITIVE_INT_EXT])
					? $data[self::FIELD_VALUE_POSITIVE_INT_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRPositiveInt) {
					$this->setValuePositiveInt($value);
				} elseif (is_array($value)) {
					$this->setValuePositiveInt(new FHIRPositiveInt(array_merge($ext, $value)));
				} else {
					$this->setValuePositiveInt(
						new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setValuePositiveInt(new FHIRPositiveInt($ext));
			}
		}
		if (
			isset($data[self::FIELD_VALUE_MARKDOWN]) ||
			isset($data[self::FIELD_VALUE_MARKDOWN_EXT])
		) {
			$value = $data[self::FIELD_VALUE_MARKDOWN] ?? null;
			$ext =
				isset($data[self::FIELD_VALUE_MARKDOWN_EXT]) &&
				is_array($data[self::FIELD_VALUE_MARKDOWN_EXT])
					? $data[self::FIELD_VALUE_MARKDOWN_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRMarkdown) {
					$this->setValueMarkdown($value);
				} elseif (is_array($value)) {
					$this->setValueMarkdown(new FHIRMarkdown(array_merge($ext, $value)));
				} else {
					$this->setValueMarkdown(
						new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setValueMarkdown(new FHIRMarkdown($ext));
			}
		}
		if (isset($data[self::FIELD_VALUE_ANNOTATION])) {
			if ($data[self::FIELD_VALUE_ANNOTATION] instanceof FHIRAnnotation) {
				$this->setValueAnnotation($data[self::FIELD_VALUE_ANNOTATION]);
			} else {
				$this->setValueAnnotation(new FHIRAnnotation($data[self::FIELD_VALUE_ANNOTATION]));
			}
		}
		if (isset($data[self::FIELD_VALUE_ATTACHMENT])) {
			if ($data[self::FIELD_VALUE_ATTACHMENT] instanceof FHIRAttachment) {
				$this->setValueAttachment($data[self::FIELD_VALUE_ATTACHMENT]);
			} else {
				$this->setValueAttachment(new FHIRAttachment($data[self::FIELD_VALUE_ATTACHMENT]));
			}
		}
		if (isset($data[self::FIELD_VALUE_IDENTIFIER])) {
			if ($data[self::FIELD_VALUE_IDENTIFIER] instanceof FHIRIdentifier) {
				$this->setValueIdentifier($data[self::FIELD_VALUE_IDENTIFIER]);
			} else {
				$this->setValueIdentifier(new FHIRIdentifier($data[self::FIELD_VALUE_IDENTIFIER]));
			}
		}
		if (isset($data[self::FIELD_VALUE_CODEABLE_CONCEPT])) {
			if ($data[self::FIELD_VALUE_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
				$this->setValueCodeableConcept($data[self::FIELD_VALUE_CODEABLE_CONCEPT]);
			} else {
				$this->setValueCodeableConcept(
					new FHIRCodeableConcept($data[self::FIELD_VALUE_CODEABLE_CONCEPT]),
				);
			}
		}
		if (isset($data[self::FIELD_VALUE_CODING])) {
			if ($data[self::FIELD_VALUE_CODING] instanceof FHIRCoding) {
				$this->setValueCoding($data[self::FIELD_VALUE_CODING]);
			} else {
				$this->setValueCoding(new FHIRCoding($data[self::FIELD_VALUE_CODING]));
			}
		}
		if (isset($data[self::FIELD_VALUE_QUANTITY])) {
			if ($data[self::FIELD_VALUE_QUANTITY] instanceof FHIRQuantity) {
				$this->setValueQuantity($data[self::FIELD_VALUE_QUANTITY]);
			} else {
				$this->setValueQuantity(new FHIRQuantity($data[self::FIELD_VALUE_QUANTITY]));
			}
		}
		if (isset($data[self::FIELD_VALUE_RANGE])) {
			if ($data[self::FIELD_VALUE_RANGE] instanceof FHIRRange) {
				$this->setValueRange($data[self::FIELD_VALUE_RANGE]);
			} else {
				$this->setValueRange(new FHIRRange($data[self::FIELD_VALUE_RANGE]));
			}
		}
		if (isset($data[self::FIELD_VALUE_PERIOD])) {
			if ($data[self::FIELD_VALUE_PERIOD] instanceof FHIRPeriod) {
				$this->setValuePeriod($data[self::FIELD_VALUE_PERIOD]);
			} else {
				$this->setValuePeriod(new FHIRPeriod($data[self::FIELD_VALUE_PERIOD]));
			}
		}
		if (isset($data[self::FIELD_VALUE_RATIO])) {
			if ($data[self::FIELD_VALUE_RATIO] instanceof FHIRRatio) {
				$this->setValueRatio($data[self::FIELD_VALUE_RATIO]);
			} else {
				$this->setValueRatio(new FHIRRatio($data[self::FIELD_VALUE_RATIO]));
			}
		}
		if (isset($data[self::FIELD_VALUE_REFERENCE])) {
			if ($data[self::FIELD_VALUE_REFERENCE] instanceof FHIRReference) {
				$this->setValueReference($data[self::FIELD_VALUE_REFERENCE]);
			} else {
				$this->setValueReference(new FHIRReference($data[self::FIELD_VALUE_REFERENCE]));
			}
		}
		if (isset($data[self::FIELD_VALUE_SAMPLED_DATA])) {
			if ($data[self::FIELD_VALUE_SAMPLED_DATA] instanceof FHIRSampledData) {
				$this->setValueSampledData($data[self::FIELD_VALUE_SAMPLED_DATA]);
			} else {
				$this->setValueSampledData(
					new FHIRSampledData($data[self::FIELD_VALUE_SAMPLED_DATA]),
				);
			}
		}
		if (isset($data[self::FIELD_VALUE_SIGNATURE])) {
			if ($data[self::FIELD_VALUE_SIGNATURE] instanceof FHIRSignature) {
				$this->setValueSignature($data[self::FIELD_VALUE_SIGNATURE]);
			} else {
				$this->setValueSignature(new FHIRSignature($data[self::FIELD_VALUE_SIGNATURE]));
			}
		}
		if (isset($data[self::FIELD_VALUE_HUMAN_NAME])) {
			if ($data[self::FIELD_VALUE_HUMAN_NAME] instanceof FHIRHumanName) {
				$this->setValueHumanName($data[self::FIELD_VALUE_HUMAN_NAME]);
			} else {
				$this->setValueHumanName(new FHIRHumanName($data[self::FIELD_VALUE_HUMAN_NAME]));
			}
		}
		if (isset($data[self::FIELD_VALUE_ADDRESS])) {
			if ($data[self::FIELD_VALUE_ADDRESS] instanceof FHIRAddress) {
				$this->setValueAddress($data[self::FIELD_VALUE_ADDRESS]);
			} else {
				$this->setValueAddress(new FHIRAddress($data[self::FIELD_VALUE_ADDRESS]));
			}
		}
		if (isset($data[self::FIELD_VALUE_CONTACT_POINT])) {
			if ($data[self::FIELD_VALUE_CONTACT_POINT] instanceof FHIRContactPoint) {
				$this->setValueContactPoint($data[self::FIELD_VALUE_CONTACT_POINT]);
			} else {
				$this->setValueContactPoint(
					new FHIRContactPoint($data[self::FIELD_VALUE_CONTACT_POINT]),
				);
			}
		}
		if (isset($data[self::FIELD_VALUE_TIMING])) {
			if ($data[self::FIELD_VALUE_TIMING] instanceof FHIRTiming) {
				$this->setValueTiming($data[self::FIELD_VALUE_TIMING]);
			} else {
				$this->setValueTiming(new FHIRTiming($data[self::FIELD_VALUE_TIMING]));
			}
		}
		if (isset($data[self::FIELD_VALUE_META])) {
			if ($data[self::FIELD_VALUE_META] instanceof FHIRMeta) {
				$this->setValueMeta($data[self::FIELD_VALUE_META]);
			} else {
				$this->setValueMeta(new FHIRMeta($data[self::FIELD_VALUE_META]));
			}
		}
		if (isset($data[self::FIELD_VALUE_ELEMENT_DEFINITION])) {
			if ($data[self::FIELD_VALUE_ELEMENT_DEFINITION] instanceof FHIRElementDefinition) {
				$this->setValueElementDefinition($data[self::FIELD_VALUE_ELEMENT_DEFINITION]);
			} else {
				$this->setValueElementDefinition(
					new FHIRElementDefinition($data[self::FIELD_VALUE_ELEMENT_DEFINITION]),
				);
			}
		}
		if (isset($data[self::FIELD_RESOURCE])) {
			if (is_object($data[self::FIELD_RESOURCE])) {
				if ($data[self::FIELD_RESOURCE] instanceof PHPFHIRContainedTypeInterface) {
					$this->setResource($data[self::FIELD_RESOURCE]);
				} else {
					throw new \InvalidArgumentException(
						sprintf(
							'FHIRParametersParameter - Field "resource" must be an object implementing PHPFHIRContainedTypeInterface, object of type %s seen',
							get_class($data[self::FIELD_RESOURCE]),
						),
					);
				}
			} elseif (is_array($data[self::FIELD_RESOURCE])) {
				$typeClass = PHPFHIRTypeMap::getContainedTypeFromArray($data[self::FIELD_RESOURCE]);
				if (null === $typeClass) {
					throw new \InvalidArgumentException(
						sprintf(
							'FHIRParametersParameter - Unable to determine class for field "resource" from value: %s',
							json_encode($data[self::FIELD_RESOURCE]),
						),
					);
				}
				$this->setResource(new $typeClass($data[self::FIELD_RESOURCE]));
			} else {
				throw new \InvalidArgumentException(
					sprintf(
						'FHIRParametersParameter - Unable to determine class for field "resource" from value: %s',
						json_encode($data[self::FIELD_RESOURCE]),
					),
				);
			}
		}
		if (isset($data[self::FIELD_PART])) {
			if (is_array($data[self::FIELD_PART])) {
				foreach ($data[self::FIELD_PART] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRParametersParameter) {
						$this->addPart($v);
					} else {
						$this->addPart(new FHIRParametersParameter($v));
					}
				}
			} elseif ($data[self::FIELD_PART] instanceof FHIRParametersParameter) {
				$this->addPart($data[self::FIELD_PART]);
			} else {
				$this->addPart(new FHIRParametersParameter($data[self::FIELD_PART]));
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
		return "<ParametersParameter{$xmlns}></ParametersParameter>";
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The name of the parameter (reference to the operation definition).
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
	 * The name of the parameter (reference to the operation definition).
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
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
	 */
	public function getValueBoolean(): ?FHIRBoolean
	{
		return $this->valueBoolean;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean $valueBoolean
	 * @return static
	 */
	public function setValueBoolean($valueBoolean = null): object
	{
		if (null !== $valueBoolean && !($valueBoolean instanceof FHIRBoolean)) {
			$valueBoolean = new FHIRBoolean($valueBoolean);
		}
		$this->_trackValueSet($this->valueBoolean, $valueBoolean);
		$this->valueBoolean = $valueBoolean;
		return $this;
	}

	/**
	 * A whole number
	 * 32 bit number; for values larger than this, use decimal
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRIntegerPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInteger
	 */
	public function getValueInteger(): ?FHIRInteger
	{
		return $this->valueInteger;
	}

	/**
	 * A whole number
	 * 32 bit number; for values larger than this, use decimal
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRIntegerPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInteger $valueInteger
	 * @return static
	 */
	public function setValueInteger($valueInteger = null): object
	{
		if (null !== $valueInteger && !($valueInteger instanceof FHIRInteger)) {
			$valueInteger = new FHIRInteger($valueInteger);
		}
		$this->_trackValueSet($this->valueInteger, $valueInteger);
		$this->valueInteger = $valueInteger;
		return $this;
	}

	/**
	 * A rational number with implicit precision
	 * Do not use a IEEE type floating point type, instead use something that works
	 * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRDecimalPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDecimal
	 */
	public function getValueDecimal(): ?FHIRDecimal
	{
		return $this->valueDecimal;
	}

	/**
	 * A rational number with implicit precision
	 * Do not use a IEEE type floating point type, instead use something that works
	 * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRDecimalPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDecimal $valueDecimal
	 * @return static
	 */
	public function setValueDecimal($valueDecimal = null): object
	{
		if (null !== $valueDecimal && !($valueDecimal instanceof FHIRDecimal)) {
			$valueDecimal = new FHIRDecimal($valueDecimal);
		}
		$this->_trackValueSet($this->valueDecimal, $valueDecimal);
		$this->valueDecimal = $valueDecimal;
		return $this;
	}

	/**
	 * A stream of bytes
	 * A stream of bytes, base64 encoded
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRBase64BinaryPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBase64Binary
	 */
	public function getValueBase64Binary(): ?FHIRBase64Binary
	{
		return $this->valueBase64Binary;
	}

	/**
	 * A stream of bytes
	 * A stream of bytes, base64 encoded
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRBase64BinaryPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBase64Binary $valueBase64Binary
	 * @return static
	 */
	public function setValueBase64Binary($valueBase64Binary = null): object
	{
		if (null !== $valueBase64Binary && !($valueBase64Binary instanceof FHIRBase64Binary)) {
			$valueBase64Binary = new FHIRBase64Binary($valueBase64Binary);
		}
		$this->_trackValueSet($this->valueBase64Binary, $valueBase64Binary);
		$this->valueBase64Binary = $valueBase64Binary;
		return $this;
	}

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for precisely observed times, typically system logs etc.,
	 * and not human-reported times - for them, see date and dateTime below. Time zone
	 * is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRInstantPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstant
	 */
	public function getValueInstant(): ?FHIRInstant
	{
		return $this->valueInstant;
	}

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for precisely observed times, typically system logs etc.,
	 * and not human-reported times - for them, see date and dateTime below. Time zone
	 * is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRInstantPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstant $valueInstant
	 * @return static
	 */
	public function setValueInstant($valueInstant = null): object
	{
		if (null !== $valueInstant && !($valueInstant instanceof FHIRInstant)) {
			$valueInstant = new FHIRInstant($valueInstant);
		}
		$this->_trackValueSet($this->valueInstant, $valueInstant);
		$this->valueInstant = $valueInstant;
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	public function getValueString(): ?FHIRString
	{
		return $this->valueString;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString $valueString
	 * @return static
	 */
	public function setValueString($valueString = null): object
	{
		if (null !== $valueString && !($valueString instanceof FHIRString)) {
			$valueString = new FHIRString($valueString);
		}
		$this->_trackValueSet($this->valueString, $valueString);
		$this->valueString = $valueString;
		return $this;
	}

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri
	 */
	public function getValueUri(): ?FHIRUri
	{
		return $this->valueUri;
	}

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri $valueUri
	 * @return static
	 */
	public function setValueUri($valueUri = null): object
	{
		if (null !== $valueUri && !($valueUri instanceof FHIRUri)) {
			$valueUri = new FHIRUri($valueUri);
		}
		$this->_trackValueSet($this->valueUri, $valueUri);
		$this->valueUri = $valueUri;
		return $this;
	}

	/**
	 * A date or partial date (e.g. just year or year + month). There is no time zone.
	 * The format is a union of the schema types gYear, gYearMonth and date. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRDatePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDate
	 */
	public function getValueDate(): ?FHIRDate
	{
		return $this->valueDate;
	}

	/**
	 * A date or partial date (e.g. just year or year + month). There is no time zone.
	 * The format is a union of the schema types gYear, gYearMonth and date. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRDatePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDate $valueDate
	 * @return static
	 */
	public function setValueDate($valueDate = null): object
	{
		if (null !== $valueDate && !($valueDate instanceof FHIRDate)) {
			$valueDate = new FHIRDate($valueDate);
		}
		$this->_trackValueSet($this->valueDate, $valueDate);
		$this->valueDate = $valueDate;
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
	 * If the parameter is a data type.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime
	 */
	public function getValueDateTime(): ?FHIRDateTime
	{
		return $this->valueDateTime;
	}

	/**
	 * A date, date-time or partial date (e.g. just year or year + month). If hours and
	 * minutes are specified, a time zone SHALL be populated. The format is a union of
	 * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
	 * due to schema type constraints but may be zero-filled and may be ignored. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime $valueDateTime
	 * @return static
	 */
	public function setValueDateTime($valueDateTime = null): object
	{
		if (null !== $valueDateTime && !($valueDateTime instanceof FHIRDateTime)) {
			$valueDateTime = new FHIRDateTime($valueDateTime);
		}
		$this->_trackValueSet($this->valueDateTime, $valueDateTime);
		$this->valueDateTime = $valueDateTime;
		return $this;
	}

	/**
	 * A time during the day, with no date specified
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTime
	 */
	public function getValueTime(): ?FHIRTime
	{
		return $this->valueTime;
	}

	/**
	 * A time during the day, with no date specified
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTime $valueTime
	 * @return static
	 */
	public function setValueTime($valueTime = null): object
	{
		if (null !== $valueTime && !($valueTime instanceof FHIRTime)) {
			$valueTime = new FHIRTime($valueTime);
		}
		$this->_trackValueSet($this->valueTime, $valueTime);
		$this->valueTime = $valueTime;
		return $this;
	}

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode
	 */
	public function getValueCode(): ?FHIRCode
	{
		return $this->valueCode;
	}

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode $valueCode
	 * @return static
	 */
	public function setValueCode($valueCode = null): object
	{
		if (null !== $valueCode && !($valueCode instanceof FHIRCode)) {
			$valueCode = new FHIRCode($valueCode);
		}
		$this->_trackValueSet($this->valueCode, $valueCode);
		$this->valueCode = $valueCode;
		return $this;
	}

	/**
	 * An oid represented as a URI
	 * RFC 3001. See also ISO/IEC 8824:1990 €
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIROidPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIROid
	 */
	public function getValueOid(): ?FHIROid
	{
		return $this->valueOid;
	}

	/**
	 * An oid represented as a URI
	 * RFC 3001. See also ISO/IEC 8824:1990 €
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIROidPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIROid $valueOid
	 * @return static
	 */
	public function setValueOid($valueOid = null): object
	{
		if (null !== $valueOid && !($valueOid instanceof FHIROid)) {
			$valueOid = new FHIROid($valueOid);
		}
		$this->_trackValueSet($this->valueOid, $valueOid);
		$this->valueOid = $valueOid;
		return $this;
	}

	/**
	 * A UUID, represented as a URI
	 * See The Open Group, CDE 1.1 Remote Procedure Call specification, Appendix A.
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRUuidPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUuid
	 */
	public function getValueUuid(): ?FHIRUuid
	{
		return $this->valueUuid;
	}

	/**
	 * A UUID, represented as a URI
	 * See The Open Group, CDE 1.1 Remote Procedure Call specification, Appendix A.
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRUuidPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUuid $valueUuid
	 * @return static
	 */
	public function setValueUuid($valueUuid = null): object
	{
		if (null !== $valueUuid && !($valueUuid instanceof FHIRUuid)) {
			$valueUuid = new FHIRUuid($valueUuid);
		}
		$this->_trackValueSet($this->valueUuid, $valueUuid);
		$this->valueUuid = $valueUuid;
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
	 * If the parameter is a data type.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRIdPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRId
	 */
	public function getValueId(): ?FHIRId
	{
		return $this->valueId;
	}

	/**
	 * Any combination of letters, numerals, "-" and ".", with a length limit of 64
	 * characters. (This might be an integer, an unprefixed OID, UUID or any other
	 * identifier pattern that meets these constraints.) Ids are case-insensitive.
	 * RFC 4122
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRIdPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRId $valueId
	 * @return static
	 */
	public function setValueId($valueId = null): object
	{
		if (null !== $valueId && !($valueId instanceof FHIRId)) {
			$valueId = new FHIRId($valueId);
		}
		$this->_trackValueSet($this->valueId, $valueId);
		$this->valueId = $valueId;
		return $this;
	}

	/**
	 * An integer with a value that is not negative (e.g. >= 0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUnsignedInt
	 */
	public function getValueUnsignedInt(): ?FHIRUnsignedInt
	{
		return $this->valueUnsignedInt;
	}

	/**
	 * An integer with a value that is not negative (e.g. >= 0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUnsignedInt $valueUnsignedInt
	 * @return static
	 */
	public function setValueUnsignedInt($valueUnsignedInt = null): object
	{
		if (null !== $valueUnsignedInt && !($valueUnsignedInt instanceof FHIRUnsignedInt)) {
			$valueUnsignedInt = new FHIRUnsignedInt($valueUnsignedInt);
		}
		$this->_trackValueSet($this->valueUnsignedInt, $valueUnsignedInt);
		$this->valueUnsignedInt = $valueUnsignedInt;
		return $this;
	}

	/**
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPositiveInt
	 */
	public function getValuePositiveInt(): ?FHIRPositiveInt
	{
		return $this->valuePositiveInt;
	}

	/**
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPositiveInt $valuePositiveInt
	 * @return static
	 */
	public function setValuePositiveInt($valuePositiveInt = null): object
	{
		if (null !== $valuePositiveInt && !($valuePositiveInt instanceof FHIRPositiveInt)) {
			$valuePositiveInt = new FHIRPositiveInt($valuePositiveInt);
		}
		$this->_trackValueSet($this->valuePositiveInt, $valuePositiveInt);
		$this->valuePositiveInt = $valuePositiveInt;
		return $this;
	}

	/**
	 * A string that may contain markdown syntax for optional processing by a mark down
	 * presentation engine
	 * Systems are not required to have markdown support, and there is considerable
	 * variation in markdown syntax, so the text should be readable without markdown
	 * processing. The preferred markdown syntax is described here:
	 * http://daringfireball.net/projects/markdown/syntax (and tests here:
	 * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRMarkdownPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMarkdown
	 */
	public function getValueMarkdown(): ?FHIRMarkdown
	{
		return $this->valueMarkdown;
	}

	/**
	 * A string that may contain markdown syntax for optional processing by a mark down
	 * presentation engine
	 * Systems are not required to have markdown support, and there is considerable
	 * variation in markdown syntax, so the text should be readable without markdown
	 * processing. The preferred markdown syntax is described here:
	 * http://daringfireball.net/projects/markdown/syntax (and tests here:
	 * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRMarkdownPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMarkdown $valueMarkdown
	 * @return static
	 */
	public function setValueMarkdown($valueMarkdown = null): object
	{
		if (null !== $valueMarkdown && !($valueMarkdown instanceof FHIRMarkdown)) {
			$valueMarkdown = new FHIRMarkdown($valueMarkdown);
		}
		$this->_trackValueSet($this->valueMarkdown, $valueMarkdown);
		$this->valueMarkdown = $valueMarkdown;
		return $this;
	}

	/**
	 * A text note which also contains information about who made the statement and
	 * when.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAnnotation
	 */
	public function getValueAnnotation(): ?FHIRAnnotation
	{
		return $this->valueAnnotation;
	}

	/**
	 * A text note which also contains information about who made the statement and
	 * when.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAnnotation $valueAnnotation
	 * @return static
	 */
	public function setValueAnnotation(?FHIRAnnotation $valueAnnotation = null): object
	{
		$this->_trackValueSet($this->valueAnnotation, $valueAnnotation);
		$this->valueAnnotation = $valueAnnotation;
		return $this;
	}

	/**
	 * For referring to data content defined in other formats.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAttachment
	 */
	public function getValueAttachment(): ?FHIRAttachment
	{
		return $this->valueAttachment;
	}

	/**
	 * For referring to data content defined in other formats.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAttachment $valueAttachment
	 * @return static
	 */
	public function setValueAttachment(?FHIRAttachment $valueAttachment = null): object
	{
		$this->_trackValueSet($this->valueAttachment, $valueAttachment);
		$this->valueAttachment = $valueAttachment;
		return $this;
	}

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier
	 */
	public function getValueIdentifier(): ?FHIRIdentifier
	{
		return $this->valueIdentifier;
	}

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier $valueIdentifier
	 * @return static
	 */
	public function setValueIdentifier(?FHIRIdentifier $valueIdentifier = null): object
	{
		$this->_trackValueSet($this->valueIdentifier, $valueIdentifier);
		$this->valueIdentifier = $valueIdentifier;
		return $this;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	public function getValueCodeableConcept(): ?FHIRCodeableConcept
	{
		return $this->valueCodeableConcept;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $valueCodeableConcept
	 * @return static
	 */
	public function setValueCodeableConcept(
		?FHIRCodeableConcept $valueCodeableConcept = null,
	): object {
		$this->_trackValueSet($this->valueCodeableConcept, $valueCodeableConcept);
		$this->valueCodeableConcept = $valueCodeableConcept;
		return $this;
	}

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding
	 */
	public function getValueCoding(): ?FHIRCoding
	{
		return $this->valueCoding;
	}

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding $valueCoding
	 * @return static
	 */
	public function setValueCoding(?FHIRCoding $valueCoding = null): object
	{
		$this->_trackValueSet($this->valueCoding, $valueCoding);
		$this->valueCoding = $valueCoding;
		return $this;
	}

	/**
	 * A measured amount (or an amount that can potentially be measured). Note that
	 * measured amounts include amounts that are not precisely quantified, including
	 * amounts involving arbitrary units and floating currencies.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity
	 */
	public function getValueQuantity(): ?FHIRQuantity
	{
		return $this->valueQuantity;
	}

	/**
	 * A measured amount (or an amount that can potentially be measured). Note that
	 * measured amounts include amounts that are not precisely quantified, including
	 * amounts involving arbitrary units and floating currencies.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity $valueQuantity
	 * @return static
	 */
	public function setValueQuantity(?FHIRQuantity $valueQuantity = null): object
	{
		$this->_trackValueSet($this->valueQuantity, $valueQuantity);
		$this->valueQuantity = $valueQuantity;
		return $this;
	}

	/**
	 * A set of ordered Quantities defined by a low and high limit.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRange
	 */
	public function getValueRange(): ?FHIRRange
	{
		return $this->valueRange;
	}

	/**
	 * A set of ordered Quantities defined by a low and high limit.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRange $valueRange
	 * @return static
	 */
	public function setValueRange(?FHIRRange $valueRange = null): object
	{
		$this->_trackValueSet($this->valueRange, $valueRange);
		$this->valueRange = $valueRange;
		return $this;
	}

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod
	 */
	public function getValuePeriod(): ?FHIRPeriod
	{
		return $this->valuePeriod;
	}

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod $valuePeriod
	 * @return static
	 */
	public function setValuePeriod(?FHIRPeriod $valuePeriod = null): object
	{
		$this->_trackValueSet($this->valuePeriod, $valuePeriod);
		$this->valuePeriod = $valuePeriod;
		return $this;
	}

	/**
	 * A relationship of two Quantity values - expressed as a numerator and a
	 * denominator.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRatio
	 */
	public function getValueRatio(): ?FHIRRatio
	{
		return $this->valueRatio;
	}

	/**
	 * A relationship of two Quantity values - expressed as a numerator and a
	 * denominator.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRatio $valueRatio
	 * @return static
	 */
	public function setValueRatio(?FHIRRatio $valueRatio = null): object
	{
		$this->_trackValueSet($this->valueRatio, $valueRatio);
		$this->valueRatio = $valueRatio;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getValueReference(): ?FHIRReference
	{
		return $this->valueReference;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $valueReference
	 * @return static
	 */
	public function setValueReference(?FHIRReference $valueReference = null): object
	{
		$this->_trackValueSet($this->valueReference, $valueReference);
		$this->valueReference = $valueReference;
		return $this;
	}

	/**
	 * A series of measurements taken by a device, with upper and lower limits. There
	 * may be more than one dimension in the data.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSampledData
	 */
	public function getValueSampledData(): ?FHIRSampledData
	{
		return $this->valueSampledData;
	}

	/**
	 * A series of measurements taken by a device, with upper and lower limits. There
	 * may be more than one dimension in the data.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSampledData $valueSampledData
	 * @return static
	 */
	public function setValueSampledData(?FHIRSampledData $valueSampledData = null): object
	{
		$this->_trackValueSet($this->valueSampledData, $valueSampledData);
		$this->valueSampledData = $valueSampledData;
		return $this;
	}

	/**
	 * A digital signature along with supporting context. The signature may be
	 * electronic/cryptographic in nature, or a graphical image representing a
	 * hand-written signature, or a signature process. Different Signature approaches
	 * have different utilities.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSignature
	 */
	public function getValueSignature(): ?FHIRSignature
	{
		return $this->valueSignature;
	}

	/**
	 * A digital signature along with supporting context. The signature may be
	 * electronic/cryptographic in nature, or a graphical image representing a
	 * hand-written signature, or a signature process. Different Signature approaches
	 * have different utilities.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSignature $valueSignature
	 * @return static
	 */
	public function setValueSignature(?FHIRSignature $valueSignature = null): object
	{
		$this->_trackValueSet($this->valueSignature, $valueSignature);
		$this->valueSignature = $valueSignature;
		return $this;
	}

	/**
	 * A human's name with the ability to identify parts and usage.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRHumanName
	 */
	public function getValueHumanName(): ?FHIRHumanName
	{
		return $this->valueHumanName;
	}

	/**
	 * A human's name with the ability to identify parts and usage.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRHumanName $valueHumanName
	 * @return static
	 */
	public function setValueHumanName(?FHIRHumanName $valueHumanName = null): object
	{
		$this->_trackValueSet($this->valueHumanName, $valueHumanName);
		$this->valueHumanName = $valueHumanName;
		return $this;
	}

	/**
	 * There is a variety of postal address formats defined around the world. This
	 * format defines a superset that is the basis for all addresses around the world.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAddress
	 */
	public function getValueAddress(): ?FHIRAddress
	{
		return $this->valueAddress;
	}

	/**
	 * There is a variety of postal address formats defined around the world. This
	 * format defines a superset that is the basis for all addresses around the world.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAddress $valueAddress
	 * @return static
	 */
	public function setValueAddress(?FHIRAddress $valueAddress = null): object
	{
		$this->_trackValueSet($this->valueAddress, $valueAddress);
		$this->valueAddress = $valueAddress;
		return $this;
	}

	/**
	 * Details for all kinds of technology mediated contact points for a person or
	 * organization, including telephone, email, etc.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRContactPoint
	 */
	public function getValueContactPoint(): ?FHIRContactPoint
	{
		return $this->valueContactPoint;
	}

	/**
	 * Details for all kinds of technology mediated contact points for a person or
	 * organization, including telephone, email, etc.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRContactPoint $valueContactPoint
	 * @return static
	 */
	public function setValueContactPoint(?FHIRContactPoint $valueContactPoint = null): object
	{
		$this->_trackValueSet($this->valueContactPoint, $valueContactPoint);
		$this->valueContactPoint = $valueContactPoint;
		return $this;
	}

	/**
	 * Specifies an event that may occur multiple times. Timing schedules are used to
	 * record when things are expected or requested to occur. The most common usage is
	 * in dosage instructions for medications. They are also used when planning care of
	 * various kinds.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTiming
	 */
	public function getValueTiming(): ?FHIRTiming
	{
		return $this->valueTiming;
	}

	/**
	 * Specifies an event that may occur multiple times. Timing schedules are used to
	 * record when things are expected or requested to occur. The most common usage is
	 * in dosage instructions for medications. They are also used when planning care of
	 * various kinds.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTiming $valueTiming
	 * @return static
	 */
	public function setValueTiming(?FHIRTiming $valueTiming = null): object
	{
		$this->_trackValueSet($this->valueTiming, $valueTiming);
		$this->valueTiming = $valueTiming;
		return $this;
	}

	/**
	 * The metadata about a resource. This is content in the resource that is
	 * maintained by the infrastructure. Changes to the content may not always be
	 * associated with version changes to the resource.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMeta
	 */
	public function getValueMeta(): ?FHIRMeta
	{
		return $this->valueMeta;
	}

	/**
	 * The metadata about a resource. This is content in the resource that is
	 * maintained by the infrastructure. Changes to the content may not always be
	 * associated with version changes to the resource.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMeta $valueMeta
	 * @return static
	 */
	public function setValueMeta(?FHIRMeta $valueMeta = null): object
	{
		$this->_trackValueSet($this->valueMeta, $valueMeta);
		$this->valueMeta = $valueMeta;
		return $this;
	}

	/**
	 * Captures constraints on each element within the resource, profile, or extension.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRElementDefinition
	 */
	public function getValueElementDefinition(): ?FHIRElementDefinition
	{
		return $this->valueElementDefinition;
	}

	/**
	 * Captures constraints on each element within the resource, profile, or extension.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * If the parameter is a data type.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRElementDefinition $valueElementDefinition
	 * @return static
	 */
	public function setValueElementDefinition(
		?FHIRElementDefinition $valueElementDefinition = null,
	): object {
		$this->_trackValueSet($this->valueElementDefinition, $valueElementDefinition);
		$this->valueElementDefinition = $valueElementDefinition;
		return $this;
	}

	/**
	 * If the parameter is a whole resource.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\PHPFHIRContainedTypeInterface
	 */
	public function getResource(): ?PHPFHIRContainedTypeInterface
	{
		return $this->resource;
	}

	/**
	 * If the parameter is a whole resource.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\PHPFHIRContainedTypeInterface $resource
	 * @return static
	 */
	public function setResource(?PHPFHIRContainedTypeInterface $resource = null): object
	{
		$this->_trackValueSet($this->resource, $resource);
		$this->resource = $resource;
		return $this;
	}

	/**
	 * This special resource type is used to represent an operation request and
	 * response (operations.html). It has no other use, and there is no RESTful
	 * endpoint associated with it.
	 *
	 * A named part of a parameter. In many implementation context, a set of named
	 * parts is known as a "Tuple".
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter[]
	 */
	public function getPart(): ?array
	{
		return $this->part;
	}

	/**
	 * This special resource type is used to represent an operation request and
	 * response (operations.html). It has no other use, and there is no RESTful
	 * endpoint associated with it.
	 *
	 * A named part of a parameter. In many implementation context, a set of named
	 * parts is known as a "Tuple".
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter $part
	 * @return static
	 */
	public function addPart(?FHIRParametersParameter $part = null): object
	{
		$this->_trackValueAdded();
		$this->part[] = $part;
		return $this;
	}

	/**
	 * This special resource type is used to represent an operation request and
	 * response (operations.html). It has no other use, and there is no RESTful
	 * endpoint associated with it.
	 *
	 * A named part of a parameter. In many implementation context, a set of named
	 * parts is known as a "Tuple".
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter[] $part
	 * @return static
	 */
	public function setPart(array $part = []): object
	{
		if ([] !== $this->part) {
			$this->_trackValuesRemoved(count($this->part));
			$this->part = [];
		}
		if ([] === $part) {
			return $this;
		}
		foreach ($part as $v) {
			if ($v instanceof FHIRParametersParameter) {
				$this->addPart($v);
			} else {
				$this->addPart(new FHIRParametersParameter($v));
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
		if (null !== ($v = $this->getName())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_NAME] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getValueBoolean())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_VALUE_BOOLEAN] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getValueInteger())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_VALUE_INTEGER] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getValueDecimal())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_VALUE_DECIMAL] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getValueBase64Binary())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_VALUE_BASE_64BINARY] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getValueInstant())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_VALUE_INSTANT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getValueString())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_VALUE_STRING] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getValueUri())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_VALUE_URI] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getValueDate())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_VALUE_DATE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getValueDateTime())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_VALUE_DATE_TIME] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getValueTime())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_VALUE_TIME] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getValueCode())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_VALUE_CODE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getValueOid())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_VALUE_OID] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getValueUuid())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_VALUE_UUID] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getValueId())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_VALUE_ID] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getValueUnsignedInt())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_VALUE_UNSIGNED_INT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getValuePositiveInt())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_VALUE_POSITIVE_INT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getValueMarkdown())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_VALUE_MARKDOWN] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getValueAnnotation())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_VALUE_ANNOTATION] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getValueAttachment())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_VALUE_ATTACHMENT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getValueIdentifier())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_VALUE_IDENTIFIER] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getValueCodeableConcept())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_VALUE_CODEABLE_CONCEPT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getValueCoding())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_VALUE_CODING] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getValueQuantity())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_VALUE_QUANTITY] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getValueRange())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_VALUE_RANGE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getValuePeriod())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_VALUE_PERIOD] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getValueRatio())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_VALUE_RATIO] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getValueReference())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_VALUE_REFERENCE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getValueSampledData())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_VALUE_SAMPLED_DATA] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getValueSignature())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_VALUE_SIGNATURE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getValueHumanName())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_VALUE_HUMAN_NAME] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getValueAddress())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_VALUE_ADDRESS] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getValueContactPoint())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_VALUE_CONTACT_POINT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getValueTiming())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_VALUE_TIMING] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getValueMeta())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_VALUE_META] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getValueElementDefinition())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_VALUE_ELEMENT_DEFINITION] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getResource())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_RESOURCE] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getPart())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_PART, $i)] = $fieldErrs;
				}
			}
		}
		if (isset($validationRules[self::FIELD_NAME])) {
			$v = $this->getName();
			foreach ($validationRules[self::FIELD_NAME] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PARAMETERS_DOT_PARAMETER,
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
		if (isset($validationRules[self::FIELD_VALUE_BOOLEAN])) {
			$v = $this->getValueBoolean();
			foreach ($validationRules[self::FIELD_VALUE_BOOLEAN] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PARAMETERS_DOT_PARAMETER,
					self::FIELD_VALUE_BOOLEAN,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_VALUE_BOOLEAN])) {
						$errs[self::FIELD_VALUE_BOOLEAN] = [];
					}
					$errs[self::FIELD_VALUE_BOOLEAN][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_VALUE_INTEGER])) {
			$v = $this->getValueInteger();
			foreach ($validationRules[self::FIELD_VALUE_INTEGER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PARAMETERS_DOT_PARAMETER,
					self::FIELD_VALUE_INTEGER,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_VALUE_INTEGER])) {
						$errs[self::FIELD_VALUE_INTEGER] = [];
					}
					$errs[self::FIELD_VALUE_INTEGER][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_VALUE_DECIMAL])) {
			$v = $this->getValueDecimal();
			foreach ($validationRules[self::FIELD_VALUE_DECIMAL] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PARAMETERS_DOT_PARAMETER,
					self::FIELD_VALUE_DECIMAL,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_VALUE_DECIMAL])) {
						$errs[self::FIELD_VALUE_DECIMAL] = [];
					}
					$errs[self::FIELD_VALUE_DECIMAL][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_VALUE_BASE_64BINARY])) {
			$v = $this->getValueBase64Binary();
			foreach ($validationRules[self::FIELD_VALUE_BASE_64BINARY] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PARAMETERS_DOT_PARAMETER,
					self::FIELD_VALUE_BASE_64BINARY,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_VALUE_BASE_64BINARY])) {
						$errs[self::FIELD_VALUE_BASE_64BINARY] = [];
					}
					$errs[self::FIELD_VALUE_BASE_64BINARY][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_VALUE_INSTANT])) {
			$v = $this->getValueInstant();
			foreach ($validationRules[self::FIELD_VALUE_INSTANT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PARAMETERS_DOT_PARAMETER,
					self::FIELD_VALUE_INSTANT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_VALUE_INSTANT])) {
						$errs[self::FIELD_VALUE_INSTANT] = [];
					}
					$errs[self::FIELD_VALUE_INSTANT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_VALUE_STRING])) {
			$v = $this->getValueString();
			foreach ($validationRules[self::FIELD_VALUE_STRING] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PARAMETERS_DOT_PARAMETER,
					self::FIELD_VALUE_STRING,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_VALUE_STRING])) {
						$errs[self::FIELD_VALUE_STRING] = [];
					}
					$errs[self::FIELD_VALUE_STRING][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_VALUE_URI])) {
			$v = $this->getValueUri();
			foreach ($validationRules[self::FIELD_VALUE_URI] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PARAMETERS_DOT_PARAMETER,
					self::FIELD_VALUE_URI,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_VALUE_URI])) {
						$errs[self::FIELD_VALUE_URI] = [];
					}
					$errs[self::FIELD_VALUE_URI][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_VALUE_DATE])) {
			$v = $this->getValueDate();
			foreach ($validationRules[self::FIELD_VALUE_DATE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PARAMETERS_DOT_PARAMETER,
					self::FIELD_VALUE_DATE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_VALUE_DATE])) {
						$errs[self::FIELD_VALUE_DATE] = [];
					}
					$errs[self::FIELD_VALUE_DATE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_VALUE_DATE_TIME])) {
			$v = $this->getValueDateTime();
			foreach ($validationRules[self::FIELD_VALUE_DATE_TIME] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PARAMETERS_DOT_PARAMETER,
					self::FIELD_VALUE_DATE_TIME,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_VALUE_DATE_TIME])) {
						$errs[self::FIELD_VALUE_DATE_TIME] = [];
					}
					$errs[self::FIELD_VALUE_DATE_TIME][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_VALUE_TIME])) {
			$v = $this->getValueTime();
			foreach ($validationRules[self::FIELD_VALUE_TIME] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PARAMETERS_DOT_PARAMETER,
					self::FIELD_VALUE_TIME,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_VALUE_TIME])) {
						$errs[self::FIELD_VALUE_TIME] = [];
					}
					$errs[self::FIELD_VALUE_TIME][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_VALUE_CODE])) {
			$v = $this->getValueCode();
			foreach ($validationRules[self::FIELD_VALUE_CODE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PARAMETERS_DOT_PARAMETER,
					self::FIELD_VALUE_CODE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_VALUE_CODE])) {
						$errs[self::FIELD_VALUE_CODE] = [];
					}
					$errs[self::FIELD_VALUE_CODE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_VALUE_OID])) {
			$v = $this->getValueOid();
			foreach ($validationRules[self::FIELD_VALUE_OID] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PARAMETERS_DOT_PARAMETER,
					self::FIELD_VALUE_OID,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_VALUE_OID])) {
						$errs[self::FIELD_VALUE_OID] = [];
					}
					$errs[self::FIELD_VALUE_OID][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_VALUE_UUID])) {
			$v = $this->getValueUuid();
			foreach ($validationRules[self::FIELD_VALUE_UUID] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PARAMETERS_DOT_PARAMETER,
					self::FIELD_VALUE_UUID,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_VALUE_UUID])) {
						$errs[self::FIELD_VALUE_UUID] = [];
					}
					$errs[self::FIELD_VALUE_UUID][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_VALUE_ID])) {
			$v = $this->getValueId();
			foreach ($validationRules[self::FIELD_VALUE_ID] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PARAMETERS_DOT_PARAMETER,
					self::FIELD_VALUE_ID,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_VALUE_ID])) {
						$errs[self::FIELD_VALUE_ID] = [];
					}
					$errs[self::FIELD_VALUE_ID][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_VALUE_UNSIGNED_INT])) {
			$v = $this->getValueUnsignedInt();
			foreach ($validationRules[self::FIELD_VALUE_UNSIGNED_INT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PARAMETERS_DOT_PARAMETER,
					self::FIELD_VALUE_UNSIGNED_INT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_VALUE_UNSIGNED_INT])) {
						$errs[self::FIELD_VALUE_UNSIGNED_INT] = [];
					}
					$errs[self::FIELD_VALUE_UNSIGNED_INT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_VALUE_POSITIVE_INT])) {
			$v = $this->getValuePositiveInt();
			foreach ($validationRules[self::FIELD_VALUE_POSITIVE_INT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PARAMETERS_DOT_PARAMETER,
					self::FIELD_VALUE_POSITIVE_INT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_VALUE_POSITIVE_INT])) {
						$errs[self::FIELD_VALUE_POSITIVE_INT] = [];
					}
					$errs[self::FIELD_VALUE_POSITIVE_INT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_VALUE_MARKDOWN])) {
			$v = $this->getValueMarkdown();
			foreach ($validationRules[self::FIELD_VALUE_MARKDOWN] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PARAMETERS_DOT_PARAMETER,
					self::FIELD_VALUE_MARKDOWN,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_VALUE_MARKDOWN])) {
						$errs[self::FIELD_VALUE_MARKDOWN] = [];
					}
					$errs[self::FIELD_VALUE_MARKDOWN][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_VALUE_ANNOTATION])) {
			$v = $this->getValueAnnotation();
			foreach ($validationRules[self::FIELD_VALUE_ANNOTATION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PARAMETERS_DOT_PARAMETER,
					self::FIELD_VALUE_ANNOTATION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_VALUE_ANNOTATION])) {
						$errs[self::FIELD_VALUE_ANNOTATION] = [];
					}
					$errs[self::FIELD_VALUE_ANNOTATION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_VALUE_ATTACHMENT])) {
			$v = $this->getValueAttachment();
			foreach ($validationRules[self::FIELD_VALUE_ATTACHMENT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PARAMETERS_DOT_PARAMETER,
					self::FIELD_VALUE_ATTACHMENT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_VALUE_ATTACHMENT])) {
						$errs[self::FIELD_VALUE_ATTACHMENT] = [];
					}
					$errs[self::FIELD_VALUE_ATTACHMENT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_VALUE_IDENTIFIER])) {
			$v = $this->getValueIdentifier();
			foreach ($validationRules[self::FIELD_VALUE_IDENTIFIER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PARAMETERS_DOT_PARAMETER,
					self::FIELD_VALUE_IDENTIFIER,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_VALUE_IDENTIFIER])) {
						$errs[self::FIELD_VALUE_IDENTIFIER] = [];
					}
					$errs[self::FIELD_VALUE_IDENTIFIER][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_VALUE_CODEABLE_CONCEPT])) {
			$v = $this->getValueCodeableConcept();
			foreach ($validationRules[self::FIELD_VALUE_CODEABLE_CONCEPT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PARAMETERS_DOT_PARAMETER,
					self::FIELD_VALUE_CODEABLE_CONCEPT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_VALUE_CODEABLE_CONCEPT])) {
						$errs[self::FIELD_VALUE_CODEABLE_CONCEPT] = [];
					}
					$errs[self::FIELD_VALUE_CODEABLE_CONCEPT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_VALUE_CODING])) {
			$v = $this->getValueCoding();
			foreach ($validationRules[self::FIELD_VALUE_CODING] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PARAMETERS_DOT_PARAMETER,
					self::FIELD_VALUE_CODING,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_VALUE_CODING])) {
						$errs[self::FIELD_VALUE_CODING] = [];
					}
					$errs[self::FIELD_VALUE_CODING][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_VALUE_QUANTITY])) {
			$v = $this->getValueQuantity();
			foreach ($validationRules[self::FIELD_VALUE_QUANTITY] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PARAMETERS_DOT_PARAMETER,
					self::FIELD_VALUE_QUANTITY,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_VALUE_QUANTITY])) {
						$errs[self::FIELD_VALUE_QUANTITY] = [];
					}
					$errs[self::FIELD_VALUE_QUANTITY][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_VALUE_RANGE])) {
			$v = $this->getValueRange();
			foreach ($validationRules[self::FIELD_VALUE_RANGE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PARAMETERS_DOT_PARAMETER,
					self::FIELD_VALUE_RANGE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_VALUE_RANGE])) {
						$errs[self::FIELD_VALUE_RANGE] = [];
					}
					$errs[self::FIELD_VALUE_RANGE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_VALUE_PERIOD])) {
			$v = $this->getValuePeriod();
			foreach ($validationRules[self::FIELD_VALUE_PERIOD] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PARAMETERS_DOT_PARAMETER,
					self::FIELD_VALUE_PERIOD,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_VALUE_PERIOD])) {
						$errs[self::FIELD_VALUE_PERIOD] = [];
					}
					$errs[self::FIELD_VALUE_PERIOD][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_VALUE_RATIO])) {
			$v = $this->getValueRatio();
			foreach ($validationRules[self::FIELD_VALUE_RATIO] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PARAMETERS_DOT_PARAMETER,
					self::FIELD_VALUE_RATIO,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_VALUE_RATIO])) {
						$errs[self::FIELD_VALUE_RATIO] = [];
					}
					$errs[self::FIELD_VALUE_RATIO][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_VALUE_REFERENCE])) {
			$v = $this->getValueReference();
			foreach ($validationRules[self::FIELD_VALUE_REFERENCE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PARAMETERS_DOT_PARAMETER,
					self::FIELD_VALUE_REFERENCE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_VALUE_REFERENCE])) {
						$errs[self::FIELD_VALUE_REFERENCE] = [];
					}
					$errs[self::FIELD_VALUE_REFERENCE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_VALUE_SAMPLED_DATA])) {
			$v = $this->getValueSampledData();
			foreach ($validationRules[self::FIELD_VALUE_SAMPLED_DATA] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PARAMETERS_DOT_PARAMETER,
					self::FIELD_VALUE_SAMPLED_DATA,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_VALUE_SAMPLED_DATA])) {
						$errs[self::FIELD_VALUE_SAMPLED_DATA] = [];
					}
					$errs[self::FIELD_VALUE_SAMPLED_DATA][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_VALUE_SIGNATURE])) {
			$v = $this->getValueSignature();
			foreach ($validationRules[self::FIELD_VALUE_SIGNATURE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PARAMETERS_DOT_PARAMETER,
					self::FIELD_VALUE_SIGNATURE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_VALUE_SIGNATURE])) {
						$errs[self::FIELD_VALUE_SIGNATURE] = [];
					}
					$errs[self::FIELD_VALUE_SIGNATURE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_VALUE_HUMAN_NAME])) {
			$v = $this->getValueHumanName();
			foreach ($validationRules[self::FIELD_VALUE_HUMAN_NAME] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PARAMETERS_DOT_PARAMETER,
					self::FIELD_VALUE_HUMAN_NAME,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_VALUE_HUMAN_NAME])) {
						$errs[self::FIELD_VALUE_HUMAN_NAME] = [];
					}
					$errs[self::FIELD_VALUE_HUMAN_NAME][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_VALUE_ADDRESS])) {
			$v = $this->getValueAddress();
			foreach ($validationRules[self::FIELD_VALUE_ADDRESS] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PARAMETERS_DOT_PARAMETER,
					self::FIELD_VALUE_ADDRESS,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_VALUE_ADDRESS])) {
						$errs[self::FIELD_VALUE_ADDRESS] = [];
					}
					$errs[self::FIELD_VALUE_ADDRESS][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_VALUE_CONTACT_POINT])) {
			$v = $this->getValueContactPoint();
			foreach ($validationRules[self::FIELD_VALUE_CONTACT_POINT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PARAMETERS_DOT_PARAMETER,
					self::FIELD_VALUE_CONTACT_POINT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_VALUE_CONTACT_POINT])) {
						$errs[self::FIELD_VALUE_CONTACT_POINT] = [];
					}
					$errs[self::FIELD_VALUE_CONTACT_POINT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_VALUE_TIMING])) {
			$v = $this->getValueTiming();
			foreach ($validationRules[self::FIELD_VALUE_TIMING] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PARAMETERS_DOT_PARAMETER,
					self::FIELD_VALUE_TIMING,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_VALUE_TIMING])) {
						$errs[self::FIELD_VALUE_TIMING] = [];
					}
					$errs[self::FIELD_VALUE_TIMING][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_VALUE_META])) {
			$v = $this->getValueMeta();
			foreach ($validationRules[self::FIELD_VALUE_META] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PARAMETERS_DOT_PARAMETER,
					self::FIELD_VALUE_META,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_VALUE_META])) {
						$errs[self::FIELD_VALUE_META] = [];
					}
					$errs[self::FIELD_VALUE_META][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_VALUE_ELEMENT_DEFINITION])) {
			$v = $this->getValueElementDefinition();
			foreach (
				$validationRules[self::FIELD_VALUE_ELEMENT_DEFINITION]
				as $rule => $constraint
			) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PARAMETERS_DOT_PARAMETER,
					self::FIELD_VALUE_ELEMENT_DEFINITION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_VALUE_ELEMENT_DEFINITION])) {
						$errs[self::FIELD_VALUE_ELEMENT_DEFINITION] = [];
					}
					$errs[self::FIELD_VALUE_ELEMENT_DEFINITION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_RESOURCE])) {
			$v = $this->getResource();
			foreach ($validationRules[self::FIELD_RESOURCE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PARAMETERS_DOT_PARAMETER,
					self::FIELD_RESOURCE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_RESOURCE])) {
						$errs[self::FIELD_RESOURCE] = [];
					}
					$errs[self::FIELD_RESOURCE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PART])) {
			$v = $this->getPart();
			foreach ($validationRules[self::FIELD_PART] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PARAMETERS_DOT_PARAMETER,
					self::FIELD_PART,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PART])) {
						$errs[self::FIELD_PART] = [];
					}
					$errs[self::FIELD_PART][$rule] = $err;
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter
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
						'FHIRParametersParameter::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRParametersParameter::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRParametersParameter(null);
		} elseif (!is_object($type) || !($type instanceof FHIRParametersParameter)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRParametersParameter::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter or null, %s seen.',
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
			if (self::FIELD_NAME === $n->nodeName) {
				$type->setName(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_VALUE_BOOLEAN === $n->nodeName) {
				$type->setValueBoolean(FHIRBoolean::xmlUnserialize($n));
			} elseif (self::FIELD_VALUE_INTEGER === $n->nodeName) {
				$type->setValueInteger(FHIRInteger::xmlUnserialize($n));
			} elseif (self::FIELD_VALUE_DECIMAL === $n->nodeName) {
				$type->setValueDecimal(FHIRDecimal::xmlUnserialize($n));
			} elseif (self::FIELD_VALUE_BASE_64BINARY === $n->nodeName) {
				$type->setValueBase64Binary(FHIRBase64Binary::xmlUnserialize($n));
			} elseif (self::FIELD_VALUE_INSTANT === $n->nodeName) {
				$type->setValueInstant(FHIRInstant::xmlUnserialize($n));
			} elseif (self::FIELD_VALUE_STRING === $n->nodeName) {
				$type->setValueString(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_VALUE_URI === $n->nodeName) {
				$type->setValueUri(FHIRUri::xmlUnserialize($n));
			} elseif (self::FIELD_VALUE_DATE === $n->nodeName) {
				$type->setValueDate(FHIRDate::xmlUnserialize($n));
			} elseif (self::FIELD_VALUE_DATE_TIME === $n->nodeName) {
				$type->setValueDateTime(FHIRDateTime::xmlUnserialize($n));
			} elseif (self::FIELD_VALUE_TIME === $n->nodeName) {
				$type->setValueTime(FHIRTime::xmlUnserialize($n));
			} elseif (self::FIELD_VALUE_CODE === $n->nodeName) {
				$type->setValueCode(FHIRCode::xmlUnserialize($n));
			} elseif (self::FIELD_VALUE_OID === $n->nodeName) {
				$type->setValueOid(FHIROid::xmlUnserialize($n));
			} elseif (self::FIELD_VALUE_UUID === $n->nodeName) {
				$type->setValueUuid(FHIRUuid::xmlUnserialize($n));
			} elseif (self::FIELD_VALUE_ID === $n->nodeName) {
				$type->setValueId(FHIRId::xmlUnserialize($n));
			} elseif (self::FIELD_VALUE_UNSIGNED_INT === $n->nodeName) {
				$type->setValueUnsignedInt(FHIRUnsignedInt::xmlUnserialize($n));
			} elseif (self::FIELD_VALUE_POSITIVE_INT === $n->nodeName) {
				$type->setValuePositiveInt(FHIRPositiveInt::xmlUnserialize($n));
			} elseif (self::FIELD_VALUE_MARKDOWN === $n->nodeName) {
				$type->setValueMarkdown(FHIRMarkdown::xmlUnserialize($n));
			} elseif (self::FIELD_VALUE_ANNOTATION === $n->nodeName) {
				$type->setValueAnnotation(FHIRAnnotation::xmlUnserialize($n));
			} elseif (self::FIELD_VALUE_ATTACHMENT === $n->nodeName) {
				$type->setValueAttachment(FHIRAttachment::xmlUnserialize($n));
			} elseif (self::FIELD_VALUE_IDENTIFIER === $n->nodeName) {
				$type->setValueIdentifier(FHIRIdentifier::xmlUnserialize($n));
			} elseif (self::FIELD_VALUE_CODEABLE_CONCEPT === $n->nodeName) {
				$type->setValueCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_VALUE_CODING === $n->nodeName) {
				$type->setValueCoding(FHIRCoding::xmlUnserialize($n));
			} elseif (self::FIELD_VALUE_QUANTITY === $n->nodeName) {
				$type->setValueQuantity(FHIRQuantity::xmlUnserialize($n));
			} elseif (self::FIELD_VALUE_RANGE === $n->nodeName) {
				$type->setValueRange(FHIRRange::xmlUnserialize($n));
			} elseif (self::FIELD_VALUE_PERIOD === $n->nodeName) {
				$type->setValuePeriod(FHIRPeriod::xmlUnserialize($n));
			} elseif (self::FIELD_VALUE_RATIO === $n->nodeName) {
				$type->setValueRatio(FHIRRatio::xmlUnserialize($n));
			} elseif (self::FIELD_VALUE_REFERENCE === $n->nodeName) {
				$type->setValueReference(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_VALUE_SAMPLED_DATA === $n->nodeName) {
				$type->setValueSampledData(FHIRSampledData::xmlUnserialize($n));
			} elseif (self::FIELD_VALUE_SIGNATURE === $n->nodeName) {
				$type->setValueSignature(FHIRSignature::xmlUnserialize($n));
			} elseif (self::FIELD_VALUE_HUMAN_NAME === $n->nodeName) {
				$type->setValueHumanName(FHIRHumanName::xmlUnserialize($n));
			} elseif (self::FIELD_VALUE_ADDRESS === $n->nodeName) {
				$type->setValueAddress(FHIRAddress::xmlUnserialize($n));
			} elseif (self::FIELD_VALUE_CONTACT_POINT === $n->nodeName) {
				$type->setValueContactPoint(FHIRContactPoint::xmlUnserialize($n));
			} elseif (self::FIELD_VALUE_TIMING === $n->nodeName) {
				$type->setValueTiming(FHIRTiming::xmlUnserialize($n));
			} elseif (self::FIELD_VALUE_META === $n->nodeName) {
				$type->setValueMeta(FHIRMeta::xmlUnserialize($n));
			} elseif (self::FIELD_VALUE_ELEMENT_DEFINITION === $n->nodeName) {
				$type->setValueElementDefinition(FHIRElementDefinition::xmlUnserialize($n));
			} elseif (self::FIELD_RESOURCE === $n->nodeName) {
				for ($ni = 0; $ni < $n->childNodes->length; $ni++) {
					$nn = $n->childNodes->item($ni);
					if ($nn instanceof \DOMElement) {
						$type->setResource(PHPFHIRTypeMap::getContainedTypeFromXML($nn));
					}
				}
			} elseif (self::FIELD_PART === $n->nodeName) {
				$type->addPart(FHIRParametersParameter::xmlUnserialize($n));
			} elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
				$type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_EXTENSION === $n->nodeName) {
				$type->addExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_ID === $n->nodeName) {
				$type->setId(FHIRIdPrimitive::xmlUnserialize($n));
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
		$n = $element->attributes->getNamedItem(self::FIELD_VALUE_BOOLEAN);
		if (null !== $n) {
			$pt = $type->getValueBoolean();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setValueBoolean($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_VALUE_INTEGER);
		if (null !== $n) {
			$pt = $type->getValueInteger();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setValueInteger($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_VALUE_DECIMAL);
		if (null !== $n) {
			$pt = $type->getValueDecimal();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setValueDecimal($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_VALUE_BASE_64BINARY);
		if (null !== $n) {
			$pt = $type->getValueBase64Binary();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setValueBase64Binary($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_VALUE_INSTANT);
		if (null !== $n) {
			$pt = $type->getValueInstant();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setValueInstant($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_VALUE_STRING);
		if (null !== $n) {
			$pt = $type->getValueString();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setValueString($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_VALUE_URI);
		if (null !== $n) {
			$pt = $type->getValueUri();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setValueUri($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_VALUE_DATE);
		if (null !== $n) {
			$pt = $type->getValueDate();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setValueDate($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_VALUE_DATE_TIME);
		if (null !== $n) {
			$pt = $type->getValueDateTime();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setValueDateTime($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_VALUE_TIME);
		if (null !== $n) {
			$pt = $type->getValueTime();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setValueTime($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_VALUE_CODE);
		if (null !== $n) {
			$pt = $type->getValueCode();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setValueCode($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_VALUE_OID);
		if (null !== $n) {
			$pt = $type->getValueOid();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setValueOid($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_VALUE_UUID);
		if (null !== $n) {
			$pt = $type->getValueUuid();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setValueUuid($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_VALUE_ID);
		if (null !== $n) {
			$pt = $type->getValueId();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setValueId($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_VALUE_UNSIGNED_INT);
		if (null !== $n) {
			$pt = $type->getValueUnsignedInt();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setValueUnsignedInt($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_VALUE_POSITIVE_INT);
		if (null !== $n) {
			$pt = $type->getValuePositiveInt();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setValuePositiveInt($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_VALUE_MARKDOWN);
		if (null !== $n) {
			$pt = $type->getValueMarkdown();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setValueMarkdown($n->nodeValue);
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
		if (null !== ($v = $this->getName())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_NAME);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getValueBoolean())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_VALUE_BOOLEAN);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getValueInteger())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_VALUE_INTEGER);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getValueDecimal())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_VALUE_DECIMAL);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getValueBase64Binary())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_VALUE_BASE_64BINARY);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getValueInstant())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_VALUE_INSTANT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getValueString())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_VALUE_STRING);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getValueUri())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_VALUE_URI);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getValueDate())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_VALUE_DATE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getValueDateTime())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_VALUE_DATE_TIME);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getValueTime())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_VALUE_TIME);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getValueCode())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_VALUE_CODE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getValueOid())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_VALUE_OID);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getValueUuid())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_VALUE_UUID);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getValueId())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_VALUE_ID);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getValueUnsignedInt())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_VALUE_UNSIGNED_INT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getValuePositiveInt())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_VALUE_POSITIVE_INT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getValueMarkdown())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_VALUE_MARKDOWN);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getValueAnnotation())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_VALUE_ANNOTATION);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getValueAttachment())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_VALUE_ATTACHMENT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getValueIdentifier())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_VALUE_IDENTIFIER);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getValueCodeableConcept())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_VALUE_CODEABLE_CONCEPT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getValueCoding())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_VALUE_CODING);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getValueQuantity())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_VALUE_QUANTITY);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getValueRange())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_VALUE_RANGE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getValuePeriod())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_VALUE_PERIOD);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getValueRatio())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_VALUE_RATIO);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getValueReference())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_VALUE_REFERENCE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getValueSampledData())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_VALUE_SAMPLED_DATA);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getValueSignature())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_VALUE_SIGNATURE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getValueHumanName())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_VALUE_HUMAN_NAME);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getValueAddress())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_VALUE_ADDRESS);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getValueContactPoint())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_VALUE_CONTACT_POINT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getValueTiming())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_VALUE_TIMING);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getValueMeta())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_VALUE_META);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getValueElementDefinition())) {
			$telement = $element->ownerDocument->createElement(
				self::FIELD_VALUE_ELEMENT_DEFINITION,
			);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getResource())) {
			$e2 = $element->ownerDocument->createElement(self::FIELD_RESOURCE);
			$element->appendChild($e2);
			$e3 = $element->ownerDocument->createElement($v->_getFHIRTypeName());
			$e2->appendChild($e3);
			$v->xmlSerialize($e3);
		}
		if ([] !== ($vs = $this->getPart())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_PART);
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
		if (null !== ($v = $this->getValueBoolean())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_VALUE_BOOLEAN} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRBoolean::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_VALUE_BOOLEAN_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getValueInteger())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_VALUE_INTEGER} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRInteger::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_VALUE_INTEGER_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getValueDecimal())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_VALUE_DECIMAL} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRDecimal::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_VALUE_DECIMAL_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getValueBase64Binary())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_VALUE_BASE_64BINARY} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRBase64Binary::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_VALUE_BASE_64BINARY_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getValueInstant())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_VALUE_INSTANT} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRInstant::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_VALUE_INSTANT_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getValueString())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_VALUE_STRING} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRString::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_VALUE_STRING_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getValueUri())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_VALUE_URI} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRUri::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_VALUE_URI_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getValueDate())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_VALUE_DATE} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRDate::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_VALUE_DATE_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getValueDateTime())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_VALUE_DATE_TIME} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRDateTime::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_VALUE_DATE_TIME_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getValueTime())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_VALUE_TIME} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRTime::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_VALUE_TIME_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getValueCode())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_VALUE_CODE} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRCode::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_VALUE_CODE_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getValueOid())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_VALUE_OID} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIROid::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_VALUE_OID_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getValueUuid())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_VALUE_UUID} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRUuid::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_VALUE_UUID_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getValueId())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_VALUE_ID} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRId::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_VALUE_ID_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getValueUnsignedInt())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_VALUE_UNSIGNED_INT} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRUnsignedInt::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_VALUE_UNSIGNED_INT_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getValuePositiveInt())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_VALUE_POSITIVE_INT} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRPositiveInt::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_VALUE_POSITIVE_INT_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getValueMarkdown())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_VALUE_MARKDOWN} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRMarkdown::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_VALUE_MARKDOWN_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getValueAnnotation())) {
			$out->{self::FIELD_VALUE_ANNOTATION} = $v;
		}
		if (null !== ($v = $this->getValueAttachment())) {
			$out->{self::FIELD_VALUE_ATTACHMENT} = $v;
		}
		if (null !== ($v = $this->getValueIdentifier())) {
			$out->{self::FIELD_VALUE_IDENTIFIER} = $v;
		}
		if (null !== ($v = $this->getValueCodeableConcept())) {
			$out->{self::FIELD_VALUE_CODEABLE_CONCEPT} = $v;
		}
		if (null !== ($v = $this->getValueCoding())) {
			$out->{self::FIELD_VALUE_CODING} = $v;
		}
		if (null !== ($v = $this->getValueQuantity())) {
			$out->{self::FIELD_VALUE_QUANTITY} = $v;
		}
		if (null !== ($v = $this->getValueRange())) {
			$out->{self::FIELD_VALUE_RANGE} = $v;
		}
		if (null !== ($v = $this->getValuePeriod())) {
			$out->{self::FIELD_VALUE_PERIOD} = $v;
		}
		if (null !== ($v = $this->getValueRatio())) {
			$out->{self::FIELD_VALUE_RATIO} = $v;
		}
		if (null !== ($v = $this->getValueReference())) {
			$out->{self::FIELD_VALUE_REFERENCE} = $v;
		}
		if (null !== ($v = $this->getValueSampledData())) {
			$out->{self::FIELD_VALUE_SAMPLED_DATA} = $v;
		}
		if (null !== ($v = $this->getValueSignature())) {
			$out->{self::FIELD_VALUE_SIGNATURE} = $v;
		}
		if (null !== ($v = $this->getValueHumanName())) {
			$out->{self::FIELD_VALUE_HUMAN_NAME} = $v;
		}
		if (null !== ($v = $this->getValueAddress())) {
			$out->{self::FIELD_VALUE_ADDRESS} = $v;
		}
		if (null !== ($v = $this->getValueContactPoint())) {
			$out->{self::FIELD_VALUE_CONTACT_POINT} = $v;
		}
		if (null !== ($v = $this->getValueTiming())) {
			$out->{self::FIELD_VALUE_TIMING} = $v;
		}
		if (null !== ($v = $this->getValueMeta())) {
			$out->{self::FIELD_VALUE_META} = $v;
		}
		if (null !== ($v = $this->getValueElementDefinition())) {
			$out->{self::FIELD_VALUE_ELEMENT_DEFINITION} = $v;
		}
		if (null !== ($v = $this->getResource())) {
			$out->{self::FIELD_RESOURCE} = $v;
		}
		if ([] !== ($vs = $this->getPart())) {
			$out->{self::FIELD_PART} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_PART}[] = $v;
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
