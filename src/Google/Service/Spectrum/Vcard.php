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

class Google_Service_Spectrum_Vcard extends Google_Model
{
  public $adr;
  public $email;
  public $fn;
  public $org;
  public $tel;

  public function setAdr(Google_Service_Spectrum_VcardAddress $adr)
  {
    $this->adr = $adr;
  }
  public function getAdr()
  {
    return $this->adr;
  }
  public function setEmail(Google_Service_Spectrum_VcardTypedText $email)
  {
    $this->email = $email;
  }
  public function getEmail()
  {
    return $this->email;
  }
  public function setFn($fn)
  {
    $this->fn = $fn;
  }
  public function getFn()
  {
    return $this->fn;
  }
  public function setOrg(Google_Service_Spectrum_VcardTypedText $org)
  {
    $this->org = $org;
  }
  public function getOrg()
  {
    return $this->org;
  }
  public function setTel(Google_Service_Spectrum_VcardTelephone $tel)
  {
    $this->tel = $tel;
  }
  public function getTel()
  {
    return $this->tel;
  }
}