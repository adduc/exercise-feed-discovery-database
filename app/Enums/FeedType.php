<?php declare(strict_types=1);

namespace App\Enums;

enum FeedType: string
{
    case APPLICATION_ATOM_XML = 'application/atom+xml';
    case APPLICATION_FEED_JSON = 'application/feed+json';
    case APPLICATION_RDF_XML = 'application/rdf+xml';
    case APPLICATION_RSS_XML = 'application/rss+xml';
    case APPLICATION_XML = 'application/xml';
    case TEXT_XML = 'text/xml';
}