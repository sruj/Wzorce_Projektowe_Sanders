<?php

class PhoneSplObserver implements SplObserver{
    
    public function update(\SplSubject $subject) {
        $data = $subject->getData();
        echo "<img src='$data' height='142' width='142'><br>";
    }
    
    
}
