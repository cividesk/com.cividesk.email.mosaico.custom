<?php
return array(
  'mosaico_custom_plugins' => array(
    'group_name' => 'Mosaico Preferences',
    'group' => 'mosaico',
    'name' => 'mosaico_custom_plugins',
    'quick_form_type' => 'Element',
    'type' => 'String',
    'html_type' => 'Text',
    'default' => CIVICRM_MOSAICO_CUSTOM_PLUGINS,
    'add' => '4.7',
    'title' => 'Mosaico Plugin List',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Plugins name are separated by space.',
    'help_text' => NULL,
  ),
  'mosaico_custom_toolbar' => array(
    'group_name' => 'Mosaico Preferences',
    'group' => 'mosaico',
    'name' => 'mosaico_custom_toolbar',
    'quick_form_type' => 'Element',
    'type' => 'String',
    'html_type' => 'Text',
    'default' => CIVICRM_MOSAICO_CUSTOM_TOOLBAR,
    'add' => '4.7',
    'title' => 'Mosaico Toolbar Settings',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Tool sets name are separated by space, use | symbol for grouping of tool set.',
    'help_text' => NULL,
  ),
);

