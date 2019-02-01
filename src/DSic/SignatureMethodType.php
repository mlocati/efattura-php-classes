<?php

namespace MLocati\EFattura\DSig;

/**
 * Class representing SignatureMethodType
 *
 * 
 * XSD Type: SignatureMethodType
 */
class SignatureMethodType
{

    /**
     * @property string $algorithm
     */
    private $algorithm = null;

    /**
     * @property int $hMACOutputLength
     */
    private $hMACOutputLength = null;

    /**
     * Gets as algorithm
     *
     * @return string
     */
    public function getAlgorithm()
    {
        return $this->algorithm;
    }

    /**
     * Sets a new algorithm
     *
     * @param string $algorithm
     * @return self
     */
    public function setAlgorithm($algorithm)
    {
        $this->algorithm = $algorithm;
        return $this;
    }

    /**
     * Gets as hMACOutputLength
     *
     * @return int
     */
    public function getHMACOutputLength()
    {
        return $this->hMACOutputLength;
    }

    /**
     * Sets a new hMACOutputLength
     *
     * @param int $hMACOutputLength
     * @return self
     */
    public function setHMACOutputLength($hMACOutputLength)
    {
        $this->hMACOutputLength = $hMACOutputLength;
        return $this;
    }


}

