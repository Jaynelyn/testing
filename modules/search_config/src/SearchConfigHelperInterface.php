<?php

namespace Drupal\search_config;

/**
 * Provides an interface for the search config service.
 */
interface SearchConfigHelperInterface {

  /**
   * Helper to get all node settings.
   *
   * @return array
   *   An array of settings.
   */
  public function getNodeSettings(): array;

  /**
   * Helper to get roles by permission.
   *
   * @return array
   *   An array of role ids.
   */
  public function getRolesByPermission($permission, array $user_roles): array;

  /**
   * Helper to get content types.
   */
  public function getContentTypes();

  /**
   * Helper to override strings.
   */
  public function stringOverrides($key = NULL);

  /**
   * Helper to get access.
   */
  public function getAccess($remove, $grant);

}
