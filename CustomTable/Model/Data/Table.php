<?php
/**
 * Copyright © Haseeb Memon All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Company\CustomTable\Model\Data;

use Company\CustomTable\Api\Data\TableInterface;

class Table extends \Magento\Framework\Api\AbstractExtensibleObject implements TableInterface
{

    /**
     * Get table_id
     * @return string|null
     */
    public function getTableId()
    {
        return $this->_get(self::TABLE_ID);
    }

    /**
     * Set table_id
     * @param string $tableId
     * @return \Company\CustomTable\Api\Data\TableInterface
     */
    public function setTableId($tableId)
    {
        return $this->setData(self::TABLE_ID, $tableId);
    }

    /**
     * Get title
     * @return string|null
     */
    public function getTitle()
    {
        return $this->_get(self::TITLE);
    }

    /**
     * Set title
     * @param string $title
     * @return \Company\CustomTable\Api\Data\TableInterface
     */
    public function setTitle($title)
    {
        return $this->setData(self::TITLE, $title);
    }

    /**
     * Retrieve existing extension attributes object or create a new one.
     * @return \Company\CustomTable\Api\Data\TableExtensionInterface|null
     */
    public function getExtensionAttributes()
    {
        return $this->_getExtensionAttributes();
    }

    /**
     * Set an extension attributes object.
     * @param \Company\CustomTable\Api\Data\TableExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \Company\CustomTable\Api\Data\TableExtensionInterface $extensionAttributes
    ) {
        return $this->_setExtensionAttributes($extensionAttributes);
    }

    /**
     * Get content
     * @return string|null
     */
    public function getContent()
    {
        return $this->_get(self::CONTENT);
    }

    /**
     * Set content
     * @param string $content
     * @return \Company\CustomTable\Api\Data\TableInterface
     */
    public function setContent($content)
    {
        return $this->setData(self::CONTENT, $content);
    }

    /**
     * Get created_at
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->_get(self::CREATED_AT);
    }

    /**
     * Set created_at
     * @param string $createdAt
     * @return \Company\CustomTable\Api\Data\TableInterface
     */
    public function setCreatedAt($createdAt)
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }

    /**
     * Get updated_at
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->_get(self::UPDATED_AT);
    }

    /**
     * Set updated_at
     * @param string $updatedAt
     * @return \Company\CustomTable\Api\Data\TableInterface
     */
    public function setUpdatedAt($updatedAt)
    {
        return $this->setData(self::UPDATED_AT, $updatedAt);
    }
}

