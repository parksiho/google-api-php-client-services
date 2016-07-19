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

class Google_Service_Fitness_ListSessionsResponse extends Google_Collection
{
  protected $collection_key = 'session';
  public $deletedSession;
  public $nextPageToken;
  public $session;

  public function setDeletedSession(array $deletedSession)
  {
    foreach ($deletedSession as $d) {
      if (!$d instanceof Google_Service_Fitness_Session) {
        throw new InvalidArgumentException('First argument to setDeletedSession must be an array of Google_Service_Fitness_Session');
      }
    }
    $this->deletedSession = $deletedSession;
  }
  public function getDeletedSession()
  {
    return $this->deletedSession;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  public function setSession(array $session)
  {
    foreach ($session as $s) {
      if (!$s instanceof Google_Service_Fitness_Session) {
        throw new InvalidArgumentException('First argument to setSession must be an array of Google_Service_Fitness_Session');
      }
    }
    $this->session = $session;
  }
  public function getSession()
  {
    return $this->session;
  }
}