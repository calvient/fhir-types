<?php declare(strict_types=1);

namespace Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection;

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

use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRExtension;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIROid;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri;
use Calvient\FhirTypes\DSTU2\FHIRIdPrimitive;
use Calvient\FhirTypes\DSTU2\PHPFHIRConstants;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeInterface;

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
 * Class FHIRImagingObjectSelectionStudy
 * @package \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection
 */
class FHIRImagingObjectSelectionStudy extends FHIRBackboneElement
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_IMAGING_OBJECT_SELECTION_DOT_STUDY;
	const FIELD_UID = 'uid';
	const FIELD_UID_EXT = '_uid';
	const FIELD_URL = 'url';
	const FIELD_URL_EXT = '_url';
	const FIELD_IMAGING_STUDY = 'imagingStudy';
	const FIELD_SERIES = 'series';

	/** @var string */
	private $_xmlns = '';

	/**
	 * An oid represented as a URI
	 * RFC 3001. See also ISO/IEC 8824:1990 €
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Study instance UID of the SOP instances in the selection.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIROidPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIROid
	 */
	protected ?FHIROid $uid = null;

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * WADO-RS URL to retrieve the study. Note that this URL retrieves all SOP
	 * instances of the study, not only those in the selection.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri
	 */
	protected ?FHIRUri $url = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Reference to the Imaging Study in FHIR form.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $imagingStudy = null;

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
	 * Series identity and locating information of the DICOM SOP instances in the
	 * selection.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionSeries[]
	 */
	protected ?array $series = [];

	/**
	 * Validation map for fields in type ImagingObjectSelection.Study
	 * @var array
	 */
	private static array $_validationRules = [
		self::FIELD_SERIES => [
			PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
		],
	];

	/**
	 * FHIRImagingObjectSelectionStudy Constructor
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
					'FHIRImagingObjectSelectionStudy::_construct - $data expected to be null or array, %s seen',
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
		if (isset($data[self::FIELD_IMAGING_STUDY])) {
			if ($data[self::FIELD_IMAGING_STUDY] instanceof FHIRReference) {
				$this->setImagingStudy($data[self::FIELD_IMAGING_STUDY]);
			} else {
				$this->setImagingStudy(new FHIRReference($data[self::FIELD_IMAGING_STUDY]));
			}
		}
		if (isset($data[self::FIELD_SERIES])) {
			if (is_array($data[self::FIELD_SERIES])) {
				foreach ($data[self::FIELD_SERIES] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRImagingObjectSelectionSeries) {
						$this->addSeries($v);
					} else {
						$this->addSeries(new FHIRImagingObjectSelectionSeries($v));
					}
				}
			} elseif ($data[self::FIELD_SERIES] instanceof FHIRImagingObjectSelectionSeries) {
				$this->addSeries($data[self::FIELD_SERIES]);
			} else {
				$this->addSeries(new FHIRImagingObjectSelectionSeries($data[self::FIELD_SERIES]));
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
		return "<ImagingObjectSelectionStudy{$xmlns}></ImagingObjectSelectionStudy>";
	}

	/**
	 * An oid represented as a URI
	 * RFC 3001. See also ISO/IEC 8824:1990 €
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Study instance UID of the SOP instances in the selection.
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
	 * Study instance UID of the SOP instances in the selection.
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
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * WADO-RS URL to retrieve the study. Note that this URL retrieves all SOP
	 * instances of the study, not only those in the selection.
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
	 * WADO-RS URL to retrieve the study. Note that this URL retrieves all SOP
	 * instances of the study, not only those in the selection.
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
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Reference to the Imaging Study in FHIR form.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getImagingStudy(): ?FHIRReference
	{
		return $this->imagingStudy;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Reference to the Imaging Study in FHIR form.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $imagingStudy
	 * @return static
	 */
	public function setImagingStudy(?FHIRReference $imagingStudy = null): object
	{
		$this->_trackValueSet($this->imagingStudy, $imagingStudy);
		$this->imagingStudy = $imagingStudy;
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
	 * Series identity and locating information of the DICOM SOP instances in the
	 * selection.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionSeries[]
	 */
	public function getSeries(): ?array
	{
		return $this->series;
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
	 * Series identity and locating information of the DICOM SOP instances in the
	 * selection.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionSeries $series
	 * @return static
	 */
	public function addSeries(?FHIRImagingObjectSelectionSeries $series = null): object
	{
		$this->_trackValueAdded();
		$this->series[] = $series;
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
	 * Series identity and locating information of the DICOM SOP instances in the
	 * selection.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionSeries[] $series
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
			if ($v instanceof FHIRImagingObjectSelectionSeries) {
				$this->addSeries($v);
			} else {
				$this->addSeries(new FHIRImagingObjectSelectionSeries($v));
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
		if (null !== ($v = $this->getUrl())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_URL] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getImagingStudy())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_IMAGING_STUDY] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getSeries())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_SERIES, $i)] = $fieldErrs;
				}
			}
		}
		if (isset($validationRules[self::FIELD_UID])) {
			$v = $this->getUid();
			foreach ($validationRules[self::FIELD_UID] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMAGING_OBJECT_SELECTION_DOT_STUDY,
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
		if (isset($validationRules[self::FIELD_URL])) {
			$v = $this->getUrl();
			foreach ($validationRules[self::FIELD_URL] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMAGING_OBJECT_SELECTION_DOT_STUDY,
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
		if (isset($validationRules[self::FIELD_IMAGING_STUDY])) {
			$v = $this->getImagingStudy();
			foreach ($validationRules[self::FIELD_IMAGING_STUDY] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMAGING_OBJECT_SELECTION_DOT_STUDY,
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
		if (isset($validationRules[self::FIELD_SERIES])) {
			$v = $this->getSeries();
			foreach ($validationRules[self::FIELD_SERIES] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMAGING_OBJECT_SELECTION_DOT_STUDY,
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionStudy $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionStudy
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
						'FHIRImagingObjectSelectionStudy::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRImagingObjectSelectionStudy::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRImagingObjectSelectionStudy(null);
		} elseif (!is_object($type) || !($type instanceof FHIRImagingObjectSelectionStudy)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRImagingObjectSelectionStudy::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionStudy or null, %s seen.',
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
			} elseif (self::FIELD_URL === $n->nodeName) {
				$type->setUrl(FHIRUri::xmlUnserialize($n));
			} elseif (self::FIELD_IMAGING_STUDY === $n->nodeName) {
				$type->setImagingStudy(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_SERIES === $n->nodeName) {
				$type->addSeries(FHIRImagingObjectSelectionSeries::xmlUnserialize($n));
			} elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
				$type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_EXTENSION === $n->nodeName) {
				$type->addExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_ID === $n->nodeName) {
				$type->setId(FHIRIdPrimitive::xmlUnserialize($n));
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
		if (null !== ($v = $this->getUid())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_UID);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getUrl())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_URL);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getImagingStudy())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_IMAGING_STUDY);
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
		if (null !== ($v = $this->getImagingStudy())) {
			$out->{self::FIELD_IMAGING_STUDY} = $v;
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
