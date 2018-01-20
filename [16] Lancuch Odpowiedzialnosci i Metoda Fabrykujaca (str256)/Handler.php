<?php

interface Handler {
    
    function setSuccessor($param);
    function handleRequest($param);    
    
}
