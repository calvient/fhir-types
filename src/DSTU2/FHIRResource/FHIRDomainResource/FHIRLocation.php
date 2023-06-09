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
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationPosition;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRContactPoint;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRExtension;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRId;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRLocationMode;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRLocationStatus;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRMeta;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRNarrative;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri;
use Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource;
use Calvient\FhirTypes\DSTU2\PHPFHIRConstants;
use Calvient\FhirTypes\DSTU2\PHPFHIRContainedTypeInterface;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeInterface;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeMap;

/**
 * Details and position information for a physical place where services are
 * provided and resources and participants may be stored, found, contained or
 * accommodated.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRLocation
 * @package \Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIRLocation extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_LOCATION;
	const FIELD_IDENTIFIER = 'identifier';
	const FIELD_STATUS = 'status';
	const FIELD_STATUS_EXT = '_status';
	const FIELD_NAME = 'name';
	const FIELD_NAME_EXT = '_name';
	const FIELD_DESCRIPTION = 'description';
	const FIELD_DESCRIPTION_EXT = '_description';
	const FIELD_MODE = 'mode';
	const FIELD_MODE_EXT = '_mode';
	const FIELD_TYPE = 'type';
	const FIELD_TELECOM = 'telecom';
	const FIELD_ADDRESS = 'address';
	const FIELD_PHYSICAL_TYPE = 'physicalType';
	const FIELD_POSITION = 'position';
	const FIELD_MANAGING_ORGANIZATION = 'managingOrganization';
	const FIELD_PART_OF = 'partOf';

	/** @var string */
	private $_xmlns = '';

	/**
	 * A technical identifier - identifies some entity uniquely and unambiguously.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Unique code or number identifying the location to its users.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRIdentifier[]
	 */
	protected ?array $identifier = [];

	/**
	 * Indicates whether the location is still in use.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * active | suspended | inactive.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRLocationStatus
	 */
	protected ?FHIRLocationStatus $status = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Name of the location as used by humans. Does not need to be unique.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $name = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Description of the Location, which helps in finding or referencing the place.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $description = null;

	/**
	 * Indicates whether a resource instance represents a specific location or a class
	 * of locations.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Indicates whether a resource instance represents a specific location or a class
	 * of locations.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRLocationMode
	 */
	protected ?FHIRLocationMode $mode = null;

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Indicates the type of function performed at the location.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	protected ?FHIRCodeableConcept $type = null;

	/**
	 * Details for all kinds of technology mediated contact points for a person or
	 * organization, including telephone, email, etc.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The contact details of communication devices available at the location. This can
	 * include phone numbers, fax numbers, mobile numbers, email addresses and web
	 * sites.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRContactPoint[]
	 */
	protected ?array $telecom = [];

	/**
	 * There is a variety of postal address formats defined around the world. This
	 * format defines a superset that is the basis for all addresses around the world.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Physical location.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAddress
	 */
	protected ?FHIRAddress $address = null;

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Physical form of the location, e.g. building, room, vehicle, road.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	protected ?FHIRCodeableConcept $physicalType = null;

	/**
	 * Details and position information for a physical place where services are
	 * provided and resources and participants may be stored, found, contained or
	 * accommodated.
	 *
	 * The absolute geographic location of the Location, expressed using the WGS84
	 * datum (This is the same co-ordinate system used in KML).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationPosition
	 */
	protected ?FHIRLocationPosition $position = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The organization responsible for the provisioning and upkeep of the location.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $managingOrganization = null;

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Another Location which this Location is physically part of.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	protected ?FHIRReference $partOf = null;

	/**
	 * Validation map for fields in type Location
	 * @var array
	 */
	private static array $_validationRules = [];

	/**
	 * FHIRLocation Constructor
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
					'FHIRLocation::_construct - $data expected to be null or array, %s seen',
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
				if ($value instanceof FHIRLocationStatus) {
					$this->setStatus($value);
				} elseif (is_array($value)) {
					$this->setStatus(new FHIRLocationStatus(array_merge($ext, $value)));
				} else {
					$this->setStatus(
						new FHIRLocationStatus([FHIRLocationStatus::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setStatus(new FHIRLocationStatus($ext));
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
		if (isset($data[self::FIELD_MODE]) || isset($data[self::FIELD_MODE_EXT])) {
			$value = $data[self::FIELD_MODE] ?? null;
			$ext =
				isset($data[self::FIELD_MODE_EXT]) && is_array($data[self::FIELD_MODE_EXT])
					? $data[self::FIELD_MODE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRLocationMode) {
					$this->setMode($value);
				} elseif (is_array($value)) {
					$this->setMode(new FHIRLocationMode(array_merge($ext, $value)));
				} else {
					$this->setMode(
						new FHIRLocationMode([FHIRLocationMode::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setMode(new FHIRLocationMode($ext));
			}
		}
		if (isset($data[self::FIELD_TYPE])) {
			if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
				$this->setType($data[self::FIELD_TYPE]);
			} else {
				$this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
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
		if (isset($data[self::FIELD_ADDRESS])) {
			if ($data[self::FIELD_ADDRESS] instanceof FHIRAddress) {
				$this->setAddress($data[self::FIELD_ADDRESS]);
			} else {
				$this->setAddress(new FHIRAddress($data[self::FIELD_ADDRESS]));
			}
		}
		if (isset($data[self::FIELD_PHYSICAL_TYPE])) {
			if ($data[self::FIELD_PHYSICAL_TYPE] instanceof FHIRCodeableConcept) {
				$this->setPhysicalType($data[self::FIELD_PHYSICAL_TYPE]);
			} else {
				$this->setPhysicalType(new FHIRCodeableConcept($data[self::FIELD_PHYSICAL_TYPE]));
			}
		}
		if (isset($data[self::FIELD_POSITION])) {
			if ($data[self::FIELD_POSITION] instanceof FHIRLocationPosition) {
				$this->setPosition($data[self::FIELD_POSITION]);
			} else {
				$this->setPosition(new FHIRLocationPosition($data[self::FIELD_POSITION]));
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
		if (isset($data[self::FIELD_PART_OF])) {
			if ($data[self::FIELD_PART_OF] instanceof FHIRReference) {
				$this->setPartOf($data[self::FIELD_PART_OF]);
			} else {
				$this->setPartOf(new FHIRReference($data[self::FIELD_PART_OF]));
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
		return "<Location{$xmlns}></Location>";
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
	 * Unique code or number identifying the location to its users.
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
	 * Unique code or number identifying the location to its users.
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
	 * Unique code or number identifying the location to its users.
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
	 * Indicates whether the location is still in use.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * active | suspended | inactive.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRLocationStatus
	 */
	public function getStatus(): ?FHIRLocationStatus
	{
		return $this->status;
	}

	/**
	 * Indicates whether the location is still in use.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * active | suspended | inactive.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRLocationStatus $status
	 * @return static
	 */
	public function setStatus(?FHIRLocationStatus $status = null): object
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
	 * Name of the location as used by humans. Does not need to be unique.
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
	 * Name of the location as used by humans. Does not need to be unique.
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
	 * Description of the Location, which helps in finding or referencing the place.
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
	 * Description of the Location, which helps in finding or referencing the place.
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
	 * Indicates whether a resource instance represents a specific location or a class
	 * of locations.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Indicates whether a resource instance represents a specific location or a class
	 * of locations.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRLocationMode
	 */
	public function getMode(): ?FHIRLocationMode
	{
		return $this->mode;
	}

	/**
	 * Indicates whether a resource instance represents a specific location or a class
	 * of locations.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Indicates whether a resource instance represents a specific location or a class
	 * of locations.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRLocationMode $mode
	 * @return static
	 */
	public function setMode(?FHIRLocationMode $mode = null): object
	{
		$this->_trackValueSet($this->mode, $mode);
		$this->mode = $mode;
		return $this;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Indicates the type of function performed at the location.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	public function getType(): ?FHIRCodeableConcept
	{
		return $this->type;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Indicates the type of function performed at the location.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $type
	 * @return static
	 */
	public function setType(?FHIRCodeableConcept $type = null): object
	{
		$this->_trackValueSet($this->type, $type);
		$this->type = $type;
		return $this;
	}

	/**
	 * Details for all kinds of technology mediated contact points for a person or
	 * organization, including telephone, email, etc.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The contact details of communication devices available at the location. This can
	 * include phone numbers, fax numbers, mobile numbers, email addresses and web
	 * sites.
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
	 * The contact details of communication devices available at the location. This can
	 * include phone numbers, fax numbers, mobile numbers, email addresses and web
	 * sites.
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
	 * The contact details of communication devices available at the location. This can
	 * include phone numbers, fax numbers, mobile numbers, email addresses and web
	 * sites.
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
	 * There is a variety of postal address formats defined around the world. This
	 * format defines a superset that is the basis for all addresses around the world.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Physical location.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAddress
	 */
	public function getAddress(): ?FHIRAddress
	{
		return $this->address;
	}

	/**
	 * There is a variety of postal address formats defined around the world. This
	 * format defines a superset that is the basis for all addresses around the world.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Physical location.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRAddress $address
	 * @return static
	 */
	public function setAddress(?FHIRAddress $address = null): object
	{
		$this->_trackValueSet($this->address, $address);
		$this->address = $address;
		return $this;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Physical form of the location, e.g. building, room, vehicle, road.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept
	 */
	public function getPhysicalType(): ?FHIRCodeableConcept
	{
		return $this->physicalType;
	}

	/**
	 * A concept that may be defined by a formal reference to a terminology or ontology
	 * or may be provided by text.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Physical form of the location, e.g. building, room, vehicle, road.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCodeableConcept $physicalType
	 * @return static
	 */
	public function setPhysicalType(?FHIRCodeableConcept $physicalType = null): object
	{
		$this->_trackValueSet($this->physicalType, $physicalType);
		$this->physicalType = $physicalType;
		return $this;
	}

	/**
	 * Details and position information for a physical place where services are
	 * provided and resources and participants may be stored, found, contained or
	 * accommodated.
	 *
	 * The absolute geographic location of the Location, expressed using the WGS84
	 * datum (This is the same co-ordinate system used in KML).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationPosition
	 */
	public function getPosition(): ?FHIRLocationPosition
	{
		return $this->position;
	}

	/**
	 * Details and position information for a physical place where services are
	 * provided and resources and participants may be stored, found, contained or
	 * accommodated.
	 *
	 * The absolute geographic location of the Location, expressed using the WGS84
	 * datum (This is the same co-ordinate system used in KML).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationPosition $position
	 * @return static
	 */
	public function setPosition(?FHIRLocationPosition $position = null): object
	{
		$this->_trackValueSet($this->position, $position);
		$this->position = $position;
		return $this;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The organization responsible for the provisioning and upkeep of the location.
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
	 * The organization responsible for the provisioning and upkeep of the location.
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
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Another Location which this Location is physically part of.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference
	 */
	public function getPartOf(): ?FHIRReference
	{
		return $this->partOf;
	}

	/**
	 * A reference from one resource to another.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * Another Location which this Location is physically part of.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRReference $partOf
	 * @return static
	 */
	public function setPartOf(?FHIRReference $partOf = null): object
	{
		$this->_trackValueSet($this->partOf, $partOf);
		$this->partOf = $partOf;
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
		if (null !== ($v = $this->getName())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_NAME] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDescription())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DESCRIPTION] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getMode())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MODE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getType())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_TYPE] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getTelecom())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_TELECOM, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getAddress())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_ADDRESS] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPhysicalType())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PHYSICAL_TYPE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPosition())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_POSITION] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getManagingOrganization())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_MANAGING_ORGANIZATION] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPartOf())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_PART_OF] = $fieldErrs;
			}
		}
		if (isset($validationRules[self::FIELD_IDENTIFIER])) {
			$v = $this->getIdentifier();
			foreach ($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_LOCATION,
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
					PHPFHIRConstants::TYPE_NAME_LOCATION,
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
					PHPFHIRConstants::TYPE_NAME_LOCATION,
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
		if (isset($validationRules[self::FIELD_DESCRIPTION])) {
			$v = $this->getDescription();
			foreach ($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_LOCATION,
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
		if (isset($validationRules[self::FIELD_MODE])) {
			$v = $this->getMode();
			foreach ($validationRules[self::FIELD_MODE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_LOCATION,
					self::FIELD_MODE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_MODE])) {
						$errs[self::FIELD_MODE] = [];
					}
					$errs[self::FIELD_MODE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_TYPE])) {
			$v = $this->getType();
			foreach ($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_LOCATION,
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
		if (isset($validationRules[self::FIELD_TELECOM])) {
			$v = $this->getTelecom();
			foreach ($validationRules[self::FIELD_TELECOM] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_LOCATION,
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
		if (isset($validationRules[self::FIELD_ADDRESS])) {
			$v = $this->getAddress();
			foreach ($validationRules[self::FIELD_ADDRESS] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_LOCATION,
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
		if (isset($validationRules[self::FIELD_PHYSICAL_TYPE])) {
			$v = $this->getPhysicalType();
			foreach ($validationRules[self::FIELD_PHYSICAL_TYPE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_LOCATION,
					self::FIELD_PHYSICAL_TYPE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PHYSICAL_TYPE])) {
						$errs[self::FIELD_PHYSICAL_TYPE] = [];
					}
					$errs[self::FIELD_PHYSICAL_TYPE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_POSITION])) {
			$v = $this->getPosition();
			foreach ($validationRules[self::FIELD_POSITION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_LOCATION,
					self::FIELD_POSITION,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_POSITION])) {
						$errs[self::FIELD_POSITION] = [];
					}
					$errs[self::FIELD_POSITION][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_MANAGING_ORGANIZATION])) {
			$v = $this->getManagingOrganization();
			foreach ($validationRules[self::FIELD_MANAGING_ORGANIZATION] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_LOCATION,
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
		if (isset($validationRules[self::FIELD_PART_OF])) {
			$v = $this->getPartOf();
			foreach ($validationRules[self::FIELD_PART_OF] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_LOCATION,
					self::FIELD_PART_OF,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PART_OF])) {
						$errs[self::FIELD_PART_OF] = [];
					}
					$errs[self::FIELD_PART_OF][$rule] = $err;
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRLocation $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRLocation
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
						'FHIRLocation::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRLocation::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRLocation(null);
		} elseif (!is_object($type) || !($type instanceof FHIRLocation)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRLocation::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRResource\FHIRDomainResource\FHIRLocation or null, %s seen.',
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
				$type->setStatus(FHIRLocationStatus::xmlUnserialize($n));
			} elseif (self::FIELD_NAME === $n->nodeName) {
				$type->setName(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_DESCRIPTION === $n->nodeName) {
				$type->setDescription(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_MODE === $n->nodeName) {
				$type->setMode(FHIRLocationMode::xmlUnserialize($n));
			} elseif (self::FIELD_TYPE === $n->nodeName) {
				$type->setType(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_TELECOM === $n->nodeName) {
				$type->addTelecom(FHIRContactPoint::xmlUnserialize($n));
			} elseif (self::FIELD_ADDRESS === $n->nodeName) {
				$type->setAddress(FHIRAddress::xmlUnserialize($n));
			} elseif (self::FIELD_PHYSICAL_TYPE === $n->nodeName) {
				$type->setPhysicalType(FHIRCodeableConcept::xmlUnserialize($n));
			} elseif (self::FIELD_POSITION === $n->nodeName) {
				$type->setPosition(FHIRLocationPosition::xmlUnserialize($n));
			} elseif (self::FIELD_MANAGING_ORGANIZATION === $n->nodeName) {
				$type->setManagingOrganization(FHIRReference::xmlUnserialize($n));
			} elseif (self::FIELD_PART_OF === $n->nodeName) {
				$type->setPartOf(FHIRReference::xmlUnserialize($n));
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
		$n = $element->attributes->getNamedItem(self::FIELD_NAME);
		if (null !== $n) {
			$pt = $type->getName();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setName($n->nodeValue);
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
		if (null !== ($v = $this->getName())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_NAME);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDescription())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DESCRIPTION);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getMode())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MODE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getType())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_TYPE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
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
		if (null !== ($v = $this->getAddress())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_ADDRESS);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPhysicalType())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PHYSICAL_TYPE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPosition())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_POSITION);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getManagingOrganization())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_MANAGING_ORGANIZATION);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPartOf())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_PART_OF);
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
			unset($ext->{FHIRLocationStatus::FIELD_VALUE});
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
		if (null !== ($v = $this->getMode())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_MODE} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRLocationMode::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_MODE_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getType())) {
			$out->{self::FIELD_TYPE} = $v;
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
		if (null !== ($v = $this->getAddress())) {
			$out->{self::FIELD_ADDRESS} = $v;
		}
		if (null !== ($v = $this->getPhysicalType())) {
			$out->{self::FIELD_PHYSICAL_TYPE} = $v;
		}
		if (null !== ($v = $this->getPosition())) {
			$out->{self::FIELD_POSITION} = $v;
		}
		if (null !== ($v = $this->getManagingOrganization())) {
			$out->{self::FIELD_MANAGING_ORGANIZATION} = $v;
		}
		if (null !== ($v = $this->getPartOf())) {
			$out->{self::FIELD_PART_OF} = $v;
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
