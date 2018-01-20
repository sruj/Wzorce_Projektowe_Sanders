<?php

interface Handler {
    const tableMaster = "helpdesk";
    
    function setSuccessor($param);
    function handleRequest($param);    
    
}
