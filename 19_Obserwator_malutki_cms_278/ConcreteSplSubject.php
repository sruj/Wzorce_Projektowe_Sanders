<?php

class ConcreteSplSubject implements SplSubject {
    
    private $observers;
    private $data = array();
    private $hookup;

    public function setObserver() {
        $this->observers = new SplObjectStorage();
    }
    
    public function attach(\SplObserver $observer) {
        $this->observers->attach($observer);
    }

    public function detach(\SplObserver $observer) {
        $this->observers->detach($observer);
    }
    
    public function notify() {
        foreach ($this->observers as $observ){
            $observ->update($this);
        }
    }
    
    public function setData($param) {
        $this->hookup = UniversalConnect::doConnect();
        
        $sql = "SELECT * FROM cms WHERE dpHeader='$param'";
        
        $result=$this->hookup->query($sql);
        
        if($result){
            while ($row = $result->fetch_assoc()) 
            {
                $this->data[0] = $row["dpHeader"];
                $this->data[1] = $row["textBlock"];
                $this->data[2] = $row["imageURL"];
            }             
        }else
            {echo "chuj, dupa! coś ten, z zapytaniem nie tak<br>" .$this->hookup->error;}        
    }
    
    public function getData() {
        return $this->data;
    }
    
    
}
