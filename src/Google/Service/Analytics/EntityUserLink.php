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

class Google_Service_Analytics_EntityUserLink extends Google_Model
{
  public $entity;
  public $id;
  public $kind;
  public $permissions;
  public $selfLink;
  public $userRef;

  public function setEntity(Google_Service_Analytics_EntityUserLinkEntity $entity)
  {
    $this->entity = $entity;
  }
  public function getEntity()
  {
    return $this->entity;
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
  public function setPermissions(Google_Service_Analytics_EntityUserLinkPermissions $permissions)
  {
    $this->permissions = $permissions;
  }
  public function getPermissions()
  {
    return $this->permissions;
  }
  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink()
  {
    return $this->selfLink;
  }
  public function setUserRef(Google_Service_Analytics_UserRef $userRef)
  {
    $this->userRef = $userRef;
  }
  public function getUserRef()
  {
    return $this->userRef;
  }
}