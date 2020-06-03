<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Endroid\\QrCode\\Bundle\\Controller\\QrCodeController' => $vendorDir . '/endroid/qrcode/src/Bundle/Controller/QrCodeController.php',
    'Endroid\\QrCode\\Bundle\\DependencyInjection\\Configuration' => $vendorDir . '/endroid/qrcode/src/Bundle/DependencyInjection/Configuration.php',
    'Endroid\\QrCode\\Bundle\\DependencyInjection\\EndroidQrCodeExtension' => $vendorDir . '/endroid/qrcode/src/Bundle/DependencyInjection/EndroidQrCodeExtension.php',
    'Endroid\\QrCode\\Bundle\\EndroidQrCodeBundle' => $vendorDir . '/endroid/qrcode/src/Bundle/EndroidQrCodeBundle.php',
    'Endroid\\QrCode\\Bundle\\Twig\\Extension\\QrCodeExtension' => $vendorDir . '/endroid/qrcode/src/Bundle/Twig/Extension/QrCodeExtension.php',
    'Endroid\\QrCode\\Exceptions\\DataDoesntExistsException' => $vendorDir . '/endroid/qrcode/src/Exceptions/DataDoesntExistsException.php',
    'Endroid\\QrCode\\Exceptions\\FreeTypeLibraryMissingException' => $vendorDir . '/endroid/qrcode/src/Exceptions/FreeTypeLibraryMissingException.php',
    'Endroid\\QrCode\\Exceptions\\ImageFunctionFailedException' => $vendorDir . '/endroid/qrcode/src/Exceptions/ImageFunctionFailedException.php',
    'Endroid\\QrCode\\Exceptions\\ImageFunctionUnknownException' => $vendorDir . '/endroid/qrcode/src/Exceptions/ImageFunctionUnknownException.php',
    'Endroid\\QrCode\\Exceptions\\ImageSizeTooLargeException' => $vendorDir . '/endroid/qrcode/src/Exceptions/ImageSizeTooLargeException.php',
    'Endroid\\QrCode\\Exceptions\\ImageTypeInvalidException' => $vendorDir . '/endroid/qrcode/src/Exceptions/ImageTypeInvalidException.php',
    'Endroid\\QrCode\\Exceptions\\VersionTooLargeException' => $vendorDir . '/endroid/qrcode/src/Exceptions/VersionTooLargeException.php',
    'Endroid\\QrCode\\Factory\\QrCodeFactory' => $vendorDir . '/endroid/qrcode/src/Factory/QrCodeFactory.php',
    'Endroid\\QrCode\\QrCode' => $vendorDir . '/endroid/qrcode/src/QrCode.php',
    'LiveVotingRemoveDataConfirm' => $baseDir . '/classes/uninstall/class.LiveVotingRemoveDataConfirm.php',
    'LiveVoting\\Access\\Access' => $baseDir . '/src/Access/Access.php',
    'LiveVoting\\Access\\Ilias' => $baseDir . '/src/Access/Ilias.php',
    'LiveVoting\\Api\\xlvoApi' => $baseDir . '/src/Api/xlvoApi.php',
    'LiveVoting\\Cache\\CachingActiveRecord' => $baseDir . '/src/Cache/CachingActiveRecord.php',
    'LiveVoting\\Cache\\Initialisable' => $baseDir . '/src/Cache/Initialisable.php',
    'LiveVoting\\Cache\\Version\\v52\\xlvoCache' => $baseDir . '/src/Cache/Version/v52/xlvoCache.php',
    'LiveVoting\\Cache\\arConnectorCache' => $baseDir . '/src/Cache/arConnectorCache.php',
    'LiveVoting\\Cache\\xlvoCacheFactory' => $baseDir . '/src/Cache/xlvoCacheFactory.php',
    'LiveVoting\\Cache\\xlvoCacheService' => $baseDir . '/src/Cache/xlvoCacheService.php',
    'LiveVoting\\Conf\\xlvoConf' => $baseDir . '/src/Conf/xlvoConf.php',
    'LiveVoting\\Conf\\xlvoConfFormGUI' => $baseDir . '/src/Conf/xlvoConfFormGUI.php',
    'LiveVoting\\Conf\\xlvoConfOld' => $baseDir . '/src/Conf/xlvoConfOld.php',
    'LiveVoting\\Context\\InitialisationManager' => $baseDir . '/src/Context/InitialisationManager.php',
    'LiveVoting\\Context\\Initialisation\\Version\\v53\\xlvoBasicInitialisation' => $baseDir . '/src/Context/Initialisation/Version/v53/xlvoBasicInitialisation.php',
    'LiveVoting\\Context\\Initialisation\\Version\\v53\\xlvoSkin' => $baseDir . '/src/Context/Initialisation/Version/v53/xlvoStyleDefinition.php',
    'LiveVoting\\Context\\Initialisation\\Version\\v53\\xlvoStyleDefinition' => $baseDir . '/src/Context/Initialisation/Version/v53/xlvoStyleDefinition.php',
    'LiveVoting\\Context\\Initialisation\\Version\\v6\\xlvoBasicInitialisation' => $baseDir . '/src/Context/Initialisation/Version/v6/xlvoBasicInitialisation.php',
    'LiveVoting\\Context\\Initialisation\\Version\\v6\\xlvoSkin' => $baseDir . '/src/Context/Initialisation/Version/v6/xlvoStyleDefinition.php',
    'LiveVoting\\Context\\Initialisation\\Version\\v6\\xlvoStyleDefinition' => $baseDir . '/src/Context/Initialisation/Version/v6/xlvoStyleDefinition.php',
    'LiveVoting\\Context\\Param\\ParamManager' => $baseDir . '/src/Context/Param/ParamManager.php',
    'LiveVoting\\Context\\xlvoContext' => $baseDir . '/src/Context/xlvoContext.php',
    'LiveVoting\\Context\\xlvoContextLiveVoting' => $baseDir . '/src/Context/xlvoContextLiveVoting.php',
    'LiveVoting\\Context\\xlvoDummyUser' => $baseDir . '/src/Context/xlvoDummyUser.php',
    'LiveVoting\\Context\\xlvoILIAS' => $baseDir . '/src/Context/xlvoILIAS.php',
    'LiveVoting\\Context\\xlvoInitialisation' => $baseDir . '/src/Context/xlvoInitialisation.php',
    'LiveVoting\\Context\\xlvoObjectDefinition' => $baseDir . '/src/Context/xlvoObjectDefinition.php',
    'LiveVoting\\Context\\xlvoRbacReview' => $baseDir . '/src/Context/xlvoRbacReview.php',
    'LiveVoting\\Context\\xlvoRbacSystem' => $baseDir . '/src/Context/xlvoRbacSystem.php',
    'LiveVoting\\Display\\Bar\\xlvoAbstractBarGUI' => $baseDir . '/src/Display/Bar/xlvoAbstractBarGUI.php',
    'LiveVoting\\Display\\Bar\\xlvoBarCollectionGUI' => $baseDir . '/src/Display/Bar/xlvoBarCollectionGUI.php',
    'LiveVoting\\Display\\Bar\\xlvoBarFreeInputsGUI' => $baseDir . '/src/Display/Bar/xlvoBarFreeInputsGUI.php',
    'LiveVoting\\Display\\Bar\\xlvoBarGUI' => $baseDir . '/src/Display/Bar/xlvoBarGUI.php',
    'LiveVoting\\Display\\Bar\\xlvoBarGroupingCollectionGUI' => $baseDir . '/src/Display/Bar/xlvoBarGroupingCollectionGUI.php',
    'LiveVoting\\Display\\Bar\\xlvoBarInfoGUI' => $baseDir . '/src/Display/Bar/xlvoBarInfoGUI.php',
    'LiveVoting\\Display\\Bar\\xlvoBarMovableGUI' => $baseDir . '/src/Display/Bar/xlvoBarMovableGUI.php',
    'LiveVoting\\Display\\Bar\\xlvoBarOptionGUI' => $baseDir . '/src/Display/Bar/xlvoBarOptionGUI.php',
    'LiveVoting\\Display\\Bar\\xlvoBarPercentageGUI' => $baseDir . '/src/Display/Bar/xlvoBarPercentageGUI.php',
    'LiveVoting\\Display\\Bar\\xlvoGeneralBarGUI' => $baseDir . '/src/Display/Bar/xlvoGeneralBarGUI.php',
    'LiveVoting\\Exceptions\\xlvoException' => $baseDir . '/src/Exceptions/xlvoException.php',
    'LiveVoting\\Exceptions\\xlvoPlayerException' => $baseDir . '/src/Exceptions/xlvoPlayerException.php',
    'LiveVoting\\Exceptions\\xlvoSubFormGUIHandleFieldException' => $baseDir . '/src/Exceptions/xlvoSubFormGUIHandleFieldException.php',
    'LiveVoting\\Exceptions\\xlvoVoterException' => $baseDir . '/src/Exceptions/xlvoVoterException.php',
    'LiveVoting\\Exceptions\\xlvoVotingManagerException' => $baseDir . '/src/Exceptions/xlvoVotingManagerException.php',
    'LiveVoting\\GUI\\xlvoGUI' => $baseDir . '/src/GUI/xlvoGUI.php',
    'LiveVoting\\GUI\\xlvoLinkButton' => $baseDir . '/src/GUI/xlvoLinkButton.php',
    'LiveVoting\\GUI\\xlvoToolbarGUI' => $baseDir . '/src/GUI/xlvoToolbarGUI.php',
    'LiveVoting\\Js\\xlvoJs' => $baseDir . '/src/Js/xlvoJs.php',
    'LiveVoting\\Js\\xlvoJsResponse' => $baseDir . '/src/Js/xlvoJsResponse.php',
    'LiveVoting\\Js\\xlvoJsSettings' => $baseDir . '/src/Js/xlvoJsSettings.php',
    'LiveVoting\\Option\\xlvoData' => $baseDir . '/src/Option/xlvoData.php',
    'LiveVoting\\Option\\xlvoOption' => $baseDir . '/src/Option/xlvoOption.php',
    'LiveVoting\\Option\\xlvoOptionOld' => $baseDir . '/src/Option/xlvoOptionOld.php',
    'LiveVoting\\Pin\\xlvoPin' => $baseDir . '/src/Pin/xlvoPin.php',
    'LiveVoting\\Player\\QR\\xlvoQR' => $baseDir . '/src/Player/QR/xlvoQR.php',
    'LiveVoting\\Player\\QR\\xlvoQRModalGUI' => $baseDir . '/src/Player/QR/xlvoQRModalGUI.php',
    'LiveVoting\\Player\\xlvoDisplayPlayerGUI' => $baseDir . '/src/Player/xlvoDisplayPlayerGUI.php',
    'LiveVoting\\Player\\xlvoPlayer' => $baseDir . '/src/Player/xlvoPlayer.php',
    'LiveVoting\\PowerPointExport\\PowerPointExport' => $baseDir . '/src/PowerPointExport/PowerPointExport.php',
    'LiveVoting\\Puk\\Puk' => $baseDir . '/src/Puk/Puk.php',
    'LiveVoting\\QuestionTypes\\CorrectOrder\\xlvoCorrectOrderResultGUI' => $baseDir . '/src/QuestionTypes/CorrectOrder/xlvoCorrectOrderResultGUI.php',
    'LiveVoting\\QuestionTypes\\CorrectOrder\\xlvoCorrectOrderResultsGUI' => $baseDir . '/src/QuestionTypes/CorrectOrder/xlvoCorrectOrderResultsGUI.php',
    'LiveVoting\\QuestionTypes\\CorrectOrder\\xlvoCorrectOrderSubFormGUI' => $baseDir . '/src/QuestionTypes/CorrectOrder/xlvoCorrectOrderSubFormGUI.php',
    'LiveVoting\\QuestionTypes\\FreeInput\\xlvoFreeInputCategoriesGUI' => $baseDir . '/src/QuestionTypes/FreeInput/xlvoFreeInputCategoriesGUI.php',
    'LiveVoting\\QuestionTypes\\FreeInput\\xlvoFreeInputCategory' => $baseDir . '/src/QuestionTypes/FreeInput/xlvoFreeInputCategory.php',
    'LiveVoting\\QuestionTypes\\FreeInput\\xlvoFreeInputResultGUI' => $baseDir . '/src/QuestionTypes/FreeInput/xlvoFreeInputResultGUI.php',
    'LiveVoting\\QuestionTypes\\FreeInput\\xlvoFreeInputResultsGUI' => $baseDir . '/src/QuestionTypes/FreeInput/xlvoFreeInputResultsGUI.php',
    'LiveVoting\\QuestionTypes\\FreeInput\\xlvoFreeInputSubFormGUI' => $baseDir . '/src/QuestionTypes/FreeInput/xlvoFreeInputSubFormGUI.php',
    'LiveVoting\\QuestionTypes\\FreeInput\\xlvoFreeInputVotingFormGUI' => $baseDir . '/src/QuestionTypes/FreeInput/xlvoFreeInputVotingFormGUI.php',
    'LiveVoting\\QuestionTypes\\FreeOrder\\xlvoFreeOrderResultGUI' => $baseDir . '/src/QuestionTypes/FreeOrder/xlvoFreeOrderResultGUI.php',
    'LiveVoting\\QuestionTypes\\FreeOrder\\xlvoFreeOrderResultsGUI' => $baseDir . '/src/QuestionTypes/FreeOrder/xlvoFreeOrderResultsGUI.php',
    'LiveVoting\\QuestionTypes\\FreeOrder\\xlvoFreeOrderSubFormGUI' => $baseDir . '/src/QuestionTypes/FreeOrder/xlvoFreeOrderSubFormGUI.php',
    'LiveVoting\\QuestionTypes\\NumberRange\\xlvoNumberRangeResultGUI' => $baseDir . '/src/QuestionTypes/NumberRange/xlvoNumberRangeResultGUI.php',
    'LiveVoting\\QuestionTypes\\NumberRange\\xlvoNumberRangeResultsGUI' => $baseDir . '/src/QuestionTypes/NumberRange/xlvoNumberRangeResultsGUI.php',
    'LiveVoting\\QuestionTypes\\NumberRange\\xlvoNumberRangeSubFormGUI' => $baseDir . '/src/QuestionTypes/NumberRange/xlvoNumberRangeSubFormGUI.php',
    'LiveVoting\\QuestionTypes\\NumberRange\\xlvoNumberRangeVotingFormGUI' => $baseDir . '/src/QuestionTypes/NumberRange/xlvoNumberRangeVotingFormGUI.php',
    'LiveVoting\\QuestionTypes\\SingleVote\\xlvoSingleVoteResultGUI' => $baseDir . '/src/QuestionTypes/SingleVote/xlvoSingleVoteResultGUI.php',
    'LiveVoting\\QuestionTypes\\SingleVote\\xlvoSingleVoteResultsGUI' => $baseDir . '/src/QuestionTypes/SingleVote/xlvoSingleVoteResultsGUI.php',
    'LiveVoting\\QuestionTypes\\SingleVote\\xlvoSingleVoteSubFormGUI' => $baseDir . '/src/QuestionTypes/SingleVote/xlvoSingleVoteSubFormGUI.php',
    'LiveVoting\\QuestionTypes\\xlvoInputResultsGUI' => $baseDir . '/src/QuestionTypes/xlvoInputResultsGUI.php',
    'LiveVoting\\QuestionTypes\\xlvoQuestionTypes' => $baseDir . '/src/QuestionTypes/xlvoQuestionTypes.php',
    'LiveVoting\\QuestionTypes\\xlvoQuestionTypesGUI' => $baseDir . '/src/QuestionTypes/xlvoQuestionTypesGUI.php',
    'LiveVoting\\QuestionTypes\\xlvoResultGUI' => $baseDir . '/src/QuestionTypes/xlvoResultGUI.php',
    'LiveVoting\\QuestionTypes\\xlvoSubFormGUI' => $baseDir . '/src/QuestionTypes/xlvoSubFormGUI.php',
    'LiveVoting\\Results\\xlvoResults' => $baseDir . '/src/Results/xlvoResults.php',
    'LiveVoting\\Results\\xlvoResultsTableGUI' => $baseDir . '/src/Results/xlvoResultsTableGUI.php',
    'LiveVoting\\Round\\xlvoRound' => $baseDir . '/src/Round/xlvoRound.php',
    'LiveVoting\\Session\\xlvoSessionHandler' => $baseDir . '/src/Session/xlvoSessionHandler.php',
    'LiveVoting\\User\\xlvoParticipant' => $baseDir . '/src/User/xlvoParticipant.php',
    'LiveVoting\\User\\xlvoParticipants' => $baseDir . '/src/User/xlvoParticipants.php',
    'LiveVoting\\User\\xlvoUser' => $baseDir . '/src/User/xlvoUser.php',
    'LiveVoting\\User\\xlvoVoteHistoryObject' => $baseDir . '/src/Vote/xlvoVoteHistoryObject.php',
    'LiveVoting\\User\\xlvoVoteHistoryTableGUI' => $baseDir . '/src/Vote/xlvoVoteHistoryTableGUI.php',
    'LiveVoting\\Utils\\LiveVotingTrait' => $baseDir . '/src/Utils/LiveVotingTrait.php',
    'LiveVoting\\Vote\\xlvoVote' => $baseDir . '/src/Vote/xlvoVote.php',
    'LiveVoting\\Vote\\xlvoVoteOld' => $baseDir . '/src/Vote/xlvoVoteOld.php',
    'LiveVoting\\Voter\\xlvoVoter' => $baseDir . '/src/Voter/xlvoVoter.php',
    'LiveVoting\\Voting\\DuplicateToAnotherObjectSelectFormGUI' => $baseDir . '/src/Voting/DuplicateToAnotherObjectSelectFormGUI.php',
    'LiveVoting\\Voting\\xlvoVoting' => $baseDir . '/src/Voting/xlvoVoting.php',
    'LiveVoting\\Voting\\xlvoVotingConfig' => $baseDir . '/src/Voting/xlvoVotingConfig.php',
    'LiveVoting\\Voting\\xlvoVotingFormGUI' => $baseDir . '/src/Voting/xlvoVotingFormGUI.php',
    'LiveVoting\\Voting\\xlvoVotingInterface' => $baseDir . '/src/Voting/xlvoVotingInterface.php',
    'LiveVoting\\Voting\\xlvoVotingManager2' => $baseDir . '/src/Voting/xlvoVotingManager2.php',
    'LiveVoting\\Voting\\xlvoVotingTableGUI' => $baseDir . '/src/Voting/xlvoVotingTableGUI.php',
    'Symfony\\Component\\OptionsResolver\\Debug\\OptionsResolverIntrospector' => $vendorDir . '/symfony/options-resolver/Debug/OptionsResolverIntrospector.php',
    'Symfony\\Component\\OptionsResolver\\Exception\\AccessException' => $vendorDir . '/symfony/options-resolver/Exception/AccessException.php',
    'Symfony\\Component\\OptionsResolver\\Exception\\ExceptionInterface' => $vendorDir . '/symfony/options-resolver/Exception/ExceptionInterface.php',
    'Symfony\\Component\\OptionsResolver\\Exception\\InvalidArgumentException' => $vendorDir . '/symfony/options-resolver/Exception/InvalidArgumentException.php',
    'Symfony\\Component\\OptionsResolver\\Exception\\InvalidOptionsException' => $vendorDir . '/symfony/options-resolver/Exception/InvalidOptionsException.php',
    'Symfony\\Component\\OptionsResolver\\Exception\\MissingOptionsException' => $vendorDir . '/symfony/options-resolver/Exception/MissingOptionsException.php',
    'Symfony\\Component\\OptionsResolver\\Exception\\NoConfigurationException' => $vendorDir . '/symfony/options-resolver/Exception/NoConfigurationException.php',
    'Symfony\\Component\\OptionsResolver\\Exception\\NoSuchOptionException' => $vendorDir . '/symfony/options-resolver/Exception/NoSuchOptionException.php',
    'Symfony\\Component\\OptionsResolver\\Exception\\OptionDefinitionException' => $vendorDir . '/symfony/options-resolver/Exception/OptionDefinitionException.php',
    'Symfony\\Component\\OptionsResolver\\Exception\\UndefinedOptionsException' => $vendorDir . '/symfony/options-resolver/Exception/UndefinedOptionsException.php',
    'Symfony\\Component\\OptionsResolver\\Options' => $vendorDir . '/symfony/options-resolver/Options.php',
    'Symfony\\Component\\OptionsResolver\\OptionsResolver' => $vendorDir . '/symfony/options-resolver/OptionsResolver.php',
    'ilLiveVotingConfigGUI' => $baseDir . '/classes/class.ilLiveVotingConfigGUI.php',
    'ilLiveVotingPlugin' => $baseDir . '/classes/class.ilLiveVotingPlugin.php',
    'ilObjLiveVoting' => $baseDir . '/classes/class.ilObjLiveVoting.php',
    'ilObjLiveVotingAccess' => $baseDir . '/classes/class.ilObjLiveVotingAccess.php',
    'ilObjLiveVotingGUI' => $baseDir . '/classes/class.ilObjLiveVotingGUI.php',
    'ilObjLiveVotingListGUI' => $baseDir . '/classes/class.ilObjLiveVotingListGUI.php',
    'srag\\ActiveRecordConfig\\LiveVoting\\ActiveRecordConfig' => $vendorDir . '/srag/activerecordconfig/src/ActiveRecordConfig.php',
    'srag\\ActiveRecordConfig\\LiveVoting\\ActiveRecordConfigFactory' => $vendorDir . '/srag/activerecordconfig/src/ActiveRecordConfig.php',
    'srag\\ActiveRecordConfig\\LiveVoting\\ActiveRecordConfigFormGUI' => $vendorDir . '/srag/activerecordconfig/src/ActiveRecordConfigFormGUI.php',
    'srag\\ActiveRecordConfig\\LiveVoting\\ActiveRecordConfigGUI' => $vendorDir . '/srag/activerecordconfig/src/ActiveRecordConfigGUI.php',
    'srag\\ActiveRecordConfig\\LiveVoting\\ActiveRecordConfigRepository' => $vendorDir . '/srag/activerecordconfig/src/ActiveRecordConfig.php',
    'srag\\ActiveRecordConfig\\LiveVoting\\ActiveRecordConfigTableGUI' => $vendorDir . '/srag/activerecordconfig/src/ActiveRecordConfigTableGUI.php',
    'srag\\ActiveRecordConfig\\LiveVoting\\ActiveRecordObjectFormGUI' => $vendorDir . '/srag/activerecordconfig/src/ActiveRecordObjectFormGUI.php',
    'srag\\ActiveRecordConfig\\LiveVoting\\Config\\AbstractFactory' => $vendorDir . '/srag/activerecordconfig/src/Config/AbstractFactory.php',
    'srag\\ActiveRecordConfig\\LiveVoting\\Config\\AbstractRepository' => $vendorDir . '/srag/activerecordconfig/src/Config/AbstractRepository.php',
    'srag\\ActiveRecordConfig\\LiveVoting\\Config\\Config' => $vendorDir . '/srag/activerecordconfig/src/Config/Config.php',
    'srag\\ActiveRecordConfig\\LiveVoting\\Exception\\ActiveRecordConfigException' => $vendorDir . '/srag/activerecordconfig/src/Exception/ActiveRecordConfigException.php',
    'srag\\CustomInputGUIs\\LiveVoting\\CheckboxInputGUI\\AjaxCheckbox' => $vendorDir . '/srag/custominputguis/src/AjaxCheckbox/AjaxCheckbox.php',
    'srag\\CustomInputGUIs\\LiveVoting\\CheckboxInputGUI\\CheckboxInputGUI' => $vendorDir . '/srag/custominputguis/src/CheckboxInputGUI/CheckboxInputGUI.php',
    'srag\\CustomInputGUIs\\LiveVoting\\ColorPickerInputGUI\\ColorPickerInputGUI' => $vendorDir . '/srag/custominputguis/src/ColorPickerInputGUI/ColorPickerInputGUI.php',
    'srag\\CustomInputGUIs\\LiveVoting\\CustomInputGUIs' => $vendorDir . '/srag/custominputguis/src/CustomInputGUIs.php',
    'srag\\CustomInputGUIs\\LiveVoting\\CustomInputGUIsTrait' => $vendorDir . '/srag/custominputguis/src/CustomInputGUIsTrait.php',
    'srag\\CustomInputGUIs\\LiveVoting\\DateDurationInputGUI\\DateDurationInputGUI' => $vendorDir . '/srag/custominputguis/src/DateDurationInputGUI/DateDurationInputGUI.php',
    'srag\\CustomInputGUIs\\LiveVoting\\FormBuilder\\AbstractFormBuilder' => $vendorDir . '/srag/custominputguis/src/FormBuilder/AbstractFormBuilder.php',
    'srag\\CustomInputGUIs\\LiveVoting\\FormBuilder\\FormBuilder' => $vendorDir . '/srag/custominputguis/src/FormBuilder/FormBuilder.php',
    'srag\\CustomInputGUIs\\LiveVoting\\GlyphGUI\\GlyphGUI' => $vendorDir . '/srag/custominputguis/src/GlyphGUI/GlyphGUI.php',
    'srag\\CustomInputGUIs\\LiveVoting\\HiddenInputGUI\\HiddenInputGUI' => $vendorDir . '/srag/custominputguis/src/HiddenInputGUI/HiddenInputGUI.php',
    'srag\\CustomInputGUIs\\LiveVoting\\InputGUIWrapperUIInputComponent\\AbstractRenderer' => $vendorDir . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/AbstractRenderer.php',
    'srag\\CustomInputGUIs\\LiveVoting\\InputGUIWrapperUIInputComponent\\InputGUIWrapperConstraint' => $vendorDir . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/InputGUIWrapperConstraint.php',
    'srag\\CustomInputGUIs\\LiveVoting\\InputGUIWrapperUIInputComponent\\InputGUIWrapperConstraint54' => $vendorDir . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/InputGUIWrapperConstraint54.php',
    'srag\\CustomInputGUIs\\LiveVoting\\InputGUIWrapperUIInputComponent\\InputGUIWrapperConstraintTrait' => $vendorDir . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/InputGUIWrapperConstraintTrait.php',
    'srag\\CustomInputGUIs\\LiveVoting\\InputGUIWrapperUIInputComponent\\InputGUIWrapperUIInputComponent' => $vendorDir . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/InputGUIWrapperUIInputComponent.php',
    'srag\\CustomInputGUIs\\LiveVoting\\InputGUIWrapperUIInputComponent\\Renderer' => $vendorDir . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/Renderer.php',
    'srag\\CustomInputGUIs\\LiveVoting\\LearningProgressPieUI\\AbstractLearningProgressPieUI' => $vendorDir . '/srag/custominputguis/src/LearningProgressPieUI/AbstractLearningProgressPieUI.php',
    'srag\\CustomInputGUIs\\LiveVoting\\LearningProgressPieUI\\CountLearningProgressPieUI' => $vendorDir . '/srag/custominputguis/src/LearningProgressPieUI/CountLearningProgressPieUI.php',
    'srag\\CustomInputGUIs\\LiveVoting\\LearningProgressPieUI\\LearningProgressPieUI' => $vendorDir . '/srag/custominputguis/src/LearningProgressPieUI/LearningProgressPieUI.php',
    'srag\\CustomInputGUIs\\LiveVoting\\LearningProgressPieUI\\ObjIdsLearningProgressPieUI' => $vendorDir . '/srag/custominputguis/src/LearningProgressPieUI/ObjIdsLearningProgressPieUI.php',
    'srag\\CustomInputGUIs\\LiveVoting\\LearningProgressPieUI\\UsrIdsLearningProgressPieUI' => $vendorDir . '/srag/custominputguis/src/LearningProgressPieUI/UsrIdsLearningProgressPieUI.php',
    'srag\\CustomInputGUIs\\LiveVoting\\MultiLineInputGUI\\MultiLineInputGUI' => $vendorDir . '/srag/custominputguis/src/MultiLineInputGUI/MultiLineInputGUI.php',
    'srag\\CustomInputGUIs\\LiveVoting\\MultiLineNewInputGUI\\MultiLineNewInputGUI' => $vendorDir . '/srag/custominputguis/src/MultiLineNewInputGUI/MultiLineNewInputGUI.php',
    'srag\\CustomInputGUIs\\LiveVoting\\MultiSelectSearchInputGUI\\MultiSelectSearchInput2GUI' => $vendorDir . '/srag/custominputguis/src/MultiSelectSearchInputGUI/MultiSelectSearchInput2GUI.php',
    'srag\\CustomInputGUIs\\LiveVoting\\MultiSelectSearchInputGUI\\MultiSelectSearchInputGUI' => $vendorDir . '/srag/custominputguis/src/MultiSelectSearchInputGUI/MultiSelectSearchInputGUI.php',
    'srag\\CustomInputGUIs\\LiveVoting\\MultiSelectSearchNewInputGUI\\AbstractAjaxAutoCompleteCtrl' => $vendorDir . '/srag/custominputguis/src/MultiSelectSearchNewInputGUI/AbstractAjaxAutoCompleteCtrl.php',
    'srag\\CustomInputGUIs\\LiveVoting\\MultiSelectSearchNewInputGUI\\MultiSelectSearchNewInputGUI' => $vendorDir . '/srag/custominputguis/src/MultiSelectSearchNewInputGUI/MultiSelectSearchNewInputGUI.php',
    'srag\\CustomInputGUIs\\LiveVoting\\MultiSelectSearchNewInputGUI\\ObjectChildrenAjaxAutoCompleteCtrl' => $vendorDir . '/srag/custominputguis/src/MultiSelectSearchNewInputGUI/class.ObjectChildrenAjaxAutoCompleteCtrl.php',
    'srag\\CustomInputGUIs\\LiveVoting\\MultiSelectSearchNewInputGUI\\ObjectsAjaxAutoCompleteCtrl' => $vendorDir . '/srag/custominputguis/src/MultiSelectSearchNewInputGUI/class.ObjectsAjaxAutoCompleteCtrl.php',
    'srag\\CustomInputGUIs\\LiveVoting\\MultiSelectSearchNewInputGUI\\OrgUnitAjaxAutoCompleteCtrl' => $vendorDir . '/srag/custominputguis/src/MultiSelectSearchNewInputGUI/class.OrgUnitAjaxAutoCompleteCtrl.php',
    'srag\\CustomInputGUIs\\LiveVoting\\MultiSelectSearchNewInputGUI\\UsersAjaxAutoCompleteCtrl' => $vendorDir . '/srag/custominputguis/src/MultiSelectSearchNewInputGUI/class.UsersAjaxAutoCompleteCtrl.php',
    'srag\\CustomInputGUIs\\LiveVoting\\NumberInputGUI\\NumberInputGUI' => $vendorDir . '/srag/custominputguis/src/NumberInputGUI/NumberInputGUI.php',
    'srag\\CustomInputGUIs\\LiveVoting\\PieChart\\Component\\LegendEntry' => $vendorDir . '/srag/custominputguis/src/PieChart/Component/LegendEntry.php',
    'srag\\CustomInputGUIs\\LiveVoting\\PieChart\\Component\\PieChart' => $vendorDir . '/srag/custominputguis/src/PieChart/Component/PieChart.php',
    'srag\\CustomInputGUIs\\LiveVoting\\PieChart\\Component\\PieChartItem' => $vendorDir . '/srag/custominputguis/src/PieChart/Component/PieChartItem.php',
    'srag\\CustomInputGUIs\\LiveVoting\\PieChart\\Component\\Section' => $vendorDir . '/srag/custominputguis/src/PieChart/Component/Section.php',
    'srag\\CustomInputGUIs\\LiveVoting\\PieChart\\Component\\SectionValue' => $vendorDir . '/srag/custominputguis/src/PieChart/Component/SectionValue.php',
    'srag\\CustomInputGUIs\\LiveVoting\\PieChart\\Implementation\\LegendEntry' => $vendorDir . '/srag/custominputguis/src/PieChart/Implementation/LegendEntry.php',
    'srag\\CustomInputGUIs\\LiveVoting\\PieChart\\Implementation\\PieChart' => $vendorDir . '/srag/custominputguis/src/PieChart/Implementation/PieChart.php',
    'srag\\CustomInputGUIs\\LiveVoting\\PieChart\\Implementation\\PieChartItem' => $vendorDir . '/srag/custominputguis/src/PieChart/Implementation/PieChartItem.php',
    'srag\\CustomInputGUIs\\LiveVoting\\PieChart\\Implementation\\Renderer' => $vendorDir . '/srag/custominputguis/src/PieChart/Implementation/Renderer.php',
    'srag\\CustomInputGUIs\\LiveVoting\\PieChart\\Implementation\\Section' => $vendorDir . '/srag/custominputguis/src/PieChart/Implementation/Section.php',
    'srag\\CustomInputGUIs\\LiveVoting\\PieChart\\Implementation\\SectionValue' => $vendorDir . '/srag/custominputguis/src/PieChart/Implementation/SectionValue.php',
    'srag\\CustomInputGUIs\\LiveVoting\\ProgressMeter\\Component\\Factory' => $vendorDir . '/srag/custominputguis/src/ProgressMeter/Component/Factory.php',
    'srag\\CustomInputGUIs\\LiveVoting\\ProgressMeter\\Component\\FixedSize' => $vendorDir . '/srag/custominputguis/src/ProgressMeter/Component/FixedSize.php',
    'srag\\CustomInputGUIs\\LiveVoting\\ProgressMeter\\Component\\Mini' => $vendorDir . '/srag/custominputguis/src/ProgressMeter/Component/Mini.php',
    'srag\\CustomInputGUIs\\LiveVoting\\ProgressMeter\\Component\\ProgressMeter' => $vendorDir . '/srag/custominputguis/src/ProgressMeter/Component/ProgressMeter.php',
    'srag\\CustomInputGUIs\\LiveVoting\\ProgressMeter\\Component\\Standard' => $vendorDir . '/srag/custominputguis/src/ProgressMeter/Component/Standard.php',
    'srag\\CustomInputGUIs\\LiveVoting\\ProgressMeter\\Implementation\\Factory' => $vendorDir . '/srag/custominputguis/src/ProgressMeter/Implementation/Factory.php',
    'srag\\CustomInputGUIs\\LiveVoting\\ProgressMeter\\Implementation\\FixedSize' => $vendorDir . '/srag/custominputguis/src/ProgressMeter/Implementation/FixedSize.php',
    'srag\\CustomInputGUIs\\LiveVoting\\ProgressMeter\\Implementation\\Mini' => $vendorDir . '/srag/custominputguis/src/ProgressMeter/Implementation/Mini.php',
    'srag\\CustomInputGUIs\\LiveVoting\\ProgressMeter\\Implementation\\ProgressMeter' => $vendorDir . '/srag/custominputguis/src/ProgressMeter/Implementation/ProgressMeter.php',
    'srag\\CustomInputGUIs\\LiveVoting\\ProgressMeter\\Implementation\\Renderer' => $vendorDir . '/srag/custominputguis/src/ProgressMeter/Implementation/Renderer.php',
    'srag\\CustomInputGUIs\\LiveVoting\\ProgressMeter\\Implementation\\Standard' => $vendorDir . '/srag/custominputguis/src/ProgressMeter/Implementation/Standard.php',
    'srag\\CustomInputGUIs\\LiveVoting\\PropertyFormGUI\\ConfigPropertyFormGUI' => $vendorDir . '/srag/custominputguis/src/PropertyFormGUI/ConfigPropertyFormGUI.php',
    'srag\\CustomInputGUIs\\LiveVoting\\PropertyFormGUI\\Exception\\PropertyFormGUIException' => $vendorDir . '/srag/custominputguis/src/PropertyFormGUI/Exception/PropertyFormGUIException.php',
    'srag\\CustomInputGUIs\\LiveVoting\\PropertyFormGUI\\Items\\Items' => $vendorDir . '/srag/custominputguis/src/PropertyFormGUI/Items/Items.php',
    'srag\\CustomInputGUIs\\LiveVoting\\PropertyFormGUI\\ObjectPropertyFormGUI' => $vendorDir . '/srag/custominputguis/src/PropertyFormGUI/ObjectPropertyFormGUI.php',
    'srag\\CustomInputGUIs\\LiveVoting\\PropertyFormGUI\\PropertyFormGUI' => $vendorDir . '/srag/custominputguis/src/PropertyFormGUI/PropertyFormGUI.php',
    'srag\\CustomInputGUIs\\LiveVoting\\ScreenshotsInputGUI\\ScreenshotsInputGUI' => $vendorDir . '/srag/custominputguis/src/ScreenshotsInputGUI/ScreenshotsInputGUI.php',
    'srag\\CustomInputGUIs\\LiveVoting\\StaticHTMLPresentationInputGUI\\StaticHTMLPresentationInputGUI' => $vendorDir . '/srag/custominputguis/src/StaticHTMLPresentationInputGUI/StaticHTMLPresentationInputGUI.php',
    'srag\\CustomInputGUIs\\LiveVoting\\TableGUI\\Exception\\TableGUIException' => $vendorDir . '/srag/custominputguis/src/TableGUI/Exception/TableGUIException.php',
    'srag\\CustomInputGUIs\\LiveVoting\\TableGUI\\TableGUI' => $vendorDir . '/srag/custominputguis/src/TableGUI/TableGUI.php',
    'srag\\CustomInputGUIs\\LiveVoting\\TabsInputGUI\\MultilangualTabsInputGUI' => $vendorDir . '/srag/custominputguis/src/TabsInputGUI/MultilangualTabsInputGUI.php',
    'srag\\CustomInputGUIs\\LiveVoting\\TabsInputGUI\\TabsInputGUI' => $vendorDir . '/srag/custominputguis/src/TabsInputGUI/TabsInputGUI.php',
    'srag\\CustomInputGUIs\\LiveVoting\\TabsInputGUI\\TabsInputGUITab' => $vendorDir . '/srag/custominputguis/src/TabsInputGUI/TabsInputGUITab.php',
    'srag\\CustomInputGUIs\\LiveVoting\\Template\\Template' => $vendorDir . '/srag/custominputguis/src/Template/Template.php',
    'srag\\CustomInputGUIs\\LiveVoting\\TextAreaInputGUI\\TextAreaInputGUI' => $vendorDir . '/srag/custominputguis/src/TextAreaInputGUI/TextAreaInputGUI.php',
    'srag\\CustomInputGUIs\\LiveVoting\\TextInputGUI\\TextInputGUI' => $vendorDir . '/srag/custominputguis/src/TextInputGUI/TextInputGUI.php',
    'srag\\CustomInputGUIs\\LiveVoting\\TextInputGUI\\TextInputGUIWithModernAutoComplete' => $vendorDir . '/srag/custominputguis/src/TextInputGUI/TextInputGUIWithModernAutoComplete.php',
    'srag\\CustomInputGUIs\\LiveVoting\\UIInputComponentWrapperInputGUI\\UIInputComponentWrapperInputGUI' => $vendorDir . '/srag/custominputguis/src/UIInputComponentWrapperInputGUI/UIInputComponentWrapperInputGUI.php',
    'srag\\CustomInputGUIs\\LiveVoting\\UIInputComponentWrapperInputGUI\\UIInputComponentWrapperNameSource' => $vendorDir . '/srag/custominputguis/src/UIInputComponentWrapperInputGUI/UIInputComponentWrapperNameSource.php',
    'srag\\CustomInputGUIs\\LiveVoting\\ViewControlModeUI\\ViewControlModeUI' => $vendorDir . '/srag/custominputguis/src/ViewControlModeGUI/ViewControlModeUI.php',
    'srag\\CustomInputGUIs\\LiveVoting\\Waiter\\Waiter' => $vendorDir . '/srag/custominputguis/src/Waiter/Waiter.php',
    'srag\\CustomInputGUIs\\LiveVoting\\WeekdayInputGUI\\WeekdayInputGUI' => $vendorDir . '/srag/custominputguis/src/WeekdayInputGUI/WeekdayInputGUI.php',
    'srag\\DIC\\LiveVoting\\DICStatic' => $vendorDir . '/srag/dic/src/DICStatic.php',
    'srag\\DIC\\LiveVoting\\DICStaticInterface' => $vendorDir . '/srag/dic/src/DICStaticInterface.php',
    'srag\\DIC\\LiveVoting\\DICTrait' => $vendorDir . '/srag/dic/src/DICTrait.php',
    'srag\\DIC\\LiveVoting\\DIC\\AbstractDIC' => $vendorDir . '/srag/dic/src/DIC/AbstractDIC.php',
    'srag\\DIC\\LiveVoting\\DIC\\DICInterface' => $vendorDir . '/srag/dic/src/DIC/DICInterface.php',
    'srag\\DIC\\LiveVoting\\DIC\\Implementation\\ILIAS54DIC' => $vendorDir . '/srag/dic/src/DIC/Implementation/ILIAS54DIC.php',
    'srag\\DIC\\LiveVoting\\DIC\\Implementation\\ILIAS60DIC' => $vendorDir . '/srag/dic/src/DIC/Implementation/ILIAS60DIC.php',
    'srag\\DIC\\LiveVoting\\Database\\AbstractILIASDatabaseDetector' => $vendorDir . '/srag/dic/src/Database/AbstractILIASDatabaseDetector.php',
    'srag\\DIC\\LiveVoting\\Database\\DatabaseDetector' => $vendorDir . '/srag/dic/src/Database/DatabaseDetector.php',
    'srag\\DIC\\LiveVoting\\Database\\DatabaseInterface' => $vendorDir . '/srag/dic/src/Database/DatabaseInterface.php',
    'srag\\DIC\\LiveVoting\\Database\\PdoContextHelper' => $vendorDir . '/srag/dic/src/Database/PdoContextHelper.php',
    'srag\\DIC\\LiveVoting\\Database\\PdoStatementContextHelper' => $vendorDir . '/srag/dic/src/Database/PdoStatementContextHelper.php',
    'srag\\DIC\\LiveVoting\\Exception\\DICException' => $vendorDir . '/srag/dic/src/Exception/DICException.php',
    'srag\\DIC\\LiveVoting\\Output\\Output' => $vendorDir . '/srag/dic/src/Output/Output.php',
    'srag\\DIC\\LiveVoting\\Output\\OutputInterface' => $vendorDir . '/srag/dic/src/Output/OutputInterface.php',
    'srag\\DIC\\LiveVoting\\PHPVersionChecker' => $vendorDir . '/srag/dic/src/PHPVersionChecker.php',
    'srag\\DIC\\LiveVoting\\Plugin\\Plugin' => $vendorDir . '/srag/dic/src/Plugin/Plugin.php',
    'srag\\DIC\\LiveVoting\\Plugin\\PluginInterface' => $vendorDir . '/srag/dic/src/Plugin/PluginInterface.php',
    'srag\\DIC\\LiveVoting\\Plugin\\Pluginable' => $vendorDir . '/srag/dic/src/Plugin/Pluginable.php',
    'srag\\DIC\\LiveVoting\\Util\\LibraryLanguageInstaller' => $vendorDir . '/srag/dic/src/Util/LibraryLanguageInstaller.php',
    'srag\\DIC\\LiveVoting\\Version\\Version' => $vendorDir . '/srag/dic/src/Version/Version.php',
    'srag\\DIC\\LiveVoting\\Version\\VersionInterface' => $vendorDir . '/srag/dic/src/Version/VersionInterface.php',
    'srag\\LibrariesNamespaceChanger\\LibrariesNamespaceChanger' => $vendorDir . '/srag/librariesnamespacechanger/src/LibrariesNamespaceChanger.php',
    'srag\\LibrariesNamespaceChanger\\PHP72Backport' => $vendorDir . '/srag/librariesnamespacechanger/src/PHP72Backport.php',
    'srag\\LibrariesNamespaceChanger\\PHP7Backport' => $vendorDir . '/srag/librariesnamespacechanger/src/PHP7Backport.php',
    'srag\\LibrariesNamespaceChanger\\RemovePHP72Backport' => $vendorDir . '/srag/librariesnamespacechanger/src/RemovePHP72Backport.php',
    'srag\\RemovePluginDataConfirm\\LiveVoting\\BasePluginUninstallTrait' => $vendorDir . '/srag/removeplugindataconfirm/src/BasePluginUninstallTrait.php',
    'srag\\RemovePluginDataConfirm\\LiveVoting\\PluginUninstallTrait' => $vendorDir . '/srag/removeplugindataconfirm/src/PluginUninstallTrait.php',
    'srag\\RemovePluginDataConfirm\\LiveVoting\\RemovePluginDataConfirmCtrl' => $vendorDir . '/srag/removeplugindataconfirm/src/class.RemovePluginDataConfirmCtrl.php',
    'srag\\RemovePluginDataConfirm\\LiveVoting\\RepositoryObjectPluginUninstallTrait' => $vendorDir . '/srag/removeplugindataconfirm/src/RepositoryObjectPluginUninstallTrait.php',
    'xlvoConfGUI' => $baseDir . '/classes/Conf/class.xlvoConfGUI.php',
    'xlvoCorrectOrderGUI' => $baseDir . '/classes/QuestionTypes/CorrectOrder/class.xlvoCorrectOrderGUI.php',
    'xlvoFreeInputGUI' => $baseDir . '/classes/QuestionTypes/FreeInput/class.xlvoFreeInputGUI.php',
    'xlvoFreeOrderGUI' => $baseDir . '/classes/QuestionTypes/FreeOrder/class.xlvoFreeOrderGUI.php',
    'xlvoMainGUI' => $baseDir . '/classes/GUI/class.xlvoMainGUI.php',
    'xlvoNumberRangeGUI' => $baseDir . '/classes/QuestionTypes/NumberRange/class.xlvoNumberRangeGUI.php',
    'xlvoPlayerGUI' => $baseDir . '/classes/Player/class.xlvoPlayerGUI.php',
    'xlvoResultsGUI' => $baseDir . '/classes/Results/class.xlvoResultsGUI.php',
    'xlvoSingleVoteGUI' => $baseDir . '/classes/QuestionTypes/SingleVote/class.xlvoSingleVoteGUI.php',
    'xlvoVoter2GUI' => $baseDir . '/classes/Voter/class.xlvoVoter2GUI.php',
    'xlvoVotingGUI' => $baseDir . '/classes/Voting/class.xlvoVotingGUI.php',
);
