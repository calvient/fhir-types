<?php declare(strict_types=1);

namespace Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProvenance;

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
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRExtension;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRProvenanceEntityRole;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString;
use Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri;
use Calvient\FhirTypes\DSTU2\FHIRIdPrimitive;
use Calvient\FhirTypes\DSTU2\PHPFHIRConstants;
use Calvient\FhirTypes\DSTU2\PHPFHIRTypeInterface;

/**
 * Provenance of a resource is a record that describes entities and processes
 * involved in producing and delivering or otherwise influencing that resource.
 * Provenance provides a critical foundation for assessing authenticity, enabling
 * trust, and allowing reproducibility. Provenance assertions are a form of
 * contextual metadata and can themselves become important records with their own
 * provenance. Provenance statement indicates clinical significance in terms of
 * confidence in authenticity, reliability, and trustworthiness, integrity, and
 * stage in lifecycle (e.g. Document Completion - has the artifact been legally
 * authenticated), all of which may impact security, privacy, and trust policies.
 *
 * Class FHIRProvenanceEntity
 * @package \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProvenance
 */
class FHIRProvenanceEntity extends FHIRBackboneElement
{
	// name of FHIR type this class describes
	const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_PROVENANCE_DOT_ENTITY;
	const FIELD_ROLE = 'role';
	const FIELD_ROLE_EXT = '_role';
	const FIELD_TYPE = 'type';
	const FIELD_REFERENCE = 'reference';
	const FIELD_REFERENCE_EXT = '_reference';
	const FIELD_DISPLAY = 'display';
	const FIELD_DISPLAY_EXT = '_display';
	const FIELD_AGENT = 'agent';

	/** @var string */
	private $_xmlns = '';

	/**
	 * How an entity was used in an activity.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * How the entity was used during the activity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRProvenanceEntityRole
	 */
	protected ?FHIRProvenanceEntityRole $role = null;

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The type of the entity. If the entity is a resource, then this is a resource
	 * type.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRCoding
	 */
	protected ?FHIRCoding $type = null;

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Identity of the Entity used. May be a logical or physical uri and maybe absolute
	 * or relative.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri
	 */
	protected ?FHIRUri $reference = null;

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Human-readable description of the entity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	protected ?FHIRString $display = null;

	/**
	 * Provenance of a resource is a record that describes entities and processes
	 * involved in producing and delivering or otherwise influencing that resource.
	 * Provenance provides a critical foundation for assessing authenticity, enabling
	 * trust, and allowing reproducibility. Provenance assertions are a form of
	 * contextual metadata and can themselves become important records with their own
	 * provenance. Provenance statement indicates clinical significance in terms of
	 * confidence in authenticity, reliability, and trustworthiness, integrity, and
	 * stage in lifecycle (e.g. Document Completion - has the artifact been legally
	 * authenticated), all of which may impact security, privacy, and trust policies.
	 *
	 * The entity is attributed to an agent to express the agent's responsibility for
	 * that entity, possibly along with other agents. This description can be
	 * understood as shorthand for saying that the agent was responsible for the
	 * activity which generated the entity.
	 *
	 * @var null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent
	 */
	protected ?FHIRProvenanceAgent $agent = null;

	/**
	 * Validation map for fields in type Provenance.Entity
	 * @var array
	 */
	private static array $_validationRules = [];

	/**
	 * FHIRProvenanceEntity Constructor
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
					'FHIRProvenanceEntity::_construct - $data expected to be null or array, %s seen',
					gettype($data),
				),
			);
		}
		parent::__construct($data);
		if (isset($data[self::FIELD_ROLE]) || isset($data[self::FIELD_ROLE_EXT])) {
			$value = $data[self::FIELD_ROLE] ?? null;
			$ext =
				isset($data[self::FIELD_ROLE_EXT]) && is_array($data[self::FIELD_ROLE_EXT])
					? $data[self::FIELD_ROLE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRProvenanceEntityRole) {
					$this->setRole($value);
				} elseif (is_array($value)) {
					$this->setRole(new FHIRProvenanceEntityRole(array_merge($ext, $value)));
				} else {
					$this->setRole(
						new FHIRProvenanceEntityRole(
							[FHIRProvenanceEntityRole::FIELD_VALUE => $value] + $ext,
						),
					);
				}
			} elseif ([] !== $ext) {
				$this->setRole(new FHIRProvenanceEntityRole($ext));
			}
		}
		if (isset($data[self::FIELD_TYPE])) {
			if ($data[self::FIELD_TYPE] instanceof FHIRCoding) {
				$this->setType($data[self::FIELD_TYPE]);
			} else {
				$this->setType(new FHIRCoding($data[self::FIELD_TYPE]));
			}
		}
		if (isset($data[self::FIELD_REFERENCE]) || isset($data[self::FIELD_REFERENCE_EXT])) {
			$value = $data[self::FIELD_REFERENCE] ?? null;
			$ext =
				isset($data[self::FIELD_REFERENCE_EXT]) &&
				is_array($data[self::FIELD_REFERENCE_EXT])
					? $data[self::FIELD_REFERENCE_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRUri) {
					$this->setReference($value);
				} elseif (is_array($value)) {
					$this->setReference(new FHIRUri(array_merge($ext, $value)));
				} else {
					$this->setReference(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setReference(new FHIRUri($ext));
			}
		}
		if (isset($data[self::FIELD_DISPLAY]) || isset($data[self::FIELD_DISPLAY_EXT])) {
			$value = $data[self::FIELD_DISPLAY] ?? null;
			$ext =
				isset($data[self::FIELD_DISPLAY_EXT]) && is_array($data[self::FIELD_DISPLAY_EXT])
					? $data[self::FIELD_DISPLAY_EXT]
					: [];
			if (null !== $value) {
				if ($value instanceof FHIRString) {
					$this->setDisplay($value);
				} elseif (is_array($value)) {
					$this->setDisplay(new FHIRString(array_merge($ext, $value)));
				} else {
					$this->setDisplay(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
				}
			} elseif ([] !== $ext) {
				$this->setDisplay(new FHIRString($ext));
			}
		}
		if (isset($data[self::FIELD_AGENT])) {
			if ($data[self::FIELD_AGENT] instanceof FHIRProvenanceAgent) {
				$this->setAgent($data[self::FIELD_AGENT]);
			} else {
				$this->setAgent(new FHIRProvenanceAgent($data[self::FIELD_AGENT]));
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
		return "<ProvenanceEntity{$xmlns}></ProvenanceEntity>";
	}

	/**
	 * How an entity was used in an activity.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * How the entity was used during the activity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRProvenanceEntityRole
	 */
	public function getRole(): ?FHIRProvenanceEntityRole
	{
		return $this->role;
	}

	/**
	 * How an entity was used in an activity.
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * How the entity was used during the activity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRProvenanceEntityRole $role
	 * @return static
	 */
	public function setRole(?FHIRProvenanceEntityRole $role = null): object
	{
		$this->_trackValueSet($this->role, $role);
		$this->role = $role;
		return $this;
	}

	/**
	 * A reference to a code defined by a terminology system.
	 * If the element is present, it must have a value for at least one of the defined
	 * elements, an \@id referenced from the Narrative, or extensions
	 *
	 * The type of the entity. If the entity is a resource, then this is a resource
	 * type.
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
	 * The type of the entity. If the entity is a resource, then this is a resource
	 * type.
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
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Identity of the Entity used. May be a logical or physical uri and maybe absolute
	 * or relative.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri
	 */
	public function getReference(): ?FHIRUri
	{
		return $this->reference;
	}

	/**
	 * String of characters used to identify a name or a resource
	 * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Identity of the Entity used. May be a logical or physical uri and maybe absolute
	 * or relative.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRUriPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRUri $reference
	 * @return static
	 */
	public function setReference($reference = null): object
	{
		if (null !== $reference && !($reference instanceof FHIRUri)) {
			$reference = new FHIRUri($reference);
		}
		$this->_trackValueSet($this->reference, $reference);
		$this->reference = $reference;
		return $this;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Human-readable description of the entity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString
	 */
	public function getDisplay(): ?FHIRString
	{
		return $this->display;
	}

	/**
	 * A sequence of Unicode characters
	 * Note that FHIR strings may not exceed 1MB in size
	 * If the element is present, it must have either a \@value, an \@id, or extensions
	 *
	 * Human-readable description of the entity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRStringPrimitive|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRString $display
	 * @return static
	 */
	public function setDisplay($display = null): object
	{
		if (null !== $display && !($display instanceof FHIRString)) {
			$display = new FHIRString($display);
		}
		$this->_trackValueSet($this->display, $display);
		$this->display = $display;
		return $this;
	}

	/**
	 * Provenance of a resource is a record that describes entities and processes
	 * involved in producing and delivering or otherwise influencing that resource.
	 * Provenance provides a critical foundation for assessing authenticity, enabling
	 * trust, and allowing reproducibility. Provenance assertions are a form of
	 * contextual metadata and can themselves become important records with their own
	 * provenance. Provenance statement indicates clinical significance in terms of
	 * confidence in authenticity, reliability, and trustworthiness, integrity, and
	 * stage in lifecycle (e.g. Document Completion - has the artifact been legally
	 * authenticated), all of which may impact security, privacy, and trust policies.
	 *
	 * The entity is attributed to an agent to express the agent's responsibility for
	 * that entity, possibly along with other agents. This description can be
	 * understood as shorthand for saying that the agent was responsible for the
	 * activity which generated the entity.
	 *
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent
	 */
	public function getAgent(): ?FHIRProvenanceAgent
	{
		return $this->agent;
	}

	/**
	 * Provenance of a resource is a record that describes entities and processes
	 * involved in producing and delivering or otherwise influencing that resource.
	 * Provenance provides a critical foundation for assessing authenticity, enabling
	 * trust, and allowing reproducibility. Provenance assertions are a form of
	 * contextual metadata and can themselves become important records with their own
	 * provenance. Provenance statement indicates clinical significance in terms of
	 * confidence in authenticity, reliability, and trustworthiness, integrity, and
	 * stage in lifecycle (e.g. Document Completion - has the artifact been legally
	 * authenticated), all of which may impact security, privacy, and trust policies.
	 *
	 * The entity is attributed to an agent to express the agent's responsibility for
	 * that entity, possibly along with other agents. This description can be
	 * understood as shorthand for saying that the agent was responsible for the
	 * activity which generated the entity.
	 *
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent $agent
	 * @return static
	 */
	public function setAgent(?FHIRProvenanceAgent $agent = null): object
	{
		$this->_trackValueSet($this->agent, $agent);
		$this->agent = $agent;
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
		if (null !== ($v = $this->getRole())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_ROLE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getType())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_TYPE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getReference())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_REFERENCE] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getDisplay())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_DISPLAY] = $fieldErrs;
			}
		}
		if (null !== ($v = $this->getAgent())) {
			if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
				$errs[self::FIELD_AGENT] = $fieldErrs;
			}
		}
		if (isset($validationRules[self::FIELD_ROLE])) {
			$v = $this->getRole();
			foreach ($validationRules[self::FIELD_ROLE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PROVENANCE_DOT_ENTITY,
					self::FIELD_ROLE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_ROLE])) {
						$errs[self::FIELD_ROLE] = [];
					}
					$errs[self::FIELD_ROLE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_TYPE])) {
			$v = $this->getType();
			foreach ($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PROVENANCE_DOT_ENTITY,
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
		if (isset($validationRules[self::FIELD_REFERENCE])) {
			$v = $this->getReference();
			foreach ($validationRules[self::FIELD_REFERENCE] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PROVENANCE_DOT_ENTITY,
					self::FIELD_REFERENCE,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_REFERENCE])) {
						$errs[self::FIELD_REFERENCE] = [];
					}
					$errs[self::FIELD_REFERENCE][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_DISPLAY])) {
			$v = $this->getDisplay();
			foreach ($validationRules[self::FIELD_DISPLAY] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PROVENANCE_DOT_ENTITY,
					self::FIELD_DISPLAY,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_DISPLAY])) {
						$errs[self::FIELD_DISPLAY] = [];
					}
					$errs[self::FIELD_DISPLAY][$rule] = $err;
				}
			}
		}
		if (isset($validationRules[self::FIELD_AGENT])) {
			$v = $this->getAgent();
			foreach ($validationRules[self::FIELD_AGENT] as $rule => $constraint) {
				$err = $this->_performValidation(
					PHPFHIRConstants::TYPE_NAME_PROVENANCE_DOT_ENTITY,
					self::FIELD_AGENT,
					$rule,
					$constraint,
					$v,
				);
				if (null !== $err) {
					if (!isset($errs[self::FIELD_AGENT])) {
						$errs[self::FIELD_AGENT] = [];
					}
					$errs[self::FIELD_AGENT][$rule] = $err;
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
	 * @param null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity $type
	 * @param null|int $libxmlOpts
	 * @return null|\Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity
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
						'FHIRProvenanceEntity::xmlUnserialize - String provided is not parseable as XML: %s',
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
					'FHIRProvenanceEntity::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen',
					is_object($element) ? get_class($element) : gettype($element),
				),
			);
		}
		if (null === $type) {
			$type = new FHIRProvenanceEntity(null);
		} elseif (!is_object($type) || !($type instanceof FHIRProvenanceEntity)) {
			throw new \RuntimeException(
				sprintf(
					'FHIRProvenanceEntity::xmlUnserialize - $type must be instance of \Calvient\FhirTypes\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity or null, %s seen.',
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
			if (self::FIELD_ROLE === $n->nodeName) {
				$type->setRole(FHIRProvenanceEntityRole::xmlUnserialize($n));
			} elseif (self::FIELD_TYPE === $n->nodeName) {
				$type->setType(FHIRCoding::xmlUnserialize($n));
			} elseif (self::FIELD_REFERENCE === $n->nodeName) {
				$type->setReference(FHIRUri::xmlUnserialize($n));
			} elseif (self::FIELD_DISPLAY === $n->nodeName) {
				$type->setDisplay(FHIRString::xmlUnserialize($n));
			} elseif (self::FIELD_AGENT === $n->nodeName) {
				$type->setAgent(FHIRProvenanceAgent::xmlUnserialize($n));
			} elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
				$type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_EXTENSION === $n->nodeName) {
				$type->addExtension(FHIRExtension::xmlUnserialize($n));
			} elseif (self::FIELD_ID === $n->nodeName) {
				$type->setId(FHIRIdPrimitive::xmlUnserialize($n));
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_REFERENCE);
		if (null !== $n) {
			$pt = $type->getReference();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setReference($n->nodeValue);
			}
		}
		$n = $element->attributes->getNamedItem(self::FIELD_DISPLAY);
		if (null !== $n) {
			$pt = $type->getDisplay();
			if (null !== $pt) {
				$pt->setValue($n->nodeValue);
			} else {
				$type->setDisplay($n->nodeValue);
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
		if (null !== ($v = $this->getRole())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_ROLE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getType())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_TYPE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getReference())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_REFERENCE);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getDisplay())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_DISPLAY);
			$element->appendChild($telement);
			$v->xmlSerialize($telement);
		}
		if (null !== ($v = $this->getAgent())) {
			$telement = $element->ownerDocument->createElement(self::FIELD_AGENT);
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
		if (null !== ($v = $this->getRole())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_ROLE} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRProvenanceEntityRole::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_ROLE_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getType())) {
			$out->{self::FIELD_TYPE} = $v;
		}
		if (null !== ($v = $this->getReference())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_REFERENCE} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRUri::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_REFERENCE_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getDisplay())) {
			if (null !== ($val = $v->getValue())) {
				$out->{self::FIELD_DISPLAY} = $val;
			}
			$ext = $v->jsonSerialize();
			unset($ext->{FHIRString::FIELD_VALUE});
			if (count((array) $ext) > 0) {
				$out->{self::FIELD_DISPLAY_EXT} = $ext;
			}
		}
		if (null !== ($v = $this->getAgent())) {
			$out->{self::FIELD_AGENT} = $v;
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
