<?php

namespace Drupal\commerce_license;

use Drupal\commerce\CommerceContentEntityStorage;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Language\LanguageInterface;
use Drupal\commerce_license\Entity\LicenseInterface;

/**
 * Defines the storage handler class for License entities.
 *
 * This extends the base storage class, adding required special handling for
 * License entities.
 *
 * @ingroup commerce_license
 */
class LicenseStorage extends CommerceContentEntityStorage implements LicenseStorageInterface {

}
