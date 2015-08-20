<?php

namespace Room11\Caching;

interface LastModifiedStrategy
{
    const CACHING_DISABLED = 'caching.disabled';
    const CACHING_REVALIDATE = 'caching.revalidate';
    const CACHING_TIME = 'caching.time';

    public function getHeaders($lastModified);
}
