<?php

class ConcreteSplObserver implements SplObserver{
    
    public function update(\SplSubject $subject) {
        $data = $subject->getData();
        echo $data;
    }
    
    
}
