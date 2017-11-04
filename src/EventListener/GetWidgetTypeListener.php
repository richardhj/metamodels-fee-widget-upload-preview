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

namespace Richardhj\MetaModels\Contao\FrontendEditing\EventListener;

use ContaoCommunityAlliance\DcGeneral\Event\GetWidgetClassEvent;
use MetaModels\DcGeneral\DataDefinition\IMetaModelDataDefinition;
use Richardhj\MetaModels\Contao\FrontendEditing\Form\Avatar as Widget;


/**
 * Class GetWidgetTypeListener
 *
 * @package Richardhj\MetaModels\Contao\FrontendEditing\EventListener
 */
class GetWidgetTypeListener
{

    /**
     * Set the proper FFL widget class for the file attribute in the MetaModels Frontend Editing.
     *
     * @param GetWidgetClassEvent $event
     */
    public function handleEvent(GetWidgetClassEvent $event)
    {
        if ('FE' !== TL_MODE) {
            return;
        }

        // DUMMY CODE

        $property    = $event->getProperty();
        $environment = $event->getEnvironment();
        /** @var IMetaModelDataDefinition $dataDefinition */
        $dataDefinition = $environment->getDataDefinition();

        $b = $dataDefinition->getMetaModelDefinition();
        $d = $b->getActiveInputScreen();

        if ('fileTree' === $property->getWidgetType()) {
            $event->setWidgetClass(Widget::class);
        }
    }
}
