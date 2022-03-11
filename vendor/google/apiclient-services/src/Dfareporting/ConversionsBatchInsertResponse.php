<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\Dfareporting;

class ConversionsBatchInsertResponse extends \Google\Collection
{
  protected $collection_key = 'status';
  public $hasFailures;
  public $kind;
  protected $statusType = ConversionStatus::class;
  protected $statusDataType = 'array';

  public function setHasFailures($hasFailures)
  {
    $this->hasFailures = $hasFailures;
  }
  public function getHasFailures()
  {
    return $this->hasFailures;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  /**
   * @param ConversionStatus[]
   */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /**
   * @return ConversionStatus[]
   */
  public function getStatus()
  {
    return $this->status;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ConversionsBatchInsertResponse::class, 'Google_Service_Dfareporting_ConversionsBatchInsertResponse');
