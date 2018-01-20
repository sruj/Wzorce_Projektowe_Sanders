<?php

class DesktopSplObserver implements SplObserver{
    
    public function update(\SplSubject $subject) {
        $data = $subject->getData();
        echo "<img src='$data' height='342' width='342'><br>";
    }
    
    
}
