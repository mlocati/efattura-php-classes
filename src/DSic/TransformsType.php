<?php

namespace MLocati\EFattura\DSig;

/**
 * Class representing TransformsType
 *
 * 
 * XSD Type: TransformsType
 */
class TransformsType
{

    /**
     * @property \MLocati\EFattura\DSig\Transform[] $transform
     */
    private $transform = [
        
    ];

    /**
     * Adds as transform
     *
     * @return self
     * @param \MLocati\EFattura\DSig\Transform $transform
     */
    public function addToTransform(\MLocati\EFattura\DSig\Transform $transform)
    {
        $this->transform[] = $transform;
        return $this;
    }

    /**
     * isset transform
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransform($index)
    {
        return isset($this->transform[$index]);
    }

    /**
     * unset transform
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransform($index)
    {
        unset($this->transform[$index]);
    }

    /**
     * Gets as transform
     *
     * @return \MLocati\EFattura\DSig\Transform[]
     */
    public function getTransform()
    {
        return $this->transform;
    }

    /**
     * Sets a new transform
     *
     * @param \MLocati\EFattura\DSig\Transform[] $transform
     * @return self
     */
    public function setTransform(array $transform)
    {
        $this->transform = $transform;
        return $this;
    }


}

