<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

// XEPANUNTY SUPPER-ADMIN
Route::get('api/article', 'App\Http\Controllers\Api\ArticleController@index');
Route::get('api/article-search', 'App\Http\Controllers\Api\ArticleController@search');
Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', "can:permission-manager"],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    // -----
    // CRUDs
    // -----
    Route::crud('monster', 'MonsterCrudController');
    Route::crud('fluent-monster', 'FluentMonsterCrudController');
    Route::crud('icon', 'IconCrudController');
    Route::crud('product', 'ProductCrudController');
    Route::crud('dummy', 'DummyCrudController');
    Route::crud('notifications', 'NotificationCrudController');
    Route::crud('support', 'SupportCrudController');
    Route::crud('invoices', 'InvoiceCrudController');
    // ------------------
    // AJAX Chart Widgets
    // ------------------
    Route::get('charts/users', 'Charts\LatestUsersChartController@response');
    Route::get('charts/new-entries', 'Charts\NewEntriesChartController@response');

    if (app('env') == 'production') {
        // disable delete and bulk delete for all CRUDs
        $cruds = ['article', 'category', 'tag', 'monster', 'icon', 'product', 'page', 'menu-item', 'user', 'role', 'permission'];
        foreach ($cruds as $name) {
            Route::delete($name.'/{id}', function () {
                return false;
            });
            Route::post($name.'/bulk-delete', function () {
                return false;
            });
        }
    }

});

// SALES USER - BY SITE
/*SALES
    sales-orders
    sales-refounds
    notifications
    manage-tracking-codes
    support-packages
*/
Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', "can:sales-user"],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () {
    Route::crud('sales-orders', 'SalesOrderCrudController');
    Route::crud('sales-refounds', 'SalesRefoundCrudController');
    Route::crud('notifications-sales', 'NotificationCrudController'); //
    Route::crud('manage-tracking-codes-sales', 'ManageTrackingCodeCrudController'); //
    Route::crud('support-packages', 'SupportPackageCrudController');

});

// FREE USER
/* FREE
    account-manager
    social-networks
    product
    documents
    shop-preview
    notifications
    ads-posts
support-packages*/

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', "can:free-user", "can:starter-user", "can:professional-user", "can:entreprise-user"],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () {
    Route::crud('account-manager', 'AccountManagerCrudController');
    Route::crud('social-networks', 'SocialNetworkCrudController');
    Route::crud('shop-preview', 'ShopPreviewCrudController');
    Route::crud('ads-posts', 'AdsPostCrudController');
    Route::crud('product', 'ProductCrudController');
    Route::crud('notifications', 'NotificationCrudController');
    Route::crud('support-packages', 'SupportPackageCrudController');
});


Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', "can:entreprise-user"],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () {
    Route::crud('my-clients', 'MyClientCrudController');
    Route::crud('manager-partners', 'ManagerPartnerCrudController');
    Route::crud('personalize-shop', 'PersonalizeShopCrudController');
    Route::crud('manage-orders', 'ManageOrdersCrudController');
    Route::crud('payment-methods', 'PaymentMethodCrudController');
    Route::crud('shipping-methods', 'ShippingMethodCrudController');
    Route::crud('personalize-invoices', 'PersonalizeInvoiceCrudController');
    Route::crud('manage-email', 'ManageEmailCrudController');
    Route::crud('sub-domain', 'SubDomainCrudController');
    Route::crud('manage-integrations', 'ManageIntegrationCrudController');
    Route::crud('manage-newsletters', 'ManageNewsletterCrudController');
    Route::crud('buy-domain', 'BuyDomainCrudController');
    Route::crud('manage-integrations-others', 'ManageIntegrationsOtherCrudController');
    Route::crud('manage-tracking-codes', 'ManageTrackingCodeCrudController');
});