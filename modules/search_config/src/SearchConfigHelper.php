<?php

namespace Drupal\search_config;

use Drupal\Core\Config\ConfigFactory;
use Drupal\Core\Session\AccountProxyInterface;

/**
 * Provides a service for search config module.
 */
class SearchConfigHelper implements SearchConfigHelperInterface {

  /**
   * Returns the config.factory service.
   *
   * @var \Drupal\Core\Config\ConfigFactory
   */
  protected $config;

  /**
   * Returns the current_user service.
   *
   * @var \Drupal\Core\Session\AccountProxyInterface
   */
  protected $currentUser;

  /**
   * Constructs a SearchConfigHelper object.
   *
   * @param \Drupal\Core\Config\ConfigFactory $config
   *   Defines the configuration object factory.
   * @param \Drupal\Core\Session\AccountProxyInterface $current_user
   *   Defines an interface for a service which has the current account stored.
   */
  public function __construct(ConfigFactory $config, AccountProxyInterface $current_user) {
    $this->config = $config;
    $this->currentUser = $current_user;
  }

  /**
   * {@inheritdoc}
   */
  public function getNodeSettings(): array {
    $search_config_settings = $this->config->get('search_config.settings');

    return $search_config_settings->get('search_config');
  }

  /**
   * {@inheritdoc}
   */
  public function getRolesByPermission($permission, array $user_roles): array {
    $rids = [];

    foreach ($user_roles as $role) {
      if ($role->hasPermission($permission)) {
        $rids[] = $role->id();
      }
    }

    return $rids;
  }

  /**
   * {@inheritdoc}
   */
  public function getContentTypes() {
    return array_map('Drupal\Component\Utility\Html::escape', node_type_get_names());
  }

  /**
   * {@inheritdoc}
   */
  public function stringOverrides($key = NULL) {
    $overrides = $this->config->get('search_config.settings')
      ->get('search_config_string_overrides');

    if (isset($key)) {
      return !empty($overrides[$key]) ? $overrides[$key] : [];
    }

    return $overrides;
  }

  /**
   * {@inheritdoc}
   */
  public function getAccess($remove, $grant) {
    if ($remove) {
      return (bool) array_intersect_key($this->currentUser->getRoles(), array_filter($grant));
    }

    return TRUE;
  }

}
