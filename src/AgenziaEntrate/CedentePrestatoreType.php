<?php

namespace MLocati\EFattura\AgenziaEntrate;

/**
 * Class representing CedentePrestatoreType
 *
 * Blocco relativo ai dati del Cedente / Prestatore
 * XSD Type: CedentePrestatoreType
 */
class CedentePrestatoreType
{

    /**
     * @property \MLocati\EFattura\AgenziaEntrate\IdFiscaleType $idFiscaleIVA
     */
    private $idFiscaleIVA = null;

    /**
     * @property string $codiceFiscale
     */
    private $codiceFiscale = null;

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
     * @property \MLocati\EFattura\AgenziaEntrate\IndirizzoType $sede
     */
    private $sede = null;

    /**
     * @property \MLocati\EFattura\AgenziaEntrate\IndirizzoType $stabileOrganizzazione
     */
    private $stabileOrganizzazione = null;

    /**
     * @property \MLocati\EFattura\AgenziaEntrate\RappresentanteFiscaleType $rappresentanteFiscale
     */
    private $rappresentanteFiscale = null;

    /**
     * @property \MLocati\EFattura\AgenziaEntrate\IscrizioneREAType $iscrizioneREA
     */
    private $iscrizioneREA = null;

    /**
     * @property string $regimeFiscale
     */
    private $regimeFiscale = null;

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
     * Gets as codiceFiscale
     *
     * @return string
     */
    public function getCodiceFiscale()
    {
        return $this->codiceFiscale;
    }

    /**
     * Sets a new codiceFiscale
     *
     * @param string $codiceFiscale
     * @return self
     */
    public function setCodiceFiscale($codiceFiscale)
    {
        $this->codiceFiscale = $codiceFiscale;
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

    /**
     * Gets as sede
     *
     * @return \MLocati\EFattura\AgenziaEntrate\IndirizzoType
     */
    public function getSede()
    {
        return $this->sede;
    }

    /**
     * Sets a new sede
     *
     * @param \MLocati\EFattura\AgenziaEntrate\IndirizzoType $sede
     * @return self
     */
    public function setSede(\MLocati\EFattura\AgenziaEntrate\IndirizzoType $sede)
    {
        $this->sede = $sede;
        return $this;
    }

    /**
     * Gets as stabileOrganizzazione
     *
     * @return \MLocati\EFattura\AgenziaEntrate\IndirizzoType
     */
    public function getStabileOrganizzazione()
    {
        return $this->stabileOrganizzazione;
    }

    /**
     * Sets a new stabileOrganizzazione
     *
     * @param \MLocati\EFattura\AgenziaEntrate\IndirizzoType $stabileOrganizzazione
     * @return self
     */
    public function setStabileOrganizzazione(\MLocati\EFattura\AgenziaEntrate\IndirizzoType $stabileOrganizzazione)
    {
        $this->stabileOrganizzazione = $stabileOrganizzazione;
        return $this;
    }

    /**
     * Gets as rappresentanteFiscale
     *
     * @return \MLocati\EFattura\AgenziaEntrate\RappresentanteFiscaleType
     */
    public function getRappresentanteFiscale()
    {
        return $this->rappresentanteFiscale;
    }

    /**
     * Sets a new rappresentanteFiscale
     *
     * @param \MLocati\EFattura\AgenziaEntrate\RappresentanteFiscaleType $rappresentanteFiscale
     * @return self
     */
    public function setRappresentanteFiscale(\MLocati\EFattura\AgenziaEntrate\RappresentanteFiscaleType $rappresentanteFiscale)
    {
        $this->rappresentanteFiscale = $rappresentanteFiscale;
        return $this;
    }

    /**
     * Gets as iscrizioneREA
     *
     * @return \MLocati\EFattura\AgenziaEntrate\IscrizioneREAType
     */
    public function getIscrizioneREA()
    {
        return $this->iscrizioneREA;
    }

    /**
     * Sets a new iscrizioneREA
     *
     * @param \MLocati\EFattura\AgenziaEntrate\IscrizioneREAType $iscrizioneREA
     * @return self
     */
    public function setIscrizioneREA(\MLocati\EFattura\AgenziaEntrate\IscrizioneREAType $iscrizioneREA)
    {
        $this->iscrizioneREA = $iscrizioneREA;
        return $this;
    }

    /**
     * Gets as regimeFiscale
     *
     * @return string
     */
    public function getRegimeFiscale()
    {
        return $this->regimeFiscale;
    }

    /**
     * Sets a new regimeFiscale
     *
     * @param string $regimeFiscale
     * @return self
     */
    public function setRegimeFiscale($regimeFiscale)
    {
        $this->regimeFiscale = $regimeFiscale;
        return $this;
    }


}

