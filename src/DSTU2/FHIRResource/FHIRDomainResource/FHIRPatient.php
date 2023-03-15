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

use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAddress;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAttachment;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientAnimal;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientCommunication;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientContact;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientLink;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRContactPoint;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDate;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRExtension;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRHumanName;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRId;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInteger;
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
 * Demographics and other administrative information about an individual or animal
 * receiving care or other health-related services.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRPatient
 * @package \Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIRPatient extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_PATIENT;
	const FIELD_IDENTIFIER = 'identifier';
	const FIELD_ACTIVE = 'active';
	const FIELD_ACTIVE_EXT = '_active';
	const FIELD_NAME = 'name';
	const FIELD_TELECOM = 'telecom';
	const FIELD_GENDER = 'gender';
	const FIELD_GENDER_EXT = '_gender';
	const FIELD_BIRTH_DATE = 'birthDate';
	const FIELD_BIRTH_DATE_EXT = '_birthDate';
	const FIELD_DECEASED_BOOLEAN = 'deceasedBoolean';
	const FIELD_DECEASED_BOOLEAN_EXT = '_deceasedBoolean';
	const FIELD_DECEASED_DATE_TIME = 'deceasedDateTime';
	const FIELD_DECEASED_DATE_TIME_EXT = '_deceasedDateTime';
	const FIELD_ADDRESS = 'address';
	const FIELD_MARITAL_STATUS = 'maritalStatus';
	const FIELD_MULTIPLE_BIRTH_BOOLEAN = 'multipleBirthBoolean';
	const FIELD_MULTIPLE_BIRTH_BOOLEAN_EXT = '_multipleBirthBoolean';
	const FIELD_MULTIPLE_BIRTH_INTEGER = 'multipleBirthInteger';
	const FIELD_MULTIPLE_BIRTH_INTEGER_EXT = '_multipleBirthInteger';
	const FIELD_PHOTO = 'photo';
	const FIELD_CONTACT = 'contact';
	const FIELD_ANIMAL = 'animal';
	const FIELD_COMMUNICATION = 'communication';
	const FIELD_CARE_PROVIDER = 'careProvider';
	const FIELD_MANAGING_ORGANIZATION = 'managingOrganization';
	const FIELD_LINK = 'link';

	/** @var string */
	private $_xmlns = '';

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * An identifier for this patient.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier[]
	 */
	protected ?array $identifier = [];

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Whether this patient record is in active use.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
	 */
	protected ?FHIRBoolean $active = null;

	/**
	 * A human's name with the ability to identify parts and usage.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A name associated with the individual.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRHumanName[]
	 */
	protected ?array $name = [];

	/**
	 * Details for all kinds of technology mediated contact points for a person or
	 * organization, including telephone, email, etc.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A contact detail (e.g. a telephone number or an email address) by which the
	 * individual may be contacted.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRContactPoint[]
	 */
	protected ?array $telecom = [];

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Administrative Gender - the gender that the patient is considered to have for
	 * administration and record keeping purposes.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode
	 */
	protected ?FHIRCode $gender = null;

	/**
	 * A date or partial date (e.g. just year or year + month). There is no time zone.
	 * The format is a union of the schema types gYear, gYearMonth and date. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The date of birth for the individual.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRDatePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDate
	 */
	protected ?FHIRDate $birthDate = null;

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Indicates if the individual is deceased or not.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
	 */
	protected ?FHIRBoolean $deceasedBoolean = null;

	/**
	 * A date, date-time or partial date (e.g. just year or year + month). If hours and
	 * minutes are specified, a time zone SHALL be populated. The format is a union of
	 * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
	 * due to schema type constraints but may be zero-filled and may be ignored. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Indicates if the individual is deceased or not.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime
	 */
	protected ?FHIRDateTime $deceasedDateTime = null;

	/**
	 * There is a variety of postal address formats defined around the world. This
	 * format defines a superset that is the basis for all addresses around the world.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Addresses for the individual.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAddress[]
	 */
	protected ?array $address = [];

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * This field contains a patient's most recent marital (civil) status.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	protected ?FHIRCodeableConcept $maritalStatus = null;

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Indicates whether the patient is part of a multiple or indicates the actual
	 * birth order.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
	 */
	protected ?FHIRBoolean $multipleBirthBoolean = null;

	/**
	 * A whole number
	 * 32 bit number; for values larger than this, use decimal
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Indicates whether the patient is part of a multiple or indicates the actual
	 * birth order.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRIntegerPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInteger
	 */
	protected ?FHIRInteger $multipleBirthInteger = null;

	/**
	 * For referring to data content defined in other formats.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Image of the patient.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAttachment[]
	 */
	protected ?array $photo = [];

	/**
	 * Demographics and other administrative information about an individual or animal
	 * receiving care or other health-related services.
	 *
	 * A contact party (e.g. guardian, partner, friend) for the patient.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientContact[]
	 */
	protected ?array $contact = [];

	/**
	 * Demographics and other administrative information about an individual or animal
	 * receiving care or other health-related services.
	 *
	 * This patient is known to be an animal.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientAnimal
	 */
	protected ?FHIRPatientAnimal $animal = null;

	/**
	 * Demographics and other administrative information about an individual or animal
	 * receiving care or other health-related services.
	 *
	 * Languages which may be used to communicate with the patient about his or her
	 * health.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientCommunication[]
	 */
	protected ?array $communication = [];

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Patient's nominated care provider.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	protected ?array $careProvider = [];

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Organization that is the custodian of the patient record.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $managingOrganization = null;

	/**
	 * Demographics and other administrative information about an individual or animal
	 * receiving care or other health-related services.
	 *
	 * Link to another patient resource that concerns the same actual patient.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientLink[]
	 */
	protected ?array $link = [];

	/**
	 * Validation map for fields in type Patient
	 * @var array
	 */
	private static array $_validationRules = [];

	/**
	 * FHIRPatient Constructor
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
					'FHIRPatient::_construct - $data expected to be null or array, %s seen',
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
		if (isset($data[self::FIELD_ACTIVE]) || isset($data[self::FIELD_ACTIVE_EXT])) {
			$value = $data[self::FIELD_ACTIVE] ?? null;
			$ext =
				isset($data[self::FIELD_ACTIVE_EXT]) && is_array($data[self::FIELD_ACTIVE_EXT])
					? $data[self::FIELD_ACTIVE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRBoolean) {
					$this->setActive($value);
				} elseif (is_array($value)) {
					$this->setActive(new FHIRBoolean(array_merge($ext, $value)));
				} else {
					$this->setActive(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setActive(new FHIRBoolean($ext));
			}
		}
		if (isset($data[self::FIELD_NAME])) {
			if (is_array($data[self::FIELD_NAME])) {
				foreach ($data[self::FIELD_NAME] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRHumanName) {
						$this->addName($v);
					} else {
						$this->addName(new FHIRHumanName($v));
					}
				}
			} elseif ($data[self::FIELD_NAME] instanceof FHIRHumanName) {
				$this->addName($data[self::FIELD_NAME]);
			} else {
				$this->addName(new FHIRHumanName($data[self::FIELD_NAME]));
			}
		}
		if (isset($data[self::FIELD_TELECOM])) {
			if (is_array($data[self::FIELD_TELECOM])) {
				foreach ($data[self::FIELD_TELECOM] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRContactPoint) {
						$this->addTelecom($v);
					} else {
						$this->addTelecom(new FHIRContactPoint($v));
					}
				}
			} elseif ($data[self::FIELD_TELECOM] instanceof FHIRContactPoint) {
				$this->addTelecom($data[self::FIELD_TELECOM]);
			} else {
				$this->addTelecom(new FHIRContactPoint($data[self::FIELD_TELECOM]));
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
		if (isset($data[self::FIELD_BIRTH_DATE]) || isset($data[self::FIELD_BIRTH_DATE_EXT])) {
			$value = $data[self::FIELD_BIRTH_DATE] ?? null;
			$ext =
				isset($data[self::FIELD_BIRTH_DATE_EXT]) &&
				is_array($data[self::FIELD_BIRTH_DATE_EXT])
					? $data[self::FIELD_BIRTH_DATE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRDate) {
					$this->setBirthDate($value);
				} elseif (is_array($value)) {
					$this->setBirthDate(new FHIRDate(array_merge($ext, $value)));
				} else {
					$this->setBirthDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setBirthDate(new FHIRDate($ext));
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
		if (
			isset($data[self::FIELD_DECEASED_DATE_TIME]) ||
			isset($data[self::FIELD_DECEASED_DATE_TIME_EXT])
		) {
			$value = $data[self::FIELD_DECEASED_DATE_TIME] ?? null;
			$ext =
				isset($data[self::FIELD_DECEASED_DATE_TIME_EXT]) &&
				is_array($data[self::FIELD_DECEASED_DATE_TIME_EXT])
					? $data[self::FIELD_DECEASED_DATE_TIME_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRDateTime) {
					$this->setDeceasedDateTime($value);
				} elseif (is_array($value)) {
					$this->setDeceasedDateTime(new FHIRDateTime(array_merge($ext, $value)));
				} else {
					$this->setDeceasedDateTime(
						new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setDeceasedDateTime(new FHIRDateTime($ext));
			}
		}
		if (isset($data[self::FIELD_ADDRESS])) {
			if (is_array($data[self::FIELD_ADDRESS])) {
				foreach ($data[self::FIELD_ADDRESS] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRAddress) {
						$this->addAddress($v);
					} else {
						$this->addAddress(new FHIRAddress($v));
					}
				}
			} elseif ($data[self::FIELD_ADDRESS] instanceof FHIRAddress) {
				$this->addAddress($data[self::FIELD_ADDRESS]);
			} else {
				$this->addAddress(new FHIRAddress($data[self::FIELD_ADDRESS]));
			}
		}
		if (isset($data[self::FIELD_MARITAL_STATUS])) {
			if ($data[self::FIELD_MARITAL_STATUS] instanceof FHIRCodeableConcept) {
				$this->setMaritalStatus($data[self::FIELD_MARITAL_STATUS]);
			} else {
				$this->setMaritalStatus(new FHIRCodeableConcept($data[self::FIELD_MARITAL_STATUS]));
			}
		}
		if (
			isset($data[self::FIELD_MULTIPLE_BIRTH_BOOLEAN]) ||
			isset($data[self::FIELD_MULTIPLE_BIRTH_BOOLEAN_EXT])
		) {
			$value = $data[self::FIELD_MULTIPLE_BIRTH_BOOLEAN] ?? null;
			$ext =
				isset($data[self::FIELD_MULTIPLE_BIRTH_BOOLEAN_EXT]) &&
				is_array($data[self::FIELD_MULTIPLE_BIRTH_BOOLEAN_EXT])
					? $data[self::FIELD_MULTIPLE_BIRTH_BOOLEAN_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRBoolean) {
					$this->setMultipleBirthBoolean($value);
				} elseif (is_array($value)) {
					$this->setMultipleBirthBoolean(new FHIRBoolean(array_merge($ext, $value)));
				} else {
					$this->setMultipleBirthBoolean(
						new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setMultipleBirthBoolean(new FHIRBoolean($ext));
			}
		}
		if (
			isset($data[self::FIELD_MULTIPLE_BIRTH_INTEGER]) ||
			isset($data[self::FIELD_MULTIPLE_BIRTH_INTEGER_EXT])
		) {
			$value = $data[self::FIELD_MULTIPLE_BIRTH_INTEGER] ?? null;
			$ext =
				isset($data[self::FIELD_MULTIPLE_BIRTH_INTEGER_EXT]) &&
				is_array($data[self::FIELD_MULTIPLE_BIRTH_INTEGER_EXT])
					? $data[self::FIELD_MULTIPLE_BIRTH_INTEGER_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRInteger) {
					$this->setMultipleBirthInteger($value);
				} elseif (is_array($value)) {
					$this->setMultipleBirthInteger(new FHIRInteger(array_merge($ext, $value)));
				} else {
					$this->setMultipleBirthInteger(
						new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setMultipleBirthInteger(new FHIRInteger($ext));
			}
		}
		if (isset($data[self::FIELD_PHOTO])) {
			if (is_array($data[self::FIELD_PHOTO])) {
				foreach ($data[self::FIELD_PHOTO] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRAttachment) {
						$this->addPhoto($v);
					} else {
						$this->addPhoto(new FHIRAttachment($v));
					}
				}
			} elseif ($data[self::FIELD_PHOTO] instanceof FHIRAttachment) {
				$this->addPhoto($data[self::FIELD_PHOTO]);
			} else {
				$this->addPhoto(new FHIRAttachment($data[self::FIELD_PHOTO]));
			}
		}
		if (isset($data[self::FIELD_CONTACT])) {
			if (is_array($data[self::FIELD_CONTACT])) {
				foreach ($data[self::FIELD_CONTACT] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRPatientContact) {
						$this->addContact($v);
					} else {
						$this->addContact(new FHIRPatientContact($v));
					}
				}
			} elseif ($data[self::FIELD_CONTACT] instanceof FHIRPatientContact) {
				$this->addContact($data[self::FIELD_CONTACT]);
			} else {
				$this->addContact(new FHIRPatientContact($data[self::FIELD_CONTACT]));
			}
		}
		if (isset($data[self::FIELD_ANIMAL])) {
			if ($data[self::FIELD_ANIMAL] instanceof FHIRPatientAnimal) {
				$this->setAnimal($data[self::FIELD_ANIMAL]);
			} else {
				$this->setAnimal(new FHIRPatientAnimal($data[self::FIELD_ANIMAL]));
			}
		}
		if (isset($data[self::FIELD_COMMUNICATION])) {
			if (is_array($data[self::FIELD_COMMUNICATION])) {
				foreach ($data[self::FIELD_COMMUNICATION] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRPatientCommunication) {
						$this->addCommunication($v);
					} else {
						$this->addCommunication(new FHIRPatientCommunication($v));
					}
				}
			} elseif ($data[self::FIELD_COMMUNICATION] instanceof FHIRPatientCommunication) {
				$this->addCommunication($data[self::FIELD_COMMUNICATION]);
			} else {
				$this->addCommunication(
					new FHIRPatientCommunication($data[self::FIELD_COMMUNICATION]),
				);
			}
		}
		if (isset($data[self::FIELD_CARE_PROVIDER])) {
			if (is_array($data[self::FIELD_CARE_PROVIDER])) {
				foreach ($data[self::FIELD_CARE_PROVIDER] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRReference) {
						$this->addCareProvider($v);
					} else {
						$this->addCareProvider(new FHIRReference($v));
					}
				}
			} elseif ($data[self::FIELD_CARE_PROVIDER] instanceof FHIRReference) {
				$this->addCareProvider($data[self::FIELD_CARE_PROVIDER]);
			} else {
				$this->addCareProvider(new FHIRReference($data[self::FIELD_CARE_PROVIDER]));
			}
		}
		if (isset($data[self::FIELD_MANAGING_ORGANIZATION])) {
			if ($data[self::FIELD_MANAGING_ORGANIZATION] instanceof FHIRReference) {
				$this->setManagingOrganization($data[self::FIELD_MANAGING_ORGANIZATION]);
			} else {
				$this->setManagingOrganization(
					new FHIRReference($data[self::FIELD_MANAGING_ORGANIZATION]),
				);
			}
		}
		if (isset($data[self::FIELD_LINK])) {
			if (is_array($data[self::FIELD_LINK])) {
				foreach ($data[self::FIELD_LINK] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRPatientLink) {
						$this->addLink($v);
					} else {
						$this->addLink(new FHIRPatientLink($v));
					}
				}
			} elseif ($data[self::FIELD_LINK] instanceof FHIRPatientLink) {
				$this->addLink($data[self::FIELD_LINK]);
			} else {
				$this->addLink(new FHIRPatientLink($data[self::FIELD_LINK]));
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
		return "<Patient{$xmlns}></Patient>";
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
	 * An identifier for this patient.
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
	 * An identifier for this patient.
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
	 * An identifier for this patient.
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
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Whether this patient record is in active use.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
	 */
	public function getActive(): ?FHIRBoolean
	{
		return $this->active;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Whether this patient record is in active use.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean $active
	 * @return static
	 */
	public function setActive($active = null): object
	{
		if (null !== $active && !($active instanceof FHIRBoolean)) {
			$active = new FHIRBoolean($active);
		}
		$this->_trackValueSet($this->active, $active);
		$this->active = $active;
		return $this;
	}

	/**
	 * A human's name with the ability to identify parts and usage.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A name associated with the individual.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRHumanName[]
	 */
	public function getName(): ?array
	{
		return $this->name;
	}

	/**
	 * A human's name with the ability to identify parts and usage.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A name associated with the individual.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRHumanName $name
	 * @return static
	 */
	public function addName(?FHIRHumanName $name = null): object
	{
		$this->_trackValueAdded();
		$this->name[] = $name;
		return $this;
	}

	/**
	 * A human's name with the ability to identify parts and usage.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A name associated with the individual.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRHumanName[] $name
	 * @return static
	 */
	public function setName(array $name = []): object
	{
		if ([] !== $this->name) {
			$this->_trackValuesRemoved(count($this->name));
			$this->name = [];
		}
		if ([] === $name) {
			return $this;
		}
		foreach ($name as $v) {
			if ($v instanceof FHIRHumanName) {
				$this->addName($v);
			} else {
				$this->addName(new FHIRHumanName($v));
			}
		}
		return $this;
	}

	/**
	 * Details for all kinds of technology mediated contact points for a person or
	 * organization, including telephone, email, etc.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A contact detail (e.g. a telephone number or an email address) by which the
	 * individual may be contacted.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRContactPoint[]
	 */
	public function getTelecom(): ?array
	{
		return $this->telecom;
	}

	/**
	 * Details for all kinds of technology mediated contact points for a person or
	 * organization, including telephone, email, etc.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A contact detail (e.g. a telephone number or an email address) by which the
	 * individual may be contacted.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRContactPoint $telecom
	 * @return static
	 */
	public function addTelecom(?FHIRContactPoint $telecom = null): object
	{
		$this->_trackValueAdded();
		$this->telecom[] = $telecom;
		return $this;
	}

	/**
	 * Details for all kinds of technology mediated contact points for a person or
	 * organization, including telephone, email, etc.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A contact detail (e.g. a telephone number or an email address) by which the
	 * individual may be contacted.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRContactPoint[] $telecom
	 * @return static
	 */
	public function setTelecom(array $telecom = []): object
	{
		if ([] !== $this->telecom) {
			$this->_trackValuesRemoved(count($this->telecom));
			$this->telecom = [];
		}
		if ([] === $telecom) {
			return $this;
		}
		foreach ($telecom as $v) {
			if ($v instanceof FHIRContactPoint) {
				$this->addTelecom($v);
			} else {
				$this->addTelecom(new FHIRContactPoint($v));
			}
		}
		return $this;
	}

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Administrative Gender - the gender that the patient is considered to have for
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
	 * Administrative Gender - the gender that the patient is considered to have for
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
	 * A date or partial date (e.g. just year or year + month). There is no time zone.
	 * The format is a union of the schema types gYear, gYearMonth and date. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The date of birth for the individual.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRDatePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDate
	 */
	public function getBirthDate(): ?FHIRDate
	{
		return $this->birthDate;
	}

	/**
	 * A date or partial date (e.g. just year or year + month). There is no time zone.
	 * The format is a union of the schema types gYear, gYearMonth and date. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The date of birth for the individual.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRDatePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDate $birthDate
	 * @return static
	 */
	public function setBirthDate($birthDate = null): object
	{
		if (null !== $birthDate && !($birthDate instanceof FHIRDate)) {
			$birthDate = new FHIRDate($birthDate);
		}
		$this->_trackValueSet($this->birthDate, $birthDate);
		$this->birthDate = $birthDate;
		return $this;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Indicates if the individual is deceased or not.
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
	 * Indicates if the individual is deceased or not.
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
	 * A date, date-time or partial date (e.g. just year or year + month). If hours and
	 * minutes are specified, a time zone SHALL be populated. The format is a union of
	 * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
	 * due to schema type constraints but may be zero-filled and may be ignored. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Indicates if the individual is deceased or not.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime
	 */
	public function getDeceasedDateTime(): ?FHIRDateTime
	{
		return $this->deceasedDateTime;
	}

	/**
	 * A date, date-time or partial date (e.g. just year or year + month). If hours and
	 * minutes are specified, a time zone SHALL be populated. The format is a union of
	 * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
	 * due to schema type constraints but may be zero-filled and may be ignored. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Indicates if the individual is deceased or not.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime $deceasedDateTime
	 * @return static
	 */
	public function setDeceasedDateTime($deceasedDateTime = null): object
	{
		if (null !== $deceasedDateTime && !($deceasedDateTime instanceof FHIRDateTime)) {
			$deceasedDateTime = new FHIRDateTime($deceasedDateTime);
		}
		$this->_trackValueSet($this->deceasedDateTime, $deceasedDateTime);
		$this->deceasedDateTime = $deceasedDateTime;
		return $this;
	}

	/**
	 * There is a variety of postal address formats defined around the world. This
	 * format defines a superset that is the basis for all addresses around the world.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Addresses for the individual.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAddress[]
	 */
	public function getAddress(): ?array
	{
		return $this->address;
	}

	/**
	 * There is a variety of postal address formats defined around the world. This
	 * format defines a superset that is the basis for all addresses around the world.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Addresses for the individual.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAddress $address
	 * @return static
	 */
	public function addAddress(?FHIRAddress $address = null): object
	{
		$this->_trackValueAdded();
		$this->address[] = $address;
		return $this;
	}

	/**
	 * There is a variety of postal address formats defined around the world. This
	 * format defines a superset that is the basis for all addresses around the world.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Addresses for the individual.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAddress[] $address
	 * @return static
	 */
	public function setAddress(array $address = []): object
	{
		if ([] !== $this->address) {
			$this->_trackValuesRemoved(count($this->address));
			$this->address = [];
		}
		if ([] === $address) {
			return $this;
		}
		foreach ($address as $v) {
			if ($v instanceof FHIRAddress) {
				$this->addAddress($v);
			} else {
				$this->addAddress(new FHIRAddress($v));
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
	 * This field contains a patient's most recent marital (civil) status.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	public function getMaritalStatus(): ?FHIRCodeableConcept
	{
		return $this->maritalStatus;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * This field contains a patient's most recent marital (civil) status.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $maritalStatus
	 * @return static
	 */
	public function setMaritalStatus(?FHIRCodeableConcept $maritalStatus = null): object
	{
		$this->_trackValueSet($this->maritalStatus, $maritalStatus);
		$this->maritalStatus = $maritalStatus;
		return $this;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Indicates whether the patient is part of a multiple or indicates the actual
	 * birth order.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean
	 */
	public function getMultipleBirthBoolean(): ?FHIRBoolean
	{
		return $this->multipleBirthBoolean;
	}

	/**
	 * Value of "true" or "false"
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Indicates whether the patient is part of a multiple or indicates the actual
	 * birth order.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRBooleanPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBoolean $multipleBirthBoolean
	 * @return static
	 */
	public function setMultipleBirthBoolean($multipleBirthBoolean = null): object
	{
		if (null !== $multipleBirthBoolean && !($multipleBirthBoolean instanceof FHIRBoolean)) {
			$multipleBirthBoolean = new FHIRBoolean($multipleBirthBoolean);
		}
		$this->_trackValueSet($this->multipleBirthBoolean, $multipleBirthBoolean);
		$this->multipleBirthBoolean = $multipleBirthBoolean;
		return $this;
	}

	/**
	 * A whole number
	 * 32 bit number; for values larger than this, use decimal
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Indicates whether the patient is part of a multiple or indicates the actual
	 * birth order.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRIntegerPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInteger
	 */
	public function getMultipleBirthInteger(): ?FHIRInteger
	{
		return $this->multipleBirthInteger;
	}

	/**
	 * A whole number
	 * 32 bit number; for values larger than this, use decimal
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Indicates whether the patient is part of a multiple or indicates the actual
	 * birth order.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRIntegerPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInteger $multipleBirthInteger
	 * @return static
	 */
	public function setMultipleBirthInteger($multipleBirthInteger = null): object
	{
		if (null !== $multipleBirthInteger && !($multipleBirthInteger instanceof FHIRInteger)) {
			$multipleBirthInteger = new FHIRInteger($multipleBirthInteger);
		}
		$this->_trackValueSet($this->multipleBirthInteger, $multipleBirthInteger);
		$this->multipleBirthInteger = $multipleBirthInteger;
		return $this;
	}

	/**
	 * For referring to data content defined in other formats.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Image of the patient.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAttachment[]
	 */
	public function getPhoto(): ?array
	{
		return $this->photo;
	}

	/**
	 * For referring to data content defined in other formats.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Image of the patient.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAttachment $photo
	 * @return static
	 */
	public function addPhoto(?FHIRAttachment $photo = null): object
	{
		$this->_trackValueAdded();
		$this->photo[] = $photo;
		return $this;
	}

	/**
	 * For referring to data content defined in other formats.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Image of the patient.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAttachment[] $photo
	 * @return static
	 */
	public function setPhoto(array $photo = []): object
	{
		if ([] !== $this->photo) {
			$this->_trackValuesRemoved(count($this->photo));
			$this->photo = [];
		}
		if ([] === $photo) {
			return $this;
		}
		foreach ($photo as $v) {
			if ($v instanceof FHIRAttachment) {
				$this->addPhoto($v);
			} else {
				$this->addPhoto(new FHIRAttachment($v));
			}
		}
		return $this;
	}

	/**
	 * Demographics and other administrative information about an individual or animal
	 * receiving care or other health-related services.
	 *
	 * A contact party (e.g. guardian, partner, friend) for the patient.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientContact[]
	 */
	public function getContact(): ?array
	{
		return $this->contact;
	}

	/**
	 * Demographics and other administrative information about an individual or animal
	 * receiving care or other health-related services.
	 *
	 * A contact party (e.g. guardian, partner, friend) for the patient.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientContact $contact
	 * @return static
	 */
	public function addContact(?FHIRPatientContact $contact = null): object
	{
		$this->_trackValueAdded();
		$this->contact[] = $contact;
		return $this;
	}

	/**
	 * Demographics and other administrative information about an individual or animal
	 * receiving care or other health-related services.
	 *
	 * A contact party (e.g. guardian, partner, friend) for the patient.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientContact[] $contact
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
			if ($v instanceof FHIRPatientContact) {
				$this->addContact($v);
			} else {
				$this->addContact(new FHIRPatientContact($v));
			}
		}
		return $this;
	}

	/**
	 * Demographics and other administrative information about an individual or animal
	 * receiving care or other health-related services.
	 *
	 * This patient is known to be an animal.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientAnimal
	 */
	public function getAnimal(): ?FHIRPatientAnimal
	{
		return $this->animal;
	}

	/**
	 * Demographics and other administrative information about an individual or animal
	 * receiving care or other health-related services.
	 *
	 * This patient is known to be an animal.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientAnimal $animal
	 * @return static
	 */
	public function setAnimal(?FHIRPatientAnimal $animal = null): object
	{
		$this->_trackValueSet($this->animal, $animal);
		$this->animal = $animal;
		return $this;
	}

	/**
	 * Demographics and other administrative information about an individual or animal
	 * receiving care or other health-related services.
	 *
	 * Languages which may be used to communicate with the patient about his or her
	 * health.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientCommunication[]
	 */
	public function getCommunication(): ?array
	{
		return $this->communication;
	}

	/**
	 * Demographics and other administrative information about an individual or animal
	 * receiving care or other health-related services.
	 *
	 * Languages which may be used to communicate with the patient about his or her
	 * health.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientCommunication $communication
	 * @return static
	 */
	public function addCommunication(?FHIRPatientCommunication $communication = null): object
	{
		$this->_trackValueAdded();
		$this->communication[] = $communication;
		return $this;
	}

	/**
	 * Demographics and other administrative information about an individual or animal
	 * receiving care or other health-related services.
	 *
	 * Languages which may be used to communicate with the patient about his or her
	 * health.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientCommunication[] $communication
	 * @return static
	 */
	public function setCommunication(array $communication = []): object
	{
		if ([] !== $this->communication) {
			$this->_trackValuesRemoved(count($this->communication));
			$this->communication = [];
		}
		if ([] === $communication) {
			return $this;
		}
		foreach ($communication as $v) {
			if ($v instanceof FHIRPatientCommunication) {
				$this->addCommunication($v);
			} else {
				$this->addCommunication(new FHIRPatientCommunication($v));
			}
		}
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Patient's nominated care provider.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	public function getCareProvider(): ?array
	{
		return $this->careProvider;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Patient's nominated care provider.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $careProvider
	 * @return static
	 */
	public function addCareProvider(?FHIRReference $careProvider = null): object
	{
		$this->_trackValueAdded();
		$this->careProvider[] = $careProvider;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Patient's nominated care provider.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[] $careProvider
	 * @return static
	 */
	public function setCareProvider(array $careProvider = []): object
	{
		if ([] !== $this->careProvider) {
			$this->_trackValuesRemoved(count($this->careProvider));
			$this->careProvider = [];
		}
		if ([] === $careProvider) {
			return $this;
		}
		foreach ($careProvider as $v) {
			if ($v instanceof FHIRReference) {
				$this->addCareProvider($v);
			} else {
				$this->addCareProvider(new FHIRReference($v));
			}
		}
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Organization that is the custodian of the patient record.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getManagingOrganization(): ?FHIRReference
	{
		return $this->managingOrganization;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Organization that is the custodian of the patient record.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $managingOrganization
	 * @return static
	 */
	public function setManagingOrganization(?FHIRReference $managingOrganization = null): object
	{
		$this->_trackValueSet($this->managingOrganization, $managingOrganization);
		$this->managingOrganization = $managingOrganization;
		return $this;
	}

	/**
	 * Demographics and other administrative information about an individual or animal
	 * receiving care or other health-related services.
	 *
	 * Link to another patient resource that concerns the same actual patient.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientLink[]
	 */
	public function getLink(): ?array
	{
		return $this->link;
	}

	/**
	 * Demographics and other administrative information about an individual or animal
	 * receiving care or other health-related services.
	 *
	 * Link to another patient resource that concerns the same actual patient.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientLink $link
	 * @return static
	 */
	public function addLink(?FHIRPatientLink $link = null): object
	{
		$this->_trackValueAdded();
		$this->link[] = $link;
		return $this;
	}

	/**
	 * Demographics and other administrative information about an individual or animal
	 * receiving care or other health-related services.
	 *
	 * Link to another patient resource that concerns the same actual patient.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientLink[] $link
	 * @return static
	 */
	public function setLink(array $link = []): object
	{
		if ([] !== $this->link) {
			$this->_trackValuesRemoved(count($this->link));
			$this->link = [];
		}
		if ([] === $link) {
			return $this;
		}
		foreach ($link as $v) {
			if ($v instanceof FHIRPatientLink) {
				$this->addLink($v);
			} else {
				$this->addLink(new FHIRPatientLink($v));
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
		if (null !== ($v = $this->getActive())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_ACTIVE] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getName())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_NAME, $i)] = $fieldErrs;
				}
			}
		}
		if ([] !== ($vs = $this->getTelecom())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_TELECOM, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getGender())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_GENDER] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getBirthDate())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_BIRTH_DATE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDeceasedBoolean())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DECEASED_BOOLEAN] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDeceasedDateTime())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DECEASED_DATE_TIME] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getAddress())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_ADDRESS, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getMaritalStatus())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MARITAL_STATUS] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMultipleBirthBoolean())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MULTIPLE_BIRTH_BOOLEAN] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMultipleBirthInteger())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MULTIPLE_BIRTH_INTEGER] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getPhoto())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_PHOTO, $i)] = $fieldErrs;
				}
			}
		}
		if ([] !== ($vs = $this->getContact())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_CONTACT, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getAnimal())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_ANIMAL] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getCommunication())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_COMMUNICATION, $i)] = $fieldErrs;
				}
			}
		}
		if ([] !== ($vs = $this->getCareProvider())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_CARE_PROVIDER, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getManagingOrganization())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MANAGING_ORGANIZATION] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getLink())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_LINK, $i)] = $fieldErrs;
				}
			}
		}
		if (isset($validationRules[self::FIELD_IDENTIFIER])) {
			$v = $this->getIdentifier();
			foreach ($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PATIENT,
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
		if (isset($validationRules[self::FIELD_ACTIVE])) {
			$v = $this->getActive();
			foreach ($validationRules[self::FIELD_ACTIVE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PATIENT,
					self::FIELD_ACTIVE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_ACTIVE])) {
						$errs[self::FIELD_ACTIVE] = [];
					}
					$errs[self::FIELD_ACTIVE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_NAME])) {
			$v = $this->getName();
			foreach ($validationRules[self::FIELD_NAME] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PATIENT,
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
		if (isset($validationRules[self::FIELD_TELECOM])) {
			$v = $this->getTelecom();
			foreach ($validationRules[self::FIELD_TELECOM] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PATIENT,
					self::FIELD_TELECOM,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_TELECOM])) {
						$errs[self::FIELD_TELECOM] = [];
					}
					$errs[self::FIELD_TELECOM][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_GENDER])) {
			$v = $this->getGender();
			foreach ($validationRules[self::FIELD_GENDER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PATIENT,
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
		if (isset($validationRules[self::FIELD_BIRTH_DATE])) {
			$v = $this->getBirthDate();
			foreach ($validationRules[self::FIELD_BIRTH_DATE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PATIENT,
					self::FIELD_BIRTH_DATE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_BIRTH_DATE])) {
						$errs[self::FIELD_BIRTH_DATE] = [];
					}
					$errs[self::FIELD_BIRTH_DATE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DECEASED_BOOLEAN])) {
			$v = $this->getDeceasedBoolean();
			foreach ($validationRules[self::FIELD_DECEASED_BOOLEAN] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PATIENT,
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
		if (isset($validationRules[self::FIELD_DECEASED_DATE_TIME])) {
			$v = $this->getDeceasedDateTime();
			foreach ($validationRules[self::FIELD_DECEASED_DATE_TIME] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PATIENT,
					self::FIELD_DECEASED_DATE_TIME,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DECEASED_DATE_TIME])) {
						$errs[self::FIELD_DECEASED_DATE_TIME] = [];
					}
					$errs[self::FIELD_DECEASED_DATE_TIME][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_ADDRESS])) {
			$v = $this->getAddress();
			foreach ($validationRules[self::FIELD_ADDRESS] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PATIENT,
					self::FIELD_ADDRESS,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_ADDRESS])) {
						$errs[self::FIELD_ADDRESS] = [];
					}
					$errs[self::FIELD_ADDRESS][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MARITAL_STATUS])) {
			$v = $this->getMaritalStatus();
			foreach ($validationRules[self::FIELD_MARITAL_STATUS] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PATIENT,
					self::FIELD_MARITAL_STATUS,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MARITAL_STATUS])) {
						$errs[self::FIELD_MARITAL_STATUS] = [];
					}
					$errs[self::FIELD_MARITAL_STATUS][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MULTIPLE_BIRTH_BOOLEAN])) {
			$v = $this->getMultipleBirthBoolean();
			foreach ($validationRules[self::FIELD_MULTIPLE_BIRTH_BOOLEAN] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PATIENT,
					self::FIELD_MULTIPLE_BIRTH_BOOLEAN,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MULTIPLE_BIRTH_BOOLEAN])) {
						$errs[self::FIELD_MULTIPLE_BIRTH_BOOLEAN] = [];
					}
					$errs[self::FIELD_MULTIPLE_BIRTH_BOOLEAN][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MULTIPLE_BIRTH_INTEGER])) {
			$v = $this->getMultipleBirthInteger();
			foreach ($validationRules[self::FIELD_MULTIPLE_BIRTH_INTEGER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PATIENT,
					self::FIELD_MULTIPLE_BIRTH_INTEGER,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MULTIPLE_BIRTH_INTEGER])) {
						$errs[self::FIELD_MULTIPLE_BIRTH_INTEGER] = [];
					}
					$errs[self::FIELD_MULTIPLE_BIRTH_INTEGER][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PHOTO])) {
			$v = $this->getPhoto();
			foreach ($validationRules[self::FIELD_PHOTO] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PATIENT,
					self::FIELD_PHOTO,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PHOTO])) {
						$errs[self::FIELD_PHOTO] = [];
					}
					$errs[self::FIELD_PHOTO][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_CONTACT])) {
			$v = $this->getContact();
			foreach ($validationRules[self::FIELD_CONTACT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PATIENT,
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
		if (isset($validationRules[self::FIELD_ANIMAL])) {
			$v = $this->getAnimal();
			foreach ($validationRules[self::FIELD_ANIMAL] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PATIENT,
					self::FIELD_ANIMAL,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_ANIMAL])) {
						$errs[self::FIELD_ANIMAL] = [];
					}
					$errs[self::FIELD_ANIMAL][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_COMMUNICATION])) {
			$v = $this->getCommunication();
			foreach ($validationRules[self::FIELD_COMMUNICATION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PATIENT,
					self::FIELD_COMMUNICATION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_COMMUNICATION])) {
						$errs[self::FIELD_COMMUNICATION] = [];
					}
					$errs[self::FIELD_COMMUNICATION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_CARE_PROVIDER])) {
			$v = $this->getCareProvider();
			foreach ($validationRules[self::FIELD_CARE_PROVIDER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PATIENT,
					self::FIELD_CARE_PROVIDER,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_CARE_PROVIDER])) {
						$errs[self::FIELD_CARE_PROVIDER] = [];
					}
					$errs[self::FIELD_CARE_PROVIDER][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MANAGING_ORGANIZATION])) {
			$v = $this->getManagingOrganization();
			foreach ($validationRules[self::FIELD_MANAGING_ORGANIZATION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PATIENT,
					self::FIELD_MANAGING_ORGANIZATION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MANAGING_ORGANIZATION])) {
						$errs[self::FIELD_MANAGING_ORGANIZATION] = [];
					}
					$errs[self::FIELD_MANAGING_ORGANIZATION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_LINK])) {
			$v = $this->getLink();
			foreach ($validationRules[self::FIELD_LINK] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PATIENT,
					self::FIELD_LINK,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_LINK])) {
						$errs[self::FIELD_LINK] = [];
					}
					$errs[self::FIELD_LINK][$rule] = $err;
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRPatient $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRPatient
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
						'FHIRPatient::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRPatient::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRPatient(null);
		} elseif (!is_object($type) || !($type instanceof FHIRPatient)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRPatient::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRPatient or null, %s seen.',
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
			} elseif (self::FIELD_ACTIVE === $n->nodeName) {
				$type->setActive(FHIRBoolean::xmlUnserialize($n));
			} elseif (self::FIELD_NAME === $n->nodeName) {
				$type->addName(FHIRHumanName::xmlUnserialize($n));
			} elseif (self::FIELD_TELECOM === $n->nodeName) {
				$type->addTelecom(FHIRContactPoint::xmlUnserialize($n));
			} elseif (self::FIELD_GENDER === $n->nodeName) {
				$type->setGender(FHIRCode::xmlUnserialize($n));
			} elseif (self::FIELD_BIRTH_DATE === $n->nodeName) {
				$type->setBirthDate(FHIRDate::xmlUnserialize($n));
			} elseif (self::FIELD_DECEASED_BOOLEAN === $n->nodeName) {
				$type->setDeceasedBoolean(FHIRBoolean::xmlUnserialize($n));
			} elseif (self::FIELD_DECEASED_DATE_TIME === $n->nodeName) {
				$type->setDeceasedDateTime(FHIRDateTime::xmlUnserialize($n));
			} elseif (self::FIELD_ADDRESS === $n->nodeName) {
				$type->addAddress(FHIRAddress::xmlUnserialize($n));
			} elseif (self::FIELD_MARITAL_STATUS === $n->nodeName) {
				$type->setMaritalStatus(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_MULTIPLE_BIRTH_BOOLEAN === $n->nodeName) {
				$type->setMultipleBirthBoolean(FHIRBoolean::xmlUnserialize($n));
			} elseif (self::FIELD_MULTIPLE_BIRTH_INTEGER === $n->nodeName) {
				$type->setMultipleBirthInteger(FHIRInteger::xmlUnserialize($n));
			} elseif (self::FIELD_PHOTO === $n->nodeName) {
				$type->addPhoto(FHIRAttachment::xmlUnserialize($n));
			} elseif (self::FIELD_CONTACT === $n->nodeName) {
				$type->addContact(FHIRPatientContact::xmlUnserialize($n));
			} elseif (self::FIELD_ANIMAL === $n->nodeName) {
				$type->setAnimal(FHIRPatientAnimal::xmlUnserialize($n));
			} elseif (self::FIELD_COMMUNICATION === $n->nodeName) {
				$type->addCommunication(FHIRPatientCommunication::xmlUnserialize($n));
			} elseif (self::FIELD_CARE_PROVIDER === $n->nodeName) {
				$type->addCareProvider(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_MANAGING_ORGANIZATION === $n->nodeName) {
				$type->setManagingOrganization(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_LINK === $n->nodeName) {
				$type->addLink(FHIRPatientLink::xmlUnserialize($n));
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
		$n = $element->attributes->getNamedItem(self::FIELD_ACTIVE);
		if (null !== $n) {
			$pt = $type->getActive();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setActive($n->nodeValue);
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
		$n = $element->attributes->getNamedItem(self::FIELD_BIRTH_DATE);
		if (null !== $n) {
			$pt = $type->getBirthDate();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setBirthDate($n->nodeValue);
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
		$n = $element->attributes->getNamedItem(self::FIELD_DECEASED_DATE_TIME);
		if (null !== $n) {
			$pt = $type->getDeceasedDateTime();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setDeceasedDateTime($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_MULTIPLE_BIRTH_BOOLEAN);
		if (null !== $n) {
			$pt = $type->getMultipleBirthBoolean();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMultipleBirthBoolean($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_MULTIPLE_BIRTH_INTEGER);
		if (null !== $n) {
			$pt = $type->getMultipleBirthInteger();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setMultipleBirthInteger($n->nodeValue);
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
		if (null !== ($v = $this->getActive())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_ACTIVE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getName())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_NAME);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if ([] !== ($vs = $this->getTelecom())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_TELECOM);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if (null !== ($v = $this->getGender())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_GENDER);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getBirthDate())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_BIRTH_DATE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDeceasedBoolean())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DECEASED_BOOLEAN);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDeceasedDateTime())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DECEASED_DATE_TIME);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getAddress())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_ADDRESS);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if (null !== ($v = $this->getMaritalStatus())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MARITAL_STATUS);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMultipleBirthBoolean())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MULTIPLE_BIRTH_BOOLEAN);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMultipleBirthInteger())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MULTIPLE_BIRTH_INTEGER);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getPhoto())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_PHOTO);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
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
		if (null !== ($v = $this->getAnimal())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_ANIMAL);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getCommunication())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_COMMUNICATION);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if ([] !== ($vs = $this->getCareProvider())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_CARE_PROVIDER);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if (null !== ($v = $this->getManagingOrganization())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MANAGING_ORGANIZATION);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getLink())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_LINK);
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
		if (null !== ($v = $this->getActive())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_ACTIVE} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRBoolean::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_ACTIVE_EXT} = $ext;
			}
		}
		if ([] !== ($vs = $this->getName())) {
			$out->{self::FIELD_NAME} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_NAME}[] = $v;
			}
		}
		if ([] !== ($vs = $this->getTelecom())) {
			$out->{self::FIELD_TELECOM} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_TELECOM}[] = $v;
			}
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
		if (null !== ($v = $this->getBirthDate())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_BIRTH_DATE} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRDate::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_BIRTH_DATE_EXT} = $ext;
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
		if (null !== ($v = $this->getDeceasedDateTime())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_DECEASED_DATE_TIME} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRDateTime::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_DECEASED_DATE_TIME_EXT} = $ext;
			}
		}
		if ([] !== ($vs = $this->getAddress())) {
			$out->{self::FIELD_ADDRESS} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_ADDRESS}[] = $v;
			}
		}
		if (null !== ($v = $this->getMaritalStatus())) {
			$out->{self::FIELD_MARITAL_STATUS} = $v;
		}
		if (null !== ($v = $this->getMultipleBirthBoolean())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_MULTIPLE_BIRTH_BOOLEAN} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRBoolean::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_MULTIPLE_BIRTH_BOOLEAN_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getMultipleBirthInteger())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_MULTIPLE_BIRTH_INTEGER} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRInteger::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_MULTIPLE_BIRTH_INTEGER_EXT} = $ext;
			}
		}
		if ([] !== ($vs = $this->getPhoto())) {
			$out->{self::FIELD_PHOTO} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_PHOTO}[] = $v;
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
		if (null !== ($v = $this->getAnimal())) {
			$out->{self::FIELD_ANIMAL} = $v;
		}
		if ([] !== ($vs = $this->getCommunication())) {
			$out->{self::FIELD_COMMUNICATION} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_COMMUNICATION}[] = $v;
			}
		}
		if ([] !== ($vs = $this->getCareProvider())) {
			$out->{self::FIELD_CARE_PROVIDER} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_CARE_PROVIDER}[] = $v;
			}
		}
		if (null !== ($v = $this->getManagingOrganization())) {
			$out->{self::FIELD_MANAGING_ORGANIZATION} = $v;
		}
		if ([] !== ($vs = $this->getLink())) {
			$out->{self::FIELD_LINK} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_LINK}[] = $v;
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
