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

class Google_Service_AdExchangeBuyer_AddOrderNotesResponse extends Google_Collection
{
  protected $collection_key = 'notes';
  public $notes;

  public function setNotes(array $notes)
  {
    foreach ($notes as $n) {
      if (!$n instanceof Google_Service_AdExchangeBuyer_MarketplaceNote) {
        throw new InvalidArgumentException('First argument to setNotes must be an array of Google_Service_AdExchangeBuyer_MarketplaceNote');
      }
    }
    $this->notes = $notes;
  }
  public function getNotes()
  {
    return $this->notes;
  }
}