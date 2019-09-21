<?php

namespace Instagram\SDK\Requests\Http\Builders;

use Instagram\SDK\Http\RequestClient;
use Instagram\SDK\Requests\Http\Traits\RequestBuilderBodyMethodsTrait;

/**
 * Class AbstractPayloadRequestBuilder
 *
 * @package Instagram\SDK\Requests\Http\Builders
 */
abstract class AbstractPayloadRequestBuilder extends AbstractRequestBuilder
{
    protected $httpMethodType = RequestClient::METHOD_POST;

    use RequestBuilderBodyMethodsTrait;
}
