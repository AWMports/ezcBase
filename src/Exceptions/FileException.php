<?php
/**
 * File containing the \AWMports\ezcBase\Exceptions\FileException class
 *
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 * 
 *   http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 *
 * @package Base
 * @version //autogen//
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */

/**
 * \AWMports\ezcBase\Exceptions\FileException is the exception from which all file related exceptions
 * inherit.
 *
 * @package Base
 * @version //autogen//
 */

namespace AWMports\ezcBase\Exceptions

abstract class FileException extends \AWMports\ezcBase\Exceptions\Exception
{
    const READ    = 1;
    const WRITE   = 2;
    const EXECUTE = 4;
    const CHANGE  = 8;
    const REMOVE  = 16;
}
?>