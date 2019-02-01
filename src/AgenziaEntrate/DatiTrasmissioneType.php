<?php

namespace MLocati\EFattura\AgenziaEntrate;

/**
 * Class representing DatiTrasmissioneType
 *
 * Blocco relativo ai dati di trasmissione della Fattura Elettronica
 * XSD Type: DatiTrasmissioneType
 */
class DatiTrasmissioneType
{

    /**
     * @property \MLocati\EFattura\AgenziaEntrate\IdFiscaleType $idTrasmittente
     */
    private $idTrasmittente = null;

    /**
     * @property string $progressivoInvio
     */
    private $progressivoInvio = null;

    /**
     * @property string $formatoTrasmissione
     */
    private $formatoTrasmissione = null;

    /**
     * @property string $codiceDestinatario
     */
    private $codiceDestinatario = null;

    /**
     * @property string $pECDestinatario
     */
    private $pECDestinatario = null;

    /**
     * Gets as idTrasmittente
     *
     * @return \MLocati\EFattura\AgenziaEntrate\IdFiscaleType
     */
    public function getIdTrasmittente()
    {
        return $this->idTrasmittente;
    }

    /**
     * Sets a new idTrasmittente
     *
     * @param \MLocati\EFattura\AgenziaEntrate\IdFiscaleType $idTrasmittente
     * @return self
     */
    public function setIdTrasmittente(\MLocati\EFattura\AgenziaEntrate\IdFiscaleType $idTrasmittente)
    {
        $this->idTrasmittente = $idTrasmittente;
        return $this;
    }

    /**
     * Gets as progressivoInvio
     *
     * @return string
     */
    public function getProgressivoInvio()
    {
        return $this->progressivoInvio;
    }

    /**
     * Sets a new progressivoInvio
     *
     * @param string $progressivoInvio
     * @return self
     */
    public function setProgressivoInvio($progressivoInvio)
    {
        $this->progressivoInvio = $progressivoInvio;
        return $this;
    }

    /**
     * Gets as formatoTrasmissione
     *
     * @return string
     */
    public function getFormatoTrasmissione()
    {
        return $this->formatoTrasmissione;
    }

    /**
     * Sets a new formatoTrasmissione
     *
     * @param string $formatoTrasmissione
     * @return self
     */
    public function setFormatoTrasmissione($formatoTrasmissione)
    {
        $this->formatoTrasmissione = $formatoTrasmissione;
        return $this;
    }

    /**
     * Gets as codiceDestinatario
     *
     * @return string
     */
    public function getCodiceDestinatario()
    {
        return $this->codiceDestinatario;
    }

    /**
     * Sets a new codiceDestinatario
     *
     * @param string $codiceDestinatario
     * @return self
     */
    public function setCodiceDestinatario($codiceDestinatario)
    {
        $this->codiceDestinatario = $codiceDestinatario;
        return $this;
    }

    /**
     * Gets as pECDestinatario
     *
     * @return string
     */
    public function getPECDestinatario()
    {
        return $this->pECDestinatario;
    }

    /**
     * Sets a new pECDestinatario
     *
     * @param string $pECDestinatario
     * @return self
     */
    public function setPECDestinatario($pECDestinatario)
    {
        $this->pECDestinatario = $pECDestinatario;
        return $this;
    }


}

