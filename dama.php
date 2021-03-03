<?php
class damaitaliana {
 
	private $ann;
 
	function __construct( $ann ) {
		$this->ann = $ann;
		
	}
 
	function getAnn() {
		return $this->ann;
	}
 
	function Move($move) {
	    $this->ann = $this->ann.".".$move;
		return true;
	}
	function getChessboard(){
	    $moves = explode($this->ann, ".");
	    $temp = "";
	    $turn = "w";
	    $chessb =  [["b","b","b","b"],["b","b","b","b"],["b","b","b","b"], [" "," "," "," "],[" "," "," "," "],["w","w", "w","w"], ["w", "w","w", "w"],["w","w", "w", "w"]];
	    foreach($moves as $move){
	        $move3 = explode($move, ",");
	        $move2 = explode($move3[0],"");
	        $move5 = explode($move3[1],"");
	        $temm = $chessb [intval($move2[0])][intval($move2[1])];
	        if($temm == " "){
	            $c = intval($move2[1]);
	            for($i = intval($move2[0]);$i < intval($move5[0]); $i++){
	                if(intval($move5[1]) > intval($move2[1])){
	               $chessb [$i -1][$c -1] = " ";
	            $chessb [$i][$c] = "w";
	            $c++;
	            }else{
	                	               $chessb [$i -1][$c -1] = " ";
	            $chessb [$i][$c] = "w";
	            $c--;
	            }
	                
	            }
	            
	        }else{
	            return "invalid move";
	        }
	    }
	    return $chessb;
	}
	
 
}
?>