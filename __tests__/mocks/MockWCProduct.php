<?php
/*
 * Copyright (C) 2017-present, Facebook, Inc.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; version 2 of the License.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 */

namespace FacebookPixelPlugin\Tests\Mocks;

final class MockWCProduct {
  private $id = null;
  private $type = null;

  public function __construct($id, $type = null) {
    $this->id = $id;
    $this->type = $type;
  }

  public function get_id() {
    return $this->id;
  }

  public function get_sku() {
    return '';
  }

  public function is_type($type) {
    return $this->type === $type;
  }
}
