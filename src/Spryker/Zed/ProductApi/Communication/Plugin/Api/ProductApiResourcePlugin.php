<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductApi\Communication\Plugin\Api;

use Generated\Shared\Transfer\ApiDataTransfer;
use Generated\Shared\Transfer\ApiFilterTransfer;
use Generated\Shared\Transfer\ApiRequestTransfer;
use Spryker\Zed\Api\Dependency\Plugin\ApiResourcePluginInterface;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;
use Spryker\Zed\ProductApi\ProductApiConfig;

/**
 * @method \Spryker\Zed\ProductApi\Business\ProductApiFacade getFacade()
 * @method \Spryker\Zed\Product\Communication\ProductCommunicationFactory getFactory()
 */
class ProductApiResourcePlugin extends AbstractPlugin implements ApiResourcePluginInterface
{

    /**
     * @param \Generated\Shared\Transfer\ApiDataTransfer $apiDataTransfer
     *
     * @return \Generated\Shared\Transfer\ApiItemTransfer
     */
    public function add(ApiDataTransfer $apiDataTransfer)
    {
        return $this->getFacade()->addProduct($apiDataTransfer);
    }

    /**
     * @param int $idProductAbstract
     * @param \Generated\Shared\Transfer\ApiFilterTransfer $apiFilterTransfer
     *
     * @return \Generated\Shared\Transfer\ApiItemTransfer
     */
    public function get($idProductAbstract, ApiFilterTransfer $apiFilterTransfer)
    {
        return $this->getFacade()->getProduct($idProductAbstract, $apiFilterTransfer);
    }

    /**
     * @param int $idProductAbstract
     * @param \Generated\Shared\Transfer\ApiDataTransfer $apiDataTransfer
     *
     * @return \Generated\Shared\Transfer\ApiItemTransfer
     */
    public function update($idProductAbstract, ApiDataTransfer $apiDataTransfer)
    {
        return $this->getFacade()->updateProduct($idProductAbstract, $apiDataTransfer);
    }

    /**
     * @param int $idProductAbstract
     *
     * @return \Generated\Shared\Transfer\ApiItemTransfer
     */
    public function remove($idProductAbstract)
    {
        return $this->getFacade()->removeProduct($idProductAbstract);
    }

    /**
     * @param \Generated\Shared\Transfer\ApiRequestTransfer $apiRequestTransfer
     *
     * @return \Generated\Shared\Transfer\ApiCollectionTransfer
     */
    public function find(ApiRequestTransfer $apiRequestTransfer)
    {
        return $this->getFacade()->findProducts($apiRequestTransfer);
    }

    /**
     * @api
     *
     * @return string
     */
    public function getResourceName()
    {
        return ProductApiConfig::RESOURCE_PRODUCTS;
    }

}
