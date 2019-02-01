<?php

namespace MLocati\EFattura\AgenziaEntrate;

/**
 * Class representing RappresentanteFiscaleType
 *
 * Blocco relativo ai dati del Rappresentante Fiscale
 * XSD Type: RappresentanteFiscaleType
 */
class RappresentanteFiscaleType
{

    /**
     * @property \MLocati\EFattura\AgenziaEntrate\IdFiscaleType $idFiscaleIVA
     */
    private $idFiscaleIVA = null;

    /**
     * @property string $denominazione
     */
    private $denominazione = null;

    /**
     * @property string $nome
     */
    private $nome = null;

    /**
     * @property string $cognome
     */
    private $cognome = null;

    /**
     * Gets as idFiscaleIVA
     *
     * @return \MLocati\EFattura\AgenziaEntrate\IdFiscaleType
     */
    public function getIdFiscaleIVA()
    {
        return $this->idFiscaleIVA;
    }

    /**
     * Sets a new idFiscaleIVA
     *
     * @param \MLocati\EFattura\AgenziaEntrate\IdFiscaleType $idFiscaleIVA
     * @return self
     */
    public function setIdFiscaleIVA(\MLocati\EFattura\AgenziaEntrate\IdFiscaleType $idFiscaleIVA)
    {
        $this->idFiscaleIVA = $idFiscaleIVA;
        return $this;
    }

    /**
     * Gets as denominazione
     *
     * @return string
     */
    public function getDenominazione()
    {
        return $this->denominazione;
    }

    /**
     * Sets a new denominazione
     *
     * @param string $denominazione
     * @return self
     */
    public function setDenominazione($denominazione)
    {
        $this->denominazione = $denominazione;
        return $this;
    }

    /**
     * Gets as nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Sets a new nome
     *
     * @param string $nome
     * @return self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * Gets as cognome
     *
     * @return string
     */
    public function getCognome()
    {
        return $this->cognome;
    }

    /**
     * Sets a new cognome
     *
     * @param string $cognome
     * @return self
     */
    public function setCognome($cognome)
    {
        $this->cognome = $cognome;
        return $this;
    }


}

