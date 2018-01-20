<?php

class PhoneSplObserver implements SplObserver {

    public function update(\SplSubject $subject) {
        $data = $subject->getData();
                
        
    $html = <<<HTML
                        <h1>$data[0]</h1>
                            <p>$data[1]</p>
      <img src="phone/$data[2]">
HTML;

    echo $html;
    }

}
