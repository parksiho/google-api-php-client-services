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

class Google_Service_Gmail_Thread extends Google_Collection
{
  protected $collection_key = 'messages';
  public $historyId;
  public $id;
  public $messages;
  public $snippet;

  public function setHistoryId($historyId)
  {
    $this->historyId = $historyId;
  }
  public function getHistoryId()
  {
    return $this->historyId;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setMessages(array $messages)
  {
    foreach ($messages as $m) {
      if (!$m instanceof Google_Service_Gmail_Message) {
        throw new InvalidArgumentException('First argument to setMessages must be an array of Google_Service_Gmail_Message');
      }
    }
    $this->messages = $messages;
  }
  public function getMessages()
  {
    return $this->messages;
  }
  public function setSnippet($snippet)
  {
    $this->snippet = $snippet;
  }
  public function getSnippet()
  {
    return $this->snippet;
  }
}