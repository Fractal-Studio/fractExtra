var fractExtra = function (config) {
    config = config || {};
    fractExtra.superclass.constructor.call(this, config);
};
Ext.extend(fractExtra, Ext.Component, {
    page: {}, window: {}, grid: {}, tree: {}, panel: {}, combo: {}, config: {}, view: {}, utils: {}
});
Ext.reg('fractextra', fractExtra);

fractExtra = new fractExtra();