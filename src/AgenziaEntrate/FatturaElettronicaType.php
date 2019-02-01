<?php

namespace MLocati\EFattura\AgenziaEntrate;

/**
 * Class representing FatturaElettronicaType
 *
 * 
 * XSD Type: FatturaElettronicaType
 */
class FatturaElettronicaType
{

    /**
     * @property string $versione
     */
    private $versione = null;

    /**
     * @property \MLocati\EFattura\AgenziaEntrate\FatturaElettronicaHeaderType $fatturaElettronicaHeader
     */
    private $fatturaElettronicaHeader = null;

    /**
     * @property \MLocati\EFattura\AgenziaEntrate\FatturaElettronicaBodyType[] $fatturaElettronicaBody
     */
    private $fatturaElettronicaBody = [
        
    ];

    /**
     * @property \MLocati\EFattura\DSig\Signature $signature
     */
    private $signature = null;

    /**
     * Gets as versione
     *
     * @return string
     */
    public function getVersione()
    {
        return $this->versione;
    }

    /**
     * Sets a new versione
     *
     * @param string $versione
     * @return self
     */
    public function setVersione($versione)
    {
        $this->versione = $versione;
        return $this;
    }

    /**
     * Gets as fatturaElettronicaHeader
     *
     * @return \MLocati\EFattura\AgenziaEntrate\FatturaElettronicaHeaderType
     */
    public function getFatturaElettronicaHeader()
    {
        return $this->fatturaElettronicaHeader;
    }

    /**
     * Sets a new fatturaElettronicaHeader
     *
     * @param \MLocati\EFattura\AgenziaEntrate\FatturaElettronicaHeaderType $fatturaElettronicaHeader
     * @return self
     */
    public function setFatturaElettronicaHeader(\MLocati\EFattura\AgenziaEntrate\FatturaElettronicaHeaderType $fatturaElettronicaHeader)
    {
        $this->fatturaElettronicaHeader = $fatturaElettronicaHeader;
        return $this;
    }

    /**
     * Adds as fatturaElettronicaBody
     *
     * @return self
     * @param \MLocati\EFattura\AgenziaEntrate\FatturaElettronicaBodyType $fatturaElettronicaBody
     */
    public function addToFatturaElettronicaBody(\MLocati\EFattura\AgenziaEntrate\FatturaElettronicaBodyType $fatturaElettronicaBody)
    {
        $this->fatturaElettronicaBody[] = $fatturaElettronicaBody;
        return $this;
    }

    /**
     * isset fatturaElettronicaBody
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFatturaElettronicaBody($index)
    {
        return isset($this->fatturaElettronicaBody[$index]);
    }

    /**
     * unset fatturaElettronicaBody
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFatturaElettronicaBody($index)
    {
        unset($this->fatturaElettronicaBody[$index]);
    }

    /**
     * Gets as fatturaElettronicaBody
     *
     * @return \MLocati\EFattura\AgenziaEntrate\FatturaElettronicaBodyType[]
     */
    public function getFatturaElettronicaBody()
    {
        return $this->fatturaElettronicaBody;
    }

    /**
     * Sets a new fatturaElettronicaBody
     *
     * @param \MLocati\EFattura\AgenziaEntrate\FatturaElettronicaBodyType[] $fatturaElettronicaBody
     * @return self
     */
    public function setFatturaElettronicaBody(array $fatturaElettronicaBody)
    {
        $this->fatturaElettronicaBody = $fatturaElettronicaBody;
        return $this;
    }

    /**
     * Gets as signature
     *
     * @return \MLocati\EFattura\DSig\Signature
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * @param \MLocati\EFattura\DSig\Signature $signature
     * @return self
     */
    public function setSignature(\MLocati\EFattura\DSig\Signature $signature)
    {
        $this->signature = $signature;
        return $this;
    }


}

