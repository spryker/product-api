<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductApi\Communication\Plugin\Api;

use Generated\Shared\Transfer\ApiDataTransfer;
use Generated\Shared\Transfer\ApiRequestTransfer;
use RuntimeException;
use Spryker\Zed\Api\ApiConfig;
use Spryker\Zed\Api\Dependency\Plugin\ApiResourcePluginInterface;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;
use Spryker\Zed\ProductApi\ProductApiConfig;

/**
 * @method \Spryker\Zed\ProductApi\Business\ProductApiFacadeInterface getFacade()
 * @method \Spryker\Zed\Product\Communication\ProductCommunicationFactory getFactory()
 * @method \Spryker\Zed\ProductApi\ProductApiConfig getConfig()
 * @method \Spryker\Zed\ProductApi\Persistence\ProductApiQueryContainerInterface getQueryContainer()
 */
class ProductApiResourcePlugin extends AbstractPlugin implements ApiResourcePluginInterface
{
    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ApiDataTransfer $apiDataTransfer
     *
     * @return \Generated\Shared\Transfer\ApiItemTransfer
     */
    public function add(ApiDataTransfer $apiDataTransfer)
    {
        return $this->getFacade()->addProduct($apiDataTransfer);
    }

    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param int $id
     *
     * @return \Generated\Shared\Transfer\ApiItemTransfer
     */
    public function get($id)
    {
        return $this->getFacade()->getProduct($id);
    }

    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param int $id
     * @param \Generated\Shared\Transfer\ApiDataTransfer $apiDataTransfer
     *
     * @return \Generated\Shared\Transfer\ApiItemTransfer
     */
    public function update($id, ApiDataTransfer $apiDataTransfer)
    {
        return $this->getFacade()->updateProduct($id, $apiDataTransfer);
    }

    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param int $id
     *
     * @throws \RuntimeException
     *
     * @return \Generated\Shared\Transfer\ApiItemTransfer
     */
    public function remove($id)
    {
        throw new RuntimeException('Remove action not implemented on core level', ApiConfig::HTTP_CODE_NOT_FOUND);
    }

    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ApiRequestTransfer $apiRequestTransfer
     *
     * @return \Generated\Shared\Transfer\ApiCollectionTransfer
     */
    public function find(ApiRequestTransfer $apiRequestTransfer)
    {
        return $this->getFacade()->findProducts($apiRequestTransfer);
    }

    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @return string
     */
    public function getResourceName()
    {
        return ProductApiConfig::RESOURCE_PRODUCTS;
    }
}
