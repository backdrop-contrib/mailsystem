<?php

/**
 * @file
 * Hooks provided by the MailSystem module.
 */

/**
 * Provide mail system definitions.
 *
 * Supported keys:
 * - label: The human readable label, shown in the UI.
 * - description: The human readable description, shown in the UI.
 *
 * @return array
 *   Array of mail system definitions with label, description and indexed
 *   by the class name.
 */
function hook_mailsystem_info() {
  return array(
    'default' => array(
      'label' => 'Default',
      'description' => t('The default Backdrop mail backend using PHP\'s mail function.'),
      'class' => 'DefaultMailSystem',
    ),
    'testing' => array(
      'label' => t('Testing'),
      'description' => t('A mail sending implementation that captures sent messages to a variable.'),
      'class' => 'TestingMailSystem',
    ),
  );
}
