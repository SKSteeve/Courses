<?php

class Box
{
    /**
     * @var float
     */
    private $length;

    /**
     * @var float
     */
    private $width;

    /**
     * @var float
     */
    private $height;

    /**
     * Box constructor.
     * @param float $length
     * @param float $width
     * @param float $height
     */
    public function __construct(float $length, float $width, float $height)
    {
        $this->setLength($length);
        $this->setWidth($width);
        $this->setHeight($height);
    }

    /**
     * @param float $length
     */
    private function setLength(float $length): void
    {
        $this->length = $length;
    }

    /**
     * @param float $width
     */
    private function setWidth(float $width): void
    {
        $this->width = $width;
    }

    /**
     * @param float $height
     */
    private function setHeight(float $height): void
    {
        $this->height = $height;
    }



    /**
     * @return float
     */
    private function getLength(): float
    {
        return $this->length;
    }

    /**
     * @return float
     */
    private function getWidth(): float
    {
        return $this->width;
    }

    /**
     * @return float
     */
    private function getHeight(): float
    {
        return $this->height;
    }

    /**
     * @return float
     */
    private function getVolume(): float
    {
        $volume = $this->getHeight() * $this->getLength() * $this->getWidth();
        return $volume;
    }

    /**
     * @return float
     */
    private function getSurfaceArea(): float
    {
        $surfaceArea = 2 * $this->getLength() * $this->getWidth() + 2 * $this->getLength() * $this->getHeight() + 2 * $this->getWidth() * $this->getHeight();
        return $surfaceArea;
    }

    /**
     * @return float
     */
    private function getLateralSurfaceArea(): float
    {
        $latSurfArea = 2 * $this->getLength() * $this->getHeight() + 2 * $this->getWidth() * $this->getHeight();
        return $latSurfArea;
    }

    public function __toString()
    {
        return "Surface Area - " . number_format($this->getSurfaceArea(), 2, '.', '') . PHP_EOL
            . "Lateral Surface Area - " . number_format($this->getLateralSurfaceArea(), 2, '.', ''). PHP_EOL
            . "Volume - " . number_format($this->getVolume(), 2, '.', '') . PHP_EOL;
    }
}

$newBox = new Box(readline(), readline(), readline());
echo $newBox;