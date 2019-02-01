<?php

namespace MLocati\EFattura\AgenziaEntrate;

/**
 * Class representing CessionarioCommittenteType
 *
 * Blocco relativo ai dati del Cessionario / Committente
 * XSD Type: CessionarioCommittenteType
 */
class CessionarioCommittenteType
{

    /**
     * @property \MLocati\EFattura\AgenziaEntrate\IdentificativiFiscaliType $identificativiFiscali
     */
    private $identificativiFiscali = null;

    /**
     * @property \MLocati\EFattura\AgenziaEntrate\AltriDatiIdentificativiType $altriDatiIdentificativi
     */
    private $altriDatiIdentificativi = null;

    /**
     * Gets as identificativiFiscali
     *
     * @return \MLocati\EFattura\AgenziaEntrate\IdentificativiFiscaliType
     */
    public function getIdentificativiFiscali()
    {
        return $this->identificativiFiscali;
    }

    /**
     * Sets a new identificativiFiscali
     *
     * @param \MLocati\EFattura\AgenziaEntrate\IdentificativiFiscaliType $identificativiFiscali
     * @return self
     */
    public function setIdentificativiFiscali(\MLocati\EFattura\AgenziaEntrate\IdentificativiFiscaliType $identificativiFiscali)
    {
        $this->identificativiFiscali = $identificativiFiscali;
        return $this;
    }

    /**
     * Gets as altriDatiIdentificativi
     *
     * @return \MLocati\EFattura\AgenziaEntrate\AltriDatiIdentificativiType
     */
    public function getAltriDatiIdentificativi()
    {
        return $this->altriDatiIdentificativi;
    }

    /**
     * Sets a new altriDatiIdentificativi
     *
     * @param \MLocati\EFattura\AgenziaEntrate\AltriDatiIdentificativiType $altriDatiIdentificativi
     * @return self
     */
    public function setAltriDatiIdentificativi(\MLocati\EFattura\AgenziaEntrate\AltriDatiIdentificativiType $altriDatiIdentificativi)
    {
        $this->altriDatiIdentificativi = $altriDatiIdentificativi;
        return $this;
    }


}

