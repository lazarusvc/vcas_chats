<nav class="navbar navbar-expand-md navbar-light d-none d-md-flex" id="topbar">
    <div class="container">
        <div class="me-4">
            {if system_freemodel < 2}
            <a class="btn btn-md btn-primary mb-1 lift" href="#" zender-toggle="zender.user.subscription">
                <i class="la la-crown la-lg me-1"></i> {__("lang_dashboard_nav_menusubscription")}
            </a>
            {else}
                {if !empty($data.package)}
                    <a class="btn btn-md btn-primary mb-1 lift" href="#" zender-toggle="zender.user.subscription">
                        <i class="la la-crown la-lg me-1"></i> {__("lang_dashboard_nav_menusubscription")}
                    </a>
                {/if}
            {/if}

            <a class="btn btn-md btn-primary mb-1 lift" href="{site_url("dashboard/misc/packages")}" zender-nav>
                <i class="la la-cubes la-lg me-1"></i> {__("lang_btn_packages")}
            </a>

            <a class="btn btn-md btn-primary mb-1 lift" href="#" zender-toggle="zender.redeem">
                <i class="la la-ticket la-lg me-1"></i> {__("lang_btn_redeem")}
            </a>
        </div>

        <div class="navbar-user" zender-usernav>
            <div class="dropdown">
                <a href="#" class="avatar avatar-sm avatar-online dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{logged_avatar}" class="avatar-img rounded-circle">
                </a>

                <div class="dropdown-menu dropdown-menu-end dropdown-menu-right">
                    <a href="#" class="dropdown-item" zender-toggle="zender.user.settings">
                        <i class="la la-user-cog"></i> {__("lang_dashboard_nav_menusettings")}
                    </a>

                    {if impersonate}
                    <a href="#" class="dropdown-item" auth-type="exit" zender-action="impersonate">
                        <i class="la la-times-circle"></i> {__("lang_impersonate_exit_btn")}
                    </a>
                    {else}
                    <a href="#" class="dropdown-item" zender-action="logout">
                        <i class="la la-sign-out"></i> {__("lang_dashboard_nav_menulogout")}
                    </a>
                    {/if}
                </div>
            </div>
        </div>
    </div>
</nav>