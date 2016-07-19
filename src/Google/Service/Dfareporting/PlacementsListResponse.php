<?php
/*
 * Copyright 2016 Google Inc.
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

class Google_Service_Dfareporting_PlacementsListResponse extends Google_Collection
{
  protected $collection_key = 'placements';
  public $kind;
  public $nextPageToken;
  public $placements;

  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  public function setPlacements(array $placements)
  {
    foreach ($placements as $p) {
      if (!$p instanceof Google_Service_Dfareporting_Placement) {
        throw new InvalidArgumentException('First argument to setPlacements must be an array of Google_Service_Dfareporting_Placement');
      }
    }
    $this->placements = $placements;
  }
  public function getPlacements()
  {
    return $this->placements;
  }
}