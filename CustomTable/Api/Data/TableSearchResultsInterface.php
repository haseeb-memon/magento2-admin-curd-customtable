<?php
/**
 * Copyright © Haseeb Memon All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Company\CustomTable\Api\Data;

interface TableSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get Table list.
     * @return \Company\CustomTable\Api\Data\TableInterface[]
     */
    public function getItems();

    /**
     * Set title list.
     * @param \Company\CustomTable\Api\Data\TableInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}

