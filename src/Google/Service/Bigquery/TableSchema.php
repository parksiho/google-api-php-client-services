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

class Google_Service_Bigquery_TableSchema extends Google_Collection
{
  protected $collection_key = 'fields';
  public $fields;

  public function setFields(array $fields)
  {
    foreach ($fields as $f) {
      if (!$f instanceof Google_Service_Bigquery_TableFieldSchema) {
        throw new InvalidArgumentException('First argument to setFields must be an array of Google_Service_Bigquery_TableFieldSchema');
      }
    }
    $this->fields = $fields;
  }
  public function getFields()
  {
    return $this->fields;
  }
}