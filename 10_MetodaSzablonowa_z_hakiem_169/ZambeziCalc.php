<?php

//ZambeziCalc.php
class ZambeziCalc extends IHook {

    protected function addTax() {
        $this->fullCost = $this->purchased + ($this->purchased * .07);
    }

    protected function addShippingHook() {
        if (!$this->hookSpecial) {
            $this->fullCost += 12.95;
        }
    }

    protected function displayCost() {
        echo "Całkowity koszt wynosi $this->fullCost zł";
    }

}
