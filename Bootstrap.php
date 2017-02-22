<?php

final class Shopware_Plugins_Core_ViisonTestPlugin_Bootstrap extends Shopware_Components_Plugin_Bootstrap
{
    public function getVersion()
    {
        return '0.0.1';
    }

    public function getInfo()
    {
        return [
            'label' => '[Dummy] Test Plugin',
            'description' => 'A dummy shopware plugin to test our release pipeline',
            'autor' => 'VIISON GmbH',
            'copyright' => 'Copyright © 2016, VIISON GmbH',
            'license' => 'All rights reserved.',
            'support' => 'support@pickware.de',
            'link' => 'http://www.pickware.de',
            'version' => $this->getVersion()
        ];
    }

    public function install()
    {
        return true;
    }

    public function update($oldVersion)
    {
        return true;
    }

    public function uninstall()
    {
        return true;
    }
}
