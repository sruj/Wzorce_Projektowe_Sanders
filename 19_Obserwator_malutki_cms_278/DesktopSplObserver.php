<?php

class DesktopSplObserver implements SplObserver {

    public function update(\SplSubject $subject) {
        $data = $subject->getData();
        
    $html = <<<HTML
                        <h1>$data[0]</h1>
                            <p>$data[1]</p>
      <img src="desktop/$data[2]">
HTML;

    echo $html;
    
    }

}
