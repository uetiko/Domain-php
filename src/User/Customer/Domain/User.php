<?php
declare(strict_types=1);
namespace PagoFacil\Gateway\User\Customer\Domain;

use PagoFacil\Gateway\Shared\Domain\Aggregate\Abstracts\AggregateRoot;
use PagoFacil\Gateway\Shared\Domain\ValueObject\Uuid;
use PagoFacil\Gateway\User\Customer\Domain\{Address, Contact};


class User extends AggregateRoot
{
    /** @var Uuid $id */
    private $id = null;
    /** @var string $name */
    private $name = null;
    /** @var string $lastName */
    private $lastName = null;
    /** @var Contact $contact */
    private $contact = null;
    /** @var Address $address */
    private $address = null;

    public function __construct(
        Uuid $id, string $name, string $lastName, Contact $contact, Address $address
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->lastName = $lastName;
        $this->contact = $contact;
        $this->address = $address;
    }

    /**
     * @return Uuid
     */
    public function getId(): Uuid
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @return \PagoFacil\Gateway\User\Customer\Domain\Contact
     */
    public function getContact(): \PagoFacil\Gateway\User\Customer\Domain\Contact
    {
        return $this->contact;
    }

    /**
     * @return \PagoFacil\Gateway\User\Customer\Domain\Address
     */
    public function getAddress(): \PagoFacil\Gateway\User\Customer\Domain\Address
    {
        return $this->address;
    }
}