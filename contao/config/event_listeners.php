<?php

/**
 * This file is part of richardhj/metamodels-fee-widget-avatar.
 *
 * Copyright (c) 2017 Richard Henkenjohann
 *
 * @package   richardhj/metamodels-fee-widget-avatar
 * @author    Richard Henkenjohann <richardhenkenjohann@googlemail.com>
 * @copyright 2017 Richard Henkenjohann
 * @license   https://github.com/richardhj/metamodels-fee-widget-avatar/blob/master/LICENSE LGPL-3.0
 */

use ContaoCommunityAlliance\DcGeneral\DcGeneralEvents;
use Richardhj\MetaModels\Contao\FrontendEditing\EventListener\GetWidgetTypeListener;

return [
    DcGeneralEvents::GET_WIDGET_CLASS => [
        [GetWidgetTypeListener::class, 'handleEvent'],
    ],
];
