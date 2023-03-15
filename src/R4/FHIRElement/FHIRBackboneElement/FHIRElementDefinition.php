<?php declare(strict_types=1);

namespace Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement;

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

use Calvient\FhirTypes\R4\FHIRElement\FHIRAddress;
use Calvient\FhirTypes\R4\FHIRElement\FHIRAnnotation;
use Calvient\FhirTypes\R4\FHIRElement\FHIRAttachment;
use Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement;
use Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionBase;
use Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionBinding;
use Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionConstraint;
use Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionExample;
use Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionMapping;
use Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionSlicing;
use Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionType;
use Calvient\FhirTypes\R4\FHIRElement\FHIRBase64Binary;
use Calvient\FhirTypes\R4\FHIRElement\FHIRBoolean;
use Calvient\FhirTypes\R4\FHIRElement\FHIRCanonical;
use Calvient\FhirTypes\R4\FHIRElement\FHIRCode;
use Calvient\FhirTypes\R4\FHIRElement\FHIRCodeableConcept;
use Calvient\FhirTypes\R4\FHIRElement\FHIRCoding;
use Calvient\FhirTypes\R4\FHIRElement\FHIRContactDetail;
use Calvient\FhirTypes\R4\FHIRElement\FHIRContactPoint;
use Calvient\FhirTypes\R4\FHIRElement\FHIRContributor;
use Calvient\FhirTypes\R4\FHIRElement\FHIRDataRequirement;
use Calvient\FhirTypes\R4\FHIRElement\FHIRDate;
use Calvient\FhirTypes\R4\FHIRElement\FHIRDateTime;
use Calvient\FhirTypes\R4\FHIRElement\FHIRDecimal;
use Calvient\FhirTypes\R4\FHIRElement\FHIRExpression;
use Calvient\FhirTypes\R4\FHIRElement\FHIRExtension;
use Calvient\FhirTypes\R4\FHIRElement\FHIRHumanName;
use Calvient\FhirTypes\R4\FHIRElement\FHIRId;
use Calvient\FhirTypes\R4\FHIRElement\FHIRIdentifier;
use Calvient\FhirTypes\R4\FHIRElement\FHIRInstant;
use Calvient\FhirTypes\R4\FHIRElement\FHIRInteger;
use Calvient\FhirTypes\R4\FHIRElement\FHIRMarkdown;
use Calvient\FhirTypes\R4\FHIRElement\FHIRMeta;
use Calvient\FhirTypes\R4\FHIRElement\FHIRMoney;
use Calvient\FhirTypes\R4\FHIRElement\FHIROid;
use Calvient\FhirTypes\R4\FHIRElement\FHIRParameterDefinition;
use Calvient\FhirTypes\R4\FHIRElement\FHIRPeriod;
use Calvient\FhirTypes\R4\FHIRElement\FHIRPositiveInt;
use Calvient\FhirTypes\R4\FHIRElement\FHIRPropertyRepresentation;
use Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity;
use Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity\FHIRAge;
use Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity\FHIRCount;
use Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity\FHIRDistance;
use Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity\FHIRDuration;
use Calvient\FhirTypes\R4\FHIRElement\FHIRRange;
use Calvient\FhirTypes\R4\FHIRElement\FHIRRatio;
use Calvient\FhirTypes\R4\FHIRElement\FHIRReference;
use Calvient\FhirTypes\R4\FHIRElement\FHIRRelatedArtifact;
use Calvient\FhirTypes\R4\FHIRElement\FHIRSampledData;
use Calvient\FhirTypes\R4\FHIRElement\FHIRSignature;
use Calvient\FhirTypes\R4\FHIRElement\FHIRString;
use Calvient\FhirTypes\R4\FHIRElement\FHIRTime;
use Calvient\FhirTypes\R4\FHIRElement\FHIRTriggerDefinition;
use Calvient\FhirTypes\R4\FHIRElement\FHIRUnsignedInt;
use Calvient\FhirTypes\R4\FHIRElement\FHIRUri;
use Calvient\FhirTypes\R4\FHIRElement\FHIRUrl;
use Calvient\FhirTypes\R4\FHIRElement\FHIRUsageContext;
use Calvient\FhirTypes\R4\FHIRElement\FHIRUuid;
use Calvient\FhirTypes\R4\FHIRStringPrimitive;
use Calvient\FhirTypes\R4\PHPFHIRConstants;
use Calvient\FhirTypes\R4\PHPFHIRTypeInterface;

/**
 * Captures constraints on each element within the resource, profile, or extension.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 *
 * Class FHIRElementDefinition
 * @package \Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement
 */
class FHIRElementDefinition extends FHIRBackboneElement
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION;
	const FIELD_PATH = 'path';
	const FIELD_PATH_EXT = '_path';
	const FIELD_REPRESENTATION = 'representation';
	const FIELD_REPRESENTATION_EXT = '_representation';
	const FIELD_SLICE_NAME = 'sliceName';
	const FIELD_SLICE_NAME_EXT = '_sliceName';
	const FIELD_SLICE_IS_CONSTRAINING = 'sliceIsConstraining';
	const FIELD_SLICE_IS_CONSTRAINING_EXT = '_sliceIsConstraining';
	const FIELD_LABEL = 'label';
	const FIELD_LABEL_EXT = '_label';
	const FIELD_CODE = 'code';
	const FIELD_SLICING = 'slicing';
	const FIELD_SHORT = 'short';
	const FIELD_SHORT_EXT = '_short';
	const FIELD_DEFINITION = 'definition';
	const FIELD_DEFINITION_EXT = '_definition';
	const FIELD_COMMENT = 'comment';
	const FIELD_COMMENT_EXT = '_comment';
	const FIELD_REQUIREMENTS = 'requirements';
	const FIELD_REQUIREMENTS_EXT = '_requirements';
	const FIELD_ALIAS = 'alias';
	const FIELD_ALIAS_EXT = '_alias';
	const FIELD_MIN = 'min';
	const FIELD_MIN_EXT = '_min';
	const FIELD_MAX = 'max';
	const FIELD_MAX_EXT = '_max';
	const FIELD_BASE = 'base';
	const FIELD_CONTENT_REFERENCE = 'contentReference';
	const FIELD_CONTENT_REFERENCE_EXT = '_contentReference';
	const FIELD_TYPE = 'type';
	const FIELD_DEFAULT_VALUE_BASE_64BINARY = 'defaultValueBase64Binary';
	const FIELD_DEFAULT_VALUE_BASE_64BINARY_EXT = '_defaultValueBase64Binary';
	const FIELD_DEFAULT_VALUE_BOOLEAN = 'defaultValueBoolean';
	const FIELD_DEFAULT_VALUE_BOOLEAN_EXT = '_defaultValueBoolean';
	const FIELD_DEFAULT_VALUE_CANONICAL = 'defaultValueCanonical';
	const FIELD_DEFAULT_VALUE_CANONICAL_EXT = '_defaultValueCanonical';
	const FIELD_DEFAULT_VALUE_CODE = 'defaultValueCode';
	const FIELD_DEFAULT_VALUE_CODE_EXT = '_defaultValueCode';
	const FIELD_DEFAULT_VALUE_DATE = 'defaultValueDate';
	const FIELD_DEFAULT_VALUE_DATE_EXT = '_defaultValueDate';
	const FIELD_DEFAULT_VALUE_DATE_TIME = 'defaultValueDateTime';
	const FIELD_DEFAULT_VALUE_DATE_TIME_EXT = '_defaultValueDateTime';
	const FIELD_DEFAULT_VALUE_DECIMAL = 'defaultValueDecimal';
	const FIELD_DEFAULT_VALUE_DECIMAL_EXT = '_defaultValueDecimal';
	const FIELD_DEFAULT_VALUE_ID = 'defaultValueId';
	const FIELD_DEFAULT_VALUE_ID_EXT = '_defaultValueId';
	const FIELD_DEFAULT_VALUE_INSTANT = 'defaultValueInstant';
	const FIELD_DEFAULT_VALUE_INSTANT_EXT = '_defaultValueInstant';
	const FIELD_DEFAULT_VALUE_INTEGER = 'defaultValueInteger';
	const FIELD_DEFAULT_VALUE_INTEGER_EXT = '_defaultValueInteger';
	const FIELD_DEFAULT_VALUE_MARKDOWN = 'defaultValueMarkdown';
	const FIELD_DEFAULT_VALUE_MARKDOWN_EXT = '_defaultValueMarkdown';
	const FIELD_DEFAULT_VALUE_OID = 'defaultValueOid';
	const FIELD_DEFAULT_VALUE_OID_EXT = '_defaultValueOid';
	const FIELD_DEFAULT_VALUE_POSITIVE_INT = 'defaultValuePositiveInt';
	const FIELD_DEFAULT_VALUE_POSITIVE_INT_EXT = '_defaultValuePositiveInt';
	const FIELD_DEFAULT_VALUE_STRING = 'defaultValueString';
	const FIELD_DEFAULT_VALUE_STRING_EXT = '_defaultValueString';
	const FIELD_DEFAULT_VALUE_TIME = 'defaultValueTime';
	const FIELD_DEFAULT_VALUE_TIME_EXT = '_defaultValueTime';
	const FIELD_DEFAULT_VALUE_UNSIGNED_INT = 'defaultValueUnsignedInt';
	const FIELD_DEFAULT_VALUE_UNSIGNED_INT_EXT = '_defaultValueUnsignedInt';
	const FIELD_DEFAULT_VALUE_URI = 'defaultValueUri';
	const FIELD_DEFAULT_VALUE_URI_EXT = '_defaultValueUri';
	const FIELD_DEFAULT_VALUE_URL = 'defaultValueUrl';
	const FIELD_DEFAULT_VALUE_URL_EXT = '_defaultValueUrl';
	const FIELD_DEFAULT_VALUE_UUID = 'defaultValueUuid';
	const FIELD_DEFAULT_VALUE_UUID_EXT = '_defaultValueUuid';
	const FIELD_DEFAULT_VALUE_ADDRESS = 'defaultValueAddress';
	const FIELD_DEFAULT_VALUE_AGE = 'defaultValueAge';
	const FIELD_DEFAULT_VALUE_ANNOTATION = 'defaultValueAnnotation';
	const FIELD_DEFAULT_VALUE_ATTACHMENT = 'defaultValueAttachment';
	const FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT = 'defaultValueCodeableConcept';
	const FIELD_DEFAULT_VALUE_CODING = 'defaultValueCoding';
	const FIELD_DEFAULT_VALUE_CONTACT_POINT = 'defaultValueContactPoint';
	const FIELD_DEFAULT_VALUE_COUNT = 'defaultValueCount';
	const FIELD_DEFAULT_VALUE_DISTANCE = 'defaultValueDistance';
	const FIELD_DEFAULT_VALUE_DURATION = 'defaultValueDuration';
	const FIELD_DEFAULT_VALUE_HUMAN_NAME = 'defaultValueHumanName';
	const FIELD_DEFAULT_VALUE_IDENTIFIER = 'defaultValueIdentifier';
	const FIELD_DEFAULT_VALUE_MONEY = 'defaultValueMoney';
	const FIELD_DEFAULT_VALUE_PERIOD = 'defaultValuePeriod';
	const FIELD_DEFAULT_VALUE_QUANTITY = 'defaultValueQuantity';
	const FIELD_DEFAULT_VALUE_RANGE = 'defaultValueRange';
	const FIELD_DEFAULT_VALUE_RATIO = 'defaultValueRatio';
	const FIELD_DEFAULT_VALUE_REFERENCE = 'defaultValueReference';
	const FIELD_DEFAULT_VALUE_SAMPLED_DATA = 'defaultValueSampledData';
	const FIELD_DEFAULT_VALUE_SIGNATURE = 'defaultValueSignature';
	const FIELD_DEFAULT_VALUE_TIMING = 'defaultValueTiming';
	const FIELD_DEFAULT_VALUE_CONTACT_DETAIL = 'defaultValueContactDetail';
	const FIELD_DEFAULT_VALUE_CONTRIBUTOR = 'defaultValueContributor';
	const FIELD_DEFAULT_VALUE_DATA_REQUIREMENT = 'defaultValueDataRequirement';
	const FIELD_DEFAULT_VALUE_EXPRESSION = 'defaultValueExpression';
	const FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION = 'defaultValueParameterDefinition';
	const FIELD_DEFAULT_VALUE_RELATED_ARTIFACT = 'defaultValueRelatedArtifact';
	const FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION = 'defaultValueTriggerDefinition';
	const FIELD_DEFAULT_VALUE_USAGE_CONTEXT = 'defaultValueUsageContext';
	const FIELD_DEFAULT_VALUE_DOSAGE = 'defaultValueDosage';
	const FIELD_DEFAULT_VALUE_META = 'defaultValueMeta';
	const FIELD_MEANING_WHEN_MISSING = 'meaningWhenMissing';
	const FIELD_MEANING_WHEN_MISSING_EXT = '_meaningWhenMissing';
	const FIELD_ORDER_MEANING = 'orderMeaning';
	const FIELD_ORDER_MEANING_EXT = '_orderMeaning';
	const FIELD_FIXED_BASE_64BINARY = 'fixedBase64Binary';
	const FIELD_FIXED_BASE_64BINARY_EXT = '_fixedBase64Binary';
	const FIELD_FIXED_BOOLEAN = 'fixedBoolean';
	const FIELD_FIXED_BOOLEAN_EXT = '_fixedBoolean';
	const FIELD_FIXED_CANONICAL = 'fixedCanonical';
	const FIELD_FIXED_CANONICAL_EXT = '_fixedCanonical';
	const FIELD_FIXED_CODE = 'fixedCode';
	const FIELD_FIXED_CODE_EXT = '_fixedCode';
	const FIELD_FIXED_DATE = 'fixedDate';
	const FIELD_FIXED_DATE_EXT = '_fixedDate';
	const FIELD_FIXED_DATE_TIME = 'fixedDateTime';
	const FIELD_FIXED_DATE_TIME_EXT = '_fixedDateTime';
	const FIELD_FIXED_DECIMAL = 'fixedDecimal';
	const FIELD_FIXED_DECIMAL_EXT = '_fixedDecimal';
	const FIELD_FIXED_ID = 'fixedId';
	const FIELD_FIXED_ID_EXT = '_fixedId';
	const FIELD_FIXED_INSTANT = 'fixedInstant';
	const FIELD_FIXED_INSTANT_EXT = '_fixedInstant';
	const FIELD_FIXED_INTEGER = 'fixedInteger';
	const FIELD_FIXED_INTEGER_EXT = '_fixedInteger';
	const FIELD_FIXED_MARKDOWN = 'fixedMarkdown';
	const FIELD_FIXED_MARKDOWN_EXT = '_fixedMarkdown';
	const FIELD_FIXED_OID = 'fixedOid';
	const FIELD_FIXED_OID_EXT = '_fixedOid';
	const FIELD_FIXED_POSITIVE_INT = 'fixedPositiveInt';
	const FIELD_FIXED_POSITIVE_INT_EXT = '_fixedPositiveInt';
	const FIELD_FIXED_STRING = 'fixedString';
	const FIELD_FIXED_STRING_EXT = '_fixedString';
	const FIELD_FIXED_TIME = 'fixedTime';
	const FIELD_FIXED_TIME_EXT = '_fixedTime';
	const FIELD_FIXED_UNSIGNED_INT = 'fixedUnsignedInt';
	const FIELD_FIXED_UNSIGNED_INT_EXT = '_fixedUnsignedInt';
	const FIELD_FIXED_URI = 'fixedUri';
	const FIELD_FIXED_URI_EXT = '_fixedUri';
	const FIELD_FIXED_URL = 'fixedUrl';
	const FIELD_FIXED_URL_EXT = '_fixedUrl';
	const FIELD_FIXED_UUID = 'fixedUuid';
	const FIELD_FIXED_UUID_EXT = '_fixedUuid';
	const FIELD_FIXED_ADDRESS = 'fixedAddress';
	const FIELD_FIXED_AGE = 'fixedAge';
	const FIELD_FIXED_ANNOTATION = 'fixedAnnotation';
	const FIELD_FIXED_ATTACHMENT = 'fixedAttachment';
	const FIELD_FIXED_CODEABLE_CONCEPT = 'fixedCodeableConcept';
	const FIELD_FIXED_CODING = 'fixedCoding';
	const FIELD_FIXED_CONTACT_POINT = 'fixedContactPoint';
	const FIELD_FIXED_COUNT = 'fixedCount';
	const FIELD_FIXED_DISTANCE = 'fixedDistance';
	const FIELD_FIXED_DURATION = 'fixedDuration';
	const FIELD_FIXED_HUMAN_NAME = 'fixedHumanName';
	const FIELD_FIXED_IDENTIFIER = 'fixedIdentifier';
	const FIELD_FIXED_MONEY = 'fixedMoney';
	const FIELD_FIXED_PERIOD = 'fixedPeriod';
	const FIELD_FIXED_QUANTITY = 'fixedQuantity';
	const FIELD_FIXED_RANGE = 'fixedRange';
	const FIELD_FIXED_RATIO = 'fixedRatio';
	const FIELD_FIXED_REFERENCE = 'fixedReference';
	const FIELD_FIXED_SAMPLED_DATA = 'fixedSampledData';
	const FIELD_FIXED_SIGNATURE = 'fixedSignature';
	const FIELD_FIXED_TIMING = 'fixedTiming';
	const FIELD_FIXED_CONTACT_DETAIL = 'fixedContactDetail';
	const FIELD_FIXED_CONTRIBUTOR = 'fixedContributor';
	const FIELD_FIXED_DATA_REQUIREMENT = 'fixedDataRequirement';
	const FIELD_FIXED_EXPRESSION = 'fixedExpression';
	const FIELD_FIXED_PARAMETER_DEFINITION = 'fixedParameterDefinition';
	const FIELD_FIXED_RELATED_ARTIFACT = 'fixedRelatedArtifact';
	const FIELD_FIXED_TRIGGER_DEFINITION = 'fixedTriggerDefinition';
	const FIELD_FIXED_USAGE_CONTEXT = 'fixedUsageContext';
	const FIELD_FIXED_DOSAGE = 'fixedDosage';
	const FIELD_FIXED_META = 'fixedMeta';
	const FIELD_PATTERN_BASE_64BINARY = 'patternBase64Binary';
	const FIELD_PATTERN_BASE_64BINARY_EXT = '_patternBase64Binary';
	const FIELD_PATTERN_BOOLEAN = 'patternBoolean';
	const FIELD_PATTERN_BOOLEAN_EXT = '_patternBoolean';
	const FIELD_PATTERN_CANONICAL = 'patternCanonical';
	const FIELD_PATTERN_CANONICAL_EXT = '_patternCanonical';
	const FIELD_PATTERN_CODE = 'patternCode';
	const FIELD_PATTERN_CODE_EXT = '_patternCode';
	const FIELD_PATTERN_DATE = 'patternDate';
	const FIELD_PATTERN_DATE_EXT = '_patternDate';
	const FIELD_PATTERN_DATE_TIME = 'patternDateTime';
	const FIELD_PATTERN_DATE_TIME_EXT = '_patternDateTime';
	const FIELD_PATTERN_DECIMAL = 'patternDecimal';
	const FIELD_PATTERN_DECIMAL_EXT = '_patternDecimal';
	const FIELD_PATTERN_ID = 'patternId';
	const FIELD_PATTERN_ID_EXT = '_patternId';
	const FIELD_PATTERN_INSTANT = 'patternInstant';
	const FIELD_PATTERN_INSTANT_EXT = '_patternInstant';
	const FIELD_PATTERN_INTEGER = 'patternInteger';
	const FIELD_PATTERN_INTEGER_EXT = '_patternInteger';
	const FIELD_PATTERN_MARKDOWN = 'patternMarkdown';
	const FIELD_PATTERN_MARKDOWN_EXT = '_patternMarkdown';
	const FIELD_PATTERN_OID = 'patternOid';
	const FIELD_PATTERN_OID_EXT = '_patternOid';
	const FIELD_PATTERN_POSITIVE_INT = 'patternPositiveInt';
	const FIELD_PATTERN_POSITIVE_INT_EXT = '_patternPositiveInt';
	const FIELD_PATTERN_STRING = 'patternString';
	const FIELD_PATTERN_STRING_EXT = '_patternString';
	const FIELD_PATTERN_TIME = 'patternTime';
	const FIELD_PATTERN_TIME_EXT = '_patternTime';
	const FIELD_PATTERN_UNSIGNED_INT = 'patternUnsignedInt';
	const FIELD_PATTERN_UNSIGNED_INT_EXT = '_patternUnsignedInt';
	const FIELD_PATTERN_URI = 'patternUri';
	const FIELD_PATTERN_URI_EXT = '_patternUri';
	const FIELD_PATTERN_URL = 'patternUrl';
	const FIELD_PATTERN_URL_EXT = '_patternUrl';
	const FIELD_PATTERN_UUID = 'patternUuid';
	const FIELD_PATTERN_UUID_EXT = '_patternUuid';
	const FIELD_PATTERN_ADDRESS = 'patternAddress';
	const FIELD_PATTERN_AGE = 'patternAge';
	const FIELD_PATTERN_ANNOTATION = 'patternAnnotation';
	const FIELD_PATTERN_ATTACHMENT = 'patternAttachment';
	const FIELD_PATTERN_CODEABLE_CONCEPT = 'patternCodeableConcept';
	const FIELD_PATTERN_CODING = 'patternCoding';
	const FIELD_PATTERN_CONTACT_POINT = 'patternContactPoint';
	const FIELD_PATTERN_COUNT = 'patternCount';
	const FIELD_PATTERN_DISTANCE = 'patternDistance';
	const FIELD_PATTERN_DURATION = 'patternDuration';
	const FIELD_PATTERN_HUMAN_NAME = 'patternHumanName';
	const FIELD_PATTERN_IDENTIFIER = 'patternIdentifier';
	const FIELD_PATTERN_MONEY = 'patternMoney';
	const FIELD_PATTERN_PERIOD = 'patternPeriod';
	const FIELD_PATTERN_QUANTITY = 'patternQuantity';
	const FIELD_PATTERN_RANGE = 'patternRange';
	const FIELD_PATTERN_RATIO = 'patternRatio';
	const FIELD_PATTERN_REFERENCE = 'patternReference';
	const FIELD_PATTERN_SAMPLED_DATA = 'patternSampledData';
	const FIELD_PATTERN_SIGNATURE = 'patternSignature';
	const FIELD_PATTERN_TIMING = 'patternTiming';
	const FIELD_PATTERN_CONTACT_DETAIL = 'patternContactDetail';
	const FIELD_PATTERN_CONTRIBUTOR = 'patternContributor';
	const FIELD_PATTERN_DATA_REQUIREMENT = 'patternDataRequirement';
	const FIELD_PATTERN_EXPRESSION = 'patternExpression';
	const FIELD_PATTERN_PARAMETER_DEFINITION = 'patternParameterDefinition';
	const FIELD_PATTERN_RELATED_ARTIFACT = 'patternRelatedArtifact';
	const FIELD_PATTERN_TRIGGER_DEFINITION = 'patternTriggerDefinition';
	const FIELD_PATTERN_USAGE_CONTEXT = 'patternUsageContext';
	const FIELD_PATTERN_DOSAGE = 'patternDosage';
	const FIELD_PATTERN_META = 'patternMeta';
	const FIELD_EXAMPLE = 'example';
	const FIELD_MIN_VALUE_DATE = 'minValueDate';
	const FIELD_MIN_VALUE_DATE_EXT = '_minValueDate';
	const FIELD_MIN_VALUE_DATE_TIME = 'minValueDateTime';
	const FIELD_MIN_VALUE_DATE_TIME_EXT = '_minValueDateTime';
	const FIELD_MIN_VALUE_INSTANT = 'minValueInstant';
	const FIELD_MIN_VALUE_INSTANT_EXT = '_minValueInstant';
	const FIELD_MIN_VALUE_TIME = 'minValueTime';
	const FIELD_MIN_VALUE_TIME_EXT = '_minValueTime';
	const FIELD_MIN_VALUE_DECIMAL = 'minValueDecimal';
	const FIELD_MIN_VALUE_DECIMAL_EXT = '_minValueDecimal';
	const FIELD_MIN_VALUE_INTEGER = 'minValueInteger';
	const FIELD_MIN_VALUE_INTEGER_EXT = '_minValueInteger';
	const FIELD_MIN_VALUE_POSITIVE_INT = 'minValuePositiveInt';
	const FIELD_MIN_VALUE_POSITIVE_INT_EXT = '_minValuePositiveInt';
	const FIELD_MIN_VALUE_UNSIGNED_INT = 'minValueUnsignedInt';
	const FIELD_MIN_VALUE_UNSIGNED_INT_EXT = '_minValueUnsignedInt';
	const FIELD_MIN_VALUE_QUANTITY = 'minValueQuantity';
	const FIELD_MAX_VALUE_DATE = 'maxValueDate';
	const FIELD_MAX_VALUE_DATE_EXT = '_maxValueDate';
	const FIELD_MAX_VALUE_DATE_TIME = 'maxValueDateTime';
	const FIELD_MAX_VALUE_DATE_TIME_EXT = '_maxValueDateTime';
	const FIELD_MAX_VALUE_INSTANT = 'maxValueInstant';
	const FIELD_MAX_VALUE_INSTANT_EXT = '_maxValueInstant';
	const FIELD_MAX_VALUE_TIME = 'maxValueTime';
	const FIELD_MAX_VALUE_TIME_EXT = '_maxValueTime';
	const FIELD_MAX_VALUE_DECIMAL = 'maxValueDecimal';
	const FIELD_MAX_VALUE_DECIMAL_EXT = '_maxValueDecimal';
	const FIELD_MAX_VALUE_INTEGER = 'maxValueInteger';
	const FIELD_MAX_VALUE_INTEGER_EXT = '_maxValueInteger';
	const FIELD_MAX_VALUE_POSITIVE_INT = 'maxValuePositiveInt';
	const FIELD_MAX_VALUE_POSITIVE_INT_EXT = '_maxValuePositiveInt';
	const FIELD_MAX_VALUE_UNSIGNED_INT = 'maxValueUnsignedInt';
	const FIELD_MAX_VALUE_UNSIGNED_INT_EXT = '_maxValueUnsignedInt';
	const FIELD_MAX_VALUE_QUANTITY = 'maxValueQuantity';
	const FIELD_MAX_LENGTH = 'maxLength';
	const FIELD_MAX_LENGTH_EXT = '_maxLength';
	const FIELD_CONDITION = 'condition';
	const FIELD_CONDITION_EXT = '_condition';
	const FIELD_CONSTRAINT = 'constraint';
	const FIELD_MUST_SUPPORT = 'mustSupport';
	const FIELD_MUST_SUPPORT_EXT = '_mustSupport';
	const FIELD_IS_MODIFIER = 'isModifier';
	const FIELD_IS_MODIFIER_EXT = '_isModifier';
	const FIELD_IS_MODIFIER_REASON = 'isModifierReason';
	const FIELD_IS_MODIFIER_REASON_EXT = '_isModifierReason';
	const FIELD_IS_SUMMARY = 'isSummary';
	const FIELD_IS_SUMMARY_EXT = '_isSummary';
	const FIELD_BINDING = 'binding';
	const FIELD_MAPPING = 'mapping';

	/** @var string */
	private $_xmlns = '';

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings SHALL NOT exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The path identifies the element and is expressed as a "."-separated list of
	 * ancestor elements, beginning with the name of the resource or extension.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRStringPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRString
	 */
	protected ?FHIRString $path = null;

	/**
	 * How a property is represented when serialized.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Codes that define how this element is represented in instances, when the
	 * deviation varies from the normal case.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRPropertyRepresentation[]
	 */
	protected ?array $representation = [];

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings SHALL NOT exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The name of this element definition slice, when slicing is working. The name
	 * must be a token with no dots or spaces. This is a unique name referring to a
	 * specific set of constraints applied to this element, used to provide a name to
	 * different slices of the same element.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRStringPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRString
	 */
	protected ?FHIRString $sliceName = null;

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If true, indicates that this slice definition is constraining a slice definition
	 * with the same name in an inherited profile. If false, the slice is not
	 * overriding any slice in an inherited profile. If missing, the slice might or
	 * might not be overriding a slice in an inherited profile, depending on the
	 * sliceName.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRBooleanPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRBoolean
	 */
	protected ?FHIRBoolean $sliceIsConstraining = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings SHALL NOT exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A single preferred label which is the text to display beside the element
	 * indicating its meaning or to use to prompt for the element in a user display or
	 * form.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRStringPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRString
	 */
	protected ?FHIRString $label = null;

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A code that has the same meaning as the element in a particular terminology.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRCoding[]
	 */
	protected ?array $code = [];

	/**
	 * Captures constraints on each element within the resource, profile, or extension.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Indicates that the element is sliced into a set of alternative definitions (i.e.
	 * in a structure definition, there are multiple different constraints on a single
	 * element in the base resource). Slicing can be used in any resource that has
	 * cardinality ..* on the base resource, or any resource with a choice of types.
	 * The set of slices is any elements that come after this in the element sequence
	 * that have the same path, until a shorter path occurs (the shorter path
	 * terminates the set).
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionSlicing
	 */
	protected ?FHIRElementDefinitionSlicing $slicing = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings SHALL NOT exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A concise description of what this element means (e.g. for use in autogenerated
	 * summaries).
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRStringPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRString
	 */
	protected ?FHIRString $short = null;

	/**
	 * A string that may contain Github Flavored Markdown syntax for optional
	 * processing by a mark down presentation engine
	 * Systems are not required to have markdown support, so the text should be
	 * readable without markdown processing. The markdown syntax is GFM - see
	 * https://github.github.com/gfm/
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Provides a complete explanation of the meaning of the data element for human
	 * readability. For the case of elements derived from existing elements (e.g.
	 * constraints), the definition SHALL be consistent with the base definition, but
	 * convey the meaning of the element in the particular context of use of the
	 * resource. (Note: The text you are reading is specified in
	 * ElementDefinition.definition).
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRMarkdownPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRMarkdown
	 */
	protected ?FHIRMarkdown $definition = null;

	/**
	 * A string that may contain Github Flavored Markdown syntax for optional
	 * processing by a mark down presentation engine
	 * Systems are not required to have markdown support, so the text should be
	 * readable without markdown processing. The markdown syntax is GFM - see
	 * https://github.github.com/gfm/
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Explanatory notes and implementation guidance about the data element, including
	 * notes about how to use the data properly, exceptions to proper use, etc. (Note:
	 * The text you are reading is specified in ElementDefinition.comment).
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRMarkdownPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRMarkdown
	 */
	protected ?FHIRMarkdown $comment = null;

	/**
	 * A string that may contain Github Flavored Markdown syntax for optional
	 * processing by a mark down presentation engine
	 * Systems are not required to have markdown support, so the text should be
	 * readable without markdown processing. The markdown syntax is GFM - see
	 * https://github.github.com/gfm/
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * This element is for traceability of why the element was created and why the
	 * constraints exist as they do. This may be used to point to source materials or
	 * specifications that drove the structure of this element.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRMarkdownPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRMarkdown
	 */
	protected ?FHIRMarkdown $requirements = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings SHALL NOT exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Identifies additional names by which this element might also be known.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRStringPrimitive[]|\Calvient\FhirTypes\R4\FHIRElement\FHIRString[]
	 */
	protected ?array $alias = [];

	/**
	 * An integer with a value that is not negative (e.g. >= 0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The minimum number of times this element SHALL appear in the instance.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRUnsignedInt
	 */
	protected ?FHIRUnsignedInt $min = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings SHALL NOT exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The maximum number of times this element is permitted to appear in the instance.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRStringPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRString
	 */
	protected ?FHIRString $max = null;

	/**
	 * Captures constraints on each element within the resource, profile, or extension.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Information about the base definition of the element, provided to make it
	 * unnecessary for tools to trace the deviation of the element through the derived
	 * and related profiles. When the element definition is not the original definition
	 * of an element - i.g. either in a constraint on another type, or for elements
	 * from a super type in a snap shot - then the information in provided in the
	 * element definition may be different to the base definition. On the original
	 * definition of the element, it will be same.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionBase
	 */
	protected ?FHIRElementDefinitionBase $base = null;

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Identifies an element defined elsewhere in the definition whose content rules
	 * should be applied to the current element. ContentReferences bring across all the
	 * rules that are in the ElementDefinition for the element, including definitions,
	 * cardinality constraints, bindings, invariants etc.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRUriPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRUri
	 */
	protected ?FHIRUri $contentReference = null;

	/**
	 * Captures constraints on each element within the resource, profile, or extension.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The data type or resource that the value of this element is permitted to be.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionType[]
	 */
	protected ?array $type = [];

	/**
	 * A stream of bytes
	 * A stream of bytes, base64 encoded
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRBase64BinaryPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRBase64Binary
	 */
	protected ?FHIRBase64Binary $defaultValueBase64Binary = null;

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRBooleanPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRBoolean
	 */
	protected ?FHIRBoolean $defaultValueBoolean = null;

	/**
	 * A URI that is a reference to a canonical URL on a FHIR resource
	 * see [Canonical References](references.html#canonical)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRCanonicalPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRCanonical
	 */
	protected ?FHIRCanonical $defaultValueCanonical = null;

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRCodePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRCode
	 */
	protected ?FHIRCode $defaultValueCode = null;

	/**
	 * A date or partial date (e.g. just year or year + month). There is no time zone.
	 * The format is a union of the schema types gYear, gYearMonth and date. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRDatePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRDate
	 */
	protected ?FHIRDate $defaultValueDate = null;

	/**
	 * A date, date-time or partial date (e.g. just year or year + month). If hours and
	 * minutes are specified, a time zone SHALL be populated. The format is a union of
	 * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
	 * due to schema type constraints but may be zero-filled and may be ignored. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRDateTimePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRDateTime
	 */
	protected ?FHIRDateTime $defaultValueDateTime = null;

	/**
	 * A rational number with implicit precision
	 * Do not use an IEEE type floating point type, instead use something that works
	 * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRDecimalPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRDecimal
	 */
	protected ?FHIRDecimal $defaultValueDecimal = null;

	/**
	 * Any combination of letters, numerals, "-" and ".", with a length limit of 64
	 * characters. (This might be an integer, an unprefixed OID, UUID or any other
	 * identifier pattern that meets these constraints.) Ids are case-insensitive.
	 * RFC 4122
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRIdPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRId
	 */
	protected ?FHIRId $defaultValueId = null;

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for where precisely observed times are required,
	 * typically system logs etc., and not human-reported times - for them, see date
	 * and dateTime (which can be as precise as instant, but is not required to be)
	 * below. Time zone is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRInstantPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRInstant
	 */
	protected ?FHIRInstant $defaultValueInstant = null;

	/**
	 * A whole number
	 * 32 bit number; for values larger than this, use decimal
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRIntegerPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRInteger
	 */
	protected ?FHIRInteger $defaultValueInteger = null;

	/**
	 * A string that may contain Github Flavored Markdown syntax for optional
	 * processing by a mark down presentation engine
	 * Systems are not required to have markdown support, so the text should be
	 * readable without markdown processing. The markdown syntax is GFM - see
	 * https://github.github.com/gfm/
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRMarkdownPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRMarkdown
	 */
	protected ?FHIRMarkdown $defaultValueMarkdown = null;

	/**
	 * An OID represented as a URI
	 * RFC 3001. See also ISO/IEC 8824:1990 €
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIROidPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIROid
	 */
	protected ?FHIROid $defaultValueOid = null;

	/**
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRPositiveInt
	 */
	protected ?FHIRPositiveInt $defaultValuePositiveInt = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings SHALL NOT exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRStringPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRString
	 */
	protected ?FHIRString $defaultValueString = null;

	/**
	 * A time during the day, with no date specified
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRTimePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRTime
	 */
	protected ?FHIRTime $defaultValueTime = null;

	/**
	 * An integer with a value that is not negative (e.g. >= 0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRUnsignedInt
	 */
	protected ?FHIRUnsignedInt $defaultValueUnsignedInt = null;

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRUriPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRUri
	 */
	protected ?FHIRUri $defaultValueUri = null;

	/**
	 * A URI that is a literal reference
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRUrlPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRUrl
	 */
	protected ?FHIRUrl $defaultValueUrl = null;

	/**
	 * A UUID, represented as a URI
	 * See The Open Group, CDE 1.1 Remote Procedure Call specification, Appendix A.
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRUuidPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRUuid
	 */
	protected ?FHIRUuid $defaultValueUuid = null;

	/**
	 * An address expressed using postal conventions (as opposed to GPS or other
	 * location definition formats). This data type may be used to convey addresses for
	 * use in delivering mail as well as for visiting locations which might not be
	 * valid for mail delivery. There are a variety of postal address formats defined
	 * around the world.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRAddress
	 */
	protected ?FHIRAddress $defaultValueAddress = null;

	/**
	 * A duration of time during which an organism (or a process) has existed.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity\FHIRAge
	 */
	protected ?FHIRAge $defaultValueAge = null;

	/**
	 * A text note which also contains information about who made the statement and
	 * when.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRAnnotation
	 */
	protected ?FHIRAnnotation $defaultValueAnnotation = null;

	/**
	 * For referring to data content defined in other formats.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRAttachment
	 */
	protected ?FHIRAttachment $defaultValueAttachment = null;

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRCodeableConcept
	 */
	protected ?FHIRCodeableConcept $defaultValueCodeableConcept = null;

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRCoding
	 */
	protected ?FHIRCoding $defaultValueCoding = null;

	/**
	 * Details for all kinds of technology mediated contact points for a person or
	 * organization, including telephone, email, etc.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRContactPoint
	 */
	protected ?FHIRContactPoint $defaultValueContactPoint = null;

	/**
	 * A measured amount (or an amount that can potentially be measured). Note that
	 * measured amounts include amounts that are not precisely quantified, including
	 * amounts involving arbitrary units and floating currencies.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity\FHIRCount
	 */
	protected ?FHIRCount $defaultValueCount = null;

	/**
	 * A length - a value with a unit that is a physical distance.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity\FHIRDistance
	 */
	protected ?FHIRDistance $defaultValueDistance = null;

	/**
	 * A length of time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity\FHIRDuration
	 */
	protected ?FHIRDuration $defaultValueDuration = null;

	/**
	 * A human's name with the ability to identify parts and usage.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRHumanName
	 */
	protected ?FHIRHumanName $defaultValueHumanName = null;

	/**
	 * An identifier - identifies some entity uniquely and unambiguously. Typically
	 * this is used for business identifiers.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRIdentifier
	 */
	protected ?FHIRIdentifier $defaultValueIdentifier = null;

	/**
	 * An amount of economic utility in some recognized currency.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRMoney
	 */
	protected ?FHIRMoney $defaultValueMoney = null;

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRPeriod
	 */
	protected ?FHIRPeriod $defaultValuePeriod = null;

	/**
	 * A measured amount (or an amount that can potentially be measured). Note that
	 * measured amounts include amounts that are not precisely quantified, including
	 * amounts involving arbitrary units and floating currencies.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity
	 */
	protected ?FHIRQuantity $defaultValueQuantity = null;

	/**
	 * A set of ordered Quantities defined by a low and high limit.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRRange
	 */
	protected ?FHIRRange $defaultValueRange = null;

	/**
	 * A relationship of two Quantity values - expressed as a numerator and a
	 * denominator.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRRatio
	 */
	protected ?FHIRRatio $defaultValueRatio = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $defaultValueReference = null;

	/**
	 * A series of measurements taken by a device, with upper and lower limits. There
	 * may be more than one dimension in the data.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRSampledData
	 */
	protected ?FHIRSampledData $defaultValueSampledData = null;

	/**
	 * A signature along with supporting context. The signature may be a digital
	 * signature that is cryptographic in nature, or some other signature acceptable to
	 * the domain. This other signature may be as simple as a graphical image
	 * representing a hand-written signature, or a signature ceremony Different
	 * signature approaches have different utilities.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRSignature
	 */
	protected ?FHIRSignature $defaultValueSignature = null;

	/**
	 * Specifies an event that may occur multiple times. Timing schedules are used to
	 * record when things are planned, expected or requested to occur. The most common
	 * usage is in dosage instructions for medications. They are also used when
	 * planning care of various kinds, and may be used for reporting the schedule to
	 * which past regular activities were carried out.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRTiming
	 */
	protected ?FHIRTiming $defaultValueTiming = null;

	/**
	 * Specifies contact information for a person or organization.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRContactDetail
	 */
	protected ?FHIRContactDetail $defaultValueContactDetail = null;

	/**
	 * A contributor to the content of a knowledge asset, including authors, editors,
	 * reviewers, and endorsers.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRContributor
	 */
	protected ?FHIRContributor $defaultValueContributor = null;

	/**
	 * Describes a required data item for evaluation in terms of the type of data, and
	 * optional code or date-based filters of the data.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRDataRequirement
	 */
	protected ?FHIRDataRequirement $defaultValueDataRequirement = null;

	/**
	 * A expression that is evaluated in a specified context and returns a value. The
	 * context of use of the expression must specify the context in which the
	 * expression is evaluated, and how the result of the expression is used.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRExpression
	 */
	protected ?FHIRExpression $defaultValueExpression = null;

	/**
	 * The parameters to the module. This collection specifies both the input and
	 * output parameters. Input parameters are provided by the caller as part of the
	 * $evaluate operation. Output parameters are included in the GuidanceResponse.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRParameterDefinition
	 */
	protected ?FHIRParameterDefinition $defaultValueParameterDefinition = null;

	/**
	 * Related artifacts such as additional documentation, justification, or
	 * bibliographic references.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRRelatedArtifact
	 */
	protected ?FHIRRelatedArtifact $defaultValueRelatedArtifact = null;

	/**
	 * A description of a triggering event. Triggering events can be named events, data
	 * events, or periodic, as determined by the type element.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRTriggerDefinition
	 */
	protected ?FHIRTriggerDefinition $defaultValueTriggerDefinition = null;

	/**
	 * Specifies clinical/business/etc. metadata that can be used to retrieve, index
	 * and/or categorize an artifact. This metadata can either be specific to the
	 * applicable population (e.g., age category, DRG) or the specific context of care
	 * (e.g., venue, care setting, provider of care).
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRUsageContext
	 */
	protected ?FHIRUsageContext $defaultValueUsageContext = null;

	/**
	 * Indicates how the medication is/was taken or should be taken by the patient.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRDosage
	 */
	protected ?FHIRDosage $defaultValueDosage = null;

	/**
	 * The metadata about a resource. This is content in the resource that is
	 * maintained by the infrastructure. Changes to the content might not always be
	 * associated with version changes to the resource.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRMeta
	 */
	protected ?FHIRMeta $defaultValueMeta = null;

	/**
	 * A string that may contain Github Flavored Markdown syntax for optional
	 * processing by a mark down presentation engine
	 * Systems are not required to have markdown support, so the text should be
	 * readable without markdown processing. The markdown syntax is GFM - see
	 * https://github.github.com/gfm/
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The Implicit meaning that is to be understood when this element is missing (e.g.
	 * 'when this element is missing, the period is ongoing').
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRMarkdownPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRMarkdown
	 */
	protected ?FHIRMarkdown $meaningWhenMissing = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings SHALL NOT exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If present, indicates that the order of the repeating element has meaning and
	 * describes what that meaning is. If absent, it means that the order of the
	 * element has no meaning.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRStringPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRString
	 */
	protected ?FHIRString $orderMeaning = null;

	/**
	 * A stream of bytes
	 * A stream of bytes, base64 encoded
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRBase64BinaryPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRBase64Binary
	 */
	protected ?FHIRBase64Binary $fixedBase64Binary = null;

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRBooleanPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRBoolean
	 */
	protected ?FHIRBoolean $fixedBoolean = null;

	/**
	 * A URI that is a reference to a canonical URL on a FHIR resource
	 * see [Canonical References](references.html#canonical)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRCanonicalPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRCanonical
	 */
	protected ?FHIRCanonical $fixedCanonical = null;

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRCodePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRCode
	 */
	protected ?FHIRCode $fixedCode = null;

	/**
	 * A date or partial date (e.g. just year or year + month). There is no time zone.
	 * The format is a union of the schema types gYear, gYearMonth and date. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRDatePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRDate
	 */
	protected ?FHIRDate $fixedDate = null;

	/**
	 * A date, date-time or partial date (e.g. just year or year + month). If hours and
	 * minutes are specified, a time zone SHALL be populated. The format is a union of
	 * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
	 * due to schema type constraints but may be zero-filled and may be ignored. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRDateTimePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRDateTime
	 */
	protected ?FHIRDateTime $fixedDateTime = null;

	/**
	 * A rational number with implicit precision
	 * Do not use an IEEE type floating point type, instead use something that works
	 * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRDecimalPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRDecimal
	 */
	protected ?FHIRDecimal $fixedDecimal = null;

	/**
	 * Any combination of letters, numerals, "-" and ".", with a length limit of 64
	 * characters. (This might be an integer, an unprefixed OID, UUID or any other
	 * identifier pattern that meets these constraints.) Ids are case-insensitive.
	 * RFC 4122
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRIdPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRId
	 */
	protected ?FHIRId $fixedId = null;

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for where precisely observed times are required,
	 * typically system logs etc., and not human-reported times - for them, see date
	 * and dateTime (which can be as precise as instant, but is not required to be)
	 * below. Time zone is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRInstantPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRInstant
	 */
	protected ?FHIRInstant $fixedInstant = null;

	/**
	 * A whole number
	 * 32 bit number; for values larger than this, use decimal
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRIntegerPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRInteger
	 */
	protected ?FHIRInteger $fixedInteger = null;

	/**
	 * A string that may contain Github Flavored Markdown syntax for optional
	 * processing by a mark down presentation engine
	 * Systems are not required to have markdown support, so the text should be
	 * readable without markdown processing. The markdown syntax is GFM - see
	 * https://github.github.com/gfm/
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRMarkdownPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRMarkdown
	 */
	protected ?FHIRMarkdown $fixedMarkdown = null;

	/**
	 * An OID represented as a URI
	 * RFC 3001. See also ISO/IEC 8824:1990 €
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIROidPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIROid
	 */
	protected ?FHIROid $fixedOid = null;

	/**
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRPositiveInt
	 */
	protected ?FHIRPositiveInt $fixedPositiveInt = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings SHALL NOT exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRStringPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRString
	 */
	protected ?FHIRString $fixedString = null;

	/**
	 * A time during the day, with no date specified
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRTimePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRTime
	 */
	protected ?FHIRTime $fixedTime = null;

	/**
	 * An integer with a value that is not negative (e.g. >= 0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRUnsignedInt
	 */
	protected ?FHIRUnsignedInt $fixedUnsignedInt = null;

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRUriPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRUri
	 */
	protected ?FHIRUri $fixedUri = null;

	/**
	 * A URI that is a literal reference
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRUrlPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRUrl
	 */
	protected ?FHIRUrl $fixedUrl = null;

	/**
	 * A UUID, represented as a URI
	 * See The Open Group, CDE 1.1 Remote Procedure Call specification, Appendix A.
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRUuidPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRUuid
	 */
	protected ?FHIRUuid $fixedUuid = null;

	/**
	 * An address expressed using postal conventions (as opposed to GPS or other
	 * location definition formats). This data type may be used to convey addresses for
	 * use in delivering mail as well as for visiting locations which might not be
	 * valid for mail delivery. There are a variety of postal address formats defined
	 * around the world.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRAddress
	 */
	protected ?FHIRAddress $fixedAddress = null;

	/**
	 * A duration of time during which an organism (or a process) has existed.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity\FHIRAge
	 */
	protected ?FHIRAge $fixedAge = null;

	/**
	 * A text note which also contains information about who made the statement and
	 * when.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRAnnotation
	 */
	protected ?FHIRAnnotation $fixedAnnotation = null;

	/**
	 * For referring to data content defined in other formats.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRAttachment
	 */
	protected ?FHIRAttachment $fixedAttachment = null;

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRCodeableConcept
	 */
	protected ?FHIRCodeableConcept $fixedCodeableConcept = null;

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRCoding
	 */
	protected ?FHIRCoding $fixedCoding = null;

	/**
	 * Details for all kinds of technology mediated contact points for a person or
	 * organization, including telephone, email, etc.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRContactPoint
	 */
	protected ?FHIRContactPoint $fixedContactPoint = null;

	/**
	 * A measured amount (or an amount that can potentially be measured). Note that
	 * measured amounts include amounts that are not precisely quantified, including
	 * amounts involving arbitrary units and floating currencies.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity\FHIRCount
	 */
	protected ?FHIRCount $fixedCount = null;

	/**
	 * A length - a value with a unit that is a physical distance.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity\FHIRDistance
	 */
	protected ?FHIRDistance $fixedDistance = null;

	/**
	 * A length of time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity\FHIRDuration
	 */
	protected ?FHIRDuration $fixedDuration = null;

	/**
	 * A human's name with the ability to identify parts and usage.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRHumanName
	 */
	protected ?FHIRHumanName $fixedHumanName = null;

	/**
	 * An identifier - identifies some entity uniquely and unambiguously. Typically
	 * this is used for business identifiers.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRIdentifier
	 */
	protected ?FHIRIdentifier $fixedIdentifier = null;

	/**
	 * An amount of economic utility in some recognized currency.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRMoney
	 */
	protected ?FHIRMoney $fixedMoney = null;

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRPeriod
	 */
	protected ?FHIRPeriod $fixedPeriod = null;

	/**
	 * A measured amount (or an amount that can potentially be measured). Note that
	 * measured amounts include amounts that are not precisely quantified, including
	 * amounts involving arbitrary units and floating currencies.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity
	 */
	protected ?FHIRQuantity $fixedQuantity = null;

	/**
	 * A set of ordered Quantities defined by a low and high limit.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRRange
	 */
	protected ?FHIRRange $fixedRange = null;

	/**
	 * A relationship of two Quantity values - expressed as a numerator and a
	 * denominator.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRRatio
	 */
	protected ?FHIRRatio $fixedRatio = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $fixedReference = null;

	/**
	 * A series of measurements taken by a device, with upper and lower limits. There
	 * may be more than one dimension in the data.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRSampledData
	 */
	protected ?FHIRSampledData $fixedSampledData = null;

	/**
	 * A signature along with supporting context. The signature may be a digital
	 * signature that is cryptographic in nature, or some other signature acceptable to
	 * the domain. This other signature may be as simple as a graphical image
	 * representing a hand-written signature, or a signature ceremony Different
	 * signature approaches have different utilities.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRSignature
	 */
	protected ?FHIRSignature $fixedSignature = null;

	/**
	 * Specifies an event that may occur multiple times. Timing schedules are used to
	 * record when things are planned, expected or requested to occur. The most common
	 * usage is in dosage instructions for medications. They are also used when
	 * planning care of various kinds, and may be used for reporting the schedule to
	 * which past regular activities were carried out.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRTiming
	 */
	protected ?FHIRTiming $fixedTiming = null;

	/**
	 * Specifies contact information for a person or organization.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRContactDetail
	 */
	protected ?FHIRContactDetail $fixedContactDetail = null;

	/**
	 * A contributor to the content of a knowledge asset, including authors, editors,
	 * reviewers, and endorsers.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRContributor
	 */
	protected ?FHIRContributor $fixedContributor = null;

	/**
	 * Describes a required data item for evaluation in terms of the type of data, and
	 * optional code or date-based filters of the data.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRDataRequirement
	 */
	protected ?FHIRDataRequirement $fixedDataRequirement = null;

	/**
	 * A expression that is evaluated in a specified context and returns a value. The
	 * context of use of the expression must specify the context in which the
	 * expression is evaluated, and how the result of the expression is used.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRExpression
	 */
	protected ?FHIRExpression $fixedExpression = null;

	/**
	 * The parameters to the module. This collection specifies both the input and
	 * output parameters. Input parameters are provided by the caller as part of the
	 * $evaluate operation. Output parameters are included in the GuidanceResponse.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRParameterDefinition
	 */
	protected ?FHIRParameterDefinition $fixedParameterDefinition = null;

	/**
	 * Related artifacts such as additional documentation, justification, or
	 * bibliographic references.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRRelatedArtifact
	 */
	protected ?FHIRRelatedArtifact $fixedRelatedArtifact = null;

	/**
	 * A description of a triggering event. Triggering events can be named events, data
	 * events, or periodic, as determined by the type element.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRTriggerDefinition
	 */
	protected ?FHIRTriggerDefinition $fixedTriggerDefinition = null;

	/**
	 * Specifies clinical/business/etc. metadata that can be used to retrieve, index
	 * and/or categorize an artifact. This metadata can either be specific to the
	 * applicable population (e.g., age category, DRG) or the specific context of care
	 * (e.g., venue, care setting, provider of care).
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRUsageContext
	 */
	protected ?FHIRUsageContext $fixedUsageContext = null;

	/**
	 * Indicates how the medication is/was taken or should be taken by the patient.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRDosage
	 */
	protected ?FHIRDosage $fixedDosage = null;

	/**
	 * The metadata about a resource. This is content in the resource that is
	 * maintained by the infrastructure. Changes to the content might not always be
	 * associated with version changes to the resource.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRMeta
	 */
	protected ?FHIRMeta $fixedMeta = null;

	/**
	 * A stream of bytes
	 * A stream of bytes, base64 encoded
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRBase64BinaryPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRBase64Binary
	 */
	protected ?FHIRBase64Binary $patternBase64Binary = null;

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRBooleanPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRBoolean
	 */
	protected ?FHIRBoolean $patternBoolean = null;

	/**
	 * A URI that is a reference to a canonical URL on a FHIR resource
	 * see [Canonical References](references.html#canonical)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRCanonicalPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRCanonical
	 */
	protected ?FHIRCanonical $patternCanonical = null;

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRCodePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRCode
	 */
	protected ?FHIRCode $patternCode = null;

	/**
	 * A date or partial date (e.g. just year or year + month). There is no time zone.
	 * The format is a union of the schema types gYear, gYearMonth and date. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRDatePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRDate
	 */
	protected ?FHIRDate $patternDate = null;

	/**
	 * A date, date-time or partial date (e.g. just year or year + month). If hours and
	 * minutes are specified, a time zone SHALL be populated. The format is a union of
	 * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
	 * due to schema type constraints but may be zero-filled and may be ignored. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRDateTimePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRDateTime
	 */
	protected ?FHIRDateTime $patternDateTime = null;

	/**
	 * A rational number with implicit precision
	 * Do not use an IEEE type floating point type, instead use something that works
	 * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRDecimalPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRDecimal
	 */
	protected ?FHIRDecimal $patternDecimal = null;

	/**
	 * Any combination of letters, numerals, "-" and ".", with a length limit of 64
	 * characters. (This might be an integer, an unprefixed OID, UUID or any other
	 * identifier pattern that meets these constraints.) Ids are case-insensitive.
	 * RFC 4122
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRIdPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRId
	 */
	protected ?FHIRId $patternId = null;

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for where precisely observed times are required,
	 * typically system logs etc., and not human-reported times - for them, see date
	 * and dateTime (which can be as precise as instant, but is not required to be)
	 * below. Time zone is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRInstantPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRInstant
	 */
	protected ?FHIRInstant $patternInstant = null;

	/**
	 * A whole number
	 * 32 bit number; for values larger than this, use decimal
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRIntegerPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRInteger
	 */
	protected ?FHIRInteger $patternInteger = null;

	/**
	 * A string that may contain Github Flavored Markdown syntax for optional
	 * processing by a mark down presentation engine
	 * Systems are not required to have markdown support, so the text should be
	 * readable without markdown processing. The markdown syntax is GFM - see
	 * https://github.github.com/gfm/
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRMarkdownPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRMarkdown
	 */
	protected ?FHIRMarkdown $patternMarkdown = null;

	/**
	 * An OID represented as a URI
	 * RFC 3001. See also ISO/IEC 8824:1990 €
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIROidPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIROid
	 */
	protected ?FHIROid $patternOid = null;

	/**
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRPositiveInt
	 */
	protected ?FHIRPositiveInt $patternPositiveInt = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings SHALL NOT exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRStringPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRString
	 */
	protected ?FHIRString $patternString = null;

	/**
	 * A time during the day, with no date specified
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRTimePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRTime
	 */
	protected ?FHIRTime $patternTime = null;

	/**
	 * An integer with a value that is not negative (e.g. >= 0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRUnsignedInt
	 */
	protected ?FHIRUnsignedInt $patternUnsignedInt = null;

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRUriPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRUri
	 */
	protected ?FHIRUri $patternUri = null;

	/**
	 * A URI that is a literal reference
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRUrlPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRUrl
	 */
	protected ?FHIRUrl $patternUrl = null;

	/**
	 * A UUID, represented as a URI
	 * See The Open Group, CDE 1.1 Remote Procedure Call specification, Appendix A.
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRUuidPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRUuid
	 */
	protected ?FHIRUuid $patternUuid = null;

	/**
	 * An address expressed using postal conventions (as opposed to GPS or other
	 * location definition formats). This data type may be used to convey addresses for
	 * use in delivering mail as well as for visiting locations which might not be
	 * valid for mail delivery. There are a variety of postal address formats defined
	 * around the world.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRAddress
	 */
	protected ?FHIRAddress $patternAddress = null;

	/**
	 * A duration of time during which an organism (or a process) has existed.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity\FHIRAge
	 */
	protected ?FHIRAge $patternAge = null;

	/**
	 * A text note which also contains information about who made the statement and
	 * when.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRAnnotation
	 */
	protected ?FHIRAnnotation $patternAnnotation = null;

	/**
	 * For referring to data content defined in other formats.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRAttachment
	 */
	protected ?FHIRAttachment $patternAttachment = null;

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRCodeableConcept
	 */
	protected ?FHIRCodeableConcept $patternCodeableConcept = null;

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRCoding
	 */
	protected ?FHIRCoding $patternCoding = null;

	/**
	 * Details for all kinds of technology mediated contact points for a person or
	 * organization, including telephone, email, etc.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRContactPoint
	 */
	protected ?FHIRContactPoint $patternContactPoint = null;

	/**
	 * A measured amount (or an amount that can potentially be measured). Note that
	 * measured amounts include amounts that are not precisely quantified, including
	 * amounts involving arbitrary units and floating currencies.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity\FHIRCount
	 */
	protected ?FHIRCount $patternCount = null;

	/**
	 * A length - a value with a unit that is a physical distance.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity\FHIRDistance
	 */
	protected ?FHIRDistance $patternDistance = null;

	/**
	 * A length of time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity\FHIRDuration
	 */
	protected ?FHIRDuration $patternDuration = null;

	/**
	 * A human's name with the ability to identify parts and usage.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRHumanName
	 */
	protected ?FHIRHumanName $patternHumanName = null;

	/**
	 * An identifier - identifies some entity uniquely and unambiguously. Typically
	 * this is used for business identifiers.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRIdentifier
	 */
	protected ?FHIRIdentifier $patternIdentifier = null;

	/**
	 * An amount of economic utility in some recognized currency.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRMoney
	 */
	protected ?FHIRMoney $patternMoney = null;

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRPeriod
	 */
	protected ?FHIRPeriod $patternPeriod = null;

	/**
	 * A measured amount (or an amount that can potentially be measured). Note that
	 * measured amounts include amounts that are not precisely quantified, including
	 * amounts involving arbitrary units and floating currencies.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity
	 */
	protected ?FHIRQuantity $patternQuantity = null;

	/**
	 * A set of ordered Quantities defined by a low and high limit.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRRange
	 */
	protected ?FHIRRange $patternRange = null;

	/**
	 * A relationship of two Quantity values - expressed as a numerator and a
	 * denominator.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRRatio
	 */
	protected ?FHIRRatio $patternRatio = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $patternReference = null;

	/**
	 * A series of measurements taken by a device, with upper and lower limits. There
	 * may be more than one dimension in the data.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRSampledData
	 */
	protected ?FHIRSampledData $patternSampledData = null;

	/**
	 * A signature along with supporting context. The signature may be a digital
	 * signature that is cryptographic in nature, or some other signature acceptable to
	 * the domain. This other signature may be as simple as a graphical image
	 * representing a hand-written signature, or a signature ceremony Different
	 * signature approaches have different utilities.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRSignature
	 */
	protected ?FHIRSignature $patternSignature = null;

	/**
	 * Specifies an event that may occur multiple times. Timing schedules are used to
	 * record when things are planned, expected or requested to occur. The most common
	 * usage is in dosage instructions for medications. They are also used when
	 * planning care of various kinds, and may be used for reporting the schedule to
	 * which past regular activities were carried out.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRTiming
	 */
	protected ?FHIRTiming $patternTiming = null;

	/**
	 * Specifies contact information for a person or organization.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRContactDetail
	 */
	protected ?FHIRContactDetail $patternContactDetail = null;

	/**
	 * A contributor to the content of a knowledge asset, including authors, editors,
	 * reviewers, and endorsers.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRContributor
	 */
	protected ?FHIRContributor $patternContributor = null;

	/**
	 * Describes a required data item for evaluation in terms of the type of data, and
	 * optional code or date-based filters of the data.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRDataRequirement
	 */
	protected ?FHIRDataRequirement $patternDataRequirement = null;

	/**
	 * A expression that is evaluated in a specified context and returns a value. The
	 * context of use of the expression must specify the context in which the
	 * expression is evaluated, and how the result of the expression is used.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRExpression
	 */
	protected ?FHIRExpression $patternExpression = null;

	/**
	 * The parameters to the module. This collection specifies both the input and
	 * output parameters. Input parameters are provided by the caller as part of the
	 * $evaluate operation. Output parameters are included in the GuidanceResponse.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRParameterDefinition
	 */
	protected ?FHIRParameterDefinition $patternParameterDefinition = null;

	/**
	 * Related artifacts such as additional documentation, justification, or
	 * bibliographic references.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRRelatedArtifact
	 */
	protected ?FHIRRelatedArtifact $patternRelatedArtifact = null;

	/**
	 * A description of a triggering event. Triggering events can be named events, data
	 * events, or periodic, as determined by the type element.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRTriggerDefinition
	 */
	protected ?FHIRTriggerDefinition $patternTriggerDefinition = null;

	/**
	 * Specifies clinical/business/etc. metadata that can be used to retrieve, index
	 * and/or categorize an artifact. This metadata can either be specific to the
	 * applicable population (e.g., age category, DRG) or the specific context of care
	 * (e.g., venue, care setting, provider of care).
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRUsageContext
	 */
	protected ?FHIRUsageContext $patternUsageContext = null;

	/**
	 * Indicates how the medication is/was taken or should be taken by the patient.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRDosage
	 */
	protected ?FHIRDosage $patternDosage = null;

	/**
	 * The metadata about a resource. This is content in the resource that is
	 * maintained by the infrastructure. Changes to the content might not always be
	 * associated with version changes to the resource.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRMeta
	 */
	protected ?FHIRMeta $patternMeta = null;

	/**
	 * Captures constraints on each element within the resource, profile, or extension.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be found in the element.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionExample[]
	 */
	protected ?array $example = [];

	/**
	 * A date or partial date (e.g. just year or year + month). There is no time zone.
	 * The format is a union of the schema types gYear, gYearMonth and date. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRDatePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRDate
	 */
	protected ?FHIRDate $minValueDate = null;

	/**
	 * A date, date-time or partial date (e.g. just year or year + month). If hours and
	 * minutes are specified, a time zone SHALL be populated. The format is a union of
	 * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
	 * due to schema type constraints but may be zero-filled and may be ignored. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRDateTimePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRDateTime
	 */
	protected ?FHIRDateTime $minValueDateTime = null;

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for where precisely observed times are required,
	 * typically system logs etc., and not human-reported times - for them, see date
	 * and dateTime (which can be as precise as instant, but is not required to be)
	 * below. Time zone is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRInstantPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRInstant
	 */
	protected ?FHIRInstant $minValueInstant = null;

	/**
	 * A time during the day, with no date specified
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRTimePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRTime
	 */
	protected ?FHIRTime $minValueTime = null;

	/**
	 * A rational number with implicit precision
	 * Do not use an IEEE type floating point type, instead use something that works
	 * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRDecimalPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRDecimal
	 */
	protected ?FHIRDecimal $minValueDecimal = null;

	/**
	 * A whole number
	 * 32 bit number; for values larger than this, use decimal
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRIntegerPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRInteger
	 */
	protected ?FHIRInteger $minValueInteger = null;

	/**
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRPositiveInt
	 */
	protected ?FHIRPositiveInt $minValuePositiveInt = null;

	/**
	 * An integer with a value that is not negative (e.g. >= 0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRUnsignedInt
	 */
	protected ?FHIRUnsignedInt $minValueUnsignedInt = null;

	/**
	 * A measured amount (or an amount that can potentially be measured). Note that
	 * measured amounts include amounts that are not precisely quantified, including
	 * amounts involving arbitrary units and floating currencies.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity
	 */
	protected ?FHIRQuantity $minValueQuantity = null;

	/**
	 * A date or partial date (e.g. just year or year + month). There is no time zone.
	 * The format is a union of the schema types gYear, gYearMonth and date. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRDatePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRDate
	 */
	protected ?FHIRDate $maxValueDate = null;

	/**
	 * A date, date-time or partial date (e.g. just year or year + month). If hours and
	 * minutes are specified, a time zone SHALL be populated. The format is a union of
	 * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
	 * due to schema type constraints but may be zero-filled and may be ignored. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRDateTimePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRDateTime
	 */
	protected ?FHIRDateTime $maxValueDateTime = null;

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for where precisely observed times are required,
	 * typically system logs etc., and not human-reported times - for them, see date
	 * and dateTime (which can be as precise as instant, but is not required to be)
	 * below. Time zone is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRInstantPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRInstant
	 */
	protected ?FHIRInstant $maxValueInstant = null;

	/**
	 * A time during the day, with no date specified
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRTimePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRTime
	 */
	protected ?FHIRTime $maxValueTime = null;

	/**
	 * A rational number with implicit precision
	 * Do not use an IEEE type floating point type, instead use something that works
	 * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRDecimalPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRDecimal
	 */
	protected ?FHIRDecimal $maxValueDecimal = null;

	/**
	 * A whole number
	 * 32 bit number; for values larger than this, use decimal
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRIntegerPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRInteger
	 */
	protected ?FHIRInteger $maxValueInteger = null;

	/**
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRPositiveInt
	 */
	protected ?FHIRPositiveInt $maxValuePositiveInt = null;

	/**
	 * An integer with a value that is not negative (e.g. >= 0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRUnsignedInt
	 */
	protected ?FHIRUnsignedInt $maxValueUnsignedInt = null;

	/**
	 * A measured amount (or an amount that can potentially be measured). Note that
	 * measured amounts include amounts that are not precisely quantified, including
	 * amounts involving arbitrary units and floating currencies.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity
	 */
	protected ?FHIRQuantity $maxValueQuantity = null;

	/**
	 * A whole number
	 * 32 bit number; for values larger than this, use decimal
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Indicates the maximum length in characters that is permitted to be present in
	 * conformant instances and which is expected to be supported by conformant
	 * consumers that support the element.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRIntegerPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRInteger
	 */
	protected ?FHIRInteger $maxLength = null;

	/**
	 * Any combination of letters, numerals, "-" and ".", with a length limit of 64
	 * characters. (This might be an integer, an unprefixed OID, UUID or any other
	 * identifier pattern that meets these constraints.) Ids are case-insensitive.
	 * RFC 4122
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * A reference to an invariant that may make additional statements about the
	 * cardinality or value in the instance.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRIdPrimitive[]|\Calvient\FhirTypes\R4\FHIRElement\FHIRId[]
	 */
	protected ?array $condition = [];

	/**
	 * Captures constraints on each element within the resource, profile, or extension.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Formal constraints such as co-occurrence and other constraints that can be
	 * computationally evaluated within the context of the instance.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionConstraint[]
	 */
	protected ?array $constraint = [];

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If true, implementations that produce or consume resources SHALL provide
	 * "support" for the element in some meaningful way. If false, the element may be
	 * ignored and not supported. If false, whether to populate or use the data element
	 * in any way is at the discretion of the implementation.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRBooleanPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRBoolean
	 */
	protected ?FHIRBoolean $mustSupport = null;

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If true, the value of this element affects the interpretation of the element or
	 * resource that contains it, and the value of the element cannot be ignored.
	 * Typically, this is used for status, negation and qualification codes. The effect
	 * of this is that the element cannot be ignored by systems: they SHALL either
	 * recognize the element and process it, and/or a pre-determination has been made
	 * that it is not relevant to their particular system.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRBooleanPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRBoolean
	 */
	protected ?FHIRBoolean $isModifier = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings SHALL NOT exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Explains how that element affects the interpretation of the resource or element
	 * that contains it.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRStringPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRString
	 */
	protected ?FHIRString $isModifierReason = null;

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Whether the element should be included if a client requests a search with the
	 * parameter _summary=true.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRBooleanPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRBoolean
	 */
	protected ?FHIRBoolean $isSummary = null;

	/**
	 * Captures constraints on each element within the resource, profile, or extension.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Binds to a value set if this element is coded (code, Coding, CodeableConcept,
	 * Quantity), or the data types (string, uri).
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionBinding
	 */
	protected ?FHIRElementDefinitionBinding $binding = null;

	/**
	 * Captures constraints on each element within the resource, profile, or extension.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies a concept from an external specification that roughly corresponds to
	 * this element.
	 *
	 * @var null|\Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionMapping[]
	 */
	protected ?array $mapping = [];

	/**
	 * Validation map for fields in type ElementDefinition
	 * @var array
	 */
	private static array $_validationRules = [];

	/**
	 * FHIRElementDefinition Constructor
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
					'FHIRElementDefinition::_construct - $data expected to be null or array, %s seen',
					gettype($data),
				),
			);
		}
		parent::__construct($data);
		if (isset($data[self::FIELD_PATH]) || isset($data[self::FIELD_PATH_EXT])) {
			$value = $data[self::FIELD_PATH] ?? null;
			$ext =
				isset($data[self::FIELD_PATH_EXT]) && is_array($data[self::FIELD_PATH_EXT])
					? $data[self::FIELD_PATH_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->setPath($value);
				} elseif (is_array($value)) {
					$this->setPath(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->setPath(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setPath(new FHIRString($ext));
			}
		}
		if (
			isset($data[self::FIELD_REPRESENTATION]) ||
			isset($data[self::FIELD_REPRESENTATION_EXT])
		) {
			$value = $data[self::FIELD_REPRESENTATION] ?? null;
			$ext =
				isset($data[self::FIELD_REPRESENTATION_EXT]) &&
				is_array($data[self::FIELD_REPRESENTATION_EXT])
					? $data[self::FIELD_REPRESENTATION_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRPropertyRepresentation) {
					$this->addRepresentation($value);
				} elseif (is_array($value)) {
					foreach ($value as $i => $v) {
						if ($v instanceof FHIRPropertyRepresentation) {
							$this->addRepresentation($v);
						} else {
							$iext = isset($ext[$i]) && is_array($ext[$i]) ? $ext[$i] : [];
							if (is_array($v)) {
								$this->addRepresentation(
									new FHIRPropertyRepresentation(array_merge($v, $iext)),
								);
							} else {
								$this->addRepresentation(
									new FHIRPropertyRepresentation(
										[FHIRPropertyRepresentation::FIELD_VALUE => $v] + $iext,
									),
								);
							}
						}
					}
				} elseif (is_array($value)) {
					$this->addRepresentation(
						new FHIRPropertyRepresentation(array_merge($ext, $value)),
					);
				} else {
					$this->addRepresentation(
						new FHIRPropertyRepresentation(
							[FHIRPropertyRepresentation::FIELD_VALUE => $value] + $ext,
						),
					);
				}
			} elseif ([] !== $ext) {
				foreach ($ext as $iext) {
					$this->addRepresentation(new FHIRPropertyRepresentation($iext));
				}
			}
		}
		if (isset($data[self::FIELD_SLICE_NAME]) || isset($data[self::FIELD_SLICE_NAME_EXT])) {
			$value = $data[self::FIELD_SLICE_NAME] ?? null;
			$ext =
				isset($data[self::FIELD_SLICE_NAME_EXT]) &&
				is_array($data[self::FIELD_SLICE_NAME_EXT])
					? $data[self::FIELD_SLICE_NAME_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->setSliceName($value);
				} elseif (is_array($value)) {
					$this->setSliceName(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->setSliceName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setSliceName(new FHIRString($ext));
			}
		}
		if (
			isset($data[self::FIELD_SLICE_IS_CONSTRAINING]) ||
			isset($data[self::FIELD_SLICE_IS_CONSTRAINING_EXT])
		) {
			$value = $data[self::FIELD_SLICE_IS_CONSTRAINING] ?? null;
			$ext =
				isset($data[self::FIELD_SLICE_IS_CONSTRAINING_EXT]) &&
				is_array($data[self::FIELD_SLICE_IS_CONSTRAINING_EXT])
					? $data[self::FIELD_SLICE_IS_CONSTRAINING_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRBoolean) {
					$this->setSliceIsConstraining($value);
				} elseif (is_array($value)) {
					$this->setSliceIsConstraining(new FHIRBoolean(array_merge($ext, $value)));
				} else {
					$this->setSliceIsConstraining(
						new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setSliceIsConstraining(new FHIRBoolean($ext));
			}
		}
		if (isset($data[self::FIELD_LABEL]) || isset($data[self::FIELD_LABEL_EXT])) {
			$value = $data[self::FIELD_LABEL] ?? null;
			$ext =
				isset($data[self::FIELD_LABEL_EXT]) && is_array($data[self::FIELD_LABEL_EXT])
					? $data[self::FIELD_LABEL_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->setLabel($value);
				} elseif (is_array($value)) {
					$this->setLabel(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->setLabel(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setLabel(new FHIRString($ext));
			}
		}
		if (isset($data[self::FIELD_CODE])) {
			if (is_array($data[self::FIELD_CODE])) {
				foreach ($data[self::FIELD_CODE] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRCoding) {
						$this->addCode($v);
					} else {
						$this->addCode(new FHIRCoding($v));
					}
				}
			} elseif ($data[self::FIELD_CODE] instanceof FHIRCoding) {
				$this->addCode($data[self::FIELD_CODE]);
			} else {
				$this->addCode(new FHIRCoding($data[self::FIELD_CODE]));
			}
		}
		if (isset($data[self::FIELD_SLICING])) {
			if ($data[self::FIELD_SLICING] instanceof FHIRElementDefinitionSlicing) {
				$this->setSlicing($data[self::FIELD_SLICING]);
			} else {
				$this->setSlicing(new FHIRElementDefinitionSlicing($data[self::FIELD_SLICING]));
			}
		}
		if (isset($data[self::FIELD_SHORT]) || isset($data[self::FIELD_SHORT_EXT])) {
			$value = $data[self::FIELD_SHORT] ?? null;
			$ext =
				isset($data[self::FIELD_SHORT_EXT]) && is_array($data[self::FIELD_SHORT_EXT])
					? $data[self::FIELD_SHORT_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->setShort($value);
				} elseif (is_array($value)) {
					$this->setShort(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->setShort(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setShort(new FHIRString($ext));
			}
		}
		if (isset($data[self::FIELD_DEFINITION]) || isset($data[self::FIELD_DEFINITION_EXT])) {
			$value = $data[self::FIELD_DEFINITION] ?? null;
			$ext =
				isset($data[self::FIELD_DEFINITION_EXT]) &&
				is_array($data[self::FIELD_DEFINITION_EXT])
					? $data[self::FIELD_DEFINITION_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRMarkdown) {
					$this->setDefinition($value);
				} elseif (is_array($value)) {
					$this->setDefinition(new FHIRMarkdown(array_merge($ext, $value)));
				} else {
					$this->setDefinition(
						new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setDefinition(new FHIRMarkdown($ext));
			}
		}
		if (isset($data[self::FIELD_COMMENT]) || isset($data[self::FIELD_COMMENT_EXT])) {
			$value = $data[self::FIELD_COMMENT] ?? null;
			$ext =
				isset($data[self::FIELD_COMMENT_EXT]) && is_array($data[self::FIELD_COMMENT_EXT])
					? $data[self::FIELD_COMMENT_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRMarkdown) {
					$this->setComment($value);
				} elseif (is_array($value)) {
					$this->setComment(new FHIRMarkdown(array_merge($ext, $value)));
				} else {
					$this->setComment(
						new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setComment(new FHIRMarkdown($ext));
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
				if ($value instanceof FHIRMarkdown) {
					$this->setRequirements($value);
				} elseif (is_array($value)) {
					$this->setRequirements(new FHIRMarkdown(array_merge($ext, $value)));
				} else {
					$this->setRequirements(
						new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setRequirements(new FHIRMarkdown($ext));
			}
		}
		if (isset($data[self::FIELD_ALIAS]) || isset($data[self::FIELD_ALIAS_EXT])) {
			$value = $data[self::FIELD_ALIAS] ?? null;
			$ext =
				isset($data[self::FIELD_ALIAS_EXT]) && is_array($data[self::FIELD_ALIAS_EXT])
					? $data[self::FIELD_ALIAS_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->addAlias($value);
				} elseif (is_array($value)) {
					foreach ($value as $i => $v) {
						if ($v instanceof FHIRString) {
							$this->addAlias($v);
						} else {
							$iext = isset($ext[$i]) && is_array($ext[$i]) ? $ext[$i] : [];
							if (is_array($v)) {
								$this->addAlias(new FHIRString(array_merge($v, $iext)));
							} else {
								$this->addAlias(
									new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext),
								);
							}
						}
					}
				} elseif (is_array($value)) {
					$this->addAlias(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->addAlias(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				foreach ($ext as $iext) {
					$this->addAlias(new FHIRString($iext));
				}
			}
		}
		if (isset($data[self::FIELD_MIN]) || isset($data[self::FIELD_MIN_EXT])) {
			$value = $data[self::FIELD_MIN] ?? null;
			$ext =
				isset($data[self::FIELD_MIN_EXT]) && is_array($data[self::FIELD_MIN_EXT])
					? $data[self::FIELD_MIN_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRUnsignedInt) {
					$this->setMin($value);
				} elseif (is_array($value)) {
					$this->setMin(new FHIRUnsignedInt(array_merge($ext, $value)));
				} else {
					$this->setMin(
						new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setMin(new FHIRUnsignedInt($ext));
			}
		}
		if (isset($data[self::FIELD_MAX]) || isset($data[self::FIELD_MAX_EXT])) {
			$value = $data[self::FIELD_MAX] ?? null;
			$ext =
				isset($data[self::FIELD_MAX_EXT]) && is_array($data[self::FIELD_MAX_EXT])
					? $data[self::FIELD_MAX_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->setMax($value);
				} elseif (is_array($value)) {
					$this->setMax(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->setMax(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setMax(new FHIRString($ext));
			}
		}
		if (isset($data[self::FIELD_BASE])) {
			if ($data[self::FIELD_BASE] instanceof FHIRElementDefinitionBase) {
				$this->setBase($data[self::FIELD_BASE]);
			} else {
				$this->setBase(new FHIRElementDefinitionBase($data[self::FIELD_BASE]));
			}
		}
		if (
			isset($data[self::FIELD_CONTENT_REFERENCE]) ||
			isset($data[self::FIELD_CONTENT_REFERENCE_EXT])
		) {
			$value = $data[self::FIELD_CONTENT_REFERENCE] ?? null;
			$ext =
				isset($data[self::FIELD_CONTENT_REFERENCE_EXT]) &&
				is_array($data[self::FIELD_CONTENT_REFERENCE_EXT])
					? $data[self::FIELD_CONTENT_REFERENCE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRUri) {
					$this->setContentReference($value);
				} elseif (is_array($value)) {
					$this->setContentReference(new FHIRUri(array_merge($ext, $value)));
				} else {
					$this->setContentReference(
						new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setContentReference(new FHIRUri($ext));
			}
		}
		if (isset($data[self::FIELD_TYPE])) {
			if (is_array($data[self::FIELD_TYPE])) {
				foreach ($data[self::FIELD_TYPE] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRElementDefinitionType) {
						$this->addType($v);
					} else {
						$this->addType(new FHIRElementDefinitionType($v));
					}
				}
			} elseif ($data[self::FIELD_TYPE] instanceof FHIRElementDefinitionType) {
				$this->addType($data[self::FIELD_TYPE]);
			} else {
				$this->addType(new FHIRElementDefinitionType($data[self::FIELD_TYPE]));
			}
		}
		if (
			isset($data[self::FIELD_DEFAULT_VALUE_BASE_64BINARY]) ||
			isset($data[self::FIELD_DEFAULT_VALUE_BASE_64BINARY_EXT])
		) {
			$value = $data[self::FIELD_DEFAULT_VALUE_BASE_64BINARY] ?? null;
			$ext =
				isset($data[self::FIELD_DEFAULT_VALUE_BASE_64BINARY_EXT]) &&
				is_array($data[self::FIELD_DEFAULT_VALUE_BASE_64BINARY_EXT])
					? $data[self::FIELD_DEFAULT_VALUE_BASE_64BINARY_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRBase64Binary) {
					$this->setDefaultValueBase64Binary($value);
				} elseif (is_array($value)) {
					$this->setDefaultValueBase64Binary(
						new FHIRBase64Binary(array_merge($ext, $value)),
					);
				} else {
					$this->setDefaultValueBase64Binary(
						new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setDefaultValueBase64Binary(new FHIRBase64Binary($ext));
			}
		}
		if (
			isset($data[self::FIELD_DEFAULT_VALUE_BOOLEAN]) ||
			isset($data[self::FIELD_DEFAULT_VALUE_BOOLEAN_EXT])
		) {
			$value = $data[self::FIELD_DEFAULT_VALUE_BOOLEAN] ?? null;
			$ext =
				isset($data[self::FIELD_DEFAULT_VALUE_BOOLEAN_EXT]) &&
				is_array($data[self::FIELD_DEFAULT_VALUE_BOOLEAN_EXT])
					? $data[self::FIELD_DEFAULT_VALUE_BOOLEAN_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRBoolean) {
					$this->setDefaultValueBoolean($value);
				} elseif (is_array($value)) {
					$this->setDefaultValueBoolean(new FHIRBoolean(array_merge($ext, $value)));
				} else {
					$this->setDefaultValueBoolean(
						new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setDefaultValueBoolean(new FHIRBoolean($ext));
			}
		}
		if (
			isset($data[self::FIELD_DEFAULT_VALUE_CANONICAL]) ||
			isset($data[self::FIELD_DEFAULT_VALUE_CANONICAL_EXT])
		) {
			$value = $data[self::FIELD_DEFAULT_VALUE_CANONICAL] ?? null;
			$ext =
				isset($data[self::FIELD_DEFAULT_VALUE_CANONICAL_EXT]) &&
				is_array($data[self::FIELD_DEFAULT_VALUE_CANONICAL_EXT])
					? $data[self::FIELD_DEFAULT_VALUE_CANONICAL_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRCanonical) {
					$this->setDefaultValueCanonical($value);
				} elseif (is_array($value)) {
					$this->setDefaultValueCanonical(new FHIRCanonical(array_merge($ext, $value)));
				} else {
					$this->setDefaultValueCanonical(
						new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setDefaultValueCanonical(new FHIRCanonical($ext));
			}
		}
		if (
			isset($data[self::FIELD_DEFAULT_VALUE_CODE]) ||
			isset($data[self::FIELD_DEFAULT_VALUE_CODE_EXT])
		) {
			$value = $data[self::FIELD_DEFAULT_VALUE_CODE] ?? null;
			$ext =
				isset($data[self::FIELD_DEFAULT_VALUE_CODE_EXT]) &&
				is_array($data[self::FIELD_DEFAULT_VALUE_CODE_EXT])
					? $data[self::FIELD_DEFAULT_VALUE_CODE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRCode) {
					$this->setDefaultValueCode($value);
				} elseif (is_array($value)) {
					$this->setDefaultValueCode(new FHIRCode(array_merge($ext, $value)));
				} else {
					$this->setDefaultValueCode(
						new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setDefaultValueCode(new FHIRCode($ext));
			}
		}
		if (
			isset($data[self::FIELD_DEFAULT_VALUE_DATE]) ||
			isset($data[self::FIELD_DEFAULT_VALUE_DATE_EXT])
		) {
			$value = $data[self::FIELD_DEFAULT_VALUE_DATE] ?? null;
			$ext =
				isset($data[self::FIELD_DEFAULT_VALUE_DATE_EXT]) &&
				is_array($data[self::FIELD_DEFAULT_VALUE_DATE_EXT])
					? $data[self::FIELD_DEFAULT_VALUE_DATE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRDate) {
					$this->setDefaultValueDate($value);
				} elseif (is_array($value)) {
					$this->setDefaultValueDate(new FHIRDate(array_merge($ext, $value)));
				} else {
					$this->setDefaultValueDate(
						new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setDefaultValueDate(new FHIRDate($ext));
			}
		}
		if (
			isset($data[self::FIELD_DEFAULT_VALUE_DATE_TIME]) ||
			isset($data[self::FIELD_DEFAULT_VALUE_DATE_TIME_EXT])
		) {
			$value = $data[self::FIELD_DEFAULT_VALUE_DATE_TIME] ?? null;
			$ext =
				isset($data[self::FIELD_DEFAULT_VALUE_DATE_TIME_EXT]) &&
				is_array($data[self::FIELD_DEFAULT_VALUE_DATE_TIME_EXT])
					? $data[self::FIELD_DEFAULT_VALUE_DATE_TIME_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRDateTime) {
					$this->setDefaultValueDateTime($value);
				} elseif (is_array($value)) {
					$this->setDefaultValueDateTime(new FHIRDateTime(array_merge($ext, $value)));
				} else {
					$this->setDefaultValueDateTime(
						new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setDefaultValueDateTime(new FHIRDateTime($ext));
			}
		}
		if (
			isset($data[self::FIELD_DEFAULT_VALUE_DECIMAL]) ||
			isset($data[self::FIELD_DEFAULT_VALUE_DECIMAL_EXT])
		) {
			$value = $data[self::FIELD_DEFAULT_VALUE_DECIMAL] ?? null;
			$ext =
				isset($data[self::FIELD_DEFAULT_VALUE_DECIMAL_EXT]) &&
				is_array($data[self::FIELD_DEFAULT_VALUE_DECIMAL_EXT])
					? $data[self::FIELD_DEFAULT_VALUE_DECIMAL_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRDecimal) {
					$this->setDefaultValueDecimal($value);
				} elseif (is_array($value)) {
					$this->setDefaultValueDecimal(new FHIRDecimal(array_merge($ext, $value)));
				} else {
					$this->setDefaultValueDecimal(
						new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setDefaultValueDecimal(new FHIRDecimal($ext));
			}
		}
		if (
			isset($data[self::FIELD_DEFAULT_VALUE_ID]) ||
			isset($data[self::FIELD_DEFAULT_VALUE_ID_EXT])
		) {
			$value = $data[self::FIELD_DEFAULT_VALUE_ID] ?? null;
			$ext =
				isset($data[self::FIELD_DEFAULT_VALUE_ID_EXT]) &&
				is_array($data[self::FIELD_DEFAULT_VALUE_ID_EXT])
					? $data[self::FIELD_DEFAULT_VALUE_ID_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRId) {
					$this->setDefaultValueId($value);
				} elseif (is_array($value)) {
					$this->setDefaultValueId(new FHIRId(array_merge($ext, $value)));
				} else {
					$this->setDefaultValueId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setDefaultValueId(new FHIRId($ext));
			}
		}
		if (
			isset($data[self::FIELD_DEFAULT_VALUE_INSTANT]) ||
			isset($data[self::FIELD_DEFAULT_VALUE_INSTANT_EXT])
		) {
			$value = $data[self::FIELD_DEFAULT_VALUE_INSTANT] ?? null;
			$ext =
				isset($data[self::FIELD_DEFAULT_VALUE_INSTANT_EXT]) &&
				is_array($data[self::FIELD_DEFAULT_VALUE_INSTANT_EXT])
					? $data[self::FIELD_DEFAULT_VALUE_INSTANT_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRInstant) {
					$this->setDefaultValueInstant($value);
				} elseif (is_array($value)) {
					$this->setDefaultValueInstant(new FHIRInstant(array_merge($ext, $value)));
				} else {
					$this->setDefaultValueInstant(
						new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setDefaultValueInstant(new FHIRInstant($ext));
			}
		}
		if (
			isset($data[self::FIELD_DEFAULT_VALUE_INTEGER]) ||
			isset($data[self::FIELD_DEFAULT_VALUE_INTEGER_EXT])
		) {
			$value = $data[self::FIELD_DEFAULT_VALUE_INTEGER] ?? null;
			$ext =
				isset($data[self::FIELD_DEFAULT_VALUE_INTEGER_EXT]) &&
				is_array($data[self::FIELD_DEFAULT_VALUE_INTEGER_EXT])
					? $data[self::FIELD_DEFAULT_VALUE_INTEGER_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRInteger) {
					$this->setDefaultValueInteger($value);
				} elseif (is_array($value)) {
					$this->setDefaultValueInteger(new FHIRInteger(array_merge($ext, $value)));
				} else {
					$this->setDefaultValueInteger(
						new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setDefaultValueInteger(new FHIRInteger($ext));
			}
		}
		if (
			isset($data[self::FIELD_DEFAULT_VALUE_MARKDOWN]) ||
			isset($data[self::FIELD_DEFAULT_VALUE_MARKDOWN_EXT])
		) {
			$value = $data[self::FIELD_DEFAULT_VALUE_MARKDOWN] ?? null;
			$ext =
				isset($data[self::FIELD_DEFAULT_VALUE_MARKDOWN_EXT]) &&
				is_array($data[self::FIELD_DEFAULT_VALUE_MARKDOWN_EXT])
					? $data[self::FIELD_DEFAULT_VALUE_MARKDOWN_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRMarkdown) {
					$this->setDefaultValueMarkdown($value);
				} elseif (is_array($value)) {
					$this->setDefaultValueMarkdown(new FHIRMarkdown(array_merge($ext, $value)));
				} else {
					$this->setDefaultValueMarkdown(
						new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setDefaultValueMarkdown(new FHIRMarkdown($ext));
			}
		}
		if (
			isset($data[self::FIELD_DEFAULT_VALUE_OID]) ||
			isset($data[self::FIELD_DEFAULT_VALUE_OID_EXT])
		) {
			$value = $data[self::FIELD_DEFAULT_VALUE_OID] ?? null;
			$ext =
				isset($data[self::FIELD_DEFAULT_VALUE_OID_EXT]) &&
				is_array($data[self::FIELD_DEFAULT_VALUE_OID_EXT])
					? $data[self::FIELD_DEFAULT_VALUE_OID_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIROid) {
					$this->setDefaultValueOid($value);
				} elseif (is_array($value)) {
					$this->setDefaultValueOid(new FHIROid(array_merge($ext, $value)));
				} else {
					$this->setDefaultValueOid(new FHIROid([FHIROid::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setDefaultValueOid(new FHIROid($ext));
			}
		}
		if (
			isset($data[self::FIELD_DEFAULT_VALUE_POSITIVE_INT]) ||
			isset($data[self::FIELD_DEFAULT_VALUE_POSITIVE_INT_EXT])
		) {
			$value = $data[self::FIELD_DEFAULT_VALUE_POSITIVE_INT] ?? null;
			$ext =
				isset($data[self::FIELD_DEFAULT_VALUE_POSITIVE_INT_EXT]) &&
				is_array($data[self::FIELD_DEFAULT_VALUE_POSITIVE_INT_EXT])
					? $data[self::FIELD_DEFAULT_VALUE_POSITIVE_INT_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRPositiveInt) {
					$this->setDefaultValuePositiveInt($value);
				} elseif (is_array($value)) {
					$this->setDefaultValuePositiveInt(
						new FHIRPositiveInt(array_merge($ext, $value)),
					);
				} else {
					$this->setDefaultValuePositiveInt(
						new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setDefaultValuePositiveInt(new FHIRPositiveInt($ext));
			}
		}
		if (
			isset($data[self::FIELD_DEFAULT_VALUE_STRING]) ||
			isset($data[self::FIELD_DEFAULT_VALUE_STRING_EXT])
		) {
			$value = $data[self::FIELD_DEFAULT_VALUE_STRING] ?? null;
			$ext =
				isset($data[self::FIELD_DEFAULT_VALUE_STRING_EXT]) &&
				is_array($data[self::FIELD_DEFAULT_VALUE_STRING_EXT])
					? $data[self::FIELD_DEFAULT_VALUE_STRING_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->setDefaultValueString($value);
				} elseif (is_array($value)) {
					$this->setDefaultValueString(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->setDefaultValueString(
						new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setDefaultValueString(new FHIRString($ext));
			}
		}
		if (
			isset($data[self::FIELD_DEFAULT_VALUE_TIME]) ||
			isset($data[self::FIELD_DEFAULT_VALUE_TIME_EXT])
		) {
			$value = $data[self::FIELD_DEFAULT_VALUE_TIME] ?? null;
			$ext =
				isset($data[self::FIELD_DEFAULT_VALUE_TIME_EXT]) &&
				is_array($data[self::FIELD_DEFAULT_VALUE_TIME_EXT])
					? $data[self::FIELD_DEFAULT_VALUE_TIME_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRTime) {
					$this->setDefaultValueTime($value);
				} elseif (is_array($value)) {
					$this->setDefaultValueTime(new FHIRTime(array_merge($ext, $value)));
				} else {
					$this->setDefaultValueTime(
						new FHIRTime([FHIRTime::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setDefaultValueTime(new FHIRTime($ext));
			}
		}
		if (
			isset($data[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT]) ||
			isset($data[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT_EXT])
		) {
			$value = $data[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT] ?? null;
			$ext =
				isset($data[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT_EXT]) &&
				is_array($data[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT_EXT])
					? $data[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRUnsignedInt) {
					$this->setDefaultValueUnsignedInt($value);
				} elseif (is_array($value)) {
					$this->setDefaultValueUnsignedInt(
						new FHIRUnsignedInt(array_merge($ext, $value)),
					);
				} else {
					$this->setDefaultValueUnsignedInt(
						new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setDefaultValueUnsignedInt(new FHIRUnsignedInt($ext));
			}
		}
		if (
			isset($data[self::FIELD_DEFAULT_VALUE_URI]) ||
			isset($data[self::FIELD_DEFAULT_VALUE_URI_EXT])
		) {
			$value = $data[self::FIELD_DEFAULT_VALUE_URI] ?? null;
			$ext =
				isset($data[self::FIELD_DEFAULT_VALUE_URI_EXT]) &&
				is_array($data[self::FIELD_DEFAULT_VALUE_URI_EXT])
					? $data[self::FIELD_DEFAULT_VALUE_URI_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRUri) {
					$this->setDefaultValueUri($value);
				} elseif (is_array($value)) {
					$this->setDefaultValueUri(new FHIRUri(array_merge($ext, $value)));
				} else {
					$this->setDefaultValueUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setDefaultValueUri(new FHIRUri($ext));
			}
		}
		if (
			isset($data[self::FIELD_DEFAULT_VALUE_URL]) ||
			isset($data[self::FIELD_DEFAULT_VALUE_URL_EXT])
		) {
			$value = $data[self::FIELD_DEFAULT_VALUE_URL] ?? null;
			$ext =
				isset($data[self::FIELD_DEFAULT_VALUE_URL_EXT]) &&
				is_array($data[self::FIELD_DEFAULT_VALUE_URL_EXT])
					? $data[self::FIELD_DEFAULT_VALUE_URL_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRUrl) {
					$this->setDefaultValueUrl($value);
				} elseif (is_array($value)) {
					$this->setDefaultValueUrl(new FHIRUrl(array_merge($ext, $value)));
				} else {
					$this->setDefaultValueUrl(new FHIRUrl([FHIRUrl::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setDefaultValueUrl(new FHIRUrl($ext));
			}
		}
		if (
			isset($data[self::FIELD_DEFAULT_VALUE_UUID]) ||
			isset($data[self::FIELD_DEFAULT_VALUE_UUID_EXT])
		) {
			$value = $data[self::FIELD_DEFAULT_VALUE_UUID] ?? null;
			$ext =
				isset($data[self::FIELD_DEFAULT_VALUE_UUID_EXT]) &&
				is_array($data[self::FIELD_DEFAULT_VALUE_UUID_EXT])
					? $data[self::FIELD_DEFAULT_VALUE_UUID_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRUuid) {
					$this->setDefaultValueUuid($value);
				} elseif (is_array($value)) {
					$this->setDefaultValueUuid(new FHIRUuid(array_merge($ext, $value)));
				} else {
					$this->setDefaultValueUuid(
						new FHIRUuid([FHIRUuid::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setDefaultValueUuid(new FHIRUuid($ext));
			}
		}
		if (isset($data[self::FIELD_DEFAULT_VALUE_ADDRESS])) {
			if ($data[self::FIELD_DEFAULT_VALUE_ADDRESS] instanceof FHIRAddress) {
				$this->setDefaultValueAddress($data[self::FIELD_DEFAULT_VALUE_ADDRESS]);
			} else {
				$this->setDefaultValueAddress(
					new FHIRAddress($data[self::FIELD_DEFAULT_VALUE_ADDRESS]),
				);
			}
		}
		if (isset($data[self::FIELD_DEFAULT_VALUE_AGE])) {
			if ($data[self::FIELD_DEFAULT_VALUE_AGE] instanceof FHIRAge) {
				$this->setDefaultValueAge($data[self::FIELD_DEFAULT_VALUE_AGE]);
			} else {
				$this->setDefaultValueAge(new FHIRAge($data[self::FIELD_DEFAULT_VALUE_AGE]));
			}
		}
		if (isset($data[self::FIELD_DEFAULT_VALUE_ANNOTATION])) {
			if ($data[self::FIELD_DEFAULT_VALUE_ANNOTATION] instanceof FHIRAnnotation) {
				$this->setDefaultValueAnnotation($data[self::FIELD_DEFAULT_VALUE_ANNOTATION]);
			} else {
				$this->setDefaultValueAnnotation(
					new FHIRAnnotation($data[self::FIELD_DEFAULT_VALUE_ANNOTATION]),
				);
			}
		}
		if (isset($data[self::FIELD_DEFAULT_VALUE_ATTACHMENT])) {
			if ($data[self::FIELD_DEFAULT_VALUE_ATTACHMENT] instanceof FHIRAttachment) {
				$this->setDefaultValueAttachment($data[self::FIELD_DEFAULT_VALUE_ATTACHMENT]);
			} else {
				$this->setDefaultValueAttachment(
					new FHIRAttachment($data[self::FIELD_DEFAULT_VALUE_ATTACHMENT]),
				);
			}
		}
		if (isset($data[self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT])) {
			if ($data[self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
				$this->setDefaultValueCodeableConcept(
					$data[self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT],
				);
			} else {
				$this->setDefaultValueCodeableConcept(
					new FHIRCodeableConcept($data[self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT]),
				);
			}
		}
		if (isset($data[self::FIELD_DEFAULT_VALUE_CODING])) {
			if ($data[self::FIELD_DEFAULT_VALUE_CODING] instanceof FHIRCoding) {
				$this->setDefaultValueCoding($data[self::FIELD_DEFAULT_VALUE_CODING]);
			} else {
				$this->setDefaultValueCoding(
					new FHIRCoding($data[self::FIELD_DEFAULT_VALUE_CODING]),
				);
			}
		}
		if (isset($data[self::FIELD_DEFAULT_VALUE_CONTACT_POINT])) {
			if ($data[self::FIELD_DEFAULT_VALUE_CONTACT_POINT] instanceof FHIRContactPoint) {
				$this->setDefaultValueContactPoint($data[self::FIELD_DEFAULT_VALUE_CONTACT_POINT]);
			} else {
				$this->setDefaultValueContactPoint(
					new FHIRContactPoint($data[self::FIELD_DEFAULT_VALUE_CONTACT_POINT]),
				);
			}
		}
		if (isset($data[self::FIELD_DEFAULT_VALUE_COUNT])) {
			if ($data[self::FIELD_DEFAULT_VALUE_COUNT] instanceof FHIRCount) {
				$this->setDefaultValueCount($data[self::FIELD_DEFAULT_VALUE_COUNT]);
			} else {
				$this->setDefaultValueCount(new FHIRCount($data[self::FIELD_DEFAULT_VALUE_COUNT]));
			}
		}
		if (isset($data[self::FIELD_DEFAULT_VALUE_DISTANCE])) {
			if ($data[self::FIELD_DEFAULT_VALUE_DISTANCE] instanceof FHIRDistance) {
				$this->setDefaultValueDistance($data[self::FIELD_DEFAULT_VALUE_DISTANCE]);
			} else {
				$this->setDefaultValueDistance(
					new FHIRDistance($data[self::FIELD_DEFAULT_VALUE_DISTANCE]),
				);
			}
		}
		if (isset($data[self::FIELD_DEFAULT_VALUE_DURATION])) {
			if ($data[self::FIELD_DEFAULT_VALUE_DURATION] instanceof FHIRDuration) {
				$this->setDefaultValueDuration($data[self::FIELD_DEFAULT_VALUE_DURATION]);
			} else {
				$this->setDefaultValueDuration(
					new FHIRDuration($data[self::FIELD_DEFAULT_VALUE_DURATION]),
				);
			}
		}
		if (isset($data[self::FIELD_DEFAULT_VALUE_HUMAN_NAME])) {
			if ($data[self::FIELD_DEFAULT_VALUE_HUMAN_NAME] instanceof FHIRHumanName) {
				$this->setDefaultValueHumanName($data[self::FIELD_DEFAULT_VALUE_HUMAN_NAME]);
			} else {
				$this->setDefaultValueHumanName(
					new FHIRHumanName($data[self::FIELD_DEFAULT_VALUE_HUMAN_NAME]),
				);
			}
		}
		if (isset($data[self::FIELD_DEFAULT_VALUE_IDENTIFIER])) {
			if ($data[self::FIELD_DEFAULT_VALUE_IDENTIFIER] instanceof FHIRIdentifier) {
				$this->setDefaultValueIdentifier($data[self::FIELD_DEFAULT_VALUE_IDENTIFIER]);
			} else {
				$this->setDefaultValueIdentifier(
					new FHIRIdentifier($data[self::FIELD_DEFAULT_VALUE_IDENTIFIER]),
				);
			}
		}
		if (isset($data[self::FIELD_DEFAULT_VALUE_MONEY])) {
			if ($data[self::FIELD_DEFAULT_VALUE_MONEY] instanceof FHIRMoney) {
				$this->setDefaultValueMoney($data[self::FIELD_DEFAULT_VALUE_MONEY]);
			} else {
				$this->setDefaultValueMoney(new FHIRMoney($data[self::FIELD_DEFAULT_VALUE_MONEY]));
			}
		}
		if (isset($data[self::FIELD_DEFAULT_VALUE_PERIOD])) {
			if ($data[self::FIELD_DEFAULT_VALUE_PERIOD] instanceof FHIRPeriod) {
				$this->setDefaultValuePeriod($data[self::FIELD_DEFAULT_VALUE_PERIOD]);
			} else {
				$this->setDefaultValuePeriod(
					new FHIRPeriod($data[self::FIELD_DEFAULT_VALUE_PERIOD]),
				);
			}
		}
		if (isset($data[self::FIELD_DEFAULT_VALUE_QUANTITY])) {
			if ($data[self::FIELD_DEFAULT_VALUE_QUANTITY] instanceof FHIRQuantity) {
				$this->setDefaultValueQuantity($data[self::FIELD_DEFAULT_VALUE_QUANTITY]);
			} else {
				$this->setDefaultValueQuantity(
					new FHIRQuantity($data[self::FIELD_DEFAULT_VALUE_QUANTITY]),
				);
			}
		}
		if (isset($data[self::FIELD_DEFAULT_VALUE_RANGE])) {
			if ($data[self::FIELD_DEFAULT_VALUE_RANGE] instanceof FHIRRange) {
				$this->setDefaultValueRange($data[self::FIELD_DEFAULT_VALUE_RANGE]);
			} else {
				$this->setDefaultValueRange(new FHIRRange($data[self::FIELD_DEFAULT_VALUE_RANGE]));
			}
		}
		if (isset($data[self::FIELD_DEFAULT_VALUE_RATIO])) {
			if ($data[self::FIELD_DEFAULT_VALUE_RATIO] instanceof FHIRRatio) {
				$this->setDefaultValueRatio($data[self::FIELD_DEFAULT_VALUE_RATIO]);
			} else {
				$this->setDefaultValueRatio(new FHIRRatio($data[self::FIELD_DEFAULT_VALUE_RATIO]));
			}
		}
		if (isset($data[self::FIELD_DEFAULT_VALUE_REFERENCE])) {
			if ($data[self::FIELD_DEFAULT_VALUE_REFERENCE] instanceof FHIRReference) {
				$this->setDefaultValueReference($data[self::FIELD_DEFAULT_VALUE_REFERENCE]);
			} else {
				$this->setDefaultValueReference(
					new FHIRReference($data[self::FIELD_DEFAULT_VALUE_REFERENCE]),
				);
			}
		}
		if (isset($data[self::FIELD_DEFAULT_VALUE_SAMPLED_DATA])) {
			if ($data[self::FIELD_DEFAULT_VALUE_SAMPLED_DATA] instanceof FHIRSampledData) {
				$this->setDefaultValueSampledData($data[self::FIELD_DEFAULT_VALUE_SAMPLED_DATA]);
			} else {
				$this->setDefaultValueSampledData(
					new FHIRSampledData($data[self::FIELD_DEFAULT_VALUE_SAMPLED_DATA]),
				);
			}
		}
		if (isset($data[self::FIELD_DEFAULT_VALUE_SIGNATURE])) {
			if ($data[self::FIELD_DEFAULT_VALUE_SIGNATURE] instanceof FHIRSignature) {
				$this->setDefaultValueSignature($data[self::FIELD_DEFAULT_VALUE_SIGNATURE]);
			} else {
				$this->setDefaultValueSignature(
					new FHIRSignature($data[self::FIELD_DEFAULT_VALUE_SIGNATURE]),
				);
			}
		}
		if (isset($data[self::FIELD_DEFAULT_VALUE_TIMING])) {
			if ($data[self::FIELD_DEFAULT_VALUE_TIMING] instanceof FHIRTiming) {
				$this->setDefaultValueTiming($data[self::FIELD_DEFAULT_VALUE_TIMING]);
			} else {
				$this->setDefaultValueTiming(
					new FHIRTiming($data[self::FIELD_DEFAULT_VALUE_TIMING]),
				);
			}
		}
		if (isset($data[self::FIELD_DEFAULT_VALUE_CONTACT_DETAIL])) {
			if ($data[self::FIELD_DEFAULT_VALUE_CONTACT_DETAIL] instanceof FHIRContactDetail) {
				$this->setDefaultValueContactDetail(
					$data[self::FIELD_DEFAULT_VALUE_CONTACT_DETAIL],
				);
			} else {
				$this->setDefaultValueContactDetail(
					new FHIRContactDetail($data[self::FIELD_DEFAULT_VALUE_CONTACT_DETAIL]),
				);
			}
		}
		if (isset($data[self::FIELD_DEFAULT_VALUE_CONTRIBUTOR])) {
			if ($data[self::FIELD_DEFAULT_VALUE_CONTRIBUTOR] instanceof FHIRContributor) {
				$this->setDefaultValueContributor($data[self::FIELD_DEFAULT_VALUE_CONTRIBUTOR]);
			} else {
				$this->setDefaultValueContributor(
					new FHIRContributor($data[self::FIELD_DEFAULT_VALUE_CONTRIBUTOR]),
				);
			}
		}
		if (isset($data[self::FIELD_DEFAULT_VALUE_DATA_REQUIREMENT])) {
			if ($data[self::FIELD_DEFAULT_VALUE_DATA_REQUIREMENT] instanceof FHIRDataRequirement) {
				$this->setDefaultValueDataRequirement(
					$data[self::FIELD_DEFAULT_VALUE_DATA_REQUIREMENT],
				);
			} else {
				$this->setDefaultValueDataRequirement(
					new FHIRDataRequirement($data[self::FIELD_DEFAULT_VALUE_DATA_REQUIREMENT]),
				);
			}
		}
		if (isset($data[self::FIELD_DEFAULT_VALUE_EXPRESSION])) {
			if ($data[self::FIELD_DEFAULT_VALUE_EXPRESSION] instanceof FHIRExpression) {
				$this->setDefaultValueExpression($data[self::FIELD_DEFAULT_VALUE_EXPRESSION]);
			} else {
				$this->setDefaultValueExpression(
					new FHIRExpression($data[self::FIELD_DEFAULT_VALUE_EXPRESSION]),
				);
			}
		}
		if (isset($data[self::FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION])) {
			if (
				$data[self::FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION] instanceof
				FHIRParameterDefinition
			) {
				$this->setDefaultValueParameterDefinition(
					$data[self::FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION],
				);
			} else {
				$this->setDefaultValueParameterDefinition(
					new FHIRParameterDefinition(
						$data[self::FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION],
					),
				);
			}
		}
		if (isset($data[self::FIELD_DEFAULT_VALUE_RELATED_ARTIFACT])) {
			if ($data[self::FIELD_DEFAULT_VALUE_RELATED_ARTIFACT] instanceof FHIRRelatedArtifact) {
				$this->setDefaultValueRelatedArtifact(
					$data[self::FIELD_DEFAULT_VALUE_RELATED_ARTIFACT],
				);
			} else {
				$this->setDefaultValueRelatedArtifact(
					new FHIRRelatedArtifact($data[self::FIELD_DEFAULT_VALUE_RELATED_ARTIFACT]),
				);
			}
		}
		if (isset($data[self::FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION])) {
			if (
				$data[self::FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION] instanceof FHIRTriggerDefinition
			) {
				$this->setDefaultValueTriggerDefinition(
					$data[self::FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION],
				);
			} else {
				$this->setDefaultValueTriggerDefinition(
					new FHIRTriggerDefinition($data[self::FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION]),
				);
			}
		}
		if (isset($data[self::FIELD_DEFAULT_VALUE_USAGE_CONTEXT])) {
			if ($data[self::FIELD_DEFAULT_VALUE_USAGE_CONTEXT] instanceof FHIRUsageContext) {
				$this->setDefaultValueUsageContext($data[self::FIELD_DEFAULT_VALUE_USAGE_CONTEXT]);
			} else {
				$this->setDefaultValueUsageContext(
					new FHIRUsageContext($data[self::FIELD_DEFAULT_VALUE_USAGE_CONTEXT]),
				);
			}
		}
		if (isset($data[self::FIELD_DEFAULT_VALUE_DOSAGE])) {
			if ($data[self::FIELD_DEFAULT_VALUE_DOSAGE] instanceof FHIRDosage) {
				$this->setDefaultValueDosage($data[self::FIELD_DEFAULT_VALUE_DOSAGE]);
			} else {
				$this->setDefaultValueDosage(
					new FHIRDosage($data[self::FIELD_DEFAULT_VALUE_DOSAGE]),
				);
			}
		}
		if (isset($data[self::FIELD_DEFAULT_VALUE_META])) {
			if ($data[self::FIELD_DEFAULT_VALUE_META] instanceof FHIRMeta) {
				$this->setDefaultValueMeta($data[self::FIELD_DEFAULT_VALUE_META]);
			} else {
				$this->setDefaultValueMeta(new FHIRMeta($data[self::FIELD_DEFAULT_VALUE_META]));
			}
		}
		if (
			isset($data[self::FIELD_MEANING_WHEN_MISSING]) ||
			isset($data[self::FIELD_MEANING_WHEN_MISSING_EXT])
		) {
			$value = $data[self::FIELD_MEANING_WHEN_MISSING] ?? null;
			$ext =
				isset($data[self::FIELD_MEANING_WHEN_MISSING_EXT]) &&
				is_array($data[self::FIELD_MEANING_WHEN_MISSING_EXT])
					? $data[self::FIELD_MEANING_WHEN_MISSING_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRMarkdown) {
					$this->setMeaningWhenMissing($value);
				} elseif (is_array($value)) {
					$this->setMeaningWhenMissing(new FHIRMarkdown(array_merge($ext, $value)));
				} else {
					$this->setMeaningWhenMissing(
						new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setMeaningWhenMissing(new FHIRMarkdown($ext));
			}
		}
		if (
			isset($data[self::FIELD_ORDER_MEANING]) ||
			isset($data[self::FIELD_ORDER_MEANING_EXT])
		) {
			$value = $data[self::FIELD_ORDER_MEANING] ?? null;
			$ext =
				isset($data[self::FIELD_ORDER_MEANING_EXT]) &&
				is_array($data[self::FIELD_ORDER_MEANING_EXT])
					? $data[self::FIELD_ORDER_MEANING_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->setOrderMeaning($value);
				} elseif (is_array($value)) {
					$this->setOrderMeaning(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->setOrderMeaning(
						new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setOrderMeaning(new FHIRString($ext));
			}
		}
		if (
			isset($data[self::FIELD_FIXED_BASE_64BINARY]) ||
			isset($data[self::FIELD_FIXED_BASE_64BINARY_EXT])
		) {
			$value = $data[self::FIELD_FIXED_BASE_64BINARY] ?? null;
			$ext =
				isset($data[self::FIELD_FIXED_BASE_64BINARY_EXT]) &&
				is_array($data[self::FIELD_FIXED_BASE_64BINARY_EXT])
					? $data[self::FIELD_FIXED_BASE_64BINARY_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRBase64Binary) {
					$this->setFixedBase64Binary($value);
				} elseif (is_array($value)) {
					$this->setFixedBase64Binary(new FHIRBase64Binary(array_merge($ext, $value)));
				} else {
					$this->setFixedBase64Binary(
						new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setFixedBase64Binary(new FHIRBase64Binary($ext));
			}
		}
		if (
			isset($data[self::FIELD_FIXED_BOOLEAN]) ||
			isset($data[self::FIELD_FIXED_BOOLEAN_EXT])
		) {
			$value = $data[self::FIELD_FIXED_BOOLEAN] ?? null;
			$ext =
				isset($data[self::FIELD_FIXED_BOOLEAN_EXT]) &&
				is_array($data[self::FIELD_FIXED_BOOLEAN_EXT])
					? $data[self::FIELD_FIXED_BOOLEAN_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRBoolean) {
					$this->setFixedBoolean($value);
				} elseif (is_array($value)) {
					$this->setFixedBoolean(new FHIRBoolean(array_merge($ext, $value)));
				} else {
					$this->setFixedBoolean(
						new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setFixedBoolean(new FHIRBoolean($ext));
			}
		}
		if (
			isset($data[self::FIELD_FIXED_CANONICAL]) ||
			isset($data[self::FIELD_FIXED_CANONICAL_EXT])
		) {
			$value = $data[self::FIELD_FIXED_CANONICAL] ?? null;
			$ext =
				isset($data[self::FIELD_FIXED_CANONICAL_EXT]) &&
				is_array($data[self::FIELD_FIXED_CANONICAL_EXT])
					? $data[self::FIELD_FIXED_CANONICAL_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRCanonical) {
					$this->setFixedCanonical($value);
				} elseif (is_array($value)) {
					$this->setFixedCanonical(new FHIRCanonical(array_merge($ext, $value)));
				} else {
					$this->setFixedCanonical(
						new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setFixedCanonical(new FHIRCanonical($ext));
			}
		}
		if (isset($data[self::FIELD_FIXED_CODE]) || isset($data[self::FIELD_FIXED_CODE_EXT])) {
			$value = $data[self::FIELD_FIXED_CODE] ?? null;
			$ext =
				isset($data[self::FIELD_FIXED_CODE_EXT]) &&
				is_array($data[self::FIELD_FIXED_CODE_EXT])
					? $data[self::FIELD_FIXED_CODE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRCode) {
					$this->setFixedCode($value);
				} elseif (is_array($value)) {
					$this->setFixedCode(new FHIRCode(array_merge($ext, $value)));
				} else {
					$this->setFixedCode(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setFixedCode(new FHIRCode($ext));
			}
		}
		if (isset($data[self::FIELD_FIXED_DATE]) || isset($data[self::FIELD_FIXED_DATE_EXT])) {
			$value = $data[self::FIELD_FIXED_DATE] ?? null;
			$ext =
				isset($data[self::FIELD_FIXED_DATE_EXT]) &&
				is_array($data[self::FIELD_FIXED_DATE_EXT])
					? $data[self::FIELD_FIXED_DATE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRDate) {
					$this->setFixedDate($value);
				} elseif (is_array($value)) {
					$this->setFixedDate(new FHIRDate(array_merge($ext, $value)));
				} else {
					$this->setFixedDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setFixedDate(new FHIRDate($ext));
			}
		}
		if (
			isset($data[self::FIELD_FIXED_DATE_TIME]) ||
			isset($data[self::FIELD_FIXED_DATE_TIME_EXT])
		) {
			$value = $data[self::FIELD_FIXED_DATE_TIME] ?? null;
			$ext =
				isset($data[self::FIELD_FIXED_DATE_TIME_EXT]) &&
				is_array($data[self::FIELD_FIXED_DATE_TIME_EXT])
					? $data[self::FIELD_FIXED_DATE_TIME_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRDateTime) {
					$this->setFixedDateTime($value);
				} elseif (is_array($value)) {
					$this->setFixedDateTime(new FHIRDateTime(array_merge($ext, $value)));
				} else {
					$this->setFixedDateTime(
						new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setFixedDateTime(new FHIRDateTime($ext));
			}
		}
		if (
			isset($data[self::FIELD_FIXED_DECIMAL]) ||
			isset($data[self::FIELD_FIXED_DECIMAL_EXT])
		) {
			$value = $data[self::FIELD_FIXED_DECIMAL] ?? null;
			$ext =
				isset($data[self::FIELD_FIXED_DECIMAL_EXT]) &&
				is_array($data[self::FIELD_FIXED_DECIMAL_EXT])
					? $data[self::FIELD_FIXED_DECIMAL_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRDecimal) {
					$this->setFixedDecimal($value);
				} elseif (is_array($value)) {
					$this->setFixedDecimal(new FHIRDecimal(array_merge($ext, $value)));
				} else {
					$this->setFixedDecimal(
						new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setFixedDecimal(new FHIRDecimal($ext));
			}
		}
		if (isset($data[self::FIELD_FIXED_ID]) || isset($data[self::FIELD_FIXED_ID_EXT])) {
			$value = $data[self::FIELD_FIXED_ID] ?? null;
			$ext =
				isset($data[self::FIELD_FIXED_ID_EXT]) && is_array($data[self::FIELD_FIXED_ID_EXT])
					? $data[self::FIELD_FIXED_ID_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRId) {
					$this->setFixedId($value);
				} elseif (is_array($value)) {
					$this->setFixedId(new FHIRId(array_merge($ext, $value)));
				} else {
					$this->setFixedId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setFixedId(new FHIRId($ext));
			}
		}
		if (
			isset($data[self::FIELD_FIXED_INSTANT]) ||
			isset($data[self::FIELD_FIXED_INSTANT_EXT])
		) {
			$value = $data[self::FIELD_FIXED_INSTANT] ?? null;
			$ext =
				isset($data[self::FIELD_FIXED_INSTANT_EXT]) &&
				is_array($data[self::FIELD_FIXED_INSTANT_EXT])
					? $data[self::FIELD_FIXED_INSTANT_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRInstant) {
					$this->setFixedInstant($value);
				} elseif (is_array($value)) {
					$this->setFixedInstant(new FHIRInstant(array_merge($ext, $value)));
				} else {
					$this->setFixedInstant(
						new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setFixedInstant(new FHIRInstant($ext));
			}
		}
		if (
			isset($data[self::FIELD_FIXED_INTEGER]) ||
			isset($data[self::FIELD_FIXED_INTEGER_EXT])
		) {
			$value = $data[self::FIELD_FIXED_INTEGER] ?? null;
			$ext =
				isset($data[self::FIELD_FIXED_INTEGER_EXT]) &&
				is_array($data[self::FIELD_FIXED_INTEGER_EXT])
					? $data[self::FIELD_FIXED_INTEGER_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRInteger) {
					$this->setFixedInteger($value);
				} elseif (is_array($value)) {
					$this->setFixedInteger(new FHIRInteger(array_merge($ext, $value)));
				} else {
					$this->setFixedInteger(
						new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setFixedInteger(new FHIRInteger($ext));
			}
		}
		if (
			isset($data[self::FIELD_FIXED_MARKDOWN]) ||
			isset($data[self::FIELD_FIXED_MARKDOWN_EXT])
		) {
			$value = $data[self::FIELD_FIXED_MARKDOWN] ?? null;
			$ext =
				isset($data[self::FIELD_FIXED_MARKDOWN_EXT]) &&
				is_array($data[self::FIELD_FIXED_MARKDOWN_EXT])
					? $data[self::FIELD_FIXED_MARKDOWN_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRMarkdown) {
					$this->setFixedMarkdown($value);
				} elseif (is_array($value)) {
					$this->setFixedMarkdown(new FHIRMarkdown(array_merge($ext, $value)));
				} else {
					$this->setFixedMarkdown(
						new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setFixedMarkdown(new FHIRMarkdown($ext));
			}
		}
		if (isset($data[self::FIELD_FIXED_OID]) || isset($data[self::FIELD_FIXED_OID_EXT])) {
			$value = $data[self::FIELD_FIXED_OID] ?? null;
			$ext =
				isset($data[self::FIELD_FIXED_OID_EXT]) &&
				is_array($data[self::FIELD_FIXED_OID_EXT])
					? $data[self::FIELD_FIXED_OID_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIROid) {
					$this->setFixedOid($value);
				} elseif (is_array($value)) {
					$this->setFixedOid(new FHIROid(array_merge($ext, $value)));
				} else {
					$this->setFixedOid(new FHIROid([FHIROid::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setFixedOid(new FHIROid($ext));
			}
		}
		if (
			isset($data[self::FIELD_FIXED_POSITIVE_INT]) ||
			isset($data[self::FIELD_FIXED_POSITIVE_INT_EXT])
		) {
			$value = $data[self::FIELD_FIXED_POSITIVE_INT] ?? null;
			$ext =
				isset($data[self::FIELD_FIXED_POSITIVE_INT_EXT]) &&
				is_array($data[self::FIELD_FIXED_POSITIVE_INT_EXT])
					? $data[self::FIELD_FIXED_POSITIVE_INT_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRPositiveInt) {
					$this->setFixedPositiveInt($value);
				} elseif (is_array($value)) {
					$this->setFixedPositiveInt(new FHIRPositiveInt(array_merge($ext, $value)));
				} else {
					$this->setFixedPositiveInt(
						new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setFixedPositiveInt(new FHIRPositiveInt($ext));
			}
		}
		if (isset($data[self::FIELD_FIXED_STRING]) || isset($data[self::FIELD_FIXED_STRING_EXT])) {
			$value = $data[self::FIELD_FIXED_STRING] ?? null;
			$ext =
				isset($data[self::FIELD_FIXED_STRING_EXT]) &&
				is_array($data[self::FIELD_FIXED_STRING_EXT])
					? $data[self::FIELD_FIXED_STRING_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->setFixedString($value);
				} elseif (is_array($value)) {
					$this->setFixedString(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->setFixedString(
						new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setFixedString(new FHIRString($ext));
			}
		}
		if (isset($data[self::FIELD_FIXED_TIME]) || isset($data[self::FIELD_FIXED_TIME_EXT])) {
			$value = $data[self::FIELD_FIXED_TIME] ?? null;
			$ext =
				isset($data[self::FIELD_FIXED_TIME_EXT]) &&
				is_array($data[self::FIELD_FIXED_TIME_EXT])
					? $data[self::FIELD_FIXED_TIME_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRTime) {
					$this->setFixedTime($value);
				} elseif (is_array($value)) {
					$this->setFixedTime(new FHIRTime(array_merge($ext, $value)));
				} else {
					$this->setFixedTime(new FHIRTime([FHIRTime::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setFixedTime(new FHIRTime($ext));
			}
		}
		if (
			isset($data[self::FIELD_FIXED_UNSIGNED_INT]) ||
			isset($data[self::FIELD_FIXED_UNSIGNED_INT_EXT])
		) {
			$value = $data[self::FIELD_FIXED_UNSIGNED_INT] ?? null;
			$ext =
				isset($data[self::FIELD_FIXED_UNSIGNED_INT_EXT]) &&
				is_array($data[self::FIELD_FIXED_UNSIGNED_INT_EXT])
					? $data[self::FIELD_FIXED_UNSIGNED_INT_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRUnsignedInt) {
					$this->setFixedUnsignedInt($value);
				} elseif (is_array($value)) {
					$this->setFixedUnsignedInt(new FHIRUnsignedInt(array_merge($ext, $value)));
				} else {
					$this->setFixedUnsignedInt(
						new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setFixedUnsignedInt(new FHIRUnsignedInt($ext));
			}
		}
		if (isset($data[self::FIELD_FIXED_URI]) || isset($data[self::FIELD_FIXED_URI_EXT])) {
			$value = $data[self::FIELD_FIXED_URI] ?? null;
			$ext =
				isset($data[self::FIELD_FIXED_URI_EXT]) &&
				is_array($data[self::FIELD_FIXED_URI_EXT])
					? $data[self::FIELD_FIXED_URI_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRUri) {
					$this->setFixedUri($value);
				} elseif (is_array($value)) {
					$this->setFixedUri(new FHIRUri(array_merge($ext, $value)));
				} else {
					$this->setFixedUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setFixedUri(new FHIRUri($ext));
			}
		}
		if (isset($data[self::FIELD_FIXED_URL]) || isset($data[self::FIELD_FIXED_URL_EXT])) {
			$value = $data[self::FIELD_FIXED_URL] ?? null;
			$ext =
				isset($data[self::FIELD_FIXED_URL_EXT]) &&
				is_array($data[self::FIELD_FIXED_URL_EXT])
					? $data[self::FIELD_FIXED_URL_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRUrl) {
					$this->setFixedUrl($value);
				} elseif (is_array($value)) {
					$this->setFixedUrl(new FHIRUrl(array_merge($ext, $value)));
				} else {
					$this->setFixedUrl(new FHIRUrl([FHIRUrl::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setFixedUrl(new FHIRUrl($ext));
			}
		}
		if (isset($data[self::FIELD_FIXED_UUID]) || isset($data[self::FIELD_FIXED_UUID_EXT])) {
			$value = $data[self::FIELD_FIXED_UUID] ?? null;
			$ext =
				isset($data[self::FIELD_FIXED_UUID_EXT]) &&
				is_array($data[self::FIELD_FIXED_UUID_EXT])
					? $data[self::FIELD_FIXED_UUID_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRUuid) {
					$this->setFixedUuid($value);
				} elseif (is_array($value)) {
					$this->setFixedUuid(new FHIRUuid(array_merge($ext, $value)));
				} else {
					$this->setFixedUuid(new FHIRUuid([FHIRUuid::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setFixedUuid(new FHIRUuid($ext));
			}
		}
		if (isset($data[self::FIELD_FIXED_ADDRESS])) {
			if ($data[self::FIELD_FIXED_ADDRESS] instanceof FHIRAddress) {
				$this->setFixedAddress($data[self::FIELD_FIXED_ADDRESS]);
			} else {
				$this->setFixedAddress(new FHIRAddress($data[self::FIELD_FIXED_ADDRESS]));
			}
		}
		if (isset($data[self::FIELD_FIXED_AGE])) {
			if ($data[self::FIELD_FIXED_AGE] instanceof FHIRAge) {
				$this->setFixedAge($data[self::FIELD_FIXED_AGE]);
			} else {
				$this->setFixedAge(new FHIRAge($data[self::FIELD_FIXED_AGE]));
			}
		}
		if (isset($data[self::FIELD_FIXED_ANNOTATION])) {
			if ($data[self::FIELD_FIXED_ANNOTATION] instanceof FHIRAnnotation) {
				$this->setFixedAnnotation($data[self::FIELD_FIXED_ANNOTATION]);
			} else {
				$this->setFixedAnnotation(new FHIRAnnotation($data[self::FIELD_FIXED_ANNOTATION]));
			}
		}
		if (isset($data[self::FIELD_FIXED_ATTACHMENT])) {
			if ($data[self::FIELD_FIXED_ATTACHMENT] instanceof FHIRAttachment) {
				$this->setFixedAttachment($data[self::FIELD_FIXED_ATTACHMENT]);
			} else {
				$this->setFixedAttachment(new FHIRAttachment($data[self::FIELD_FIXED_ATTACHMENT]));
			}
		}
		if (isset($data[self::FIELD_FIXED_CODEABLE_CONCEPT])) {
			if ($data[self::FIELD_FIXED_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
				$this->setFixedCodeableConcept($data[self::FIELD_FIXED_CODEABLE_CONCEPT]);
			} else {
				$this->setFixedCodeableConcept(
					new FHIRCodeableConcept($data[self::FIELD_FIXED_CODEABLE_CONCEPT]),
				);
			}
		}
		if (isset($data[self::FIELD_FIXED_CODING])) {
			if ($data[self::FIELD_FIXED_CODING] instanceof FHIRCoding) {
				$this->setFixedCoding($data[self::FIELD_FIXED_CODING]);
			} else {
				$this->setFixedCoding(new FHIRCoding($data[self::FIELD_FIXED_CODING]));
			}
		}
		if (isset($data[self::FIELD_FIXED_CONTACT_POINT])) {
			if ($data[self::FIELD_FIXED_CONTACT_POINT] instanceof FHIRContactPoint) {
				$this->setFixedContactPoint($data[self::FIELD_FIXED_CONTACT_POINT]);
			} else {
				$this->setFixedContactPoint(
					new FHIRContactPoint($data[self::FIELD_FIXED_CONTACT_POINT]),
				);
			}
		}
		if (isset($data[self::FIELD_FIXED_COUNT])) {
			if ($data[self::FIELD_FIXED_COUNT] instanceof FHIRCount) {
				$this->setFixedCount($data[self::FIELD_FIXED_COUNT]);
			} else {
				$this->setFixedCount(new FHIRCount($data[self::FIELD_FIXED_COUNT]));
			}
		}
		if (isset($data[self::FIELD_FIXED_DISTANCE])) {
			if ($data[self::FIELD_FIXED_DISTANCE] instanceof FHIRDistance) {
				$this->setFixedDistance($data[self::FIELD_FIXED_DISTANCE]);
			} else {
				$this->setFixedDistance(new FHIRDistance($data[self::FIELD_FIXED_DISTANCE]));
			}
		}
		if (isset($data[self::FIELD_FIXED_DURATION])) {
			if ($data[self::FIELD_FIXED_DURATION] instanceof FHIRDuration) {
				$this->setFixedDuration($data[self::FIELD_FIXED_DURATION]);
			} else {
				$this->setFixedDuration(new FHIRDuration($data[self::FIELD_FIXED_DURATION]));
			}
		}
		if (isset($data[self::FIELD_FIXED_HUMAN_NAME])) {
			if ($data[self::FIELD_FIXED_HUMAN_NAME] instanceof FHIRHumanName) {
				$this->setFixedHumanName($data[self::FIELD_FIXED_HUMAN_NAME]);
			} else {
				$this->setFixedHumanName(new FHIRHumanName($data[self::FIELD_FIXED_HUMAN_NAME]));
			}
		}
		if (isset($data[self::FIELD_FIXED_IDENTIFIER])) {
			if ($data[self::FIELD_FIXED_IDENTIFIER] instanceof FHIRIdentifier) {
				$this->setFixedIdentifier($data[self::FIELD_FIXED_IDENTIFIER]);
			} else {
				$this->setFixedIdentifier(new FHIRIdentifier($data[self::FIELD_FIXED_IDENTIFIER]));
			}
		}
		if (isset($data[self::FIELD_FIXED_MONEY])) {
			if ($data[self::FIELD_FIXED_MONEY] instanceof FHIRMoney) {
				$this->setFixedMoney($data[self::FIELD_FIXED_MONEY]);
			} else {
				$this->setFixedMoney(new FHIRMoney($data[self::FIELD_FIXED_MONEY]));
			}
		}
		if (isset($data[self::FIELD_FIXED_PERIOD])) {
			if ($data[self::FIELD_FIXED_PERIOD] instanceof FHIRPeriod) {
				$this->setFixedPeriod($data[self::FIELD_FIXED_PERIOD]);
			} else {
				$this->setFixedPeriod(new FHIRPeriod($data[self::FIELD_FIXED_PERIOD]));
			}
		}
		if (isset($data[self::FIELD_FIXED_QUANTITY])) {
			if ($data[self::FIELD_FIXED_QUANTITY] instanceof FHIRQuantity) {
				$this->setFixedQuantity($data[self::FIELD_FIXED_QUANTITY]);
			} else {
				$this->setFixedQuantity(new FHIRQuantity($data[self::FIELD_FIXED_QUANTITY]));
			}
		}
		if (isset($data[self::FIELD_FIXED_RANGE])) {
			if ($data[self::FIELD_FIXED_RANGE] instanceof FHIRRange) {
				$this->setFixedRange($data[self::FIELD_FIXED_RANGE]);
			} else {
				$this->setFixedRange(new FHIRRange($data[self::FIELD_FIXED_RANGE]));
			}
		}
		if (isset($data[self::FIELD_FIXED_RATIO])) {
			if ($data[self::FIELD_FIXED_RATIO] instanceof FHIRRatio) {
				$this->setFixedRatio($data[self::FIELD_FIXED_RATIO]);
			} else {
				$this->setFixedRatio(new FHIRRatio($data[self::FIELD_FIXED_RATIO]));
			}
		}
		if (isset($data[self::FIELD_FIXED_REFERENCE])) {
			if ($data[self::FIELD_FIXED_REFERENCE] instanceof FHIRReference) {
				$this->setFixedReference($data[self::FIELD_FIXED_REFERENCE]);
			} else {
				$this->setFixedReference(new FHIRReference($data[self::FIELD_FIXED_REFERENCE]));
			}
		}
		if (isset($data[self::FIELD_FIXED_SAMPLED_DATA])) {
			if ($data[self::FIELD_FIXED_SAMPLED_DATA] instanceof FHIRSampledData) {
				$this->setFixedSampledData($data[self::FIELD_FIXED_SAMPLED_DATA]);
			} else {
				$this->setFixedSampledData(
					new FHIRSampledData($data[self::FIELD_FIXED_SAMPLED_DATA]),
				);
			}
		}
		if (isset($data[self::FIELD_FIXED_SIGNATURE])) {
			if ($data[self::FIELD_FIXED_SIGNATURE] instanceof FHIRSignature) {
				$this->setFixedSignature($data[self::FIELD_FIXED_SIGNATURE]);
			} else {
				$this->setFixedSignature(new FHIRSignature($data[self::FIELD_FIXED_SIGNATURE]));
			}
		}
		if (isset($data[self::FIELD_FIXED_TIMING])) {
			if ($data[self::FIELD_FIXED_TIMING] instanceof FHIRTiming) {
				$this->setFixedTiming($data[self::FIELD_FIXED_TIMING]);
			} else {
				$this->setFixedTiming(new FHIRTiming($data[self::FIELD_FIXED_TIMING]));
			}
		}
		if (isset($data[self::FIELD_FIXED_CONTACT_DETAIL])) {
			if ($data[self::FIELD_FIXED_CONTACT_DETAIL] instanceof FHIRContactDetail) {
				$this->setFixedContactDetail($data[self::FIELD_FIXED_CONTACT_DETAIL]);
			} else {
				$this->setFixedContactDetail(
					new FHIRContactDetail($data[self::FIELD_FIXED_CONTACT_DETAIL]),
				);
			}
		}
		if (isset($data[self::FIELD_FIXED_CONTRIBUTOR])) {
			if ($data[self::FIELD_FIXED_CONTRIBUTOR] instanceof FHIRContributor) {
				$this->setFixedContributor($data[self::FIELD_FIXED_CONTRIBUTOR]);
			} else {
				$this->setFixedContributor(
					new FHIRContributor($data[self::FIELD_FIXED_CONTRIBUTOR]),
				);
			}
		}
		if (isset($data[self::FIELD_FIXED_DATA_REQUIREMENT])) {
			if ($data[self::FIELD_FIXED_DATA_REQUIREMENT] instanceof FHIRDataRequirement) {
				$this->setFixedDataRequirement($data[self::FIELD_FIXED_DATA_REQUIREMENT]);
			} else {
				$this->setFixedDataRequirement(
					new FHIRDataRequirement($data[self::FIELD_FIXED_DATA_REQUIREMENT]),
				);
			}
		}
		if (isset($data[self::FIELD_FIXED_EXPRESSION])) {
			if ($data[self::FIELD_FIXED_EXPRESSION] instanceof FHIRExpression) {
				$this->setFixedExpression($data[self::FIELD_FIXED_EXPRESSION]);
			} else {
				$this->setFixedExpression(new FHIRExpression($data[self::FIELD_FIXED_EXPRESSION]));
			}
		}
		if (isset($data[self::FIELD_FIXED_PARAMETER_DEFINITION])) {
			if ($data[self::FIELD_FIXED_PARAMETER_DEFINITION] instanceof FHIRParameterDefinition) {
				$this->setFixedParameterDefinition($data[self::FIELD_FIXED_PARAMETER_DEFINITION]);
			} else {
				$this->setFixedParameterDefinition(
					new FHIRParameterDefinition($data[self::FIELD_FIXED_PARAMETER_DEFINITION]),
				);
			}
		}
		if (isset($data[self::FIELD_FIXED_RELATED_ARTIFACT])) {
			if ($data[self::FIELD_FIXED_RELATED_ARTIFACT] instanceof FHIRRelatedArtifact) {
				$this->setFixedRelatedArtifact($data[self::FIELD_FIXED_RELATED_ARTIFACT]);
			} else {
				$this->setFixedRelatedArtifact(
					new FHIRRelatedArtifact($data[self::FIELD_FIXED_RELATED_ARTIFACT]),
				);
			}
		}
		if (isset($data[self::FIELD_FIXED_TRIGGER_DEFINITION])) {
			if ($data[self::FIELD_FIXED_TRIGGER_DEFINITION] instanceof FHIRTriggerDefinition) {
				$this->setFixedTriggerDefinition($data[self::FIELD_FIXED_TRIGGER_DEFINITION]);
			} else {
				$this->setFixedTriggerDefinition(
					new FHIRTriggerDefinition($data[self::FIELD_FIXED_TRIGGER_DEFINITION]),
				);
			}
		}
		if (isset($data[self::FIELD_FIXED_USAGE_CONTEXT])) {
			if ($data[self::FIELD_FIXED_USAGE_CONTEXT] instanceof FHIRUsageContext) {
				$this->setFixedUsageContext($data[self::FIELD_FIXED_USAGE_CONTEXT]);
			} else {
				$this->setFixedUsageContext(
					new FHIRUsageContext($data[self::FIELD_FIXED_USAGE_CONTEXT]),
				);
			}
		}
		if (isset($data[self::FIELD_FIXED_DOSAGE])) {
			if ($data[self::FIELD_FIXED_DOSAGE] instanceof FHIRDosage) {
				$this->setFixedDosage($data[self::FIELD_FIXED_DOSAGE]);
			} else {
				$this->setFixedDosage(new FHIRDosage($data[self::FIELD_FIXED_DOSAGE]));
			}
		}
		if (isset($data[self::FIELD_FIXED_META])) {
			if ($data[self::FIELD_FIXED_META] instanceof FHIRMeta) {
				$this->setFixedMeta($data[self::FIELD_FIXED_META]);
			} else {
				$this->setFixedMeta(new FHIRMeta($data[self::FIELD_FIXED_META]));
			}
		}
		if (
			isset($data[self::FIELD_PATTERN_BASE_64BINARY]) ||
			isset($data[self::FIELD_PATTERN_BASE_64BINARY_EXT])
		) {
			$value = $data[self::FIELD_PATTERN_BASE_64BINARY] ?? null;
			$ext =
				isset($data[self::FIELD_PATTERN_BASE_64BINARY_EXT]) &&
				is_array($data[self::FIELD_PATTERN_BASE_64BINARY_EXT])
					? $data[self::FIELD_PATTERN_BASE_64BINARY_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRBase64Binary) {
					$this->setPatternBase64Binary($value);
				} elseif (is_array($value)) {
					$this->setPatternBase64Binary(new FHIRBase64Binary(array_merge($ext, $value)));
				} else {
					$this->setPatternBase64Binary(
						new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setPatternBase64Binary(new FHIRBase64Binary($ext));
			}
		}
		if (
			isset($data[self::FIELD_PATTERN_BOOLEAN]) ||
			isset($data[self::FIELD_PATTERN_BOOLEAN_EXT])
		) {
			$value = $data[self::FIELD_PATTERN_BOOLEAN] ?? null;
			$ext =
				isset($data[self::FIELD_PATTERN_BOOLEAN_EXT]) &&
				is_array($data[self::FIELD_PATTERN_BOOLEAN_EXT])
					? $data[self::FIELD_PATTERN_BOOLEAN_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRBoolean) {
					$this->setPatternBoolean($value);
				} elseif (is_array($value)) {
					$this->setPatternBoolean(new FHIRBoolean(array_merge($ext, $value)));
				} else {
					$this->setPatternBoolean(
						new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setPatternBoolean(new FHIRBoolean($ext));
			}
		}
		if (
			isset($data[self::FIELD_PATTERN_CANONICAL]) ||
			isset($data[self::FIELD_PATTERN_CANONICAL_EXT])
		) {
			$value = $data[self::FIELD_PATTERN_CANONICAL] ?? null;
			$ext =
				isset($data[self::FIELD_PATTERN_CANONICAL_EXT]) &&
				is_array($data[self::FIELD_PATTERN_CANONICAL_EXT])
					? $data[self::FIELD_PATTERN_CANONICAL_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRCanonical) {
					$this->setPatternCanonical($value);
				} elseif (is_array($value)) {
					$this->setPatternCanonical(new FHIRCanonical(array_merge($ext, $value)));
				} else {
					$this->setPatternCanonical(
						new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setPatternCanonical(new FHIRCanonical($ext));
			}
		}
		if (isset($data[self::FIELD_PATTERN_CODE]) || isset($data[self::FIELD_PATTERN_CODE_EXT])) {
			$value = $data[self::FIELD_PATTERN_CODE] ?? null;
			$ext =
				isset($data[self::FIELD_PATTERN_CODE_EXT]) &&
				is_array($data[self::FIELD_PATTERN_CODE_EXT])
					? $data[self::FIELD_PATTERN_CODE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRCode) {
					$this->setPatternCode($value);
				} elseif (is_array($value)) {
					$this->setPatternCode(new FHIRCode(array_merge($ext, $value)));
				} else {
					$this->setPatternCode(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setPatternCode(new FHIRCode($ext));
			}
		}
		if (isset($data[self::FIELD_PATTERN_DATE]) || isset($data[self::FIELD_PATTERN_DATE_EXT])) {
			$value = $data[self::FIELD_PATTERN_DATE] ?? null;
			$ext =
				isset($data[self::FIELD_PATTERN_DATE_EXT]) &&
				is_array($data[self::FIELD_PATTERN_DATE_EXT])
					? $data[self::FIELD_PATTERN_DATE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRDate) {
					$this->setPatternDate($value);
				} elseif (is_array($value)) {
					$this->setPatternDate(new FHIRDate(array_merge($ext, $value)));
				} else {
					$this->setPatternDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setPatternDate(new FHIRDate($ext));
			}
		}
		if (
			isset($data[self::FIELD_PATTERN_DATE_TIME]) ||
			isset($data[self::FIELD_PATTERN_DATE_TIME_EXT])
		) {
			$value = $data[self::FIELD_PATTERN_DATE_TIME] ?? null;
			$ext =
				isset($data[self::FIELD_PATTERN_DATE_TIME_EXT]) &&
				is_array($data[self::FIELD_PATTERN_DATE_TIME_EXT])
					? $data[self::FIELD_PATTERN_DATE_TIME_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRDateTime) {
					$this->setPatternDateTime($value);
				} elseif (is_array($value)) {
					$this->setPatternDateTime(new FHIRDateTime(array_merge($ext, $value)));
				} else {
					$this->setPatternDateTime(
						new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setPatternDateTime(new FHIRDateTime($ext));
			}
		}
		if (
			isset($data[self::FIELD_PATTERN_DECIMAL]) ||
			isset($data[self::FIELD_PATTERN_DECIMAL_EXT])
		) {
			$value = $data[self::FIELD_PATTERN_DECIMAL] ?? null;
			$ext =
				isset($data[self::FIELD_PATTERN_DECIMAL_EXT]) &&
				is_array($data[self::FIELD_PATTERN_DECIMAL_EXT])
					? $data[self::FIELD_PATTERN_DECIMAL_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRDecimal) {
					$this->setPatternDecimal($value);
				} elseif (is_array($value)) {
					$this->setPatternDecimal(new FHIRDecimal(array_merge($ext, $value)));
				} else {
					$this->setPatternDecimal(
						new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setPatternDecimal(new FHIRDecimal($ext));
			}
		}
		if (isset($data[self::FIELD_PATTERN_ID]) || isset($data[self::FIELD_PATTERN_ID_EXT])) {
			$value = $data[self::FIELD_PATTERN_ID] ?? null;
			$ext =
				isset($data[self::FIELD_PATTERN_ID_EXT]) &&
				is_array($data[self::FIELD_PATTERN_ID_EXT])
					? $data[self::FIELD_PATTERN_ID_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRId) {
					$this->setPatternId($value);
				} elseif (is_array($value)) {
					$this->setPatternId(new FHIRId(array_merge($ext, $value)));
				} else {
					$this->setPatternId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setPatternId(new FHIRId($ext));
			}
		}
		if (
			isset($data[self::FIELD_PATTERN_INSTANT]) ||
			isset($data[self::FIELD_PATTERN_INSTANT_EXT])
		) {
			$value = $data[self::FIELD_PATTERN_INSTANT] ?? null;
			$ext =
				isset($data[self::FIELD_PATTERN_INSTANT_EXT]) &&
				is_array($data[self::FIELD_PATTERN_INSTANT_EXT])
					? $data[self::FIELD_PATTERN_INSTANT_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRInstant) {
					$this->setPatternInstant($value);
				} elseif (is_array($value)) {
					$this->setPatternInstant(new FHIRInstant(array_merge($ext, $value)));
				} else {
					$this->setPatternInstant(
						new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setPatternInstant(new FHIRInstant($ext));
			}
		}
		if (
			isset($data[self::FIELD_PATTERN_INTEGER]) ||
			isset($data[self::FIELD_PATTERN_INTEGER_EXT])
		) {
			$value = $data[self::FIELD_PATTERN_INTEGER] ?? null;
			$ext =
				isset($data[self::FIELD_PATTERN_INTEGER_EXT]) &&
				is_array($data[self::FIELD_PATTERN_INTEGER_EXT])
					? $data[self::FIELD_PATTERN_INTEGER_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRInteger) {
					$this->setPatternInteger($value);
				} elseif (is_array($value)) {
					$this->setPatternInteger(new FHIRInteger(array_merge($ext, $value)));
				} else {
					$this->setPatternInteger(
						new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setPatternInteger(new FHIRInteger($ext));
			}
		}
		if (
			isset($data[self::FIELD_PATTERN_MARKDOWN]) ||
			isset($data[self::FIELD_PATTERN_MARKDOWN_EXT])
		) {
			$value = $data[self::FIELD_PATTERN_MARKDOWN] ?? null;
			$ext =
				isset($data[self::FIELD_PATTERN_MARKDOWN_EXT]) &&
				is_array($data[self::FIELD_PATTERN_MARKDOWN_EXT])
					? $data[self::FIELD_PATTERN_MARKDOWN_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRMarkdown) {
					$this->setPatternMarkdown($value);
				} elseif (is_array($value)) {
					$this->setPatternMarkdown(new FHIRMarkdown(array_merge($ext, $value)));
				} else {
					$this->setPatternMarkdown(
						new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setPatternMarkdown(new FHIRMarkdown($ext));
			}
		}
		if (isset($data[self::FIELD_PATTERN_OID]) || isset($data[self::FIELD_PATTERN_OID_EXT])) {
			$value = $data[self::FIELD_PATTERN_OID] ?? null;
			$ext =
				isset($data[self::FIELD_PATTERN_OID_EXT]) &&
				is_array($data[self::FIELD_PATTERN_OID_EXT])
					? $data[self::FIELD_PATTERN_OID_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIROid) {
					$this->setPatternOid($value);
				} elseif (is_array($value)) {
					$this->setPatternOid(new FHIROid(array_merge($ext, $value)));
				} else {
					$this->setPatternOid(new FHIROid([FHIROid::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setPatternOid(new FHIROid($ext));
			}
		}
		if (
			isset($data[self::FIELD_PATTERN_POSITIVE_INT]) ||
			isset($data[self::FIELD_PATTERN_POSITIVE_INT_EXT])
		) {
			$value = $data[self::FIELD_PATTERN_POSITIVE_INT] ?? null;
			$ext =
				isset($data[self::FIELD_PATTERN_POSITIVE_INT_EXT]) &&
				is_array($data[self::FIELD_PATTERN_POSITIVE_INT_EXT])
					? $data[self::FIELD_PATTERN_POSITIVE_INT_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRPositiveInt) {
					$this->setPatternPositiveInt($value);
				} elseif (is_array($value)) {
					$this->setPatternPositiveInt(new FHIRPositiveInt(array_merge($ext, $value)));
				} else {
					$this->setPatternPositiveInt(
						new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setPatternPositiveInt(new FHIRPositiveInt($ext));
			}
		}
		if (
			isset($data[self::FIELD_PATTERN_STRING]) ||
			isset($data[self::FIELD_PATTERN_STRING_EXT])
		) {
			$value = $data[self::FIELD_PATTERN_STRING] ?? null;
			$ext =
				isset($data[self::FIELD_PATTERN_STRING_EXT]) &&
				is_array($data[self::FIELD_PATTERN_STRING_EXT])
					? $data[self::FIELD_PATTERN_STRING_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->setPatternString($value);
				} elseif (is_array($value)) {
					$this->setPatternString(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->setPatternString(
						new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setPatternString(new FHIRString($ext));
			}
		}
		if (isset($data[self::FIELD_PATTERN_TIME]) || isset($data[self::FIELD_PATTERN_TIME_EXT])) {
			$value = $data[self::FIELD_PATTERN_TIME] ?? null;
			$ext =
				isset($data[self::FIELD_PATTERN_TIME_EXT]) &&
				is_array($data[self::FIELD_PATTERN_TIME_EXT])
					? $data[self::FIELD_PATTERN_TIME_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRTime) {
					$this->setPatternTime($value);
				} elseif (is_array($value)) {
					$this->setPatternTime(new FHIRTime(array_merge($ext, $value)));
				} else {
					$this->setPatternTime(new FHIRTime([FHIRTime::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setPatternTime(new FHIRTime($ext));
			}
		}
		if (
			isset($data[self::FIELD_PATTERN_UNSIGNED_INT]) ||
			isset($data[self::FIELD_PATTERN_UNSIGNED_INT_EXT])
		) {
			$value = $data[self::FIELD_PATTERN_UNSIGNED_INT] ?? null;
			$ext =
				isset($data[self::FIELD_PATTERN_UNSIGNED_INT_EXT]) &&
				is_array($data[self::FIELD_PATTERN_UNSIGNED_INT_EXT])
					? $data[self::FIELD_PATTERN_UNSIGNED_INT_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRUnsignedInt) {
					$this->setPatternUnsignedInt($value);
				} elseif (is_array($value)) {
					$this->setPatternUnsignedInt(new FHIRUnsignedInt(array_merge($ext, $value)));
				} else {
					$this->setPatternUnsignedInt(
						new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setPatternUnsignedInt(new FHIRUnsignedInt($ext));
			}
		}
		if (isset($data[self::FIELD_PATTERN_URI]) || isset($data[self::FIELD_PATTERN_URI_EXT])) {
			$value = $data[self::FIELD_PATTERN_URI] ?? null;
			$ext =
				isset($data[self::FIELD_PATTERN_URI_EXT]) &&
				is_array($data[self::FIELD_PATTERN_URI_EXT])
					? $data[self::FIELD_PATTERN_URI_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRUri) {
					$this->setPatternUri($value);
				} elseif (is_array($value)) {
					$this->setPatternUri(new FHIRUri(array_merge($ext, $value)));
				} else {
					$this->setPatternUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setPatternUri(new FHIRUri($ext));
			}
		}
		if (isset($data[self::FIELD_PATTERN_URL]) || isset($data[self::FIELD_PATTERN_URL_EXT])) {
			$value = $data[self::FIELD_PATTERN_URL] ?? null;
			$ext =
				isset($data[self::FIELD_PATTERN_URL_EXT]) &&
				is_array($data[self::FIELD_PATTERN_URL_EXT])
					? $data[self::FIELD_PATTERN_URL_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRUrl) {
					$this->setPatternUrl($value);
				} elseif (is_array($value)) {
					$this->setPatternUrl(new FHIRUrl(array_merge($ext, $value)));
				} else {
					$this->setPatternUrl(new FHIRUrl([FHIRUrl::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setPatternUrl(new FHIRUrl($ext));
			}
		}
		if (isset($data[self::FIELD_PATTERN_UUID]) || isset($data[self::FIELD_PATTERN_UUID_EXT])) {
			$value = $data[self::FIELD_PATTERN_UUID] ?? null;
			$ext =
				isset($data[self::FIELD_PATTERN_UUID_EXT]) &&
				is_array($data[self::FIELD_PATTERN_UUID_EXT])
					? $data[self::FIELD_PATTERN_UUID_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRUuid) {
					$this->setPatternUuid($value);
				} elseif (is_array($value)) {
					$this->setPatternUuid(new FHIRUuid(array_merge($ext, $value)));
				} else {
					$this->setPatternUuid(new FHIRUuid([FHIRUuid::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setPatternUuid(new FHIRUuid($ext));
			}
		}
		if (isset($data[self::FIELD_PATTERN_ADDRESS])) {
			if ($data[self::FIELD_PATTERN_ADDRESS] instanceof FHIRAddress) {
				$this->setPatternAddress($data[self::FIELD_PATTERN_ADDRESS]);
			} else {
				$this->setPatternAddress(new FHIRAddress($data[self::FIELD_PATTERN_ADDRESS]));
			}
		}
		if (isset($data[self::FIELD_PATTERN_AGE])) {
			if ($data[self::FIELD_PATTERN_AGE] instanceof FHIRAge) {
				$this->setPatternAge($data[self::FIELD_PATTERN_AGE]);
			} else {
				$this->setPatternAge(new FHIRAge($data[self::FIELD_PATTERN_AGE]));
			}
		}
		if (isset($data[self::FIELD_PATTERN_ANNOTATION])) {
			if ($data[self::FIELD_PATTERN_ANNOTATION] instanceof FHIRAnnotation) {
				$this->setPatternAnnotation($data[self::FIELD_PATTERN_ANNOTATION]);
			} else {
				$this->setPatternAnnotation(
					new FHIRAnnotation($data[self::FIELD_PATTERN_ANNOTATION]),
				);
			}
		}
		if (isset($data[self::FIELD_PATTERN_ATTACHMENT])) {
			if ($data[self::FIELD_PATTERN_ATTACHMENT] instanceof FHIRAttachment) {
				$this->setPatternAttachment($data[self::FIELD_PATTERN_ATTACHMENT]);
			} else {
				$this->setPatternAttachment(
					new FHIRAttachment($data[self::FIELD_PATTERN_ATTACHMENT]),
				);
			}
		}
		if (isset($data[self::FIELD_PATTERN_CODEABLE_CONCEPT])) {
			if ($data[self::FIELD_PATTERN_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
				$this->setPatternCodeableConcept($data[self::FIELD_PATTERN_CODEABLE_CONCEPT]);
			} else {
				$this->setPatternCodeableConcept(
					new FHIRCodeableConcept($data[self::FIELD_PATTERN_CODEABLE_CONCEPT]),
				);
			}
		}
		if (isset($data[self::FIELD_PATTERN_CODING])) {
			if ($data[self::FIELD_PATTERN_CODING] instanceof FHIRCoding) {
				$this->setPatternCoding($data[self::FIELD_PATTERN_CODING]);
			} else {
				$this->setPatternCoding(new FHIRCoding($data[self::FIELD_PATTERN_CODING]));
			}
		}
		if (isset($data[self::FIELD_PATTERN_CONTACT_POINT])) {
			if ($data[self::FIELD_PATTERN_CONTACT_POINT] instanceof FHIRContactPoint) {
				$this->setPatternContactPoint($data[self::FIELD_PATTERN_CONTACT_POINT]);
			} else {
				$this->setPatternContactPoint(
					new FHIRContactPoint($data[self::FIELD_PATTERN_CONTACT_POINT]),
				);
			}
		}
		if (isset($data[self::FIELD_PATTERN_COUNT])) {
			if ($data[self::FIELD_PATTERN_COUNT] instanceof FHIRCount) {
				$this->setPatternCount($data[self::FIELD_PATTERN_COUNT]);
			} else {
				$this->setPatternCount(new FHIRCount($data[self::FIELD_PATTERN_COUNT]));
			}
		}
		if (isset($data[self::FIELD_PATTERN_DISTANCE])) {
			if ($data[self::FIELD_PATTERN_DISTANCE] instanceof FHIRDistance) {
				$this->setPatternDistance($data[self::FIELD_PATTERN_DISTANCE]);
			} else {
				$this->setPatternDistance(new FHIRDistance($data[self::FIELD_PATTERN_DISTANCE]));
			}
		}
		if (isset($data[self::FIELD_PATTERN_DURATION])) {
			if ($data[self::FIELD_PATTERN_DURATION] instanceof FHIRDuration) {
				$this->setPatternDuration($data[self::FIELD_PATTERN_DURATION]);
			} else {
				$this->setPatternDuration(new FHIRDuration($data[self::FIELD_PATTERN_DURATION]));
			}
		}
		if (isset($data[self::FIELD_PATTERN_HUMAN_NAME])) {
			if ($data[self::FIELD_PATTERN_HUMAN_NAME] instanceof FHIRHumanName) {
				$this->setPatternHumanName($data[self::FIELD_PATTERN_HUMAN_NAME]);
			} else {
				$this->setPatternHumanName(
					new FHIRHumanName($data[self::FIELD_PATTERN_HUMAN_NAME]),
				);
			}
		}
		if (isset($data[self::FIELD_PATTERN_IDENTIFIER])) {
			if ($data[self::FIELD_PATTERN_IDENTIFIER] instanceof FHIRIdentifier) {
				$this->setPatternIdentifier($data[self::FIELD_PATTERN_IDENTIFIER]);
			} else {
				$this->setPatternIdentifier(
					new FHIRIdentifier($data[self::FIELD_PATTERN_IDENTIFIER]),
				);
			}
		}
		if (isset($data[self::FIELD_PATTERN_MONEY])) {
			if ($data[self::FIELD_PATTERN_MONEY] instanceof FHIRMoney) {
				$this->setPatternMoney($data[self::FIELD_PATTERN_MONEY]);
			} else {
				$this->setPatternMoney(new FHIRMoney($data[self::FIELD_PATTERN_MONEY]));
			}
		}
		if (isset($data[self::FIELD_PATTERN_PERIOD])) {
			if ($data[self::FIELD_PATTERN_PERIOD] instanceof FHIRPeriod) {
				$this->setPatternPeriod($data[self::FIELD_PATTERN_PERIOD]);
			} else {
				$this->setPatternPeriod(new FHIRPeriod($data[self::FIELD_PATTERN_PERIOD]));
			}
		}
		if (isset($data[self::FIELD_PATTERN_QUANTITY])) {
			if ($data[self::FIELD_PATTERN_QUANTITY] instanceof FHIRQuantity) {
				$this->setPatternQuantity($data[self::FIELD_PATTERN_QUANTITY]);
			} else {
				$this->setPatternQuantity(new FHIRQuantity($data[self::FIELD_PATTERN_QUANTITY]));
			}
		}
		if (isset($data[self::FIELD_PATTERN_RANGE])) {
			if ($data[self::FIELD_PATTERN_RANGE] instanceof FHIRRange) {
				$this->setPatternRange($data[self::FIELD_PATTERN_RANGE]);
			} else {
				$this->setPatternRange(new FHIRRange($data[self::FIELD_PATTERN_RANGE]));
			}
		}
		if (isset($data[self::FIELD_PATTERN_RATIO])) {
			if ($data[self::FIELD_PATTERN_RATIO] instanceof FHIRRatio) {
				$this->setPatternRatio($data[self::FIELD_PATTERN_RATIO]);
			} else {
				$this->setPatternRatio(new FHIRRatio($data[self::FIELD_PATTERN_RATIO]));
			}
		}
		if (isset($data[self::FIELD_PATTERN_REFERENCE])) {
			if ($data[self::FIELD_PATTERN_REFERENCE] instanceof FHIRReference) {
				$this->setPatternReference($data[self::FIELD_PATTERN_REFERENCE]);
			} else {
				$this->setPatternReference(new FHIRReference($data[self::FIELD_PATTERN_REFERENCE]));
			}
		}
		if (isset($data[self::FIELD_PATTERN_SAMPLED_DATA])) {
			if ($data[self::FIELD_PATTERN_SAMPLED_DATA] instanceof FHIRSampledData) {
				$this->setPatternSampledData($data[self::FIELD_PATTERN_SAMPLED_DATA]);
			} else {
				$this->setPatternSampledData(
					new FHIRSampledData($data[self::FIELD_PATTERN_SAMPLED_DATA]),
				);
			}
		}
		if (isset($data[self::FIELD_PATTERN_SIGNATURE])) {
			if ($data[self::FIELD_PATTERN_SIGNATURE] instanceof FHIRSignature) {
				$this->setPatternSignature($data[self::FIELD_PATTERN_SIGNATURE]);
			} else {
				$this->setPatternSignature(new FHIRSignature($data[self::FIELD_PATTERN_SIGNATURE]));
			}
		}
		if (isset($data[self::FIELD_PATTERN_TIMING])) {
			if ($data[self::FIELD_PATTERN_TIMING] instanceof FHIRTiming) {
				$this->setPatternTiming($data[self::FIELD_PATTERN_TIMING]);
			} else {
				$this->setPatternTiming(new FHIRTiming($data[self::FIELD_PATTERN_TIMING]));
			}
		}
		if (isset($data[self::FIELD_PATTERN_CONTACT_DETAIL])) {
			if ($data[self::FIELD_PATTERN_CONTACT_DETAIL] instanceof FHIRContactDetail) {
				$this->setPatternContactDetail($data[self::FIELD_PATTERN_CONTACT_DETAIL]);
			} else {
				$this->setPatternContactDetail(
					new FHIRContactDetail($data[self::FIELD_PATTERN_CONTACT_DETAIL]),
				);
			}
		}
		if (isset($data[self::FIELD_PATTERN_CONTRIBUTOR])) {
			if ($data[self::FIELD_PATTERN_CONTRIBUTOR] instanceof FHIRContributor) {
				$this->setPatternContributor($data[self::FIELD_PATTERN_CONTRIBUTOR]);
			} else {
				$this->setPatternContributor(
					new FHIRContributor($data[self::FIELD_PATTERN_CONTRIBUTOR]),
				);
			}
		}
		if (isset($data[self::FIELD_PATTERN_DATA_REQUIREMENT])) {
			if ($data[self::FIELD_PATTERN_DATA_REQUIREMENT] instanceof FHIRDataRequirement) {
				$this->setPatternDataRequirement($data[self::FIELD_PATTERN_DATA_REQUIREMENT]);
			} else {
				$this->setPatternDataRequirement(
					new FHIRDataRequirement($data[self::FIELD_PATTERN_DATA_REQUIREMENT]),
				);
			}
		}
		if (isset($data[self::FIELD_PATTERN_EXPRESSION])) {
			if ($data[self::FIELD_PATTERN_EXPRESSION] instanceof FHIRExpression) {
				$this->setPatternExpression($data[self::FIELD_PATTERN_EXPRESSION]);
			} else {
				$this->setPatternExpression(
					new FHIRExpression($data[self::FIELD_PATTERN_EXPRESSION]),
				);
			}
		}
		if (isset($data[self::FIELD_PATTERN_PARAMETER_DEFINITION])) {
			if (
				$data[self::FIELD_PATTERN_PARAMETER_DEFINITION] instanceof FHIRParameterDefinition
			) {
				$this->setPatternParameterDefinition(
					$data[self::FIELD_PATTERN_PARAMETER_DEFINITION],
				);
			} else {
				$this->setPatternParameterDefinition(
					new FHIRParameterDefinition($data[self::FIELD_PATTERN_PARAMETER_DEFINITION]),
				);
			}
		}
		if (isset($data[self::FIELD_PATTERN_RELATED_ARTIFACT])) {
			if ($data[self::FIELD_PATTERN_RELATED_ARTIFACT] instanceof FHIRRelatedArtifact) {
				$this->setPatternRelatedArtifact($data[self::FIELD_PATTERN_RELATED_ARTIFACT]);
			} else {
				$this->setPatternRelatedArtifact(
					new FHIRRelatedArtifact($data[self::FIELD_PATTERN_RELATED_ARTIFACT]),
				);
			}
		}
		if (isset($data[self::FIELD_PATTERN_TRIGGER_DEFINITION])) {
			if ($data[self::FIELD_PATTERN_TRIGGER_DEFINITION] instanceof FHIRTriggerDefinition) {
				$this->setPatternTriggerDefinition($data[self::FIELD_PATTERN_TRIGGER_DEFINITION]);
			} else {
				$this->setPatternTriggerDefinition(
					new FHIRTriggerDefinition($data[self::FIELD_PATTERN_TRIGGER_DEFINITION]),
				);
			}
		}
		if (isset($data[self::FIELD_PATTERN_USAGE_CONTEXT])) {
			if ($data[self::FIELD_PATTERN_USAGE_CONTEXT] instanceof FHIRUsageContext) {
				$this->setPatternUsageContext($data[self::FIELD_PATTERN_USAGE_CONTEXT]);
			} else {
				$this->setPatternUsageContext(
					new FHIRUsageContext($data[self::FIELD_PATTERN_USAGE_CONTEXT]),
				);
			}
		}
		if (isset($data[self::FIELD_PATTERN_DOSAGE])) {
			if ($data[self::FIELD_PATTERN_DOSAGE] instanceof FHIRDosage) {
				$this->setPatternDosage($data[self::FIELD_PATTERN_DOSAGE]);
			} else {
				$this->setPatternDosage(new FHIRDosage($data[self::FIELD_PATTERN_DOSAGE]));
			}
		}
		if (isset($data[self::FIELD_PATTERN_META])) {
			if ($data[self::FIELD_PATTERN_META] instanceof FHIRMeta) {
				$this->setPatternMeta($data[self::FIELD_PATTERN_META]);
			} else {
				$this->setPatternMeta(new FHIRMeta($data[self::FIELD_PATTERN_META]));
			}
		}
		if (isset($data[self::FIELD_EXAMPLE])) {
			if (is_array($data[self::FIELD_EXAMPLE])) {
				foreach ($data[self::FIELD_EXAMPLE] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRElementDefinitionExample) {
						$this->addExample($v);
					} else {
						$this->addExample(new FHIRElementDefinitionExample($v));
					}
				}
			} elseif ($data[self::FIELD_EXAMPLE] instanceof FHIRElementDefinitionExample) {
				$this->addExample($data[self::FIELD_EXAMPLE]);
			} else {
				$this->addExample(new FHIRElementDefinitionExample($data[self::FIELD_EXAMPLE]));
			}
		}
		if (
			isset($data[self::FIELD_MIN_VALUE_DATE]) ||
			isset($data[self::FIELD_MIN_VALUE_DATE_EXT])
		) {
			$value = $data[self::FIELD_MIN_VALUE_DATE] ?? null;
			$ext =
				isset($data[self::FIELD_MIN_VALUE_DATE_EXT]) &&
				is_array($data[self::FIELD_MIN_VALUE_DATE_EXT])
					? $data[self::FIELD_MIN_VALUE_DATE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRDate) {
					$this->setMinValueDate($value);
				} elseif (is_array($value)) {
					$this->setMinValueDate(new FHIRDate(array_merge($ext, $value)));
				} else {
					$this->setMinValueDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setMinValueDate(new FHIRDate($ext));
			}
		}
		if (
			isset($data[self::FIELD_MIN_VALUE_DATE_TIME]) ||
			isset($data[self::FIELD_MIN_VALUE_DATE_TIME_EXT])
		) {
			$value = $data[self::FIELD_MIN_VALUE_DATE_TIME] ?? null;
			$ext =
				isset($data[self::FIELD_MIN_VALUE_DATE_TIME_EXT]) &&
				is_array($data[self::FIELD_MIN_VALUE_DATE_TIME_EXT])
					? $data[self::FIELD_MIN_VALUE_DATE_TIME_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRDateTime) {
					$this->setMinValueDateTime($value);
				} elseif (is_array($value)) {
					$this->setMinValueDateTime(new FHIRDateTime(array_merge($ext, $value)));
				} else {
					$this->setMinValueDateTime(
						new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setMinValueDateTime(new FHIRDateTime($ext));
			}
		}
		if (
			isset($data[self::FIELD_MIN_VALUE_INSTANT]) ||
			isset($data[self::FIELD_MIN_VALUE_INSTANT_EXT])
		) {
			$value = $data[self::FIELD_MIN_VALUE_INSTANT] ?? null;
			$ext =
				isset($data[self::FIELD_MIN_VALUE_INSTANT_EXT]) &&
				is_array($data[self::FIELD_MIN_VALUE_INSTANT_EXT])
					? $data[self::FIELD_MIN_VALUE_INSTANT_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRInstant) {
					$this->setMinValueInstant($value);
				} elseif (is_array($value)) {
					$this->setMinValueInstant(new FHIRInstant(array_merge($ext, $value)));
				} else {
					$this->setMinValueInstant(
						new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setMinValueInstant(new FHIRInstant($ext));
			}
		}
		if (
			isset($data[self::FIELD_MIN_VALUE_TIME]) ||
			isset($data[self::FIELD_MIN_VALUE_TIME_EXT])
		) {
			$value = $data[self::FIELD_MIN_VALUE_TIME] ?? null;
			$ext =
				isset($data[self::FIELD_MIN_VALUE_TIME_EXT]) &&
				is_array($data[self::FIELD_MIN_VALUE_TIME_EXT])
					? $data[self::FIELD_MIN_VALUE_TIME_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRTime) {
					$this->setMinValueTime($value);
				} elseif (is_array($value)) {
					$this->setMinValueTime(new FHIRTime(array_merge($ext, $value)));
				} else {
					$this->setMinValueTime(new FHIRTime([FHIRTime::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setMinValueTime(new FHIRTime($ext));
			}
		}
		if (
			isset($data[self::FIELD_MIN_VALUE_DECIMAL]) ||
			isset($data[self::FIELD_MIN_VALUE_DECIMAL_EXT])
		) {
			$value = $data[self::FIELD_MIN_VALUE_DECIMAL] ?? null;
			$ext =
				isset($data[self::FIELD_MIN_VALUE_DECIMAL_EXT]) &&
				is_array($data[self::FIELD_MIN_VALUE_DECIMAL_EXT])
					? $data[self::FIELD_MIN_VALUE_DECIMAL_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRDecimal) {
					$this->setMinValueDecimal($value);
				} elseif (is_array($value)) {
					$this->setMinValueDecimal(new FHIRDecimal(array_merge($ext, $value)));
				} else {
					$this->setMinValueDecimal(
						new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setMinValueDecimal(new FHIRDecimal($ext));
			}
		}
		if (
			isset($data[self::FIELD_MIN_VALUE_INTEGER]) ||
			isset($data[self::FIELD_MIN_VALUE_INTEGER_EXT])
		) {
			$value = $data[self::FIELD_MIN_VALUE_INTEGER] ?? null;
			$ext =
				isset($data[self::FIELD_MIN_VALUE_INTEGER_EXT]) &&
				is_array($data[self::FIELD_MIN_VALUE_INTEGER_EXT])
					? $data[self::FIELD_MIN_VALUE_INTEGER_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRInteger) {
					$this->setMinValueInteger($value);
				} elseif (is_array($value)) {
					$this->setMinValueInteger(new FHIRInteger(array_merge($ext, $value)));
				} else {
					$this->setMinValueInteger(
						new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setMinValueInteger(new FHIRInteger($ext));
			}
		}
		if (
			isset($data[self::FIELD_MIN_VALUE_POSITIVE_INT]) ||
			isset($data[self::FIELD_MIN_VALUE_POSITIVE_INT_EXT])
		) {
			$value = $data[self::FIELD_MIN_VALUE_POSITIVE_INT] ?? null;
			$ext =
				isset($data[self::FIELD_MIN_VALUE_POSITIVE_INT_EXT]) &&
				is_array($data[self::FIELD_MIN_VALUE_POSITIVE_INT_EXT])
					? $data[self::FIELD_MIN_VALUE_POSITIVE_INT_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRPositiveInt) {
					$this->setMinValuePositiveInt($value);
				} elseif (is_array($value)) {
					$this->setMinValuePositiveInt(new FHIRPositiveInt(array_merge($ext, $value)));
				} else {
					$this->setMinValuePositiveInt(
						new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setMinValuePositiveInt(new FHIRPositiveInt($ext));
			}
		}
		if (
			isset($data[self::FIELD_MIN_VALUE_UNSIGNED_INT]) ||
			isset($data[self::FIELD_MIN_VALUE_UNSIGNED_INT_EXT])
		) {
			$value = $data[self::FIELD_MIN_VALUE_UNSIGNED_INT] ?? null;
			$ext =
				isset($data[self::FIELD_MIN_VALUE_UNSIGNED_INT_EXT]) &&
				is_array($data[self::FIELD_MIN_VALUE_UNSIGNED_INT_EXT])
					? $data[self::FIELD_MIN_VALUE_UNSIGNED_INT_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRUnsignedInt) {
					$this->setMinValueUnsignedInt($value);
				} elseif (is_array($value)) {
					$this->setMinValueUnsignedInt(new FHIRUnsignedInt(array_merge($ext, $value)));
				} else {
					$this->setMinValueUnsignedInt(
						new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setMinValueUnsignedInt(new FHIRUnsignedInt($ext));
			}
		}
		if (isset($data[self::FIELD_MIN_VALUE_QUANTITY])) {
			if ($data[self::FIELD_MIN_VALUE_QUANTITY] instanceof FHIRQuantity) {
				$this->setMinValueQuantity($data[self::FIELD_MIN_VALUE_QUANTITY]);
			} else {
				$this->setMinValueQuantity(new FHIRQuantity($data[self::FIELD_MIN_VALUE_QUANTITY]));
			}
		}
		if (
			isset($data[self::FIELD_MAX_VALUE_DATE]) ||
			isset($data[self::FIELD_MAX_VALUE_DATE_EXT])
		) {
			$value = $data[self::FIELD_MAX_VALUE_DATE] ?? null;
			$ext =
				isset($data[self::FIELD_MAX_VALUE_DATE_EXT]) &&
				is_array($data[self::FIELD_MAX_VALUE_DATE_EXT])
					? $data[self::FIELD_MAX_VALUE_DATE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRDate) {
					$this->setMaxValueDate($value);
				} elseif (is_array($value)) {
					$this->setMaxValueDate(new FHIRDate(array_merge($ext, $value)));
				} else {
					$this->setMaxValueDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setMaxValueDate(new FHIRDate($ext));
			}
		}
		if (
			isset($data[self::FIELD_MAX_VALUE_DATE_TIME]) ||
			isset($data[self::FIELD_MAX_VALUE_DATE_TIME_EXT])
		) {
			$value = $data[self::FIELD_MAX_VALUE_DATE_TIME] ?? null;
			$ext =
				isset($data[self::FIELD_MAX_VALUE_DATE_TIME_EXT]) &&
				is_array($data[self::FIELD_MAX_VALUE_DATE_TIME_EXT])
					? $data[self::FIELD_MAX_VALUE_DATE_TIME_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRDateTime) {
					$this->setMaxValueDateTime($value);
				} elseif (is_array($value)) {
					$this->setMaxValueDateTime(new FHIRDateTime(array_merge($ext, $value)));
				} else {
					$this->setMaxValueDateTime(
						new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setMaxValueDateTime(new FHIRDateTime($ext));
			}
		}
		if (
			isset($data[self::FIELD_MAX_VALUE_INSTANT]) ||
			isset($data[self::FIELD_MAX_VALUE_INSTANT_EXT])
		) {
			$value = $data[self::FIELD_MAX_VALUE_INSTANT] ?? null;
			$ext =
				isset($data[self::FIELD_MAX_VALUE_INSTANT_EXT]) &&
				is_array($data[self::FIELD_MAX_VALUE_INSTANT_EXT])
					? $data[self::FIELD_MAX_VALUE_INSTANT_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRInstant) {
					$this->setMaxValueInstant($value);
				} elseif (is_array($value)) {
					$this->setMaxValueInstant(new FHIRInstant(array_merge($ext, $value)));
				} else {
					$this->setMaxValueInstant(
						new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setMaxValueInstant(new FHIRInstant($ext));
			}
		}
		if (
			isset($data[self::FIELD_MAX_VALUE_TIME]) ||
			isset($data[self::FIELD_MAX_VALUE_TIME_EXT])
		) {
			$value = $data[self::FIELD_MAX_VALUE_TIME] ?? null;
			$ext =
				isset($data[self::FIELD_MAX_VALUE_TIME_EXT]) &&
				is_array($data[self::FIELD_MAX_VALUE_TIME_EXT])
					? $data[self::FIELD_MAX_VALUE_TIME_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRTime) {
					$this->setMaxValueTime($value);
				} elseif (is_array($value)) {
					$this->setMaxValueTime(new FHIRTime(array_merge($ext, $value)));
				} else {
					$this->setMaxValueTime(new FHIRTime([FHIRTime::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setMaxValueTime(new FHIRTime($ext));
			}
		}
		if (
			isset($data[self::FIELD_MAX_VALUE_DECIMAL]) ||
			isset($data[self::FIELD_MAX_VALUE_DECIMAL_EXT])
		) {
			$value = $data[self::FIELD_MAX_VALUE_DECIMAL] ?? null;
			$ext =
				isset($data[self::FIELD_MAX_VALUE_DECIMAL_EXT]) &&
				is_array($data[self::FIELD_MAX_VALUE_DECIMAL_EXT])
					? $data[self::FIELD_MAX_VALUE_DECIMAL_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRDecimal) {
					$this->setMaxValueDecimal($value);
				} elseif (is_array($value)) {
					$this->setMaxValueDecimal(new FHIRDecimal(array_merge($ext, $value)));
				} else {
					$this->setMaxValueDecimal(
						new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setMaxValueDecimal(new FHIRDecimal($ext));
			}
		}
		if (
			isset($data[self::FIELD_MAX_VALUE_INTEGER]) ||
			isset($data[self::FIELD_MAX_VALUE_INTEGER_EXT])
		) {
			$value = $data[self::FIELD_MAX_VALUE_INTEGER] ?? null;
			$ext =
				isset($data[self::FIELD_MAX_VALUE_INTEGER_EXT]) &&
				is_array($data[self::FIELD_MAX_VALUE_INTEGER_EXT])
					? $data[self::FIELD_MAX_VALUE_INTEGER_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRInteger) {
					$this->setMaxValueInteger($value);
				} elseif (is_array($value)) {
					$this->setMaxValueInteger(new FHIRInteger(array_merge($ext, $value)));
				} else {
					$this->setMaxValueInteger(
						new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setMaxValueInteger(new FHIRInteger($ext));
			}
		}
		if (
			isset($data[self::FIELD_MAX_VALUE_POSITIVE_INT]) ||
			isset($data[self::FIELD_MAX_VALUE_POSITIVE_INT_EXT])
		) {
			$value = $data[self::FIELD_MAX_VALUE_POSITIVE_INT] ?? null;
			$ext =
				isset($data[self::FIELD_MAX_VALUE_POSITIVE_INT_EXT]) &&
				is_array($data[self::FIELD_MAX_VALUE_POSITIVE_INT_EXT])
					? $data[self::FIELD_MAX_VALUE_POSITIVE_INT_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRPositiveInt) {
					$this->setMaxValuePositiveInt($value);
				} elseif (is_array($value)) {
					$this->setMaxValuePositiveInt(new FHIRPositiveInt(array_merge($ext, $value)));
				} else {
					$this->setMaxValuePositiveInt(
						new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setMaxValuePositiveInt(new FHIRPositiveInt($ext));
			}
		}
		if (
			isset($data[self::FIELD_MAX_VALUE_UNSIGNED_INT]) ||
			isset($data[self::FIELD_MAX_VALUE_UNSIGNED_INT_EXT])
		) {
			$value = $data[self::FIELD_MAX_VALUE_UNSIGNED_INT] ?? null;
			$ext =
				isset($data[self::FIELD_MAX_VALUE_UNSIGNED_INT_EXT]) &&
				is_array($data[self::FIELD_MAX_VALUE_UNSIGNED_INT_EXT])
					? $data[self::FIELD_MAX_VALUE_UNSIGNED_INT_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRUnsignedInt) {
					$this->setMaxValueUnsignedInt($value);
				} elseif (is_array($value)) {
					$this->setMaxValueUnsignedInt(new FHIRUnsignedInt(array_merge($ext, $value)));
				} else {
					$this->setMaxValueUnsignedInt(
						new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setMaxValueUnsignedInt(new FHIRUnsignedInt($ext));
			}
		}
		if (isset($data[self::FIELD_MAX_VALUE_QUANTITY])) {
			if ($data[self::FIELD_MAX_VALUE_QUANTITY] instanceof FHIRQuantity) {
				$this->setMaxValueQuantity($data[self::FIELD_MAX_VALUE_QUANTITY]);
			} else {
				$this->setMaxValueQuantity(new FHIRQuantity($data[self::FIELD_MAX_VALUE_QUANTITY]));
			}
		}
		if (isset($data[self::FIELD_MAX_LENGTH]) || isset($data[self::FIELD_MAX_LENGTH_EXT])) {
			$value = $data[self::FIELD_MAX_LENGTH] ?? null;
			$ext =
				isset($data[self::FIELD_MAX_LENGTH_EXT]) &&
				is_array($data[self::FIELD_MAX_LENGTH_EXT])
					? $data[self::FIELD_MAX_LENGTH_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRInteger) {
					$this->setMaxLength($value);
				} elseif (is_array($value)) {
					$this->setMaxLength(new FHIRInteger(array_merge($ext, $value)));
				} else {
					$this->setMaxLength(
						new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setMaxLength(new FHIRInteger($ext));
			}
		}
		if (isset($data[self::FIELD_CONDITION]) || isset($data[self::FIELD_CONDITION_EXT])) {
			$value = $data[self::FIELD_CONDITION] ?? null;
			$ext =
				isset($data[self::FIELD_CONDITION_EXT]) &&
				is_array($data[self::FIELD_CONDITION_EXT])
					? $data[self::FIELD_CONDITION_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRId) {
					$this->addCondition($value);
				} elseif (is_array($value)) {
					foreach ($value as $i => $v) {
						if ($v instanceof FHIRId) {
							$this->addCondition($v);
						} else {
							$iext = isset($ext[$i]) && is_array($ext[$i]) ? $ext[$i] : [];
							if (is_array($v)) {
								$this->addCondition(new FHIRId(array_merge($v, $iext)));
							} else {
								$this->addCondition(
									new FHIRId([FHIRId::FIELD_VALUE => $v] + $iext),
								);
							}
						}
					}
				} elseif (is_array($value)) {
					$this->addCondition(new FHIRId(array_merge($ext, $value)));
				} else {
					$this->addCondition(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				foreach ($ext as $iext) {
					$this->addCondition(new FHIRId($iext));
				}
			}
		}
		if (isset($data[self::FIELD_CONSTRAINT])) {
			if (is_array($data[self::FIELD_CONSTRAINT])) {
				foreach ($data[self::FIELD_CONSTRAINT] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRElementDefinitionConstraint) {
						$this->addConstraint($v);
					} else {
						$this->addConstraint(new FHIRElementDefinitionConstraint($v));
					}
				}
			} elseif ($data[self::FIELD_CONSTRAINT] instanceof FHIRElementDefinitionConstraint) {
				$this->addConstraint($data[self::FIELD_CONSTRAINT]);
			} else {
				$this->addConstraint(
					new FHIRElementDefinitionConstraint($data[self::FIELD_CONSTRAINT]),
				);
			}
		}
		if (isset($data[self::FIELD_MUST_SUPPORT]) || isset($data[self::FIELD_MUST_SUPPORT_EXT])) {
			$value = $data[self::FIELD_MUST_SUPPORT] ?? null;
			$ext =
				isset($data[self::FIELD_MUST_SUPPORT_EXT]) &&
				is_array($data[self::FIELD_MUST_SUPPORT_EXT])
					? $data[self::FIELD_MUST_SUPPORT_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRBoolean) {
					$this->setMustSupport($value);
				} elseif (is_array($value)) {
					$this->setMustSupport(new FHIRBoolean(array_merge($ext, $value)));
				} else {
					$this->setMustSupport(
						new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setMustSupport(new FHIRBoolean($ext));
			}
		}
		if (isset($data[self::FIELD_IS_MODIFIER]) || isset($data[self::FIELD_IS_MODIFIER_EXT])) {
			$value = $data[self::FIELD_IS_MODIFIER] ?? null;
			$ext =
				isset($data[self::FIELD_IS_MODIFIER_EXT]) &&
				is_array($data[self::FIELD_IS_MODIFIER_EXT])
					? $data[self::FIELD_IS_MODIFIER_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRBoolean) {
					$this->setIsModifier($value);
				} elseif (is_array($value)) {
					$this->setIsModifier(new FHIRBoolean(array_merge($ext, $value)));
				} else {
					$this->setIsModifier(
						new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setIsModifier(new FHIRBoolean($ext));
			}
		}
		if (
			isset($data[self::FIELD_IS_MODIFIER_REASON]) ||
			isset($data[self::FIELD_IS_MODIFIER_REASON_EXT])
		) {
			$value = $data[self::FIELD_IS_MODIFIER_REASON] ?? null;
			$ext =
				isset($data[self::FIELD_IS_MODIFIER_REASON_EXT]) &&
				is_array($data[self::FIELD_IS_MODIFIER_REASON_EXT])
					? $data[self::FIELD_IS_MODIFIER_REASON_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->setIsModifierReason($value);
				} elseif (is_array($value)) {
					$this->setIsModifierReason(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->setIsModifierReason(
						new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setIsModifierReason(new FHIRString($ext));
			}
		}
		if (isset($data[self::FIELD_IS_SUMMARY]) || isset($data[self::FIELD_IS_SUMMARY_EXT])) {
			$value = $data[self::FIELD_IS_SUMMARY] ?? null;
			$ext =
				isset($data[self::FIELD_IS_SUMMARY_EXT]) &&
				is_array($data[self::FIELD_IS_SUMMARY_EXT])
					? $data[self::FIELD_IS_SUMMARY_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRBoolean) {
					$this->setIsSummary($value);
				} elseif (is_array($value)) {
					$this->setIsSummary(new FHIRBoolean(array_merge($ext, $value)));
				} else {
					$this->setIsSummary(
						new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setIsSummary(new FHIRBoolean($ext));
			}
		}
		if (isset($data[self::FIELD_BINDING])) {
			if ($data[self::FIELD_BINDING] instanceof FHIRElementDefinitionBinding) {
				$this->setBinding($data[self::FIELD_BINDING]);
			} else {
				$this->setBinding(new FHIRElementDefinitionBinding($data[self::FIELD_BINDING]));
			}
		}
		if (isset($data[self::FIELD_MAPPING])) {
			if (is_array($data[self::FIELD_MAPPING])) {
				foreach ($data[self::FIELD_MAPPING] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRElementDefinitionMapping) {
						$this->addMapping($v);
					} else {
						$this->addMapping(new FHIRElementDefinitionMapping($v));
					}
				}
			} elseif ($data[self::FIELD_MAPPING] instanceof FHIRElementDefinitionMapping) {
				$this->addMapping($data[self::FIELD_MAPPING]);
			} else {
				$this->addMapping(new FHIRElementDefinitionMapping($data[self::FIELD_MAPPING]));
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
		return "<ElementDefinition{$xmlns}></ElementDefinition>";
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings SHALL NOT exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The path identifies the element and is expressed as a "."-separated list of
	 * ancestor elements, beginning with the name of the resource or extension.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRStringPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRString
	 */
	public function getPath(): ?FHIRString
	{
		return $this->path;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings SHALL NOT exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The path identifies the element and is expressed as a "."-separated list of
	 * ancestor elements, beginning with the name of the resource or extension.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRStringPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRString $path
	 * @return static
	 */
	public function setPath($path = null): object
	{
		if (null !== $path && !($path instanceof FHIRString)) {
			$path = new FHIRString($path);
		}
		$this->_trackValueSet($this->path, $path);
		$this->path = $path;
		return $this;
	}

	/**
	 * How a property is represented when serialized.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Codes that define how this element is represented in instances, when the
	 * deviation varies from the normal case.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRPropertyRepresentation[]
	 */
	public function getRepresentation(): ?array
	{
		return $this->representation;
	}

	/**
	 * How a property is represented when serialized.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Codes that define how this element is represented in instances, when the
	 * deviation varies from the normal case.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRPropertyRepresentation $representation
	 * @return static
	 */
	public function addRepresentation(?FHIRPropertyRepresentation $representation = null): object
	{
		$this->_trackValueAdded();
		$this->representation[] = $representation;
		return $this;
	}

	/**
	 * How a property is represented when serialized.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Codes that define how this element is represented in instances, when the
	 * deviation varies from the normal case.
	 *
	 * @param \Calvient\FhirTypes\R4\FHIRElement\FHIRPropertyRepresentation[] $representation
	 * @return static
	 */
	public function setRepresentation(array $representation = []): object
	{
		if ([] !== $this->representation) {
			$this->_trackValuesRemoved(count($this->representation));
			$this->representation = [];
		}
		if ([] === $representation) {
			return $this;
		}
		foreach ($representation as $v) {
			if ($v instanceof FHIRPropertyRepresentation) {
				$this->addRepresentation($v);
			} else {
				$this->addRepresentation(new FHIRPropertyRepresentation($v));
			}
		}
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings SHALL NOT exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The name of this element definition slice, when slicing is working. The name
	 * must be a token with no dots or spaces. This is a unique name referring to a
	 * specific set of constraints applied to this element, used to provide a name to
	 * different slices of the same element.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRStringPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRString
	 */
	public function getSliceName(): ?FHIRString
	{
		return $this->sliceName;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings SHALL NOT exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The name of this element definition slice, when slicing is working. The name
	 * must be a token with no dots or spaces. This is a unique name referring to a
	 * specific set of constraints applied to this element, used to provide a name to
	 * different slices of the same element.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRStringPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRString $sliceName
	 * @return static
	 */
	public function setSliceName($sliceName = null): object
	{
		if (null !== $sliceName && !($sliceName instanceof FHIRString)) {
			$sliceName = new FHIRString($sliceName);
		}
		$this->_trackValueSet($this->sliceName, $sliceName);
		$this->sliceName = $sliceName;
		return $this;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If true, indicates that this slice definition is constraining a slice definition
	 * with the same name in an inherited profile. If false, the slice is not
	 * overriding any slice in an inherited profile. If missing, the slice might or
	 * might not be overriding a slice in an inherited profile, depending on the
	 * sliceName.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRBooleanPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRBoolean
	 */
	public function getSliceIsConstraining(): ?FHIRBoolean
	{
		return $this->sliceIsConstraining;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If true, indicates that this slice definition is constraining a slice definition
	 * with the same name in an inherited profile. If false, the slice is not
	 * overriding any slice in an inherited profile. If missing, the slice might or
	 * might not be overriding a slice in an inherited profile, depending on the
	 * sliceName.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRBooleanPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRBoolean $sliceIsConstraining
	 * @return static
	 */
	public function setSliceIsConstraining($sliceIsConstraining = null): object
	{
		if (null !== $sliceIsConstraining && !($sliceIsConstraining instanceof FHIRBoolean)) {
			$sliceIsConstraining = new FHIRBoolean($sliceIsConstraining);
		}
		$this->_trackValueSet($this->sliceIsConstraining, $sliceIsConstraining);
		$this->sliceIsConstraining = $sliceIsConstraining;
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings SHALL NOT exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A single preferred label which is the text to display beside the element
	 * indicating its meaning or to use to prompt for the element in a user display or
	 * form.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRStringPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRString
	 */
	public function getLabel(): ?FHIRString
	{
		return $this->label;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings SHALL NOT exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A single preferred label which is the text to display beside the element
	 * indicating its meaning or to use to prompt for the element in a user display or
	 * form.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRStringPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRString $label
	 * @return static
	 */
	public function setLabel($label = null): object
	{
		if (null !== $label && !($label instanceof FHIRString)) {
			$label = new FHIRString($label);
		}
		$this->_trackValueSet($this->label, $label);
		$this->label = $label;
		return $this;
	}

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A code that has the same meaning as the element in a particular terminology.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRCoding[]
	 */
	public function getCode(): ?array
	{
		return $this->code;
	}

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A code that has the same meaning as the element in a particular terminology.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRCoding $code
	 * @return static
	 */
	public function addCode(?FHIRCoding $code = null): object
	{
		$this->_trackValueAdded();
		$this->code[] = $code;
		return $this;
	}

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A code that has the same meaning as the element in a particular terminology.
	 *
	 * @param \Calvient\FhirTypes\R4\FHIRElement\FHIRCoding[] $code
	 * @return static
	 */
	public function setCode(array $code = []): object
	{
		if ([] !== $this->code) {
			$this->_trackValuesRemoved(count($this->code));
			$this->code = [];
		}
		if ([] === $code) {
			return $this;
		}
		foreach ($code as $v) {
			if ($v instanceof FHIRCoding) {
				$this->addCode($v);
			} else {
				$this->addCode(new FHIRCoding($v));
			}
		}
		return $this;
	}

	/**
	 * Captures constraints on each element within the resource, profile, or extension.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Indicates that the element is sliced into a set of alternative definitions (i.e.
	 * in a structure definition, there are multiple different constraints on a single
	 * element in the base resource). Slicing can be used in any resource that has
	 * cardinality ..* on the base resource, or any resource with a choice of types.
	 * The set of slices is any elements that come after this in the element sequence
	 * that have the same path, until a shorter path occurs (the shorter path
	 * terminates the set).
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionSlicing
	 */
	public function getSlicing(): ?FHIRElementDefinitionSlicing
	{
		return $this->slicing;
	}

	/**
	 * Captures constraints on each element within the resource, profile, or extension.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Indicates that the element is sliced into a set of alternative definitions (i.e.
	 * in a structure definition, there are multiple different constraints on a single
	 * element in the base resource). Slicing can be used in any resource that has
	 * cardinality ..* on the base resource, or any resource with a choice of types.
	 * The set of slices is any elements that come after this in the element sequence
	 * that have the same path, until a shorter path occurs (the shorter path
	 * terminates the set).
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionSlicing $slicing
	 * @return static
	 */
	public function setSlicing(?FHIRElementDefinitionSlicing $slicing = null): object
	{
		$this->_trackValueSet($this->slicing, $slicing);
		$this->slicing = $slicing;
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings SHALL NOT exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A concise description of what this element means (e.g. for use in autogenerated
	 * summaries).
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRStringPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRString
	 */
	public function getShort(): ?FHIRString
	{
		return $this->short;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings SHALL NOT exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A concise description of what this element means (e.g. for use in autogenerated
	 * summaries).
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRStringPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRString $short
	 * @return static
	 */
	public function setShort($short = null): object
	{
		if (null !== $short && !($short instanceof FHIRString)) {
			$short = new FHIRString($short);
		}
		$this->_trackValueSet($this->short, $short);
		$this->short = $short;
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
	 * Provides a complete explanation of the meaning of the data element for human
	 * readability. For the case of elements derived from existing elements (e.g.
	 * constraints), the definition SHALL be consistent with the base definition, but
	 * convey the meaning of the element in the particular context of use of the
	 * resource. (Note: The text you are reading is specified in
	 * ElementDefinition.definition).
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRMarkdownPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRMarkdown
	 */
	public function getDefinition(): ?FHIRMarkdown
	{
		return $this->definition;
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
	 * Provides a complete explanation of the meaning of the data element for human
	 * readability. For the case of elements derived from existing elements (e.g.
	 * constraints), the definition SHALL be consistent with the base definition, but
	 * convey the meaning of the element in the particular context of use of the
	 * resource. (Note: The text you are reading is specified in
	 * ElementDefinition.definition).
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRMarkdownPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRMarkdown $definition
	 * @return static
	 */
	public function setDefinition($definition = null): object
	{
		if (null !== $definition && !($definition instanceof FHIRMarkdown)) {
			$definition = new FHIRMarkdown($definition);
		}
		$this->_trackValueSet($this->definition, $definition);
		$this->definition = $definition;
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
	 * Explanatory notes and implementation guidance about the data element, including
	 * notes about how to use the data properly, exceptions to proper use, etc. (Note:
	 * The text you are reading is specified in ElementDefinition.comment).
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRMarkdownPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRMarkdown
	 */
	public function getComment(): ?FHIRMarkdown
	{
		return $this->comment;
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
	 * Explanatory notes and implementation guidance about the data element, including
	 * notes about how to use the data properly, exceptions to proper use, etc. (Note:
	 * The text you are reading is specified in ElementDefinition.comment).
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRMarkdownPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRMarkdown $comment
	 * @return static
	 */
	public function setComment($comment = null): object
	{
		if (null !== $comment && !($comment instanceof FHIRMarkdown)) {
			$comment = new FHIRMarkdown($comment);
		}
		$this->_trackValueSet($this->comment, $comment);
		$this->comment = $comment;
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
	 * This element is for traceability of why the element was created and why the
	 * constraints exist as they do. This may be used to point to source materials or
	 * specifications that drove the structure of this element.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRMarkdownPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRMarkdown
	 */
	public function getRequirements(): ?FHIRMarkdown
	{
		return $this->requirements;
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
	 * This element is for traceability of why the element was created and why the
	 * constraints exist as they do. This may be used to point to source materials or
	 * specifications that drove the structure of this element.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRMarkdownPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRMarkdown $requirements
	 * @return static
	 */
	public function setRequirements($requirements = null): object
	{
		if (null !== $requirements && !($requirements instanceof FHIRMarkdown)) {
			$requirements = new FHIRMarkdown($requirements);
		}
		$this->_trackValueSet($this->requirements, $requirements);
		$this->requirements = $requirements;
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings SHALL NOT exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Identifies additional names by which this element might also be known.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRStringPrimitive[]|\Calvient\FhirTypes\R4\FHIRElement\FHIRString[]
	 */
	public function getAlias(): ?array
	{
		return $this->alias;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings SHALL NOT exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Identifies additional names by which this element might also be known.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRStringPrimitive[]|\Calvient\FhirTypes\R4\FHIRElement\FHIRString[] $alias
	 * @return static
	 */
	public function addAlias($alias = null): object
	{
		if (null !== $alias && !($alias instanceof FHIRString)) {
			$alias = new FHIRString($alias);
		}
		$this->_trackValueAdded();
		$this->alias[] = $alias;
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings SHALL NOT exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Identifies additional names by which this element might also be known.
	 *
	 * @param \Calvient\FhirTypes\R4\FHIRElement\FHIRString[] $alias
	 * @return static
	 */
	public function setAlias(array $alias = []): object
	{
		if ([] !== $this->alias) {
			$this->_trackValuesRemoved(count($this->alias));
			$this->alias = [];
		}
		if ([] === $alias) {
			return $this;
		}
		foreach ($alias as $v) {
			if ($v instanceof FHIRString) {
				$this->addAlias($v);
			} else {
				$this->addAlias(new FHIRString($v));
			}
		}
		return $this;
	}

	/**
	 * An integer with a value that is not negative (e.g. >= 0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The minimum number of times this element SHALL appear in the instance.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRUnsignedInt
	 */
	public function getMin(): ?FHIRUnsignedInt
	{
		return $this->min;
	}

	/**
	 * An integer with a value that is not negative (e.g. >= 0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The minimum number of times this element SHALL appear in the instance.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRUnsignedInt $min
	 * @return static
	 */
	public function setMin($min = null): object
	{
		if (null !== $min && !($min instanceof FHIRUnsignedInt)) {
			$min = new FHIRUnsignedInt($min);
		}
		$this->_trackValueSet($this->min, $min);
		$this->min = $min;
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings SHALL NOT exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The maximum number of times this element is permitted to appear in the instance.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRStringPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRString
	 */
	public function getMax(): ?FHIRString
	{
		return $this->max;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings SHALL NOT exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The maximum number of times this element is permitted to appear in the instance.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRStringPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRString $max
	 * @return static
	 */
	public function setMax($max = null): object
	{
		if (null !== $max && !($max instanceof FHIRString)) {
			$max = new FHIRString($max);
		}
		$this->_trackValueSet($this->max, $max);
		$this->max = $max;
		return $this;
	}

	/**
	 * Captures constraints on each element within the resource, profile, or extension.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Information about the base definition of the element, provided to make it
	 * unnecessary for tools to trace the deviation of the element through the derived
	 * and related profiles. When the element definition is not the original definition
	 * of an element - i.g. either in a constraint on another type, or for elements
	 * from a super type in a snap shot - then the information in provided in the
	 * element definition may be different to the base definition. On the original
	 * definition of the element, it will be same.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionBase
	 */
	public function getBase(): ?FHIRElementDefinitionBase
	{
		return $this->base;
	}

	/**
	 * Captures constraints on each element within the resource, profile, or extension.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Information about the base definition of the element, provided to make it
	 * unnecessary for tools to trace the deviation of the element through the derived
	 * and related profiles. When the element definition is not the original definition
	 * of an element - i.g. either in a constraint on another type, or for elements
	 * from a super type in a snap shot - then the information in provided in the
	 * element definition may be different to the base definition. On the original
	 * definition of the element, it will be same.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionBase $base
	 * @return static
	 */
	public function setBase(?FHIRElementDefinitionBase $base = null): object
	{
		$this->_trackValueSet($this->base, $base);
		$this->base = $base;
		return $this;
	}

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Identifies an element defined elsewhere in the definition whose content rules
	 * should be applied to the current element. ContentReferences bring across all the
	 * rules that are in the ElementDefinition for the element, including definitions,
	 * cardinality constraints, bindings, invariants etc.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRUriPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRUri
	 */
	public function getContentReference(): ?FHIRUri
	{
		return $this->contentReference;
	}

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Identifies an element defined elsewhere in the definition whose content rules
	 * should be applied to the current element. ContentReferences bring across all the
	 * rules that are in the ElementDefinition for the element, including definitions,
	 * cardinality constraints, bindings, invariants etc.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRUriPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRUri $contentReference
	 * @return static
	 */
	public function setContentReference($contentReference = null): object
	{
		if (null !== $contentReference && !($contentReference instanceof FHIRUri)) {
			$contentReference = new FHIRUri($contentReference);
		}
		$this->_trackValueSet($this->contentReference, $contentReference);
		$this->contentReference = $contentReference;
		return $this;
	}

	/**
	 * Captures constraints on each element within the resource, profile, or extension.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The data type or resource that the value of this element is permitted to be.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionType[]
	 */
	public function getType(): ?array
	{
		return $this->type;
	}

	/**
	 * Captures constraints on each element within the resource, profile, or extension.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The data type or resource that the value of this element is permitted to be.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionType $type
	 * @return static
	 */
	public function addType(?FHIRElementDefinitionType $type = null): object
	{
		$this->_trackValueAdded();
		$this->type[] = $type;
		return $this;
	}

	/**
	 * Captures constraints on each element within the resource, profile, or extension.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The data type or resource that the value of this element is permitted to be.
	 *
	 * @param \Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionType[] $type
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
			if ($v instanceof FHIRElementDefinitionType) {
				$this->addType($v);
			} else {
				$this->addType(new FHIRElementDefinitionType($v));
			}
		}
		return $this;
	}

	/**
	 * A stream of bytes
	 * A stream of bytes, base64 encoded
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRBase64BinaryPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRBase64Binary
	 */
	public function getDefaultValueBase64Binary(): ?FHIRBase64Binary
	{
		return $this->defaultValueBase64Binary;
	}

	/**
	 * A stream of bytes
	 * A stream of bytes, base64 encoded
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRBase64BinaryPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRBase64Binary $defaultValueBase64Binary
	 * @return static
	 */
	public function setDefaultValueBase64Binary($defaultValueBase64Binary = null): object
	{
		if (
			null !== $defaultValueBase64Binary &&
			!($defaultValueBase64Binary instanceof FHIRBase64Binary)
		) {
			$defaultValueBase64Binary = new FHIRBase64Binary($defaultValueBase64Binary);
		}
		$this->_trackValueSet($this->defaultValueBase64Binary, $defaultValueBase64Binary);
		$this->defaultValueBase64Binary = $defaultValueBase64Binary;
		return $this;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRBooleanPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRBoolean
	 */
	public function getDefaultValueBoolean(): ?FHIRBoolean
	{
		return $this->defaultValueBoolean;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRBooleanPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRBoolean $defaultValueBoolean
	 * @return static
	 */
	public function setDefaultValueBoolean($defaultValueBoolean = null): object
	{
		if (null !== $defaultValueBoolean && !($defaultValueBoolean instanceof FHIRBoolean)) {
			$defaultValueBoolean = new FHIRBoolean($defaultValueBoolean);
		}
		$this->_trackValueSet($this->defaultValueBoolean, $defaultValueBoolean);
		$this->defaultValueBoolean = $defaultValueBoolean;
		return $this;
	}

	/**
	 * A URI that is a reference to a canonical URL on a FHIR resource
	 * see [Canonical References](references.html#canonical)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRCanonicalPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRCanonical
	 */
	public function getDefaultValueCanonical(): ?FHIRCanonical
	{
		return $this->defaultValueCanonical;
	}

	/**
	 * A URI that is a reference to a canonical URL on a FHIR resource
	 * see [Canonical References](references.html#canonical)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRCanonicalPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRCanonical $defaultValueCanonical
	 * @return static
	 */
	public function setDefaultValueCanonical($defaultValueCanonical = null): object
	{
		if (null !== $defaultValueCanonical && !($defaultValueCanonical instanceof FHIRCanonical)) {
			$defaultValueCanonical = new FHIRCanonical($defaultValueCanonical);
		}
		$this->_trackValueSet($this->defaultValueCanonical, $defaultValueCanonical);
		$this->defaultValueCanonical = $defaultValueCanonical;
		return $this;
	}

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRCodePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRCode
	 */
	public function getDefaultValueCode(): ?FHIRCode
	{
		return $this->defaultValueCode;
	}

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRCodePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRCode $defaultValueCode
	 * @return static
	 */
	public function setDefaultValueCode($defaultValueCode = null): object
	{
		if (null !== $defaultValueCode && !($defaultValueCode instanceof FHIRCode)) {
			$defaultValueCode = new FHIRCode($defaultValueCode);
		}
		$this->_trackValueSet($this->defaultValueCode, $defaultValueCode);
		$this->defaultValueCode = $defaultValueCode;
		return $this;
	}

	/**
	 * A date or partial date (e.g. just year or year + month). There is no time zone.
	 * The format is a union of the schema types gYear, gYearMonth and date. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRDatePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRDate
	 */
	public function getDefaultValueDate(): ?FHIRDate
	{
		return $this->defaultValueDate;
	}

	/**
	 * A date or partial date (e.g. just year or year + month). There is no time zone.
	 * The format is a union of the schema types gYear, gYearMonth and date. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRDatePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRDate $defaultValueDate
	 * @return static
	 */
	public function setDefaultValueDate($defaultValueDate = null): object
	{
		if (null !== $defaultValueDate && !($defaultValueDate instanceof FHIRDate)) {
			$defaultValueDate = new FHIRDate($defaultValueDate);
		}
		$this->_trackValueSet($this->defaultValueDate, $defaultValueDate);
		$this->defaultValueDate = $defaultValueDate;
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
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRDateTimePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRDateTime
	 */
	public function getDefaultValueDateTime(): ?FHIRDateTime
	{
		return $this->defaultValueDateTime;
	}

	/**
	 * A date, date-time or partial date (e.g. just year or year + month). If hours and
	 * minutes are specified, a time zone SHALL be populated. The format is a union of
	 * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
	 * due to schema type constraints but may be zero-filled and may be ignored. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRDateTimePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRDateTime $defaultValueDateTime
	 * @return static
	 */
	public function setDefaultValueDateTime($defaultValueDateTime = null): object
	{
		if (null !== $defaultValueDateTime && !($defaultValueDateTime instanceof FHIRDateTime)) {
			$defaultValueDateTime = new FHIRDateTime($defaultValueDateTime);
		}
		$this->_trackValueSet($this->defaultValueDateTime, $defaultValueDateTime);
		$this->defaultValueDateTime = $defaultValueDateTime;
		return $this;
	}

	/**
	 * A rational number with implicit precision
	 * Do not use an IEEE type floating point type, instead use something that works
	 * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRDecimalPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRDecimal
	 */
	public function getDefaultValueDecimal(): ?FHIRDecimal
	{
		return $this->defaultValueDecimal;
	}

	/**
	 * A rational number with implicit precision
	 * Do not use an IEEE type floating point type, instead use something that works
	 * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRDecimalPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRDecimal $defaultValueDecimal
	 * @return static
	 */
	public function setDefaultValueDecimal($defaultValueDecimal = null): object
	{
		if (null !== $defaultValueDecimal && !($defaultValueDecimal instanceof FHIRDecimal)) {
			$defaultValueDecimal = new FHIRDecimal($defaultValueDecimal);
		}
		$this->_trackValueSet($this->defaultValueDecimal, $defaultValueDecimal);
		$this->defaultValueDecimal = $defaultValueDecimal;
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
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRIdPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRId
	 */
	public function getDefaultValueId(): ?FHIRId
	{
		return $this->defaultValueId;
	}

	/**
	 * Any combination of letters, numerals, "-" and ".", with a length limit of 64
	 * characters. (This might be an integer, an unprefixed OID, UUID or any other
	 * identifier pattern that meets these constraints.) Ids are case-insensitive.
	 * RFC 4122
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRIdPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRId $defaultValueId
	 * @return static
	 */
	public function setDefaultValueId($defaultValueId = null): object
	{
		if (null !== $defaultValueId && !($defaultValueId instanceof FHIRId)) {
			$defaultValueId = new FHIRId($defaultValueId);
		}
		$this->_trackValueSet($this->defaultValueId, $defaultValueId);
		$this->defaultValueId = $defaultValueId;
		return $this;
	}

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for where precisely observed times are required,
	 * typically system logs etc., and not human-reported times - for them, see date
	 * and dateTime (which can be as precise as instant, but is not required to be)
	 * below. Time zone is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRInstantPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRInstant
	 */
	public function getDefaultValueInstant(): ?FHIRInstant
	{
		return $this->defaultValueInstant;
	}

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for where precisely observed times are required,
	 * typically system logs etc., and not human-reported times - for them, see date
	 * and dateTime (which can be as precise as instant, but is not required to be)
	 * below. Time zone is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRInstantPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRInstant $defaultValueInstant
	 * @return static
	 */
	public function setDefaultValueInstant($defaultValueInstant = null): object
	{
		if (null !== $defaultValueInstant && !($defaultValueInstant instanceof FHIRInstant)) {
			$defaultValueInstant = new FHIRInstant($defaultValueInstant);
		}
		$this->_trackValueSet($this->defaultValueInstant, $defaultValueInstant);
		$this->defaultValueInstant = $defaultValueInstant;
		return $this;
	}

	/**
	 * A whole number
	 * 32 bit number; for values larger than this, use decimal
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRIntegerPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRInteger
	 */
	public function getDefaultValueInteger(): ?FHIRInteger
	{
		return $this->defaultValueInteger;
	}

	/**
	 * A whole number
	 * 32 bit number; for values larger than this, use decimal
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRIntegerPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRInteger $defaultValueInteger
	 * @return static
	 */
	public function setDefaultValueInteger($defaultValueInteger = null): object
	{
		if (null !== $defaultValueInteger && !($defaultValueInteger instanceof FHIRInteger)) {
			$defaultValueInteger = new FHIRInteger($defaultValueInteger);
		}
		$this->_trackValueSet($this->defaultValueInteger, $defaultValueInteger);
		$this->defaultValueInteger = $defaultValueInteger;
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
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRMarkdownPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRMarkdown
	 */
	public function getDefaultValueMarkdown(): ?FHIRMarkdown
	{
		return $this->defaultValueMarkdown;
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
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRMarkdownPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRMarkdown $defaultValueMarkdown
	 * @return static
	 */
	public function setDefaultValueMarkdown($defaultValueMarkdown = null): object
	{
		if (null !== $defaultValueMarkdown && !($defaultValueMarkdown instanceof FHIRMarkdown)) {
			$defaultValueMarkdown = new FHIRMarkdown($defaultValueMarkdown);
		}
		$this->_trackValueSet($this->defaultValueMarkdown, $defaultValueMarkdown);
		$this->defaultValueMarkdown = $defaultValueMarkdown;
		return $this;
	}

	/**
	 * An OID represented as a URI
	 * RFC 3001. See also ISO/IEC 8824:1990 €
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIROidPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIROid
	 */
	public function getDefaultValueOid(): ?FHIROid
	{
		return $this->defaultValueOid;
	}

	/**
	 * An OID represented as a URI
	 * RFC 3001. See also ISO/IEC 8824:1990 €
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIROidPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIROid $defaultValueOid
	 * @return static
	 */
	public function setDefaultValueOid($defaultValueOid = null): object
	{
		if (null !== $defaultValueOid && !($defaultValueOid instanceof FHIROid)) {
			$defaultValueOid = new FHIROid($defaultValueOid);
		}
		$this->_trackValueSet($this->defaultValueOid, $defaultValueOid);
		$this->defaultValueOid = $defaultValueOid;
		return $this;
	}

	/**
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRPositiveInt
	 */
	public function getDefaultValuePositiveInt(): ?FHIRPositiveInt
	{
		return $this->defaultValuePositiveInt;
	}

	/**
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRPositiveInt $defaultValuePositiveInt
	 * @return static
	 */
	public function setDefaultValuePositiveInt($defaultValuePositiveInt = null): object
	{
		if (
			null !== $defaultValuePositiveInt &&
			!($defaultValuePositiveInt instanceof FHIRPositiveInt)
		) {
			$defaultValuePositiveInt = new FHIRPositiveInt($defaultValuePositiveInt);
		}
		$this->_trackValueSet($this->defaultValuePositiveInt, $defaultValuePositiveInt);
		$this->defaultValuePositiveInt = $defaultValuePositiveInt;
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings SHALL NOT exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRStringPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRString
	 */
	public function getDefaultValueString(): ?FHIRString
	{
		return $this->defaultValueString;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings SHALL NOT exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRStringPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRString $defaultValueString
	 * @return static
	 */
	public function setDefaultValueString($defaultValueString = null): object
	{
		if (null !== $defaultValueString && !($defaultValueString instanceof FHIRString)) {
			$defaultValueString = new FHIRString($defaultValueString);
		}
		$this->_trackValueSet($this->defaultValueString, $defaultValueString);
		$this->defaultValueString = $defaultValueString;
		return $this;
	}

	/**
	 * A time during the day, with no date specified
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRTimePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRTime
	 */
	public function getDefaultValueTime(): ?FHIRTime
	{
		return $this->defaultValueTime;
	}

	/**
	 * A time during the day, with no date specified
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRTimePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRTime $defaultValueTime
	 * @return static
	 */
	public function setDefaultValueTime($defaultValueTime = null): object
	{
		if (null !== $defaultValueTime && !($defaultValueTime instanceof FHIRTime)) {
			$defaultValueTime = new FHIRTime($defaultValueTime);
		}
		$this->_trackValueSet($this->defaultValueTime, $defaultValueTime);
		$this->defaultValueTime = $defaultValueTime;
		return $this;
	}

	/**
	 * An integer with a value that is not negative (e.g. >= 0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRUnsignedInt
	 */
	public function getDefaultValueUnsignedInt(): ?FHIRUnsignedInt
	{
		return $this->defaultValueUnsignedInt;
	}

	/**
	 * An integer with a value that is not negative (e.g. >= 0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRUnsignedInt $defaultValueUnsignedInt
	 * @return static
	 */
	public function setDefaultValueUnsignedInt($defaultValueUnsignedInt = null): object
	{
		if (
			null !== $defaultValueUnsignedInt &&
			!($defaultValueUnsignedInt instanceof FHIRUnsignedInt)
		) {
			$defaultValueUnsignedInt = new FHIRUnsignedInt($defaultValueUnsignedInt);
		}
		$this->_trackValueSet($this->defaultValueUnsignedInt, $defaultValueUnsignedInt);
		$this->defaultValueUnsignedInt = $defaultValueUnsignedInt;
		return $this;
	}

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRUriPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRUri
	 */
	public function getDefaultValueUri(): ?FHIRUri
	{
		return $this->defaultValueUri;
	}

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRUriPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRUri $defaultValueUri
	 * @return static
	 */
	public function setDefaultValueUri($defaultValueUri = null): object
	{
		if (null !== $defaultValueUri && !($defaultValueUri instanceof FHIRUri)) {
			$defaultValueUri = new FHIRUri($defaultValueUri);
		}
		$this->_trackValueSet($this->defaultValueUri, $defaultValueUri);
		$this->defaultValueUri = $defaultValueUri;
		return $this;
	}

	/**
	 * A URI that is a literal reference
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRUrlPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRUrl
	 */
	public function getDefaultValueUrl(): ?FHIRUrl
	{
		return $this->defaultValueUrl;
	}

	/**
	 * A URI that is a literal reference
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRUrlPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRUrl $defaultValueUrl
	 * @return static
	 */
	public function setDefaultValueUrl($defaultValueUrl = null): object
	{
		if (null !== $defaultValueUrl && !($defaultValueUrl instanceof FHIRUrl)) {
			$defaultValueUrl = new FHIRUrl($defaultValueUrl);
		}
		$this->_trackValueSet($this->defaultValueUrl, $defaultValueUrl);
		$this->defaultValueUrl = $defaultValueUrl;
		return $this;
	}

	/**
	 * A UUID, represented as a URI
	 * See The Open Group, CDE 1.1 Remote Procedure Call specification, Appendix A.
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRUuidPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRUuid
	 */
	public function getDefaultValueUuid(): ?FHIRUuid
	{
		return $this->defaultValueUuid;
	}

	/**
	 * A UUID, represented as a URI
	 * See The Open Group, CDE 1.1 Remote Procedure Call specification, Appendix A.
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRUuidPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRUuid $defaultValueUuid
	 * @return static
	 */
	public function setDefaultValueUuid($defaultValueUuid = null): object
	{
		if (null !== $defaultValueUuid && !($defaultValueUuid instanceof FHIRUuid)) {
			$defaultValueUuid = new FHIRUuid($defaultValueUuid);
		}
		$this->_trackValueSet($this->defaultValueUuid, $defaultValueUuid);
		$this->defaultValueUuid = $defaultValueUuid;
		return $this;
	}

	/**
	 * An address expressed using postal conventions (as opposed to GPS or other
	 * location definition formats). This data type may be used to convey addresses for
	 * use in delivering mail as well as for visiting locations which might not be
	 * valid for mail delivery. There are a variety of postal address formats defined
	 * around the world.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRAddress
	 */
	public function getDefaultValueAddress(): ?FHIRAddress
	{
		return $this->defaultValueAddress;
	}

	/**
	 * An address expressed using postal conventions (as opposed to GPS or other
	 * location definition formats). This data type may be used to convey addresses for
	 * use in delivering mail as well as for visiting locations which might not be
	 * valid for mail delivery. There are a variety of postal address formats defined
	 * around the world.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRAddress $defaultValueAddress
	 * @return static
	 */
	public function setDefaultValueAddress(?FHIRAddress $defaultValueAddress = null): object
	{
		$this->_trackValueSet($this->defaultValueAddress, $defaultValueAddress);
		$this->defaultValueAddress = $defaultValueAddress;
		return $this;
	}

	/**
	 * A duration of time during which an organism (or a process) has existed.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity\FHIRAge
	 */
	public function getDefaultValueAge(): ?FHIRAge
	{
		return $this->defaultValueAge;
	}

	/**
	 * A duration of time during which an organism (or a process) has existed.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity\FHIRAge $defaultValueAge
	 * @return static
	 */
	public function setDefaultValueAge(?FHIRAge $defaultValueAge = null): object
	{
		$this->_trackValueSet($this->defaultValueAge, $defaultValueAge);
		$this->defaultValueAge = $defaultValueAge;
		return $this;
	}

	/**
	 * A text note which also contains information about who made the statement and
	 * when.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRAnnotation
	 */
	public function getDefaultValueAnnotation(): ?FHIRAnnotation
	{
		return $this->defaultValueAnnotation;
	}

	/**
	 * A text note which also contains information about who made the statement and
	 * when.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRAnnotation $defaultValueAnnotation
	 * @return static
	 */
	public function setDefaultValueAnnotation(
		?FHIRAnnotation $defaultValueAnnotation = null,
	): object {
		$this->_trackValueSet($this->defaultValueAnnotation, $defaultValueAnnotation);
		$this->defaultValueAnnotation = $defaultValueAnnotation;
		return $this;
	}

	/**
	 * For referring to data content defined in other formats.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRAttachment
	 */
	public function getDefaultValueAttachment(): ?FHIRAttachment
	{
		return $this->defaultValueAttachment;
	}

	/**
	 * For referring to data content defined in other formats.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRAttachment $defaultValueAttachment
	 * @return static
	 */
	public function setDefaultValueAttachment(
		?FHIRAttachment $defaultValueAttachment = null,
	): object {
		$this->_trackValueSet($this->defaultValueAttachment, $defaultValueAttachment);
		$this->defaultValueAttachment = $defaultValueAttachment;
		return $this;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRCodeableConcept
	 */
	public function getDefaultValueCodeableConcept(): ?FHIRCodeableConcept
	{
		return $this->defaultValueCodeableConcept;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRCodeableConcept $defaultValueCodeableConcept
	 * @return static
	 */
	public function setDefaultValueCodeableConcept(
		?FHIRCodeableConcept $defaultValueCodeableConcept = null,
	): object {
		$this->_trackValueSet($this->defaultValueCodeableConcept, $defaultValueCodeableConcept);
		$this->defaultValueCodeableConcept = $defaultValueCodeableConcept;
		return $this;
	}

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRCoding
	 */
	public function getDefaultValueCoding(): ?FHIRCoding
	{
		return $this->defaultValueCoding;
	}

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRCoding $defaultValueCoding
	 * @return static
	 */
	public function setDefaultValueCoding(?FHIRCoding $defaultValueCoding = null): object
	{
		$this->_trackValueSet($this->defaultValueCoding, $defaultValueCoding);
		$this->defaultValueCoding = $defaultValueCoding;
		return $this;
	}

	/**
	 * Details for all kinds of technology mediated contact points for a person or
	 * organization, including telephone, email, etc.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRContactPoint
	 */
	public function getDefaultValueContactPoint(): ?FHIRContactPoint
	{
		return $this->defaultValueContactPoint;
	}

	/**
	 * Details for all kinds of technology mediated contact points for a person or
	 * organization, including telephone, email, etc.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRContactPoint $defaultValueContactPoint
	 * @return static
	 */
	public function setDefaultValueContactPoint(
		?FHIRContactPoint $defaultValueContactPoint = null,
	): object {
		$this->_trackValueSet($this->defaultValueContactPoint, $defaultValueContactPoint);
		$this->defaultValueContactPoint = $defaultValueContactPoint;
		return $this;
	}

	/**
	 * A measured amount (or an amount that can potentially be measured). Note that
	 * measured amounts include amounts that are not precisely quantified, including
	 * amounts involving arbitrary units and floating currencies.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity\FHIRCount
	 */
	public function getDefaultValueCount(): ?FHIRCount
	{
		return $this->defaultValueCount;
	}

	/**
	 * A measured amount (or an amount that can potentially be measured). Note that
	 * measured amounts include amounts that are not precisely quantified, including
	 * amounts involving arbitrary units and floating currencies.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity\FHIRCount $defaultValueCount
	 * @return static
	 */
	public function setDefaultValueCount(?FHIRCount $defaultValueCount = null): object
	{
		$this->_trackValueSet($this->defaultValueCount, $defaultValueCount);
		$this->defaultValueCount = $defaultValueCount;
		return $this;
	}

	/**
	 * A length - a value with a unit that is a physical distance.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity\FHIRDistance
	 */
	public function getDefaultValueDistance(): ?FHIRDistance
	{
		return $this->defaultValueDistance;
	}

	/**
	 * A length - a value with a unit that is a physical distance.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity\FHIRDistance $defaultValueDistance
	 * @return static
	 */
	public function setDefaultValueDistance(?FHIRDistance $defaultValueDistance = null): object
	{
		$this->_trackValueSet($this->defaultValueDistance, $defaultValueDistance);
		$this->defaultValueDistance = $defaultValueDistance;
		return $this;
	}

	/**
	 * A length of time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity\FHIRDuration
	 */
	public function getDefaultValueDuration(): ?FHIRDuration
	{
		return $this->defaultValueDuration;
	}

	/**
	 * A length of time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity\FHIRDuration $defaultValueDuration
	 * @return static
	 */
	public function setDefaultValueDuration(?FHIRDuration $defaultValueDuration = null): object
	{
		$this->_trackValueSet($this->defaultValueDuration, $defaultValueDuration);
		$this->defaultValueDuration = $defaultValueDuration;
		return $this;
	}

	/**
	 * A human's name with the ability to identify parts and usage.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRHumanName
	 */
	public function getDefaultValueHumanName(): ?FHIRHumanName
	{
		return $this->defaultValueHumanName;
	}

	/**
	 * A human's name with the ability to identify parts and usage.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRHumanName $defaultValueHumanName
	 * @return static
	 */
	public function setDefaultValueHumanName(?FHIRHumanName $defaultValueHumanName = null): object
	{
		$this->_trackValueSet($this->defaultValueHumanName, $defaultValueHumanName);
		$this->defaultValueHumanName = $defaultValueHumanName;
		return $this;
	}

	/**
	 * An identifier - identifies some entity uniquely and unambiguously. Typically
	 * this is used for business identifiers.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRIdentifier
	 */
	public function getDefaultValueIdentifier(): ?FHIRIdentifier
	{
		return $this->defaultValueIdentifier;
	}

	/**
	 * An identifier - identifies some entity uniquely and unambiguously. Typically
	 * this is used for business identifiers.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRIdentifier $defaultValueIdentifier
	 * @return static
	 */
	public function setDefaultValueIdentifier(
		?FHIRIdentifier $defaultValueIdentifier = null,
	): object {
		$this->_trackValueSet($this->defaultValueIdentifier, $defaultValueIdentifier);
		$this->defaultValueIdentifier = $defaultValueIdentifier;
		return $this;
	}

	/**
	 * An amount of economic utility in some recognized currency.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRMoney
	 */
	public function getDefaultValueMoney(): ?FHIRMoney
	{
		return $this->defaultValueMoney;
	}

	/**
	 * An amount of economic utility in some recognized currency.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRMoney $defaultValueMoney
	 * @return static
	 */
	public function setDefaultValueMoney(?FHIRMoney $defaultValueMoney = null): object
	{
		$this->_trackValueSet($this->defaultValueMoney, $defaultValueMoney);
		$this->defaultValueMoney = $defaultValueMoney;
		return $this;
	}

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRPeriod
	 */
	public function getDefaultValuePeriod(): ?FHIRPeriod
	{
		return $this->defaultValuePeriod;
	}

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRPeriod $defaultValuePeriod
	 * @return static
	 */
	public function setDefaultValuePeriod(?FHIRPeriod $defaultValuePeriod = null): object
	{
		$this->_trackValueSet($this->defaultValuePeriod, $defaultValuePeriod);
		$this->defaultValuePeriod = $defaultValuePeriod;
		return $this;
	}

	/**
	 * A measured amount (or an amount that can potentially be measured). Note that
	 * measured amounts include amounts that are not precisely quantified, including
	 * amounts involving arbitrary units and floating currencies.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity
	 */
	public function getDefaultValueQuantity(): ?FHIRQuantity
	{
		return $this->defaultValueQuantity;
	}

	/**
	 * A measured amount (or an amount that can potentially be measured). Note that
	 * measured amounts include amounts that are not precisely quantified, including
	 * amounts involving arbitrary units and floating currencies.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity $defaultValueQuantity
	 * @return static
	 */
	public function setDefaultValueQuantity(?FHIRQuantity $defaultValueQuantity = null): object
	{
		$this->_trackValueSet($this->defaultValueQuantity, $defaultValueQuantity);
		$this->defaultValueQuantity = $defaultValueQuantity;
		return $this;
	}

	/**
	 * A set of ordered Quantities defined by a low and high limit.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRRange
	 */
	public function getDefaultValueRange(): ?FHIRRange
	{
		return $this->defaultValueRange;
	}

	/**
	 * A set of ordered Quantities defined by a low and high limit.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRRange $defaultValueRange
	 * @return static
	 */
	public function setDefaultValueRange(?FHIRRange $defaultValueRange = null): object
	{
		$this->_trackValueSet($this->defaultValueRange, $defaultValueRange);
		$this->defaultValueRange = $defaultValueRange;
		return $this;
	}

	/**
	 * A relationship of two Quantity values - expressed as a numerator and a
	 * denominator.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRRatio
	 */
	public function getDefaultValueRatio(): ?FHIRRatio
	{
		return $this->defaultValueRatio;
	}

	/**
	 * A relationship of two Quantity values - expressed as a numerator and a
	 * denominator.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRRatio $defaultValueRatio
	 * @return static
	 */
	public function setDefaultValueRatio(?FHIRRatio $defaultValueRatio = null): object
	{
		$this->_trackValueSet($this->defaultValueRatio, $defaultValueRatio);
		$this->defaultValueRatio = $defaultValueRatio;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRReference
	 */
	public function getDefaultValueReference(): ?FHIRReference
	{
		return $this->defaultValueReference;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRReference $defaultValueReference
	 * @return static
	 */
	public function setDefaultValueReference(?FHIRReference $defaultValueReference = null): object
	{
		$this->_trackValueSet($this->defaultValueReference, $defaultValueReference);
		$this->defaultValueReference = $defaultValueReference;
		return $this;
	}

	/**
	 * A series of measurements taken by a device, with upper and lower limits. There
	 * may be more than one dimension in the data.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRSampledData
	 */
	public function getDefaultValueSampledData(): ?FHIRSampledData
	{
		return $this->defaultValueSampledData;
	}

	/**
	 * A series of measurements taken by a device, with upper and lower limits. There
	 * may be more than one dimension in the data.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRSampledData $defaultValueSampledData
	 * @return static
	 */
	public function setDefaultValueSampledData(
		?FHIRSampledData $defaultValueSampledData = null,
	): object {
		$this->_trackValueSet($this->defaultValueSampledData, $defaultValueSampledData);
		$this->defaultValueSampledData = $defaultValueSampledData;
		return $this;
	}

	/**
	 * A signature along with supporting context. The signature may be a digital
	 * signature that is cryptographic in nature, or some other signature acceptable to
	 * the domain. This other signature may be as simple as a graphical image
	 * representing a hand-written signature, or a signature ceremony Different
	 * signature approaches have different utilities.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRSignature
	 */
	public function getDefaultValueSignature(): ?FHIRSignature
	{
		return $this->defaultValueSignature;
	}

	/**
	 * A signature along with supporting context. The signature may be a digital
	 * signature that is cryptographic in nature, or some other signature acceptable to
	 * the domain. This other signature may be as simple as a graphical image
	 * representing a hand-written signature, or a signature ceremony Different
	 * signature approaches have different utilities.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRSignature $defaultValueSignature
	 * @return static
	 */
	public function setDefaultValueSignature(?FHIRSignature $defaultValueSignature = null): object
	{
		$this->_trackValueSet($this->defaultValueSignature, $defaultValueSignature);
		$this->defaultValueSignature = $defaultValueSignature;
		return $this;
	}

	/**
	 * Specifies an event that may occur multiple times. Timing schedules are used to
	 * record when things are planned, expected or requested to occur. The most common
	 * usage is in dosage instructions for medications. They are also used when
	 * planning care of various kinds, and may be used for reporting the schedule to
	 * which past regular activities were carried out.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRTiming
	 */
	public function getDefaultValueTiming(): ?FHIRTiming
	{
		return $this->defaultValueTiming;
	}

	/**
	 * Specifies an event that may occur multiple times. Timing schedules are used to
	 * record when things are planned, expected or requested to occur. The most common
	 * usage is in dosage instructions for medications. They are also used when
	 * planning care of various kinds, and may be used for reporting the schedule to
	 * which past regular activities were carried out.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRTiming $defaultValueTiming
	 * @return static
	 */
	public function setDefaultValueTiming(?FHIRTiming $defaultValueTiming = null): object
	{
		$this->_trackValueSet($this->defaultValueTiming, $defaultValueTiming);
		$this->defaultValueTiming = $defaultValueTiming;
		return $this;
	}

	/**
	 * Specifies contact information for a person or organization.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRContactDetail
	 */
	public function getDefaultValueContactDetail(): ?FHIRContactDetail
	{
		return $this->defaultValueContactDetail;
	}

	/**
	 * Specifies contact information for a person or organization.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRContactDetail $defaultValueContactDetail
	 * @return static
	 */
	public function setDefaultValueContactDetail(
		?FHIRContactDetail $defaultValueContactDetail = null,
	): object {
		$this->_trackValueSet($this->defaultValueContactDetail, $defaultValueContactDetail);
		$this->defaultValueContactDetail = $defaultValueContactDetail;
		return $this;
	}

	/**
	 * A contributor to the content of a knowledge asset, including authors, editors,
	 * reviewers, and endorsers.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRContributor
	 */
	public function getDefaultValueContributor(): ?FHIRContributor
	{
		return $this->defaultValueContributor;
	}

	/**
	 * A contributor to the content of a knowledge asset, including authors, editors,
	 * reviewers, and endorsers.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRContributor $defaultValueContributor
	 * @return static
	 */
	public function setDefaultValueContributor(
		?FHIRContributor $defaultValueContributor = null,
	): object {
		$this->_trackValueSet($this->defaultValueContributor, $defaultValueContributor);
		$this->defaultValueContributor = $defaultValueContributor;
		return $this;
	}

	/**
	 * Describes a required data item for evaluation in terms of the type of data, and
	 * optional code or date-based filters of the data.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRDataRequirement
	 */
	public function getDefaultValueDataRequirement(): ?FHIRDataRequirement
	{
		return $this->defaultValueDataRequirement;
	}

	/**
	 * Describes a required data item for evaluation in terms of the type of data, and
	 * optional code or date-based filters of the data.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRDataRequirement $defaultValueDataRequirement
	 * @return static
	 */
	public function setDefaultValueDataRequirement(
		?FHIRDataRequirement $defaultValueDataRequirement = null,
	): object {
		$this->_trackValueSet($this->defaultValueDataRequirement, $defaultValueDataRequirement);
		$this->defaultValueDataRequirement = $defaultValueDataRequirement;
		return $this;
	}

	/**
	 * A expression that is evaluated in a specified context and returns a value. The
	 * context of use of the expression must specify the context in which the
	 * expression is evaluated, and how the result of the expression is used.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRExpression
	 */
	public function getDefaultValueExpression(): ?FHIRExpression
	{
		return $this->defaultValueExpression;
	}

	/**
	 * A expression that is evaluated in a specified context and returns a value. The
	 * context of use of the expression must specify the context in which the
	 * expression is evaluated, and how the result of the expression is used.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRExpression $defaultValueExpression
	 * @return static
	 */
	public function setDefaultValueExpression(
		?FHIRExpression $defaultValueExpression = null,
	): object {
		$this->_trackValueSet($this->defaultValueExpression, $defaultValueExpression);
		$this->defaultValueExpression = $defaultValueExpression;
		return $this;
	}

	/**
	 * The parameters to the module. This collection specifies both the input and
	 * output parameters. Input parameters are provided by the caller as part of the
	 * $evaluate operation. Output parameters are included in the GuidanceResponse.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRParameterDefinition
	 */
	public function getDefaultValueParameterDefinition(): ?FHIRParameterDefinition
	{
		return $this->defaultValueParameterDefinition;
	}

	/**
	 * The parameters to the module. This collection specifies both the input and
	 * output parameters. Input parameters are provided by the caller as part of the
	 * $evaluate operation. Output parameters are included in the GuidanceResponse.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRParameterDefinition $defaultValueParameterDefinition
	 * @return static
	 */
	public function setDefaultValueParameterDefinition(
		?FHIRParameterDefinition $defaultValueParameterDefinition = null,
	): object {
		$this->_trackValueSet(
			$this->defaultValueParameterDefinition,
			$defaultValueParameterDefinition,
		);
		$this->defaultValueParameterDefinition = $defaultValueParameterDefinition;
		return $this;
	}

	/**
	 * Related artifacts such as additional documentation, justification, or
	 * bibliographic references.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRRelatedArtifact
	 */
	public function getDefaultValueRelatedArtifact(): ?FHIRRelatedArtifact
	{
		return $this->defaultValueRelatedArtifact;
	}

	/**
	 * Related artifacts such as additional documentation, justification, or
	 * bibliographic references.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRRelatedArtifact $defaultValueRelatedArtifact
	 * @return static
	 */
	public function setDefaultValueRelatedArtifact(
		?FHIRRelatedArtifact $defaultValueRelatedArtifact = null,
	): object {
		$this->_trackValueSet($this->defaultValueRelatedArtifact, $defaultValueRelatedArtifact);
		$this->defaultValueRelatedArtifact = $defaultValueRelatedArtifact;
		return $this;
	}

	/**
	 * A description of a triggering event. Triggering events can be named events, data
	 * events, or periodic, as determined by the type element.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRTriggerDefinition
	 */
	public function getDefaultValueTriggerDefinition(): ?FHIRTriggerDefinition
	{
		return $this->defaultValueTriggerDefinition;
	}

	/**
	 * A description of a triggering event. Triggering events can be named events, data
	 * events, or periodic, as determined by the type element.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRTriggerDefinition $defaultValueTriggerDefinition
	 * @return static
	 */
	public function setDefaultValueTriggerDefinition(
		?FHIRTriggerDefinition $defaultValueTriggerDefinition = null,
	): object {
		$this->_trackValueSet($this->defaultValueTriggerDefinition, $defaultValueTriggerDefinition);
		$this->defaultValueTriggerDefinition = $defaultValueTriggerDefinition;
		return $this;
	}

	/**
	 * Specifies clinical/business/etc. metadata that can be used to retrieve, index
	 * and/or categorize an artifact. This metadata can either be specific to the
	 * applicable population (e.g., age category, DRG) or the specific context of care
	 * (e.g., venue, care setting, provider of care).
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRUsageContext
	 */
	public function getDefaultValueUsageContext(): ?FHIRUsageContext
	{
		return $this->defaultValueUsageContext;
	}

	/**
	 * Specifies clinical/business/etc. metadata that can be used to retrieve, index
	 * and/or categorize an artifact. This metadata can either be specific to the
	 * applicable population (e.g., age category, DRG) or the specific context of care
	 * (e.g., venue, care setting, provider of care).
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRUsageContext $defaultValueUsageContext
	 * @return static
	 */
	public function setDefaultValueUsageContext(
		?FHIRUsageContext $defaultValueUsageContext = null,
	): object {
		$this->_trackValueSet($this->defaultValueUsageContext, $defaultValueUsageContext);
		$this->defaultValueUsageContext = $defaultValueUsageContext;
		return $this;
	}

	/**
	 * Indicates how the medication is/was taken or should be taken by the patient.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRDosage
	 */
	public function getDefaultValueDosage(): ?FHIRDosage
	{
		return $this->defaultValueDosage;
	}

	/**
	 * Indicates how the medication is/was taken or should be taken by the patient.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRDosage $defaultValueDosage
	 * @return static
	 */
	public function setDefaultValueDosage(?FHIRDosage $defaultValueDosage = null): object
	{
		$this->_trackValueSet($this->defaultValueDosage, $defaultValueDosage);
		$this->defaultValueDosage = $defaultValueDosage;
		return $this;
	}

	/**
	 * The metadata about a resource. This is content in the resource that is
	 * maintained by the infrastructure. Changes to the content might not always be
	 * associated with version changes to the resource.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRMeta
	 */
	public function getDefaultValueMeta(): ?FHIRMeta
	{
		return $this->defaultValueMeta;
	}

	/**
	 * The metadata about a resource. This is content in the resource that is
	 * maintained by the infrastructure. Changes to the content might not always be
	 * associated with version changes to the resource.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRMeta $defaultValueMeta
	 * @return static
	 */
	public function setDefaultValueMeta(?FHIRMeta $defaultValueMeta = null): object
	{
		$this->_trackValueSet($this->defaultValueMeta, $defaultValueMeta);
		$this->defaultValueMeta = $defaultValueMeta;
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
	 * The Implicit meaning that is to be understood when this element is missing (e.g.
	 * 'when this element is missing, the period is ongoing').
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRMarkdownPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRMarkdown
	 */
	public function getMeaningWhenMissing(): ?FHIRMarkdown
	{
		return $this->meaningWhenMissing;
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
	 * The Implicit meaning that is to be understood when this element is missing (e.g.
	 * 'when this element is missing, the period is ongoing').
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRMarkdownPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRMarkdown $meaningWhenMissing
	 * @return static
	 */
	public function setMeaningWhenMissing($meaningWhenMissing = null): object
	{
		if (null !== $meaningWhenMissing && !($meaningWhenMissing instanceof FHIRMarkdown)) {
			$meaningWhenMissing = new FHIRMarkdown($meaningWhenMissing);
		}
		$this->_trackValueSet($this->meaningWhenMissing, $meaningWhenMissing);
		$this->meaningWhenMissing = $meaningWhenMissing;
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings SHALL NOT exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If present, indicates that the order of the repeating element has meaning and
	 * describes what that meaning is. If absent, it means that the order of the
	 * element has no meaning.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRStringPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRString
	 */
	public function getOrderMeaning(): ?FHIRString
	{
		return $this->orderMeaning;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings SHALL NOT exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If present, indicates that the order of the repeating element has meaning and
	 * describes what that meaning is. If absent, it means that the order of the
	 * element has no meaning.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRStringPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRString $orderMeaning
	 * @return static
	 */
	public function setOrderMeaning($orderMeaning = null): object
	{
		if (null !== $orderMeaning && !($orderMeaning instanceof FHIRString)) {
			$orderMeaning = new FHIRString($orderMeaning);
		}
		$this->_trackValueSet($this->orderMeaning, $orderMeaning);
		$this->orderMeaning = $orderMeaning;
		return $this;
	}

	/**
	 * A stream of bytes
	 * A stream of bytes, base64 encoded
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRBase64BinaryPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRBase64Binary
	 */
	public function getFixedBase64Binary(): ?FHIRBase64Binary
	{
		return $this->fixedBase64Binary;
	}

	/**
	 * A stream of bytes
	 * A stream of bytes, base64 encoded
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRBase64BinaryPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRBase64Binary $fixedBase64Binary
	 * @return static
	 */
	public function setFixedBase64Binary($fixedBase64Binary = null): object
	{
		if (null !== $fixedBase64Binary && !($fixedBase64Binary instanceof FHIRBase64Binary)) {
			$fixedBase64Binary = new FHIRBase64Binary($fixedBase64Binary);
		}
		$this->_trackValueSet($this->fixedBase64Binary, $fixedBase64Binary);
		$this->fixedBase64Binary = $fixedBase64Binary;
		return $this;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRBooleanPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRBoolean
	 */
	public function getFixedBoolean(): ?FHIRBoolean
	{
		return $this->fixedBoolean;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRBooleanPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRBoolean $fixedBoolean
	 * @return static
	 */
	public function setFixedBoolean($fixedBoolean = null): object
	{
		if (null !== $fixedBoolean && !($fixedBoolean instanceof FHIRBoolean)) {
			$fixedBoolean = new FHIRBoolean($fixedBoolean);
		}
		$this->_trackValueSet($this->fixedBoolean, $fixedBoolean);
		$this->fixedBoolean = $fixedBoolean;
		return $this;
	}

	/**
	 * A URI that is a reference to a canonical URL on a FHIR resource
	 * see [Canonical References](references.html#canonical)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRCanonicalPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRCanonical
	 */
	public function getFixedCanonical(): ?FHIRCanonical
	{
		return $this->fixedCanonical;
	}

	/**
	 * A URI that is a reference to a canonical URL on a FHIR resource
	 * see [Canonical References](references.html#canonical)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRCanonicalPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRCanonical $fixedCanonical
	 * @return static
	 */
	public function setFixedCanonical($fixedCanonical = null): object
	{
		if (null !== $fixedCanonical && !($fixedCanonical instanceof FHIRCanonical)) {
			$fixedCanonical = new FHIRCanonical($fixedCanonical);
		}
		$this->_trackValueSet($this->fixedCanonical, $fixedCanonical);
		$this->fixedCanonical = $fixedCanonical;
		return $this;
	}

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRCodePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRCode
	 */
	public function getFixedCode(): ?FHIRCode
	{
		return $this->fixedCode;
	}

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRCodePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRCode $fixedCode
	 * @return static
	 */
	public function setFixedCode($fixedCode = null): object
	{
		if (null !== $fixedCode && !($fixedCode instanceof FHIRCode)) {
			$fixedCode = new FHIRCode($fixedCode);
		}
		$this->_trackValueSet($this->fixedCode, $fixedCode);
		$this->fixedCode = $fixedCode;
		return $this;
	}

	/**
	 * A date or partial date (e.g. just year or year + month). There is no time zone.
	 * The format is a union of the schema types gYear, gYearMonth and date. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRDatePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRDate
	 */
	public function getFixedDate(): ?FHIRDate
	{
		return $this->fixedDate;
	}

	/**
	 * A date or partial date (e.g. just year or year + month). There is no time zone.
	 * The format is a union of the schema types gYear, gYearMonth and date. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRDatePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRDate $fixedDate
	 * @return static
	 */
	public function setFixedDate($fixedDate = null): object
	{
		if (null !== $fixedDate && !($fixedDate instanceof FHIRDate)) {
			$fixedDate = new FHIRDate($fixedDate);
		}
		$this->_trackValueSet($this->fixedDate, $fixedDate);
		$this->fixedDate = $fixedDate;
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
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRDateTimePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRDateTime
	 */
	public function getFixedDateTime(): ?FHIRDateTime
	{
		return $this->fixedDateTime;
	}

	/**
	 * A date, date-time or partial date (e.g. just year or year + month). If hours and
	 * minutes are specified, a time zone SHALL be populated. The format is a union of
	 * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
	 * due to schema type constraints but may be zero-filled and may be ignored. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRDateTimePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRDateTime $fixedDateTime
	 * @return static
	 */
	public function setFixedDateTime($fixedDateTime = null): object
	{
		if (null !== $fixedDateTime && !($fixedDateTime instanceof FHIRDateTime)) {
			$fixedDateTime = new FHIRDateTime($fixedDateTime);
		}
		$this->_trackValueSet($this->fixedDateTime, $fixedDateTime);
		$this->fixedDateTime = $fixedDateTime;
		return $this;
	}

	/**
	 * A rational number with implicit precision
	 * Do not use an IEEE type floating point type, instead use something that works
	 * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRDecimalPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRDecimal
	 */
	public function getFixedDecimal(): ?FHIRDecimal
	{
		return $this->fixedDecimal;
	}

	/**
	 * A rational number with implicit precision
	 * Do not use an IEEE type floating point type, instead use something that works
	 * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRDecimalPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRDecimal $fixedDecimal
	 * @return static
	 */
	public function setFixedDecimal($fixedDecimal = null): object
	{
		if (null !== $fixedDecimal && !($fixedDecimal instanceof FHIRDecimal)) {
			$fixedDecimal = new FHIRDecimal($fixedDecimal);
		}
		$this->_trackValueSet($this->fixedDecimal, $fixedDecimal);
		$this->fixedDecimal = $fixedDecimal;
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
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRIdPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRId
	 */
	public function getFixedId(): ?FHIRId
	{
		return $this->fixedId;
	}

	/**
	 * Any combination of letters, numerals, "-" and ".", with a length limit of 64
	 * characters. (This might be an integer, an unprefixed OID, UUID or any other
	 * identifier pattern that meets these constraints.) Ids are case-insensitive.
	 * RFC 4122
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRIdPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRId $fixedId
	 * @return static
	 */
	public function setFixedId($fixedId = null): object
	{
		if (null !== $fixedId && !($fixedId instanceof FHIRId)) {
			$fixedId = new FHIRId($fixedId);
		}
		$this->_trackValueSet($this->fixedId, $fixedId);
		$this->fixedId = $fixedId;
		return $this;
	}

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for where precisely observed times are required,
	 * typically system logs etc., and not human-reported times - for them, see date
	 * and dateTime (which can be as precise as instant, but is not required to be)
	 * below. Time zone is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRInstantPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRInstant
	 */
	public function getFixedInstant(): ?FHIRInstant
	{
		return $this->fixedInstant;
	}

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for where precisely observed times are required,
	 * typically system logs etc., and not human-reported times - for them, see date
	 * and dateTime (which can be as precise as instant, but is not required to be)
	 * below. Time zone is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRInstantPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRInstant $fixedInstant
	 * @return static
	 */
	public function setFixedInstant($fixedInstant = null): object
	{
		if (null !== $fixedInstant && !($fixedInstant instanceof FHIRInstant)) {
			$fixedInstant = new FHIRInstant($fixedInstant);
		}
		$this->_trackValueSet($this->fixedInstant, $fixedInstant);
		$this->fixedInstant = $fixedInstant;
		return $this;
	}

	/**
	 * A whole number
	 * 32 bit number; for values larger than this, use decimal
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRIntegerPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRInteger
	 */
	public function getFixedInteger(): ?FHIRInteger
	{
		return $this->fixedInteger;
	}

	/**
	 * A whole number
	 * 32 bit number; for values larger than this, use decimal
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRIntegerPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRInteger $fixedInteger
	 * @return static
	 */
	public function setFixedInteger($fixedInteger = null): object
	{
		if (null !== $fixedInteger && !($fixedInteger instanceof FHIRInteger)) {
			$fixedInteger = new FHIRInteger($fixedInteger);
		}
		$this->_trackValueSet($this->fixedInteger, $fixedInteger);
		$this->fixedInteger = $fixedInteger;
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
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRMarkdownPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRMarkdown
	 */
	public function getFixedMarkdown(): ?FHIRMarkdown
	{
		return $this->fixedMarkdown;
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
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRMarkdownPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRMarkdown $fixedMarkdown
	 * @return static
	 */
	public function setFixedMarkdown($fixedMarkdown = null): object
	{
		if (null !== $fixedMarkdown && !($fixedMarkdown instanceof FHIRMarkdown)) {
			$fixedMarkdown = new FHIRMarkdown($fixedMarkdown);
		}
		$this->_trackValueSet($this->fixedMarkdown, $fixedMarkdown);
		$this->fixedMarkdown = $fixedMarkdown;
		return $this;
	}

	/**
	 * An OID represented as a URI
	 * RFC 3001. See also ISO/IEC 8824:1990 €
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIROidPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIROid
	 */
	public function getFixedOid(): ?FHIROid
	{
		return $this->fixedOid;
	}

	/**
	 * An OID represented as a URI
	 * RFC 3001. See also ISO/IEC 8824:1990 €
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIROidPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIROid $fixedOid
	 * @return static
	 */
	public function setFixedOid($fixedOid = null): object
	{
		if (null !== $fixedOid && !($fixedOid instanceof FHIROid)) {
			$fixedOid = new FHIROid($fixedOid);
		}
		$this->_trackValueSet($this->fixedOid, $fixedOid);
		$this->fixedOid = $fixedOid;
		return $this;
	}

	/**
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRPositiveInt
	 */
	public function getFixedPositiveInt(): ?FHIRPositiveInt
	{
		return $this->fixedPositiveInt;
	}

	/**
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRPositiveInt $fixedPositiveInt
	 * @return static
	 */
	public function setFixedPositiveInt($fixedPositiveInt = null): object
	{
		if (null !== $fixedPositiveInt && !($fixedPositiveInt instanceof FHIRPositiveInt)) {
			$fixedPositiveInt = new FHIRPositiveInt($fixedPositiveInt);
		}
		$this->_trackValueSet($this->fixedPositiveInt, $fixedPositiveInt);
		$this->fixedPositiveInt = $fixedPositiveInt;
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings SHALL NOT exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRStringPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRString
	 */
	public function getFixedString(): ?FHIRString
	{
		return $this->fixedString;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings SHALL NOT exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRStringPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRString $fixedString
	 * @return static
	 */
	public function setFixedString($fixedString = null): object
	{
		if (null !== $fixedString && !($fixedString instanceof FHIRString)) {
			$fixedString = new FHIRString($fixedString);
		}
		$this->_trackValueSet($this->fixedString, $fixedString);
		$this->fixedString = $fixedString;
		return $this;
	}

	/**
	 * A time during the day, with no date specified
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRTimePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRTime
	 */
	public function getFixedTime(): ?FHIRTime
	{
		return $this->fixedTime;
	}

	/**
	 * A time during the day, with no date specified
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRTimePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRTime $fixedTime
	 * @return static
	 */
	public function setFixedTime($fixedTime = null): object
	{
		if (null !== $fixedTime && !($fixedTime instanceof FHIRTime)) {
			$fixedTime = new FHIRTime($fixedTime);
		}
		$this->_trackValueSet($this->fixedTime, $fixedTime);
		$this->fixedTime = $fixedTime;
		return $this;
	}

	/**
	 * An integer with a value that is not negative (e.g. >= 0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRUnsignedInt
	 */
	public function getFixedUnsignedInt(): ?FHIRUnsignedInt
	{
		return $this->fixedUnsignedInt;
	}

	/**
	 * An integer with a value that is not negative (e.g. >= 0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRUnsignedInt $fixedUnsignedInt
	 * @return static
	 */
	public function setFixedUnsignedInt($fixedUnsignedInt = null): object
	{
		if (null !== $fixedUnsignedInt && !($fixedUnsignedInt instanceof FHIRUnsignedInt)) {
			$fixedUnsignedInt = new FHIRUnsignedInt($fixedUnsignedInt);
		}
		$this->_trackValueSet($this->fixedUnsignedInt, $fixedUnsignedInt);
		$this->fixedUnsignedInt = $fixedUnsignedInt;
		return $this;
	}

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRUriPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRUri
	 */
	public function getFixedUri(): ?FHIRUri
	{
		return $this->fixedUri;
	}

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRUriPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRUri $fixedUri
	 * @return static
	 */
	public function setFixedUri($fixedUri = null): object
	{
		if (null !== $fixedUri && !($fixedUri instanceof FHIRUri)) {
			$fixedUri = new FHIRUri($fixedUri);
		}
		$this->_trackValueSet($this->fixedUri, $fixedUri);
		$this->fixedUri = $fixedUri;
		return $this;
	}

	/**
	 * A URI that is a literal reference
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRUrlPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRUrl
	 */
	public function getFixedUrl(): ?FHIRUrl
	{
		return $this->fixedUrl;
	}

	/**
	 * A URI that is a literal reference
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRUrlPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRUrl $fixedUrl
	 * @return static
	 */
	public function setFixedUrl($fixedUrl = null): object
	{
		if (null !== $fixedUrl && !($fixedUrl instanceof FHIRUrl)) {
			$fixedUrl = new FHIRUrl($fixedUrl);
		}
		$this->_trackValueSet($this->fixedUrl, $fixedUrl);
		$this->fixedUrl = $fixedUrl;
		return $this;
	}

	/**
	 * A UUID, represented as a URI
	 * See The Open Group, CDE 1.1 Remote Procedure Call specification, Appendix A.
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRUuidPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRUuid
	 */
	public function getFixedUuid(): ?FHIRUuid
	{
		return $this->fixedUuid;
	}

	/**
	 * A UUID, represented as a URI
	 * See The Open Group, CDE 1.1 Remote Procedure Call specification, Appendix A.
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRUuidPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRUuid $fixedUuid
	 * @return static
	 */
	public function setFixedUuid($fixedUuid = null): object
	{
		if (null !== $fixedUuid && !($fixedUuid instanceof FHIRUuid)) {
			$fixedUuid = new FHIRUuid($fixedUuid);
		}
		$this->_trackValueSet($this->fixedUuid, $fixedUuid);
		$this->fixedUuid = $fixedUuid;
		return $this;
	}

	/**
	 * An address expressed using postal conventions (as opposed to GPS or other
	 * location definition formats). This data type may be used to convey addresses for
	 * use in delivering mail as well as for visiting locations which might not be
	 * valid for mail delivery. There are a variety of postal address formats defined
	 * around the world.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRAddress
	 */
	public function getFixedAddress(): ?FHIRAddress
	{
		return $this->fixedAddress;
	}

	/**
	 * An address expressed using postal conventions (as opposed to GPS or other
	 * location definition formats). This data type may be used to convey addresses for
	 * use in delivering mail as well as for visiting locations which might not be
	 * valid for mail delivery. There are a variety of postal address formats defined
	 * around the world.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRAddress $fixedAddress
	 * @return static
	 */
	public function setFixedAddress(?FHIRAddress $fixedAddress = null): object
	{
		$this->_trackValueSet($this->fixedAddress, $fixedAddress);
		$this->fixedAddress = $fixedAddress;
		return $this;
	}

	/**
	 * A duration of time during which an organism (or a process) has existed.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity\FHIRAge
	 */
	public function getFixedAge(): ?FHIRAge
	{
		return $this->fixedAge;
	}

	/**
	 * A duration of time during which an organism (or a process) has existed.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity\FHIRAge $fixedAge
	 * @return static
	 */
	public function setFixedAge(?FHIRAge $fixedAge = null): object
	{
		$this->_trackValueSet($this->fixedAge, $fixedAge);
		$this->fixedAge = $fixedAge;
		return $this;
	}

	/**
	 * A text note which also contains information about who made the statement and
	 * when.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRAnnotation
	 */
	public function getFixedAnnotation(): ?FHIRAnnotation
	{
		return $this->fixedAnnotation;
	}

	/**
	 * A text note which also contains information about who made the statement and
	 * when.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRAnnotation $fixedAnnotation
	 * @return static
	 */
	public function setFixedAnnotation(?FHIRAnnotation $fixedAnnotation = null): object
	{
		$this->_trackValueSet($this->fixedAnnotation, $fixedAnnotation);
		$this->fixedAnnotation = $fixedAnnotation;
		return $this;
	}

	/**
	 * For referring to data content defined in other formats.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRAttachment
	 */
	public function getFixedAttachment(): ?FHIRAttachment
	{
		return $this->fixedAttachment;
	}

	/**
	 * For referring to data content defined in other formats.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRAttachment $fixedAttachment
	 * @return static
	 */
	public function setFixedAttachment(?FHIRAttachment $fixedAttachment = null): object
	{
		$this->_trackValueSet($this->fixedAttachment, $fixedAttachment);
		$this->fixedAttachment = $fixedAttachment;
		return $this;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRCodeableConcept
	 */
	public function getFixedCodeableConcept(): ?FHIRCodeableConcept
	{
		return $this->fixedCodeableConcept;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRCodeableConcept $fixedCodeableConcept
	 * @return static
	 */
	public function setFixedCodeableConcept(
		?FHIRCodeableConcept $fixedCodeableConcept = null,
	): object {
		$this->_trackValueSet($this->fixedCodeableConcept, $fixedCodeableConcept);
		$this->fixedCodeableConcept = $fixedCodeableConcept;
		return $this;
	}

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRCoding
	 */
	public function getFixedCoding(): ?FHIRCoding
	{
		return $this->fixedCoding;
	}

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRCoding $fixedCoding
	 * @return static
	 */
	public function setFixedCoding(?FHIRCoding $fixedCoding = null): object
	{
		$this->_trackValueSet($this->fixedCoding, $fixedCoding);
		$this->fixedCoding = $fixedCoding;
		return $this;
	}

	/**
	 * Details for all kinds of technology mediated contact points for a person or
	 * organization, including telephone, email, etc.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRContactPoint
	 */
	public function getFixedContactPoint(): ?FHIRContactPoint
	{
		return $this->fixedContactPoint;
	}

	/**
	 * Details for all kinds of technology mediated contact points for a person or
	 * organization, including telephone, email, etc.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRContactPoint $fixedContactPoint
	 * @return static
	 */
	public function setFixedContactPoint(?FHIRContactPoint $fixedContactPoint = null): object
	{
		$this->_trackValueSet($this->fixedContactPoint, $fixedContactPoint);
		$this->fixedContactPoint = $fixedContactPoint;
		return $this;
	}

	/**
	 * A measured amount (or an amount that can potentially be measured). Note that
	 * measured amounts include amounts that are not precisely quantified, including
	 * amounts involving arbitrary units and floating currencies.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity\FHIRCount
	 */
	public function getFixedCount(): ?FHIRCount
	{
		return $this->fixedCount;
	}

	/**
	 * A measured amount (or an amount that can potentially be measured). Note that
	 * measured amounts include amounts that are not precisely quantified, including
	 * amounts involving arbitrary units and floating currencies.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity\FHIRCount $fixedCount
	 * @return static
	 */
	public function setFixedCount(?FHIRCount $fixedCount = null): object
	{
		$this->_trackValueSet($this->fixedCount, $fixedCount);
		$this->fixedCount = $fixedCount;
		return $this;
	}

	/**
	 * A length - a value with a unit that is a physical distance.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity\FHIRDistance
	 */
	public function getFixedDistance(): ?FHIRDistance
	{
		return $this->fixedDistance;
	}

	/**
	 * A length - a value with a unit that is a physical distance.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity\FHIRDistance $fixedDistance
	 * @return static
	 */
	public function setFixedDistance(?FHIRDistance $fixedDistance = null): object
	{
		$this->_trackValueSet($this->fixedDistance, $fixedDistance);
		$this->fixedDistance = $fixedDistance;
		return $this;
	}

	/**
	 * A length of time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity\FHIRDuration
	 */
	public function getFixedDuration(): ?FHIRDuration
	{
		return $this->fixedDuration;
	}

	/**
	 * A length of time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity\FHIRDuration $fixedDuration
	 * @return static
	 */
	public function setFixedDuration(?FHIRDuration $fixedDuration = null): object
	{
		$this->_trackValueSet($this->fixedDuration, $fixedDuration);
		$this->fixedDuration = $fixedDuration;
		return $this;
	}

	/**
	 * A human's name with the ability to identify parts and usage.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRHumanName
	 */
	public function getFixedHumanName(): ?FHIRHumanName
	{
		return $this->fixedHumanName;
	}

	/**
	 * A human's name with the ability to identify parts and usage.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRHumanName $fixedHumanName
	 * @return static
	 */
	public function setFixedHumanName(?FHIRHumanName $fixedHumanName = null): object
	{
		$this->_trackValueSet($this->fixedHumanName, $fixedHumanName);
		$this->fixedHumanName = $fixedHumanName;
		return $this;
	}

	/**
	 * An identifier - identifies some entity uniquely and unambiguously. Typically
	 * this is used for business identifiers.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRIdentifier
	 */
	public function getFixedIdentifier(): ?FHIRIdentifier
	{
		return $this->fixedIdentifier;
	}

	/**
	 * An identifier - identifies some entity uniquely and unambiguously. Typically
	 * this is used for business identifiers.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRIdentifier $fixedIdentifier
	 * @return static
	 */
	public function setFixedIdentifier(?FHIRIdentifier $fixedIdentifier = null): object
	{
		$this->_trackValueSet($this->fixedIdentifier, $fixedIdentifier);
		$this->fixedIdentifier = $fixedIdentifier;
		return $this;
	}

	/**
	 * An amount of economic utility in some recognized currency.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRMoney
	 */
	public function getFixedMoney(): ?FHIRMoney
	{
		return $this->fixedMoney;
	}

	/**
	 * An amount of economic utility in some recognized currency.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRMoney $fixedMoney
	 * @return static
	 */
	public function setFixedMoney(?FHIRMoney $fixedMoney = null): object
	{
		$this->_trackValueSet($this->fixedMoney, $fixedMoney);
		$this->fixedMoney = $fixedMoney;
		return $this;
	}

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRPeriod
	 */
	public function getFixedPeriod(): ?FHIRPeriod
	{
		return $this->fixedPeriod;
	}

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRPeriod $fixedPeriod
	 * @return static
	 */
	public function setFixedPeriod(?FHIRPeriod $fixedPeriod = null): object
	{
		$this->_trackValueSet($this->fixedPeriod, $fixedPeriod);
		$this->fixedPeriod = $fixedPeriod;
		return $this;
	}

	/**
	 * A measured amount (or an amount that can potentially be measured). Note that
	 * measured amounts include amounts that are not precisely quantified, including
	 * amounts involving arbitrary units and floating currencies.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity
	 */
	public function getFixedQuantity(): ?FHIRQuantity
	{
		return $this->fixedQuantity;
	}

	/**
	 * A measured amount (or an amount that can potentially be measured). Note that
	 * measured amounts include amounts that are not precisely quantified, including
	 * amounts involving arbitrary units and floating currencies.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity $fixedQuantity
	 * @return static
	 */
	public function setFixedQuantity(?FHIRQuantity $fixedQuantity = null): object
	{
		$this->_trackValueSet($this->fixedQuantity, $fixedQuantity);
		$this->fixedQuantity = $fixedQuantity;
		return $this;
	}

	/**
	 * A set of ordered Quantities defined by a low and high limit.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRRange
	 */
	public function getFixedRange(): ?FHIRRange
	{
		return $this->fixedRange;
	}

	/**
	 * A set of ordered Quantities defined by a low and high limit.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRRange $fixedRange
	 * @return static
	 */
	public function setFixedRange(?FHIRRange $fixedRange = null): object
	{
		$this->_trackValueSet($this->fixedRange, $fixedRange);
		$this->fixedRange = $fixedRange;
		return $this;
	}

	/**
	 * A relationship of two Quantity values - expressed as a numerator and a
	 * denominator.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRRatio
	 */
	public function getFixedRatio(): ?FHIRRatio
	{
		return $this->fixedRatio;
	}

	/**
	 * A relationship of two Quantity values - expressed as a numerator and a
	 * denominator.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRRatio $fixedRatio
	 * @return static
	 */
	public function setFixedRatio(?FHIRRatio $fixedRatio = null): object
	{
		$this->_trackValueSet($this->fixedRatio, $fixedRatio);
		$this->fixedRatio = $fixedRatio;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRReference
	 */
	public function getFixedReference(): ?FHIRReference
	{
		return $this->fixedReference;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRReference $fixedReference
	 * @return static
	 */
	public function setFixedReference(?FHIRReference $fixedReference = null): object
	{
		$this->_trackValueSet($this->fixedReference, $fixedReference);
		$this->fixedReference = $fixedReference;
		return $this;
	}

	/**
	 * A series of measurements taken by a device, with upper and lower limits. There
	 * may be more than one dimension in the data.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRSampledData
	 */
	public function getFixedSampledData(): ?FHIRSampledData
	{
		return $this->fixedSampledData;
	}

	/**
	 * A series of measurements taken by a device, with upper and lower limits. There
	 * may be more than one dimension in the data.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRSampledData $fixedSampledData
	 * @return static
	 */
	public function setFixedSampledData(?FHIRSampledData $fixedSampledData = null): object
	{
		$this->_trackValueSet($this->fixedSampledData, $fixedSampledData);
		$this->fixedSampledData = $fixedSampledData;
		return $this;
	}

	/**
	 * A signature along with supporting context. The signature may be a digital
	 * signature that is cryptographic in nature, or some other signature acceptable to
	 * the domain. This other signature may be as simple as a graphical image
	 * representing a hand-written signature, or a signature ceremony Different
	 * signature approaches have different utilities.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRSignature
	 */
	public function getFixedSignature(): ?FHIRSignature
	{
		return $this->fixedSignature;
	}

	/**
	 * A signature along with supporting context. The signature may be a digital
	 * signature that is cryptographic in nature, or some other signature acceptable to
	 * the domain. This other signature may be as simple as a graphical image
	 * representing a hand-written signature, or a signature ceremony Different
	 * signature approaches have different utilities.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRSignature $fixedSignature
	 * @return static
	 */
	public function setFixedSignature(?FHIRSignature $fixedSignature = null): object
	{
		$this->_trackValueSet($this->fixedSignature, $fixedSignature);
		$this->fixedSignature = $fixedSignature;
		return $this;
	}

	/**
	 * Specifies an event that may occur multiple times. Timing schedules are used to
	 * record when things are planned, expected or requested to occur. The most common
	 * usage is in dosage instructions for medications. They are also used when
	 * planning care of various kinds, and may be used for reporting the schedule to
	 * which past regular activities were carried out.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRTiming
	 */
	public function getFixedTiming(): ?FHIRTiming
	{
		return $this->fixedTiming;
	}

	/**
	 * Specifies an event that may occur multiple times. Timing schedules are used to
	 * record when things are planned, expected or requested to occur. The most common
	 * usage is in dosage instructions for medications. They are also used when
	 * planning care of various kinds, and may be used for reporting the schedule to
	 * which past regular activities were carried out.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRTiming $fixedTiming
	 * @return static
	 */
	public function setFixedTiming(?FHIRTiming $fixedTiming = null): object
	{
		$this->_trackValueSet($this->fixedTiming, $fixedTiming);
		$this->fixedTiming = $fixedTiming;
		return $this;
	}

	/**
	 * Specifies contact information for a person or organization.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRContactDetail
	 */
	public function getFixedContactDetail(): ?FHIRContactDetail
	{
		return $this->fixedContactDetail;
	}

	/**
	 * Specifies contact information for a person or organization.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRContactDetail $fixedContactDetail
	 * @return static
	 */
	public function setFixedContactDetail(?FHIRContactDetail $fixedContactDetail = null): object
	{
		$this->_trackValueSet($this->fixedContactDetail, $fixedContactDetail);
		$this->fixedContactDetail = $fixedContactDetail;
		return $this;
	}

	/**
	 * A contributor to the content of a knowledge asset, including authors, editors,
	 * reviewers, and endorsers.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRContributor
	 */
	public function getFixedContributor(): ?FHIRContributor
	{
		return $this->fixedContributor;
	}

	/**
	 * A contributor to the content of a knowledge asset, including authors, editors,
	 * reviewers, and endorsers.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRContributor $fixedContributor
	 * @return static
	 */
	public function setFixedContributor(?FHIRContributor $fixedContributor = null): object
	{
		$this->_trackValueSet($this->fixedContributor, $fixedContributor);
		$this->fixedContributor = $fixedContributor;
		return $this;
	}

	/**
	 * Describes a required data item for evaluation in terms of the type of data, and
	 * optional code or date-based filters of the data.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRDataRequirement
	 */
	public function getFixedDataRequirement(): ?FHIRDataRequirement
	{
		return $this->fixedDataRequirement;
	}

	/**
	 * Describes a required data item for evaluation in terms of the type of data, and
	 * optional code or date-based filters of the data.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRDataRequirement $fixedDataRequirement
	 * @return static
	 */
	public function setFixedDataRequirement(
		?FHIRDataRequirement $fixedDataRequirement = null,
	): object {
		$this->_trackValueSet($this->fixedDataRequirement, $fixedDataRequirement);
		$this->fixedDataRequirement = $fixedDataRequirement;
		return $this;
	}

	/**
	 * A expression that is evaluated in a specified context and returns a value. The
	 * context of use of the expression must specify the context in which the
	 * expression is evaluated, and how the result of the expression is used.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRExpression
	 */
	public function getFixedExpression(): ?FHIRExpression
	{
		return $this->fixedExpression;
	}

	/**
	 * A expression that is evaluated in a specified context and returns a value. The
	 * context of use of the expression must specify the context in which the
	 * expression is evaluated, and how the result of the expression is used.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRExpression $fixedExpression
	 * @return static
	 */
	public function setFixedExpression(?FHIRExpression $fixedExpression = null): object
	{
		$this->_trackValueSet($this->fixedExpression, $fixedExpression);
		$this->fixedExpression = $fixedExpression;
		return $this;
	}

	/**
	 * The parameters to the module. This collection specifies both the input and
	 * output parameters. Input parameters are provided by the caller as part of the
	 * $evaluate operation. Output parameters are included in the GuidanceResponse.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRParameterDefinition
	 */
	public function getFixedParameterDefinition(): ?FHIRParameterDefinition
	{
		return $this->fixedParameterDefinition;
	}

	/**
	 * The parameters to the module. This collection specifies both the input and
	 * output parameters. Input parameters are provided by the caller as part of the
	 * $evaluate operation. Output parameters are included in the GuidanceResponse.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRParameterDefinition $fixedParameterDefinition
	 * @return static
	 */
	public function setFixedParameterDefinition(
		?FHIRParameterDefinition $fixedParameterDefinition = null,
	): object {
		$this->_trackValueSet($this->fixedParameterDefinition, $fixedParameterDefinition);
		$this->fixedParameterDefinition = $fixedParameterDefinition;
		return $this;
	}

	/**
	 * Related artifacts such as additional documentation, justification, or
	 * bibliographic references.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRRelatedArtifact
	 */
	public function getFixedRelatedArtifact(): ?FHIRRelatedArtifact
	{
		return $this->fixedRelatedArtifact;
	}

	/**
	 * Related artifacts such as additional documentation, justification, or
	 * bibliographic references.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRRelatedArtifact $fixedRelatedArtifact
	 * @return static
	 */
	public function setFixedRelatedArtifact(
		?FHIRRelatedArtifact $fixedRelatedArtifact = null,
	): object {
		$this->_trackValueSet($this->fixedRelatedArtifact, $fixedRelatedArtifact);
		$this->fixedRelatedArtifact = $fixedRelatedArtifact;
		return $this;
	}

	/**
	 * A description of a triggering event. Triggering events can be named events, data
	 * events, or periodic, as determined by the type element.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRTriggerDefinition
	 */
	public function getFixedTriggerDefinition(): ?FHIRTriggerDefinition
	{
		return $this->fixedTriggerDefinition;
	}

	/**
	 * A description of a triggering event. Triggering events can be named events, data
	 * events, or periodic, as determined by the type element.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRTriggerDefinition $fixedTriggerDefinition
	 * @return static
	 */
	public function setFixedTriggerDefinition(
		?FHIRTriggerDefinition $fixedTriggerDefinition = null,
	): object {
		$this->_trackValueSet($this->fixedTriggerDefinition, $fixedTriggerDefinition);
		$this->fixedTriggerDefinition = $fixedTriggerDefinition;
		return $this;
	}

	/**
	 * Specifies clinical/business/etc. metadata that can be used to retrieve, index
	 * and/or categorize an artifact. This metadata can either be specific to the
	 * applicable population (e.g., age category, DRG) or the specific context of care
	 * (e.g., venue, care setting, provider of care).
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRUsageContext
	 */
	public function getFixedUsageContext(): ?FHIRUsageContext
	{
		return $this->fixedUsageContext;
	}

	/**
	 * Specifies clinical/business/etc. metadata that can be used to retrieve, index
	 * and/or categorize an artifact. This metadata can either be specific to the
	 * applicable population (e.g., age category, DRG) or the specific context of care
	 * (e.g., venue, care setting, provider of care).
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRUsageContext $fixedUsageContext
	 * @return static
	 */
	public function setFixedUsageContext(?FHIRUsageContext $fixedUsageContext = null): object
	{
		$this->_trackValueSet($this->fixedUsageContext, $fixedUsageContext);
		$this->fixedUsageContext = $fixedUsageContext;
		return $this;
	}

	/**
	 * Indicates how the medication is/was taken or should be taken by the patient.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRDosage
	 */
	public function getFixedDosage(): ?FHIRDosage
	{
		return $this->fixedDosage;
	}

	/**
	 * Indicates how the medication is/was taken or should be taken by the patient.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRDosage $fixedDosage
	 * @return static
	 */
	public function setFixedDosage(?FHIRDosage $fixedDosage = null): object
	{
		$this->_trackValueSet($this->fixedDosage, $fixedDosage);
		$this->fixedDosage = $fixedDosage;
		return $this;
	}

	/**
	 * The metadata about a resource. This is content in the resource that is
	 * maintained by the infrastructure. Changes to the content might not always be
	 * associated with version changes to the resource.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRMeta
	 */
	public function getFixedMeta(): ?FHIRMeta
	{
		return $this->fixedMeta;
	}

	/**
	 * The metadata about a resource. This is content in the resource that is
	 * maintained by the infrastructure. Changes to the content might not always be
	 * associated with version changes to the resource.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRMeta $fixedMeta
	 * @return static
	 */
	public function setFixedMeta(?FHIRMeta $fixedMeta = null): object
	{
		$this->_trackValueSet($this->fixedMeta, $fixedMeta);
		$this->fixedMeta = $fixedMeta;
		return $this;
	}

	/**
	 * A stream of bytes
	 * A stream of bytes, base64 encoded
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRBase64BinaryPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRBase64Binary
	 */
	public function getPatternBase64Binary(): ?FHIRBase64Binary
	{
		return $this->patternBase64Binary;
	}

	/**
	 * A stream of bytes
	 * A stream of bytes, base64 encoded
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRBase64BinaryPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRBase64Binary $patternBase64Binary
	 * @return static
	 */
	public function setPatternBase64Binary($patternBase64Binary = null): object
	{
		if (null !== $patternBase64Binary && !($patternBase64Binary instanceof FHIRBase64Binary)) {
			$patternBase64Binary = new FHIRBase64Binary($patternBase64Binary);
		}
		$this->_trackValueSet($this->patternBase64Binary, $patternBase64Binary);
		$this->patternBase64Binary = $patternBase64Binary;
		return $this;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRBooleanPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRBoolean
	 */
	public function getPatternBoolean(): ?FHIRBoolean
	{
		return $this->patternBoolean;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRBooleanPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRBoolean $patternBoolean
	 * @return static
	 */
	public function setPatternBoolean($patternBoolean = null): object
	{
		if (null !== $patternBoolean && !($patternBoolean instanceof FHIRBoolean)) {
			$patternBoolean = new FHIRBoolean($patternBoolean);
		}
		$this->_trackValueSet($this->patternBoolean, $patternBoolean);
		$this->patternBoolean = $patternBoolean;
		return $this;
	}

	/**
	 * A URI that is a reference to a canonical URL on a FHIR resource
	 * see [Canonical References](references.html#canonical)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRCanonicalPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRCanonical
	 */
	public function getPatternCanonical(): ?FHIRCanonical
	{
		return $this->patternCanonical;
	}

	/**
	 * A URI that is a reference to a canonical URL on a FHIR resource
	 * see [Canonical References](references.html#canonical)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRCanonicalPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRCanonical $patternCanonical
	 * @return static
	 */
	public function setPatternCanonical($patternCanonical = null): object
	{
		if (null !== $patternCanonical && !($patternCanonical instanceof FHIRCanonical)) {
			$patternCanonical = new FHIRCanonical($patternCanonical);
		}
		$this->_trackValueSet($this->patternCanonical, $patternCanonical);
		$this->patternCanonical = $patternCanonical;
		return $this;
	}

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRCodePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRCode
	 */
	public function getPatternCode(): ?FHIRCode
	{
		return $this->patternCode;
	}

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRCodePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRCode $patternCode
	 * @return static
	 */
	public function setPatternCode($patternCode = null): object
	{
		if (null !== $patternCode && !($patternCode instanceof FHIRCode)) {
			$patternCode = new FHIRCode($patternCode);
		}
		$this->_trackValueSet($this->patternCode, $patternCode);
		$this->patternCode = $patternCode;
		return $this;
	}

	/**
	 * A date or partial date (e.g. just year or year + month). There is no time zone.
	 * The format is a union of the schema types gYear, gYearMonth and date. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRDatePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRDate
	 */
	public function getPatternDate(): ?FHIRDate
	{
		return $this->patternDate;
	}

	/**
	 * A date or partial date (e.g. just year or year + month). There is no time zone.
	 * The format is a union of the schema types gYear, gYearMonth and date. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRDatePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRDate $patternDate
	 * @return static
	 */
	public function setPatternDate($patternDate = null): object
	{
		if (null !== $patternDate && !($patternDate instanceof FHIRDate)) {
			$patternDate = new FHIRDate($patternDate);
		}
		$this->_trackValueSet($this->patternDate, $patternDate);
		$this->patternDate = $patternDate;
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
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRDateTimePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRDateTime
	 */
	public function getPatternDateTime(): ?FHIRDateTime
	{
		return $this->patternDateTime;
	}

	/**
	 * A date, date-time or partial date (e.g. just year or year + month). If hours and
	 * minutes are specified, a time zone SHALL be populated. The format is a union of
	 * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
	 * due to schema type constraints but may be zero-filled and may be ignored. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRDateTimePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRDateTime $patternDateTime
	 * @return static
	 */
	public function setPatternDateTime($patternDateTime = null): object
	{
		if (null !== $patternDateTime && !($patternDateTime instanceof FHIRDateTime)) {
			$patternDateTime = new FHIRDateTime($patternDateTime);
		}
		$this->_trackValueSet($this->patternDateTime, $patternDateTime);
		$this->patternDateTime = $patternDateTime;
		return $this;
	}

	/**
	 * A rational number with implicit precision
	 * Do not use an IEEE type floating point type, instead use something that works
	 * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRDecimalPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRDecimal
	 */
	public function getPatternDecimal(): ?FHIRDecimal
	{
		return $this->patternDecimal;
	}

	/**
	 * A rational number with implicit precision
	 * Do not use an IEEE type floating point type, instead use something that works
	 * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRDecimalPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRDecimal $patternDecimal
	 * @return static
	 */
	public function setPatternDecimal($patternDecimal = null): object
	{
		if (null !== $patternDecimal && !($patternDecimal instanceof FHIRDecimal)) {
			$patternDecimal = new FHIRDecimal($patternDecimal);
		}
		$this->_trackValueSet($this->patternDecimal, $patternDecimal);
		$this->patternDecimal = $patternDecimal;
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
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRIdPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRId
	 */
	public function getPatternId(): ?FHIRId
	{
		return $this->patternId;
	}

	/**
	 * Any combination of letters, numerals, "-" and ".", with a length limit of 64
	 * characters. (This might be an integer, an unprefixed OID, UUID or any other
	 * identifier pattern that meets these constraints.) Ids are case-insensitive.
	 * RFC 4122
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRIdPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRId $patternId
	 * @return static
	 */
	public function setPatternId($patternId = null): object
	{
		if (null !== $patternId && !($patternId instanceof FHIRId)) {
			$patternId = new FHIRId($patternId);
		}
		$this->_trackValueSet($this->patternId, $patternId);
		$this->patternId = $patternId;
		return $this;
	}

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for where precisely observed times are required,
	 * typically system logs etc., and not human-reported times - for them, see date
	 * and dateTime (which can be as precise as instant, but is not required to be)
	 * below. Time zone is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRInstantPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRInstant
	 */
	public function getPatternInstant(): ?FHIRInstant
	{
		return $this->patternInstant;
	}

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for where precisely observed times are required,
	 * typically system logs etc., and not human-reported times - for them, see date
	 * and dateTime (which can be as precise as instant, but is not required to be)
	 * below. Time zone is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRInstantPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRInstant $patternInstant
	 * @return static
	 */
	public function setPatternInstant($patternInstant = null): object
	{
		if (null !== $patternInstant && !($patternInstant instanceof FHIRInstant)) {
			$patternInstant = new FHIRInstant($patternInstant);
		}
		$this->_trackValueSet($this->patternInstant, $patternInstant);
		$this->patternInstant = $patternInstant;
		return $this;
	}

	/**
	 * A whole number
	 * 32 bit number; for values larger than this, use decimal
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRIntegerPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRInteger
	 */
	public function getPatternInteger(): ?FHIRInteger
	{
		return $this->patternInteger;
	}

	/**
	 * A whole number
	 * 32 bit number; for values larger than this, use decimal
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRIntegerPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRInteger $patternInteger
	 * @return static
	 */
	public function setPatternInteger($patternInteger = null): object
	{
		if (null !== $patternInteger && !($patternInteger instanceof FHIRInteger)) {
			$patternInteger = new FHIRInteger($patternInteger);
		}
		$this->_trackValueSet($this->patternInteger, $patternInteger);
		$this->patternInteger = $patternInteger;
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
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRMarkdownPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRMarkdown
	 */
	public function getPatternMarkdown(): ?FHIRMarkdown
	{
		return $this->patternMarkdown;
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
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRMarkdownPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRMarkdown $patternMarkdown
	 * @return static
	 */
	public function setPatternMarkdown($patternMarkdown = null): object
	{
		if (null !== $patternMarkdown && !($patternMarkdown instanceof FHIRMarkdown)) {
			$patternMarkdown = new FHIRMarkdown($patternMarkdown);
		}
		$this->_trackValueSet($this->patternMarkdown, $patternMarkdown);
		$this->patternMarkdown = $patternMarkdown;
		return $this;
	}

	/**
	 * An OID represented as a URI
	 * RFC 3001. See also ISO/IEC 8824:1990 €
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIROidPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIROid
	 */
	public function getPatternOid(): ?FHIROid
	{
		return $this->patternOid;
	}

	/**
	 * An OID represented as a URI
	 * RFC 3001. See also ISO/IEC 8824:1990 €
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIROidPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIROid $patternOid
	 * @return static
	 */
	public function setPatternOid($patternOid = null): object
	{
		if (null !== $patternOid && !($patternOid instanceof FHIROid)) {
			$patternOid = new FHIROid($patternOid);
		}
		$this->_trackValueSet($this->patternOid, $patternOid);
		$this->patternOid = $patternOid;
		return $this;
	}

	/**
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRPositiveInt
	 */
	public function getPatternPositiveInt(): ?FHIRPositiveInt
	{
		return $this->patternPositiveInt;
	}

	/**
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRPositiveInt $patternPositiveInt
	 * @return static
	 */
	public function setPatternPositiveInt($patternPositiveInt = null): object
	{
		if (null !== $patternPositiveInt && !($patternPositiveInt instanceof FHIRPositiveInt)) {
			$patternPositiveInt = new FHIRPositiveInt($patternPositiveInt);
		}
		$this->_trackValueSet($this->patternPositiveInt, $patternPositiveInt);
		$this->patternPositiveInt = $patternPositiveInt;
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings SHALL NOT exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRStringPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRString
	 */
	public function getPatternString(): ?FHIRString
	{
		return $this->patternString;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings SHALL NOT exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRStringPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRString $patternString
	 * @return static
	 */
	public function setPatternString($patternString = null): object
	{
		if (null !== $patternString && !($patternString instanceof FHIRString)) {
			$patternString = new FHIRString($patternString);
		}
		$this->_trackValueSet($this->patternString, $patternString);
		$this->patternString = $patternString;
		return $this;
	}

	/**
	 * A time during the day, with no date specified
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRTimePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRTime
	 */
	public function getPatternTime(): ?FHIRTime
	{
		return $this->patternTime;
	}

	/**
	 * A time during the day, with no date specified
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRTimePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRTime $patternTime
	 * @return static
	 */
	public function setPatternTime($patternTime = null): object
	{
		if (null !== $patternTime && !($patternTime instanceof FHIRTime)) {
			$patternTime = new FHIRTime($patternTime);
		}
		$this->_trackValueSet($this->patternTime, $patternTime);
		$this->patternTime = $patternTime;
		return $this;
	}

	/**
	 * An integer with a value that is not negative (e.g. >= 0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRUnsignedInt
	 */
	public function getPatternUnsignedInt(): ?FHIRUnsignedInt
	{
		return $this->patternUnsignedInt;
	}

	/**
	 * An integer with a value that is not negative (e.g. >= 0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRUnsignedInt $patternUnsignedInt
	 * @return static
	 */
	public function setPatternUnsignedInt($patternUnsignedInt = null): object
	{
		if (null !== $patternUnsignedInt && !($patternUnsignedInt instanceof FHIRUnsignedInt)) {
			$patternUnsignedInt = new FHIRUnsignedInt($patternUnsignedInt);
		}
		$this->_trackValueSet($this->patternUnsignedInt, $patternUnsignedInt);
		$this->patternUnsignedInt = $patternUnsignedInt;
		return $this;
	}

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRUriPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRUri
	 */
	public function getPatternUri(): ?FHIRUri
	{
		return $this->patternUri;
	}

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRUriPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRUri $patternUri
	 * @return static
	 */
	public function setPatternUri($patternUri = null): object
	{
		if (null !== $patternUri && !($patternUri instanceof FHIRUri)) {
			$patternUri = new FHIRUri($patternUri);
		}
		$this->_trackValueSet($this->patternUri, $patternUri);
		$this->patternUri = $patternUri;
		return $this;
	}

	/**
	 * A URI that is a literal reference
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRUrlPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRUrl
	 */
	public function getPatternUrl(): ?FHIRUrl
	{
		return $this->patternUrl;
	}

	/**
	 * A URI that is a literal reference
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRUrlPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRUrl $patternUrl
	 * @return static
	 */
	public function setPatternUrl($patternUrl = null): object
	{
		if (null !== $patternUrl && !($patternUrl instanceof FHIRUrl)) {
			$patternUrl = new FHIRUrl($patternUrl);
		}
		$this->_trackValueSet($this->patternUrl, $patternUrl);
		$this->patternUrl = $patternUrl;
		return $this;
	}

	/**
	 * A UUID, represented as a URI
	 * See The Open Group, CDE 1.1 Remote Procedure Call specification, Appendix A.
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRUuidPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRUuid
	 */
	public function getPatternUuid(): ?FHIRUuid
	{
		return $this->patternUuid;
	}

	/**
	 * A UUID, represented as a URI
	 * See The Open Group, CDE 1.1 Remote Procedure Call specification, Appendix A.
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRUuidPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRUuid $patternUuid
	 * @return static
	 */
	public function setPatternUuid($patternUuid = null): object
	{
		if (null !== $patternUuid && !($patternUuid instanceof FHIRUuid)) {
			$patternUuid = new FHIRUuid($patternUuid);
		}
		$this->_trackValueSet($this->patternUuid, $patternUuid);
		$this->patternUuid = $patternUuid;
		return $this;
	}

	/**
	 * An address expressed using postal conventions (as opposed to GPS or other
	 * location definition formats). This data type may be used to convey addresses for
	 * use in delivering mail as well as for visiting locations which might not be
	 * valid for mail delivery. There are a variety of postal address formats defined
	 * around the world.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRAddress
	 */
	public function getPatternAddress(): ?FHIRAddress
	{
		return $this->patternAddress;
	}

	/**
	 * An address expressed using postal conventions (as opposed to GPS or other
	 * location definition formats). This data type may be used to convey addresses for
	 * use in delivering mail as well as for visiting locations which might not be
	 * valid for mail delivery. There are a variety of postal address formats defined
	 * around the world.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRAddress $patternAddress
	 * @return static
	 */
	public function setPatternAddress(?FHIRAddress $patternAddress = null): object
	{
		$this->_trackValueSet($this->patternAddress, $patternAddress);
		$this->patternAddress = $patternAddress;
		return $this;
	}

	/**
	 * A duration of time during which an organism (or a process) has existed.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity\FHIRAge
	 */
	public function getPatternAge(): ?FHIRAge
	{
		return $this->patternAge;
	}

	/**
	 * A duration of time during which an organism (or a process) has existed.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity\FHIRAge $patternAge
	 * @return static
	 */
	public function setPatternAge(?FHIRAge $patternAge = null): object
	{
		$this->_trackValueSet($this->patternAge, $patternAge);
		$this->patternAge = $patternAge;
		return $this;
	}

	/**
	 * A text note which also contains information about who made the statement and
	 * when.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRAnnotation
	 */
	public function getPatternAnnotation(): ?FHIRAnnotation
	{
		return $this->patternAnnotation;
	}

	/**
	 * A text note which also contains information about who made the statement and
	 * when.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRAnnotation $patternAnnotation
	 * @return static
	 */
	public function setPatternAnnotation(?FHIRAnnotation $patternAnnotation = null): object
	{
		$this->_trackValueSet($this->patternAnnotation, $patternAnnotation);
		$this->patternAnnotation = $patternAnnotation;
		return $this;
	}

	/**
	 * For referring to data content defined in other formats.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRAttachment
	 */
	public function getPatternAttachment(): ?FHIRAttachment
	{
		return $this->patternAttachment;
	}

	/**
	 * For referring to data content defined in other formats.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRAttachment $patternAttachment
	 * @return static
	 */
	public function setPatternAttachment(?FHIRAttachment $patternAttachment = null): object
	{
		$this->_trackValueSet($this->patternAttachment, $patternAttachment);
		$this->patternAttachment = $patternAttachment;
		return $this;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRCodeableConcept
	 */
	public function getPatternCodeableConcept(): ?FHIRCodeableConcept
	{
		return $this->patternCodeableConcept;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRCodeableConcept $patternCodeableConcept
	 * @return static
	 */
	public function setPatternCodeableConcept(
		?FHIRCodeableConcept $patternCodeableConcept = null,
	): object {
		$this->_trackValueSet($this->patternCodeableConcept, $patternCodeableConcept);
		$this->patternCodeableConcept = $patternCodeableConcept;
		return $this;
	}

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRCoding
	 */
	public function getPatternCoding(): ?FHIRCoding
	{
		return $this->patternCoding;
	}

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRCoding $patternCoding
	 * @return static
	 */
	public function setPatternCoding(?FHIRCoding $patternCoding = null): object
	{
		$this->_trackValueSet($this->patternCoding, $patternCoding);
		$this->patternCoding = $patternCoding;
		return $this;
	}

	/**
	 * Details for all kinds of technology mediated contact points for a person or
	 * organization, including telephone, email, etc.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRContactPoint
	 */
	public function getPatternContactPoint(): ?FHIRContactPoint
	{
		return $this->patternContactPoint;
	}

	/**
	 * Details for all kinds of technology mediated contact points for a person or
	 * organization, including telephone, email, etc.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRContactPoint $patternContactPoint
	 * @return static
	 */
	public function setPatternContactPoint(?FHIRContactPoint $patternContactPoint = null): object
	{
		$this->_trackValueSet($this->patternContactPoint, $patternContactPoint);
		$this->patternContactPoint = $patternContactPoint;
		return $this;
	}

	/**
	 * A measured amount (or an amount that can potentially be measured). Note that
	 * measured amounts include amounts that are not precisely quantified, including
	 * amounts involving arbitrary units and floating currencies.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity\FHIRCount
	 */
	public function getPatternCount(): ?FHIRCount
	{
		return $this->patternCount;
	}

	/**
	 * A measured amount (or an amount that can potentially be measured). Note that
	 * measured amounts include amounts that are not precisely quantified, including
	 * amounts involving arbitrary units and floating currencies.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity\FHIRCount $patternCount
	 * @return static
	 */
	public function setPatternCount(?FHIRCount $patternCount = null): object
	{
		$this->_trackValueSet($this->patternCount, $patternCount);
		$this->patternCount = $patternCount;
		return $this;
	}

	/**
	 * A length - a value with a unit that is a physical distance.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity\FHIRDistance
	 */
	public function getPatternDistance(): ?FHIRDistance
	{
		return $this->patternDistance;
	}

	/**
	 * A length - a value with a unit that is a physical distance.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity\FHIRDistance $patternDistance
	 * @return static
	 */
	public function setPatternDistance(?FHIRDistance $patternDistance = null): object
	{
		$this->_trackValueSet($this->patternDistance, $patternDistance);
		$this->patternDistance = $patternDistance;
		return $this;
	}

	/**
	 * A length of time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity\FHIRDuration
	 */
	public function getPatternDuration(): ?FHIRDuration
	{
		return $this->patternDuration;
	}

	/**
	 * A length of time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity\FHIRDuration $patternDuration
	 * @return static
	 */
	public function setPatternDuration(?FHIRDuration $patternDuration = null): object
	{
		$this->_trackValueSet($this->patternDuration, $patternDuration);
		$this->patternDuration = $patternDuration;
		return $this;
	}

	/**
	 * A human's name with the ability to identify parts and usage.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRHumanName
	 */
	public function getPatternHumanName(): ?FHIRHumanName
	{
		return $this->patternHumanName;
	}

	/**
	 * A human's name with the ability to identify parts and usage.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRHumanName $patternHumanName
	 * @return static
	 */
	public function setPatternHumanName(?FHIRHumanName $patternHumanName = null): object
	{
		$this->_trackValueSet($this->patternHumanName, $patternHumanName);
		$this->patternHumanName = $patternHumanName;
		return $this;
	}

	/**
	 * An identifier - identifies some entity uniquely and unambiguously. Typically
	 * this is used for business identifiers.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRIdentifier
	 */
	public function getPatternIdentifier(): ?FHIRIdentifier
	{
		return $this->patternIdentifier;
	}

	/**
	 * An identifier - identifies some entity uniquely and unambiguously. Typically
	 * this is used for business identifiers.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRIdentifier $patternIdentifier
	 * @return static
	 */
	public function setPatternIdentifier(?FHIRIdentifier $patternIdentifier = null): object
	{
		$this->_trackValueSet($this->patternIdentifier, $patternIdentifier);
		$this->patternIdentifier = $patternIdentifier;
		return $this;
	}

	/**
	 * An amount of economic utility in some recognized currency.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRMoney
	 */
	public function getPatternMoney(): ?FHIRMoney
	{
		return $this->patternMoney;
	}

	/**
	 * An amount of economic utility in some recognized currency.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRMoney $patternMoney
	 * @return static
	 */
	public function setPatternMoney(?FHIRMoney $patternMoney = null): object
	{
		$this->_trackValueSet($this->patternMoney, $patternMoney);
		$this->patternMoney = $patternMoney;
		return $this;
	}

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRPeriod
	 */
	public function getPatternPeriod(): ?FHIRPeriod
	{
		return $this->patternPeriod;
	}

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRPeriod $patternPeriod
	 * @return static
	 */
	public function setPatternPeriod(?FHIRPeriod $patternPeriod = null): object
	{
		$this->_trackValueSet($this->patternPeriod, $patternPeriod);
		$this->patternPeriod = $patternPeriod;
		return $this;
	}

	/**
	 * A measured amount (or an amount that can potentially be measured). Note that
	 * measured amounts include amounts that are not precisely quantified, including
	 * amounts involving arbitrary units and floating currencies.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity
	 */
	public function getPatternQuantity(): ?FHIRQuantity
	{
		return $this->patternQuantity;
	}

	/**
	 * A measured amount (or an amount that can potentially be measured). Note that
	 * measured amounts include amounts that are not precisely quantified, including
	 * amounts involving arbitrary units and floating currencies.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity $patternQuantity
	 * @return static
	 */
	public function setPatternQuantity(?FHIRQuantity $patternQuantity = null): object
	{
		$this->_trackValueSet($this->patternQuantity, $patternQuantity);
		$this->patternQuantity = $patternQuantity;
		return $this;
	}

	/**
	 * A set of ordered Quantities defined by a low and high limit.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRRange
	 */
	public function getPatternRange(): ?FHIRRange
	{
		return $this->patternRange;
	}

	/**
	 * A set of ordered Quantities defined by a low and high limit.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRRange $patternRange
	 * @return static
	 */
	public function setPatternRange(?FHIRRange $patternRange = null): object
	{
		$this->_trackValueSet($this->patternRange, $patternRange);
		$this->patternRange = $patternRange;
		return $this;
	}

	/**
	 * A relationship of two Quantity values - expressed as a numerator and a
	 * denominator.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRRatio
	 */
	public function getPatternRatio(): ?FHIRRatio
	{
		return $this->patternRatio;
	}

	/**
	 * A relationship of two Quantity values - expressed as a numerator and a
	 * denominator.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRRatio $patternRatio
	 * @return static
	 */
	public function setPatternRatio(?FHIRRatio $patternRatio = null): object
	{
		$this->_trackValueSet($this->patternRatio, $patternRatio);
		$this->patternRatio = $patternRatio;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRReference
	 */
	public function getPatternReference(): ?FHIRReference
	{
		return $this->patternReference;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRReference $patternReference
	 * @return static
	 */
	public function setPatternReference(?FHIRReference $patternReference = null): object
	{
		$this->_trackValueSet($this->patternReference, $patternReference);
		$this->patternReference = $patternReference;
		return $this;
	}

	/**
	 * A series of measurements taken by a device, with upper and lower limits. There
	 * may be more than one dimension in the data.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRSampledData
	 */
	public function getPatternSampledData(): ?FHIRSampledData
	{
		return $this->patternSampledData;
	}

	/**
	 * A series of measurements taken by a device, with upper and lower limits. There
	 * may be more than one dimension in the data.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRSampledData $patternSampledData
	 * @return static
	 */
	public function setPatternSampledData(?FHIRSampledData $patternSampledData = null): object
	{
		$this->_trackValueSet($this->patternSampledData, $patternSampledData);
		$this->patternSampledData = $patternSampledData;
		return $this;
	}

	/**
	 * A signature along with supporting context. The signature may be a digital
	 * signature that is cryptographic in nature, or some other signature acceptable to
	 * the domain. This other signature may be as simple as a graphical image
	 * representing a hand-written signature, or a signature ceremony Different
	 * signature approaches have different utilities.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRSignature
	 */
	public function getPatternSignature(): ?FHIRSignature
	{
		return $this->patternSignature;
	}

	/**
	 * A signature along with supporting context. The signature may be a digital
	 * signature that is cryptographic in nature, or some other signature acceptable to
	 * the domain. This other signature may be as simple as a graphical image
	 * representing a hand-written signature, or a signature ceremony Different
	 * signature approaches have different utilities.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRSignature $patternSignature
	 * @return static
	 */
	public function setPatternSignature(?FHIRSignature $patternSignature = null): object
	{
		$this->_trackValueSet($this->patternSignature, $patternSignature);
		$this->patternSignature = $patternSignature;
		return $this;
	}

	/**
	 * Specifies an event that may occur multiple times. Timing schedules are used to
	 * record when things are planned, expected or requested to occur. The most common
	 * usage is in dosage instructions for medications. They are also used when
	 * planning care of various kinds, and may be used for reporting the schedule to
	 * which past regular activities were carried out.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRTiming
	 */
	public function getPatternTiming(): ?FHIRTiming
	{
		return $this->patternTiming;
	}

	/**
	 * Specifies an event that may occur multiple times. Timing schedules are used to
	 * record when things are planned, expected or requested to occur. The most common
	 * usage is in dosage instructions for medications. They are also used when
	 * planning care of various kinds, and may be used for reporting the schedule to
	 * which past regular activities were carried out.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRTiming $patternTiming
	 * @return static
	 */
	public function setPatternTiming(?FHIRTiming $patternTiming = null): object
	{
		$this->_trackValueSet($this->patternTiming, $patternTiming);
		$this->patternTiming = $patternTiming;
		return $this;
	}

	/**
	 * Specifies contact information for a person or organization.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRContactDetail
	 */
	public function getPatternContactDetail(): ?FHIRContactDetail
	{
		return $this->patternContactDetail;
	}

	/**
	 * Specifies contact information for a person or organization.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRContactDetail $patternContactDetail
	 * @return static
	 */
	public function setPatternContactDetail(?FHIRContactDetail $patternContactDetail = null): object
	{
		$this->_trackValueSet($this->patternContactDetail, $patternContactDetail);
		$this->patternContactDetail = $patternContactDetail;
		return $this;
	}

	/**
	 * A contributor to the content of a knowledge asset, including authors, editors,
	 * reviewers, and endorsers.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRContributor
	 */
	public function getPatternContributor(): ?FHIRContributor
	{
		return $this->patternContributor;
	}

	/**
	 * A contributor to the content of a knowledge asset, including authors, editors,
	 * reviewers, and endorsers.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRContributor $patternContributor
	 * @return static
	 */
	public function setPatternContributor(?FHIRContributor $patternContributor = null): object
	{
		$this->_trackValueSet($this->patternContributor, $patternContributor);
		$this->patternContributor = $patternContributor;
		return $this;
	}

	/**
	 * Describes a required data item for evaluation in terms of the type of data, and
	 * optional code or date-based filters of the data.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRDataRequirement
	 */
	public function getPatternDataRequirement(): ?FHIRDataRequirement
	{
		return $this->patternDataRequirement;
	}

	/**
	 * Describes a required data item for evaluation in terms of the type of data, and
	 * optional code or date-based filters of the data.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRDataRequirement $patternDataRequirement
	 * @return static
	 */
	public function setPatternDataRequirement(
		?FHIRDataRequirement $patternDataRequirement = null,
	): object {
		$this->_trackValueSet($this->patternDataRequirement, $patternDataRequirement);
		$this->patternDataRequirement = $patternDataRequirement;
		return $this;
	}

	/**
	 * A expression that is evaluated in a specified context and returns a value. The
	 * context of use of the expression must specify the context in which the
	 * expression is evaluated, and how the result of the expression is used.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRExpression
	 */
	public function getPatternExpression(): ?FHIRExpression
	{
		return $this->patternExpression;
	}

	/**
	 * A expression that is evaluated in a specified context and returns a value. The
	 * context of use of the expression must specify the context in which the
	 * expression is evaluated, and how the result of the expression is used.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRExpression $patternExpression
	 * @return static
	 */
	public function setPatternExpression(?FHIRExpression $patternExpression = null): object
	{
		$this->_trackValueSet($this->patternExpression, $patternExpression);
		$this->patternExpression = $patternExpression;
		return $this;
	}

	/**
	 * The parameters to the module. This collection specifies both the input and
	 * output parameters. Input parameters are provided by the caller as part of the
	 * $evaluate operation. Output parameters are included in the GuidanceResponse.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRParameterDefinition
	 */
	public function getPatternParameterDefinition(): ?FHIRParameterDefinition
	{
		return $this->patternParameterDefinition;
	}

	/**
	 * The parameters to the module. This collection specifies both the input and
	 * output parameters. Input parameters are provided by the caller as part of the
	 * $evaluate operation. Output parameters are included in the GuidanceResponse.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRParameterDefinition $patternParameterDefinition
	 * @return static
	 */
	public function setPatternParameterDefinition(
		?FHIRParameterDefinition $patternParameterDefinition = null,
	): object {
		$this->_trackValueSet($this->patternParameterDefinition, $patternParameterDefinition);
		$this->patternParameterDefinition = $patternParameterDefinition;
		return $this;
	}

	/**
	 * Related artifacts such as additional documentation, justification, or
	 * bibliographic references.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRRelatedArtifact
	 */
	public function getPatternRelatedArtifact(): ?FHIRRelatedArtifact
	{
		return $this->patternRelatedArtifact;
	}

	/**
	 * Related artifacts such as additional documentation, justification, or
	 * bibliographic references.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRRelatedArtifact $patternRelatedArtifact
	 * @return static
	 */
	public function setPatternRelatedArtifact(
		?FHIRRelatedArtifact $patternRelatedArtifact = null,
	): object {
		$this->_trackValueSet($this->patternRelatedArtifact, $patternRelatedArtifact);
		$this->patternRelatedArtifact = $patternRelatedArtifact;
		return $this;
	}

	/**
	 * A description of a triggering event. Triggering events can be named events, data
	 * events, or periodic, as determined by the type element.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRTriggerDefinition
	 */
	public function getPatternTriggerDefinition(): ?FHIRTriggerDefinition
	{
		return $this->patternTriggerDefinition;
	}

	/**
	 * A description of a triggering event. Triggering events can be named events, data
	 * events, or periodic, as determined by the type element.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRTriggerDefinition $patternTriggerDefinition
	 * @return static
	 */
	public function setPatternTriggerDefinition(
		?FHIRTriggerDefinition $patternTriggerDefinition = null,
	): object {
		$this->_trackValueSet($this->patternTriggerDefinition, $patternTriggerDefinition);
		$this->patternTriggerDefinition = $patternTriggerDefinition;
		return $this;
	}

	/**
	 * Specifies clinical/business/etc. metadata that can be used to retrieve, index
	 * and/or categorize an artifact. This metadata can either be specific to the
	 * applicable population (e.g., age category, DRG) or the specific context of care
	 * (e.g., venue, care setting, provider of care).
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRUsageContext
	 */
	public function getPatternUsageContext(): ?FHIRUsageContext
	{
		return $this->patternUsageContext;
	}

	/**
	 * Specifies clinical/business/etc. metadata that can be used to retrieve, index
	 * and/or categorize an artifact. This metadata can either be specific to the
	 * applicable population (e.g., age category, DRG) or the specific context of care
	 * (e.g., venue, care setting, provider of care).
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRUsageContext $patternUsageContext
	 * @return static
	 */
	public function setPatternUsageContext(?FHIRUsageContext $patternUsageContext = null): object
	{
		$this->_trackValueSet($this->patternUsageContext, $patternUsageContext);
		$this->patternUsageContext = $patternUsageContext;
		return $this;
	}

	/**
	 * Indicates how the medication is/was taken or should be taken by the patient.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRDosage
	 */
	public function getPatternDosage(): ?FHIRDosage
	{
		return $this->patternDosage;
	}

	/**
	 * Indicates how the medication is/was taken or should be taken by the patient.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRDosage $patternDosage
	 * @return static
	 */
	public function setPatternDosage(?FHIRDosage $patternDosage = null): object
	{
		$this->_trackValueSet($this->patternDosage, $patternDosage);
		$this->patternDosage = $patternDosage;
		return $this;
	}

	/**
	 * The metadata about a resource. This is content in the resource that is
	 * maintained by the infrastructure. Changes to the content might not always be
	 * associated with version changes to the resource.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRMeta
	 */
	public function getPatternMeta(): ?FHIRMeta
	{
		return $this->patternMeta;
	}

	/**
	 * The metadata about a resource. This is content in the resource that is
	 * maintained by the infrastructure. Changes to the content might not always be
	 * associated with version changes to the resource.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. When pattern[x] is used
	 * to constrain a primitive, it means that the value provided in the pattern[x]
	 * must match the instance value exactly. When pattern[x] is used to constrain an
	 * array, it means that each element provided in the pattern[x] array must
	 * (recursively) match at least one element from the instance array. When
	 * pattern[x] is used to constrain a complex object, it means that each property in
	 * the pattern must be present in the complex object, and its value must
	 * recursively match -- i.e., 1. If primitive: it must match exactly the pattern
	 * value 2. If a complex object: it must match (recursively) the pattern value 3.
	 * If an array: it must match (recursively) the pattern value.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRMeta $patternMeta
	 * @return static
	 */
	public function setPatternMeta(?FHIRMeta $patternMeta = null): object
	{
		$this->_trackValueSet($this->patternMeta, $patternMeta);
		$this->patternMeta = $patternMeta;
		return $this;
	}

	/**
	 * Captures constraints on each element within the resource, profile, or extension.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be found in the element.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionExample[]
	 */
	public function getExample(): ?array
	{
		return $this->example;
	}

	/**
	 * Captures constraints on each element within the resource, profile, or extension.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be found in the element.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionExample $example
	 * @return static
	 */
	public function addExample(?FHIRElementDefinitionExample $example = null): object
	{
		$this->_trackValueAdded();
		$this->example[] = $example;
		return $this;
	}

	/**
	 * Captures constraints on each element within the resource, profile, or extension.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be found in the element.
	 *
	 * @param \Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionExample[] $example
	 * @return static
	 */
	public function setExample(array $example = []): object
	{
		if ([] !== $this->example) {
			$this->_trackValuesRemoved(count($this->example));
			$this->example = [];
		}
		if ([] === $example) {
			return $this;
		}
		foreach ($example as $v) {
			if ($v instanceof FHIRElementDefinitionExample) {
				$this->addExample($v);
			} else {
				$this->addExample(new FHIRElementDefinitionExample($v));
			}
		}
		return $this;
	}

	/**
	 * A date or partial date (e.g. just year or year + month). There is no time zone.
	 * The format is a union of the schema types gYear, gYearMonth and date. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRDatePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRDate
	 */
	public function getMinValueDate(): ?FHIRDate
	{
		return $this->minValueDate;
	}

	/**
	 * A date or partial date (e.g. just year or year + month). There is no time zone.
	 * The format is a union of the schema types gYear, gYearMonth and date. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRDatePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRDate $minValueDate
	 * @return static
	 */
	public function setMinValueDate($minValueDate = null): object
	{
		if (null !== $minValueDate && !($minValueDate instanceof FHIRDate)) {
			$minValueDate = new FHIRDate($minValueDate);
		}
		$this->_trackValueSet($this->minValueDate, $minValueDate);
		$this->minValueDate = $minValueDate;
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
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRDateTimePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRDateTime
	 */
	public function getMinValueDateTime(): ?FHIRDateTime
	{
		return $this->minValueDateTime;
	}

	/**
	 * A date, date-time or partial date (e.g. just year or year + month). If hours and
	 * minutes are specified, a time zone SHALL be populated. The format is a union of
	 * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
	 * due to schema type constraints but may be zero-filled and may be ignored. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRDateTimePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRDateTime $minValueDateTime
	 * @return static
	 */
	public function setMinValueDateTime($minValueDateTime = null): object
	{
		if (null !== $minValueDateTime && !($minValueDateTime instanceof FHIRDateTime)) {
			$minValueDateTime = new FHIRDateTime($minValueDateTime);
		}
		$this->_trackValueSet($this->minValueDateTime, $minValueDateTime);
		$this->minValueDateTime = $minValueDateTime;
		return $this;
	}

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for where precisely observed times are required,
	 * typically system logs etc., and not human-reported times - for them, see date
	 * and dateTime (which can be as precise as instant, but is not required to be)
	 * below. Time zone is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRInstantPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRInstant
	 */
	public function getMinValueInstant(): ?FHIRInstant
	{
		return $this->minValueInstant;
	}

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for where precisely observed times are required,
	 * typically system logs etc., and not human-reported times - for them, see date
	 * and dateTime (which can be as precise as instant, but is not required to be)
	 * below. Time zone is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRInstantPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRInstant $minValueInstant
	 * @return static
	 */
	public function setMinValueInstant($minValueInstant = null): object
	{
		if (null !== $minValueInstant && !($minValueInstant instanceof FHIRInstant)) {
			$minValueInstant = new FHIRInstant($minValueInstant);
		}
		$this->_trackValueSet($this->minValueInstant, $minValueInstant);
		$this->minValueInstant = $minValueInstant;
		return $this;
	}

	/**
	 * A time during the day, with no date specified
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRTimePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRTime
	 */
	public function getMinValueTime(): ?FHIRTime
	{
		return $this->minValueTime;
	}

	/**
	 * A time during the day, with no date specified
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRTimePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRTime $minValueTime
	 * @return static
	 */
	public function setMinValueTime($minValueTime = null): object
	{
		if (null !== $minValueTime && !($minValueTime instanceof FHIRTime)) {
			$minValueTime = new FHIRTime($minValueTime);
		}
		$this->_trackValueSet($this->minValueTime, $minValueTime);
		$this->minValueTime = $minValueTime;
		return $this;
	}

	/**
	 * A rational number with implicit precision
	 * Do not use an IEEE type floating point type, instead use something that works
	 * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRDecimalPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRDecimal
	 */
	public function getMinValueDecimal(): ?FHIRDecimal
	{
		return $this->minValueDecimal;
	}

	/**
	 * A rational number with implicit precision
	 * Do not use an IEEE type floating point type, instead use something that works
	 * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRDecimalPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRDecimal $minValueDecimal
	 * @return static
	 */
	public function setMinValueDecimal($minValueDecimal = null): object
	{
		if (null !== $minValueDecimal && !($minValueDecimal instanceof FHIRDecimal)) {
			$minValueDecimal = new FHIRDecimal($minValueDecimal);
		}
		$this->_trackValueSet($this->minValueDecimal, $minValueDecimal);
		$this->minValueDecimal = $minValueDecimal;
		return $this;
	}

	/**
	 * A whole number
	 * 32 bit number; for values larger than this, use decimal
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRIntegerPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRInteger
	 */
	public function getMinValueInteger(): ?FHIRInteger
	{
		return $this->minValueInteger;
	}

	/**
	 * A whole number
	 * 32 bit number; for values larger than this, use decimal
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRIntegerPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRInteger $minValueInteger
	 * @return static
	 */
	public function setMinValueInteger($minValueInteger = null): object
	{
		if (null !== $minValueInteger && !($minValueInteger instanceof FHIRInteger)) {
			$minValueInteger = new FHIRInteger($minValueInteger);
		}
		$this->_trackValueSet($this->minValueInteger, $minValueInteger);
		$this->minValueInteger = $minValueInteger;
		return $this;
	}

	/**
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRPositiveInt
	 */
	public function getMinValuePositiveInt(): ?FHIRPositiveInt
	{
		return $this->minValuePositiveInt;
	}

	/**
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRPositiveInt $minValuePositiveInt
	 * @return static
	 */
	public function setMinValuePositiveInt($minValuePositiveInt = null): object
	{
		if (null !== $minValuePositiveInt && !($minValuePositiveInt instanceof FHIRPositiveInt)) {
			$minValuePositiveInt = new FHIRPositiveInt($minValuePositiveInt);
		}
		$this->_trackValueSet($this->minValuePositiveInt, $minValuePositiveInt);
		$this->minValuePositiveInt = $minValuePositiveInt;
		return $this;
	}

	/**
	 * An integer with a value that is not negative (e.g. >= 0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRUnsignedInt
	 */
	public function getMinValueUnsignedInt(): ?FHIRUnsignedInt
	{
		return $this->minValueUnsignedInt;
	}

	/**
	 * An integer with a value that is not negative (e.g. >= 0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRUnsignedInt $minValueUnsignedInt
	 * @return static
	 */
	public function setMinValueUnsignedInt($minValueUnsignedInt = null): object
	{
		if (null !== $minValueUnsignedInt && !($minValueUnsignedInt instanceof FHIRUnsignedInt)) {
			$minValueUnsignedInt = new FHIRUnsignedInt($minValueUnsignedInt);
		}
		$this->_trackValueSet($this->minValueUnsignedInt, $minValueUnsignedInt);
		$this->minValueUnsignedInt = $minValueUnsignedInt;
		return $this;
	}

	/**
	 * A measured amount (or an amount that can potentially be measured). Note that
	 * measured amounts include amounts that are not precisely quantified, including
	 * amounts involving arbitrary units and floating currencies.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity
	 */
	public function getMinValueQuantity(): ?FHIRQuantity
	{
		return $this->minValueQuantity;
	}

	/**
	 * A measured amount (or an amount that can potentially be measured). Note that
	 * measured amounts include amounts that are not precisely quantified, including
	 * amounts involving arbitrary units and floating currencies.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity $minValueQuantity
	 * @return static
	 */
	public function setMinValueQuantity(?FHIRQuantity $minValueQuantity = null): object
	{
		$this->_trackValueSet($this->minValueQuantity, $minValueQuantity);
		$this->minValueQuantity = $minValueQuantity;
		return $this;
	}

	/**
	 * A date or partial date (e.g. just year or year + month). There is no time zone.
	 * The format is a union of the schema types gYear, gYearMonth and date. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRDatePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRDate
	 */
	public function getMaxValueDate(): ?FHIRDate
	{
		return $this->maxValueDate;
	}

	/**
	 * A date or partial date (e.g. just year or year + month). There is no time zone.
	 * The format is a union of the schema types gYear, gYearMonth and date. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRDatePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRDate $maxValueDate
	 * @return static
	 */
	public function setMaxValueDate($maxValueDate = null): object
	{
		if (null !== $maxValueDate && !($maxValueDate instanceof FHIRDate)) {
			$maxValueDate = new FHIRDate($maxValueDate);
		}
		$this->_trackValueSet($this->maxValueDate, $maxValueDate);
		$this->maxValueDate = $maxValueDate;
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
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRDateTimePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRDateTime
	 */
	public function getMaxValueDateTime(): ?FHIRDateTime
	{
		return $this->maxValueDateTime;
	}

	/**
	 * A date, date-time or partial date (e.g. just year or year + month). If hours and
	 * minutes are specified, a time zone SHALL be populated. The format is a union of
	 * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
	 * due to schema type constraints but may be zero-filled and may be ignored. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRDateTimePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRDateTime $maxValueDateTime
	 * @return static
	 */
	public function setMaxValueDateTime($maxValueDateTime = null): object
	{
		if (null !== $maxValueDateTime && !($maxValueDateTime instanceof FHIRDateTime)) {
			$maxValueDateTime = new FHIRDateTime($maxValueDateTime);
		}
		$this->_trackValueSet($this->maxValueDateTime, $maxValueDateTime);
		$this->maxValueDateTime = $maxValueDateTime;
		return $this;
	}

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for where precisely observed times are required,
	 * typically system logs etc., and not human-reported times - for them, see date
	 * and dateTime (which can be as precise as instant, but is not required to be)
	 * below. Time zone is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRInstantPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRInstant
	 */
	public function getMaxValueInstant(): ?FHIRInstant
	{
		return $this->maxValueInstant;
	}

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for where precisely observed times are required,
	 * typically system logs etc., and not human-reported times - for them, see date
	 * and dateTime (which can be as precise as instant, but is not required to be)
	 * below. Time zone is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRInstantPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRInstant $maxValueInstant
	 * @return static
	 */
	public function setMaxValueInstant($maxValueInstant = null): object
	{
		if (null !== $maxValueInstant && !($maxValueInstant instanceof FHIRInstant)) {
			$maxValueInstant = new FHIRInstant($maxValueInstant);
		}
		$this->_trackValueSet($this->maxValueInstant, $maxValueInstant);
		$this->maxValueInstant = $maxValueInstant;
		return $this;
	}

	/**
	 * A time during the day, with no date specified
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRTimePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRTime
	 */
	public function getMaxValueTime(): ?FHIRTime
	{
		return $this->maxValueTime;
	}

	/**
	 * A time during the day, with no date specified
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRTimePrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRTime $maxValueTime
	 * @return static
	 */
	public function setMaxValueTime($maxValueTime = null): object
	{
		if (null !== $maxValueTime && !($maxValueTime instanceof FHIRTime)) {
			$maxValueTime = new FHIRTime($maxValueTime);
		}
		$this->_trackValueSet($this->maxValueTime, $maxValueTime);
		$this->maxValueTime = $maxValueTime;
		return $this;
	}

	/**
	 * A rational number with implicit precision
	 * Do not use an IEEE type floating point type, instead use something that works
	 * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRDecimalPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRDecimal
	 */
	public function getMaxValueDecimal(): ?FHIRDecimal
	{
		return $this->maxValueDecimal;
	}

	/**
	 * A rational number with implicit precision
	 * Do not use an IEEE type floating point type, instead use something that works
	 * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRDecimalPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRDecimal $maxValueDecimal
	 * @return static
	 */
	public function setMaxValueDecimal($maxValueDecimal = null): object
	{
		if (null !== $maxValueDecimal && !($maxValueDecimal instanceof FHIRDecimal)) {
			$maxValueDecimal = new FHIRDecimal($maxValueDecimal);
		}
		$this->_trackValueSet($this->maxValueDecimal, $maxValueDecimal);
		$this->maxValueDecimal = $maxValueDecimal;
		return $this;
	}

	/**
	 * A whole number
	 * 32 bit number; for values larger than this, use decimal
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRIntegerPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRInteger
	 */
	public function getMaxValueInteger(): ?FHIRInteger
	{
		return $this->maxValueInteger;
	}

	/**
	 * A whole number
	 * 32 bit number; for values larger than this, use decimal
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRIntegerPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRInteger $maxValueInteger
	 * @return static
	 */
	public function setMaxValueInteger($maxValueInteger = null): object
	{
		if (null !== $maxValueInteger && !($maxValueInteger instanceof FHIRInteger)) {
			$maxValueInteger = new FHIRInteger($maxValueInteger);
		}
		$this->_trackValueSet($this->maxValueInteger, $maxValueInteger);
		$this->maxValueInteger = $maxValueInteger;
		return $this;
	}

	/**
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRPositiveInt
	 */
	public function getMaxValuePositiveInt(): ?FHIRPositiveInt
	{
		return $this->maxValuePositiveInt;
	}

	/**
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRPositiveInt $maxValuePositiveInt
	 * @return static
	 */
	public function setMaxValuePositiveInt($maxValuePositiveInt = null): object
	{
		if (null !== $maxValuePositiveInt && !($maxValuePositiveInt instanceof FHIRPositiveInt)) {
			$maxValuePositiveInt = new FHIRPositiveInt($maxValuePositiveInt);
		}
		$this->_trackValueSet($this->maxValuePositiveInt, $maxValuePositiveInt);
		$this->maxValuePositiveInt = $maxValuePositiveInt;
		return $this;
	}

	/**
	 * An integer with a value that is not negative (e.g. >= 0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRUnsignedInt
	 */
	public function getMaxValueUnsignedInt(): ?FHIRUnsignedInt
	{
		return $this->maxValueUnsignedInt;
	}

	/**
	 * An integer with a value that is not negative (e.g. >= 0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRUnsignedInt $maxValueUnsignedInt
	 * @return static
	 */
	public function setMaxValueUnsignedInt($maxValueUnsignedInt = null): object
	{
		if (null !== $maxValueUnsignedInt && !($maxValueUnsignedInt instanceof FHIRUnsignedInt)) {
			$maxValueUnsignedInt = new FHIRUnsignedInt($maxValueUnsignedInt);
		}
		$this->_trackValueSet($this->maxValueUnsignedInt, $maxValueUnsignedInt);
		$this->maxValueUnsignedInt = $maxValueUnsignedInt;
		return $this;
	}

	/**
	 * A measured amount (or an amount that can potentially be measured). Note that
	 * measured amounts include amounts that are not precisely quantified, including
	 * amounts involving arbitrary units and floating currencies.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity
	 */
	public function getMaxValueQuantity(): ?FHIRQuantity
	{
		return $this->maxValueQuantity;
	}

	/**
	 * A measured amount (or an amount that can potentially be measured). Note that
	 * measured amounts include amounts that are not precisely quantified, including
	 * amounts involving arbitrary units and floating currencies.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRQuantity $maxValueQuantity
	 * @return static
	 */
	public function setMaxValueQuantity(?FHIRQuantity $maxValueQuantity = null): object
	{
		$this->_trackValueSet($this->maxValueQuantity, $maxValueQuantity);
		$this->maxValueQuantity = $maxValueQuantity;
		return $this;
	}

	/**
	 * A whole number
	 * 32 bit number; for values larger than this, use decimal
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Indicates the maximum length in characters that is permitted to be present in
	 * conformant instances and which is expected to be supported by conformant
	 * consumers that support the element.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRIntegerPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRInteger
	 */
	public function getMaxLength(): ?FHIRInteger
	{
		return $this->maxLength;
	}

	/**
	 * A whole number
	 * 32 bit number; for values larger than this, use decimal
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Indicates the maximum length in characters that is permitted to be present in
	 * conformant instances and which is expected to be supported by conformant
	 * consumers that support the element.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRIntegerPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRInteger $maxLength
	 * @return static
	 */
	public function setMaxLength($maxLength = null): object
	{
		if (null !== $maxLength && !($maxLength instanceof FHIRInteger)) {
			$maxLength = new FHIRInteger($maxLength);
		}
		$this->_trackValueSet($this->maxLength, $maxLength);
		$this->maxLength = $maxLength;
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
	 * A reference to an invariant that may make additional statements about the
	 * cardinality or value in the instance.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRIdPrimitive[]|\Calvient\FhirTypes\R4\FHIRElement\FHIRId[]
	 */
	public function getCondition(): ?array
	{
		return $this->condition;
	}

	/**
	 * Any combination of letters, numerals, "-" and ".", with a length limit of 64
	 * characters. (This might be an integer, an unprefixed OID, UUID or any other
	 * identifier pattern that meets these constraints.) Ids are case-insensitive.
	 * RFC 4122
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * A reference to an invariant that may make additional statements about the
	 * cardinality or value in the instance.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRIdPrimitive[]|\Calvient\FhirTypes\R4\FHIRElement\FHIRId[] $condition
	 * @return static
	 */
	public function addCondition($condition = null): object
	{
		if (null !== $condition && !($condition instanceof FHIRId)) {
			$condition = new FHIRId($condition);
		}
		$this->_trackValueAdded();
		$this->condition[] = $condition;
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
	 * A reference to an invariant that may make additional statements about the
	 * cardinality or value in the instance.
	 *
	 * @param \Calvient\FhirTypes\R4\FHIRElement\FHIRId[] $condition
	 * @return static
	 */
	public function setCondition(array $condition = []): object
	{
		if ([] !== $this->condition) {
			$this->_trackValuesRemoved(count($this->condition));
			$this->condition = [];
		}
		if ([] === $condition) {
			return $this;
		}
		foreach ($condition as $v) {
			if ($v instanceof FHIRId) {
				$this->addCondition($v);
			} else {
				$this->addCondition(new FHIRId($v));
			}
		}
		return $this;
	}

	/**
	 * Captures constraints on each element within the resource, profile, or extension.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Formal constraints such as co-occurrence and other constraints that can be
	 * computationally evaluated within the context of the instance.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionConstraint[]
	 */
	public function getConstraint(): ?array
	{
		return $this->constraint;
	}

	/**
	 * Captures constraints on each element within the resource, profile, or extension.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Formal constraints such as co-occurrence and other constraints that can be
	 * computationally evaluated within the context of the instance.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionConstraint $constraint
	 * @return static
	 */
	public function addConstraint(?FHIRElementDefinitionConstraint $constraint = null): object
	{
		$this->_trackValueAdded();
		$this->constraint[] = $constraint;
		return $this;
	}

	/**
	 * Captures constraints on each element within the resource, profile, or extension.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Formal constraints such as co-occurrence and other constraints that can be
	 * computationally evaluated within the context of the instance.
	 *
	 * @param \Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionConstraint[] $constraint
	 * @return static
	 */
	public function setConstraint(array $constraint = []): object
	{
		if ([] !== $this->constraint) {
			$this->_trackValuesRemoved(count($this->constraint));
			$this->constraint = [];
		}
		if ([] === $constraint) {
			return $this;
		}
		foreach ($constraint as $v) {
			if ($v instanceof FHIRElementDefinitionConstraint) {
				$this->addConstraint($v);
			} else {
				$this->addConstraint(new FHIRElementDefinitionConstraint($v));
			}
		}
		return $this;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If true, implementations that produce or consume resources SHALL provide
	 * "support" for the element in some meaningful way. If false, the element may be
	 * ignored and not supported. If false, whether to populate or use the data element
	 * in any way is at the discretion of the implementation.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRBooleanPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRBoolean
	 */
	public function getMustSupport(): ?FHIRBoolean
	{
		return $this->mustSupport;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If true, implementations that produce or consume resources SHALL provide
	 * "support" for the element in some meaningful way. If false, the element may be
	 * ignored and not supported. If false, whether to populate or use the data element
	 * in any way is at the discretion of the implementation.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRBooleanPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRBoolean $mustSupport
	 * @return static
	 */
	public function setMustSupport($mustSupport = null): object
	{
		if (null !== $mustSupport && !($mustSupport instanceof FHIRBoolean)) {
			$mustSupport = new FHIRBoolean($mustSupport);
		}
		$this->_trackValueSet($this->mustSupport, $mustSupport);
		$this->mustSupport = $mustSupport;
		return $this;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If true, the value of this element affects the interpretation of the element or
	 * resource that contains it, and the value of the element cannot be ignored.
	 * Typically, this is used for status, negation and qualification codes. The effect
	 * of this is that the element cannot be ignored by systems: they SHALL either
	 * recognize the element and process it, and/or a pre-determination has been made
	 * that it is not relevant to their particular system.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRBooleanPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRBoolean
	 */
	public function getIsModifier(): ?FHIRBoolean
	{
		return $this->isModifier;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If true, the value of this element affects the interpretation of the element or
	 * resource that contains it, and the value of the element cannot be ignored.
	 * Typically, this is used for status, negation and qualification codes. The effect
	 * of this is that the element cannot be ignored by systems: they SHALL either
	 * recognize the element and process it, and/or a pre-determination has been made
	 * that it is not relevant to their particular system.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRBooleanPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRBoolean $isModifier
	 * @return static
	 */
	public function setIsModifier($isModifier = null): object
	{
		if (null !== $isModifier && !($isModifier instanceof FHIRBoolean)) {
			$isModifier = new FHIRBoolean($isModifier);
		}
		$this->_trackValueSet($this->isModifier, $isModifier);
		$this->isModifier = $isModifier;
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings SHALL NOT exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Explains how that element affects the interpretation of the resource or element
	 * that contains it.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRStringPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRString
	 */
	public function getIsModifierReason(): ?FHIRString
	{
		return $this->isModifierReason;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings SHALL NOT exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Explains how that element affects the interpretation of the resource or element
	 * that contains it.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRStringPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRString $isModifierReason
	 * @return static
	 */
	public function setIsModifierReason($isModifierReason = null): object
	{
		if (null !== $isModifierReason && !($isModifierReason instanceof FHIRString)) {
			$isModifierReason = new FHIRString($isModifierReason);
		}
		$this->_trackValueSet($this->isModifierReason, $isModifierReason);
		$this->isModifierReason = $isModifierReason;
		return $this;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Whether the element should be included if a client requests a search with the
	 * parameter _summary=true.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRBooleanPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRBoolean
	 */
	public function getIsSummary(): ?FHIRBoolean
	{
		return $this->isSummary;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Whether the element should be included if a client requests a search with the
	 * parameter _summary=true.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRBooleanPrimitive|\Calvient\FhirTypes\R4\FHIRElement\FHIRBoolean $isSummary
	 * @return static
	 */
	public function setIsSummary($isSummary = null): object
	{
		if (null !== $isSummary && !($isSummary instanceof FHIRBoolean)) {
			$isSummary = new FHIRBoolean($isSummary);
		}
		$this->_trackValueSet($this->isSummary, $isSummary);
		$this->isSummary = $isSummary;
		return $this;
	}

	/**
	 * Captures constraints on each element within the resource, profile, or extension.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Binds to a value set if this element is coded (code, Coding, CodeableConcept,
	 * Quantity), or the data types (string, uri).
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionBinding
	 */
	public function getBinding(): ?FHIRElementDefinitionBinding
	{
		return $this->binding;
	}

	/**
	 * Captures constraints on each element within the resource, profile, or extension.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Binds to a value set if this element is coded (code, Coding, CodeableConcept,
	 * Quantity), or the data types (string, uri).
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionBinding $binding
	 * @return static
	 */
	public function setBinding(?FHIRElementDefinitionBinding $binding = null): object
	{
		$this->_trackValueSet($this->binding, $binding);
		$this->binding = $binding;
		return $this;
	}

	/**
	 * Captures constraints on each element within the resource, profile, or extension.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies a concept from an external specification that roughly corresponds to
	 * this element.
	 *
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionMapping[]
	 */
	public function getMapping(): ?array
	{
		return $this->mapping;
	}

	/**
	 * Captures constraints on each element within the resource, profile, or extension.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies a concept from an external specification that roughly corresponds to
	 * this element.
	 *
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionMapping $mapping
	 * @return static
	 */
	public function addMapping(?FHIRElementDefinitionMapping $mapping = null): object
	{
		$this->_trackValueAdded();
		$this->mapping[] = $mapping;
		return $this;
	}

	/**
	 * Captures constraints on each element within the resource, profile, or extension.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifies a concept from an external specification that roughly corresponds to
	 * this element.
	 *
	 * @param \Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionMapping[] $mapping
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
			if ($v instanceof FHIRElementDefinitionMapping) {
				$this->addMapping($v);
			} else {
				$this->addMapping(new FHIRElementDefinitionMapping($v));
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
		if (null !== ($v = $this->getPath())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATH] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getRepresentation())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_REPRESENTATION, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getSliceName())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_SLICE_NAME] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getSliceIsConstraining())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_SLICE_IS_CONSTRAINING] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getLabel())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_LABEL] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getCode())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_CODE, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getSlicing())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_SLICING] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getShort())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_SHORT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefinition())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFINITION] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getComment())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_COMMENT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getRequirements())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_REQUIREMENTS] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getAlias())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_ALIAS, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getMin())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MIN] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMax())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MAX] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getBase())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_BASE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getContentReference())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_CONTENT_REFERENCE] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getType())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_TYPE, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getDefaultValueBase64Binary())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_BASE_64BINARY] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueBoolean())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_BOOLEAN] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueCanonical())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_CANONICAL] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueCode())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_CODE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueDate())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_DATE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueDateTime())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_DATE_TIME] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueDecimal())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_DECIMAL] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueId())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_ID] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueInstant())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_INSTANT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueInteger())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_INTEGER] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueMarkdown())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_MARKDOWN] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueOid())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_OID] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValuePositiveInt())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_POSITIVE_INT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueString())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_STRING] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueTime())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_TIME] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueUnsignedInt())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueUri())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_URI] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueUrl())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_URL] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueUuid())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_UUID] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueAddress())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_ADDRESS] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueAge())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_AGE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueAnnotation())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_ANNOTATION] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueAttachment())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_ATTACHMENT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueCodeableConcept())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueCoding())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_CODING] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueContactPoint())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_CONTACT_POINT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueCount())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_COUNT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueDistance())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_DISTANCE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueDuration())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_DURATION] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueHumanName())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_HUMAN_NAME] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueIdentifier())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_IDENTIFIER] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueMoney())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_MONEY] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValuePeriod())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_PERIOD] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueQuantity())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_QUANTITY] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueRange())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_RANGE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueRatio())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_RATIO] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueReference())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_REFERENCE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueSampledData())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_SAMPLED_DATA] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueSignature())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_SIGNATURE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueTiming())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_TIMING] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueContactDetail())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_CONTACT_DETAIL] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueContributor())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_CONTRIBUTOR] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueDataRequirement())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_DATA_REQUIREMENT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueExpression())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_EXPRESSION] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueParameterDefinition())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueRelatedArtifact())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_RELATED_ARTIFACT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueTriggerDefinition())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueUsageContext())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_USAGE_CONTEXT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueDosage())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_DOSAGE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueMeta())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_META] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMeaningWhenMissing())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MEANING_WHEN_MISSING] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getOrderMeaning())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_ORDER_MEANING] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedBase64Binary())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_BASE_64BINARY] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedBoolean())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_BOOLEAN] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedCanonical())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_CANONICAL] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedCode())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_CODE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedDate())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_DATE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedDateTime())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_DATE_TIME] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedDecimal())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_DECIMAL] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedId())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_ID] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedInstant())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_INSTANT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedInteger())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_INTEGER] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedMarkdown())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_MARKDOWN] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedOid())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_OID] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedPositiveInt())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_POSITIVE_INT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedString())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_STRING] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedTime())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_TIME] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedUnsignedInt())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_UNSIGNED_INT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedUri())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_URI] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedUrl())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_URL] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedUuid())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_UUID] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedAddress())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_ADDRESS] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedAge())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_AGE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedAnnotation())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_ANNOTATION] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedAttachment())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_ATTACHMENT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedCodeableConcept())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_CODEABLE_CONCEPT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedCoding())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_CODING] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedContactPoint())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_CONTACT_POINT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedCount())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_COUNT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedDistance())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_DISTANCE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedDuration())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_DURATION] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedHumanName())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_HUMAN_NAME] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedIdentifier())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_IDENTIFIER] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedMoney())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_MONEY] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedPeriod())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_PERIOD] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedQuantity())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_QUANTITY] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedRange())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_RANGE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedRatio())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_RATIO] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedReference())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_REFERENCE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedSampledData())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_SAMPLED_DATA] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedSignature())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_SIGNATURE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedTiming())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_TIMING] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedContactDetail())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_CONTACT_DETAIL] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedContributor())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_CONTRIBUTOR] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedDataRequirement())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_DATA_REQUIREMENT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedExpression())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_EXPRESSION] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedParameterDefinition())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_PARAMETER_DEFINITION] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedRelatedArtifact())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_RELATED_ARTIFACT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedTriggerDefinition())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_TRIGGER_DEFINITION] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedUsageContext())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_USAGE_CONTEXT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedDosage())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_DOSAGE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedMeta())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_META] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternBase64Binary())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_BASE_64BINARY] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternBoolean())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_BOOLEAN] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternCanonical())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_CANONICAL] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternCode())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_CODE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternDate())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_DATE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternDateTime())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_DATE_TIME] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternDecimal())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_DECIMAL] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternId())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_ID] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternInstant())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_INSTANT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternInteger())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_INTEGER] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternMarkdown())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_MARKDOWN] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternOid())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_OID] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternPositiveInt())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_POSITIVE_INT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternString())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_STRING] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternTime())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_TIME] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternUnsignedInt())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_UNSIGNED_INT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternUri())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_URI] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternUrl())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_URL] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternUuid())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_UUID] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternAddress())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_ADDRESS] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternAge())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_AGE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternAnnotation())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_ANNOTATION] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternAttachment())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_ATTACHMENT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternCodeableConcept())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_CODEABLE_CONCEPT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternCoding())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_CODING] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternContactPoint())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_CONTACT_POINT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternCount())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_COUNT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternDistance())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_DISTANCE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternDuration())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_DURATION] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternHumanName())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_HUMAN_NAME] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternIdentifier())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_IDENTIFIER] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternMoney())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_MONEY] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternPeriod())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_PERIOD] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternQuantity())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_QUANTITY] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternRange())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_RANGE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternRatio())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_RATIO] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternReference())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_REFERENCE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternSampledData())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_SAMPLED_DATA] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternSignature())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_SIGNATURE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternTiming())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_TIMING] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternContactDetail())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_CONTACT_DETAIL] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternContributor())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_CONTRIBUTOR] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternDataRequirement())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_DATA_REQUIREMENT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternExpression())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_EXPRESSION] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternParameterDefinition())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_PARAMETER_DEFINITION] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternRelatedArtifact())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_RELATED_ARTIFACT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternTriggerDefinition())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_TRIGGER_DEFINITION] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternUsageContext())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_USAGE_CONTEXT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternDosage())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_DOSAGE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternMeta())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_META] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getExample())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_EXAMPLE, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getMinValueDate())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MIN_VALUE_DATE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMinValueDateTime())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MIN_VALUE_DATE_TIME] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMinValueInstant())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MIN_VALUE_INSTANT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMinValueTime())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MIN_VALUE_TIME] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMinValueDecimal())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MIN_VALUE_DECIMAL] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMinValueInteger())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MIN_VALUE_INTEGER] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMinValuePositiveInt())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MIN_VALUE_POSITIVE_INT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMinValueUnsignedInt())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MIN_VALUE_UNSIGNED_INT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMinValueQuantity())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MIN_VALUE_QUANTITY] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMaxValueDate())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MAX_VALUE_DATE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMaxValueDateTime())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MAX_VALUE_DATE_TIME] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMaxValueInstant())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MAX_VALUE_INSTANT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMaxValueTime())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MAX_VALUE_TIME] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMaxValueDecimal())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MAX_VALUE_DECIMAL] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMaxValueInteger())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MAX_VALUE_INTEGER] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMaxValuePositiveInt())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MAX_VALUE_POSITIVE_INT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMaxValueUnsignedInt())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MAX_VALUE_UNSIGNED_INT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMaxValueQuantity())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MAX_VALUE_QUANTITY] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMaxLength())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MAX_LENGTH] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getCondition())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_CONDITION, $i)] = $fieldErrs;
				}
			}
		}
		if ([] !== ($vs = $this->getConstraint())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_CONSTRAINT, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getMustSupport())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MUST_SUPPORT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getIsModifier())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_IS_MODIFIER] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getIsModifierReason())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_IS_MODIFIER_REASON] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getIsSummary())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_IS_SUMMARY] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getBinding())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_BINDING] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getMapping())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_MAPPING, $i)] = $fieldErrs;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATH])) {
			$v = $this->getPath();
			foreach ($validationRules[self::FIELD_PATH] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATH,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATH])) {
						$errs[self::FIELD_PATH] = [];
					}
					$errs[self::FIELD_PATH][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_REPRESENTATION])) {
			$v = $this->getRepresentation();
			foreach ($validationRules[self::FIELD_REPRESENTATION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_REPRESENTATION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_REPRESENTATION])) {
						$errs[self::FIELD_REPRESENTATION] = [];
					}
					$errs[self::FIELD_REPRESENTATION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_SLICE_NAME])) {
			$v = $this->getSliceName();
			foreach ($validationRules[self::FIELD_SLICE_NAME] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_SLICE_NAME,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_SLICE_NAME])) {
						$errs[self::FIELD_SLICE_NAME] = [];
					}
					$errs[self::FIELD_SLICE_NAME][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_SLICE_IS_CONSTRAINING])) {
			$v = $this->getSliceIsConstraining();
			foreach ($validationRules[self::FIELD_SLICE_IS_CONSTRAINING] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_SLICE_IS_CONSTRAINING,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_SLICE_IS_CONSTRAINING])) {
						$errs[self::FIELD_SLICE_IS_CONSTRAINING] = [];
					}
					$errs[self::FIELD_SLICE_IS_CONSTRAINING][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_LABEL])) {
			$v = $this->getLabel();
			foreach ($validationRules[self::FIELD_LABEL] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_LABEL,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_LABEL])) {
						$errs[self::FIELD_LABEL] = [];
					}
					$errs[self::FIELD_LABEL][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_CODE])) {
			$v = $this->getCode();
			foreach ($validationRules[self::FIELD_CODE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
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
		if (isset($validationRules[self::FIELD_SLICING])) {
			$v = $this->getSlicing();
			foreach ($validationRules[self::FIELD_SLICING] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_SLICING,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_SLICING])) {
						$errs[self::FIELD_SLICING] = [];
					}
					$errs[self::FIELD_SLICING][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_SHORT])) {
			$v = $this->getShort();
			foreach ($validationRules[self::FIELD_SHORT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_SHORT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_SHORT])) {
						$errs[self::FIELD_SHORT] = [];
					}
					$errs[self::FIELD_SHORT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFINITION])) {
			$v = $this->getDefinition();
			foreach ($validationRules[self::FIELD_DEFINITION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFINITION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFINITION])) {
						$errs[self::FIELD_DEFINITION] = [];
					}
					$errs[self::FIELD_DEFINITION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_COMMENT])) {
			$v = $this->getComment();
			foreach ($validationRules[self::FIELD_COMMENT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_COMMENT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_COMMENT])) {
						$errs[self::FIELD_COMMENT] = [];
					}
					$errs[self::FIELD_COMMENT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_REQUIREMENTS])) {
			$v = $this->getRequirements();
			foreach ($validationRules[self::FIELD_REQUIREMENTS] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
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
		if (isset($validationRules[self::FIELD_ALIAS])) {
			$v = $this->getAlias();
			foreach ($validationRules[self::FIELD_ALIAS] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_ALIAS,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_ALIAS])) {
						$errs[self::FIELD_ALIAS] = [];
					}
					$errs[self::FIELD_ALIAS][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MIN])) {
			$v = $this->getMin();
			foreach ($validationRules[self::FIELD_MIN] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MIN,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MIN])) {
						$errs[self::FIELD_MIN] = [];
					}
					$errs[self::FIELD_MIN][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MAX])) {
			$v = $this->getMax();
			foreach ($validationRules[self::FIELD_MAX] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MAX,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MAX])) {
						$errs[self::FIELD_MAX] = [];
					}
					$errs[self::FIELD_MAX][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_BASE])) {
			$v = $this->getBase();
			foreach ($validationRules[self::FIELD_BASE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
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
		if (isset($validationRules[self::FIELD_CONTENT_REFERENCE])) {
			$v = $this->getContentReference();
			foreach ($validationRules[self::FIELD_CONTENT_REFERENCE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_CONTENT_REFERENCE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_CONTENT_REFERENCE])) {
						$errs[self::FIELD_CONTENT_REFERENCE] = [];
					}
					$errs[self::FIELD_CONTENT_REFERENCE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_TYPE])) {
			$v = $this->getType();
			foreach ($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
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
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_BASE_64BINARY])) {
			$v = $this->getDefaultValueBase64Binary();
			foreach (
				$validationRules[self::FIELD_DEFAULT_VALUE_BASE_64BINARY]
				as $rule => $constraint
			) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_BASE_64BINARY,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_BASE_64BINARY])) {
						$errs[self::FIELD_DEFAULT_VALUE_BASE_64BINARY] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_BASE_64BINARY][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_BOOLEAN])) {
			$v = $this->getDefaultValueBoolean();
			foreach ($validationRules[self::FIELD_DEFAULT_VALUE_BOOLEAN] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_BOOLEAN,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_BOOLEAN])) {
						$errs[self::FIELD_DEFAULT_VALUE_BOOLEAN] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_BOOLEAN][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_CANONICAL])) {
			$v = $this->getDefaultValueCanonical();
			foreach (
				$validationRules[self::FIELD_DEFAULT_VALUE_CANONICAL]
				as $rule => $constraint
			) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_CANONICAL,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_CANONICAL])) {
						$errs[self::FIELD_DEFAULT_VALUE_CANONICAL] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_CANONICAL][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_CODE])) {
			$v = $this->getDefaultValueCode();
			foreach ($validationRules[self::FIELD_DEFAULT_VALUE_CODE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_CODE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_CODE])) {
						$errs[self::FIELD_DEFAULT_VALUE_CODE] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_CODE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_DATE])) {
			$v = $this->getDefaultValueDate();
			foreach ($validationRules[self::FIELD_DEFAULT_VALUE_DATE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_DATE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_DATE])) {
						$errs[self::FIELD_DEFAULT_VALUE_DATE] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_DATE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_DATE_TIME])) {
			$v = $this->getDefaultValueDateTime();
			foreach (
				$validationRules[self::FIELD_DEFAULT_VALUE_DATE_TIME]
				as $rule => $constraint
			) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_DATE_TIME,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_DATE_TIME])) {
						$errs[self::FIELD_DEFAULT_VALUE_DATE_TIME] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_DATE_TIME][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_DECIMAL])) {
			$v = $this->getDefaultValueDecimal();
			foreach ($validationRules[self::FIELD_DEFAULT_VALUE_DECIMAL] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_DECIMAL,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_DECIMAL])) {
						$errs[self::FIELD_DEFAULT_VALUE_DECIMAL] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_DECIMAL][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_ID])) {
			$v = $this->getDefaultValueId();
			foreach ($validationRules[self::FIELD_DEFAULT_VALUE_ID] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_ID,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_ID])) {
						$errs[self::FIELD_DEFAULT_VALUE_ID] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_ID][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_INSTANT])) {
			$v = $this->getDefaultValueInstant();
			foreach ($validationRules[self::FIELD_DEFAULT_VALUE_INSTANT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_INSTANT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_INSTANT])) {
						$errs[self::FIELD_DEFAULT_VALUE_INSTANT] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_INSTANT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_INTEGER])) {
			$v = $this->getDefaultValueInteger();
			foreach ($validationRules[self::FIELD_DEFAULT_VALUE_INTEGER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_INTEGER,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_INTEGER])) {
						$errs[self::FIELD_DEFAULT_VALUE_INTEGER] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_INTEGER][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_MARKDOWN])) {
			$v = $this->getDefaultValueMarkdown();
			foreach ($validationRules[self::FIELD_DEFAULT_VALUE_MARKDOWN] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_MARKDOWN,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_MARKDOWN])) {
						$errs[self::FIELD_DEFAULT_VALUE_MARKDOWN] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_MARKDOWN][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_OID])) {
			$v = $this->getDefaultValueOid();
			foreach ($validationRules[self::FIELD_DEFAULT_VALUE_OID] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_OID,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_OID])) {
						$errs[self::FIELD_DEFAULT_VALUE_OID] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_OID][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_POSITIVE_INT])) {
			$v = $this->getDefaultValuePositiveInt();
			foreach (
				$validationRules[self::FIELD_DEFAULT_VALUE_POSITIVE_INT]
				as $rule => $constraint
			) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_POSITIVE_INT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_POSITIVE_INT])) {
						$errs[self::FIELD_DEFAULT_VALUE_POSITIVE_INT] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_POSITIVE_INT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_STRING])) {
			$v = $this->getDefaultValueString();
			foreach ($validationRules[self::FIELD_DEFAULT_VALUE_STRING] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_STRING,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_STRING])) {
						$errs[self::FIELD_DEFAULT_VALUE_STRING] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_STRING][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_TIME])) {
			$v = $this->getDefaultValueTime();
			foreach ($validationRules[self::FIELD_DEFAULT_VALUE_TIME] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_TIME,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_TIME])) {
						$errs[self::FIELD_DEFAULT_VALUE_TIME] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_TIME][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT])) {
			$v = $this->getDefaultValueUnsignedInt();
			foreach (
				$validationRules[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT]
				as $rule => $constraint
			) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_UNSIGNED_INT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT])) {
						$errs[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_URI])) {
			$v = $this->getDefaultValueUri();
			foreach ($validationRules[self::FIELD_DEFAULT_VALUE_URI] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_URI,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_URI])) {
						$errs[self::FIELD_DEFAULT_VALUE_URI] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_URI][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_URL])) {
			$v = $this->getDefaultValueUrl();
			foreach ($validationRules[self::FIELD_DEFAULT_VALUE_URL] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_URL,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_URL])) {
						$errs[self::FIELD_DEFAULT_VALUE_URL] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_URL][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_UUID])) {
			$v = $this->getDefaultValueUuid();
			foreach ($validationRules[self::FIELD_DEFAULT_VALUE_UUID] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_UUID,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_UUID])) {
						$errs[self::FIELD_DEFAULT_VALUE_UUID] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_UUID][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_ADDRESS])) {
			$v = $this->getDefaultValueAddress();
			foreach ($validationRules[self::FIELD_DEFAULT_VALUE_ADDRESS] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_ADDRESS,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_ADDRESS])) {
						$errs[self::FIELD_DEFAULT_VALUE_ADDRESS] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_ADDRESS][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_AGE])) {
			$v = $this->getDefaultValueAge();
			foreach ($validationRules[self::FIELD_DEFAULT_VALUE_AGE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_AGE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_AGE])) {
						$errs[self::FIELD_DEFAULT_VALUE_AGE] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_AGE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_ANNOTATION])) {
			$v = $this->getDefaultValueAnnotation();
			foreach (
				$validationRules[self::FIELD_DEFAULT_VALUE_ANNOTATION]
				as $rule => $constraint
			) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_ANNOTATION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_ANNOTATION])) {
						$errs[self::FIELD_DEFAULT_VALUE_ANNOTATION] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_ANNOTATION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_ATTACHMENT])) {
			$v = $this->getDefaultValueAttachment();
			foreach (
				$validationRules[self::FIELD_DEFAULT_VALUE_ATTACHMENT]
				as $rule => $constraint
			) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_ATTACHMENT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_ATTACHMENT])) {
						$errs[self::FIELD_DEFAULT_VALUE_ATTACHMENT] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_ATTACHMENT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT])) {
			$v = $this->getDefaultValueCodeableConcept();
			foreach (
				$validationRules[self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT]
				as $rule => $constraint
			) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT])) {
						$errs[self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_CODING])) {
			$v = $this->getDefaultValueCoding();
			foreach ($validationRules[self::FIELD_DEFAULT_VALUE_CODING] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_CODING,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_CODING])) {
						$errs[self::FIELD_DEFAULT_VALUE_CODING] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_CODING][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_CONTACT_POINT])) {
			$v = $this->getDefaultValueContactPoint();
			foreach (
				$validationRules[self::FIELD_DEFAULT_VALUE_CONTACT_POINT]
				as $rule => $constraint
			) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_CONTACT_POINT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_CONTACT_POINT])) {
						$errs[self::FIELD_DEFAULT_VALUE_CONTACT_POINT] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_CONTACT_POINT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_COUNT])) {
			$v = $this->getDefaultValueCount();
			foreach ($validationRules[self::FIELD_DEFAULT_VALUE_COUNT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_COUNT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_COUNT])) {
						$errs[self::FIELD_DEFAULT_VALUE_COUNT] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_COUNT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_DISTANCE])) {
			$v = $this->getDefaultValueDistance();
			foreach ($validationRules[self::FIELD_DEFAULT_VALUE_DISTANCE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_DISTANCE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_DISTANCE])) {
						$errs[self::FIELD_DEFAULT_VALUE_DISTANCE] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_DISTANCE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_DURATION])) {
			$v = $this->getDefaultValueDuration();
			foreach ($validationRules[self::FIELD_DEFAULT_VALUE_DURATION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_DURATION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_DURATION])) {
						$errs[self::FIELD_DEFAULT_VALUE_DURATION] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_DURATION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_HUMAN_NAME])) {
			$v = $this->getDefaultValueHumanName();
			foreach (
				$validationRules[self::FIELD_DEFAULT_VALUE_HUMAN_NAME]
				as $rule => $constraint
			) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_HUMAN_NAME,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_HUMAN_NAME])) {
						$errs[self::FIELD_DEFAULT_VALUE_HUMAN_NAME] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_HUMAN_NAME][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_IDENTIFIER])) {
			$v = $this->getDefaultValueIdentifier();
			foreach (
				$validationRules[self::FIELD_DEFAULT_VALUE_IDENTIFIER]
				as $rule => $constraint
			) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_IDENTIFIER,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_IDENTIFIER])) {
						$errs[self::FIELD_DEFAULT_VALUE_IDENTIFIER] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_IDENTIFIER][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_MONEY])) {
			$v = $this->getDefaultValueMoney();
			foreach ($validationRules[self::FIELD_DEFAULT_VALUE_MONEY] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_MONEY,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_MONEY])) {
						$errs[self::FIELD_DEFAULT_VALUE_MONEY] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_MONEY][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_PERIOD])) {
			$v = $this->getDefaultValuePeriod();
			foreach ($validationRules[self::FIELD_DEFAULT_VALUE_PERIOD] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_PERIOD,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_PERIOD])) {
						$errs[self::FIELD_DEFAULT_VALUE_PERIOD] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_PERIOD][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_QUANTITY])) {
			$v = $this->getDefaultValueQuantity();
			foreach ($validationRules[self::FIELD_DEFAULT_VALUE_QUANTITY] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_QUANTITY,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_QUANTITY])) {
						$errs[self::FIELD_DEFAULT_VALUE_QUANTITY] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_QUANTITY][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_RANGE])) {
			$v = $this->getDefaultValueRange();
			foreach ($validationRules[self::FIELD_DEFAULT_VALUE_RANGE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_RANGE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_RANGE])) {
						$errs[self::FIELD_DEFAULT_VALUE_RANGE] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_RANGE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_RATIO])) {
			$v = $this->getDefaultValueRatio();
			foreach ($validationRules[self::FIELD_DEFAULT_VALUE_RATIO] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_RATIO,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_RATIO])) {
						$errs[self::FIELD_DEFAULT_VALUE_RATIO] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_RATIO][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_REFERENCE])) {
			$v = $this->getDefaultValueReference();
			foreach (
				$validationRules[self::FIELD_DEFAULT_VALUE_REFERENCE]
				as $rule => $constraint
			) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_REFERENCE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_REFERENCE])) {
						$errs[self::FIELD_DEFAULT_VALUE_REFERENCE] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_REFERENCE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_SAMPLED_DATA])) {
			$v = $this->getDefaultValueSampledData();
			foreach (
				$validationRules[self::FIELD_DEFAULT_VALUE_SAMPLED_DATA]
				as $rule => $constraint
			) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_SAMPLED_DATA,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_SAMPLED_DATA])) {
						$errs[self::FIELD_DEFAULT_VALUE_SAMPLED_DATA] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_SAMPLED_DATA][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_SIGNATURE])) {
			$v = $this->getDefaultValueSignature();
			foreach (
				$validationRules[self::FIELD_DEFAULT_VALUE_SIGNATURE]
				as $rule => $constraint
			) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_SIGNATURE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_SIGNATURE])) {
						$errs[self::FIELD_DEFAULT_VALUE_SIGNATURE] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_SIGNATURE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_TIMING])) {
			$v = $this->getDefaultValueTiming();
			foreach ($validationRules[self::FIELD_DEFAULT_VALUE_TIMING] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_TIMING,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_TIMING])) {
						$errs[self::FIELD_DEFAULT_VALUE_TIMING] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_TIMING][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_CONTACT_DETAIL])) {
			$v = $this->getDefaultValueContactDetail();
			foreach (
				$validationRules[self::FIELD_DEFAULT_VALUE_CONTACT_DETAIL]
				as $rule => $constraint
			) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_CONTACT_DETAIL,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_CONTACT_DETAIL])) {
						$errs[self::FIELD_DEFAULT_VALUE_CONTACT_DETAIL] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_CONTACT_DETAIL][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_CONTRIBUTOR])) {
			$v = $this->getDefaultValueContributor();
			foreach (
				$validationRules[self::FIELD_DEFAULT_VALUE_CONTRIBUTOR]
				as $rule => $constraint
			) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_CONTRIBUTOR,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_CONTRIBUTOR])) {
						$errs[self::FIELD_DEFAULT_VALUE_CONTRIBUTOR] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_CONTRIBUTOR][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_DATA_REQUIREMENT])) {
			$v = $this->getDefaultValueDataRequirement();
			foreach (
				$validationRules[self::FIELD_DEFAULT_VALUE_DATA_REQUIREMENT]
				as $rule => $constraint
			) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_DATA_REQUIREMENT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_DATA_REQUIREMENT])) {
						$errs[self::FIELD_DEFAULT_VALUE_DATA_REQUIREMENT] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_DATA_REQUIREMENT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_EXPRESSION])) {
			$v = $this->getDefaultValueExpression();
			foreach (
				$validationRules[self::FIELD_DEFAULT_VALUE_EXPRESSION]
				as $rule => $constraint
			) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_EXPRESSION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_EXPRESSION])) {
						$errs[self::FIELD_DEFAULT_VALUE_EXPRESSION] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_EXPRESSION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION])) {
			$v = $this->getDefaultValueParameterDefinition();
			foreach (
				$validationRules[self::FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION]
				as $rule => $constraint
			) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION])) {
						$errs[self::FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_RELATED_ARTIFACT])) {
			$v = $this->getDefaultValueRelatedArtifact();
			foreach (
				$validationRules[self::FIELD_DEFAULT_VALUE_RELATED_ARTIFACT]
				as $rule => $constraint
			) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_RELATED_ARTIFACT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_RELATED_ARTIFACT])) {
						$errs[self::FIELD_DEFAULT_VALUE_RELATED_ARTIFACT] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_RELATED_ARTIFACT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION])) {
			$v = $this->getDefaultValueTriggerDefinition();
			foreach (
				$validationRules[self::FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION]
				as $rule => $constraint
			) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION])) {
						$errs[self::FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_USAGE_CONTEXT])) {
			$v = $this->getDefaultValueUsageContext();
			foreach (
				$validationRules[self::FIELD_DEFAULT_VALUE_USAGE_CONTEXT]
				as $rule => $constraint
			) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_USAGE_CONTEXT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_USAGE_CONTEXT])) {
						$errs[self::FIELD_DEFAULT_VALUE_USAGE_CONTEXT] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_USAGE_CONTEXT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_DOSAGE])) {
			$v = $this->getDefaultValueDosage();
			foreach ($validationRules[self::FIELD_DEFAULT_VALUE_DOSAGE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_DOSAGE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_DOSAGE])) {
						$errs[self::FIELD_DEFAULT_VALUE_DOSAGE] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_DOSAGE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEFAULT_VALUE_META])) {
			$v = $this->getDefaultValueMeta();
			foreach ($validationRules[self::FIELD_DEFAULT_VALUE_META] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_DEFAULT_VALUE_META,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEFAULT_VALUE_META])) {
						$errs[self::FIELD_DEFAULT_VALUE_META] = [];
					}
					$errs[self::FIELD_DEFAULT_VALUE_META][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MEANING_WHEN_MISSING])) {
			$v = $this->getMeaningWhenMissing();
			foreach ($validationRules[self::FIELD_MEANING_WHEN_MISSING] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MEANING_WHEN_MISSING,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MEANING_WHEN_MISSING])) {
						$errs[self::FIELD_MEANING_WHEN_MISSING] = [];
					}
					$errs[self::FIELD_MEANING_WHEN_MISSING][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_ORDER_MEANING])) {
			$v = $this->getOrderMeaning();
			foreach ($validationRules[self::FIELD_ORDER_MEANING] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_ORDER_MEANING,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_ORDER_MEANING])) {
						$errs[self::FIELD_ORDER_MEANING] = [];
					}
					$errs[self::FIELD_ORDER_MEANING][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_BASE_64BINARY])) {
			$v = $this->getFixedBase64Binary();
			foreach ($validationRules[self::FIELD_FIXED_BASE_64BINARY] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_BASE_64BINARY,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_BASE_64BINARY])) {
						$errs[self::FIELD_FIXED_BASE_64BINARY] = [];
					}
					$errs[self::FIELD_FIXED_BASE_64BINARY][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_BOOLEAN])) {
			$v = $this->getFixedBoolean();
			foreach ($validationRules[self::FIELD_FIXED_BOOLEAN] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_BOOLEAN,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_BOOLEAN])) {
						$errs[self::FIELD_FIXED_BOOLEAN] = [];
					}
					$errs[self::FIELD_FIXED_BOOLEAN][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_CANONICAL])) {
			$v = $this->getFixedCanonical();
			foreach ($validationRules[self::FIELD_FIXED_CANONICAL] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_CANONICAL,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_CANONICAL])) {
						$errs[self::FIELD_FIXED_CANONICAL] = [];
					}
					$errs[self::FIELD_FIXED_CANONICAL][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_CODE])) {
			$v = $this->getFixedCode();
			foreach ($validationRules[self::FIELD_FIXED_CODE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_CODE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_CODE])) {
						$errs[self::FIELD_FIXED_CODE] = [];
					}
					$errs[self::FIELD_FIXED_CODE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_DATE])) {
			$v = $this->getFixedDate();
			foreach ($validationRules[self::FIELD_FIXED_DATE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_DATE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_DATE])) {
						$errs[self::FIELD_FIXED_DATE] = [];
					}
					$errs[self::FIELD_FIXED_DATE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_DATE_TIME])) {
			$v = $this->getFixedDateTime();
			foreach ($validationRules[self::FIELD_FIXED_DATE_TIME] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_DATE_TIME,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_DATE_TIME])) {
						$errs[self::FIELD_FIXED_DATE_TIME] = [];
					}
					$errs[self::FIELD_FIXED_DATE_TIME][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_DECIMAL])) {
			$v = $this->getFixedDecimal();
			foreach ($validationRules[self::FIELD_FIXED_DECIMAL] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_DECIMAL,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_DECIMAL])) {
						$errs[self::FIELD_FIXED_DECIMAL] = [];
					}
					$errs[self::FIELD_FIXED_DECIMAL][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_ID])) {
			$v = $this->getFixedId();
			foreach ($validationRules[self::FIELD_FIXED_ID] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_ID,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_ID])) {
						$errs[self::FIELD_FIXED_ID] = [];
					}
					$errs[self::FIELD_FIXED_ID][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_INSTANT])) {
			$v = $this->getFixedInstant();
			foreach ($validationRules[self::FIELD_FIXED_INSTANT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_INSTANT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_INSTANT])) {
						$errs[self::FIELD_FIXED_INSTANT] = [];
					}
					$errs[self::FIELD_FIXED_INSTANT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_INTEGER])) {
			$v = $this->getFixedInteger();
			foreach ($validationRules[self::FIELD_FIXED_INTEGER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_INTEGER,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_INTEGER])) {
						$errs[self::FIELD_FIXED_INTEGER] = [];
					}
					$errs[self::FIELD_FIXED_INTEGER][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_MARKDOWN])) {
			$v = $this->getFixedMarkdown();
			foreach ($validationRules[self::FIELD_FIXED_MARKDOWN] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_MARKDOWN,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_MARKDOWN])) {
						$errs[self::FIELD_FIXED_MARKDOWN] = [];
					}
					$errs[self::FIELD_FIXED_MARKDOWN][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_OID])) {
			$v = $this->getFixedOid();
			foreach ($validationRules[self::FIELD_FIXED_OID] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_OID,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_OID])) {
						$errs[self::FIELD_FIXED_OID] = [];
					}
					$errs[self::FIELD_FIXED_OID][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_POSITIVE_INT])) {
			$v = $this->getFixedPositiveInt();
			foreach ($validationRules[self::FIELD_FIXED_POSITIVE_INT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_POSITIVE_INT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_POSITIVE_INT])) {
						$errs[self::FIELD_FIXED_POSITIVE_INT] = [];
					}
					$errs[self::FIELD_FIXED_POSITIVE_INT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_STRING])) {
			$v = $this->getFixedString();
			foreach ($validationRules[self::FIELD_FIXED_STRING] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_STRING,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_STRING])) {
						$errs[self::FIELD_FIXED_STRING] = [];
					}
					$errs[self::FIELD_FIXED_STRING][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_TIME])) {
			$v = $this->getFixedTime();
			foreach ($validationRules[self::FIELD_FIXED_TIME] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_TIME,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_TIME])) {
						$errs[self::FIELD_FIXED_TIME] = [];
					}
					$errs[self::FIELD_FIXED_TIME][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_UNSIGNED_INT])) {
			$v = $this->getFixedUnsignedInt();
			foreach ($validationRules[self::FIELD_FIXED_UNSIGNED_INT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_UNSIGNED_INT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_UNSIGNED_INT])) {
						$errs[self::FIELD_FIXED_UNSIGNED_INT] = [];
					}
					$errs[self::FIELD_FIXED_UNSIGNED_INT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_URI])) {
			$v = $this->getFixedUri();
			foreach ($validationRules[self::FIELD_FIXED_URI] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_URI,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_URI])) {
						$errs[self::FIELD_FIXED_URI] = [];
					}
					$errs[self::FIELD_FIXED_URI][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_URL])) {
			$v = $this->getFixedUrl();
			foreach ($validationRules[self::FIELD_FIXED_URL] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_URL,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_URL])) {
						$errs[self::FIELD_FIXED_URL] = [];
					}
					$errs[self::FIELD_FIXED_URL][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_UUID])) {
			$v = $this->getFixedUuid();
			foreach ($validationRules[self::FIELD_FIXED_UUID] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_UUID,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_UUID])) {
						$errs[self::FIELD_FIXED_UUID] = [];
					}
					$errs[self::FIELD_FIXED_UUID][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_ADDRESS])) {
			$v = $this->getFixedAddress();
			foreach ($validationRules[self::FIELD_FIXED_ADDRESS] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_ADDRESS,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_ADDRESS])) {
						$errs[self::FIELD_FIXED_ADDRESS] = [];
					}
					$errs[self::FIELD_FIXED_ADDRESS][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_AGE])) {
			$v = $this->getFixedAge();
			foreach ($validationRules[self::FIELD_FIXED_AGE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_AGE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_AGE])) {
						$errs[self::FIELD_FIXED_AGE] = [];
					}
					$errs[self::FIELD_FIXED_AGE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_ANNOTATION])) {
			$v = $this->getFixedAnnotation();
			foreach ($validationRules[self::FIELD_FIXED_ANNOTATION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_ANNOTATION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_ANNOTATION])) {
						$errs[self::FIELD_FIXED_ANNOTATION] = [];
					}
					$errs[self::FIELD_FIXED_ANNOTATION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_ATTACHMENT])) {
			$v = $this->getFixedAttachment();
			foreach ($validationRules[self::FIELD_FIXED_ATTACHMENT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_ATTACHMENT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_ATTACHMENT])) {
						$errs[self::FIELD_FIXED_ATTACHMENT] = [];
					}
					$errs[self::FIELD_FIXED_ATTACHMENT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_CODEABLE_CONCEPT])) {
			$v = $this->getFixedCodeableConcept();
			foreach ($validationRules[self::FIELD_FIXED_CODEABLE_CONCEPT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_CODEABLE_CONCEPT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_CODEABLE_CONCEPT])) {
						$errs[self::FIELD_FIXED_CODEABLE_CONCEPT] = [];
					}
					$errs[self::FIELD_FIXED_CODEABLE_CONCEPT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_CODING])) {
			$v = $this->getFixedCoding();
			foreach ($validationRules[self::FIELD_FIXED_CODING] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_CODING,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_CODING])) {
						$errs[self::FIELD_FIXED_CODING] = [];
					}
					$errs[self::FIELD_FIXED_CODING][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_CONTACT_POINT])) {
			$v = $this->getFixedContactPoint();
			foreach ($validationRules[self::FIELD_FIXED_CONTACT_POINT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_CONTACT_POINT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_CONTACT_POINT])) {
						$errs[self::FIELD_FIXED_CONTACT_POINT] = [];
					}
					$errs[self::FIELD_FIXED_CONTACT_POINT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_COUNT])) {
			$v = $this->getFixedCount();
			foreach ($validationRules[self::FIELD_FIXED_COUNT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_COUNT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_COUNT])) {
						$errs[self::FIELD_FIXED_COUNT] = [];
					}
					$errs[self::FIELD_FIXED_COUNT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_DISTANCE])) {
			$v = $this->getFixedDistance();
			foreach ($validationRules[self::FIELD_FIXED_DISTANCE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_DISTANCE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_DISTANCE])) {
						$errs[self::FIELD_FIXED_DISTANCE] = [];
					}
					$errs[self::FIELD_FIXED_DISTANCE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_DURATION])) {
			$v = $this->getFixedDuration();
			foreach ($validationRules[self::FIELD_FIXED_DURATION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_DURATION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_DURATION])) {
						$errs[self::FIELD_FIXED_DURATION] = [];
					}
					$errs[self::FIELD_FIXED_DURATION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_HUMAN_NAME])) {
			$v = $this->getFixedHumanName();
			foreach ($validationRules[self::FIELD_FIXED_HUMAN_NAME] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_HUMAN_NAME,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_HUMAN_NAME])) {
						$errs[self::FIELD_FIXED_HUMAN_NAME] = [];
					}
					$errs[self::FIELD_FIXED_HUMAN_NAME][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_IDENTIFIER])) {
			$v = $this->getFixedIdentifier();
			foreach ($validationRules[self::FIELD_FIXED_IDENTIFIER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_IDENTIFIER,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_IDENTIFIER])) {
						$errs[self::FIELD_FIXED_IDENTIFIER] = [];
					}
					$errs[self::FIELD_FIXED_IDENTIFIER][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_MONEY])) {
			$v = $this->getFixedMoney();
			foreach ($validationRules[self::FIELD_FIXED_MONEY] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_MONEY,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_MONEY])) {
						$errs[self::FIELD_FIXED_MONEY] = [];
					}
					$errs[self::FIELD_FIXED_MONEY][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_PERIOD])) {
			$v = $this->getFixedPeriod();
			foreach ($validationRules[self::FIELD_FIXED_PERIOD] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_PERIOD,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_PERIOD])) {
						$errs[self::FIELD_FIXED_PERIOD] = [];
					}
					$errs[self::FIELD_FIXED_PERIOD][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_QUANTITY])) {
			$v = $this->getFixedQuantity();
			foreach ($validationRules[self::FIELD_FIXED_QUANTITY] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_QUANTITY,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_QUANTITY])) {
						$errs[self::FIELD_FIXED_QUANTITY] = [];
					}
					$errs[self::FIELD_FIXED_QUANTITY][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_RANGE])) {
			$v = $this->getFixedRange();
			foreach ($validationRules[self::FIELD_FIXED_RANGE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_RANGE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_RANGE])) {
						$errs[self::FIELD_FIXED_RANGE] = [];
					}
					$errs[self::FIELD_FIXED_RANGE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_RATIO])) {
			$v = $this->getFixedRatio();
			foreach ($validationRules[self::FIELD_FIXED_RATIO] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_RATIO,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_RATIO])) {
						$errs[self::FIELD_FIXED_RATIO] = [];
					}
					$errs[self::FIELD_FIXED_RATIO][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_REFERENCE])) {
			$v = $this->getFixedReference();
			foreach ($validationRules[self::FIELD_FIXED_REFERENCE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_REFERENCE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_REFERENCE])) {
						$errs[self::FIELD_FIXED_REFERENCE] = [];
					}
					$errs[self::FIELD_FIXED_REFERENCE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_SAMPLED_DATA])) {
			$v = $this->getFixedSampledData();
			foreach ($validationRules[self::FIELD_FIXED_SAMPLED_DATA] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_SAMPLED_DATA,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_SAMPLED_DATA])) {
						$errs[self::FIELD_FIXED_SAMPLED_DATA] = [];
					}
					$errs[self::FIELD_FIXED_SAMPLED_DATA][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_SIGNATURE])) {
			$v = $this->getFixedSignature();
			foreach ($validationRules[self::FIELD_FIXED_SIGNATURE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_SIGNATURE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_SIGNATURE])) {
						$errs[self::FIELD_FIXED_SIGNATURE] = [];
					}
					$errs[self::FIELD_FIXED_SIGNATURE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_TIMING])) {
			$v = $this->getFixedTiming();
			foreach ($validationRules[self::FIELD_FIXED_TIMING] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_TIMING,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_TIMING])) {
						$errs[self::FIELD_FIXED_TIMING] = [];
					}
					$errs[self::FIELD_FIXED_TIMING][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_CONTACT_DETAIL])) {
			$v = $this->getFixedContactDetail();
			foreach ($validationRules[self::FIELD_FIXED_CONTACT_DETAIL] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_CONTACT_DETAIL,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_CONTACT_DETAIL])) {
						$errs[self::FIELD_FIXED_CONTACT_DETAIL] = [];
					}
					$errs[self::FIELD_FIXED_CONTACT_DETAIL][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_CONTRIBUTOR])) {
			$v = $this->getFixedContributor();
			foreach ($validationRules[self::FIELD_FIXED_CONTRIBUTOR] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_CONTRIBUTOR,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_CONTRIBUTOR])) {
						$errs[self::FIELD_FIXED_CONTRIBUTOR] = [];
					}
					$errs[self::FIELD_FIXED_CONTRIBUTOR][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_DATA_REQUIREMENT])) {
			$v = $this->getFixedDataRequirement();
			foreach ($validationRules[self::FIELD_FIXED_DATA_REQUIREMENT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_DATA_REQUIREMENT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_DATA_REQUIREMENT])) {
						$errs[self::FIELD_FIXED_DATA_REQUIREMENT] = [];
					}
					$errs[self::FIELD_FIXED_DATA_REQUIREMENT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_EXPRESSION])) {
			$v = $this->getFixedExpression();
			foreach ($validationRules[self::FIELD_FIXED_EXPRESSION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_EXPRESSION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_EXPRESSION])) {
						$errs[self::FIELD_FIXED_EXPRESSION] = [];
					}
					$errs[self::FIELD_FIXED_EXPRESSION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_PARAMETER_DEFINITION])) {
			$v = $this->getFixedParameterDefinition();
			foreach (
				$validationRules[self::FIELD_FIXED_PARAMETER_DEFINITION]
				as $rule => $constraint
			) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_PARAMETER_DEFINITION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_PARAMETER_DEFINITION])) {
						$errs[self::FIELD_FIXED_PARAMETER_DEFINITION] = [];
					}
					$errs[self::FIELD_FIXED_PARAMETER_DEFINITION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_RELATED_ARTIFACT])) {
			$v = $this->getFixedRelatedArtifact();
			foreach ($validationRules[self::FIELD_FIXED_RELATED_ARTIFACT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_RELATED_ARTIFACT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_RELATED_ARTIFACT])) {
						$errs[self::FIELD_FIXED_RELATED_ARTIFACT] = [];
					}
					$errs[self::FIELD_FIXED_RELATED_ARTIFACT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_TRIGGER_DEFINITION])) {
			$v = $this->getFixedTriggerDefinition();
			foreach (
				$validationRules[self::FIELD_FIXED_TRIGGER_DEFINITION]
				as $rule => $constraint
			) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_TRIGGER_DEFINITION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_TRIGGER_DEFINITION])) {
						$errs[self::FIELD_FIXED_TRIGGER_DEFINITION] = [];
					}
					$errs[self::FIELD_FIXED_TRIGGER_DEFINITION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_USAGE_CONTEXT])) {
			$v = $this->getFixedUsageContext();
			foreach ($validationRules[self::FIELD_FIXED_USAGE_CONTEXT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_USAGE_CONTEXT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_USAGE_CONTEXT])) {
						$errs[self::FIELD_FIXED_USAGE_CONTEXT] = [];
					}
					$errs[self::FIELD_FIXED_USAGE_CONTEXT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_DOSAGE])) {
			$v = $this->getFixedDosage();
			foreach ($validationRules[self::FIELD_FIXED_DOSAGE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_DOSAGE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_DOSAGE])) {
						$errs[self::FIELD_FIXED_DOSAGE] = [];
					}
					$errs[self::FIELD_FIXED_DOSAGE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FIXED_META])) {
			$v = $this->getFixedMeta();
			foreach ($validationRules[self::FIELD_FIXED_META] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_FIXED_META,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FIXED_META])) {
						$errs[self::FIELD_FIXED_META] = [];
					}
					$errs[self::FIELD_FIXED_META][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_BASE_64BINARY])) {
			$v = $this->getPatternBase64Binary();
			foreach ($validationRules[self::FIELD_PATTERN_BASE_64BINARY] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_BASE_64BINARY,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_BASE_64BINARY])) {
						$errs[self::FIELD_PATTERN_BASE_64BINARY] = [];
					}
					$errs[self::FIELD_PATTERN_BASE_64BINARY][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_BOOLEAN])) {
			$v = $this->getPatternBoolean();
			foreach ($validationRules[self::FIELD_PATTERN_BOOLEAN] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_BOOLEAN,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_BOOLEAN])) {
						$errs[self::FIELD_PATTERN_BOOLEAN] = [];
					}
					$errs[self::FIELD_PATTERN_BOOLEAN][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_CANONICAL])) {
			$v = $this->getPatternCanonical();
			foreach ($validationRules[self::FIELD_PATTERN_CANONICAL] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_CANONICAL,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_CANONICAL])) {
						$errs[self::FIELD_PATTERN_CANONICAL] = [];
					}
					$errs[self::FIELD_PATTERN_CANONICAL][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_CODE])) {
			$v = $this->getPatternCode();
			foreach ($validationRules[self::FIELD_PATTERN_CODE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_CODE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_CODE])) {
						$errs[self::FIELD_PATTERN_CODE] = [];
					}
					$errs[self::FIELD_PATTERN_CODE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_DATE])) {
			$v = $this->getPatternDate();
			foreach ($validationRules[self::FIELD_PATTERN_DATE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_DATE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_DATE])) {
						$errs[self::FIELD_PATTERN_DATE] = [];
					}
					$errs[self::FIELD_PATTERN_DATE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_DATE_TIME])) {
			$v = $this->getPatternDateTime();
			foreach ($validationRules[self::FIELD_PATTERN_DATE_TIME] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_DATE_TIME,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_DATE_TIME])) {
						$errs[self::FIELD_PATTERN_DATE_TIME] = [];
					}
					$errs[self::FIELD_PATTERN_DATE_TIME][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_DECIMAL])) {
			$v = $this->getPatternDecimal();
			foreach ($validationRules[self::FIELD_PATTERN_DECIMAL] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_DECIMAL,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_DECIMAL])) {
						$errs[self::FIELD_PATTERN_DECIMAL] = [];
					}
					$errs[self::FIELD_PATTERN_DECIMAL][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_ID])) {
			$v = $this->getPatternId();
			foreach ($validationRules[self::FIELD_PATTERN_ID] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_ID,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_ID])) {
						$errs[self::FIELD_PATTERN_ID] = [];
					}
					$errs[self::FIELD_PATTERN_ID][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_INSTANT])) {
			$v = $this->getPatternInstant();
			foreach ($validationRules[self::FIELD_PATTERN_INSTANT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_INSTANT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_INSTANT])) {
						$errs[self::FIELD_PATTERN_INSTANT] = [];
					}
					$errs[self::FIELD_PATTERN_INSTANT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_INTEGER])) {
			$v = $this->getPatternInteger();
			foreach ($validationRules[self::FIELD_PATTERN_INTEGER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_INTEGER,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_INTEGER])) {
						$errs[self::FIELD_PATTERN_INTEGER] = [];
					}
					$errs[self::FIELD_PATTERN_INTEGER][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_MARKDOWN])) {
			$v = $this->getPatternMarkdown();
			foreach ($validationRules[self::FIELD_PATTERN_MARKDOWN] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_MARKDOWN,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_MARKDOWN])) {
						$errs[self::FIELD_PATTERN_MARKDOWN] = [];
					}
					$errs[self::FIELD_PATTERN_MARKDOWN][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_OID])) {
			$v = $this->getPatternOid();
			foreach ($validationRules[self::FIELD_PATTERN_OID] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_OID,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_OID])) {
						$errs[self::FIELD_PATTERN_OID] = [];
					}
					$errs[self::FIELD_PATTERN_OID][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_POSITIVE_INT])) {
			$v = $this->getPatternPositiveInt();
			foreach ($validationRules[self::FIELD_PATTERN_POSITIVE_INT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_POSITIVE_INT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_POSITIVE_INT])) {
						$errs[self::FIELD_PATTERN_POSITIVE_INT] = [];
					}
					$errs[self::FIELD_PATTERN_POSITIVE_INT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_STRING])) {
			$v = $this->getPatternString();
			foreach ($validationRules[self::FIELD_PATTERN_STRING] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_STRING,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_STRING])) {
						$errs[self::FIELD_PATTERN_STRING] = [];
					}
					$errs[self::FIELD_PATTERN_STRING][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_TIME])) {
			$v = $this->getPatternTime();
			foreach ($validationRules[self::FIELD_PATTERN_TIME] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_TIME,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_TIME])) {
						$errs[self::FIELD_PATTERN_TIME] = [];
					}
					$errs[self::FIELD_PATTERN_TIME][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_UNSIGNED_INT])) {
			$v = $this->getPatternUnsignedInt();
			foreach ($validationRules[self::FIELD_PATTERN_UNSIGNED_INT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_UNSIGNED_INT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_UNSIGNED_INT])) {
						$errs[self::FIELD_PATTERN_UNSIGNED_INT] = [];
					}
					$errs[self::FIELD_PATTERN_UNSIGNED_INT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_URI])) {
			$v = $this->getPatternUri();
			foreach ($validationRules[self::FIELD_PATTERN_URI] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_URI,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_URI])) {
						$errs[self::FIELD_PATTERN_URI] = [];
					}
					$errs[self::FIELD_PATTERN_URI][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_URL])) {
			$v = $this->getPatternUrl();
			foreach ($validationRules[self::FIELD_PATTERN_URL] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_URL,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_URL])) {
						$errs[self::FIELD_PATTERN_URL] = [];
					}
					$errs[self::FIELD_PATTERN_URL][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_UUID])) {
			$v = $this->getPatternUuid();
			foreach ($validationRules[self::FIELD_PATTERN_UUID] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_UUID,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_UUID])) {
						$errs[self::FIELD_PATTERN_UUID] = [];
					}
					$errs[self::FIELD_PATTERN_UUID][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_ADDRESS])) {
			$v = $this->getPatternAddress();
			foreach ($validationRules[self::FIELD_PATTERN_ADDRESS] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_ADDRESS,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_ADDRESS])) {
						$errs[self::FIELD_PATTERN_ADDRESS] = [];
					}
					$errs[self::FIELD_PATTERN_ADDRESS][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_AGE])) {
			$v = $this->getPatternAge();
			foreach ($validationRules[self::FIELD_PATTERN_AGE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_AGE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_AGE])) {
						$errs[self::FIELD_PATTERN_AGE] = [];
					}
					$errs[self::FIELD_PATTERN_AGE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_ANNOTATION])) {
			$v = $this->getPatternAnnotation();
			foreach ($validationRules[self::FIELD_PATTERN_ANNOTATION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_ANNOTATION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_ANNOTATION])) {
						$errs[self::FIELD_PATTERN_ANNOTATION] = [];
					}
					$errs[self::FIELD_PATTERN_ANNOTATION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_ATTACHMENT])) {
			$v = $this->getPatternAttachment();
			foreach ($validationRules[self::FIELD_PATTERN_ATTACHMENT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_ATTACHMENT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_ATTACHMENT])) {
						$errs[self::FIELD_PATTERN_ATTACHMENT] = [];
					}
					$errs[self::FIELD_PATTERN_ATTACHMENT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_CODEABLE_CONCEPT])) {
			$v = $this->getPatternCodeableConcept();
			foreach (
				$validationRules[self::FIELD_PATTERN_CODEABLE_CONCEPT]
				as $rule => $constraint
			) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_CODEABLE_CONCEPT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_CODEABLE_CONCEPT])) {
						$errs[self::FIELD_PATTERN_CODEABLE_CONCEPT] = [];
					}
					$errs[self::FIELD_PATTERN_CODEABLE_CONCEPT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_CODING])) {
			$v = $this->getPatternCoding();
			foreach ($validationRules[self::FIELD_PATTERN_CODING] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_CODING,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_CODING])) {
						$errs[self::FIELD_PATTERN_CODING] = [];
					}
					$errs[self::FIELD_PATTERN_CODING][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_CONTACT_POINT])) {
			$v = $this->getPatternContactPoint();
			foreach ($validationRules[self::FIELD_PATTERN_CONTACT_POINT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_CONTACT_POINT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_CONTACT_POINT])) {
						$errs[self::FIELD_PATTERN_CONTACT_POINT] = [];
					}
					$errs[self::FIELD_PATTERN_CONTACT_POINT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_COUNT])) {
			$v = $this->getPatternCount();
			foreach ($validationRules[self::FIELD_PATTERN_COUNT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_COUNT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_COUNT])) {
						$errs[self::FIELD_PATTERN_COUNT] = [];
					}
					$errs[self::FIELD_PATTERN_COUNT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_DISTANCE])) {
			$v = $this->getPatternDistance();
			foreach ($validationRules[self::FIELD_PATTERN_DISTANCE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_DISTANCE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_DISTANCE])) {
						$errs[self::FIELD_PATTERN_DISTANCE] = [];
					}
					$errs[self::FIELD_PATTERN_DISTANCE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_DURATION])) {
			$v = $this->getPatternDuration();
			foreach ($validationRules[self::FIELD_PATTERN_DURATION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_DURATION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_DURATION])) {
						$errs[self::FIELD_PATTERN_DURATION] = [];
					}
					$errs[self::FIELD_PATTERN_DURATION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_HUMAN_NAME])) {
			$v = $this->getPatternHumanName();
			foreach ($validationRules[self::FIELD_PATTERN_HUMAN_NAME] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_HUMAN_NAME,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_HUMAN_NAME])) {
						$errs[self::FIELD_PATTERN_HUMAN_NAME] = [];
					}
					$errs[self::FIELD_PATTERN_HUMAN_NAME][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_IDENTIFIER])) {
			$v = $this->getPatternIdentifier();
			foreach ($validationRules[self::FIELD_PATTERN_IDENTIFIER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_IDENTIFIER,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_IDENTIFIER])) {
						$errs[self::FIELD_PATTERN_IDENTIFIER] = [];
					}
					$errs[self::FIELD_PATTERN_IDENTIFIER][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_MONEY])) {
			$v = $this->getPatternMoney();
			foreach ($validationRules[self::FIELD_PATTERN_MONEY] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_MONEY,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_MONEY])) {
						$errs[self::FIELD_PATTERN_MONEY] = [];
					}
					$errs[self::FIELD_PATTERN_MONEY][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_PERIOD])) {
			$v = $this->getPatternPeriod();
			foreach ($validationRules[self::FIELD_PATTERN_PERIOD] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_PERIOD,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_PERIOD])) {
						$errs[self::FIELD_PATTERN_PERIOD] = [];
					}
					$errs[self::FIELD_PATTERN_PERIOD][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_QUANTITY])) {
			$v = $this->getPatternQuantity();
			foreach ($validationRules[self::FIELD_PATTERN_QUANTITY] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_QUANTITY,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_QUANTITY])) {
						$errs[self::FIELD_PATTERN_QUANTITY] = [];
					}
					$errs[self::FIELD_PATTERN_QUANTITY][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_RANGE])) {
			$v = $this->getPatternRange();
			foreach ($validationRules[self::FIELD_PATTERN_RANGE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_RANGE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_RANGE])) {
						$errs[self::FIELD_PATTERN_RANGE] = [];
					}
					$errs[self::FIELD_PATTERN_RANGE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_RATIO])) {
			$v = $this->getPatternRatio();
			foreach ($validationRules[self::FIELD_PATTERN_RATIO] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_RATIO,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_RATIO])) {
						$errs[self::FIELD_PATTERN_RATIO] = [];
					}
					$errs[self::FIELD_PATTERN_RATIO][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_REFERENCE])) {
			$v = $this->getPatternReference();
			foreach ($validationRules[self::FIELD_PATTERN_REFERENCE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_REFERENCE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_REFERENCE])) {
						$errs[self::FIELD_PATTERN_REFERENCE] = [];
					}
					$errs[self::FIELD_PATTERN_REFERENCE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_SAMPLED_DATA])) {
			$v = $this->getPatternSampledData();
			foreach ($validationRules[self::FIELD_PATTERN_SAMPLED_DATA] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_SAMPLED_DATA,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_SAMPLED_DATA])) {
						$errs[self::FIELD_PATTERN_SAMPLED_DATA] = [];
					}
					$errs[self::FIELD_PATTERN_SAMPLED_DATA][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_SIGNATURE])) {
			$v = $this->getPatternSignature();
			foreach ($validationRules[self::FIELD_PATTERN_SIGNATURE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_SIGNATURE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_SIGNATURE])) {
						$errs[self::FIELD_PATTERN_SIGNATURE] = [];
					}
					$errs[self::FIELD_PATTERN_SIGNATURE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_TIMING])) {
			$v = $this->getPatternTiming();
			foreach ($validationRules[self::FIELD_PATTERN_TIMING] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_TIMING,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_TIMING])) {
						$errs[self::FIELD_PATTERN_TIMING] = [];
					}
					$errs[self::FIELD_PATTERN_TIMING][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_CONTACT_DETAIL])) {
			$v = $this->getPatternContactDetail();
			foreach ($validationRules[self::FIELD_PATTERN_CONTACT_DETAIL] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_CONTACT_DETAIL,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_CONTACT_DETAIL])) {
						$errs[self::FIELD_PATTERN_CONTACT_DETAIL] = [];
					}
					$errs[self::FIELD_PATTERN_CONTACT_DETAIL][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_CONTRIBUTOR])) {
			$v = $this->getPatternContributor();
			foreach ($validationRules[self::FIELD_PATTERN_CONTRIBUTOR] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_CONTRIBUTOR,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_CONTRIBUTOR])) {
						$errs[self::FIELD_PATTERN_CONTRIBUTOR] = [];
					}
					$errs[self::FIELD_PATTERN_CONTRIBUTOR][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_DATA_REQUIREMENT])) {
			$v = $this->getPatternDataRequirement();
			foreach (
				$validationRules[self::FIELD_PATTERN_DATA_REQUIREMENT]
				as $rule => $constraint
			) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_DATA_REQUIREMENT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_DATA_REQUIREMENT])) {
						$errs[self::FIELD_PATTERN_DATA_REQUIREMENT] = [];
					}
					$errs[self::FIELD_PATTERN_DATA_REQUIREMENT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_EXPRESSION])) {
			$v = $this->getPatternExpression();
			foreach ($validationRules[self::FIELD_PATTERN_EXPRESSION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_EXPRESSION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_EXPRESSION])) {
						$errs[self::FIELD_PATTERN_EXPRESSION] = [];
					}
					$errs[self::FIELD_PATTERN_EXPRESSION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_PARAMETER_DEFINITION])) {
			$v = $this->getPatternParameterDefinition();
			foreach (
				$validationRules[self::FIELD_PATTERN_PARAMETER_DEFINITION]
				as $rule => $constraint
			) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_PARAMETER_DEFINITION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_PARAMETER_DEFINITION])) {
						$errs[self::FIELD_PATTERN_PARAMETER_DEFINITION] = [];
					}
					$errs[self::FIELD_PATTERN_PARAMETER_DEFINITION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_RELATED_ARTIFACT])) {
			$v = $this->getPatternRelatedArtifact();
			foreach (
				$validationRules[self::FIELD_PATTERN_RELATED_ARTIFACT]
				as $rule => $constraint
			) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_RELATED_ARTIFACT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_RELATED_ARTIFACT])) {
						$errs[self::FIELD_PATTERN_RELATED_ARTIFACT] = [];
					}
					$errs[self::FIELD_PATTERN_RELATED_ARTIFACT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_TRIGGER_DEFINITION])) {
			$v = $this->getPatternTriggerDefinition();
			foreach (
				$validationRules[self::FIELD_PATTERN_TRIGGER_DEFINITION]
				as $rule => $constraint
			) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_TRIGGER_DEFINITION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_TRIGGER_DEFINITION])) {
						$errs[self::FIELD_PATTERN_TRIGGER_DEFINITION] = [];
					}
					$errs[self::FIELD_PATTERN_TRIGGER_DEFINITION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_USAGE_CONTEXT])) {
			$v = $this->getPatternUsageContext();
			foreach ($validationRules[self::FIELD_PATTERN_USAGE_CONTEXT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_USAGE_CONTEXT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_USAGE_CONTEXT])) {
						$errs[self::FIELD_PATTERN_USAGE_CONTEXT] = [];
					}
					$errs[self::FIELD_PATTERN_USAGE_CONTEXT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_DOSAGE])) {
			$v = $this->getPatternDosage();
			foreach ($validationRules[self::FIELD_PATTERN_DOSAGE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_DOSAGE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_DOSAGE])) {
						$errs[self::FIELD_PATTERN_DOSAGE] = [];
					}
					$errs[self::FIELD_PATTERN_DOSAGE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATTERN_META])) {
			$v = $this->getPatternMeta();
			foreach ($validationRules[self::FIELD_PATTERN_META] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_PATTERN_META,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATTERN_META])) {
						$errs[self::FIELD_PATTERN_META] = [];
					}
					$errs[self::FIELD_PATTERN_META][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_EXAMPLE])) {
			$v = $this->getExample();
			foreach ($validationRules[self::FIELD_EXAMPLE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_EXAMPLE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_EXAMPLE])) {
						$errs[self::FIELD_EXAMPLE] = [];
					}
					$errs[self::FIELD_EXAMPLE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MIN_VALUE_DATE])) {
			$v = $this->getMinValueDate();
			foreach ($validationRules[self::FIELD_MIN_VALUE_DATE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MIN_VALUE_DATE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MIN_VALUE_DATE])) {
						$errs[self::FIELD_MIN_VALUE_DATE] = [];
					}
					$errs[self::FIELD_MIN_VALUE_DATE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MIN_VALUE_DATE_TIME])) {
			$v = $this->getMinValueDateTime();
			foreach ($validationRules[self::FIELD_MIN_VALUE_DATE_TIME] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MIN_VALUE_DATE_TIME,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MIN_VALUE_DATE_TIME])) {
						$errs[self::FIELD_MIN_VALUE_DATE_TIME] = [];
					}
					$errs[self::FIELD_MIN_VALUE_DATE_TIME][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MIN_VALUE_INSTANT])) {
			$v = $this->getMinValueInstant();
			foreach ($validationRules[self::FIELD_MIN_VALUE_INSTANT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MIN_VALUE_INSTANT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MIN_VALUE_INSTANT])) {
						$errs[self::FIELD_MIN_VALUE_INSTANT] = [];
					}
					$errs[self::FIELD_MIN_VALUE_INSTANT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MIN_VALUE_TIME])) {
			$v = $this->getMinValueTime();
			foreach ($validationRules[self::FIELD_MIN_VALUE_TIME] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MIN_VALUE_TIME,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MIN_VALUE_TIME])) {
						$errs[self::FIELD_MIN_VALUE_TIME] = [];
					}
					$errs[self::FIELD_MIN_VALUE_TIME][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MIN_VALUE_DECIMAL])) {
			$v = $this->getMinValueDecimal();
			foreach ($validationRules[self::FIELD_MIN_VALUE_DECIMAL] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MIN_VALUE_DECIMAL,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MIN_VALUE_DECIMAL])) {
						$errs[self::FIELD_MIN_VALUE_DECIMAL] = [];
					}
					$errs[self::FIELD_MIN_VALUE_DECIMAL][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MIN_VALUE_INTEGER])) {
			$v = $this->getMinValueInteger();
			foreach ($validationRules[self::FIELD_MIN_VALUE_INTEGER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MIN_VALUE_INTEGER,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MIN_VALUE_INTEGER])) {
						$errs[self::FIELD_MIN_VALUE_INTEGER] = [];
					}
					$errs[self::FIELD_MIN_VALUE_INTEGER][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MIN_VALUE_POSITIVE_INT])) {
			$v = $this->getMinValuePositiveInt();
			foreach ($validationRules[self::FIELD_MIN_VALUE_POSITIVE_INT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MIN_VALUE_POSITIVE_INT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MIN_VALUE_POSITIVE_INT])) {
						$errs[self::FIELD_MIN_VALUE_POSITIVE_INT] = [];
					}
					$errs[self::FIELD_MIN_VALUE_POSITIVE_INT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MIN_VALUE_UNSIGNED_INT])) {
			$v = $this->getMinValueUnsignedInt();
			foreach ($validationRules[self::FIELD_MIN_VALUE_UNSIGNED_INT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MIN_VALUE_UNSIGNED_INT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MIN_VALUE_UNSIGNED_INT])) {
						$errs[self::FIELD_MIN_VALUE_UNSIGNED_INT] = [];
					}
					$errs[self::FIELD_MIN_VALUE_UNSIGNED_INT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MIN_VALUE_QUANTITY])) {
			$v = $this->getMinValueQuantity();
			foreach ($validationRules[self::FIELD_MIN_VALUE_QUANTITY] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MIN_VALUE_QUANTITY,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MIN_VALUE_QUANTITY])) {
						$errs[self::FIELD_MIN_VALUE_QUANTITY] = [];
					}
					$errs[self::FIELD_MIN_VALUE_QUANTITY][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MAX_VALUE_DATE])) {
			$v = $this->getMaxValueDate();
			foreach ($validationRules[self::FIELD_MAX_VALUE_DATE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MAX_VALUE_DATE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MAX_VALUE_DATE])) {
						$errs[self::FIELD_MAX_VALUE_DATE] = [];
					}
					$errs[self::FIELD_MAX_VALUE_DATE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MAX_VALUE_DATE_TIME])) {
			$v = $this->getMaxValueDateTime();
			foreach ($validationRules[self::FIELD_MAX_VALUE_DATE_TIME] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MAX_VALUE_DATE_TIME,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MAX_VALUE_DATE_TIME])) {
						$errs[self::FIELD_MAX_VALUE_DATE_TIME] = [];
					}
					$errs[self::FIELD_MAX_VALUE_DATE_TIME][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MAX_VALUE_INSTANT])) {
			$v = $this->getMaxValueInstant();
			foreach ($validationRules[self::FIELD_MAX_VALUE_INSTANT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MAX_VALUE_INSTANT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MAX_VALUE_INSTANT])) {
						$errs[self::FIELD_MAX_VALUE_INSTANT] = [];
					}
					$errs[self::FIELD_MAX_VALUE_INSTANT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MAX_VALUE_TIME])) {
			$v = $this->getMaxValueTime();
			foreach ($validationRules[self::FIELD_MAX_VALUE_TIME] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MAX_VALUE_TIME,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MAX_VALUE_TIME])) {
						$errs[self::FIELD_MAX_VALUE_TIME] = [];
					}
					$errs[self::FIELD_MAX_VALUE_TIME][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MAX_VALUE_DECIMAL])) {
			$v = $this->getMaxValueDecimal();
			foreach ($validationRules[self::FIELD_MAX_VALUE_DECIMAL] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MAX_VALUE_DECIMAL,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MAX_VALUE_DECIMAL])) {
						$errs[self::FIELD_MAX_VALUE_DECIMAL] = [];
					}
					$errs[self::FIELD_MAX_VALUE_DECIMAL][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MAX_VALUE_INTEGER])) {
			$v = $this->getMaxValueInteger();
			foreach ($validationRules[self::FIELD_MAX_VALUE_INTEGER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MAX_VALUE_INTEGER,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MAX_VALUE_INTEGER])) {
						$errs[self::FIELD_MAX_VALUE_INTEGER] = [];
					}
					$errs[self::FIELD_MAX_VALUE_INTEGER][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MAX_VALUE_POSITIVE_INT])) {
			$v = $this->getMaxValuePositiveInt();
			foreach ($validationRules[self::FIELD_MAX_VALUE_POSITIVE_INT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MAX_VALUE_POSITIVE_INT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MAX_VALUE_POSITIVE_INT])) {
						$errs[self::FIELD_MAX_VALUE_POSITIVE_INT] = [];
					}
					$errs[self::FIELD_MAX_VALUE_POSITIVE_INT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MAX_VALUE_UNSIGNED_INT])) {
			$v = $this->getMaxValueUnsignedInt();
			foreach ($validationRules[self::FIELD_MAX_VALUE_UNSIGNED_INT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MAX_VALUE_UNSIGNED_INT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MAX_VALUE_UNSIGNED_INT])) {
						$errs[self::FIELD_MAX_VALUE_UNSIGNED_INT] = [];
					}
					$errs[self::FIELD_MAX_VALUE_UNSIGNED_INT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MAX_VALUE_QUANTITY])) {
			$v = $this->getMaxValueQuantity();
			foreach ($validationRules[self::FIELD_MAX_VALUE_QUANTITY] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MAX_VALUE_QUANTITY,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MAX_VALUE_QUANTITY])) {
						$errs[self::FIELD_MAX_VALUE_QUANTITY] = [];
					}
					$errs[self::FIELD_MAX_VALUE_QUANTITY][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MAX_LENGTH])) {
			$v = $this->getMaxLength();
			foreach ($validationRules[self::FIELD_MAX_LENGTH] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MAX_LENGTH,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MAX_LENGTH])) {
						$errs[self::FIELD_MAX_LENGTH] = [];
					}
					$errs[self::FIELD_MAX_LENGTH][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_CONDITION])) {
			$v = $this->getCondition();
			foreach ($validationRules[self::FIELD_CONDITION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_CONDITION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_CONDITION])) {
						$errs[self::FIELD_CONDITION] = [];
					}
					$errs[self::FIELD_CONDITION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_CONSTRAINT])) {
			$v = $this->getConstraint();
			foreach ($validationRules[self::FIELD_CONSTRAINT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_CONSTRAINT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_CONSTRAINT])) {
						$errs[self::FIELD_CONSTRAINT] = [];
					}
					$errs[self::FIELD_CONSTRAINT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MUST_SUPPORT])) {
			$v = $this->getMustSupport();
			foreach ($validationRules[self::FIELD_MUST_SUPPORT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MUST_SUPPORT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MUST_SUPPORT])) {
						$errs[self::FIELD_MUST_SUPPORT] = [];
					}
					$errs[self::FIELD_MUST_SUPPORT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_IS_MODIFIER])) {
			$v = $this->getIsModifier();
			foreach ($validationRules[self::FIELD_IS_MODIFIER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_IS_MODIFIER,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_IS_MODIFIER])) {
						$errs[self::FIELD_IS_MODIFIER] = [];
					}
					$errs[self::FIELD_IS_MODIFIER][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_IS_MODIFIER_REASON])) {
			$v = $this->getIsModifierReason();
			foreach ($validationRules[self::FIELD_IS_MODIFIER_REASON] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_IS_MODIFIER_REASON,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_IS_MODIFIER_REASON])) {
						$errs[self::FIELD_IS_MODIFIER_REASON] = [];
					}
					$errs[self::FIELD_IS_MODIFIER_REASON][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_IS_SUMMARY])) {
			$v = $this->getIsSummary();
			foreach ($validationRules[self::FIELD_IS_SUMMARY] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_IS_SUMMARY,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_IS_SUMMARY])) {
						$errs[self::FIELD_IS_SUMMARY] = [];
					}
					$errs[self::FIELD_IS_SUMMARY][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_BINDING])) {
			$v = $this->getBinding();
			foreach ($validationRules[self::FIELD_BINDING] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_BINDING,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_BINDING])) {
						$errs[self::FIELD_BINDING] = [];
					}
					$errs[self::FIELD_BINDING][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MAPPING])) {
			$v = $this->getMapping();
			foreach ($validationRules[self::FIELD_MAPPING] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
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
	 * @param null|\Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition
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
						'FHIRElementDefinition::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRElementDefinition::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRElementDefinition(null);
		} elseif (!is_object($type) || !($type instanceof FHIRElementDefinition)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRElementDefinition::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition or null, %s seen.',
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
			if (self::FIELD_PATH === $n->nodeName) {
				$type->setPath(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_REPRESENTATION === $n->nodeName) {
				$type->addRepresentation(FHIRPropertyRepresentation::xmlUnserialize($n));
			} elseif (self::FIELD_SLICE_NAME === $n->nodeName) {
				$type->setSliceName(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_SLICE_IS_CONSTRAINING === $n->nodeName) {
				$type->setSliceIsConstraining(FHIRBoolean::xmlUnserialize($n));
			} elseif (self::FIELD_LABEL === $n->nodeName) {
				$type->setLabel(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_CODE === $n->nodeName) {
				$type->addCode(FHIRCoding::xmlUnserialize($n));
			} elseif (self::FIELD_SLICING === $n->nodeName) {
				$type->setSlicing(FHIRElementDefinitionSlicing::xmlUnserialize($n));
			} elseif (self::FIELD_SHORT === $n->nodeName) {
				$type->setShort(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_DEFINITION === $n->nodeName) {
				$type->setDefinition(FHIRMarkdown::xmlUnserialize($n));
			} elseif (self::FIELD_COMMENT === $n->nodeName) {
				$type->setComment(FHIRMarkdown::xmlUnserialize($n));
			} elseif (self::FIELD_REQUIREMENTS === $n->nodeName) {
				$type->setRequirements(FHIRMarkdown::xmlUnserialize($n));
			} elseif (self::FIELD_ALIAS === $n->nodeName) {
				$type->addAlias(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_MIN === $n->nodeName) {
				$type->setMin(FHIRUnsignedInt::xmlUnserialize($n));
			} elseif (self::FIELD_MAX === $n->nodeName) {
				$type->setMax(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_BASE === $n->nodeName) {
				$type->setBase(FHIRElementDefinitionBase::xmlUnserialize($n));
			} elseif (self::FIELD_CONTENT_REFERENCE === $n->nodeName) {
				$type->setContentReference(FHIRUri::xmlUnserialize($n));
			} elseif (self::FIELD_TYPE === $n->nodeName) {
				$type->addType(FHIRElementDefinitionType::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_BASE_64BINARY === $n->nodeName) {
				$type->setDefaultValueBase64Binary(FHIRBase64Binary::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_BOOLEAN === $n->nodeName) {
				$type->setDefaultValueBoolean(FHIRBoolean::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_CANONICAL === $n->nodeName) {
				$type->setDefaultValueCanonical(FHIRCanonical::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_CODE === $n->nodeName) {
				$type->setDefaultValueCode(FHIRCode::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_DATE === $n->nodeName) {
				$type->setDefaultValueDate(FHIRDate::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_DATE_TIME === $n->nodeName) {
				$type->setDefaultValueDateTime(FHIRDateTime::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_DECIMAL === $n->nodeName) {
				$type->setDefaultValueDecimal(FHIRDecimal::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_ID === $n->nodeName) {
				$type->setDefaultValueId(FHIRId::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_INSTANT === $n->nodeName) {
				$type->setDefaultValueInstant(FHIRInstant::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_INTEGER === $n->nodeName) {
				$type->setDefaultValueInteger(FHIRInteger::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_MARKDOWN === $n->nodeName) {
				$type->setDefaultValueMarkdown(FHIRMarkdown::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_OID === $n->nodeName) {
				$type->setDefaultValueOid(FHIROid::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_POSITIVE_INT === $n->nodeName) {
				$type->setDefaultValuePositiveInt(FHIRPositiveInt::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_STRING === $n->nodeName) {
				$type->setDefaultValueString(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_TIME === $n->nodeName) {
				$type->setDefaultValueTime(FHIRTime::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_UNSIGNED_INT === $n->nodeName) {
				$type->setDefaultValueUnsignedInt(FHIRUnsignedInt::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_URI === $n->nodeName) {
				$type->setDefaultValueUri(FHIRUri::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_URL === $n->nodeName) {
				$type->setDefaultValueUrl(FHIRUrl::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_UUID === $n->nodeName) {
				$type->setDefaultValueUuid(FHIRUuid::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_ADDRESS === $n->nodeName) {
				$type->setDefaultValueAddress(FHIRAddress::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_AGE === $n->nodeName) {
				$type->setDefaultValueAge(FHIRAge::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_ANNOTATION === $n->nodeName) {
				$type->setDefaultValueAnnotation(FHIRAnnotation::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_ATTACHMENT === $n->nodeName) {
				$type->setDefaultValueAttachment(FHIRAttachment::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT === $n->nodeName) {
				$type->setDefaultValueCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_CODING === $n->nodeName) {
				$type->setDefaultValueCoding(FHIRCoding::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_CONTACT_POINT === $n->nodeName) {
				$type->setDefaultValueContactPoint(FHIRContactPoint::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_COUNT === $n->nodeName) {
				$type->setDefaultValueCount(FHIRCount::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_DISTANCE === $n->nodeName) {
				$type->setDefaultValueDistance(FHIRDistance::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_DURATION === $n->nodeName) {
				$type->setDefaultValueDuration(FHIRDuration::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_HUMAN_NAME === $n->nodeName) {
				$type->setDefaultValueHumanName(FHIRHumanName::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_IDENTIFIER === $n->nodeName) {
				$type->setDefaultValueIdentifier(FHIRIdentifier::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_MONEY === $n->nodeName) {
				$type->setDefaultValueMoney(FHIRMoney::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_PERIOD === $n->nodeName) {
				$type->setDefaultValuePeriod(FHIRPeriod::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_QUANTITY === $n->nodeName) {
				$type->setDefaultValueQuantity(FHIRQuantity::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_RANGE === $n->nodeName) {
				$type->setDefaultValueRange(FHIRRange::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_RATIO === $n->nodeName) {
				$type->setDefaultValueRatio(FHIRRatio::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_REFERENCE === $n->nodeName) {
				$type->setDefaultValueReference(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_SAMPLED_DATA === $n->nodeName) {
				$type->setDefaultValueSampledData(FHIRSampledData::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_SIGNATURE === $n->nodeName) {
				$type->setDefaultValueSignature(FHIRSignature::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_TIMING === $n->nodeName) {
				$type->setDefaultValueTiming(FHIRTiming::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_CONTACT_DETAIL === $n->nodeName) {
				$type->setDefaultValueContactDetail(FHIRContactDetail::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_CONTRIBUTOR === $n->nodeName) {
				$type->setDefaultValueContributor(FHIRContributor::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_DATA_REQUIREMENT === $n->nodeName) {
				$type->setDefaultValueDataRequirement(FHIRDataRequirement::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_EXPRESSION === $n->nodeName) {
				$type->setDefaultValueExpression(FHIRExpression::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION === $n->nodeName) {
				$type->setDefaultValueParameterDefinition(
					FHIRParameterDefinition::xmlUnserialize($n),
				);
			} elseif (self::FIELD_DEFAULT_VALUE_RELATED_ARTIFACT === $n->nodeName) {
				$type->setDefaultValueRelatedArtifact(FHIRRelatedArtifact::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION === $n->nodeName) {
				$type->setDefaultValueTriggerDefinition(FHIRTriggerDefinition::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_USAGE_CONTEXT === $n->nodeName) {
				$type->setDefaultValueUsageContext(FHIRUsageContext::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_DOSAGE === $n->nodeName) {
				$type->setDefaultValueDosage(FHIRDosage::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_META === $n->nodeName) {
				$type->setDefaultValueMeta(FHIRMeta::xmlUnserialize($n));
			} elseif (self::FIELD_MEANING_WHEN_MISSING === $n->nodeName) {
				$type->setMeaningWhenMissing(FHIRMarkdown::xmlUnserialize($n));
			} elseif (self::FIELD_ORDER_MEANING === $n->nodeName) {
				$type->setOrderMeaning(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_BASE_64BINARY === $n->nodeName) {
				$type->setFixedBase64Binary(FHIRBase64Binary::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_BOOLEAN === $n->nodeName) {
				$type->setFixedBoolean(FHIRBoolean::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_CANONICAL === $n->nodeName) {
				$type->setFixedCanonical(FHIRCanonical::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_CODE === $n->nodeName) {
				$type->setFixedCode(FHIRCode::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_DATE === $n->nodeName) {
				$type->setFixedDate(FHIRDate::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_DATE_TIME === $n->nodeName) {
				$type->setFixedDateTime(FHIRDateTime::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_DECIMAL === $n->nodeName) {
				$type->setFixedDecimal(FHIRDecimal::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_ID === $n->nodeName) {
				$type->setFixedId(FHIRId::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_INSTANT === $n->nodeName) {
				$type->setFixedInstant(FHIRInstant::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_INTEGER === $n->nodeName) {
				$type->setFixedInteger(FHIRInteger::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_MARKDOWN === $n->nodeName) {
				$type->setFixedMarkdown(FHIRMarkdown::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_OID === $n->nodeName) {
				$type->setFixedOid(FHIROid::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_POSITIVE_INT === $n->nodeName) {
				$type->setFixedPositiveInt(FHIRPositiveInt::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_STRING === $n->nodeName) {
				$type->setFixedString(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_TIME === $n->nodeName) {
				$type->setFixedTime(FHIRTime::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_UNSIGNED_INT === $n->nodeName) {
				$type->setFixedUnsignedInt(FHIRUnsignedInt::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_URI === $n->nodeName) {
				$type->setFixedUri(FHIRUri::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_URL === $n->nodeName) {
				$type->setFixedUrl(FHIRUrl::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_UUID === $n->nodeName) {
				$type->setFixedUuid(FHIRUuid::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_ADDRESS === $n->nodeName) {
				$type->setFixedAddress(FHIRAddress::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_AGE === $n->nodeName) {
				$type->setFixedAge(FHIRAge::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_ANNOTATION === $n->nodeName) {
				$type->setFixedAnnotation(FHIRAnnotation::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_ATTACHMENT === $n->nodeName) {
				$type->setFixedAttachment(FHIRAttachment::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_CODEABLE_CONCEPT === $n->nodeName) {
				$type->setFixedCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_CODING === $n->nodeName) {
				$type->setFixedCoding(FHIRCoding::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_CONTACT_POINT === $n->nodeName) {
				$type->setFixedContactPoint(FHIRContactPoint::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_COUNT === $n->nodeName) {
				$type->setFixedCount(FHIRCount::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_DISTANCE === $n->nodeName) {
				$type->setFixedDistance(FHIRDistance::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_DURATION === $n->nodeName) {
				$type->setFixedDuration(FHIRDuration::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_HUMAN_NAME === $n->nodeName) {
				$type->setFixedHumanName(FHIRHumanName::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_IDENTIFIER === $n->nodeName) {
				$type->setFixedIdentifier(FHIRIdentifier::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_MONEY === $n->nodeName) {
				$type->setFixedMoney(FHIRMoney::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_PERIOD === $n->nodeName) {
				$type->setFixedPeriod(FHIRPeriod::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_QUANTITY === $n->nodeName) {
				$type->setFixedQuantity(FHIRQuantity::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_RANGE === $n->nodeName) {
				$type->setFixedRange(FHIRRange::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_RATIO === $n->nodeName) {
				$type->setFixedRatio(FHIRRatio::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_REFERENCE === $n->nodeName) {
				$type->setFixedReference(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_SAMPLED_DATA === $n->nodeName) {
				$type->setFixedSampledData(FHIRSampledData::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_SIGNATURE === $n->nodeName) {
				$type->setFixedSignature(FHIRSignature::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_TIMING === $n->nodeName) {
				$type->setFixedTiming(FHIRTiming::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_CONTACT_DETAIL === $n->nodeName) {
				$type->setFixedContactDetail(FHIRContactDetail::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_CONTRIBUTOR === $n->nodeName) {
				$type->setFixedContributor(FHIRContributor::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_DATA_REQUIREMENT === $n->nodeName) {
				$type->setFixedDataRequirement(FHIRDataRequirement::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_EXPRESSION === $n->nodeName) {
				$type->setFixedExpression(FHIRExpression::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_PARAMETER_DEFINITION === $n->nodeName) {
				$type->setFixedParameterDefinition(FHIRParameterDefinition::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_RELATED_ARTIFACT === $n->nodeName) {
				$type->setFixedRelatedArtifact(FHIRRelatedArtifact::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_TRIGGER_DEFINITION === $n->nodeName) {
				$type->setFixedTriggerDefinition(FHIRTriggerDefinition::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_USAGE_CONTEXT === $n->nodeName) {
				$type->setFixedUsageContext(FHIRUsageContext::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_DOSAGE === $n->nodeName) {
				$type->setFixedDosage(FHIRDosage::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_META === $n->nodeName) {
				$type->setFixedMeta(FHIRMeta::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_BASE_64BINARY === $n->nodeName) {
				$type->setPatternBase64Binary(FHIRBase64Binary::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_BOOLEAN === $n->nodeName) {
				$type->setPatternBoolean(FHIRBoolean::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_CANONICAL === $n->nodeName) {
				$type->setPatternCanonical(FHIRCanonical::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_CODE === $n->nodeName) {
				$type->setPatternCode(FHIRCode::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_DATE === $n->nodeName) {
				$type->setPatternDate(FHIRDate::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_DATE_TIME === $n->nodeName) {
				$type->setPatternDateTime(FHIRDateTime::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_DECIMAL === $n->nodeName) {
				$type->setPatternDecimal(FHIRDecimal::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_ID === $n->nodeName) {
				$type->setPatternId(FHIRId::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_INSTANT === $n->nodeName) {
				$type->setPatternInstant(FHIRInstant::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_INTEGER === $n->nodeName) {
				$type->setPatternInteger(FHIRInteger::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_MARKDOWN === $n->nodeName) {
				$type->setPatternMarkdown(FHIRMarkdown::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_OID === $n->nodeName) {
				$type->setPatternOid(FHIROid::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_POSITIVE_INT === $n->nodeName) {
				$type->setPatternPositiveInt(FHIRPositiveInt::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_STRING === $n->nodeName) {
				$type->setPatternString(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_TIME === $n->nodeName) {
				$type->setPatternTime(FHIRTime::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_UNSIGNED_INT === $n->nodeName) {
				$type->setPatternUnsignedInt(FHIRUnsignedInt::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_URI === $n->nodeName) {
				$type->setPatternUri(FHIRUri::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_URL === $n->nodeName) {
				$type->setPatternUrl(FHIRUrl::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_UUID === $n->nodeName) {
				$type->setPatternUuid(FHIRUuid::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_ADDRESS === $n->nodeName) {
				$type->setPatternAddress(FHIRAddress::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_AGE === $n->nodeName) {
				$type->setPatternAge(FHIRAge::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_ANNOTATION === $n->nodeName) {
				$type->setPatternAnnotation(FHIRAnnotation::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_ATTACHMENT === $n->nodeName) {
				$type->setPatternAttachment(FHIRAttachment::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_CODEABLE_CONCEPT === $n->nodeName) {
				$type->setPatternCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_CODING === $n->nodeName) {
				$type->setPatternCoding(FHIRCoding::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_CONTACT_POINT === $n->nodeName) {
				$type->setPatternContactPoint(FHIRContactPoint::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_COUNT === $n->nodeName) {
				$type->setPatternCount(FHIRCount::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_DISTANCE === $n->nodeName) {
				$type->setPatternDistance(FHIRDistance::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_DURATION === $n->nodeName) {
				$type->setPatternDuration(FHIRDuration::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_HUMAN_NAME === $n->nodeName) {
				$type->setPatternHumanName(FHIRHumanName::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_IDENTIFIER === $n->nodeName) {
				$type->setPatternIdentifier(FHIRIdentifier::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_MONEY === $n->nodeName) {
				$type->setPatternMoney(FHIRMoney::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_PERIOD === $n->nodeName) {
				$type->setPatternPeriod(FHIRPeriod::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_QUANTITY === $n->nodeName) {
				$type->setPatternQuantity(FHIRQuantity::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_RANGE === $n->nodeName) {
				$type->setPatternRange(FHIRRange::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_RATIO === $n->nodeName) {
				$type->setPatternRatio(FHIRRatio::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_REFERENCE === $n->nodeName) {
				$type->setPatternReference(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_SAMPLED_DATA === $n->nodeName) {
				$type->setPatternSampledData(FHIRSampledData::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_SIGNATURE === $n->nodeName) {
				$type->setPatternSignature(FHIRSignature::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_TIMING === $n->nodeName) {
				$type->setPatternTiming(FHIRTiming::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_CONTACT_DETAIL === $n->nodeName) {
				$type->setPatternContactDetail(FHIRContactDetail::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_CONTRIBUTOR === $n->nodeName) {
				$type->setPatternContributor(FHIRContributor::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_DATA_REQUIREMENT === $n->nodeName) {
				$type->setPatternDataRequirement(FHIRDataRequirement::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_EXPRESSION === $n->nodeName) {
				$type->setPatternExpression(FHIRExpression::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_PARAMETER_DEFINITION === $n->nodeName) {
				$type->setPatternParameterDefinition(FHIRParameterDefinition::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_RELATED_ARTIFACT === $n->nodeName) {
				$type->setPatternRelatedArtifact(FHIRRelatedArtifact::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_TRIGGER_DEFINITION === $n->nodeName) {
				$type->setPatternTriggerDefinition(FHIRTriggerDefinition::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_USAGE_CONTEXT === $n->nodeName) {
				$type->setPatternUsageContext(FHIRUsageContext::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_DOSAGE === $n->nodeName) {
				$type->setPatternDosage(FHIRDosage::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_META === $n->nodeName) {
				$type->setPatternMeta(FHIRMeta::xmlUnserialize($n));
			} elseif (self::FIELD_EXAMPLE === $n->nodeName) {
				$type->addExample(FHIRElementDefinitionExample::xmlUnserialize($n));
			} elseif (self::FIELD_MIN_VALUE_DATE === $n->nodeName) {
				$type->setMinValueDate(FHIRDate::xmlUnserialize($n));
			} elseif (self::FIELD_MIN_VALUE_DATE_TIME === $n->nodeName) {
				$type->setMinValueDateTime(FHIRDateTime::xmlUnserialize($n));
			} elseif (self::FIELD_MIN_VALUE_INSTANT === $n->nodeName) {
				$type->setMinValueInstant(FHIRInstant::xmlUnserialize($n));
			} elseif (self::FIELD_MIN_VALUE_TIME === $n->nodeName) {
				$type->setMinValueTime(FHIRTime::xmlUnserialize($n));
			} elseif (self::FIELD_MIN_VALUE_DECIMAL === $n->nodeName) {
				$type->setMinValueDecimal(FHIRDecimal::xmlUnserialize($n));
			} elseif (self::FIELD_MIN_VALUE_INTEGER === $n->nodeName) {
				$type->setMinValueInteger(FHIRInteger::xmlUnserialize($n));
			} elseif (self::FIELD_MIN_VALUE_POSITIVE_INT === $n->nodeName) {
				$type->setMinValuePositiveInt(FHIRPositiveInt::xmlUnserialize($n));
			} elseif (self::FIELD_MIN_VALUE_UNSIGNED_INT === $n->nodeName) {
				$type->setMinValueUnsignedInt(FHIRUnsignedInt::xmlUnserialize($n));
			} elseif (self::FIELD_MIN_VALUE_QUANTITY === $n->nodeName) {
				$type->setMinValueQuantity(FHIRQuantity::xmlUnserialize($n));
			} elseif (self::FIELD_MAX_VALUE_DATE === $n->nodeName) {
				$type->setMaxValueDate(FHIRDate::xmlUnserialize($n));
			} elseif (self::FIELD_MAX_VALUE_DATE_TIME === $n->nodeName) {
				$type->setMaxValueDateTime(FHIRDateTime::xmlUnserialize($n));
			} elseif (self::FIELD_MAX_VALUE_INSTANT === $n->nodeName) {
				$type->setMaxValueInstant(FHIRInstant::xmlUnserialize($n));
			} elseif (self::FIELD_MAX_VALUE_TIME === $n->nodeName) {
				$type->setMaxValueTime(FHIRTime::xmlUnserialize($n));
			} elseif (self::FIELD_MAX_VALUE_DECIMAL === $n->nodeName) {
				$type->setMaxValueDecimal(FHIRDecimal::xmlUnserialize($n));
			} elseif (self::FIELD_MAX_VALUE_INTEGER === $n->nodeName) {
				$type->setMaxValueInteger(FHIRInteger::xmlUnserialize($n));
			} elseif (self::FIELD_MAX_VALUE_POSITIVE_INT === $n->nodeName) {
				$type->setMaxValuePositiveInt(FHIRPositiveInt::xmlUnserialize($n));
			} elseif (self::FIELD_MAX_VALUE_UNSIGNED_INT === $n->nodeName) {
				$type->setMaxValueUnsignedInt(FHIRUnsignedInt::xmlUnserialize($n));
			} elseif (self::FIELD_MAX_VALUE_QUANTITY === $n->nodeName) {
				$type->setMaxValueQuantity(FHIRQuantity::xmlUnserialize($n));
			} elseif (self::FIELD_MAX_LENGTH === $n->nodeName) {
				$type->setMaxLength(FHIRInteger::xmlUnserialize($n));
			} elseif (self::FIELD_CONDITION === $n->nodeName) {
				$type->addCondition(FHIRId::xmlUnserialize($n));
			} elseif (self::FIELD_CONSTRAINT === $n->nodeName) {
				$type->addConstraint(FHIRElementDefinitionConstraint::xmlUnserialize($n));
			} elseif (self::FIELD_MUST_SUPPORT === $n->nodeName) {
				$type->setMustSupport(FHIRBoolean::xmlUnserialize($n));
			} elseif (self::FIELD_IS_MODIFIER === $n->nodeName) {
				$type->setIsModifier(FHIRBoolean::xmlUnserialize($n));
			} elseif (self::FIELD_IS_MODIFIER_REASON === $n->nodeName) {
				$type->setIsModifierReason(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_IS_SUMMARY === $n->nodeName) {
				$type->setIsSummary(FHIRBoolean::xmlUnserialize($n));
			} elseif (self::FIELD_BINDING === $n->nodeName) {
				$type->setBinding(FHIRElementDefinitionBinding::xmlUnserialize($n));
			} elseif (self::FIELD_MAPPING === $n->nodeName) {
				$type->addMapping(FHIRElementDefinitionMapping::xmlUnserialize($n));
			} elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
				$type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_EXTENSION === $n->nodeName) {
				$type->addExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_ID === $n->nodeName) {
				$type->setId(FHIRStringPrimitive::xmlUnserialize($n));
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_PATH);
		if (null !== $n) {
			$pt = $type->getPath();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setPath($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_SLICE_NAME);
		if (null !== $n) {
			$pt = $type->getSliceName();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setSliceName($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_SLICE_IS_CONSTRAINING);
		if (null !== $n) {
			$pt = $type->getSliceIsConstraining();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setSliceIsConstraining($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_LABEL);
		if (null !== $n) {
			$pt = $type->getLabel();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setLabel($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_SHORT);
		if (null !== $n) {
			$pt = $type->getShort();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setShort($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_DEFINITION);
		if (null !== $n) {
			$pt = $type->getDefinition();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setDefinition($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_COMMENT);
		if (null !== $n) {
			$pt = $type->getComment();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setComment($n->nodeValue);
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
		$n = $element->attributes->getNamedItem(self::FIELD_ALIAS);
		if (null !== $n) {
			$pt = $type->getAlias();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->addAlias($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_MIN);
		if (null !== $n) {
			$pt = $type->getMin();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMin($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_MAX);
		if (null !== $n) {
			$pt = $type->getMax();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMax($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_CONTENT_REFERENCE);
		if (null !== $n) {
			$pt = $type->getContentReference();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setContentReference($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_DEFAULT_VALUE_BASE_64BINARY);
		if (null !== $n) {
			$pt = $type->getDefaultValueBase64Binary();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setDefaultValueBase64Binary($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_DEFAULT_VALUE_BOOLEAN);
		if (null !== $n) {
			$pt = $type->getDefaultValueBoolean();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setDefaultValueBoolean($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_DEFAULT_VALUE_CANONICAL);
		if (null !== $n) {
			$pt = $type->getDefaultValueCanonical();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setDefaultValueCanonical($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_DEFAULT_VALUE_CODE);
		if (null !== $n) {
			$pt = $type->getDefaultValueCode();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setDefaultValueCode($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_DEFAULT_VALUE_DATE);
		if (null !== $n) {
			$pt = $type->getDefaultValueDate();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setDefaultValueDate($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_DEFAULT_VALUE_DATE_TIME);
		if (null !== $n) {
			$pt = $type->getDefaultValueDateTime();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setDefaultValueDateTime($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_DEFAULT_VALUE_DECIMAL);
		if (null !== $n) {
			$pt = $type->getDefaultValueDecimal();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setDefaultValueDecimal($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_DEFAULT_VALUE_ID);
		if (null !== $n) {
			$pt = $type->getDefaultValueId();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setDefaultValueId($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_DEFAULT_VALUE_INSTANT);
		if (null !== $n) {
			$pt = $type->getDefaultValueInstant();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setDefaultValueInstant($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_DEFAULT_VALUE_INTEGER);
		if (null !== $n) {
			$pt = $type->getDefaultValueInteger();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setDefaultValueInteger($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_DEFAULT_VALUE_MARKDOWN);
		if (null !== $n) {
			$pt = $type->getDefaultValueMarkdown();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setDefaultValueMarkdown($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_DEFAULT_VALUE_OID);
		if (null !== $n) {
			$pt = $type->getDefaultValueOid();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setDefaultValueOid($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_DEFAULT_VALUE_POSITIVE_INT);
		if (null !== $n) {
			$pt = $type->getDefaultValuePositiveInt();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setDefaultValuePositiveInt($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_DEFAULT_VALUE_STRING);
		if (null !== $n) {
			$pt = $type->getDefaultValueString();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setDefaultValueString($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_DEFAULT_VALUE_TIME);
		if (null !== $n) {
			$pt = $type->getDefaultValueTime();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setDefaultValueTime($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_DEFAULT_VALUE_UNSIGNED_INT);
		if (null !== $n) {
			$pt = $type->getDefaultValueUnsignedInt();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setDefaultValueUnsignedInt($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_DEFAULT_VALUE_URI);
		if (null !== $n) {
			$pt = $type->getDefaultValueUri();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setDefaultValueUri($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_DEFAULT_VALUE_URL);
		if (null !== $n) {
			$pt = $type->getDefaultValueUrl();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setDefaultValueUrl($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_DEFAULT_VALUE_UUID);
		if (null !== $n) {
			$pt = $type->getDefaultValueUuid();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setDefaultValueUuid($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_MEANING_WHEN_MISSING);
		if (null !== $n) {
			$pt = $type->getMeaningWhenMissing();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMeaningWhenMissing($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_ORDER_MEANING);
		if (null !== $n) {
			$pt = $type->getOrderMeaning();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setOrderMeaning($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_FIXED_BASE_64BINARY);
		if (null !== $n) {
			$pt = $type->getFixedBase64Binary();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setFixedBase64Binary($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_FIXED_BOOLEAN);
		if (null !== $n) {
			$pt = $type->getFixedBoolean();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setFixedBoolean($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_FIXED_CANONICAL);
		if (null !== $n) {
			$pt = $type->getFixedCanonical();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setFixedCanonical($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_FIXED_CODE);
		if (null !== $n) {
			$pt = $type->getFixedCode();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setFixedCode($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_FIXED_DATE);
		if (null !== $n) {
			$pt = $type->getFixedDate();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setFixedDate($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_FIXED_DATE_TIME);
		if (null !== $n) {
			$pt = $type->getFixedDateTime();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setFixedDateTime($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_FIXED_DECIMAL);
		if (null !== $n) {
			$pt = $type->getFixedDecimal();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setFixedDecimal($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_FIXED_ID);
		if (null !== $n) {
			$pt = $type->getFixedId();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setFixedId($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_FIXED_INSTANT);
		if (null !== $n) {
			$pt = $type->getFixedInstant();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setFixedInstant($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_FIXED_INTEGER);
		if (null !== $n) {
			$pt = $type->getFixedInteger();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setFixedInteger($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_FIXED_MARKDOWN);
		if (null !== $n) {
			$pt = $type->getFixedMarkdown();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setFixedMarkdown($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_FIXED_OID);
		if (null !== $n) {
			$pt = $type->getFixedOid();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setFixedOid($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_FIXED_POSITIVE_INT);
		if (null !== $n) {
			$pt = $type->getFixedPositiveInt();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setFixedPositiveInt($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_FIXED_STRING);
		if (null !== $n) {
			$pt = $type->getFixedString();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setFixedString($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_FIXED_TIME);
		if (null !== $n) {
			$pt = $type->getFixedTime();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setFixedTime($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_FIXED_UNSIGNED_INT);
		if (null !== $n) {
			$pt = $type->getFixedUnsignedInt();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setFixedUnsignedInt($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_FIXED_URI);
		if (null !== $n) {
			$pt = $type->getFixedUri();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setFixedUri($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_FIXED_URL);
		if (null !== $n) {
			$pt = $type->getFixedUrl();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setFixedUrl($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_FIXED_UUID);
		if (null !== $n) {
			$pt = $type->getFixedUuid();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setFixedUuid($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_PATTERN_BASE_64BINARY);
		if (null !== $n) {
			$pt = $type->getPatternBase64Binary();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setPatternBase64Binary($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_PATTERN_BOOLEAN);
		if (null !== $n) {
			$pt = $type->getPatternBoolean();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setPatternBoolean($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_PATTERN_CANONICAL);
		if (null !== $n) {
			$pt = $type->getPatternCanonical();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setPatternCanonical($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_PATTERN_CODE);
		if (null !== $n) {
			$pt = $type->getPatternCode();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setPatternCode($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_PATTERN_DATE);
		if (null !== $n) {
			$pt = $type->getPatternDate();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setPatternDate($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_PATTERN_DATE_TIME);
		if (null !== $n) {
			$pt = $type->getPatternDateTime();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setPatternDateTime($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_PATTERN_DECIMAL);
		if (null !== $n) {
			$pt = $type->getPatternDecimal();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setPatternDecimal($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_PATTERN_ID);
		if (null !== $n) {
			$pt = $type->getPatternId();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setPatternId($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_PATTERN_INSTANT);
		if (null !== $n) {
			$pt = $type->getPatternInstant();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setPatternInstant($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_PATTERN_INTEGER);
		if (null !== $n) {
			$pt = $type->getPatternInteger();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setPatternInteger($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_PATTERN_MARKDOWN);
		if (null !== $n) {
			$pt = $type->getPatternMarkdown();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setPatternMarkdown($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_PATTERN_OID);
		if (null !== $n) {
			$pt = $type->getPatternOid();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setPatternOid($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_PATTERN_POSITIVE_INT);
		if (null !== $n) {
			$pt = $type->getPatternPositiveInt();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setPatternPositiveInt($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_PATTERN_STRING);
		if (null !== $n) {
			$pt = $type->getPatternString();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setPatternString($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_PATTERN_TIME);
		if (null !== $n) {
			$pt = $type->getPatternTime();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setPatternTime($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_PATTERN_UNSIGNED_INT);
		if (null !== $n) {
			$pt = $type->getPatternUnsignedInt();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setPatternUnsignedInt($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_PATTERN_URI);
		if (null !== $n) {
			$pt = $type->getPatternUri();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setPatternUri($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_PATTERN_URL);
		if (null !== $n) {
			$pt = $type->getPatternUrl();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setPatternUrl($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_PATTERN_UUID);
		if (null !== $n) {
			$pt = $type->getPatternUuid();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setPatternUuid($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_MIN_VALUE_DATE);
		if (null !== $n) {
			$pt = $type->getMinValueDate();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMinValueDate($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_MIN_VALUE_DATE_TIME);
		if (null !== $n) {
			$pt = $type->getMinValueDateTime();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMinValueDateTime($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_MIN_VALUE_INSTANT);
		if (null !== $n) {
			$pt = $type->getMinValueInstant();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMinValueInstant($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_MIN_VALUE_TIME);
		if (null !== $n) {
			$pt = $type->getMinValueTime();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMinValueTime($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_MIN_VALUE_DECIMAL);
		if (null !== $n) {
			$pt = $type->getMinValueDecimal();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMinValueDecimal($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_MIN_VALUE_INTEGER);
		if (null !== $n) {
			$pt = $type->getMinValueInteger();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMinValueInteger($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_MIN_VALUE_POSITIVE_INT);
		if (null !== $n) {
			$pt = $type->getMinValuePositiveInt();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMinValuePositiveInt($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_MIN_VALUE_UNSIGNED_INT);
		if (null !== $n) {
			$pt = $type->getMinValueUnsignedInt();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMinValueUnsignedInt($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_MAX_VALUE_DATE);
		if (null !== $n) {
			$pt = $type->getMaxValueDate();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMaxValueDate($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_MAX_VALUE_DATE_TIME);
		if (null !== $n) {
			$pt = $type->getMaxValueDateTime();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMaxValueDateTime($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_MAX_VALUE_INSTANT);
		if (null !== $n) {
			$pt = $type->getMaxValueInstant();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMaxValueInstant($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_MAX_VALUE_TIME);
		if (null !== $n) {
			$pt = $type->getMaxValueTime();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMaxValueTime($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_MAX_VALUE_DECIMAL);
		if (null !== $n) {
			$pt = $type->getMaxValueDecimal();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMaxValueDecimal($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_MAX_VALUE_INTEGER);
		if (null !== $n) {
			$pt = $type->getMaxValueInteger();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMaxValueInteger($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_MAX_VALUE_POSITIVE_INT);
		if (null !== $n) {
			$pt = $type->getMaxValuePositiveInt();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMaxValuePositiveInt($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_MAX_VALUE_UNSIGNED_INT);
		if (null !== $n) {
			$pt = $type->getMaxValueUnsignedInt();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMaxValueUnsignedInt($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_MAX_LENGTH);
		if (null !== $n) {
			$pt = $type->getMaxLength();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMaxLength($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_CONDITION);
		if (null !== $n) {
			$pt = $type->getCondition();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->addCondition($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_MUST_SUPPORT);
		if (null !== $n) {
			$pt = $type->getMustSupport();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMustSupport($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_IS_MODIFIER);
		if (null !== $n) {
			$pt = $type->getIsModifier();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setIsModifier($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_IS_MODIFIER_REASON);
		if (null !== $n) {
			$pt = $type->getIsModifierReason();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setIsModifierReason($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_IS_SUMMARY);
		if (null !== $n) {
			$pt = $type->getIsSummary();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setIsSummary($n->nodeValue);
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
		if (null !== ($v = $this->getPath())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATH);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getRepresentation())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_REPRESENTATION);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if (null !== ($v = $this->getSliceName())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_SLICE_NAME);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getSliceIsConstraining())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_SLICE_IS_CONSTRAINING);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getLabel())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_LABEL);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getCode())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_CODE);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if (null !== ($v = $this->getSlicing())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_SLICING);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getShort())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_SHORT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefinition())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEFINITION);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getComment())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_COMMENT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getRequirements())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_REQUIREMENTS);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getAlias())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_ALIAS);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if (null !== ($v = $this->getMin())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MIN);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMax())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MAX);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getBase())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_BASE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getContentReference())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_CONTENT_REFERENCE);
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
		if (null !== ($v = $this->getDefaultValueBase64Binary())) {
			$telement = $element->ownerDocument->createElement(
				self::FIELD_DEFAULT_VALUE_BASE_64BINARY,
			);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueBoolean())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEFAULT_VALUE_BOOLEAN);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueCanonical())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEFAULT_VALUE_CANONICAL);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueCode())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEFAULT_VALUE_CODE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueDate())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEFAULT_VALUE_DATE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueDateTime())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEFAULT_VALUE_DATE_TIME);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueDecimal())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEFAULT_VALUE_DECIMAL);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueId())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEFAULT_VALUE_ID);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueInstant())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEFAULT_VALUE_INSTANT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueInteger())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEFAULT_VALUE_INTEGER);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueMarkdown())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEFAULT_VALUE_MARKDOWN);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueOid())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEFAULT_VALUE_OID);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValuePositiveInt())) {
			$telement = $element->ownerDocument->createElement(
				self::FIELD_DEFAULT_VALUE_POSITIVE_INT,
			);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueString())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEFAULT_VALUE_STRING);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueTime())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEFAULT_VALUE_TIME);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueUnsignedInt())) {
			$telement = $element->ownerDocument->createElement(
				self::FIELD_DEFAULT_VALUE_UNSIGNED_INT,
			);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueUri())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEFAULT_VALUE_URI);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueUrl())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEFAULT_VALUE_URL);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueUuid())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEFAULT_VALUE_UUID);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueAddress())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEFAULT_VALUE_ADDRESS);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueAge())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEFAULT_VALUE_AGE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueAnnotation())) {
			$telement = $element->ownerDocument->createElement(
				self::FIELD_DEFAULT_VALUE_ANNOTATION,
			);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueAttachment())) {
			$telement = $element->ownerDocument->createElement(
				self::FIELD_DEFAULT_VALUE_ATTACHMENT,
			);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueCodeableConcept())) {
			$telement = $element->ownerDocument->createElement(
				self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT,
			);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueCoding())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEFAULT_VALUE_CODING);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueContactPoint())) {
			$telement = $element->ownerDocument->createElement(
				self::FIELD_DEFAULT_VALUE_CONTACT_POINT,
			);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueCount())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEFAULT_VALUE_COUNT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueDistance())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEFAULT_VALUE_DISTANCE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueDuration())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEFAULT_VALUE_DURATION);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueHumanName())) {
			$telement = $element->ownerDocument->createElement(
				self::FIELD_DEFAULT_VALUE_HUMAN_NAME,
			);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueIdentifier())) {
			$telement = $element->ownerDocument->createElement(
				self::FIELD_DEFAULT_VALUE_IDENTIFIER,
			);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueMoney())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEFAULT_VALUE_MONEY);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValuePeriod())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEFAULT_VALUE_PERIOD);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueQuantity())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEFAULT_VALUE_QUANTITY);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueRange())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEFAULT_VALUE_RANGE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueRatio())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEFAULT_VALUE_RATIO);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueReference())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEFAULT_VALUE_REFERENCE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueSampledData())) {
			$telement = $element->ownerDocument->createElement(
				self::FIELD_DEFAULT_VALUE_SAMPLED_DATA,
			);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueSignature())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEFAULT_VALUE_SIGNATURE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueTiming())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEFAULT_VALUE_TIMING);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueContactDetail())) {
			$telement = $element->ownerDocument->createElement(
				self::FIELD_DEFAULT_VALUE_CONTACT_DETAIL,
			);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueContributor())) {
			$telement = $element->ownerDocument->createElement(
				self::FIELD_DEFAULT_VALUE_CONTRIBUTOR,
			);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueDataRequirement())) {
			$telement = $element->ownerDocument->createElement(
				self::FIELD_DEFAULT_VALUE_DATA_REQUIREMENT,
			);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueExpression())) {
			$telement = $element->ownerDocument->createElement(
				self::FIELD_DEFAULT_VALUE_EXPRESSION,
			);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueParameterDefinition())) {
			$telement = $element->ownerDocument->createElement(
				self::FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION,
			);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueRelatedArtifact())) {
			$telement = $element->ownerDocument->createElement(
				self::FIELD_DEFAULT_VALUE_RELATED_ARTIFACT,
			);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueTriggerDefinition())) {
			$telement = $element->ownerDocument->createElement(
				self::FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION,
			);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueUsageContext())) {
			$telement = $element->ownerDocument->createElement(
				self::FIELD_DEFAULT_VALUE_USAGE_CONTEXT,
			);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueDosage())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEFAULT_VALUE_DOSAGE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueMeta())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEFAULT_VALUE_META);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMeaningWhenMissing())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MEANING_WHEN_MISSING);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getOrderMeaning())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_ORDER_MEANING);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedBase64Binary())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_BASE_64BINARY);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedBoolean())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_BOOLEAN);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedCanonical())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_CANONICAL);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedCode())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_CODE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedDate())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_DATE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedDateTime())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_DATE_TIME);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedDecimal())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_DECIMAL);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedId())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_ID);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedInstant())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_INSTANT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedInteger())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_INTEGER);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedMarkdown())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_MARKDOWN);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedOid())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_OID);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedPositiveInt())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_POSITIVE_INT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedString())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_STRING);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedTime())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_TIME);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedUnsignedInt())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_UNSIGNED_INT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedUri())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_URI);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedUrl())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_URL);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedUuid())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_UUID);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedAddress())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_ADDRESS);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedAge())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_AGE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedAnnotation())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_ANNOTATION);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedAttachment())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_ATTACHMENT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedCodeableConcept())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_CODEABLE_CONCEPT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedCoding())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_CODING);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedContactPoint())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_CONTACT_POINT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedCount())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_COUNT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedDistance())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_DISTANCE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedDuration())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_DURATION);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedHumanName())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_HUMAN_NAME);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedIdentifier())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_IDENTIFIER);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedMoney())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_MONEY);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedPeriod())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_PERIOD);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedQuantity())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_QUANTITY);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedRange())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_RANGE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedRatio())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_RATIO);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedReference())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_REFERENCE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedSampledData())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_SAMPLED_DATA);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedSignature())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_SIGNATURE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedTiming())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_TIMING);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedContactDetail())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_CONTACT_DETAIL);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedContributor())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_CONTRIBUTOR);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedDataRequirement())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_DATA_REQUIREMENT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedExpression())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_EXPRESSION);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedParameterDefinition())) {
			$telement = $element->ownerDocument->createElement(
				self::FIELD_FIXED_PARAMETER_DEFINITION,
			);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedRelatedArtifact())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_RELATED_ARTIFACT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedTriggerDefinition())) {
			$telement = $element->ownerDocument->createElement(
				self::FIELD_FIXED_TRIGGER_DEFINITION,
			);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedUsageContext())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_USAGE_CONTEXT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedDosage())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_DOSAGE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedMeta())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_META);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternBase64Binary())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_BASE_64BINARY);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternBoolean())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_BOOLEAN);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternCanonical())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_CANONICAL);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternCode())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_CODE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternDate())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_DATE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternDateTime())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_DATE_TIME);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternDecimal())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_DECIMAL);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternId())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_ID);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternInstant())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_INSTANT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternInteger())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_INTEGER);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternMarkdown())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_MARKDOWN);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternOid())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_OID);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternPositiveInt())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_POSITIVE_INT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternString())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_STRING);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternTime())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_TIME);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternUnsignedInt())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_UNSIGNED_INT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternUri())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_URI);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternUrl())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_URL);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternUuid())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_UUID);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternAddress())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_ADDRESS);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternAge())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_AGE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternAnnotation())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_ANNOTATION);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternAttachment())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_ATTACHMENT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternCodeableConcept())) {
			$telement = $element->ownerDocument->createElement(
				self::FIELD_PATTERN_CODEABLE_CONCEPT,
			);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternCoding())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_CODING);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternContactPoint())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_CONTACT_POINT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternCount())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_COUNT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternDistance())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_DISTANCE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternDuration())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_DURATION);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternHumanName())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_HUMAN_NAME);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternIdentifier())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_IDENTIFIER);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternMoney())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_MONEY);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternPeriod())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_PERIOD);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternQuantity())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_QUANTITY);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternRange())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_RANGE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternRatio())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_RATIO);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternReference())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_REFERENCE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternSampledData())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_SAMPLED_DATA);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternSignature())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_SIGNATURE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternTiming())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_TIMING);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternContactDetail())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_CONTACT_DETAIL);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternContributor())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_CONTRIBUTOR);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternDataRequirement())) {
			$telement = $element->ownerDocument->createElement(
				self::FIELD_PATTERN_DATA_REQUIREMENT,
			);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternExpression())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_EXPRESSION);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternParameterDefinition())) {
			$telement = $element->ownerDocument->createElement(
				self::FIELD_PATTERN_PARAMETER_DEFINITION,
			);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternRelatedArtifact())) {
			$telement = $element->ownerDocument->createElement(
				self::FIELD_PATTERN_RELATED_ARTIFACT,
			);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternTriggerDefinition())) {
			$telement = $element->ownerDocument->createElement(
				self::FIELD_PATTERN_TRIGGER_DEFINITION,
			);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternUsageContext())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_USAGE_CONTEXT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternDosage())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_DOSAGE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternMeta())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_META);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getExample())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if (null !== ($v = $this->getMinValueDate())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MIN_VALUE_DATE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMinValueDateTime())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MIN_VALUE_DATE_TIME);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMinValueInstant())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MIN_VALUE_INSTANT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMinValueTime())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MIN_VALUE_TIME);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMinValueDecimal())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MIN_VALUE_DECIMAL);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMinValueInteger())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MIN_VALUE_INTEGER);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMinValuePositiveInt())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MIN_VALUE_POSITIVE_INT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMinValueUnsignedInt())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MIN_VALUE_UNSIGNED_INT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMinValueQuantity())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MIN_VALUE_QUANTITY);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMaxValueDate())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MAX_VALUE_DATE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMaxValueDateTime())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MAX_VALUE_DATE_TIME);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMaxValueInstant())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MAX_VALUE_INSTANT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMaxValueTime())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MAX_VALUE_TIME);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMaxValueDecimal())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MAX_VALUE_DECIMAL);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMaxValueInteger())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MAX_VALUE_INTEGER);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMaxValuePositiveInt())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MAX_VALUE_POSITIVE_INT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMaxValueUnsignedInt())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MAX_VALUE_UNSIGNED_INT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMaxValueQuantity())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MAX_VALUE_QUANTITY);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMaxLength())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MAX_LENGTH);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getCondition())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_CONDITION);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if ([] !== ($vs = $this->getConstraint())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_CONSTRAINT);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if (null !== ($v = $this->getMustSupport())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MUST_SUPPORT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getIsModifier())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_IS_MODIFIER);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getIsModifierReason())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_IS_MODIFIER_REASON);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getIsSummary())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_IS_SUMMARY);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getBinding())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_BINDING);
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
		return $element;
	}

	/**
	 * @return \stdClass
	 */
	public function jsonSerialize()
	{
		$out = parent::jsonSerialize();
		if (null !== ($v = $this->getPath())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_PATH} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRString::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_PATH_EXT} = $ext;
			}
		}
		if ([] !== ($vs = $this->getRepresentation())) {
			$vals = [];
			$exts = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$val = $v->getValue();
				$ext = $v->jsonSerialize();
				unset($ext->{FHIRPropertyRepresentation::FIELD_VALUE});
				if (null !== $val) {
					$vals[] = $val;
				}
				if ([] !== $ext) {
					$exts[] = $ext;
				}
			}
			if ([] !== $vals) {
				$out->{self::FIELD_REPRESENTATION} = $vals;
			}
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_REPRESENTATION_EXT} = $exts;
			}
		}
		if (null !== ($v = $this->getSliceName())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_SLICE_NAME} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRString::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_SLICE_NAME_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getSliceIsConstraining())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_SLICE_IS_CONSTRAINING} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRBoolean::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_SLICE_IS_CONSTRAINING_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getLabel())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_LABEL} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRString::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_LABEL_EXT} = $ext;
			}
		}
		if ([] !== ($vs = $this->getCode())) {
			$out->{self::FIELD_CODE} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_CODE}[] = $v;
			}
		}
		if (null !== ($v = $this->getSlicing())) {
			$out->{self::FIELD_SLICING} = $v;
		}
		if (null !== ($v = $this->getShort())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_SHORT} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRString::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_SHORT_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getDefinition())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_DEFINITION} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRMarkdown::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_DEFINITION_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getComment())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_COMMENT} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRMarkdown::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_COMMENT_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getRequirements())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_REQUIREMENTS} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRMarkdown::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_REQUIREMENTS_EXT} = $ext;
			}
		}
		if ([] !== ($vs = $this->getAlias())) {
			$vals = [];
			$exts = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$val = $v->getValue();
				$ext = $v->jsonSerialize();
				unset($ext->{FHIRString::FIELD_VALUE});
				if (null !== $val) {
					$vals[] = $val;
				}
				if ([] !== $ext) {
					$exts[] = $ext;
				}
			}
			if ([] !== $vals) {
				$out->{self::FIELD_ALIAS} = $vals;
			}
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_ALIAS_EXT} = $exts;
			}
		}
		if (null !== ($v = $this->getMin())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_MIN} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRUnsignedInt::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_MIN_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getMax())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_MAX} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRString::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_MAX_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getBase())) {
			$out->{self::FIELD_BASE} = $v;
		}
		if (null !== ($v = $this->getContentReference())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_CONTENT_REFERENCE} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRUri::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_CONTENT_REFERENCE_EXT} = $ext;
			}
		}
		if ([] !== ($vs = $this->getType())) {
			$out->{self::FIELD_TYPE} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_TYPE}[] = $v;
			}
		}
		if (null !== ($v = $this->getDefaultValueBase64Binary())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_DEFAULT_VALUE_BASE_64BINARY} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRBase64Binary::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_DEFAULT_VALUE_BASE_64BINARY_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getDefaultValueBoolean())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_DEFAULT_VALUE_BOOLEAN} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRBoolean::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_DEFAULT_VALUE_BOOLEAN_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getDefaultValueCanonical())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_DEFAULT_VALUE_CANONICAL} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRCanonical::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_DEFAULT_VALUE_CANONICAL_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getDefaultValueCode())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_DEFAULT_VALUE_CODE} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRCode::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_DEFAULT_VALUE_CODE_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getDefaultValueDate())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_DEFAULT_VALUE_DATE} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRDate::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_DEFAULT_VALUE_DATE_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getDefaultValueDateTime())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_DEFAULT_VALUE_DATE_TIME} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRDateTime::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_DEFAULT_VALUE_DATE_TIME_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getDefaultValueDecimal())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_DEFAULT_VALUE_DECIMAL} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRDecimal::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_DEFAULT_VALUE_DECIMAL_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getDefaultValueId())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_DEFAULT_VALUE_ID} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRId::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_DEFAULT_VALUE_ID_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getDefaultValueInstant())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_DEFAULT_VALUE_INSTANT} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRInstant::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_DEFAULT_VALUE_INSTANT_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getDefaultValueInteger())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_DEFAULT_VALUE_INTEGER} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRInteger::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_DEFAULT_VALUE_INTEGER_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getDefaultValueMarkdown())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_DEFAULT_VALUE_MARKDOWN} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRMarkdown::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_DEFAULT_VALUE_MARKDOWN_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getDefaultValueOid())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_DEFAULT_VALUE_OID} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIROid::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_DEFAULT_VALUE_OID_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getDefaultValuePositiveInt())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_DEFAULT_VALUE_POSITIVE_INT} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRPositiveInt::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_DEFAULT_VALUE_POSITIVE_INT_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getDefaultValueString())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_DEFAULT_VALUE_STRING} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRString::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_DEFAULT_VALUE_STRING_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getDefaultValueTime())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_DEFAULT_VALUE_TIME} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRTime::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_DEFAULT_VALUE_TIME_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getDefaultValueUnsignedInt())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_DEFAULT_VALUE_UNSIGNED_INT} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRUnsignedInt::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_DEFAULT_VALUE_UNSIGNED_INT_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getDefaultValueUri())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_DEFAULT_VALUE_URI} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRUri::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_DEFAULT_VALUE_URI_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getDefaultValueUrl())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_DEFAULT_VALUE_URL} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRUrl::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_DEFAULT_VALUE_URL_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getDefaultValueUuid())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_DEFAULT_VALUE_UUID} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRUuid::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_DEFAULT_VALUE_UUID_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getDefaultValueAddress())) {
			$out->{self::FIELD_DEFAULT_VALUE_ADDRESS} = $v;
		}
		if (null !== ($v = $this->getDefaultValueAge())) {
			$out->{self::FIELD_DEFAULT_VALUE_AGE} = $v;
		}
		if (null !== ($v = $this->getDefaultValueAnnotation())) {
			$out->{self::FIELD_DEFAULT_VALUE_ANNOTATION} = $v;
		}
		if (null !== ($v = $this->getDefaultValueAttachment())) {
			$out->{self::FIELD_DEFAULT_VALUE_ATTACHMENT} = $v;
		}
		if (null !== ($v = $this->getDefaultValueCodeableConcept())) {
			$out->{self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT} = $v;
		}
		if (null !== ($v = $this->getDefaultValueCoding())) {
			$out->{self::FIELD_DEFAULT_VALUE_CODING} = $v;
		}
		if (null !== ($v = $this->getDefaultValueContactPoint())) {
			$out->{self::FIELD_DEFAULT_VALUE_CONTACT_POINT} = $v;
		}
		if (null !== ($v = $this->getDefaultValueCount())) {
			$out->{self::FIELD_DEFAULT_VALUE_COUNT} = $v;
		}
		if (null !== ($v = $this->getDefaultValueDistance())) {
			$out->{self::FIELD_DEFAULT_VALUE_DISTANCE} = $v;
		}
		if (null !== ($v = $this->getDefaultValueDuration())) {
			$out->{self::FIELD_DEFAULT_VALUE_DURATION} = $v;
		}
		if (null !== ($v = $this->getDefaultValueHumanName())) {
			$out->{self::FIELD_DEFAULT_VALUE_HUMAN_NAME} = $v;
		}
		if (null !== ($v = $this->getDefaultValueIdentifier())) {
			$out->{self::FIELD_DEFAULT_VALUE_IDENTIFIER} = $v;
		}
		if (null !== ($v = $this->getDefaultValueMoney())) {
			$out->{self::FIELD_DEFAULT_VALUE_MONEY} = $v;
		}
		if (null !== ($v = $this->getDefaultValuePeriod())) {
			$out->{self::FIELD_DEFAULT_VALUE_PERIOD} = $v;
		}
		if (null !== ($v = $this->getDefaultValueQuantity())) {
			$out->{self::FIELD_DEFAULT_VALUE_QUANTITY} = $v;
		}
		if (null !== ($v = $this->getDefaultValueRange())) {
			$out->{self::FIELD_DEFAULT_VALUE_RANGE} = $v;
		}
		if (null !== ($v = $this->getDefaultValueRatio())) {
			$out->{self::FIELD_DEFAULT_VALUE_RATIO} = $v;
		}
		if (null !== ($v = $this->getDefaultValueReference())) {
			$out->{self::FIELD_DEFAULT_VALUE_REFERENCE} = $v;
		}
		if (null !== ($v = $this->getDefaultValueSampledData())) {
			$out->{self::FIELD_DEFAULT_VALUE_SAMPLED_DATA} = $v;
		}
		if (null !== ($v = $this->getDefaultValueSignature())) {
			$out->{self::FIELD_DEFAULT_VALUE_SIGNATURE} = $v;
		}
		if (null !== ($v = $this->getDefaultValueTiming())) {
			$out->{self::FIELD_DEFAULT_VALUE_TIMING} = $v;
		}
		if (null !== ($v = $this->getDefaultValueContactDetail())) {
			$out->{self::FIELD_DEFAULT_VALUE_CONTACT_DETAIL} = $v;
		}
		if (null !== ($v = $this->getDefaultValueContributor())) {
			$out->{self::FIELD_DEFAULT_VALUE_CONTRIBUTOR} = $v;
		}
		if (null !== ($v = $this->getDefaultValueDataRequirement())) {
			$out->{self::FIELD_DEFAULT_VALUE_DATA_REQUIREMENT} = $v;
		}
		if (null !== ($v = $this->getDefaultValueExpression())) {
			$out->{self::FIELD_DEFAULT_VALUE_EXPRESSION} = $v;
		}
		if (null !== ($v = $this->getDefaultValueParameterDefinition())) {
			$out->{self::FIELD_DEFAULT_VALUE_PARAMETER_DEFINITION} = $v;
		}
		if (null !== ($v = $this->getDefaultValueRelatedArtifact())) {
			$out->{self::FIELD_DEFAULT_VALUE_RELATED_ARTIFACT} = $v;
		}
		if (null !== ($v = $this->getDefaultValueTriggerDefinition())) {
			$out->{self::FIELD_DEFAULT_VALUE_TRIGGER_DEFINITION} = $v;
		}
		if (null !== ($v = $this->getDefaultValueUsageContext())) {
			$out->{self::FIELD_DEFAULT_VALUE_USAGE_CONTEXT} = $v;
		}
		if (null !== ($v = $this->getDefaultValueDosage())) {
			$out->{self::FIELD_DEFAULT_VALUE_DOSAGE} = $v;
		}
		if (null !== ($v = $this->getDefaultValueMeta())) {
			$out->{self::FIELD_DEFAULT_VALUE_META} = $v;
		}
		if (null !== ($v = $this->getMeaningWhenMissing())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_MEANING_WHEN_MISSING} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRMarkdown::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_MEANING_WHEN_MISSING_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getOrderMeaning())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_ORDER_MEANING} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRString::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_ORDER_MEANING_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getFixedBase64Binary())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_FIXED_BASE_64BINARY} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRBase64Binary::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_FIXED_BASE_64BINARY_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getFixedBoolean())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_FIXED_BOOLEAN} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRBoolean::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_FIXED_BOOLEAN_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getFixedCanonical())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_FIXED_CANONICAL} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRCanonical::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_FIXED_CANONICAL_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getFixedCode())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_FIXED_CODE} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRCode::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_FIXED_CODE_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getFixedDate())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_FIXED_DATE} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRDate::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_FIXED_DATE_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getFixedDateTime())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_FIXED_DATE_TIME} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRDateTime::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_FIXED_DATE_TIME_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getFixedDecimal())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_FIXED_DECIMAL} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRDecimal::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_FIXED_DECIMAL_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getFixedId())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_FIXED_ID} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRId::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_FIXED_ID_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getFixedInstant())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_FIXED_INSTANT} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRInstant::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_FIXED_INSTANT_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getFixedInteger())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_FIXED_INTEGER} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRInteger::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_FIXED_INTEGER_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getFixedMarkdown())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_FIXED_MARKDOWN} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRMarkdown::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_FIXED_MARKDOWN_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getFixedOid())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_FIXED_OID} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIROid::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_FIXED_OID_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getFixedPositiveInt())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_FIXED_POSITIVE_INT} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRPositiveInt::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_FIXED_POSITIVE_INT_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getFixedString())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_FIXED_STRING} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRString::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_FIXED_STRING_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getFixedTime())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_FIXED_TIME} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRTime::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_FIXED_TIME_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getFixedUnsignedInt())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_FIXED_UNSIGNED_INT} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRUnsignedInt::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_FIXED_UNSIGNED_INT_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getFixedUri())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_FIXED_URI} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRUri::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_FIXED_URI_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getFixedUrl())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_FIXED_URL} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRUrl::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_FIXED_URL_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getFixedUuid())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_FIXED_UUID} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRUuid::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_FIXED_UUID_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getFixedAddress())) {
			$out->{self::FIELD_FIXED_ADDRESS} = $v;
		}
		if (null !== ($v = $this->getFixedAge())) {
			$out->{self::FIELD_FIXED_AGE} = $v;
		}
		if (null !== ($v = $this->getFixedAnnotation())) {
			$out->{self::FIELD_FIXED_ANNOTATION} = $v;
		}
		if (null !== ($v = $this->getFixedAttachment())) {
			$out->{self::FIELD_FIXED_ATTACHMENT} = $v;
		}
		if (null !== ($v = $this->getFixedCodeableConcept())) {
			$out->{self::FIELD_FIXED_CODEABLE_CONCEPT} = $v;
		}
		if (null !== ($v = $this->getFixedCoding())) {
			$out->{self::FIELD_FIXED_CODING} = $v;
		}
		if (null !== ($v = $this->getFixedContactPoint())) {
			$out->{self::FIELD_FIXED_CONTACT_POINT} = $v;
		}
		if (null !== ($v = $this->getFixedCount())) {
			$out->{self::FIELD_FIXED_COUNT} = $v;
		}
		if (null !== ($v = $this->getFixedDistance())) {
			$out->{self::FIELD_FIXED_DISTANCE} = $v;
		}
		if (null !== ($v = $this->getFixedDuration())) {
			$out->{self::FIELD_FIXED_DURATION} = $v;
		}
		if (null !== ($v = $this->getFixedHumanName())) {
			$out->{self::FIELD_FIXED_HUMAN_NAME} = $v;
		}
		if (null !== ($v = $this->getFixedIdentifier())) {
			$out->{self::FIELD_FIXED_IDENTIFIER} = $v;
		}
		if (null !== ($v = $this->getFixedMoney())) {
			$out->{self::FIELD_FIXED_MONEY} = $v;
		}
		if (null !== ($v = $this->getFixedPeriod())) {
			$out->{self::FIELD_FIXED_PERIOD} = $v;
		}
		if (null !== ($v = $this->getFixedQuantity())) {
			$out->{self::FIELD_FIXED_QUANTITY} = $v;
		}
		if (null !== ($v = $this->getFixedRange())) {
			$out->{self::FIELD_FIXED_RANGE} = $v;
		}
		if (null !== ($v = $this->getFixedRatio())) {
			$out->{self::FIELD_FIXED_RATIO} = $v;
		}
		if (null !== ($v = $this->getFixedReference())) {
			$out->{self::FIELD_FIXED_REFERENCE} = $v;
		}
		if (null !== ($v = $this->getFixedSampledData())) {
			$out->{self::FIELD_FIXED_SAMPLED_DATA} = $v;
		}
		if (null !== ($v = $this->getFixedSignature())) {
			$out->{self::FIELD_FIXED_SIGNATURE} = $v;
		}
		if (null !== ($v = $this->getFixedTiming())) {
			$out->{self::FIELD_FIXED_TIMING} = $v;
		}
		if (null !== ($v = $this->getFixedContactDetail())) {
			$out->{self::FIELD_FIXED_CONTACT_DETAIL} = $v;
		}
		if (null !== ($v = $this->getFixedContributor())) {
			$out->{self::FIELD_FIXED_CONTRIBUTOR} = $v;
		}
		if (null !== ($v = $this->getFixedDataRequirement())) {
			$out->{self::FIELD_FIXED_DATA_REQUIREMENT} = $v;
		}
		if (null !== ($v = $this->getFixedExpression())) {
			$out->{self::FIELD_FIXED_EXPRESSION} = $v;
		}
		if (null !== ($v = $this->getFixedParameterDefinition())) {
			$out->{self::FIELD_FIXED_PARAMETER_DEFINITION} = $v;
		}
		if (null !== ($v = $this->getFixedRelatedArtifact())) {
			$out->{self::FIELD_FIXED_RELATED_ARTIFACT} = $v;
		}
		if (null !== ($v = $this->getFixedTriggerDefinition())) {
			$out->{self::FIELD_FIXED_TRIGGER_DEFINITION} = $v;
		}
		if (null !== ($v = $this->getFixedUsageContext())) {
			$out->{self::FIELD_FIXED_USAGE_CONTEXT} = $v;
		}
		if (null !== ($v = $this->getFixedDosage())) {
			$out->{self::FIELD_FIXED_DOSAGE} = $v;
		}
		if (null !== ($v = $this->getFixedMeta())) {
			$out->{self::FIELD_FIXED_META} = $v;
		}
		if (null !== ($v = $this->getPatternBase64Binary())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_PATTERN_BASE_64BINARY} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRBase64Binary::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_PATTERN_BASE_64BINARY_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getPatternBoolean())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_PATTERN_BOOLEAN} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRBoolean::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_PATTERN_BOOLEAN_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getPatternCanonical())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_PATTERN_CANONICAL} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRCanonical::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_PATTERN_CANONICAL_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getPatternCode())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_PATTERN_CODE} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRCode::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_PATTERN_CODE_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getPatternDate())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_PATTERN_DATE} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRDate::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_PATTERN_DATE_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getPatternDateTime())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_PATTERN_DATE_TIME} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRDateTime::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_PATTERN_DATE_TIME_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getPatternDecimal())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_PATTERN_DECIMAL} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRDecimal::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_PATTERN_DECIMAL_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getPatternId())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_PATTERN_ID} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRId::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_PATTERN_ID_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getPatternInstant())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_PATTERN_INSTANT} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRInstant::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_PATTERN_INSTANT_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getPatternInteger())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_PATTERN_INTEGER} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRInteger::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_PATTERN_INTEGER_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getPatternMarkdown())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_PATTERN_MARKDOWN} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRMarkdown::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_PATTERN_MARKDOWN_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getPatternOid())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_PATTERN_OID} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIROid::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_PATTERN_OID_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getPatternPositiveInt())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_PATTERN_POSITIVE_INT} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRPositiveInt::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_PATTERN_POSITIVE_INT_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getPatternString())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_PATTERN_STRING} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRString::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_PATTERN_STRING_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getPatternTime())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_PATTERN_TIME} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRTime::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_PATTERN_TIME_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getPatternUnsignedInt())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_PATTERN_UNSIGNED_INT} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRUnsignedInt::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_PATTERN_UNSIGNED_INT_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getPatternUri())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_PATTERN_URI} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRUri::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_PATTERN_URI_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getPatternUrl())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_PATTERN_URL} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRUrl::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_PATTERN_URL_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getPatternUuid())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_PATTERN_UUID} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRUuid::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_PATTERN_UUID_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getPatternAddress())) {
			$out->{self::FIELD_PATTERN_ADDRESS} = $v;
		}
		if (null !== ($v = $this->getPatternAge())) {
			$out->{self::FIELD_PATTERN_AGE} = $v;
		}
		if (null !== ($v = $this->getPatternAnnotation())) {
			$out->{self::FIELD_PATTERN_ANNOTATION} = $v;
		}
		if (null !== ($v = $this->getPatternAttachment())) {
			$out->{self::FIELD_PATTERN_ATTACHMENT} = $v;
		}
		if (null !== ($v = $this->getPatternCodeableConcept())) {
			$out->{self::FIELD_PATTERN_CODEABLE_CONCEPT} = $v;
		}
		if (null !== ($v = $this->getPatternCoding())) {
			$out->{self::FIELD_PATTERN_CODING} = $v;
		}
		if (null !== ($v = $this->getPatternContactPoint())) {
			$out->{self::FIELD_PATTERN_CONTACT_POINT} = $v;
		}
		if (null !== ($v = $this->getPatternCount())) {
			$out->{self::FIELD_PATTERN_COUNT} = $v;
		}
		if (null !== ($v = $this->getPatternDistance())) {
			$out->{self::FIELD_PATTERN_DISTANCE} = $v;
		}
		if (null !== ($v = $this->getPatternDuration())) {
			$out->{self::FIELD_PATTERN_DURATION} = $v;
		}
		if (null !== ($v = $this->getPatternHumanName())) {
			$out->{self::FIELD_PATTERN_HUMAN_NAME} = $v;
		}
		if (null !== ($v = $this->getPatternIdentifier())) {
			$out->{self::FIELD_PATTERN_IDENTIFIER} = $v;
		}
		if (null !== ($v = $this->getPatternMoney())) {
			$out->{self::FIELD_PATTERN_MONEY} = $v;
		}
		if (null !== ($v = $this->getPatternPeriod())) {
			$out->{self::FIELD_PATTERN_PERIOD} = $v;
		}
		if (null !== ($v = $this->getPatternQuantity())) {
			$out->{self::FIELD_PATTERN_QUANTITY} = $v;
		}
		if (null !== ($v = $this->getPatternRange())) {
			$out->{self::FIELD_PATTERN_RANGE} = $v;
		}
		if (null !== ($v = $this->getPatternRatio())) {
			$out->{self::FIELD_PATTERN_RATIO} = $v;
		}
		if (null !== ($v = $this->getPatternReference())) {
			$out->{self::FIELD_PATTERN_REFERENCE} = $v;
		}
		if (null !== ($v = $this->getPatternSampledData())) {
			$out->{self::FIELD_PATTERN_SAMPLED_DATA} = $v;
		}
		if (null !== ($v = $this->getPatternSignature())) {
			$out->{self::FIELD_PATTERN_SIGNATURE} = $v;
		}
		if (null !== ($v = $this->getPatternTiming())) {
			$out->{self::FIELD_PATTERN_TIMING} = $v;
		}
		if (null !== ($v = $this->getPatternContactDetail())) {
			$out->{self::FIELD_PATTERN_CONTACT_DETAIL} = $v;
		}
		if (null !== ($v = $this->getPatternContributor())) {
			$out->{self::FIELD_PATTERN_CONTRIBUTOR} = $v;
		}
		if (null !== ($v = $this->getPatternDataRequirement())) {
			$out->{self::FIELD_PATTERN_DATA_REQUIREMENT} = $v;
		}
		if (null !== ($v = $this->getPatternExpression())) {
			$out->{self::FIELD_PATTERN_EXPRESSION} = $v;
		}
		if (null !== ($v = $this->getPatternParameterDefinition())) {
			$out->{self::FIELD_PATTERN_PARAMETER_DEFINITION} = $v;
		}
		if (null !== ($v = $this->getPatternRelatedArtifact())) {
			$out->{self::FIELD_PATTERN_RELATED_ARTIFACT} = $v;
		}
		if (null !== ($v = $this->getPatternTriggerDefinition())) {
			$out->{self::FIELD_PATTERN_TRIGGER_DEFINITION} = $v;
		}
		if (null !== ($v = $this->getPatternUsageContext())) {
			$out->{self::FIELD_PATTERN_USAGE_CONTEXT} = $v;
		}
		if (null !== ($v = $this->getPatternDosage())) {
			$out->{self::FIELD_PATTERN_DOSAGE} = $v;
		}
		if (null !== ($v = $this->getPatternMeta())) {
			$out->{self::FIELD_PATTERN_META} = $v;
		}
		if ([] !== ($vs = $this->getExample())) {
			$out->{self::FIELD_EXAMPLE} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_EXAMPLE}[] = $v;
			}
		}
		if (null !== ($v = $this->getMinValueDate())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_MIN_VALUE_DATE} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRDate::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_MIN_VALUE_DATE_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getMinValueDateTime())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_MIN_VALUE_DATE_TIME} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRDateTime::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_MIN_VALUE_DATE_TIME_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getMinValueInstant())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_MIN_VALUE_INSTANT} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRInstant::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_MIN_VALUE_INSTANT_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getMinValueTime())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_MIN_VALUE_TIME} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRTime::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_MIN_VALUE_TIME_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getMinValueDecimal())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_MIN_VALUE_DECIMAL} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRDecimal::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_MIN_VALUE_DECIMAL_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getMinValueInteger())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_MIN_VALUE_INTEGER} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRInteger::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_MIN_VALUE_INTEGER_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getMinValuePositiveInt())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_MIN_VALUE_POSITIVE_INT} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRPositiveInt::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_MIN_VALUE_POSITIVE_INT_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getMinValueUnsignedInt())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_MIN_VALUE_UNSIGNED_INT} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRUnsignedInt::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_MIN_VALUE_UNSIGNED_INT_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getMinValueQuantity())) {
			$out->{self::FIELD_MIN_VALUE_QUANTITY} = $v;
		}
		if (null !== ($v = $this->getMaxValueDate())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_MAX_VALUE_DATE} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRDate::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_MAX_VALUE_DATE_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getMaxValueDateTime())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_MAX_VALUE_DATE_TIME} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRDateTime::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_MAX_VALUE_DATE_TIME_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getMaxValueInstant())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_MAX_VALUE_INSTANT} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRInstant::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_MAX_VALUE_INSTANT_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getMaxValueTime())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_MAX_VALUE_TIME} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRTime::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_MAX_VALUE_TIME_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getMaxValueDecimal())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_MAX_VALUE_DECIMAL} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRDecimal::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_MAX_VALUE_DECIMAL_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getMaxValueInteger())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_MAX_VALUE_INTEGER} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRInteger::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_MAX_VALUE_INTEGER_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getMaxValuePositiveInt())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_MAX_VALUE_POSITIVE_INT} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRPositiveInt::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_MAX_VALUE_POSITIVE_INT_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getMaxValueUnsignedInt())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_MAX_VALUE_UNSIGNED_INT} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRUnsignedInt::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_MAX_VALUE_UNSIGNED_INT_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getMaxValueQuantity())) {
			$out->{self::FIELD_MAX_VALUE_QUANTITY} = $v;
		}
		if (null !== ($v = $this->getMaxLength())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_MAX_LENGTH} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRInteger::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_MAX_LENGTH_EXT} = $ext;
			}
		}
		if ([] !== ($vs = $this->getCondition())) {
			$vals = [];
			$exts = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$val = $v->getValue();
				$ext = $v->jsonSerialize();
				unset($ext->{FHIRId::FIELD_VALUE});
				if (null !== $val) {
					$vals[] = $val;
				}
				if ([] !== $ext) {
					$exts[] = $ext;
				}
			}
			if ([] !== $vals) {
				$out->{self::FIELD_CONDITION} = $vals;
			}
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_CONDITION_EXT} = $exts;
			}
		}
		if ([] !== ($vs = $this->getConstraint())) {
			$out->{self::FIELD_CONSTRAINT} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_CONSTRAINT}[] = $v;
			}
		}
		if (null !== ($v = $this->getMustSupport())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_MUST_SUPPORT} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRBoolean::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_MUST_SUPPORT_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getIsModifier())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_IS_MODIFIER} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRBoolean::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_IS_MODIFIER_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getIsModifierReason())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_IS_MODIFIER_REASON} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRString::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_IS_MODIFIER_REASON_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getIsSummary())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_IS_SUMMARY} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRBoolean::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_IS_SUMMARY_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getBinding())) {
			$out->{self::FIELD_BINDING} = $v;
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
