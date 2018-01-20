<?php

class TabletSplObserver implements SplObserver{
    
    public function update(\SplSubject $subject) {
        $data = $subject->getData();
        echo "<img src='$data' height='242' width='242'><br>";
    }
    
    
}
