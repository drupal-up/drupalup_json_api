<?php

namespace Drupal\drupalup_json_api\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Implementing our example JSON api.
 */
class JsonApiController {

  /**
   * Callback for the API.
   */
  public function renderApi() {

    return new JsonResponse(
      'data' => $this->getResults(),
      'method' => 'GET',
    );
  }

  /**
   * A helper function returning results.
   */
  public function getResults() {
    return [
      [
        "name" => "The Shawshank Redemption",
        "year" => 1994,
        "duration" => 142,
      ],
      [
        "name" => "The Godfather",
        "year" => 1972,
        "duration" => '',
      ],
      [
        "name" => "The Dark Knight",
        "year" => 2008,
        "duration" => 175,
      ],
      [
        "name" => "The Godfather: Part II",
        "year" => 1974,
        "duration" => '',
      ],
      [
        "name" => "Pulp Fiction",
        "year" => 1994,
        "duration" => '',
      ],
      [
        "name" => "The Lord of the Rings: The Return of the King",
        "year" => 2003,
        "duration" => '',
      ],
    ];
  }

}
