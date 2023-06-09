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
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBase;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBinding;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionConstraint;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionMapping;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionSlicing;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType;
use Calvient\FhirTypes\DSTU2\FHIRIdPrimitive;
use Calvient\FhirTypes\DSTU2\PHPFHIRConstants;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeInterface;

/**
 * Captures constraints on each element within the resource, profile, or extension.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 *
 * Class FHIRElementDefinition
 * @package \Calvient\FhirTypes\DSTU2\FHIRElement
 */
class FHIRElementDefinition extends FHIRElement
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION;
	const FIELD_PATH = 'path';
	const FIELD_PATH_EXT = '_path';
	const FIELD_REPRESENTATION = 'representation';
	const FIELD_REPRESENTATION_EXT = '_representation';
	const FIELD_NAME = 'name';
	const FIELD_NAME_EXT = '_name';
	const FIELD_LABEL = 'label';
	const FIELD_LABEL_EXT = '_label';
	const FIELD_CODE = 'code';
	const FIELD_SLICING = 'slicing';
	const FIELD_SHORT = 'short';
	const FIELD_SHORT_EXT = '_short';
	const FIELD_DEFINITION = 'definition';
	const FIELD_DEFINITION_EXT = '_definition';
	const FIELD_COMMENTS = 'comments';
	const FIELD_COMMENTS_EXT = '_comments';
	const FIELD_REQUIREMENTS = 'requirements';
	const FIELD_REQUIREMENTS_EXT = '_requirements';
	const FIELD_ALIAS = 'alias';
	const FIELD_ALIAS_EXT = '_alias';
	const FIELD_MIN = 'min';
	const FIELD_MIN_EXT = '_min';
	const FIELD_MAX = 'max';
	const FIELD_MAX_EXT = '_max';
	const FIELD_BASE = 'base';
	const FIELD_TYPE = 'type';
	const FIELD_NAME_REFERENCE = 'nameReference';
	const FIELD_NAME_REFERENCE_EXT = '_nameReference';
	const FIELD_DEFAULT_VALUE_BOOLEAN = 'defaultValueBoolean';
	const FIELD_DEFAULT_VALUE_BOOLEAN_EXT = '_defaultValueBoolean';
	const FIELD_DEFAULT_VALUE_INTEGER = 'defaultValueInteger';
	const FIELD_DEFAULT_VALUE_INTEGER_EXT = '_defaultValueInteger';
	const FIELD_DEFAULT_VALUE_DECIMAL = 'defaultValueDecimal';
	const FIELD_DEFAULT_VALUE_DECIMAL_EXT = '_defaultValueDecimal';
	const FIELD_DEFAULT_VALUE_BASE_64BINARY = 'defaultValueBase64Binary';
	const FIELD_DEFAULT_VALUE_BASE_64BINARY_EXT = '_defaultValueBase64Binary';
	const FIELD_DEFAULT_VALUE_INSTANT = 'defaultValueInstant';
	const FIELD_DEFAULT_VALUE_INSTANT_EXT = '_defaultValueInstant';
	const FIELD_DEFAULT_VALUE_STRING = 'defaultValueString';
	const FIELD_DEFAULT_VALUE_STRING_EXT = '_defaultValueString';
	const FIELD_DEFAULT_VALUE_URI = 'defaultValueUri';
	const FIELD_DEFAULT_VALUE_URI_EXT = '_defaultValueUri';
	const FIELD_DEFAULT_VALUE_DATE = 'defaultValueDate';
	const FIELD_DEFAULT_VALUE_DATE_EXT = '_defaultValueDate';
	const FIELD_DEFAULT_VALUE_DATE_TIME = 'defaultValueDateTime';
	const FIELD_DEFAULT_VALUE_DATE_TIME_EXT = '_defaultValueDateTime';
	const FIELD_DEFAULT_VALUE_TIME = 'defaultValueTime';
	const FIELD_DEFAULT_VALUE_TIME_EXT = '_defaultValueTime';
	const FIELD_DEFAULT_VALUE_CODE = 'defaultValueCode';
	const FIELD_DEFAULT_VALUE_CODE_EXT = '_defaultValueCode';
	const FIELD_DEFAULT_VALUE_OID = 'defaultValueOid';
	const FIELD_DEFAULT_VALUE_OID_EXT = '_defaultValueOid';
	const FIELD_DEFAULT_VALUE_UUID = 'defaultValueUuid';
	const FIELD_DEFAULT_VALUE_UUID_EXT = '_defaultValueUuid';
	const FIELD_DEFAULT_VALUE_ID = 'defaultValueId';
	const FIELD_DEFAULT_VALUE_ID_EXT = '_defaultValueId';
	const FIELD_DEFAULT_VALUE_UNSIGNED_INT = 'defaultValueUnsignedInt';
	const FIELD_DEFAULT_VALUE_UNSIGNED_INT_EXT = '_defaultValueUnsignedInt';
	const FIELD_DEFAULT_VALUE_POSITIVE_INT = 'defaultValuePositiveInt';
	const FIELD_DEFAULT_VALUE_POSITIVE_INT_EXT = '_defaultValuePositiveInt';
	const FIELD_DEFAULT_VALUE_MARKDOWN = 'defaultValueMarkdown';
	const FIELD_DEFAULT_VALUE_MARKDOWN_EXT = '_defaultValueMarkdown';
	const FIELD_DEFAULT_VALUE_ANNOTATION = 'defaultValueAnnotation';
	const FIELD_DEFAULT_VALUE_ATTACHMENT = 'defaultValueAttachment';
	const FIELD_DEFAULT_VALUE_IDENTIFIER = 'defaultValueIdentifier';
	const FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT = 'defaultValueCodeableConcept';
	const FIELD_DEFAULT_VALUE_CODING = 'defaultValueCoding';
	const FIELD_DEFAULT_VALUE_QUANTITY = 'defaultValueQuantity';
	const FIELD_DEFAULT_VALUE_RANGE = 'defaultValueRange';
	const FIELD_DEFAULT_VALUE_PERIOD = 'defaultValuePeriod';
	const FIELD_DEFAULT_VALUE_RATIO = 'defaultValueRatio';
	const FIELD_DEFAULT_VALUE_REFERENCE = 'defaultValueReference';
	const FIELD_DEFAULT_VALUE_SAMPLED_DATA = 'defaultValueSampledData';
	const FIELD_DEFAULT_VALUE_SIGNATURE = 'defaultValueSignature';
	const FIELD_DEFAULT_VALUE_HUMAN_NAME = 'defaultValueHumanName';
	const FIELD_DEFAULT_VALUE_ADDRESS = 'defaultValueAddress';
	const FIELD_DEFAULT_VALUE_CONTACT_POINT = 'defaultValueContactPoint';
	const FIELD_DEFAULT_VALUE_TIMING = 'defaultValueTiming';
	const FIELD_DEFAULT_VALUE_META = 'defaultValueMeta';
	const FIELD_MEANING_WHEN_MISSING = 'meaningWhenMissing';
	const FIELD_MEANING_WHEN_MISSING_EXT = '_meaningWhenMissing';
	const FIELD_FIXED_BOOLEAN = 'fixedBoolean';
	const FIELD_FIXED_BOOLEAN_EXT = '_fixedBoolean';
	const FIELD_FIXED_INTEGER = 'fixedInteger';
	const FIELD_FIXED_INTEGER_EXT = '_fixedInteger';
	const FIELD_FIXED_DECIMAL = 'fixedDecimal';
	const FIELD_FIXED_DECIMAL_EXT = '_fixedDecimal';
	const FIELD_FIXED_BASE_64BINARY = 'fixedBase64Binary';
	const FIELD_FIXED_BASE_64BINARY_EXT = '_fixedBase64Binary';
	const FIELD_FIXED_INSTANT = 'fixedInstant';
	const FIELD_FIXED_INSTANT_EXT = '_fixedInstant';
	const FIELD_FIXED_STRING = 'fixedString';
	const FIELD_FIXED_STRING_EXT = '_fixedString';
	const FIELD_FIXED_URI = 'fixedUri';
	const FIELD_FIXED_URI_EXT = '_fixedUri';
	const FIELD_FIXED_DATE = 'fixedDate';
	const FIELD_FIXED_DATE_EXT = '_fixedDate';
	const FIELD_FIXED_DATE_TIME = 'fixedDateTime';
	const FIELD_FIXED_DATE_TIME_EXT = '_fixedDateTime';
	const FIELD_FIXED_TIME = 'fixedTime';
	const FIELD_FIXED_TIME_EXT = '_fixedTime';
	const FIELD_FIXED_CODE = 'fixedCode';
	const FIELD_FIXED_CODE_EXT = '_fixedCode';
	const FIELD_FIXED_OID = 'fixedOid';
	const FIELD_FIXED_OID_EXT = '_fixedOid';
	const FIELD_FIXED_UUID = 'fixedUuid';
	const FIELD_FIXED_UUID_EXT = '_fixedUuid';
	const FIELD_FIXED_ID = 'fixedId';
	const FIELD_FIXED_ID_EXT = '_fixedId';
	const FIELD_FIXED_UNSIGNED_INT = 'fixedUnsignedInt';
	const FIELD_FIXED_UNSIGNED_INT_EXT = '_fixedUnsignedInt';
	const FIELD_FIXED_POSITIVE_INT = 'fixedPositiveInt';
	const FIELD_FIXED_POSITIVE_INT_EXT = '_fixedPositiveInt';
	const FIELD_FIXED_MARKDOWN = 'fixedMarkdown';
	const FIELD_FIXED_MARKDOWN_EXT = '_fixedMarkdown';
	const FIELD_FIXED_ANNOTATION = 'fixedAnnotation';
	const FIELD_FIXED_ATTACHMENT = 'fixedAttachment';
	const FIELD_FIXED_IDENTIFIER = 'fixedIdentifier';
	const FIELD_FIXED_CODEABLE_CONCEPT = 'fixedCodeableConcept';
	const FIELD_FIXED_CODING = 'fixedCoding';
	const FIELD_FIXED_QUANTITY = 'fixedQuantity';
	const FIELD_FIXED_RANGE = 'fixedRange';
	const FIELD_FIXED_PERIOD = 'fixedPeriod';
	const FIELD_FIXED_RATIO = 'fixedRatio';
	const FIELD_FIXED_REFERENCE = 'fixedReference';
	const FIELD_FIXED_SAMPLED_DATA = 'fixedSampledData';
	const FIELD_FIXED_SIGNATURE = 'fixedSignature';
	const FIELD_FIXED_HUMAN_NAME = 'fixedHumanName';
	const FIELD_FIXED_ADDRESS = 'fixedAddress';
	const FIELD_FIXED_CONTACT_POINT = 'fixedContactPoint';
	const FIELD_FIXED_TIMING = 'fixedTiming';
	const FIELD_FIXED_META = 'fixedMeta';
	const FIELD_PATTERN_BOOLEAN = 'patternBoolean';
	const FIELD_PATTERN_BOOLEAN_EXT = '_patternBoolean';
	const FIELD_PATTERN_INTEGER = 'patternInteger';
	const FIELD_PATTERN_INTEGER_EXT = '_patternInteger';
	const FIELD_PATTERN_DECIMAL = 'patternDecimal';
	const FIELD_PATTERN_DECIMAL_EXT = '_patternDecimal';
	const FIELD_PATTERN_BASE_64BINARY = 'patternBase64Binary';
	const FIELD_PATTERN_BASE_64BINARY_EXT = '_patternBase64Binary';
	const FIELD_PATTERN_INSTANT = 'patternInstant';
	const FIELD_PATTERN_INSTANT_EXT = '_patternInstant';
	const FIELD_PATTERN_STRING = 'patternString';
	const FIELD_PATTERN_STRING_EXT = '_patternString';
	const FIELD_PATTERN_URI = 'patternUri';
	const FIELD_PATTERN_URI_EXT = '_patternUri';
	const FIELD_PATTERN_DATE = 'patternDate';
	const FIELD_PATTERN_DATE_EXT = '_patternDate';
	const FIELD_PATTERN_DATE_TIME = 'patternDateTime';
	const FIELD_PATTERN_DATE_TIME_EXT = '_patternDateTime';
	const FIELD_PATTERN_TIME = 'patternTime';
	const FIELD_PATTERN_TIME_EXT = '_patternTime';
	const FIELD_PATTERN_CODE = 'patternCode';
	const FIELD_PATTERN_CODE_EXT = '_patternCode';
	const FIELD_PATTERN_OID = 'patternOid';
	const FIELD_PATTERN_OID_EXT = '_patternOid';
	const FIELD_PATTERN_UUID = 'patternUuid';
	const FIELD_PATTERN_UUID_EXT = '_patternUuid';
	const FIELD_PATTERN_ID = 'patternId';
	const FIELD_PATTERN_ID_EXT = '_patternId';
	const FIELD_PATTERN_UNSIGNED_INT = 'patternUnsignedInt';
	const FIELD_PATTERN_UNSIGNED_INT_EXT = '_patternUnsignedInt';
	const FIELD_PATTERN_POSITIVE_INT = 'patternPositiveInt';
	const FIELD_PATTERN_POSITIVE_INT_EXT = '_patternPositiveInt';
	const FIELD_PATTERN_MARKDOWN = 'patternMarkdown';
	const FIELD_PATTERN_MARKDOWN_EXT = '_patternMarkdown';
	const FIELD_PATTERN_ANNOTATION = 'patternAnnotation';
	const FIELD_PATTERN_ATTACHMENT = 'patternAttachment';
	const FIELD_PATTERN_IDENTIFIER = 'patternIdentifier';
	const FIELD_PATTERN_CODEABLE_CONCEPT = 'patternCodeableConcept';
	const FIELD_PATTERN_CODING = 'patternCoding';
	const FIELD_PATTERN_QUANTITY = 'patternQuantity';
	const FIELD_PATTERN_RANGE = 'patternRange';
	const FIELD_PATTERN_PERIOD = 'patternPeriod';
	const FIELD_PATTERN_RATIO = 'patternRatio';
	const FIELD_PATTERN_REFERENCE = 'patternReference';
	const FIELD_PATTERN_SAMPLED_DATA = 'patternSampledData';
	const FIELD_PATTERN_SIGNATURE = 'patternSignature';
	const FIELD_PATTERN_HUMAN_NAME = 'patternHumanName';
	const FIELD_PATTERN_ADDRESS = 'patternAddress';
	const FIELD_PATTERN_CONTACT_POINT = 'patternContactPoint';
	const FIELD_PATTERN_TIMING = 'patternTiming';
	const FIELD_PATTERN_META = 'patternMeta';
	const FIELD_EXAMPLE_BOOLEAN = 'exampleBoolean';
	const FIELD_EXAMPLE_BOOLEAN_EXT = '_exampleBoolean';
	const FIELD_EXAMPLE_INTEGER = 'exampleInteger';
	const FIELD_EXAMPLE_INTEGER_EXT = '_exampleInteger';
	const FIELD_EXAMPLE_DECIMAL = 'exampleDecimal';
	const FIELD_EXAMPLE_DECIMAL_EXT = '_exampleDecimal';
	const FIELD_EXAMPLE_BASE_64BINARY = 'exampleBase64Binary';
	const FIELD_EXAMPLE_BASE_64BINARY_EXT = '_exampleBase64Binary';
	const FIELD_EXAMPLE_INSTANT = 'exampleInstant';
	const FIELD_EXAMPLE_INSTANT_EXT = '_exampleInstant';
	const FIELD_EXAMPLE_STRING = 'exampleString';
	const FIELD_EXAMPLE_STRING_EXT = '_exampleString';
	const FIELD_EXAMPLE_URI = 'exampleUri';
	const FIELD_EXAMPLE_URI_EXT = '_exampleUri';
	const FIELD_EXAMPLE_DATE = 'exampleDate';
	const FIELD_EXAMPLE_DATE_EXT = '_exampleDate';
	const FIELD_EXAMPLE_DATE_TIME = 'exampleDateTime';
	const FIELD_EXAMPLE_DATE_TIME_EXT = '_exampleDateTime';
	const FIELD_EXAMPLE_TIME = 'exampleTime';
	const FIELD_EXAMPLE_TIME_EXT = '_exampleTime';
	const FIELD_EXAMPLE_CODE = 'exampleCode';
	const FIELD_EXAMPLE_CODE_EXT = '_exampleCode';
	const FIELD_EXAMPLE_OID = 'exampleOid';
	const FIELD_EXAMPLE_OID_EXT = '_exampleOid';
	const FIELD_EXAMPLE_UUID = 'exampleUuid';
	const FIELD_EXAMPLE_UUID_EXT = '_exampleUuid';
	const FIELD_EXAMPLE_ID = 'exampleId';
	const FIELD_EXAMPLE_ID_EXT = '_exampleId';
	const FIELD_EXAMPLE_UNSIGNED_INT = 'exampleUnsignedInt';
	const FIELD_EXAMPLE_UNSIGNED_INT_EXT = '_exampleUnsignedInt';
	const FIELD_EXAMPLE_POSITIVE_INT = 'examplePositiveInt';
	const FIELD_EXAMPLE_POSITIVE_INT_EXT = '_examplePositiveInt';
	const FIELD_EXAMPLE_MARKDOWN = 'exampleMarkdown';
	const FIELD_EXAMPLE_MARKDOWN_EXT = '_exampleMarkdown';
	const FIELD_EXAMPLE_ANNOTATION = 'exampleAnnotation';
	const FIELD_EXAMPLE_ATTACHMENT = 'exampleAttachment';
	const FIELD_EXAMPLE_IDENTIFIER = 'exampleIdentifier';
	const FIELD_EXAMPLE_CODEABLE_CONCEPT = 'exampleCodeableConcept';
	const FIELD_EXAMPLE_CODING = 'exampleCoding';
	const FIELD_EXAMPLE_QUANTITY = 'exampleQuantity';
	const FIELD_EXAMPLE_RANGE = 'exampleRange';
	const FIELD_EXAMPLE_PERIOD = 'examplePeriod';
	const FIELD_EXAMPLE_RATIO = 'exampleRatio';
	const FIELD_EXAMPLE_REFERENCE = 'exampleReference';
	const FIELD_EXAMPLE_SAMPLED_DATA = 'exampleSampledData';
	const FIELD_EXAMPLE_SIGNATURE = 'exampleSignature';
	const FIELD_EXAMPLE_HUMAN_NAME = 'exampleHumanName';
	const FIELD_EXAMPLE_ADDRESS = 'exampleAddress';
	const FIELD_EXAMPLE_CONTACT_POINT = 'exampleContactPoint';
	const FIELD_EXAMPLE_TIMING = 'exampleTiming';
	const FIELD_EXAMPLE_META = 'exampleMeta';
	const FIELD_MIN_VALUE_BOOLEAN = 'minValueBoolean';
	const FIELD_MIN_VALUE_BOOLEAN_EXT = '_minValueBoolean';
	const FIELD_MIN_VALUE_INTEGER = 'minValueInteger';
	const FIELD_MIN_VALUE_INTEGER_EXT = '_minValueInteger';
	const FIELD_MIN_VALUE_DECIMAL = 'minValueDecimal';
	const FIELD_MIN_VALUE_DECIMAL_EXT = '_minValueDecimal';
	const FIELD_MIN_VALUE_BASE_64BINARY = 'minValueBase64Binary';
	const FIELD_MIN_VALUE_BASE_64BINARY_EXT = '_minValueBase64Binary';
	const FIELD_MIN_VALUE_INSTANT = 'minValueInstant';
	const FIELD_MIN_VALUE_INSTANT_EXT = '_minValueInstant';
	const FIELD_MIN_VALUE_STRING = 'minValueString';
	const FIELD_MIN_VALUE_STRING_EXT = '_minValueString';
	const FIELD_MIN_VALUE_URI = 'minValueUri';
	const FIELD_MIN_VALUE_URI_EXT = '_minValueUri';
	const FIELD_MIN_VALUE_DATE = 'minValueDate';
	const FIELD_MIN_VALUE_DATE_EXT = '_minValueDate';
	const FIELD_MIN_VALUE_DATE_TIME = 'minValueDateTime';
	const FIELD_MIN_VALUE_DATE_TIME_EXT = '_minValueDateTime';
	const FIELD_MIN_VALUE_TIME = 'minValueTime';
	const FIELD_MIN_VALUE_TIME_EXT = '_minValueTime';
	const FIELD_MIN_VALUE_CODE = 'minValueCode';
	const FIELD_MIN_VALUE_CODE_EXT = '_minValueCode';
	const FIELD_MIN_VALUE_OID = 'minValueOid';
	const FIELD_MIN_VALUE_OID_EXT = '_minValueOid';
	const FIELD_MIN_VALUE_UUID = 'minValueUuid';
	const FIELD_MIN_VALUE_UUID_EXT = '_minValueUuid';
	const FIELD_MIN_VALUE_ID = 'minValueId';
	const FIELD_MIN_VALUE_ID_EXT = '_minValueId';
	const FIELD_MIN_VALUE_UNSIGNED_INT = 'minValueUnsignedInt';
	const FIELD_MIN_VALUE_UNSIGNED_INT_EXT = '_minValueUnsignedInt';
	const FIELD_MIN_VALUE_POSITIVE_INT = 'minValuePositiveInt';
	const FIELD_MIN_VALUE_POSITIVE_INT_EXT = '_minValuePositiveInt';
	const FIELD_MIN_VALUE_MARKDOWN = 'minValueMarkdown';
	const FIELD_MIN_VALUE_MARKDOWN_EXT = '_minValueMarkdown';
	const FIELD_MIN_VALUE_ANNOTATION = 'minValueAnnotation';
	const FIELD_MIN_VALUE_ATTACHMENT = 'minValueAttachment';
	const FIELD_MIN_VALUE_IDENTIFIER = 'minValueIdentifier';
	const FIELD_MIN_VALUE_CODEABLE_CONCEPT = 'minValueCodeableConcept';
	const FIELD_MIN_VALUE_CODING = 'minValueCoding';
	const FIELD_MIN_VALUE_QUANTITY = 'minValueQuantity';
	const FIELD_MIN_VALUE_RANGE = 'minValueRange';
	const FIELD_MIN_VALUE_PERIOD = 'minValuePeriod';
	const FIELD_MIN_VALUE_RATIO = 'minValueRatio';
	const FIELD_MIN_VALUE_REFERENCE = 'minValueReference';
	const FIELD_MIN_VALUE_SAMPLED_DATA = 'minValueSampledData';
	const FIELD_MIN_VALUE_SIGNATURE = 'minValueSignature';
	const FIELD_MIN_VALUE_HUMAN_NAME = 'minValueHumanName';
	const FIELD_MIN_VALUE_ADDRESS = 'minValueAddress';
	const FIELD_MIN_VALUE_CONTACT_POINT = 'minValueContactPoint';
	const FIELD_MIN_VALUE_TIMING = 'minValueTiming';
	const FIELD_MIN_VALUE_META = 'minValueMeta';
	const FIELD_MAX_VALUE_BOOLEAN = 'maxValueBoolean';
	const FIELD_MAX_VALUE_BOOLEAN_EXT = '_maxValueBoolean';
	const FIELD_MAX_VALUE_INTEGER = 'maxValueInteger';
	const FIELD_MAX_VALUE_INTEGER_EXT = '_maxValueInteger';
	const FIELD_MAX_VALUE_DECIMAL = 'maxValueDecimal';
	const FIELD_MAX_VALUE_DECIMAL_EXT = '_maxValueDecimal';
	const FIELD_MAX_VALUE_BASE_64BINARY = 'maxValueBase64Binary';
	const FIELD_MAX_VALUE_BASE_64BINARY_EXT = '_maxValueBase64Binary';
	const FIELD_MAX_VALUE_INSTANT = 'maxValueInstant';
	const FIELD_MAX_VALUE_INSTANT_EXT = '_maxValueInstant';
	const FIELD_MAX_VALUE_STRING = 'maxValueString';
	const FIELD_MAX_VALUE_STRING_EXT = '_maxValueString';
	const FIELD_MAX_VALUE_URI = 'maxValueUri';
	const FIELD_MAX_VALUE_URI_EXT = '_maxValueUri';
	const FIELD_MAX_VALUE_DATE = 'maxValueDate';
	const FIELD_MAX_VALUE_DATE_EXT = '_maxValueDate';
	const FIELD_MAX_VALUE_DATE_TIME = 'maxValueDateTime';
	const FIELD_MAX_VALUE_DATE_TIME_EXT = '_maxValueDateTime';
	const FIELD_MAX_VALUE_TIME = 'maxValueTime';
	const FIELD_MAX_VALUE_TIME_EXT = '_maxValueTime';
	const FIELD_MAX_VALUE_CODE = 'maxValueCode';
	const FIELD_MAX_VALUE_CODE_EXT = '_maxValueCode';
	const FIELD_MAX_VALUE_OID = 'maxValueOid';
	const FIELD_MAX_VALUE_OID_EXT = '_maxValueOid';
	const FIELD_MAX_VALUE_UUID = 'maxValueUuid';
	const FIELD_MAX_VALUE_UUID_EXT = '_maxValueUuid';
	const FIELD_MAX_VALUE_ID = 'maxValueId';
	const FIELD_MAX_VALUE_ID_EXT = '_maxValueId';
	const FIELD_MAX_VALUE_UNSIGNED_INT = 'maxValueUnsignedInt';
	const FIELD_MAX_VALUE_UNSIGNED_INT_EXT = '_maxValueUnsignedInt';
	const FIELD_MAX_VALUE_POSITIVE_INT = 'maxValuePositiveInt';
	const FIELD_MAX_VALUE_POSITIVE_INT_EXT = '_maxValuePositiveInt';
	const FIELD_MAX_VALUE_MARKDOWN = 'maxValueMarkdown';
	const FIELD_MAX_VALUE_MARKDOWN_EXT = '_maxValueMarkdown';
	const FIELD_MAX_VALUE_ANNOTATION = 'maxValueAnnotation';
	const FIELD_MAX_VALUE_ATTACHMENT = 'maxValueAttachment';
	const FIELD_MAX_VALUE_IDENTIFIER = 'maxValueIdentifier';
	const FIELD_MAX_VALUE_CODEABLE_CONCEPT = 'maxValueCodeableConcept';
	const FIELD_MAX_VALUE_CODING = 'maxValueCoding';
	const FIELD_MAX_VALUE_QUANTITY = 'maxValueQuantity';
	const FIELD_MAX_VALUE_RANGE = 'maxValueRange';
	const FIELD_MAX_VALUE_PERIOD = 'maxValuePeriod';
	const FIELD_MAX_VALUE_RATIO = 'maxValueRatio';
	const FIELD_MAX_VALUE_REFERENCE = 'maxValueReference';
	const FIELD_MAX_VALUE_SAMPLED_DATA = 'maxValueSampledData';
	const FIELD_MAX_VALUE_SIGNATURE = 'maxValueSignature';
	const FIELD_MAX_VALUE_HUMAN_NAME = 'maxValueHumanName';
	const FIELD_MAX_VALUE_ADDRESS = 'maxValueAddress';
	const FIELD_MAX_VALUE_CONTACT_POINT = 'maxValueContactPoint';
	const FIELD_MAX_VALUE_TIMING = 'maxValueTiming';
	const FIELD_MAX_VALUE_META = 'maxValueMeta';
	const FIELD_MAX_LENGTH = 'maxLength';
	const FIELD_MAX_LENGTH_EXT = '_maxLength';
	const FIELD_CONDITION = 'condition';
	const FIELD_CONDITION_EXT = '_condition';
	const FIELD_CONSTRAINT = 'constraint';
	const FIELD_MUST_SUPPORT = 'mustSupport';
	const FIELD_MUST_SUPPORT_EXT = '_mustSupport';
	const FIELD_IS_MODIFIER = 'isModifier';
	const FIELD_IS_MODIFIER_EXT = '_isModifier';
	const FIELD_IS_SUMMARY = 'isSummary';
	const FIELD_IS_SUMMARY_EXT = '_isSummary';
	const FIELD_BINDING = 'binding';
	const FIELD_MAPPING = 'mapping';

	/** @var string */
	private $_xmlns = '';

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The path identifies the element and is expressed as a "."-separated list of
	 * ancestor elements, beginning with the name of the resource or extension.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $path = null;

	/**
	 * How a property is represented on the wire.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Codes that define how this element is represented in instances, when the
	 * deviation varies from the normal case.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPropertyRepresentation[]
	 */
	protected ?array $representation = [];

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The name of this element definition (to refer to it from other element
	 * definitions using ElementDefinition.nameReference). This is a unique name
	 * referring to a specific set of constraints applied to this element. One use of
	 * this is to provide a name to different slices of the same element.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $name = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The text to display beside the element indicating its meaning or to use to
	 * prompt for the element in a user display or form.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $label = null;

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A code that provides the meaning for the element according to a particular
	 * terminology.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding[]
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
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionSlicing
	 */
	protected ?FHIRElementDefinitionSlicing $slicing = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A concise description of what this element means (e.g. for use in autogenerated
	 * summaries).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $short = null;

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
	 * Provides a complete explanation of the meaning of the data element for human
	 * readability. For the case of elements derived from existing elements (e.g.
	 * constraints), the definition SHALL be consistent with the base definition, but
	 * convey the meaning of the element in the particular context of use of the
	 * resource.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRMarkdownPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMarkdown
	 */
	protected ?FHIRMarkdown $definition = null;

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
	 * Explanatory notes and implementation guidance about the data element, including
	 * notes about how to use the data properly, exceptions to proper use, etc.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRMarkdownPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMarkdown
	 */
	protected ?FHIRMarkdown $comments = null;

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
	 * This element is for traceability of why the element was created and why the
	 * constraints exist as they do. This may be used to point to source materials or
	 * specifications that drove the structure of this element.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRMarkdownPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMarkdown
	 */
	protected ?FHIRMarkdown $requirements = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Identifies additional names by which this element might also be known.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive[]|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString[]
	 */
	protected ?array $alias = [];

	/**
	 * A whole number
	 * 32 bit number; for values larger than this, use decimal
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The minimum number of times this element SHALL appear in the instance.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRIntegerPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInteger
	 */
	protected ?FHIRInteger $min = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The maximum number of times this element is permitted to appear in the instance.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $max = null;

	/**
	 * Captures constraints on each element within the resource, profile, or extension.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Information about the base definition of the element, provided to make it
	 * unncessary for tools to trace the deviation of the element through the derived
	 * and related profiles. This information is only provided where the element
	 * definition represents a constraint on another element definition, and must be
	 * present if there is a base element definition.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBase
	 */
	protected ?FHIRElementDefinitionBase $base = null;

	/**
	 * Captures constraints on each element within the resource, profile, or extension.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The data type or resource that the value of this element is permitted to be.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType[]
	 */
	protected ?array $type = [];

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Identifies the name of a slice defined elsewhere in the profile whose
	 * constraints should be applied to the current element.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $nameReference = null;

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
	 */
	protected ?FHIRBoolean $defaultValueBoolean = null;

	/**
	 * A whole number
	 * 32 bit number; for values larger than this, use decimal
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRIntegerPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInteger
	 */
	protected ?FHIRInteger $defaultValueInteger = null;

	/**
	 * A rational number with implicit precision
	 * Do not use a IEEE type floating point type, instead use something that works
	 * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRDecimalPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDecimal
	 */
	protected ?FHIRDecimal $defaultValueDecimal = null;

	/**
	 * A stream of bytes
	 * A stream of bytes, base64 encoded
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRBase64BinaryPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBase64Binary
	 */
	protected ?FHIRBase64Binary $defaultValueBase64Binary = null;

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for precisely observed times, typically system logs etc.,
	 * and not human-reported times - for them, see date and dateTime below. Time zone
	 * is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRInstantPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstant
	 */
	protected ?FHIRInstant $defaultValueInstant = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $defaultValueString = null;

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri
	 */
	protected ?FHIRUri $defaultValueUri = null;

	/**
	 * A date or partial date (e.g. just year or year + month). There is no time zone.
	 * The format is a union of the schema types gYear, gYearMonth and date. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRDatePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDate
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
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime
	 */
	protected ?FHIRDateTime $defaultValueDateTime = null;

	/**
	 * A time during the day, with no date specified
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTime
	 */
	protected ?FHIRTime $defaultValueTime = null;

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode
	 */
	protected ?FHIRCode $defaultValueCode = null;

	/**
	 * An oid represented as a URI
	 * RFC 3001. See also ISO/IEC 8824:1990 €
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIROidPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIROid
	 */
	protected ?FHIROid $defaultValueOid = null;

	/**
	 * A UUID, represented as a URI
	 * See The Open Group, CDE 1.1 Remote Procedure Call specification, Appendix A.
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRUuidPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUuid
	 */
	protected ?FHIRUuid $defaultValueUuid = null;

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
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRIdPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRId
	 */
	protected ?FHIRId $defaultValueId = null;

	/**
	 * An integer with a value that is not negative (e.g. >= 0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUnsignedInt
	 */
	protected ?FHIRUnsignedInt $defaultValueUnsignedInt = null;

	/**
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPositiveInt
	 */
	protected ?FHIRPositiveInt $defaultValuePositiveInt = null;

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
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRMarkdownPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMarkdown
	 */
	protected ?FHIRMarkdown $defaultValueMarkdown = null;

	/**
	 * A text note which also contains information about who made the statement and
	 * when.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAnnotation
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
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAttachment
	 */
	protected ?FHIRAttachment $defaultValueAttachment = null;

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier
	 */
	protected ?FHIRIdentifier $defaultValueIdentifier = null;

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
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
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding
	 */
	protected ?FHIRCoding $defaultValueCoding = null;

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
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity
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
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRange
	 */
	protected ?FHIRRange $defaultValueRange = null;

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod
	 */
	protected ?FHIRPeriod $defaultValuePeriod = null;

	/**
	 * A relationship of two Quantity values - expressed as a numerator and a
	 * denominator.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRatio
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
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
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
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSampledData
	 */
	protected ?FHIRSampledData $defaultValueSampledData = null;

	/**
	 * A digital signature along with supporting context. The signature may be
	 * electronic/cryptographic in nature, or a graphical image representing a
	 * hand-written signature, or a signature process. Different Signature approaches
	 * have different utilities.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSignature
	 */
	protected ?FHIRSignature $defaultValueSignature = null;

	/**
	 * A human's name with the ability to identify parts and usage.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRHumanName
	 */
	protected ?FHIRHumanName $defaultValueHumanName = null;

	/**
	 * There is a variety of postal address formats defined around the world. This
	 * format defines a superset that is the basis for all addresses around the world.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAddress
	 */
	protected ?FHIRAddress $defaultValueAddress = null;

	/**
	 * Details for all kinds of technology mediated contact points for a person or
	 * organization, including telephone, email, etc.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRContactPoint
	 */
	protected ?FHIRContactPoint $defaultValueContactPoint = null;

	/**
	 * Specifies an event that may occur multiple times. Timing schedules are used to
	 * record when things are expected or requested to occur. The most common usage is
	 * in dosage instructions for medications. They are also used when planning care of
	 * various kinds.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTiming
	 */
	protected ?FHIRTiming $defaultValueTiming = null;

	/**
	 * The metadata about a resource. This is content in the resource that is
	 * maintained by the infrastructure. Changes to the content may not always be
	 * associated with version changes to the resource.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMeta
	 */
	protected ?FHIRMeta $defaultValueMeta = null;

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
	 * The Implicit meaning that is to be understood when this element is missing (e.g.
	 * 'when this element is missing, the period is ongoing'.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRMarkdownPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMarkdown
	 */
	protected ?FHIRMarkdown $meaningWhenMissing = null;

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
	 */
	protected ?FHIRBoolean $fixedBoolean = null;

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
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRIntegerPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInteger
	 */
	protected ?FHIRInteger $fixedInteger = null;

	/**
	 * A rational number with implicit precision
	 * Do not use a IEEE type floating point type, instead use something that works
	 * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRDecimalPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDecimal
	 */
	protected ?FHIRDecimal $fixedDecimal = null;

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
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRBase64BinaryPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBase64Binary
	 */
	protected ?FHIRBase64Binary $fixedBase64Binary = null;

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for precisely observed times, typically system logs etc.,
	 * and not human-reported times - for them, see date and dateTime below. Time zone
	 * is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRInstantPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstant
	 */
	protected ?FHIRInstant $fixedInstant = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $fixedString = null;

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
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri
	 */
	protected ?FHIRUri $fixedUri = null;

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
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRDatePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDate
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
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime
	 */
	protected ?FHIRDateTime $fixedDateTime = null;

	/**
	 * A time during the day, with no date specified
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTime
	 */
	protected ?FHIRTime $fixedTime = null;

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
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode
	 */
	protected ?FHIRCode $fixedCode = null;

	/**
	 * An oid represented as a URI
	 * RFC 3001. See also ISO/IEC 8824:1990 €
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIROidPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIROid
	 */
	protected ?FHIROid $fixedOid = null;

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
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRUuidPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUuid
	 */
	protected ?FHIRUuid $fixedUuid = null;

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
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRIdPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRId
	 */
	protected ?FHIRId $fixedId = null;

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
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUnsignedInt
	 */
	protected ?FHIRUnsignedInt $fixedUnsignedInt = null;

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
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPositiveInt
	 */
	protected ?FHIRPositiveInt $fixedPositiveInt = null;

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
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRMarkdownPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMarkdown
	 */
	protected ?FHIRMarkdown $fixedMarkdown = null;

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
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAnnotation
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
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAttachment
	 */
	protected ?FHIRAttachment $fixedAttachment = null;

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier
	 */
	protected ?FHIRIdentifier $fixedIdentifier = null;

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
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
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
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding
	 */
	protected ?FHIRCoding $fixedCoding = null;

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
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity
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
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRange
	 */
	protected ?FHIRRange $fixedRange = null;

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
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod
	 */
	protected ?FHIRPeriod $fixedPeriod = null;

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
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRatio
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
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
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
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSampledData
	 */
	protected ?FHIRSampledData $fixedSampledData = null;

	/**
	 * A digital signature along with supporting context. The signature may be
	 * electronic/cryptographic in nature, or a graphical image representing a
	 * hand-written signature, or a signature process. Different Signature approaches
	 * have different utilities.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSignature
	 */
	protected ?FHIRSignature $fixedSignature = null;

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
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRHumanName
	 */
	protected ?FHIRHumanName $fixedHumanName = null;

	/**
	 * There is a variety of postal address formats defined around the world. This
	 * format defines a superset that is the basis for all addresses around the world.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAddress
	 */
	protected ?FHIRAddress $fixedAddress = null;

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
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRContactPoint
	 */
	protected ?FHIRContactPoint $fixedContactPoint = null;

	/**
	 * Specifies an event that may occur multiple times. Timing schedules are used to
	 * record when things are expected or requested to occur. The most common usage is
	 * in dosage instructions for medications. They are also used when planning care of
	 * various kinds.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTiming
	 */
	protected ?FHIRTiming $fixedTiming = null;

	/**
	 * The metadata about a resource. This is content in the resource that is
	 * maintained by the infrastructure. Changes to the content may not always be
	 * associated with version changes to the resource.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMeta
	 */
	protected ?FHIRMeta $fixedMeta = null;

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
	 */
	protected ?FHIRBoolean $patternBoolean = null;

	/**
	 * A whole number
	 * 32 bit number; for values larger than this, use decimal
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRIntegerPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInteger
	 */
	protected ?FHIRInteger $patternInteger = null;

	/**
	 * A rational number with implicit precision
	 * Do not use a IEEE type floating point type, instead use something that works
	 * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRDecimalPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDecimal
	 */
	protected ?FHIRDecimal $patternDecimal = null;

	/**
	 * A stream of bytes
	 * A stream of bytes, base64 encoded
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRBase64BinaryPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBase64Binary
	 */
	protected ?FHIRBase64Binary $patternBase64Binary = null;

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for precisely observed times, typically system logs etc.,
	 * and not human-reported times - for them, see date and dateTime below. Time zone
	 * is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRInstantPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstant
	 */
	protected ?FHIRInstant $patternInstant = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $patternString = null;

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri
	 */
	protected ?FHIRUri $patternUri = null;

	/**
	 * A date or partial date (e.g. just year or year + month). There is no time zone.
	 * The format is a union of the schema types gYear, gYearMonth and date. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRDatePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDate
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
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime
	 */
	protected ?FHIRDateTime $patternDateTime = null;

	/**
	 * A time during the day, with no date specified
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTime
	 */
	protected ?FHIRTime $patternTime = null;

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode
	 */
	protected ?FHIRCode $patternCode = null;

	/**
	 * An oid represented as a URI
	 * RFC 3001. See also ISO/IEC 8824:1990 €
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIROidPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIROid
	 */
	protected ?FHIROid $patternOid = null;

	/**
	 * A UUID, represented as a URI
	 * See The Open Group, CDE 1.1 Remote Procedure Call specification, Appendix A.
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRUuidPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUuid
	 */
	protected ?FHIRUuid $patternUuid = null;

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
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRIdPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRId
	 */
	protected ?FHIRId $patternId = null;

	/**
	 * An integer with a value that is not negative (e.g. >= 0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUnsignedInt
	 */
	protected ?FHIRUnsignedInt $patternUnsignedInt = null;

	/**
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPositiveInt
	 */
	protected ?FHIRPositiveInt $patternPositiveInt = null;

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
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRMarkdownPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMarkdown
	 */
	protected ?FHIRMarkdown $patternMarkdown = null;

	/**
	 * A text note which also contains information about who made the statement and
	 * when.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAnnotation
	 */
	protected ?FHIRAnnotation $patternAnnotation = null;

	/**
	 * For referring to data content defined in other formats.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAttachment
	 */
	protected ?FHIRAttachment $patternAttachment = null;

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier
	 */
	protected ?FHIRIdentifier $patternIdentifier = null;

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	protected ?FHIRCodeableConcept $patternCodeableConcept = null;

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding
	 */
	protected ?FHIRCoding $patternCoding = null;

	/**
	 * A measured amount (or an amount that can potentially be measured). Note that
	 * measured amounts include amounts that are not precisely quantified, including
	 * amounts involving arbitrary units and floating currencies.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity
	 */
	protected ?FHIRQuantity $patternQuantity = null;

	/**
	 * A set of ordered Quantities defined by a low and high limit.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRange
	 */
	protected ?FHIRRange $patternRange = null;

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod
	 */
	protected ?FHIRPeriod $patternPeriod = null;

	/**
	 * A relationship of two Quantity values - expressed as a numerator and a
	 * denominator.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRatio
	 */
	protected ?FHIRRatio $patternRatio = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
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
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSampledData
	 */
	protected ?FHIRSampledData $patternSampledData = null;

	/**
	 * A digital signature along with supporting context. The signature may be
	 * electronic/cryptographic in nature, or a graphical image representing a
	 * hand-written signature, or a signature process. Different Signature approaches
	 * have different utilities.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSignature
	 */
	protected ?FHIRSignature $patternSignature = null;

	/**
	 * A human's name with the ability to identify parts and usage.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRHumanName
	 */
	protected ?FHIRHumanName $patternHumanName = null;

	/**
	 * There is a variety of postal address formats defined around the world. This
	 * format defines a superset that is the basis for all addresses around the world.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAddress
	 */
	protected ?FHIRAddress $patternAddress = null;

	/**
	 * Details for all kinds of technology mediated contact points for a person or
	 * organization, including telephone, email, etc.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRContactPoint
	 */
	protected ?FHIRContactPoint $patternContactPoint = null;

	/**
	 * Specifies an event that may occur multiple times. Timing schedules are used to
	 * record when things are expected or requested to occur. The most common usage is
	 * in dosage instructions for medications. They are also used when planning care of
	 * various kinds.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTiming
	 */
	protected ?FHIRTiming $patternTiming = null;

	/**
	 * The metadata about a resource. This is content in the resource that is
	 * maintained by the infrastructure. Changes to the content may not always be
	 * associated with version changes to the resource.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMeta
	 */
	protected ?FHIRMeta $patternMeta = null;

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
	 */
	protected ?FHIRBoolean $exampleBoolean = null;

	/**
	 * A whole number
	 * 32 bit number; for values larger than this, use decimal
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRIntegerPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInteger
	 */
	protected ?FHIRInteger $exampleInteger = null;

	/**
	 * A rational number with implicit precision
	 * Do not use a IEEE type floating point type, instead use something that works
	 * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRDecimalPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDecimal
	 */
	protected ?FHIRDecimal $exampleDecimal = null;

	/**
	 * A stream of bytes
	 * A stream of bytes, base64 encoded
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRBase64BinaryPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBase64Binary
	 */
	protected ?FHIRBase64Binary $exampleBase64Binary = null;

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for precisely observed times, typically system logs etc.,
	 * and not human-reported times - for them, see date and dateTime below. Time zone
	 * is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRInstantPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstant
	 */
	protected ?FHIRInstant $exampleInstant = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $exampleString = null;

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri
	 */
	protected ?FHIRUri $exampleUri = null;

	/**
	 * A date or partial date (e.g. just year or year + month). There is no time zone.
	 * The format is a union of the schema types gYear, gYearMonth and date. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRDatePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDate
	 */
	protected ?FHIRDate $exampleDate = null;

	/**
	 * A date, date-time or partial date (e.g. just year or year + month). If hours and
	 * minutes are specified, a time zone SHALL be populated. The format is a union of
	 * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
	 * due to schema type constraints but may be zero-filled and may be ignored. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime
	 */
	protected ?FHIRDateTime $exampleDateTime = null;

	/**
	 * A time during the day, with no date specified
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTime
	 */
	protected ?FHIRTime $exampleTime = null;

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode
	 */
	protected ?FHIRCode $exampleCode = null;

	/**
	 * An oid represented as a URI
	 * RFC 3001. See also ISO/IEC 8824:1990 €
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIROidPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIROid
	 */
	protected ?FHIROid $exampleOid = null;

	/**
	 * A UUID, represented as a URI
	 * See The Open Group, CDE 1.1 Remote Procedure Call specification, Appendix A.
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRUuidPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUuid
	 */
	protected ?FHIRUuid $exampleUuid = null;

	/**
	 * Any combination of letters, numerals, "-" and ".", with a length limit of 64
	 * characters. (This might be an integer, an unprefixed OID, UUID or any other
	 * identifier pattern that meets these constraints.) Ids are case-insensitive.
	 * RFC 4122
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRIdPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRId
	 */
	protected ?FHIRId $exampleId = null;

	/**
	 * An integer with a value that is not negative (e.g. >= 0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUnsignedInt
	 */
	protected ?FHIRUnsignedInt $exampleUnsignedInt = null;

	/**
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPositiveInt
	 */
	protected ?FHIRPositiveInt $examplePositiveInt = null;

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
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRMarkdownPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMarkdown
	 */
	protected ?FHIRMarkdown $exampleMarkdown = null;

	/**
	 * A text note which also contains information about who made the statement and
	 * when.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAnnotation
	 */
	protected ?FHIRAnnotation $exampleAnnotation = null;

	/**
	 * For referring to data content defined in other formats.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAttachment
	 */
	protected ?FHIRAttachment $exampleAttachment = null;

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier
	 */
	protected ?FHIRIdentifier $exampleIdentifier = null;

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	protected ?FHIRCodeableConcept $exampleCodeableConcept = null;

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding
	 */
	protected ?FHIRCoding $exampleCoding = null;

	/**
	 * A measured amount (or an amount that can potentially be measured). Note that
	 * measured amounts include amounts that are not precisely quantified, including
	 * amounts involving arbitrary units and floating currencies.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity
	 */
	protected ?FHIRQuantity $exampleQuantity = null;

	/**
	 * A set of ordered Quantities defined by a low and high limit.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRange
	 */
	protected ?FHIRRange $exampleRange = null;

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod
	 */
	protected ?FHIRPeriod $examplePeriod = null;

	/**
	 * A relationship of two Quantity values - expressed as a numerator and a
	 * denominator.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRatio
	 */
	protected ?FHIRRatio $exampleRatio = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $exampleReference = null;

	/**
	 * A series of measurements taken by a device, with upper and lower limits. There
	 * may be more than one dimension in the data.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSampledData
	 */
	protected ?FHIRSampledData $exampleSampledData = null;

	/**
	 * A digital signature along with supporting context. The signature may be
	 * electronic/cryptographic in nature, or a graphical image representing a
	 * hand-written signature, or a signature process. Different Signature approaches
	 * have different utilities.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSignature
	 */
	protected ?FHIRSignature $exampleSignature = null;

	/**
	 * A human's name with the ability to identify parts and usage.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRHumanName
	 */
	protected ?FHIRHumanName $exampleHumanName = null;

	/**
	 * There is a variety of postal address formats defined around the world. This
	 * format defines a superset that is the basis for all addresses around the world.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAddress
	 */
	protected ?FHIRAddress $exampleAddress = null;

	/**
	 * Details for all kinds of technology mediated contact points for a person or
	 * organization, including telephone, email, etc.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRContactPoint
	 */
	protected ?FHIRContactPoint $exampleContactPoint = null;

	/**
	 * Specifies an event that may occur multiple times. Timing schedules are used to
	 * record when things are expected or requested to occur. The most common usage is
	 * in dosage instructions for medications. They are also used when planning care of
	 * various kinds.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTiming
	 */
	protected ?FHIRTiming $exampleTiming = null;

	/**
	 * The metadata about a resource. This is content in the resource that is
	 * maintained by the infrastructure. Changes to the content may not always be
	 * associated with version changes to the resource.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMeta
	 */
	protected ?FHIRMeta $exampleMeta = null;

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
	 */
	protected ?FHIRBoolean $minValueBoolean = null;

	/**
	 * A whole number
	 * 32 bit number; for values larger than this, use decimal
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRIntegerPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInteger
	 */
	protected ?FHIRInteger $minValueInteger = null;

	/**
	 * A rational number with implicit precision
	 * Do not use a IEEE type floating point type, instead use something that works
	 * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRDecimalPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDecimal
	 */
	protected ?FHIRDecimal $minValueDecimal = null;

	/**
	 * A stream of bytes
	 * A stream of bytes, base64 encoded
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRBase64BinaryPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBase64Binary
	 */
	protected ?FHIRBase64Binary $minValueBase64Binary = null;

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for precisely observed times, typically system logs etc.,
	 * and not human-reported times - for them, see date and dateTime below. Time zone
	 * is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRInstantPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstant
	 */
	protected ?FHIRInstant $minValueInstant = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $minValueString = null;

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri
	 */
	protected ?FHIRUri $minValueUri = null;

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
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRDatePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDate
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
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime
	 */
	protected ?FHIRDateTime $minValueDateTime = null;

	/**
	 * A time during the day, with no date specified
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTime
	 */
	protected ?FHIRTime $minValueTime = null;

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode
	 */
	protected ?FHIRCode $minValueCode = null;

	/**
	 * An oid represented as a URI
	 * RFC 3001. See also ISO/IEC 8824:1990 €
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIROidPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIROid
	 */
	protected ?FHIROid $minValueOid = null;

	/**
	 * A UUID, represented as a URI
	 * See The Open Group, CDE 1.1 Remote Procedure Call specification, Appendix A.
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRUuidPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUuid
	 */
	protected ?FHIRUuid $minValueUuid = null;

	/**
	 * Any combination of letters, numerals, "-" and ".", with a length limit of 64
	 * characters. (This might be an integer, an unprefixed OID, UUID or any other
	 * identifier pattern that meets these constraints.) Ids are case-insensitive.
	 * RFC 4122
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRIdPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRId
	 */
	protected ?FHIRId $minValueId = null;

	/**
	 * An integer with a value that is not negative (e.g. >= 0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUnsignedInt
	 */
	protected ?FHIRUnsignedInt $minValueUnsignedInt = null;

	/**
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPositiveInt
	 */
	protected ?FHIRPositiveInt $minValuePositiveInt = null;

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
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRMarkdownPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMarkdown
	 */
	protected ?FHIRMarkdown $minValueMarkdown = null;

	/**
	 * A text note which also contains information about who made the statement and
	 * when.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAnnotation
	 */
	protected ?FHIRAnnotation $minValueAnnotation = null;

	/**
	 * For referring to data content defined in other formats.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAttachment
	 */
	protected ?FHIRAttachment $minValueAttachment = null;

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier
	 */
	protected ?FHIRIdentifier $minValueIdentifier = null;

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	protected ?FHIRCodeableConcept $minValueCodeableConcept = null;

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding
	 */
	protected ?FHIRCoding $minValueCoding = null;

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
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity
	 */
	protected ?FHIRQuantity $minValueQuantity = null;

	/**
	 * A set of ordered Quantities defined by a low and high limit.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRange
	 */
	protected ?FHIRRange $minValueRange = null;

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod
	 */
	protected ?FHIRPeriod $minValuePeriod = null;

	/**
	 * A relationship of two Quantity values - expressed as a numerator and a
	 * denominator.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRatio
	 */
	protected ?FHIRRatio $minValueRatio = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $minValueReference = null;

	/**
	 * A series of measurements taken by a device, with upper and lower limits. There
	 * may be more than one dimension in the data.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSampledData
	 */
	protected ?FHIRSampledData $minValueSampledData = null;

	/**
	 * A digital signature along with supporting context. The signature may be
	 * electronic/cryptographic in nature, or a graphical image representing a
	 * hand-written signature, or a signature process. Different Signature approaches
	 * have different utilities.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSignature
	 */
	protected ?FHIRSignature $minValueSignature = null;

	/**
	 * A human's name with the ability to identify parts and usage.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRHumanName
	 */
	protected ?FHIRHumanName $minValueHumanName = null;

	/**
	 * There is a variety of postal address formats defined around the world. This
	 * format defines a superset that is the basis for all addresses around the world.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAddress
	 */
	protected ?FHIRAddress $minValueAddress = null;

	/**
	 * Details for all kinds of technology mediated contact points for a person or
	 * organization, including telephone, email, etc.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRContactPoint
	 */
	protected ?FHIRContactPoint $minValueContactPoint = null;

	/**
	 * Specifies an event that may occur multiple times. Timing schedules are used to
	 * record when things are expected or requested to occur. The most common usage is
	 * in dosage instructions for medications. They are also used when planning care of
	 * various kinds.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTiming
	 */
	protected ?FHIRTiming $minValueTiming = null;

	/**
	 * The metadata about a resource. This is content in the resource that is
	 * maintained by the infrastructure. Changes to the content may not always be
	 * associated with version changes to the resource.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMeta
	 */
	protected ?FHIRMeta $minValueMeta = null;

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
	 */
	protected ?FHIRBoolean $maxValueBoolean = null;

	/**
	 * A whole number
	 * 32 bit number; for values larger than this, use decimal
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRIntegerPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInteger
	 */
	protected ?FHIRInteger $maxValueInteger = null;

	/**
	 * A rational number with implicit precision
	 * Do not use a IEEE type floating point type, instead use something that works
	 * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRDecimalPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDecimal
	 */
	protected ?FHIRDecimal $maxValueDecimal = null;

	/**
	 * A stream of bytes
	 * A stream of bytes, base64 encoded
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRBase64BinaryPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBase64Binary
	 */
	protected ?FHIRBase64Binary $maxValueBase64Binary = null;

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for precisely observed times, typically system logs etc.,
	 * and not human-reported times - for them, see date and dateTime below. Time zone
	 * is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRInstantPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstant
	 */
	protected ?FHIRInstant $maxValueInstant = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $maxValueString = null;

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri
	 */
	protected ?FHIRUri $maxValueUri = null;

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
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRDatePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDate
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
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime
	 */
	protected ?FHIRDateTime $maxValueDateTime = null;

	/**
	 * A time during the day, with no date specified
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTime
	 */
	protected ?FHIRTime $maxValueTime = null;

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode
	 */
	protected ?FHIRCode $maxValueCode = null;

	/**
	 * An oid represented as a URI
	 * RFC 3001. See also ISO/IEC 8824:1990 €
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIROidPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIROid
	 */
	protected ?FHIROid $maxValueOid = null;

	/**
	 * A UUID, represented as a URI
	 * See The Open Group, CDE 1.1 Remote Procedure Call specification, Appendix A.
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRUuidPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUuid
	 */
	protected ?FHIRUuid $maxValueUuid = null;

	/**
	 * Any combination of letters, numerals, "-" and ".", with a length limit of 64
	 * characters. (This might be an integer, an unprefixed OID, UUID or any other
	 * identifier pattern that meets these constraints.) Ids are case-insensitive.
	 * RFC 4122
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRIdPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRId
	 */
	protected ?FHIRId $maxValueId = null;

	/**
	 * An integer with a value that is not negative (e.g. >= 0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUnsignedInt
	 */
	protected ?FHIRUnsignedInt $maxValueUnsignedInt = null;

	/**
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPositiveInt
	 */
	protected ?FHIRPositiveInt $maxValuePositiveInt = null;

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
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRMarkdownPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMarkdown
	 */
	protected ?FHIRMarkdown $maxValueMarkdown = null;

	/**
	 * A text note which also contains information about who made the statement and
	 * when.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAnnotation
	 */
	protected ?FHIRAnnotation $maxValueAnnotation = null;

	/**
	 * For referring to data content defined in other formats.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAttachment
	 */
	protected ?FHIRAttachment $maxValueAttachment = null;

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier
	 */
	protected ?FHIRIdentifier $maxValueIdentifier = null;

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	protected ?FHIRCodeableConcept $maxValueCodeableConcept = null;

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding
	 */
	protected ?FHIRCoding $maxValueCoding = null;

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
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity
	 */
	protected ?FHIRQuantity $maxValueQuantity = null;

	/**
	 * A set of ordered Quantities defined by a low and high limit.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRange
	 */
	protected ?FHIRRange $maxValueRange = null;

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod
	 */
	protected ?FHIRPeriod $maxValuePeriod = null;

	/**
	 * A relationship of two Quantity values - expressed as a numerator and a
	 * denominator.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRatio
	 */
	protected ?FHIRRatio $maxValueRatio = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $maxValueReference = null;

	/**
	 * A series of measurements taken by a device, with upper and lower limits. There
	 * may be more than one dimension in the data.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSampledData
	 */
	protected ?FHIRSampledData $maxValueSampledData = null;

	/**
	 * A digital signature along with supporting context. The signature may be
	 * electronic/cryptographic in nature, or a graphical image representing a
	 * hand-written signature, or a signature process. Different Signature approaches
	 * have different utilities.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSignature
	 */
	protected ?FHIRSignature $maxValueSignature = null;

	/**
	 * A human's name with the ability to identify parts and usage.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRHumanName
	 */
	protected ?FHIRHumanName $maxValueHumanName = null;

	/**
	 * There is a variety of postal address formats defined around the world. This
	 * format defines a superset that is the basis for all addresses around the world.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAddress
	 */
	protected ?FHIRAddress $maxValueAddress = null;

	/**
	 * Details for all kinds of technology mediated contact points for a person or
	 * organization, including telephone, email, etc.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRContactPoint
	 */
	protected ?FHIRContactPoint $maxValueContactPoint = null;

	/**
	 * Specifies an event that may occur multiple times. Timing schedules are used to
	 * record when things are expected or requested to occur. The most common usage is
	 * in dosage instructions for medications. They are also used when planning care of
	 * various kinds.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTiming
	 */
	protected ?FHIRTiming $maxValueTiming = null;

	/**
	 * The metadata about a resource. This is content in the resource that is
	 * maintained by the infrastructure. Changes to the content may not always be
	 * associated with version changes to the resource.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMeta
	 */
	protected ?FHIRMeta $maxValueMeta = null;

	/**
	 * A whole number
	 * 32 bit number; for values larger than this, use decimal
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Indicates the maximum length in characters that is permitted to be present in
	 * conformant instances and which is expected to be supported by conformant
	 * consumers that support the element.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRIntegerPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInteger
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
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRIdPrimitive[]|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRId[]
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
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionConstraint[]
	 */
	protected ?array $constraint = [];

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * If true, implementations that produce or consume resources SHALL provide
	 * "support" for the element in some meaningful way. If false, the element may be
	 * ignored and not supported.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
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
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
	 */
	protected ?FHIRBoolean $isModifier = null;

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Whether the element should be included if a client requests a search with the
	 * parameter _summary=true.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
	 */
	protected ?FHIRBoolean $isSummary = null;

	/**
	 * Captures constraints on each element within the resource, profile, or extension.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Binds to a value set if this element is coded (code, Coding, CodeableConcept).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBinding
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
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionMapping[]
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
		if (isset($data[self::FIELD_COMMENTS]) || isset($data[self::FIELD_COMMENTS_EXT])) {
			$value = $data[self::FIELD_COMMENTS] ?? null;
			$ext =
				isset($data[self::FIELD_COMMENTS_EXT]) && is_array($data[self::FIELD_COMMENTS_EXT])
					? $data[self::FIELD_COMMENTS_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRMarkdown) {
					$this->setComments($value);
				} elseif (is_array($value)) {
					$this->setComments(new FHIRMarkdown(array_merge($ext, $value)));
				} else {
					$this->setComments(
						new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setComments(new FHIRMarkdown($ext));
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
				if ($value instanceof FHIRInteger) {
					$this->setMin($value);
				} elseif (is_array($value)) {
					$this->setMin(new FHIRInteger(array_merge($ext, $value)));
				} else {
					$this->setMin(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setMin(new FHIRInteger($ext));
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
			isset($data[self::FIELD_NAME_REFERENCE]) ||
			isset($data[self::FIELD_NAME_REFERENCE_EXT])
		) {
			$value = $data[self::FIELD_NAME_REFERENCE] ?? null;
			$ext =
				isset($data[self::FIELD_NAME_REFERENCE_EXT]) &&
				is_array($data[self::FIELD_NAME_REFERENCE_EXT])
					? $data[self::FIELD_NAME_REFERENCE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->setNameReference($value);
				} elseif (is_array($value)) {
					$this->setNameReference(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->setNameReference(
						new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setNameReference(new FHIRString($ext));
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
		if (isset($data[self::FIELD_DEFAULT_VALUE_IDENTIFIER])) {
			if ($data[self::FIELD_DEFAULT_VALUE_IDENTIFIER] instanceof FHIRIdentifier) {
				$this->setDefaultValueIdentifier($data[self::FIELD_DEFAULT_VALUE_IDENTIFIER]);
			} else {
				$this->setDefaultValueIdentifier(
					new FHIRIdentifier($data[self::FIELD_DEFAULT_VALUE_IDENTIFIER]),
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
		if (isset($data[self::FIELD_DEFAULT_VALUE_PERIOD])) {
			if ($data[self::FIELD_DEFAULT_VALUE_PERIOD] instanceof FHIRPeriod) {
				$this->setDefaultValuePeriod($data[self::FIELD_DEFAULT_VALUE_PERIOD]);
			} else {
				$this->setDefaultValuePeriod(
					new FHIRPeriod($data[self::FIELD_DEFAULT_VALUE_PERIOD]),
				);
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
		if (isset($data[self::FIELD_DEFAULT_VALUE_HUMAN_NAME])) {
			if ($data[self::FIELD_DEFAULT_VALUE_HUMAN_NAME] instanceof FHIRHumanName) {
				$this->setDefaultValueHumanName($data[self::FIELD_DEFAULT_VALUE_HUMAN_NAME]);
			} else {
				$this->setDefaultValueHumanName(
					new FHIRHumanName($data[self::FIELD_DEFAULT_VALUE_HUMAN_NAME]),
				);
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
		if (isset($data[self::FIELD_DEFAULT_VALUE_CONTACT_POINT])) {
			if ($data[self::FIELD_DEFAULT_VALUE_CONTACT_POINT] instanceof FHIRContactPoint) {
				$this->setDefaultValueContactPoint($data[self::FIELD_DEFAULT_VALUE_CONTACT_POINT]);
			} else {
				$this->setDefaultValueContactPoint(
					new FHIRContactPoint($data[self::FIELD_DEFAULT_VALUE_CONTACT_POINT]),
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
		if (isset($data[self::FIELD_FIXED_IDENTIFIER])) {
			if ($data[self::FIELD_FIXED_IDENTIFIER] instanceof FHIRIdentifier) {
				$this->setFixedIdentifier($data[self::FIELD_FIXED_IDENTIFIER]);
			} else {
				$this->setFixedIdentifier(new FHIRIdentifier($data[self::FIELD_FIXED_IDENTIFIER]));
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
		if (isset($data[self::FIELD_FIXED_PERIOD])) {
			if ($data[self::FIELD_FIXED_PERIOD] instanceof FHIRPeriod) {
				$this->setFixedPeriod($data[self::FIELD_FIXED_PERIOD]);
			} else {
				$this->setFixedPeriod(new FHIRPeriod($data[self::FIELD_FIXED_PERIOD]));
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
		if (isset($data[self::FIELD_FIXED_HUMAN_NAME])) {
			if ($data[self::FIELD_FIXED_HUMAN_NAME] instanceof FHIRHumanName) {
				$this->setFixedHumanName($data[self::FIELD_FIXED_HUMAN_NAME]);
			} else {
				$this->setFixedHumanName(new FHIRHumanName($data[self::FIELD_FIXED_HUMAN_NAME]));
			}
		}
		if (isset($data[self::FIELD_FIXED_ADDRESS])) {
			if ($data[self::FIELD_FIXED_ADDRESS] instanceof FHIRAddress) {
				$this->setFixedAddress($data[self::FIELD_FIXED_ADDRESS]);
			} else {
				$this->setFixedAddress(new FHIRAddress($data[self::FIELD_FIXED_ADDRESS]));
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
		if (isset($data[self::FIELD_FIXED_TIMING])) {
			if ($data[self::FIELD_FIXED_TIMING] instanceof FHIRTiming) {
				$this->setFixedTiming($data[self::FIELD_FIXED_TIMING]);
			} else {
				$this->setFixedTiming(new FHIRTiming($data[self::FIELD_FIXED_TIMING]));
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
		if (isset($data[self::FIELD_PATTERN_IDENTIFIER])) {
			if ($data[self::FIELD_PATTERN_IDENTIFIER] instanceof FHIRIdentifier) {
				$this->setPatternIdentifier($data[self::FIELD_PATTERN_IDENTIFIER]);
			} else {
				$this->setPatternIdentifier(
					new FHIRIdentifier($data[self::FIELD_PATTERN_IDENTIFIER]),
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
		if (isset($data[self::FIELD_PATTERN_PERIOD])) {
			if ($data[self::FIELD_PATTERN_PERIOD] instanceof FHIRPeriod) {
				$this->setPatternPeriod($data[self::FIELD_PATTERN_PERIOD]);
			} else {
				$this->setPatternPeriod(new FHIRPeriod($data[self::FIELD_PATTERN_PERIOD]));
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
		if (isset($data[self::FIELD_PATTERN_HUMAN_NAME])) {
			if ($data[self::FIELD_PATTERN_HUMAN_NAME] instanceof FHIRHumanName) {
				$this->setPatternHumanName($data[self::FIELD_PATTERN_HUMAN_NAME]);
			} else {
				$this->setPatternHumanName(
					new FHIRHumanName($data[self::FIELD_PATTERN_HUMAN_NAME]),
				);
			}
		}
		if (isset($data[self::FIELD_PATTERN_ADDRESS])) {
			if ($data[self::FIELD_PATTERN_ADDRESS] instanceof FHIRAddress) {
				$this->setPatternAddress($data[self::FIELD_PATTERN_ADDRESS]);
			} else {
				$this->setPatternAddress(new FHIRAddress($data[self::FIELD_PATTERN_ADDRESS]));
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
		if (isset($data[self::FIELD_PATTERN_TIMING])) {
			if ($data[self::FIELD_PATTERN_TIMING] instanceof FHIRTiming) {
				$this->setPatternTiming($data[self::FIELD_PATTERN_TIMING]);
			} else {
				$this->setPatternTiming(new FHIRTiming($data[self::FIELD_PATTERN_TIMING]));
			}
		}
		if (isset($data[self::FIELD_PATTERN_META])) {
			if ($data[self::FIELD_PATTERN_META] instanceof FHIRMeta) {
				$this->setPatternMeta($data[self::FIELD_PATTERN_META]);
			} else {
				$this->setPatternMeta(new FHIRMeta($data[self::FIELD_PATTERN_META]));
			}
		}
		if (
			isset($data[self::FIELD_EXAMPLE_BOOLEAN]) ||
			isset($data[self::FIELD_EXAMPLE_BOOLEAN_EXT])
		) {
			$value = $data[self::FIELD_EXAMPLE_BOOLEAN] ?? null;
			$ext =
				isset($data[self::FIELD_EXAMPLE_BOOLEAN_EXT]) &&
				is_array($data[self::FIELD_EXAMPLE_BOOLEAN_EXT])
					? $data[self::FIELD_EXAMPLE_BOOLEAN_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRBoolean) {
					$this->setExampleBoolean($value);
				} elseif (is_array($value)) {
					$this->setExampleBoolean(new FHIRBoolean(array_merge($ext, $value)));
				} else {
					$this->setExampleBoolean(
						new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setExampleBoolean(new FHIRBoolean($ext));
			}
		}
		if (
			isset($data[self::FIELD_EXAMPLE_INTEGER]) ||
			isset($data[self::FIELD_EXAMPLE_INTEGER_EXT])
		) {
			$value = $data[self::FIELD_EXAMPLE_INTEGER] ?? null;
			$ext =
				isset($data[self::FIELD_EXAMPLE_INTEGER_EXT]) &&
				is_array($data[self::FIELD_EXAMPLE_INTEGER_EXT])
					? $data[self::FIELD_EXAMPLE_INTEGER_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRInteger) {
					$this->setExampleInteger($value);
				} elseif (is_array($value)) {
					$this->setExampleInteger(new FHIRInteger(array_merge($ext, $value)));
				} else {
					$this->setExampleInteger(
						new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setExampleInteger(new FHIRInteger($ext));
			}
		}
		if (
			isset($data[self::FIELD_EXAMPLE_DECIMAL]) ||
			isset($data[self::FIELD_EXAMPLE_DECIMAL_EXT])
		) {
			$value = $data[self::FIELD_EXAMPLE_DECIMAL] ?? null;
			$ext =
				isset($data[self::FIELD_EXAMPLE_DECIMAL_EXT]) &&
				is_array($data[self::FIELD_EXAMPLE_DECIMAL_EXT])
					? $data[self::FIELD_EXAMPLE_DECIMAL_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRDecimal) {
					$this->setExampleDecimal($value);
				} elseif (is_array($value)) {
					$this->setExampleDecimal(new FHIRDecimal(array_merge($ext, $value)));
				} else {
					$this->setExampleDecimal(
						new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setExampleDecimal(new FHIRDecimal($ext));
			}
		}
		if (
			isset($data[self::FIELD_EXAMPLE_BASE_64BINARY]) ||
			isset($data[self::FIELD_EXAMPLE_BASE_64BINARY_EXT])
		) {
			$value = $data[self::FIELD_EXAMPLE_BASE_64BINARY] ?? null;
			$ext =
				isset($data[self::FIELD_EXAMPLE_BASE_64BINARY_EXT]) &&
				is_array($data[self::FIELD_EXAMPLE_BASE_64BINARY_EXT])
					? $data[self::FIELD_EXAMPLE_BASE_64BINARY_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRBase64Binary) {
					$this->setExampleBase64Binary($value);
				} elseif (is_array($value)) {
					$this->setExampleBase64Binary(new FHIRBase64Binary(array_merge($ext, $value)));
				} else {
					$this->setExampleBase64Binary(
						new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setExampleBase64Binary(new FHIRBase64Binary($ext));
			}
		}
		if (
			isset($data[self::FIELD_EXAMPLE_INSTANT]) ||
			isset($data[self::FIELD_EXAMPLE_INSTANT_EXT])
		) {
			$value = $data[self::FIELD_EXAMPLE_INSTANT] ?? null;
			$ext =
				isset($data[self::FIELD_EXAMPLE_INSTANT_EXT]) &&
				is_array($data[self::FIELD_EXAMPLE_INSTANT_EXT])
					? $data[self::FIELD_EXAMPLE_INSTANT_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRInstant) {
					$this->setExampleInstant($value);
				} elseif (is_array($value)) {
					$this->setExampleInstant(new FHIRInstant(array_merge($ext, $value)));
				} else {
					$this->setExampleInstant(
						new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setExampleInstant(new FHIRInstant($ext));
			}
		}
		if (
			isset($data[self::FIELD_EXAMPLE_STRING]) ||
			isset($data[self::FIELD_EXAMPLE_STRING_EXT])
		) {
			$value = $data[self::FIELD_EXAMPLE_STRING] ?? null;
			$ext =
				isset($data[self::FIELD_EXAMPLE_STRING_EXT]) &&
				is_array($data[self::FIELD_EXAMPLE_STRING_EXT])
					? $data[self::FIELD_EXAMPLE_STRING_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->setExampleString($value);
				} elseif (is_array($value)) {
					$this->setExampleString(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->setExampleString(
						new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setExampleString(new FHIRString($ext));
			}
		}
		if (isset($data[self::FIELD_EXAMPLE_URI]) || isset($data[self::FIELD_EXAMPLE_URI_EXT])) {
			$value = $data[self::FIELD_EXAMPLE_URI] ?? null;
			$ext =
				isset($data[self::FIELD_EXAMPLE_URI_EXT]) &&
				is_array($data[self::FIELD_EXAMPLE_URI_EXT])
					? $data[self::FIELD_EXAMPLE_URI_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRUri) {
					$this->setExampleUri($value);
				} elseif (is_array($value)) {
					$this->setExampleUri(new FHIRUri(array_merge($ext, $value)));
				} else {
					$this->setExampleUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setExampleUri(new FHIRUri($ext));
			}
		}
		if (isset($data[self::FIELD_EXAMPLE_DATE]) || isset($data[self::FIELD_EXAMPLE_DATE_EXT])) {
			$value = $data[self::FIELD_EXAMPLE_DATE] ?? null;
			$ext =
				isset($data[self::FIELD_EXAMPLE_DATE_EXT]) &&
				is_array($data[self::FIELD_EXAMPLE_DATE_EXT])
					? $data[self::FIELD_EXAMPLE_DATE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRDate) {
					$this->setExampleDate($value);
				} elseif (is_array($value)) {
					$this->setExampleDate(new FHIRDate(array_merge($ext, $value)));
				} else {
					$this->setExampleDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setExampleDate(new FHIRDate($ext));
			}
		}
		if (
			isset($data[self::FIELD_EXAMPLE_DATE_TIME]) ||
			isset($data[self::FIELD_EXAMPLE_DATE_TIME_EXT])
		) {
			$value = $data[self::FIELD_EXAMPLE_DATE_TIME] ?? null;
			$ext =
				isset($data[self::FIELD_EXAMPLE_DATE_TIME_EXT]) &&
				is_array($data[self::FIELD_EXAMPLE_DATE_TIME_EXT])
					? $data[self::FIELD_EXAMPLE_DATE_TIME_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRDateTime) {
					$this->setExampleDateTime($value);
				} elseif (is_array($value)) {
					$this->setExampleDateTime(new FHIRDateTime(array_merge($ext, $value)));
				} else {
					$this->setExampleDateTime(
						new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setExampleDateTime(new FHIRDateTime($ext));
			}
		}
		if (isset($data[self::FIELD_EXAMPLE_TIME]) || isset($data[self::FIELD_EXAMPLE_TIME_EXT])) {
			$value = $data[self::FIELD_EXAMPLE_TIME] ?? null;
			$ext =
				isset($data[self::FIELD_EXAMPLE_TIME_EXT]) &&
				is_array($data[self::FIELD_EXAMPLE_TIME_EXT])
					? $data[self::FIELD_EXAMPLE_TIME_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRTime) {
					$this->setExampleTime($value);
				} elseif (is_array($value)) {
					$this->setExampleTime(new FHIRTime(array_merge($ext, $value)));
				} else {
					$this->setExampleTime(new FHIRTime([FHIRTime::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setExampleTime(new FHIRTime($ext));
			}
		}
		if (isset($data[self::FIELD_EXAMPLE_CODE]) || isset($data[self::FIELD_EXAMPLE_CODE_EXT])) {
			$value = $data[self::FIELD_EXAMPLE_CODE] ?? null;
			$ext =
				isset($data[self::FIELD_EXAMPLE_CODE_EXT]) &&
				is_array($data[self::FIELD_EXAMPLE_CODE_EXT])
					? $data[self::FIELD_EXAMPLE_CODE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRCode) {
					$this->setExampleCode($value);
				} elseif (is_array($value)) {
					$this->setExampleCode(new FHIRCode(array_merge($ext, $value)));
				} else {
					$this->setExampleCode(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setExampleCode(new FHIRCode($ext));
			}
		}
		if (isset($data[self::FIELD_EXAMPLE_OID]) || isset($data[self::FIELD_EXAMPLE_OID_EXT])) {
			$value = $data[self::FIELD_EXAMPLE_OID] ?? null;
			$ext =
				isset($data[self::FIELD_EXAMPLE_OID_EXT]) &&
				is_array($data[self::FIELD_EXAMPLE_OID_EXT])
					? $data[self::FIELD_EXAMPLE_OID_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIROid) {
					$this->setExampleOid($value);
				} elseif (is_array($value)) {
					$this->setExampleOid(new FHIROid(array_merge($ext, $value)));
				} else {
					$this->setExampleOid(new FHIROid([FHIROid::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setExampleOid(new FHIROid($ext));
			}
		}
		if (isset($data[self::FIELD_EXAMPLE_UUID]) || isset($data[self::FIELD_EXAMPLE_UUID_EXT])) {
			$value = $data[self::FIELD_EXAMPLE_UUID] ?? null;
			$ext =
				isset($data[self::FIELD_EXAMPLE_UUID_EXT]) &&
				is_array($data[self::FIELD_EXAMPLE_UUID_EXT])
					? $data[self::FIELD_EXAMPLE_UUID_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRUuid) {
					$this->setExampleUuid($value);
				} elseif (is_array($value)) {
					$this->setExampleUuid(new FHIRUuid(array_merge($ext, $value)));
				} else {
					$this->setExampleUuid(new FHIRUuid([FHIRUuid::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setExampleUuid(new FHIRUuid($ext));
			}
		}
		if (isset($data[self::FIELD_EXAMPLE_ID]) || isset($data[self::FIELD_EXAMPLE_ID_EXT])) {
			$value = $data[self::FIELD_EXAMPLE_ID] ?? null;
			$ext =
				isset($data[self::FIELD_EXAMPLE_ID_EXT]) &&
				is_array($data[self::FIELD_EXAMPLE_ID_EXT])
					? $data[self::FIELD_EXAMPLE_ID_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRId) {
					$this->setExampleId($value);
				} elseif (is_array($value)) {
					$this->setExampleId(new FHIRId(array_merge($ext, $value)));
				} else {
					$this->setExampleId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setExampleId(new FHIRId($ext));
			}
		}
		if (
			isset($data[self::FIELD_EXAMPLE_UNSIGNED_INT]) ||
			isset($data[self::FIELD_EXAMPLE_UNSIGNED_INT_EXT])
		) {
			$value = $data[self::FIELD_EXAMPLE_UNSIGNED_INT] ?? null;
			$ext =
				isset($data[self::FIELD_EXAMPLE_UNSIGNED_INT_EXT]) &&
				is_array($data[self::FIELD_EXAMPLE_UNSIGNED_INT_EXT])
					? $data[self::FIELD_EXAMPLE_UNSIGNED_INT_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRUnsignedInt) {
					$this->setExampleUnsignedInt($value);
				} elseif (is_array($value)) {
					$this->setExampleUnsignedInt(new FHIRUnsignedInt(array_merge($ext, $value)));
				} else {
					$this->setExampleUnsignedInt(
						new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setExampleUnsignedInt(new FHIRUnsignedInt($ext));
			}
		}
		if (
			isset($data[self::FIELD_EXAMPLE_POSITIVE_INT]) ||
			isset($data[self::FIELD_EXAMPLE_POSITIVE_INT_EXT])
		) {
			$value = $data[self::FIELD_EXAMPLE_POSITIVE_INT] ?? null;
			$ext =
				isset($data[self::FIELD_EXAMPLE_POSITIVE_INT_EXT]) &&
				is_array($data[self::FIELD_EXAMPLE_POSITIVE_INT_EXT])
					? $data[self::FIELD_EXAMPLE_POSITIVE_INT_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRPositiveInt) {
					$this->setExamplePositiveInt($value);
				} elseif (is_array($value)) {
					$this->setExamplePositiveInt(new FHIRPositiveInt(array_merge($ext, $value)));
				} else {
					$this->setExamplePositiveInt(
						new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setExamplePositiveInt(new FHIRPositiveInt($ext));
			}
		}
		if (
			isset($data[self::FIELD_EXAMPLE_MARKDOWN]) ||
			isset($data[self::FIELD_EXAMPLE_MARKDOWN_EXT])
		) {
			$value = $data[self::FIELD_EXAMPLE_MARKDOWN] ?? null;
			$ext =
				isset($data[self::FIELD_EXAMPLE_MARKDOWN_EXT]) &&
				is_array($data[self::FIELD_EXAMPLE_MARKDOWN_EXT])
					? $data[self::FIELD_EXAMPLE_MARKDOWN_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRMarkdown) {
					$this->setExampleMarkdown($value);
				} elseif (is_array($value)) {
					$this->setExampleMarkdown(new FHIRMarkdown(array_merge($ext, $value)));
				} else {
					$this->setExampleMarkdown(
						new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setExampleMarkdown(new FHIRMarkdown($ext));
			}
		}
		if (isset($data[self::FIELD_EXAMPLE_ANNOTATION])) {
			if ($data[self::FIELD_EXAMPLE_ANNOTATION] instanceof FHIRAnnotation) {
				$this->setExampleAnnotation($data[self::FIELD_EXAMPLE_ANNOTATION]);
			} else {
				$this->setExampleAnnotation(
					new FHIRAnnotation($data[self::FIELD_EXAMPLE_ANNOTATION]),
				);
			}
		}
		if (isset($data[self::FIELD_EXAMPLE_ATTACHMENT])) {
			if ($data[self::FIELD_EXAMPLE_ATTACHMENT] instanceof FHIRAttachment) {
				$this->setExampleAttachment($data[self::FIELD_EXAMPLE_ATTACHMENT]);
			} else {
				$this->setExampleAttachment(
					new FHIRAttachment($data[self::FIELD_EXAMPLE_ATTACHMENT]),
				);
			}
		}
		if (isset($data[self::FIELD_EXAMPLE_IDENTIFIER])) {
			if ($data[self::FIELD_EXAMPLE_IDENTIFIER] instanceof FHIRIdentifier) {
				$this->setExampleIdentifier($data[self::FIELD_EXAMPLE_IDENTIFIER]);
			} else {
				$this->setExampleIdentifier(
					new FHIRIdentifier($data[self::FIELD_EXAMPLE_IDENTIFIER]),
				);
			}
		}
		if (isset($data[self::FIELD_EXAMPLE_CODEABLE_CONCEPT])) {
			if ($data[self::FIELD_EXAMPLE_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
				$this->setExampleCodeableConcept($data[self::FIELD_EXAMPLE_CODEABLE_CONCEPT]);
			} else {
				$this->setExampleCodeableConcept(
					new FHIRCodeableConcept($data[self::FIELD_EXAMPLE_CODEABLE_CONCEPT]),
				);
			}
		}
		if (isset($data[self::FIELD_EXAMPLE_CODING])) {
			if ($data[self::FIELD_EXAMPLE_CODING] instanceof FHIRCoding) {
				$this->setExampleCoding($data[self::FIELD_EXAMPLE_CODING]);
			} else {
				$this->setExampleCoding(new FHIRCoding($data[self::FIELD_EXAMPLE_CODING]));
			}
		}
		if (isset($data[self::FIELD_EXAMPLE_QUANTITY])) {
			if ($data[self::FIELD_EXAMPLE_QUANTITY] instanceof FHIRQuantity) {
				$this->setExampleQuantity($data[self::FIELD_EXAMPLE_QUANTITY]);
			} else {
				$this->setExampleQuantity(new FHIRQuantity($data[self::FIELD_EXAMPLE_QUANTITY]));
			}
		}
		if (isset($data[self::FIELD_EXAMPLE_RANGE])) {
			if ($data[self::FIELD_EXAMPLE_RANGE] instanceof FHIRRange) {
				$this->setExampleRange($data[self::FIELD_EXAMPLE_RANGE]);
			} else {
				$this->setExampleRange(new FHIRRange($data[self::FIELD_EXAMPLE_RANGE]));
			}
		}
		if (isset($data[self::FIELD_EXAMPLE_PERIOD])) {
			if ($data[self::FIELD_EXAMPLE_PERIOD] instanceof FHIRPeriod) {
				$this->setExamplePeriod($data[self::FIELD_EXAMPLE_PERIOD]);
			} else {
				$this->setExamplePeriod(new FHIRPeriod($data[self::FIELD_EXAMPLE_PERIOD]));
			}
		}
		if (isset($data[self::FIELD_EXAMPLE_RATIO])) {
			if ($data[self::FIELD_EXAMPLE_RATIO] instanceof FHIRRatio) {
				$this->setExampleRatio($data[self::FIELD_EXAMPLE_RATIO]);
			} else {
				$this->setExampleRatio(new FHIRRatio($data[self::FIELD_EXAMPLE_RATIO]));
			}
		}
		if (isset($data[self::FIELD_EXAMPLE_REFERENCE])) {
			if ($data[self::FIELD_EXAMPLE_REFERENCE] instanceof FHIRReference) {
				$this->setExampleReference($data[self::FIELD_EXAMPLE_REFERENCE]);
			} else {
				$this->setExampleReference(new FHIRReference($data[self::FIELD_EXAMPLE_REFERENCE]));
			}
		}
		if (isset($data[self::FIELD_EXAMPLE_SAMPLED_DATA])) {
			if ($data[self::FIELD_EXAMPLE_SAMPLED_DATA] instanceof FHIRSampledData) {
				$this->setExampleSampledData($data[self::FIELD_EXAMPLE_SAMPLED_DATA]);
			} else {
				$this->setExampleSampledData(
					new FHIRSampledData($data[self::FIELD_EXAMPLE_SAMPLED_DATA]),
				);
			}
		}
		if (isset($data[self::FIELD_EXAMPLE_SIGNATURE])) {
			if ($data[self::FIELD_EXAMPLE_SIGNATURE] instanceof FHIRSignature) {
				$this->setExampleSignature($data[self::FIELD_EXAMPLE_SIGNATURE]);
			} else {
				$this->setExampleSignature(new FHIRSignature($data[self::FIELD_EXAMPLE_SIGNATURE]));
			}
		}
		if (isset($data[self::FIELD_EXAMPLE_HUMAN_NAME])) {
			if ($data[self::FIELD_EXAMPLE_HUMAN_NAME] instanceof FHIRHumanName) {
				$this->setExampleHumanName($data[self::FIELD_EXAMPLE_HUMAN_NAME]);
			} else {
				$this->setExampleHumanName(
					new FHIRHumanName($data[self::FIELD_EXAMPLE_HUMAN_NAME]),
				);
			}
		}
		if (isset($data[self::FIELD_EXAMPLE_ADDRESS])) {
			if ($data[self::FIELD_EXAMPLE_ADDRESS] instanceof FHIRAddress) {
				$this->setExampleAddress($data[self::FIELD_EXAMPLE_ADDRESS]);
			} else {
				$this->setExampleAddress(new FHIRAddress($data[self::FIELD_EXAMPLE_ADDRESS]));
			}
		}
		if (isset($data[self::FIELD_EXAMPLE_CONTACT_POINT])) {
			if ($data[self::FIELD_EXAMPLE_CONTACT_POINT] instanceof FHIRContactPoint) {
				$this->setExampleContactPoint($data[self::FIELD_EXAMPLE_CONTACT_POINT]);
			} else {
				$this->setExampleContactPoint(
					new FHIRContactPoint($data[self::FIELD_EXAMPLE_CONTACT_POINT]),
				);
			}
		}
		if (isset($data[self::FIELD_EXAMPLE_TIMING])) {
			if ($data[self::FIELD_EXAMPLE_TIMING] instanceof FHIRTiming) {
				$this->setExampleTiming($data[self::FIELD_EXAMPLE_TIMING]);
			} else {
				$this->setExampleTiming(new FHIRTiming($data[self::FIELD_EXAMPLE_TIMING]));
			}
		}
		if (isset($data[self::FIELD_EXAMPLE_META])) {
			if ($data[self::FIELD_EXAMPLE_META] instanceof FHIRMeta) {
				$this->setExampleMeta($data[self::FIELD_EXAMPLE_META]);
			} else {
				$this->setExampleMeta(new FHIRMeta($data[self::FIELD_EXAMPLE_META]));
			}
		}
		if (
			isset($data[self::FIELD_MIN_VALUE_BOOLEAN]) ||
			isset($data[self::FIELD_MIN_VALUE_BOOLEAN_EXT])
		) {
			$value = $data[self::FIELD_MIN_VALUE_BOOLEAN] ?? null;
			$ext =
				isset($data[self::FIELD_MIN_VALUE_BOOLEAN_EXT]) &&
				is_array($data[self::FIELD_MIN_VALUE_BOOLEAN_EXT])
					? $data[self::FIELD_MIN_VALUE_BOOLEAN_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRBoolean) {
					$this->setMinValueBoolean($value);
				} elseif (is_array($value)) {
					$this->setMinValueBoolean(new FHIRBoolean(array_merge($ext, $value)));
				} else {
					$this->setMinValueBoolean(
						new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setMinValueBoolean(new FHIRBoolean($ext));
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
			isset($data[self::FIELD_MIN_VALUE_BASE_64BINARY]) ||
			isset($data[self::FIELD_MIN_VALUE_BASE_64BINARY_EXT])
		) {
			$value = $data[self::FIELD_MIN_VALUE_BASE_64BINARY] ?? null;
			$ext =
				isset($data[self::FIELD_MIN_VALUE_BASE_64BINARY_EXT]) &&
				is_array($data[self::FIELD_MIN_VALUE_BASE_64BINARY_EXT])
					? $data[self::FIELD_MIN_VALUE_BASE_64BINARY_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRBase64Binary) {
					$this->setMinValueBase64Binary($value);
				} elseif (is_array($value)) {
					$this->setMinValueBase64Binary(new FHIRBase64Binary(array_merge($ext, $value)));
				} else {
					$this->setMinValueBase64Binary(
						new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setMinValueBase64Binary(new FHIRBase64Binary($ext));
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
			isset($data[self::FIELD_MIN_VALUE_STRING]) ||
			isset($data[self::FIELD_MIN_VALUE_STRING_EXT])
		) {
			$value = $data[self::FIELD_MIN_VALUE_STRING] ?? null;
			$ext =
				isset($data[self::FIELD_MIN_VALUE_STRING_EXT]) &&
				is_array($data[self::FIELD_MIN_VALUE_STRING_EXT])
					? $data[self::FIELD_MIN_VALUE_STRING_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->setMinValueString($value);
				} elseif (is_array($value)) {
					$this->setMinValueString(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->setMinValueString(
						new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setMinValueString(new FHIRString($ext));
			}
		}
		if (
			isset($data[self::FIELD_MIN_VALUE_URI]) ||
			isset($data[self::FIELD_MIN_VALUE_URI_EXT])
		) {
			$value = $data[self::FIELD_MIN_VALUE_URI] ?? null;
			$ext =
				isset($data[self::FIELD_MIN_VALUE_URI_EXT]) &&
				is_array($data[self::FIELD_MIN_VALUE_URI_EXT])
					? $data[self::FIELD_MIN_VALUE_URI_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRUri) {
					$this->setMinValueUri($value);
				} elseif (is_array($value)) {
					$this->setMinValueUri(new FHIRUri(array_merge($ext, $value)));
				} else {
					$this->setMinValueUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setMinValueUri(new FHIRUri($ext));
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
			isset($data[self::FIELD_MIN_VALUE_CODE]) ||
			isset($data[self::FIELD_MIN_VALUE_CODE_EXT])
		) {
			$value = $data[self::FIELD_MIN_VALUE_CODE] ?? null;
			$ext =
				isset($data[self::FIELD_MIN_VALUE_CODE_EXT]) &&
				is_array($data[self::FIELD_MIN_VALUE_CODE_EXT])
					? $data[self::FIELD_MIN_VALUE_CODE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRCode) {
					$this->setMinValueCode($value);
				} elseif (is_array($value)) {
					$this->setMinValueCode(new FHIRCode(array_merge($ext, $value)));
				} else {
					$this->setMinValueCode(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setMinValueCode(new FHIRCode($ext));
			}
		}
		if (
			isset($data[self::FIELD_MIN_VALUE_OID]) ||
			isset($data[self::FIELD_MIN_VALUE_OID_EXT])
		) {
			$value = $data[self::FIELD_MIN_VALUE_OID] ?? null;
			$ext =
				isset($data[self::FIELD_MIN_VALUE_OID_EXT]) &&
				is_array($data[self::FIELD_MIN_VALUE_OID_EXT])
					? $data[self::FIELD_MIN_VALUE_OID_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIROid) {
					$this->setMinValueOid($value);
				} elseif (is_array($value)) {
					$this->setMinValueOid(new FHIROid(array_merge($ext, $value)));
				} else {
					$this->setMinValueOid(new FHIROid([FHIROid::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setMinValueOid(new FHIROid($ext));
			}
		}
		if (
			isset($data[self::FIELD_MIN_VALUE_UUID]) ||
			isset($data[self::FIELD_MIN_VALUE_UUID_EXT])
		) {
			$value = $data[self::FIELD_MIN_VALUE_UUID] ?? null;
			$ext =
				isset($data[self::FIELD_MIN_VALUE_UUID_EXT]) &&
				is_array($data[self::FIELD_MIN_VALUE_UUID_EXT])
					? $data[self::FIELD_MIN_VALUE_UUID_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRUuid) {
					$this->setMinValueUuid($value);
				} elseif (is_array($value)) {
					$this->setMinValueUuid(new FHIRUuid(array_merge($ext, $value)));
				} else {
					$this->setMinValueUuid(new FHIRUuid([FHIRUuid::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setMinValueUuid(new FHIRUuid($ext));
			}
		}
		if (isset($data[self::FIELD_MIN_VALUE_ID]) || isset($data[self::FIELD_MIN_VALUE_ID_EXT])) {
			$value = $data[self::FIELD_MIN_VALUE_ID] ?? null;
			$ext =
				isset($data[self::FIELD_MIN_VALUE_ID_EXT]) &&
				is_array($data[self::FIELD_MIN_VALUE_ID_EXT])
					? $data[self::FIELD_MIN_VALUE_ID_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRId) {
					$this->setMinValueId($value);
				} elseif (is_array($value)) {
					$this->setMinValueId(new FHIRId(array_merge($ext, $value)));
				} else {
					$this->setMinValueId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setMinValueId(new FHIRId($ext));
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
			isset($data[self::FIELD_MIN_VALUE_MARKDOWN]) ||
			isset($data[self::FIELD_MIN_VALUE_MARKDOWN_EXT])
		) {
			$value = $data[self::FIELD_MIN_VALUE_MARKDOWN] ?? null;
			$ext =
				isset($data[self::FIELD_MIN_VALUE_MARKDOWN_EXT]) &&
				is_array($data[self::FIELD_MIN_VALUE_MARKDOWN_EXT])
					? $data[self::FIELD_MIN_VALUE_MARKDOWN_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRMarkdown) {
					$this->setMinValueMarkdown($value);
				} elseif (is_array($value)) {
					$this->setMinValueMarkdown(new FHIRMarkdown(array_merge($ext, $value)));
				} else {
					$this->setMinValueMarkdown(
						new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setMinValueMarkdown(new FHIRMarkdown($ext));
			}
		}
		if (isset($data[self::FIELD_MIN_VALUE_ANNOTATION])) {
			if ($data[self::FIELD_MIN_VALUE_ANNOTATION] instanceof FHIRAnnotation) {
				$this->setMinValueAnnotation($data[self::FIELD_MIN_VALUE_ANNOTATION]);
			} else {
				$this->setMinValueAnnotation(
					new FHIRAnnotation($data[self::FIELD_MIN_VALUE_ANNOTATION]),
				);
			}
		}
		if (isset($data[self::FIELD_MIN_VALUE_ATTACHMENT])) {
			if ($data[self::FIELD_MIN_VALUE_ATTACHMENT] instanceof FHIRAttachment) {
				$this->setMinValueAttachment($data[self::FIELD_MIN_VALUE_ATTACHMENT]);
			} else {
				$this->setMinValueAttachment(
					new FHIRAttachment($data[self::FIELD_MIN_VALUE_ATTACHMENT]),
				);
			}
		}
		if (isset($data[self::FIELD_MIN_VALUE_IDENTIFIER])) {
			if ($data[self::FIELD_MIN_VALUE_IDENTIFIER] instanceof FHIRIdentifier) {
				$this->setMinValueIdentifier($data[self::FIELD_MIN_VALUE_IDENTIFIER]);
			} else {
				$this->setMinValueIdentifier(
					new FHIRIdentifier($data[self::FIELD_MIN_VALUE_IDENTIFIER]),
				);
			}
		}
		if (isset($data[self::FIELD_MIN_VALUE_CODEABLE_CONCEPT])) {
			if ($data[self::FIELD_MIN_VALUE_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
				$this->setMinValueCodeableConcept($data[self::FIELD_MIN_VALUE_CODEABLE_CONCEPT]);
			} else {
				$this->setMinValueCodeableConcept(
					new FHIRCodeableConcept($data[self::FIELD_MIN_VALUE_CODEABLE_CONCEPT]),
				);
			}
		}
		if (isset($data[self::FIELD_MIN_VALUE_CODING])) {
			if ($data[self::FIELD_MIN_VALUE_CODING] instanceof FHIRCoding) {
				$this->setMinValueCoding($data[self::FIELD_MIN_VALUE_CODING]);
			} else {
				$this->setMinValueCoding(new FHIRCoding($data[self::FIELD_MIN_VALUE_CODING]));
			}
		}
		if (isset($data[self::FIELD_MIN_VALUE_QUANTITY])) {
			if ($data[self::FIELD_MIN_VALUE_QUANTITY] instanceof FHIRQuantity) {
				$this->setMinValueQuantity($data[self::FIELD_MIN_VALUE_QUANTITY]);
			} else {
				$this->setMinValueQuantity(new FHIRQuantity($data[self::FIELD_MIN_VALUE_QUANTITY]));
			}
		}
		if (isset($data[self::FIELD_MIN_VALUE_RANGE])) {
			if ($data[self::FIELD_MIN_VALUE_RANGE] instanceof FHIRRange) {
				$this->setMinValueRange($data[self::FIELD_MIN_VALUE_RANGE]);
			} else {
				$this->setMinValueRange(new FHIRRange($data[self::FIELD_MIN_VALUE_RANGE]));
			}
		}
		if (isset($data[self::FIELD_MIN_VALUE_PERIOD])) {
			if ($data[self::FIELD_MIN_VALUE_PERIOD] instanceof FHIRPeriod) {
				$this->setMinValuePeriod($data[self::FIELD_MIN_VALUE_PERIOD]);
			} else {
				$this->setMinValuePeriod(new FHIRPeriod($data[self::FIELD_MIN_VALUE_PERIOD]));
			}
		}
		if (isset($data[self::FIELD_MIN_VALUE_RATIO])) {
			if ($data[self::FIELD_MIN_VALUE_RATIO] instanceof FHIRRatio) {
				$this->setMinValueRatio($data[self::FIELD_MIN_VALUE_RATIO]);
			} else {
				$this->setMinValueRatio(new FHIRRatio($data[self::FIELD_MIN_VALUE_RATIO]));
			}
		}
		if (isset($data[self::FIELD_MIN_VALUE_REFERENCE])) {
			if ($data[self::FIELD_MIN_VALUE_REFERENCE] instanceof FHIRReference) {
				$this->setMinValueReference($data[self::FIELD_MIN_VALUE_REFERENCE]);
			} else {
				$this->setMinValueReference(
					new FHIRReference($data[self::FIELD_MIN_VALUE_REFERENCE]),
				);
			}
		}
		if (isset($data[self::FIELD_MIN_VALUE_SAMPLED_DATA])) {
			if ($data[self::FIELD_MIN_VALUE_SAMPLED_DATA] instanceof FHIRSampledData) {
				$this->setMinValueSampledData($data[self::FIELD_MIN_VALUE_SAMPLED_DATA]);
			} else {
				$this->setMinValueSampledData(
					new FHIRSampledData($data[self::FIELD_MIN_VALUE_SAMPLED_DATA]),
				);
			}
		}
		if (isset($data[self::FIELD_MIN_VALUE_SIGNATURE])) {
			if ($data[self::FIELD_MIN_VALUE_SIGNATURE] instanceof FHIRSignature) {
				$this->setMinValueSignature($data[self::FIELD_MIN_VALUE_SIGNATURE]);
			} else {
				$this->setMinValueSignature(
					new FHIRSignature($data[self::FIELD_MIN_VALUE_SIGNATURE]),
				);
			}
		}
		if (isset($data[self::FIELD_MIN_VALUE_HUMAN_NAME])) {
			if ($data[self::FIELD_MIN_VALUE_HUMAN_NAME] instanceof FHIRHumanName) {
				$this->setMinValueHumanName($data[self::FIELD_MIN_VALUE_HUMAN_NAME]);
			} else {
				$this->setMinValueHumanName(
					new FHIRHumanName($data[self::FIELD_MIN_VALUE_HUMAN_NAME]),
				);
			}
		}
		if (isset($data[self::FIELD_MIN_VALUE_ADDRESS])) {
			if ($data[self::FIELD_MIN_VALUE_ADDRESS] instanceof FHIRAddress) {
				$this->setMinValueAddress($data[self::FIELD_MIN_VALUE_ADDRESS]);
			} else {
				$this->setMinValueAddress(new FHIRAddress($data[self::FIELD_MIN_VALUE_ADDRESS]));
			}
		}
		if (isset($data[self::FIELD_MIN_VALUE_CONTACT_POINT])) {
			if ($data[self::FIELD_MIN_VALUE_CONTACT_POINT] instanceof FHIRContactPoint) {
				$this->setMinValueContactPoint($data[self::FIELD_MIN_VALUE_CONTACT_POINT]);
			} else {
				$this->setMinValueContactPoint(
					new FHIRContactPoint($data[self::FIELD_MIN_VALUE_CONTACT_POINT]),
				);
			}
		}
		if (isset($data[self::FIELD_MIN_VALUE_TIMING])) {
			if ($data[self::FIELD_MIN_VALUE_TIMING] instanceof FHIRTiming) {
				$this->setMinValueTiming($data[self::FIELD_MIN_VALUE_TIMING]);
			} else {
				$this->setMinValueTiming(new FHIRTiming($data[self::FIELD_MIN_VALUE_TIMING]));
			}
		}
		if (isset($data[self::FIELD_MIN_VALUE_META])) {
			if ($data[self::FIELD_MIN_VALUE_META] instanceof FHIRMeta) {
				$this->setMinValueMeta($data[self::FIELD_MIN_VALUE_META]);
			} else {
				$this->setMinValueMeta(new FHIRMeta($data[self::FIELD_MIN_VALUE_META]));
			}
		}
		if (
			isset($data[self::FIELD_MAX_VALUE_BOOLEAN]) ||
			isset($data[self::FIELD_MAX_VALUE_BOOLEAN_EXT])
		) {
			$value = $data[self::FIELD_MAX_VALUE_BOOLEAN] ?? null;
			$ext =
				isset($data[self::FIELD_MAX_VALUE_BOOLEAN_EXT]) &&
				is_array($data[self::FIELD_MAX_VALUE_BOOLEAN_EXT])
					? $data[self::FIELD_MAX_VALUE_BOOLEAN_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRBoolean) {
					$this->setMaxValueBoolean($value);
				} elseif (is_array($value)) {
					$this->setMaxValueBoolean(new FHIRBoolean(array_merge($ext, $value)));
				} else {
					$this->setMaxValueBoolean(
						new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setMaxValueBoolean(new FHIRBoolean($ext));
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
			isset($data[self::FIELD_MAX_VALUE_BASE_64BINARY]) ||
			isset($data[self::FIELD_MAX_VALUE_BASE_64BINARY_EXT])
		) {
			$value = $data[self::FIELD_MAX_VALUE_BASE_64BINARY] ?? null;
			$ext =
				isset($data[self::FIELD_MAX_VALUE_BASE_64BINARY_EXT]) &&
				is_array($data[self::FIELD_MAX_VALUE_BASE_64BINARY_EXT])
					? $data[self::FIELD_MAX_VALUE_BASE_64BINARY_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRBase64Binary) {
					$this->setMaxValueBase64Binary($value);
				} elseif (is_array($value)) {
					$this->setMaxValueBase64Binary(new FHIRBase64Binary(array_merge($ext, $value)));
				} else {
					$this->setMaxValueBase64Binary(
						new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setMaxValueBase64Binary(new FHIRBase64Binary($ext));
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
			isset($data[self::FIELD_MAX_VALUE_STRING]) ||
			isset($data[self::FIELD_MAX_VALUE_STRING_EXT])
		) {
			$value = $data[self::FIELD_MAX_VALUE_STRING] ?? null;
			$ext =
				isset($data[self::FIELD_MAX_VALUE_STRING_EXT]) &&
				is_array($data[self::FIELD_MAX_VALUE_STRING_EXT])
					? $data[self::FIELD_MAX_VALUE_STRING_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->setMaxValueString($value);
				} elseif (is_array($value)) {
					$this->setMaxValueString(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->setMaxValueString(
						new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setMaxValueString(new FHIRString($ext));
			}
		}
		if (
			isset($data[self::FIELD_MAX_VALUE_URI]) ||
			isset($data[self::FIELD_MAX_VALUE_URI_EXT])
		) {
			$value = $data[self::FIELD_MAX_VALUE_URI] ?? null;
			$ext =
				isset($data[self::FIELD_MAX_VALUE_URI_EXT]) &&
				is_array($data[self::FIELD_MAX_VALUE_URI_EXT])
					? $data[self::FIELD_MAX_VALUE_URI_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRUri) {
					$this->setMaxValueUri($value);
				} elseif (is_array($value)) {
					$this->setMaxValueUri(new FHIRUri(array_merge($ext, $value)));
				} else {
					$this->setMaxValueUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setMaxValueUri(new FHIRUri($ext));
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
			isset($data[self::FIELD_MAX_VALUE_CODE]) ||
			isset($data[self::FIELD_MAX_VALUE_CODE_EXT])
		) {
			$value = $data[self::FIELD_MAX_VALUE_CODE] ?? null;
			$ext =
				isset($data[self::FIELD_MAX_VALUE_CODE_EXT]) &&
				is_array($data[self::FIELD_MAX_VALUE_CODE_EXT])
					? $data[self::FIELD_MAX_VALUE_CODE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRCode) {
					$this->setMaxValueCode($value);
				} elseif (is_array($value)) {
					$this->setMaxValueCode(new FHIRCode(array_merge($ext, $value)));
				} else {
					$this->setMaxValueCode(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setMaxValueCode(new FHIRCode($ext));
			}
		}
		if (
			isset($data[self::FIELD_MAX_VALUE_OID]) ||
			isset($data[self::FIELD_MAX_VALUE_OID_EXT])
		) {
			$value = $data[self::FIELD_MAX_VALUE_OID] ?? null;
			$ext =
				isset($data[self::FIELD_MAX_VALUE_OID_EXT]) &&
				is_array($data[self::FIELD_MAX_VALUE_OID_EXT])
					? $data[self::FIELD_MAX_VALUE_OID_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIROid) {
					$this->setMaxValueOid($value);
				} elseif (is_array($value)) {
					$this->setMaxValueOid(new FHIROid(array_merge($ext, $value)));
				} else {
					$this->setMaxValueOid(new FHIROid([FHIROid::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setMaxValueOid(new FHIROid($ext));
			}
		}
		if (
			isset($data[self::FIELD_MAX_VALUE_UUID]) ||
			isset($data[self::FIELD_MAX_VALUE_UUID_EXT])
		) {
			$value = $data[self::FIELD_MAX_VALUE_UUID] ?? null;
			$ext =
				isset($data[self::FIELD_MAX_VALUE_UUID_EXT]) &&
				is_array($data[self::FIELD_MAX_VALUE_UUID_EXT])
					? $data[self::FIELD_MAX_VALUE_UUID_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRUuid) {
					$this->setMaxValueUuid($value);
				} elseif (is_array($value)) {
					$this->setMaxValueUuid(new FHIRUuid(array_merge($ext, $value)));
				} else {
					$this->setMaxValueUuid(new FHIRUuid([FHIRUuid::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setMaxValueUuid(new FHIRUuid($ext));
			}
		}
		if (isset($data[self::FIELD_MAX_VALUE_ID]) || isset($data[self::FIELD_MAX_VALUE_ID_EXT])) {
			$value = $data[self::FIELD_MAX_VALUE_ID] ?? null;
			$ext =
				isset($data[self::FIELD_MAX_VALUE_ID_EXT]) &&
				is_array($data[self::FIELD_MAX_VALUE_ID_EXT])
					? $data[self::FIELD_MAX_VALUE_ID_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRId) {
					$this->setMaxValueId($value);
				} elseif (is_array($value)) {
					$this->setMaxValueId(new FHIRId(array_merge($ext, $value)));
				} else {
					$this->setMaxValueId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setMaxValueId(new FHIRId($ext));
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
			isset($data[self::FIELD_MAX_VALUE_MARKDOWN]) ||
			isset($data[self::FIELD_MAX_VALUE_MARKDOWN_EXT])
		) {
			$value = $data[self::FIELD_MAX_VALUE_MARKDOWN] ?? null;
			$ext =
				isset($data[self::FIELD_MAX_VALUE_MARKDOWN_EXT]) &&
				is_array($data[self::FIELD_MAX_VALUE_MARKDOWN_EXT])
					? $data[self::FIELD_MAX_VALUE_MARKDOWN_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRMarkdown) {
					$this->setMaxValueMarkdown($value);
				} elseif (is_array($value)) {
					$this->setMaxValueMarkdown(new FHIRMarkdown(array_merge($ext, $value)));
				} else {
					$this->setMaxValueMarkdown(
						new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setMaxValueMarkdown(new FHIRMarkdown($ext));
			}
		}
		if (isset($data[self::FIELD_MAX_VALUE_ANNOTATION])) {
			if ($data[self::FIELD_MAX_VALUE_ANNOTATION] instanceof FHIRAnnotation) {
				$this->setMaxValueAnnotation($data[self::FIELD_MAX_VALUE_ANNOTATION]);
			} else {
				$this->setMaxValueAnnotation(
					new FHIRAnnotation($data[self::FIELD_MAX_VALUE_ANNOTATION]),
				);
			}
		}
		if (isset($data[self::FIELD_MAX_VALUE_ATTACHMENT])) {
			if ($data[self::FIELD_MAX_VALUE_ATTACHMENT] instanceof FHIRAttachment) {
				$this->setMaxValueAttachment($data[self::FIELD_MAX_VALUE_ATTACHMENT]);
			} else {
				$this->setMaxValueAttachment(
					new FHIRAttachment($data[self::FIELD_MAX_VALUE_ATTACHMENT]),
				);
			}
		}
		if (isset($data[self::FIELD_MAX_VALUE_IDENTIFIER])) {
			if ($data[self::FIELD_MAX_VALUE_IDENTIFIER] instanceof FHIRIdentifier) {
				$this->setMaxValueIdentifier($data[self::FIELD_MAX_VALUE_IDENTIFIER]);
			} else {
				$this->setMaxValueIdentifier(
					new FHIRIdentifier($data[self::FIELD_MAX_VALUE_IDENTIFIER]),
				);
			}
		}
		if (isset($data[self::FIELD_MAX_VALUE_CODEABLE_CONCEPT])) {
			if ($data[self::FIELD_MAX_VALUE_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
				$this->setMaxValueCodeableConcept($data[self::FIELD_MAX_VALUE_CODEABLE_CONCEPT]);
			} else {
				$this->setMaxValueCodeableConcept(
					new FHIRCodeableConcept($data[self::FIELD_MAX_VALUE_CODEABLE_CONCEPT]),
				);
			}
		}
		if (isset($data[self::FIELD_MAX_VALUE_CODING])) {
			if ($data[self::FIELD_MAX_VALUE_CODING] instanceof FHIRCoding) {
				$this->setMaxValueCoding($data[self::FIELD_MAX_VALUE_CODING]);
			} else {
				$this->setMaxValueCoding(new FHIRCoding($data[self::FIELD_MAX_VALUE_CODING]));
			}
		}
		if (isset($data[self::FIELD_MAX_VALUE_QUANTITY])) {
			if ($data[self::FIELD_MAX_VALUE_QUANTITY] instanceof FHIRQuantity) {
				$this->setMaxValueQuantity($data[self::FIELD_MAX_VALUE_QUANTITY]);
			} else {
				$this->setMaxValueQuantity(new FHIRQuantity($data[self::FIELD_MAX_VALUE_QUANTITY]));
			}
		}
		if (isset($data[self::FIELD_MAX_VALUE_RANGE])) {
			if ($data[self::FIELD_MAX_VALUE_RANGE] instanceof FHIRRange) {
				$this->setMaxValueRange($data[self::FIELD_MAX_VALUE_RANGE]);
			} else {
				$this->setMaxValueRange(new FHIRRange($data[self::FIELD_MAX_VALUE_RANGE]));
			}
		}
		if (isset($data[self::FIELD_MAX_VALUE_PERIOD])) {
			if ($data[self::FIELD_MAX_VALUE_PERIOD] instanceof FHIRPeriod) {
				$this->setMaxValuePeriod($data[self::FIELD_MAX_VALUE_PERIOD]);
			} else {
				$this->setMaxValuePeriod(new FHIRPeriod($data[self::FIELD_MAX_VALUE_PERIOD]));
			}
		}
		if (isset($data[self::FIELD_MAX_VALUE_RATIO])) {
			if ($data[self::FIELD_MAX_VALUE_RATIO] instanceof FHIRRatio) {
				$this->setMaxValueRatio($data[self::FIELD_MAX_VALUE_RATIO]);
			} else {
				$this->setMaxValueRatio(new FHIRRatio($data[self::FIELD_MAX_VALUE_RATIO]));
			}
		}
		if (isset($data[self::FIELD_MAX_VALUE_REFERENCE])) {
			if ($data[self::FIELD_MAX_VALUE_REFERENCE] instanceof FHIRReference) {
				$this->setMaxValueReference($data[self::FIELD_MAX_VALUE_REFERENCE]);
			} else {
				$this->setMaxValueReference(
					new FHIRReference($data[self::FIELD_MAX_VALUE_REFERENCE]),
				);
			}
		}
		if (isset($data[self::FIELD_MAX_VALUE_SAMPLED_DATA])) {
			if ($data[self::FIELD_MAX_VALUE_SAMPLED_DATA] instanceof FHIRSampledData) {
				$this->setMaxValueSampledData($data[self::FIELD_MAX_VALUE_SAMPLED_DATA]);
			} else {
				$this->setMaxValueSampledData(
					new FHIRSampledData($data[self::FIELD_MAX_VALUE_SAMPLED_DATA]),
				);
			}
		}
		if (isset($data[self::FIELD_MAX_VALUE_SIGNATURE])) {
			if ($data[self::FIELD_MAX_VALUE_SIGNATURE] instanceof FHIRSignature) {
				$this->setMaxValueSignature($data[self::FIELD_MAX_VALUE_SIGNATURE]);
			} else {
				$this->setMaxValueSignature(
					new FHIRSignature($data[self::FIELD_MAX_VALUE_SIGNATURE]),
				);
			}
		}
		if (isset($data[self::FIELD_MAX_VALUE_HUMAN_NAME])) {
			if ($data[self::FIELD_MAX_VALUE_HUMAN_NAME] instanceof FHIRHumanName) {
				$this->setMaxValueHumanName($data[self::FIELD_MAX_VALUE_HUMAN_NAME]);
			} else {
				$this->setMaxValueHumanName(
					new FHIRHumanName($data[self::FIELD_MAX_VALUE_HUMAN_NAME]),
				);
			}
		}
		if (isset($data[self::FIELD_MAX_VALUE_ADDRESS])) {
			if ($data[self::FIELD_MAX_VALUE_ADDRESS] instanceof FHIRAddress) {
				$this->setMaxValueAddress($data[self::FIELD_MAX_VALUE_ADDRESS]);
			} else {
				$this->setMaxValueAddress(new FHIRAddress($data[self::FIELD_MAX_VALUE_ADDRESS]));
			}
		}
		if (isset($data[self::FIELD_MAX_VALUE_CONTACT_POINT])) {
			if ($data[self::FIELD_MAX_VALUE_CONTACT_POINT] instanceof FHIRContactPoint) {
				$this->setMaxValueContactPoint($data[self::FIELD_MAX_VALUE_CONTACT_POINT]);
			} else {
				$this->setMaxValueContactPoint(
					new FHIRContactPoint($data[self::FIELD_MAX_VALUE_CONTACT_POINT]),
				);
			}
		}
		if (isset($data[self::FIELD_MAX_VALUE_TIMING])) {
			if ($data[self::FIELD_MAX_VALUE_TIMING] instanceof FHIRTiming) {
				$this->setMaxValueTiming($data[self::FIELD_MAX_VALUE_TIMING]);
			} else {
				$this->setMaxValueTiming(new FHIRTiming($data[self::FIELD_MAX_VALUE_TIMING]));
			}
		}
		if (isset($data[self::FIELD_MAX_VALUE_META])) {
			if ($data[self::FIELD_MAX_VALUE_META] instanceof FHIRMeta) {
				$this->setMaxValueMeta($data[self::FIELD_MAX_VALUE_META]);
			} else {
				$this->setMaxValueMeta(new FHIRMeta($data[self::FIELD_MAX_VALUE_META]));
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
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The path identifies the element and is expressed as a "."-separated list of
	 * ancestor elements, beginning with the name of the resource or extension.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	public function getPath(): ?FHIRString
	{
		return $this->path;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The path identifies the element and is expressed as a "."-separated list of
	 * ancestor elements, beginning with the name of the resource or extension.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString $path
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
	 * How a property is represented on the wire.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Codes that define how this element is represented in instances, when the
	 * deviation varies from the normal case.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPropertyRepresentation[]
	 */
	public function getRepresentation(): ?array
	{
		return $this->representation;
	}

	/**
	 * How a property is represented on the wire.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Codes that define how this element is represented in instances, when the
	 * deviation varies from the normal case.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPropertyRepresentation $representation
	 * @return static
	 */
	public function addRepresentation(?FHIRPropertyRepresentation $representation = null): object
	{
		$this->_trackValueAdded();
		$this->representation[] = $representation;
		return $this;
	}

	/**
	 * How a property is represented on the wire.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Codes that define how this element is represented in instances, when the
	 * deviation varies from the normal case.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPropertyRepresentation[] $representation
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
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The name of this element definition (to refer to it from other element
	 * definitions using ElementDefinition.nameReference). This is a unique name
	 * referring to a specific set of constraints applied to this element. One use of
	 * this is to provide a name to different slices of the same element.
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
	 * The name of this element definition (to refer to it from other element
	 * definitions using ElementDefinition.nameReference). This is a unique name
	 * referring to a specific set of constraints applied to this element. One use of
	 * this is to provide a name to different slices of the same element.
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
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The text to display beside the element indicating its meaning or to use to
	 * prompt for the element in a user display or form.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	public function getLabel(): ?FHIRString
	{
		return $this->label;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The text to display beside the element indicating its meaning or to use to
	 * prompt for the element in a user display or form.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString $label
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
	 * A code that provides the meaning for the element according to a particular
	 * terminology.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding[]
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
	 * A code that provides the meaning for the element according to a particular
	 * terminology.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding $code
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
	 * A code that provides the meaning for the element according to a particular
	 * terminology.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding[] $code
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
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionSlicing
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionSlicing $slicing
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
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A concise description of what this element means (e.g. for use in autogenerated
	 * summaries).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	public function getShort(): ?FHIRString
	{
		return $this->short;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A concise description of what this element means (e.g. for use in autogenerated
	 * summaries).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString $short
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
	 * Provides a complete explanation of the meaning of the data element for human
	 * readability. For the case of elements derived from existing elements (e.g.
	 * constraints), the definition SHALL be consistent with the base definition, but
	 * convey the meaning of the element in the particular context of use of the
	 * resource.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRMarkdownPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMarkdown
	 */
	public function getDefinition(): ?FHIRMarkdown
	{
		return $this->definition;
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
	 * Provides a complete explanation of the meaning of the data element for human
	 * readability. For the case of elements derived from existing elements (e.g.
	 * constraints), the definition SHALL be consistent with the base definition, but
	 * convey the meaning of the element in the particular context of use of the
	 * resource.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRMarkdownPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMarkdown $definition
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
	 * Explanatory notes and implementation guidance about the data element, including
	 * notes about how to use the data properly, exceptions to proper use, etc.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRMarkdownPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMarkdown
	 */
	public function getComments(): ?FHIRMarkdown
	{
		return $this->comments;
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
	 * Explanatory notes and implementation guidance about the data element, including
	 * notes about how to use the data properly, exceptions to proper use, etc.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRMarkdownPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMarkdown $comments
	 * @return static
	 */
	public function setComments($comments = null): object
	{
		if (null !== $comments && !($comments instanceof FHIRMarkdown)) {
			$comments = new FHIRMarkdown($comments);
		}
		$this->_trackValueSet($this->comments, $comments);
		$this->comments = $comments;
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
	 * This element is for traceability of why the element was created and why the
	 * constraints exist as they do. This may be used to point to source materials or
	 * specifications that drove the structure of this element.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRMarkdownPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMarkdown
	 */
	public function getRequirements(): ?FHIRMarkdown
	{
		return $this->requirements;
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
	 * This element is for traceability of why the element was created and why the
	 * constraints exist as they do. This may be used to point to source materials or
	 * specifications that drove the structure of this element.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRMarkdownPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMarkdown $requirements
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
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Identifies additional names by which this element might also be known.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive[]|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString[]
	 */
	public function getAlias(): ?array
	{
		return $this->alias;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Identifies additional names by which this element might also be known.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive[]|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString[] $alias
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
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Identifies additional names by which this element might also be known.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString[] $alias
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
	 * A whole number
	 * 32 bit number; for values larger than this, use decimal
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The minimum number of times this element SHALL appear in the instance.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRIntegerPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInteger
	 */
	public function getMin(): ?FHIRInteger
	{
		return $this->min;
	}

	/**
	 * A whole number
	 * 32 bit number; for values larger than this, use decimal
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The minimum number of times this element SHALL appear in the instance.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRIntegerPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInteger $min
	 * @return static
	 */
	public function setMin($min = null): object
	{
		if (null !== $min && !($min instanceof FHIRInteger)) {
			$min = new FHIRInteger($min);
		}
		$this->_trackValueSet($this->min, $min);
		$this->min = $min;
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The maximum number of times this element is permitted to appear in the instance.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	public function getMax(): ?FHIRString
	{
		return $this->max;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The maximum number of times this element is permitted to appear in the instance.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString $max
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
	 * unncessary for tools to trace the deviation of the element through the derived
	 * and related profiles. This information is only provided where the element
	 * definition represents a constraint on another element definition, and must be
	 * present if there is a base element definition.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBase
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
	 * unncessary for tools to trace the deviation of the element through the derived
	 * and related profiles. This information is only provided where the element
	 * definition represents a constraint on another element definition, and must be
	 * present if there is a base element definition.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBase $base
	 * @return static
	 */
	public function setBase(?FHIRElementDefinitionBase $base = null): object
	{
		$this->_trackValueSet($this->base, $base);
		$this->base = $base;
		return $this;
	}

	/**
	 * Captures constraints on each element within the resource, profile, or extension.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The data type or resource that the value of this element is permitted to be.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType[]
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType $type
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
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType[] $type
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
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Identifies the name of a slice defined elsewhere in the profile whose
	 * constraints should be applied to the current element.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	public function getNameReference(): ?FHIRString
	{
		return $this->nameReference;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Identifies the name of a slice defined elsewhere in the profile whose
	 * constraints should be applied to the current element.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString $nameReference
	 * @return static
	 */
	public function setNameReference($nameReference = null): object
	{
		if (null !== $nameReference && !($nameReference instanceof FHIRString)) {
			$nameReference = new FHIRString($nameReference);
		}
		$this->_trackValueSet($this->nameReference, $nameReference);
		$this->nameReference = $nameReference;
		return $this;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean $defaultValueBoolean
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
	 * A whole number
	 * 32 bit number; for values larger than this, use decimal
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRIntegerPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInteger
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRIntegerPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInteger $defaultValueInteger
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
	 * A rational number with implicit precision
	 * Do not use a IEEE type floating point type, instead use something that works
	 * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRDecimalPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDecimal
	 */
	public function getDefaultValueDecimal(): ?FHIRDecimal
	{
		return $this->defaultValueDecimal;
	}

	/**
	 * A rational number with implicit precision
	 * Do not use a IEEE type floating point type, instead use something that works
	 * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRDecimalPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDecimal $defaultValueDecimal
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
	 * A stream of bytes
	 * A stream of bytes, base64 encoded
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRBase64BinaryPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBase64Binary
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRBase64BinaryPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBase64Binary $defaultValueBase64Binary
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
	 * An instant in time - known at least to the second
	 * Note: This is intended for precisely observed times, typically system logs etc.,
	 * and not human-reported times - for them, see date and dateTime below. Time zone
	 * is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRInstantPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstant
	 */
	public function getDefaultValueInstant(): ?FHIRInstant
	{
		return $this->defaultValueInstant;
	}

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for precisely observed times, typically system logs etc.,
	 * and not human-reported times - for them, see date and dateTime below. Time zone
	 * is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRInstantPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstant $defaultValueInstant
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
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	public function getDefaultValueString(): ?FHIRString
	{
		return $this->defaultValueString;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString $defaultValueString
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
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri $defaultValueUri
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
	 * A date or partial date (e.g. just year or year + month). There is no time zone.
	 * The format is a union of the schema types gYear, gYearMonth and date. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRDatePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDate
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRDatePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDate $defaultValueDate
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
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime $defaultValueDateTime
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
	 * A time during the day, with no date specified
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTime
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTime $defaultValueTime
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
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode $defaultValueCode
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
	 * An oid represented as a URI
	 * RFC 3001. See also ISO/IEC 8824:1990 €
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIROidPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIROid
	 */
	public function getDefaultValueOid(): ?FHIROid
	{
		return $this->defaultValueOid;
	}

	/**
	 * An oid represented as a URI
	 * RFC 3001. See also ISO/IEC 8824:1990 €
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIROidPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIROid $defaultValueOid
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
	 * A UUID, represented as a URI
	 * See The Open Group, CDE 1.1 Remote Procedure Call specification, Appendix A.
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRUuidPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUuid
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRUuidPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUuid $defaultValueUuid
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
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRIdPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRId
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRIdPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRId $defaultValueId
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
	 * An integer with a value that is not negative (e.g. >= 0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUnsignedInt
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUnsignedInt $defaultValueUnsignedInt
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
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPositiveInt
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPositiveInt $defaultValuePositiveInt
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
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRMarkdownPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMarkdown
	 */
	public function getDefaultValueMarkdown(): ?FHIRMarkdown
	{
		return $this->defaultValueMarkdown;
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
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRMarkdownPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMarkdown $defaultValueMarkdown
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
	 * A text note which also contains information about who made the statement and
	 * when.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAnnotation
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAnnotation $defaultValueAnnotation
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
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAttachment
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAttachment $defaultValueAttachment
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
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier
	 */
	public function getDefaultValueIdentifier(): ?FHIRIdentifier
	{
		return $this->defaultValueIdentifier;
	}

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier $defaultValueIdentifier
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
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $defaultValueCodeableConcept
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
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding $defaultValueCoding
	 * @return static
	 */
	public function setDefaultValueCoding(?FHIRCoding $defaultValueCoding = null): object
	{
		$this->_trackValueSet($this->defaultValueCoding, $defaultValueCoding);
		$this->defaultValueCoding = $defaultValueCoding;
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
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity $defaultValueQuantity
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
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRange
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRange $defaultValueRange
	 * @return static
	 */
	public function setDefaultValueRange(?FHIRRange $defaultValueRange = null): object
	{
		$this->_trackValueSet($this->defaultValueRange, $defaultValueRange);
		$this->defaultValueRange = $defaultValueRange;
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
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod $defaultValuePeriod
	 * @return static
	 */
	public function setDefaultValuePeriod(?FHIRPeriod $defaultValuePeriod = null): object
	{
		$this->_trackValueSet($this->defaultValuePeriod, $defaultValuePeriod);
		$this->defaultValuePeriod = $defaultValuePeriod;
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
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRatio
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRatio $defaultValueRatio
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
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $defaultValueReference
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
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSampledData
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSampledData $defaultValueSampledData
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
	 * A digital signature along with supporting context. The signature may be
	 * electronic/cryptographic in nature, or a graphical image representing a
	 * hand-written signature, or a signature process. Different Signature approaches
	 * have different utilities.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSignature
	 */
	public function getDefaultValueSignature(): ?FHIRSignature
	{
		return $this->defaultValueSignature;
	}

	/**
	 * A digital signature along with supporting context. The signature may be
	 * electronic/cryptographic in nature, or a graphical image representing a
	 * hand-written signature, or a signature process. Different Signature approaches
	 * have different utilities.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSignature $defaultValueSignature
	 * @return static
	 */
	public function setDefaultValueSignature(?FHIRSignature $defaultValueSignature = null): object
	{
		$this->_trackValueSet($this->defaultValueSignature, $defaultValueSignature);
		$this->defaultValueSignature = $defaultValueSignature;
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
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRHumanName
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRHumanName $defaultValueHumanName
	 * @return static
	 */
	public function setDefaultValueHumanName(?FHIRHumanName $defaultValueHumanName = null): object
	{
		$this->_trackValueSet($this->defaultValueHumanName, $defaultValueHumanName);
		$this->defaultValueHumanName = $defaultValueHumanName;
		return $this;
	}

	/**
	 * There is a variety of postal address formats defined around the world. This
	 * format defines a superset that is the basis for all addresses around the world.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAddress
	 */
	public function getDefaultValueAddress(): ?FHIRAddress
	{
		return $this->defaultValueAddress;
	}

	/**
	 * There is a variety of postal address formats defined around the world. This
	 * format defines a superset that is the basis for all addresses around the world.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAddress $defaultValueAddress
	 * @return static
	 */
	public function setDefaultValueAddress(?FHIRAddress $defaultValueAddress = null): object
	{
		$this->_trackValueSet($this->defaultValueAddress, $defaultValueAddress);
		$this->defaultValueAddress = $defaultValueAddress;
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
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRContactPoint
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRContactPoint $defaultValueContactPoint
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
	 * Specifies an event that may occur multiple times. Timing schedules are used to
	 * record when things are expected or requested to occur. The most common usage is
	 * in dosage instructions for medications. They are also used when planning care of
	 * various kinds.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTiming
	 */
	public function getDefaultValueTiming(): ?FHIRTiming
	{
		return $this->defaultValueTiming;
	}

	/**
	 * Specifies an event that may occur multiple times. Timing schedules are used to
	 * record when things are expected or requested to occur. The most common usage is
	 * in dosage instructions for medications. They are also used when planning care of
	 * various kinds.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTiming $defaultValueTiming
	 * @return static
	 */
	public function setDefaultValueTiming(?FHIRTiming $defaultValueTiming = null): object
	{
		$this->_trackValueSet($this->defaultValueTiming, $defaultValueTiming);
		$this->defaultValueTiming = $defaultValueTiming;
		return $this;
	}

	/**
	 * The metadata about a resource. This is content in the resource that is
	 * maintained by the infrastructure. Changes to the content may not always be
	 * associated with version changes to the resource.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMeta
	 */
	public function getDefaultValueMeta(): ?FHIRMeta
	{
		return $this->defaultValueMeta;
	}

	/**
	 * The metadata about a resource. This is content in the resource that is
	 * maintained by the infrastructure. Changes to the content may not always be
	 * associated with version changes to the resource.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The value that should be used if there is no value stated in the instance (e.g.
	 * 'if not otherwise specified, the abstract is false').
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMeta $defaultValueMeta
	 * @return static
	 */
	public function setDefaultValueMeta(?FHIRMeta $defaultValueMeta = null): object
	{
		$this->_trackValueSet($this->defaultValueMeta, $defaultValueMeta);
		$this->defaultValueMeta = $defaultValueMeta;
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
	 * The Implicit meaning that is to be understood when this element is missing (e.g.
	 * 'when this element is missing, the period is ongoing'.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRMarkdownPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMarkdown
	 */
	public function getMeaningWhenMissing(): ?FHIRMarkdown
	{
		return $this->meaningWhenMissing;
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
	 * The Implicit meaning that is to be understood when this element is missing (e.g.
	 * 'when this element is missing, the period is ongoing'.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRMarkdownPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMarkdown $meaningWhenMissing
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
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean $fixedBoolean
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
	 * A whole number
	 * 32 bit number; for values larger than this, use decimal
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRIntegerPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInteger
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRIntegerPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInteger $fixedInteger
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
	 * A rational number with implicit precision
	 * Do not use a IEEE type floating point type, instead use something that works
	 * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRDecimalPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDecimal
	 */
	public function getFixedDecimal(): ?FHIRDecimal
	{
		return $this->fixedDecimal;
	}

	/**
	 * A rational number with implicit precision
	 * Do not use a IEEE type floating point type, instead use something that works
	 * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRDecimalPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDecimal $fixedDecimal
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
	 * A stream of bytes
	 * A stream of bytes, base64 encoded
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRBase64BinaryPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBase64Binary
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRBase64BinaryPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBase64Binary $fixedBase64Binary
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
	 * An instant in time - known at least to the second
	 * Note: This is intended for precisely observed times, typically system logs etc.,
	 * and not human-reported times - for them, see date and dateTime below. Time zone
	 * is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRInstantPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstant
	 */
	public function getFixedInstant(): ?FHIRInstant
	{
		return $this->fixedInstant;
	}

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for precisely observed times, typically system logs etc.,
	 * and not human-reported times - for them, see date and dateTime below. Time zone
	 * is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRInstantPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstant $fixedInstant
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
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	public function getFixedString(): ?FHIRString
	{
		return $this->fixedString;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString $fixedString
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
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri $fixedUri
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
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRDatePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDate
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRDatePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDate $fixedDate
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
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime $fixedDateTime
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
	 * A time during the day, with no date specified
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTime
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTime $fixedTime
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
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode $fixedCode
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
	 * An oid represented as a URI
	 * RFC 3001. See also ISO/IEC 8824:1990 €
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIROidPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIROid
	 */
	public function getFixedOid(): ?FHIROid
	{
		return $this->fixedOid;
	}

	/**
	 * An oid represented as a URI
	 * RFC 3001. See also ISO/IEC 8824:1990 €
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIROidPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIROid $fixedOid
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
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRUuidPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUuid
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRUuidPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUuid $fixedUuid
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
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRIdPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRId
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRIdPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRId $fixedId
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
	 * An integer with a value that is not negative (e.g. >= 0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUnsignedInt
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUnsignedInt $fixedUnsignedInt
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
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPositiveInt
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPositiveInt $fixedPositiveInt
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
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRMarkdownPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMarkdown
	 */
	public function getFixedMarkdown(): ?FHIRMarkdown
	{
		return $this->fixedMarkdown;
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
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRMarkdownPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMarkdown $fixedMarkdown
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
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAnnotation
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAnnotation $fixedAnnotation
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
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAttachment
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAttachment $fixedAttachment
	 * @return static
	 */
	public function setFixedAttachment(?FHIRAttachment $fixedAttachment = null): object
	{
		$this->_trackValueSet($this->fixedAttachment, $fixedAttachment);
		$this->fixedAttachment = $fixedAttachment;
		return $this;
	}

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier
	 */
	public function getFixedIdentifier(): ?FHIRIdentifier
	{
		return $this->fixedIdentifier;
	}

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier $fixedIdentifier
	 * @return static
	 */
	public function setFixedIdentifier(?FHIRIdentifier $fixedIdentifier = null): object
	{
		$this->_trackValueSet($this->fixedIdentifier, $fixedIdentifier);
		$this->fixedIdentifier = $fixedIdentifier;
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
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $fixedCodeableConcept
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
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding $fixedCoding
	 * @return static
	 */
	public function setFixedCoding(?FHIRCoding $fixedCoding = null): object
	{
		$this->_trackValueSet($this->fixedCoding, $fixedCoding);
		$this->fixedCoding = $fixedCoding;
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
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity $fixedQuantity
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
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRange
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRange $fixedRange
	 * @return static
	 */
	public function setFixedRange(?FHIRRange $fixedRange = null): object
	{
		$this->_trackValueSet($this->fixedRange, $fixedRange);
		$this->fixedRange = $fixedRange;
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
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod $fixedPeriod
	 * @return static
	 */
	public function setFixedPeriod(?FHIRPeriod $fixedPeriod = null): object
	{
		$this->_trackValueSet($this->fixedPeriod, $fixedPeriod);
		$this->fixedPeriod = $fixedPeriod;
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
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRatio
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRatio $fixedRatio
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
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $fixedReference
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
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSampledData
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSampledData $fixedSampledData
	 * @return static
	 */
	public function setFixedSampledData(?FHIRSampledData $fixedSampledData = null): object
	{
		$this->_trackValueSet($this->fixedSampledData, $fixedSampledData);
		$this->fixedSampledData = $fixedSampledData;
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
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSignature
	 */
	public function getFixedSignature(): ?FHIRSignature
	{
		return $this->fixedSignature;
	}

	/**
	 * A digital signature along with supporting context. The signature may be
	 * electronic/cryptographic in nature, or a graphical image representing a
	 * hand-written signature, or a signature process. Different Signature approaches
	 * have different utilities.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSignature $fixedSignature
	 * @return static
	 */
	public function setFixedSignature(?FHIRSignature $fixedSignature = null): object
	{
		$this->_trackValueSet($this->fixedSignature, $fixedSignature);
		$this->fixedSignature = $fixedSignature;
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
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRHumanName
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRHumanName $fixedHumanName
	 * @return static
	 */
	public function setFixedHumanName(?FHIRHumanName $fixedHumanName = null): object
	{
		$this->_trackValueSet($this->fixedHumanName, $fixedHumanName);
		$this->fixedHumanName = $fixedHumanName;
		return $this;
	}

	/**
	 * There is a variety of postal address formats defined around the world. This
	 * format defines a superset that is the basis for all addresses around the world.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAddress
	 */
	public function getFixedAddress(): ?FHIRAddress
	{
		return $this->fixedAddress;
	}

	/**
	 * There is a variety of postal address formats defined around the world. This
	 * format defines a superset that is the basis for all addresses around the world.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAddress $fixedAddress
	 * @return static
	 */
	public function setFixedAddress(?FHIRAddress $fixedAddress = null): object
	{
		$this->_trackValueSet($this->fixedAddress, $fixedAddress);
		$this->fixedAddress = $fixedAddress;
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
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRContactPoint
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRContactPoint $fixedContactPoint
	 * @return static
	 */
	public function setFixedContactPoint(?FHIRContactPoint $fixedContactPoint = null): object
	{
		$this->_trackValueSet($this->fixedContactPoint, $fixedContactPoint);
		$this->fixedContactPoint = $fixedContactPoint;
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
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTiming
	 */
	public function getFixedTiming(): ?FHIRTiming
	{
		return $this->fixedTiming;
	}

	/**
	 * Specifies an event that may occur multiple times. Timing schedules are used to
	 * record when things are expected or requested to occur. The most common usage is
	 * in dosage instructions for medications. They are also used when planning care of
	 * various kinds.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTiming $fixedTiming
	 * @return static
	 */
	public function setFixedTiming(?FHIRTiming $fixedTiming = null): object
	{
		$this->_trackValueSet($this->fixedTiming, $fixedTiming);
		$this->fixedTiming = $fixedTiming;
		return $this;
	}

	/**
	 * The metadata about a resource. This is content in the resource that is
	 * maintained by the infrastructure. Changes to the content may not always be
	 * associated with version changes to the resource.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMeta
	 */
	public function getFixedMeta(): ?FHIRMeta
	{
		return $this->fixedMeta;
	}

	/**
	 * The metadata about a resource. This is content in the resource that is
	 * maintained by the infrastructure. Changes to the content may not always be
	 * associated with version changes to the resource.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that SHALL be exactly the value for this element in the
	 * instance. For purposes of comparison, non-significant whitespace is ignored, and
	 * all values must be an exact match (case and accent sensitive). Missing
	 * elements/attributes must also be missing.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMeta $fixedMeta
	 * @return static
	 */
	public function setFixedMeta(?FHIRMeta $fixedMeta = null): object
	{
		$this->_trackValueSet($this->fixedMeta, $fixedMeta);
		$this->fixedMeta = $fixedMeta;
		return $this;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
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
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean $patternBoolean
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
	 * A whole number
	 * 32 bit number; for values larger than this, use decimal
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRIntegerPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInteger
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
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRIntegerPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInteger $patternInteger
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
	 * A rational number with implicit precision
	 * Do not use a IEEE type floating point type, instead use something that works
	 * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRDecimalPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDecimal
	 */
	public function getPatternDecimal(): ?FHIRDecimal
	{
		return $this->patternDecimal;
	}

	/**
	 * A rational number with implicit precision
	 * Do not use a IEEE type floating point type, instead use something that works
	 * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRDecimalPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDecimal $patternDecimal
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
	 * A stream of bytes
	 * A stream of bytes, base64 encoded
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRBase64BinaryPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBase64Binary
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
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRBase64BinaryPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBase64Binary $patternBase64Binary
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
	 * An instant in time - known at least to the second
	 * Note: This is intended for precisely observed times, typically system logs etc.,
	 * and not human-reported times - for them, see date and dateTime below. Time zone
	 * is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRInstantPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstant
	 */
	public function getPatternInstant(): ?FHIRInstant
	{
		return $this->patternInstant;
	}

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for precisely observed times, typically system logs etc.,
	 * and not human-reported times - for them, see date and dateTime below. Time zone
	 * is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRInstantPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstant $patternInstant
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
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	public function getPatternString(): ?FHIRString
	{
		return $this->patternString;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString $patternString
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
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri
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
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri $patternUri
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
	 * A date or partial date (e.g. just year or year + month). There is no time zone.
	 * The format is a union of the schema types gYear, gYearMonth and date. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRDatePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDate
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
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRDatePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDate $patternDate
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
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime
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
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime $patternDateTime
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
	 * A time during the day, with no date specified
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTime
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
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTime $patternTime
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
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode
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
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode $patternCode
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
	 * An oid represented as a URI
	 * RFC 3001. See also ISO/IEC 8824:1990 €
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIROidPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIROid
	 */
	public function getPatternOid(): ?FHIROid
	{
		return $this->patternOid;
	}

	/**
	 * An oid represented as a URI
	 * RFC 3001. See also ISO/IEC 8824:1990 €
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIROidPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIROid $patternOid
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
	 * A UUID, represented as a URI
	 * See The Open Group, CDE 1.1 Remote Procedure Call specification, Appendix A.
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRUuidPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUuid
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
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRUuidPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUuid $patternUuid
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
	 * Any combination of letters, numerals, "-" and ".", with a length limit of 64
	 * characters. (This might be an integer, an unprefixed OID, UUID or any other
	 * identifier pattern that meets these constraints.) Ids are case-insensitive.
	 * RFC 4122
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRIdPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRId
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
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRIdPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRId $patternId
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
	 * An integer with a value that is not negative (e.g. >= 0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUnsignedInt
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
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUnsignedInt $patternUnsignedInt
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
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPositiveInt
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
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPositiveInt $patternPositiveInt
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
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRMarkdownPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMarkdown
	 */
	public function getPatternMarkdown(): ?FHIRMarkdown
	{
		return $this->patternMarkdown;
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
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRMarkdownPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMarkdown $patternMarkdown
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
	 * A text note which also contains information about who made the statement and
	 * when.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAnnotation
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
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAnnotation $patternAnnotation
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
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAttachment
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
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAttachment $patternAttachment
	 * @return static
	 */
	public function setPatternAttachment(?FHIRAttachment $patternAttachment = null): object
	{
		$this->_trackValueSet($this->patternAttachment, $patternAttachment);
		$this->patternAttachment = $patternAttachment;
		return $this;
	}

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier
	 */
	public function getPatternIdentifier(): ?FHIRIdentifier
	{
		return $this->patternIdentifier;
	}

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier $patternIdentifier
	 * @return static
	 */
	public function setPatternIdentifier(?FHIRIdentifier $patternIdentifier = null): object
	{
		$this->_trackValueSet($this->patternIdentifier, $patternIdentifier);
		$this->patternIdentifier = $patternIdentifier;
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
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
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
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $patternCodeableConcept
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
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding
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
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding $patternCoding
	 * @return static
	 */
	public function setPatternCoding(?FHIRCoding $patternCoding = null): object
	{
		$this->_trackValueSet($this->patternCoding, $patternCoding);
		$this->patternCoding = $patternCoding;
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
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity
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
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity $patternQuantity
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
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRange
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
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRange $patternRange
	 * @return static
	 */
	public function setPatternRange(?FHIRRange $patternRange = null): object
	{
		$this->_trackValueSet($this->patternRange, $patternRange);
		$this->patternRange = $patternRange;
		return $this;
	}

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod
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
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod $patternPeriod
	 * @return static
	 */
	public function setPatternPeriod(?FHIRPeriod $patternPeriod = null): object
	{
		$this->_trackValueSet($this->patternPeriod, $patternPeriod);
		$this->patternPeriod = $patternPeriod;
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
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRatio
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
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRatio $patternRatio
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
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
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
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $patternReference
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
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSampledData
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
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSampledData $patternSampledData
	 * @return static
	 */
	public function setPatternSampledData(?FHIRSampledData $patternSampledData = null): object
	{
		$this->_trackValueSet($this->patternSampledData, $patternSampledData);
		$this->patternSampledData = $patternSampledData;
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
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSignature
	 */
	public function getPatternSignature(): ?FHIRSignature
	{
		return $this->patternSignature;
	}

	/**
	 * A digital signature along with supporting context. The signature may be
	 * electronic/cryptographic in nature, or a graphical image representing a
	 * hand-written signature, or a signature process. Different Signature approaches
	 * have different utilities.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSignature $patternSignature
	 * @return static
	 */
	public function setPatternSignature(?FHIRSignature $patternSignature = null): object
	{
		$this->_trackValueSet($this->patternSignature, $patternSignature);
		$this->patternSignature = $patternSignature;
		return $this;
	}

	/**
	 * A human's name with the ability to identify parts and usage.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRHumanName
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
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRHumanName $patternHumanName
	 * @return static
	 */
	public function setPatternHumanName(?FHIRHumanName $patternHumanName = null): object
	{
		$this->_trackValueSet($this->patternHumanName, $patternHumanName);
		$this->patternHumanName = $patternHumanName;
		return $this;
	}

	/**
	 * There is a variety of postal address formats defined around the world. This
	 * format defines a superset that is the basis for all addresses around the world.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAddress
	 */
	public function getPatternAddress(): ?FHIRAddress
	{
		return $this->patternAddress;
	}

	/**
	 * There is a variety of postal address formats defined around the world. This
	 * format defines a superset that is the basis for all addresses around the world.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAddress $patternAddress
	 * @return static
	 */
	public function setPatternAddress(?FHIRAddress $patternAddress = null): object
	{
		$this->_trackValueSet($this->patternAddress, $patternAddress);
		$this->patternAddress = $patternAddress;
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
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRContactPoint
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
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRContactPoint $patternContactPoint
	 * @return static
	 */
	public function setPatternContactPoint(?FHIRContactPoint $patternContactPoint = null): object
	{
		$this->_trackValueSet($this->patternContactPoint, $patternContactPoint);
		$this->patternContactPoint = $patternContactPoint;
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
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTiming
	 */
	public function getPatternTiming(): ?FHIRTiming
	{
		return $this->patternTiming;
	}

	/**
	 * Specifies an event that may occur multiple times. Timing schedules are used to
	 * record when things are expected or requested to occur. The most common usage is
	 * in dosage instructions for medications. They are also used when planning care of
	 * various kinds.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTiming $patternTiming
	 * @return static
	 */
	public function setPatternTiming(?FHIRTiming $patternTiming = null): object
	{
		$this->_trackValueSet($this->patternTiming, $patternTiming);
		$this->patternTiming = $patternTiming;
		return $this;
	}

	/**
	 * The metadata about a resource. This is content in the resource that is
	 * maintained by the infrastructure. Changes to the content may not always be
	 * associated with version changes to the resource.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMeta
	 */
	public function getPatternMeta(): ?FHIRMeta
	{
		return $this->patternMeta;
	}

	/**
	 * The metadata about a resource. This is content in the resource that is
	 * maintained by the infrastructure. Changes to the content may not always be
	 * associated with version changes to the resource.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Specifies a value that the value in the instance SHALL follow - that is, any
	 * value in the pattern must be found in the instance. Other additional values may
	 * be found too. This is effectively constraint by example. The values of elements
	 * present in the pattern must match exactly (case-sensitive, accent-sensitive,
	 * etc.).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMeta $patternMeta
	 * @return static
	 */
	public function setPatternMeta(?FHIRMeta $patternMeta = null): object
	{
		$this->_trackValueSet($this->patternMeta, $patternMeta);
		$this->patternMeta = $patternMeta;
		return $this;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
	 */
	public function getExampleBoolean(): ?FHIRBoolean
	{
		return $this->exampleBoolean;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean $exampleBoolean
	 * @return static
	 */
	public function setExampleBoolean($exampleBoolean = null): object
	{
		if (null !== $exampleBoolean && !($exampleBoolean instanceof FHIRBoolean)) {
			$exampleBoolean = new FHIRBoolean($exampleBoolean);
		}
		$this->_trackValueSet($this->exampleBoolean, $exampleBoolean);
		$this->exampleBoolean = $exampleBoolean;
		return $this;
	}

	/**
	 * A whole number
	 * 32 bit number; for values larger than this, use decimal
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRIntegerPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInteger
	 */
	public function getExampleInteger(): ?FHIRInteger
	{
		return $this->exampleInteger;
	}

	/**
	 * A whole number
	 * 32 bit number; for values larger than this, use decimal
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRIntegerPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInteger $exampleInteger
	 * @return static
	 */
	public function setExampleInteger($exampleInteger = null): object
	{
		if (null !== $exampleInteger && !($exampleInteger instanceof FHIRInteger)) {
			$exampleInteger = new FHIRInteger($exampleInteger);
		}
		$this->_trackValueSet($this->exampleInteger, $exampleInteger);
		$this->exampleInteger = $exampleInteger;
		return $this;
	}

	/**
	 * A rational number with implicit precision
	 * Do not use a IEEE type floating point type, instead use something that works
	 * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRDecimalPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDecimal
	 */
	public function getExampleDecimal(): ?FHIRDecimal
	{
		return $this->exampleDecimal;
	}

	/**
	 * A rational number with implicit precision
	 * Do not use a IEEE type floating point type, instead use something that works
	 * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRDecimalPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDecimal $exampleDecimal
	 * @return static
	 */
	public function setExampleDecimal($exampleDecimal = null): object
	{
		if (null !== $exampleDecimal && !($exampleDecimal instanceof FHIRDecimal)) {
			$exampleDecimal = new FHIRDecimal($exampleDecimal);
		}
		$this->_trackValueSet($this->exampleDecimal, $exampleDecimal);
		$this->exampleDecimal = $exampleDecimal;
		return $this;
	}

	/**
	 * A stream of bytes
	 * A stream of bytes, base64 encoded
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRBase64BinaryPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBase64Binary
	 */
	public function getExampleBase64Binary(): ?FHIRBase64Binary
	{
		return $this->exampleBase64Binary;
	}

	/**
	 * A stream of bytes
	 * A stream of bytes, base64 encoded
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRBase64BinaryPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBase64Binary $exampleBase64Binary
	 * @return static
	 */
	public function setExampleBase64Binary($exampleBase64Binary = null): object
	{
		if (null !== $exampleBase64Binary && !($exampleBase64Binary instanceof FHIRBase64Binary)) {
			$exampleBase64Binary = new FHIRBase64Binary($exampleBase64Binary);
		}
		$this->_trackValueSet($this->exampleBase64Binary, $exampleBase64Binary);
		$this->exampleBase64Binary = $exampleBase64Binary;
		return $this;
	}

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for precisely observed times, typically system logs etc.,
	 * and not human-reported times - for them, see date and dateTime below. Time zone
	 * is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRInstantPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstant
	 */
	public function getExampleInstant(): ?FHIRInstant
	{
		return $this->exampleInstant;
	}

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for precisely observed times, typically system logs etc.,
	 * and not human-reported times - for them, see date and dateTime below. Time zone
	 * is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRInstantPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstant $exampleInstant
	 * @return static
	 */
	public function setExampleInstant($exampleInstant = null): object
	{
		if (null !== $exampleInstant && !($exampleInstant instanceof FHIRInstant)) {
			$exampleInstant = new FHIRInstant($exampleInstant);
		}
		$this->_trackValueSet($this->exampleInstant, $exampleInstant);
		$this->exampleInstant = $exampleInstant;
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	public function getExampleString(): ?FHIRString
	{
		return $this->exampleString;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString $exampleString
	 * @return static
	 */
	public function setExampleString($exampleString = null): object
	{
		if (null !== $exampleString && !($exampleString instanceof FHIRString)) {
			$exampleString = new FHIRString($exampleString);
		}
		$this->_trackValueSet($this->exampleString, $exampleString);
		$this->exampleString = $exampleString;
		return $this;
	}

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri
	 */
	public function getExampleUri(): ?FHIRUri
	{
		return $this->exampleUri;
	}

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri $exampleUri
	 * @return static
	 */
	public function setExampleUri($exampleUri = null): object
	{
		if (null !== $exampleUri && !($exampleUri instanceof FHIRUri)) {
			$exampleUri = new FHIRUri($exampleUri);
		}
		$this->_trackValueSet($this->exampleUri, $exampleUri);
		$this->exampleUri = $exampleUri;
		return $this;
	}

	/**
	 * A date or partial date (e.g. just year or year + month). There is no time zone.
	 * The format is a union of the schema types gYear, gYearMonth and date. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRDatePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDate
	 */
	public function getExampleDate(): ?FHIRDate
	{
		return $this->exampleDate;
	}

	/**
	 * A date or partial date (e.g. just year or year + month). There is no time zone.
	 * The format is a union of the schema types gYear, gYearMonth and date. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRDatePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDate $exampleDate
	 * @return static
	 */
	public function setExampleDate($exampleDate = null): object
	{
		if (null !== $exampleDate && !($exampleDate instanceof FHIRDate)) {
			$exampleDate = new FHIRDate($exampleDate);
		}
		$this->_trackValueSet($this->exampleDate, $exampleDate);
		$this->exampleDate = $exampleDate;
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
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime
	 */
	public function getExampleDateTime(): ?FHIRDateTime
	{
		return $this->exampleDateTime;
	}

	/**
	 * A date, date-time or partial date (e.g. just year or year + month). If hours and
	 * minutes are specified, a time zone SHALL be populated. The format is a union of
	 * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
	 * due to schema type constraints but may be zero-filled and may be ignored. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime $exampleDateTime
	 * @return static
	 */
	public function setExampleDateTime($exampleDateTime = null): object
	{
		if (null !== $exampleDateTime && !($exampleDateTime instanceof FHIRDateTime)) {
			$exampleDateTime = new FHIRDateTime($exampleDateTime);
		}
		$this->_trackValueSet($this->exampleDateTime, $exampleDateTime);
		$this->exampleDateTime = $exampleDateTime;
		return $this;
	}

	/**
	 * A time during the day, with no date specified
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTime
	 */
	public function getExampleTime(): ?FHIRTime
	{
		return $this->exampleTime;
	}

	/**
	 * A time during the day, with no date specified
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTime $exampleTime
	 * @return static
	 */
	public function setExampleTime($exampleTime = null): object
	{
		if (null !== $exampleTime && !($exampleTime instanceof FHIRTime)) {
			$exampleTime = new FHIRTime($exampleTime);
		}
		$this->_trackValueSet($this->exampleTime, $exampleTime);
		$this->exampleTime = $exampleTime;
		return $this;
	}

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode
	 */
	public function getExampleCode(): ?FHIRCode
	{
		return $this->exampleCode;
	}

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode $exampleCode
	 * @return static
	 */
	public function setExampleCode($exampleCode = null): object
	{
		if (null !== $exampleCode && !($exampleCode instanceof FHIRCode)) {
			$exampleCode = new FHIRCode($exampleCode);
		}
		$this->_trackValueSet($this->exampleCode, $exampleCode);
		$this->exampleCode = $exampleCode;
		return $this;
	}

	/**
	 * An oid represented as a URI
	 * RFC 3001. See also ISO/IEC 8824:1990 €
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIROidPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIROid
	 */
	public function getExampleOid(): ?FHIROid
	{
		return $this->exampleOid;
	}

	/**
	 * An oid represented as a URI
	 * RFC 3001. See also ISO/IEC 8824:1990 €
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIROidPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIROid $exampleOid
	 * @return static
	 */
	public function setExampleOid($exampleOid = null): object
	{
		if (null !== $exampleOid && !($exampleOid instanceof FHIROid)) {
			$exampleOid = new FHIROid($exampleOid);
		}
		$this->_trackValueSet($this->exampleOid, $exampleOid);
		$this->exampleOid = $exampleOid;
		return $this;
	}

	/**
	 * A UUID, represented as a URI
	 * See The Open Group, CDE 1.1 Remote Procedure Call specification, Appendix A.
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRUuidPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUuid
	 */
	public function getExampleUuid(): ?FHIRUuid
	{
		return $this->exampleUuid;
	}

	/**
	 * A UUID, represented as a URI
	 * See The Open Group, CDE 1.1 Remote Procedure Call specification, Appendix A.
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRUuidPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUuid $exampleUuid
	 * @return static
	 */
	public function setExampleUuid($exampleUuid = null): object
	{
		if (null !== $exampleUuid && !($exampleUuid instanceof FHIRUuid)) {
			$exampleUuid = new FHIRUuid($exampleUuid);
		}
		$this->_trackValueSet($this->exampleUuid, $exampleUuid);
		$this->exampleUuid = $exampleUuid;
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
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRIdPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRId
	 */
	public function getExampleId(): ?FHIRId
	{
		return $this->exampleId;
	}

	/**
	 * Any combination of letters, numerals, "-" and ".", with a length limit of 64
	 * characters. (This might be an integer, an unprefixed OID, UUID or any other
	 * identifier pattern that meets these constraints.) Ids are case-insensitive.
	 * RFC 4122
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRIdPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRId $exampleId
	 * @return static
	 */
	public function setExampleId($exampleId = null): object
	{
		if (null !== $exampleId && !($exampleId instanceof FHIRId)) {
			$exampleId = new FHIRId($exampleId);
		}
		$this->_trackValueSet($this->exampleId, $exampleId);
		$this->exampleId = $exampleId;
		return $this;
	}

	/**
	 * An integer with a value that is not negative (e.g. >= 0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUnsignedInt
	 */
	public function getExampleUnsignedInt(): ?FHIRUnsignedInt
	{
		return $this->exampleUnsignedInt;
	}

	/**
	 * An integer with a value that is not negative (e.g. >= 0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUnsignedInt $exampleUnsignedInt
	 * @return static
	 */
	public function setExampleUnsignedInt($exampleUnsignedInt = null): object
	{
		if (null !== $exampleUnsignedInt && !($exampleUnsignedInt instanceof FHIRUnsignedInt)) {
			$exampleUnsignedInt = new FHIRUnsignedInt($exampleUnsignedInt);
		}
		$this->_trackValueSet($this->exampleUnsignedInt, $exampleUnsignedInt);
		$this->exampleUnsignedInt = $exampleUnsignedInt;
		return $this;
	}

	/**
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPositiveInt
	 */
	public function getExamplePositiveInt(): ?FHIRPositiveInt
	{
		return $this->examplePositiveInt;
	}

	/**
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPositiveInt $examplePositiveInt
	 * @return static
	 */
	public function setExamplePositiveInt($examplePositiveInt = null): object
	{
		if (null !== $examplePositiveInt && !($examplePositiveInt instanceof FHIRPositiveInt)) {
			$examplePositiveInt = new FHIRPositiveInt($examplePositiveInt);
		}
		$this->_trackValueSet($this->examplePositiveInt, $examplePositiveInt);
		$this->examplePositiveInt = $examplePositiveInt;
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
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRMarkdownPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMarkdown
	 */
	public function getExampleMarkdown(): ?FHIRMarkdown
	{
		return $this->exampleMarkdown;
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
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRMarkdownPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMarkdown $exampleMarkdown
	 * @return static
	 */
	public function setExampleMarkdown($exampleMarkdown = null): object
	{
		if (null !== $exampleMarkdown && !($exampleMarkdown instanceof FHIRMarkdown)) {
			$exampleMarkdown = new FHIRMarkdown($exampleMarkdown);
		}
		$this->_trackValueSet($this->exampleMarkdown, $exampleMarkdown);
		$this->exampleMarkdown = $exampleMarkdown;
		return $this;
	}

	/**
	 * A text note which also contains information about who made the statement and
	 * when.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAnnotation
	 */
	public function getExampleAnnotation(): ?FHIRAnnotation
	{
		return $this->exampleAnnotation;
	}

	/**
	 * A text note which also contains information about who made the statement and
	 * when.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAnnotation $exampleAnnotation
	 * @return static
	 */
	public function setExampleAnnotation(?FHIRAnnotation $exampleAnnotation = null): object
	{
		$this->_trackValueSet($this->exampleAnnotation, $exampleAnnotation);
		$this->exampleAnnotation = $exampleAnnotation;
		return $this;
	}

	/**
	 * For referring to data content defined in other formats.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAttachment
	 */
	public function getExampleAttachment(): ?FHIRAttachment
	{
		return $this->exampleAttachment;
	}

	/**
	 * For referring to data content defined in other formats.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAttachment $exampleAttachment
	 * @return static
	 */
	public function setExampleAttachment(?FHIRAttachment $exampleAttachment = null): object
	{
		$this->_trackValueSet($this->exampleAttachment, $exampleAttachment);
		$this->exampleAttachment = $exampleAttachment;
		return $this;
	}

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier
	 */
	public function getExampleIdentifier(): ?FHIRIdentifier
	{
		return $this->exampleIdentifier;
	}

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier $exampleIdentifier
	 * @return static
	 */
	public function setExampleIdentifier(?FHIRIdentifier $exampleIdentifier = null): object
	{
		$this->_trackValueSet($this->exampleIdentifier, $exampleIdentifier);
		$this->exampleIdentifier = $exampleIdentifier;
		return $this;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	public function getExampleCodeableConcept(): ?FHIRCodeableConcept
	{
		return $this->exampleCodeableConcept;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $exampleCodeableConcept
	 * @return static
	 */
	public function setExampleCodeableConcept(
		?FHIRCodeableConcept $exampleCodeableConcept = null,
	): object {
		$this->_trackValueSet($this->exampleCodeableConcept, $exampleCodeableConcept);
		$this->exampleCodeableConcept = $exampleCodeableConcept;
		return $this;
	}

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding
	 */
	public function getExampleCoding(): ?FHIRCoding
	{
		return $this->exampleCoding;
	}

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding $exampleCoding
	 * @return static
	 */
	public function setExampleCoding(?FHIRCoding $exampleCoding = null): object
	{
		$this->_trackValueSet($this->exampleCoding, $exampleCoding);
		$this->exampleCoding = $exampleCoding;
		return $this;
	}

	/**
	 * A measured amount (or an amount that can potentially be measured). Note that
	 * measured amounts include amounts that are not precisely quantified, including
	 * amounts involving arbitrary units and floating currencies.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity
	 */
	public function getExampleQuantity(): ?FHIRQuantity
	{
		return $this->exampleQuantity;
	}

	/**
	 * A measured amount (or an amount that can potentially be measured). Note that
	 * measured amounts include amounts that are not precisely quantified, including
	 * amounts involving arbitrary units and floating currencies.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity $exampleQuantity
	 * @return static
	 */
	public function setExampleQuantity(?FHIRQuantity $exampleQuantity = null): object
	{
		$this->_trackValueSet($this->exampleQuantity, $exampleQuantity);
		$this->exampleQuantity = $exampleQuantity;
		return $this;
	}

	/**
	 * A set of ordered Quantities defined by a low and high limit.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRange
	 */
	public function getExampleRange(): ?FHIRRange
	{
		return $this->exampleRange;
	}

	/**
	 * A set of ordered Quantities defined by a low and high limit.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRange $exampleRange
	 * @return static
	 */
	public function setExampleRange(?FHIRRange $exampleRange = null): object
	{
		$this->_trackValueSet($this->exampleRange, $exampleRange);
		$this->exampleRange = $exampleRange;
		return $this;
	}

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod
	 */
	public function getExamplePeriod(): ?FHIRPeriod
	{
		return $this->examplePeriod;
	}

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod $examplePeriod
	 * @return static
	 */
	public function setExamplePeriod(?FHIRPeriod $examplePeriod = null): object
	{
		$this->_trackValueSet($this->examplePeriod, $examplePeriod);
		$this->examplePeriod = $examplePeriod;
		return $this;
	}

	/**
	 * A relationship of two Quantity values - expressed as a numerator and a
	 * denominator.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRatio
	 */
	public function getExampleRatio(): ?FHIRRatio
	{
		return $this->exampleRatio;
	}

	/**
	 * A relationship of two Quantity values - expressed as a numerator and a
	 * denominator.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRatio $exampleRatio
	 * @return static
	 */
	public function setExampleRatio(?FHIRRatio $exampleRatio = null): object
	{
		$this->_trackValueSet($this->exampleRatio, $exampleRatio);
		$this->exampleRatio = $exampleRatio;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getExampleReference(): ?FHIRReference
	{
		return $this->exampleReference;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $exampleReference
	 * @return static
	 */
	public function setExampleReference(?FHIRReference $exampleReference = null): object
	{
		$this->_trackValueSet($this->exampleReference, $exampleReference);
		$this->exampleReference = $exampleReference;
		return $this;
	}

	/**
	 * A series of measurements taken by a device, with upper and lower limits. There
	 * may be more than one dimension in the data.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSampledData
	 */
	public function getExampleSampledData(): ?FHIRSampledData
	{
		return $this->exampleSampledData;
	}

	/**
	 * A series of measurements taken by a device, with upper and lower limits. There
	 * may be more than one dimension in the data.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSampledData $exampleSampledData
	 * @return static
	 */
	public function setExampleSampledData(?FHIRSampledData $exampleSampledData = null): object
	{
		$this->_trackValueSet($this->exampleSampledData, $exampleSampledData);
		$this->exampleSampledData = $exampleSampledData;
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
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSignature
	 */
	public function getExampleSignature(): ?FHIRSignature
	{
		return $this->exampleSignature;
	}

	/**
	 * A digital signature along with supporting context. The signature may be
	 * electronic/cryptographic in nature, or a graphical image representing a
	 * hand-written signature, or a signature process. Different Signature approaches
	 * have different utilities.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSignature $exampleSignature
	 * @return static
	 */
	public function setExampleSignature(?FHIRSignature $exampleSignature = null): object
	{
		$this->_trackValueSet($this->exampleSignature, $exampleSignature);
		$this->exampleSignature = $exampleSignature;
		return $this;
	}

	/**
	 * A human's name with the ability to identify parts and usage.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRHumanName
	 */
	public function getExampleHumanName(): ?FHIRHumanName
	{
		return $this->exampleHumanName;
	}

	/**
	 * A human's name with the ability to identify parts and usage.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRHumanName $exampleHumanName
	 * @return static
	 */
	public function setExampleHumanName(?FHIRHumanName $exampleHumanName = null): object
	{
		$this->_trackValueSet($this->exampleHumanName, $exampleHumanName);
		$this->exampleHumanName = $exampleHumanName;
		return $this;
	}

	/**
	 * There is a variety of postal address formats defined around the world. This
	 * format defines a superset that is the basis for all addresses around the world.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAddress
	 */
	public function getExampleAddress(): ?FHIRAddress
	{
		return $this->exampleAddress;
	}

	/**
	 * There is a variety of postal address formats defined around the world. This
	 * format defines a superset that is the basis for all addresses around the world.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAddress $exampleAddress
	 * @return static
	 */
	public function setExampleAddress(?FHIRAddress $exampleAddress = null): object
	{
		$this->_trackValueSet($this->exampleAddress, $exampleAddress);
		$this->exampleAddress = $exampleAddress;
		return $this;
	}

	/**
	 * Details for all kinds of technology mediated contact points for a person or
	 * organization, including telephone, email, etc.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRContactPoint
	 */
	public function getExampleContactPoint(): ?FHIRContactPoint
	{
		return $this->exampleContactPoint;
	}

	/**
	 * Details for all kinds of technology mediated contact points for a person or
	 * organization, including telephone, email, etc.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRContactPoint $exampleContactPoint
	 * @return static
	 */
	public function setExampleContactPoint(?FHIRContactPoint $exampleContactPoint = null): object
	{
		$this->_trackValueSet($this->exampleContactPoint, $exampleContactPoint);
		$this->exampleContactPoint = $exampleContactPoint;
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
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTiming
	 */
	public function getExampleTiming(): ?FHIRTiming
	{
		return $this->exampleTiming;
	}

	/**
	 * Specifies an event that may occur multiple times. Timing schedules are used to
	 * record when things are expected or requested to occur. The most common usage is
	 * in dosage instructions for medications. They are also used when planning care of
	 * various kinds.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTiming $exampleTiming
	 * @return static
	 */
	public function setExampleTiming(?FHIRTiming $exampleTiming = null): object
	{
		$this->_trackValueSet($this->exampleTiming, $exampleTiming);
		$this->exampleTiming = $exampleTiming;
		return $this;
	}

	/**
	 * The metadata about a resource. This is content in the resource that is
	 * maintained by the infrastructure. Changes to the content may not always be
	 * associated with version changes to the resource.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMeta
	 */
	public function getExampleMeta(): ?FHIRMeta
	{
		return $this->exampleMeta;
	}

	/**
	 * The metadata about a resource. This is content in the resource that is
	 * maintained by the infrastructure. Changes to the content may not always be
	 * associated with version changes to the resource.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A sample value for this element demonstrating the type of information that would
	 * typically be captured.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMeta $exampleMeta
	 * @return static
	 */
	public function setExampleMeta(?FHIRMeta $exampleMeta = null): object
	{
		$this->_trackValueSet($this->exampleMeta, $exampleMeta);
		$this->exampleMeta = $exampleMeta;
		return $this;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
	 */
	public function getMinValueBoolean(): ?FHIRBoolean
	{
		return $this->minValueBoolean;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean $minValueBoolean
	 * @return static
	 */
	public function setMinValueBoolean($minValueBoolean = null): object
	{
		if (null !== $minValueBoolean && !($minValueBoolean instanceof FHIRBoolean)) {
			$minValueBoolean = new FHIRBoolean($minValueBoolean);
		}
		$this->_trackValueSet($this->minValueBoolean, $minValueBoolean);
		$this->minValueBoolean = $minValueBoolean;
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
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRIntegerPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInteger
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRIntegerPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInteger $minValueInteger
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
	 * A rational number with implicit precision
	 * Do not use a IEEE type floating point type, instead use something that works
	 * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRDecimalPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDecimal
	 */
	public function getMinValueDecimal(): ?FHIRDecimal
	{
		return $this->minValueDecimal;
	}

	/**
	 * A rational number with implicit precision
	 * Do not use a IEEE type floating point type, instead use something that works
	 * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRDecimalPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDecimal $minValueDecimal
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
	 * A stream of bytes
	 * A stream of bytes, base64 encoded
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRBase64BinaryPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBase64Binary
	 */
	public function getMinValueBase64Binary(): ?FHIRBase64Binary
	{
		return $this->minValueBase64Binary;
	}

	/**
	 * A stream of bytes
	 * A stream of bytes, base64 encoded
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRBase64BinaryPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBase64Binary $minValueBase64Binary
	 * @return static
	 */
	public function setMinValueBase64Binary($minValueBase64Binary = null): object
	{
		if (
			null !== $minValueBase64Binary &&
			!($minValueBase64Binary instanceof FHIRBase64Binary)
		) {
			$minValueBase64Binary = new FHIRBase64Binary($minValueBase64Binary);
		}
		$this->_trackValueSet($this->minValueBase64Binary, $minValueBase64Binary);
		$this->minValueBase64Binary = $minValueBase64Binary;
		return $this;
	}

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for precisely observed times, typically system logs etc.,
	 * and not human-reported times - for them, see date and dateTime below. Time zone
	 * is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRInstantPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstant
	 */
	public function getMinValueInstant(): ?FHIRInstant
	{
		return $this->minValueInstant;
	}

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for precisely observed times, typically system logs etc.,
	 * and not human-reported times - for them, see date and dateTime below. Time zone
	 * is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRInstantPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstant $minValueInstant
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
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	public function getMinValueString(): ?FHIRString
	{
		return $this->minValueString;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString $minValueString
	 * @return static
	 */
	public function setMinValueString($minValueString = null): object
	{
		if (null !== $minValueString && !($minValueString instanceof FHIRString)) {
			$minValueString = new FHIRString($minValueString);
		}
		$this->_trackValueSet($this->minValueString, $minValueString);
		$this->minValueString = $minValueString;
		return $this;
	}

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri
	 */
	public function getMinValueUri(): ?FHIRUri
	{
		return $this->minValueUri;
	}

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri $minValueUri
	 * @return static
	 */
	public function setMinValueUri($minValueUri = null): object
	{
		if (null !== $minValueUri && !($minValueUri instanceof FHIRUri)) {
			$minValueUri = new FHIRUri($minValueUri);
		}
		$this->_trackValueSet($this->minValueUri, $minValueUri);
		$this->minValueUri = $minValueUri;
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
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRDatePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDate
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRDatePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDate $minValueDate
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
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime $minValueDateTime
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
	 * A time during the day, with no date specified
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTime
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTime $minValueTime
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
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode
	 */
	public function getMinValueCode(): ?FHIRCode
	{
		return $this->minValueCode;
	}

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode $minValueCode
	 * @return static
	 */
	public function setMinValueCode($minValueCode = null): object
	{
		if (null !== $minValueCode && !($minValueCode instanceof FHIRCode)) {
			$minValueCode = new FHIRCode($minValueCode);
		}
		$this->_trackValueSet($this->minValueCode, $minValueCode);
		$this->minValueCode = $minValueCode;
		return $this;
	}

	/**
	 * An oid represented as a URI
	 * RFC 3001. See also ISO/IEC 8824:1990 €
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIROidPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIROid
	 */
	public function getMinValueOid(): ?FHIROid
	{
		return $this->minValueOid;
	}

	/**
	 * An oid represented as a URI
	 * RFC 3001. See also ISO/IEC 8824:1990 €
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIROidPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIROid $minValueOid
	 * @return static
	 */
	public function setMinValueOid($minValueOid = null): object
	{
		if (null !== $minValueOid && !($minValueOid instanceof FHIROid)) {
			$minValueOid = new FHIROid($minValueOid);
		}
		$this->_trackValueSet($this->minValueOid, $minValueOid);
		$this->minValueOid = $minValueOid;
		return $this;
	}

	/**
	 * A UUID, represented as a URI
	 * See The Open Group, CDE 1.1 Remote Procedure Call specification, Appendix A.
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRUuidPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUuid
	 */
	public function getMinValueUuid(): ?FHIRUuid
	{
		return $this->minValueUuid;
	}

	/**
	 * A UUID, represented as a URI
	 * See The Open Group, CDE 1.1 Remote Procedure Call specification, Appendix A.
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRUuidPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUuid $minValueUuid
	 * @return static
	 */
	public function setMinValueUuid($minValueUuid = null): object
	{
		if (null !== $minValueUuid && !($minValueUuid instanceof FHIRUuid)) {
			$minValueUuid = new FHIRUuid($minValueUuid);
		}
		$this->_trackValueSet($this->minValueUuid, $minValueUuid);
		$this->minValueUuid = $minValueUuid;
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
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRIdPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRId
	 */
	public function getMinValueId(): ?FHIRId
	{
		return $this->minValueId;
	}

	/**
	 * Any combination of letters, numerals, "-" and ".", with a length limit of 64
	 * characters. (This might be an integer, an unprefixed OID, UUID or any other
	 * identifier pattern that meets these constraints.) Ids are case-insensitive.
	 * RFC 4122
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRIdPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRId $minValueId
	 * @return static
	 */
	public function setMinValueId($minValueId = null): object
	{
		if (null !== $minValueId && !($minValueId instanceof FHIRId)) {
			$minValueId = new FHIRId($minValueId);
		}
		$this->_trackValueSet($this->minValueId, $minValueId);
		$this->minValueId = $minValueId;
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
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUnsignedInt
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUnsignedInt $minValueUnsignedInt
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
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPositiveInt
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPositiveInt $minValuePositiveInt
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
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRMarkdownPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMarkdown
	 */
	public function getMinValueMarkdown(): ?FHIRMarkdown
	{
		return $this->minValueMarkdown;
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
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRMarkdownPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMarkdown $minValueMarkdown
	 * @return static
	 */
	public function setMinValueMarkdown($minValueMarkdown = null): object
	{
		if (null !== $minValueMarkdown && !($minValueMarkdown instanceof FHIRMarkdown)) {
			$minValueMarkdown = new FHIRMarkdown($minValueMarkdown);
		}
		$this->_trackValueSet($this->minValueMarkdown, $minValueMarkdown);
		$this->minValueMarkdown = $minValueMarkdown;
		return $this;
	}

	/**
	 * A text note which also contains information about who made the statement and
	 * when.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAnnotation
	 */
	public function getMinValueAnnotation(): ?FHIRAnnotation
	{
		return $this->minValueAnnotation;
	}

	/**
	 * A text note which also contains information about who made the statement and
	 * when.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAnnotation $minValueAnnotation
	 * @return static
	 */
	public function setMinValueAnnotation(?FHIRAnnotation $minValueAnnotation = null): object
	{
		$this->_trackValueSet($this->minValueAnnotation, $minValueAnnotation);
		$this->minValueAnnotation = $minValueAnnotation;
		return $this;
	}

	/**
	 * For referring to data content defined in other formats.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAttachment
	 */
	public function getMinValueAttachment(): ?FHIRAttachment
	{
		return $this->minValueAttachment;
	}

	/**
	 * For referring to data content defined in other formats.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAttachment $minValueAttachment
	 * @return static
	 */
	public function setMinValueAttachment(?FHIRAttachment $minValueAttachment = null): object
	{
		$this->_trackValueSet($this->minValueAttachment, $minValueAttachment);
		$this->minValueAttachment = $minValueAttachment;
		return $this;
	}

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier
	 */
	public function getMinValueIdentifier(): ?FHIRIdentifier
	{
		return $this->minValueIdentifier;
	}

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier $minValueIdentifier
	 * @return static
	 */
	public function setMinValueIdentifier(?FHIRIdentifier $minValueIdentifier = null): object
	{
		$this->_trackValueSet($this->minValueIdentifier, $minValueIdentifier);
		$this->minValueIdentifier = $minValueIdentifier;
		return $this;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	public function getMinValueCodeableConcept(): ?FHIRCodeableConcept
	{
		return $this->minValueCodeableConcept;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $minValueCodeableConcept
	 * @return static
	 */
	public function setMinValueCodeableConcept(
		?FHIRCodeableConcept $minValueCodeableConcept = null,
	): object {
		$this->_trackValueSet($this->minValueCodeableConcept, $minValueCodeableConcept);
		$this->minValueCodeableConcept = $minValueCodeableConcept;
		return $this;
	}

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding
	 */
	public function getMinValueCoding(): ?FHIRCoding
	{
		return $this->minValueCoding;
	}

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding $minValueCoding
	 * @return static
	 */
	public function setMinValueCoding(?FHIRCoding $minValueCoding = null): object
	{
		$this->_trackValueSet($this->minValueCoding, $minValueCoding);
		$this->minValueCoding = $minValueCoding;
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
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity $minValueQuantity
	 * @return static
	 */
	public function setMinValueQuantity(?FHIRQuantity $minValueQuantity = null): object
	{
		$this->_trackValueSet($this->minValueQuantity, $minValueQuantity);
		$this->minValueQuantity = $minValueQuantity;
		return $this;
	}

	/**
	 * A set of ordered Quantities defined by a low and high limit.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRange
	 */
	public function getMinValueRange(): ?FHIRRange
	{
		return $this->minValueRange;
	}

	/**
	 * A set of ordered Quantities defined by a low and high limit.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRange $minValueRange
	 * @return static
	 */
	public function setMinValueRange(?FHIRRange $minValueRange = null): object
	{
		$this->_trackValueSet($this->minValueRange, $minValueRange);
		$this->minValueRange = $minValueRange;
		return $this;
	}

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod
	 */
	public function getMinValuePeriod(): ?FHIRPeriod
	{
		return $this->minValuePeriod;
	}

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod $minValuePeriod
	 * @return static
	 */
	public function setMinValuePeriod(?FHIRPeriod $minValuePeriod = null): object
	{
		$this->_trackValueSet($this->minValuePeriod, $minValuePeriod);
		$this->minValuePeriod = $minValuePeriod;
		return $this;
	}

	/**
	 * A relationship of two Quantity values - expressed as a numerator and a
	 * denominator.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRatio
	 */
	public function getMinValueRatio(): ?FHIRRatio
	{
		return $this->minValueRatio;
	}

	/**
	 * A relationship of two Quantity values - expressed as a numerator and a
	 * denominator.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRatio $minValueRatio
	 * @return static
	 */
	public function setMinValueRatio(?FHIRRatio $minValueRatio = null): object
	{
		$this->_trackValueSet($this->minValueRatio, $minValueRatio);
		$this->minValueRatio = $minValueRatio;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getMinValueReference(): ?FHIRReference
	{
		return $this->minValueReference;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $minValueReference
	 * @return static
	 */
	public function setMinValueReference(?FHIRReference $minValueReference = null): object
	{
		$this->_trackValueSet($this->minValueReference, $minValueReference);
		$this->minValueReference = $minValueReference;
		return $this;
	}

	/**
	 * A series of measurements taken by a device, with upper and lower limits. There
	 * may be more than one dimension in the data.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSampledData
	 */
	public function getMinValueSampledData(): ?FHIRSampledData
	{
		return $this->minValueSampledData;
	}

	/**
	 * A series of measurements taken by a device, with upper and lower limits. There
	 * may be more than one dimension in the data.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSampledData $minValueSampledData
	 * @return static
	 */
	public function setMinValueSampledData(?FHIRSampledData $minValueSampledData = null): object
	{
		$this->_trackValueSet($this->minValueSampledData, $minValueSampledData);
		$this->minValueSampledData = $minValueSampledData;
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
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSignature
	 */
	public function getMinValueSignature(): ?FHIRSignature
	{
		return $this->minValueSignature;
	}

	/**
	 * A digital signature along with supporting context. The signature may be
	 * electronic/cryptographic in nature, or a graphical image representing a
	 * hand-written signature, or a signature process. Different Signature approaches
	 * have different utilities.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSignature $minValueSignature
	 * @return static
	 */
	public function setMinValueSignature(?FHIRSignature $minValueSignature = null): object
	{
		$this->_trackValueSet($this->minValueSignature, $minValueSignature);
		$this->minValueSignature = $minValueSignature;
		return $this;
	}

	/**
	 * A human's name with the ability to identify parts and usage.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRHumanName
	 */
	public function getMinValueHumanName(): ?FHIRHumanName
	{
		return $this->minValueHumanName;
	}

	/**
	 * A human's name with the ability to identify parts and usage.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRHumanName $minValueHumanName
	 * @return static
	 */
	public function setMinValueHumanName(?FHIRHumanName $minValueHumanName = null): object
	{
		$this->_trackValueSet($this->minValueHumanName, $minValueHumanName);
		$this->minValueHumanName = $minValueHumanName;
		return $this;
	}

	/**
	 * There is a variety of postal address formats defined around the world. This
	 * format defines a superset that is the basis for all addresses around the world.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAddress
	 */
	public function getMinValueAddress(): ?FHIRAddress
	{
		return $this->minValueAddress;
	}

	/**
	 * There is a variety of postal address formats defined around the world. This
	 * format defines a superset that is the basis for all addresses around the world.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAddress $minValueAddress
	 * @return static
	 */
	public function setMinValueAddress(?FHIRAddress $minValueAddress = null): object
	{
		$this->_trackValueSet($this->minValueAddress, $minValueAddress);
		$this->minValueAddress = $minValueAddress;
		return $this;
	}

	/**
	 * Details for all kinds of technology mediated contact points for a person or
	 * organization, including telephone, email, etc.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRContactPoint
	 */
	public function getMinValueContactPoint(): ?FHIRContactPoint
	{
		return $this->minValueContactPoint;
	}

	/**
	 * Details for all kinds of technology mediated contact points for a person or
	 * organization, including telephone, email, etc.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRContactPoint $minValueContactPoint
	 * @return static
	 */
	public function setMinValueContactPoint(?FHIRContactPoint $minValueContactPoint = null): object
	{
		$this->_trackValueSet($this->minValueContactPoint, $minValueContactPoint);
		$this->minValueContactPoint = $minValueContactPoint;
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
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTiming
	 */
	public function getMinValueTiming(): ?FHIRTiming
	{
		return $this->minValueTiming;
	}

	/**
	 * Specifies an event that may occur multiple times. Timing schedules are used to
	 * record when things are expected or requested to occur. The most common usage is
	 * in dosage instructions for medications. They are also used when planning care of
	 * various kinds.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTiming $minValueTiming
	 * @return static
	 */
	public function setMinValueTiming(?FHIRTiming $minValueTiming = null): object
	{
		$this->_trackValueSet($this->minValueTiming, $minValueTiming);
		$this->minValueTiming = $minValueTiming;
		return $this;
	}

	/**
	 * The metadata about a resource. This is content in the resource that is
	 * maintained by the infrastructure. Changes to the content may not always be
	 * associated with version changes to the resource.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMeta
	 */
	public function getMinValueMeta(): ?FHIRMeta
	{
		return $this->minValueMeta;
	}

	/**
	 * The metadata about a resource. This is content in the resource that is
	 * maintained by the infrastructure. Changes to the content may not always be
	 * associated with version changes to the resource.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The minimum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMeta $minValueMeta
	 * @return static
	 */
	public function setMinValueMeta(?FHIRMeta $minValueMeta = null): object
	{
		$this->_trackValueSet($this->minValueMeta, $minValueMeta);
		$this->minValueMeta = $minValueMeta;
		return $this;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
	 */
	public function getMaxValueBoolean(): ?FHIRBoolean
	{
		return $this->maxValueBoolean;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean $maxValueBoolean
	 * @return static
	 */
	public function setMaxValueBoolean($maxValueBoolean = null): object
	{
		if (null !== $maxValueBoolean && !($maxValueBoolean instanceof FHIRBoolean)) {
			$maxValueBoolean = new FHIRBoolean($maxValueBoolean);
		}
		$this->_trackValueSet($this->maxValueBoolean, $maxValueBoolean);
		$this->maxValueBoolean = $maxValueBoolean;
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
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRIntegerPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInteger
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRIntegerPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInteger $maxValueInteger
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
	 * A rational number with implicit precision
	 * Do not use a IEEE type floating point type, instead use something that works
	 * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRDecimalPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDecimal
	 */
	public function getMaxValueDecimal(): ?FHIRDecimal
	{
		return $this->maxValueDecimal;
	}

	/**
	 * A rational number with implicit precision
	 * Do not use a IEEE type floating point type, instead use something that works
	 * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRDecimalPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDecimal $maxValueDecimal
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
	 * A stream of bytes
	 * A stream of bytes, base64 encoded
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRBase64BinaryPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBase64Binary
	 */
	public function getMaxValueBase64Binary(): ?FHIRBase64Binary
	{
		return $this->maxValueBase64Binary;
	}

	/**
	 * A stream of bytes
	 * A stream of bytes, base64 encoded
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRBase64BinaryPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBase64Binary $maxValueBase64Binary
	 * @return static
	 */
	public function setMaxValueBase64Binary($maxValueBase64Binary = null): object
	{
		if (
			null !== $maxValueBase64Binary &&
			!($maxValueBase64Binary instanceof FHIRBase64Binary)
		) {
			$maxValueBase64Binary = new FHIRBase64Binary($maxValueBase64Binary);
		}
		$this->_trackValueSet($this->maxValueBase64Binary, $maxValueBase64Binary);
		$this->maxValueBase64Binary = $maxValueBase64Binary;
		return $this;
	}

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for precisely observed times, typically system logs etc.,
	 * and not human-reported times - for them, see date and dateTime below. Time zone
	 * is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRInstantPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstant
	 */
	public function getMaxValueInstant(): ?FHIRInstant
	{
		return $this->maxValueInstant;
	}

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for precisely observed times, typically system logs etc.,
	 * and not human-reported times - for them, see date and dateTime below. Time zone
	 * is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRInstantPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstant $maxValueInstant
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
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	public function getMaxValueString(): ?FHIRString
	{
		return $this->maxValueString;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString $maxValueString
	 * @return static
	 */
	public function setMaxValueString($maxValueString = null): object
	{
		if (null !== $maxValueString && !($maxValueString instanceof FHIRString)) {
			$maxValueString = new FHIRString($maxValueString);
		}
		$this->_trackValueSet($this->maxValueString, $maxValueString);
		$this->maxValueString = $maxValueString;
		return $this;
	}

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri
	 */
	public function getMaxValueUri(): ?FHIRUri
	{
		return $this->maxValueUri;
	}

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri $maxValueUri
	 * @return static
	 */
	public function setMaxValueUri($maxValueUri = null): object
	{
		if (null !== $maxValueUri && !($maxValueUri instanceof FHIRUri)) {
			$maxValueUri = new FHIRUri($maxValueUri);
		}
		$this->_trackValueSet($this->maxValueUri, $maxValueUri);
		$this->maxValueUri = $maxValueUri;
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
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRDatePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDate
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRDatePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDate $maxValueDate
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
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime $maxValueDateTime
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
	 * A time during the day, with no date specified
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTime
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTime $maxValueTime
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
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode
	 */
	public function getMaxValueCode(): ?FHIRCode
	{
		return $this->maxValueCode;
	}

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode $maxValueCode
	 * @return static
	 */
	public function setMaxValueCode($maxValueCode = null): object
	{
		if (null !== $maxValueCode && !($maxValueCode instanceof FHIRCode)) {
			$maxValueCode = new FHIRCode($maxValueCode);
		}
		$this->_trackValueSet($this->maxValueCode, $maxValueCode);
		$this->maxValueCode = $maxValueCode;
		return $this;
	}

	/**
	 * An oid represented as a URI
	 * RFC 3001. See also ISO/IEC 8824:1990 €
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIROidPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIROid
	 */
	public function getMaxValueOid(): ?FHIROid
	{
		return $this->maxValueOid;
	}

	/**
	 * An oid represented as a URI
	 * RFC 3001. See also ISO/IEC 8824:1990 €
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIROidPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIROid $maxValueOid
	 * @return static
	 */
	public function setMaxValueOid($maxValueOid = null): object
	{
		if (null !== $maxValueOid && !($maxValueOid instanceof FHIROid)) {
			$maxValueOid = new FHIROid($maxValueOid);
		}
		$this->_trackValueSet($this->maxValueOid, $maxValueOid);
		$this->maxValueOid = $maxValueOid;
		return $this;
	}

	/**
	 * A UUID, represented as a URI
	 * See The Open Group, CDE 1.1 Remote Procedure Call specification, Appendix A.
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRUuidPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUuid
	 */
	public function getMaxValueUuid(): ?FHIRUuid
	{
		return $this->maxValueUuid;
	}

	/**
	 * A UUID, represented as a URI
	 * See The Open Group, CDE 1.1 Remote Procedure Call specification, Appendix A.
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRUuidPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUuid $maxValueUuid
	 * @return static
	 */
	public function setMaxValueUuid($maxValueUuid = null): object
	{
		if (null !== $maxValueUuid && !($maxValueUuid instanceof FHIRUuid)) {
			$maxValueUuid = new FHIRUuid($maxValueUuid);
		}
		$this->_trackValueSet($this->maxValueUuid, $maxValueUuid);
		$this->maxValueUuid = $maxValueUuid;
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
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRIdPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRId
	 */
	public function getMaxValueId(): ?FHIRId
	{
		return $this->maxValueId;
	}

	/**
	 * Any combination of letters, numerals, "-" and ".", with a length limit of 64
	 * characters. (This might be an integer, an unprefixed OID, UUID or any other
	 * identifier pattern that meets these constraints.) Ids are case-insensitive.
	 * RFC 4122
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRIdPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRId $maxValueId
	 * @return static
	 */
	public function setMaxValueId($maxValueId = null): object
	{
		if (null !== $maxValueId && !($maxValueId instanceof FHIRId)) {
			$maxValueId = new FHIRId($maxValueId);
		}
		$this->_trackValueSet($this->maxValueId, $maxValueId);
		$this->maxValueId = $maxValueId;
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
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUnsignedInt
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUnsignedInt $maxValueUnsignedInt
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
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPositiveInt
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPositiveInt $maxValuePositiveInt
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
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRMarkdownPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMarkdown
	 */
	public function getMaxValueMarkdown(): ?FHIRMarkdown
	{
		return $this->maxValueMarkdown;
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
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRMarkdownPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMarkdown $maxValueMarkdown
	 * @return static
	 */
	public function setMaxValueMarkdown($maxValueMarkdown = null): object
	{
		if (null !== $maxValueMarkdown && !($maxValueMarkdown instanceof FHIRMarkdown)) {
			$maxValueMarkdown = new FHIRMarkdown($maxValueMarkdown);
		}
		$this->_trackValueSet($this->maxValueMarkdown, $maxValueMarkdown);
		$this->maxValueMarkdown = $maxValueMarkdown;
		return $this;
	}

	/**
	 * A text note which also contains information about who made the statement and
	 * when.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAnnotation
	 */
	public function getMaxValueAnnotation(): ?FHIRAnnotation
	{
		return $this->maxValueAnnotation;
	}

	/**
	 * A text note which also contains information about who made the statement and
	 * when.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAnnotation $maxValueAnnotation
	 * @return static
	 */
	public function setMaxValueAnnotation(?FHIRAnnotation $maxValueAnnotation = null): object
	{
		$this->_trackValueSet($this->maxValueAnnotation, $maxValueAnnotation);
		$this->maxValueAnnotation = $maxValueAnnotation;
		return $this;
	}

	/**
	 * For referring to data content defined in other formats.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAttachment
	 */
	public function getMaxValueAttachment(): ?FHIRAttachment
	{
		return $this->maxValueAttachment;
	}

	/**
	 * For referring to data content defined in other formats.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAttachment $maxValueAttachment
	 * @return static
	 */
	public function setMaxValueAttachment(?FHIRAttachment $maxValueAttachment = null): object
	{
		$this->_trackValueSet($this->maxValueAttachment, $maxValueAttachment);
		$this->maxValueAttachment = $maxValueAttachment;
		return $this;
	}

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier
	 */
	public function getMaxValueIdentifier(): ?FHIRIdentifier
	{
		return $this->maxValueIdentifier;
	}

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier $maxValueIdentifier
	 * @return static
	 */
	public function setMaxValueIdentifier(?FHIRIdentifier $maxValueIdentifier = null): object
	{
		$this->_trackValueSet($this->maxValueIdentifier, $maxValueIdentifier);
		$this->maxValueIdentifier = $maxValueIdentifier;
		return $this;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	public function getMaxValueCodeableConcept(): ?FHIRCodeableConcept
	{
		return $this->maxValueCodeableConcept;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $maxValueCodeableConcept
	 * @return static
	 */
	public function setMaxValueCodeableConcept(
		?FHIRCodeableConcept $maxValueCodeableConcept = null,
	): object {
		$this->_trackValueSet($this->maxValueCodeableConcept, $maxValueCodeableConcept);
		$this->maxValueCodeableConcept = $maxValueCodeableConcept;
		return $this;
	}

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding
	 */
	public function getMaxValueCoding(): ?FHIRCoding
	{
		return $this->maxValueCoding;
	}

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding $maxValueCoding
	 * @return static
	 */
	public function setMaxValueCoding(?FHIRCoding $maxValueCoding = null): object
	{
		$this->_trackValueSet($this->maxValueCoding, $maxValueCoding);
		$this->maxValueCoding = $maxValueCoding;
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
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity $maxValueQuantity
	 * @return static
	 */
	public function setMaxValueQuantity(?FHIRQuantity $maxValueQuantity = null): object
	{
		$this->_trackValueSet($this->maxValueQuantity, $maxValueQuantity);
		$this->maxValueQuantity = $maxValueQuantity;
		return $this;
	}

	/**
	 * A set of ordered Quantities defined by a low and high limit.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRange
	 */
	public function getMaxValueRange(): ?FHIRRange
	{
		return $this->maxValueRange;
	}

	/**
	 * A set of ordered Quantities defined by a low and high limit.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRange $maxValueRange
	 * @return static
	 */
	public function setMaxValueRange(?FHIRRange $maxValueRange = null): object
	{
		$this->_trackValueSet($this->maxValueRange, $maxValueRange);
		$this->maxValueRange = $maxValueRange;
		return $this;
	}

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod
	 */
	public function getMaxValuePeriod(): ?FHIRPeriod
	{
		return $this->maxValuePeriod;
	}

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod $maxValuePeriod
	 * @return static
	 */
	public function setMaxValuePeriod(?FHIRPeriod $maxValuePeriod = null): object
	{
		$this->_trackValueSet($this->maxValuePeriod, $maxValuePeriod);
		$this->maxValuePeriod = $maxValuePeriod;
		return $this;
	}

	/**
	 * A relationship of two Quantity values - expressed as a numerator and a
	 * denominator.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRatio
	 */
	public function getMaxValueRatio(): ?FHIRRatio
	{
		return $this->maxValueRatio;
	}

	/**
	 * A relationship of two Quantity values - expressed as a numerator and a
	 * denominator.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRatio $maxValueRatio
	 * @return static
	 */
	public function setMaxValueRatio(?FHIRRatio $maxValueRatio = null): object
	{
		$this->_trackValueSet($this->maxValueRatio, $maxValueRatio);
		$this->maxValueRatio = $maxValueRatio;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getMaxValueReference(): ?FHIRReference
	{
		return $this->maxValueReference;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $maxValueReference
	 * @return static
	 */
	public function setMaxValueReference(?FHIRReference $maxValueReference = null): object
	{
		$this->_trackValueSet($this->maxValueReference, $maxValueReference);
		$this->maxValueReference = $maxValueReference;
		return $this;
	}

	/**
	 * A series of measurements taken by a device, with upper and lower limits. There
	 * may be more than one dimension in the data.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSampledData
	 */
	public function getMaxValueSampledData(): ?FHIRSampledData
	{
		return $this->maxValueSampledData;
	}

	/**
	 * A series of measurements taken by a device, with upper and lower limits. There
	 * may be more than one dimension in the data.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSampledData $maxValueSampledData
	 * @return static
	 */
	public function setMaxValueSampledData(?FHIRSampledData $maxValueSampledData = null): object
	{
		$this->_trackValueSet($this->maxValueSampledData, $maxValueSampledData);
		$this->maxValueSampledData = $maxValueSampledData;
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
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSignature
	 */
	public function getMaxValueSignature(): ?FHIRSignature
	{
		return $this->maxValueSignature;
	}

	/**
	 * A digital signature along with supporting context. The signature may be
	 * electronic/cryptographic in nature, or a graphical image representing a
	 * hand-written signature, or a signature process. Different Signature approaches
	 * have different utilities.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRSignature $maxValueSignature
	 * @return static
	 */
	public function setMaxValueSignature(?FHIRSignature $maxValueSignature = null): object
	{
		$this->_trackValueSet($this->maxValueSignature, $maxValueSignature);
		$this->maxValueSignature = $maxValueSignature;
		return $this;
	}

	/**
	 * A human's name with the ability to identify parts and usage.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRHumanName
	 */
	public function getMaxValueHumanName(): ?FHIRHumanName
	{
		return $this->maxValueHumanName;
	}

	/**
	 * A human's name with the ability to identify parts and usage.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRHumanName $maxValueHumanName
	 * @return static
	 */
	public function setMaxValueHumanName(?FHIRHumanName $maxValueHumanName = null): object
	{
		$this->_trackValueSet($this->maxValueHumanName, $maxValueHumanName);
		$this->maxValueHumanName = $maxValueHumanName;
		return $this;
	}

	/**
	 * There is a variety of postal address formats defined around the world. This
	 * format defines a superset that is the basis for all addresses around the world.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAddress
	 */
	public function getMaxValueAddress(): ?FHIRAddress
	{
		return $this->maxValueAddress;
	}

	/**
	 * There is a variety of postal address formats defined around the world. This
	 * format defines a superset that is the basis for all addresses around the world.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAddress $maxValueAddress
	 * @return static
	 */
	public function setMaxValueAddress(?FHIRAddress $maxValueAddress = null): object
	{
		$this->_trackValueSet($this->maxValueAddress, $maxValueAddress);
		$this->maxValueAddress = $maxValueAddress;
		return $this;
	}

	/**
	 * Details for all kinds of technology mediated contact points for a person or
	 * organization, including telephone, email, etc.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRContactPoint
	 */
	public function getMaxValueContactPoint(): ?FHIRContactPoint
	{
		return $this->maxValueContactPoint;
	}

	/**
	 * Details for all kinds of technology mediated contact points for a person or
	 * organization, including telephone, email, etc.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRContactPoint $maxValueContactPoint
	 * @return static
	 */
	public function setMaxValueContactPoint(?FHIRContactPoint $maxValueContactPoint = null): object
	{
		$this->_trackValueSet($this->maxValueContactPoint, $maxValueContactPoint);
		$this->maxValueContactPoint = $maxValueContactPoint;
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
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTiming
	 */
	public function getMaxValueTiming(): ?FHIRTiming
	{
		return $this->maxValueTiming;
	}

	/**
	 * Specifies an event that may occur multiple times. Timing schedules are used to
	 * record when things are expected or requested to occur. The most common usage is
	 * in dosage instructions for medications. They are also used when planning care of
	 * various kinds.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRTiming $maxValueTiming
	 * @return static
	 */
	public function setMaxValueTiming(?FHIRTiming $maxValueTiming = null): object
	{
		$this->_trackValueSet($this->maxValueTiming, $maxValueTiming);
		$this->maxValueTiming = $maxValueTiming;
		return $this;
	}

	/**
	 * The metadata about a resource. This is content in the resource that is
	 * maintained by the infrastructure. Changes to the content may not always be
	 * associated with version changes to the resource.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMeta
	 */
	public function getMaxValueMeta(): ?FHIRMeta
	{
		return $this->maxValueMeta;
	}

	/**
	 * The metadata about a resource. This is content in the resource that is
	 * maintained by the infrastructure. Changes to the content may not always be
	 * associated with version changes to the resource.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The maximum allowed value for the element. The value is inclusive. This is
	 * allowed for the types date, dateTime, instant, time, decimal, integer, and
	 * Quantity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMeta $maxValueMeta
	 * @return static
	 */
	public function setMaxValueMeta(?FHIRMeta $maxValueMeta = null): object
	{
		$this->_trackValueSet($this->maxValueMeta, $maxValueMeta);
		$this->maxValueMeta = $maxValueMeta;
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
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRIntegerPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInteger
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRIntegerPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInteger $maxLength
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
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRIdPrimitive[]|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRId[]
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRIdPrimitive[]|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRId[] $condition
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
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRId[] $condition
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
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionConstraint[]
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionConstraint $constraint
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
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionConstraint[] $constraint
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
	 * ignored and not supported.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
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
	 * ignored and not supported.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean $mustSupport
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
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean $isModifier
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
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Whether the element should be included if a client requests a search with the
	 * parameter _summary=true.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean $isSummary
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
	 * Binds to a value set if this element is coded (code, Coding, CodeableConcept).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBinding
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
	 * Binds to a value set if this element is coded (code, Coding, CodeableConcept).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBinding $binding
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
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionMapping[]
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionMapping $mapping
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
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionMapping[] $mapping
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
		if (null !== ($v = $this->getName())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_NAME] = $fieldErrs;
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
		if (null !== ($v = $this->getComments())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_COMMENTS] = $fieldErrs;
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
		if ([] !== ($vs = $this->getType())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_TYPE, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getNameReference())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_NAME_REFERENCE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueBoolean())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_BOOLEAN] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueInteger())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_INTEGER] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueDecimal())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_DECIMAL] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueBase64Binary())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_BASE_64BINARY] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueInstant())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_INSTANT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueString())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_STRING] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueUri())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_URI] = $fieldErrs;
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
		if (null !== ($v = $this->getDefaultValueTime())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_TIME] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueCode())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_CODE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueOid())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_OID] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueUuid())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_UUID] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueId())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_ID] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueUnsignedInt())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValuePositiveInt())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_POSITIVE_INT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueMarkdown())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_MARKDOWN] = $fieldErrs;
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
		if (null !== ($v = $this->getDefaultValueIdentifier())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_IDENTIFIER] = $fieldErrs;
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
		if (null !== ($v = $this->getDefaultValuePeriod())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_PERIOD] = $fieldErrs;
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
		if (null !== ($v = $this->getDefaultValueHumanName())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_HUMAN_NAME] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueAddress())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_ADDRESS] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueContactPoint())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_CONTACT_POINT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDefaultValueTiming())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEFAULT_VALUE_TIMING] = $fieldErrs;
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
		if (null !== ($v = $this->getFixedBoolean())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_BOOLEAN] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedInteger())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_INTEGER] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedDecimal())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_DECIMAL] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedBase64Binary())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_BASE_64BINARY] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedInstant())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_INSTANT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedString())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_STRING] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedUri())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_URI] = $fieldErrs;
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
		if (null !== ($v = $this->getFixedTime())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_TIME] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedCode())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_CODE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedOid())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_OID] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedUuid())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_UUID] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedId())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_ID] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedUnsignedInt())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_UNSIGNED_INT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedPositiveInt())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_POSITIVE_INT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedMarkdown())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_MARKDOWN] = $fieldErrs;
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
		if (null !== ($v = $this->getFixedIdentifier())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_IDENTIFIER] = $fieldErrs;
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
		if (null !== ($v = $this->getFixedPeriod())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_PERIOD] = $fieldErrs;
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
		if (null !== ($v = $this->getFixedHumanName())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_HUMAN_NAME] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedAddress())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_ADDRESS] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedContactPoint())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_CONTACT_POINT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedTiming())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_TIMING] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFixedMeta())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FIXED_META] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternBoolean())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_BOOLEAN] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternInteger())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_INTEGER] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternDecimal())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_DECIMAL] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternBase64Binary())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_BASE_64BINARY] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternInstant())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_INSTANT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternString())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_STRING] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternUri())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_URI] = $fieldErrs;
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
		if (null !== ($v = $this->getPatternTime())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_TIME] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternCode())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_CODE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternOid())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_OID] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternUuid())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_UUID] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternId())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_ID] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternUnsignedInt())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_UNSIGNED_INT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternPositiveInt())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_POSITIVE_INT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternMarkdown())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_MARKDOWN] = $fieldErrs;
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
		if (null !== ($v = $this->getPatternIdentifier())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_IDENTIFIER] = $fieldErrs;
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
		if (null !== ($v = $this->getPatternPeriod())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_PERIOD] = $fieldErrs;
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
		if (null !== ($v = $this->getPatternHumanName())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_HUMAN_NAME] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternAddress())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_ADDRESS] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternContactPoint())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_CONTACT_POINT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternTiming())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_TIMING] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatternMeta())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATTERN_META] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getExampleBoolean())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_EXAMPLE_BOOLEAN] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getExampleInteger())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_EXAMPLE_INTEGER] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getExampleDecimal())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_EXAMPLE_DECIMAL] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getExampleBase64Binary())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_EXAMPLE_BASE_64BINARY] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getExampleInstant())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_EXAMPLE_INSTANT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getExampleString())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_EXAMPLE_STRING] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getExampleUri())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_EXAMPLE_URI] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getExampleDate())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_EXAMPLE_DATE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getExampleDateTime())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_EXAMPLE_DATE_TIME] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getExampleTime())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_EXAMPLE_TIME] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getExampleCode())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_EXAMPLE_CODE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getExampleOid())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_EXAMPLE_OID] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getExampleUuid())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_EXAMPLE_UUID] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getExampleId())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_EXAMPLE_ID] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getExampleUnsignedInt())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_EXAMPLE_UNSIGNED_INT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getExamplePositiveInt())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_EXAMPLE_POSITIVE_INT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getExampleMarkdown())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_EXAMPLE_MARKDOWN] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getExampleAnnotation())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_EXAMPLE_ANNOTATION] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getExampleAttachment())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_EXAMPLE_ATTACHMENT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getExampleIdentifier())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_EXAMPLE_IDENTIFIER] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getExampleCodeableConcept())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_EXAMPLE_CODEABLE_CONCEPT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getExampleCoding())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_EXAMPLE_CODING] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getExampleQuantity())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_EXAMPLE_QUANTITY] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getExampleRange())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_EXAMPLE_RANGE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getExamplePeriod())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_EXAMPLE_PERIOD] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getExampleRatio())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_EXAMPLE_RATIO] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getExampleReference())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_EXAMPLE_REFERENCE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getExampleSampledData())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_EXAMPLE_SAMPLED_DATA] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getExampleSignature())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_EXAMPLE_SIGNATURE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getExampleHumanName())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_EXAMPLE_HUMAN_NAME] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getExampleAddress())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_EXAMPLE_ADDRESS] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getExampleContactPoint())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_EXAMPLE_CONTACT_POINT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getExampleTiming())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_EXAMPLE_TIMING] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getExampleMeta())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_EXAMPLE_META] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMinValueBoolean())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MIN_VALUE_BOOLEAN] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMinValueInteger())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MIN_VALUE_INTEGER] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMinValueDecimal())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MIN_VALUE_DECIMAL] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMinValueBase64Binary())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MIN_VALUE_BASE_64BINARY] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMinValueInstant())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MIN_VALUE_INSTANT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMinValueString())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MIN_VALUE_STRING] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMinValueUri())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MIN_VALUE_URI] = $fieldErrs;
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
		if (null !== ($v = $this->getMinValueTime())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MIN_VALUE_TIME] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMinValueCode())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MIN_VALUE_CODE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMinValueOid())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MIN_VALUE_OID] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMinValueUuid())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MIN_VALUE_UUID] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMinValueId())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MIN_VALUE_ID] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMinValueUnsignedInt())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MIN_VALUE_UNSIGNED_INT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMinValuePositiveInt())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MIN_VALUE_POSITIVE_INT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMinValueMarkdown())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MIN_VALUE_MARKDOWN] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMinValueAnnotation())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MIN_VALUE_ANNOTATION] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMinValueAttachment())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MIN_VALUE_ATTACHMENT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMinValueIdentifier())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MIN_VALUE_IDENTIFIER] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMinValueCodeableConcept())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MIN_VALUE_CODEABLE_CONCEPT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMinValueCoding())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MIN_VALUE_CODING] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMinValueQuantity())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MIN_VALUE_QUANTITY] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMinValueRange())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MIN_VALUE_RANGE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMinValuePeriod())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MIN_VALUE_PERIOD] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMinValueRatio())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MIN_VALUE_RATIO] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMinValueReference())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MIN_VALUE_REFERENCE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMinValueSampledData())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MIN_VALUE_SAMPLED_DATA] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMinValueSignature())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MIN_VALUE_SIGNATURE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMinValueHumanName())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MIN_VALUE_HUMAN_NAME] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMinValueAddress())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MIN_VALUE_ADDRESS] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMinValueContactPoint())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MIN_VALUE_CONTACT_POINT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMinValueTiming())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MIN_VALUE_TIMING] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMinValueMeta())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MIN_VALUE_META] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMaxValueBoolean())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MAX_VALUE_BOOLEAN] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMaxValueInteger())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MAX_VALUE_INTEGER] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMaxValueDecimal())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MAX_VALUE_DECIMAL] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMaxValueBase64Binary())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MAX_VALUE_BASE_64BINARY] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMaxValueInstant())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MAX_VALUE_INSTANT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMaxValueString())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MAX_VALUE_STRING] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMaxValueUri())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MAX_VALUE_URI] = $fieldErrs;
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
		if (null !== ($v = $this->getMaxValueTime())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MAX_VALUE_TIME] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMaxValueCode())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MAX_VALUE_CODE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMaxValueOid())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MAX_VALUE_OID] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMaxValueUuid())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MAX_VALUE_UUID] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMaxValueId())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MAX_VALUE_ID] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMaxValueUnsignedInt())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MAX_VALUE_UNSIGNED_INT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMaxValuePositiveInt())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MAX_VALUE_POSITIVE_INT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMaxValueMarkdown())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MAX_VALUE_MARKDOWN] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMaxValueAnnotation())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MAX_VALUE_ANNOTATION] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMaxValueAttachment())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MAX_VALUE_ATTACHMENT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMaxValueIdentifier())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MAX_VALUE_IDENTIFIER] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMaxValueCodeableConcept())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MAX_VALUE_CODEABLE_CONCEPT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMaxValueCoding())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MAX_VALUE_CODING] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMaxValueQuantity())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MAX_VALUE_QUANTITY] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMaxValueRange())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MAX_VALUE_RANGE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMaxValuePeriod())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MAX_VALUE_PERIOD] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMaxValueRatio())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MAX_VALUE_RATIO] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMaxValueReference())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MAX_VALUE_REFERENCE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMaxValueSampledData())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MAX_VALUE_SAMPLED_DATA] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMaxValueSignature())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MAX_VALUE_SIGNATURE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMaxValueHumanName())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MAX_VALUE_HUMAN_NAME] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMaxValueAddress())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MAX_VALUE_ADDRESS] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMaxValueContactPoint())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MAX_VALUE_CONTACT_POINT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMaxValueTiming())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MAX_VALUE_TIMING] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMaxValueMeta())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MAX_VALUE_META] = $fieldErrs;
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
		if (isset($validationRules[self::FIELD_NAME])) {
			$v = $this->getName();
			foreach ($validationRules[self::FIELD_NAME] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
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
		if (isset($validationRules[self::FIELD_COMMENTS])) {
			$v = $this->getComments();
			foreach ($validationRules[self::FIELD_COMMENTS] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_COMMENTS,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_COMMENTS])) {
						$errs[self::FIELD_COMMENTS] = [];
					}
					$errs[self::FIELD_COMMENTS][$rule] = $err;
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
		if (isset($validationRules[self::FIELD_NAME_REFERENCE])) {
			$v = $this->getNameReference();
			foreach ($validationRules[self::FIELD_NAME_REFERENCE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_NAME_REFERENCE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_NAME_REFERENCE])) {
						$errs[self::FIELD_NAME_REFERENCE] = [];
					}
					$errs[self::FIELD_NAME_REFERENCE][$rule] = $err;
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
		if (isset($validationRules[self::FIELD_EXAMPLE_BOOLEAN])) {
			$v = $this->getExampleBoolean();
			foreach ($validationRules[self::FIELD_EXAMPLE_BOOLEAN] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_EXAMPLE_BOOLEAN,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_EXAMPLE_BOOLEAN])) {
						$errs[self::FIELD_EXAMPLE_BOOLEAN] = [];
					}
					$errs[self::FIELD_EXAMPLE_BOOLEAN][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_EXAMPLE_INTEGER])) {
			$v = $this->getExampleInteger();
			foreach ($validationRules[self::FIELD_EXAMPLE_INTEGER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_EXAMPLE_INTEGER,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_EXAMPLE_INTEGER])) {
						$errs[self::FIELD_EXAMPLE_INTEGER] = [];
					}
					$errs[self::FIELD_EXAMPLE_INTEGER][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_EXAMPLE_DECIMAL])) {
			$v = $this->getExampleDecimal();
			foreach ($validationRules[self::FIELD_EXAMPLE_DECIMAL] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_EXAMPLE_DECIMAL,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_EXAMPLE_DECIMAL])) {
						$errs[self::FIELD_EXAMPLE_DECIMAL] = [];
					}
					$errs[self::FIELD_EXAMPLE_DECIMAL][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_EXAMPLE_BASE_64BINARY])) {
			$v = $this->getExampleBase64Binary();
			foreach ($validationRules[self::FIELD_EXAMPLE_BASE_64BINARY] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_EXAMPLE_BASE_64BINARY,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_EXAMPLE_BASE_64BINARY])) {
						$errs[self::FIELD_EXAMPLE_BASE_64BINARY] = [];
					}
					$errs[self::FIELD_EXAMPLE_BASE_64BINARY][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_EXAMPLE_INSTANT])) {
			$v = $this->getExampleInstant();
			foreach ($validationRules[self::FIELD_EXAMPLE_INSTANT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_EXAMPLE_INSTANT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_EXAMPLE_INSTANT])) {
						$errs[self::FIELD_EXAMPLE_INSTANT] = [];
					}
					$errs[self::FIELD_EXAMPLE_INSTANT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_EXAMPLE_STRING])) {
			$v = $this->getExampleString();
			foreach ($validationRules[self::FIELD_EXAMPLE_STRING] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_EXAMPLE_STRING,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_EXAMPLE_STRING])) {
						$errs[self::FIELD_EXAMPLE_STRING] = [];
					}
					$errs[self::FIELD_EXAMPLE_STRING][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_EXAMPLE_URI])) {
			$v = $this->getExampleUri();
			foreach ($validationRules[self::FIELD_EXAMPLE_URI] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_EXAMPLE_URI,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_EXAMPLE_URI])) {
						$errs[self::FIELD_EXAMPLE_URI] = [];
					}
					$errs[self::FIELD_EXAMPLE_URI][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_EXAMPLE_DATE])) {
			$v = $this->getExampleDate();
			foreach ($validationRules[self::FIELD_EXAMPLE_DATE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_EXAMPLE_DATE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_EXAMPLE_DATE])) {
						$errs[self::FIELD_EXAMPLE_DATE] = [];
					}
					$errs[self::FIELD_EXAMPLE_DATE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_EXAMPLE_DATE_TIME])) {
			$v = $this->getExampleDateTime();
			foreach ($validationRules[self::FIELD_EXAMPLE_DATE_TIME] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_EXAMPLE_DATE_TIME,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_EXAMPLE_DATE_TIME])) {
						$errs[self::FIELD_EXAMPLE_DATE_TIME] = [];
					}
					$errs[self::FIELD_EXAMPLE_DATE_TIME][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_EXAMPLE_TIME])) {
			$v = $this->getExampleTime();
			foreach ($validationRules[self::FIELD_EXAMPLE_TIME] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_EXAMPLE_TIME,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_EXAMPLE_TIME])) {
						$errs[self::FIELD_EXAMPLE_TIME] = [];
					}
					$errs[self::FIELD_EXAMPLE_TIME][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_EXAMPLE_CODE])) {
			$v = $this->getExampleCode();
			foreach ($validationRules[self::FIELD_EXAMPLE_CODE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_EXAMPLE_CODE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_EXAMPLE_CODE])) {
						$errs[self::FIELD_EXAMPLE_CODE] = [];
					}
					$errs[self::FIELD_EXAMPLE_CODE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_EXAMPLE_OID])) {
			$v = $this->getExampleOid();
			foreach ($validationRules[self::FIELD_EXAMPLE_OID] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_EXAMPLE_OID,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_EXAMPLE_OID])) {
						$errs[self::FIELD_EXAMPLE_OID] = [];
					}
					$errs[self::FIELD_EXAMPLE_OID][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_EXAMPLE_UUID])) {
			$v = $this->getExampleUuid();
			foreach ($validationRules[self::FIELD_EXAMPLE_UUID] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_EXAMPLE_UUID,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_EXAMPLE_UUID])) {
						$errs[self::FIELD_EXAMPLE_UUID] = [];
					}
					$errs[self::FIELD_EXAMPLE_UUID][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_EXAMPLE_ID])) {
			$v = $this->getExampleId();
			foreach ($validationRules[self::FIELD_EXAMPLE_ID] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_EXAMPLE_ID,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_EXAMPLE_ID])) {
						$errs[self::FIELD_EXAMPLE_ID] = [];
					}
					$errs[self::FIELD_EXAMPLE_ID][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_EXAMPLE_UNSIGNED_INT])) {
			$v = $this->getExampleUnsignedInt();
			foreach ($validationRules[self::FIELD_EXAMPLE_UNSIGNED_INT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_EXAMPLE_UNSIGNED_INT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_EXAMPLE_UNSIGNED_INT])) {
						$errs[self::FIELD_EXAMPLE_UNSIGNED_INT] = [];
					}
					$errs[self::FIELD_EXAMPLE_UNSIGNED_INT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_EXAMPLE_POSITIVE_INT])) {
			$v = $this->getExamplePositiveInt();
			foreach ($validationRules[self::FIELD_EXAMPLE_POSITIVE_INT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_EXAMPLE_POSITIVE_INT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_EXAMPLE_POSITIVE_INT])) {
						$errs[self::FIELD_EXAMPLE_POSITIVE_INT] = [];
					}
					$errs[self::FIELD_EXAMPLE_POSITIVE_INT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_EXAMPLE_MARKDOWN])) {
			$v = $this->getExampleMarkdown();
			foreach ($validationRules[self::FIELD_EXAMPLE_MARKDOWN] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_EXAMPLE_MARKDOWN,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_EXAMPLE_MARKDOWN])) {
						$errs[self::FIELD_EXAMPLE_MARKDOWN] = [];
					}
					$errs[self::FIELD_EXAMPLE_MARKDOWN][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_EXAMPLE_ANNOTATION])) {
			$v = $this->getExampleAnnotation();
			foreach ($validationRules[self::FIELD_EXAMPLE_ANNOTATION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_EXAMPLE_ANNOTATION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_EXAMPLE_ANNOTATION])) {
						$errs[self::FIELD_EXAMPLE_ANNOTATION] = [];
					}
					$errs[self::FIELD_EXAMPLE_ANNOTATION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_EXAMPLE_ATTACHMENT])) {
			$v = $this->getExampleAttachment();
			foreach ($validationRules[self::FIELD_EXAMPLE_ATTACHMENT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_EXAMPLE_ATTACHMENT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_EXAMPLE_ATTACHMENT])) {
						$errs[self::FIELD_EXAMPLE_ATTACHMENT] = [];
					}
					$errs[self::FIELD_EXAMPLE_ATTACHMENT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_EXAMPLE_IDENTIFIER])) {
			$v = $this->getExampleIdentifier();
			foreach ($validationRules[self::FIELD_EXAMPLE_IDENTIFIER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_EXAMPLE_IDENTIFIER,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_EXAMPLE_IDENTIFIER])) {
						$errs[self::FIELD_EXAMPLE_IDENTIFIER] = [];
					}
					$errs[self::FIELD_EXAMPLE_IDENTIFIER][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_EXAMPLE_CODEABLE_CONCEPT])) {
			$v = $this->getExampleCodeableConcept();
			foreach (
				$validationRules[self::FIELD_EXAMPLE_CODEABLE_CONCEPT]
				as $rule => $constraint
			) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_EXAMPLE_CODEABLE_CONCEPT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_EXAMPLE_CODEABLE_CONCEPT])) {
						$errs[self::FIELD_EXAMPLE_CODEABLE_CONCEPT] = [];
					}
					$errs[self::FIELD_EXAMPLE_CODEABLE_CONCEPT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_EXAMPLE_CODING])) {
			$v = $this->getExampleCoding();
			foreach ($validationRules[self::FIELD_EXAMPLE_CODING] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_EXAMPLE_CODING,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_EXAMPLE_CODING])) {
						$errs[self::FIELD_EXAMPLE_CODING] = [];
					}
					$errs[self::FIELD_EXAMPLE_CODING][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_EXAMPLE_QUANTITY])) {
			$v = $this->getExampleQuantity();
			foreach ($validationRules[self::FIELD_EXAMPLE_QUANTITY] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_EXAMPLE_QUANTITY,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_EXAMPLE_QUANTITY])) {
						$errs[self::FIELD_EXAMPLE_QUANTITY] = [];
					}
					$errs[self::FIELD_EXAMPLE_QUANTITY][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_EXAMPLE_RANGE])) {
			$v = $this->getExampleRange();
			foreach ($validationRules[self::FIELD_EXAMPLE_RANGE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_EXAMPLE_RANGE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_EXAMPLE_RANGE])) {
						$errs[self::FIELD_EXAMPLE_RANGE] = [];
					}
					$errs[self::FIELD_EXAMPLE_RANGE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_EXAMPLE_PERIOD])) {
			$v = $this->getExamplePeriod();
			foreach ($validationRules[self::FIELD_EXAMPLE_PERIOD] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_EXAMPLE_PERIOD,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_EXAMPLE_PERIOD])) {
						$errs[self::FIELD_EXAMPLE_PERIOD] = [];
					}
					$errs[self::FIELD_EXAMPLE_PERIOD][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_EXAMPLE_RATIO])) {
			$v = $this->getExampleRatio();
			foreach ($validationRules[self::FIELD_EXAMPLE_RATIO] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_EXAMPLE_RATIO,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_EXAMPLE_RATIO])) {
						$errs[self::FIELD_EXAMPLE_RATIO] = [];
					}
					$errs[self::FIELD_EXAMPLE_RATIO][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_EXAMPLE_REFERENCE])) {
			$v = $this->getExampleReference();
			foreach ($validationRules[self::FIELD_EXAMPLE_REFERENCE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_EXAMPLE_REFERENCE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_EXAMPLE_REFERENCE])) {
						$errs[self::FIELD_EXAMPLE_REFERENCE] = [];
					}
					$errs[self::FIELD_EXAMPLE_REFERENCE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_EXAMPLE_SAMPLED_DATA])) {
			$v = $this->getExampleSampledData();
			foreach ($validationRules[self::FIELD_EXAMPLE_SAMPLED_DATA] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_EXAMPLE_SAMPLED_DATA,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_EXAMPLE_SAMPLED_DATA])) {
						$errs[self::FIELD_EXAMPLE_SAMPLED_DATA] = [];
					}
					$errs[self::FIELD_EXAMPLE_SAMPLED_DATA][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_EXAMPLE_SIGNATURE])) {
			$v = $this->getExampleSignature();
			foreach ($validationRules[self::FIELD_EXAMPLE_SIGNATURE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_EXAMPLE_SIGNATURE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_EXAMPLE_SIGNATURE])) {
						$errs[self::FIELD_EXAMPLE_SIGNATURE] = [];
					}
					$errs[self::FIELD_EXAMPLE_SIGNATURE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_EXAMPLE_HUMAN_NAME])) {
			$v = $this->getExampleHumanName();
			foreach ($validationRules[self::FIELD_EXAMPLE_HUMAN_NAME] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_EXAMPLE_HUMAN_NAME,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_EXAMPLE_HUMAN_NAME])) {
						$errs[self::FIELD_EXAMPLE_HUMAN_NAME] = [];
					}
					$errs[self::FIELD_EXAMPLE_HUMAN_NAME][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_EXAMPLE_ADDRESS])) {
			$v = $this->getExampleAddress();
			foreach ($validationRules[self::FIELD_EXAMPLE_ADDRESS] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_EXAMPLE_ADDRESS,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_EXAMPLE_ADDRESS])) {
						$errs[self::FIELD_EXAMPLE_ADDRESS] = [];
					}
					$errs[self::FIELD_EXAMPLE_ADDRESS][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_EXAMPLE_CONTACT_POINT])) {
			$v = $this->getExampleContactPoint();
			foreach ($validationRules[self::FIELD_EXAMPLE_CONTACT_POINT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_EXAMPLE_CONTACT_POINT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_EXAMPLE_CONTACT_POINT])) {
						$errs[self::FIELD_EXAMPLE_CONTACT_POINT] = [];
					}
					$errs[self::FIELD_EXAMPLE_CONTACT_POINT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_EXAMPLE_TIMING])) {
			$v = $this->getExampleTiming();
			foreach ($validationRules[self::FIELD_EXAMPLE_TIMING] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_EXAMPLE_TIMING,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_EXAMPLE_TIMING])) {
						$errs[self::FIELD_EXAMPLE_TIMING] = [];
					}
					$errs[self::FIELD_EXAMPLE_TIMING][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_EXAMPLE_META])) {
			$v = $this->getExampleMeta();
			foreach ($validationRules[self::FIELD_EXAMPLE_META] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_EXAMPLE_META,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_EXAMPLE_META])) {
						$errs[self::FIELD_EXAMPLE_META] = [];
					}
					$errs[self::FIELD_EXAMPLE_META][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MIN_VALUE_BOOLEAN])) {
			$v = $this->getMinValueBoolean();
			foreach ($validationRules[self::FIELD_MIN_VALUE_BOOLEAN] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MIN_VALUE_BOOLEAN,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MIN_VALUE_BOOLEAN])) {
						$errs[self::FIELD_MIN_VALUE_BOOLEAN] = [];
					}
					$errs[self::FIELD_MIN_VALUE_BOOLEAN][$rule] = $err;
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
		if (isset($validationRules[self::FIELD_MIN_VALUE_BASE_64BINARY])) {
			$v = $this->getMinValueBase64Binary();
			foreach (
				$validationRules[self::FIELD_MIN_VALUE_BASE_64BINARY]
				as $rule => $constraint
			) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MIN_VALUE_BASE_64BINARY,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MIN_VALUE_BASE_64BINARY])) {
						$errs[self::FIELD_MIN_VALUE_BASE_64BINARY] = [];
					}
					$errs[self::FIELD_MIN_VALUE_BASE_64BINARY][$rule] = $err;
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
		if (isset($validationRules[self::FIELD_MIN_VALUE_STRING])) {
			$v = $this->getMinValueString();
			foreach ($validationRules[self::FIELD_MIN_VALUE_STRING] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MIN_VALUE_STRING,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MIN_VALUE_STRING])) {
						$errs[self::FIELD_MIN_VALUE_STRING] = [];
					}
					$errs[self::FIELD_MIN_VALUE_STRING][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MIN_VALUE_URI])) {
			$v = $this->getMinValueUri();
			foreach ($validationRules[self::FIELD_MIN_VALUE_URI] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MIN_VALUE_URI,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MIN_VALUE_URI])) {
						$errs[self::FIELD_MIN_VALUE_URI] = [];
					}
					$errs[self::FIELD_MIN_VALUE_URI][$rule] = $err;
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
		if (isset($validationRules[self::FIELD_MIN_VALUE_CODE])) {
			$v = $this->getMinValueCode();
			foreach ($validationRules[self::FIELD_MIN_VALUE_CODE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MIN_VALUE_CODE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MIN_VALUE_CODE])) {
						$errs[self::FIELD_MIN_VALUE_CODE] = [];
					}
					$errs[self::FIELD_MIN_VALUE_CODE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MIN_VALUE_OID])) {
			$v = $this->getMinValueOid();
			foreach ($validationRules[self::FIELD_MIN_VALUE_OID] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MIN_VALUE_OID,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MIN_VALUE_OID])) {
						$errs[self::FIELD_MIN_VALUE_OID] = [];
					}
					$errs[self::FIELD_MIN_VALUE_OID][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MIN_VALUE_UUID])) {
			$v = $this->getMinValueUuid();
			foreach ($validationRules[self::FIELD_MIN_VALUE_UUID] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MIN_VALUE_UUID,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MIN_VALUE_UUID])) {
						$errs[self::FIELD_MIN_VALUE_UUID] = [];
					}
					$errs[self::FIELD_MIN_VALUE_UUID][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MIN_VALUE_ID])) {
			$v = $this->getMinValueId();
			foreach ($validationRules[self::FIELD_MIN_VALUE_ID] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MIN_VALUE_ID,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MIN_VALUE_ID])) {
						$errs[self::FIELD_MIN_VALUE_ID] = [];
					}
					$errs[self::FIELD_MIN_VALUE_ID][$rule] = $err;
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
		if (isset($validationRules[self::FIELD_MIN_VALUE_MARKDOWN])) {
			$v = $this->getMinValueMarkdown();
			foreach ($validationRules[self::FIELD_MIN_VALUE_MARKDOWN] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MIN_VALUE_MARKDOWN,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MIN_VALUE_MARKDOWN])) {
						$errs[self::FIELD_MIN_VALUE_MARKDOWN] = [];
					}
					$errs[self::FIELD_MIN_VALUE_MARKDOWN][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MIN_VALUE_ANNOTATION])) {
			$v = $this->getMinValueAnnotation();
			foreach ($validationRules[self::FIELD_MIN_VALUE_ANNOTATION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MIN_VALUE_ANNOTATION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MIN_VALUE_ANNOTATION])) {
						$errs[self::FIELD_MIN_VALUE_ANNOTATION] = [];
					}
					$errs[self::FIELD_MIN_VALUE_ANNOTATION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MIN_VALUE_ATTACHMENT])) {
			$v = $this->getMinValueAttachment();
			foreach ($validationRules[self::FIELD_MIN_VALUE_ATTACHMENT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MIN_VALUE_ATTACHMENT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MIN_VALUE_ATTACHMENT])) {
						$errs[self::FIELD_MIN_VALUE_ATTACHMENT] = [];
					}
					$errs[self::FIELD_MIN_VALUE_ATTACHMENT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MIN_VALUE_IDENTIFIER])) {
			$v = $this->getMinValueIdentifier();
			foreach ($validationRules[self::FIELD_MIN_VALUE_IDENTIFIER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MIN_VALUE_IDENTIFIER,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MIN_VALUE_IDENTIFIER])) {
						$errs[self::FIELD_MIN_VALUE_IDENTIFIER] = [];
					}
					$errs[self::FIELD_MIN_VALUE_IDENTIFIER][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MIN_VALUE_CODEABLE_CONCEPT])) {
			$v = $this->getMinValueCodeableConcept();
			foreach (
				$validationRules[self::FIELD_MIN_VALUE_CODEABLE_CONCEPT]
				as $rule => $constraint
			) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MIN_VALUE_CODEABLE_CONCEPT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MIN_VALUE_CODEABLE_CONCEPT])) {
						$errs[self::FIELD_MIN_VALUE_CODEABLE_CONCEPT] = [];
					}
					$errs[self::FIELD_MIN_VALUE_CODEABLE_CONCEPT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MIN_VALUE_CODING])) {
			$v = $this->getMinValueCoding();
			foreach ($validationRules[self::FIELD_MIN_VALUE_CODING] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MIN_VALUE_CODING,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MIN_VALUE_CODING])) {
						$errs[self::FIELD_MIN_VALUE_CODING] = [];
					}
					$errs[self::FIELD_MIN_VALUE_CODING][$rule] = $err;
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
		if (isset($validationRules[self::FIELD_MIN_VALUE_RANGE])) {
			$v = $this->getMinValueRange();
			foreach ($validationRules[self::FIELD_MIN_VALUE_RANGE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MIN_VALUE_RANGE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MIN_VALUE_RANGE])) {
						$errs[self::FIELD_MIN_VALUE_RANGE] = [];
					}
					$errs[self::FIELD_MIN_VALUE_RANGE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MIN_VALUE_PERIOD])) {
			$v = $this->getMinValuePeriod();
			foreach ($validationRules[self::FIELD_MIN_VALUE_PERIOD] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MIN_VALUE_PERIOD,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MIN_VALUE_PERIOD])) {
						$errs[self::FIELD_MIN_VALUE_PERIOD] = [];
					}
					$errs[self::FIELD_MIN_VALUE_PERIOD][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MIN_VALUE_RATIO])) {
			$v = $this->getMinValueRatio();
			foreach ($validationRules[self::FIELD_MIN_VALUE_RATIO] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MIN_VALUE_RATIO,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MIN_VALUE_RATIO])) {
						$errs[self::FIELD_MIN_VALUE_RATIO] = [];
					}
					$errs[self::FIELD_MIN_VALUE_RATIO][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MIN_VALUE_REFERENCE])) {
			$v = $this->getMinValueReference();
			foreach ($validationRules[self::FIELD_MIN_VALUE_REFERENCE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MIN_VALUE_REFERENCE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MIN_VALUE_REFERENCE])) {
						$errs[self::FIELD_MIN_VALUE_REFERENCE] = [];
					}
					$errs[self::FIELD_MIN_VALUE_REFERENCE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MIN_VALUE_SAMPLED_DATA])) {
			$v = $this->getMinValueSampledData();
			foreach ($validationRules[self::FIELD_MIN_VALUE_SAMPLED_DATA] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MIN_VALUE_SAMPLED_DATA,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MIN_VALUE_SAMPLED_DATA])) {
						$errs[self::FIELD_MIN_VALUE_SAMPLED_DATA] = [];
					}
					$errs[self::FIELD_MIN_VALUE_SAMPLED_DATA][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MIN_VALUE_SIGNATURE])) {
			$v = $this->getMinValueSignature();
			foreach ($validationRules[self::FIELD_MIN_VALUE_SIGNATURE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MIN_VALUE_SIGNATURE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MIN_VALUE_SIGNATURE])) {
						$errs[self::FIELD_MIN_VALUE_SIGNATURE] = [];
					}
					$errs[self::FIELD_MIN_VALUE_SIGNATURE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MIN_VALUE_HUMAN_NAME])) {
			$v = $this->getMinValueHumanName();
			foreach ($validationRules[self::FIELD_MIN_VALUE_HUMAN_NAME] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MIN_VALUE_HUMAN_NAME,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MIN_VALUE_HUMAN_NAME])) {
						$errs[self::FIELD_MIN_VALUE_HUMAN_NAME] = [];
					}
					$errs[self::FIELD_MIN_VALUE_HUMAN_NAME][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MIN_VALUE_ADDRESS])) {
			$v = $this->getMinValueAddress();
			foreach ($validationRules[self::FIELD_MIN_VALUE_ADDRESS] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MIN_VALUE_ADDRESS,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MIN_VALUE_ADDRESS])) {
						$errs[self::FIELD_MIN_VALUE_ADDRESS] = [];
					}
					$errs[self::FIELD_MIN_VALUE_ADDRESS][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MIN_VALUE_CONTACT_POINT])) {
			$v = $this->getMinValueContactPoint();
			foreach (
				$validationRules[self::FIELD_MIN_VALUE_CONTACT_POINT]
				as $rule => $constraint
			) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MIN_VALUE_CONTACT_POINT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MIN_VALUE_CONTACT_POINT])) {
						$errs[self::FIELD_MIN_VALUE_CONTACT_POINT] = [];
					}
					$errs[self::FIELD_MIN_VALUE_CONTACT_POINT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MIN_VALUE_TIMING])) {
			$v = $this->getMinValueTiming();
			foreach ($validationRules[self::FIELD_MIN_VALUE_TIMING] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MIN_VALUE_TIMING,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MIN_VALUE_TIMING])) {
						$errs[self::FIELD_MIN_VALUE_TIMING] = [];
					}
					$errs[self::FIELD_MIN_VALUE_TIMING][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MIN_VALUE_META])) {
			$v = $this->getMinValueMeta();
			foreach ($validationRules[self::FIELD_MIN_VALUE_META] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MIN_VALUE_META,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MIN_VALUE_META])) {
						$errs[self::FIELD_MIN_VALUE_META] = [];
					}
					$errs[self::FIELD_MIN_VALUE_META][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MAX_VALUE_BOOLEAN])) {
			$v = $this->getMaxValueBoolean();
			foreach ($validationRules[self::FIELD_MAX_VALUE_BOOLEAN] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MAX_VALUE_BOOLEAN,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MAX_VALUE_BOOLEAN])) {
						$errs[self::FIELD_MAX_VALUE_BOOLEAN] = [];
					}
					$errs[self::FIELD_MAX_VALUE_BOOLEAN][$rule] = $err;
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
		if (isset($validationRules[self::FIELD_MAX_VALUE_BASE_64BINARY])) {
			$v = $this->getMaxValueBase64Binary();
			foreach (
				$validationRules[self::FIELD_MAX_VALUE_BASE_64BINARY]
				as $rule => $constraint
			) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MAX_VALUE_BASE_64BINARY,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MAX_VALUE_BASE_64BINARY])) {
						$errs[self::FIELD_MAX_VALUE_BASE_64BINARY] = [];
					}
					$errs[self::FIELD_MAX_VALUE_BASE_64BINARY][$rule] = $err;
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
		if (isset($validationRules[self::FIELD_MAX_VALUE_STRING])) {
			$v = $this->getMaxValueString();
			foreach ($validationRules[self::FIELD_MAX_VALUE_STRING] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MAX_VALUE_STRING,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MAX_VALUE_STRING])) {
						$errs[self::FIELD_MAX_VALUE_STRING] = [];
					}
					$errs[self::FIELD_MAX_VALUE_STRING][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MAX_VALUE_URI])) {
			$v = $this->getMaxValueUri();
			foreach ($validationRules[self::FIELD_MAX_VALUE_URI] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MAX_VALUE_URI,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MAX_VALUE_URI])) {
						$errs[self::FIELD_MAX_VALUE_URI] = [];
					}
					$errs[self::FIELD_MAX_VALUE_URI][$rule] = $err;
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
		if (isset($validationRules[self::FIELD_MAX_VALUE_CODE])) {
			$v = $this->getMaxValueCode();
			foreach ($validationRules[self::FIELD_MAX_VALUE_CODE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MAX_VALUE_CODE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MAX_VALUE_CODE])) {
						$errs[self::FIELD_MAX_VALUE_CODE] = [];
					}
					$errs[self::FIELD_MAX_VALUE_CODE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MAX_VALUE_OID])) {
			$v = $this->getMaxValueOid();
			foreach ($validationRules[self::FIELD_MAX_VALUE_OID] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MAX_VALUE_OID,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MAX_VALUE_OID])) {
						$errs[self::FIELD_MAX_VALUE_OID] = [];
					}
					$errs[self::FIELD_MAX_VALUE_OID][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MAX_VALUE_UUID])) {
			$v = $this->getMaxValueUuid();
			foreach ($validationRules[self::FIELD_MAX_VALUE_UUID] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MAX_VALUE_UUID,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MAX_VALUE_UUID])) {
						$errs[self::FIELD_MAX_VALUE_UUID] = [];
					}
					$errs[self::FIELD_MAX_VALUE_UUID][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MAX_VALUE_ID])) {
			$v = $this->getMaxValueId();
			foreach ($validationRules[self::FIELD_MAX_VALUE_ID] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MAX_VALUE_ID,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MAX_VALUE_ID])) {
						$errs[self::FIELD_MAX_VALUE_ID] = [];
					}
					$errs[self::FIELD_MAX_VALUE_ID][$rule] = $err;
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
		if (isset($validationRules[self::FIELD_MAX_VALUE_MARKDOWN])) {
			$v = $this->getMaxValueMarkdown();
			foreach ($validationRules[self::FIELD_MAX_VALUE_MARKDOWN] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MAX_VALUE_MARKDOWN,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MAX_VALUE_MARKDOWN])) {
						$errs[self::FIELD_MAX_VALUE_MARKDOWN] = [];
					}
					$errs[self::FIELD_MAX_VALUE_MARKDOWN][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MAX_VALUE_ANNOTATION])) {
			$v = $this->getMaxValueAnnotation();
			foreach ($validationRules[self::FIELD_MAX_VALUE_ANNOTATION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MAX_VALUE_ANNOTATION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MAX_VALUE_ANNOTATION])) {
						$errs[self::FIELD_MAX_VALUE_ANNOTATION] = [];
					}
					$errs[self::FIELD_MAX_VALUE_ANNOTATION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MAX_VALUE_ATTACHMENT])) {
			$v = $this->getMaxValueAttachment();
			foreach ($validationRules[self::FIELD_MAX_VALUE_ATTACHMENT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MAX_VALUE_ATTACHMENT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MAX_VALUE_ATTACHMENT])) {
						$errs[self::FIELD_MAX_VALUE_ATTACHMENT] = [];
					}
					$errs[self::FIELD_MAX_VALUE_ATTACHMENT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MAX_VALUE_IDENTIFIER])) {
			$v = $this->getMaxValueIdentifier();
			foreach ($validationRules[self::FIELD_MAX_VALUE_IDENTIFIER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MAX_VALUE_IDENTIFIER,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MAX_VALUE_IDENTIFIER])) {
						$errs[self::FIELD_MAX_VALUE_IDENTIFIER] = [];
					}
					$errs[self::FIELD_MAX_VALUE_IDENTIFIER][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MAX_VALUE_CODEABLE_CONCEPT])) {
			$v = $this->getMaxValueCodeableConcept();
			foreach (
				$validationRules[self::FIELD_MAX_VALUE_CODEABLE_CONCEPT]
				as $rule => $constraint
			) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MAX_VALUE_CODEABLE_CONCEPT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MAX_VALUE_CODEABLE_CONCEPT])) {
						$errs[self::FIELD_MAX_VALUE_CODEABLE_CONCEPT] = [];
					}
					$errs[self::FIELD_MAX_VALUE_CODEABLE_CONCEPT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MAX_VALUE_CODING])) {
			$v = $this->getMaxValueCoding();
			foreach ($validationRules[self::FIELD_MAX_VALUE_CODING] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MAX_VALUE_CODING,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MAX_VALUE_CODING])) {
						$errs[self::FIELD_MAX_VALUE_CODING] = [];
					}
					$errs[self::FIELD_MAX_VALUE_CODING][$rule] = $err;
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
		if (isset($validationRules[self::FIELD_MAX_VALUE_RANGE])) {
			$v = $this->getMaxValueRange();
			foreach ($validationRules[self::FIELD_MAX_VALUE_RANGE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MAX_VALUE_RANGE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MAX_VALUE_RANGE])) {
						$errs[self::FIELD_MAX_VALUE_RANGE] = [];
					}
					$errs[self::FIELD_MAX_VALUE_RANGE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MAX_VALUE_PERIOD])) {
			$v = $this->getMaxValuePeriod();
			foreach ($validationRules[self::FIELD_MAX_VALUE_PERIOD] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MAX_VALUE_PERIOD,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MAX_VALUE_PERIOD])) {
						$errs[self::FIELD_MAX_VALUE_PERIOD] = [];
					}
					$errs[self::FIELD_MAX_VALUE_PERIOD][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MAX_VALUE_RATIO])) {
			$v = $this->getMaxValueRatio();
			foreach ($validationRules[self::FIELD_MAX_VALUE_RATIO] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MAX_VALUE_RATIO,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MAX_VALUE_RATIO])) {
						$errs[self::FIELD_MAX_VALUE_RATIO] = [];
					}
					$errs[self::FIELD_MAX_VALUE_RATIO][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MAX_VALUE_REFERENCE])) {
			$v = $this->getMaxValueReference();
			foreach ($validationRules[self::FIELD_MAX_VALUE_REFERENCE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MAX_VALUE_REFERENCE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MAX_VALUE_REFERENCE])) {
						$errs[self::FIELD_MAX_VALUE_REFERENCE] = [];
					}
					$errs[self::FIELD_MAX_VALUE_REFERENCE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MAX_VALUE_SAMPLED_DATA])) {
			$v = $this->getMaxValueSampledData();
			foreach ($validationRules[self::FIELD_MAX_VALUE_SAMPLED_DATA] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MAX_VALUE_SAMPLED_DATA,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MAX_VALUE_SAMPLED_DATA])) {
						$errs[self::FIELD_MAX_VALUE_SAMPLED_DATA] = [];
					}
					$errs[self::FIELD_MAX_VALUE_SAMPLED_DATA][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MAX_VALUE_SIGNATURE])) {
			$v = $this->getMaxValueSignature();
			foreach ($validationRules[self::FIELD_MAX_VALUE_SIGNATURE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MAX_VALUE_SIGNATURE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MAX_VALUE_SIGNATURE])) {
						$errs[self::FIELD_MAX_VALUE_SIGNATURE] = [];
					}
					$errs[self::FIELD_MAX_VALUE_SIGNATURE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MAX_VALUE_HUMAN_NAME])) {
			$v = $this->getMaxValueHumanName();
			foreach ($validationRules[self::FIELD_MAX_VALUE_HUMAN_NAME] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MAX_VALUE_HUMAN_NAME,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MAX_VALUE_HUMAN_NAME])) {
						$errs[self::FIELD_MAX_VALUE_HUMAN_NAME] = [];
					}
					$errs[self::FIELD_MAX_VALUE_HUMAN_NAME][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MAX_VALUE_ADDRESS])) {
			$v = $this->getMaxValueAddress();
			foreach ($validationRules[self::FIELD_MAX_VALUE_ADDRESS] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MAX_VALUE_ADDRESS,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MAX_VALUE_ADDRESS])) {
						$errs[self::FIELD_MAX_VALUE_ADDRESS] = [];
					}
					$errs[self::FIELD_MAX_VALUE_ADDRESS][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MAX_VALUE_CONTACT_POINT])) {
			$v = $this->getMaxValueContactPoint();
			foreach (
				$validationRules[self::FIELD_MAX_VALUE_CONTACT_POINT]
				as $rule => $constraint
			) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MAX_VALUE_CONTACT_POINT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MAX_VALUE_CONTACT_POINT])) {
						$errs[self::FIELD_MAX_VALUE_CONTACT_POINT] = [];
					}
					$errs[self::FIELD_MAX_VALUE_CONTACT_POINT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MAX_VALUE_TIMING])) {
			$v = $this->getMaxValueTiming();
			foreach ($validationRules[self::FIELD_MAX_VALUE_TIMING] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MAX_VALUE_TIMING,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MAX_VALUE_TIMING])) {
						$errs[self::FIELD_MAX_VALUE_TIMING] = [];
					}
					$errs[self::FIELD_MAX_VALUE_TIMING][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MAX_VALUE_META])) {
			$v = $this->getMaxValueMeta();
			foreach ($validationRules[self::FIELD_MAX_VALUE_META] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION,
					self::FIELD_MAX_VALUE_META,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MAX_VALUE_META])) {
						$errs[self::FIELD_MAX_VALUE_META] = [];
					}
					$errs[self::FIELD_MAX_VALUE_META][$rule] = $err;
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRElementDefinition $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRElementDefinition
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
					'FHIRElementDefinition::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRElementDefinition or null, %s seen.',
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
			} elseif (self::FIELD_NAME === $n->nodeName) {
				$type->setName(FHIRString::xmlUnserialize($n));
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
			} elseif (self::FIELD_COMMENTS === $n->nodeName) {
				$type->setComments(FHIRMarkdown::xmlUnserialize($n));
			} elseif (self::FIELD_REQUIREMENTS === $n->nodeName) {
				$type->setRequirements(FHIRMarkdown::xmlUnserialize($n));
			} elseif (self::FIELD_ALIAS === $n->nodeName) {
				$type->addAlias(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_MIN === $n->nodeName) {
				$type->setMin(FHIRInteger::xmlUnserialize($n));
			} elseif (self::FIELD_MAX === $n->nodeName) {
				$type->setMax(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_BASE === $n->nodeName) {
				$type->setBase(FHIRElementDefinitionBase::xmlUnserialize($n));
			} elseif (self::FIELD_TYPE === $n->nodeName) {
				$type->addType(FHIRElementDefinitionType::xmlUnserialize($n));
			} elseif (self::FIELD_NAME_REFERENCE === $n->nodeName) {
				$type->setNameReference(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_BOOLEAN === $n->nodeName) {
				$type->setDefaultValueBoolean(FHIRBoolean::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_INTEGER === $n->nodeName) {
				$type->setDefaultValueInteger(FHIRInteger::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_DECIMAL === $n->nodeName) {
				$type->setDefaultValueDecimal(FHIRDecimal::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_BASE_64BINARY === $n->nodeName) {
				$type->setDefaultValueBase64Binary(FHIRBase64Binary::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_INSTANT === $n->nodeName) {
				$type->setDefaultValueInstant(FHIRInstant::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_STRING === $n->nodeName) {
				$type->setDefaultValueString(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_URI === $n->nodeName) {
				$type->setDefaultValueUri(FHIRUri::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_DATE === $n->nodeName) {
				$type->setDefaultValueDate(FHIRDate::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_DATE_TIME === $n->nodeName) {
				$type->setDefaultValueDateTime(FHIRDateTime::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_TIME === $n->nodeName) {
				$type->setDefaultValueTime(FHIRTime::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_CODE === $n->nodeName) {
				$type->setDefaultValueCode(FHIRCode::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_OID === $n->nodeName) {
				$type->setDefaultValueOid(FHIROid::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_UUID === $n->nodeName) {
				$type->setDefaultValueUuid(FHIRUuid::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_ID === $n->nodeName) {
				$type->setDefaultValueId(FHIRId::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_UNSIGNED_INT === $n->nodeName) {
				$type->setDefaultValueUnsignedInt(FHIRUnsignedInt::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_POSITIVE_INT === $n->nodeName) {
				$type->setDefaultValuePositiveInt(FHIRPositiveInt::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_MARKDOWN === $n->nodeName) {
				$type->setDefaultValueMarkdown(FHIRMarkdown::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_ANNOTATION === $n->nodeName) {
				$type->setDefaultValueAnnotation(FHIRAnnotation::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_ATTACHMENT === $n->nodeName) {
				$type->setDefaultValueAttachment(FHIRAttachment::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_IDENTIFIER === $n->nodeName) {
				$type->setDefaultValueIdentifier(FHIRIdentifier::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT === $n->nodeName) {
				$type->setDefaultValueCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_CODING === $n->nodeName) {
				$type->setDefaultValueCoding(FHIRCoding::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_QUANTITY === $n->nodeName) {
				$type->setDefaultValueQuantity(FHIRQuantity::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_RANGE === $n->nodeName) {
				$type->setDefaultValueRange(FHIRRange::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_PERIOD === $n->nodeName) {
				$type->setDefaultValuePeriod(FHIRPeriod::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_RATIO === $n->nodeName) {
				$type->setDefaultValueRatio(FHIRRatio::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_REFERENCE === $n->nodeName) {
				$type->setDefaultValueReference(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_SAMPLED_DATA === $n->nodeName) {
				$type->setDefaultValueSampledData(FHIRSampledData::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_SIGNATURE === $n->nodeName) {
				$type->setDefaultValueSignature(FHIRSignature::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_HUMAN_NAME === $n->nodeName) {
				$type->setDefaultValueHumanName(FHIRHumanName::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_ADDRESS === $n->nodeName) {
				$type->setDefaultValueAddress(FHIRAddress::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_CONTACT_POINT === $n->nodeName) {
				$type->setDefaultValueContactPoint(FHIRContactPoint::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_TIMING === $n->nodeName) {
				$type->setDefaultValueTiming(FHIRTiming::xmlUnserialize($n));
			} elseif (self::FIELD_DEFAULT_VALUE_META === $n->nodeName) {
				$type->setDefaultValueMeta(FHIRMeta::xmlUnserialize($n));
			} elseif (self::FIELD_MEANING_WHEN_MISSING === $n->nodeName) {
				$type->setMeaningWhenMissing(FHIRMarkdown::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_BOOLEAN === $n->nodeName) {
				$type->setFixedBoolean(FHIRBoolean::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_INTEGER === $n->nodeName) {
				$type->setFixedInteger(FHIRInteger::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_DECIMAL === $n->nodeName) {
				$type->setFixedDecimal(FHIRDecimal::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_BASE_64BINARY === $n->nodeName) {
				$type->setFixedBase64Binary(FHIRBase64Binary::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_INSTANT === $n->nodeName) {
				$type->setFixedInstant(FHIRInstant::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_STRING === $n->nodeName) {
				$type->setFixedString(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_URI === $n->nodeName) {
				$type->setFixedUri(FHIRUri::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_DATE === $n->nodeName) {
				$type->setFixedDate(FHIRDate::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_DATE_TIME === $n->nodeName) {
				$type->setFixedDateTime(FHIRDateTime::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_TIME === $n->nodeName) {
				$type->setFixedTime(FHIRTime::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_CODE === $n->nodeName) {
				$type->setFixedCode(FHIRCode::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_OID === $n->nodeName) {
				$type->setFixedOid(FHIROid::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_UUID === $n->nodeName) {
				$type->setFixedUuid(FHIRUuid::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_ID === $n->nodeName) {
				$type->setFixedId(FHIRId::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_UNSIGNED_INT === $n->nodeName) {
				$type->setFixedUnsignedInt(FHIRUnsignedInt::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_POSITIVE_INT === $n->nodeName) {
				$type->setFixedPositiveInt(FHIRPositiveInt::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_MARKDOWN === $n->nodeName) {
				$type->setFixedMarkdown(FHIRMarkdown::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_ANNOTATION === $n->nodeName) {
				$type->setFixedAnnotation(FHIRAnnotation::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_ATTACHMENT === $n->nodeName) {
				$type->setFixedAttachment(FHIRAttachment::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_IDENTIFIER === $n->nodeName) {
				$type->setFixedIdentifier(FHIRIdentifier::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_CODEABLE_CONCEPT === $n->nodeName) {
				$type->setFixedCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_CODING === $n->nodeName) {
				$type->setFixedCoding(FHIRCoding::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_QUANTITY === $n->nodeName) {
				$type->setFixedQuantity(FHIRQuantity::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_RANGE === $n->nodeName) {
				$type->setFixedRange(FHIRRange::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_PERIOD === $n->nodeName) {
				$type->setFixedPeriod(FHIRPeriod::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_RATIO === $n->nodeName) {
				$type->setFixedRatio(FHIRRatio::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_REFERENCE === $n->nodeName) {
				$type->setFixedReference(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_SAMPLED_DATA === $n->nodeName) {
				$type->setFixedSampledData(FHIRSampledData::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_SIGNATURE === $n->nodeName) {
				$type->setFixedSignature(FHIRSignature::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_HUMAN_NAME === $n->nodeName) {
				$type->setFixedHumanName(FHIRHumanName::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_ADDRESS === $n->nodeName) {
				$type->setFixedAddress(FHIRAddress::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_CONTACT_POINT === $n->nodeName) {
				$type->setFixedContactPoint(FHIRContactPoint::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_TIMING === $n->nodeName) {
				$type->setFixedTiming(FHIRTiming::xmlUnserialize($n));
			} elseif (self::FIELD_FIXED_META === $n->nodeName) {
				$type->setFixedMeta(FHIRMeta::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_BOOLEAN === $n->nodeName) {
				$type->setPatternBoolean(FHIRBoolean::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_INTEGER === $n->nodeName) {
				$type->setPatternInteger(FHIRInteger::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_DECIMAL === $n->nodeName) {
				$type->setPatternDecimal(FHIRDecimal::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_BASE_64BINARY === $n->nodeName) {
				$type->setPatternBase64Binary(FHIRBase64Binary::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_INSTANT === $n->nodeName) {
				$type->setPatternInstant(FHIRInstant::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_STRING === $n->nodeName) {
				$type->setPatternString(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_URI === $n->nodeName) {
				$type->setPatternUri(FHIRUri::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_DATE === $n->nodeName) {
				$type->setPatternDate(FHIRDate::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_DATE_TIME === $n->nodeName) {
				$type->setPatternDateTime(FHIRDateTime::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_TIME === $n->nodeName) {
				$type->setPatternTime(FHIRTime::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_CODE === $n->nodeName) {
				$type->setPatternCode(FHIRCode::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_OID === $n->nodeName) {
				$type->setPatternOid(FHIROid::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_UUID === $n->nodeName) {
				$type->setPatternUuid(FHIRUuid::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_ID === $n->nodeName) {
				$type->setPatternId(FHIRId::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_UNSIGNED_INT === $n->nodeName) {
				$type->setPatternUnsignedInt(FHIRUnsignedInt::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_POSITIVE_INT === $n->nodeName) {
				$type->setPatternPositiveInt(FHIRPositiveInt::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_MARKDOWN === $n->nodeName) {
				$type->setPatternMarkdown(FHIRMarkdown::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_ANNOTATION === $n->nodeName) {
				$type->setPatternAnnotation(FHIRAnnotation::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_ATTACHMENT === $n->nodeName) {
				$type->setPatternAttachment(FHIRAttachment::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_IDENTIFIER === $n->nodeName) {
				$type->setPatternIdentifier(FHIRIdentifier::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_CODEABLE_CONCEPT === $n->nodeName) {
				$type->setPatternCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_CODING === $n->nodeName) {
				$type->setPatternCoding(FHIRCoding::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_QUANTITY === $n->nodeName) {
				$type->setPatternQuantity(FHIRQuantity::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_RANGE === $n->nodeName) {
				$type->setPatternRange(FHIRRange::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_PERIOD === $n->nodeName) {
				$type->setPatternPeriod(FHIRPeriod::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_RATIO === $n->nodeName) {
				$type->setPatternRatio(FHIRRatio::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_REFERENCE === $n->nodeName) {
				$type->setPatternReference(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_SAMPLED_DATA === $n->nodeName) {
				$type->setPatternSampledData(FHIRSampledData::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_SIGNATURE === $n->nodeName) {
				$type->setPatternSignature(FHIRSignature::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_HUMAN_NAME === $n->nodeName) {
				$type->setPatternHumanName(FHIRHumanName::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_ADDRESS === $n->nodeName) {
				$type->setPatternAddress(FHIRAddress::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_CONTACT_POINT === $n->nodeName) {
				$type->setPatternContactPoint(FHIRContactPoint::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_TIMING === $n->nodeName) {
				$type->setPatternTiming(FHIRTiming::xmlUnserialize($n));
			} elseif (self::FIELD_PATTERN_META === $n->nodeName) {
				$type->setPatternMeta(FHIRMeta::xmlUnserialize($n));
			} elseif (self::FIELD_EXAMPLE_BOOLEAN === $n->nodeName) {
				$type->setExampleBoolean(FHIRBoolean::xmlUnserialize($n));
			} elseif (self::FIELD_EXAMPLE_INTEGER === $n->nodeName) {
				$type->setExampleInteger(FHIRInteger::xmlUnserialize($n));
			} elseif (self::FIELD_EXAMPLE_DECIMAL === $n->nodeName) {
				$type->setExampleDecimal(FHIRDecimal::xmlUnserialize($n));
			} elseif (self::FIELD_EXAMPLE_BASE_64BINARY === $n->nodeName) {
				$type->setExampleBase64Binary(FHIRBase64Binary::xmlUnserialize($n));
			} elseif (self::FIELD_EXAMPLE_INSTANT === $n->nodeName) {
				$type->setExampleInstant(FHIRInstant::xmlUnserialize($n));
			} elseif (self::FIELD_EXAMPLE_STRING === $n->nodeName) {
				$type->setExampleString(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_EXAMPLE_URI === $n->nodeName) {
				$type->setExampleUri(FHIRUri::xmlUnserialize($n));
			} elseif (self::FIELD_EXAMPLE_DATE === $n->nodeName) {
				$type->setExampleDate(FHIRDate::xmlUnserialize($n));
			} elseif (self::FIELD_EXAMPLE_DATE_TIME === $n->nodeName) {
				$type->setExampleDateTime(FHIRDateTime::xmlUnserialize($n));
			} elseif (self::FIELD_EXAMPLE_TIME === $n->nodeName) {
				$type->setExampleTime(FHIRTime::xmlUnserialize($n));
			} elseif (self::FIELD_EXAMPLE_CODE === $n->nodeName) {
				$type->setExampleCode(FHIRCode::xmlUnserialize($n));
			} elseif (self::FIELD_EXAMPLE_OID === $n->nodeName) {
				$type->setExampleOid(FHIROid::xmlUnserialize($n));
			} elseif (self::FIELD_EXAMPLE_UUID === $n->nodeName) {
				$type->setExampleUuid(FHIRUuid::xmlUnserialize($n));
			} elseif (self::FIELD_EXAMPLE_ID === $n->nodeName) {
				$type->setExampleId(FHIRId::xmlUnserialize($n));
			} elseif (self::FIELD_EXAMPLE_UNSIGNED_INT === $n->nodeName) {
				$type->setExampleUnsignedInt(FHIRUnsignedInt::xmlUnserialize($n));
			} elseif (self::FIELD_EXAMPLE_POSITIVE_INT === $n->nodeName) {
				$type->setExamplePositiveInt(FHIRPositiveInt::xmlUnserialize($n));
			} elseif (self::FIELD_EXAMPLE_MARKDOWN === $n->nodeName) {
				$type->setExampleMarkdown(FHIRMarkdown::xmlUnserialize($n));
			} elseif (self::FIELD_EXAMPLE_ANNOTATION === $n->nodeName) {
				$type->setExampleAnnotation(FHIRAnnotation::xmlUnserialize($n));
			} elseif (self::FIELD_EXAMPLE_ATTACHMENT === $n->nodeName) {
				$type->setExampleAttachment(FHIRAttachment::xmlUnserialize($n));
			} elseif (self::FIELD_EXAMPLE_IDENTIFIER === $n->nodeName) {
				$type->setExampleIdentifier(FHIRIdentifier::xmlUnserialize($n));
			} elseif (self::FIELD_EXAMPLE_CODEABLE_CONCEPT === $n->nodeName) {
				$type->setExampleCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_EXAMPLE_CODING === $n->nodeName) {
				$type->setExampleCoding(FHIRCoding::xmlUnserialize($n));
			} elseif (self::FIELD_EXAMPLE_QUANTITY === $n->nodeName) {
				$type->setExampleQuantity(FHIRQuantity::xmlUnserialize($n));
			} elseif (self::FIELD_EXAMPLE_RANGE === $n->nodeName) {
				$type->setExampleRange(FHIRRange::xmlUnserialize($n));
			} elseif (self::FIELD_EXAMPLE_PERIOD === $n->nodeName) {
				$type->setExamplePeriod(FHIRPeriod::xmlUnserialize($n));
			} elseif (self::FIELD_EXAMPLE_RATIO === $n->nodeName) {
				$type->setExampleRatio(FHIRRatio::xmlUnserialize($n));
			} elseif (self::FIELD_EXAMPLE_REFERENCE === $n->nodeName) {
				$type->setExampleReference(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_EXAMPLE_SAMPLED_DATA === $n->nodeName) {
				$type->setExampleSampledData(FHIRSampledData::xmlUnserialize($n));
			} elseif (self::FIELD_EXAMPLE_SIGNATURE === $n->nodeName) {
				$type->setExampleSignature(FHIRSignature::xmlUnserialize($n));
			} elseif (self::FIELD_EXAMPLE_HUMAN_NAME === $n->nodeName) {
				$type->setExampleHumanName(FHIRHumanName::xmlUnserialize($n));
			} elseif (self::FIELD_EXAMPLE_ADDRESS === $n->nodeName) {
				$type->setExampleAddress(FHIRAddress::xmlUnserialize($n));
			} elseif (self::FIELD_EXAMPLE_CONTACT_POINT === $n->nodeName) {
				$type->setExampleContactPoint(FHIRContactPoint::xmlUnserialize($n));
			} elseif (self::FIELD_EXAMPLE_TIMING === $n->nodeName) {
				$type->setExampleTiming(FHIRTiming::xmlUnserialize($n));
			} elseif (self::FIELD_EXAMPLE_META === $n->nodeName) {
				$type->setExampleMeta(FHIRMeta::xmlUnserialize($n));
			} elseif (self::FIELD_MIN_VALUE_BOOLEAN === $n->nodeName) {
				$type->setMinValueBoolean(FHIRBoolean::xmlUnserialize($n));
			} elseif (self::FIELD_MIN_VALUE_INTEGER === $n->nodeName) {
				$type->setMinValueInteger(FHIRInteger::xmlUnserialize($n));
			} elseif (self::FIELD_MIN_VALUE_DECIMAL === $n->nodeName) {
				$type->setMinValueDecimal(FHIRDecimal::xmlUnserialize($n));
			} elseif (self::FIELD_MIN_VALUE_BASE_64BINARY === $n->nodeName) {
				$type->setMinValueBase64Binary(FHIRBase64Binary::xmlUnserialize($n));
			} elseif (self::FIELD_MIN_VALUE_INSTANT === $n->nodeName) {
				$type->setMinValueInstant(FHIRInstant::xmlUnserialize($n));
			} elseif (self::FIELD_MIN_VALUE_STRING === $n->nodeName) {
				$type->setMinValueString(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_MIN_VALUE_URI === $n->nodeName) {
				$type->setMinValueUri(FHIRUri::xmlUnserialize($n));
			} elseif (self::FIELD_MIN_VALUE_DATE === $n->nodeName) {
				$type->setMinValueDate(FHIRDate::xmlUnserialize($n));
			} elseif (self::FIELD_MIN_VALUE_DATE_TIME === $n->nodeName) {
				$type->setMinValueDateTime(FHIRDateTime::xmlUnserialize($n));
			} elseif (self::FIELD_MIN_VALUE_TIME === $n->nodeName) {
				$type->setMinValueTime(FHIRTime::xmlUnserialize($n));
			} elseif (self::FIELD_MIN_VALUE_CODE === $n->nodeName) {
				$type->setMinValueCode(FHIRCode::xmlUnserialize($n));
			} elseif (self::FIELD_MIN_VALUE_OID === $n->nodeName) {
				$type->setMinValueOid(FHIROid::xmlUnserialize($n));
			} elseif (self::FIELD_MIN_VALUE_UUID === $n->nodeName) {
				$type->setMinValueUuid(FHIRUuid::xmlUnserialize($n));
			} elseif (self::FIELD_MIN_VALUE_ID === $n->nodeName) {
				$type->setMinValueId(FHIRId::xmlUnserialize($n));
			} elseif (self::FIELD_MIN_VALUE_UNSIGNED_INT === $n->nodeName) {
				$type->setMinValueUnsignedInt(FHIRUnsignedInt::xmlUnserialize($n));
			} elseif (self::FIELD_MIN_VALUE_POSITIVE_INT === $n->nodeName) {
				$type->setMinValuePositiveInt(FHIRPositiveInt::xmlUnserialize($n));
			} elseif (self::FIELD_MIN_VALUE_MARKDOWN === $n->nodeName) {
				$type->setMinValueMarkdown(FHIRMarkdown::xmlUnserialize($n));
			} elseif (self::FIELD_MIN_VALUE_ANNOTATION === $n->nodeName) {
				$type->setMinValueAnnotation(FHIRAnnotation::xmlUnserialize($n));
			} elseif (self::FIELD_MIN_VALUE_ATTACHMENT === $n->nodeName) {
				$type->setMinValueAttachment(FHIRAttachment::xmlUnserialize($n));
			} elseif (self::FIELD_MIN_VALUE_IDENTIFIER === $n->nodeName) {
				$type->setMinValueIdentifier(FHIRIdentifier::xmlUnserialize($n));
			} elseif (self::FIELD_MIN_VALUE_CODEABLE_CONCEPT === $n->nodeName) {
				$type->setMinValueCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_MIN_VALUE_CODING === $n->nodeName) {
				$type->setMinValueCoding(FHIRCoding::xmlUnserialize($n));
			} elseif (self::FIELD_MIN_VALUE_QUANTITY === $n->nodeName) {
				$type->setMinValueQuantity(FHIRQuantity::xmlUnserialize($n));
			} elseif (self::FIELD_MIN_VALUE_RANGE === $n->nodeName) {
				$type->setMinValueRange(FHIRRange::xmlUnserialize($n));
			} elseif (self::FIELD_MIN_VALUE_PERIOD === $n->nodeName) {
				$type->setMinValuePeriod(FHIRPeriod::xmlUnserialize($n));
			} elseif (self::FIELD_MIN_VALUE_RATIO === $n->nodeName) {
				$type->setMinValueRatio(FHIRRatio::xmlUnserialize($n));
			} elseif (self::FIELD_MIN_VALUE_REFERENCE === $n->nodeName) {
				$type->setMinValueReference(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_MIN_VALUE_SAMPLED_DATA === $n->nodeName) {
				$type->setMinValueSampledData(FHIRSampledData::xmlUnserialize($n));
			} elseif (self::FIELD_MIN_VALUE_SIGNATURE === $n->nodeName) {
				$type->setMinValueSignature(FHIRSignature::xmlUnserialize($n));
			} elseif (self::FIELD_MIN_VALUE_HUMAN_NAME === $n->nodeName) {
				$type->setMinValueHumanName(FHIRHumanName::xmlUnserialize($n));
			} elseif (self::FIELD_MIN_VALUE_ADDRESS === $n->nodeName) {
				$type->setMinValueAddress(FHIRAddress::xmlUnserialize($n));
			} elseif (self::FIELD_MIN_VALUE_CONTACT_POINT === $n->nodeName) {
				$type->setMinValueContactPoint(FHIRContactPoint::xmlUnserialize($n));
			} elseif (self::FIELD_MIN_VALUE_TIMING === $n->nodeName) {
				$type->setMinValueTiming(FHIRTiming::xmlUnserialize($n));
			} elseif (self::FIELD_MIN_VALUE_META === $n->nodeName) {
				$type->setMinValueMeta(FHIRMeta::xmlUnserialize($n));
			} elseif (self::FIELD_MAX_VALUE_BOOLEAN === $n->nodeName) {
				$type->setMaxValueBoolean(FHIRBoolean::xmlUnserialize($n));
			} elseif (self::FIELD_MAX_VALUE_INTEGER === $n->nodeName) {
				$type->setMaxValueInteger(FHIRInteger::xmlUnserialize($n));
			} elseif (self::FIELD_MAX_VALUE_DECIMAL === $n->nodeName) {
				$type->setMaxValueDecimal(FHIRDecimal::xmlUnserialize($n));
			} elseif (self::FIELD_MAX_VALUE_BASE_64BINARY === $n->nodeName) {
				$type->setMaxValueBase64Binary(FHIRBase64Binary::xmlUnserialize($n));
			} elseif (self::FIELD_MAX_VALUE_INSTANT === $n->nodeName) {
				$type->setMaxValueInstant(FHIRInstant::xmlUnserialize($n));
			} elseif (self::FIELD_MAX_VALUE_STRING === $n->nodeName) {
				$type->setMaxValueString(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_MAX_VALUE_URI === $n->nodeName) {
				$type->setMaxValueUri(FHIRUri::xmlUnserialize($n));
			} elseif (self::FIELD_MAX_VALUE_DATE === $n->nodeName) {
				$type->setMaxValueDate(FHIRDate::xmlUnserialize($n));
			} elseif (self::FIELD_MAX_VALUE_DATE_TIME === $n->nodeName) {
				$type->setMaxValueDateTime(FHIRDateTime::xmlUnserialize($n));
			} elseif (self::FIELD_MAX_VALUE_TIME === $n->nodeName) {
				$type->setMaxValueTime(FHIRTime::xmlUnserialize($n));
			} elseif (self::FIELD_MAX_VALUE_CODE === $n->nodeName) {
				$type->setMaxValueCode(FHIRCode::xmlUnserialize($n));
			} elseif (self::FIELD_MAX_VALUE_OID === $n->nodeName) {
				$type->setMaxValueOid(FHIROid::xmlUnserialize($n));
			} elseif (self::FIELD_MAX_VALUE_UUID === $n->nodeName) {
				$type->setMaxValueUuid(FHIRUuid::xmlUnserialize($n));
			} elseif (self::FIELD_MAX_VALUE_ID === $n->nodeName) {
				$type->setMaxValueId(FHIRId::xmlUnserialize($n));
			} elseif (self::FIELD_MAX_VALUE_UNSIGNED_INT === $n->nodeName) {
				$type->setMaxValueUnsignedInt(FHIRUnsignedInt::xmlUnserialize($n));
			} elseif (self::FIELD_MAX_VALUE_POSITIVE_INT === $n->nodeName) {
				$type->setMaxValuePositiveInt(FHIRPositiveInt::xmlUnserialize($n));
			} elseif (self::FIELD_MAX_VALUE_MARKDOWN === $n->nodeName) {
				$type->setMaxValueMarkdown(FHIRMarkdown::xmlUnserialize($n));
			} elseif (self::FIELD_MAX_VALUE_ANNOTATION === $n->nodeName) {
				$type->setMaxValueAnnotation(FHIRAnnotation::xmlUnserialize($n));
			} elseif (self::FIELD_MAX_VALUE_ATTACHMENT === $n->nodeName) {
				$type->setMaxValueAttachment(FHIRAttachment::xmlUnserialize($n));
			} elseif (self::FIELD_MAX_VALUE_IDENTIFIER === $n->nodeName) {
				$type->setMaxValueIdentifier(FHIRIdentifier::xmlUnserialize($n));
			} elseif (self::FIELD_MAX_VALUE_CODEABLE_CONCEPT === $n->nodeName) {
				$type->setMaxValueCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_MAX_VALUE_CODING === $n->nodeName) {
				$type->setMaxValueCoding(FHIRCoding::xmlUnserialize($n));
			} elseif (self::FIELD_MAX_VALUE_QUANTITY === $n->nodeName) {
				$type->setMaxValueQuantity(FHIRQuantity::xmlUnserialize($n));
			} elseif (self::FIELD_MAX_VALUE_RANGE === $n->nodeName) {
				$type->setMaxValueRange(FHIRRange::xmlUnserialize($n));
			} elseif (self::FIELD_MAX_VALUE_PERIOD === $n->nodeName) {
				$type->setMaxValuePeriod(FHIRPeriod::xmlUnserialize($n));
			} elseif (self::FIELD_MAX_VALUE_RATIO === $n->nodeName) {
				$type->setMaxValueRatio(FHIRRatio::xmlUnserialize($n));
			} elseif (self::FIELD_MAX_VALUE_REFERENCE === $n->nodeName) {
				$type->setMaxValueReference(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_MAX_VALUE_SAMPLED_DATA === $n->nodeName) {
				$type->setMaxValueSampledData(FHIRSampledData::xmlUnserialize($n));
			} elseif (self::FIELD_MAX_VALUE_SIGNATURE === $n->nodeName) {
				$type->setMaxValueSignature(FHIRSignature::xmlUnserialize($n));
			} elseif (self::FIELD_MAX_VALUE_HUMAN_NAME === $n->nodeName) {
				$type->setMaxValueHumanName(FHIRHumanName::xmlUnserialize($n));
			} elseif (self::FIELD_MAX_VALUE_ADDRESS === $n->nodeName) {
				$type->setMaxValueAddress(FHIRAddress::xmlUnserialize($n));
			} elseif (self::FIELD_MAX_VALUE_CONTACT_POINT === $n->nodeName) {
				$type->setMaxValueContactPoint(FHIRContactPoint::xmlUnserialize($n));
			} elseif (self::FIELD_MAX_VALUE_TIMING === $n->nodeName) {
				$type->setMaxValueTiming(FHIRTiming::xmlUnserialize($n));
			} elseif (self::FIELD_MAX_VALUE_META === $n->nodeName) {
				$type->setMaxValueMeta(FHIRMeta::xmlUnserialize($n));
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
			} elseif (self::FIELD_IS_SUMMARY === $n->nodeName) {
				$type->setIsSummary(FHIRBoolean::xmlUnserialize($n));
			} elseif (self::FIELD_BINDING === $n->nodeName) {
				$type->setBinding(FHIRElementDefinitionBinding::xmlUnserialize($n));
			} elseif (self::FIELD_MAPPING === $n->nodeName) {
				$type->addMapping(FHIRElementDefinitionMapping::xmlUnserialize($n));
			} elseif (self::FIELD_EXTENSION === $n->nodeName) {
				$type->addExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_ID === $n->nodeName) {
				$type->setId(FHIRIdPrimitive::xmlUnserialize($n));
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
		$n = $element->attributes->getNamedItem(self::FIELD_NAME);
		if (null !== $n) {
			$pt = $type->getName();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setName($n->nodeValue);
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
		$n = $element->attributes->getNamedItem(self::FIELD_COMMENTS);
		if (null !== $n) {
			$pt = $type->getComments();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setComments($n->nodeValue);
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
		$n = $element->attributes->getNamedItem(self::FIELD_NAME_REFERENCE);
		if (null !== $n) {
			$pt = $type->getNameReference();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setNameReference($n->nodeValue);
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
		$n = $element->attributes->getNamedItem(self::FIELD_DEFAULT_VALUE_INTEGER);
		if (null !== $n) {
			$pt = $type->getDefaultValueInteger();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setDefaultValueInteger($n->nodeValue);
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
		$n = $element->attributes->getNamedItem(self::FIELD_DEFAULT_VALUE_BASE_64BINARY);
		if (null !== $n) {
			$pt = $type->getDefaultValueBase64Binary();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setDefaultValueBase64Binary($n->nodeValue);
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
		$n = $element->attributes->getNamedItem(self::FIELD_DEFAULT_VALUE_STRING);
		if (null !== $n) {
			$pt = $type->getDefaultValueString();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setDefaultValueString($n->nodeValue);
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
		$n = $element->attributes->getNamedItem(self::FIELD_DEFAULT_VALUE_TIME);
		if (null !== $n) {
			$pt = $type->getDefaultValueTime();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setDefaultValueTime($n->nodeValue);
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
		$n = $element->attributes->getNamedItem(self::FIELD_DEFAULT_VALUE_OID);
		if (null !== $n) {
			$pt = $type->getDefaultValueOid();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setDefaultValueOid($n->nodeValue);
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
		$n = $element->attributes->getNamedItem(self::FIELD_DEFAULT_VALUE_ID);
		if (null !== $n) {
			$pt = $type->getDefaultValueId();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setDefaultValueId($n->nodeValue);
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
		$n = $element->attributes->getNamedItem(self::FIELD_DEFAULT_VALUE_POSITIVE_INT);
		if (null !== $n) {
			$pt = $type->getDefaultValuePositiveInt();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setDefaultValuePositiveInt($n->nodeValue);
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
		$n = $element->attributes->getNamedItem(self::FIELD_MEANING_WHEN_MISSING);
		if (null !== $n) {
			$pt = $type->getMeaningWhenMissing();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMeaningWhenMissing($n->nodeValue);
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
		$n = $element->attributes->getNamedItem(self::FIELD_FIXED_INTEGER);
		if (null !== $n) {
			$pt = $type->getFixedInteger();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setFixedInteger($n->nodeValue);
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
		$n = $element->attributes->getNamedItem(self::FIELD_FIXED_BASE_64BINARY);
		if (null !== $n) {
			$pt = $type->getFixedBase64Binary();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setFixedBase64Binary($n->nodeValue);
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
		$n = $element->attributes->getNamedItem(self::FIELD_FIXED_STRING);
		if (null !== $n) {
			$pt = $type->getFixedString();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setFixedString($n->nodeValue);
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
		$n = $element->attributes->getNamedItem(self::FIELD_FIXED_TIME);
		if (null !== $n) {
			$pt = $type->getFixedTime();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setFixedTime($n->nodeValue);
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
		$n = $element->attributes->getNamedItem(self::FIELD_FIXED_OID);
		if (null !== $n) {
			$pt = $type->getFixedOid();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setFixedOid($n->nodeValue);
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
		$n = $element->attributes->getNamedItem(self::FIELD_FIXED_ID);
		if (null !== $n) {
			$pt = $type->getFixedId();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setFixedId($n->nodeValue);
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
		$n = $element->attributes->getNamedItem(self::FIELD_FIXED_POSITIVE_INT);
		if (null !== $n) {
			$pt = $type->getFixedPositiveInt();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setFixedPositiveInt($n->nodeValue);
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
		$n = $element->attributes->getNamedItem(self::FIELD_PATTERN_BOOLEAN);
		if (null !== $n) {
			$pt = $type->getPatternBoolean();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setPatternBoolean($n->nodeValue);
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
		$n = $element->attributes->getNamedItem(self::FIELD_PATTERN_DECIMAL);
		if (null !== $n) {
			$pt = $type->getPatternDecimal();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setPatternDecimal($n->nodeValue);
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
		$n = $element->attributes->getNamedItem(self::FIELD_PATTERN_INSTANT);
		if (null !== $n) {
			$pt = $type->getPatternInstant();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setPatternInstant($n->nodeValue);
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
		$n = $element->attributes->getNamedItem(self::FIELD_PATTERN_URI);
		if (null !== $n) {
			$pt = $type->getPatternUri();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setPatternUri($n->nodeValue);
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
		$n = $element->attributes->getNamedItem(self::FIELD_PATTERN_TIME);
		if (null !== $n) {
			$pt = $type->getPatternTime();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setPatternTime($n->nodeValue);
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
		$n = $element->attributes->getNamedItem(self::FIELD_PATTERN_OID);
		if (null !== $n) {
			$pt = $type->getPatternOid();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setPatternOid($n->nodeValue);
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
		$n = $element->attributes->getNamedItem(self::FIELD_PATTERN_ID);
		if (null !== $n) {
			$pt = $type->getPatternId();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setPatternId($n->nodeValue);
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
		$n = $element->attributes->getNamedItem(self::FIELD_PATTERN_POSITIVE_INT);
		if (null !== $n) {
			$pt = $type->getPatternPositiveInt();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setPatternPositiveInt($n->nodeValue);
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
		$n = $element->attributes->getNamedItem(self::FIELD_EXAMPLE_BOOLEAN);
		if (null !== $n) {
			$pt = $type->getExampleBoolean();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setExampleBoolean($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_EXAMPLE_INTEGER);
		if (null !== $n) {
			$pt = $type->getExampleInteger();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setExampleInteger($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_EXAMPLE_DECIMAL);
		if (null !== $n) {
			$pt = $type->getExampleDecimal();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setExampleDecimal($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_EXAMPLE_BASE_64BINARY);
		if (null !== $n) {
			$pt = $type->getExampleBase64Binary();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setExampleBase64Binary($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_EXAMPLE_INSTANT);
		if (null !== $n) {
			$pt = $type->getExampleInstant();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setExampleInstant($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_EXAMPLE_STRING);
		if (null !== $n) {
			$pt = $type->getExampleString();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setExampleString($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_EXAMPLE_URI);
		if (null !== $n) {
			$pt = $type->getExampleUri();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setExampleUri($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_EXAMPLE_DATE);
		if (null !== $n) {
			$pt = $type->getExampleDate();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setExampleDate($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_EXAMPLE_DATE_TIME);
		if (null !== $n) {
			$pt = $type->getExampleDateTime();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setExampleDateTime($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_EXAMPLE_TIME);
		if (null !== $n) {
			$pt = $type->getExampleTime();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setExampleTime($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_EXAMPLE_CODE);
		if (null !== $n) {
			$pt = $type->getExampleCode();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setExampleCode($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_EXAMPLE_OID);
		if (null !== $n) {
			$pt = $type->getExampleOid();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setExampleOid($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_EXAMPLE_UUID);
		if (null !== $n) {
			$pt = $type->getExampleUuid();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setExampleUuid($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_EXAMPLE_ID);
		if (null !== $n) {
			$pt = $type->getExampleId();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setExampleId($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_EXAMPLE_UNSIGNED_INT);
		if (null !== $n) {
			$pt = $type->getExampleUnsignedInt();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setExampleUnsignedInt($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_EXAMPLE_POSITIVE_INT);
		if (null !== $n) {
			$pt = $type->getExamplePositiveInt();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setExamplePositiveInt($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_EXAMPLE_MARKDOWN);
		if (null !== $n) {
			$pt = $type->getExampleMarkdown();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setExampleMarkdown($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_MIN_VALUE_BOOLEAN);
		if (null !== $n) {
			$pt = $type->getMinValueBoolean();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMinValueBoolean($n->nodeValue);
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
		$n = $element->attributes->getNamedItem(self::FIELD_MIN_VALUE_DECIMAL);
		if (null !== $n) {
			$pt = $type->getMinValueDecimal();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMinValueDecimal($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_MIN_VALUE_BASE_64BINARY);
		if (null !== $n) {
			$pt = $type->getMinValueBase64Binary();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMinValueBase64Binary($n->nodeValue);
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
		$n = $element->attributes->getNamedItem(self::FIELD_MIN_VALUE_STRING);
		if (null !== $n) {
			$pt = $type->getMinValueString();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMinValueString($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_MIN_VALUE_URI);
		if (null !== $n) {
			$pt = $type->getMinValueUri();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMinValueUri($n->nodeValue);
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
		$n = $element->attributes->getNamedItem(self::FIELD_MIN_VALUE_TIME);
		if (null !== $n) {
			$pt = $type->getMinValueTime();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMinValueTime($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_MIN_VALUE_CODE);
		if (null !== $n) {
			$pt = $type->getMinValueCode();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMinValueCode($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_MIN_VALUE_OID);
		if (null !== $n) {
			$pt = $type->getMinValueOid();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMinValueOid($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_MIN_VALUE_UUID);
		if (null !== $n) {
			$pt = $type->getMinValueUuid();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMinValueUuid($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_MIN_VALUE_ID);
		if (null !== $n) {
			$pt = $type->getMinValueId();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMinValueId($n->nodeValue);
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
		$n = $element->attributes->getNamedItem(self::FIELD_MIN_VALUE_POSITIVE_INT);
		if (null !== $n) {
			$pt = $type->getMinValuePositiveInt();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMinValuePositiveInt($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_MIN_VALUE_MARKDOWN);
		if (null !== $n) {
			$pt = $type->getMinValueMarkdown();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMinValueMarkdown($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_MAX_VALUE_BOOLEAN);
		if (null !== $n) {
			$pt = $type->getMaxValueBoolean();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMaxValueBoolean($n->nodeValue);
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
		$n = $element->attributes->getNamedItem(self::FIELD_MAX_VALUE_DECIMAL);
		if (null !== $n) {
			$pt = $type->getMaxValueDecimal();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMaxValueDecimal($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_MAX_VALUE_BASE_64BINARY);
		if (null !== $n) {
			$pt = $type->getMaxValueBase64Binary();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMaxValueBase64Binary($n->nodeValue);
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
		$n = $element->attributes->getNamedItem(self::FIELD_MAX_VALUE_STRING);
		if (null !== $n) {
			$pt = $type->getMaxValueString();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMaxValueString($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_MAX_VALUE_URI);
		if (null !== $n) {
			$pt = $type->getMaxValueUri();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMaxValueUri($n->nodeValue);
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
		$n = $element->attributes->getNamedItem(self::FIELD_MAX_VALUE_TIME);
		if (null !== $n) {
			$pt = $type->getMaxValueTime();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMaxValueTime($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_MAX_VALUE_CODE);
		if (null !== $n) {
			$pt = $type->getMaxValueCode();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMaxValueCode($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_MAX_VALUE_OID);
		if (null !== $n) {
			$pt = $type->getMaxValueOid();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMaxValueOid($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_MAX_VALUE_UUID);
		if (null !== $n) {
			$pt = $type->getMaxValueUuid();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMaxValueUuid($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_MAX_VALUE_ID);
		if (null !== $n) {
			$pt = $type->getMaxValueId();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMaxValueId($n->nodeValue);
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
		$n = $element->attributes->getNamedItem(self::FIELD_MAX_VALUE_POSITIVE_INT);
		if (null !== $n) {
			$pt = $type->getMaxValuePositiveInt();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMaxValuePositiveInt($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_MAX_VALUE_MARKDOWN);
		if (null !== $n) {
			$pt = $type->getMaxValueMarkdown();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMaxValueMarkdown($n->nodeValue);
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
		if (null !== ($v = $this->getName())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_NAME);
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
		if (null !== ($v = $this->getComments())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_COMMENTS);
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
		if (null !== ($v = $this->getNameReference())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_NAME_REFERENCE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueBoolean())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEFAULT_VALUE_BOOLEAN);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueInteger())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEFAULT_VALUE_INTEGER);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueDecimal())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEFAULT_VALUE_DECIMAL);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueBase64Binary())) {
			$telement = $element->ownerDocument->createElement(
				self::FIELD_DEFAULT_VALUE_BASE_64BINARY,
			);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueInstant())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEFAULT_VALUE_INSTANT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueString())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEFAULT_VALUE_STRING);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueUri())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEFAULT_VALUE_URI);
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
		if (null !== ($v = $this->getDefaultValueTime())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEFAULT_VALUE_TIME);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueCode())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEFAULT_VALUE_CODE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueOid())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEFAULT_VALUE_OID);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueUuid())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEFAULT_VALUE_UUID);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueId())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEFAULT_VALUE_ID);
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
		if (null !== ($v = $this->getDefaultValuePositiveInt())) {
			$telement = $element->ownerDocument->createElement(
				self::FIELD_DEFAULT_VALUE_POSITIVE_INT,
			);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueMarkdown())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEFAULT_VALUE_MARKDOWN);
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
		if (null !== ($v = $this->getDefaultValueIdentifier())) {
			$telement = $element->ownerDocument->createElement(
				self::FIELD_DEFAULT_VALUE_IDENTIFIER,
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
		if (null !== ($v = $this->getDefaultValuePeriod())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEFAULT_VALUE_PERIOD);
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
		if (null !== ($v = $this->getDefaultValueHumanName())) {
			$telement = $element->ownerDocument->createElement(
				self::FIELD_DEFAULT_VALUE_HUMAN_NAME,
			);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDefaultValueAddress())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEFAULT_VALUE_ADDRESS);
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
		if (null !== ($v = $this->getDefaultValueTiming())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEFAULT_VALUE_TIMING);
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
		if (null !== ($v = $this->getFixedBoolean())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_BOOLEAN);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedInteger())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_INTEGER);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedDecimal())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_DECIMAL);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedBase64Binary())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_BASE_64BINARY);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedInstant())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_INSTANT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedString())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_STRING);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedUri())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_URI);
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
		if (null !== ($v = $this->getFixedTime())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_TIME);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedCode())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_CODE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedOid())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_OID);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedUuid())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_UUID);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedId())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_ID);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedUnsignedInt())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_UNSIGNED_INT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedPositiveInt())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_POSITIVE_INT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedMarkdown())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_MARKDOWN);
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
		if (null !== ($v = $this->getFixedIdentifier())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_IDENTIFIER);
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
		if (null !== ($v = $this->getFixedPeriod())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_PERIOD);
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
		if (null !== ($v = $this->getFixedHumanName())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_HUMAN_NAME);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedAddress())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_ADDRESS);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedContactPoint())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_CONTACT_POINT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedTiming())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_TIMING);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFixedMeta())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FIXED_META);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternBoolean())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_BOOLEAN);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternInteger())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_INTEGER);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternDecimal())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_DECIMAL);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternBase64Binary())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_BASE_64BINARY);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternInstant())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_INSTANT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternString())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_STRING);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternUri())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_URI);
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
		if (null !== ($v = $this->getPatternTime())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_TIME);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternCode())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_CODE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternOid())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_OID);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternUuid())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_UUID);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternId())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_ID);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternUnsignedInt())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_UNSIGNED_INT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternPositiveInt())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_POSITIVE_INT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternMarkdown())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_MARKDOWN);
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
		if (null !== ($v = $this->getPatternIdentifier())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_IDENTIFIER);
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
		if (null !== ($v = $this->getPatternPeriod())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_PERIOD);
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
		if (null !== ($v = $this->getPatternHumanName())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_HUMAN_NAME);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternAddress())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_ADDRESS);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternContactPoint())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_CONTACT_POINT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternTiming())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_TIMING);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatternMeta())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATTERN_META);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getExampleBoolean())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_BOOLEAN);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getExampleInteger())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_INTEGER);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getExampleDecimal())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_DECIMAL);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getExampleBase64Binary())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_BASE_64BINARY);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getExampleInstant())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_INSTANT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getExampleString())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_STRING);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getExampleUri())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_URI);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getExampleDate())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_DATE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getExampleDateTime())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_DATE_TIME);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getExampleTime())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_TIME);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getExampleCode())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_CODE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getExampleOid())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_OID);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getExampleUuid())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_UUID);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getExampleId())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_ID);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getExampleUnsignedInt())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_UNSIGNED_INT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getExamplePositiveInt())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_POSITIVE_INT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getExampleMarkdown())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_MARKDOWN);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getExampleAnnotation())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_ANNOTATION);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getExampleAttachment())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_ATTACHMENT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getExampleIdentifier())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_IDENTIFIER);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getExampleCodeableConcept())) {
			$telement = $element->ownerDocument->createElement(
				self::FIELD_EXAMPLE_CODEABLE_CONCEPT,
			);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getExampleCoding())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_CODING);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getExampleQuantity())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_QUANTITY);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getExampleRange())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_RANGE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getExamplePeriod())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_PERIOD);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getExampleRatio())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_RATIO);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getExampleReference())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_REFERENCE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getExampleSampledData())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_SAMPLED_DATA);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getExampleSignature())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_SIGNATURE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getExampleHumanName())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_HUMAN_NAME);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getExampleAddress())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_ADDRESS);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getExampleContactPoint())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_CONTACT_POINT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getExampleTiming())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_TIMING);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getExampleMeta())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_EXAMPLE_META);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMinValueBoolean())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MIN_VALUE_BOOLEAN);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMinValueInteger())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MIN_VALUE_INTEGER);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMinValueDecimal())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MIN_VALUE_DECIMAL);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMinValueBase64Binary())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MIN_VALUE_BASE_64BINARY);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMinValueInstant())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MIN_VALUE_INSTANT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMinValueString())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MIN_VALUE_STRING);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMinValueUri())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MIN_VALUE_URI);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
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
		if (null !== ($v = $this->getMinValueTime())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MIN_VALUE_TIME);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMinValueCode())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MIN_VALUE_CODE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMinValueOid())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MIN_VALUE_OID);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMinValueUuid())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MIN_VALUE_UUID);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMinValueId())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MIN_VALUE_ID);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMinValueUnsignedInt())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MIN_VALUE_UNSIGNED_INT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMinValuePositiveInt())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MIN_VALUE_POSITIVE_INT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMinValueMarkdown())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MIN_VALUE_MARKDOWN);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMinValueAnnotation())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MIN_VALUE_ANNOTATION);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMinValueAttachment())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MIN_VALUE_ATTACHMENT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMinValueIdentifier())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MIN_VALUE_IDENTIFIER);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMinValueCodeableConcept())) {
			$telement = $element->ownerDocument->createElement(
				self::FIELD_MIN_VALUE_CODEABLE_CONCEPT,
			);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMinValueCoding())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MIN_VALUE_CODING);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMinValueQuantity())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MIN_VALUE_QUANTITY);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMinValueRange())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MIN_VALUE_RANGE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMinValuePeriod())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MIN_VALUE_PERIOD);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMinValueRatio())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MIN_VALUE_RATIO);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMinValueReference())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MIN_VALUE_REFERENCE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMinValueSampledData())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MIN_VALUE_SAMPLED_DATA);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMinValueSignature())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MIN_VALUE_SIGNATURE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMinValueHumanName())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MIN_VALUE_HUMAN_NAME);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMinValueAddress())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MIN_VALUE_ADDRESS);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMinValueContactPoint())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MIN_VALUE_CONTACT_POINT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMinValueTiming())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MIN_VALUE_TIMING);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMinValueMeta())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MIN_VALUE_META);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMaxValueBoolean())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MAX_VALUE_BOOLEAN);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMaxValueInteger())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MAX_VALUE_INTEGER);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMaxValueDecimal())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MAX_VALUE_DECIMAL);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMaxValueBase64Binary())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MAX_VALUE_BASE_64BINARY);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMaxValueInstant())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MAX_VALUE_INSTANT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMaxValueString())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MAX_VALUE_STRING);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMaxValueUri())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MAX_VALUE_URI);
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
		if (null !== ($v = $this->getMaxValueTime())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MAX_VALUE_TIME);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMaxValueCode())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MAX_VALUE_CODE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMaxValueOid())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MAX_VALUE_OID);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMaxValueUuid())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MAX_VALUE_UUID);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMaxValueId())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MAX_VALUE_ID);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMaxValueUnsignedInt())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MAX_VALUE_UNSIGNED_INT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMaxValuePositiveInt())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MAX_VALUE_POSITIVE_INT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMaxValueMarkdown())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MAX_VALUE_MARKDOWN);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMaxValueAnnotation())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MAX_VALUE_ANNOTATION);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMaxValueAttachment())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MAX_VALUE_ATTACHMENT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMaxValueIdentifier())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MAX_VALUE_IDENTIFIER);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMaxValueCodeableConcept())) {
			$telement = $element->ownerDocument->createElement(
				self::FIELD_MAX_VALUE_CODEABLE_CONCEPT,
			);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMaxValueCoding())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MAX_VALUE_CODING);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMaxValueQuantity())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MAX_VALUE_QUANTITY);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMaxValueRange())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MAX_VALUE_RANGE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMaxValuePeriod())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MAX_VALUE_PERIOD);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMaxValueRatio())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MAX_VALUE_RATIO);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMaxValueReference())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MAX_VALUE_REFERENCE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMaxValueSampledData())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MAX_VALUE_SAMPLED_DATA);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMaxValueSignature())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MAX_VALUE_SIGNATURE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMaxValueHumanName())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MAX_VALUE_HUMAN_NAME);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMaxValueAddress())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MAX_VALUE_ADDRESS);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMaxValueContactPoint())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MAX_VALUE_CONTACT_POINT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMaxValueTiming())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MAX_VALUE_TIMING);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMaxValueMeta())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MAX_VALUE_META);
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
		if (null !== ($v = $this->getComments())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_COMMENTS} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRMarkdown::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_COMMENTS_EXT} = $ext;
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
			unset($ext->{FHIRInteger::FIELD_VALUE});
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
		if ([] !== ($vs = $this->getType())) {
			$out->{self::FIELD_TYPE} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_TYPE}[] = $v;
			}
		}
		if (null !== ($v = $this->getNameReference())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_NAME_REFERENCE} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRString::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_NAME_REFERENCE_EXT} = $ext;
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
		if (null !== ($v = $this->getDefaultValueAnnotation())) {
			$out->{self::FIELD_DEFAULT_VALUE_ANNOTATION} = $v;
		}
		if (null !== ($v = $this->getDefaultValueAttachment())) {
			$out->{self::FIELD_DEFAULT_VALUE_ATTACHMENT} = $v;
		}
		if (null !== ($v = $this->getDefaultValueIdentifier())) {
			$out->{self::FIELD_DEFAULT_VALUE_IDENTIFIER} = $v;
		}
		if (null !== ($v = $this->getDefaultValueCodeableConcept())) {
			$out->{self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT} = $v;
		}
		if (null !== ($v = $this->getDefaultValueCoding())) {
			$out->{self::FIELD_DEFAULT_VALUE_CODING} = $v;
		}
		if (null !== ($v = $this->getDefaultValueQuantity())) {
			$out->{self::FIELD_DEFAULT_VALUE_QUANTITY} = $v;
		}
		if (null !== ($v = $this->getDefaultValueRange())) {
			$out->{self::FIELD_DEFAULT_VALUE_RANGE} = $v;
		}
		if (null !== ($v = $this->getDefaultValuePeriod())) {
			$out->{self::FIELD_DEFAULT_VALUE_PERIOD} = $v;
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
		if (null !== ($v = $this->getDefaultValueHumanName())) {
			$out->{self::FIELD_DEFAULT_VALUE_HUMAN_NAME} = $v;
		}
		if (null !== ($v = $this->getDefaultValueAddress())) {
			$out->{self::FIELD_DEFAULT_VALUE_ADDRESS} = $v;
		}
		if (null !== ($v = $this->getDefaultValueContactPoint())) {
			$out->{self::FIELD_DEFAULT_VALUE_CONTACT_POINT} = $v;
		}
		if (null !== ($v = $this->getDefaultValueTiming())) {
			$out->{self::FIELD_DEFAULT_VALUE_TIMING} = $v;
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
		if (null !== ($v = $this->getFixedAnnotation())) {
			$out->{self::FIELD_FIXED_ANNOTATION} = $v;
		}
		if (null !== ($v = $this->getFixedAttachment())) {
			$out->{self::FIELD_FIXED_ATTACHMENT} = $v;
		}
		if (null !== ($v = $this->getFixedIdentifier())) {
			$out->{self::FIELD_FIXED_IDENTIFIER} = $v;
		}
		if (null !== ($v = $this->getFixedCodeableConcept())) {
			$out->{self::FIELD_FIXED_CODEABLE_CONCEPT} = $v;
		}
		if (null !== ($v = $this->getFixedCoding())) {
			$out->{self::FIELD_FIXED_CODING} = $v;
		}
		if (null !== ($v = $this->getFixedQuantity())) {
			$out->{self::FIELD_FIXED_QUANTITY} = $v;
		}
		if (null !== ($v = $this->getFixedRange())) {
			$out->{self::FIELD_FIXED_RANGE} = $v;
		}
		if (null !== ($v = $this->getFixedPeriod())) {
			$out->{self::FIELD_FIXED_PERIOD} = $v;
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
		if (null !== ($v = $this->getFixedHumanName())) {
			$out->{self::FIELD_FIXED_HUMAN_NAME} = $v;
		}
		if (null !== ($v = $this->getFixedAddress())) {
			$out->{self::FIELD_FIXED_ADDRESS} = $v;
		}
		if (null !== ($v = $this->getFixedContactPoint())) {
			$out->{self::FIELD_FIXED_CONTACT_POINT} = $v;
		}
		if (null !== ($v = $this->getFixedTiming())) {
			$out->{self::FIELD_FIXED_TIMING} = $v;
		}
		if (null !== ($v = $this->getFixedMeta())) {
			$out->{self::FIELD_FIXED_META} = $v;
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
		if (null !== ($v = $this->getPatternAnnotation())) {
			$out->{self::FIELD_PATTERN_ANNOTATION} = $v;
		}
		if (null !== ($v = $this->getPatternAttachment())) {
			$out->{self::FIELD_PATTERN_ATTACHMENT} = $v;
		}
		if (null !== ($v = $this->getPatternIdentifier())) {
			$out->{self::FIELD_PATTERN_IDENTIFIER} = $v;
		}
		if (null !== ($v = $this->getPatternCodeableConcept())) {
			$out->{self::FIELD_PATTERN_CODEABLE_CONCEPT} = $v;
		}
		if (null !== ($v = $this->getPatternCoding())) {
			$out->{self::FIELD_PATTERN_CODING} = $v;
		}
		if (null !== ($v = $this->getPatternQuantity())) {
			$out->{self::FIELD_PATTERN_QUANTITY} = $v;
		}
		if (null !== ($v = $this->getPatternRange())) {
			$out->{self::FIELD_PATTERN_RANGE} = $v;
		}
		if (null !== ($v = $this->getPatternPeriod())) {
			$out->{self::FIELD_PATTERN_PERIOD} = $v;
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
		if (null !== ($v = $this->getPatternHumanName())) {
			$out->{self::FIELD_PATTERN_HUMAN_NAME} = $v;
		}
		if (null !== ($v = $this->getPatternAddress())) {
			$out->{self::FIELD_PATTERN_ADDRESS} = $v;
		}
		if (null !== ($v = $this->getPatternContactPoint())) {
			$out->{self::FIELD_PATTERN_CONTACT_POINT} = $v;
		}
		if (null !== ($v = $this->getPatternTiming())) {
			$out->{self::FIELD_PATTERN_TIMING} = $v;
		}
		if (null !== ($v = $this->getPatternMeta())) {
			$out->{self::FIELD_PATTERN_META} = $v;
		}
		if (null !== ($v = $this->getExampleBoolean())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_EXAMPLE_BOOLEAN} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRBoolean::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_EXAMPLE_BOOLEAN_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getExampleInteger())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_EXAMPLE_INTEGER} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRInteger::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_EXAMPLE_INTEGER_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getExampleDecimal())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_EXAMPLE_DECIMAL} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRDecimal::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_EXAMPLE_DECIMAL_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getExampleBase64Binary())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_EXAMPLE_BASE_64BINARY} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRBase64Binary::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_EXAMPLE_BASE_64BINARY_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getExampleInstant())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_EXAMPLE_INSTANT} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRInstant::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_EXAMPLE_INSTANT_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getExampleString())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_EXAMPLE_STRING} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRString::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_EXAMPLE_STRING_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getExampleUri())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_EXAMPLE_URI} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRUri::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_EXAMPLE_URI_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getExampleDate())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_EXAMPLE_DATE} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRDate::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_EXAMPLE_DATE_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getExampleDateTime())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_EXAMPLE_DATE_TIME} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRDateTime::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_EXAMPLE_DATE_TIME_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getExampleTime())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_EXAMPLE_TIME} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRTime::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_EXAMPLE_TIME_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getExampleCode())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_EXAMPLE_CODE} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRCode::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_EXAMPLE_CODE_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getExampleOid())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_EXAMPLE_OID} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIROid::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_EXAMPLE_OID_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getExampleUuid())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_EXAMPLE_UUID} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRUuid::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_EXAMPLE_UUID_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getExampleId())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_EXAMPLE_ID} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRId::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_EXAMPLE_ID_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getExampleUnsignedInt())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_EXAMPLE_UNSIGNED_INT} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRUnsignedInt::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_EXAMPLE_UNSIGNED_INT_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getExamplePositiveInt())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_EXAMPLE_POSITIVE_INT} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRPositiveInt::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_EXAMPLE_POSITIVE_INT_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getExampleMarkdown())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_EXAMPLE_MARKDOWN} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRMarkdown::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_EXAMPLE_MARKDOWN_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getExampleAnnotation())) {
			$out->{self::FIELD_EXAMPLE_ANNOTATION} = $v;
		}
		if (null !== ($v = $this->getExampleAttachment())) {
			$out->{self::FIELD_EXAMPLE_ATTACHMENT} = $v;
		}
		if (null !== ($v = $this->getExampleIdentifier())) {
			$out->{self::FIELD_EXAMPLE_IDENTIFIER} = $v;
		}
		if (null !== ($v = $this->getExampleCodeableConcept())) {
			$out->{self::FIELD_EXAMPLE_CODEABLE_CONCEPT} = $v;
		}
		if (null !== ($v = $this->getExampleCoding())) {
			$out->{self::FIELD_EXAMPLE_CODING} = $v;
		}
		if (null !== ($v = $this->getExampleQuantity())) {
			$out->{self::FIELD_EXAMPLE_QUANTITY} = $v;
		}
		if (null !== ($v = $this->getExampleRange())) {
			$out->{self::FIELD_EXAMPLE_RANGE} = $v;
		}
		if (null !== ($v = $this->getExamplePeriod())) {
			$out->{self::FIELD_EXAMPLE_PERIOD} = $v;
		}
		if (null !== ($v = $this->getExampleRatio())) {
			$out->{self::FIELD_EXAMPLE_RATIO} = $v;
		}
		if (null !== ($v = $this->getExampleReference())) {
			$out->{self::FIELD_EXAMPLE_REFERENCE} = $v;
		}
		if (null !== ($v = $this->getExampleSampledData())) {
			$out->{self::FIELD_EXAMPLE_SAMPLED_DATA} = $v;
		}
		if (null !== ($v = $this->getExampleSignature())) {
			$out->{self::FIELD_EXAMPLE_SIGNATURE} = $v;
		}
		if (null !== ($v = $this->getExampleHumanName())) {
			$out->{self::FIELD_EXAMPLE_HUMAN_NAME} = $v;
		}
		if (null !== ($v = $this->getExampleAddress())) {
			$out->{self::FIELD_EXAMPLE_ADDRESS} = $v;
		}
		if (null !== ($v = $this->getExampleContactPoint())) {
			$out->{self::FIELD_EXAMPLE_CONTACT_POINT} = $v;
		}
		if (null !== ($v = $this->getExampleTiming())) {
			$out->{self::FIELD_EXAMPLE_TIMING} = $v;
		}
		if (null !== ($v = $this->getExampleMeta())) {
			$out->{self::FIELD_EXAMPLE_META} = $v;
		}
		if (null !== ($v = $this->getMinValueBoolean())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_MIN_VALUE_BOOLEAN} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRBoolean::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_MIN_VALUE_BOOLEAN_EXT} = $ext;
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
		if (null !== ($v = $this->getMinValueBase64Binary())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_MIN_VALUE_BASE_64BINARY} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRBase64Binary::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_MIN_VALUE_BASE_64BINARY_EXT} = $ext;
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
		if (null !== ($v = $this->getMinValueString())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_MIN_VALUE_STRING} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRString::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_MIN_VALUE_STRING_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getMinValueUri())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_MIN_VALUE_URI} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRUri::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_MIN_VALUE_URI_EXT} = $ext;
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
		if (null !== ($v = $this->getMinValueCode())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_MIN_VALUE_CODE} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRCode::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_MIN_VALUE_CODE_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getMinValueOid())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_MIN_VALUE_OID} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIROid::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_MIN_VALUE_OID_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getMinValueUuid())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_MIN_VALUE_UUID} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRUuid::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_MIN_VALUE_UUID_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getMinValueId())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_MIN_VALUE_ID} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRId::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_MIN_VALUE_ID_EXT} = $ext;
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
		if (null !== ($v = $this->getMinValueMarkdown())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_MIN_VALUE_MARKDOWN} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRMarkdown::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_MIN_VALUE_MARKDOWN_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getMinValueAnnotation())) {
			$out->{self::FIELD_MIN_VALUE_ANNOTATION} = $v;
		}
		if (null !== ($v = $this->getMinValueAttachment())) {
			$out->{self::FIELD_MIN_VALUE_ATTACHMENT} = $v;
		}
		if (null !== ($v = $this->getMinValueIdentifier())) {
			$out->{self::FIELD_MIN_VALUE_IDENTIFIER} = $v;
		}
		if (null !== ($v = $this->getMinValueCodeableConcept())) {
			$out->{self::FIELD_MIN_VALUE_CODEABLE_CONCEPT} = $v;
		}
		if (null !== ($v = $this->getMinValueCoding())) {
			$out->{self::FIELD_MIN_VALUE_CODING} = $v;
		}
		if (null !== ($v = $this->getMinValueQuantity())) {
			$out->{self::FIELD_MIN_VALUE_QUANTITY} = $v;
		}
		if (null !== ($v = $this->getMinValueRange())) {
			$out->{self::FIELD_MIN_VALUE_RANGE} = $v;
		}
		if (null !== ($v = $this->getMinValuePeriod())) {
			$out->{self::FIELD_MIN_VALUE_PERIOD} = $v;
		}
		if (null !== ($v = $this->getMinValueRatio())) {
			$out->{self::FIELD_MIN_VALUE_RATIO} = $v;
		}
		if (null !== ($v = $this->getMinValueReference())) {
			$out->{self::FIELD_MIN_VALUE_REFERENCE} = $v;
		}
		if (null !== ($v = $this->getMinValueSampledData())) {
			$out->{self::FIELD_MIN_VALUE_SAMPLED_DATA} = $v;
		}
		if (null !== ($v = $this->getMinValueSignature())) {
			$out->{self::FIELD_MIN_VALUE_SIGNATURE} = $v;
		}
		if (null !== ($v = $this->getMinValueHumanName())) {
			$out->{self::FIELD_MIN_VALUE_HUMAN_NAME} = $v;
		}
		if (null !== ($v = $this->getMinValueAddress())) {
			$out->{self::FIELD_MIN_VALUE_ADDRESS} = $v;
		}
		if (null !== ($v = $this->getMinValueContactPoint())) {
			$out->{self::FIELD_MIN_VALUE_CONTACT_POINT} = $v;
		}
		if (null !== ($v = $this->getMinValueTiming())) {
			$out->{self::FIELD_MIN_VALUE_TIMING} = $v;
		}
		if (null !== ($v = $this->getMinValueMeta())) {
			$out->{self::FIELD_MIN_VALUE_META} = $v;
		}
		if (null !== ($v = $this->getMaxValueBoolean())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_MAX_VALUE_BOOLEAN} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRBoolean::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_MAX_VALUE_BOOLEAN_EXT} = $ext;
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
		if (null !== ($v = $this->getMaxValueBase64Binary())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_MAX_VALUE_BASE_64BINARY} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRBase64Binary::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_MAX_VALUE_BASE_64BINARY_EXT} = $ext;
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
		if (null !== ($v = $this->getMaxValueString())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_MAX_VALUE_STRING} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRString::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_MAX_VALUE_STRING_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getMaxValueUri())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_MAX_VALUE_URI} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRUri::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_MAX_VALUE_URI_EXT} = $ext;
			}
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
		if (null !== ($v = $this->getMaxValueCode())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_MAX_VALUE_CODE} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRCode::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_MAX_VALUE_CODE_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getMaxValueOid())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_MAX_VALUE_OID} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIROid::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_MAX_VALUE_OID_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getMaxValueUuid())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_MAX_VALUE_UUID} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRUuid::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_MAX_VALUE_UUID_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getMaxValueId())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_MAX_VALUE_ID} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRId::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_MAX_VALUE_ID_EXT} = $ext;
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
		if (null !== ($v = $this->getMaxValueMarkdown())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_MAX_VALUE_MARKDOWN} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRMarkdown::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_MAX_VALUE_MARKDOWN_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getMaxValueAnnotation())) {
			$out->{self::FIELD_MAX_VALUE_ANNOTATION} = $v;
		}
		if (null !== ($v = $this->getMaxValueAttachment())) {
			$out->{self::FIELD_MAX_VALUE_ATTACHMENT} = $v;
		}
		if (null !== ($v = $this->getMaxValueIdentifier())) {
			$out->{self::FIELD_MAX_VALUE_IDENTIFIER} = $v;
		}
		if (null !== ($v = $this->getMaxValueCodeableConcept())) {
			$out->{self::FIELD_MAX_VALUE_CODEABLE_CONCEPT} = $v;
		}
		if (null !== ($v = $this->getMaxValueCoding())) {
			$out->{self::FIELD_MAX_VALUE_CODING} = $v;
		}
		if (null !== ($v = $this->getMaxValueQuantity())) {
			$out->{self::FIELD_MAX_VALUE_QUANTITY} = $v;
		}
		if (null !== ($v = $this->getMaxValueRange())) {
			$out->{self::FIELD_MAX_VALUE_RANGE} = $v;
		}
		if (null !== ($v = $this->getMaxValuePeriod())) {
			$out->{self::FIELD_MAX_VALUE_PERIOD} = $v;
		}
		if (null !== ($v = $this->getMaxValueRatio())) {
			$out->{self::FIELD_MAX_VALUE_RATIO} = $v;
		}
		if (null !== ($v = $this->getMaxValueReference())) {
			$out->{self::FIELD_MAX_VALUE_REFERENCE} = $v;
		}
		if (null !== ($v = $this->getMaxValueSampledData())) {
			$out->{self::FIELD_MAX_VALUE_SAMPLED_DATA} = $v;
		}
		if (null !== ($v = $this->getMaxValueSignature())) {
			$out->{self::FIELD_MAX_VALUE_SIGNATURE} = $v;
		}
		if (null !== ($v = $this->getMaxValueHumanName())) {
			$out->{self::FIELD_MAX_VALUE_HUMAN_NAME} = $v;
		}
		if (null !== ($v = $this->getMaxValueAddress())) {
			$out->{self::FIELD_MAX_VALUE_ADDRESS} = $v;
		}
		if (null !== ($v = $this->getMaxValueContactPoint())) {
			$out->{self::FIELD_MAX_VALUE_CONTACT_POINT} = $v;
		}
		if (null !== ($v = $this->getMaxValueTiming())) {
			$out->{self::FIELD_MAX_VALUE_TIMING} = $v;
		}
		if (null !== ($v = $this->getMaxValueMeta())) {
			$out->{self::FIELD_MAX_VALUE_META} = $v;
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
