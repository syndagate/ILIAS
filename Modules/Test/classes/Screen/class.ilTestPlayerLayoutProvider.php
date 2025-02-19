<?php

/* Copyright (c) 1998-2019 ILIAS open source, Extended GPL, see docs/LICENSE */

use ILIAS\GlobalScreen\Scope\Layout\Factory\FooterModification;
use ILIAS\GlobalScreen\Scope\Layout\Factory\LogoModification;
use ILIAS\GlobalScreen\Scope\Layout\Factory\MainBarModification;
use ILIAS\GlobalScreen\Scope\Layout\Factory\MetaBarModification;
use ILIAS\GlobalScreen\Scope\Layout\Factory\ShortTitleModification;
use ILIAS\GlobalScreen\Scope\Layout\Factory\ViewTitleModification;
use ILIAS\GlobalScreen\Scope\Layout\Provider\AbstractModificationProvider;
use ILIAS\GlobalScreen\Scope\Layout\Provider\ModificationProvider;
use ILIAS\GlobalScreen\ScreenContext\Stack\CalledContexts;
use ILIAS\GlobalScreen\ScreenContext\Stack\ContextCollection;

use ILIAS\UI\Component\MainControls\MetaBar;
use ILIAS\UI\Component\MainControls\MainBar;
use ILIAS\UI\Component\MainControls\Footer;
use ILIAS\UI\Component\Image\Image;

/**
 * Class TestPlayerLayoutProvider
 *
 * @author      Björn Heyser <info@bjoernheyser.de>
 *
 * @package     Modules/Test
 */
class ilTestPlayerLayoutProvider extends AbstractModificationProvider implements ModificationProvider
{
    const TEST_PLAYER_KIOSK_MODE_ENABLED = 'test_player_kiosk_mode_enabled';
    const TEST_PLAYER_TITLE = 'test_player_kiosk_mode_title';
    const TEST_PLAYER_SHORT_TITLE = 'test_player_kiosk_mode_instance_name';


    public function isInterestedInContexts() : ContextCollection
    {
        return $this->context_collection->repository();
    }


    public function getLogoModification(CalledContexts $called_contexts) : ?LogoModification
    {
        if ($this->isKioskModeEnabled($called_contexts)) {
            $logo = $this->globalScreen()->layout()->factory()->logo();

            $logo = $logo->withModification(function (Image $current) {
                return null;
            });

            return $logo->withHighPriority();
        }

        return null;
    }


    public function getMainBarModification(CalledContexts $called_contexts) : ?MainBarModification
    {
        if ($this->isKioskModeEnabled($called_contexts)) {
            $mainBar = $this->globalScreen()->layout()->factory()->mainbar();

            $mainBar = $mainBar->withModification(function (MainBar $current) {
                return null;
            });

            return $mainBar->withHighPriority();
        }

        return null;
    }


    public function getMetaBarModification(CalledContexts $called_contexts) : ?MetaBarModification
    {
        if ($this->isKioskModeEnabled($called_contexts)) {
            $metaBar = $this->globalScreen()->layout()->factory()->metabar();

            $metaBar = $metaBar->withModification(function (MetaBar $current) {
                return null;
            });

            return $metaBar->withHighPriority();
        }

        return null;
    }


    public function getFooterModification(CalledContexts $called_contexts) : ?FooterModification
    {
        if ($this->isKioskModeEnabled($called_contexts)) {
            $footer = $this->globalScreen()->layout()->factory()->footer();

            $footer = $footer->withModification(function (Footer $current) {
                return null;
            });

            return $footer->withHighPriority();
        }

        return null;
    }


    /**
     * @param CalledContexts $called_contexts
     *
     * @return bool
     */
    protected function isKioskModeEnabled(CalledContexts $called_contexts) : bool
    {
        $additionalData = $called_contexts->current()->getAdditionalData();
        $isKioskModeEnabled = $additionalData->is(self::TEST_PLAYER_KIOSK_MODE_ENABLED, true);

        return $isKioskModeEnabled;
    }


    public function getShortTitleModification(CalledContexts $called_contexts) : ?ShortTitleModification
    {
        if ($this->isKioskModeEnabled($called_contexts)) {
            $title = $called_contexts->current()->getAdditionalData()->get(self::TEST_PLAYER_SHORT_TITLE);
            return $this->globalScreen()->layout()->factory()->short_title()
            ->withModification(
                function (string $content) use ($title): string {
                    return $title;
                }
            )
            ->withHighPriority();
        }
        return null;
    }

    public function getViewTitleModification(CalledContexts $called_contexts) : ?ViewTitleModification
    {
        if ($this->isKioskModeEnabled($called_contexts)) {
            $title = $called_contexts->current()->getAdditionalData()->get(self::TEST_PLAYER_TITLE);
            return $this->globalScreen()->layout()->factory()->view_title()
            ->withModification(
                function (string $content) use ($title): string {
                    return $title;
                }
            )
            ->withHighPriority();
        }
        return null;
    }
}
