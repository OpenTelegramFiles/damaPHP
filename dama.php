<?php
 class dama {
 
	private $ann;
 
	function __construct( $ann = "" ) {
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

	    if(strpos($this->ann, 1, 0) == "."){
                $this->ann = strpos($this->ann, strlen($this->ann)-1, 1);
        }
            $moves = explode( ".",$this->ann);



	    $turn = "w";
	     $chessb =  [["b","b","b","b"],["b","b","b","b"],["b","b","b","b"], [" "," "," "," "],[" "," "," "," "],["w","w", "w","w"], ["w", "w","w", "w"],["w","w", "w", "w"]];
	    foreach($moves as $move){
	        $move3 = explode(",",$move);
	        $move2 = str_split( $move3[0]);
	        $move5 = str_split( $move3[1]);
	        $intm21 = intval($move2[1]);
	        $intm20 = intval($move2[0]);
	        $intm50 = intval($move5[0]);
	        $intm51 = intval($move5[1]);
	        $temm = $chessb [$intm50][$intm51];
	        if($intm20 == ($intm50 -2) or $intm50 == ($intm20 -2)){//se deve mangiare a sinistra
	        
	        if( ($intm21 +1) == $intm51){
	        if($temm == " "){
	       
	           
	            
	                $chessb[$intm20][$intm21] = " ";
	                $chessb[$intm20 + 1][$intm21 - 1] = " ";
	                $chessb[$intm50][$intm51] = $turn;
	           	if($turn == "w"){
	                $turn = "b";
	   
	            }else{
	                $turn = "b";
	            }
	           
	            
	        }}
	        if(($intm21 -1) == $intm51){
	            if($temm == " "){
	       
	           
	            
	                $chessb[$intm20][$intm21] = " ";
	                $chessb[$intm20 + 1][$intm21 + 1] = " ";
	                $chessb[$intm50][$intm51] = $turn;
	                if($turn == "w"){
	                $turn = "b";
	   
	            }else{
	                $turn = "b";
	            }
	           
	            
	        }
	            // se mangia a destra
	       } }
elseif($intm20 == ($intm50 -1)or $intm50 == $intm20 -1){
	            if($turn =="w"){
                    if( $intm21 == ($intm51 -1) or $intm21 == $intm51){

                        if($temm == " "){

                            $chessb[$intm20][$intm21] = " ";

                            $chessb[$intm50][$intm51] = $turn;
                           $turn = "b";
                        }
                    }

      }elseif($turn == "b") {
                    if( $intm21 == ($intm51 +1) or $intm21 == $intm51){

                        if($temm == " "){

                            $chessb[$intm20][$intm21] = " ";

                            $chessb[$intm50][$intm51] = $turn;

                                $turn = "w";
                        }
                    }

                }
	  else{
	            return "invalid move";
	        }
	    }}
	    return $chessb;
	}
	
 
}
?>