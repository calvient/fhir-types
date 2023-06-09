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

use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAnnotation;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDate;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRExtension;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRFamilyHistoryStatus;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRId;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMeta;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRNarrative;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRAge;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRange;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri;
use Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource;
use Calvient\FhirTypes\DSTU2\PHPFHIRConstants;
use Calvient\FhirTypes\DSTU2\PHPFHIRContainedTypeInterface;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeInterface;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeMap;

/**
 * Significant health events and conditions for a person related to the patient
 * relevant in the context of care for the patient.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRFamilyMemberHistory
 * @package \Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIRFamilyMemberHistory extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY;
	const FIELD_IDENTIFIER = 'identifier';
	const FIELD_PATIENT = 'patient';
	const FIELD_DATE = 'date';
	const FIELD_DATE_EXT = '_date';
	const FIELD_STATUS = 'status';
	const FIELD_STATUS_EXT = '_status';
	const FIELD_NAME = 'name';
	const FIELD_NAME_EXT = '_name';
	const FIELD_RELATIONSHIP = 'relationship';
	const FIELD_GENDER = 'gender';
	const FIELD_GENDER_EXT = '_gender';
	const FIELD_BORN_PERIOD = 'bornPeriod';
	const FIELD_BORN_DATE = 'bornDate';
	const FIELD_BORN_DATE_EXT = '_bornDate';
	const FIELD_BORN_STRING = 'bornString';
	const FIELD_BORN_STRING_EXT = '_bornString';
	const FIELD_AGE_QUANTITY = 'ageQuantity';
	const FIELD_AGE_RANGE = 'ageRange';
	const FIELD_AGE_STRING = 'ageString';
	const FIELD_AGE_STRING_EXT = '_ageString';
	const FIELD_DECEASED_BOOLEAN = 'deceasedBoolean';
	const FIELD_DECEASED_BOOLEAN_EXT = '_deceasedBoolean';
	const FIELD_DECEASED_QUANTITY = 'deceasedQuantity';
	const FIELD_DECEASED_RANGE = 'deceasedRange';
	const FIELD_DECEASED_DATE = 'deceasedDate';
	const FIELD_DECEASED_DATE_EXT = '_deceasedDate';
	const FIELD_DECEASED_STRING = 'deceasedString';
	const FIELD_DECEASED_STRING_EXT = '_deceasedString';
	const FIELD_NOTE = 'note';
	const FIELD_CONDITION = 'condition';

	/** @var string */
	private $_xmlns = '';

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * This records identifiers associated with this family member history record that
	 * are defined by business processes and/ or used to refer to it when a direct URL
	 * reference to the resource itself is not appropriate (e.g. in CDA documents, or
	 * in written / printed documentation).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier[]
	 */
	protected ?array $identifier = [];

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The person who this history concerns.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $patient = null;

	/**
	 * A date, date-time or partial date (e.g. just year or year + month). If hours and
	 * minutes are specified, a time zone SHALL be populated. The format is a union of
	 * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
	 * due to schema type constraints but may be zero-filled and may be ignored. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The date (and possibly time) when the family member history was taken.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime
	 */
	protected ?FHIRDateTime $date = null;

	/**
	 * A code that identifies the status of the family history record.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A code specifying a state of a Family Member History record.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRFamilyHistoryStatus
	 */
	protected ?FHIRFamilyHistoryStatus $status = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * This will either be a name or a description; e.g. "Aunt Susan", "my cousin with
	 * the red hair".
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $name = null;

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The type of relationship this person has to the patient (father, mother, brother
	 * etc.).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	protected ?FHIRCodeableConcept $relationship = null;

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Administrative Gender - the gender that the relative is considered to have for
	 * administration and record keeping purposes.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode
	 */
	protected ?FHIRCode $gender = null;

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The actual or approximate date of birth of the relative.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod
	 */
	protected ?FHIRPeriod $bornPeriod = null;

	/**
	 * A date or partial date (e.g. just year or year + month). There is no time zone.
	 * The format is a union of the schema types gYear, gYearMonth and date. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The actual or approximate date of birth of the relative.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRDatePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDate
	 */
	protected ?FHIRDate $bornDate = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The actual or approximate date of birth of the relative.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $bornString = null;

	/**
	 * The actual or approximate age of the relative at the time the family member
	 * history is recorded.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRAge
	 */
	protected ?FHIRAge $ageQuantity = null;

	/**
	 * A set of ordered Quantities defined by a low and high limit.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The actual or approximate age of the relative at the time the family member
	 * history is recorded.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRange
	 */
	protected ?FHIRRange $ageRange = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The actual or approximate age of the relative at the time the family member
	 * history is recorded.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $ageString = null;

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Deceased flag or the actual or approximate age of the relative at the time of
	 * death for the family member history record.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
	 */
	protected ?FHIRBoolean $deceasedBoolean = null;

	/**
	 * Deceased flag or the actual or approximate age of the relative at the time of
	 * death for the family member history record.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRAge
	 */
	protected ?FHIRAge $deceasedQuantity = null;

	/**
	 * A set of ordered Quantities defined by a low and high limit.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Deceased flag or the actual or approximate age of the relative at the time of
	 * death for the family member history record.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRange
	 */
	protected ?FHIRRange $deceasedRange = null;

	/**
	 * A date or partial date (e.g. just year or year + month). There is no time zone.
	 * The format is a union of the schema types gYear, gYearMonth and date. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Deceased flag or the actual or approximate age of the relative at the time of
	 * death for the family member history record.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRDatePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDate
	 */
	protected ?FHIRDate $deceasedDate = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Deceased flag or the actual or approximate age of the relative at the time of
	 * death for the family member history record.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $deceasedString = null;

	/**
	 * A text note which also contains information about who made the statement and
	 * when.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * This property allows a non condition-specific note to the made about the related
	 * person. Ideally, the note would be in the condition property, but this is not
	 * always possible.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAnnotation
	 */
	protected ?FHIRAnnotation $note = null;

	/**
	 * Significant health events and conditions for a person related to the patient
	 * relevant in the context of care for the patient.
	 *
	 * The significant Conditions (or condition) that the family member had. This is a
	 * repeating section to allow a system to represent more than one condition per
	 * resource, though there is nothing stopping multiple resources - one per
	 * condition.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition[]
	 */
	protected ?array $condition = [];

	/**
	 * Validation map for fields in type FamilyMemberHistory
	 * @var array
	 */
	private static array $_validationRules = [];

	/**
	 * FHIRFamilyMemberHistory Constructor
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
					'FHIRFamilyMemberHistory::_construct - $data expected to be null or array, %s seen',
					gettype($data),
				),
			);
		}
		parent::__construct($data);
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
		if (isset($data[self::FIELD_PATIENT])) {
			if ($data[self::FIELD_PATIENT] instanceof FHIRReference) {
				$this->setPatient($data[self::FIELD_PATIENT]);
			} else {
				$this->setPatient(new FHIRReference($data[self::FIELD_PATIENT]));
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
		if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
			$value = $data[self::FIELD_STATUS] ?? null;
			$ext =
				isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])
					? $data[self::FIELD_STATUS_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRFamilyHistoryStatus) {
					$this->setStatus($value);
				} elseif (is_array($value)) {
					$this->setStatus(new FHIRFamilyHistoryStatus(array_merge($ext, $value)));
				} else {
					$this->setStatus(
						new FHIRFamilyHistoryStatus(
							[FHIRFamilyHistoryStatus::FIELD_VALUE => $value] + $ext,
						),
					);
				}
			} elseif ([] !== $ext) {
				$this->setStatus(new FHIRFamilyHistoryStatus($ext));
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
		if (isset($data[self::FIELD_RELATIONSHIP])) {
			if ($data[self::FIELD_RELATIONSHIP] instanceof FHIRCodeableConcept) {
				$this->setRelationship($data[self::FIELD_RELATIONSHIP]);
			} else {
				$this->setRelationship(new FHIRCodeableConcept($data[self::FIELD_RELATIONSHIP]));
			}
		}
		if (isset($data[self::FIELD_GENDER]) || isset($data[self::FIELD_GENDER_EXT])) {
			$value = $data[self::FIELD_GENDER] ?? null;
			$ext =
				isset($data[self::FIELD_GENDER_EXT]) && is_array($data[self::FIELD_GENDER_EXT])
					? $data[self::FIELD_GENDER_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRCode) {
					$this->setGender($value);
				} elseif (is_array($value)) {
					$this->setGender(new FHIRCode(array_merge($ext, $value)));
				} else {
					$this->setGender(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setGender(new FHIRCode($ext));
			}
		}
		if (isset($data[self::FIELD_BORN_PERIOD])) {
			if ($data[self::FIELD_BORN_PERIOD] instanceof FHIRPeriod) {
				$this->setBornPeriod($data[self::FIELD_BORN_PERIOD]);
			} else {
				$this->setBornPeriod(new FHIRPeriod($data[self::FIELD_BORN_PERIOD]));
			}
		}
		if (isset($data[self::FIELD_BORN_DATE]) || isset($data[self::FIELD_BORN_DATE_EXT])) {
			$value = $data[self::FIELD_BORN_DATE] ?? null;
			$ext =
				isset($data[self::FIELD_BORN_DATE_EXT]) &&
				is_array($data[self::FIELD_BORN_DATE_EXT])
					? $data[self::FIELD_BORN_DATE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRDate) {
					$this->setBornDate($value);
				} elseif (is_array($value)) {
					$this->setBornDate(new FHIRDate(array_merge($ext, $value)));
				} else {
					$this->setBornDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setBornDate(new FHIRDate($ext));
			}
		}
		if (isset($data[self::FIELD_BORN_STRING]) || isset($data[self::FIELD_BORN_STRING_EXT])) {
			$value = $data[self::FIELD_BORN_STRING] ?? null;
			$ext =
				isset($data[self::FIELD_BORN_STRING_EXT]) &&
				is_array($data[self::FIELD_BORN_STRING_EXT])
					? $data[self::FIELD_BORN_STRING_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->setBornString($value);
				} elseif (is_array($value)) {
					$this->setBornString(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->setBornString(
						new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setBornString(new FHIRString($ext));
			}
		}
		if (isset($data[self::FIELD_AGE_QUANTITY])) {
			if ($data[self::FIELD_AGE_QUANTITY] instanceof FHIRAge) {
				$this->setAgeQuantity($data[self::FIELD_AGE_QUANTITY]);
			} else {
				$this->setAgeQuantity(new FHIRAge($data[self::FIELD_AGE_QUANTITY]));
			}
		}
		if (isset($data[self::FIELD_AGE_RANGE])) {
			if ($data[self::FIELD_AGE_RANGE] instanceof FHIRRange) {
				$this->setAgeRange($data[self::FIELD_AGE_RANGE]);
			} else {
				$this->setAgeRange(new FHIRRange($data[self::FIELD_AGE_RANGE]));
			}
		}
		if (isset($data[self::FIELD_AGE_STRING]) || isset($data[self::FIELD_AGE_STRING_EXT])) {
			$value = $data[self::FIELD_AGE_STRING] ?? null;
			$ext =
				isset($data[self::FIELD_AGE_STRING_EXT]) &&
				is_array($data[self::FIELD_AGE_STRING_EXT])
					? $data[self::FIELD_AGE_STRING_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->setAgeString($value);
				} elseif (is_array($value)) {
					$this->setAgeString(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->setAgeString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setAgeString(new FHIRString($ext));
			}
		}
		if (
			isset($data[self::FIELD_DECEASED_BOOLEAN]) ||
			isset($data[self::FIELD_DECEASED_BOOLEAN_EXT])
		) {
			$value = $data[self::FIELD_DECEASED_BOOLEAN] ?? null;
			$ext =
				isset($data[self::FIELD_DECEASED_BOOLEAN_EXT]) &&
				is_array($data[self::FIELD_DECEASED_BOOLEAN_EXT])
					? $data[self::FIELD_DECEASED_BOOLEAN_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRBoolean) {
					$this->setDeceasedBoolean($value);
				} elseif (is_array($value)) {
					$this->setDeceasedBoolean(new FHIRBoolean(array_merge($ext, $value)));
				} else {
					$this->setDeceasedBoolean(
						new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setDeceasedBoolean(new FHIRBoolean($ext));
			}
		}
		if (isset($data[self::FIELD_DECEASED_QUANTITY])) {
			if ($data[self::FIELD_DECEASED_QUANTITY] instanceof FHIRAge) {
				$this->setDeceasedQuantity($data[self::FIELD_DECEASED_QUANTITY]);
			} else {
				$this->setDeceasedQuantity(new FHIRAge($data[self::FIELD_DECEASED_QUANTITY]));
			}
		}
		if (isset($data[self::FIELD_DECEASED_RANGE])) {
			if ($data[self::FIELD_DECEASED_RANGE] instanceof FHIRRange) {
				$this->setDeceasedRange($data[self::FIELD_DECEASED_RANGE]);
			} else {
				$this->setDeceasedRange(new FHIRRange($data[self::FIELD_DECEASED_RANGE]));
			}
		}
		if (
			isset($data[self::FIELD_DECEASED_DATE]) ||
			isset($data[self::FIELD_DECEASED_DATE_EXT])
		) {
			$value = $data[self::FIELD_DECEASED_DATE] ?? null;
			$ext =
				isset($data[self::FIELD_DECEASED_DATE_EXT]) &&
				is_array($data[self::FIELD_DECEASED_DATE_EXT])
					? $data[self::FIELD_DECEASED_DATE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRDate) {
					$this->setDeceasedDate($value);
				} elseif (is_array($value)) {
					$this->setDeceasedDate(new FHIRDate(array_merge($ext, $value)));
				} else {
					$this->setDeceasedDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setDeceasedDate(new FHIRDate($ext));
			}
		}
		if (
			isset($data[self::FIELD_DECEASED_STRING]) ||
			isset($data[self::FIELD_DECEASED_STRING_EXT])
		) {
			$value = $data[self::FIELD_DECEASED_STRING] ?? null;
			$ext =
				isset($data[self::FIELD_DECEASED_STRING_EXT]) &&
				is_array($data[self::FIELD_DECEASED_STRING_EXT])
					? $data[self::FIELD_DECEASED_STRING_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->setDeceasedString($value);
				} elseif (is_array($value)) {
					$this->setDeceasedString(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->setDeceasedString(
						new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setDeceasedString(new FHIRString($ext));
			}
		}
		if (isset($data[self::FIELD_NOTE])) {
			if ($data[self::FIELD_NOTE] instanceof FHIRAnnotation) {
				$this->setNote($data[self::FIELD_NOTE]);
			} else {
				$this->setNote(new FHIRAnnotation($data[self::FIELD_NOTE]));
			}
		}
		if (isset($data[self::FIELD_CONDITION])) {
			if (is_array($data[self::FIELD_CONDITION])) {
				foreach ($data[self::FIELD_CONDITION] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRFamilyMemberHistoryCondition) {
						$this->addCondition($v);
					} else {
						$this->addCondition(new FHIRFamilyMemberHistoryCondition($v));
					}
				}
			} elseif ($data[self::FIELD_CONDITION] instanceof FHIRFamilyMemberHistoryCondition) {
				$this->addCondition($data[self::FIELD_CONDITION]);
			} else {
				$this->addCondition(
					new FHIRFamilyMemberHistoryCondition($data[self::FIELD_CONDITION]),
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
		return "<FamilyMemberHistory{$xmlns}></FamilyMemberHistory>";
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
	 * This records identifiers associated with this family member history record that
	 * are defined by business processes and/ or used to refer to it when a direct URL
	 * reference to the resource itself is not appropriate (e.g. in CDA documents, or
	 * in written / printed documentation).
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
	 * This records identifiers associated with this family member history record that
	 * are defined by business processes and/ or used to refer to it when a direct URL
	 * reference to the resource itself is not appropriate (e.g. in CDA documents, or
	 * in written / printed documentation).
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
	 * This records identifiers associated with this family member history record that
	 * are defined by business processes and/ or used to refer to it when a direct URL
	 * reference to the resource itself is not appropriate (e.g. in CDA documents, or
	 * in written / printed documentation).
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
	 * The person who this history concerns.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getPatient(): ?FHIRReference
	{
		return $this->patient;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The person who this history concerns.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $patient
	 * @return static
	 */
	public function setPatient(?FHIRReference $patient = null): object
	{
		$this->_trackValueSet($this->patient, $patient);
		$this->patient = $patient;
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
	 * The date (and possibly time) when the family member history was taken.
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
	 * The date (and possibly time) when the family member history was taken.
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
	 * A code that identifies the status of the family history record.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A code specifying a state of a Family Member History record.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRFamilyHistoryStatus
	 */
	public function getStatus(): ?FHIRFamilyHistoryStatus
	{
		return $this->status;
	}

	/**
	 * A code that identifies the status of the family history record.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A code specifying a state of a Family Member History record.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRFamilyHistoryStatus $status
	 * @return static
	 */
	public function setStatus(?FHIRFamilyHistoryStatus $status = null): object
	{
		$this->_trackValueSet($this->status, $status);
		$this->status = $status;
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * This will either be a name or a description; e.g. "Aunt Susan", "my cousin with
	 * the red hair".
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
	 * This will either be a name or a description; e.g. "Aunt Susan", "my cousin with
	 * the red hair".
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
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The type of relationship this person has to the patient (father, mother, brother
	 * etc.).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	public function getRelationship(): ?FHIRCodeableConcept
	{
		return $this->relationship;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The type of relationship this person has to the patient (father, mother, brother
	 * etc.).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $relationship
	 * @return static
	 */
	public function setRelationship(?FHIRCodeableConcept $relationship = null): object
	{
		$this->_trackValueSet($this->relationship, $relationship);
		$this->relationship = $relationship;
		return $this;
	}

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Administrative Gender - the gender that the relative is considered to have for
	 * administration and record keeping purposes.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode
	 */
	public function getGender(): ?FHIRCode
	{
		return $this->gender;
	}

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Administrative Gender - the gender that the relative is considered to have for
	 * administration and record keeping purposes.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode $gender
	 * @return static
	 */
	public function setGender($gender = null): object
	{
		if (null !== $gender && !($gender instanceof FHIRCode)) {
			$gender = new FHIRCode($gender);
		}
		$this->_trackValueSet($this->gender, $gender);
		$this->gender = $gender;
		return $this;
	}

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The actual or approximate date of birth of the relative.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod
	 */
	public function getBornPeriod(): ?FHIRPeriod
	{
		return $this->bornPeriod;
	}

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The actual or approximate date of birth of the relative.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod $bornPeriod
	 * @return static
	 */
	public function setBornPeriod(?FHIRPeriod $bornPeriod = null): object
	{
		$this->_trackValueSet($this->bornPeriod, $bornPeriod);
		$this->bornPeriod = $bornPeriod;
		return $this;
	}

	/**
	 * A date or partial date (e.g. just year or year + month). There is no time zone.
	 * The format is a union of the schema types gYear, gYearMonth and date. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The actual or approximate date of birth of the relative.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRDatePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDate
	 */
	public function getBornDate(): ?FHIRDate
	{
		return $this->bornDate;
	}

	/**
	 * A date or partial date (e.g. just year or year + month). There is no time zone.
	 * The format is a union of the schema types gYear, gYearMonth and date. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The actual or approximate date of birth of the relative.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRDatePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDate $bornDate
	 * @return static
	 */
	public function setBornDate($bornDate = null): object
	{
		if (null !== $bornDate && !($bornDate instanceof FHIRDate)) {
			$bornDate = new FHIRDate($bornDate);
		}
		$this->_trackValueSet($this->bornDate, $bornDate);
		$this->bornDate = $bornDate;
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The actual or approximate date of birth of the relative.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	public function getBornString(): ?FHIRString
	{
		return $this->bornString;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The actual or approximate date of birth of the relative.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString $bornString
	 * @return static
	 */
	public function setBornString($bornString = null): object
	{
		if (null !== $bornString && !($bornString instanceof FHIRString)) {
			$bornString = new FHIRString($bornString);
		}
		$this->_trackValueSet($this->bornString, $bornString);
		$this->bornString = $bornString;
		return $this;
	}

	/**
	 * The actual or approximate age of the relative at the time the family member
	 * history is recorded.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRAge
	 */
	public function getAgeQuantity(): ?FHIRAge
	{
		return $this->ageQuantity;
	}

	/**
	 * The actual or approximate age of the relative at the time the family member
	 * history is recorded.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRAge $ageQuantity
	 * @return static
	 */
	public function setAgeQuantity(?FHIRAge $ageQuantity = null): object
	{
		$this->_trackValueSet($this->ageQuantity, $ageQuantity);
		$this->ageQuantity = $ageQuantity;
		return $this;
	}

	/**
	 * A set of ordered Quantities defined by a low and high limit.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The actual or approximate age of the relative at the time the family member
	 * history is recorded.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRange
	 */
	public function getAgeRange(): ?FHIRRange
	{
		return $this->ageRange;
	}

	/**
	 * A set of ordered Quantities defined by a low and high limit.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The actual or approximate age of the relative at the time the family member
	 * history is recorded.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRange $ageRange
	 * @return static
	 */
	public function setAgeRange(?FHIRRange $ageRange = null): object
	{
		$this->_trackValueSet($this->ageRange, $ageRange);
		$this->ageRange = $ageRange;
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The actual or approximate age of the relative at the time the family member
	 * history is recorded.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	public function getAgeString(): ?FHIRString
	{
		return $this->ageString;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The actual or approximate age of the relative at the time the family member
	 * history is recorded.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString $ageString
	 * @return static
	 */
	public function setAgeString($ageString = null): object
	{
		if (null !== $ageString && !($ageString instanceof FHIRString)) {
			$ageString = new FHIRString($ageString);
		}
		$this->_trackValueSet($this->ageString, $ageString);
		$this->ageString = $ageString;
		return $this;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Deceased flag or the actual or approximate age of the relative at the time of
	 * death for the family member history record.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
	 */
	public function getDeceasedBoolean(): ?FHIRBoolean
	{
		return $this->deceasedBoolean;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Deceased flag or the actual or approximate age of the relative at the time of
	 * death for the family member history record.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean $deceasedBoolean
	 * @return static
	 */
	public function setDeceasedBoolean($deceasedBoolean = null): object
	{
		if (null !== $deceasedBoolean && !($deceasedBoolean instanceof FHIRBoolean)) {
			$deceasedBoolean = new FHIRBoolean($deceasedBoolean);
		}
		$this->_trackValueSet($this->deceasedBoolean, $deceasedBoolean);
		$this->deceasedBoolean = $deceasedBoolean;
		return $this;
	}

	/**
	 * Deceased flag or the actual or approximate age of the relative at the time of
	 * death for the family member history record.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRAge
	 */
	public function getDeceasedQuantity(): ?FHIRAge
	{
		return $this->deceasedQuantity;
	}

	/**
	 * Deceased flag or the actual or approximate age of the relative at the time of
	 * death for the family member history record.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRAge $deceasedQuantity
	 * @return static
	 */
	public function setDeceasedQuantity(?FHIRAge $deceasedQuantity = null): object
	{
		$this->_trackValueSet($this->deceasedQuantity, $deceasedQuantity);
		$this->deceasedQuantity = $deceasedQuantity;
		return $this;
	}

	/**
	 * A set of ordered Quantities defined by a low and high limit.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Deceased flag or the actual or approximate age of the relative at the time of
	 * death for the family member history record.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRange
	 */
	public function getDeceasedRange(): ?FHIRRange
	{
		return $this->deceasedRange;
	}

	/**
	 * A set of ordered Quantities defined by a low and high limit.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Deceased flag or the actual or approximate age of the relative at the time of
	 * death for the family member history record.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRRange $deceasedRange
	 * @return static
	 */
	public function setDeceasedRange(?FHIRRange $deceasedRange = null): object
	{
		$this->_trackValueSet($this->deceasedRange, $deceasedRange);
		$this->deceasedRange = $deceasedRange;
		return $this;
	}

	/**
	 * A date or partial date (e.g. just year or year + month). There is no time zone.
	 * The format is a union of the schema types gYear, gYearMonth and date. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Deceased flag or the actual or approximate age of the relative at the time of
	 * death for the family member history record.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRDatePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDate
	 */
	public function getDeceasedDate(): ?FHIRDate
	{
		return $this->deceasedDate;
	}

	/**
	 * A date or partial date (e.g. just year or year + month). There is no time zone.
	 * The format is a union of the schema types gYear, gYearMonth and date. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Deceased flag or the actual or approximate age of the relative at the time of
	 * death for the family member history record.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRDatePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDate $deceasedDate
	 * @return static
	 */
	public function setDeceasedDate($deceasedDate = null): object
	{
		if (null !== $deceasedDate && !($deceasedDate instanceof FHIRDate)) {
			$deceasedDate = new FHIRDate($deceasedDate);
		}
		$this->_trackValueSet($this->deceasedDate, $deceasedDate);
		$this->deceasedDate = $deceasedDate;
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Deceased flag or the actual or approximate age of the relative at the time of
	 * death for the family member history record.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	public function getDeceasedString(): ?FHIRString
	{
		return $this->deceasedString;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Deceased flag or the actual or approximate age of the relative at the time of
	 * death for the family member history record.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString $deceasedString
	 * @return static
	 */
	public function setDeceasedString($deceasedString = null): object
	{
		if (null !== $deceasedString && !($deceasedString instanceof FHIRString)) {
			$deceasedString = new FHIRString($deceasedString);
		}
		$this->_trackValueSet($this->deceasedString, $deceasedString);
		$this->deceasedString = $deceasedString;
		return $this;
	}

	/**
	 * A text note which also contains information about who made the statement and
	 * when.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * This property allows a non condition-specific note to the made about the related
	 * person. Ideally, the note would be in the condition property, but this is not
	 * always possible.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAnnotation
	 */
	public function getNote(): ?FHIRAnnotation
	{
		return $this->note;
	}

	/**
	 * A text note which also contains information about who made the statement and
	 * when.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * This property allows a non condition-specific note to the made about the related
	 * person. Ideally, the note would be in the condition property, but this is not
	 * always possible.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAnnotation $note
	 * @return static
	 */
	public function setNote(?FHIRAnnotation $note = null): object
	{
		$this->_trackValueSet($this->note, $note);
		$this->note = $note;
		return $this;
	}

	/**
	 * Significant health events and conditions for a person related to the patient
	 * relevant in the context of care for the patient.
	 *
	 * The significant Conditions (or condition) that the family member had. This is a
	 * repeating section to allow a system to represent more than one condition per
	 * resource, though there is nothing stopping multiple resources - one per
	 * condition.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition[]
	 */
	public function getCondition(): ?array
	{
		return $this->condition;
	}

	/**
	 * Significant health events and conditions for a person related to the patient
	 * relevant in the context of care for the patient.
	 *
	 * The significant Conditions (or condition) that the family member had. This is a
	 * repeating section to allow a system to represent more than one condition per
	 * resource, though there is nothing stopping multiple resources - one per
	 * condition.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition $condition
	 * @return static
	 */
	public function addCondition(?FHIRFamilyMemberHistoryCondition $condition = null): object
	{
		$this->_trackValueAdded();
		$this->condition[] = $condition;
		return $this;
	}

	/**
	 * Significant health events and conditions for a person related to the patient
	 * relevant in the context of care for the patient.
	 *
	 * The significant Conditions (or condition) that the family member had. This is a
	 * repeating section to allow a system to represent more than one condition per
	 * resource, though there is nothing stopping multiple resources - one per
	 * condition.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition[] $condition
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
			if ($v instanceof FHIRFamilyMemberHistoryCondition) {
				$this->addCondition($v);
			} else {
				$this->addCondition(new FHIRFamilyMemberHistoryCondition($v));
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
		if ([] !== ($vs = $this->getIdentifier())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getPatient())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATIENT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDate())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DATE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getStatus())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_STATUS] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getName())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_NAME] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getRelationship())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_RELATIONSHIP] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getGender())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_GENDER] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getBornPeriod())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_BORN_PERIOD] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getBornDate())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_BORN_DATE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getBornString())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_BORN_STRING] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getAgeQuantity())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_AGE_QUANTITY] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getAgeRange())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_AGE_RANGE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getAgeString())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_AGE_STRING] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDeceasedBoolean())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DECEASED_BOOLEAN] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDeceasedQuantity())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DECEASED_QUANTITY] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDeceasedRange())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DECEASED_RANGE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDeceasedDate())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DECEASED_DATE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDeceasedString())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DECEASED_STRING] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getNote())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_NOTE] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getCondition())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_CONDITION, $i)] = $fieldErrs;
				}
			}
		}
		if (isset($validationRules[self::FIELD_IDENTIFIER])) {
			$v = $this->getIdentifier();
			foreach ($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY,
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
		if (isset($validationRules[self::FIELD_PATIENT])) {
			$v = $this->getPatient();
			foreach ($validationRules[self::FIELD_PATIENT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY,
					self::FIELD_PATIENT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PATIENT])) {
						$errs[self::FIELD_PATIENT] = [];
					}
					$errs[self::FIELD_PATIENT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DATE])) {
			$v = $this->getDate();
			foreach ($validationRules[self::FIELD_DATE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY,
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
		if (isset($validationRules[self::FIELD_STATUS])) {
			$v = $this->getStatus();
			foreach ($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY,
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
		if (isset($validationRules[self::FIELD_NAME])) {
			$v = $this->getName();
			foreach ($validationRules[self::FIELD_NAME] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY,
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
		if (isset($validationRules[self::FIELD_RELATIONSHIP])) {
			$v = $this->getRelationship();
			foreach ($validationRules[self::FIELD_RELATIONSHIP] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY,
					self::FIELD_RELATIONSHIP,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_RELATIONSHIP])) {
						$errs[self::FIELD_RELATIONSHIP] = [];
					}
					$errs[self::FIELD_RELATIONSHIP][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_GENDER])) {
			$v = $this->getGender();
			foreach ($validationRules[self::FIELD_GENDER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY,
					self::FIELD_GENDER,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_GENDER])) {
						$errs[self::FIELD_GENDER] = [];
					}
					$errs[self::FIELD_GENDER][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_BORN_PERIOD])) {
			$v = $this->getBornPeriod();
			foreach ($validationRules[self::FIELD_BORN_PERIOD] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY,
					self::FIELD_BORN_PERIOD,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_BORN_PERIOD])) {
						$errs[self::FIELD_BORN_PERIOD] = [];
					}
					$errs[self::FIELD_BORN_PERIOD][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_BORN_DATE])) {
			$v = $this->getBornDate();
			foreach ($validationRules[self::FIELD_BORN_DATE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY,
					self::FIELD_BORN_DATE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_BORN_DATE])) {
						$errs[self::FIELD_BORN_DATE] = [];
					}
					$errs[self::FIELD_BORN_DATE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_BORN_STRING])) {
			$v = $this->getBornString();
			foreach ($validationRules[self::FIELD_BORN_STRING] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY,
					self::FIELD_BORN_STRING,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_BORN_STRING])) {
						$errs[self::FIELD_BORN_STRING] = [];
					}
					$errs[self::FIELD_BORN_STRING][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_AGE_QUANTITY])) {
			$v = $this->getAgeQuantity();
			foreach ($validationRules[self::FIELD_AGE_QUANTITY] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY,
					self::FIELD_AGE_QUANTITY,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_AGE_QUANTITY])) {
						$errs[self::FIELD_AGE_QUANTITY] = [];
					}
					$errs[self::FIELD_AGE_QUANTITY][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_AGE_RANGE])) {
			$v = $this->getAgeRange();
			foreach ($validationRules[self::FIELD_AGE_RANGE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY,
					self::FIELD_AGE_RANGE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_AGE_RANGE])) {
						$errs[self::FIELD_AGE_RANGE] = [];
					}
					$errs[self::FIELD_AGE_RANGE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_AGE_STRING])) {
			$v = $this->getAgeString();
			foreach ($validationRules[self::FIELD_AGE_STRING] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY,
					self::FIELD_AGE_STRING,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_AGE_STRING])) {
						$errs[self::FIELD_AGE_STRING] = [];
					}
					$errs[self::FIELD_AGE_STRING][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DECEASED_BOOLEAN])) {
			$v = $this->getDeceasedBoolean();
			foreach ($validationRules[self::FIELD_DECEASED_BOOLEAN] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY,
					self::FIELD_DECEASED_BOOLEAN,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DECEASED_BOOLEAN])) {
						$errs[self::FIELD_DECEASED_BOOLEAN] = [];
					}
					$errs[self::FIELD_DECEASED_BOOLEAN][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DECEASED_QUANTITY])) {
			$v = $this->getDeceasedQuantity();
			foreach ($validationRules[self::FIELD_DECEASED_QUANTITY] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY,
					self::FIELD_DECEASED_QUANTITY,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DECEASED_QUANTITY])) {
						$errs[self::FIELD_DECEASED_QUANTITY] = [];
					}
					$errs[self::FIELD_DECEASED_QUANTITY][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DECEASED_RANGE])) {
			$v = $this->getDeceasedRange();
			foreach ($validationRules[self::FIELD_DECEASED_RANGE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY,
					self::FIELD_DECEASED_RANGE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DECEASED_RANGE])) {
						$errs[self::FIELD_DECEASED_RANGE] = [];
					}
					$errs[self::FIELD_DECEASED_RANGE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DECEASED_DATE])) {
			$v = $this->getDeceasedDate();
			foreach ($validationRules[self::FIELD_DECEASED_DATE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY,
					self::FIELD_DECEASED_DATE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DECEASED_DATE])) {
						$errs[self::FIELD_DECEASED_DATE] = [];
					}
					$errs[self::FIELD_DECEASED_DATE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DECEASED_STRING])) {
			$v = $this->getDeceasedString();
			foreach ($validationRules[self::FIELD_DECEASED_STRING] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY,
					self::FIELD_DECEASED_STRING,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DECEASED_STRING])) {
						$errs[self::FIELD_DECEASED_STRING] = [];
					}
					$errs[self::FIELD_DECEASED_STRING][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_NOTE])) {
			$v = $this->getNote();
			foreach ($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY,
					self::FIELD_NOTE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_NOTE])) {
						$errs[self::FIELD_NOTE] = [];
					}
					$errs[self::FIELD_NOTE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_CONDITION])) {
			$v = $this->getCondition();
			foreach ($validationRules[self::FIELD_CONDITION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY,
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory
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
						'FHIRFamilyMemberHistory::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRFamilyMemberHistory::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRFamilyMemberHistory(null);
		} elseif (!is_object($type) || !($type instanceof FHIRFamilyMemberHistory)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRFamilyMemberHistory::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory or null, %s seen.',
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
			if (self::FIELD_IDENTIFIER === $n->nodeName) {
				$type->addIdentifier(FHIRIdentifier::xmlUnserialize($n));
			} elseif (self::FIELD_PATIENT === $n->nodeName) {
				$type->setPatient(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_DATE === $n->nodeName) {
				$type->setDate(FHIRDateTime::xmlUnserialize($n));
			} elseif (self::FIELD_STATUS === $n->nodeName) {
				$type->setStatus(FHIRFamilyHistoryStatus::xmlUnserialize($n));
			} elseif (self::FIELD_NAME === $n->nodeName) {
				$type->setName(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_RELATIONSHIP === $n->nodeName) {
				$type->setRelationship(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_GENDER === $n->nodeName) {
				$type->setGender(FHIRCode::xmlUnserialize($n));
			} elseif (self::FIELD_BORN_PERIOD === $n->nodeName) {
				$type->setBornPeriod(FHIRPeriod::xmlUnserialize($n));
			} elseif (self::FIELD_BORN_DATE === $n->nodeName) {
				$type->setBornDate(FHIRDate::xmlUnserialize($n));
			} elseif (self::FIELD_BORN_STRING === $n->nodeName) {
				$type->setBornString(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_AGE_QUANTITY === $n->nodeName) {
				$type->setAgeQuantity(FHIRAge::xmlUnserialize($n));
			} elseif (self::FIELD_AGE_RANGE === $n->nodeName) {
				$type->setAgeRange(FHIRRange::xmlUnserialize($n));
			} elseif (self::FIELD_AGE_STRING === $n->nodeName) {
				$type->setAgeString(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_DECEASED_BOOLEAN === $n->nodeName) {
				$type->setDeceasedBoolean(FHIRBoolean::xmlUnserialize($n));
			} elseif (self::FIELD_DECEASED_QUANTITY === $n->nodeName) {
				$type->setDeceasedQuantity(FHIRAge::xmlUnserialize($n));
			} elseif (self::FIELD_DECEASED_RANGE === $n->nodeName) {
				$type->setDeceasedRange(FHIRRange::xmlUnserialize($n));
			} elseif (self::FIELD_DECEASED_DATE === $n->nodeName) {
				$type->setDeceasedDate(FHIRDate::xmlUnserialize($n));
			} elseif (self::FIELD_DECEASED_STRING === $n->nodeName) {
				$type->setDeceasedString(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_NOTE === $n->nodeName) {
				$type->setNote(FHIRAnnotation::xmlUnserialize($n));
			} elseif (self::FIELD_CONDITION === $n->nodeName) {
				$type->addCondition(FHIRFamilyMemberHistoryCondition::xmlUnserialize($n));
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
		$n = $element->attributes->getNamedItem(self::FIELD_DATE);
		if (null !== $n) {
			$pt = $type->getDate();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setDate($n->nodeValue);
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
		$n = $element->attributes->getNamedItem(self::FIELD_GENDER);
		if (null !== $n) {
			$pt = $type->getGender();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setGender($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_BORN_DATE);
		if (null !== $n) {
			$pt = $type->getBornDate();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setBornDate($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_BORN_STRING);
		if (null !== $n) {
			$pt = $type->getBornString();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setBornString($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_AGE_STRING);
		if (null !== $n) {
			$pt = $type->getAgeString();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setAgeString($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_DECEASED_BOOLEAN);
		if (null !== $n) {
			$pt = $type->getDeceasedBoolean();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setDeceasedBoolean($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_DECEASED_DATE);
		if (null !== $n) {
			$pt = $type->getDeceasedDate();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setDeceasedDate($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_DECEASED_STRING);
		if (null !== $n) {
			$pt = $type->getDeceasedString();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setDeceasedString($n->nodeValue);
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
		if (null !== ($v = $this->getPatient())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATIENT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDate())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DATE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getStatus())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_STATUS);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getName())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_NAME);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getRelationship())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_RELATIONSHIP);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getGender())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_GENDER);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getBornPeriod())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_BORN_PERIOD);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getBornDate())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_BORN_DATE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getBornString())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_BORN_STRING);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getAgeQuantity())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_AGE_QUANTITY);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getAgeRange())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_AGE_RANGE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getAgeString())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_AGE_STRING);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDeceasedBoolean())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DECEASED_BOOLEAN);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDeceasedQuantity())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DECEASED_QUANTITY);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDeceasedRange())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DECEASED_RANGE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDeceasedDate())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DECEASED_DATE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDeceasedString())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DECEASED_STRING);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getNote())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_NOTE);
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
		return $element;
	}

	/**
	 * @return \stdClass
	 */
	public function jsonSerialize()
	{
		$out = parent::jsonSerialize();
		if ([] !== ($vs = $this->getIdentifier())) {
			$out->{self::FIELD_IDENTIFIER} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_IDENTIFIER}[] = $v;
			}
		}
		if (null !== ($v = $this->getPatient())) {
			$out->{self::FIELD_PATIENT} = $v;
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
		if (null !== ($v = $this->getStatus())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_STATUS} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRFamilyHistoryStatus::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_STATUS_EXT} = $ext;
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
		if (null !== ($v = $this->getRelationship())) {
			$out->{self::FIELD_RELATIONSHIP} = $v;
		}
		if (null !== ($v = $this->getGender())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_GENDER} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRCode::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_GENDER_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getBornPeriod())) {
			$out->{self::FIELD_BORN_PERIOD} = $v;
		}
		if (null !== ($v = $this->getBornDate())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_BORN_DATE} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRDate::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_BORN_DATE_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getBornString())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_BORN_STRING} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRString::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_BORN_STRING_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getAgeQuantity())) {
			$out->{self::FIELD_AGE_QUANTITY} = $v;
		}
		if (null !== ($v = $this->getAgeRange())) {
			$out->{self::FIELD_AGE_RANGE} = $v;
		}
		if (null !== ($v = $this->getAgeString())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_AGE_STRING} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRString::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_AGE_STRING_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getDeceasedBoolean())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_DECEASED_BOOLEAN} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRBoolean::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_DECEASED_BOOLEAN_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getDeceasedQuantity())) {
			$out->{self::FIELD_DECEASED_QUANTITY} = $v;
		}
		if (null !== ($v = $this->getDeceasedRange())) {
			$out->{self::FIELD_DECEASED_RANGE} = $v;
		}
		if (null !== ($v = $this->getDeceasedDate())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_DECEASED_DATE} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRDate::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_DECEASED_DATE_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getDeceasedString())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_DECEASED_STRING} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRString::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_DECEASED_STRING_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getNote())) {
			$out->{self::FIELD_NOTE} = $v;
		}
		if ([] !== ($vs = $this->getCondition())) {
			$out->{self::FIELD_CONDITION} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_CONDITION}[] = $v;
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
