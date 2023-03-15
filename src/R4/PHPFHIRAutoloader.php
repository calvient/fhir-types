<?php

namespace Calvient\FhirTypes\R4;

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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 *
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 *
 */

// if this class is used, assume not using Composer...

// interfaces
if (!interface_exists('\Calvient\FhirTypes\R4\PHPFHIRTypeInterface', false)) {
	require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRTypeInterface.php';
}
if (!interface_exists('\Calvient\FhirTypes\R4\PHPFHIRContainedTypeInterface', false)) {
	require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRContainedTypeInterface.php';
}
if (!interface_exists('\Calvient\FhirTypes\R4\PHPFHIRCommentContainerInterface', false)) {
	require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRCommentContainerInterface.php';
}

// traits
if (!trait_exists('\Calvient\FhirTypes\R4\PHPFHIRCommentContainerTrait', false)) {
	require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRCommentContainerTrait.php';
}
if (!trait_exists('\Calvient\FhirTypes\R4\PHPFHIRValidationAssertionsTrait', false)) {
	require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRValidationAssertionsTrait.php';
}
if (!trait_exists('\Calvient\FhirTypes\R4\PHPFHIRChangeTrackingTrait', false)) {
	require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRChangeTrackingTrait.php';
}

// common classes
if (!class_exists('\Calvient\FhirTypes\R4\PHPFHIRConstants', false)) {
	require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRConstants.php';
}
if (!class_exists('\Calvient\FhirTypes\R4\PHPFHIRTypeMap', false)) {
	require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRTypeMap.php';
}
if (!class_exists('\Calvient\FhirTypes\R4\PHPFHIRResponseParserConfig', false)) {
	require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRResponseParserConfig.php';
}
if (!class_exists('\Calvient\FhirTypes\R4\PHPFHIRResponseParser', false)) {
	require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRResponseParser.php';
}

/**
 * Class PHPFHIRAutoloader
 * @package \Calvient\FhirTypes\R4
 */
abstract class PHPFHIRAutoloader
{
	/** @var array */
	private const _CLASS_MAP = [
		'HL7\FHIR\R4\FHIRBase64BinaryPrimitive' => 'FHIRBase64BinaryPrimitive.php',
		'HL7\FHIR\R4\FHIRBooleanPrimitive' => 'FHIRBooleanPrimitive.php',
		'HL7\FHIR\R4\FHIRCanonicalPrimitive' => 'FHIRCanonicalPrimitive.php',
		'HL7\FHIR\R4\FHIRCodePrimitive' => 'FHIRCodePrimitive.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRAccountStatusList' =>
			'FHIRCodePrimitive/FHIRAccountStatusList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRActionCardinalityBehaviorList' =>
			'FHIRCodePrimitive/FHIRActionCardinalityBehaviorList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRActionConditionKindList' =>
			'FHIRCodePrimitive/FHIRActionConditionKindList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRActionGroupingBehaviorList' =>
			'FHIRCodePrimitive/FHIRActionGroupingBehaviorList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRActionParticipantTypeList' =>
			'FHIRCodePrimitive/FHIRActionParticipantTypeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRActionPrecheckBehaviorList' =>
			'FHIRCodePrimitive/FHIRActionPrecheckBehaviorList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRActionRelationshipTypeList' =>
			'FHIRCodePrimitive/FHIRActionRelationshipTypeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRActionRequiredBehaviorList' =>
			'FHIRCodePrimitive/FHIRActionRequiredBehaviorList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRActionSelectionBehaviorList' =>
			'FHIRCodePrimitive/FHIRActionSelectionBehaviorList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRAddressTypeList' =>
			'FHIRCodePrimitive/FHIRAddressTypeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRAddressUseList' =>
			'FHIRCodePrimitive/FHIRAddressUseList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRAdministrativeGenderList' =>
			'FHIRCodePrimitive/FHIRAdministrativeGenderList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRAdverseEventActualityList' =>
			'FHIRCodePrimitive/FHIRAdverseEventActualityList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRAggregationModeList' =>
			'FHIRCodePrimitive/FHIRAggregationModeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRAllergyIntoleranceCategoryList' =>
			'FHIRCodePrimitive/FHIRAllergyIntoleranceCategoryList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRAllergyIntoleranceCriticalityList' =>
			'FHIRCodePrimitive/FHIRAllergyIntoleranceCriticalityList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRAllergyIntoleranceSeverityList' =>
			'FHIRCodePrimitive/FHIRAllergyIntoleranceSeverityList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRAllergyIntoleranceTypeList' =>
			'FHIRCodePrimitive/FHIRAllergyIntoleranceTypeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRAppointmentStatusList' =>
			'FHIRCodePrimitive/FHIRAppointmentStatusList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRAssertionDirectionTypeList' =>
			'FHIRCodePrimitive/FHIRAssertionDirectionTypeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRAssertionOperatorTypeList' =>
			'FHIRCodePrimitive/FHIRAssertionOperatorTypeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRAssertionResponseTypesList' =>
			'FHIRCodePrimitive/FHIRAssertionResponseTypesList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRAuditEventActionList' =>
			'FHIRCodePrimitive/FHIRAuditEventActionList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRAuditEventAgentNetworkTypeList' =>
			'FHIRCodePrimitive/FHIRAuditEventAgentNetworkTypeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRAuditEventOutcomeList' =>
			'FHIRCodePrimitive/FHIRAuditEventOutcomeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRBindingStrengthList' =>
			'FHIRCodePrimitive/FHIRBindingStrengthList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRBiologicallyDerivedProductCategoryList' =>
			'FHIRCodePrimitive/FHIRBiologicallyDerivedProductCategoryList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRBiologicallyDerivedProductStatusList' =>
			'FHIRCodePrimitive/FHIRBiologicallyDerivedProductStatusList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRBiologicallyDerivedProductStorageScaleList' =>
			'FHIRCodePrimitive/FHIRBiologicallyDerivedProductStorageScaleList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRBundleTypeList' =>
			'FHIRCodePrimitive/FHIRBundleTypeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRCapabilityStatementKindList' =>
			'FHIRCodePrimitive/FHIRCapabilityStatementKindList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRCarePlanActivityKindList' =>
			'FHIRCodePrimitive/FHIRCarePlanActivityKindList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRCarePlanActivityStatusList' =>
			'FHIRCodePrimitive/FHIRCarePlanActivityStatusList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRCarePlanIntentList' =>
			'FHIRCodePrimitive/FHIRCarePlanIntentList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRCareTeamStatusList' =>
			'FHIRCodePrimitive/FHIRCareTeamStatusList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRCatalogEntryRelationTypeList' =>
			'FHIRCodePrimitive/FHIRCatalogEntryRelationTypeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRChargeItemStatusList' =>
			'FHIRCodePrimitive/FHIRChargeItemStatusList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRClaimProcessingCodesList' =>
			'FHIRCodePrimitive/FHIRClaimProcessingCodesList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRClinicalImpressionStatusList' =>
			'FHIRCodePrimitive/FHIRClinicalImpressionStatusList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRCodeSearchSupportList' =>
			'FHIRCodePrimitive/FHIRCodeSearchSupportList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRCodeSystemContentModeList' =>
			'FHIRCodePrimitive/FHIRCodeSystemContentModeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRCodeSystemHierarchyMeaningList' =>
			'FHIRCodePrimitive/FHIRCodeSystemHierarchyMeaningList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRCompartmentTypeList' =>
			'FHIRCodePrimitive/FHIRCompartmentTypeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRCompositionAttestationModeList' =>
			'FHIRCodePrimitive/FHIRCompositionAttestationModeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRCompositionStatusList' =>
			'FHIRCodePrimitive/FHIRCompositionStatusList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRConceptMapEquivalenceList' =>
			'FHIRCodePrimitive/FHIRConceptMapEquivalenceList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRConceptMapGroupUnmappedModeList' =>
			'FHIRCodePrimitive/FHIRConceptMapGroupUnmappedModeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRConditionalDeleteStatusList' =>
			'FHIRCodePrimitive/FHIRConditionalDeleteStatusList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRConditionalReadStatusList' =>
			'FHIRCodePrimitive/FHIRConditionalReadStatusList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRConsentDataMeaningList' =>
			'FHIRCodePrimitive/FHIRConsentDataMeaningList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRConsentProvisionTypeList' =>
			'FHIRCodePrimitive/FHIRConsentProvisionTypeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRConsentStateList' =>
			'FHIRCodePrimitive/FHIRConsentStateList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRConstraintSeverityList' =>
			'FHIRCodePrimitive/FHIRConstraintSeverityList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRContactPointSystemList' =>
			'FHIRCodePrimitive/FHIRContactPointSystemList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRContactPointUseList' =>
			'FHIRCodePrimitive/FHIRContactPointUseList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRContractResourcePublicationStatusCodesList' =>
			'FHIRCodePrimitive/FHIRContractResourcePublicationStatusCodesList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRContractResourceStatusCodesList' =>
			'FHIRCodePrimitive/FHIRContractResourceStatusCodesList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRContributorTypeList' =>
			'FHIRCodePrimitive/FHIRContributorTypeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRDaysOfWeekList' =>
			'FHIRCodePrimitive/FHIRDaysOfWeekList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRDetectedIssueSeverityList' =>
			'FHIRCodePrimitive/FHIRDetectedIssueSeverityList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRDeviceMetricCalibrationStateList' =>
			'FHIRCodePrimitive/FHIRDeviceMetricCalibrationStateList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRDeviceMetricCalibrationTypeList' =>
			'FHIRCodePrimitive/FHIRDeviceMetricCalibrationTypeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRDeviceMetricCategoryList' =>
			'FHIRCodePrimitive/FHIRDeviceMetricCategoryList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRDeviceMetricColorList' =>
			'FHIRCodePrimitive/FHIRDeviceMetricColorList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRDeviceMetricOperationalStatusList' =>
			'FHIRCodePrimitive/FHIRDeviceMetricOperationalStatusList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRDeviceNameTypeList' =>
			'FHIRCodePrimitive/FHIRDeviceNameTypeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRDeviceUseStatementStatusList' =>
			'FHIRCodePrimitive/FHIRDeviceUseStatementStatusList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRDiagnosticReportStatusList' =>
			'FHIRCodePrimitive/FHIRDiagnosticReportStatusList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRDiscriminatorTypeList' =>
			'FHIRCodePrimitive/FHIRDiscriminatorTypeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRDocumentModeList' =>
			'FHIRCodePrimitive/FHIRDocumentModeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRDocumentReferenceStatusList' =>
			'FHIRCodePrimitive/FHIRDocumentReferenceStatusList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRDocumentRelationshipTypeList' =>
			'FHIRCodePrimitive/FHIRDocumentRelationshipTypeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIREligibilityRequestPurposeList' =>
			'FHIRCodePrimitive/FHIREligibilityRequestPurposeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIREligibilityResponsePurposeList' =>
			'FHIRCodePrimitive/FHIREligibilityResponsePurposeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIREnableWhenBehaviorList' =>
			'FHIRCodePrimitive/FHIREnableWhenBehaviorList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIREncounterLocationStatusList' =>
			'FHIRCodePrimitive/FHIREncounterLocationStatusList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIREncounterStatusList' =>
			'FHIRCodePrimitive/FHIREncounterStatusList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIREndpointStatusList' =>
			'FHIRCodePrimitive/FHIREndpointStatusList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIREpisodeOfCareStatusList' =>
			'FHIRCodePrimitive/FHIREpisodeOfCareStatusList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIREventCapabilityModeList' =>
			'FHIRCodePrimitive/FHIREventCapabilityModeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIREventStatusList' =>
			'FHIRCodePrimitive/FHIREventStatusList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIREventTimingList' =>
			'FHIRCodePrimitive/FHIREventTimingList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIREvidenceVariableTypeList' =>
			'FHIRCodePrimitive/FHIREvidenceVariableTypeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRExampleScenarioActorTypeList' =>
			'FHIRCodePrimitive/FHIRExampleScenarioActorTypeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRExplanationOfBenefitStatusList' =>
			'FHIRCodePrimitive/FHIRExplanationOfBenefitStatusList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRExposureStateList' =>
			'FHIRCodePrimitive/FHIRExposureStateList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRExpressionLanguageList' =>
			'FHIRCodePrimitive/FHIRExpressionLanguageList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRExtensionContextTypeList' =>
			'FHIRCodePrimitive/FHIRExtensionContextTypeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRFamilyHistoryStatusList' =>
			'FHIRCodePrimitive/FHIRFamilyHistoryStatusList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRFHIRDeviceStatusList' =>
			'FHIRCodePrimitive/FHIRFHIRDeviceStatusList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRFHIRSubstanceStatusList' =>
			'FHIRCodePrimitive/FHIRFHIRSubstanceStatusList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRFHIRVersionList' =>
			'FHIRCodePrimitive/FHIRFHIRVersionList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRFilterOperatorList' =>
			'FHIRCodePrimitive/FHIRFilterOperatorList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRFinancialResourceStatusCodesList' =>
			'FHIRCodePrimitive/FHIRFinancialResourceStatusCodesList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRFlagStatusList' =>
			'FHIRCodePrimitive/FHIRFlagStatusList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRGoalLifecycleStatusList' =>
			'FHIRCodePrimitive/FHIRGoalLifecycleStatusList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRGraphCompartmentRuleList' =>
			'FHIRCodePrimitive/FHIRGraphCompartmentRuleList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRGraphCompartmentUseList' =>
			'FHIRCodePrimitive/FHIRGraphCompartmentUseList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRGroupMeasureList' =>
			'FHIRCodePrimitive/FHIRGroupMeasureList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRGroupTypeList' =>
			'FHIRCodePrimitive/FHIRGroupTypeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRGuidanceResponseStatusList' =>
			'FHIRCodePrimitive/FHIRGuidanceResponseStatusList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRGuidePageGenerationList' =>
			'FHIRCodePrimitive/FHIRGuidePageGenerationList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRGuideParameterCodeList' =>
			'FHIRCodePrimitive/FHIRGuideParameterCodeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRHTTPVerbList' =>
			'FHIRCodePrimitive/FHIRHTTPVerbList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRIdentifierUseList' =>
			'FHIRCodePrimitive/FHIRIdentifierUseList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRIdentityAssuranceLevelList' =>
			'FHIRCodePrimitive/FHIRIdentityAssuranceLevelList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRImagingStudyStatusList' =>
			'FHIRCodePrimitive/FHIRImagingStudyStatusList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRImmunizationEvaluationStatusCodesList' =>
			'FHIRCodePrimitive/FHIRImmunizationEvaluationStatusCodesList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRImmunizationStatusCodesList' =>
			'FHIRCodePrimitive/FHIRImmunizationStatusCodesList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRInvoicePriceComponentTypeList' =>
			'FHIRCodePrimitive/FHIRInvoicePriceComponentTypeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRInvoiceStatusList' =>
			'FHIRCodePrimitive/FHIRInvoiceStatusList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRIssueSeverityList' =>
			'FHIRCodePrimitive/FHIRIssueSeverityList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRIssueTypeList' =>
			'FHIRCodePrimitive/FHIRIssueTypeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRLinkageTypeList' =>
			'FHIRCodePrimitive/FHIRLinkageTypeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRLinkTypeList' =>
			'FHIRCodePrimitive/FHIRLinkTypeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRListModeList' =>
			'FHIRCodePrimitive/FHIRListModeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRListStatusList' =>
			'FHIRCodePrimitive/FHIRListStatusList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRLocationModeList' =>
			'FHIRCodePrimitive/FHIRLocationModeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRLocationStatusList' =>
			'FHIRCodePrimitive/FHIRLocationStatusList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRMeasureReportStatusList' =>
			'FHIRCodePrimitive/FHIRMeasureReportStatusList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRMeasureReportTypeList' =>
			'FHIRCodePrimitive/FHIRMeasureReportTypeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRMedicationRequestIntentList' =>
			'FHIRCodePrimitive/FHIRMedicationRequestIntentList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRMedicationrequestStatusList' =>
			'FHIRCodePrimitive/FHIRMedicationrequestStatusList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRMedicationStatusCodesList' =>
			'FHIRCodePrimitive/FHIRMedicationStatusCodesList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRMessageheaderResponseRequestList' =>
			'FHIRCodePrimitive/FHIRMessageheaderResponseRequestList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRMessageSignificanceCategoryList' =>
			'FHIRCodePrimitive/FHIRMessageSignificanceCategoryList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRNameUseList' => 'FHIRCodePrimitive/FHIRNameUseList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRNamingSystemIdentifierTypeList' =>
			'FHIRCodePrimitive/FHIRNamingSystemIdentifierTypeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRNamingSystemTypeList' =>
			'FHIRCodePrimitive/FHIRNamingSystemTypeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRNarrativeStatusList' =>
			'FHIRCodePrimitive/FHIRNarrativeStatusList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRNoteTypeList' =>
			'FHIRCodePrimitive/FHIRNoteTypeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRObservationDataTypeList' =>
			'FHIRCodePrimitive/FHIRObservationDataTypeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRObservationRangeCategoryList' =>
			'FHIRCodePrimitive/FHIRObservationRangeCategoryList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRObservationStatusList' =>
			'FHIRCodePrimitive/FHIRObservationStatusList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIROperationKindList' =>
			'FHIRCodePrimitive/FHIROperationKindList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIROperationParameterUseList' =>
			'FHIRCodePrimitive/FHIROperationParameterUseList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIROrientationTypeList' =>
			'FHIRCodePrimitive/FHIROrientationTypeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRParticipantRequiredList' =>
			'FHIRCodePrimitive/FHIRParticipantRequiredList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRParticipationStatusList' =>
			'FHIRCodePrimitive/FHIRParticipationStatusList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRPropertyRepresentationList' =>
			'FHIRCodePrimitive/FHIRPropertyRepresentationList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRPropertyTypeList' =>
			'FHIRCodePrimitive/FHIRPropertyTypeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRProvenanceEntityRoleList' =>
			'FHIRCodePrimitive/FHIRProvenanceEntityRoleList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRPublicationStatusList' =>
			'FHIRCodePrimitive/FHIRPublicationStatusList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRQualityTypeList' =>
			'FHIRCodePrimitive/FHIRQualityTypeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRQuantityComparatorList' =>
			'FHIRCodePrimitive/FHIRQuantityComparatorList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRQuestionnaireItemOperatorList' =>
			'FHIRCodePrimitive/FHIRQuestionnaireItemOperatorList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRQuestionnaireItemTypeList' =>
			'FHIRCodePrimitive/FHIRQuestionnaireItemTypeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRQuestionnaireResponseStatusList' =>
			'FHIRCodePrimitive/FHIRQuestionnaireResponseStatusList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRReferenceHandlingPolicyList' =>
			'FHIRCodePrimitive/FHIRReferenceHandlingPolicyList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRReferenceVersionRulesList' =>
			'FHIRCodePrimitive/FHIRReferenceVersionRulesList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRRelatedArtifactTypeList' =>
			'FHIRCodePrimitive/FHIRRelatedArtifactTypeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRRemittanceOutcomeList' =>
			'FHIRCodePrimitive/FHIRRemittanceOutcomeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRRepositoryTypeList' =>
			'FHIRCodePrimitive/FHIRRepositoryTypeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRRequestIntentList' =>
			'FHIRCodePrimitive/FHIRRequestIntentList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRRequestPriorityList' =>
			'FHIRCodePrimitive/FHIRRequestPriorityList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRRequestResourceTypeList' =>
			'FHIRCodePrimitive/FHIRRequestResourceTypeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRRequestStatusList' =>
			'FHIRCodePrimitive/FHIRRequestStatusList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRResearchElementTypeList' =>
			'FHIRCodePrimitive/FHIRResearchElementTypeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRResearchStudyStatusList' =>
			'FHIRCodePrimitive/FHIRResearchStudyStatusList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRResearchSubjectStatusList' =>
			'FHIRCodePrimitive/FHIRResearchSubjectStatusList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRResourceTypeList' =>
			'FHIRCodePrimitive/FHIRResourceTypeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRResourceVersionPolicyList' =>
			'FHIRCodePrimitive/FHIRResourceVersionPolicyList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRResponseTypeList' =>
			'FHIRCodePrimitive/FHIRResponseTypeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRRestfulCapabilityModeList' =>
			'FHIRCodePrimitive/FHIRRestfulCapabilityModeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRSearchComparatorList' =>
			'FHIRCodePrimitive/FHIRSearchComparatorList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRSearchEntryModeList' =>
			'FHIRCodePrimitive/FHIRSearchEntryModeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRSearchModifierCodeList' =>
			'FHIRCodePrimitive/FHIRSearchModifierCodeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRSearchParamTypeList' =>
			'FHIRCodePrimitive/FHIRSearchParamTypeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRSequenceTypeList' =>
			'FHIRCodePrimitive/FHIRSequenceTypeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRSlicingRulesList' =>
			'FHIRCodePrimitive/FHIRSlicingRulesList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRSlotStatusList' =>
			'FHIRCodePrimitive/FHIRSlotStatusList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRSortDirectionList' =>
			'FHIRCodePrimitive/FHIRSortDirectionList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRSPDXLicenseList' =>
			'FHIRCodePrimitive/FHIRSPDXLicenseList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRSpecimenContainedPreferenceList' =>
			'FHIRCodePrimitive/FHIRSpecimenContainedPreferenceList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRSpecimenStatusList' =>
			'FHIRCodePrimitive/FHIRSpecimenStatusList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRStatusList' => 'FHIRCodePrimitive/FHIRStatusList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRStrandTypeList' =>
			'FHIRCodePrimitive/FHIRStrandTypeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRStructureDefinitionKindList' =>
			'FHIRCodePrimitive/FHIRStructureDefinitionKindList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRStructureMapContextTypeList' =>
			'FHIRCodePrimitive/FHIRStructureMapContextTypeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRStructureMapGroupTypeModeList' =>
			'FHIRCodePrimitive/FHIRStructureMapGroupTypeModeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRStructureMapInputModeList' =>
			'FHIRCodePrimitive/FHIRStructureMapInputModeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRStructureMapModelModeList' =>
			'FHIRCodePrimitive/FHIRStructureMapModelModeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRStructureMapSourceListModeList' =>
			'FHIRCodePrimitive/FHIRStructureMapSourceListModeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRStructureMapTargetListModeList' =>
			'FHIRCodePrimitive/FHIRStructureMapTargetListModeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRStructureMapTransformList' =>
			'FHIRCodePrimitive/FHIRStructureMapTransformList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRSubscriptionChannelTypeList' =>
			'FHIRCodePrimitive/FHIRSubscriptionChannelTypeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRSubscriptionStatusList' =>
			'FHIRCodePrimitive/FHIRSubscriptionStatusList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRSupplyDeliveryStatusList' =>
			'FHIRCodePrimitive/FHIRSupplyDeliveryStatusList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRSupplyRequestStatusList' =>
			'FHIRCodePrimitive/FHIRSupplyRequestStatusList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRSystemRestfulInteractionList' =>
			'FHIRCodePrimitive/FHIRSystemRestfulInteractionList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRTaskIntentList' =>
			'FHIRCodePrimitive/FHIRTaskIntentList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRTaskStatusList' =>
			'FHIRCodePrimitive/FHIRTaskStatusList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRTestReportActionResultList' =>
			'FHIRCodePrimitive/FHIRTestReportActionResultList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRTestReportParticipantTypeList' =>
			'FHIRCodePrimitive/FHIRTestReportParticipantTypeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRTestReportResultList' =>
			'FHIRCodePrimitive/FHIRTestReportResultList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRTestReportStatusList' =>
			'FHIRCodePrimitive/FHIRTestReportStatusList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRTestScriptRequestMethodCodeList' =>
			'FHIRCodePrimitive/FHIRTestScriptRequestMethodCodeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRTriggerTypeList' =>
			'FHIRCodePrimitive/FHIRTriggerTypeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRTypeDerivationRuleList' =>
			'FHIRCodePrimitive/FHIRTypeDerivationRuleList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRTypeRestfulInteractionList' =>
			'FHIRCodePrimitive/FHIRTypeRestfulInteractionList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRUDIEntryTypeList' =>
			'FHIRCodePrimitive/FHIRUDIEntryTypeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRUnitsOfTimeList' =>
			'FHIRCodePrimitive/FHIRUnitsOfTimeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRUseList' => 'FHIRCodePrimitive/FHIRUseList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRVariableTypeList' =>
			'FHIRCodePrimitive/FHIRVariableTypeList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRVConfidentialityClassificationList' =>
			'FHIRCodePrimitive/FHIRVConfidentialityClassificationList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRVisionBaseList' =>
			'FHIRCodePrimitive/FHIRVisionBaseList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRVisionEyesList' =>
			'FHIRCodePrimitive/FHIRVisionEyesList.php',
		'HL7\FHIR\R4\FHIRCodePrimitive\FHIRXPathUsageTypeList' =>
			'FHIRCodePrimitive/FHIRXPathUsageTypeList.php',
		'HL7\FHIR\R4\FHIRDatePrimitive' => 'FHIRDatePrimitive.php',
		'HL7\FHIR\R4\FHIRDateTimePrimitive' => 'FHIRDateTimePrimitive.php',
		'HL7\FHIR\R4\FHIRDecimalPrimitive' => 'FHIRDecimalPrimitive.php',
		'HL7\FHIR\R4\FHIRElement' => 'FHIRElement.php',
		'HL7\FHIR\R4\FHIRElement\FHIRAccountStatus' => 'FHIRElement/FHIRAccountStatus.php',
		'HL7\FHIR\R4\FHIRElement\FHIRActionCardinalityBehavior' =>
			'FHIRElement/FHIRActionCardinalityBehavior.php',
		'HL7\FHIR\R4\FHIRElement\FHIRActionConditionKind' =>
			'FHIRElement/FHIRActionConditionKind.php',
		'HL7\FHIR\R4\FHIRElement\FHIRActionGroupingBehavior' =>
			'FHIRElement/FHIRActionGroupingBehavior.php',
		'HL7\FHIR\R4\FHIRElement\FHIRActionParticipantType' =>
			'FHIRElement/FHIRActionParticipantType.php',
		'HL7\FHIR\R4\FHIRElement\FHIRActionPrecheckBehavior' =>
			'FHIRElement/FHIRActionPrecheckBehavior.php',
		'HL7\FHIR\R4\FHIRElement\FHIRActionRelationshipType' =>
			'FHIRElement/FHIRActionRelationshipType.php',
		'HL7\FHIR\R4\FHIRElement\FHIRActionRequiredBehavior' =>
			'FHIRElement/FHIRActionRequiredBehavior.php',
		'HL7\FHIR\R4\FHIRElement\FHIRActionSelectionBehavior' =>
			'FHIRElement/FHIRActionSelectionBehavior.php',
		'HL7\FHIR\R4\FHIRElement\FHIRAddress' => 'FHIRElement/FHIRAddress.php',
		'HL7\FHIR\R4\FHIRElement\FHIRAddressType' => 'FHIRElement/FHIRAddressType.php',
		'HL7\FHIR\R4\FHIRElement\FHIRAddressUse' => 'FHIRElement/FHIRAddressUse.php',
		'HL7\FHIR\R4\FHIRElement\FHIRAdministrativeGender' =>
			'FHIRElement/FHIRAdministrativeGender.php',
		'HL7\FHIR\R4\FHIRElement\FHIRAdverseEventActuality' =>
			'FHIRElement/FHIRAdverseEventActuality.php',
		'HL7\FHIR\R4\FHIRElement\FHIRAggregationMode' => 'FHIRElement/FHIRAggregationMode.php',
		'HL7\FHIR\R4\FHIRElement\FHIRAllergyIntoleranceCategory' =>
			'FHIRElement/FHIRAllergyIntoleranceCategory.php',
		'HL7\FHIR\R4\FHIRElement\FHIRAllergyIntoleranceCriticality' =>
			'FHIRElement/FHIRAllergyIntoleranceCriticality.php',
		'HL7\FHIR\R4\FHIRElement\FHIRAllergyIntoleranceSeverity' =>
			'FHIRElement/FHIRAllergyIntoleranceSeverity.php',
		'HL7\FHIR\R4\FHIRElement\FHIRAllergyIntoleranceType' =>
			'FHIRElement/FHIRAllergyIntoleranceType.php',
		'HL7\FHIR\R4\FHIRElement\FHIRAnnotation' => 'FHIRElement/FHIRAnnotation.php',
		'HL7\FHIR\R4\FHIRElement\FHIRAppointmentStatus' => 'FHIRElement/FHIRAppointmentStatus.php',
		'HL7\FHIR\R4\FHIRElement\FHIRAssertionDirectionType' =>
			'FHIRElement/FHIRAssertionDirectionType.php',
		'HL7\FHIR\R4\FHIRElement\FHIRAssertionOperatorType' =>
			'FHIRElement/FHIRAssertionOperatorType.php',
		'HL7\FHIR\R4\FHIRElement\FHIRAssertionResponseTypes' =>
			'FHIRElement/FHIRAssertionResponseTypes.php',
		'HL7\FHIR\R4\FHIRElement\FHIRAttachment' => 'FHIRElement/FHIRAttachment.php',
		'HL7\FHIR\R4\FHIRElement\FHIRAuditEventAction' => 'FHIRElement/FHIRAuditEventAction.php',
		'HL7\FHIR\R4\FHIRElement\FHIRAuditEventAgentNetworkType' =>
			'FHIRElement/FHIRAuditEventAgentNetworkType.php',
		'HL7\FHIR\R4\FHIRElement\FHIRAuditEventOutcome' => 'FHIRElement/FHIRAuditEventOutcome.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement' => 'FHIRElement/FHIRBackboneElement.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRAccount\FHIRAccountCoverage' =>
			'FHIRElement/FHIRBackboneElement/FHIRAccount/FHIRAccountCoverage.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRAccount\FHIRAccountGuarantor' =>
			'FHIRElement/FHIRBackboneElement/FHIRAccount/FHIRAccountGuarantor.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRActivityDefinition\FHIRActivityDefinitionDynamicValue' =>
			'FHIRElement/FHIRBackboneElement/FHIRActivityDefinition/FHIRActivityDefinitionDynamicValue.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRActivityDefinition\FHIRActivityDefinitionParticipant' =>
			'FHIRElement/FHIRBackboneElement/FHIRActivityDefinition/FHIRActivityDefinitionParticipant.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventCausality' =>
			'FHIRElement/FHIRBackboneElement/FHIRAdverseEvent/FHIRAdverseEventCausality.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity' =>
			'FHIRElement/FHIRBackboneElement/FHIRAdverseEvent/FHIRAdverseEventSuspectEntity.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction' =>
			'FHIRElement/FHIRBackboneElement/FHIRAllergyIntolerance/FHIRAllergyIntoleranceReaction.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentParticipant' =>
			'FHIRElement/FHIRBackboneElement/FHIRAppointment/FHIRAppointmentParticipant.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventAgent' =>
			'FHIRElement/FHIRBackboneElement/FHIRAuditEvent/FHIRAuditEventAgent.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventDetail' =>
			'FHIRElement/FHIRBackboneElement/FHIRAuditEvent/FHIRAuditEventDetail.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventEntity' =>
			'FHIRElement/FHIRBackboneElement/FHIRAuditEvent/FHIRAuditEventEntity.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventNetwork' =>
			'FHIRElement/FHIRBackboneElement/FHIRAuditEvent/FHIRAuditEventNetwork.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventSource' =>
			'FHIRElement/FHIRBackboneElement/FHIRAuditEvent/FHIRAuditEventSource.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductCollection' =>
			'FHIRElement/FHIRBackboneElement/FHIRBiologicallyDerivedProduct/FHIRBiologicallyDerivedProductCollection.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductManipulation' =>
			'FHIRElement/FHIRBackboneElement/FHIRBiologicallyDerivedProduct/FHIRBiologicallyDerivedProductManipulation.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductProcessing' =>
			'FHIRElement/FHIRBackboneElement/FHIRBiologicallyDerivedProduct/FHIRBiologicallyDerivedProductProcessing.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductStorage' =>
			'FHIRElement/FHIRBackboneElement/FHIRBiologicallyDerivedProduct/FHIRBiologicallyDerivedProductStorage.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry' =>
			'FHIRElement/FHIRBackboneElement/FHIRBundle/FHIRBundleEntry.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink' =>
			'FHIRElement/FHIRBackboneElement/FHIRBundle/FHIRBundleLink.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest' =>
			'FHIRElement/FHIRBackboneElement/FHIRBundle/FHIRBundleRequest.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleResponse' =>
			'FHIRElement/FHIRBackboneElement/FHIRBundle/FHIRBundleResponse.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleSearch' =>
			'FHIRElement/FHIRBackboneElement/FHIRBundle/FHIRBundleSearch.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementDocument' =>
			'FHIRElement/FHIRBackboneElement/FHIRCapabilityStatement/FHIRCapabilityStatementDocument.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementEndpoint' =>
			'FHIRElement/FHIRBackboneElement/FHIRCapabilityStatement/FHIRCapabilityStatementEndpoint.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementImplementation' =>
			'FHIRElement/FHIRBackboneElement/FHIRCapabilityStatement/FHIRCapabilityStatementImplementation.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction' =>
			'FHIRElement/FHIRBackboneElement/FHIRCapabilityStatement/FHIRCapabilityStatementInteraction.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction1' =>
			'FHIRElement/FHIRBackboneElement/FHIRCapabilityStatement/FHIRCapabilityStatementInteraction1.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementMessaging' =>
			'FHIRElement/FHIRBackboneElement/FHIRCapabilityStatement/FHIRCapabilityStatementMessaging.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementOperation' =>
			'FHIRElement/FHIRBackboneElement/FHIRCapabilityStatement/FHIRCapabilityStatementOperation.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource' =>
			'FHIRElement/FHIRBackboneElement/FHIRCapabilityStatement/FHIRCapabilityStatementResource.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementRest' =>
			'FHIRElement/FHIRBackboneElement/FHIRCapabilityStatement/FHIRCapabilityStatementRest.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSearchParam' =>
			'FHIRElement/FHIRBackboneElement/FHIRCapabilityStatement/FHIRCapabilityStatementSearchParam.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSecurity' =>
			'FHIRElement/FHIRBackboneElement/FHIRCapabilityStatement/FHIRCapabilityStatementSecurity.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSoftware' =>
			'FHIRElement/FHIRBackboneElement/FHIRCapabilityStatement/FHIRCapabilityStatementSoftware.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSupportedMessage' =>
			'FHIRElement/FHIRBackboneElement/FHIRCapabilityStatement/FHIRCapabilityStatementSupportedMessage.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity' =>
			'FHIRElement/FHIRBackboneElement/FHIRCarePlan/FHIRCarePlanActivity.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail' =>
			'FHIRElement/FHIRBackboneElement/FHIRCarePlan/FHIRCarePlanDetail.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCareTeam\FHIRCareTeamParticipant' =>
			'FHIRElement/FHIRBackboneElement/FHIRCareTeam/FHIRCareTeamParticipant.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCatalogEntry\FHIRCatalogEntryRelatedEntry' =>
			'FHIRElement/FHIRBackboneElement/FHIRCatalogEntry/FHIRCatalogEntryRelatedEntry.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionApplicability' =>
			'FHIRElement/FHIRBackboneElement/FHIRChargeItemDefinition/FHIRChargeItemDefinitionApplicability.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionPriceComponent' =>
			'FHIRElement/FHIRBackboneElement/FHIRChargeItemDefinition/FHIRChargeItemDefinitionPriceComponent.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionPropertyGroup' =>
			'FHIRElement/FHIRBackboneElement/FHIRChargeItemDefinition/FHIRChargeItemDefinitionPropertyGroup.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRChargeItem\FHIRChargeItemPerformer' =>
			'FHIRElement/FHIRBackboneElement/FHIRChargeItem/FHIRChargeItemPerformer.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAddItem' =>
			'FHIRElement/FHIRBackboneElement/FHIRClaimResponse/FHIRClaimResponseAddItem.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication' =>
			'FHIRElement/FHIRBackboneElement/FHIRClaimResponse/FHIRClaimResponseAdjudication.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail' =>
			'FHIRElement/FHIRBackboneElement/FHIRClaimResponse/FHIRClaimResponseDetail.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail1' =>
			'FHIRElement/FHIRBackboneElement/FHIRClaimResponse/FHIRClaimResponseDetail1.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError' =>
			'FHIRElement/FHIRBackboneElement/FHIRClaimResponse/FHIRClaimResponseError.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseInsurance' =>
			'FHIRElement/FHIRBackboneElement/FHIRClaimResponse/FHIRClaimResponseInsurance.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem' =>
			'FHIRElement/FHIRBackboneElement/FHIRClaimResponse/FHIRClaimResponseItem.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponsePayment' =>
			'FHIRElement/FHIRBackboneElement/FHIRClaimResponse/FHIRClaimResponsePayment.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseProcessNote' =>
			'FHIRElement/FHIRBackboneElement/FHIRClaimResponse/FHIRClaimResponseProcessNote.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseSubDetail' =>
			'FHIRElement/FHIRBackboneElement/FHIRClaimResponse/FHIRClaimResponseSubDetail.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseSubDetail1' =>
			'FHIRElement/FHIRBackboneElement/FHIRClaimResponse/FHIRClaimResponseSubDetail1.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseTotal' =>
			'FHIRElement/FHIRBackboneElement/FHIRClaimResponse/FHIRClaimResponseTotal.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimAccident' =>
			'FHIRElement/FHIRBackboneElement/FHIRClaim/FHIRClaimAccident.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimCareTeam' =>
			'FHIRElement/FHIRBackboneElement/FHIRClaim/FHIRClaimCareTeam.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDetail' =>
			'FHIRElement/FHIRBackboneElement/FHIRClaim/FHIRClaimDetail.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDiagnosis' =>
			'FHIRElement/FHIRBackboneElement/FHIRClaim/FHIRClaimDiagnosis.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimInsurance' =>
			'FHIRElement/FHIRBackboneElement/FHIRClaim/FHIRClaimInsurance.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem' =>
			'FHIRElement/FHIRBackboneElement/FHIRClaim/FHIRClaimItem.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimPayee' =>
			'FHIRElement/FHIRBackboneElement/FHIRClaim/FHIRClaimPayee.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimProcedure' =>
			'FHIRElement/FHIRBackboneElement/FHIRClaim/FHIRClaimProcedure.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimRelated' =>
			'FHIRElement/FHIRBackboneElement/FHIRClaim/FHIRClaimRelated.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimSubDetail' =>
			'FHIRElement/FHIRBackboneElement/FHIRClaim/FHIRClaimSubDetail.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimSupportingInfo' =>
			'FHIRElement/FHIRBackboneElement/FHIRClaim/FHIRClaimSupportingInfo.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionFinding' =>
			'FHIRElement/FHIRBackboneElement/FHIRClinicalImpression/FHIRClinicalImpressionFinding.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionInvestigation' =>
			'FHIRElement/FHIRBackboneElement/FHIRClinicalImpression/FHIRClinicalImpressionInvestigation.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemConcept' =>
			'FHIRElement/FHIRBackboneElement/FHIRCodeSystem/FHIRCodeSystemConcept.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemDesignation' =>
			'FHIRElement/FHIRBackboneElement/FHIRCodeSystem/FHIRCodeSystemDesignation.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemFilter' =>
			'FHIRElement/FHIRBackboneElement/FHIRCodeSystem/FHIRCodeSystemFilter.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemProperty' =>
			'FHIRElement/FHIRBackboneElement/FHIRCodeSystem/FHIRCodeSystemProperty.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemProperty1' =>
			'FHIRElement/FHIRBackboneElement/FHIRCodeSystem/FHIRCodeSystemProperty1.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCommunicationRequest\FHIRCommunicationRequestPayload' =>
			'FHIRElement/FHIRBackboneElement/FHIRCommunicationRequest/FHIRCommunicationRequestPayload.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCommunication\FHIRCommunicationPayload' =>
			'FHIRElement/FHIRBackboneElement/FHIRCommunication/FHIRCommunicationPayload.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCompartmentDefinition\FHIRCompartmentDefinitionResource' =>
			'FHIRElement/FHIRBackboneElement/FHIRCompartmentDefinition/FHIRCompartmentDefinitionResource.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionAttester' =>
			'FHIRElement/FHIRBackboneElement/FHIRComposition/FHIRCompositionAttester.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionEvent' =>
			'FHIRElement/FHIRBackboneElement/FHIRComposition/FHIRCompositionEvent.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionRelatesTo' =>
			'FHIRElement/FHIRBackboneElement/FHIRComposition/FHIRCompositionRelatesTo.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection' =>
			'FHIRElement/FHIRBackboneElement/FHIRComposition/FHIRCompositionSection.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn' =>
			'FHIRElement/FHIRBackboneElement/FHIRConceptMap/FHIRConceptMapDependsOn.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapElement' =>
			'FHIRElement/FHIRBackboneElement/FHIRConceptMap/FHIRConceptMapElement.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapGroup' =>
			'FHIRElement/FHIRBackboneElement/FHIRConceptMap/FHIRConceptMapGroup.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapTarget' =>
			'FHIRElement/FHIRBackboneElement/FHIRConceptMap/FHIRConceptMapTarget.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapUnmapped' =>
			'FHIRElement/FHIRBackboneElement/FHIRConceptMap/FHIRConceptMapUnmapped.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence' =>
			'FHIRElement/FHIRBackboneElement/FHIRCondition/FHIRConditionEvidence.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage' =>
			'FHIRElement/FHIRBackboneElement/FHIRCondition/FHIRConditionStage.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentActor' =>
			'FHIRElement/FHIRBackboneElement/FHIRConsent/FHIRConsentActor.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentData' =>
			'FHIRElement/FHIRBackboneElement/FHIRConsent/FHIRConsentData.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentPolicy' =>
			'FHIRElement/FHIRBackboneElement/FHIRConsent/FHIRConsentPolicy.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentProvision' =>
			'FHIRElement/FHIRBackboneElement/FHIRConsent/FHIRConsentProvision.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentVerification' =>
			'FHIRElement/FHIRBackboneElement/FHIRConsent/FHIRConsentVerification.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAction' =>
			'FHIRElement/FHIRBackboneElement/FHIRContract/FHIRContractAction.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAnswer' =>
			'FHIRElement/FHIRBackboneElement/FHIRContract/FHIRContractAnswer.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAsset' =>
			'FHIRElement/FHIRBackboneElement/FHIRContract/FHIRContractAsset.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractContentDefinition' =>
			'FHIRElement/FHIRBackboneElement/FHIRContract/FHIRContractContentDefinition.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractContext' =>
			'FHIRElement/FHIRBackboneElement/FHIRContract/FHIRContractContext.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractFriendly' =>
			'FHIRElement/FHIRBackboneElement/FHIRContract/FHIRContractFriendly.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractLegal' =>
			'FHIRElement/FHIRBackboneElement/FHIRContract/FHIRContractLegal.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractOffer' =>
			'FHIRElement/FHIRBackboneElement/FHIRContract/FHIRContractOffer.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractParty' =>
			'FHIRElement/FHIRBackboneElement/FHIRContract/FHIRContractParty.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractRule' =>
			'FHIRElement/FHIRBackboneElement/FHIRContract/FHIRContractRule.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractSecurityLabel' =>
			'FHIRElement/FHIRBackboneElement/FHIRContract/FHIRContractSecurityLabel.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractSigner' =>
			'FHIRElement/FHIRBackboneElement/FHIRContract/FHIRContractSigner.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractSubject' =>
			'FHIRElement/FHIRBackboneElement/FHIRContract/FHIRContractSubject.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractTerm' =>
			'FHIRElement/FHIRBackboneElement/FHIRContract/FHIRContractTerm.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractValuedItem' =>
			'FHIRElement/FHIRBackboneElement/FHIRContract/FHIRContractValuedItem.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityRequest\FHIRCoverageEligibilityRequestDiagnosis' =>
			'FHIRElement/FHIRBackboneElement/FHIRCoverageEligibilityRequest/FHIRCoverageEligibilityRequestDiagnosis.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityRequest\FHIRCoverageEligibilityRequestInsurance' =>
			'FHIRElement/FHIRBackboneElement/FHIRCoverageEligibilityRequest/FHIRCoverageEligibilityRequestInsurance.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityRequest\FHIRCoverageEligibilityRequestItem' =>
			'FHIRElement/FHIRBackboneElement/FHIRCoverageEligibilityRequest/FHIRCoverageEligibilityRequestItem.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityRequest\FHIRCoverageEligibilityRequestSupportingInfo' =>
			'FHIRElement/FHIRBackboneElement/FHIRCoverageEligibilityRequest/FHIRCoverageEligibilityRequestSupportingInfo.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseBenefit' =>
			'FHIRElement/FHIRBackboneElement/FHIRCoverageEligibilityResponse/FHIRCoverageEligibilityResponseBenefit.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseError' =>
			'FHIRElement/FHIRBackboneElement/FHIRCoverageEligibilityResponse/FHIRCoverageEligibilityResponseError.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseInsurance' =>
			'FHIRElement/FHIRBackboneElement/FHIRCoverageEligibilityResponse/FHIRCoverageEligibilityResponseInsurance.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseItem' =>
			'FHIRElement/FHIRBackboneElement/FHIRCoverageEligibilityResponse/FHIRCoverageEligibilityResponseItem.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageClass' =>
			'FHIRElement/FHIRBackboneElement/FHIRCoverage/FHIRCoverageClass.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageCostToBeneficiary' =>
			'FHIRElement/FHIRBackboneElement/FHIRCoverage/FHIRCoverageCostToBeneficiary.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageException' =>
			'FHIRElement/FHIRBackboneElement/FHIRCoverage/FHIRCoverageException.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueEvidence' =>
			'FHIRElement/FHIRBackboneElement/FHIRDetectedIssue/FHIRDetectedIssueEvidence.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueMitigation' =>
			'FHIRElement/FHIRBackboneElement/FHIRDetectedIssue/FHIRDetectedIssueMitigation.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionCapability' =>
			'FHIRElement/FHIRBackboneElement/FHIRDeviceDefinition/FHIRDeviceDefinitionCapability.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionDeviceName' =>
			'FHIRElement/FHIRBackboneElement/FHIRDeviceDefinition/FHIRDeviceDefinitionDeviceName.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionMaterial' =>
			'FHIRElement/FHIRBackboneElement/FHIRDeviceDefinition/FHIRDeviceDefinitionMaterial.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionProperty' =>
			'FHIRElement/FHIRBackboneElement/FHIRDeviceDefinition/FHIRDeviceDefinitionProperty.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionSpecialization' =>
			'FHIRElement/FHIRBackboneElement/FHIRDeviceDefinition/FHIRDeviceDefinitionSpecialization.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionUdiDeviceIdentifier' =>
			'FHIRElement/FHIRBackboneElement/FHIRDeviceDefinition/FHIRDeviceDefinitionUdiDeviceIdentifier.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRDeviceMetric\FHIRDeviceMetricCalibration' =>
			'FHIRElement/FHIRBackboneElement/FHIRDeviceMetric/FHIRDeviceMetricCalibration.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRDeviceRequest\FHIRDeviceRequestParameter' =>
			'FHIRElement/FHIRBackboneElement/FHIRDeviceRequest/FHIRDeviceRequestParameter.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceDeviceName' =>
			'FHIRElement/FHIRBackboneElement/FHIRDevice/FHIRDeviceDeviceName.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceProperty' =>
			'FHIRElement/FHIRBackboneElement/FHIRDevice/FHIRDeviceProperty.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceSpecialization' =>
			'FHIRElement/FHIRBackboneElement/FHIRDevice/FHIRDeviceSpecialization.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdiCarrier' =>
			'FHIRElement/FHIRBackboneElement/FHIRDevice/FHIRDeviceUdiCarrier.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceVersion' =>
			'FHIRElement/FHIRBackboneElement/FHIRDevice/FHIRDeviceVersion.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportMedia' =>
			'FHIRElement/FHIRBackboneElement/FHIRDiagnosticReport/FHIRDiagnosticReportMedia.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRDocumentManifest\FHIRDocumentManifestRelated' =>
			'FHIRElement/FHIRBackboneElement/FHIRDocumentManifest/FHIRDocumentManifestRelated.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContent' =>
			'FHIRElement/FHIRBackboneElement/FHIRDocumentReference/FHIRDocumentReferenceContent.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContext' =>
			'FHIRElement/FHIRBackboneElement/FHIRDocumentReference/FHIRDocumentReferenceContext.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo' =>
			'FHIRElement/FHIRBackboneElement/FHIRDocumentReference/FHIRDocumentReferenceRelatesTo.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRDosage' =>
			'FHIRElement/FHIRBackboneElement/FHIRDosage.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRDosage\FHIRDosageDoseAndRate' =>
			'FHIRElement/FHIRBackboneElement/FHIRDosage/FHIRDosageDoseAndRate.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIREffectEvidenceSynthesis\FHIREffectEvidenceSynthesisCertainty' =>
			'FHIRElement/FHIRBackboneElement/FHIREffectEvidenceSynthesis/FHIREffectEvidenceSynthesisCertainty.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIREffectEvidenceSynthesis\FHIREffectEvidenceSynthesisCertaintySubcomponent' =>
			'FHIRElement/FHIRBackboneElement/FHIREffectEvidenceSynthesis/FHIREffectEvidenceSynthesisCertaintySubcomponent.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIREffectEvidenceSynthesis\FHIREffectEvidenceSynthesisEffectEstimate' =>
			'FHIRElement/FHIRBackboneElement/FHIREffectEvidenceSynthesis/FHIREffectEvidenceSynthesisEffectEstimate.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIREffectEvidenceSynthesis\FHIREffectEvidenceSynthesisPrecisionEstimate' =>
			'FHIRElement/FHIRBackboneElement/FHIREffectEvidenceSynthesis/FHIREffectEvidenceSynthesisPrecisionEstimate.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIREffectEvidenceSynthesis\FHIREffectEvidenceSynthesisResultsByExposure' =>
			'FHIRElement/FHIRBackboneElement/FHIREffectEvidenceSynthesis/FHIREffectEvidenceSynthesisResultsByExposure.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIREffectEvidenceSynthesis\FHIREffectEvidenceSynthesisSampleSize' =>
			'FHIRElement/FHIRBackboneElement/FHIREffectEvidenceSynthesis/FHIREffectEvidenceSynthesisSampleSize.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition' =>
			'FHIRElement/FHIRBackboneElement/FHIRElementDefinition.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionBase' =>
			'FHIRElement/FHIRBackboneElement/FHIRElementDefinition/FHIRElementDefinitionBase.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionBinding' =>
			'FHIRElement/FHIRBackboneElement/FHIRElementDefinition/FHIRElementDefinitionBinding.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionConstraint' =>
			'FHIRElement/FHIRBackboneElement/FHIRElementDefinition/FHIRElementDefinitionConstraint.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionDiscriminator' =>
			'FHIRElement/FHIRBackboneElement/FHIRElementDefinition/FHIRElementDefinitionDiscriminator.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionExample' =>
			'FHIRElement/FHIRBackboneElement/FHIRElementDefinition/FHIRElementDefinitionExample.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionMapping' =>
			'FHIRElement/FHIRBackboneElement/FHIRElementDefinition/FHIRElementDefinitionMapping.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionSlicing' =>
			'FHIRElement/FHIRBackboneElement/FHIRElementDefinition/FHIRElementDefinitionSlicing.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionType' =>
			'FHIRElement/FHIRBackboneElement/FHIRElementDefinition/FHIRElementDefinitionType.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterClassHistory' =>
			'FHIRElement/FHIRBackboneElement/FHIREncounter/FHIREncounterClassHistory.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterDiagnosis' =>
			'FHIRElement/FHIRBackboneElement/FHIREncounter/FHIREncounterDiagnosis.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization' =>
			'FHIRElement/FHIRBackboneElement/FHIREncounter/FHIREncounterHospitalization.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterLocation' =>
			'FHIRElement/FHIRBackboneElement/FHIREncounter/FHIREncounterLocation.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterParticipant' =>
			'FHIRElement/FHIRBackboneElement/FHIREncounter/FHIREncounterParticipant.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterStatusHistory' =>
			'FHIRElement/FHIRBackboneElement/FHIREncounter/FHIREncounterStatusHistory.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIREpisodeOfCare\FHIREpisodeOfCareDiagnosis' =>
			'FHIRElement/FHIRBackboneElement/FHIREpisodeOfCare/FHIREpisodeOfCareDiagnosis.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIREpisodeOfCare\FHIREpisodeOfCareStatusHistory' =>
			'FHIRElement/FHIRBackboneElement/FHIREpisodeOfCare/FHIREpisodeOfCareStatusHistory.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableCharacteristic' =>
			'FHIRElement/FHIRBackboneElement/FHIREvidenceVariable/FHIREvidenceVariableCharacteristic.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioActor' =>
			'FHIRElement/FHIRBackboneElement/FHIRExampleScenario/FHIRExampleScenarioActor.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioAlternative' =>
			'FHIRElement/FHIRBackboneElement/FHIRExampleScenario/FHIRExampleScenarioAlternative.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioContainedInstance' =>
			'FHIRElement/FHIRBackboneElement/FHIRExampleScenario/FHIRExampleScenarioContainedInstance.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioInstance' =>
			'FHIRElement/FHIRBackboneElement/FHIRExampleScenario/FHIRExampleScenarioInstance.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioOperation' =>
			'FHIRElement/FHIRBackboneElement/FHIRExampleScenario/FHIRExampleScenarioOperation.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioProcess' =>
			'FHIRElement/FHIRBackboneElement/FHIRExampleScenario/FHIRExampleScenarioProcess.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioStep' =>
			'FHIRElement/FHIRBackboneElement/FHIRExampleScenario/FHIRExampleScenarioStep.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioVersion' =>
			'FHIRElement/FHIRBackboneElement/FHIRExampleScenario/FHIRExampleScenarioVersion.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAccident' =>
			'FHIRElement/FHIRBackboneElement/FHIRExplanationOfBenefit/FHIRExplanationOfBenefitAccident.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAddItem' =>
			'FHIRElement/FHIRBackboneElement/FHIRExplanationOfBenefit/FHIRExplanationOfBenefitAddItem.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAdjudication' =>
			'FHIRElement/FHIRBackboneElement/FHIRExplanationOfBenefit/FHIRExplanationOfBenefitAdjudication.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitBenefitBalance' =>
			'FHIRElement/FHIRBackboneElement/FHIRExplanationOfBenefit/FHIRExplanationOfBenefitBenefitBalance.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitCareTeam' =>
			'FHIRElement/FHIRBackboneElement/FHIRExplanationOfBenefit/FHIRExplanationOfBenefitCareTeam.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDetail' =>
			'FHIRElement/FHIRBackboneElement/FHIRExplanationOfBenefit/FHIRExplanationOfBenefitDetail.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDetail1' =>
			'FHIRElement/FHIRBackboneElement/FHIRExplanationOfBenefit/FHIRExplanationOfBenefitDetail1.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDiagnosis' =>
			'FHIRElement/FHIRBackboneElement/FHIRExplanationOfBenefit/FHIRExplanationOfBenefitDiagnosis.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitFinancial' =>
			'FHIRElement/FHIRBackboneElement/FHIRExplanationOfBenefit/FHIRExplanationOfBenefitFinancial.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitInsurance' =>
			'FHIRElement/FHIRBackboneElement/FHIRExplanationOfBenefit/FHIRExplanationOfBenefitInsurance.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitItem' =>
			'FHIRElement/FHIRBackboneElement/FHIRExplanationOfBenefit/FHIRExplanationOfBenefitItem.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayee' =>
			'FHIRElement/FHIRBackboneElement/FHIRExplanationOfBenefit/FHIRExplanationOfBenefitPayee.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayment' =>
			'FHIRElement/FHIRBackboneElement/FHIRExplanationOfBenefit/FHIRExplanationOfBenefitPayment.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcedure' =>
			'FHIRElement/FHIRBackboneElement/FHIRExplanationOfBenefit/FHIRExplanationOfBenefitProcedure.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcessNote' =>
			'FHIRElement/FHIRBackboneElement/FHIRExplanationOfBenefit/FHIRExplanationOfBenefitProcessNote.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitRelated' =>
			'FHIRElement/FHIRBackboneElement/FHIRExplanationOfBenefit/FHIRExplanationOfBenefitRelated.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitSubDetail' =>
			'FHIRElement/FHIRBackboneElement/FHIRExplanationOfBenefit/FHIRExplanationOfBenefitSubDetail.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitSubDetail1' =>
			'FHIRElement/FHIRBackboneElement/FHIRExplanationOfBenefit/FHIRExplanationOfBenefitSubDetail1.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitSupportingInfo' =>
			'FHIRElement/FHIRBackboneElement/FHIRExplanationOfBenefit/FHIRExplanationOfBenefitSupportingInfo.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitTotal' =>
			'FHIRElement/FHIRBackboneElement/FHIRExplanationOfBenefit/FHIRExplanationOfBenefitTotal.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition' =>
			'FHIRElement/FHIRBackboneElement/FHIRFamilyMemberHistory/FHIRFamilyMemberHistoryCondition.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRGoal\FHIRGoalTarget' =>
			'FHIRElement/FHIRBackboneElement/FHIRGoal/FHIRGoalTarget.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionCompartment' =>
			'FHIRElement/FHIRBackboneElement/FHIRGraphDefinition/FHIRGraphDefinitionCompartment.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionLink' =>
			'FHIRElement/FHIRBackboneElement/FHIRGraphDefinition/FHIRGraphDefinitionLink.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionTarget' =>
			'FHIRElement/FHIRBackboneElement/FHIRGraphDefinition/FHIRGraphDefinitionTarget.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupCharacteristic' =>
			'FHIRElement/FHIRBackboneElement/FHIRGroup/FHIRGroupCharacteristic.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupMember' =>
			'FHIRElement/FHIRBackboneElement/FHIRGroup/FHIRGroupMember.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceAvailableTime' =>
			'FHIRElement/FHIRBackboneElement/FHIRHealthcareService/FHIRHealthcareServiceAvailableTime.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceEligibility' =>
			'FHIRElement/FHIRBackboneElement/FHIRHealthcareService/FHIRHealthcareServiceEligibility.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceNotAvailable' =>
			'FHIRElement/FHIRBackboneElement/FHIRHealthcareService/FHIRHealthcareServiceNotAvailable.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudyInstance' =>
			'FHIRElement/FHIRBackboneElement/FHIRImagingStudy/FHIRImagingStudyInstance.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudyPerformer' =>
			'FHIRElement/FHIRBackboneElement/FHIRImagingStudy/FHIRImagingStudyPerformer.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries' =>
			'FHIRElement/FHIRBackboneElement/FHIRImagingStudy/FHIRImagingStudySeries.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion' =>
			'FHIRElement/FHIRBackboneElement/FHIRImmunizationRecommendation/FHIRImmunizationRecommendationDateCriterion.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation' =>
			'FHIRElement/FHIRBackboneElement/FHIRImmunizationRecommendation/FHIRImmunizationRecommendationRecommendation.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationEducation' =>
			'FHIRElement/FHIRBackboneElement/FHIRImmunization/FHIRImmunizationEducation.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationPerformer' =>
			'FHIRElement/FHIRBackboneElement/FHIRImmunization/FHIRImmunizationPerformer.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationProtocolApplied' =>
			'FHIRElement/FHIRBackboneElement/FHIRImmunization/FHIRImmunizationProtocolApplied.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction' =>
			'FHIRElement/FHIRBackboneElement/FHIRImmunization/FHIRImmunizationReaction.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideDefinition' =>
			'FHIRElement/FHIRBackboneElement/FHIRImplementationGuide/FHIRImplementationGuideDefinition.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideDependsOn' =>
			'FHIRElement/FHIRBackboneElement/FHIRImplementationGuide/FHIRImplementationGuideDependsOn.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideGlobal' =>
			'FHIRElement/FHIRBackboneElement/FHIRImplementationGuide/FHIRImplementationGuideGlobal.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideGrouping' =>
			'FHIRElement/FHIRBackboneElement/FHIRImplementationGuide/FHIRImplementationGuideGrouping.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideManifest' =>
			'FHIRElement/FHIRBackboneElement/FHIRImplementationGuide/FHIRImplementationGuideManifest.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage' =>
			'FHIRElement/FHIRBackboneElement/FHIRImplementationGuide/FHIRImplementationGuidePage.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage1' =>
			'FHIRElement/FHIRBackboneElement/FHIRImplementationGuide/FHIRImplementationGuidePage1.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideParameter' =>
			'FHIRElement/FHIRBackboneElement/FHIRImplementationGuide/FHIRImplementationGuideParameter.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource' =>
			'FHIRElement/FHIRBackboneElement/FHIRImplementationGuide/FHIRImplementationGuideResource.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource1' =>
			'FHIRElement/FHIRBackboneElement/FHIRImplementationGuide/FHIRImplementationGuideResource1.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideTemplate' =>
			'FHIRElement/FHIRBackboneElement/FHIRImplementationGuide/FHIRImplementationGuideTemplate.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanBenefit' =>
			'FHIRElement/FHIRBackboneElement/FHIRInsurancePlan/FHIRInsurancePlanBenefit.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanBenefit1' =>
			'FHIRElement/FHIRBackboneElement/FHIRInsurancePlan/FHIRInsurancePlanBenefit1.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanContact' =>
			'FHIRElement/FHIRBackboneElement/FHIRInsurancePlan/FHIRInsurancePlanContact.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanCost' =>
			'FHIRElement/FHIRBackboneElement/FHIRInsurancePlan/FHIRInsurancePlanCost.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanCoverage' =>
			'FHIRElement/FHIRBackboneElement/FHIRInsurancePlan/FHIRInsurancePlanCoverage.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanGeneralCost' =>
			'FHIRElement/FHIRBackboneElement/FHIRInsurancePlan/FHIRInsurancePlanGeneralCost.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanLimit' =>
			'FHIRElement/FHIRBackboneElement/FHIRInsurancePlan/FHIRInsurancePlanLimit.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanPlan' =>
			'FHIRElement/FHIRBackboneElement/FHIRInsurancePlan/FHIRInsurancePlanPlan.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanSpecificCost' =>
			'FHIRElement/FHIRBackboneElement/FHIRInsurancePlan/FHIRInsurancePlanSpecificCost.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoiceLineItem' =>
			'FHIRElement/FHIRBackboneElement/FHIRInvoice/FHIRInvoiceLineItem.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoiceParticipant' =>
			'FHIRElement/FHIRBackboneElement/FHIRInvoice/FHIRInvoiceParticipant.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoicePriceComponent' =>
			'FHIRElement/FHIRBackboneElement/FHIRInvoice/FHIRInvoicePriceComponent.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRLinkage\FHIRLinkageItem' =>
			'FHIRElement/FHIRBackboneElement/FHIRLinkage/FHIRLinkageItem.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRList\FHIRListEntry' =>
			'FHIRElement/FHIRBackboneElement/FHIRList/FHIRListEntry.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationHoursOfOperation' =>
			'FHIRElement/FHIRBackboneElement/FHIRLocation/FHIRLocationHoursOfOperation.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationPosition' =>
			'FHIRElement/FHIRBackboneElement/FHIRLocation/FHIRLocationPosition.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMarketingStatus' =>
			'FHIRElement/FHIRBackboneElement/FHIRMarketingStatus.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportComponent' =>
			'FHIRElement/FHIRBackboneElement/FHIRMeasureReport/FHIRMeasureReportComponent.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportGroup' =>
			'FHIRElement/FHIRBackboneElement/FHIRMeasureReport/FHIRMeasureReportGroup.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportPopulation' =>
			'FHIRElement/FHIRBackboneElement/FHIRMeasureReport/FHIRMeasureReportPopulation.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportPopulation1' =>
			'FHIRElement/FHIRBackboneElement/FHIRMeasureReport/FHIRMeasureReportPopulation1.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportStratifier' =>
			'FHIRElement/FHIRBackboneElement/FHIRMeasureReport/FHIRMeasureReportStratifier.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportStratum' =>
			'FHIRElement/FHIRBackboneElement/FHIRMeasureReport/FHIRMeasureReportStratum.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureComponent' =>
			'FHIRElement/FHIRBackboneElement/FHIRMeasure/FHIRMeasureComponent.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureGroup' =>
			'FHIRElement/FHIRBackboneElement/FHIRMeasure/FHIRMeasureGroup.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasurePopulation' =>
			'FHIRElement/FHIRBackboneElement/FHIRMeasure/FHIRMeasurePopulation.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureStratifier' =>
			'FHIRElement/FHIRBackboneElement/FHIRMeasure/FHIRMeasureStratifier.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureSupplementalData' =>
			'FHIRElement/FHIRBackboneElement/FHIRMeasure/FHIRMeasureSupplementalData.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage' =>
			'FHIRElement/FHIRBackboneElement/FHIRMedicationAdministration/FHIRMedicationAdministrationDosage.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationPerformer' =>
			'FHIRElement/FHIRBackboneElement/FHIRMedicationAdministration/FHIRMedicationAdministrationPerformer.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispensePerformer' =>
			'FHIRElement/FHIRBackboneElement/FHIRMedicationDispense/FHIRMedicationDispensePerformer.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseSubstitution' =>
			'FHIRElement/FHIRBackboneElement/FHIRMedicationDispense/FHIRMedicationDispenseSubstitution.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeAdministrationGuidelines' =>
			'FHIRElement/FHIRBackboneElement/FHIRMedicationKnowledge/FHIRMedicationKnowledgeAdministrationGuidelines.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeCost' =>
			'FHIRElement/FHIRBackboneElement/FHIRMedicationKnowledge/FHIRMedicationKnowledgeCost.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDosage' =>
			'FHIRElement/FHIRBackboneElement/FHIRMedicationKnowledge/FHIRMedicationKnowledgeDosage.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDrugCharacteristic' =>
			'FHIRElement/FHIRBackboneElement/FHIRMedicationKnowledge/FHIRMedicationKnowledgeDrugCharacteristic.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeIngredient' =>
			'FHIRElement/FHIRBackboneElement/FHIRMedicationKnowledge/FHIRMedicationKnowledgeIngredient.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeKinetics' =>
			'FHIRElement/FHIRBackboneElement/FHIRMedicationKnowledge/FHIRMedicationKnowledgeKinetics.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMaxDispense' =>
			'FHIRElement/FHIRBackboneElement/FHIRMedicationKnowledge/FHIRMedicationKnowledgeMaxDispense.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMedicineClassification' =>
			'FHIRElement/FHIRBackboneElement/FHIRMedicationKnowledge/FHIRMedicationKnowledgeMedicineClassification.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonitoringProgram' =>
			'FHIRElement/FHIRBackboneElement/FHIRMedicationKnowledge/FHIRMedicationKnowledgeMonitoringProgram.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonograph' =>
			'FHIRElement/FHIRBackboneElement/FHIRMedicationKnowledge/FHIRMedicationKnowledgeMonograph.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePackaging' =>
			'FHIRElement/FHIRBackboneElement/FHIRMedicationKnowledge/FHIRMedicationKnowledgePackaging.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePatientCharacteristics' =>
			'FHIRElement/FHIRBackboneElement/FHIRMedicationKnowledge/FHIRMedicationKnowledgePatientCharacteristics.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRegulatory' =>
			'FHIRElement/FHIRBackboneElement/FHIRMedicationKnowledge/FHIRMedicationKnowledgeRegulatory.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRelatedMedicationKnowledge' =>
			'FHIRElement/FHIRBackboneElement/FHIRMedicationKnowledge/FHIRMedicationKnowledgeRelatedMedicationKnowledge.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeSchedule' =>
			'FHIRElement/FHIRBackboneElement/FHIRMedicationKnowledge/FHIRMedicationKnowledgeSchedule.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeSubstitution' =>
			'FHIRElement/FHIRBackboneElement/FHIRMedicationKnowledge/FHIRMedicationKnowledgeSubstitution.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationRequest\FHIRMedicationRequestDispenseRequest' =>
			'FHIRElement/FHIRBackboneElement/FHIRMedicationRequest/FHIRMedicationRequestDispenseRequest.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationRequest\FHIRMedicationRequestInitialFill' =>
			'FHIRElement/FHIRBackboneElement/FHIRMedicationRequest/FHIRMedicationRequestInitialFill.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationRequest\FHIRMedicationRequestSubstitution' =>
			'FHIRElement/FHIRBackboneElement/FHIRMedicationRequest/FHIRMedicationRequestSubstitution.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationBatch' =>
			'FHIRElement/FHIRBackboneElement/FHIRMedication/FHIRMedicationBatch.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationIngredient' =>
			'FHIRElement/FHIRBackboneElement/FHIRMedication/FHIRMedicationIngredient.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductAuthorization\FHIRMedicinalProductAuthorizationJurisdictionalAuthorization' =>
			'FHIRElement/FHIRBackboneElement/FHIRMedicinalProductAuthorization/FHIRMedicinalProductAuthorizationJurisdictionalAuthorization.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductAuthorization\FHIRMedicinalProductAuthorizationProcedure' =>
			'FHIRElement/FHIRBackboneElement/FHIRMedicinalProductAuthorization/FHIRMedicinalProductAuthorizationProcedure.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductContraindication\FHIRMedicinalProductContraindicationOtherTherapy' =>
			'FHIRElement/FHIRBackboneElement/FHIRMedicinalProductContraindication/FHIRMedicinalProductContraindicationOtherTherapy.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIndication\FHIRMedicinalProductIndicationOtherTherapy' =>
			'FHIRElement/FHIRBackboneElement/FHIRMedicinalProductIndication/FHIRMedicinalProductIndicationOtherTherapy.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientReferenceStrength' =>
			'FHIRElement/FHIRBackboneElement/FHIRMedicinalProductIngredient/FHIRMedicinalProductIngredientReferenceStrength.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientSpecifiedSubstance' =>
			'FHIRElement/FHIRBackboneElement/FHIRMedicinalProductIngredient/FHIRMedicinalProductIngredientSpecifiedSubstance.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientStrength' =>
			'FHIRElement/FHIRBackboneElement/FHIRMedicinalProductIngredient/FHIRMedicinalProductIngredientStrength.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIngredient\FHIRMedicinalProductIngredientSubstance' =>
			'FHIRElement/FHIRBackboneElement/FHIRMedicinalProductIngredient/FHIRMedicinalProductIngredientSubstance.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductInteraction\FHIRMedicinalProductInteractionInteractant' =>
			'FHIRElement/FHIRBackboneElement/FHIRMedicinalProductInteraction/FHIRMedicinalProductInteractionInteractant.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPackaged\FHIRMedicinalProductPackagedBatchIdentifier' =>
			'FHIRElement/FHIRBackboneElement/FHIRMedicinalProductPackaged/FHIRMedicinalProductPackagedBatchIdentifier.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPackaged\FHIRMedicinalProductPackagedPackageItem' =>
			'FHIRElement/FHIRBackboneElement/FHIRMedicinalProductPackaged/FHIRMedicinalProductPackagedPackageItem.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalCharacteristics' =>
			'FHIRElement/FHIRBackboneElement/FHIRMedicinalProductPharmaceutical/FHIRMedicinalProductPharmaceuticalCharacteristics.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalRouteOfAdministration' =>
			'FHIRElement/FHIRBackboneElement/FHIRMedicinalProductPharmaceutical/FHIRMedicinalProductPharmaceuticalRouteOfAdministration.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalTargetSpecies' =>
			'FHIRElement/FHIRBackboneElement/FHIRMedicinalProductPharmaceutical/FHIRMedicinalProductPharmaceuticalTargetSpecies.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductPharmaceutical\FHIRMedicinalProductPharmaceuticalWithdrawalPeriod' =>
			'FHIRElement/FHIRBackboneElement/FHIRMedicinalProductPharmaceutical/FHIRMedicinalProductPharmaceuticalWithdrawalPeriod.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductCountryLanguage' =>
			'FHIRElement/FHIRBackboneElement/FHIRMedicinalProduct/FHIRMedicinalProductCountryLanguage.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductManufacturingBusinessOperation' =>
			'FHIRElement/FHIRBackboneElement/FHIRMedicinalProduct/FHIRMedicinalProductManufacturingBusinessOperation.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductName' =>
			'FHIRElement/FHIRBackboneElement/FHIRMedicinalProduct/FHIRMedicinalProductName.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductNamePart' =>
			'FHIRElement/FHIRBackboneElement/FHIRMedicinalProduct/FHIRMedicinalProductNamePart.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductSpecialDesignation' =>
			'FHIRElement/FHIRBackboneElement/FHIRMedicinalProduct/FHIRMedicinalProductSpecialDesignation.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMessageDefinition\FHIRMessageDefinitionAllowedResponse' =>
			'FHIRElement/FHIRBackboneElement/FHIRMessageDefinition/FHIRMessageDefinitionAllowedResponse.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMessageDefinition\FHIRMessageDefinitionFocus' =>
			'FHIRElement/FHIRBackboneElement/FHIRMessageDefinition/FHIRMessageDefinitionFocus.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderDestination' =>
			'FHIRElement/FHIRBackboneElement/FHIRMessageHeader/FHIRMessageHeaderDestination.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderResponse' =>
			'FHIRElement/FHIRBackboneElement/FHIRMessageHeader/FHIRMessageHeaderResponse.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderSource' =>
			'FHIRElement/FHIRBackboneElement/FHIRMessageHeader/FHIRMessageHeaderSource.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceInner' =>
			'FHIRElement/FHIRBackboneElement/FHIRMolecularSequence/FHIRMolecularSequenceInner.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceOuter' =>
			'FHIRElement/FHIRBackboneElement/FHIRMolecularSequence/FHIRMolecularSequenceOuter.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceQuality' =>
			'FHIRElement/FHIRBackboneElement/FHIRMolecularSequence/FHIRMolecularSequenceQuality.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceReferenceSeq' =>
			'FHIRElement/FHIRBackboneElement/FHIRMolecularSequence/FHIRMolecularSequenceReferenceSeq.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRepository' =>
			'FHIRElement/FHIRBackboneElement/FHIRMolecularSequence/FHIRMolecularSequenceRepository.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRoc' =>
			'FHIRElement/FHIRBackboneElement/FHIRMolecularSequence/FHIRMolecularSequenceRoc.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceStructureVariant' =>
			'FHIRElement/FHIRBackboneElement/FHIRMolecularSequence/FHIRMolecularSequenceStructureVariant.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceVariant' =>
			'FHIRElement/FHIRBackboneElement/FHIRMolecularSequence/FHIRMolecularSequenceVariant.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRNamingSystem\FHIRNamingSystemUniqueId' =>
			'FHIRElement/FHIRBackboneElement/FHIRNamingSystem/FHIRNamingSystemUniqueId.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderAdministration' =>
			'FHIRElement/FHIRBackboneElement/FHIRNutritionOrder/FHIRNutritionOrderAdministration.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderEnteralFormula' =>
			'FHIRElement/FHIRBackboneElement/FHIRNutritionOrder/FHIRNutritionOrderEnteralFormula.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderNutrient' =>
			'FHIRElement/FHIRBackboneElement/FHIRNutritionOrder/FHIRNutritionOrderNutrient.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderOralDiet' =>
			'FHIRElement/FHIRBackboneElement/FHIRNutritionOrder/FHIRNutritionOrderOralDiet.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderSupplement' =>
			'FHIRElement/FHIRBackboneElement/FHIRNutritionOrder/FHIRNutritionOrderSupplement.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderTexture' =>
			'FHIRElement/FHIRBackboneElement/FHIRNutritionOrder/FHIRNutritionOrderTexture.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedInterval' =>
			'FHIRElement/FHIRBackboneElement/FHIRObservationDefinition/FHIRObservationDefinitionQualifiedInterval.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQuantitativeDetails' =>
			'FHIRElement/FHIRBackboneElement/FHIRObservationDefinition/FHIRObservationDefinitionQuantitativeDetails.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationComponent' =>
			'FHIRElement/FHIRBackboneElement/FHIRObservation/FHIRObservationComponent.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationReferenceRange' =>
			'FHIRElement/FHIRBackboneElement/FHIRObservation/FHIRObservationReferenceRange.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionBinding' =>
			'FHIRElement/FHIRBackboneElement/FHIROperationDefinition/FHIROperationDefinitionBinding.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionOverload' =>
			'FHIRElement/FHIRBackboneElement/FHIROperationDefinition/FHIROperationDefinitionOverload.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter' =>
			'FHIRElement/FHIRBackboneElement/FHIROperationDefinition/FHIROperationDefinitionParameter.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionReferencedFrom' =>
			'FHIRElement/FHIRBackboneElement/FHIROperationDefinition/FHIROperationDefinitionReferencedFrom.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIROperationOutcome\FHIROperationOutcomeIssue' =>
			'FHIRElement/FHIRBackboneElement/FHIROperationOutcome/FHIROperationOutcomeIssue.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIROrganization\FHIROrganizationContact' =>
			'FHIRElement/FHIRBackboneElement/FHIROrganization/FHIROrganizationContact.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter' =>
			'FHIRElement/FHIRBackboneElement/FHIRParameters/FHIRParametersParameter.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientCommunication' =>
			'FHIRElement/FHIRBackboneElement/FHIRPatient/FHIRPatientCommunication.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientContact' =>
			'FHIRElement/FHIRBackboneElement/FHIRPatient/FHIRPatientContact.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientLink' =>
			'FHIRElement/FHIRBackboneElement/FHIRPatient/FHIRPatientLink.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRPaymentReconciliation\FHIRPaymentReconciliationDetail' =>
			'FHIRElement/FHIRBackboneElement/FHIRPaymentReconciliation/FHIRPaymentReconciliationDetail.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRPaymentReconciliation\FHIRPaymentReconciliationProcessNote' =>
			'FHIRElement/FHIRBackboneElement/FHIRPaymentReconciliation/FHIRPaymentReconciliationProcessNote.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRPerson\FHIRPersonLink' =>
			'FHIRElement/FHIRBackboneElement/FHIRPerson/FHIRPersonLink.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction' =>
			'FHIRElement/FHIRBackboneElement/FHIRPlanDefinition/FHIRPlanDefinitionAction.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionCondition' =>
			'FHIRElement/FHIRBackboneElement/FHIRPlanDefinition/FHIRPlanDefinitionCondition.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionDynamicValue' =>
			'FHIRElement/FHIRBackboneElement/FHIRPlanDefinition/FHIRPlanDefinitionDynamicValue.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionGoal' =>
			'FHIRElement/FHIRBackboneElement/FHIRPlanDefinition/FHIRPlanDefinitionGoal.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionParticipant' =>
			'FHIRElement/FHIRBackboneElement/FHIRPlanDefinition/FHIRPlanDefinitionParticipant.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionRelatedAction' =>
			'FHIRElement/FHIRBackboneElement/FHIRPlanDefinition/FHIRPlanDefinitionRelatedAction.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionTarget' =>
			'FHIRElement/FHIRBackboneElement/FHIRPlanDefinition/FHIRPlanDefinitionTarget.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRPopulation' =>
			'FHIRElement/FHIRBackboneElement/FHIRPopulation.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRPractitionerRole\FHIRPractitionerRoleAvailableTime' =>
			'FHIRElement/FHIRBackboneElement/FHIRPractitionerRole/FHIRPractitionerRoleAvailableTime.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRPractitionerRole\FHIRPractitionerRoleNotAvailable' =>
			'FHIRElement/FHIRBackboneElement/FHIRPractitionerRole/FHIRPractitionerRoleNotAvailable.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRPractitioner\FHIRPractitionerQualification' =>
			'FHIRElement/FHIRBackboneElement/FHIRPractitioner/FHIRPractitionerQualification.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedureFocalDevice' =>
			'FHIRElement/FHIRBackboneElement/FHIRProcedure/FHIRProcedureFocalDevice.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedurePerformer' =>
			'FHIRElement/FHIRBackboneElement/FHIRProcedure/FHIRProcedurePerformer.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRProdCharacteristic' =>
			'FHIRElement/FHIRBackboneElement/FHIRProdCharacteristic.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRProductShelfLife' =>
			'FHIRElement/FHIRBackboneElement/FHIRProductShelfLife.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent' =>
			'FHIRElement/FHIRBackboneElement/FHIRProvenance/FHIRProvenanceAgent.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity' =>
			'FHIRElement/FHIRBackboneElement/FHIRProvenance/FHIRProvenanceEntity.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseAnswer' =>
			'FHIRElement/FHIRBackboneElement/FHIRQuestionnaireResponse/FHIRQuestionnaireResponseAnswer.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseItem' =>
			'FHIRElement/FHIRBackboneElement/FHIRQuestionnaireResponse/FHIRQuestionnaireResponseItem.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireAnswerOption' =>
			'FHIRElement/FHIRBackboneElement/FHIRQuestionnaire/FHIRQuestionnaireAnswerOption.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen' =>
			'FHIRElement/FHIRBackboneElement/FHIRQuestionnaire/FHIRQuestionnaireEnableWhen.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireInitial' =>
			'FHIRElement/FHIRBackboneElement/FHIRQuestionnaire/FHIRQuestionnaireInitial.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem' =>
			'FHIRElement/FHIRBackboneElement/FHIRQuestionnaire/FHIRQuestionnaireItem.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRRelatedPerson\FHIRRelatedPersonCommunication' =>
			'FHIRElement/FHIRBackboneElement/FHIRRelatedPerson/FHIRRelatedPersonCommunication.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction' =>
			'FHIRElement/FHIRBackboneElement/FHIRRequestGroup/FHIRRequestGroupAction.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupCondition' =>
			'FHIRElement/FHIRBackboneElement/FHIRRequestGroup/FHIRRequestGroupCondition.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupRelatedAction' =>
			'FHIRElement/FHIRBackboneElement/FHIRRequestGroup/FHIRRequestGroupRelatedAction.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRResearchElementDefinition\FHIRResearchElementDefinitionCharacteristic' =>
			'FHIRElement/FHIRBackboneElement/FHIRResearchElementDefinition/FHIRResearchElementDefinitionCharacteristic.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyArm' =>
			'FHIRElement/FHIRBackboneElement/FHIRResearchStudy/FHIRResearchStudyArm.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyObjective' =>
			'FHIRElement/FHIRBackboneElement/FHIRResearchStudy/FHIRResearchStudyObjective.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRRiskAssessment\FHIRRiskAssessmentPrediction' =>
			'FHIRElement/FHIRBackboneElement/FHIRRiskAssessment/FHIRRiskAssessmentPrediction.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRRiskEvidenceSynthesis\FHIRRiskEvidenceSynthesisCertainty' =>
			'FHIRElement/FHIRBackboneElement/FHIRRiskEvidenceSynthesis/FHIRRiskEvidenceSynthesisCertainty.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRRiskEvidenceSynthesis\FHIRRiskEvidenceSynthesisCertaintySubcomponent' =>
			'FHIRElement/FHIRBackboneElement/FHIRRiskEvidenceSynthesis/FHIRRiskEvidenceSynthesisCertaintySubcomponent.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRRiskEvidenceSynthesis\FHIRRiskEvidenceSynthesisPrecisionEstimate' =>
			'FHIRElement/FHIRBackboneElement/FHIRRiskEvidenceSynthesis/FHIRRiskEvidenceSynthesisPrecisionEstimate.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRRiskEvidenceSynthesis\FHIRRiskEvidenceSynthesisRiskEstimate' =>
			'FHIRElement/FHIRBackboneElement/FHIRRiskEvidenceSynthesis/FHIRRiskEvidenceSynthesisRiskEstimate.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRRiskEvidenceSynthesis\FHIRRiskEvidenceSynthesisSampleSize' =>
			'FHIRElement/FHIRBackboneElement/FHIRRiskEvidenceSynthesis/FHIRRiskEvidenceSynthesisSampleSize.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSearchParameter\FHIRSearchParameterComponent' =>
			'FHIRElement/FHIRBackboneElement/FHIRSearchParameter/FHIRSearchParameterComponent.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionAdditive' =>
			'FHIRElement/FHIRBackboneElement/FHIRSpecimenDefinition/FHIRSpecimenDefinitionAdditive.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionContainer' =>
			'FHIRElement/FHIRBackboneElement/FHIRSpecimenDefinition/FHIRSpecimenDefinitionContainer.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionHandling' =>
			'FHIRElement/FHIRBackboneElement/FHIRSpecimenDefinition/FHIRSpecimenDefinitionHandling.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionTypeTested' =>
			'FHIRElement/FHIRBackboneElement/FHIRSpecimenDefinition/FHIRSpecimenDefinitionTypeTested.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenCollection' =>
			'FHIRElement/FHIRBackboneElement/FHIRSpecimen/FHIRSpecimenCollection.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenContainer' =>
			'FHIRElement/FHIRBackboneElement/FHIRSpecimen/FHIRSpecimenContainer.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenProcessing' =>
			'FHIRElement/FHIRBackboneElement/FHIRSpecimen/FHIRSpecimenProcessing.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionContext' =>
			'FHIRElement/FHIRBackboneElement/FHIRStructureDefinition/FHIRStructureDefinitionContext.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionDifferential' =>
			'FHIRElement/FHIRBackboneElement/FHIRStructureDefinition/FHIRStructureDefinitionDifferential.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionMapping' =>
			'FHIRElement/FHIRBackboneElement/FHIRStructureDefinition/FHIRStructureDefinitionMapping.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionSnapshot' =>
			'FHIRElement/FHIRBackboneElement/FHIRStructureDefinition/FHIRStructureDefinitionSnapshot.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapDependent' =>
			'FHIRElement/FHIRBackboneElement/FHIRStructureMap/FHIRStructureMapDependent.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapGroup' =>
			'FHIRElement/FHIRBackboneElement/FHIRStructureMap/FHIRStructureMapGroup.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapInput' =>
			'FHIRElement/FHIRBackboneElement/FHIRStructureMap/FHIRStructureMapInput.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapParameter' =>
			'FHIRElement/FHIRBackboneElement/FHIRStructureMap/FHIRStructureMapParameter.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapRule' =>
			'FHIRElement/FHIRBackboneElement/FHIRStructureMap/FHIRStructureMapRule.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource' =>
			'FHIRElement/FHIRBackboneElement/FHIRStructureMap/FHIRStructureMapSource.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapStructure' =>
			'FHIRElement/FHIRBackboneElement/FHIRStructureMap/FHIRStructureMapStructure.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapTarget' =>
			'FHIRElement/FHIRBackboneElement/FHIRStructureMap/FHIRStructureMapTarget.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionChannel' =>
			'FHIRElement/FHIRBackboneElement/FHIRSubscription/FHIRSubscriptionChannel.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceAmount' =>
			'FHIRElement/FHIRBackboneElement/FHIRSubstanceAmount.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceAmount\FHIRSubstanceAmountReferenceRange' =>
			'FHIRElement/FHIRBackboneElement/FHIRSubstanceAmount/FHIRSubstanceAmountReferenceRange.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidLinkage' =>
			'FHIRElement/FHIRBackboneElement/FHIRSubstanceNucleicAcid/FHIRSubstanceNucleicAcidLinkage.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidSubunit' =>
			'FHIRElement/FHIRBackboneElement/FHIRSubstanceNucleicAcid/FHIRSubstanceNucleicAcidSubunit.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceNucleicAcid\FHIRSubstanceNucleicAcidSugar' =>
			'FHIRElement/FHIRBackboneElement/FHIRSubstanceNucleicAcid/FHIRSubstanceNucleicAcidSugar.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerDegreeOfPolymerisation' =>
			'FHIRElement/FHIRBackboneElement/FHIRSubstancePolymer/FHIRSubstancePolymerDegreeOfPolymerisation.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerMonomerSet' =>
			'FHIRElement/FHIRBackboneElement/FHIRSubstancePolymer/FHIRSubstancePolymerMonomerSet.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeat' =>
			'FHIRElement/FHIRBackboneElement/FHIRSubstancePolymer/FHIRSubstancePolymerRepeat.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeatUnit' =>
			'FHIRElement/FHIRBackboneElement/FHIRSubstancePolymer/FHIRSubstancePolymerRepeatUnit.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerStartingMaterial' =>
			'FHIRElement/FHIRBackboneElement/FHIRSubstancePolymer/FHIRSubstancePolymerStartingMaterial.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerStructuralRepresentation' =>
			'FHIRElement/FHIRBackboneElement/FHIRSubstancePolymer/FHIRSubstancePolymerStructuralRepresentation.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceProtein\FHIRSubstanceProteinSubunit' =>
			'FHIRElement/FHIRBackboneElement/FHIRSubstanceProtein/FHIRSubstanceProteinSubunit.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationClassification' =>
			'FHIRElement/FHIRBackboneElement/FHIRSubstanceReferenceInformation/FHIRSubstanceReferenceInformationClassification.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationGene' =>
			'FHIRElement/FHIRBackboneElement/FHIRSubstanceReferenceInformation/FHIRSubstanceReferenceInformationGene.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationGeneElement' =>
			'FHIRElement/FHIRBackboneElement/FHIRSubstanceReferenceInformation/FHIRSubstanceReferenceInformationGeneElement.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceReferenceInformation\FHIRSubstanceReferenceInformationTarget' =>
			'FHIRElement/FHIRBackboneElement/FHIRSubstanceReferenceInformation/FHIRSubstanceReferenceInformationTarget.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialAuthor' =>
			'FHIRElement/FHIRBackboneElement/FHIRSubstanceSourceMaterial/FHIRSubstanceSourceMaterialAuthor.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialFractionDescription' =>
			'FHIRElement/FHIRBackboneElement/FHIRSubstanceSourceMaterial/FHIRSubstanceSourceMaterialFractionDescription.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialHybrid' =>
			'FHIRElement/FHIRBackboneElement/FHIRSubstanceSourceMaterial/FHIRSubstanceSourceMaterialHybrid.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialOrganism' =>
			'FHIRElement/FHIRBackboneElement/FHIRSubstanceSourceMaterial/FHIRSubstanceSourceMaterialOrganism.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialOrganismGeneral' =>
			'FHIRElement/FHIRBackboneElement/FHIRSubstanceSourceMaterial/FHIRSubstanceSourceMaterialOrganismGeneral.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialPartDescription' =>
			'FHIRElement/FHIRBackboneElement/FHIRSubstanceSourceMaterial/FHIRSubstanceSourceMaterialPartDescription.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationCode' =>
			'FHIRElement/FHIRBackboneElement/FHIRSubstanceSpecification/FHIRSubstanceSpecificationCode.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationIsotope' =>
			'FHIRElement/FHIRBackboneElement/FHIRSubstanceSpecification/FHIRSubstanceSpecificationIsotope.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationMoiety' =>
			'FHIRElement/FHIRBackboneElement/FHIRSubstanceSpecification/FHIRSubstanceSpecificationMoiety.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationMolecularWeight' =>
			'FHIRElement/FHIRBackboneElement/FHIRSubstanceSpecification/FHIRSubstanceSpecificationMolecularWeight.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationName' =>
			'FHIRElement/FHIRBackboneElement/FHIRSubstanceSpecification/FHIRSubstanceSpecificationName.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationOfficial' =>
			'FHIRElement/FHIRBackboneElement/FHIRSubstanceSpecification/FHIRSubstanceSpecificationOfficial.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationProperty' =>
			'FHIRElement/FHIRBackboneElement/FHIRSubstanceSpecification/FHIRSubstanceSpecificationProperty.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationRelationship' =>
			'FHIRElement/FHIRBackboneElement/FHIRSubstanceSpecification/FHIRSubstanceSpecificationRelationship.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationRepresentation' =>
			'FHIRElement/FHIRBackboneElement/FHIRSubstanceSpecification/FHIRSubstanceSpecificationRepresentation.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstanceSpecification\FHIRSubstanceSpecificationStructure' =>
			'FHIRElement/FHIRBackboneElement/FHIRSubstanceSpecification/FHIRSubstanceSpecificationStructure.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstance\FHIRSubstanceIngredient' =>
			'FHIRElement/FHIRBackboneElement/FHIRSubstance/FHIRSubstanceIngredient.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSubstance\FHIRSubstanceInstance' =>
			'FHIRElement/FHIRBackboneElement/FHIRSubstance/FHIRSubstanceInstance.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSupplyDelivery\FHIRSupplyDeliverySuppliedItem' =>
			'FHIRElement/FHIRBackboneElement/FHIRSupplyDelivery/FHIRSupplyDeliverySuppliedItem.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRSupplyRequest\FHIRSupplyRequestParameter' =>
			'FHIRElement/FHIRBackboneElement/FHIRSupplyRequest/FHIRSupplyRequestParameter.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskInput' =>
			'FHIRElement/FHIRBackboneElement/FHIRTask/FHIRTaskInput.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskOutput' =>
			'FHIRElement/FHIRBackboneElement/FHIRTask/FHIRTaskOutput.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskRestriction' =>
			'FHIRElement/FHIRBackboneElement/FHIRTask/FHIRTaskRestriction.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesClosure' =>
			'FHIRElement/FHIRBackboneElement/FHIRTerminologyCapabilities/FHIRTerminologyCapabilitiesClosure.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesCodeSystem' =>
			'FHIRElement/FHIRBackboneElement/FHIRTerminologyCapabilities/FHIRTerminologyCapabilitiesCodeSystem.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesExpansion' =>
			'FHIRElement/FHIRBackboneElement/FHIRTerminologyCapabilities/FHIRTerminologyCapabilitiesExpansion.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesFilter' =>
			'FHIRElement/FHIRBackboneElement/FHIRTerminologyCapabilities/FHIRTerminologyCapabilitiesFilter.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesImplementation' =>
			'FHIRElement/FHIRBackboneElement/FHIRTerminologyCapabilities/FHIRTerminologyCapabilitiesImplementation.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesParameter' =>
			'FHIRElement/FHIRBackboneElement/FHIRTerminologyCapabilities/FHIRTerminologyCapabilitiesParameter.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesSoftware' =>
			'FHIRElement/FHIRBackboneElement/FHIRTerminologyCapabilities/FHIRTerminologyCapabilitiesSoftware.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesTranslation' =>
			'FHIRElement/FHIRBackboneElement/FHIRTerminologyCapabilities/FHIRTerminologyCapabilitiesTranslation.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesValidateCode' =>
			'FHIRElement/FHIRBackboneElement/FHIRTerminologyCapabilities/FHIRTerminologyCapabilitiesValidateCode.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesVersion' =>
			'FHIRElement/FHIRBackboneElement/FHIRTerminologyCapabilities/FHIRTerminologyCapabilitiesVersion.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportAction' =>
			'FHIRElement/FHIRBackboneElement/FHIRTestReport/FHIRTestReportAction.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportAction1' =>
			'FHIRElement/FHIRBackboneElement/FHIRTestReport/FHIRTestReportAction1.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportAction2' =>
			'FHIRElement/FHIRBackboneElement/FHIRTestReport/FHIRTestReportAction2.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportAssert' =>
			'FHIRElement/FHIRBackboneElement/FHIRTestReport/FHIRTestReportAssert.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportOperation' =>
			'FHIRElement/FHIRBackboneElement/FHIRTestReport/FHIRTestReportOperation.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportParticipant' =>
			'FHIRElement/FHIRBackboneElement/FHIRTestReport/FHIRTestReportParticipant.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportSetup' =>
			'FHIRElement/FHIRBackboneElement/FHIRTestReport/FHIRTestReportSetup.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportTeardown' =>
			'FHIRElement/FHIRBackboneElement/FHIRTestReport/FHIRTestReportTeardown.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportTest' =>
			'FHIRElement/FHIRBackboneElement/FHIRTestReport/FHIRTestReportTest.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptAction' =>
			'FHIRElement/FHIRBackboneElement/FHIRTestScript/FHIRTestScriptAction.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptAction1' =>
			'FHIRElement/FHIRBackboneElement/FHIRTestScript/FHIRTestScriptAction1.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptAction2' =>
			'FHIRElement/FHIRBackboneElement/FHIRTestScript/FHIRTestScriptAction2.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptAssert' =>
			'FHIRElement/FHIRBackboneElement/FHIRTestScript/FHIRTestScriptAssert.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptCapability' =>
			'FHIRElement/FHIRBackboneElement/FHIRTestScript/FHIRTestScriptCapability.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptDestination' =>
			'FHIRElement/FHIRBackboneElement/FHIRTestScript/FHIRTestScriptDestination.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptFixture' =>
			'FHIRElement/FHIRBackboneElement/FHIRTestScript/FHIRTestScriptFixture.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptLink' =>
			'FHIRElement/FHIRBackboneElement/FHIRTestScript/FHIRTestScriptLink.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptMetadata' =>
			'FHIRElement/FHIRBackboneElement/FHIRTestScript/FHIRTestScriptMetadata.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptOperation' =>
			'FHIRElement/FHIRBackboneElement/FHIRTestScript/FHIRTestScriptOperation.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptOrigin' =>
			'FHIRElement/FHIRBackboneElement/FHIRTestScript/FHIRTestScriptOrigin.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRequestHeader' =>
			'FHIRElement/FHIRBackboneElement/FHIRTestScript/FHIRTestScriptRequestHeader.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptSetup' =>
			'FHIRElement/FHIRBackboneElement/FHIRTestScript/FHIRTestScriptSetup.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptTeardown' =>
			'FHIRElement/FHIRBackboneElement/FHIRTestScript/FHIRTestScriptTeardown.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptTest' =>
			'FHIRElement/FHIRBackboneElement/FHIRTestScript/FHIRTestScriptTest.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptVariable' =>
			'FHIRElement/FHIRBackboneElement/FHIRTestScript/FHIRTestScriptVariable.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRTiming' =>
			'FHIRElement/FHIRBackboneElement/FHIRTiming.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRTiming\FHIRTimingRepeat' =>
			'FHIRElement/FHIRBackboneElement/FHIRTiming/FHIRTimingRepeat.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetCompose' =>
			'FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetCompose.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetConcept' =>
			'FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetConcept.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetContains' =>
			'FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetContains.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetDesignation' =>
			'FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetDesignation.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetExpansion' =>
			'FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetExpansion.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetFilter' =>
			'FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetFilter.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude' =>
			'FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetInclude.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetParameter' =>
			'FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetParameter.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultAttestation' =>
			'FHIRElement/FHIRBackboneElement/FHIRVerificationResult/FHIRVerificationResultAttestation.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultPrimarySource' =>
			'FHIRElement/FHIRBackboneElement/FHIRVerificationResult/FHIRVerificationResultPrimarySource.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultValidator' =>
			'FHIRElement/FHIRBackboneElement/FHIRVerificationResult/FHIRVerificationResultValidator.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionLensSpecification' =>
			'FHIRElement/FHIRBackboneElement/FHIRVisionPrescription/FHIRVisionPrescriptionLensSpecification.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionPrism' =>
			'FHIRElement/FHIRBackboneElement/FHIRVisionPrescription/FHIRVisionPrescriptionPrism.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBase64Binary' => 'FHIRElement/FHIRBase64Binary.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBindingStrength' => 'FHIRElement/FHIRBindingStrength.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBiologicallyDerivedProductCategory' =>
			'FHIRElement/FHIRBiologicallyDerivedProductCategory.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBiologicallyDerivedProductStatus' =>
			'FHIRElement/FHIRBiologicallyDerivedProductStatus.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBiologicallyDerivedProductStorageScale' =>
			'FHIRElement/FHIRBiologicallyDerivedProductStorageScale.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBoolean' => 'FHIRElement/FHIRBoolean.php',
		'HL7\FHIR\R4\FHIRElement\FHIRBundleType' => 'FHIRElement/FHIRBundleType.php',
		'HL7\FHIR\R4\FHIRElement\FHIRCanonical' => 'FHIRElement/FHIRCanonical.php',
		'HL7\FHIR\R4\FHIRElement\FHIRCapabilityStatementKind' =>
			'FHIRElement/FHIRCapabilityStatementKind.php',
		'HL7\FHIR\R4\FHIRElement\FHIRCarePlanActivityKind' =>
			'FHIRElement/FHIRCarePlanActivityKind.php',
		'HL7\FHIR\R4\FHIRElement\FHIRCarePlanActivityStatus' =>
			'FHIRElement/FHIRCarePlanActivityStatus.php',
		'HL7\FHIR\R4\FHIRElement\FHIRCarePlanIntent' => 'FHIRElement/FHIRCarePlanIntent.php',
		'HL7\FHIR\R4\FHIRElement\FHIRCareTeamStatus' => 'FHIRElement/FHIRCareTeamStatus.php',
		'HL7\FHIR\R4\FHIRElement\FHIRCatalogEntryRelationType' =>
			'FHIRElement/FHIRCatalogEntryRelationType.php',
		'HL7\FHIR\R4\FHIRElement\FHIRChargeItemStatus' => 'FHIRElement/FHIRChargeItemStatus.php',
		'HL7\FHIR\R4\FHIRElement\FHIRClaimProcessingCodes' =>
			'FHIRElement/FHIRClaimProcessingCodes.php',
		'HL7\FHIR\R4\FHIRElement\FHIRClinicalImpressionStatus' =>
			'FHIRElement/FHIRClinicalImpressionStatus.php',
		'HL7\FHIR\R4\FHIRElement\FHIRCode' => 'FHIRElement/FHIRCode.php',
		'HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept' => 'FHIRElement/FHIRCodeableConcept.php',
		'HL7\FHIR\R4\FHIRElement\FHIRCodeSearchSupport' => 'FHIRElement/FHIRCodeSearchSupport.php',
		'HL7\FHIR\R4\FHIRElement\FHIRCodeSystemContentMode' =>
			'FHIRElement/FHIRCodeSystemContentMode.php',
		'HL7\FHIR\R4\FHIRElement\FHIRCodeSystemHierarchyMeaning' =>
			'FHIRElement/FHIRCodeSystemHierarchyMeaning.php',
		'HL7\FHIR\R4\FHIRElement\FHIRCoding' => 'FHIRElement/FHIRCoding.php',
		'HL7\FHIR\R4\FHIRElement\FHIRCompartmentType' => 'FHIRElement/FHIRCompartmentType.php',
		'HL7\FHIR\R4\FHIRElement\FHIRCompositionAttestationMode' =>
			'FHIRElement/FHIRCompositionAttestationMode.php',
		'HL7\FHIR\R4\FHIRElement\FHIRCompositionStatus' => 'FHIRElement/FHIRCompositionStatus.php',
		'HL7\FHIR\R4\FHIRElement\FHIRConceptMapEquivalence' =>
			'FHIRElement/FHIRConceptMapEquivalence.php',
		'HL7\FHIR\R4\FHIRElement\FHIRConceptMapGroupUnmappedMode' =>
			'FHIRElement/FHIRConceptMapGroupUnmappedMode.php',
		'HL7\FHIR\R4\FHIRElement\FHIRConditionalDeleteStatus' =>
			'FHIRElement/FHIRConditionalDeleteStatus.php',
		'HL7\FHIR\R4\FHIRElement\FHIRConditionalReadStatus' =>
			'FHIRElement/FHIRConditionalReadStatus.php',
		'HL7\FHIR\R4\FHIRElement\FHIRConsentDataMeaning' =>
			'FHIRElement/FHIRConsentDataMeaning.php',
		'HL7\FHIR\R4\FHIRElement\FHIRConsentProvisionType' =>
			'FHIRElement/FHIRConsentProvisionType.php',
		'HL7\FHIR\R4\FHIRElement\FHIRConsentState' => 'FHIRElement/FHIRConsentState.php',
		'HL7\FHIR\R4\FHIRElement\FHIRConstraintSeverity' =>
			'FHIRElement/FHIRConstraintSeverity.php',
		'HL7\FHIR\R4\FHIRElement\FHIRContactDetail' => 'FHIRElement/FHIRContactDetail.php',
		'HL7\FHIR\R4\FHIRElement\FHIRContactPoint' => 'FHIRElement/FHIRContactPoint.php',
		'HL7\FHIR\R4\FHIRElement\FHIRContactPointSystem' =>
			'FHIRElement/FHIRContactPointSystem.php',
		'HL7\FHIR\R4\FHIRElement\FHIRContactPointUse' => 'FHIRElement/FHIRContactPointUse.php',
		'HL7\FHIR\R4\FHIRElement\FHIRContractResourcePublicationStatusCodes' =>
			'FHIRElement/FHIRContractResourcePublicationStatusCodes.php',
		'HL7\FHIR\R4\FHIRElement\FHIRContractResourceStatusCodes' =>
			'FHIRElement/FHIRContractResourceStatusCodes.php',
		'HL7\FHIR\R4\FHIRElement\FHIRContributor' => 'FHIRElement/FHIRContributor.php',
		'HL7\FHIR\R4\FHIRElement\FHIRContributorType' => 'FHIRElement/FHIRContributorType.php',
		'HL7\FHIR\R4\FHIRElement\FHIRDataRequirement' => 'FHIRElement/FHIRDataRequirement.php',
		'HL7\FHIR\R4\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter' =>
			'FHIRElement/FHIRDataRequirement/FHIRDataRequirementCodeFilter.php',
		'HL7\FHIR\R4\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter' =>
			'FHIRElement/FHIRDataRequirement/FHIRDataRequirementDateFilter.php',
		'HL7\FHIR\R4\FHIRElement\FHIRDataRequirement\FHIRDataRequirementSort' =>
			'FHIRElement/FHIRDataRequirement/FHIRDataRequirementSort.php',
		'HL7\FHIR\R4\FHIRElement\FHIRDate' => 'FHIRElement/FHIRDate.php',
		'HL7\FHIR\R4\FHIRElement\FHIRDateTime' => 'FHIRElement/FHIRDateTime.php',
		'HL7\FHIR\R4\FHIRElement\FHIRDaysOfWeek' => 'FHIRElement/FHIRDaysOfWeek.php',
		'HL7\FHIR\R4\FHIRElement\FHIRDecimal' => 'FHIRElement/FHIRDecimal.php',
		'HL7\FHIR\R4\FHIRElement\FHIRDetectedIssueSeverity' =>
			'FHIRElement/FHIRDetectedIssueSeverity.php',
		'HL7\FHIR\R4\FHIRElement\FHIRDeviceMetricCalibrationState' =>
			'FHIRElement/FHIRDeviceMetricCalibrationState.php',
		'HL7\FHIR\R4\FHIRElement\FHIRDeviceMetricCalibrationType' =>
			'FHIRElement/FHIRDeviceMetricCalibrationType.php',
		'HL7\FHIR\R4\FHIRElement\FHIRDeviceMetricCategory' =>
			'FHIRElement/FHIRDeviceMetricCategory.php',
		'HL7\FHIR\R4\FHIRElement\FHIRDeviceMetricColor' => 'FHIRElement/FHIRDeviceMetricColor.php',
		'HL7\FHIR\R4\FHIRElement\FHIRDeviceMetricOperationalStatus' =>
			'FHIRElement/FHIRDeviceMetricOperationalStatus.php',
		'HL7\FHIR\R4\FHIRElement\FHIRDeviceNameType' => 'FHIRElement/FHIRDeviceNameType.php',
		'HL7\FHIR\R4\FHIRElement\FHIRDeviceUseStatementStatus' =>
			'FHIRElement/FHIRDeviceUseStatementStatus.php',
		'HL7\FHIR\R4\FHIRElement\FHIRDiagnosticReportStatus' =>
			'FHIRElement/FHIRDiagnosticReportStatus.php',
		'HL7\FHIR\R4\FHIRElement\FHIRDiscriminatorType' => 'FHIRElement/FHIRDiscriminatorType.php',
		'HL7\FHIR\R4\FHIRElement\FHIRDocumentMode' => 'FHIRElement/FHIRDocumentMode.php',
		'HL7\FHIR\R4\FHIRElement\FHIRDocumentReferenceStatus' =>
			'FHIRElement/FHIRDocumentReferenceStatus.php',
		'HL7\FHIR\R4\FHIRElement\FHIRDocumentRelationshipType' =>
			'FHIRElement/FHIRDocumentRelationshipType.php',
		'HL7\FHIR\R4\FHIRElement\FHIREligibilityRequestPurpose' =>
			'FHIRElement/FHIREligibilityRequestPurpose.php',
		'HL7\FHIR\R4\FHIRElement\FHIREligibilityResponsePurpose' =>
			'FHIRElement/FHIREligibilityResponsePurpose.php',
		'HL7\FHIR\R4\FHIRElement\FHIREnableWhenBehavior' =>
			'FHIRElement/FHIREnableWhenBehavior.php',
		'HL7\FHIR\R4\FHIRElement\FHIREncounterLocationStatus' =>
			'FHIRElement/FHIREncounterLocationStatus.php',
		'HL7\FHIR\R4\FHIRElement\FHIREncounterStatus' => 'FHIRElement/FHIREncounterStatus.php',
		'HL7\FHIR\R4\FHIRElement\FHIREndpointStatus' => 'FHIRElement/FHIREndpointStatus.php',
		'HL7\FHIR\R4\FHIRElement\FHIREpisodeOfCareStatus' =>
			'FHIRElement/FHIREpisodeOfCareStatus.php',
		'HL7\FHIR\R4\FHIRElement\FHIREventCapabilityMode' =>
			'FHIRElement/FHIREventCapabilityMode.php',
		'HL7\FHIR\R4\FHIRElement\FHIREventStatus' => 'FHIRElement/FHIREventStatus.php',
		'HL7\FHIR\R4\FHIRElement\FHIREventTiming' => 'FHIRElement/FHIREventTiming.php',
		'HL7\FHIR\R4\FHIRElement\FHIREvidenceVariableType' =>
			'FHIRElement/FHIREvidenceVariableType.php',
		'HL7\FHIR\R4\FHIRElement\FHIRExampleScenarioActorType' =>
			'FHIRElement/FHIRExampleScenarioActorType.php',
		'HL7\FHIR\R4\FHIRElement\FHIRExplanationOfBenefitStatus' =>
			'FHIRElement/FHIRExplanationOfBenefitStatus.php',
		'HL7\FHIR\R4\FHIRElement\FHIRExposureState' => 'FHIRElement/FHIRExposureState.php',
		'HL7\FHIR\R4\FHIRElement\FHIRExpression' => 'FHIRElement/FHIRExpression.php',
		'HL7\FHIR\R4\FHIRElement\FHIRExpressionLanguage' =>
			'FHIRElement/FHIRExpressionLanguage.php',
		'HL7\FHIR\R4\FHIRElement\FHIRExtension' => 'FHIRElement/FHIRExtension.php',
		'HL7\FHIR\R4\FHIRElement\FHIRExtensionContextType' =>
			'FHIRElement/FHIRExtensionContextType.php',
		'HL7\FHIR\R4\FHIRElement\FHIRFamilyHistoryStatus' =>
			'FHIRElement/FHIRFamilyHistoryStatus.php',
		'HL7\FHIR\R4\FHIRElement\FHIRFHIRDeviceStatus' => 'FHIRElement/FHIRFHIRDeviceStatus.php',
		'HL7\FHIR\R4\FHIRElement\FHIRFHIRSubstanceStatus' =>
			'FHIRElement/FHIRFHIRSubstanceStatus.php',
		'HL7\FHIR\R4\FHIRElement\FHIRFHIRVersion' => 'FHIRElement/FHIRFHIRVersion.php',
		'HL7\FHIR\R4\FHIRElement\FHIRFilterOperator' => 'FHIRElement/FHIRFilterOperator.php',
		'HL7\FHIR\R4\FHIRElement\FHIRFinancialResourceStatusCodes' =>
			'FHIRElement/FHIRFinancialResourceStatusCodes.php',
		'HL7\FHIR\R4\FHIRElement\FHIRFlagStatus' => 'FHIRElement/FHIRFlagStatus.php',
		'HL7\FHIR\R4\FHIRElement\FHIRGoalLifecycleStatus' =>
			'FHIRElement/FHIRGoalLifecycleStatus.php',
		'HL7\FHIR\R4\FHIRElement\FHIRGraphCompartmentRule' =>
			'FHIRElement/FHIRGraphCompartmentRule.php',
		'HL7\FHIR\R4\FHIRElement\FHIRGraphCompartmentUse' =>
			'FHIRElement/FHIRGraphCompartmentUse.php',
		'HL7\FHIR\R4\FHIRElement\FHIRGroupMeasure' => 'FHIRElement/FHIRGroupMeasure.php',
		'HL7\FHIR\R4\FHIRElement\FHIRGroupType' => 'FHIRElement/FHIRGroupType.php',
		'HL7\FHIR\R4\FHIRElement\FHIRGuidanceResponseStatus' =>
			'FHIRElement/FHIRGuidanceResponseStatus.php',
		'HL7\FHIR\R4\FHIRElement\FHIRGuidePageGeneration' =>
			'FHIRElement/FHIRGuidePageGeneration.php',
		'HL7\FHIR\R4\FHIRElement\FHIRGuideParameterCode' =>
			'FHIRElement/FHIRGuideParameterCode.php',
		'HL7\FHIR\R4\FHIRElement\FHIRHTTPVerb' => 'FHIRElement/FHIRHTTPVerb.php',
		'HL7\FHIR\R4\FHIRElement\FHIRHumanName' => 'FHIRElement/FHIRHumanName.php',
		'HL7\FHIR\R4\FHIRElement\FHIRId' => 'FHIRElement/FHIRId.php',
		'HL7\FHIR\R4\FHIRElement\FHIRIdentifier' => 'FHIRElement/FHIRIdentifier.php',
		'HL7\FHIR\R4\FHIRElement\FHIRIdentifierUse' => 'FHIRElement/FHIRIdentifierUse.php',
		'HL7\FHIR\R4\FHIRElement\FHIRIdentityAssuranceLevel' =>
			'FHIRElement/FHIRIdentityAssuranceLevel.php',
		'HL7\FHIR\R4\FHIRElement\FHIRImagingStudyStatus' =>
			'FHIRElement/FHIRImagingStudyStatus.php',
		'HL7\FHIR\R4\FHIRElement\FHIRImmunizationEvaluationStatusCodes' =>
			'FHIRElement/FHIRImmunizationEvaluationStatusCodes.php',
		'HL7\FHIR\R4\FHIRElement\FHIRImmunizationStatusCodes' =>
			'FHIRElement/FHIRImmunizationStatusCodes.php',
		'HL7\FHIR\R4\FHIRElement\FHIRInstant' => 'FHIRElement/FHIRInstant.php',
		'HL7\FHIR\R4\FHIRElement\FHIRInteger' => 'FHIRElement/FHIRInteger.php',
		'HL7\FHIR\R4\FHIRElement\FHIRInvoicePriceComponentType' =>
			'FHIRElement/FHIRInvoicePriceComponentType.php',
		'HL7\FHIR\R4\FHIRElement\FHIRInvoiceStatus' => 'FHIRElement/FHIRInvoiceStatus.php',
		'HL7\FHIR\R4\FHIRElement\FHIRIssueSeverity' => 'FHIRElement/FHIRIssueSeverity.php',
		'HL7\FHIR\R4\FHIRElement\FHIRIssueType' => 'FHIRElement/FHIRIssueType.php',
		'HL7\FHIR\R4\FHIRElement\FHIRLinkageType' => 'FHIRElement/FHIRLinkageType.php',
		'HL7\FHIR\R4\FHIRElement\FHIRLinkType' => 'FHIRElement/FHIRLinkType.php',
		'HL7\FHIR\R4\FHIRElement\FHIRListMode' => 'FHIRElement/FHIRListMode.php',
		'HL7\FHIR\R4\FHIRElement\FHIRListStatus' => 'FHIRElement/FHIRListStatus.php',
		'HL7\FHIR\R4\FHIRElement\FHIRLocationMode' => 'FHIRElement/FHIRLocationMode.php',
		'HL7\FHIR\R4\FHIRElement\FHIRLocationStatus' => 'FHIRElement/FHIRLocationStatus.php',
		'HL7\FHIR\R4\FHIRElement\FHIRMarkdown' => 'FHIRElement/FHIRMarkdown.php',
		'HL7\FHIR\R4\FHIRElement\FHIRMeasureReportStatus' =>
			'FHIRElement/FHIRMeasureReportStatus.php',
		'HL7\FHIR\R4\FHIRElement\FHIRMeasureReportType' => 'FHIRElement/FHIRMeasureReportType.php',
		'HL7\FHIR\R4\FHIRElement\FHIRMedicationRequestIntent' =>
			'FHIRElement/FHIRMedicationRequestIntent.php',
		'HL7\FHIR\R4\FHIRElement\FHIRMedicationrequestStatus' =>
			'FHIRElement/FHIRMedicationrequestStatus.php',
		'HL7\FHIR\R4\FHIRElement\FHIRMedicationStatusCodes' =>
			'FHIRElement/FHIRMedicationStatusCodes.php',
		'HL7\FHIR\R4\FHIRElement\FHIRMessageheaderResponseRequest' =>
			'FHIRElement/FHIRMessageheaderResponseRequest.php',
		'HL7\FHIR\R4\FHIRElement\FHIRMessageSignificanceCategory' =>
			'FHIRElement/FHIRMessageSignificanceCategory.php',
		'HL7\FHIR\R4\FHIRElement\FHIRMeta' => 'FHIRElement/FHIRMeta.php',
		'HL7\FHIR\R4\FHIRElement\FHIRMoney' => 'FHIRElement/FHIRMoney.php',
		'HL7\FHIR\R4\FHIRElement\FHIRNameUse' => 'FHIRElement/FHIRNameUse.php',
		'HL7\FHIR\R4\FHIRElement\FHIRNamingSystemIdentifierType' =>
			'FHIRElement/FHIRNamingSystemIdentifierType.php',
		'HL7\FHIR\R4\FHIRElement\FHIRNamingSystemType' => 'FHIRElement/FHIRNamingSystemType.php',
		'HL7\FHIR\R4\FHIRElement\FHIRNarrative' => 'FHIRElement/FHIRNarrative.php',
		'HL7\FHIR\R4\FHIRElement\FHIRNarrativeStatus' => 'FHIRElement/FHIRNarrativeStatus.php',
		'HL7\FHIR\R4\FHIRElement\FHIRNoteType' => 'FHIRElement/FHIRNoteType.php',
		'HL7\FHIR\R4\FHIRElement\FHIRObservationDataType' =>
			'FHIRElement/FHIRObservationDataType.php',
		'HL7\FHIR\R4\FHIRElement\FHIRObservationRangeCategory' =>
			'FHIRElement/FHIRObservationRangeCategory.php',
		'HL7\FHIR\R4\FHIRElement\FHIRObservationStatus' => 'FHIRElement/FHIRObservationStatus.php',
		'HL7\FHIR\R4\FHIRElement\FHIROid' => 'FHIRElement/FHIROid.php',
		'HL7\FHIR\R4\FHIRElement\FHIROperationKind' => 'FHIRElement/FHIROperationKind.php',
		'HL7\FHIR\R4\FHIRElement\FHIROperationParameterUse' =>
			'FHIRElement/FHIROperationParameterUse.php',
		'HL7\FHIR\R4\FHIRElement\FHIROrientationType' => 'FHIRElement/FHIROrientationType.php',
		'HL7\FHIR\R4\FHIRElement\FHIRParameterDefinition' =>
			'FHIRElement/FHIRParameterDefinition.php',
		'HL7\FHIR\R4\FHIRElement\FHIRParticipantRequired' =>
			'FHIRElement/FHIRParticipantRequired.php',
		'HL7\FHIR\R4\FHIRElement\FHIRParticipationStatus' =>
			'FHIRElement/FHIRParticipationStatus.php',
		'HL7\FHIR\R4\FHIRElement\FHIRPeriod' => 'FHIRElement/FHIRPeriod.php',
		'HL7\FHIR\R4\FHIRElement\FHIRPositiveInt' => 'FHIRElement/FHIRPositiveInt.php',
		'HL7\FHIR\R4\FHIRElement\FHIRPropertyRepresentation' =>
			'FHIRElement/FHIRPropertyRepresentation.php',
		'HL7\FHIR\R4\FHIRElement\FHIRPropertyType' => 'FHIRElement/FHIRPropertyType.php',
		'HL7\FHIR\R4\FHIRElement\FHIRProvenanceEntityRole' =>
			'FHIRElement/FHIRProvenanceEntityRole.php',
		'HL7\FHIR\R4\FHIRElement\FHIRPublicationStatus' => 'FHIRElement/FHIRPublicationStatus.php',
		'HL7\FHIR\R4\FHIRElement\FHIRQualityType' => 'FHIRElement/FHIRQualityType.php',
		'HL7\FHIR\R4\FHIRElement\FHIRQuantity' => 'FHIRElement/FHIRQuantity.php',
		'HL7\FHIR\R4\FHIRElement\FHIRQuantityComparator' =>
			'FHIRElement/FHIRQuantityComparator.php',
		'HL7\FHIR\R4\FHIRElement\FHIRQuantity\FHIRAge' => 'FHIRElement/FHIRQuantity/FHIRAge.php',
		'HL7\FHIR\R4\FHIRElement\FHIRQuantity\FHIRCount' =>
			'FHIRElement/FHIRQuantity/FHIRCount.php',
		'HL7\FHIR\R4\FHIRElement\FHIRQuantity\FHIRDistance' =>
			'FHIRElement/FHIRQuantity/FHIRDistance.php',
		'HL7\FHIR\R4\FHIRElement\FHIRQuantity\FHIRDuration' =>
			'FHIRElement/FHIRQuantity/FHIRDuration.php',
		'HL7\FHIR\R4\FHIRElement\FHIRQuestionnaireItemOperator' =>
			'FHIRElement/FHIRQuestionnaireItemOperator.php',
		'HL7\FHIR\R4\FHIRElement\FHIRQuestionnaireItemType' =>
			'FHIRElement/FHIRQuestionnaireItemType.php',
		'HL7\FHIR\R4\FHIRElement\FHIRQuestionnaireResponseStatus' =>
			'FHIRElement/FHIRQuestionnaireResponseStatus.php',
		'HL7\FHIR\R4\FHIRElement\FHIRRange' => 'FHIRElement/FHIRRange.php',
		'HL7\FHIR\R4\FHIRElement\FHIRRatio' => 'FHIRElement/FHIRRatio.php',
		'HL7\FHIR\R4\FHIRElement\FHIRReference' => 'FHIRElement/FHIRReference.php',
		'HL7\FHIR\R4\FHIRElement\FHIRReferenceHandlingPolicy' =>
			'FHIRElement/FHIRReferenceHandlingPolicy.php',
		'HL7\FHIR\R4\FHIRElement\FHIRReferenceVersionRules' =>
			'FHIRElement/FHIRReferenceVersionRules.php',
		'HL7\FHIR\R4\FHIRElement\FHIRRelatedArtifact' => 'FHIRElement/FHIRRelatedArtifact.php',
		'HL7\FHIR\R4\FHIRElement\FHIRRelatedArtifactType' =>
			'FHIRElement/FHIRRelatedArtifactType.php',
		'HL7\FHIR\R4\FHIRElement\FHIRRemittanceOutcome' => 'FHIRElement/FHIRRemittanceOutcome.php',
		'HL7\FHIR\R4\FHIRElement\FHIRRepositoryType' => 'FHIRElement/FHIRRepositoryType.php',
		'HL7\FHIR\R4\FHIRElement\FHIRRequestIntent' => 'FHIRElement/FHIRRequestIntent.php',
		'HL7\FHIR\R4\FHIRElement\FHIRRequestPriority' => 'FHIRElement/FHIRRequestPriority.php',
		'HL7\FHIR\R4\FHIRElement\FHIRRequestResourceType' =>
			'FHIRElement/FHIRRequestResourceType.php',
		'HL7\FHIR\R4\FHIRElement\FHIRRequestStatus' => 'FHIRElement/FHIRRequestStatus.php',
		'HL7\FHIR\R4\FHIRElement\FHIRResearchElementType' =>
			'FHIRElement/FHIRResearchElementType.php',
		'HL7\FHIR\R4\FHIRElement\FHIRResearchStudyStatus' =>
			'FHIRElement/FHIRResearchStudyStatus.php',
		'HL7\FHIR\R4\FHIRElement\FHIRResearchSubjectStatus' =>
			'FHIRElement/FHIRResearchSubjectStatus.php',
		'HL7\FHIR\R4\FHIRElement\FHIRResourceType' => 'FHIRElement/FHIRResourceType.php',
		'HL7\FHIR\R4\FHIRElement\FHIRResourceVersionPolicy' =>
			'FHIRElement/FHIRResourceVersionPolicy.php',
		'HL7\FHIR\R4\FHIRElement\FHIRResponseType' => 'FHIRElement/FHIRResponseType.php',
		'HL7\FHIR\R4\FHIRElement\FHIRRestfulCapabilityMode' =>
			'FHIRElement/FHIRRestfulCapabilityMode.php',
		'HL7\FHIR\R4\FHIRElement\FHIRSampledData' => 'FHIRElement/FHIRSampledData.php',
		'HL7\FHIR\R4\FHIRElement\FHIRSampledDataDataType' =>
			'FHIRElement/FHIRSampledDataDataType.php',
		'HL7\FHIR\R4\FHIRElement\FHIRSearchComparator' => 'FHIRElement/FHIRSearchComparator.php',
		'HL7\FHIR\R4\FHIRElement\FHIRSearchEntryMode' => 'FHIRElement/FHIRSearchEntryMode.php',
		'HL7\FHIR\R4\FHIRElement\FHIRSearchModifierCode' =>
			'FHIRElement/FHIRSearchModifierCode.php',
		'HL7\FHIR\R4\FHIRElement\FHIRSearchParamType' => 'FHIRElement/FHIRSearchParamType.php',
		'HL7\FHIR\R4\FHIRElement\FHIRSequenceType' => 'FHIRElement/FHIRSequenceType.php',
		'HL7\FHIR\R4\FHIRElement\FHIRSignature' => 'FHIRElement/FHIRSignature.php',
		'HL7\FHIR\R4\FHIRElement\FHIRSlicingRules' => 'FHIRElement/FHIRSlicingRules.php',
		'HL7\FHIR\R4\FHIRElement\FHIRSlotStatus' => 'FHIRElement/FHIRSlotStatus.php',
		'HL7\FHIR\R4\FHIRElement\FHIRSortDirection' => 'FHIRElement/FHIRSortDirection.php',
		'HL7\FHIR\R4\FHIRElement\FHIRSPDXLicense' => 'FHIRElement/FHIRSPDXLicense.php',
		'HL7\FHIR\R4\FHIRElement\FHIRSpecimenContainedPreference' =>
			'FHIRElement/FHIRSpecimenContainedPreference.php',
		'HL7\FHIR\R4\FHIRElement\FHIRSpecimenStatus' => 'FHIRElement/FHIRSpecimenStatus.php',
		'HL7\FHIR\R4\FHIRElement\FHIRStatus' => 'FHIRElement/FHIRStatus.php',
		'HL7\FHIR\R4\FHIRElement\FHIRStrandType' => 'FHIRElement/FHIRStrandType.php',
		'HL7\FHIR\R4\FHIRElement\FHIRString' => 'FHIRElement/FHIRString.php',
		'HL7\FHIR\R4\FHIRElement\FHIRStructureDefinitionKind' =>
			'FHIRElement/FHIRStructureDefinitionKind.php',
		'HL7\FHIR\R4\FHIRElement\FHIRStructureMapContextType' =>
			'FHIRElement/FHIRStructureMapContextType.php',
		'HL7\FHIR\R4\FHIRElement\FHIRStructureMapGroupTypeMode' =>
			'FHIRElement/FHIRStructureMapGroupTypeMode.php',
		'HL7\FHIR\R4\FHIRElement\FHIRStructureMapInputMode' =>
			'FHIRElement/FHIRStructureMapInputMode.php',
		'HL7\FHIR\R4\FHIRElement\FHIRStructureMapModelMode' =>
			'FHIRElement/FHIRStructureMapModelMode.php',
		'HL7\FHIR\R4\FHIRElement\FHIRStructureMapSourceListMode' =>
			'FHIRElement/FHIRStructureMapSourceListMode.php',
		'HL7\FHIR\R4\FHIRElement\FHIRStructureMapTargetListMode' =>
			'FHIRElement/FHIRStructureMapTargetListMode.php',
		'HL7\FHIR\R4\FHIRElement\FHIRStructureMapTransform' =>
			'FHIRElement/FHIRStructureMapTransform.php',
		'HL7\FHIR\R4\FHIRElement\FHIRSubscriptionChannelType' =>
			'FHIRElement/FHIRSubscriptionChannelType.php',
		'HL7\FHIR\R4\FHIRElement\FHIRSubscriptionStatus' =>
			'FHIRElement/FHIRSubscriptionStatus.php',
		'HL7\FHIR\R4\FHIRElement\FHIRSupplyDeliveryStatus' =>
			'FHIRElement/FHIRSupplyDeliveryStatus.php',
		'HL7\FHIR\R4\FHIRElement\FHIRSupplyRequestStatus' =>
			'FHIRElement/FHIRSupplyRequestStatus.php',
		'HL7\FHIR\R4\FHIRElement\FHIRSystemRestfulInteraction' =>
			'FHIRElement/FHIRSystemRestfulInteraction.php',
		'HL7\FHIR\R4\FHIRElement\FHIRTaskIntent' => 'FHIRElement/FHIRTaskIntent.php',
		'HL7\FHIR\R4\FHIRElement\FHIRTaskStatus' => 'FHIRElement/FHIRTaskStatus.php',
		'HL7\FHIR\R4\FHIRElement\FHIRTestReportActionResult' =>
			'FHIRElement/FHIRTestReportActionResult.php',
		'HL7\FHIR\R4\FHIRElement\FHIRTestReportParticipantType' =>
			'FHIRElement/FHIRTestReportParticipantType.php',
		'HL7\FHIR\R4\FHIRElement\FHIRTestReportResult' => 'FHIRElement/FHIRTestReportResult.php',
		'HL7\FHIR\R4\FHIRElement\FHIRTestReportStatus' => 'FHIRElement/FHIRTestReportStatus.php',
		'HL7\FHIR\R4\FHIRElement\FHIRTestScriptRequestMethodCode' =>
			'FHIRElement/FHIRTestScriptRequestMethodCode.php',
		'HL7\FHIR\R4\FHIRElement\FHIRTime' => 'FHIRElement/FHIRTime.php',
		'HL7\FHIR\R4\FHIRElement\FHIRTriggerDefinition' => 'FHIRElement/FHIRTriggerDefinition.php',
		'HL7\FHIR\R4\FHIRElement\FHIRTriggerType' => 'FHIRElement/FHIRTriggerType.php',
		'HL7\FHIR\R4\FHIRElement\FHIRTypeDerivationRule' =>
			'FHIRElement/FHIRTypeDerivationRule.php',
		'HL7\FHIR\R4\FHIRElement\FHIRTypeRestfulInteraction' =>
			'FHIRElement/FHIRTypeRestfulInteraction.php',
		'HL7\FHIR\R4\FHIRElement\FHIRUDIEntryType' => 'FHIRElement/FHIRUDIEntryType.php',
		'HL7\FHIR\R4\FHIRElement\FHIRUnitsOfTime' => 'FHIRElement/FHIRUnitsOfTime.php',
		'HL7\FHIR\R4\FHIRElement\FHIRUnsignedInt' => 'FHIRElement/FHIRUnsignedInt.php',
		'HL7\FHIR\R4\FHIRElement\FHIRUri' => 'FHIRElement/FHIRUri.php',
		'HL7\FHIR\R4\FHIRElement\FHIRUrl' => 'FHIRElement/FHIRUrl.php',
		'HL7\FHIR\R4\FHIRElement\FHIRUsageContext' => 'FHIRElement/FHIRUsageContext.php',
		'HL7\FHIR\R4\FHIRElement\FHIRUse' => 'FHIRElement/FHIRUse.php',
		'HL7\FHIR\R4\FHIRElement\FHIRUuid' => 'FHIRElement/FHIRUuid.php',
		'HL7\FHIR\R4\FHIRElement\FHIRVariableType' => 'FHIRElement/FHIRVariableType.php',
		'HL7\FHIR\R4\FHIRElement\FHIRVConfidentialityClassification' =>
			'FHIRElement/FHIRVConfidentialityClassification.php',
		'HL7\FHIR\R4\FHIRElement\FHIRVisionBase' => 'FHIRElement/FHIRVisionBase.php',
		'HL7\FHIR\R4\FHIRElement\FHIRVisionEyes' => 'FHIRElement/FHIRVisionEyes.php',
		'HL7\FHIR\R4\FHIRElement\FHIRXPathUsageType' => 'FHIRElement/FHIRXPathUsageType.php',
		'HL7\FHIR\R4\FHIRIdPrimitive' => 'FHIRIdPrimitive.php',
		'HL7\FHIR\R4\FHIRInstantPrimitive' => 'FHIRInstantPrimitive.php',
		'HL7\FHIR\R4\FHIRIntegerPrimitive' => 'FHIRIntegerPrimitive.php',
		'HL7\FHIR\R4\FHIRMarkdownPrimitive' => 'FHIRMarkdownPrimitive.php',
		'HL7\FHIR\R4\FHIROidPrimitive' => 'FHIROidPrimitive.php',
		'HL7\FHIR\R4\FHIRPositiveIntPrimitive' => 'FHIRPositiveIntPrimitive.php',
		'HL7\FHIR\R4\FHIRResource' => 'FHIRResource.php',
		'HL7\FHIR\R4\FHIRResourceContainer' => 'FHIRResourceContainer.php',
		'HL7\FHIR\R4\FHIRResource\FHIRBinary' => 'FHIRResource/FHIRBinary.php',
		'HL7\FHIR\R4\FHIRResource\FHIRBundle' => 'FHIRResource/FHIRBundle.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource' => 'FHIRResource/FHIRDomainResource.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRAccount' =>
			'FHIRResource/FHIRDomainResource/FHIRAccount.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRActivityDefinition' =>
			'FHIRResource/FHIRDomainResource/FHIRActivityDefinition.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRAdverseEvent' =>
			'FHIRResource/FHIRDomainResource/FHIRAdverseEvent.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance' =>
			'FHIRResource/FHIRDomainResource/FHIRAllergyIntolerance.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRAppointment' =>
			'FHIRResource/FHIRDomainResource/FHIRAppointment.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRAppointmentResponse' =>
			'FHIRResource/FHIRDomainResource/FHIRAppointmentResponse.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRAuditEvent' =>
			'FHIRResource/FHIRDomainResource/FHIRAuditEvent.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRBasic' =>
			'FHIRResource/FHIRDomainResource/FHIRBasic.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRBiologicallyDerivedProduct' =>
			'FHIRResource/FHIRDomainResource/FHIRBiologicallyDerivedProduct.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRBodyStructure' =>
			'FHIRResource/FHIRDomainResource/FHIRBodyStructure.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement' =>
			'FHIRResource/FHIRDomainResource/FHIRCapabilityStatement.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRCarePlan' =>
			'FHIRResource/FHIRDomainResource/FHIRCarePlan.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRCareTeam' =>
			'FHIRResource/FHIRDomainResource/FHIRCareTeam.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRCatalogEntry' =>
			'FHIRResource/FHIRDomainResource/FHIRCatalogEntry.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRChargeItem' =>
			'FHIRResource/FHIRDomainResource/FHIRChargeItem.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRChargeItemDefinition' =>
			'FHIRResource/FHIRDomainResource/FHIRChargeItemDefinition.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRClaim' =>
			'FHIRResource/FHIRDomainResource/FHIRClaim.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRClaimResponse' =>
			'FHIRResource/FHIRDomainResource/FHIRClaimResponse.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRClinicalImpression' =>
			'FHIRResource/FHIRDomainResource/FHIRClinicalImpression.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRCodeSystem' =>
			'FHIRResource/FHIRDomainResource/FHIRCodeSystem.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRCommunication' =>
			'FHIRResource/FHIRDomainResource/FHIRCommunication.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRCommunicationRequest' =>
			'FHIRResource/FHIRDomainResource/FHIRCommunicationRequest.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRCompartmentDefinition' =>
			'FHIRResource/FHIRDomainResource/FHIRCompartmentDefinition.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRComposition' =>
			'FHIRResource/FHIRDomainResource/FHIRComposition.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRConceptMap' =>
			'FHIRResource/FHIRDomainResource/FHIRConceptMap.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRCondition' =>
			'FHIRResource/FHIRDomainResource/FHIRCondition.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRConsent' =>
			'FHIRResource/FHIRDomainResource/FHIRConsent.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRContract' =>
			'FHIRResource/FHIRDomainResource/FHIRContract.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRCoverage' =>
			'FHIRResource/FHIRDomainResource/FHIRCoverage.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRCoverageEligibilityRequest' =>
			'FHIRResource/FHIRDomainResource/FHIRCoverageEligibilityRequest.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRCoverageEligibilityResponse' =>
			'FHIRResource/FHIRDomainResource/FHIRCoverageEligibilityResponse.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRDetectedIssue' =>
			'FHIRResource/FHIRDomainResource/FHIRDetectedIssue.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRDevice' =>
			'FHIRResource/FHIRDomainResource/FHIRDevice.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRDeviceDefinition' =>
			'FHIRResource/FHIRDomainResource/FHIRDeviceDefinition.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRDeviceMetric' =>
			'FHIRResource/FHIRDomainResource/FHIRDeviceMetric.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRDeviceRequest' =>
			'FHIRResource/FHIRDomainResource/FHIRDeviceRequest.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRDeviceUseStatement' =>
			'FHIRResource/FHIRDomainResource/FHIRDeviceUseStatement.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRDiagnosticReport' =>
			'FHIRResource/FHIRDomainResource/FHIRDiagnosticReport.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRDocumentManifest' =>
			'FHIRResource/FHIRDomainResource/FHIRDocumentManifest.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRDocumentReference' =>
			'FHIRResource/FHIRDomainResource/FHIRDocumentReference.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIREffectEvidenceSynthesis' =>
			'FHIRResource/FHIRDomainResource/FHIREffectEvidenceSynthesis.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIREncounter' =>
			'FHIRResource/FHIRDomainResource/FHIREncounter.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIREndpoint' =>
			'FHIRResource/FHIRDomainResource/FHIREndpoint.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIREnrollmentRequest' =>
			'FHIRResource/FHIRDomainResource/FHIREnrollmentRequest.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIREnrollmentResponse' =>
			'FHIRResource/FHIRDomainResource/FHIREnrollmentResponse.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare' =>
			'FHIRResource/FHIRDomainResource/FHIREpisodeOfCare.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIREventDefinition' =>
			'FHIRResource/FHIRDomainResource/FHIREventDefinition.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIREvidence' =>
			'FHIRResource/FHIRDomainResource/FHIREvidence.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIREvidenceVariable' =>
			'FHIRResource/FHIRDomainResource/FHIREvidenceVariable.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRExampleScenario' =>
			'FHIRResource/FHIRDomainResource/FHIRExampleScenario.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit' =>
			'FHIRResource/FHIRDomainResource/FHIRExplanationOfBenefit.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory' =>
			'FHIRResource/FHIRDomainResource/FHIRFamilyMemberHistory.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRFlag' =>
			'FHIRResource/FHIRDomainResource/FHIRFlag.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRGoal' =>
			'FHIRResource/FHIRDomainResource/FHIRGoal.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRGraphDefinition' =>
			'FHIRResource/FHIRDomainResource/FHIRGraphDefinition.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRGroup' =>
			'FHIRResource/FHIRDomainResource/FHIRGroup.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRGuidanceResponse' =>
			'FHIRResource/FHIRDomainResource/FHIRGuidanceResponse.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRHealthcareService' =>
			'FHIRResource/FHIRDomainResource/FHIRHealthcareService.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRImagingStudy' =>
			'FHIRResource/FHIRDomainResource/FHIRImagingStudy.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRImmunization' =>
			'FHIRResource/FHIRDomainResource/FHIRImmunization.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRImmunizationEvaluation' =>
			'FHIRResource/FHIRDomainResource/FHIRImmunizationEvaluation.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRImmunizationRecommendation' =>
			'FHIRResource/FHIRDomainResource/FHIRImmunizationRecommendation.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRImplementationGuide' =>
			'FHIRResource/FHIRDomainResource/FHIRImplementationGuide.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRInsurancePlan' =>
			'FHIRResource/FHIRDomainResource/FHIRInsurancePlan.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRInvoice' =>
			'FHIRResource/FHIRDomainResource/FHIRInvoice.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRLibrary' =>
			'FHIRResource/FHIRDomainResource/FHIRLibrary.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRLinkage' =>
			'FHIRResource/FHIRDomainResource/FHIRLinkage.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRList' =>
			'FHIRResource/FHIRDomainResource/FHIRList.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRLocation' =>
			'FHIRResource/FHIRDomainResource/FHIRLocation.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRMeasure' =>
			'FHIRResource/FHIRDomainResource/FHIRMeasure.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRMeasureReport' =>
			'FHIRResource/FHIRDomainResource/FHIRMeasureReport.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRMedia' =>
			'FHIRResource/FHIRDomainResource/FHIRMedia.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRMedication' =>
			'FHIRResource/FHIRDomainResource/FHIRMedication.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration' =>
			'FHIRResource/FHIRDomainResource/FHIRMedicationAdministration.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRMedicationDispense' =>
			'FHIRResource/FHIRDomainResource/FHIRMedicationDispense.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRMedicationKnowledge' =>
			'FHIRResource/FHIRDomainResource/FHIRMedicationKnowledge.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRMedicationRequest' =>
			'FHIRResource/FHIRDomainResource/FHIRMedicationRequest.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRMedicationStatement' =>
			'FHIRResource/FHIRDomainResource/FHIRMedicationStatement.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProduct' =>
			'FHIRResource/FHIRDomainResource/FHIRMedicinalProduct.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductAuthorization' =>
			'FHIRResource/FHIRDomainResource/FHIRMedicinalProductAuthorization.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductContraindication' =>
			'FHIRResource/FHIRDomainResource/FHIRMedicinalProductContraindication.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductIndication' =>
			'FHIRResource/FHIRDomainResource/FHIRMedicinalProductIndication.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductIngredient' =>
			'FHIRResource/FHIRDomainResource/FHIRMedicinalProductIngredient.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductInteraction' =>
			'FHIRResource/FHIRDomainResource/FHIRMedicinalProductInteraction.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductManufactured' =>
			'FHIRResource/FHIRDomainResource/FHIRMedicinalProductManufactured.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductPackaged' =>
			'FHIRResource/FHIRDomainResource/FHIRMedicinalProductPackaged.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductPharmaceutical' =>
			'FHIRResource/FHIRDomainResource/FHIRMedicinalProductPharmaceutical.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductUndesirableEffect' =>
			'FHIRResource/FHIRDomainResource/FHIRMedicinalProductUndesirableEffect.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRMessageDefinition' =>
			'FHIRResource/FHIRDomainResource/FHIRMessageDefinition.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRMessageHeader' =>
			'FHIRResource/FHIRDomainResource/FHIRMessageHeader.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRMolecularSequence' =>
			'FHIRResource/FHIRDomainResource/FHIRMolecularSequence.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRNamingSystem' =>
			'FHIRResource/FHIRDomainResource/FHIRNamingSystem.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRNutritionOrder' =>
			'FHIRResource/FHIRDomainResource/FHIRNutritionOrder.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRObservation' =>
			'FHIRResource/FHIRDomainResource/FHIRObservation.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRObservationDefinition' =>
			'FHIRResource/FHIRDomainResource/FHIRObservationDefinition.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIROperationDefinition' =>
			'FHIRResource/FHIRDomainResource/FHIROperationDefinition.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIROperationOutcome' =>
			'FHIRResource/FHIRDomainResource/FHIROperationOutcome.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIROrganization' =>
			'FHIRResource/FHIRDomainResource/FHIROrganization.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIROrganizationAffiliation' =>
			'FHIRResource/FHIRDomainResource/FHIROrganizationAffiliation.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRPatient' =>
			'FHIRResource/FHIRDomainResource/FHIRPatient.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRPaymentNotice' =>
			'FHIRResource/FHIRDomainResource/FHIRPaymentNotice.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRPaymentReconciliation' =>
			'FHIRResource/FHIRDomainResource/FHIRPaymentReconciliation.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRPerson' =>
			'FHIRResource/FHIRDomainResource/FHIRPerson.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRPlanDefinition' =>
			'FHIRResource/FHIRDomainResource/FHIRPlanDefinition.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRPractitioner' =>
			'FHIRResource/FHIRDomainResource/FHIRPractitioner.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRPractitionerRole' =>
			'FHIRResource/FHIRDomainResource/FHIRPractitionerRole.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRProcedure' =>
			'FHIRResource/FHIRDomainResource/FHIRProcedure.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRProvenance' =>
			'FHIRResource/FHIRDomainResource/FHIRProvenance.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRQuestionnaire' =>
			'FHIRResource/FHIRDomainResource/FHIRQuestionnaire.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRQuestionnaireResponse' =>
			'FHIRResource/FHIRDomainResource/FHIRQuestionnaireResponse.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRRelatedPerson' =>
			'FHIRResource/FHIRDomainResource/FHIRRelatedPerson.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRRequestGroup' =>
			'FHIRResource/FHIRDomainResource/FHIRRequestGroup.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRResearchDefinition' =>
			'FHIRResource/FHIRDomainResource/FHIRResearchDefinition.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRResearchElementDefinition' =>
			'FHIRResource/FHIRDomainResource/FHIRResearchElementDefinition.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRResearchStudy' =>
			'FHIRResource/FHIRDomainResource/FHIRResearchStudy.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRResearchSubject' =>
			'FHIRResource/FHIRDomainResource/FHIRResearchSubject.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRRiskAssessment' =>
			'FHIRResource/FHIRDomainResource/FHIRRiskAssessment.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRRiskEvidenceSynthesis' =>
			'FHIRResource/FHIRDomainResource/FHIRRiskEvidenceSynthesis.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRSchedule' =>
			'FHIRResource/FHIRDomainResource/FHIRSchedule.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRSearchParameter' =>
			'FHIRResource/FHIRDomainResource/FHIRSearchParameter.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRServiceRequest' =>
			'FHIRResource/FHIRDomainResource/FHIRServiceRequest.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRSlot' =>
			'FHIRResource/FHIRDomainResource/FHIRSlot.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRSpecimen' =>
			'FHIRResource/FHIRDomainResource/FHIRSpecimen.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRSpecimenDefinition' =>
			'FHIRResource/FHIRDomainResource/FHIRSpecimenDefinition.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRStructureDefinition' =>
			'FHIRResource/FHIRDomainResource/FHIRStructureDefinition.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRStructureMap' =>
			'FHIRResource/FHIRDomainResource/FHIRStructureMap.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRSubscription' =>
			'FHIRResource/FHIRDomainResource/FHIRSubscription.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRSubstance' =>
			'FHIRResource/FHIRDomainResource/FHIRSubstance.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceNucleicAcid' =>
			'FHIRResource/FHIRDomainResource/FHIRSubstanceNucleicAcid.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRSubstancePolymer' =>
			'FHIRResource/FHIRDomainResource/FHIRSubstancePolymer.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceProtein' =>
			'FHIRResource/FHIRDomainResource/FHIRSubstanceProtein.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceReferenceInformation' =>
			'FHIRResource/FHIRDomainResource/FHIRSubstanceReferenceInformation.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceSourceMaterial' =>
			'FHIRResource/FHIRDomainResource/FHIRSubstanceSourceMaterial.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRSubstanceSpecification' =>
			'FHIRResource/FHIRDomainResource/FHIRSubstanceSpecification.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRSupplyDelivery' =>
			'FHIRResource/FHIRDomainResource/FHIRSupplyDelivery.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRSupplyRequest' =>
			'FHIRResource/FHIRDomainResource/FHIRSupplyRequest.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRTask' =>
			'FHIRResource/FHIRDomainResource/FHIRTask.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRTerminologyCapabilities' =>
			'FHIRResource/FHIRDomainResource/FHIRTerminologyCapabilities.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRTestReport' =>
			'FHIRResource/FHIRDomainResource/FHIRTestReport.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRTestScript' =>
			'FHIRResource/FHIRDomainResource/FHIRTestScript.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRValueSet' =>
			'FHIRResource/FHIRDomainResource/FHIRValueSet.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRVerificationResult' =>
			'FHIRResource/FHIRDomainResource/FHIRVerificationResult.php',
		'HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRVisionPrescription' =>
			'FHIRResource/FHIRDomainResource/FHIRVisionPrescription.php',
		'HL7\FHIR\R4\FHIRResource\FHIRParameters' => 'FHIRResource/FHIRParameters.php',
		'HL7\FHIR\R4\FHIRSampledDataDataTypePrimitive' => 'FHIRSampledDataDataTypePrimitive.php',
		'HL7\FHIR\R4\FHIRStringPrimitive' => 'FHIRStringPrimitive.php',
		'HL7\FHIR\R4\FHIRTimePrimitive' => 'FHIRTimePrimitive.php',
		'HL7\FHIR\R4\FHIRUnsignedIntPrimitive' => 'FHIRUnsignedIntPrimitive.php',
		'HL7\FHIR\R4\FHIRUriPrimitive' => 'FHIRUriPrimitive.php',
		'HL7\FHIR\R4\FHIRUrlPrimitive' => 'FHIRUrlPrimitive.php',
		'HL7\FHIR\R4\FHIRUuidPrimitive' => 'FHIRUuidPrimitive.php',
		'HL7\FHIR\R4\FHIRXHTML' => 'FHIRXHTML.php',
	];

	/** @var bool */
	private static bool $_registered = false;

	/**
	 * @return bool
	 * @throws \Exception
	 */
	public static function register(): bool
	{
		if (self::$_registered) {
			return self::$_registered;
		}
		return self::$_registered = spl_autoload_register([__CLASS__, 'loadClass'], true);
	}

	/**
	 * @return bool
	 */
	public static function unregister(): bool
	{
		if (self::$_registered) {
			if (spl_autoload_unregister([__CLASS__, 'loadClass'])) {
				self::$_registered = false;
				return true;
			}
		}
		return false;
	}

	/**
	 * Please see associated documentation for more information on what this method looks for.
	 *
	 * @param string $class
	 * @return bool|null
	 */
	public static function loadClass(string $class): ?bool
	{
		if (isset(self::_CLASS_MAP[$class])) {
			return (bool) require __DIR__ . DIRECTORY_SEPARATOR . self::_CLASS_MAP[$class];
		}
		return null;
	}
}
