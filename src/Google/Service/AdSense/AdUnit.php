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

class Google_Service_AdSense_AdUnit extends Google_Model
{
  public $code;
  public $contentAdsSettings;
  public $customStyle;
  public $feedAdsSettings;
  public $id;
  public $kind;
  public $mobileContentAdsSettings;
  public $name;
  public $savedStyleId;
  public $status;

  public function setCode($code)
  {
    $this->code = $code;
  }
  public function getCode()
  {
    return $this->code;
  }
  public function setContentAdsSettings(Google_Service_AdSense_AdUnitContentAdsSettings $contentAdsSettings)
  {
    $this->contentAdsSettings = $contentAdsSettings;
  }
  public function getContentAdsSettings()
  {
    return $this->contentAdsSettings;
  }
  public function setCustomStyle(Google_Service_AdSense_AdStyle $customStyle)
  {
    $this->customStyle = $customStyle;
  }
  public function getCustomStyle()
  {
    return $this->customStyle;
  }
  public function setFeedAdsSettings(Google_Service_AdSense_AdUnitFeedAdsSettings $feedAdsSettings)
  {
    $this->feedAdsSettings = $feedAdsSettings;
  }
  public function getFeedAdsSettings()
  {
    return $this->feedAdsSettings;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setMobileContentAdsSettings(Google_Service_AdSense_AdUnitMobileContentAdsSettings $mobileContentAdsSettings)
  {
    $this->mobileContentAdsSettings = $mobileContentAdsSettings;
  }
  public function getMobileContentAdsSettings()
  {
    return $this->mobileContentAdsSettings;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setSavedStyleId($savedStyleId)
  {
    $this->savedStyleId = $savedStyleId;
  }
  public function getSavedStyleId()
  {
    return $this->savedStyleId;
  }
  public function setStatus($status)
  {
    $this->status = $status;
  }
  public function getStatus()
  {
    return $this->status;
  }
}