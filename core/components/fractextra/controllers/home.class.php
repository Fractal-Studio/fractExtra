<?php

/**
 * The home manager controller for fractExtra.
 *
 */
class fractExtraHomeManagerController extends modExtraManagerController
{
    /** @var fractExtra $fractExtra */
    public $fractExtra;


    /**
     *
     */
    public function initialize()
    {
        $this->fractExtra = $this->modx->getService('fractExtra', 'fractExtra', MODX_CORE_PATH . 'components/fractextra/model/');
        parent::initialize();
    }


    /**
     * @return array
     */
    public function getLanguageTopics()
    {
        return ['fractextra:default'];
    }


    /**
     * @return bool
     */
    public function checkPermissions()
    {
        return true;
    }


    /**
     * @return null|string
     */
    public function getPageTitle()
    {
        return $this->modx->lexicon('fractextra');
    }


    /**
     * @return void
     */
    public function loadCustomCssJs()
    {
        $this->addCss($this->fractExtra->config['cssUrl'] . 'mgr/main.css');
        $this->addJavascript($this->fractExtra->config['jsUrl'] . 'mgr/fractextra.js');
        $this->addJavascript($this->fractExtra->config['jsUrl'] . 'mgr/misc/utils.js');
        $this->addJavascript($this->fractExtra->config['jsUrl'] . 'mgr/misc/combo.js');
        $this->addJavascript($this->fractExtra->config['jsUrl'] . 'mgr/widgets/items.grid.js');
        $this->addJavascript($this->fractExtra->config['jsUrl'] . 'mgr/widgets/items.windows.js');
        $this->addJavascript($this->fractExtra->config['jsUrl'] . 'mgr/widgets/home.panel.js');
        $this->addJavascript($this->fractExtra->config['jsUrl'] . 'mgr/sections/home.js');

        $this->addHtml('<script type="text/javascript">
        fractExtra.config = ' . json_encode($this->fractExtra->config) . ';
        fractExtra.config.connector_url = "' . $this->fractExtra->config['connectorUrl'] . '";
        Ext.onReady(function() {MODx.load({ xtype: "fractextra-page-home"});});
        </script>');
    }


    /**
     * @return string
     */
    public function getTemplateFile()
    {
        $this->content .= '<div id="fractextra-panel-home-div"></div>';

        return '';
    }
}