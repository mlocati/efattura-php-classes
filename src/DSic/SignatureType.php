<?php

namespace MLocati\EFattura\DSig;

/**
 * Class representing SignatureType
 *
 * 
 * XSD Type: SignatureType
 */
class SignatureType
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * @property \MLocati\EFattura\DSig\SignedInfo $signedInfo
     */
    private $signedInfo = null;

    /**
     * @property \MLocati\EFattura\DSig\SignatureValue $signatureValue
     */
    private $signatureValue = null;

    /**
     * @property \MLocati\EFattura\DSig\KeyInfo $keyInfo
     */
    private $keyInfo = null;

    /**
     * @property \MLocati\EFattura\DSig\ObjectXsd[] $object
     */
    private $object = [
        
    ];

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as signedInfo
     *
     * @return \MLocati\EFattura\DSig\SignedInfo
     */
    public function getSignedInfo()
    {
        return $this->signedInfo;
    }

    /**
     * Sets a new signedInfo
     *
     * @param \MLocati\EFattura\DSig\SignedInfo $signedInfo
     * @return self
     */
    public function setSignedInfo(\MLocati\EFattura\DSig\SignedInfo $signedInfo)
    {
        $this->signedInfo = $signedInfo;
        return $this;
    }

    /**
     * Gets as signatureValue
     *
     * @return \MLocati\EFattura\DSig\SignatureValue
     */
    public function getSignatureValue()
    {
        return $this->signatureValue;
    }

    /**
     * Sets a new signatureValue
     *
     * @param \MLocati\EFattura\DSig\SignatureValue $signatureValue
     * @return self
     */
    public function setSignatureValue(\MLocati\EFattura\DSig\SignatureValue $signatureValue)
    {
        $this->signatureValue = $signatureValue;
        return $this;
    }

    /**
     * Gets as keyInfo
     *
     * @return \MLocati\EFattura\DSig\KeyInfo
     */
    public function getKeyInfo()
    {
        return $this->keyInfo;
    }

    /**
     * Sets a new keyInfo
     *
     * @param \MLocati\EFattura\DSig\KeyInfo $keyInfo
     * @return self
     */
    public function setKeyInfo(\MLocati\EFattura\DSig\KeyInfo $keyInfo)
    {
        $this->keyInfo = $keyInfo;
        return $this;
    }

    /**
     * Adds as object
     *
     * @return self
     * @param \MLocati\EFattura\DSig\ObjectXsd $object
     */
    public function addToObject(\MLocati\EFattura\DSig\ObjectXsd $object)
    {
        $this->object[] = $object;
        return $this;
    }

    /**
     * isset object
     *
     * @param int|string $index
     * @return bool
     */
    public function issetObject($index)
    {
        return isset($this->object[$index]);
    }

    /**
     * unset object
     *
     * @param int|string $index
     * @return void
     */
    public function unsetObject($index)
    {
        unset($this->object[$index]);
    }

    /**
     * Gets as object
     *
     * @return \MLocati\EFattura\DSig\ObjectXsd[]
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * Sets a new object
     *
     * @param \MLocati\EFattura\DSig\ObjectXsd[] $object
     * @return self
     */
    public function setObject(array $object)
    {
        $this->object = $object;
        return $this;
    }


}

