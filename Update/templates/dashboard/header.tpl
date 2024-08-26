<!DOCTYPE html>
<html lang="en" {if language_rtl}dir="rtl"{/if}>

<head>
    <link rel="dns-prefetch" href="//fonts.googleapis.com">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="{system_site_desc|truncate:165}">
    <link rel="icon" href="{get_image("favicon")}">

    <title>{$title} &middot; {system_site_name}</title>

    <link rel="stylesheet" href="{_assets("css/libs/line-awesome.min.css")}">
    <link rel="stylesheet" href="{assets("css/fonts/feather/feather.css")}">
    <link rel="stylesheet" href="{_assets("css/libs/flag-icon.min.css")}">
    <link rel="stylesheet" href="{if language_rtl}{if logged_theme_color eq "dark"}{assets("css/libs/bootstrap.dark.rtl.min.css")}{else}{assets("css/libs/bootstrap.rtl.min.css")}{/if}{else}{if logged_theme_color eq "dark"}{assets("css/libs/bootstrap.dark.min.css")}{else}{assets("css/libs/bootstrap.min.css")}{/if}{/if}" />
    <link rel="stylesheet" href="{if language_rtl}{assets("css/style.rtl.min.css")}{else}{assets("css/style.min.css")}{/if}">
</head>

<body {if in_array($page, ["auth/default", "auth/forgot", "auth/register"])}class="d-flex align-items-center bg-auth border-top border-top-2 border-primary"{/if} {if in_array($page, ["auth/social.error", "plugin/plugin.page", "plugin/plugin.error",  "errors/404.error", "misc/payment", "misc/unsubscribe"])}class="d-flex align-items-center bg-auth border-top border-top-2 border-primary"{/if}>
    {if logged_id && !in_array($page, ["auth/default", "auth/social.error", "plugin/plugin.page", "plugin/plugin.error", "errors/404.error", "misc/payment", "misc/unsubscribe"])}
    {include "./modules/sidebar.block.tpl"}
    {/if}