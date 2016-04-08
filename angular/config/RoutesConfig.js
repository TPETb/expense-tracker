export function RoutesConfig($stateProvider, $urlRouterProvider) {
    'ngInject';

    var getView = function (viewName) {
        return './views/app/pages/' + viewName + '/' + viewName + '.page.html';
    };

    $urlRouterProvider.otherwise('/');

    $stateProvider
        .state('app', {
            abstract: true,
            views: {
                header: {
                    templateUrl: getView('header')
                },
                footer: {
                    templateUrl: getView('footer')
                },
                main: {}
            }
        })
        .state('app.landing', {
            url: '/',
            data: {},
            views: {
                'main@': {
                    templateUrl: getView('landing')
                }
            }
        })
        .state('app.login', {
            url: '/login',
            views: {
                'main@': {
                    templateUrl: getView('login')
                }
            }
        })
        .state('app.expenses', {
            url: '/expenses',
            views: {
                'main@': {
                    templateUrl: getView('expenses')
                }
            }
        })
        .state('app.expense-tags', {
            url: '/expenses-tags',
            views: {
                'main@': {
                    templateUrl: getView('expense-tags')
                }
            }
        });
}
