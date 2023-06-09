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

use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRExtension;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRId;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstanceAvailability;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMeta;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRNarrative;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIROid;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUnsignedInt;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri;
use Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource;
use Calvient\FhirTypes\DSTU2\PHPFHIRConstants;
use Calvient\FhirTypes\DSTU2\PHPFHIRContainedTypeInterface;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeInterface;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeMap;

/**
 * Representation of the content produced in a DICOM imaging study. A study
 * comprises a set of series, each of which includes a set of Service-Object Pair
 * Instances (SOP Instances - images or other data) acquired or produced in a
 * common context. A series is of only one modality (e.g. X-ray, CT, MR,
 * ultrasound), but a study may have multiple series of different modalities.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRImagingStudy
 * @package \Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIRImagingStudy extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_IMAGING_STUDY;
	const FIELD_STARTED = 'started';
	const FIELD_STARTED_EXT = '_started';
	const FIELD_PATIENT = 'patient';
	const FIELD_UID = 'uid';
	const FIELD_UID_EXT = '_uid';
	const FIELD_ACCESSION = 'accession';
	const FIELD_IDENTIFIER = 'identifier';
	const FIELD_ORDER = 'order';
	const FIELD_MODALITY_LIST = 'modalityList';
	const FIELD_REFERRER = 'referrer';
	const FIELD_AVAILABILITY = 'availability';
	const FIELD_AVAILABILITY_EXT = '_availability';
	const FIELD_URL = 'url';
	const FIELD_URL_EXT = '_url';
	const FIELD_NUMBER_OF_SERIES = 'numberOfSeries';
	const FIELD_NUMBER_OF_SERIES_EXT = '_numberOfSeries';
	const FIELD_NUMBER_OF_INSTANCES = 'numberOfInstances';
	const FIELD_NUMBER_OF_INSTANCES_EXT = '_numberOfInstances';
	const FIELD_PROCEDURE = 'procedure';
	const FIELD_INTERPRETER = 'interpreter';
	const FIELD_DESCRIPTION = 'description';
	const FIELD_DESCRIPTION_EXT = '_description';
	const FIELD_SERIES = 'series';

	/** @var string */
	private $_xmlns = '';

	/**
	 * A date, date-time or partial date (e.g. just year or year + month). If hours and
	 * minutes are specified, a time zone SHALL be populated. The format is a union of
	 * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
	 * due to schema type constraints but may be zero-filled and may be ignored. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Date and Time the study started.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime
	 */
	protected ?FHIRDateTime $started = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The patient imaged in the study.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $patient = null;

	/**
	 * An oid represented as a URI
	 * RFC 3001. See also ISO/IEC 8824:1990 €
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Formal identifier for the study.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIROidPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIROid
	 */
	protected ?FHIROid $uid = null;

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Accession Number is an identifier related to some aspect of imaging workflow and
	 * data management. Usage may vary across different institutions. See for instance
	 * [IHE Radiology Technical Framework Volume 1 Appendix
	 * A](http://www.ihe.net/uploadedFiles/Documents/Radiology/IHE_RAD_TF_Rev13.0_Vol1_FT_2014-07-30.pdf).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier
	 */
	protected ?FHIRIdentifier $accession = null;

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Other identifiers for the study.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier[]
	 */
	protected ?array $identifier = [];

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A list of the diagnostic orders that resulted in this imaging study being
	 * performed.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	protected ?array $order = [];

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A list of all the Series.ImageModality values that are actual acquisition
	 * modalities, i.e. those in the DICOM Context Group 29 (value set OID
	 * 1.2.840.10008.6.1.19).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding[]
	 */
	protected ?array $modalityList = [];

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The requesting/referring physician.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $referrer = null;

	/**
	 * Availability of the resource
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Availability of study (online, offline or nearline).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstanceAvailability
	 */
	protected ?FHIRInstanceAvailability $availability = null;

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * WADO-RS resource where Study is available.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri
	 */
	protected ?FHIRUri $url = null;

	/**
	 * An integer with a value that is not negative (e.g. >= 0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Number of Series in Study.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUnsignedInt
	 */
	protected ?FHIRUnsignedInt $numberOfSeries = null;

	/**
	 * An integer with a value that is not negative (e.g. >= 0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Number of SOP Instances in Study.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUnsignedInt
	 */
	protected ?FHIRUnsignedInt $numberOfInstances = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Type of procedure performed.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	protected ?array $procedure = [];

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Who read the study and interpreted the images or other content.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $interpreter = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Institution-generated description or classification of the Study performed.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $description = null;

	/**
	 * Representation of the content produced in a DICOM imaging study. A study
	 * comprises a set of series, each of which includes a set of Service-Object Pair
	 * Instances (SOP Instances - images or other data) acquired or produced in a
	 * common context. A series is of only one modality (e.g. X-ray, CT, MR,
	 * ultrasound), but a study may have multiple series of different modalities.
	 *
	 * Each study has one or more series of images or other content.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries[]
	 */
	protected ?array $series = [];

	/**
	 * Validation map for fields in type ImagingStudy
	 * @var array
	 */
	private static array $_validationRules = [];

	/**
	 * FHIRImagingStudy Constructor
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
					'FHIRImagingStudy::_construct - $data expected to be null or array, %s seen',
					gettype($data),
				),
			);
		}
		parent::__construct($data);
		if (isset($data[self::FIELD_STARTED]) || isset($data[self::FIELD_STARTED_EXT])) {
			$value = $data[self::FIELD_STARTED] ?? null;
			$ext =
				isset($data[self::FIELD_STARTED_EXT]) && is_array($data[self::FIELD_STARTED_EXT])
					? $data[self::FIELD_STARTED_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRDateTime) {
					$this->setStarted($value);
				} elseif (is_array($value)) {
					$this->setStarted(new FHIRDateTime(array_merge($ext, $value)));
				} else {
					$this->setStarted(
						new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setStarted(new FHIRDateTime($ext));
			}
		}
		if (isset($data[self::FIELD_PATIENT])) {
			if ($data[self::FIELD_PATIENT] instanceof FHIRReference) {
				$this->setPatient($data[self::FIELD_PATIENT]);
			} else {
				$this->setPatient(new FHIRReference($data[self::FIELD_PATIENT]));
			}
		}
		if (isset($data[self::FIELD_UID]) || isset($data[self::FIELD_UID_EXT])) {
			$value = $data[self::FIELD_UID] ?? null;
			$ext =
				isset($data[self::FIELD_UID_EXT]) && is_array($data[self::FIELD_UID_EXT])
					? $data[self::FIELD_UID_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIROid) {
					$this->setUid($value);
				} elseif (is_array($value)) {
					$this->setUid(new FHIROid(array_merge($ext, $value)));
				} else {
					$this->setUid(new FHIROid([FHIROid::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setUid(new FHIROid($ext));
			}
		}
		if (isset($data[self::FIELD_ACCESSION])) {
			if ($data[self::FIELD_ACCESSION] instanceof FHIRIdentifier) {
				$this->setAccession($data[self::FIELD_ACCESSION]);
			} else {
				$this->setAccession(new FHIRIdentifier($data[self::FIELD_ACCESSION]));
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
		if (isset($data[self::FIELD_ORDER])) {
			if (is_array($data[self::FIELD_ORDER])) {
				foreach ($data[self::FIELD_ORDER] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRReference) {
						$this->addOrder($v);
					} else {
						$this->addOrder(new FHIRReference($v));
					}
				}
			} elseif ($data[self::FIELD_ORDER] instanceof FHIRReference) {
				$this->addOrder($data[self::FIELD_ORDER]);
			} else {
				$this->addOrder(new FHIRReference($data[self::FIELD_ORDER]));
			}
		}
		if (isset($data[self::FIELD_MODALITY_LIST])) {
			if (is_array($data[self::FIELD_MODALITY_LIST])) {
				foreach ($data[self::FIELD_MODALITY_LIST] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRCoding) {
						$this->addModalityList($v);
					} else {
						$this->addModalityList(new FHIRCoding($v));
					}
				}
			} elseif ($data[self::FIELD_MODALITY_LIST] instanceof FHIRCoding) {
				$this->addModalityList($data[self::FIELD_MODALITY_LIST]);
			} else {
				$this->addModalityList(new FHIRCoding($data[self::FIELD_MODALITY_LIST]));
			}
		}
		if (isset($data[self::FIELD_REFERRER])) {
			if ($data[self::FIELD_REFERRER] instanceof FHIRReference) {
				$this->setReferrer($data[self::FIELD_REFERRER]);
			} else {
				$this->setReferrer(new FHIRReference($data[self::FIELD_REFERRER]));
			}
		}
		if (isset($data[self::FIELD_AVAILABILITY]) || isset($data[self::FIELD_AVAILABILITY_EXT])) {
			$value = $data[self::FIELD_AVAILABILITY] ?? null;
			$ext =
				isset($data[self::FIELD_AVAILABILITY_EXT]) &&
				is_array($data[self::FIELD_AVAILABILITY_EXT])
					? $data[self::FIELD_AVAILABILITY_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRInstanceAvailability) {
					$this->setAvailability($value);
				} elseif (is_array($value)) {
					$this->setAvailability(new FHIRInstanceAvailability(array_merge($ext, $value)));
				} else {
					$this->setAvailability(
						new FHIRInstanceAvailability(
							[FHIRInstanceAvailability::FIELD_VALUE => $value] + $ext,
						),
					);
				}
			} elseif ([] !== $ext) {
				$this->setAvailability(new FHIRInstanceAvailability($ext));
			}
		}
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
		if (
			isset($data[self::FIELD_NUMBER_OF_SERIES]) ||
			isset($data[self::FIELD_NUMBER_OF_SERIES_EXT])
		) {
			$value = $data[self::FIELD_NUMBER_OF_SERIES] ?? null;
			$ext =
				isset($data[self::FIELD_NUMBER_OF_SERIES_EXT]) &&
				is_array($data[self::FIELD_NUMBER_OF_SERIES_EXT])
					? $data[self::FIELD_NUMBER_OF_SERIES_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRUnsignedInt) {
					$this->setNumberOfSeries($value);
				} elseif (is_array($value)) {
					$this->setNumberOfSeries(new FHIRUnsignedInt(array_merge($ext, $value)));
				} else {
					$this->setNumberOfSeries(
						new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setNumberOfSeries(new FHIRUnsignedInt($ext));
			}
		}
		if (
			isset($data[self::FIELD_NUMBER_OF_INSTANCES]) ||
			isset($data[self::FIELD_NUMBER_OF_INSTANCES_EXT])
		) {
			$value = $data[self::FIELD_NUMBER_OF_INSTANCES] ?? null;
			$ext =
				isset($data[self::FIELD_NUMBER_OF_INSTANCES_EXT]) &&
				is_array($data[self::FIELD_NUMBER_OF_INSTANCES_EXT])
					? $data[self::FIELD_NUMBER_OF_INSTANCES_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRUnsignedInt) {
					$this->setNumberOfInstances($value);
				} elseif (is_array($value)) {
					$this->setNumberOfInstances(new FHIRUnsignedInt(array_merge($ext, $value)));
				} else {
					$this->setNumberOfInstances(
						new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setNumberOfInstances(new FHIRUnsignedInt($ext));
			}
		}
		if (isset($data[self::FIELD_PROCEDURE])) {
			if (is_array($data[self::FIELD_PROCEDURE])) {
				foreach ($data[self::FIELD_PROCEDURE] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRReference) {
						$this->addProcedure($v);
					} else {
						$this->addProcedure(new FHIRReference($v));
					}
				}
			} elseif ($data[self::FIELD_PROCEDURE] instanceof FHIRReference) {
				$this->addProcedure($data[self::FIELD_PROCEDURE]);
			} else {
				$this->addProcedure(new FHIRReference($data[self::FIELD_PROCEDURE]));
			}
		}
		if (isset($data[self::FIELD_INTERPRETER])) {
			if ($data[self::FIELD_INTERPRETER] instanceof FHIRReference) {
				$this->setInterpreter($data[self::FIELD_INTERPRETER]);
			} else {
				$this->setInterpreter(new FHIRReference($data[self::FIELD_INTERPRETER]));
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
		if (isset($data[self::FIELD_SERIES])) {
			if (is_array($data[self::FIELD_SERIES])) {
				foreach ($data[self::FIELD_SERIES] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRImagingStudySeries) {
						$this->addSeries($v);
					} else {
						$this->addSeries(new FHIRImagingStudySeries($v));
					}
				}
			} elseif ($data[self::FIELD_SERIES] instanceof FHIRImagingStudySeries) {
				$this->addSeries($data[self::FIELD_SERIES]);
			} else {
				$this->addSeries(new FHIRImagingStudySeries($data[self::FIELD_SERIES]));
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
		return "<ImagingStudy{$xmlns}></ImagingStudy>";
	}
	/**
	 * @return string
	 */
	public function _getResourceType(): string
	{
		return static::FHIR_TYPE_NAME;
	}

	/**
	 * A date, date-time or partial date (e.g. just year or year + month). If hours and
	 * minutes are specified, a time zone SHALL be populated. The format is a union of
	 * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
	 * due to schema type constraints but may be zero-filled and may be ignored. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Date and Time the study started.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime
	 */
	public function getStarted(): ?FHIRDateTime
	{
		return $this->started;
	}

	/**
	 * A date, date-time or partial date (e.g. just year or year + month). If hours and
	 * minutes are specified, a time zone SHALL be populated. The format is a union of
	 * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
	 * due to schema type constraints but may be zero-filled and may be ignored. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Date and Time the study started.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime $started
	 * @return static
	 */
	public function setStarted($started = null): object
	{
		if (null !== $started && !($started instanceof FHIRDateTime)) {
			$started = new FHIRDateTime($started);
		}
		$this->_trackValueSet($this->started, $started);
		$this->started = $started;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The patient imaged in the study.
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
	 * The patient imaged in the study.
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
	 * An oid represented as a URI
	 * RFC 3001. See also ISO/IEC 8824:1990 €
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Formal identifier for the study.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIROidPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIROid
	 */
	public function getUid(): ?FHIROid
	{
		return $this->uid;
	}

	/**
	 * An oid represented as a URI
	 * RFC 3001. See also ISO/IEC 8824:1990 €
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Formal identifier for the study.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIROidPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIROid $uid
	 * @return static
	 */
	public function setUid($uid = null): object
	{
		if (null !== $uid && !($uid instanceof FHIROid)) {
			$uid = new FHIROid($uid);
		}
		$this->_trackValueSet($this->uid, $uid);
		$this->uid = $uid;
		return $this;
	}

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Accession Number is an identifier related to some aspect of imaging workflow and
	 * data management. Usage may vary across different institutions. See for instance
	 * [IHE Radiology Technical Framework Volume 1 Appendix
	 * A](http://www.ihe.net/uploadedFiles/Documents/Radiology/IHE_RAD_TF_Rev13.0_Vol1_FT_2014-07-30.pdf).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier
	 */
	public function getAccession(): ?FHIRIdentifier
	{
		return $this->accession;
	}

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Accession Number is an identifier related to some aspect of imaging workflow and
	 * data management. Usage may vary across different institutions. See for instance
	 * [IHE Radiology Technical Framework Volume 1 Appendix
	 * A](http://www.ihe.net/uploadedFiles/Documents/Radiology/IHE_RAD_TF_Rev13.0_Vol1_FT_2014-07-30.pdf).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier $accession
	 * @return static
	 */
	public function setAccession(?FHIRIdentifier $accession = null): object
	{
		$this->_trackValueSet($this->accession, $accession);
		$this->accession = $accession;
		return $this;
	}

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Other identifiers for the study.
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
	 * Other identifiers for the study.
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
	 * Other identifiers for the study.
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
	 * A list of the diagnostic orders that resulted in this imaging study being
	 * performed.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	public function getOrder(): ?array
	{
		return $this->order;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A list of the diagnostic orders that resulted in this imaging study being
	 * performed.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $order
	 * @return static
	 */
	public function addOrder(?FHIRReference $order = null): object
	{
		$this->_trackValueAdded();
		$this->order[] = $order;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A list of the diagnostic orders that resulted in this imaging study being
	 * performed.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[] $order
	 * @return static
	 */
	public function setOrder(array $order = []): object
	{
		if ([] !== $this->order) {
			$this->_trackValuesRemoved(count($this->order));
			$this->order = [];
		}
		if ([] === $order) {
			return $this;
		}
		foreach ($order as $v) {
			if ($v instanceof FHIRReference) {
				$this->addOrder($v);
			} else {
				$this->addOrder(new FHIRReference($v));
			}
		}
		return $this;
	}

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A list of all the Series.ImageModality values that are actual acquisition
	 * modalities, i.e. those in the DICOM Context Group 29 (value set OID
	 * 1.2.840.10008.6.1.19).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding[]
	 */
	public function getModalityList(): ?array
	{
		return $this->modalityList;
	}

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A list of all the Series.ImageModality values that are actual acquisition
	 * modalities, i.e. those in the DICOM Context Group 29 (value set OID
	 * 1.2.840.10008.6.1.19).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding $modalityList
	 * @return static
	 */
	public function addModalityList(?FHIRCoding $modalityList = null): object
	{
		$this->_trackValueAdded();
		$this->modalityList[] = $modalityList;
		return $this;
	}

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A list of all the Series.ImageModality values that are actual acquisition
	 * modalities, i.e. those in the DICOM Context Group 29 (value set OID
	 * 1.2.840.10008.6.1.19).
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding[] $modalityList
	 * @return static
	 */
	public function setModalityList(array $modalityList = []): object
	{
		if ([] !== $this->modalityList) {
			$this->_trackValuesRemoved(count($this->modalityList));
			$this->modalityList = [];
		}
		if ([] === $modalityList) {
			return $this;
		}
		foreach ($modalityList as $v) {
			if ($v instanceof FHIRCoding) {
				$this->addModalityList($v);
			} else {
				$this->addModalityList(new FHIRCoding($v));
			}
		}
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The requesting/referring physician.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getReferrer(): ?FHIRReference
	{
		return $this->referrer;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The requesting/referring physician.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $referrer
	 * @return static
	 */
	public function setReferrer(?FHIRReference $referrer = null): object
	{
		$this->_trackValueSet($this->referrer, $referrer);
		$this->referrer = $referrer;
		return $this;
	}

	/**
	 * Availability of the resource
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Availability of study (online, offline or nearline).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstanceAvailability
	 */
	public function getAvailability(): ?FHIRInstanceAvailability
	{
		return $this->availability;
	}

	/**
	 * Availability of the resource
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Availability of study (online, offline or nearline).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstanceAvailability $availability
	 * @return static
	 */
	public function setAvailability(?FHIRInstanceAvailability $availability = null): object
	{
		$this->_trackValueSet($this->availability, $availability);
		$this->availability = $availability;
		return $this;
	}

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * WADO-RS resource where Study is available.
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
	 * WADO-RS resource where Study is available.
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
	 * An integer with a value that is not negative (e.g. >= 0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Number of Series in Study.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUnsignedInt
	 */
	public function getNumberOfSeries(): ?FHIRUnsignedInt
	{
		return $this->numberOfSeries;
	}

	/**
	 * An integer with a value that is not negative (e.g. >= 0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Number of Series in Study.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUnsignedInt $numberOfSeries
	 * @return static
	 */
	public function setNumberOfSeries($numberOfSeries = null): object
	{
		if (null !== $numberOfSeries && !($numberOfSeries instanceof FHIRUnsignedInt)) {
			$numberOfSeries = new FHIRUnsignedInt($numberOfSeries);
		}
		$this->_trackValueSet($this->numberOfSeries, $numberOfSeries);
		$this->numberOfSeries = $numberOfSeries;
		return $this;
	}

	/**
	 * An integer with a value that is not negative (e.g. >= 0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Number of SOP Instances in Study.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUnsignedInt
	 */
	public function getNumberOfInstances(): ?FHIRUnsignedInt
	{
		return $this->numberOfInstances;
	}

	/**
	 * An integer with a value that is not negative (e.g. >= 0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Number of SOP Instances in Study.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUnsignedInt $numberOfInstances
	 * @return static
	 */
	public function setNumberOfInstances($numberOfInstances = null): object
	{
		if (null !== $numberOfInstances && !($numberOfInstances instanceof FHIRUnsignedInt)) {
			$numberOfInstances = new FHIRUnsignedInt($numberOfInstances);
		}
		$this->_trackValueSet($this->numberOfInstances, $numberOfInstances);
		$this->numberOfInstances = $numberOfInstances;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Type of procedure performed.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	public function getProcedure(): ?array
	{
		return $this->procedure;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Type of procedure performed.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $procedure
	 * @return static
	 */
	public function addProcedure(?FHIRReference $procedure = null): object
	{
		$this->_trackValueAdded();
		$this->procedure[] = $procedure;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Type of procedure performed.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[] $procedure
	 * @return static
	 */
	public function setProcedure(array $procedure = []): object
	{
		if ([] !== $this->procedure) {
			$this->_trackValuesRemoved(count($this->procedure));
			$this->procedure = [];
		}
		if ([] === $procedure) {
			return $this;
		}
		foreach ($procedure as $v) {
			if ($v instanceof FHIRReference) {
				$this->addProcedure($v);
			} else {
				$this->addProcedure(new FHIRReference($v));
			}
		}
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Who read the study and interpreted the images or other content.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getInterpreter(): ?FHIRReference
	{
		return $this->interpreter;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Who read the study and interpreted the images or other content.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $interpreter
	 * @return static
	 */
	public function setInterpreter(?FHIRReference $interpreter = null): object
	{
		$this->_trackValueSet($this->interpreter, $interpreter);
		$this->interpreter = $interpreter;
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Institution-generated description or classification of the Study performed.
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
	 * Institution-generated description or classification of the Study performed.
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
	 * Representation of the content produced in a DICOM imaging study. A study
	 * comprises a set of series, each of which includes a set of Service-Object Pair
	 * Instances (SOP Instances - images or other data) acquired or produced in a
	 * common context. A series is of only one modality (e.g. X-ray, CT, MR,
	 * ultrasound), but a study may have multiple series of different modalities.
	 *
	 * Each study has one or more series of images or other content.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries[]
	 */
	public function getSeries(): ?array
	{
		return $this->series;
	}

	/**
	 * Representation of the content produced in a DICOM imaging study. A study
	 * comprises a set of series, each of which includes a set of Service-Object Pair
	 * Instances (SOP Instances - images or other data) acquired or produced in a
	 * common context. A series is of only one modality (e.g. X-ray, CT, MR,
	 * ultrasound), but a study may have multiple series of different modalities.
	 *
	 * Each study has one or more series of images or other content.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries $series
	 * @return static
	 */
	public function addSeries(?FHIRImagingStudySeries $series = null): object
	{
		$this->_trackValueAdded();
		$this->series[] = $series;
		return $this;
	}

	/**
	 * Representation of the content produced in a DICOM imaging study. A study
	 * comprises a set of series, each of which includes a set of Service-Object Pair
	 * Instances (SOP Instances - images or other data) acquired or produced in a
	 * common context. A series is of only one modality (e.g. X-ray, CT, MR,
	 * ultrasound), but a study may have multiple series of different modalities.
	 *
	 * Each study has one or more series of images or other content.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries[] $series
	 * @return static
	 */
	public function setSeries(array $series = []): object
	{
		if ([] !== $this->series) {
			$this->_trackValuesRemoved(count($this->series));
			$this->series = [];
		}
		if ([] === $series) {
			return $this;
		}
		foreach ($series as $v) {
			if ($v instanceof FHIRImagingStudySeries) {
				$this->addSeries($v);
			} else {
				$this->addSeries(new FHIRImagingStudySeries($v));
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
		if (null !== ($v = $this->getStarted())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_STARTED] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatient())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATIENT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getUid())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_UID] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getAccession())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_ACCESSION] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getIdentifier())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
				}
			}
		}
		if ([] !== ($vs = $this->getOrder())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_ORDER, $i)] = $fieldErrs;
				}
			}
		}
		if ([] !== ($vs = $this->getModalityList())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_MODALITY_LIST, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getReferrer())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_REFERRER] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getAvailability())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_AVAILABILITY] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getUrl())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_URL] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getNumberOfSeries())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_NUMBER_OF_SERIES] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getNumberOfInstances())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_NUMBER_OF_INSTANCES] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getProcedure())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_PROCEDURE, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getInterpreter())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_INTERPRETER] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDescription())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DESCRIPTION] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getSeries())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_SERIES, $i)] = $fieldErrs;
				}
			}
		}
		if (isset($validationRules[self::FIELD_STARTED])) {
			$v = $this->getStarted();
			foreach ($validationRules[self::FIELD_STARTED] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMAGING_STUDY,
					self::FIELD_STARTED,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_STARTED])) {
						$errs[self::FIELD_STARTED] = [];
					}
					$errs[self::FIELD_STARTED][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PATIENT])) {
			$v = $this->getPatient();
			foreach ($validationRules[self::FIELD_PATIENT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMAGING_STUDY,
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
		if (isset($validationRules[self::FIELD_UID])) {
			$v = $this->getUid();
			foreach ($validationRules[self::FIELD_UID] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMAGING_STUDY,
					self::FIELD_UID,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_UID])) {
						$errs[self::FIELD_UID] = [];
					}
					$errs[self::FIELD_UID][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_ACCESSION])) {
			$v = $this->getAccession();
			foreach ($validationRules[self::FIELD_ACCESSION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMAGING_STUDY,
					self::FIELD_ACCESSION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_ACCESSION])) {
						$errs[self::FIELD_ACCESSION] = [];
					}
					$errs[self::FIELD_ACCESSION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_IDENTIFIER])) {
			$v = $this->getIdentifier();
			foreach ($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMAGING_STUDY,
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
		if (isset($validationRules[self::FIELD_ORDER])) {
			$v = $this->getOrder();
			foreach ($validationRules[self::FIELD_ORDER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMAGING_STUDY,
					self::FIELD_ORDER,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_ORDER])) {
						$errs[self::FIELD_ORDER] = [];
					}
					$errs[self::FIELD_ORDER][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MODALITY_LIST])) {
			$v = $this->getModalityList();
			foreach ($validationRules[self::FIELD_MODALITY_LIST] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMAGING_STUDY,
					self::FIELD_MODALITY_LIST,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MODALITY_LIST])) {
						$errs[self::FIELD_MODALITY_LIST] = [];
					}
					$errs[self::FIELD_MODALITY_LIST][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_REFERRER])) {
			$v = $this->getReferrer();
			foreach ($validationRules[self::FIELD_REFERRER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMAGING_STUDY,
					self::FIELD_REFERRER,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_REFERRER])) {
						$errs[self::FIELD_REFERRER] = [];
					}
					$errs[self::FIELD_REFERRER][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_AVAILABILITY])) {
			$v = $this->getAvailability();
			foreach ($validationRules[self::FIELD_AVAILABILITY] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMAGING_STUDY,
					self::FIELD_AVAILABILITY,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_AVAILABILITY])) {
						$errs[self::FIELD_AVAILABILITY] = [];
					}
					$errs[self::FIELD_AVAILABILITY][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_URL])) {
			$v = $this->getUrl();
			foreach ($validationRules[self::FIELD_URL] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMAGING_STUDY,
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
		if (isset($validationRules[self::FIELD_NUMBER_OF_SERIES])) {
			$v = $this->getNumberOfSeries();
			foreach ($validationRules[self::FIELD_NUMBER_OF_SERIES] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMAGING_STUDY,
					self::FIELD_NUMBER_OF_SERIES,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_NUMBER_OF_SERIES])) {
						$errs[self::FIELD_NUMBER_OF_SERIES] = [];
					}
					$errs[self::FIELD_NUMBER_OF_SERIES][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_NUMBER_OF_INSTANCES])) {
			$v = $this->getNumberOfInstances();
			foreach ($validationRules[self::FIELD_NUMBER_OF_INSTANCES] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMAGING_STUDY,
					self::FIELD_NUMBER_OF_INSTANCES,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_NUMBER_OF_INSTANCES])) {
						$errs[self::FIELD_NUMBER_OF_INSTANCES] = [];
					}
					$errs[self::FIELD_NUMBER_OF_INSTANCES][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PROCEDURE])) {
			$v = $this->getProcedure();
			foreach ($validationRules[self::FIELD_PROCEDURE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMAGING_STUDY,
					self::FIELD_PROCEDURE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PROCEDURE])) {
						$errs[self::FIELD_PROCEDURE] = [];
					}
					$errs[self::FIELD_PROCEDURE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_INTERPRETER])) {
			$v = $this->getInterpreter();
			foreach ($validationRules[self::FIELD_INTERPRETER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMAGING_STUDY,
					self::FIELD_INTERPRETER,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_INTERPRETER])) {
						$errs[self::FIELD_INTERPRETER] = [];
					}
					$errs[self::FIELD_INTERPRETER][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DESCRIPTION])) {
			$v = $this->getDescription();
			foreach ($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMAGING_STUDY,
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
		if (isset($validationRules[self::FIELD_SERIES])) {
			$v = $this->getSeries();
			foreach ($validationRules[self::FIELD_SERIES] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMAGING_STUDY,
					self::FIELD_SERIES,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_SERIES])) {
						$errs[self::FIELD_SERIES] = [];
					}
					$errs[self::FIELD_SERIES][$rule] = $err;
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRImagingStudy $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRImagingStudy
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
						'FHIRImagingStudy::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRImagingStudy::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRImagingStudy(null);
		} elseif (!is_object($type) || !($type instanceof FHIRImagingStudy)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRImagingStudy::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRImagingStudy or null, %s seen.',
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
			if (self::FIELD_STARTED === $n->nodeName) {
				$type->setStarted(FHIRDateTime::xmlUnserialize($n));
			} elseif (self::FIELD_PATIENT === $n->nodeName) {
				$type->setPatient(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_UID === $n->nodeName) {
				$type->setUid(FHIROid::xmlUnserialize($n));
			} elseif (self::FIELD_ACCESSION === $n->nodeName) {
				$type->setAccession(FHIRIdentifier::xmlUnserialize($n));
			} elseif (self::FIELD_IDENTIFIER === $n->nodeName) {
				$type->addIdentifier(FHIRIdentifier::xmlUnserialize($n));
			} elseif (self::FIELD_ORDER === $n->nodeName) {
				$type->addOrder(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_MODALITY_LIST === $n->nodeName) {
				$type->addModalityList(FHIRCoding::xmlUnserialize($n));
			} elseif (self::FIELD_REFERRER === $n->nodeName) {
				$type->setReferrer(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_AVAILABILITY === $n->nodeName) {
				$type->setAvailability(FHIRInstanceAvailability::xmlUnserialize($n));
			} elseif (self::FIELD_URL === $n->nodeName) {
				$type->setUrl(FHIRUri::xmlUnserialize($n));
			} elseif (self::FIELD_NUMBER_OF_SERIES === $n->nodeName) {
				$type->setNumberOfSeries(FHIRUnsignedInt::xmlUnserialize($n));
			} elseif (self::FIELD_NUMBER_OF_INSTANCES === $n->nodeName) {
				$type->setNumberOfInstances(FHIRUnsignedInt::xmlUnserialize($n));
			} elseif (self::FIELD_PROCEDURE === $n->nodeName) {
				$type->addProcedure(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_INTERPRETER === $n->nodeName) {
				$type->setInterpreter(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_DESCRIPTION === $n->nodeName) {
				$type->setDescription(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_SERIES === $n->nodeName) {
				$type->addSeries(FHIRImagingStudySeries::xmlUnserialize($n));
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
		$n = $element->attributes->getNamedItem(self::FIELD_STARTED);
		if (null !== $n) {
			$pt = $type->getStarted();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setStarted($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_UID);
		if (null !== $n) {
			$pt = $type->getUid();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setUid($n->nodeValue);
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
		$n = $element->attributes->getNamedItem(self::FIELD_NUMBER_OF_SERIES);
		if (null !== $n) {
			$pt = $type->getNumberOfSeries();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setNumberOfSeries($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_NUMBER_OF_INSTANCES);
		if (null !== $n) {
			$pt = $type->getNumberOfInstances();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setNumberOfInstances($n->nodeValue);
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
		if (null !== ($v = $this->getStarted())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_STARTED);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatient())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATIENT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getUid())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_UID);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getAccession())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_ACCESSION);
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
		if ([] !== ($vs = $this->getOrder())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_ORDER);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if ([] !== ($vs = $this->getModalityList())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_MODALITY_LIST);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if (null !== ($v = $this->getReferrer())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_REFERRER);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getAvailability())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_AVAILABILITY);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getUrl())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_URL);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getNumberOfSeries())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_NUMBER_OF_SERIES);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getNumberOfInstances())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_NUMBER_OF_INSTANCES);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getProcedure())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_PROCEDURE);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if (null !== ($v = $this->getInterpreter())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_INTERPRETER);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDescription())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DESCRIPTION);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getSeries())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_SERIES);
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
		if (null !== ($v = $this->getStarted())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_STARTED} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRDateTime::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_STARTED_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getPatient())) {
			$out->{self::FIELD_PATIENT} = $v;
		}
		if (null !== ($v = $this->getUid())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_UID} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIROid::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_UID_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getAccession())) {
			$out->{self::FIELD_ACCESSION} = $v;
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
		if ([] !== ($vs = $this->getOrder())) {
			$out->{self::FIELD_ORDER} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_ORDER}[] = $v;
			}
		}
		if ([] !== ($vs = $this->getModalityList())) {
			$out->{self::FIELD_MODALITY_LIST} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_MODALITY_LIST}[] = $v;
			}
		}
		if (null !== ($v = $this->getReferrer())) {
			$out->{self::FIELD_REFERRER} = $v;
		}
		if (null !== ($v = $this->getAvailability())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_AVAILABILITY} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRInstanceAvailability::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_AVAILABILITY_EXT} = $ext;
			}
		}
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
		if (null !== ($v = $this->getNumberOfSeries())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_NUMBER_OF_SERIES} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRUnsignedInt::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_NUMBER_OF_SERIES_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getNumberOfInstances())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_NUMBER_OF_INSTANCES} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRUnsignedInt::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_NUMBER_OF_INSTANCES_EXT} = $ext;
			}
		}
		if ([] !== ($vs = $this->getProcedure())) {
			$out->{self::FIELD_PROCEDURE} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_PROCEDURE}[] = $v;
			}
		}
		if (null !== ($v = $this->getInterpreter())) {
			$out->{self::FIELD_INTERPRETER} = $v;
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
		if ([] !== ($vs = $this->getSeries())) {
			$out->{self::FIELD_SERIES} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_SERIES}[] = $v;
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
