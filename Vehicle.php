<?php

class Vehicle
{

    private int $numberOfWheels = 4;
    private ?string $brand = null;
    private ?string $color = null;

    /**
     * @return int
     */
    public function getNumberOfWheels(): int
    {
        return $this->numberOfWheels;
    }

    /**
     * @param int $numberOfWheels
     */
    public function setNumberOfWheels(int $numberOfWheels): void
    {
        $this->numberOfWheels = $numberOfWheels;
    }

    /**
     * @return string|null
     */
    public function getBrand(): ?string
    {
        return $this->brand;
    }

    /**
     * @param string|null $brand
     */
    public function setBrand(?string $brand): void
    {
        $this->brand = $brand;
    }

    /**
     * @return string|null
     */
    public function getColor(): ?string
    {
        return $this->color;
    }

    /**
     * @param string|null $color
     */
    public function setColor(?string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return int
     */
    public function getNumberOfSeats(): int
    {
        return $this->numberOfSeats;
    }

    /**
     * @param int $numberOfSeats
     */
    public function setNumberOfSeats(int $numberOfSeats): void
    {
        $this->numberOfSeats = $numberOfSeats;
    }

    /**
     * @return bool
     */
    public function isTankEmpty(): bool
    {
        return $this->isTankEmpty;
    }

    /**
     * @param bool $isTankEmpty
     */
    public function setIsTankEmpty(bool $isTankEmpty): void
    {
        $this->isTankEmpty = $isTankEmpty;
    }

    /**
     * @return bool
     */
    public function isStarted(): bool
    {
        return $this->isStarted;
    }

    /**
     * @param bool $isStarted
     */
    public function setIsStarted(bool $isStarted): void
    {
        $this->isStarted = $isStarted;
    }
    private int $numberOfSeats = 5;
    private bool $isTankEmpty = false;
    private bool $isStarted = false;


    public function start () {

     if ($this->isTankEmpty(true)) {

       echo "Vozilo nije moguce pokrenuti, nema goriva.";

     }

     if ($this->isStarted(true)) {

       echo "Vozilo je vec startovano.";

     }

     if ($this->isStarted(false) && $this->isTankEmpty(false)) {

         $this->setIsStarted(true);
         echo "Vozilo je uspjesno startovano";

     }

    }


    public function stop () {

        if ($this->isStarted(false)) {

            echo "Vozilo je vec iskljuceno";

        }

        if ($this->isStarted(true)) {

            $this->setIsStarted(false);
            echo "Vozilo je uspjesno iskljuceno";

        }

    }

}