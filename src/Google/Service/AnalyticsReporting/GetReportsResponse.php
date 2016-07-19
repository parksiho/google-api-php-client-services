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

class Google_Service_AnalyticsReporting_GetReportsResponse extends Google_Collection
{
  protected $collection_key = 'reports';
  public $reports;

  public function setReports(array $reports)
  {
    foreach ($reports as $r) {
      if (!$r instanceof Google_Service_AnalyticsReporting_Report) {
        throw new InvalidArgumentException('First argument to setReports must be an array of Google_Service_AnalyticsReporting_Report');
      }
    }
    $this->reports = $reports;
  }
  public function getReports()
  {
    return $this->reports;
  }
}