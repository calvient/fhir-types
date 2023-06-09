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

use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionStudy;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRExtension;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRId;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMeta;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRNarrative;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIROid;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri;
use Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource;
use Calvient\FhirTypes\DSTU2\PHPFHIRConstants;
use Calvient\FhirTypes\DSTU2\PHPFHIRContainedTypeInterface;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeInterface;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeMap;

/**
 * A manifest of a set of DICOM Service-Object Pair Instances (SOP Instances). The
 * referenced SOP Instances (images or other content) are for a single patient, and
 * may be from one or more studies. The referenced SOP Instances have been selected
 * for a purpose, such as quality assurance, conference, or consult. Reflecting
 * that range of purposes, typical ImagingObjectSelection resources may include all
 * SOP Instances in a study (perhaps for sharing through a Health Information
 * Exchange); key images from multiple studies (for reference by a referring or
 * treating physician); a multi-frame ultrasound instance ("cine" video clip) and a
 * set of measurements taken from that instance (for inclusion in a teaching file);
 * and so on.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRImagingObjectSelection
 * @package \Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIRImagingObjectSelection extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_IMAGING_OBJECT_SELECTION;
	const FIELD_UID = 'uid';
	const FIELD_UID_EXT = '_uid';
	const FIELD_PATIENT = 'patient';
	const FIELD_TITLE = 'title';
	const FIELD_DESCRIPTION = 'description';
	const FIELD_DESCRIPTION_EXT = '_description';
	const FIELD_AUTHOR = 'author';
	const FIELD_AUTHORING_TIME = 'authoringTime';
	const FIELD_AUTHORING_TIME_EXT = '_authoringTime';
	const FIELD_STUDY = 'study';

	/** @var string */
	private $_xmlns = '';

	/**
	 * An oid represented as a URI
	 * RFC 3001. See also ISO/IEC 8824:1990 €
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Instance UID of the DICOM KOS SOP Instances represented in this resource.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIROidPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIROid
	 */
	protected ?FHIROid $uid = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A patient resource reference which is the patient subject of all DICOM SOP
	 * Instances in this ImagingObjectSelection.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $patient = null;

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The reason for, or significance of, the selection of objects referenced in the
	 * resource.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	protected ?FHIRCodeableConcept $title = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Text description of the DICOM SOP instances selected in the
	 * ImagingObjectSelection. This should be aligned with the content of the title
	 * element, and can provide further explanation of the SOP instances in the
	 * selection.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $description = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Author of ImagingObjectSelection. It can be a human author or a device which
	 * made the decision of the SOP instances selected. For example, a radiologist
	 * selected a set of imaging SOP instances to attach in a diagnostic report, and a
	 * CAD application may author a selection to describe SOP instances it used to
	 * generate a detection conclusion.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $author = null;

	/**
	 * A date, date-time or partial date (e.g. just year or year + month). If hours and
	 * minutes are specified, a time zone SHALL be populated. The format is a union of
	 * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
	 * due to schema type constraints but may be zero-filled and may be ignored. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Date and time when the selection of the referenced instances were made. It is
	 * (typically) different from the creation date of the selection resource, and from
	 * dates associated with the referenced instances (e.g. capture time of the
	 * referenced image).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime
	 */
	protected ?FHIRDateTime $authoringTime = null;

	/**
	 * A manifest of a set of DICOM Service-Object Pair Instances (SOP Instances). The
	 * referenced SOP Instances (images or other content) are for a single patient, and
	 * may be from one or more studies. The referenced SOP Instances have been selected
	 * for a purpose, such as quality assurance, conference, or consult. Reflecting
	 * that range of purposes, typical ImagingObjectSelection resources may include all
	 * SOP Instances in a study (perhaps for sharing through a Health Information
	 * Exchange); key images from multiple studies (for reference by a referring or
	 * treating physician); a multi-frame ultrasound instance ("cine" video clip) and a
	 * set of measurements taken from that instance (for inclusion in a teaching file);
	 * and so on.
	 *
	 * Study identity and locating information of the DICOM SOP instances in the
	 * selection.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionStudy[]
	 */
	protected ?array $study = [];

	/**
	 * Validation map for fields in type ImagingObjectSelection
	 * @var array
	 */
	private static array $_validationRules = [
		self::FIELD_STUDY => [
			PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
		],
	];

	/**
	 * FHIRImagingObjectSelection Constructor
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
					'FHIRImagingObjectSelection::_construct - $data expected to be null or array, %s seen',
					gettype($data),
				),
			);
		}
		parent::__construct($data);
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
		if (isset($data[self::FIELD_PATIENT])) {
			if ($data[self::FIELD_PATIENT] instanceof FHIRReference) {
				$this->setPatient($data[self::FIELD_PATIENT]);
			} else {
				$this->setPatient(new FHIRReference($data[self::FIELD_PATIENT]));
			}
		}
		if (isset($data[self::FIELD_TITLE])) {
			if ($data[self::FIELD_TITLE] instanceof FHIRCodeableConcept) {
				$this->setTitle($data[self::FIELD_TITLE]);
			} else {
				$this->setTitle(new FHIRCodeableConcept($data[self::FIELD_TITLE]));
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
		if (isset($data[self::FIELD_AUTHOR])) {
			if ($data[self::FIELD_AUTHOR] instanceof FHIRReference) {
				$this->setAuthor($data[self::FIELD_AUTHOR]);
			} else {
				$this->setAuthor(new FHIRReference($data[self::FIELD_AUTHOR]));
			}
		}
		if (
			isset($data[self::FIELD_AUTHORING_TIME]) ||
			isset($data[self::FIELD_AUTHORING_TIME_EXT])
		) {
			$value = $data[self::FIELD_AUTHORING_TIME] ?? null;
			$ext =
				isset($data[self::FIELD_AUTHORING_TIME_EXT]) &&
				is_array($data[self::FIELD_AUTHORING_TIME_EXT])
					? $data[self::FIELD_AUTHORING_TIME_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRDateTime) {
					$this->setAuthoringTime($value);
				} elseif (is_array($value)) {
					$this->setAuthoringTime(new FHIRDateTime(array_merge($ext, $value)));
				} else {
					$this->setAuthoringTime(
						new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setAuthoringTime(new FHIRDateTime($ext));
			}
		}
		if (isset($data[self::FIELD_STUDY])) {
			if (is_array($data[self::FIELD_STUDY])) {
				foreach ($data[self::FIELD_STUDY] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRImagingObjectSelectionStudy) {
						$this->addStudy($v);
					} else {
						$this->addStudy(new FHIRImagingObjectSelectionStudy($v));
					}
				}
			} elseif ($data[self::FIELD_STUDY] instanceof FHIRImagingObjectSelectionStudy) {
				$this->addStudy($data[self::FIELD_STUDY]);
			} else {
				$this->addStudy(new FHIRImagingObjectSelectionStudy($data[self::FIELD_STUDY]));
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
		return "<ImagingObjectSelection{$xmlns}></ImagingObjectSelection>";
	}
	/**
	 * @return string
	 */
	public function _getResourceType(): string
	{
		return static::FHIR_TYPE_NAME;
	}

	/**
	 * An oid represented as a URI
	 * RFC 3001. See also ISO/IEC 8824:1990 €
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Instance UID of the DICOM KOS SOP Instances represented in this resource.
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
	 * Instance UID of the DICOM KOS SOP Instances represented in this resource.
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
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * A patient resource reference which is the patient subject of all DICOM SOP
	 * Instances in this ImagingObjectSelection.
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
	 * A patient resource reference which is the patient subject of all DICOM SOP
	 * Instances in this ImagingObjectSelection.
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
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The reason for, or significance of, the selection of objects referenced in the
	 * resource.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	public function getTitle(): ?FHIRCodeableConcept
	{
		return $this->title;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The reason for, or significance of, the selection of objects referenced in the
	 * resource.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $title
	 * @return static
	 */
	public function setTitle(?FHIRCodeableConcept $title = null): object
	{
		$this->_trackValueSet($this->title, $title);
		$this->title = $title;
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Text description of the DICOM SOP instances selected in the
	 * ImagingObjectSelection. This should be aligned with the content of the title
	 * element, and can provide further explanation of the SOP instances in the
	 * selection.
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
	 * Text description of the DICOM SOP instances selected in the
	 * ImagingObjectSelection. This should be aligned with the content of the title
	 * element, and can provide further explanation of the SOP instances in the
	 * selection.
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
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Author of ImagingObjectSelection. It can be a human author or a device which
	 * made the decision of the SOP instances selected. For example, a radiologist
	 * selected a set of imaging SOP instances to attach in a diagnostic report, and a
	 * CAD application may author a selection to describe SOP instances it used to
	 * generate a detection conclusion.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getAuthor(): ?FHIRReference
	{
		return $this->author;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Author of ImagingObjectSelection. It can be a human author or a device which
	 * made the decision of the SOP instances selected. For example, a radiologist
	 * selected a set of imaging SOP instances to attach in a diagnostic report, and a
	 * CAD application may author a selection to describe SOP instances it used to
	 * generate a detection conclusion.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $author
	 * @return static
	 */
	public function setAuthor(?FHIRReference $author = null): object
	{
		$this->_trackValueSet($this->author, $author);
		$this->author = $author;
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
	 * Date and time when the selection of the referenced instances were made. It is
	 * (typically) different from the creation date of the selection resource, and from
	 * dates associated with the referenced instances (e.g. capture time of the
	 * referenced image).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime
	 */
	public function getAuthoringTime(): ?FHIRDateTime
	{
		return $this->authoringTime;
	}

	/**
	 * A date, date-time or partial date (e.g. just year or year + month). If hours and
	 * minutes are specified, a time zone SHALL be populated. The format is a union of
	 * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
	 * due to schema type constraints but may be zero-filled and may be ignored. Dates
	 * SHALL be valid dates.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Date and time when the selection of the referenced instances were made. It is
	 * (typically) different from the creation date of the selection resource, and from
	 * dates associated with the referenced instances (e.g. capture time of the
	 * referenced image).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRDateTimePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDateTime $authoringTime
	 * @return static
	 */
	public function setAuthoringTime($authoringTime = null): object
	{
		if (null !== $authoringTime && !($authoringTime instanceof FHIRDateTime)) {
			$authoringTime = new FHIRDateTime($authoringTime);
		}
		$this->_trackValueSet($this->authoringTime, $authoringTime);
		$this->authoringTime = $authoringTime;
		return $this;
	}

	/**
	 * A manifest of a set of DICOM Service-Object Pair Instances (SOP Instances). The
	 * referenced SOP Instances (images or other content) are for a single patient, and
	 * may be from one or more studies. The referenced SOP Instances have been selected
	 * for a purpose, such as quality assurance, conference, or consult. Reflecting
	 * that range of purposes, typical ImagingObjectSelection resources may include all
	 * SOP Instances in a study (perhaps for sharing through a Health Information
	 * Exchange); key images from multiple studies (for reference by a referring or
	 * treating physician); a multi-frame ultrasound instance ("cine" video clip) and a
	 * set of measurements taken from that instance (for inclusion in a teaching file);
	 * and so on.
	 *
	 * Study identity and locating information of the DICOM SOP instances in the
	 * selection.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionStudy[]
	 */
	public function getStudy(): ?array
	{
		return $this->study;
	}

	/**
	 * A manifest of a set of DICOM Service-Object Pair Instances (SOP Instances). The
	 * referenced SOP Instances (images or other content) are for a single patient, and
	 * may be from one or more studies. The referenced SOP Instances have been selected
	 * for a purpose, such as quality assurance, conference, or consult. Reflecting
	 * that range of purposes, typical ImagingObjectSelection resources may include all
	 * SOP Instances in a study (perhaps for sharing through a Health Information
	 * Exchange); key images from multiple studies (for reference by a referring or
	 * treating physician); a multi-frame ultrasound instance ("cine" video clip) and a
	 * set of measurements taken from that instance (for inclusion in a teaching file);
	 * and so on.
	 *
	 * Study identity and locating information of the DICOM SOP instances in the
	 * selection.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionStudy $study
	 * @return static
	 */
	public function addStudy(?FHIRImagingObjectSelectionStudy $study = null): object
	{
		$this->_trackValueAdded();
		$this->study[] = $study;
		return $this;
	}

	/**
	 * A manifest of a set of DICOM Service-Object Pair Instances (SOP Instances). The
	 * referenced SOP Instances (images or other content) are for a single patient, and
	 * may be from one or more studies. The referenced SOP Instances have been selected
	 * for a purpose, such as quality assurance, conference, or consult. Reflecting
	 * that range of purposes, typical ImagingObjectSelection resources may include all
	 * SOP Instances in a study (perhaps for sharing through a Health Information
	 * Exchange); key images from multiple studies (for reference by a referring or
	 * treating physician); a multi-frame ultrasound instance ("cine" video clip) and a
	 * set of measurements taken from that instance (for inclusion in a teaching file);
	 * and so on.
	 *
	 * Study identity and locating information of the DICOM SOP instances in the
	 * selection.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionStudy[] $study
	 * @return static
	 */
	public function setStudy(array $study = []): object
	{
		if ([] !== $this->study) {
			$this->_trackValuesRemoved(count($this->study));
			$this->study = [];
		}
		if ([] === $study) {
			return $this;
		}
		foreach ($study as $v) {
			if ($v instanceof FHIRImagingObjectSelectionStudy) {
				$this->addStudy($v);
			} else {
				$this->addStudy(new FHIRImagingObjectSelectionStudy($v));
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
		if (null !== ($v = $this->getUid())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_UID] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPatient())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PATIENT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getTitle())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_TITLE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDescription())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DESCRIPTION] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getAuthor())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_AUTHOR] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getAuthoringTime())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_AUTHORING_TIME] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getStudy())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_STUDY, $i)] = $fieldErrs;
				}
			}
		}
		if (isset($validationRules[self::FIELD_UID])) {
			$v = $this->getUid();
			foreach ($validationRules[self::FIELD_UID] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMAGING_OBJECT_SELECTION,
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
		if (isset($validationRules[self::FIELD_PATIENT])) {
			$v = $this->getPatient();
			foreach ($validationRules[self::FIELD_PATIENT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMAGING_OBJECT_SELECTION,
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
		if (isset($validationRules[self::FIELD_TITLE])) {
			$v = $this->getTitle();
			foreach ($validationRules[self::FIELD_TITLE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMAGING_OBJECT_SELECTION,
					self::FIELD_TITLE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_TITLE])) {
						$errs[self::FIELD_TITLE] = [];
					}
					$errs[self::FIELD_TITLE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DESCRIPTION])) {
			$v = $this->getDescription();
			foreach ($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMAGING_OBJECT_SELECTION,
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
		if (isset($validationRules[self::FIELD_AUTHOR])) {
			$v = $this->getAuthor();
			foreach ($validationRules[self::FIELD_AUTHOR] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMAGING_OBJECT_SELECTION,
					self::FIELD_AUTHOR,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_AUTHOR])) {
						$errs[self::FIELD_AUTHOR] = [];
					}
					$errs[self::FIELD_AUTHOR][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_AUTHORING_TIME])) {
			$v = $this->getAuthoringTime();
			foreach ($validationRules[self::FIELD_AUTHORING_TIME] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMAGING_OBJECT_SELECTION,
					self::FIELD_AUTHORING_TIME,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_AUTHORING_TIME])) {
						$errs[self::FIELD_AUTHORING_TIME] = [];
					}
					$errs[self::FIELD_AUTHORING_TIME][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_STUDY])) {
			$v = $this->getStudy();
			foreach ($validationRules[self::FIELD_STUDY] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMAGING_OBJECT_SELECTION,
					self::FIELD_STUDY,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_STUDY])) {
						$errs[self::FIELD_STUDY] = [];
					}
					$errs[self::FIELD_STUDY][$rule] = $err;
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRImagingObjectSelection $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRImagingObjectSelection
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
						'FHIRImagingObjectSelection::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRImagingObjectSelection::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRImagingObjectSelection(null);
		} elseif (!is_object($type) || !($type instanceof FHIRImagingObjectSelection)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRImagingObjectSelection::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRImagingObjectSelection or null, %s seen.',
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
			if (self::FIELD_UID === $n->nodeName) {
				$type->setUid(FHIROid::xmlUnserialize($n));
			} elseif (self::FIELD_PATIENT === $n->nodeName) {
				$type->setPatient(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_TITLE === $n->nodeName) {
				$type->setTitle(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_DESCRIPTION === $n->nodeName) {
				$type->setDescription(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_AUTHOR === $n->nodeName) {
				$type->setAuthor(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_AUTHORING_TIME === $n->nodeName) {
				$type->setAuthoringTime(FHIRDateTime::xmlUnserialize($n));
			} elseif (self::FIELD_STUDY === $n->nodeName) {
				$type->addStudy(FHIRImagingObjectSelectionStudy::xmlUnserialize($n));
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
		$n = $element->attributes->getNamedItem(self::FIELD_UID);
		if (null !== $n) {
			$pt = $type->getUid();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setUid($n->nodeValue);
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
		$n = $element->attributes->getNamedItem(self::FIELD_AUTHORING_TIME);
		if (null !== $n) {
			$pt = $type->getAuthoringTime();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setAuthoringTime($n->nodeValue);
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
		if (null !== ($v = $this->getUid())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_UID);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPatient())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PATIENT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getTitle())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_TITLE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDescription())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DESCRIPTION);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getAuthor())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_AUTHOR);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getAuthoringTime())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_AUTHORING_TIME);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getStudy())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_STUDY);
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
		if (null !== ($v = $this->getPatient())) {
			$out->{self::FIELD_PATIENT} = $v;
		}
		if (null !== ($v = $this->getTitle())) {
			$out->{self::FIELD_TITLE} = $v;
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
		if (null !== ($v = $this->getAuthor())) {
			$out->{self::FIELD_AUTHOR} = $v;
		}
		if (null !== ($v = $this->getAuthoringTime())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_AUTHORING_TIME} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRDateTime::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_AUTHORING_TIME_EXT} = $ext;
			}
		}
		if ([] !== ($vs = $this->getStudy())) {
			$out->{self::FIELD_STUDY} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_STUDY}[] = $v;
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
