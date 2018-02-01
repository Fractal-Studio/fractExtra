fractExtra.panel.Home = function (config) {
    config = config || {};
    Ext.apply(config, {
        baseCls: 'modx-formpanel',
        cls: 'container',
        layout: 'anchor',
        /*
         stateful: true,
         stateId: 'fractextra-panel-home',
         stateEvents: ['tabchange'],
         getState:function() {return {activeTab:this.items.indexOf(this.getActiveTab())};},
         */
        hideMode: 'offsets',
        items: [{
            html: '<h2>' + _('fractextra') + '</h2>',
            cls: '',
            style: {margin: '15px 0'}
        }, {
            xtype: 'modx-tabs',
            defaults: {border: false, autoHeight: true},
            border: true,
            hideMode: 'offsets',
            items: [{
                title: _('fractextra_items'),
                layout: 'anchor',
                items: [{
                    html: _('fractextra_intro_msg'),
                    cls: 'panel-desc',
                }, {
                    xtype: 'fractextra-grid-items',
                    cls: 'main-wrapper',
                }]
            }]
        }]
    });
    fractExtra.panel.Home.superclass.constructor.call(this, config);
};
Ext.extend(fractExtra.panel.Home, MODx.Panel);
Ext.reg('fractextra-panel-home', fractExtra.panel.Home);
