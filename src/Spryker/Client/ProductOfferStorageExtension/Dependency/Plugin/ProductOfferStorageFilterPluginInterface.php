<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Spryker Marketplace License Agreement. See LICENSE file.
 */

namespace Spryker\Client\ProductOfferStorageExtension\Dependency\Plugin;

use Generated\Shared\Transfer\ProductOfferStorageCollectionTransfer;
use Generated\Shared\Transfer\ProductOfferStorageCriteriaTransfer;

/**
 * Provides ability to filter product offer storage collection by provided criteria.
 * This plugin stack gets executed after a list of `ProductOfferStorageTransfer` is read from the storage.
 */
interface ProductOfferStorageFilterPluginInterface
{
    /**
     * Specification:
     * - Filters out the product offer storage collection.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ProductOfferStorageCollectionTransfer $productOfferStorageCollectionTransfer
     * @param \Generated\Shared\Transfer\ProductOfferStorageCriteriaTransfer $productOfferStorageCriteriaTransfer
     *
     * @return \Generated\Shared\Transfer\ProductOfferStorageCollectionTransfer
     */
    public function filter(
        ProductOfferStorageCollectionTransfer $productOfferStorageCollectionTransfer,
        ProductOfferStorageCriteriaTransfer $productOfferStorageCriteriaTransfer
    ): ProductOfferStorageCollectionTransfer;
}
