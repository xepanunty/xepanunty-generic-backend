<?php
//USER-SALES
//MANAGER
//ENTERPRISE
//FREE
//STARTER
//PROFESSIONAL
//SUPERADMIN-XEPANUNTY
$role = backpack_user()->roles[0]->name;

//dd($user2->hasAllRoles(\Backpack\PermissionManager\app\Models\Role::all()));
?>

<!--SUPERADMIN-XEPANUNTY-->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="nav-icon la la-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
<?php if($role === "SUPERADMIN-XEPANUNTY") : ?>
    <li class="nav-title">{{ trans('app.frontend_manager') }} </li>
    <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-newspaper-o"></i> {{ trans('app.MarketingWebSite') }}</a>
        <ul class="nav-dropdown-items">
          <li class="nav-item"><a class="nav-link" href="{{ backpack_url('page') }}"><i class="nav-icon la la-file-o"></i> <span>{{ trans('app.Pages') }}</span></a></li>
          <li class="nav-item"><a class="nav-link" href="{{ backpack_url('article') }}"><i class="nav-icon la la-newspaper-o"></i> <span>{{ trans('app.Articles') }}</span></a></li>
          <li class="nav-item"><a class="nav-link" href="{{ backpack_url('category') }}"><i class="nav-icon la la-list"></i> <span>{{ trans('app.Categories') }}</span></a></li>
        </ul>
    </li>
    <li class="nav-title">{{ trans('app.application_parts') }} </li>
    <li class="nav-item nav-dropdown">
      <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-group"></i> {{ trans('app.Authentication') }}</a>
      <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i> <span>{{ trans('app.Users') }}</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon la la-group"></i> <span> {{ trans('app.Roles') }}</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i class="nav-icon la la-key"></i> <span>{{ trans('app.Permissions') }}</span></a></li>
      </ul>
    </li>
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('elfinder') }}"><i class="nav-icon la la-files-o"></i> <span>{{ trans('app.Filemanager') }}</span></a></li>
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('setting') }}"><i class="nav-icon la la-cog"></i> <span>{{ trans('app.Settings') }}</span></a></li>
    <?php if(false) : ?>
    <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-cogs"></i> Advanced</a>
        <ul class="nav-dropdown-items">
                <li class="nav-item"><a class="nav-link" href="{{ backpack_url('backup') }}"><i class="nav-icon la la-hdd-o"></i> <span>Backups</span></a></li>
                <li class="nav-item"><a class="nav-link" href="{{ backpack_url('log') }}"><i class="nav-icon la la-terminal"></i> <span>Logs</span></a></li>
        </ul>
    </li>
    <?php endif; ?>

    <?php if($role === "SUPERADMIN-XEPANUNTY") : ?>
    <li class="nav-title">{{ trans('app.product_app') }} </li>
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('monster') }}"><i class="nav-icon la la-thumbs-up"></i> <span>{{ trans('app.manager_social_networks') }}</span></a></li>
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('fluent-monster') }}"><i class="nav-icon lab la-buysellads"></i> <span>{{ trans('app.manager_ads_networks') }}</span></a></li>
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('product') }}"><i class="nav-icon la la-shopping-cart"></i> <span>{{ trans('app.manager_store_products') }}</span></a></li>
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('dummy') }}"><i class="nav-icon las la-money-bill-wave"></i> <span>{{ trans('app.manager_payments') }}</span></a></li>
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('invoices') }}"><i class="nav-icon las la-receipt"></i> <span>{{ trans('app.manager_invoices') }}</span></a></li>
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('notifications') }}"><i class="nav-icon lar la-sticky-note"></i> <span>{{ trans('app.manager_notifications') }}</span></a></li>
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('support') }}"><i class="nav-icon las la-spinner"></i> <span>{{ trans('app.manager_support') }}</span></a></li>
    <?php endif; ?>
    <?php if(false) : ?>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('icon') }}"><i class="nav-icon la la-info-circle"></i> <span>Icons</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('menu-item') }}"><i class="nav-icon la la-list"></i> <span>Menu</span></a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('product') }}"><i class="nav-icon la la-shopping-cart"></i> <span>Products</span></a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('tag') }}"><i class="nav-icon la la-tag"></i> <span>Tags</span></a></li>
    <?php endif; ?>
<?php endif; ?>
<!--ENTERPRISE-->
<?php  if (in_array($role, ['PROFESSIONAL', 'STARTER', 'FREE', "ENTERPRISE"])) : ?>
<li class="nav-title">{{ trans('app.role_'.$role) }} </li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('account-manager-'.strtolower($role)) }}"><i class="nav-icon las la-user-tie"></i> <span>{{ trans('app.account_manager') }}</span></a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('social-networks-'.strtolower($role)) }}"><i class="nav-icon lab la-facebook"></i> <span>{{ trans('app.manager_social_networks_2') }}</span></a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('product-'.strtolower($role)) }}"><i class="nav-icon lab la-product-hunt"></i> <span>{{ trans('app.manager_product_services') }}</span></a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('elfinder') }}"><i class="nav-icon lab la-dochub"></i> <span>{{ trans('app.manager_documents') }}</span></a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('shop-preview-'.strtolower($role)) }}"><i class="nav-icon las la-store"></i> <span>{{ trans('app.manage_shop_preview') }}</span></a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('notifications-'.strtolower($role)) }}"><i class="nav-icon lar la-envelope-open"></i> <span>{{ trans('app.manage_notifications') }}</span></a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('ads-posts-'.strtolower($role)) }}"><i class="nav-icon lab la-chromecast"></i> <span>{{ trans('app.manage_ads_posts') }}</span></a></li>

<?php if($role === "ENTERPRISE") : ?>
<li class="nav-title">{{ trans('app.partners_clients') }} </li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('my-clients') }}"><i class="nav-icon las la-users"></i> <span>{{ trans('app.manage_clients') }}</span></a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('manager-partners') }}"><i class="nav-icon las la-user-plus"></i> <span>{{ trans('app.manager_partners') }}</span></a></li>
<li class="nav-title">{{ trans('app.manage_shop_store') }} </li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('personalize-shop') }}"><i class="nav-icon las la-shopping-bag"></i> <span>{{ trans('app.personalize_shop') }}</span></a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('manage-orders') }}"><i class="nav-icon  las la-receipt"></i> <span>{{ trans('app.manage_payments') }}</span></a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('manage-tracking-codes') }}"><i class="nav-icon  las la-network-wired"></i> <span>{{ trans('app.manage_tracking') }}</span></a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('payment-methods') }}"><i class="nav-icon las la-money-check"></i> <span>{{ trans('app.manage_shipping_methods') }}</span></a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('shipping-methods') }}"><i class="nav-icon las la-campground"></i> <span>{{ trans('app.manage_payment_methods') }}</span></a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('personalize-invoices') }}"><i class="nav-icon las la-file-invoice"></i> <span>{{ trans('app.manage_personalize_invoices') }}</span></a></li>
<li class="nav-title">{{ trans('app.manage_others') }} </li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('manage-email') }}"><i class="nav-icon las la-envelope"></i> <span>{{ trans('app.manage_email') }}</span></a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('sub-domain') }}"><i class="nav-icon lab la-slack-hash"></i> <span>{{ trans('app.manage_subdomain') }}</span></a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('manage-integrations') }}"><i class="nav-icon lab la-connectdevelop"></i> <span>{{ trans('app.manage_integrations') }}</span></a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('manage-newsletters') }}"><i class="nav-icon las la-mail-bulk"></i> <span>{{ trans('app.manage_shop_clients_newsletters') }}</span></a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('buy-domain') }}"><i class="nav-icon lab la-wikipedia-w"></i> <span>{{ trans('app.more_by_domain') }}</span></a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('manage-integrations-others') }}"><i class="nav-icon lab la-telegram"></i> <span>{{ trans('app.manage_integrations_2') }}</span></a></li>
<?php endif; ?>


<?php
if (in_array($role, ['PROFESSIONAL', 'STARTER', 'FREE', "ENTERPRISE", "PERSONAL"])) : ?>
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('support-packages-'.strtolower($role)) }}"><i class="nav-icon lab la-rocketchat"></i> <span>{{ trans('app.support') }}</span></a></li>
<?php endif; ?>
<?php endif; ?>


<?php  if (in_array($role, ['SALES'])) : ?>
<li class="nav-title">{{ trans('app.role_'.$role) }} </li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('sales-orders') }}"><i class="nav-icon las la-envelope"></i> <span>{{ trans('app.manage_orders') }}</span></a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('sales-refounds') }}"><i class="nav-icon lab la-slack-hash"></i> <span>{{ trans('app.manage_refounds') }}</span></a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('elfinder') }}"><i class="nav-icon lab la-dochub"></i> <span>{{ trans('app.manager_documents') }}</span></a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('notifications-sales') }}"><i class="nav-icon lar la-envelope-open"></i> <span>{{ trans('app.manage_notifications') }}</span></a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('manage-tracking-codes-sales') }}"><i class="nav-icon  las la-network-wired"></i> <span>{{ trans('app.manage_tracking') }}</span></a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('support-packages-sales') }}"><i class="nav-icon lab la-rocketchat"></i> <span>{{ trans('app.support') }}</span></a></li>
<?php endif; ?>
<?php  if (in_array($role, ['PERSONAL'])) : ?>
<li class="nav-title">{{ trans('app.role_'.$role) }} </li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('account-manager-'.strtolower($role)) }}"><i class="nav-icon las la-user-tie"></i> <span>{{ trans('app.account_manager') }}</span></a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('social-networks-'.strtolower($role)) }}"><i class="nav-icon lab la-facebook"></i> <span>{{ trans('app.manager_social_networks_2') }}</span></a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('product-'.strtolower($role)) }}"><i class="nav-icon lab la-product-hunt"></i> <span>{{ trans('app.manager_product_services') }}</span></a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('notifications-'.strtolower($role)) }}"><i class="nav-icon lar la-envelope-open"></i> <span>{{ trans('app.manage_notifications') }}</span></a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('ads-posts-'.strtolower($role)) }}"><i class="nav-icon lab la-chromecast"></i> <span>{{ trans('app.manage_ads_posts') }}</span></a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('support-packages-'.strtolower($role)) }}"><i class="nav-icon lab la-rocketchat"></i> <span>{{ trans('app.support') }}</span></a></li>

<?php endif; ?>
