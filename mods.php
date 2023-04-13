<?php

require_once 'mods.civix.php';
use CRM_Mods_ExtensionUtil as E;

/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function mods_civicrm_config(&$config) {
  _mods_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function mods_civicrm_install() {
  _mods_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function mods_civicrm_enable() {
  _mods_civix_civicrm_enable();
}

/**
 * @param CRM_Core_Page $page
 */
function mods_civicrm_pageRun(&$page) {
  if (in_array($page->getVar('_name'), array(
    'CRM_Case_Page_Tab',
    'CRM_Case_Page_CaseDetails',
  ))) {
    $tplVars = $page->get_template_vars();
    $case_id = $tplVars['caseID'];
    CRM_Core_Resources::singleton()->addVars(E::SHORT_NAME, array('caseId' => $case_id));
    CRM_Core_Resources::singleton()->addScriptFile(E::LONG_NAME, 'js/case-page-activity-table.js');
  }
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_preProcess
 *

 // */

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_navigationMenu
 *
function mods_civicrm_navigationMenu(&$menu) {
  _mods_civix_insert_navigation_menu($menu, 'Mailings', array(
    'label' => E::ts('New subliminal message'),
    'name' => 'mailing_subliminal_message',
    'url' => 'civicrm/mailing/subliminal',
    'permission' => 'access CiviMail',
    'operator' => 'OR',
    'separator' => 0,
  ));
  _mods_civix_navigationMenu($menu);
} // */
