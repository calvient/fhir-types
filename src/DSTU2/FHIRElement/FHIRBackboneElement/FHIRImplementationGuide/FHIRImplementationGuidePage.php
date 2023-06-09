<?php declare(strict_types=1);

namespace Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide;

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
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRExtension;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRGuidePageKind;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri;
use Calvient\FhirTypes\DSTU2\FHIRIdPrimitive;
use Calvient\FhirTypes\DSTU2\PHPFHIRConstants;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeInterface;

/**
 * A set of rules or how FHIR is used to solve a particular problem. This resource
 * is used to gather all the parts of an implementation guide into a logical whole,
 * and to publish a computable definition of all the parts.
 *
 * Class FHIRImplementationGuidePage
 * @package \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide
 */
class FHIRImplementationGuidePage extends FHIRBackboneElement
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_PAGE;
	const FIELD_SOURCE = 'source';
	const FIELD_SOURCE_EXT = '_source';
	const FIELD_NAME = 'name';
	const FIELD_NAME_EXT = '_name';
	const FIELD_KIND = 'kind';
	const FIELD_KIND_EXT = '_kind';
	const FIELD_TYPE = 'type';
	const FIELD_TYPE_EXT = '_type';
	const FIELD_PACKAGE = 'package';
	const FIELD_PACKAGE_EXT = '_package';
	const FIELD_FORMAT = 'format';
	const FIELD_FORMAT_EXT = '_format';
	const FIELD_PAGE = 'page';

	/** @var string */
	private $_xmlns = '';

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The source address for the page.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri
	 */
	protected ?FHIRUri $source = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A short name used to represent this page in navigational structures such as
	 * table of contents, bread crumbs, etc.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $name = null;

	/**
	 * The kind of an included page.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The kind of page that this is. Some pages are autogenerated (list, example), and
	 * other kinds are of interest so that tools can navigate the user to the page of
	 * interest.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRGuidePageKind
	 */
	protected ?FHIRGuidePageKind $kind = null;

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * For constructed pages, what kind of resources to include in the list.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive[]|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode[]
	 */
	protected ?array $type = [];

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * For constructed pages, a list of packages to include in the page (or else empty
	 * for everything).
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive[]|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString[]
	 */
	protected ?array $package = [];

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The format of the page.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode
	 */
	protected ?FHIRCode $format = null;

	/**
	 * A set of rules or how FHIR is used to solve a particular problem. This resource
	 * is used to gather all the parts of an implementation guide into a logical whole,
	 * and to publish a computable definition of all the parts.
	 *
	 * Nested Pages/Sections under this page.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage[]
	 */
	protected ?array $page = [];

	/**
	 * Validation map for fields in type ImplementationGuide.Page
	 * @var array
	 */
	private static array $_validationRules = [];

	/**
	 * FHIRImplementationGuidePage Constructor
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
					'FHIRImplementationGuidePage::_construct - $data expected to be null or array, %s seen',
					gettype($data),
				),
			);
		}
		parent::__construct($data);
		if (isset($data[self::FIELD_SOURCE]) || isset($data[self::FIELD_SOURCE_EXT])) {
			$value = $data[self::FIELD_SOURCE] ?? null;
			$ext =
				isset($data[self::FIELD_SOURCE_EXT]) && is_array($data[self::FIELD_SOURCE_EXT])
					? $data[self::FIELD_SOURCE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRUri) {
					$this->setSource($value);
				} elseif (is_array($value)) {
					$this->setSource(new FHIRUri(array_merge($ext, $value)));
				} else {
					$this->setSource(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setSource(new FHIRUri($ext));
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
		if (isset($data[self::FIELD_KIND]) || isset($data[self::FIELD_KIND_EXT])) {
			$value = $data[self::FIELD_KIND] ?? null;
			$ext =
				isset($data[self::FIELD_KIND_EXT]) && is_array($data[self::FIELD_KIND_EXT])
					? $data[self::FIELD_KIND_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRGuidePageKind) {
					$this->setKind($value);
				} elseif (is_array($value)) {
					$this->setKind(new FHIRGuidePageKind(array_merge($ext, $value)));
				} else {
					$this->setKind(
						new FHIRGuidePageKind([FHIRGuidePageKind::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setKind(new FHIRGuidePageKind($ext));
			}
		}
		if (isset($data[self::FIELD_TYPE]) || isset($data[self::FIELD_TYPE_EXT])) {
			$value = $data[self::FIELD_TYPE] ?? null;
			$ext =
				isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT])
					? $data[self::FIELD_TYPE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRCode) {
					$this->addType($value);
				} elseif (is_array($value)) {
					foreach ($value as $i => $v) {
						if ($v instanceof FHIRCode) {
							$this->addType($v);
						} else {
							$iext = isset($ext[$i]) && is_array($ext[$i]) ? $ext[$i] : [];
							if (is_array($v)) {
								$this->addType(new FHIRCode(array_merge($v, $iext)));
							} else {
								$this->addType(new FHIRCode([FHIRCode::FIELD_VALUE => $v] + $iext));
							}
						}
					}
				} elseif (is_array($value)) {
					$this->addType(new FHIRCode(array_merge($ext, $value)));
				} else {
					$this->addType(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				foreach ($ext as $iext) {
					$this->addType(new FHIRCode($iext));
				}
			}
		}
		if (isset($data[self::FIELD_PACKAGE]) || isset($data[self::FIELD_PACKAGE_EXT])) {
			$value = $data[self::FIELD_PACKAGE] ?? null;
			$ext =
				isset($data[self::FIELD_PACKAGE_EXT]) && is_array($data[self::FIELD_PACKAGE_EXT])
					? $data[self::FIELD_PACKAGE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->addPackage($value);
				} elseif (is_array($value)) {
					foreach ($value as $i => $v) {
						if ($v instanceof FHIRString) {
							$this->addPackage($v);
						} else {
							$iext = isset($ext[$i]) && is_array($ext[$i]) ? $ext[$i] : [];
							if (is_array($v)) {
								$this->addPackage(new FHIRString(array_merge($v, $iext)));
							} else {
								$this->addPackage(
									new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext),
								);
							}
						}
					}
				} elseif (is_array($value)) {
					$this->addPackage(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->addPackage(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				foreach ($ext as $iext) {
					$this->addPackage(new FHIRString($iext));
				}
			}
		}
		if (isset($data[self::FIELD_FORMAT]) || isset($data[self::FIELD_FORMAT_EXT])) {
			$value = $data[self::FIELD_FORMAT] ?? null;
			$ext =
				isset($data[self::FIELD_FORMAT_EXT]) && is_array($data[self::FIELD_FORMAT_EXT])
					? $data[self::FIELD_FORMAT_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRCode) {
					$this->setFormat($value);
				} elseif (is_array($value)) {
					$this->setFormat(new FHIRCode(array_merge($ext, $value)));
				} else {
					$this->setFormat(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setFormat(new FHIRCode($ext));
			}
		}
		if (isset($data[self::FIELD_PAGE])) {
			if (is_array($data[self::FIELD_PAGE])) {
				foreach ($data[self::FIELD_PAGE] as $v) {
					if (null === $v) {
						continue;
					}
					if ($v instanceof FHIRImplementationGuidePage) {
						$this->addPage($v);
					} else {
						$this->addPage(new FHIRImplementationGuidePage($v));
					}
				}
			} elseif ($data[self::FIELD_PAGE] instanceof FHIRImplementationGuidePage) {
				$this->addPage($data[self::FIELD_PAGE]);
			} else {
				$this->addPage(new FHIRImplementationGuidePage($data[self::FIELD_PAGE]));
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
		return "<ImplementationGuidePage{$xmlns}></ImplementationGuidePage>";
	}

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The source address for the page.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri
	 */
	public function getSource(): ?FHIRUri
	{
		return $this->source;
	}

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The source address for the page.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri $source
	 * @return static
	 */
	public function setSource($source = null): object
	{
		if (null !== $source && !($source instanceof FHIRUri)) {
			$source = new FHIRUri($source);
		}
		$this->_trackValueSet($this->source, $source);
		$this->source = $source;
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A short name used to represent this page in navigational structures such as
	 * table of contents, bread crumbs, etc.
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
	 * A short name used to represent this page in navigational structures such as
	 * table of contents, bread crumbs, etc.
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
	 * The kind of an included page.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The kind of page that this is. Some pages are autogenerated (list, example), and
	 * other kinds are of interest so that tools can navigate the user to the page of
	 * interest.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRGuidePageKind
	 */
	public function getKind(): ?FHIRGuidePageKind
	{
		return $this->kind;
	}

	/**
	 * The kind of an included page.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * The kind of page that this is. Some pages are autogenerated (list, example), and
	 * other kinds are of interest so that tools can navigate the user to the page of
	 * interest.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRGuidePageKind $kind
	 * @return static
	 */
	public function setKind(?FHIRGuidePageKind $kind = null): object
	{
		$this->_trackValueSet($this->kind, $kind);
		$this->kind = $kind;
		return $this;
	}

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * For constructed pages, what kind of resources to include in the list.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive[]|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode[]
	 */
	public function getType(): ?array
	{
		return $this->type;
	}

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * For constructed pages, what kind of resources to include in the list.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive[]|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode[] $type
	 * @return static
	 */
	public function addType($type = null): object
	{
		if (null !== $type && !($type instanceof FHIRCode)) {
			$type = new FHIRCode($type);
		}
		$this->_trackValueAdded();
		$this->type[] = $type;
		return $this;
	}

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * For constructed pages, what kind of resources to include in the list.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode[] $type
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
			if ($v instanceof FHIRCode) {
				$this->addType($v);
			} else {
				$this->addType(new FHIRCode($v));
			}
		}
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * For constructed pages, a list of packages to include in the page (or else empty
	 * for everything).
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive[]|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString[]
	 */
	public function getPackage(): ?array
	{
		return $this->package;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * For constructed pages, a list of packages to include in the page (or else empty
	 * for everything).
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive[]|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString[] $package
	 * @return static
	 */
	public function addPackage($package = null): object
	{
		if (null !== $package && !($package instanceof FHIRString)) {
			$package = new FHIRString($package);
		}
		$this->_trackValueAdded();
		$this->package[] = $package;
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * For constructed pages, a list of packages to include in the page (or else empty
	 * for everything).
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString[] $package
	 * @return static
	 */
	public function setPackage(array $package = []): object
	{
		if ([] !== $this->package) {
			$this->_trackValuesRemoved(count($this->package));
			$this->package = [];
		}
		if ([] === $package) {
			return $this;
		}
		foreach ($package as $v) {
			if ($v instanceof FHIRString) {
				$this->addPackage($v);
			} else {
				$this->addPackage(new FHIRString($v));
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
	 * The format of the page.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode
	 */
	public function getFormat(): ?FHIRCode
	{
		return $this->format;
	}

	/**
	 * A string which has at least one character and no leading or trailing whitespace
	 * and where there is no whitespace other than single spaces in the contents
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * The format of the page.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRCodePrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCode $format
	 * @return static
	 */
	public function setFormat($format = null): object
	{
		if (null !== $format && !($format instanceof FHIRCode)) {
			$format = new FHIRCode($format);
		}
		$this->_trackValueSet($this->format, $format);
		$this->format = $format;
		return $this;
	}

	/**
	 * A set of rules or how FHIR is used to solve a particular problem. This resource
	 * is used to gather all the parts of an implementation guide into a logical whole,
	 * and to publish a computable definition of all the parts.
	 *
	 * Nested Pages/Sections under this page.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage[]
	 */
	public function getPage(): ?array
	{
		return $this->page;
	}

	/**
	 * A set of rules or how FHIR is used to solve a particular problem. This resource
	 * is used to gather all the parts of an implementation guide into a logical whole,
	 * and to publish a computable definition of all the parts.
	 *
	 * Nested Pages/Sections under this page.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage $page
	 * @return static
	 */
	public function addPage(?FHIRImplementationGuidePage $page = null): object
	{
		$this->_trackValueAdded();
		$this->page[] = $page;
		return $this;
	}

	/**
	 * A set of rules or how FHIR is used to solve a particular problem. This resource
	 * is used to gather all the parts of an implementation guide into a logical whole,
	 * and to publish a computable definition of all the parts.
	 *
	 * Nested Pages/Sections under this page.
	 *
	 * @param \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage[] $page
	 * @return static
	 */
	public function setPage(array $page = []): object
	{
		if ([] !== $this->page) {
			$this->_trackValuesRemoved(count($this->page));
			$this->page = [];
		}
		if ([] === $page) {
			return $this;
		}
		foreach ($page as $v) {
			if ($v instanceof FHIRImplementationGuidePage) {
				$this->addPage($v);
			} else {
				$this->addPage(new FHIRImplementationGuidePage($v));
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
		if (null !== ($v = $this->getSource())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_SOURCE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getName())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_NAME] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getKind())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_KIND] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getType())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_TYPE, $i)] = $fieldErrs;
				}
			}
		}
		if ([] !== ($vs = $this->getPackage())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_PACKAGE, $i)] = $fieldErrs;
				}
			}
		}
		if (null !== ($v = $this->getFormat())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FORMAT] = $fieldErrs;
			}
		}
		if ([] !== ($vs = $this->getPage())) {
			foreach ($vs as $i => $v) {
				if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
					$errs[sprintf('%s.%d', self::FIELD_PAGE, $i)] = $fieldErrs;
				}
			}
		}
		if (isset($validationRules[self::FIELD_SOURCE])) {
			$v = $this->getSource();
			foreach ($validationRules[self::FIELD_SOURCE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_PAGE,
					self::FIELD_SOURCE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_SOURCE])) {
						$errs[self::FIELD_SOURCE] = [];
					}
					$errs[self::FIELD_SOURCE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_NAME])) {
			$v = $this->getName();
			foreach ($validationRules[self::FIELD_NAME] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_PAGE,
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
		if (isset($validationRules[self::FIELD_KIND])) {
			$v = $this->getKind();
			foreach ($validationRules[self::FIELD_KIND] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_PAGE,
					self::FIELD_KIND,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_KIND])) {
						$errs[self::FIELD_KIND] = [];
					}
					$errs[self::FIELD_KIND][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_TYPE])) {
			$v = $this->getType();
			foreach ($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_PAGE,
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
		if (isset($validationRules[self::FIELD_PACKAGE])) {
			$v = $this->getPackage();
			foreach ($validationRules[self::FIELD_PACKAGE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_PAGE,
					self::FIELD_PACKAGE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PACKAGE])) {
						$errs[self::FIELD_PACKAGE] = [];
					}
					$errs[self::FIELD_PACKAGE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FORMAT])) {
			$v = $this->getFormat();
			foreach ($validationRules[self::FIELD_FORMAT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_PAGE,
					self::FIELD_FORMAT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FORMAT])) {
						$errs[self::FIELD_FORMAT] = [];
					}
					$errs[self::FIELD_FORMAT][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_PAGE])) {
			$v = $this->getPage();
			foreach ($validationRules[self::FIELD_PAGE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_PAGE,
					self::FIELD_PAGE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_PAGE])) {
						$errs[self::FIELD_PAGE] = [];
					}
					$errs[self::FIELD_PAGE][$rule] = $err;
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage
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
						'FHIRImplementationGuidePage::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRImplementationGuidePage::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRImplementationGuidePage(null);
		} elseif (!is_object($type) || !($type instanceof FHIRImplementationGuidePage)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRImplementationGuidePage::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage or null, %s seen.',
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
			if (self::FIELD_SOURCE === $n->nodeName) {
				$type->setSource(FHIRUri::xmlUnserialize($n));
			} elseif (self::FIELD_NAME === $n->nodeName) {
				$type->setName(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_KIND === $n->nodeName) {
				$type->setKind(FHIRGuidePageKind::xmlUnserialize($n));
			} elseif (self::FIELD_TYPE === $n->nodeName) {
				$type->addType(FHIRCode::xmlUnserialize($n));
			} elseif (self::FIELD_PACKAGE === $n->nodeName) {
				$type->addPackage(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_FORMAT === $n->nodeName) {
				$type->setFormat(FHIRCode::xmlUnserialize($n));
			} elseif (self::FIELD_PAGE === $n->nodeName) {
				$type->addPage(FHIRImplementationGuidePage::xmlUnserialize($n));
			} elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
				$type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_EXTENSION === $n->nodeName) {
				$type->addExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_ID === $n->nodeName) {
				$type->setId(FHIRIdPrimitive::xmlUnserialize($n));
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_SOURCE);
		if (null !== $n) {
			$pt = $type->getSource();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setSource($n->nodeValue);
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
		$n = $element->attributes->getNamedItem(self::FIELD_TYPE);
		if (null !== $n) {
			$pt = $type->getType();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->addType($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_PACKAGE);
		if (null !== $n) {
			$pt = $type->getPackage();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->addPackage($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_FORMAT);
		if (null !== $n) {
			$pt = $type->getFormat();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setFormat($n->nodeValue);
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
		if (null !== ($v = $this->getSource())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_SOURCE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getName())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_NAME);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getKind())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_KIND);
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
		if ([] !== ($vs = $this->getPackage())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_PACKAGE);
				$element->appendChild($telement);
				$v->xmlSerialize($telement);
			}
		}
		if (null !== ($v = $this->getFormat())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FORMAT);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if ([] !== ($vs = $this->getPage())) {
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$telement = $element->ownerDocument->createElement(self::FIELD_PAGE);
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
		if (null !== ($v = $this->getSource())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_SOURCE} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRUri::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_SOURCE_EXT} = $ext;
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
		if (null !== ($v = $this->getKind())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_KIND} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRGuidePageKind::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_KIND_EXT} = $ext;
			}
		}
		if ([] !== ($vs = $this->getType())) {
			$vals = [];
			$exts = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$val = $v->getValue();
				$ext = $v->jsonSerialize();
				unset($ext->{FHIRCode::FIELD_VALUE});
				if (null !== $val) {
					$vals[] = $val;
				}
				if ([] !== $ext) {
					$exts[] = $ext;
				}
			}
			if ([] !== $vals) {
				$out->{self::FIELD_TYPE} = $vals;
			}
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_TYPE_EXT} = $exts;
			}
		}
		if ([] !== ($vs = $this->getPackage())) {
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
				$out->{self::FIELD_PACKAGE} = $vals;
			}
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_PACKAGE_EXT} = $exts;
			}
		}
		if (null !== ($v = $this->getFormat())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_FORMAT} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRCode::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_FORMAT_EXT} = $ext;
			}
		}
		if ([] !== ($vs = $this->getPage())) {
			$out->{self::FIELD_PAGE} = [];
			foreach ($vs as $v) {
				if (null === $v) {
					continue;
				}
				$out->{self::FIELD_PAGE}[] = $v;
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
