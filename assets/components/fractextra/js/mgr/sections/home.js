fractExtra.page.Home = function (config) {
    config = config || {};
    Ext.applyIf(config, {
        components: [{
            xtype: 'fractextra-panel-home',
            renderTo: 'fractextra-panel-home-div'
        }]
    });
    fractExtra.page.Home.superclass.constructor.call(this, config);
};
Ext.extend(fractExtra.page.Home, MODx.Component);
Ext.reg('fractextra-page-home', fractExtra.page.Home);