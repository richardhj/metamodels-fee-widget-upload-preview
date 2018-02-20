<?php


namespace Richardhj\MetaModels\Contao\FrontendEditing\Widget;


use MetaModels\AttributeFileBundle\Contao\Widget\IFrontendFileWidget;
use Richardhj\Contao\Widget\FormUploadPreview;

class UploadPreview extends FormUploadPreview implements IFrontendFileWidget
{
    /**
     * @return array
     */
    public static function getAllowedEval()
    {
        return [
            'doNotOverwrite',
            'useHomeDir',
            'extensions',
            'fallbackImage',
            'thumbnailSize',
        ];
    }
}
