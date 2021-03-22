<?php
/**
 * Elasticsearch PHP client
 *
 * @link      https://github.com/elastic/elasticsearch-php/
 * @copyright Copyright (c) Elasticsearch B.V (https://www.elastic.co)
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @license   https://www.gnu.org/licenses/lgpl-2.1.html GNU Lesser General Public License, Version 2.1 
 * 
 * Licensed to Elasticsearch B.V under one or more agreements.
 * Elasticsearch B.V licenses this file to you under the Apache 2.0 License or
 * the GNU Lesser General Public License, Version 2.1, at your option.
 * See the LICENSE file in the project root for more information.
 */
declare(strict_types = 1);

namespace Elasticsearch\Endpoints\Security;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class ClearCachedPrivileges
 * Elasticsearch API name security.clear_cached_privileges
 *
 * NOTE: this file is autogenerated using util/GenerateEndpoints.php
 * and Elasticsearch 8.0.0-SNAPSHOT (b3d5d32209f3ca5dfd5fb47ded6b9b55e034df45)
 */
class ClearCachedPrivileges extends AbstractEndpoint
{
    protected $application;

    public function getURI(): string
    {
        $application = $this->application ?? null;

        if (isset($application)) {
            return "/_security/privilege/$application/_clear_cache";
        }
        throw new RuntimeException('Missing parameter for the endpoint security.clear_cached_privileges');
    }

    public function getParamWhitelist(): array
    {
        return [
            
        ];
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function setApplication($application): ClearCachedPrivileges
    {
        if (isset($application) !== true) {
            return $this;
        }
        if (is_array($application) === true) {
            $application = implode(",", $application);
        }
        $this->application = $application;

        return $this;
    }
}