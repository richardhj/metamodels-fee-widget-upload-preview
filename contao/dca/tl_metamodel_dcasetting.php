<?php

$GLOBALS['TL_DCA']['tl_metamodel_dcasetting']['metasubselectpalettes']['fe_widget']['mm_upload_preview'][] =
    'doNotOverwrite';
$GLOBALS['TL_DCA']['tl_metamodel_dcasetting']['metasubselectpalettes']['fe_widget']['mm_upload_preview'][] =
    'useHomeDir';
//$GLOBALS['TL_DCA']['tl_metamodel_dcasetting']['metasubselectpalettes']['fe_widget']['mm_upload_preview'][] =
//    'extensions';
$GLOBALS['TL_DCA']['tl_metamodel_dcasetting']['metasubselectpalettes']['fe_widget']['mm_upload_preview'][] =
    'fallbackImage';
$GLOBALS['TL_DCA']['tl_metamodel_dcasetting']['metasubselectpalettes']['fe_widget']['mm_upload_preview'][] =
    'thumbnailSize';

$GLOBALS['TL_DCA']['tl_metamodel_dcasetting']['fields']['thumbnailSize'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_metamodel_dcasetting']['thumbnailSize'],
    'exclude'   => true,
    'inputType' => 'imageSize',
    'eval'      => [
        'rgxp'               => 'natural',
        'includeBlankOption' => true,
        'nospace'            => true,
        'helpwizard'         => true,
        'tl_class'           => 'w50',
    ],
    'options'   => System::getImageSizes(),
    'reference' => &$GLOBALS['TL_LANG']['MSC'],
    'sql'       => "varchar(64) NOT NULL default ''",
];