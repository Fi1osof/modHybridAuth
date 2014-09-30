<?php

$settings = array();

$setting_name = "modhybridauth.failure_page";
$setting = $modx->newObject('modSystemSetting');
$setting->fromArray(array(
 'key' => $setting_name,
 'value' => '',
 'xtype' => 'textfield',
 'namespace' => NAMESPACE_NAME,
 'area' => 'default',
),'',true,true);

$settings[] = $setting;


$setting_name = "modhybridauth.redirect_id";
$setting = $modx->newObject('modSystemSetting');
$setting->fromArray(array(
 'key' => $setting_name,
 'value' => '',
 'xtype' => 'textfield',
 'namespace' => NAMESPACE_NAME,
 'area' => 'default',
),'',true,true);

$settings[] = $setting;


$setting_name = "modhybridauth.registration_page_id";
$setting = $modx->newObject('modSystemSetting');
$setting->fromArray(array(
 'key' => $setting_name,
 'value' => '',
 'xtype' => 'textfield',
 'namespace' => NAMESPACE_NAME,
 'area' => 'default',
),'',true,true);

$settings[] = $setting;


unset($setting,$setting_name);
return $settings;