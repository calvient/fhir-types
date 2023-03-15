<?php declare(strict_types=1);

namespace Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim;

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
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDecimal;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRExtension;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPositiveInt;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity;
use Calvient\FhirTypes\DSTU2\FHIRIdPrimitive;
use Calvient\FhirTypes\DSTU2\PHPFHIRConstants;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeInterface;

/**
 * A provider issued list of services and products provided, or to be provided, to
 * a patient which is provided to an insurer for payment recovery.
 *
 * Class FHIRClaimSubDetail
 * @package \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim
 */
class FHIRClaimSubDetail extends FHIRBackboneElement
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_SUB_DETAIL;
	const FIELD_SEQUENCE = 'sequence';
	const FIELD_SEQUENCE_EXT = '_sequence';
	const FIELD_TYPE = 'type';
	const FIELD_SERVICE = 'service';
	const FIELD_QUANTITY = 'quantity';
	const FIELD_UNIT_PRICE = 'unitPrice';
	const FIELD_FACTOR = 'factor';
	const FIELD_FACTOR_EXT = '_factor';
	const FIELD_POINTS = 'points';
	const FIELD_POINTS_EXT = '_points';
	const FIELD_NET = 'net';
	const FIELD_UDI = 'udi';

	/** @var string */
	private $_xmlns = '';

	/**
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * A service line number.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPositiveInt
	 */
	protected ?FHIRPositiveInt $sequence = null;

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The type of product or service.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding
	 */
	protected ?FHIRCoding $type = null;

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The fee for an additional service or product or charge.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding
	 */
	protected ?FHIRCoding $service = null;

	/**
	 * The number of repetitions of a service or product.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
	 */
	protected ?FHIRSimpleQuantity $quantity = null;

	/**
	 * The fee for an additional service or product or charge.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney
	 */
	protected ?FHIRMoney $unitPrice = null;

	/**
	 * A rational number with implicit precision
	 * Do not use a IEEE type floating point type, instead use something that works
	 * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A real number that represents a multiplier used in determining the overall value
	 * of services delivered and/or goods received. The concept of a Factor allows for
	 * a discount or surcharge multiplier to be applied to a monetary amount.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRDecimalPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDecimal
	 */
	protected ?FHIRDecimal $factor = null;

	/**
	 * A rational number with implicit precision
	 * Do not use a IEEE type floating point type, instead use something that works
	 * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * An amount that expresses the weighting (based on difficulty, cost and/or
	 * resource intensiveness) associated with the good or service delivered. The
	 * concept of Points allows for assignment of point values for services and/or
	 * goods, such that a monetary amount can be assigned to each point.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRDecimalPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDecimal
	 */
	protected ?FHIRDecimal $points = null;

	/**
	 * The quantity times the unit price for an additional service or product or
	 * charge. For example, the formula: unit Quantity * unit Price (Cost per Point) *
	 * factor Number * points = net Amount. Quantity, factor and points are assumed to
	 * be 1 if not supplied.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney
	 */
	protected ?FHIRMoney $net = null;

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * List of Unique Device Identifiers associated with this line item.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding
	 */
	protected ?FHIRCoding $udi = null;

	/**
	 * Validation map for fields in type Claim.SubDetail
	 * @var array
	 */
	private static array $_validationRules = [];

	/**
	 * FHIRClaimSubDetail Constructor
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
					'FHIRClaimSubDetail::_construct - $data expected to be null or array, %s seen',
					gettype($data),
				),
			);
		}
		parent::__construct($data);
		if (isset($data[self::FIELD_SEQUENCE]) || isset($data[self::FIELD_SEQUENCE_EXT])) {
			$value = $data[self::FIELD_SEQUENCE] ?? null;
			$ext =
				isset($data[self::FIELD_SEQUENCE_EXT]) && is_array($data[self::FIELD_SEQUENCE_EXT])
					? $data[self::FIELD_SEQUENCE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRPositiveInt) {
					$this->setSequence($value);
				} elseif (is_array($value)) {
					$this->setSequence(new FHIRPositiveInt(array_merge($ext, $value)));
				} else {
					$this->setSequence(
						new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext),
					);
				}
			} elseif ([] !== $ext) {
				$this->setSequence(new FHIRPositiveInt($ext));
			}
		}
		if (isset($data[self::FIELD_TYPE])) {
			if ($data[self::FIELD_TYPE] instanceof FHIRCoding) {
				$this->setType($data[self::FIELD_TYPE]);
			} else {
				$this->setType(new FHIRCoding($data[self::FIELD_TYPE]));
			}
		}
		if (isset($data[self::FIELD_SERVICE])) {
			if ($data[self::FIELD_SERVICE] instanceof FHIRCoding) {
				$this->setService($data[self::FIELD_SERVICE]);
			} else {
				$this->setService(new FHIRCoding($data[self::FIELD_SERVICE]));
			}
		}
		if (isset($data[self::FIELD_QUANTITY])) {
			if ($data[self::FIELD_QUANTITY] instanceof FHIRSimpleQuantity) {
				$this->setQuantity($data[self::FIELD_QUANTITY]);
			} else {
				$this->setQuantity(new FHIRSimpleQuantity($data[self::FIELD_QUANTITY]));
			}
		}
		if (isset($data[self::FIELD_UNIT_PRICE])) {
			if ($data[self::FIELD_UNIT_PRICE] instanceof FHIRMoney) {
				$this->setUnitPrice($data[self::FIELD_UNIT_PRICE]);
			} else {
				$this->setUnitPrice(new FHIRMoney($data[self::FIELD_UNIT_PRICE]));
			}
		}
		if (isset($data[self::FIELD_FACTOR]) || isset($data[self::FIELD_FACTOR_EXT])) {
			$value = $data[self::FIELD_FACTOR] ?? null;
			$ext =
				isset($data[self::FIELD_FACTOR_EXT]) && is_array($data[self::FIELD_FACTOR_EXT])
					? $data[self::FIELD_FACTOR_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRDecimal) {
					$this->setFactor($value);
				} elseif (is_array($value)) {
					$this->setFactor(new FHIRDecimal(array_merge($ext, $value)));
				} else {
					$this->setFactor(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setFactor(new FHIRDecimal($ext));
			}
		}
		if (isset($data[self::FIELD_POINTS]) || isset($data[self::FIELD_POINTS_EXT])) {
			$value = $data[self::FIELD_POINTS] ?? null;
			$ext =
				isset($data[self::FIELD_POINTS_EXT]) && is_array($data[self::FIELD_POINTS_EXT])
					? $data[self::FIELD_POINTS_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRDecimal) {
					$this->setPoints($value);
				} elseif (is_array($value)) {
					$this->setPoints(new FHIRDecimal(array_merge($ext, $value)));
				} else {
					$this->setPoints(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setPoints(new FHIRDecimal($ext));
			}
		}
		if (isset($data[self::FIELD_NET])) {
			if ($data[self::FIELD_NET] instanceof FHIRMoney) {
				$this->setNet($data[self::FIELD_NET]);
			} else {
				$this->setNet(new FHIRMoney($data[self::FIELD_NET]));
			}
		}
		if (isset($data[self::FIELD_UDI])) {
			if ($data[self::FIELD_UDI] instanceof FHIRCoding) {
				$this->setUdi($data[self::FIELD_UDI]);
			} else {
				$this->setUdi(new FHIRCoding($data[self::FIELD_UDI]));
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
		return "<ClaimSubDetail{$xmlns}></ClaimSubDetail>";
	}

	/**
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * A service line number.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPositiveInt
	 */
	public function getSequence(): ?FHIRPositiveInt
	{
		return $this->sequence;
	}

	/**
	 * An integer with a value that is positive (e.g. >0)
	 * If the element is present, it must have either a \@value, an \@id referenced from
	 * the Narrative, or extensions
	 *
	 * A service line number.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRPositiveIntPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRPositiveInt $sequence
	 * @return static
	 */
	public function setSequence($sequence = null): object
	{
		if (null !== $sequence && !($sequence instanceof FHIRPositiveInt)) {
			$sequence = new FHIRPositiveInt($sequence);
		}
		$this->_trackValueSet($this->sequence, $sequence);
		$this->sequence = $sequence;
		return $this;
	}

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The type of product or service.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding
	 */
	public function getType(): ?FHIRCoding
	{
		return $this->type;
	}

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The type of product or service.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding $type
	 * @return static
	 */
	public function setType(?FHIRCoding $type = null): object
	{
		$this->_trackValueSet($this->type, $type);
		$this->type = $type;
		return $this;
	}

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The fee for an additional service or product or charge.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding
	 */
	public function getService(): ?FHIRCoding
	{
		return $this->service;
	}

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The fee for an additional service or product or charge.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding $service
	 * @return static
	 */
	public function setService(?FHIRCoding $service = null): object
	{
		$this->_trackValueSet($this->service, $service);
		$this->service = $service;
		return $this;
	}

	/**
	 * The number of repetitions of a service or product.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
	 */
	public function getQuantity(): ?FHIRSimpleQuantity
	{
		return $this->quantity;
	}

	/**
	 * The number of repetitions of a service or product.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity $quantity
	 * @return static
	 */
	public function setQuantity(?FHIRSimpleQuantity $quantity = null): object
	{
		$this->_trackValueSet($this->quantity, $quantity);
		$this->quantity = $quantity;
		return $this;
	}

	/**
	 * The fee for an additional service or product or charge.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney
	 */
	public function getUnitPrice(): ?FHIRMoney
	{
		return $this->unitPrice;
	}

	/**
	 * The fee for an additional service or product or charge.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney $unitPrice
	 * @return static
	 */
	public function setUnitPrice(?FHIRMoney $unitPrice = null): object
	{
		$this->_trackValueSet($this->unitPrice, $unitPrice);
		$this->unitPrice = $unitPrice;
		return $this;
	}

	/**
	 * A rational number with implicit precision
	 * Do not use a IEEE type floating point type, instead use something that works
	 * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A real number that represents a multiplier used in determining the overall value
	 * of services delivered and/or goods received. The concept of a Factor allows for
	 * a discount or surcharge multiplier to be applied to a monetary amount.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRDecimalPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDecimal
	 */
	public function getFactor(): ?FHIRDecimal
	{
		return $this->factor;
	}

	/**
	 * A rational number with implicit precision
	 * Do not use a IEEE type floating point type, instead use something that works
	 * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * A real number that represents a multiplier used in determining the overall value
	 * of services delivered and/or goods received. The concept of a Factor allows for
	 * a discount or surcharge multiplier to be applied to a monetary amount.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRDecimalPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDecimal $factor
	 * @return static
	 */
	public function setFactor($factor = null): object
	{
		if (null !== $factor && !($factor instanceof FHIRDecimal)) {
			$factor = new FHIRDecimal($factor);
		}
		$this->_trackValueSet($this->factor, $factor);
		$this->factor = $factor;
		return $this;
	}

	/**
	 * A rational number with implicit precision
	 * Do not use a IEEE type floating point type, instead use something that works
	 * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * An amount that expresses the weighting (based on difficulty, cost and/or
	 * resource intensiveness) associated with the good or service delivered. The
	 * concept of Points allows for assignment of point values for services and/or
	 * goods, such that a monetary amount can be assigned to each point.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRDecimalPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDecimal
	 */
	public function getPoints(): ?FHIRDecimal
	{
		return $this->points;
	}

	/**
	 * A rational number with implicit precision
	 * Do not use a IEEE type floating point type, instead use something that works
	 * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * An amount that expresses the weighting (based on difficulty, cost and/or
	 * resource intensiveness) associated with the good or service delivered. The
	 * concept of Points allows for assignment of point values for services and/or
	 * goods, such that a monetary amount can be assigned to each point.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRDecimalPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRDecimal $points
	 * @return static
	 */
	public function setPoints($points = null): object
	{
		if (null !== $points && !($points instanceof FHIRDecimal)) {
			$points = new FHIRDecimal($points);
		}
		$this->_trackValueSet($this->points, $points);
		$this->points = $points;
		return $this;
	}

	/**
	 * The quantity times the unit price for an additional service or product or
	 * charge. For example, the formula: unit Quantity * unit Price (Cost per Point) *
	 * factor Number * points = net Amount. Quantity, factor and points are assumed to
	 * be 1 if not supplied.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney
	 */
	public function getNet(): ?FHIRMoney
	{
		return $this->net;
	}

	/**
	 * The quantity times the unit price for an additional service or product or
	 * charge. For example, the formula: unit Quantity * unit Price (Cost per Point) *
	 * factor Number * points = net Amount. Quantity, factor and points are assumed to
	 * be 1 if not supplied.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney $net
	 * @return static
	 */
	public function setNet(?FHIRMoney $net = null): object
	{
		$this->_trackValueSet($this->net, $net);
		$this->net = $net;
		return $this;
	}

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * List of Unique Device Identifiers associated with this line item.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding
	 */
	public function getUdi(): ?FHIRCoding
	{
		return $this->udi;
	}

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * List of Unique Device Identifiers associated with this line item.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding $udi
	 * @return static
	 */
	public function setUdi(?FHIRCoding $udi = null): object
	{
		$this->_trackValueSet($this->udi, $udi);
		$this->udi = $udi;
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
		if (null !== ($v = $this->getSequence())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_SEQUENCE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getType())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_TYPE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getService())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_SERVICE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getQuantity())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_QUANTITY] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getUnitPrice())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_UNIT_PRICE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getFactor())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_FACTOR] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getPoints())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_POINTS] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getNet())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_NET] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getUdi())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_UDI] = $fieldErrs;
			}
		}
		if (isset($validationRules[self::FIELD_SEQUENCE])) {
			$v = $this->getSequence();
			foreach ($validationRules[self::FIELD_SEQUENCE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_SUB_DETAIL,
					self::FIELD_SEQUENCE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_SEQUENCE])) {
						$errs[self::FIELD_SEQUENCE] = [];
					}
					$errs[self::FIELD_SEQUENCE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_TYPE])) {
			$v = $this->getType();
			foreach ($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_SUB_DETAIL,
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
		if (isset($validationRules[self::FIELD_SERVICE])) {
			$v = $this->getService();
			foreach ($validationRules[self::FIELD_SERVICE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_SUB_DETAIL,
					self::FIELD_SERVICE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_SERVICE])) {
						$errs[self::FIELD_SERVICE] = [];
					}
					$errs[self::FIELD_SERVICE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_QUANTITY])) {
			$v = $this->getQuantity();
			foreach ($validationRules[self::FIELD_QUANTITY] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_SUB_DETAIL,
					self::FIELD_QUANTITY,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_QUANTITY])) {
						$errs[self::FIELD_QUANTITY] = [];
					}
					$errs[self::FIELD_QUANTITY][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_UNIT_PRICE])) {
			$v = $this->getUnitPrice();
			foreach ($validationRules[self::FIELD_UNIT_PRICE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_SUB_DETAIL,
					self::FIELD_UNIT_PRICE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_UNIT_PRICE])) {
						$errs[self::FIELD_UNIT_PRICE] = [];
					}
					$errs[self::FIELD_UNIT_PRICE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_FACTOR])) {
			$v = $this->getFactor();
			foreach ($validationRules[self::FIELD_FACTOR] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_SUB_DETAIL,
					self::FIELD_FACTOR,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_FACTOR])) {
						$errs[self::FIELD_FACTOR] = [];
					}
					$errs[self::FIELD_FACTOR][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_POINTS])) {
			$v = $this->getPoints();
			foreach ($validationRules[self::FIELD_POINTS] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_SUB_DETAIL,
					self::FIELD_POINTS,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_POINTS])) {
						$errs[self::FIELD_POINTS] = [];
					}
					$errs[self::FIELD_POINTS][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_NET])) {
			$v = $this->getNet();
			foreach ($validationRules[self::FIELD_NET] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_SUB_DETAIL,
					self::FIELD_NET,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_NET])) {
						$errs[self::FIELD_NET] = [];
					}
					$errs[self::FIELD_NET][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_UDI])) {
			$v = $this->getUdi();
			foreach ($validationRules[self::FIELD_UDI] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_SUB_DETAIL,
					self::FIELD_UDI,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_UDI])) {
						$errs[self::FIELD_UDI] = [];
					}
					$errs[self::FIELD_UDI][$rule] = $err;
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimSubDetail $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimSubDetail
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
						'FHIRClaimSubDetail::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRClaimSubDetail::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRClaimSubDetail(null);
		} elseif (!is_object($type) || !($type instanceof FHIRClaimSubDetail)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRClaimSubDetail::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimSubDetail or null, %s seen.',
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
			if (self::FIELD_SEQUENCE === $n->nodeName) {
				$type->setSequence(FHIRPositiveInt::xmlUnserialize($n));
			} elseif (self::FIELD_TYPE === $n->nodeName) {
				$type->setType(FHIRCoding::xmlUnserialize($n));
			} elseif (self::FIELD_SERVICE === $n->nodeName) {
				$type->setService(FHIRCoding::xmlUnserialize($n));
			} elseif (self::FIELD_QUANTITY === $n->nodeName) {
				$type->setQuantity(FHIRSimpleQuantity::xmlUnserialize($n));
			} elseif (self::FIELD_UNIT_PRICE === $n->nodeName) {
				$type->setUnitPrice(FHIRMoney::xmlUnserialize($n));
			} elseif (self::FIELD_FACTOR === $n->nodeName) {
				$type->setFactor(FHIRDecimal::xmlUnserialize($n));
			} elseif (self::FIELD_POINTS === $n->nodeName) {
				$type->setPoints(FHIRDecimal::xmlUnserialize($n));
			} elseif (self::FIELD_NET === $n->nodeName) {
				$type->setNet(FHIRMoney::xmlUnserialize($n));
			} elseif (self::FIELD_UDI === $n->nodeName) {
				$type->setUdi(FHIRCoding::xmlUnserialize($n));
			} elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
				$type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_EXTENSION === $n->nodeName) {
				$type->addExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_ID === $n->nodeName) {
				$type->setId(FHIRIdPrimitive::xmlUnserialize($n));
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_SEQUENCE);
		if (null !== $n) {
			$pt = $type->getSequence();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setSequence($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_FACTOR);
		if (null !== $n) {
			$pt = $type->getFactor();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setFactor($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_POINTS);
		if (null !== $n) {
			$pt = $type->getPoints();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setPoints($n->nodeValue);
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
		if (null !== ($v = $this->getSequence())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_SEQUENCE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getType())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_TYPE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getService())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_SERVICE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getQuantity())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_QUANTITY);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getUnitPrice())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_UNIT_PRICE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getFactor())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_FACTOR);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getPoints())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_POINTS);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getNet())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_NET);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getUdi())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_UDI);
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
		if (null !== ($v = $this->getSequence())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_SEQUENCE} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRPositiveInt::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_SEQUENCE_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getType())) {
			$out->{self::FIELD_TYPE} = $v;
		}
		if (null !== ($v = $this->getService())) {
			$out->{self::FIELD_SERVICE} = $v;
		}
		if (null !== ($v = $this->getQuantity())) {
			$out->{self::FIELD_QUANTITY} = $v;
		}
		if (null !== ($v = $this->getUnitPrice())) {
			$out->{self::FIELD_UNIT_PRICE} = $v;
		}
		if (null !== ($v = $this->getFactor())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_FACTOR} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRDecimal::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_FACTOR_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getPoints())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_POINTS} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRDecimal::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_POINTS_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getNet())) {
			$out->{self::FIELD_NET} = $v;
		}
		if (null !== ($v = $this->getUdi())) {
			$out->{self::FIELD_UDI} = $v;
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
