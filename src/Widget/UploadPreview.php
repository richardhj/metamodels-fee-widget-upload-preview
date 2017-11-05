<?php


namespace Richardhj\MetaModels\Contao\FrontendEditing\Widget;


use MetaModels\Attribute\File\Contao\Widget\IFileWidget;
use Richardhj\Contao\Widget\FormUploadPreview;

class UploadPreview extends FormUploadPreview implements IFileWidget
{
    /**
     * @return array
     */
    public static function getAllowedEval()
    {
        return [
            'doNotOverwrite',
            'useUserHomeDir',
            'extensions',
            'fallbackImage',
            'thumbnailSize',
        ];
    }
}
