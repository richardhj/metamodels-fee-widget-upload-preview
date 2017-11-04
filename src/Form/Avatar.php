<?php

/**
 * This file is part of richardhj/metamodels-fee-widget-upload-preview.
 *
 * Copyright (c) 2017 Richard Henkenjohann
 *
 * @package   richardhj/metamodels-fee-widget-upload-preview
 * @author    Richard Henkenjohann <richardhenkenjohann@googlemail.com>
 * @copyright 2017 Richard Henkenjohann
 * @license   https://github.com/richardhj/metamodels-fee-widget-upload-preview/blob/master/LICENSE LGPL-3.0
 */

namespace Richardhj\MetaModels\Contao\FrontendEditing\Form;

use Contao\FilesModel;
use Richardhj\Contao\Widget\FormUploadPreview;


/**
 * Class Avatar
 *
 * @package Richardhj\MetaModels\Contao\FrontendEditing\Form
 */
class Avatar extends FormUploadPreview
{
    /**
     * {@inheritdoc}
     */
    public function __construct($attributes = null)
    {
        $folder = 'files/contaodemo';
        $folder = FilesModel::findByPath($folder);
        $attributes = array_merge(
            [
                'uploadFolder'   => $folder->uuid,
                'doNotOverwrite' => false,
                'fallbackImage'  => null,
                'thumbnailSize'  => [],
            ],
            $attributes
        );

        parent::__construct($attributes);
    }
}
