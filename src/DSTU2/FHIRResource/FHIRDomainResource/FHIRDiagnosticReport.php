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

use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAttachment;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportImage;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDiagnosticReportStatus;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRExtension;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRId;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstant;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMeta;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRNarrative;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri;
use Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource;
use Calvient\FhirTypes\DSTU2\PHPFHIRConstants;
use Calvient\FhirTypes\DSTU2\PHPFHIRContainedTypeInterface;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeInterface;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeMap;

/**
 * The findings and interpretation of diagnostic tests performed on patients,
 * groups of patients, devices, and locations, and/or specimens derived from these.
 * The report includes clinical context such as requesting and provider
 * information, and some mix of atomic results, images, textual and coded
 * interpretations, and formatted representation of diagnostic reports.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRDiagnosticReport
 * @package \Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIRDiagnosticReport extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT;
	const FIELD_IDENTIFIER = 'identifier';
	const FIELD_STATUS = 'status';
	const FIELD_STATUS_EXT = '_status';
	const FIELD_CATEGORY = 'category';
	const FIELD_CODE = 'code';
	const FIELD_SUBJECT = 'subject';
	const FIELD_ENCOUNTER = 'encounter';
	const FIELD_EFFECTIVE_DATE_TIME = 'effectiveDateTime';
	const FIELD_EFFECTIVE_DATE_TIME_EXT = '_effectiveDateTime';
	const FIELD_EFFECTIVE_PERIOD = 'effectivePeriod';
	const FIELD_ISSUED = 'issued';
	const FIELD_ISSUED_EXT = '_issued';
	const FIELD_PERFORMER = 'performer';
	const FIELD_REQUEST = 'request';
	const FIELD_SPECIMEN = 'specimen';
	const FIELD_RESULT = 'result';
	const FIELD_IMAGING_STUDY = 'imagingStudy';
	const FIELD_IMAGE = 'image';
	const FIELD_CONCLUSION = 'conclusion';
	const FIELD_CONCLUSION_EXT = '_conclusion';
	const FIELD_CODED_DIAGNOSIS = 'codedDiagnosis';
	const FIELD_PRESENTED_FORM = 'presentedForm';

	/** @var string */
	private $_xmlns = '';

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The local ID assigned to the report by the order filler, usually by the
	 * Information System of the diagnostic service provider.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier[]
	 */
	protected ?array $identifier = [];

	/**
	 * The status of the diagnostic report as a whole.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The status of the diagnostic report as a whole.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDiagnosticReportStatus
	 */
	protected ?FHIRDiagnosticReportStatus $status = null;

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A code that classifies the clinical discipline, department or diagnostic service
	 * that created the report (e.g. cardiology, biochemistry, hematology, MRI). This
	 * is used for searching, sorting and display purposes.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	protected ?FHIRCodeableConcept $category = null;

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A code or name that describes this diagnostic report.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	protected ?FHIRCodeableConcept $code = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The subject of the report. Usually, but not always, this is a patient. However
	 * diagnostic services also perform analyses on specimens collected from a variety
	 * of other sources.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $subject = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The link to the health care event (encounter) when the order was made.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $encounter = null;

	/**
	 * A date, date-time or partial date (e.g. just year or year + month). If hours and
	 * minutes are specified, a time zone SHALL be populated. The format is a union of
	 * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
	 * due to schema type constraints but may be zero-filled and may be ignored. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The time or time-period the observed values are related to. When the subject of
	 * the report is a patient, this is usually either the time of the procedure or of
	 * specimen collection(s), but very often the source of the date/time is not known,
	 * only the date/time itself.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime
	 */
	protected ?FHIRDateTime $effectiveDateTime = null;

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The time or time-period the observed values are related to. When the subject of
	 * the report is a patient, this is usually either the time of the procedure or of
	 * specimen collection(s), but very often the source of the date/time is not known,
	 * only the date/time itself.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod
	 */
	protected ?FHIRPeriod $effectivePeriod = null;

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for precisely observed times, typically system logs etc.,
	 * and not human-reported times - for them, see date and dateTime below. Time zone
	 * is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The date and time that this version of the report was released from the source
	 * diagnostic service.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRInstantPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstant
	 */
	protected ?FHIRInstant $issued = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The diagnostic service that is responsible for issuing the report.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $performer = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Details concerning a test or procedure requested.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	protected ?array $request = [];

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Details about the specimens on which this diagnostic report is based.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	protected ?array $specimen = [];

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Observations that are part of this diagnostic report. Observations can be simple
	 * name/value pairs (e.g. "atomic" results), or they can be grouping observations
	 * that include references to other members of the group (e.g. "panels").
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	protected ?array $result = [];

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * One or more links to full details of any imaging performed during the diagnostic
	 * investigation. Typically, this is imaging performed by DICOM enabled modalities,
	 * but this is not required. A fully enabled PACS viewer can use this information
	 * to provide views of the source images.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	protected ?array $imagingStudy = [];

	/**
	 * The findings and interpretation of diagnostic tests performed on patients,
	 * groups of patients, devices, and locations, and/or specimens derived from these.
	 * The report includes clinical context such as requesting and provider
	 * information, and some mix of atomic results, images, textual and coded
	 * interpretations, and formatted representation of diagnostic reports.
	 *
	 * A list of key images associated with this report. The images are generally
	 * created during the diagnostic process, and may be directly of the patient, or of
	 * treated specimens (i.e. slides of interest).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportImage[]
	 */
	protected ?array $image = [];

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Concise and clinically contextualized narrative interpretation of the diagnostic
	 * report.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $conclusion = null;

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Codes for the conclusion.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept[]
	 */
	protected ?array $codedDiagnosis = [];

	/**
	 * For referring to data content defined in other formats.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Rich text representation of the entire result as issued by the diagnostic
	 * service. Multiple formats are allowed but they SHALL be semantically equivalent.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAttachment[]
	 */
	protected ?array $presentedForm = [];

	/**
	 * Validation map for fields in type DiagnosticReport
	 * @var array
	 */
	private static array $_validationRules = [];

	/**
	 * FHIRDiagnosticReport Constructor
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
					'FHIRDiagnosticReport::_construct - $data expected to be null or array, %s seen',
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
		if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
			$value = $data[self::FIELD_STATUS] ?? null;
			$ext =
				isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])
					? $data[self::FIELD_STATUS_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRDiagnosticReportStatus) {
					$this->setStatus($value);
				} elseif (is_array($value)) {
					$this->setStatus(new FHIRDiagnosticReportStatus(array_merge($ext, $value)));
				} else {
					$this->setStatus(
						new FHIRDiagnosticReportStatus(
							[FHIRDiagnosticReportStatus::FIELD_VALUE => $value] + $ext,
						),
					);
				}
			} elseif ([] !== $ext) {
				$this->setStatus(new FHIRDiagnosticReportStatus($ext));
			}
		}
		if (isset($data[self::FIELD_CATEGORY])) {
			if ($data[self::FIELD_CATEGORY] instanceof FHIRCodeableConcept) {
				$this->setCategory($data[self::FIELD_CATEGORY]);
			} else {
				$this->setCategory(new FHIRCodeableConcept($data[self::FIELD_CATEGORY]));
			}
		}
		if (isset($data[self::FIELD_CODE])) {
			if ($data[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
				$this->setCode($data[self::FIELD_CODE]);
			} else {
				$this->setCode(new FHIRCodeableConcept($data[self::FIELD_CODE]));
			}
		}
		if (isset($data[self::FIELD_SUBJECT])) {
			if ($data[self::FIELD_SUBJECT] instanceof FHIRReference) {
				$this->setSubject($data[self::FIELD_SUBJECT]);
			} else {
				$this->setSubject(new FHIRReference($data[self::FIELD_SUBJECT]));
			}
		}
		if (isset($data[self::FIELD_ENCOUNTER])) {
			if ($data[self::FIELD_ENCOUNTER] instanceof FHIRReference) {
				$this->setEncounter($data[self::FIELD_ENCOUNTER]);
			} else {
				$this->setEncounter(new FHIRReference($data[self::FIELD_ENCOUNTER]));
			}
		}
		if (
			isset($data[self::FIELD_EFFECTIVE_DATE_TIME]) ||
			isset($data[self::FIELD_EFFECTIVE_DATE_TIME_EXT])
		) {
			$value = $data[self::FIELD_EFFECTIVE_DATE_TIME] ?? null;
			$ext =
				isset($data[self::FIELD_EFFECTIVE_DATE_TIME_EXT]) &&
				is_array($data[self::FIELD_EFFECTIVE_DATE_TIME_EXT])
					? $data[self::FIELD_EFFECTIVE_DATE_TIME_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRDateTime) {
					$this->setEffectiveDateTime($value);
				} elseif (is_array($value)) {
					$this->setEffectiveDateTime(new FHIRDateTime(array_merge($ext, $value)));
				} else {
					$this->setEffectiveDateTime(
						new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setEffectiveDateTime(new FHIRDateTime($ext));
			}
		}
		if (isset($data[self::FIELD_EFFECTIVE_PERIOD])) {
			if ($data[self::FIELD_EFFECTIVE_PERIOD] instanceof FHIRPeriod) {
				$this->setEffectivePeriod($data[self::FIELD_EFFECTIVE_PERIOD]);
			} else {
				$this->setEffectivePeriod(new FHIRPeriod($data[self::FIELD_EFFECTIVE_PERIOD]));
			}
		}
		if (isset($data[self::FIELD_ISSUED]) || isset($data[self::FIELD_ISSUED_EXT])) {
			$value = $data[self::FIELD_ISSUED] ?? null;
			$ext =
				isset($data[self::FIELD_ISSUED_EXT]) && is_array($data[self::FIELD_ISSUED_EXT])
					? $data[self::FIELD_ISSUED_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRInstant) {
					$this->setIssued($value);
				} elseif (is_array($value)) {
					$this->setIssued(new FHIRInstant(array_merge($ext, $value)));
				} else {
					$this->setIssued(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setIssued(new FHIRInstant($ext));
			}
		}
		if (isset($data[self::FIELD_PERFORMER])) {
			if ($data[self::FIELD_PERFORMER] instanceof FHIRReference) {
				$this->setPerformer($data[self::FIELD_PERFORMER]);
			} else {
				$this->setPerformer(new FHIRReference($data[self::FIELD_PERFORMER]));
			}
		}
		if (isset($data[self::FIELD_REQUEST])) {
			if (is_array($data[self::FIELD_REQUEST])) {
				foreach ($data[self::FIELD_REQUEST] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRReference) {
						$this->addRequest($v);
					} else {
						$this->addRequest(new FHIRReference($v));
					}
				}
			} elseif ($data[self::FIELD_REQUEST] instanceof FHIRReference) {
				$this->addRequest($data[self::FIELD_REQUEST]);
			} else {
				$this->addRequest(new FHIRReference($data[self::FIELD_REQUEST]));
			}
		}
		if (isset($data[self::FIELD_SPECIMEN])) {
			if (is_array($data[self::FIELD_SPECIMEN])) {
				foreach ($data[self::FIELD_SPECIMEN] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRReference) {
						$this->addSpecimen($v);
					} else {
						$this->addSpecimen(new FHIRReference($v));
					}
				}
			} elseif ($data[self::FIELD_SPECIMEN] instanceof FHIRReference) {
				$this->addSpecimen($data[self::FIELD_SPECIMEN]);
			} else {
				$this->addSpecimen(new FHIRReference($data[self::FIELD_SPECIMEN]));
			}
		}
		if (isset($data[self::FIELD_RESULT])) {
			if (is_array($data[self::FIELD_RESULT])) {
				foreach ($data[self::FIELD_RESULT] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRReference) {
						$this->addResult($v);
					} else {
						$this->addResult(new FHIRReference($v));
					}
				}
			} elseif ($data[self::FIELD_RESULT] instanceof FHIRReference) {
				$this->addResult($data[self::FIELD_RESULT]);
			} else {
				$this->addResult(new FHIRReference($data[self::FIELD_RESULT]));
			}
		}
		if (isset($data[self::FIELD_IMAGING_STUDY])) {
			if (is_array($data[self::FIELD_IMAGING_STUDY])) {
				foreach ($data[self::FIELD_IMAGING_STUDY] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRReference) {
						$this->addImagingStudy($v);
					} else {
						$this->addImagingStudy(new FHIRReference($v));
					}
				}
			} elseif ($data[self::FIELD_IMAGING_STUDY] instanceof FHIRReference) {
				$this->addImagingStudy($data[self::FIELD_IMAGING_STUDY]);
			} else {
				$this->addImagingStudy(new FHIRReference($data[self::FIELD_IMAGING_STUDY]));
			}
		}
		if (isset($data[self::FIELD_IMAGE])) {
			if (is_array($data[self::FIELD_IMAGE])) {
				foreach ($data[self::FIELD_IMAGE] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRDiagnosticReportImage) {
						$this->addImage($v);
					} else {
						$this->addImage(new FHIRDiagnosticReportImage($v));
					}
				}
			} elseif ($data[self::FIELD_IMAGE] instanceof FHIRDiagnosticReportImage) {
				$this->addImage($data[self::FIELD_IMAGE]);
			} else {
				$this->addImage(new FHIRDiagnosticReportImage($data[self::FIELD_IMAGE]));
			}
		}
		if (isset($data[self::FIELD_CONCLUSION]) || isset($data[self::FIELD_CONCLUSION_EXT])) {
			$value = $data[self::FIELD_CONCLUSION] ?? null;
			$ext =
				isset($data[self::FIELD_CONCLUSION_EXT]) &&
				is_array($data[self::FIELD_CONCLUSION_EXT])
					? $data[self::FIELD_CONCLUSION_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->setConclusion($value);
				} elseif (is_array($value)) {
					$this->setConclusion(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->setConclusion(
						new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setConclusion(new FHIRString($ext));
			}
		}
		if (isset($data[self::FIELD_CODED_DIAGNOSIS])) {
			if (is_array($data[self::FIELD_CODED_DIAGNOSIS])) {
				foreach ($data[self::FIELD_CODED_DIAGNOSIS] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRCodeableConcept) {
						$this->addCodedDiagnosis($v);
					} else {
						$this->addCodedDiagnosis(new FHIRCodeableConcept($v));
					}
				}
			} elseif ($data[self::FIELD_CODED_DIAGNOSIS] instanceof FHIRCodeableConcept) {
				$this->addCodedDiagnosis($data[self::FIELD_CODED_DIAGNOSIS]);
			} else {
				$this->addCodedDiagnosis(
					new FHIRCodeableConcept($data[self::FIELD_CODED_DIAGNOSIS]),
				);
			}
		}
		if (isset($data[self::FIELD_PRESENTED_FORM])) {
			if (is_array($data[self::FIELD_PRESENTED_FORM])) {
				foreach ($data[self::FIELD_PRESENTED_FORM] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRAttachment) {
						$this->addPresentedForm($v);
					} else {
						$this->addPresentedForm(new FHIRAttachment($v));
					}
				}
			} elseif ($data[self::FIELD_PRESENTED_FORM] instanceof FHIRAttachment) {
				$this->addPresentedForm($data[self::FIELD_PRESENTED_FORM]);
			} else {
				$this->addPresentedForm(new FHIRAttachment($data[self::FIELD_PRESENTED_FORM]));
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
		return "<DiagnosticReport{$xmlns}></DiagnosticReport>";
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
	 * The local ID assigned to the report by the order filler, usually by the
	 * Information System of the diagnostic service provider.
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
	 * The local ID assigned to the report by the order filler, usually by the
	 * Information System of the diagnostic service provider.
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
	 * The local ID assigned to the report by the order filler, usually by the
	 * Information System of the diagnostic service provider.
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
	 * The status of the diagnostic report as a whole.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The status of the diagnostic report as a whole.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDiagnosticReportStatus
	 */
	public function getStatus(): ?FHIRDiagnosticReportStatus
	{
		return $this->status;
	}

	/**
	 * The status of the diagnostic report as a whole.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The status of the diagnostic report as a whole.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDiagnosticReportStatus $status
	 * @return static
	 */
	public function setStatus(?FHIRDiagnosticReportStatus $status = null): object
	{
		$this->_trackValueSet($this->status, $status);
		$this->status = $status;
		return $this;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A code that classifies the clinical discipline, department or diagnostic service
	 * that created the report (e.g. cardiology, biochemistry, hematology, MRI). This
	 * is used for searching, sorting and display purposes.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	public function getCategory(): ?FHIRCodeableConcept
	{
		return $this->category;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A code that classifies the clinical discipline, department or diagnostic service
	 * that created the report (e.g. cardiology, biochemistry, hematology, MRI). This
	 * is used for searching, sorting and display purposes.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $category
	 * @return static
	 */
	public function setCategory(?FHIRCodeableConcept $category = null): object
	{
		$this->_trackValueSet($this->category, $category);
		$this->category = $category;
		return $this;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A code or name that describes this diagnostic report.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	public function getCode(): ?FHIRCodeableConcept
	{
		return $this->code;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A code or name that describes this diagnostic report.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $code
	 * @return static
	 */
	public function setCode(?FHIRCodeableConcept $code = null): object
	{
		$this->_trackValueSet($this->code, $code);
		$this->code = $code;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The subject of the report. Usually, but not always, this is a patient. However
	 * diagnostic services also perform analyses on specimens collected from a variety
	 * of other sources.
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
	 * The subject of the report. Usually, but not always, this is a patient. However
	 * diagnostic services also perform analyses on specimens collected from a variety
	 * of other sources.
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
	 * The link to the health care event (encounter) when the order was made.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getEncounter(): ?FHIRReference
	{
		return $this->encounter;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The link to the health care event (encounter) when the order was made.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $encounter
	 * @return static
	 */
	public function setEncounter(?FHIRReference $encounter = null): object
	{
		$this->_trackValueSet($this->encounter, $encounter);
		$this->encounter = $encounter;
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
	 * The time or time-period the observed values are related to. When the subject of
	 * the report is a patient, this is usually either the time of the procedure or of
	 * specimen collection(s), but very often the source of the date/time is not known,
	 * only the date/time itself.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime
	 */
	public function getEffectiveDateTime(): ?FHIRDateTime
	{
		return $this->effectiveDateTime;
	}

	/**
	 * A date, date-time or partial date (e.g. just year or year + month). If hours and
	 * minutes are specified, a time zone SHALL be populated. The format is a union of
	 * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
	 * due to schema type constraints but may be zero-filled and may be ignored. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The time or time-period the observed values are related to. When the subject of
	 * the report is a patient, this is usually either the time of the procedure or of
	 * specimen collection(s), but very often the source of the date/time is not known,
	 * only the date/time itself.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime $effectiveDateTime
	 * @return static
	 */
	public function setEffectiveDateTime($effectiveDateTime = null): object
	{
		if (null !== $effectiveDateTime && !($effectiveDateTime instanceof FHIRDateTime)) {
			$effectiveDateTime = new FHIRDateTime($effectiveDateTime);
		}
		$this->_trackValueSet($this->effectiveDateTime, $effectiveDateTime);
		$this->effectiveDateTime = $effectiveDateTime;
		return $this;
	}

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The time or time-period the observed values are related to. When the subject of
	 * the report is a patient, this is usually either the time of the procedure or of
	 * specimen collection(s), but very often the source of the date/time is not known,
	 * only the date/time itself.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod
	 */
	public function getEffectivePeriod(): ?FHIRPeriod
	{
		return $this->effectivePeriod;
	}

	/**
	 * A time period defined by a start and end date and optionally time.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The time or time-period the observed values are related to. When the subject of
	 * the report is a patient, this is usually either the time of the procedure or of
	 * specimen collection(s), but very often the source of the date/time is not known,
	 * only the date/time itself.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPeriod $effectivePeriod
	 * @return static
	 */
	public function setEffectivePeriod(?FHIRPeriod $effectivePeriod = null): object
	{
		$this->_trackValueSet($this->effectivePeriod, $effectivePeriod);
		$this->effectivePeriod = $effectivePeriod;
		return $this;
	}

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for precisely observed times, typically system logs etc.,
	 * and not human-reported times - for them, see date and dateTime below. Time zone
	 * is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The date and time that this version of the report was released from the source
	 * diagnostic service.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRInstantPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstant
	 */
	public function getIssued(): ?FHIRInstant
	{
		return $this->issued;
	}

	/**
	 * An instant in time - known at least to the second
	 * Note: This is intended for precisely observed times, typically system logs etc.,
	 * and not human-reported times - for them, see date and dateTime below. Time zone
	 * is always required
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The date and time that this version of the report was released from the source
	 * diagnostic service.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRInstantPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRInstant $issued
	 * @return static
	 */
	public function setIssued($issued = null): object
	{
		if (null !== $issued && !($issued instanceof FHIRInstant)) {
			$issued = new FHIRInstant($issued);
		}
		$this->_trackValueSet($this->issued, $issued);
		$this->issued = $issued;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The diagnostic service that is responsible for issuing the report.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getPerformer(): ?FHIRReference
	{
		return $this->performer;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The diagnostic service that is responsible for issuing the report.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $performer
	 * @return static
	 */
	public function setPerformer(?FHIRReference $performer = null): object
	{
		$this->_trackValueSet($this->performer, $performer);
		$this->performer = $performer;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Details concerning a test or procedure requested.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	public function getRequest(): ?array
	{
		return $this->request;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Details concerning a test or procedure requested.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $request
	 * @return static
	 */
	public function addRequest(?FHIRReference $request = null): object
	{
		$this->_trackValueAdded();
		$this->request[] = $request;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Details concerning a test or procedure requested.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[] $request
	 * @return static
	 */
	public function setRequest(array $request = []): object
	{
		if ([] !== $this->request) {
			$this->_trackValuesRemoved(count($this->request));
			$this->request = [];
		}
		if ([] === $request) {
			return $this;
		}
		foreach ($request as $v) {
			if ($v instanceof FHIRReference) {
				$this->addRequest($v);
			} else {
				$this->addRequest(new FHIRReference($v));
			}
		}
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Details about the specimens on which this diagnostic report is based.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	public function getSpecimen(): ?array
	{
		return $this->specimen;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Details about the specimens on which this diagnostic report is based.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $specimen
	 * @return static
	 */
	public function addSpecimen(?FHIRReference $specimen = null): object
	{
		$this->_trackValueAdded();
		$this->specimen[] = $specimen;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Details about the specimens on which this diagnostic report is based.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[] $specimen
	 * @return static
	 */
	public function setSpecimen(array $specimen = []): object
	{
		if ([] !== $this->specimen) {
			$this->_trackValuesRemoved(count($this->specimen));
			$this->specimen = [];
		}
		if ([] === $specimen) {
			return $this;
		}
		foreach ($specimen as $v) {
			if ($v instanceof FHIRReference) {
				$this->addSpecimen($v);
			} else {
				$this->addSpecimen(new FHIRReference($v));
			}
		}
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Observations that are part of this diagnostic report. Observations can be simple
	 * name/value pairs (e.g. "atomic" results), or they can be grouping observations
	 * that include references to other members of the group (e.g. "panels").
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	public function getResult(): ?array
	{
		return $this->result;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Observations that are part of this diagnostic report. Observations can be simple
	 * name/value pairs (e.g. "atomic" results), or they can be grouping observations
	 * that include references to other members of the group (e.g. "panels").
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $result
	 * @return static
	 */
	public function addResult(?FHIRReference $result = null): object
	{
		$this->_trackValueAdded();
		$this->result[] = $result;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Observations that are part of this diagnostic report. Observations can be simple
	 * name/value pairs (e.g. "atomic" results), or they can be grouping observations
	 * that include references to other members of the group (e.g. "panels").
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[] $result
	 * @return static
	 */
	public function setResult(array $result = []): object
	{
		if ([] !== $this->result) {
			$this->_trackValuesRemoved(count($this->result));
			$this->result = [];
		}
		if ([] === $result) {
			return $this;
		}
		foreach ($result as $v) {
			if ($v instanceof FHIRReference) {
				$this->addResult($v);
			} else {
				$this->addResult(new FHIRReference($v));
			}
		}
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * One or more links to full details of any imaging performed during the diagnostic
	 * investigation. Typically, this is imaging performed by DICOM enabled modalities,
	 * but this is not required. A fully enabled PACS viewer can use this information
	 * to provide views of the source images.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[]
	 */
	public function getImagingStudy(): ?array
	{
		return $this->imagingStudy;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * One or more links to full details of any imaging performed during the diagnostic
	 * investigation. Typically, this is imaging performed by DICOM enabled modalities,
	 * but this is not required. A fully enabled PACS viewer can use this information
	 * to provide views of the source images.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $imagingStudy
	 * @return static
	 */
	public function addImagingStudy(?FHIRReference $imagingStudy = null): object
	{
		$this->_trackValueAdded();
		$this->imagingStudy[] = $imagingStudy;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * One or more links to full details of any imaging performed during the diagnostic
	 * investigation. Typically, this is imaging performed by DICOM enabled modalities,
	 * but this is not required. A fully enabled PACS viewer can use this information
	 * to provide views of the source images.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference[] $imagingStudy
	 * @return static
	 */
	public function setImagingStudy(array $imagingStudy = []): object
	{
		if ([] !== $this->imagingStudy) {
			$this->_trackValuesRemoved(count($this->imagingStudy));
			$this->imagingStudy = [];
		}
		if ([] === $imagingStudy) {
			return $this;
		}
		foreach ($imagingStudy as $v) {
			if ($v instanceof FHIRReference) {
				$this->addImagingStudy($v);
			} else {
				$this->addImagingStudy(new FHIRReference($v));
			}
		}
		return $this;
	}

	/**
	 * The findings and interpretation of diagnostic tests performed on patients,
	 * groups of patients, devices, and locations, and/or specimens derived from these.
	 * The report includes clinical context such as requesting and provider
	 * information, and some mix of atomic results, images, textual and coded
	 * interpretations, and formatted representation of diagnostic reports.
	 *
	 * A list of key images associated with this report. The images are generally
	 * created during the diagnostic process, and may be directly of the patient, or of
	 * treated specimens (i.e. slides of interest).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportImage[]
	 */
	public function getImage(): ?array
	{
		return $this->image;
	}

	/**
	 * The findings and interpretation of diagnostic tests performed on patients,
	 * groups of patients, devices, and locations, and/or specimens derived from these.
	 * The report includes clinical context such as requesting and provider
	 * information, and some mix of atomic results, images, textual and coded
	 * interpretations, and formatted representation of diagnostic reports.
	 *
	 * A list of key images associated with this report. The images are generally
	 * created during the diagnostic process, and may be directly of the patient, or of
	 * treated specimens (i.e. slides of interest).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportImage $image
	 * @return static
	 */
	public function addImage(?FHIRDiagnosticReportImage $image = null): object
	{
		$this->_trackValueAdded();
		$this->image[] = $image;
		return $this;
	}

	/**
	 * The findings and interpretation of diagnostic tests performed on patients,
	 * groups of patients, devices, and locations, and/or specimens derived from these.
	 * The report includes clinical context such as requesting and provider
	 * information, and some mix of atomic results, images, textual and coded
	 * interpretations, and formatted representation of diagnostic reports.
	 *
	 * A list of key images associated with this report. The images are generally
	 * created during the diagnostic process, and may be directly of the patient, or of
	 * treated specimens (i.e. slides of interest).
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportImage[] $image
	 * @return static
	 */
	public function setImage(array $image = []): object
	{
		if ([] !== $this->image) {
			$this->_trackValuesRemoved(count($this->image));
			$this->image = [];
		}
		if ([] === $image) {
			return $this;
		}
		foreach ($image as $v) {
			if ($v instanceof FHIRDiagnosticReportImage) {
				$this->addImage($v);
			} else {
				$this->addImage(new FHIRDiagnosticReportImage($v));
			}
		}
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Concise and clinically contextualized narrative interpretation of the diagnostic
	 * report.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	public function getConclusion(): ?FHIRString
	{
		return $this->conclusion;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Concise and clinically contextualized narrative interpretation of the diagnostic
	 * report.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString $conclusion
	 * @return static
	 */
	public function setConclusion($conclusion = null): object
	{
		if (null !== $conclusion && !($conclusion instanceof FHIRString)) {
			$conclusion = new FHIRString($conclusion);
		}
		$this->_trackValueSet($this->conclusion, $conclusion);
		$this->conclusion = $conclusion;
		return $this;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Codes for the conclusion.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept[]
	 */
	public function getCodedDiagnosis(): ?array
	{
		return $this->codedDiagnosis;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Codes for the conclusion.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $codedDiagnosis
	 * @return static
	 */
	public function addCodedDiagnosis(?FHIRCodeableConcept $codedDiagnosis = null): object
	{
		$this->_trackValueAdded();
		$this->codedDiagnosis[] = $codedDiagnosis;
		return $this;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Codes for the conclusion.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept[] $codedDiagnosis
	 * @return static
	 */
	public function setCodedDiagnosis(array $codedDiagnosis = []): object
	{
		if ([] !== $this->codedDiagnosis) {
			$this->_trackValuesRemoved(count($this->codedDiagnosis));
			$this->codedDiagnosis = [];
		}
		if ([] === $codedDiagnosis) {
			return $this;
		}
		foreach ($codedDiagnosis as $v) {
			if ($v instanceof FHIRCodeableConcept) {
				$this->addCodedDiagnosis($v);
			} else {
				$this->addCodedDiagnosis(new FHIRCodeableConcept($v));
			}
		}
		return $this;
	}

	/**
	 * For referring to data content defined in other formats.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Rich text representation of the entire result as issued by the diagnostic
	 * service. Multiple formats are allowed but they SHALL be semantically equivalent.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAttachment[]
	 */
	public function getPresentedForm(): ?array
	{
		return $this->presentedForm;
	}

	/**
	 * For referring to data content defined in other formats.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Rich text representation of the entire result as issued by the diagnostic
	 * service. Multiple formats are allowed but they SHALL be semantically equivalent.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAttachment $presentedForm
	 * @return static
	 */
	public function addPresentedForm(?FHIRAttachment $presentedForm = null): object
	{
		$this->_trackValueAdded();
		$this->presentedForm[] = $presentedForm;
		return $this;
	}

	/**
	 * For referring to data content defined in other formats.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Rich text representation of the entire result as issued by the diagnostic
	 * service. Multiple formats are allowed but they SHALL be semantically equivalent.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAttachment[] $presentedForm
	 * @return static
	 */
	public function setPresentedForm(array $presentedForm = []): object
	{
		if ([] !== $this->presentedForm) {
			$this->_trackValuesRemoved(count($this->presentedForm));
			$this->presentedForm = [];
		}
		if ([] === $presentedForm) {
			return $this;
		}
		foreach ($presentedForm as $v) {
			if ($v instanceof FHIRAttachment) {
				$this->addPresentedForm($v);
			} else {
				$this->addPresentedForm(new FHIRAttachment($v));
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
		if (null !== ($v = $this->getStatus())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_STATUS] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getCategory())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_CATEGORY] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getCode())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_CODE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getSubject())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_SUBJECT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getEncounter())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_ENCOUNTER] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getEffectiveDateTime())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_EFFECTIVE_DATE_TIME] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getEffectivePeriod())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_EFFECTIVE_PERIOD] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getIssued())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_ISSUED] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPerformer())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PERFORMER] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getRequest())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_REQUEST, $i)] = $fieldErrs;
				}
			}
		}
		if ([] !== ($vs = $this->getSpecimen())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_SPECIMEN, $i)] = $fieldErrs;
				}
			}
		}
		if ([] !== ($vs = $this->getResult())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_RESULT, $i)] = $fieldErrs;
				}
			}
		}
		if ([] !== ($vs = $this->getImagingStudy())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_IMAGING_STUDY, $i)] = $fieldErrs;
				}
			}
		}
		if ([] !== ($vs = $this->getImage())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_IMAGE, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getConclusion())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_CONCLUSION] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getCodedDiagnosis())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_CODED_DIAGNOSIS, $i)] = $fieldErrs;
				}
			}
		}
		if ([] !== ($vs = $this->getPresentedForm())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_PRESENTED_FORM, $i)] = $fieldErrs;
				}
			}
		}
		if (isset($validationRules[self::FIELD_IDENTIFIER])) {
			$v = $this->getIdentifier();
			foreach ($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT,
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
		if (isset($validationRules[self::FIELD_STATUS])) {
			$v = $this->getStatus();
			foreach ($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT,
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
		if (isset($validationRules[self::FIELD_CATEGORY])) {
			$v = $this->getCategory();
			foreach ($validationRules[self::FIELD_CATEGORY] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT,
					self::FIELD_CATEGORY,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_CATEGORY])) {
						$errs[self::FIELD_CATEGORY] = [];
					}
					$errs[self::FIELD_CATEGORY][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_CODE])) {
			$v = $this->getCode();
			foreach ($validationRules[self::FIELD_CODE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT,
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
		if (isset($validationRules[self::FIELD_SUBJECT])) {
			$v = $this->getSubject();
			foreach ($validationRules[self::FIELD_SUBJECT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT,
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
		if (isset($validationRules[self::FIELD_ENCOUNTER])) {
			$v = $this->getEncounter();
			foreach ($validationRules[self::FIELD_ENCOUNTER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT,
					self::FIELD_ENCOUNTER,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_ENCOUNTER])) {
						$errs[self::FIELD_ENCOUNTER] = [];
					}
					$errs[self::FIELD_ENCOUNTER][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_EFFECTIVE_DATE_TIME])) {
			$v = $this->getEffectiveDateTime();
			foreach ($validationRules[self::FIELD_EFFECTIVE_DATE_TIME] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT,
					self::FIELD_EFFECTIVE_DATE_TIME,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_EFFECTIVE_DATE_TIME])) {
						$errs[self::FIELD_EFFECTIVE_DATE_TIME] = [];
					}
					$errs[self::FIELD_EFFECTIVE_DATE_TIME][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_EFFECTIVE_PERIOD])) {
			$v = $this->getEffectivePeriod();
			foreach ($validationRules[self::FIELD_EFFECTIVE_PERIOD] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT,
					self::FIELD_EFFECTIVE_PERIOD,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_EFFECTIVE_PERIOD])) {
						$errs[self::FIELD_EFFECTIVE_PERIOD] = [];
					}
					$errs[self::FIELD_EFFECTIVE_PERIOD][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_ISSUED])) {
			$v = $this->getIssued();
			foreach ($validationRules[self::FIELD_ISSUED] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT,
					self::FIELD_ISSUED,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_ISSUED])) {
						$errs[self::FIELD_ISSUED] = [];
					}
					$errs[self::FIELD_ISSUED][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PERFORMER])) {
			$v = $this->getPerformer();
			foreach ($validationRules[self::FIELD_PERFORMER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT,
					self::FIELD_PERFORMER,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PERFORMER])) {
						$errs[self::FIELD_PERFORMER] = [];
					}
					$errs[self::FIELD_PERFORMER][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_REQUEST])) {
			$v = $this->getRequest();
			foreach ($validationRules[self::FIELD_REQUEST] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT,
					self::FIELD_REQUEST,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_REQUEST])) {
						$errs[self::FIELD_REQUEST] = [];
					}
					$errs[self::FIELD_REQUEST][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_SPECIMEN])) {
			$v = $this->getSpecimen();
			foreach ($validationRules[self::FIELD_SPECIMEN] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT,
					self::FIELD_SPECIMEN,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_SPECIMEN])) {
						$errs[self::FIELD_SPECIMEN] = [];
					}
					$errs[self::FIELD_SPECIMEN][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_RESULT])) {
			$v = $this->getResult();
			foreach ($validationRules[self::FIELD_RESULT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT,
					self::FIELD_RESULT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_RESULT])) {
						$errs[self::FIELD_RESULT] = [];
					}
					$errs[self::FIELD_RESULT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_IMAGING_STUDY])) {
			$v = $this->getImagingStudy();
			foreach ($validationRules[self::FIELD_IMAGING_STUDY] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT,
					self::FIELD_IMAGING_STUDY,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_IMAGING_STUDY])) {
						$errs[self::FIELD_IMAGING_STUDY] = [];
					}
					$errs[self::FIELD_IMAGING_STUDY][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_IMAGE])) {
			$v = $this->getImage();
			foreach ($validationRules[self::FIELD_IMAGE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT,
					self::FIELD_IMAGE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_IMAGE])) {
						$errs[self::FIELD_IMAGE] = [];
					}
					$errs[self::FIELD_IMAGE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_CONCLUSION])) {
			$v = $this->getConclusion();
			foreach ($validationRules[self::FIELD_CONCLUSION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT,
					self::FIELD_CONCLUSION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_CONCLUSION])) {
						$errs[self::FIELD_CONCLUSION] = [];
					}
					$errs[self::FIELD_CONCLUSION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_CODED_DIAGNOSIS])) {
			$v = $this->getCodedDiagnosis();
			foreach ($validationRules[self::FIELD_CODED_DIAGNOSIS] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT,
					self::FIELD_CODED_DIAGNOSIS,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_CODED_DIAGNOSIS])) {
						$errs[self::FIELD_CODED_DIAGNOSIS] = [];
					}
					$errs[self::FIELD_CODED_DIAGNOSIS][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PRESENTED_FORM])) {
			$v = $this->getPresentedForm();
			foreach ($validationRules[self::FIELD_PRESENTED_FORM] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT,
					self::FIELD_PRESENTED_FORM,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PRESENTED_FORM])) {
						$errs[self::FIELD_PRESENTED_FORM] = [];
					}
					$errs[self::FIELD_PRESENTED_FORM][$rule] = $err;
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRDiagnosticReport $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRDiagnosticReport
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
						'FHIRDiagnosticReport::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRDiagnosticReport::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRDiagnosticReport(null);
		} elseif (!is_object($type) || !($type instanceof FHIRDiagnosticReport)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRDiagnosticReport::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRDiagnosticReport or null, %s seen.',
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
			} elseif (self::FIELD_STATUS === $n->nodeName) {
				$type->setStatus(FHIRDiagnosticReportStatus::xmlUnserialize($n));
			} elseif (self::FIELD_CATEGORY === $n->nodeName) {
				$type->setCategory(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_CODE === $n->nodeName) {
				$type->setCode(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_SUBJECT === $n->nodeName) {
				$type->setSubject(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_ENCOUNTER === $n->nodeName) {
				$type->setEncounter(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_EFFECTIVE_DATE_TIME === $n->nodeName) {
				$type->setEffectiveDateTime(FHIRDateTime::xmlUnserialize($n));
			} elseif (self::FIELD_EFFECTIVE_PERIOD === $n->nodeName) {
				$type->setEffectivePeriod(FHIRPeriod::xmlUnserialize($n));
			} elseif (self::FIELD_ISSUED === $n->nodeName) {
				$type->setIssued(FHIRInstant::xmlUnserialize($n));
			} elseif (self::FIELD_PERFORMER === $n->nodeName) {
				$type->setPerformer(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_REQUEST === $n->nodeName) {
				$type->addRequest(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_SPECIMEN === $n->nodeName) {
				$type->addSpecimen(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_RESULT === $n->nodeName) {
				$type->addResult(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_IMAGING_STUDY === $n->nodeName) {
				$type->addImagingStudy(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_IMAGE === $n->nodeName) {
				$type->addImage(FHIRDiagnosticReportImage::xmlUnserialize($n));
			} elseif (self::FIELD_CONCLUSION === $n->nodeName) {
				$type->setConclusion(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_CODED_DIAGNOSIS === $n->nodeName) {
				$type->addCodedDiagnosis(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_PRESENTED_FORM === $n->nodeName) {
				$type->addPresentedForm(FHIRAttachment::xmlUnserialize($n));
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
		$n = $element->attributes->getNamedItem(self::FIELD_EFFECTIVE_DATE_TIME);
		if (null !== $n) {
			$pt = $type->getEffectiveDateTime();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setEffectiveDateTime($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_ISSUED);
		if (null !== $n) {
			$pt = $type->getIssued();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setIssued($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_CONCLUSION);
		if (null !== $n) {
			$pt = $type->getConclusion();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setConclusion($n->nodeValue);
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
		if (null !== ($v = $this->getStatus())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_STATUS);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getCategory())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_CATEGORY);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getCode())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_CODE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getSubject())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_SUBJECT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getEncounter())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_ENCOUNTER);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getEffectiveDateTime())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_EFFECTIVE_DATE_TIME);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getEffectivePeriod())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_EFFECTIVE_PERIOD);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getIssued())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_ISSUED);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPerformer())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PERFORMER);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getRequest())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_REQUEST);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if ([] !== ($vs = $this->getSpecimen())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_SPECIMEN);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if ([] !== ($vs = $this->getResult())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_RESULT);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if ([] !== ($vs = $this->getImagingStudy())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_IMAGING_STUDY);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if ([] !== ($vs = $this->getImage())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_IMAGE);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if (null !== ($v = $this->getConclusion())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_CONCLUSION);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getCodedDiagnosis())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_CODED_DIAGNOSIS);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if ([] !== ($vs = $this->getPresentedForm())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_PRESENTED_FORM);
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
		if (null !== ($v = $this->getStatus())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_STATUS} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRDiagnosticReportStatus::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_STATUS_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getCategory())) {
			$out->{self::FIELD_CATEGORY} = $v;
		}
		if (null !== ($v = $this->getCode())) {
			$out->{self::FIELD_CODE} = $v;
		}
		if (null !== ($v = $this->getSubject())) {
			$out->{self::FIELD_SUBJECT} = $v;
		}
		if (null !== ($v = $this->getEncounter())) {
			$out->{self::FIELD_ENCOUNTER} = $v;
		}
		if (null !== ($v = $this->getEffectiveDateTime())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_EFFECTIVE_DATE_TIME} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRDateTime::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_EFFECTIVE_DATE_TIME_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getEffectivePeriod())) {
			$out->{self::FIELD_EFFECTIVE_PERIOD} = $v;
		}
		if (null !== ($v = $this->getIssued())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_ISSUED} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRInstant::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_ISSUED_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getPerformer())) {
			$out->{self::FIELD_PERFORMER} = $v;
		}
		if ([] !== ($vs = $this->getRequest())) {
			$out->{self::FIELD_REQUEST} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_REQUEST}[] = $v;
			}
		}
		if ([] !== ($vs = $this->getSpecimen())) {
			$out->{self::FIELD_SPECIMEN} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_SPECIMEN}[] = $v;
			}
		}
		if ([] !== ($vs = $this->getResult())) {
			$out->{self::FIELD_RESULT} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_RESULT}[] = $v;
			}
		}
		if ([] !== ($vs = $this->getImagingStudy())) {
			$out->{self::FIELD_IMAGING_STUDY} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_IMAGING_STUDY}[] = $v;
			}
		}
		if ([] !== ($vs = $this->getImage())) {
			$out->{self::FIELD_IMAGE} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_IMAGE}[] = $v;
			}
		}
		if (null !== ($v = $this->getConclusion())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_CONCLUSION} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRString::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_CONCLUSION_EXT} = $ext;
			}
		}
		if ([] !== ($vs = $this->getCodedDiagnosis())) {
			$out->{self::FIELD_CODED_DIAGNOSIS} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_CODED_DIAGNOSIS}[] = $v;
			}
		}
		if ([] !== ($vs = $this->getPresentedForm())) {
			$out->{self::FIELD_PRESENTED_FORM} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_PRESENTED_FORM}[] = $v;
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
