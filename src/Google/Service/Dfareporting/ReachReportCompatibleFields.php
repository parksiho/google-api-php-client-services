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

class Google_Service_Dfareporting_ReachReportCompatibleFields extends Google_Collection
{
  protected $collection_key = 'reachByFrequencyMetrics';
  public $dimensionFilters;
  public $dimensions;
  public $kind;
  public $metrics;
  public $pivotedActivityMetrics;
  public $reachByFrequencyMetrics;

  public function setDimensionFilters(array $dimensionFilters)
  {
    foreach ($dimensionFilters as $d) {
      if (!$d instanceof Google_Service_Dfareporting_Dimension) {
        throw new InvalidArgumentException('First argument to setDimensionFilters must be an array of Google_Service_Dfareporting_Dimension');
      }
    }
    $this->dimensionFilters = $dimensionFilters;
  }
  public function getDimensionFilters()
  {
    return $this->dimensionFilters;
  }
  public function setDimensions(array $dimensions)
  {
    foreach ($dimensions as $d) {
      if (!$d instanceof Google_Service_Dfareporting_Dimension) {
        throw new InvalidArgumentException('First argument to setDimensions must be an array of Google_Service_Dfareporting_Dimension');
      }
    }
    $this->dimensions = $dimensions;
  }
  public function getDimensions()
  {
    return $this->dimensions;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setMetrics(array $metrics)
  {
    foreach ($metrics as $m) {
      if (!$m instanceof Google_Service_Dfareporting_Metric) {
        throw new InvalidArgumentException('First argument to setMetrics must be an array of Google_Service_Dfareporting_Metric');
      }
    }
    $this->metrics = $metrics;
  }
  public function getMetrics()
  {
    return $this->metrics;
  }
  public function setPivotedActivityMetrics(array $pivotedActivityMetrics)
  {
    foreach ($pivotedActivityMetrics as $p) {
      if (!$p instanceof Google_Service_Dfareporting_Metric) {
        throw new InvalidArgumentException('First argument to setPivotedActivityMetrics must be an array of Google_Service_Dfareporting_Metric');
      }
    }
    $this->pivotedActivityMetrics = $pivotedActivityMetrics;
  }
  public function getPivotedActivityMetrics()
  {
    return $this->pivotedActivityMetrics;
  }
  public function setReachByFrequencyMetrics(array $reachByFrequencyMetrics)
  {
    foreach ($reachByFrequencyMetrics as $r) {
      if (!$r instanceof Google_Service_Dfareporting_Metric) {
        throw new InvalidArgumentException('First argument to setReachByFrequencyMetrics must be an array of Google_Service_Dfareporting_Metric');
      }
    }
    $this->reachByFrequencyMetrics = $reachByFrequencyMetrics;
  }
  public function getReachByFrequencyMetrics()
  {
    return $this->reachByFrequencyMetrics;
  }
}