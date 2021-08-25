<?php
/**
 * Copyright © Haseeb Memon All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Company\CustomTable\Api\Data;

interface TableInterface extends \Magento\Framework\Api\ExtensibleDataInterface
{

    const TITLE = 'title';
    const CREATED_AT = 'created_at';
    const TABLE_ID = 'table_id';
    const UPDATED_AT = 'updated_at';
    const CONTENT = 'content';

    /**
     * Get table_id
     * @return string|null
     */
    public function getTableId();

    /**
     * Set table_id
     * @param string $tableId
     * @return \Company\CustomTable\Api\Data\TableInterface
     */
    public function setTableId($tableId);

    /**
     * Get title
     * @return string|null
     */
    public function getTitle();

    /**
     * Set title
     * @param string $title
     * @return \Company\CustomTable\Api\Data\TableInterface
     */
    public function setTitle($title);

    /**
     * Retrieve existing extension attributes object or create a new one.
     * @return \Company\CustomTable\Api\Data\TableExtensionInterface|null
     */
    public function getExtensionAttributes();

    /**
     * Set an extension attributes object.
     * @param \Company\CustomTable\Api\Data\TableExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \Company\CustomTable\Api\Data\TableExtensionInterface $extensionAttributes
    );

    /**
     * Get content
     * @return string|null
     */
    public function getContent();

    /**
     * Set content
     * @param string $content
     * @return \Company\CustomTable\Api\Data\TableInterface
     */
    public function setContent($content);

    /**
     * Get created_at
     * @return string|null
     */
    public function getCreatedAt();

    /**
     * Set created_at
     * @param string $createdAt
     * @return \Company\CustomTable\Api\Data\TableInterface
     */
    public function setCreatedAt($createdAt);

    /**
     * Get updated_at
     * @return string|null
     */
    public function getUpdatedAt();

    /**
     * Set updated_at
     * @param string $updatedAt
     * @return \Company\CustomTable\Api\Data\TableInterface
     */
    public function setUpdatedAt($updatedAt);
}

