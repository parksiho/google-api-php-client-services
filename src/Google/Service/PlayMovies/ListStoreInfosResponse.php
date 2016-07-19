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

class Google_Service_PlayMovies_ListStoreInfosResponse extends Google_Collection
{
  protected $collection_key = 'storeInfos';
  public $nextPageToken;
  public $storeInfos;
  public $totalSize;

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  public function setStoreInfos(array $storeInfos)
  {
    foreach ($storeInfos as $s) {
      if (!$s instanceof Google_Service_PlayMovies_StoreInfo) {
        throw new InvalidArgumentException('First argument to setStoreInfos must be an array of Google_Service_PlayMovies_StoreInfo');
      }
    }
    $this->storeInfos = $storeInfos;
  }
  public function getStoreInfos()
  {
    return $this->storeInfos;
  }
  public function setTotalSize($totalSize)
  {
    $this->totalSize = $totalSize;
  }
  public function getTotalSize()
  {
    return $this->totalSize;
  }
}