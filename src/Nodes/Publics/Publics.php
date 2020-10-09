<?php

namespace Shopee\Nodes\Publics;

use Shopee\Nodes\NodeAbstract;
use Shopee\RequestParametersInterface;
use Shopee\ResponseData;

class Publics extends NodeAbstract
{
    /**
     * Use this call to get basic info of shops which have authorized to the partner.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function GetShopsByPartner($parameters = []): ResponseData
    {
        return $this->post('/api/v1/shop/get_partner_shop', $parameters);
    }

    /**
     * Use this api to get categories list filtered by country and cross border without using shopID.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function GetCategoriesByCountry($parameters = []): ResponseData
    {
        return $this->post('/api/v1/item/categories/get_by_country', $parameters);
    }

    /**
     * The supported payment method list by country
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function GetPaymentList($parameters = []): ResponseData
    {
        return $this->post('/api/v1/payment/list', $parameters);
    }

}
