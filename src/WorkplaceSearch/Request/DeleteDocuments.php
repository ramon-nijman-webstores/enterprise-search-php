<?php

/**
 * Elastic Enterprise Search
 *
 * @link      https://github.com/elastic/enterprise-search-php
 * @copyright Copyright (c) Elasticsearch B.V (https://www.elastic.co)
 * @license   https://opensource.org/licenses/MIT MIT License
 *
 * Licensed to Elasticsearch B.V under one or more agreements.
 * Elasticsearch B.V licenses this file to you under the MIT License.
 * See the LICENSE file in the project root for more information.
 */

declare(strict_types=1);

namespace Elastic\EnterpriseSearch\WorkplaceSearch\Request;

use Elastic\EnterpriseSearch\Request\Request;

/**
 * Deletes a list of documents from a custom content source
 *
 * @see https://www.elastic.co/guide/en/workplace-search/current/workplace-search-custom-sources-api.html#delete-by-id
 * @generated This file is generated, please do not edit
 */
class DeleteDocuments extends Request
{
	/**
	 * @param string $contentSourceId Unique ID for a Custom API source, provided upon creation of a Custom API Source
	 * @param string[] $document_ids
	 */
	public function __construct(string $contentSourceId, array $document_ids)
	{
		$this->method = 'POST';
		$content_source_id = urlencode($contentSourceId);
		$this->path = "/api/ws/v1/sources/$content_source_id/documents/bulk_destroy";
		$this->headers['Content-Type'] = 'application/json';
		$this->body = $document_ids;
	}
}
