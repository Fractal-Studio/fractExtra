Ext.onReady(function () {
    fractExtra.config.connector_url = OfficeConfig.actionUrl;

    var grid = new fractExtra.panel.Home();
    grid.render('office-fractextra-wrapper');

    var preloader = document.getElementById('office-preloader');
    if (preloader) {
        preloader.parentNode.removeChild(preloader);
    }
});