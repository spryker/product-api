<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductApi\Dependency\Facade;

use Generated\Shared\Transfer\ProductAbstractTransfer;

interface ProductApiToProductInterface
{
    /**
     * @param int $idProductAbstract
     *
     * @return \Generated\Shared\Transfer\ProductAbstractTransfer|null
     */
    public function findProductAbstractById($idProductAbstract): ?ProductAbstractTransfer;

    public function addProduct(ProductAbstractTransfer $productAbstractTransfer, array $productConcreteCollection): int;

    public function saveProduct(ProductAbstractTransfer $productAbstractTransfer, array $productConcreteCollection): int;
}
