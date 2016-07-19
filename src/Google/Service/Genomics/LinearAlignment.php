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

class Google_Service_Genomics_LinearAlignment extends Google_Collection
{
  protected $collection_key = 'cigar';
  public $cigar;
  public $mappingQuality;
  public $position;

  public function setCigar(array $cigar)
  {
    foreach ($cigar as $c) {
      if (!$c instanceof Google_Service_Genomics_CigarUnit) {
        throw new InvalidArgumentException('First argument to setCigar must be an array of Google_Service_Genomics_CigarUnit');
      }
    }
    $this->cigar = $cigar;
  }
  public function getCigar()
  {
    return $this->cigar;
  }
  public function setMappingQuality($mappingQuality)
  {
    $this->mappingQuality = $mappingQuality;
  }
  public function getMappingQuality()
  {
    return $this->mappingQuality;
  }
  public function setPosition(Google_Service_Genomics_Position $position)
  {
    $this->position = $position;
  }
  public function getPosition()
  {
    return $this->position;
  }
}