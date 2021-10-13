<?php

/**
 * NOTE: THIS FILE IS AUTO-GENERATED, DO NOT EDIT
 *
 * Elastic Enterprise Search
 *
 * @link      https://github.com/elastic/enterprise-search-php
 * @copyright Copyright (c) Elasticsearch B.V (https://www.elastic.co)
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 *
 * Licensed to Elasticsearch B.V under one or more agreements
 * Elasticsearch B.V licenses this file to you under the Apache 2.0 License
 * See the LICENSE file in the project root for more information
 */

declare(strict_types=1);

namespace Elastic\EnterpriseSearch\AppSearch\Request;

use Elastic\EnterpriseSearch\AppSearch\Schema\CrawlRule;
use Elastic\EnterpriseSearch\Request\Request;

/**
 * Create a crawl rule
 *
 * @internal
 * @see https://www.elastic.co/guide/en/app-search/current/web-crawler-api-reference.html#web-crawler-apis-post-crawl-rules
 */
class CreateCrawlerCrawlRule extends Request
{
	/**
	 * @param string $engineName Name of the engine
	 * @param string $domainId Crawler Domain ID
	 * @param CrawlRule $crawl_rule
	 */
	public function __construct(string $engineName, string $domainId, CrawlRule $crawl_rule)
	{
		$this->method = 'POST';
		$engine_name = urlencode($engineName);
		$domain_id = urlencode($domainId);
		$this->path = "/api/as/v0/engines/$engine_name/crawler/domains/$domain_id/crawl_rules";
		$this->headers['Content-Type'] = 'application/json';
		$this->body = $crawl_rule;
	}
}
