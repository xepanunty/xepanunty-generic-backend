<?php
//USER-SALES
//MANAGER
//ENTERPRISE
//FREE
//STARTER
//PROFESSIONAL
//SUPERADMIN-XEPANUNTY
$role = backpack_user()->roles[0]->name;
$user2 = backpack_user();

$user2->hasRole('writer');;

//dd($user2->hasAllRoles(\Backpack\PermissionManager\app\Models\Role::all()));
?>

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
