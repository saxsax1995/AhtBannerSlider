<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 17/07/2018
 * Time: 5:01 CH
 */

namespace Aht\BannerSlider\Api\Data;

interface BannerInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const ID                    = 'id';
    const NAME                  = 'name';
    const CREATED_AT            = 'created_at';
    const UPDATED_AT            = 'updated_at';
    /**#@-*/


    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Get Name
     *
     * @return string|null
     */
    public function getName();

    /**
     * Get Created At
     *
     * @return string|null
     */
    public function getCreatedAt();

    /**
     * Get Updated At
     *
     * @return string|null
     */
    public function getUpdatedAt();


    /**
     * Set ID
     *
     * @param int $id
     * @return $this
     */
    public function setId($id);

    /**
     * Set Name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name);

    /**
     * Set Created At
     *
     * @param int $createdAt
     * @return $this
     */
    public function setCreatedAt($createdAt);

    /**
     * Set Updated At
     *
     * @param int $updatedAt
     * @return $this
     */
    public function setUpdatedAt($updatedAt);
}