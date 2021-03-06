<?php
declare(strict_types=1);

namespace hiapi\jsonApi;

use WoohooLabs\Yin\JsonApi\Schema\Document\AbstractCollectionDocument;
use WoohooLabs\Yin\JsonApi\Schema\JsonApiObject;
use WoohooLabs\Yin\JsonApi\Schema\Link\DocumentLinks;

/**
 * Allows easy creation of JSON:API collection documents class.
 * `attributionClass` can be provided or it will be found automatically
 * by class name in the same directory, see `findAttributionClass`.
 *
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
class AttributionBasedCollectionDocument extends AbstractCollectionDocument
{
    public function __construct(AttributionBasedResourceFinder $resourceFinder)
    {
        parent::__construct($resourceFinder->getResource(static::class));
    }

    public function getJsonApi(): ?JsonApiObject
    {
        return new JsonApiObject('1.1');
    }

    public function getMeta(): array
    {
        return [];
    }

    public function getLinks(): ?DocumentLinks
    {
        return null;
    }
}
