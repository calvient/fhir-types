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
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDigitalMediaType;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRExtension;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRId;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMeta;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRNarrative;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPositiveInt;
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
 * A photo, video, or audio recording acquired or used in healthcare. The actual
 * content may be inline or provided by direct reference.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRMedia
 * @package \Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIRMedia extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDIA;
	const FIELD_TYPE = 'type';
	const FIELD_TYPE_EXT = '_type';
	const FIELD_SUBTYPE = 'subtype';
	const FIELD_IDENTIFIER = 'identifier';
	const FIELD_SUBJECT = 'subject';
	const FIELD_OPERATOR = 'operator';
	const FIELD_VIEW = 'view';
	const FIELD_DEVICE_NAME = 'deviceName';
	const FIELD_DEVICE_NAME_EXT = '_deviceName';
	const FIELD_HEIGHT = 'height';
	const FIELD_HEIGHT_EXT = '_height';
	const FIELD_WIDTH = 'width';
	const FIELD_WIDTH_EXT = '_width';
	const FIELD_FRAMES = 'frames';
	const FIELD_FRAMES_EXT = '_frames';
	const FIELD_DURATION = 'duration';
	const FIELD_DURATION_EXT = '_duration';
	const FIELD_CONTENT = 'content';

	/** @var string */
	private $_xmlns = '';

	/**
	 * Whether the Media is a photo, video, or audio
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Whether the media is a photo (still image), an audio recording, or a video
	 * recording.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDigitalMediaType
	 */
	protected ?FHIRDigitalMediaType $type = null;

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Details of the type of the media - usually, how it was acquired (what type of
	 * device). If images sourced from a DICOM system, are wrapped in a Media resource,
	 * then this is the modality.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	protected ?FHIRCodeableConcept $subtype = null;

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifiers associated with the image - these may include identifiers for the
	 * image itself, identifiers for the context of its collection (e.g. series ids)
	 * and context ids such as accession numbers or other workflow identifiers.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier[]
	 */
	protected ?array $identifier = [];

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Who/What this Media is a record of.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $subject = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The person who administered the collection of the image.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $operator = null;

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The name of the imaging view e.g. Lateral or Antero-posterior (AP).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	protected ?FHIRCodeableConcept $view = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The name of the device / manufacturer of the device that was used to make the
	 * recording.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $deviceName = null;

	/**
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Height of the image in pixels (photo/video).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPositiveInt
	 */
	protected ?FHIRPositiveInt $height = null;

	/**
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Width of the image in pixels (photo/video).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPositiveInt
	 */
	protected ?FHIRPositiveInt $width = null;

	/**
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The number of frames in a photo. This is used with a multi-page fax, or an
	 * imaging acquisition context that takes multiple slices in a single image, or an
	 * animated gif. If there is more than one frame, this SHALL have a value in order
	 * to alert interface software that a multi-frame capable rendering widget is
	 * required.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPositiveInt
	 */
	protected ?FHIRPositiveInt $frames = null;

	/**
	 * An integer with a value that is not negative (e.g. >= 0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The duration of the recording in seconds - for audio and video.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUnsignedInt
	 */
	protected ?FHIRUnsignedInt $duration = null;

	/**
	 * For referring to data content defined in other formats.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The actual content of the media - inline or by direct reference to the media
	 * source file.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAttachment
	 */
	protected ?FHIRAttachment $content = null;

	/**
	 * Validation map for fields in type Media
	 * @var array
	 */
	private static array $_validationRules = [];

	/**
	 * FHIRMedia Constructor
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
					'FHIRMedia::_construct - $data expected to be null or array, %s seen',
					gettype($data),
				),
			);
		}
		parent::__construct($data);
		if (isset($data[self::FIELD_TYPE]) || isset($data[self::FIELD_TYPE_EXT])) {
			$value = $data[self::FIELD_TYPE] ?? null;
			$ext =
				isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT])
					? $data[self::FIELD_TYPE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRDigitalMediaType) {
					$this->setType($value);
				} elseif (is_array($value)) {
					$this->setType(new FHIRDigitalMediaType(array_merge($ext, $value)));
				} else {
					$this->setType(
						new FHIRDigitalMediaType(
							[FHIRDigitalMediaType::FIELD_VALUE => $value] + $ext,
						),
					);
				}
			} elseif ([] !== $ext) {
				$this->setType(new FHIRDigitalMediaType($ext));
			}
		}
		if (isset($data[self::FIELD_SUBTYPE])) {
			if ($data[self::FIELD_SUBTYPE] instanceof FHIRCodeableConcept) {
				$this->setSubtype($data[self::FIELD_SUBTYPE]);
			} else {
				$this->setSubtype(new FHIRCodeableConcept($data[self::FIELD_SUBTYPE]));
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
		if (isset($data[self::FIELD_SUBJECT])) {
			if ($data[self::FIELD_SUBJECT] instanceof FHIRReference) {
				$this->setSubject($data[self::FIELD_SUBJECT]);
			} else {
				$this->setSubject(new FHIRReference($data[self::FIELD_SUBJECT]));
			}
		}
		if (isset($data[self::FIELD_OPERATOR])) {
			if ($data[self::FIELD_OPERATOR] instanceof FHIRReference) {
				$this->setOperator($data[self::FIELD_OPERATOR]);
			} else {
				$this->setOperator(new FHIRReference($data[self::FIELD_OPERATOR]));
			}
		}
		if (isset($data[self::FIELD_VIEW])) {
			if ($data[self::FIELD_VIEW] instanceof FHIRCodeableConcept) {
				$this->setView($data[self::FIELD_VIEW]);
			} else {
				$this->setView(new FHIRCodeableConcept($data[self::FIELD_VIEW]));
			}
		}
		if (isset($data[self::FIELD_DEVICE_NAME]) || isset($data[self::FIELD_DEVICE_NAME_EXT])) {
			$value = $data[self::FIELD_DEVICE_NAME] ?? null;
			$ext =
				isset($data[self::FIELD_DEVICE_NAME_EXT]) &&
				is_array($data[self::FIELD_DEVICE_NAME_EXT])
					? $data[self::FIELD_DEVICE_NAME_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->setDeviceName($value);
				} elseif (is_array($value)) {
					$this->setDeviceName(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->setDeviceName(
						new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setDeviceName(new FHIRString($ext));
			}
		}
		if (isset($data[self::FIELD_HEIGHT]) || isset($data[self::FIELD_HEIGHT_EXT])) {
			$value = $data[self::FIELD_HEIGHT] ?? null;
			$ext =
				isset($data[self::FIELD_HEIGHT_EXT]) && is_array($data[self::FIELD_HEIGHT_EXT])
					? $data[self::FIELD_HEIGHT_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRPositiveInt) {
					$this->setHeight($value);
				} elseif (is_array($value)) {
					$this->setHeight(new FHIRPositiveInt(array_merge($ext, $value)));
				} else {
					$this->setHeight(
						new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setHeight(new FHIRPositiveInt($ext));
			}
		}
		if (isset($data[self::FIELD_WIDTH]) || isset($data[self::FIELD_WIDTH_EXT])) {
			$value = $data[self::FIELD_WIDTH] ?? null;
			$ext =
				isset($data[self::FIELD_WIDTH_EXT]) && is_array($data[self::FIELD_WIDTH_EXT])
					? $data[self::FIELD_WIDTH_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRPositiveInt) {
					$this->setWidth($value);
				} elseif (is_array($value)) {
					$this->setWidth(new FHIRPositiveInt(array_merge($ext, $value)));
				} else {
					$this->setWidth(
						new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setWidth(new FHIRPositiveInt($ext));
			}
		}
		if (isset($data[self::FIELD_FRAMES]) || isset($data[self::FIELD_FRAMES_EXT])) {
			$value = $data[self::FIELD_FRAMES] ?? null;
			$ext =
				isset($data[self::FIELD_FRAMES_EXT]) && is_array($data[self::FIELD_FRAMES_EXT])
					? $data[self::FIELD_FRAMES_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRPositiveInt) {
					$this->setFrames($value);
				} elseif (is_array($value)) {
					$this->setFrames(new FHIRPositiveInt(array_merge($ext, $value)));
				} else {
					$this->setFrames(
						new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setFrames(new FHIRPositiveInt($ext));
			}
		}
		if (isset($data[self::FIELD_DURATION]) || isset($data[self::FIELD_DURATION_EXT])) {
			$value = $data[self::FIELD_DURATION] ?? null;
			$ext =
				isset($data[self::FIELD_DURATION_EXT]) && is_array($data[self::FIELD_DURATION_EXT])
					? $data[self::FIELD_DURATION_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRUnsignedInt) {
					$this->setDuration($value);
				} elseif (is_array($value)) {
					$this->setDuration(new FHIRUnsignedInt(array_merge($ext, $value)));
				} else {
					$this->setDuration(
						new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setDuration(new FHIRUnsignedInt($ext));
			}
		}
		if (isset($data[self::FIELD_CONTENT])) {
			if ($data[self::FIELD_CONTENT] instanceof FHIRAttachment) {
				$this->setContent($data[self::FIELD_CONTENT]);
			} else {
				$this->setContent(new FHIRAttachment($data[self::FIELD_CONTENT]));
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
		return "<Media{$xmlns}></Media>";
	}
	/**
	 * @return string
	 */
	public function _getResourceType(): string
	{
		return static::FHIR_TYPE_NAME;
	}

	/**
	 * Whether the Media is a photo, video, or audio
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Whether the media is a photo (still image), an audio recording, or a video
	 * recording.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDigitalMediaType
	 */
	public function getType(): ?FHIRDigitalMediaType
	{
		return $this->type;
	}

	/**
	 * Whether the Media is a photo, video, or audio
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Whether the media is a photo (still image), an audio recording, or a video
	 * recording.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDigitalMediaType $type
	 * @return static
	 */
	public function setType(?FHIRDigitalMediaType $type = null): object
	{
		$this->_trackValueSet($this->type, $type);
		$this->type = $type;
		return $this;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Details of the type of the media - usually, how it was acquired (what type of
	 * device). If images sourced from a DICOM system, are wrapped in a Media resource,
	 * then this is the modality.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	public function getSubtype(): ?FHIRCodeableConcept
	{
		return $this->subtype;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Details of the type of the media - usually, how it was acquired (what type of
	 * device). If images sourced from a DICOM system, are wrapped in a Media resource,
	 * then this is the modality.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $subtype
	 * @return static
	 */
	public function setSubtype(?FHIRCodeableConcept $subtype = null): object
	{
		$this->_trackValueSet($this->subtype, $subtype);
		$this->subtype = $subtype;
		return $this;
	}

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Identifiers associated with the image - these may include identifiers for the
	 * image itself, identifiers for the context of its collection (e.g. series ids)
	 * and context ids such as accession numbers or other workflow identifiers.
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
	 * Identifiers associated with the image - these may include identifiers for the
	 * image itself, identifiers for the context of its collection (e.g. series ids)
	 * and context ids such as accession numbers or other workflow identifiers.
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
	 * Identifiers associated with the image - these may include identifiers for the
	 * image itself, identifiers for the context of its collection (e.g. series ids)
	 * and context ids such as accession numbers or other workflow identifiers.
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
	 * Who/What this Media is a record of.
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
	 * Who/What this Media is a record of.
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
	 * The person who administered the collection of the image.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getOperator(): ?FHIRReference
	{
		return $this->operator;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The person who administered the collection of the image.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $operator
	 * @return static
	 */
	public function setOperator(?FHIRReference $operator = null): object
	{
		$this->_trackValueSet($this->operator, $operator);
		$this->operator = $operator;
		return $this;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The name of the imaging view e.g. Lateral or Antero-posterior (AP).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	public function getView(): ?FHIRCodeableConcept
	{
		return $this->view;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The name of the imaging view e.g. Lateral or Antero-posterior (AP).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $view
	 * @return static
	 */
	public function setView(?FHIRCodeableConcept $view = null): object
	{
		$this->_trackValueSet($this->view, $view);
		$this->view = $view;
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The name of the device / manufacturer of the device that was used to make the
	 * recording.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	public function getDeviceName(): ?FHIRString
	{
		return $this->deviceName;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The name of the device / manufacturer of the device that was used to make the
	 * recording.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString $deviceName
	 * @return static
	 */
	public function setDeviceName($deviceName = null): object
	{
		if (null !== $deviceName && !($deviceName instanceof FHIRString)) {
			$deviceName = new FHIRString($deviceName);
		}
		$this->_trackValueSet($this->deviceName, $deviceName);
		$this->deviceName = $deviceName;
		return $this;
	}

	/**
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Height of the image in pixels (photo/video).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPositiveInt
	 */
	public function getHeight(): ?FHIRPositiveInt
	{
		return $this->height;
	}

	/**
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Height of the image in pixels (photo/video).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPositiveInt $height
	 * @return static
	 */
	public function setHeight($height = null): object
	{
		if (null !== $height && !($height instanceof FHIRPositiveInt)) {
			$height = new FHIRPositiveInt($height);
		}
		$this->_trackValueSet($this->height, $height);
		$this->height = $height;
		return $this;
	}

	/**
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Width of the image in pixels (photo/video).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPositiveInt
	 */
	public function getWidth(): ?FHIRPositiveInt
	{
		return $this->width;
	}

	/**
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * Width of the image in pixels (photo/video).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPositiveInt $width
	 * @return static
	 */
	public function setWidth($width = null): object
	{
		if (null !== $width && !($width instanceof FHIRPositiveInt)) {
			$width = new FHIRPositiveInt($width);
		}
		$this->_trackValueSet($this->width, $width);
		$this->width = $width;
		return $this;
	}

	/**
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The number of frames in a photo. This is used with a multi-page fax, or an
	 * imaging acquisition context that takes multiple slices in a single image, or an
	 * animated gif. If there is more than one frame, this SHALL have a value in order
	 * to alert interface software that a multi-frame capable rendering widget is
	 * required.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPositiveInt
	 */
	public function getFrames(): ?FHIRPositiveInt
	{
		return $this->frames;
	}

	/**
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The number of frames in a photo. This is used with a multi-page fax, or an
	 * imaging acquisition context that takes multiple slices in a single image, or an
	 * animated gif. If there is more than one frame, this SHALL have a value in order
	 * to alert interface software that a multi-frame capable rendering widget is
	 * required.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPositiveInt $frames
	 * @return static
	 */
	public function setFrames($frames = null): object
	{
		if (null !== $frames && !($frames instanceof FHIRPositiveInt)) {
			$frames = new FHIRPositiveInt($frames);
		}
		$this->_trackValueSet($this->frames, $frames);
		$this->frames = $frames;
		return $this;
	}

	/**
	 * An integer with a value that is not negative (e.g. >= 0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The duration of the recording in seconds - for audio and video.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUnsignedInt
	 */
	public function getDuration(): ?FHIRUnsignedInt
	{
		return $this->duration;
	}

	/**
	 * An integer with a value that is not negative (e.g. >= 0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The duration of the recording in seconds - for audio and video.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRUnsignedIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUnsignedInt $duration
	 * @return static
	 */
	public function setDuration($duration = null): object
	{
		if (null !== $duration && !($duration instanceof FHIRUnsignedInt)) {
			$duration = new FHIRUnsignedInt($duration);
		}
		$this->_trackValueSet($this->duration, $duration);
		$this->duration = $duration;
		return $this;
	}

	/**
	 * For referring to data content defined in other formats.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The actual content of the media - inline or by direct reference to the media
	 * source file.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAttachment
	 */
	public function getContent(): ?FHIRAttachment
	{
		return $this->content;
	}

	/**
	 * For referring to data content defined in other formats.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The actual content of the media - inline or by direct reference to the media
	 * source file.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAttachment $content
	 * @return static
	 */
	public function setContent(?FHIRAttachment $content = null): object
	{
		$this->_trackValueSet($this->content, $content);
		$this->content = $content;
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
		if (null !== ($v = $this->getType())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_TYPE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getSubtype())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_SUBTYPE] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getIdentifier())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getSubject())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_SUBJECT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getOperator())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_OPERATOR] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getView())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_VIEW] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDeviceName())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DEVICE_NAME] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getHeight())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_HEIGHT] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getWidth())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_WIDTH] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFrames())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FRAMES] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDuration())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DURATION] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getContent())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_CONTENT] = $fieldErrs;
			}
		}
		if (isset($validationRules[self::FIELD_TYPE])) {
			$v = $this->getType();
			foreach ($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_MEDIA,
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
		if (isset($validationRules[self::FIELD_SUBTYPE])) {
			$v = $this->getSubtype();
			foreach ($validationRules[self::FIELD_SUBTYPE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_MEDIA,
					self::FIELD_SUBTYPE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_SUBTYPE])) {
						$errs[self::FIELD_SUBTYPE] = [];
					}
					$errs[self::FIELD_SUBTYPE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_IDENTIFIER])) {
			$v = $this->getIdentifier();
			foreach ($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_MEDIA,
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
		if (isset($validationRules[self::FIELD_SUBJECT])) {
			$v = $this->getSubject();
			foreach ($validationRules[self::FIELD_SUBJECT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_MEDIA,
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
		if (isset($validationRules[self::FIELD_OPERATOR])) {
			$v = $this->getOperator();
			foreach ($validationRules[self::FIELD_OPERATOR] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_MEDIA,
					self::FIELD_OPERATOR,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_OPERATOR])) {
						$errs[self::FIELD_OPERATOR] = [];
					}
					$errs[self::FIELD_OPERATOR][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_VIEW])) {
			$v = $this->getView();
			foreach ($validationRules[self::FIELD_VIEW] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_MEDIA,
					self::FIELD_VIEW,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_VIEW])) {
						$errs[self::FIELD_VIEW] = [];
					}
					$errs[self::FIELD_VIEW][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DEVICE_NAME])) {
			$v = $this->getDeviceName();
			foreach ($validationRules[self::FIELD_DEVICE_NAME] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_MEDIA,
					self::FIELD_DEVICE_NAME,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DEVICE_NAME])) {
						$errs[self::FIELD_DEVICE_NAME] = [];
					}
					$errs[self::FIELD_DEVICE_NAME][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_HEIGHT])) {
			$v = $this->getHeight();
			foreach ($validationRules[self::FIELD_HEIGHT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_MEDIA,
					self::FIELD_HEIGHT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_HEIGHT])) {
						$errs[self::FIELD_HEIGHT] = [];
					}
					$errs[self::FIELD_HEIGHT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_WIDTH])) {
			$v = $this->getWidth();
			foreach ($validationRules[self::FIELD_WIDTH] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_MEDIA,
					self::FIELD_WIDTH,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_WIDTH])) {
						$errs[self::FIELD_WIDTH] = [];
					}
					$errs[self::FIELD_WIDTH][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FRAMES])) {
			$v = $this->getFrames();
			foreach ($validationRules[self::FIELD_FRAMES] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_MEDIA,
					self::FIELD_FRAMES,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FRAMES])) {
						$errs[self::FIELD_FRAMES] = [];
					}
					$errs[self::FIELD_FRAMES][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DURATION])) {
			$v = $this->getDuration();
			foreach ($validationRules[self::FIELD_DURATION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_MEDIA,
					self::FIELD_DURATION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DURATION])) {
						$errs[self::FIELD_DURATION] = [];
					}
					$errs[self::FIELD_DURATION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_CONTENT])) {
			$v = $this->getContent();
			foreach ($validationRules[self::FIELD_CONTENT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_MEDIA,
					self::FIELD_CONTENT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_CONTENT])) {
						$errs[self::FIELD_CONTENT] = [];
					}
					$errs[self::FIELD_CONTENT][$rule] = $err;
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedia $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedia
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
						'FHIRMedia::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRMedia::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRMedia(null);
		} elseif (!is_object($type) || !($type instanceof FHIRMedia)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRMedia::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedia or null, %s seen.',
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
			if (self::FIELD_TYPE === $n->nodeName) {
				$type->setType(FHIRDigitalMediaType::xmlUnserialize($n));
			} elseif (self::FIELD_SUBTYPE === $n->nodeName) {
				$type->setSubtype(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_IDENTIFIER === $n->nodeName) {
				$type->addIdentifier(FHIRIdentifier::xmlUnserialize($n));
			} elseif (self::FIELD_SUBJECT === $n->nodeName) {
				$type->setSubject(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_OPERATOR === $n->nodeName) {
				$type->setOperator(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_VIEW === $n->nodeName) {
				$type->setView(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_DEVICE_NAME === $n->nodeName) {
				$type->setDeviceName(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_HEIGHT === $n->nodeName) {
				$type->setHeight(FHIRPositiveInt::xmlUnserialize($n));
			} elseif (self::FIELD_WIDTH === $n->nodeName) {
				$type->setWidth(FHIRPositiveInt::xmlUnserialize($n));
			} elseif (self::FIELD_FRAMES === $n->nodeName) {
				$type->setFrames(FHIRPositiveInt::xmlUnserialize($n));
			} elseif (self::FIELD_DURATION === $n->nodeName) {
				$type->setDuration(FHIRUnsignedInt::xmlUnserialize($n));
			} elseif (self::FIELD_CONTENT === $n->nodeName) {
				$type->setContent(FHIRAttachment::xmlUnserialize($n));
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
		$n = $element->attributes->getNamedItem(self::FIELD_DEVICE_NAME);
		if (null !== $n) {
			$pt = $type->getDeviceName();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setDeviceName($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_HEIGHT);
		if (null !== $n) {
			$pt = $type->getHeight();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setHeight($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_WIDTH);
		if (null !== $n) {
			$pt = $type->getWidth();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setWidth($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_FRAMES);
		if (null !== $n) {
			$pt = $type->getFrames();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setFrames($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_DURATION);
		if (null !== $n) {
			$pt = $type->getDuration();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setDuration($n->nodeValue);
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
		if (null !== ($v = $this->getType())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_TYPE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getSubtype())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_SUBTYPE);
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
		if (null !== ($v = $this->getSubject())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_SUBJECT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getOperator())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_OPERATOR);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getView())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_VIEW);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDeviceName())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DEVICE_NAME);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getHeight())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_HEIGHT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getWidth())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_WIDTH);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFrames())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FRAMES);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDuration())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DURATION);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getContent())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_CONTENT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		return $element;
	}

	/**
	 * @return \stdClass
	 */
	public function jsonSerialize()
	{
		$out = parent::jsonSerialize();
		if (null !== ($v = $this->getType())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_TYPE} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRDigitalMediaType::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_TYPE_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getSubtype())) {
			$out->{self::FIELD_SUBTYPE} = $v;
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
		if (null !== ($v = $this->getSubject())) {
			$out->{self::FIELD_SUBJECT} = $v;
		}
		if (null !== ($v = $this->getOperator())) {
			$out->{self::FIELD_OPERATOR} = $v;
		}
		if (null !== ($v = $this->getView())) {
			$out->{self::FIELD_VIEW} = $v;
		}
		if (null !== ($v = $this->getDeviceName())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_DEVICE_NAME} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRString::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_DEVICE_NAME_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getHeight())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_HEIGHT} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRPositiveInt::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_HEIGHT_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getWidth())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_WIDTH} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRPositiveInt::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_WIDTH_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getFrames())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_FRAMES} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRPositiveInt::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_FRAMES_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getDuration())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_DURATION} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRUnsignedInt::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_DURATION_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getContent())) {
			$out->{self::FIELD_CONTENT} = $v;
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
