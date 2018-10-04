require.config({
    baseUrl: "assets/js",
    paths: {
        "angular": "angular.min",
        "app": 'apg',
        'coreModule': 'coreModule'
    },
    shim: {
        'app': {
            deps: ['angular', 'coreModule'],
            // exports: 'exports'
        },
        'coreModule': {
            deps: ['angular'],
        }
    }
});

require(['app'], function() {
    angular.bootstrap(document, ['app']);
});