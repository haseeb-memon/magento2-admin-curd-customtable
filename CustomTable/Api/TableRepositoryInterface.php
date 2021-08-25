<?php
/**
 * Copyright © Haseeb Memon All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Company\CustomTable\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface TableRepositoryInterface
{

    /**
     * Save Table
     * @param \Company\CustomTable\Api\Data\TableInterface $table
     * @return \Company\CustomTable\Api\Data\TableInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \Company\CustomTable\Api\Data\TableInterface $table
    );

    /**
     * Retrieve Table
     * @param string $tableId
     * @return \Company\CustomTable\Api\Data\TableInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function get($tableId);

    /**
     * Retrieve Table matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Company\CustomTable\Api\Data\TableSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete Table
     * @param \Company\CustomTable\Api\Data\TableInterface $table
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        \Company\CustomTable\Api\Data\TableInterface $table
    );

    /**
     * Delete Table by ID
     * @param string $tableId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($tableId);
}

