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
    Route::crud('dummy', 'DummyCrudController');
    Route::crud('support', 'SupportCrudController');
    Route::crud('invoices', 'InvoiceCrudController');
    Route::crud('product', 'ProductCrudController');
    Route::crud('notifications', 'NotificationCrudController');
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
    Route::crud('support-packages-sales', 'SupportPackageCrudController');
});

// FREE USER

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', "can:free-user"],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () {
    Route::crud('account-manager-free', 'AccountManagerCrudController');
    Route::crud('social-networks-free', 'SocialNetworkCrudController');
    Route::crud('shop-preview-free', 'ShopPreviewCrudController');
    Route::crud('ads-posts-free', 'AdsPostCrudController');
    Route::crud('support-packages-free', 'SupportPackageCrudController');
    Route::crud('notifications-free', 'NotificationCrudController');
    Route::crud('product-free', 'ProductCrudController');
});

// STARTER USER

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', "can:starter-user"],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () {
    Route::crud('account-manager-starter', 'AccountManagerCrudController');
    Route::crud('social-networks-starter', 'SocialNetworkCrudController');
    Route::crud('shop-preview-starter', 'ShopPreviewCrudController');
    Route::crud('ads-posts-starter', 'AdsPostCrudController');
    Route::crud('support-packages-starter', 'SupportPackageCrudController');
    Route::crud('notifications-starter', 'NotificationCrudController');
    Route::crud('product-starter', 'ProductCrudController');
});

// PROFESSIONAL USER

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', "can:professional-user"],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () {
    Route::crud('account-manager-professional', 'AccountManagerCrudController');
    Route::crud('social-networks-professional', 'SocialNetworkCrudController');
    Route::crud('shop-preview-professional', 'ShopPreviewCrudController');
    Route::crud('ads-posts-professional', 'AdsPostCrudController');
    Route::crud('support-packages-professional', 'SupportPackageCrudController');
    Route::crud('notifications-professional', 'NotificationCrudController');
    Route::crud('product-professional', 'ProductCrudController');
});



// ENTERPRISE USER

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', "can:entreprise-user"],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () {
    Route::crud('account-manager-enterprise', 'AccountManagerCrudController');
    Route::crud('social-networks-enterprise', 'SocialNetworkCrudController');
    Route::crud('shop-preview-enterprise', 'ShopPreviewCrudController');
    Route::crud('ads-posts-enterprise', 'AdsPostCrudController');

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

    Route::crud('support-packages-enterprise', 'SupportPackageCrudController');
    Route::crud('notifications-enterprise', 'NotificationCrudController');
    Route::crud('product-enterprise', 'ProductCrudController');
});