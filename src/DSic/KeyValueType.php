<?php

namespace MLocati\EFattura\DSig;

/**
 * Class representing KeyValueType
 *
 * 
 * XSD Type: KeyValueType
 */
class KeyValueType
{

    /**
     * @property \MLocati\EFattura\DSig\DSAKeyValue $dSAKeyValue
     */
    private $dSAKeyValue = null;

    /**
     * @property \MLocati\EFattura\DSig\RSAKeyValue $rSAKeyValue
     */
    private $rSAKeyValue = null;

    /**
     * Gets as dSAKeyValue
     *
     * @return \MLocati\EFattura\DSig\DSAKeyValue
     */
    public function getDSAKeyValue()
    {
        return $this->dSAKeyValue;
    }

    /**
     * Sets a new dSAKeyValue
     *
     * @param \MLocati\EFattura\DSig\DSAKeyValue $dSAKeyValue
     * @return self
     */
    public function setDSAKeyValue(\MLocati\EFattura\DSig\DSAKeyValue $dSAKeyValue)
    {
        $this->dSAKeyValue = $dSAKeyValue;
        return $this;
    }

    /**
     * Gets as rSAKeyValue
     *
     * @return \MLocati\EFattura\DSig\RSAKeyValue
     */
    public function getRSAKeyValue()
    {
        return $this->rSAKeyValue;
    }

    /**
     * Sets a new rSAKeyValue
     *
     * @param \MLocati\EFattura\DSig\RSAKeyValue $rSAKeyValue
     * @return self
     */
    public function setRSAKeyValue(\MLocati\EFattura\DSig\RSAKeyValue $rSAKeyValue)
    {
        $this->rSAKeyValue = $rSAKeyValue;
        return $this;
    }


}

