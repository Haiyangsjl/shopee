<?php
namespace Shopee\Nodes\Authorization;

use GuzzleHttp\Psr7\Uri;
use Shopee\Nodes\NodeAbstract;
use Shopee\RequestParametersInterface;
use Shopee\ResponseData;

/**
 * OpenAPI 2.0 Authorization & Authentication
 * Class Authorization
 * @package Shopee\Nodes\Authorization
 */
class Authorization extends NodeAbstract
{

    /**
     * generate Authorization link
     *
     * @param string
     * @return string
     */
    public function getAuthorizationUrl($redirect): string
    {
        $path = '/api/v2/shop/auth_partner';
        $link = $this->client->generateAuthorizationUrl($path, $redirect);
        return $link;
    }

    /**
     * Get Access_token
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function getAccessToken($code): ResponseData
    {
        $path = '/api/v2/auth/token/get';
        return $this->client->getAccessToken($path, $code);
    }

    /**
     * Refresh Access_token
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function refreshToken($refresh_token): ResponseData
    {
        $path = '/api/v2/auth/access_token/get';
        return $this->client->refreshToken($path, $refresh_token);
    }
}