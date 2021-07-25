<?php
    class Task {
        private $arr = [];
        

        public function __construct($size = null){
            for ($i = 0; $i<$size; $i++) {
                $this->arr[]=rand(0,100);
            }
        }
        
        public function getArray(){
            print_r($this->arr);
        
            echo "\n";
        }
        public function maxArr(){
            $max = null;
                
            		foreach($this->arr as $key => $value) {
            		    if ($value > $max or $max === null) {
            		    	$max = $value;
            			
        			}
        		}
        		
            
    		return $max;
    		
            
    		
                
        }
        public function minArr(){
            $min = null;
            		foreach ($this->arr as $key => $value) {
            		    if ($value < $min or $min === null) {
            			    $min = $value;
            			    
            			
        			}
        			
        		}
            
    		return $min;
    		
                
        }
        
        
        public function pairArr() {
            $pair = null;
            for ($i=0; $i<count($this->arr); $i++){
                if ( $this->arr[$i] % 2 == 0 ){
                $pair .= $this->arr[$i] . " ";
                
                } 
            }
            return $pair;
        }
        
        public function notpairArr() {
            $not_pair = null;
            for ($i=0; $i<count($this->arr); $i++){
                if ( $this->arr[$i] % 2 !== 0 ){
                $not_pair .= $this->arr[$i] . " ";
                
                } 
            }
            return $not_pair;
        }
        public function fourArr() {
            $arr_four = null;
            for ($i=0; $i<count($this->arr); $i++){
                if ( $this->arr[$i] % 4 == 0 ){
                $arr_four .= $this->arr[$i] . " ";
                
                } 
            }
            return $arr_four;
        }
        
        
        public function sumArr(){
            $sum = $this->minArr() + $this->maxArr();
            return $sum;
        }
        
        
        
        
    }
    
$test = new Task(18);
$test->getArray();
echo $test->minArr() . "\n";
echo $test->maxArr() . "\n";
echo $test->pairArr() . "\n";
echo $test->notPairArr() . "\n";
echo $test->fourArr() . "\n";
echo $test->sumArr() . "\n";
