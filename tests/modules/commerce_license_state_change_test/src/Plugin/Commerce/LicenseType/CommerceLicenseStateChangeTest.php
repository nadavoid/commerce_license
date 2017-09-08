<?php

namespace Drupal\commerce_license_state_change_test\Plugin\Commerce\LicenseType;

use Drupal\commerce_license\Plugin\Commerce\LicenseType\LicenseTypeBase;
use Drupal\commerce_license\Entity\LicenseInterface;

/**
 * @CommerceLicenseType(
 *   id = "commerce_license_state_change_test",
 *   label = @Translation("State change test"),
 * )
 */
class CommerceLicenseStateChangeTest extends LicenseTypeBase {

  /**
   * {@inheritdoc}
   */
  public function buildLabel(LicenseInterface $license) {
    return 'test license';
  }

  /**
   * {@inheritdoc}
   */
  public function grantLicense(LicenseInterface $license) {
    $state = \Drupal::state();
    $state->set('commerce_license_state_change_test', 'grantLicense');
  }

  /**
   * {@inheritdoc}
   */
  public function revokeLicense(LicenseInterface $license) {
    $state = \Drupal::state();
    $state->set('commerce_license_state_change_test', 'revokeLicense');
  }

}
