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

class Google_Service_ShoppingContent_DatafeedStatus extends Google_Collection
{
  protected $collection_key = 'warnings';
  public $datafeedId;
  public $errors;
  public $itemsTotal;
  public $itemsValid;
  public $kind;
  public $lastUploadDate;
  public $processingStatus;
  public $warnings;

  public function setDatafeedId($datafeedId)
  {
    $this->datafeedId = $datafeedId;
  }
  public function getDatafeedId()
  {
    return $this->datafeedId;
  }
  public function setErrors(array $errors)
  {
    foreach ($errors as $e) {
      if (!$e instanceof Google_Service_ShoppingContent_DatafeedStatusError) {
        throw new InvalidArgumentException('First argument to setErrors must be an array of Google_Service_ShoppingContent_DatafeedStatusError');
      }
    }
    $this->errors = $errors;
  }
  public function getErrors()
  {
    return $this->errors;
  }
  public function setItemsTotal($itemsTotal)
  {
    $this->itemsTotal = $itemsTotal;
  }
  public function getItemsTotal()
  {
    return $this->itemsTotal;
  }
  public function setItemsValid($itemsValid)
  {
    $this->itemsValid = $itemsValid;
  }
  public function getItemsValid()
  {
    return $this->itemsValid;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLastUploadDate($lastUploadDate)
  {
    $this->lastUploadDate = $lastUploadDate;
  }
  public function getLastUploadDate()
  {
    return $this->lastUploadDate;
  }
  public function setProcessingStatus($processingStatus)
  {
    $this->processingStatus = $processingStatus;
  }
  public function getProcessingStatus()
  {
    return $this->processingStatus;
  }
  public function setWarnings(array $warnings)
  {
    foreach ($warnings as $w) {
      if (!$w instanceof Google_Service_ShoppingContent_DatafeedStatusError) {
        throw new InvalidArgumentException('First argument to setWarnings must be an array of Google_Service_ShoppingContent_DatafeedStatusError');
      }
    }
    $this->warnings = $warnings;
  }
  public function getWarnings()
  {
    return $this->warnings;
  }
}