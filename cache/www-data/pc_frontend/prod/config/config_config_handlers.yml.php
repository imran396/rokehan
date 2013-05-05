<?php
// auto-generated by sfRootConfigHandler
// date: 2013/05/06 02:03:13
require_once('/var/www/rokehan/lib/config/opRoutingConfigHandler.class.php');
require_once('/var/www/rokehan/lib/config/opViewConfigHandler.class.php');
require_once('/var/www/rokehan/lib/config/opPluginConfigHandler.class.php');
$this->handlers['config/autoload.yml'] = new sfAutoloadConfigHandler();
$this->handlers['config/databases.yml'] = new sfDatabaseConfigHandler();
$this->handlers['config/settings.yml'] = new sfDefineEnvironmentConfigHandler(array (
  'prefix' => 'sf_',
));
$this->handlers['config/app.yml'] = new sfDefineEnvironmentConfigHandler(array (
  'prefix' => 'app_',
));
$this->handlers['config/factories.yml'] = new sfFactoryConfigHandler();
$this->handlers['config/core_compile.yml'] = new sfCompileConfigHandler();
$this->handlers['config/filters.yml'] = new sfFilterConfigHandler();
$this->handlers['config/routing.yml'] = new opRoutingConfigHandler();
$this->handlers['modules/*/config/generator.yml'] = new sfGeneratorConfigHandler();
$this->handlers['modules/*/config/view.yml'] = new opViewConfigHandler();
$this->handlers['modules/*/config/security.yml'] = new opSecurityConfigHandler();
$this->handlers['modules/*/config/cache.yml'] = new sfCacheConfigHandler();
$this->handlers['modules/*/config/module.yml'] = new sfDefineEnvironmentConfigHandler(array (
  'prefix' => 'mod_',
  'module' => true,
));
$this->handlers['data/config/plugin.yml'] = new opPluginConfigHandler();
$this->handlers['config/gadget_config.yml'] = new sfSimpleYamlConfigHandler();
$this->handlers['config/gadget_layout_config.yml'] = new sfSimpleYamlConfigHandler();
$this->handlers['config/mobile_mail_domain.yml'] = new sfSimpleYamlConfigHandler();
$this->handlers['config/mobile_ip_address.yml'] = new sfSimpleYamlConfigHandler();
$this->handlers['config/sns_term.yml'] = new sfSimpleYamlConfigHandler();
$this->handlers['config/mail_template.yml'] = new sfSimpleYamlConfigHandler();
$this->handlers['config/confirmation.yml'] = new sfSimpleYamlConfigHandler();
$this->handlers['config/monitoring.yml'] = new sfSimpleYamlConfigHandler();
$this->handlers['config/mobile_preset_color.yml'] = new sfSimpleYamlConfigHandler();
$this->handlers['config/regions.yml'] = new sfSimpleYamlConfigHandler();
$this->handlers['config/activity_template.yml'] = new sfSimpleYamlConfigHandler();