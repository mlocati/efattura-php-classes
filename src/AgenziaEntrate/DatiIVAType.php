<?php

namespace MLocati\EFattura\AgenziaEntrate;

/**
 * Class representing DatiIVAType
 *
 * 
 * XSD Type: DatiIVAType
 */
class DatiIVAType
{

    /**
     * @property float $imposta
     */
    private $imposta = null;

    /**
     * @property float $aliquota
     */
    private $aliquota = null;

    /**
     * Gets as imposta
     *
     * @return float
     */
    public function getImposta()
    {
        return $this->imposta;
    }

    /**
     * Sets a new imposta
     *
     * @param float $imposta
     * @return self
     */
    public function setImposta($imposta)
    {
        $this->imposta = $imposta;
        return $this;
    }

    /**
     * Gets as aliquota
     *
     * @return float
     */
    public function getAliquota()
    {
        return $this->aliquota;
    }

    /**
     * Sets a new aliquota
     *
     * @param float $aliquota
     * @return self
     */
    public function setAliquota($aliquota)
    {
        $this->aliquota = $aliquota;
        return $this;
    }


}

