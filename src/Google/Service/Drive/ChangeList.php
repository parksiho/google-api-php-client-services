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

class Google_Service_Drive_ChangeList extends Google_Collection
{
  protected $collection_key = 'changes';
  public $changes;
  public $kind;
  public $newStartPageToken;
  public $nextPageToken;

  public function setChanges(array $changes)
  {
    foreach ($changes as $c) {
      if (!$c instanceof Google_Service_Drive_Change) {
        throw new InvalidArgumentException('First argument to setChanges must be an array of Google_Service_Drive_Change');
      }
    }
    $this->changes = $changes;
  }
  public function getChanges()
  {
    return $this->changes;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setNewStartPageToken($newStartPageToken)
  {
    $this->newStartPageToken = $newStartPageToken;
  }
  public function getNewStartPageToken()
  {
    return $this->newStartPageToken;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}