<?php

namespace MLocati\EFattura\AgenziaEntrate;

/**
 * Class representing DatiBeniServiziType
 *
 * Blocco relativo ai dati di Beni Servizi della Fattura Elettronica
 * XSD Type: DatiBeniServiziType
 */
class DatiBeniServiziType
{

    /**
     * @property string $descrizione
     */
    private $descrizione = null;

    /**
     * @property float $importo
     */
    private $importo = null;

    /**
     * @property \MLocati\EFattura\AgenziaEntrate\DatiIVAType $datiIVA
     */
    private $datiIVA = null;

    /**
     * @property string $natura
     */
    private $natura = null;

    /**
     * @property string $riferimentoNormativo
     */
    private $riferimentoNormativo = null;

    /**
     * Gets as descrizione
     *
     * @return string
     */
    public function getDescrizione()
    {
        return $this->descrizione;
    }

    /**
     * Sets a new descrizione
     *
     * @param string $descrizione
     * @return self
     */
    public function setDescrizione($descrizione)
    {
        $this->descrizione = $descrizione;
        return $this;
    }

    /**
     * Gets as importo
     *
     * @return float
     */
    public function getImporto()
    {
        return $this->importo;
    }

    /**
     * Sets a new importo
     *
     * @param float $importo
     * @return self
     */
    public function setImporto($importo)
    {
        $this->importo = $importo;
        return $this;
    }

    /**
     * Gets as datiIVA
     *
     * @return \MLocati\EFattura\AgenziaEntrate\DatiIVAType
     */
    public function getDatiIVA()
    {
        return $this->datiIVA;
    }

    /**
     * Sets a new datiIVA
     *
     * @param \MLocati\EFattura\AgenziaEntrate\DatiIVAType $datiIVA
     * @return self
     */
    public function setDatiIVA(\MLocati\EFattura\AgenziaEntrate\DatiIVAType $datiIVA)
    {
        $this->datiIVA = $datiIVA;
        return $this;
    }

    /**
     * Gets as natura
     *
     * @return string
     */
    public function getNatura()
    {
        return $this->natura;
    }

    /**
     * Sets a new natura
     *
     * @param string $natura
     * @return self
     */
    public function setNatura($natura)
    {
        $this->natura = $natura;
        return $this;
    }

    /**
     * Gets as riferimentoNormativo
     *
     * @return string
     */
    public function getRiferimentoNormativo()
    {
        return $this->riferimentoNormativo;
    }

    /**
     * Sets a new riferimentoNormativo
     *
     * @param string $riferimentoNormativo
     * @return self
     */
    public function setRiferimentoNormativo($riferimentoNormativo)
    {
        $this->riferimentoNormativo = $riferimentoNormativo;
        return $this;
    }


}

