<?php
/* Smarty version 5.1.0, created on 2024-06-05 20:34:10
  from 'file:_apidoc/layout.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_6660bdb2451d31_69522208',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3487075c0d13e960a9f7f7cc57c66e35ad4a231' => 
    array (
      0 => '_apidoc/layout.tpl',
      1 => 1717150520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6660bdb2451d31_69522208 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/eazysms1/public_html/templates/_apidoc';
?><!doctype html>
<html>

<head>
  <title>Loading...</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link href="<?php echo site_url;?>
/templates/_apidoc/vendor/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="<?php echo site_url;?>
/templates/_apidoc/vendor/prettify.css" rel="stylesheet" media="screen">
  <link href="<?php echo site_url;?>
/templates/_apidoc/css/style.css" rel="stylesheet" media="screen, print">
  <link href="<?php echo site_url;?>
/templates/_apidoc/img/favicon.ico" rel="icon" type="image/x-icon">
  <?php echo '<script'; ?>
 src="<?php echo site_url;?>
/templates/_apidoc/vendor/polyfill.js"><?php echo '</script'; ?>
>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <?php echo '<script'; ?>
>
      window.site_name = "<?php echo system_site_name;?>
";
      window.site_url = "<?php echo $_smarty_tpl->getValue('site_url');?>
";
      window.api_template = "<?php echo site_url;?>
/templates/_apidoc";
      window.sample_number = "<?php echo $_smarty_tpl->getValue('data')['number'];?>
";
      window.api_type = "<?php echo $_smarty_tpl->getValue('data')['type'];?>
";
  <?php echo '</script'; ?>
>
</head>

<body>

  

  <?php echo '<script'; ?>
 id="template-sidenav" type="text/x-handlebars-template">
    <nav id="scrollingNav" class="col-md-3">
    <div class="row">
      <div class="sidenav-search col-md-3">
        <input class="form-control search" type="text" placeholder="{{__ "Search"}}">
        <span class="search-reset">&#10005;</span>
        <span class="search-reset">&#10005;</span>
      </div>
    </div>

    <ul class="sidenav nav nav-list list col-md-3">

    {{#each nav}}
      {{#if title}}
        {{#if isHeader}}
          {{#if isFixed}}
            <li class="nav-fixed nav-header nav-list-item" data-group="{{group}}">
              <a href="#api-{{group}}">{{underscoreToSpace title}}</a>
            </li>
          {{else}}
            <li class="nav-header nav-list-item" data-group="{{group}}">
              <a href="#api-{{group}}">{{underscoreToSpace title}}</a>
            </li>
          {{/if}}
        {{else}}
          <li {{#if hidden}}class="hide" {{/if}}data-group="{{group}}" data-name="{{name}}" data-version="{{version}}">
            <a href="#api-{{group}}-{{name}}" class="nav-list-item">
              <div class="pull-left typ-name typ-{{toLowerCase type}}"><span>{{typeName}}</span></div>
              <div>{{title}}</div>
            </a>
          </li>
        {{/if}}
      {{/if}}
    {{/each}}
    </ul>
  </nav>
<?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 id="template-project" type="text/x-handlebars-template">
    <div class="pull-left">
    <h1>{{name}}</h1>
    {{#if description}}<h4>{{{nl2br description}}}</h4>{{/if}}
  </div>
  {{#if template.withCompare}}
  <div class="pull-right">
    <div class="btn-group">
      <button id="version" class="btn btn-lg dropdown-toggle" data-toggle="dropdown">
        <strong>{{version}}</strong> <span class="caret"></span>
      </button>
      <ul id="versions" class="dropdown-menu open-left">
          <li><a id="compareAllWithPredecessor" href="#">{{__ "Compare all with predecessor"}}</a></li>
          <li class="divider"></li>
          <li class="disabled"><a href="#">{{__ "show up to version:"}}</a></li>
  {{#each versions}}
        <li class="version"><a href="#">{{this}}</a></li>
  {{/each}}
      </ul>
    </div>
  </div>
  {{/if}}
  <div class="clearfix"></div>
<?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 id="template-header" type="text/x-handlebars-template">
    {{#if content}}
    <div id="api-_">{{{content}}}</div>
  {{/if}}
<?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 id="template-footer" type="text/x-handlebars-template">
    {{#if content}}
    <div id="api-_footer">{{{content}}}</div>
  {{/if}}
<?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 id="template-generator" type="text/x-handlebars-template">
    {{#if template.withGenerator}}
    {{#if generator}}
      <div class="content">
        {{__ "Generated with"}} <a href="{{{generator.url}}}">{{{generator.name}}}</a> {{{generator.version}}} - {{{generator.time}}}
      </div>
    {{/if}}
  {{/if}}
<?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 id="template-sections" type="text/x-handlebars-template">
    <section id="api-{{group}}">
    <h2>{{underscoreToSpace title}}</h2>
    {{#if description}}
      <p>{{{nl2br description}}}</p>
    {{/if}}

    {{#each articles}}
      <div id="api-{{group}}-{{name}}">
        {{{article}}}
      </div>
    {{/each}}
    </div>
  </section>
<?php echo '</script'; ?>
>


  <?php echo '<script'; ?>
 id="template-article" type="text/x-handlebars-template">
    <div class="row pre-{{toLowerCase article.type}}">
    <div class="col-xs-7 no-float">
      <article id="api-{{article.group}}-{{article.name}}-{{article.version}}" {{#if hidden}}class="hide"{{/if}} data-group="{{article.group}}" data-name="{{article.name}}" data-version="{{article.version}}">
        <div class="pull-left">
          <h3>{{article.groupTitle}}{{#if article.title}} - {{article.title}}{{/if}}</h3>
        </div>
        <div class="clearfix"></div>

        {{#if article.description}}
          <p>{{{nl2br article.description}}}</p>
        {{/if}}

        <pre class="full-pre pre-{{toLowerCase article.type}}" data-type="{{toLowerCase article.type}}"><span class="typ typ-{{toLowerCase article.type}}">{{toUpperCase article.type}}</span> <span class="url">{{article.url}}</span></pre>

        {{#if article.permission}}
          <p>
            {{__ "Permissions:"}}
            {{#each article.permission}}
              &nbsp;<button href="#" title="{{title}}" data-clipboard-target="#permission-{{name}}" class="label label-info label-permission"
              {{#if title}}data-toggle="popover" data-placement="right" data-html="true" data-content="{{nl2br description}}" data-original-title="{{title}}"{{/if}}>
                  <strong id="permission-{{name}}">{{name}}</strong>
                  {{#if title}}<i class="glyphicon glyphicon-info-sign glyphicon-white"></i>{{/if}}
              </button>
            {{/each}}
          </p>
        {{/if}}

        {{subTemplate "article-param-block" params=article.header paramType="header" _hasType=_hasTypeInHeaderFields section="header"}}
        {{subTemplate "article-param-block" params=article.parameter paramType="parameter" _hasType=_hasTypeInParameterFields section="parameter"}}
        {{subTemplate "article-param-block" params=article.success paramType="success" _hasType=_hasTypeInSuccessFields section="success"}}
        {{subTemplate "article-param-block" params=article.error paramType="error" _col1="Name" _hasType=_hasTypeInErrorFields section="error"}}

        {{subTemplate "article-sample-request" article=article id=id}}

      </article>
    </div>
    
    <div class="col-xs-4 section-example no-float">
      {{#if_gt article.examples.length compare=0}}
        <ul class="nav nav-tabs nav-tabs-examples">
          {{#each article.examples}}
            <li{{#if_eq @index compare=0}} class="active"{{/if_eq}}>
              <a href="#examples-{{../id}}-{{@index}}">{{title}}</a>
            </li>
          {{/each}}
        </ul>

        <div class="tab-content">
        {{#each article.examples}}
          <div class="tab-pane{{#if_eq @index compare=0}} active{{/if_eq}}" id="examples-{{../id}}-{{@index}}">
            <pre class="prettyprint language-{{type}}" data-type="{{type}}"><code>{{content}}</code></pre>
          </div>
        {{/each}}
        </div>
      {{/if_gt}}

      {{subTemplate "article-param-block-dark" params=article.success _hasType=_hasTypeInSuccessFields section="success"}}
      {{subTemplate "article-param-block-dark" params=article.error _col1="Name" _hasType=_hasTypeInErrorFields section="error"}}

    </div>
  </div>
<?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 id="template-article-param-block-dark" type="text/x-handlebars-template">
    {{#if params}}
    {{#if_gt params.examples.length compare=0}}
      <ul class="nav nav-tabs nav-tabs-examples">
        {{#each params.examples}}
          <li{{#if_eq @index compare=0}} class="active"{{/if_eq}}>
            <a href="#{{../section}}-examples-{{../id}}-{{@index}}">{{title}}</a>
          </li>
        {{/each}}
      </ul>

      <div class="tab-content">
      {{#each params.examples}}
        <div class="tab-pane{{#if_eq @index compare=0}} active{{/if_eq}}" id="{{../section}}-examples-{{../id}}-{{@index}}">
        <pre class="prettyprint language-{{type}}" data-type="{{type}}"><code>{{content}}</code></pre>
        </div>
      {{/each}}
      </div>
    {{/if_gt}}
  {{/if}}
<?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 id="template-article-param-block" type="text/x-handlebars-template">
    {{#if params}}
    {{#each params.fields}}
      <div class="pull-left"><h4 class="headers">{{__ @key}}</h4></div>

      <table class="table table-hover">
        <thead>
          <tr>
          <th style="width: 30%">{{#if ../../_col1}}{{__ ../../_col1}}{{else}}{{__ "Field"}}{{/if}}</th>
            {{#if ../../_hasType}}<th style="width: 10%">{{__ "Type"}}</th>{{/if}}
            <th style="width: {{#if _hasType}}60%{{else}}70%{{/if}}">{{__ "Description"}}</th>
          </tr>
        </thead>
        <tbody>
      {{#each this}}
          <tr>
            <td class="code">{{{splitFill field "." "&nbsp;&nbsp;"}}}{{#if optional}} <span class="label-optional">{{__ "(optional)"}}</span>{{/if}}</td>
            {{#if ../../_hasType}}
              <td>
                {{{type}}}
              </td>
            {{/if}}
            <td>
            {{{nl2br description}}}
            {{#if defaultValue}}<p class="default-value">{{__ "Default value:"}} <code>{{{defaultValue}}}</code></p>{{/if}}
            {{#if size}}<p class="type-size">{{__ "Size range:"}} <code>{{{size}}}</code></p>{{/if}}
            {{#if allowedValues}}<p class="type-size">{{__ "Allowed values:"}}
              {{#each allowedValues}}
                <code>{{{this}}}</code>{{#unless @last}}, {{/unless}}
              {{/each}}
              </p>
            {{/if}}
            </td>
          </tr>
      {{/each}}
        </tbody>
      </table>
    {{/each}}
  {{/if}}
<?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 id="template-article-sample-request" type="text/x-handlebars-template">
    {{#if article.sampleRequest}}
      <h2 class="hide-print">{{__ "Send a Sample Request"}}</h2>
      <form class="hide-print">
        <fieldset>
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon">{{__ "url"}}</span>
              <input type="text" class="form-control sample-request-url" value="{{article.sampleRequest.0.url}}" />
            </div>
          </div>

      {{#if article.header}}
        {{#if article.header.fields}}
          <h4>{{__ "Headers"}}</h4>
          {{#each article.header.fields}}
            <div class="{{../id}}-sample-request-header-fields">
              {{#each this}}
              <div class="form-group">
                <label for="sample-request-header-field-{{field}}">{{field}}</label>
                <div class="input-group">
                  <input type="text" placeholder="{{field}}" class="form-control sample-request-header" data-sample-request-header-name="{{field}}" data-sample-request-header-group="sample-request-header-{{@../index}}">
                  <span class="input-group-addon">{{{type}}}</span>
                </div>
              </div>
              {{/each}}
            </div>
          {{/each}}
        {{/if}}
      {{/if}}

      {{#if article.parameter}}
        {{#if article.parameter.fields}}
          <h4>{{__ "Parameters"}}</h4>
          {{#each article.parameter.fields}}
            <div class="{{../id}}-sample-request-param-fields">
              {{#each this}}
              <div class="form-group">
                <label for="sample-request-param-field-{{field}}">{{field}}</label>
                <div class="input-group">
                  <input type="text" placeholder="{{field}}" class="form-control sample-request-param" data-sample-request-param-name="{{field}}" data-sample-request-param-group="sample-request-param-{{@../index}}">
                  <span class="input-group-addon">{{{type}}}</span>
                </div>
              </div>
              {{/each}}
            </div>
          {{/each}}
        {{/if}}
      {{/if}}

          <div class="form-group">
            <button class="btn btn-primary btn-lg sample-request-send" data-sample-request-type="{{article.type}}">{{__ "Send"}}</button>
          </div>

          <div class="sample-request-response" style="display: none;">
            <h4>
              {{__ "Response"}}
              <button type="button" class="btn-link pull-right sample-request-clear">
                <i class="glyphicon glyphicon-remove"></i>
              </button>
            </h4>
            <pre class="prettyprint language-json" data-type="json"><code class="sample-request-response-json"></code></pre>
          </div>

        </fieldset>
      </form>
    {{/if}}
<?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 id="template-compare-article" type="text/x-handlebars-template">
    <article id="api-{{article.group}}-{{article.name}}-{{article.version}}" {{#if hidden}}class="hide"{{/if}} data-group="{{article.group}}" data-name="{{article.name}}" data-version="{{article.version}}" data-compare-version="{{compare.version}}">
    <div class="pull-left">
      <h1>{{underscoreToSpace article.group}} - {{{showDiff article.title compare.title}}}</h1>
    </div>

    <div class="pull-right">
      <div class="btn-group">
        <button class="btn btn-success" disabled>
          <strong>{{article.version}}</strong> {{__ "compared to"}}
        </button>
        <button class="version btn btn-danger dropdown-toggle" data-toggle="dropdown">
          <strong>{{compare.version}}</strong> <span class="caret"></span>
        </button>
        <ul class="versions dropdown-menu open-left">
          <li class="disabled"><a href="#">{{__ "compare changes to:"}}</a></li>
          <li class="divider"></li>
  {{#each versions}}
          <li class="version"><a href="#">{{this}}</a></li>
  {{/each}}
        </ul>
      </div>
    </div>
    <div class="clearfix"></div>

    {{#if article.description}}
      <p>{{{showDiff article.description compare.description "nl2br"}}}</p>
    {{else}}
      {{#if compare.description}}
      <p>{{{showDiff "" compare.description "nl2br"}}}</p>
      {{/if}}
    {{/if}}

    <pre class="prettyprint language-html" data-type="{{toLowerCase article.type}}"><code>{{{showDiff article.url compare.url}}}</code></pre>

    {{subTemplate "article-compare-permission" article=article compare=compare}}

    <ul class="nav nav-tabs nav-tabs-examples">
    {{#each_compare_title article.examples compare.examples}}

      {{#if typeSame}}
        <li{{#if_eq index compare=0}} class="active"{{/if_eq}}>
          <a href="#compare-examples-{{../../article.id}}-{{index}}">{{{showDiff source.title compare.title}}}</a>
        </li>
      {{/if}}

      {{#if typeIns}}
        <li{{#if_eq index compare=0}} class="active"{{/if_eq}}>
          <a href="#compare-examples-{{../../article.id}}-{{index}}"><ins>{{{source.title}}}</ins></a>
        </li>
      {{/if}}

      {{#if typeDel}}
        <li{{#if_eq index compare=0}} class="active"{{/if_eq}}>
          <a href="#compare-examples-{{../../article.id}}-{{index}}"><del>{{{compare.title}}}</del></a>
        </li>
      {{/if}}

    {{/each_compare_title}}
    </ul>

    <div class="tab-content">
    {{#each_compare_title article.examples compare.examples}}

      {{#if typeSame}}
        <div class="tab-pane{{#if_eq index compare=0}} active{{/if_eq}}" id="compare-examples-{{../../article.id}}-{{index}}">
          <pre class="prettyprint language-{{source.type}}" data-type="{{source.type}}"><code>{{{showDiff source.content compare.content}}}</code></pre>
        </div>
      {{/if}}

      {{#if typeIns}}
        <div class="tab-pane{{#if_eq index compare=0}} active{{/if_eq}}" id="compare-examples-{{../../article.id}}-{{index}}">
          <pre class="prettyprint language-{{source.type}}" data-type="{{source.type}}"><code>{{{source.content}}}</code></pre>
        </div>
      {{/if}}

      {{#if typeDel}}
        <div class="tab-pane{{#if_eq index compare=0}} active{{/if_eq}}" id="compare-examples-{{../../article.id}}-{{index}}">
          <pre class="prettyprint language-{{source.type}}" data-type="{{compare.type}}"><code>{{{compare.content}}}</code></pre>
        </div>
      {{/if}}

    {{/each_compare_title}}
    </div>

    {{subTemplate "article-compare-param-block" source=article.parameter compare=compare.parameter _hasType=_hasTypeInParameterFields section="parameter"}}
    {{subTemplate "article-compare-param-block" source=article.success compare=compare.success _hasType=_hasTypeInSuccessFields section="success"}}
    {{subTemplate "article-compare-param-block" source=article.error compare=compare.error _col1="Name" _hasType=_hasTypeInErrorFields section="error"}}

    {{subTemplate "article-sample-request" article=article id=id}}

  </article>
<?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 id="template-article-compare-permission" type="text/x-handlebars-template">
    {{#each_compare_list_field article.permission compare.permission field="name"}}
    {{#if source}}
      {{#if typeSame}}
        {{source.name}}
        {{#if source.title}}
          &nbsp;<a href="#" data-toggle="popover" data-placement="right" data-html="true" data-content="{{nl2br source.description}}" title="" data-original-title="{{source.title}}"><span class="label label-info"><i class="glyphicon glyphicon-info-sign glyphicon-white"></i></span></a>
          {{#unless _last}}, {{/unless}}
        {{/if}}
      {{/if}}

      {{#if typeIns}}
        <ins>{{source.name}}</ins>
        {{#if source.title}}
          &nbsp;<a href="#" data-toggle="popover" data-placement="right" data-html="true" data-content="{{nl2br source.description}}" title="" data-original-title="{{source.title}}"><span class="label label-info"><i class="glyphicon glyphicon-info-sign glyphicon-white"></i></span></a>
          {{#unless _last}}, {{/unless}}
        {{/if}}
      {{/if}}

      {{#if typeDel}}
        <del>{{source.name}}</del>
        {{#if source.title}}
          &nbsp;<a href="#" data-toggle="popover" data-placement="right" data-html="true" data-content="{{nl2br source.description}}" title="" data-original-title="{{source.title}}"><span class="label label-info"><i class="glyphicon glyphicon-info-sign glyphicon-white"></i></span></a>
          {{#unless _last}}, {{/unless}}
        {{/if}}
      {{/if}}
    {{else}}
      {{#if typeSame}}
        {{compare.name}}
        {{#if compare.title}}
          &nbsp;<a href="#" data-toggle="popover" data-placement="right" data-html="true" data-content="{{nl2br compare.description}}" title="" data-original-title="{{compare.title}}"><span class="label label-info"><i class="glyphicon glyphicon-info-sign glyphicon-white"></i></span></a>
          {{#unless _last}}, {{/unless}}
        {{/if}}
      {{/if}}

      {{#if typeIns}}
        <ins>{{compare.name}}</ins>
        {{#if compare.title}}
          &nbsp;<a href="#" data-toggle="popover" data-placement="right" data-html="true" data-content="{{nl2br compare.description}}" title="" data-original-title="{{compare.title}}"><span class="label label-info"><i class="glyphicon glyphicon-info-sign glyphicon-white"></i></span></a>
          {{#unless _last}}, {{/unless}}
        {{/if}}
      {{/if}}

      {{#if typeDel}}
        <del>{{compare.name}}</del>
        {{#if compare.title}}
          &nbsp;<a href="#" data-toggle="popover" data-placement="right" data-html="true" data-content="{{nl2br compare.description}}" title="" data-original-title="{{compare.title}}"><span class="label label-info"><i class="glyphicon glyphicon-info-sign glyphicon-white"></i></span></a>
          {{#unless _last}}, {{/unless}}
        {{/if}}
      {{/if}}
    {{/if}}
  {{/each_compare_list_field}}
<?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 id="template-article-compare-param-block" type="text/x-handlebars-template">
    {{#if source}}
    {{#each_compare_keys source.fields compare.fields}}
      {{#if typeSame}}
        <h2>{{__ source.key}}</h2>
        <table>
        <thead>
          <tr>
            <th style="width: 30%">{{#if ../../_col1}}{{__ ../../_col1}}{{else}}{{__ "Field"}}{{/if}}</th>
            {{#if ../../_hasType}}<th style="width: 10%">{{__ "Type"}}</th>{{/if}}
            <th style="width: {{#if _hasType}}60%{{else}}70%{{/if}}">{{__ "Description"}}</th>
          </tr>
        </thead>
        {{subTemplate "article-compare-param-block-body" source=source.value compare=compare.value _hasType=../../_hasType}}
        </table>
      {{/if}}

      {{#if typeIns}}
        <h2><ins>{{__ source.key}}</ins></h2>
        <table class="ins">
        <thead>
          <tr>
            <th style="width: 30%">{{#if ../../_col1}}{{__ ../../_col1}}{{else}}{{__ "Field"}}{{/if}}</th>
            {{#if ../../_hasType}}<th style="width: 10%">{{__ "Type"}}</th>{{/if}}
            <th style="width: {{#if _hasType}}60%{{else}}70%{{/if}}">{{__ "Description"}}</th>
          </tr>
        </thead>
        {{subTemplate "article-compare-param-block-body" source=source.value compare=source.value _hasType=../../_hasType}}
        </table>
      {{/if}}

      {{#if typeDel}}
        <h2><del>{{__ compare.key}}</del></h2>
        <table class="del">
        <thead>
          <tr>
            <th style="width: 30%">{{#if ../../_col1}}{{__ ../../_col1}}{{else}}{{__ "Field"}}{{/if}}</th>
            {{#if ../../_hasType}}<th style="width: 10%">{{__ "Type"}}</th>{{/if}}
            <th style="width: {{#if _hasType}}60%{{else}}70%{{/if}}">{{__ "Description"}}</th>
          </tr>
        </thead>
        {{subTemplate "article-compare-param-block-body" source=compare.value compare=compare.value _hasType=../../_hasType}}
        </table>
      {{/if}}
    {{/each_compare_keys}}

    <ul class="nav nav-tabs nav-tabs-examples">
    {{#each_compare_title source.examples compare.examples}}

      {{#if typeSame}}
        <li{{#if_eq index compare=0}} class="active"{{/if_eq}}>
          <a href="#{{../../section}}-compare-examples-{{../../article.id}}-{{index}}">{{{showDiff source.title compare.title}}}</a>
        </li>
      {{/if}}

      {{#if typeIns}}
        <li{{#if_eq index compare=0}} class="active"{{/if_eq}}>
          <a href="#{{../../section}}-compare-examples-{{../../article.id}}-{{index}}"><ins>{{{source.title}}}</ins></a>
        </li>
      {{/if}}

      {{#if typeDel}}
        <li{{#if_eq index compare=0}} class="active"{{/if_eq}}>
          <a href="#{{../../section}}-compare-examples-{{../../article.id}}-{{index}}"><del>{{{compare.title}}}</del></a>
        </li>
      {{/if}}

    {{/each_compare_title}}
    </ul>

    <div class="tab-content">
    {{#each_compare_title source.examples compare.examples}}

      {{#if typeSame}}
        <div class="tab-pane{{#if_eq index compare=0}} active{{/if_eq}}" id="{{../../section}}-compare-examples-{{../../article.id}}-{{index}}">
          <pre class="prettyprint language-{{source.type}}" data-type="{{source.type}}"><code>{{{showDiff source.content compare.content}}}</code></pre>
        </div>
      {{/if}}

      {{#if typeIns}}
        <div class="tab-pane{{#if_eq index compare=0}} active{{/if_eq}}" id="{{../../section}}-compare-examples-{{../../article.id}}-{{index}}">
          <pre class="prettyprint language-{{source.type}}" data-type="{{source.type}}"><code>{{{source.content}}}</code></pre>
        </div>
      {{/if}}

      {{#if typeDel}}
        <div class="tab-pane{{#if_eq index compare=0}} active{{/if_eq}}" id="{{../../section}}-compare-examples-{{../../article.id}}-{{index}}">
          <pre class="prettyprint language-{{source.type}}" data-type="{{compare.type}}"><code>{{{compare.content}}}</code></pre>
        </div>
      {{/if}}

    {{/each_compare_title}}
    </div>

  {{/if}}
<?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 id="template-article-compare-param-block-body" type="text/x-handlebars-template">
    <tbody>
    {{#each_compare_field source compare}}
      {{#if typeSame}}
        <tr>
          <td class="code">
            {{{splitFill source.field "." "&nbsp;&nbsp;"}}}
            {{#if source.optional}}
              {{#if compare.optional}} <span class="label label-default label-optional">{{__ "optional"}}</span>
              {{else}} <span class="label label-default label-optional label-ins">{{__ "optional"}}</span>
              {{/if}}
            {{else}}
              {{#if compare.optional}} <span class="label label-default label-optional label-del">{{__ "optional"}}</span>{{/if}}
            {{/if}}
          </td>

        {{#if source.type}}
          {{#if compare.type}}
          <td>{{{showDiff source.type compare.type}}}</td>
          {{else}}
          <td>{{{source.type}}}</td>
          {{/if}}
        {{else}}
          {{#if compare.type}}
          <td>{{{compare.type}}}</td>
          {{else}}
            {{#if ../../../../_hasType}}<td></td>{{/if}}
          {{/if}}
        {{/if}}
          <td>
            {{{showDiff source.description compare.description "nl2br"}}}
            {{#if source.defaultValue}}<p class="default-value">{{__ "Default value:"}} <code>{{{showDiff source.defaultValue compare.defaultValue}}}</code><p>{{/if}}
          </td>
        </tr>
      {{/if}}

      {{#if typeIns}}
        <tr class="ins">
          <td class="code">
            {{{splitFill source.field "." "&nbsp;&nbsp;"}}}
            {{#if source.optional}} <span class="label label-default label-optional label-ins">{{__ "optional"}}</span>{{/if}}
          </td>

        {{#if source.type}}
          <td>{{{source.type}}}</td>
        {{else}}
          {{{typRowTd}}}
        {{/if}}

          <td>
            {{{nl2br source.description}}}
            {{#if source.defaultValue}}<p class="default-value">{{__ "Default value:"}} <code>{{{source.defaultValue}}}</code><p>{{/if}}
          </td>
        </tr>
      {{/if}}

      {{#if typeDel}}
        <tr class="del">
          <td class="code">
            {{{splitFill compare.field "." "&nbsp;&nbsp;"}}}
            {{#if compare.optional}} <span class="label label-default label-optional label-del">{{__ "optional"}}</span>{{/if}}
          </td>

        {{#if compare.type}}
          <td>{{{compare.type}}}</td>
        {{else}}
          {{{typRowTd}}}
        {{/if}}

          <td>
            {{{nl2br compare.description}}}
            {{#if compare.defaultValue}}<p class="default-value">{{__ "Default value:"}} <code>{{{compare.defaultValue}}}</code><p>{{/if}}
          </td>
        </tr>
      {{/if}}

    {{/each_compare_field}}
  </tbody>
<?php echo '</script'; ?>
>

  <div class="container-fluid">
    <div class="row">
      <div id="sidenav" class="col-sm-3 col-md-3"></div>
      <div id="content" class="col-sm-9 col-md-9">
        <div id="header"></div>
        <div id="sections"></div>
        <div id="footer"></div>
      </div>
    </div>
  </div>

  <div id="loader">
    <div class="spinner">
      <div class="spinner-container container1">
        <div class="circle1"></div>
        <div class="circle2"></div>
        <div class="circle3"></div>
        <div class="circle4"></div>
      </div>
      <div class="spinner-container container2">
        <div class="circle1"></div>
        <div class="circle2"></div>
        <div class="circle3"></div>
        <div class="circle4"></div>
      </div>
      <div class="spinner-container container3">
        <div class="circle1"></div>
        <div class="circle2"></div>
        <div class="circle3"></div>
        <div class="circle4"></div>
      </div>
      <p>Loading...</p>
    </div>
  </div>


  <!-- Modal -->
<div class="modal animated fadeIn" id="jsonModal" tabindex="-1" role="dialog" aria-labelledby="jsonModalLabel">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-clipboard"><i class="material-icons">content_copy</i></div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body" id="json-pre"></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
  <pre id="preData" style="visibility: hidden"></pre>
</div>



  <?php echo '<script'; ?>
 src="<?php echo site_url;?>
/templates/_assets/js/libs/iframeResizer.contentWindow.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 data-main="<?php echo site_url;?>
/templates/_apidoc/main.js" src="<?php echo site_url;?>
/templates/_apidoc/vendor/require.min.js"><?php echo '</script'; ?>
>

</body>

</html>
<?php }
}
