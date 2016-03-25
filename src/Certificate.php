<?php

/*
 * This file is part of the ACME PHP library.
 *
 * (c) Titouan Galopin <galopintitouan@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AcmePhp\Ssl;

/**
 * Represent a certificate.
 *
 * @author Jérémy Derussé <jeremy@derusse.com>
 */
class Certificate
{
    /** @var string */
    private $subject;

    /** @var string */
    private $issuer;

    /** @var bool */
    private $selfSigned;
    /**
     * @var \DateTime
     */
    private $validFrom;
    /**
     * @var \DateTime
     */
    private $validTo;

    /** @var string */
    private $serialNumber;

    /** @var array */
    private $subjectAlternativeNames;

    /**
     * @param string    $subject
     * @param string    $issuer
     * @param bool      $selfSigned
     * @param \DateTime $validFrom
     * @param \DateTime $validTo
     * @param string    $serialNumber
     * @param array     $subjectAlternativeNames
     */
    public function __construct(
        $subject,
        $issuer = null,
        $selfSigned = true,
        \DateTime $validFrom = null,
        \DateTime $validTo = null,
        $serialNumber = null,
        array $subjectAlternativeNames = []
    ) {
        $this->subject = $subject;
        $this->issuer = $issuer;
        $this->selfSigned = $selfSigned;
        $this->validFrom = $validFrom;
        $this->validTo = $validTo;
        $this->serialNumber = $serialNumber;
        $this->subjectAlternativeNames = $subjectAlternativeNames;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @return string
     */
    public function getIssuer()
    {
        return $this->issuer;
    }

    /**
     * @return bool
     */
    public function isSelfSigned()
    {
        return $this->selfSigned;
    }

    /**
     * @return \DateTime
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * @return \DateTime
     */
    public function getValidTo()
    {
        return $this->validTo;
    }

    /**
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    /**
     * @return array
     */
    public function getSubjectAlternativeNames()
    {
        return $this->subjectAlternativeNames;
    }
}
