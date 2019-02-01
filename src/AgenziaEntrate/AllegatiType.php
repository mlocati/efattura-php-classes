<?php

namespace MLocati\EFattura\AgenziaEntrate;

/**
 * Class representing AllegatiType
 *
 * Blocco relativo ai dati di eventuali allegati
 * XSD Type: AllegatiType
 */
class AllegatiType
{

    /**
     * @property string $nomeAttachment
     */
    private $nomeAttachment = null;

    /**
     * @property string $algoritmoCompressione
     */
    private $algoritmoCompressione = null;

    /**
     * @property string $formatoAttachment
     */
    private $formatoAttachment = null;

    /**
     * @property string $descrizioneAttachment
     */
    private $descrizioneAttachment = null;

    /**
     * @property mixed $attachment
     */
    private $attachment = null;

    /**
     * Gets as nomeAttachment
     *
     * @return string
     */
    public function getNomeAttachment()
    {
        return $this->nomeAttachment;
    }

    /**
     * Sets a new nomeAttachment
     *
     * @param string $nomeAttachment
     * @return self
     */
    public function setNomeAttachment($nomeAttachment)
    {
        $this->nomeAttachment = $nomeAttachment;
        return $this;
    }

    /**
     * Gets as algoritmoCompressione
     *
     * @return string
     */
    public function getAlgoritmoCompressione()
    {
        return $this->algoritmoCompressione;
    }

    /**
     * Sets a new algoritmoCompressione
     *
     * @param string $algoritmoCompressione
     * @return self
     */
    public function setAlgoritmoCompressione($algoritmoCompressione)
    {
        $this->algoritmoCompressione = $algoritmoCompressione;
        return $this;
    }

    /**
     * Gets as formatoAttachment
     *
     * @return string
     */
    public function getFormatoAttachment()
    {
        return $this->formatoAttachment;
    }

    /**
     * Sets a new formatoAttachment
     *
     * @param string $formatoAttachment
     * @return self
     */
    public function setFormatoAttachment($formatoAttachment)
    {
        $this->formatoAttachment = $formatoAttachment;
        return $this;
    }

    /**
     * Gets as descrizioneAttachment
     *
     * @return string
     */
    public function getDescrizioneAttachment()
    {
        return $this->descrizioneAttachment;
    }

    /**
     * Sets a new descrizioneAttachment
     *
     * @param string $descrizioneAttachment
     * @return self
     */
    public function setDescrizioneAttachment($descrizioneAttachment)
    {
        $this->descrizioneAttachment = $descrizioneAttachment;
        return $this;
    }

    /**
     * Gets as attachment
     *
     * @return mixed
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * Sets a new attachment
     *
     * @param mixed $attachment
     * @return self
     */
    public function setAttachment($attachment)
    {
        $this->attachment = $attachment;
        return $this;
    }


}

