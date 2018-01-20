<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TableHtml
 *
 * @author chiny
 */
class TableHtml {
    public function display($result) {
        if ($result->num_rows > 0) {
            echo "<br>zwrócono " . $result->num_rows . " wierszy: <br><br>";
            $this->tableStart();
            while ($row = $result->fetch_assoc()) {$this->tableMiddle($row);}
            $this->tableEnd();
        } else {
            echo "0 results";
        }         
    }
    
    
    public function tableMiddle($row) {
        echo "<tr><td>" . $row["id"] .
        "</td><td>" . $row["company"] .
        "</td><td>" . $row["devdes"] .
        "</td><td>" . $row["lang"] .
        "</td><td>" . $row["plat"] .
        "</td><td>" . $row["style"] .
        "</td><td>" . $row["device"] .
        "</tr>";
    }

    public function tableStart() {
        echo "<table>
                  <tr>
                    <th>id</th>
                    <th>company</th> 
                    <th>devdes</th>
                    <th>lang</th>
                    <th>plat</th>
                    <th>style</th>
                    <th>device</th>
                  </tr>";
    }

    public function tableEnd() {
        echo "</table>";
    }
}
