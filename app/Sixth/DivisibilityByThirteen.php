<?php


namespace Exercises\Sixth;


class DivisibilityByThirteen
{

    private $aRepetitionPattern = [1, 10, 9, 12, 3, 4];
    private $iPointer = 0;

    /**
     * @param int $iValue
     * @return int
     */
    public function thirth(int $iValue): int
    {
        $this->initiateCounter();
        $sInvertedNumber = $this->invertNumber($iValue);

        $aNumbers = str_split($sInvertedNumber);
        $iSum = 0;
        foreach ($aNumbers as $iNumber) {
            $iSum += $iNumber * $this->getMultiplicationFactor();
        }

        if ($iSum == $iValue)
            return $iValue;
        else
            return $this->thirth($iSum);
    }

    /**
     * @param int $iValue
     * @return string
     */
    private function invertNumber(int $iValue): string
    {
        $sValue = (string)$iValue;
        return implode("", array_reverse(str_split($sValue)));
    }

    private function initiateCounter(): void
    {
        $this->iPointer = 0;
    }

    /**
     * @return bool
     */
    private function reachLastPattern(): bool
    {
        return $this->iPointer == 6;
    }

    /**
     * @return int
     */
    private function getMultiplicationFactor(): int
    {
        $iValueToReturn = $this->getFactor();
        $this->incrementCounter();
        if ($this->reachLastPattern())
            $this->initiateCounter();
        return $iValueToReturn;
    }

    /**
     * @return int
     */
    private function getFactor(): int
    {
        return $this->aRepetitionPattern[$this->iPointer];
    }

    private function incrementCounter(): void
    {
        $this->iPointer++;
    }


}

