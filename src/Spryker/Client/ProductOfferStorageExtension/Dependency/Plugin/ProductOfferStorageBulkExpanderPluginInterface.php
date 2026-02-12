<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Spryker Marketplace License Agreement. See LICENSE file.
 */

namespace Spryker\Client\ProductOfferStorageExtension\Dependency\Plugin;

interface ProductOfferStorageBulkExpanderPluginInterface
{
    /**
     * Specification:
     * - Returns array of expanded ProductOfferStorage transfer objects.
     *
     * @api
     *
     * @param array<\Generated\Shared\Transfer\ProductOfferStorageTransfer> $productOfferStorageTransfers
     *
     * @return array<\Generated\Shared\Transfer\ProductOfferStorageTransfer>
     */
    public function expand(array $productOfferStorageTransfers): array;
}
