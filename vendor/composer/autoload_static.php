<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2a9f25cb7db537cf8950f4e268186c34
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'srag\\RemovePluginDataConfirm\\' => 29,
            'srag\\DIC\\' => 9,
        ),
        'S' => 
        array (
            'Symfony\\Component\\OptionsResolver\\' => 34,
        ),
        'L' => 
        array (
            'LiveVoting\\' => 11,
        ),
        'E' => 
        array (
            'Endroid\\QrCode\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'srag\\RemovePluginDataConfirm\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src',
        ),
        'srag\\DIC\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/dic/src',
        ),
        'Symfony\\Component\\OptionsResolver\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/options-resolver',
        ),
        'LiveVoting\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Endroid\\QrCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/endroid/qrcode/src',
        ),
    );

    public static $classMap = array (
        'ActiveRecord' => __DIR__ . '/../..' . '/../../../../../../../Services/ActiveRecord/class.ActiveRecord.php',
        'Endroid\\QrCode\\Bundle\\Controller\\QrCodeController' => __DIR__ . '/..' . '/endroid/qrcode/src/Bundle/Controller/QrCodeController.php',
        'Endroid\\QrCode\\Bundle\\DependencyInjection\\Configuration' => __DIR__ . '/..' . '/endroid/qrcode/src/Bundle/DependencyInjection/Configuration.php',
        'Endroid\\QrCode\\Bundle\\DependencyInjection\\EndroidQrCodeExtension' => __DIR__ . '/..' . '/endroid/qrcode/src/Bundle/DependencyInjection/EndroidQrCodeExtension.php',
        'Endroid\\QrCode\\Bundle\\EndroidQrCodeBundle' => __DIR__ . '/..' . '/endroid/qrcode/src/Bundle/EndroidQrCodeBundle.php',
        'Endroid\\QrCode\\Bundle\\Twig\\Extension\\QrCodeExtension' => __DIR__ . '/..' . '/endroid/qrcode/src/Bundle/Twig/Extension/QrCodeExtension.php',
        'Endroid\\QrCode\\Exceptions\\DataDoesntExistsException' => __DIR__ . '/..' . '/endroid/qrcode/src/Exceptions/DataDoesntExistsException.php',
        'Endroid\\QrCode\\Exceptions\\FreeTypeLibraryMissingException' => __DIR__ . '/..' . '/endroid/qrcode/src/Exceptions/FreeTypeLibraryMissingException.php',
        'Endroid\\QrCode\\Exceptions\\ImageFunctionFailedException' => __DIR__ . '/..' . '/endroid/qrcode/src/Exceptions/ImageFunctionFailedException.php',
        'Endroid\\QrCode\\Exceptions\\ImageFunctionUnknownException' => __DIR__ . '/..' . '/endroid/qrcode/src/Exceptions/ImageFunctionUnknownException.php',
        'Endroid\\QrCode\\Exceptions\\ImageSizeTooLargeException' => __DIR__ . '/..' . '/endroid/qrcode/src/Exceptions/ImageSizeTooLargeException.php',
        'Endroid\\QrCode\\Exceptions\\ImageTypeInvalidException' => __DIR__ . '/..' . '/endroid/qrcode/src/Exceptions/ImageTypeInvalidException.php',
        'Endroid\\QrCode\\Exceptions\\VersionTooLargeException' => __DIR__ . '/..' . '/endroid/qrcode/src/Exceptions/VersionTooLargeException.php',
        'Endroid\\QrCode\\Factory\\QrCodeFactory' => __DIR__ . '/..' . '/endroid/qrcode/src/Factory/QrCodeFactory.php',
        'Endroid\\QrCode\\QrCode' => __DIR__ . '/..' . '/endroid/qrcode/src/QrCode.php',
        'LiveVotingRemoveDataConfirm' => __DIR__ . '/../..' . '/classes/uninstall/class.LiveVotingRemoveDataConfirm.php',
        'LiveVoting\\Api\\xlvoApi' => __DIR__ . '/../..' . '/src/Api/xlvoApi.php',
        'LiveVoting\\Cache\\CachingActiveRecord' => __DIR__ . '/../..' . '/src/Cache/CachingActiveRecord.php',
        'LiveVoting\\Cache\\Initialisable' => __DIR__ . '/../..' . '/src/Cache/Initialisable.php',
        'LiveVoting\\Cache\\Version\\v52\\xlvoCache' => __DIR__ . '/../..' . '/src/Cache/Version/v52/xlvoCache.php',
        'LiveVoting\\Cache\\arConnectorCache' => __DIR__ . '/../..' . '/src/Cache/arConnectorCache.php',
        'LiveVoting\\Cache\\xlvoCacheFactory' => __DIR__ . '/../..' . '/src/Cache/xlvoCacheFactory.php',
        'LiveVoting\\Cache\\xlvoCacheService' => __DIR__ . '/../..' . '/src/Cache/xlvoCacheService.php',
        'LiveVoting\\Conf\\xlvoConf' => __DIR__ . '/../..' . '/src/Conf/xlvoConf.php',
        'LiveVoting\\Conf\\xlvoConfFormGUI' => __DIR__ . '/../..' . '/src/Conf/xlvoConfFormGUI.php',
        'LiveVoting\\Conf\\xlvoConfOld' => __DIR__ . '/../..' . '/src/Conf/xlvoConfOld.php',
        'LiveVoting\\Context\\Cookie\\CookieManager' => __DIR__ . '/../..' . '/src/Context/Cookie/CookieManager.php',
        'LiveVoting\\Context\\ILIASVersionEnum' => __DIR__ . '/../..' . '/src/Context/ILIASVersionEnum.php',
        'LiveVoting\\Context\\InitialisationManager' => __DIR__ . '/../..' . '/src/Context/InitialisationManager.php',
        'LiveVoting\\Context\\Initialisation\\Version\\v52\\xlvoBasicInitialisation' => __DIR__ . '/../..' . '/src/Context/Initialisation/Version/v52/xlvoBasicInitialisation.php',
        'LiveVoting\\Context\\Initialisation\\Version\\v52\\xlvoSkin' => __DIR__ . '/../..' . '/src/Context/Initialisation/Version/v52/xlvoStyleDefinition.php',
        'LiveVoting\\Context\\Initialisation\\Version\\v52\\xlvoStyleDefinition' => __DIR__ . '/../..' . '/src/Context/Initialisation/Version/v52/xlvoStyleDefinition.php',
        'LiveVoting\\Context\\Initialisation\\Version\\v53\\xlvoBasicInitialisation' => __DIR__ . '/../..' . '/src/Context/Initialisation/Version/v53/xlvoBasicInitialisation.php',
        'LiveVoting\\Context\\xlvoContext' => __DIR__ . '/../..' . '/src/Context/xlvoContext.php',
        'LiveVoting\\Context\\xlvoContextLiveVoting' => __DIR__ . '/../..' . '/src/Context/xlvoContextLiveVoting.php',
        'LiveVoting\\Context\\xlvoDummyUser' => __DIR__ . '/../..' . '/src/Context/xlvoDummyUser.php',
        'LiveVoting\\Context\\xlvoILIAS' => __DIR__ . '/../..' . '/src/Context/xlvoILIAS.php',
        'LiveVoting\\Context\\xlvoInitialisation' => __DIR__ . '/../..' . '/src/Context/xlvoInitialisation.php',
        'LiveVoting\\Context\\xlvoObjectDefinition' => __DIR__ . '/../..' . '/src/Context/xlvoObjectDefinition.php',
        'LiveVoting\\Context\\xlvoRbacReview' => __DIR__ . '/../..' . '/src/Context/xlvoRbacReview.php',
        'LiveVoting\\Context\\xlvoRbacSystem' => __DIR__ . '/../..' . '/src/Context/xlvoRbacSystem.php',
        'LiveVoting\\Display\\Bar\\xlvoAbstractBarGUI' => __DIR__ . '/../..' . '/src/Display/Bar/xlvoAbstractBarGUI.php',
        'LiveVoting\\Display\\Bar\\xlvoBarCollectionGUI' => __DIR__ . '/../..' . '/src/Display/Bar/xlvoBarCollectionGUI.php',
        'LiveVoting\\Display\\Bar\\xlvoBarFreeInputsGUI' => __DIR__ . '/../..' . '/src/Display/Bar/xlvoBarFreeInputsGUI.php',
        'LiveVoting\\Display\\Bar\\xlvoBarGUI' => __DIR__ . '/../..' . '/src/Display/Bar/xlvoBarGUI.php',
        'LiveVoting\\Display\\Bar\\xlvoBarGroupingCollectionGUI' => __DIR__ . '/../..' . '/src/Display/Bar/xlvoBarGroupingCollectionGUI.php',
        'LiveVoting\\Display\\Bar\\xlvoBarInfoGUI' => __DIR__ . '/../..' . '/src/Display/Bar/xlvoBarInfoGUI.php',
        'LiveVoting\\Display\\Bar\\xlvoBarMovableGUI' => __DIR__ . '/../..' . '/src/Display/Bar/xlvoBarMovableGUI.php',
        'LiveVoting\\Display\\Bar\\xlvoBarOptionGUI' => __DIR__ . '/../..' . '/src/Display/Bar/xlvoBarOptionGUI.php',
        'LiveVoting\\Display\\Bar\\xlvoBarPercentageGUI' => __DIR__ . '/../..' . '/src/Display/Bar/xlvoBarPercentageGUI.php',
        'LiveVoting\\Display\\Bar\\xlvoGeneralBarGUI' => __DIR__ . '/../..' . '/src/Display/Bar/xlvoGeneralBarGUI.php',
        'LiveVoting\\Exceptions\\xlvoException' => __DIR__ . '/../..' . '/src/Exceptions/xlvoException.php',
        'LiveVoting\\Exceptions\\xlvoPlayerException' => __DIR__ . '/../..' . '/src/Exceptions/xlvoPlayerException.php',
        'LiveVoting\\Exceptions\\xlvoSubFormGUIHandleFieldException' => __DIR__ . '/../..' . '/src/Exceptions/xlvoSubFormGUIHandleFieldException.php',
        'LiveVoting\\Exceptions\\xlvoVoterException' => __DIR__ . '/../..' . '/src/Exceptions/xlvoVoterException.php',
        'LiveVoting\\Exceptions\\xlvoVotingManagerException' => __DIR__ . '/../..' . '/src/Exceptions/xlvoVotingManagerException.php',
        'LiveVoting\\GUI\\xlvoGUI' => __DIR__ . '/../..' . '/src/GUI/xlvoGUI.php',
        'LiveVoting\\GUI\\xlvoGlyphGUI' => __DIR__ . '/../..' . '/src/GUI/xlvoGlyphGUI.php',
        'LiveVoting\\GUI\\xlvoLinkButton' => __DIR__ . '/../..' . '/src/GUI/xlvoLinkButton.php',
        'LiveVoting\\GUI\\xlvoMultiLineInputGUI' => __DIR__ . '/../..' . '/src/GUI/xlvoMultiLineInputGUI.php',
        'LiveVoting\\GUI\\xlvoTextAreaInputGUI' => __DIR__ . '/../..' . '/src/GUI/xlvoTextAreaInputGUI.php',
        'LiveVoting\\GUI\\xlvoTextInputGUI' => __DIR__ . '/../..' . '/src/GUI/xlvoTextInputGUI.php',
        'LiveVoting\\GUI\\xlvoToolbarGUI' => __DIR__ . '/../..' . '/src/GUI/xlvoToolbarGUI.php',
        'LiveVoting\\Js\\xlvoJs' => __DIR__ . '/../..' . '/src/Js/xlvoJs.php',
        'LiveVoting\\Js\\xlvoJsResponse' => __DIR__ . '/../..' . '/src/Js/xlvoJsResponse.php',
        'LiveVoting\\Js\\xlvoJsSettings' => __DIR__ . '/../..' . '/src/Js/xlvoJsSettings.php',
        'LiveVoting\\Option\\xlvoData' => __DIR__ . '/../..' . '/src/Option/xlvoData.php',
        'LiveVoting\\Option\\xlvoOption' => __DIR__ . '/../..' . '/src/Option/xlvoOption.php',
        'LiveVoting\\Option\\xlvoOptionOld' => __DIR__ . '/../..' . '/src/Option/xlvoOptionOld.php',
        'LiveVoting\\Pin\\xlvoPin' => __DIR__ . '/../..' . '/src/Pin/xlvoPin.php',
        'LiveVoting\\Player\\QR\\xlvoQR' => __DIR__ . '/../..' . '/src/Player/QR/xlvoQR.php',
        'LiveVoting\\Player\\QR\\xlvoQRModalGUI' => __DIR__ . '/../..' . '/src/Player/QR/xlvoQRModalGUI.php',
        'LiveVoting\\Player\\xlvoDisplayPlayerGUI' => __DIR__ . '/../..' . '/src/Player/xlvoDisplayPlayerGUI.php',
        'LiveVoting\\Player\\xlvoPlayer' => __DIR__ . '/../..' . '/src/Player/xlvoPlayer.php',
        'LiveVoting\\PowerPointExport\\ilPowerPointExport' => __DIR__ . '/../..' . '/src/PowerPointExport/ilPowerPointExport.php',
        'LiveVoting\\Puk\\xlvoPuk' => __DIR__ . '/../..' . '/src/Puk/xlvoPuk.php',
        'LiveVoting\\QuestionTypes\\CorrectOrder\\xlvoCorrectOrderResultGUI' => __DIR__ . '/../..' . '/src/QuestionTypes/CorrectOrder/xlvoCorrectOrderResultGUI.php',
        'LiveVoting\\QuestionTypes\\CorrectOrder\\xlvoCorrectOrderResultsGUI' => __DIR__ . '/../..' . '/src/QuestionTypes/CorrectOrder/xlvoCorrectOrderResultsGUI.php',
        'LiveVoting\\QuestionTypes\\CorrectOrder\\xlvoCorrectOrderSubFormGUI' => __DIR__ . '/../..' . '/src/QuestionTypes/CorrectOrder/xlvoCorrectOrderSubFormGUI.php',
        'LiveVoting\\QuestionTypes\\FreeInput\\xlvoFreeInputResultGUI' => __DIR__ . '/../..' . '/src/QuestionTypes/FreeInput/xlvoFreeInputResultGUI.php',
        'LiveVoting\\QuestionTypes\\FreeInput\\xlvoFreeInputResultsGUI' => __DIR__ . '/../..' . '/src/QuestionTypes/FreeInput/xlvoFreeInputResultsGUI.php',
        'LiveVoting\\QuestionTypes\\FreeInput\\xlvoFreeInputSubFormGUI' => __DIR__ . '/../..' . '/src/QuestionTypes/FreeInput/xlvoFreeInputSubFormGUI.php',
        'LiveVoting\\QuestionTypes\\FreeInput\\xlvoFreeInputVotingFormGUI' => __DIR__ . '/../..' . '/src/QuestionTypes/FreeInput/xlvoFreeInputVotingFormGUI.php',
        'LiveVoting\\QuestionTypes\\FreeOrder\\xlvoFreeOrderResultGUI' => __DIR__ . '/../..' . '/src/QuestionTypes/FreeOrder/xlvoFreeOrderResultGUI.php',
        'LiveVoting\\QuestionTypes\\FreeOrder\\xlvoFreeOrderResultsGUI' => __DIR__ . '/../..' . '/src/QuestionTypes/FreeOrder/xlvoFreeOrderResultsGUI.php',
        'LiveVoting\\QuestionTypes\\FreeOrder\\xlvoFreeOrderSubFormGUI' => __DIR__ . '/../..' . '/src/QuestionTypes/FreeOrder/xlvoFreeOrderSubFormGUI.php',
        'LiveVoting\\QuestionTypes\\NumberRange\\xlvoNumberRangeResultGUI' => __DIR__ . '/../..' . '/src/QuestionTypes/NumberRange/xlvoNumberRangeResultGUI.php',
        'LiveVoting\\QuestionTypes\\NumberRange\\xlvoNumberRangeResultsGUI' => __DIR__ . '/../..' . '/src/QuestionTypes/NumberRange/xlvoNumberRangeResultsGUI.php',
        'LiveVoting\\QuestionTypes\\NumberRange\\xlvoNumberRangeSubFormGUI' => __DIR__ . '/../..' . '/src/QuestionTypes/NumberRange/xlvoNumberRangeSubFormGUI.php',
        'LiveVoting\\QuestionTypes\\NumberRange\\xlvoNumberRangeVotingFormGUI' => __DIR__ . '/../..' . '/src/QuestionTypes/NumberRange/xlvoNumberRangeVotingFormGUI.php',
        'LiveVoting\\QuestionTypes\\SingleVote\\xlvoSingleVoteResultGUI' => __DIR__ . '/../..' . '/src/QuestionTypes/SingleVote/xlvoSingleVoteResultGUI.php',
        'LiveVoting\\QuestionTypes\\SingleVote\\xlvoSingleVoteResultsGUI' => __DIR__ . '/../..' . '/src/QuestionTypes/SingleVote/xlvoSingleVoteResultsGUI.php',
        'LiveVoting\\QuestionTypes\\SingleVote\\xlvoSingleVoteSubFormGUI' => __DIR__ . '/../..' . '/src/QuestionTypes/SingleVote/xlvoSingleVoteSubFormGUI.php',
        'LiveVoting\\QuestionTypes\\xlvoInputResultsGUI' => __DIR__ . '/../..' . '/src/QuestionTypes/xlvoInputResultsGUI.php',
        'LiveVoting\\QuestionTypes\\xlvoQuestionTypes' => __DIR__ . '/../..' . '/src/QuestionTypes/xlvoQuestionTypes.php',
        'LiveVoting\\QuestionTypes\\xlvoQuestionTypesGUI' => __DIR__ . '/../..' . '/src/QuestionTypes/xlvoQuestionTypesGUI.php',
        'LiveVoting\\QuestionTypes\\xlvoResultGUI' => __DIR__ . '/../..' . '/src/QuestionTypes/xlvoResultGUI.php',
        'LiveVoting\\QuestionTypes\\xlvoSubFormGUI' => __DIR__ . '/../..' . '/src/QuestionTypes/xlvoSubFormGUI.php',
        'LiveVoting\\Results\\xlvoResults' => __DIR__ . '/../..' . '/src/Results/xlvoResults.php',
        'LiveVoting\\Results\\xlvoResultsTableGUI' => __DIR__ . '/../..' . '/src/Results/xlvoResultsTableGUI.php',
        'LiveVoting\\Round\\xlvoRound' => __DIR__ . '/../..' . '/src/Round/xlvoRound.php',
        'LiveVoting\\Session\\xlvoSessionHandler' => __DIR__ . '/../..' . '/src/Session/xlvoSessionHandler.php',
        'LiveVoting\\User\\xlvoParticipant' => __DIR__ . '/../..' . '/src/User/xlvoParticipant.php',
        'LiveVoting\\User\\xlvoParticipants' => __DIR__ . '/../..' . '/src/User/xlvoParticipants.php',
        'LiveVoting\\User\\xlvoUser' => __DIR__ . '/../..' . '/src/User/xlvoUser.php',
        'LiveVoting\\User\\xlvoVoteHistoryObject' => __DIR__ . '/../..' . '/src/Vote/xlvoVoteHistoryObject.php',
        'LiveVoting\\User\\xlvoVoteHistoryTableGUI' => __DIR__ . '/../..' . '/src/Vote/xlvoVoteHistoryTableGUI.php',
        'LiveVoting\\Vote\\xlvoVote' => __DIR__ . '/../..' . '/src/Vote/xlvoVote.php',
        'LiveVoting\\Vote\\xlvoVoteOld' => __DIR__ . '/../..' . '/src/Vote/xlvoVoteOld.php',
        'LiveVoting\\Voter\\xlvoVoter' => __DIR__ . '/../..' . '/src/Voter/xlvoVoter.php',
        'LiveVoting\\Voting\\xlvoVoting' => __DIR__ . '/../..' . '/src/Voting/xlvoVoting.php',
        'LiveVoting\\Voting\\xlvoVotingConfig' => __DIR__ . '/../..' . '/src/Voting/xlvoVotingConfig.php',
        'LiveVoting\\Voting\\xlvoVotingFormGUI' => __DIR__ . '/../..' . '/src/Voting/xlvoVotingFormGUI.php',
        'LiveVoting\\Voting\\xlvoVotingInterface' => __DIR__ . '/../..' . '/src/Voting/xlvoVotingInterface.php',
        'LiveVoting\\Voting\\xlvoVotingManager2' => __DIR__ . '/../..' . '/src/Voting/xlvoVotingManager2.php',
        'LiveVoting\\Voting\\xlvoVotingTableGUI' => __DIR__ . '/../..' . '/src/Voting/xlvoVotingTableGUI.php',
        'Symfony\\Component\\OptionsResolver\\Debug\\OptionsResolverIntrospector' => __DIR__ . '/..' . '/symfony/options-resolver/Debug/OptionsResolverIntrospector.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\AccessException' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/AccessException.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/ExceptionInterface.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/InvalidArgumentException.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\InvalidOptionsException' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/InvalidOptionsException.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\MissingOptionsException' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/MissingOptionsException.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\NoConfigurationException' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/NoConfigurationException.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\NoSuchOptionException' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/NoSuchOptionException.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\OptionDefinitionException' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/OptionDefinitionException.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\UndefinedOptionsException' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/UndefinedOptionsException.php',
        'Symfony\\Component\\OptionsResolver\\Options' => __DIR__ . '/..' . '/symfony/options-resolver/Options.php',
        'Symfony\\Component\\OptionsResolver\\OptionsResolver' => __DIR__ . '/..' . '/symfony/options-resolver/OptionsResolver.php',
        'arConnector' => __DIR__ . '/../..' . '/../../../../../../../Services/ActiveRecord/Connector/class.arConnector.php',
        'ilAdvSelectInputGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Form/classes/class.ilAdvSelectInputGUI.php',
        'ilAdvancedSelectionListGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/UIComponent/AdvancedSelectionList/classes/class.ilAdvancedSelectionListGUI.php',
        'ilAppEventHandler' => __DIR__ . '/../..' . '/../../../../../../../Services/EventHandling/classes/class.ilAppEventHandler.php',
        'ilBenchmark' => __DIR__ . '/../..' . '/../../../../../../../Services/Utilities/classes/class.ilBenchmark.php',
        'ilButtonToSplitButtonMenuItemAdapter' => __DIR__ . '/../..' . '/../../../../../../../Services/UIComponent/SplitButton/classes/class.ilButtonToSplitButtonMenuItemAdapter.php',
        'ilCommonActionDispatcherGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Object/classes/class.ilCommonActionDispatcherGUI.php',
        'ilComponent' => __DIR__ . '/../..' . '/../../../../../../../Services/Component/classes/class.ilComponent.php',
        'ilConfirmationGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Utilities/classes/class.ilConfirmationGUI.php',
        'ilContext' => __DIR__ . '/../..' . '/../../../../../../../Services/Context/classes/class.ilContext.php',
        'ilContextTemplate' => __DIR__ . '/../..' . '/../../../../../../../Services/Context/interfaces/interface.ilContextTemplate.php',
        'ilCtrl' => __DIR__ . '/../..' . '/../../../../../../../Services/UICore/classes/class.ilCtrl.php',
        'ilCustomInputGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Form/classes/class.ilCustomInputGUI.php',
        'ilDBWrapperFactory' => __DIR__ . '/../..' . '/../../../../../../../Services/Database/classes/class.ilDBWrapperFactory.php',
        'ilDateDurationInputGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Form/classes/class.ilDateDurationInputGUI.php',
        'ilDatePresentation' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilDatePresentation.php',
        'ilDateTime' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilDateTime.php',
        'ilDesktopItemGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/PersonalDesktop/classes/class.ilDesktopItemGUI.php',
        'ilDesktopItemHandling' => __DIR__ . '/../..' . '/../../../../../../../Services/PersonalDesktop/interfaces/interface.ilDesktopItemHandling.php',
        'ilErrorHandling' => __DIR__ . '/../..' . '/../../../../../../../Services/Init/classes/class.ilErrorHandling.php',
        'ilFormPropertyGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Form/classes/class.ilFormPropertyGUI.php',
        'ilGlobalCache' => __DIR__ . '/../..' . '/../../../../../../../Services/GlobalCache/classes/class.ilGlobalCache.php',
        'ilGlobalCacheSettings' => __DIR__ . '/../..' . '/../../../../../../../Services/GlobalCache/classes/Settings/class.ilGlobalCacheSettings.php',
        'ilGlyphGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/UIComponent/Glyph/classes/class.ilGlyphGUI.php',
        'ilHTTPS' => __DIR__ . '/../..' . '/../../../../../../../Services/Http/classes/class.ilHTTPS.php',
        'ilHelp' => __DIR__ . '/../..' . '/../../../../../../../Services/Help/classes/class.ilHelp.php',
        'ilInfoScreenGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/InfoScreen/classes/class.ilInfoScreenGUI.php',
        'ilIniFile' => __DIR__ . '/../..' . '/../../../../../../../Services/Init/classes/class.ilIniFile.php',
        'ilInitialisation' => __DIR__ . '/../..' . '/../../../../../../../Services/Init/classes/class.ilInitialisation.php',
        'ilLanguage' => __DIR__ . '/../..' . '/../../../../../../../Services/Language/classes/class.ilLanguage.php',
        'ilLearningProgressGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Tracking/classes/class.ilLearningProgressGUI.php',
        'ilLinkButton' => __DIR__ . '/../..' . '/../../../../../../../Services/UIComponent/Button/classes/class.ilLinkButton.php',
        'ilLiveVotingConfigGUI' => __DIR__ . '/../..' . '/classes/class.ilLiveVotingConfigGUI.php',
        'ilLiveVotingPlugin' => __DIR__ . '/../..' . '/classes/class.ilLiveVotingPlugin.php',
        'ilLoggerFactory' => __DIR__ . '/../..' . '/../../../../../../../Services/Logging/classes/public/class.ilLoggerFactory.php',
        'ilMainMenuGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/MainMenu/classes/class.ilMainMenuGUI.php',
        'ilMathJax' => __DIR__ . '/../..' . '/../../../../../../../Services/MathJax/classes/class.ilMathJax.php',
        'ilModalGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/UIComponent/Modal/classes/class.ilModalGUI.php',
        'ilMultiSelectInputGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Form/classes/class.ilMultiSelectInputGUI.php',
        'ilNavigationHistory' => __DIR__ . '/../..' . '/../../../../../../../Services/Navigation/classes/class.ilNavigationHistory.php',
        'ilObjLiveVoting' => __DIR__ . '/../..' . '/classes/class.ilObjLiveVoting.php',
        'ilObjLiveVotingAccess' => __DIR__ . '/../..' . '/classes/class.ilObjLiveVotingAccess.php',
        'ilObjLiveVotingGUI' => __DIR__ . '/../..' . '/classes/class.ilObjLiveVotingGUI.php',
        'ilObjLiveVotingListGUI' => __DIR__ . '/../..' . '/classes/class.ilObjLiveVotingListGUI.php',
        'ilObjUser' => __DIR__ . '/../..' . '/../../../../../../../Services/User/classes/class.ilObjUser.php',
        'ilObject2' => __DIR__ . '/../..' . '/../../../../../../../Services/Object/classes/class.ilObject2.php',
        'ilObjectActivation' => __DIR__ . '/../..' . '/../../../../../../../Services/Object/classes/class.ilObjectActivation.php',
        'ilObjectCopyGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Object/classes/class.ilObjectCopyGUI.php',
        'ilObjectDataCache' => __DIR__ . '/../..' . '/../../../../../../../Services/Object/classes/class.ilObjectDataCache.php',
        'ilObjectPlugin' => __DIR__ . '/../..' . '/../../../../../../../Services/Repository/classes/class.ilObjectPlugin.php',
        'ilObjectPluginAccess' => __DIR__ . '/../..' . '/../../../../../../../Services/Repository/classes/class.ilObjectPluginAccess.php',
        'ilObjectPluginGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Repository/classes/class.ilObjectPluginGUI.php',
        'ilObjectPluginListGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Repository/classes/class.ilObjectPluginListGUI.php',
        'ilPermissionGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/AccessControl/classes/class.ilPermissionGUI.php',
        'ilPluginAdmin' => __DIR__ . '/../..' . '/../../../../../../../Services/Component/classes/class.ilPluginAdmin.php',
        'ilPluginConfigGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Component/classes/class.ilPluginConfigGUI.php',
        'ilPropertyFormGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Form/classes/class.ilPropertyFormGUI.php',
        'ilRTE' => __DIR__ . '/../..' . '/../../../../../../../Services/RTE/classes/class.ilRTE.php',
        'ilRadioGroupInputGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Form/classes/class.ilRadioGroupInputGUI.php',
        'ilRadioOption' => __DIR__ . '/../..' . '/../../../../../../../Services/Form/classes/class.ilRadioOption.php',
        'ilRepositoryObjectPlugin' => __DIR__ . '/../..' . '/../../../../../../../Services/Repository/classes/class.ilRepositoryObjectPlugin.php',
        'ilSelectInputGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Form/classes/class.ilSelectInputGUI.php',
        'ilSession' => __DIR__ . '/../..' . '/../../../../../../../Services/Authentication/classes/class.ilSession.php',
        'ilSetting' => __DIR__ . '/../..' . '/../../../../../../../Services/Administration/classes/class.ilSetting.php',
        'ilSplitButtonGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/UIComponent/SplitButton/classes/class.ilSplitButtonGUI.php',
        'ilSubEnabledFormPropertyGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Form/classes/class.ilSubEnabledFormPropertyGUI.php',
        'ilSubmitButton' => __DIR__ . '/../..' . '/../../../../../../../Services/UIComponent/Button/classes/class.ilSubmitButton.php',
        'ilTable2GUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Table/classes/class.ilTable2GUI.php',
        'ilTableFilterItem' => __DIR__ . '/../..' . '/../../../../../../../Services/Table/interfaces/interface.ilTableFilterItem.php',
        'ilTabsGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/UIComponent/Tabs/classes/class.ilTabsGUI.php',
        'ilTemplate' => __DIR__ . '/../..' . '/../../../../../../../Services/UICore/classes/class.ilTemplate.php',
        'ilTextAreaInputGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Form/classes/class.ilTextAreaInputGUI.php',
        'ilTextInputGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Form/classes/class.ilTextInputGUI.php',
        'ilTimeZone' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilTimeZone.php',
        'ilToolbarGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/UIComponent/Toolbar/classes/class.ilToolbarGUI.php',
        'ilToolbarItem' => __DIR__ . '/../..' . '/../../../../../../../Services/UIComponent/Toolbar/interfaces/interface.ilToolbarItem.php',
        'ilTree' => __DIR__ . '/../..' . '/../../../../../../../Services/Tree/classes/class.ilTree.php',
        'ilUIFramework' => __DIR__ . '/../..' . '/../../../../../../../Services/UICore/classes/class.ilUIFramework.php',
        'ilUtil' => __DIR__ . '/../..' . '/../../../../../../../Services/Utilities/classes/class.ilUtil.php',
        'iljQueryUtil' => __DIR__ . '/../..' . '/../../../../../../../Services/jQuery/classes/class.iljQueryUtil.php',
        'srag\\DIC\\AbstractDIC' => __DIR__ . '/..' . '/srag/dic/src/AbstractDIC.php',
        'srag\\DIC\\DICCache' => __DIR__ . '/..' . '/srag/dic/src/DICCache.php',
        'srag\\DIC\\DICException' => __DIR__ . '/..' . '/srag/dic/src/DICException.php',
        'srag\\DIC\\DICInterface' => __DIR__ . '/..' . '/srag/dic/src/DICInterface.php',
        'srag\\DIC\\DICStatic' => __DIR__ . '/..' . '/srag/dic/src/DICStatic.php',
        'srag\\DIC\\DICTrait' => __DIR__ . '/..' . '/srag/dic/src/DICTrait.php',
        'srag\\DIC\\LegacyDIC' => __DIR__ . '/..' . '/srag/dic/src/LegacyDIC.php',
        'srag\\DIC\\NewDIC' => __DIR__ . '/..' . '/srag/dic/src/NewDIC.php',
        'srag\\RemovePluginDataConfirm\\AbstractPluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/AbstractPluginUninstallTrait.php',
        'srag\\RemovePluginDataConfirm\\AbstractRemovePluginDataConfirm' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/AbstractRemovePluginDataConfirm.php',
        'srag\\RemovePluginDataConfirm\\PluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/PluginUninstallTrait.php',
        'srag\\RemovePluginDataConfirm\\RemovePluginDataConfirmException' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/RemovePluginDataConfirmException.php',
        'srag\\RemovePluginDataConfirm\\RepositoryObjectPluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/RepositoryObjectPluginUninstallTrait.php',
        'xlvoConfGUI' => __DIR__ . '/../..' . '/classes/Conf/class.xlvoConfGUI.php',
        'xlvoCorrectOrderGUI' => __DIR__ . '/../..' . '/classes/QuestionTypes/CorrectOrder/class.xlvoCorrectOrderGUI.php',
        'xlvoFreeInputGUI' => __DIR__ . '/../..' . '/classes/QuestionTypes/FreeInput/class.xlvoFreeInputGUI.php',
        'xlvoFreeOrderGUI' => __DIR__ . '/../..' . '/classes/QuestionTypes/FreeOrder/class.xlvoFreeOrderGUI.php',
        'xlvoMainGUI' => __DIR__ . '/../..' . '/classes/GUI/class.xlvoMainGUI.php',
        'xlvoNumberRangeGUI' => __DIR__ . '/../..' . '/classes/QuestionTypes/NumberRange/class.xlvoNumberRangeGUI.php',
        'xlvoPlayerGUI' => __DIR__ . '/../..' . '/classes/Player/class.xlvoPlayerGUI.php',
        'xlvoResultsGUI' => __DIR__ . '/../..' . '/classes/Results/class.xlvoResultsGUI.php',
        'xlvoSingleVoteGUI' => __DIR__ . '/../..' . '/classes/QuestionTypes/SingleVote/class.xlvoSingleVoteGUI.php',
        'xlvoVoter2GUI' => __DIR__ . '/../..' . '/classes/Voter/class.xlvoVoter2GUI.php',
        'xlvoVotingGUI' => __DIR__ . '/../..' . '/classes/Voting/class.xlvoVotingGUI.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2a9f25cb7db537cf8950f4e268186c34::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2a9f25cb7db537cf8950f4e268186c34::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2a9f25cb7db537cf8950f4e268186c34::$classMap;

        }, null, ClassLoader::class);
    }
}
