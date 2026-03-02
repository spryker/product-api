<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductApi\Dependency\Facade;

use Generated\Shared\Transfer\ProductAbstractTransfer;

class ProductApiToProductBridge implements ProductApiToProductInterface
{
    /**
     * @var \Spryker\Zed\Product\Business\ProductFacadeInterface
     */
    protected $productFacade;

    /**
     * @param \Spryker\Zed\Product\Business\ProductFacadeInterface $productFacade
     */
    public function __construct($productFacade)
    {
        $this->productFacade = $productFacade;
    }

    /**
     * @param int $idProductAbstract
     *
     * @return \Generated\Shared\Transfer\ProductAbstractTransfer|null
     */
    public function findProductAbstractById($idProductAbstract): ?ProductAbstractTransfer
    {
        return $this->productFacade->findProductAbstractById($idProductAbstract);
    }

    public function addProduct(ProductAbstractTransfer $productAbstractTransfer, array $productConcreteCollection): int
    {
        return $this->productFacade->addProduct($productAbstractTransfer, $productConcreteCollection);
    }

    public function saveProduct(ProductAbstractTransfer $productAbstractTransfer, array $productConcreteCollection): int
    {
        return $this->productFacade->saveProduct($productAbstractTransfer, $productConcreteCollection);
    }
}
