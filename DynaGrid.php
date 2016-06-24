<?php

namespace futuretek\dynagrid;

class DynaGrid extends \kartik\dynagrid\DynaGrid
{
    /**
     * @inheritDoc
     */
    protected function initGrid()
    {
        $this->_module->configView = '@kartik/dynagrid/views/config.php';
        $this->_module->settingsView = '@kartik/dynagrid/views/settings.php';

        parent::initGrid();
    }
}
