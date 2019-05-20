<?php
class primeNumber
{
	var $count;
	var $prime_numbers = '';
	var $displayContent = '';	
	public function generatePrimeNumbers($count)
	{
		$tcount = 0 ;
		$number = 2 ;
		while ($tcount < $count )
		{
			$div_count=0;
			for($i=1;$i<=$number;$i++)
			{
				if(($number%$i)==0)
				{
					$div_count++;
				}
			}
			if($div_count<3)
			{
				$this->prime_numbers[] = $number;
				$tcount=$tcount+1;
			}
			$number=$number+1;
		}
		return $this->prime_numbers;
	}
	
	public function displayPrimeNumbers()
	{
		$displayContent = '';
		for($i=0;$i<$this->count;$i++)
		{
			if($i==0){
				$displayContent .= '<br>&nbsp;'.($i+1).'&nbsp;';
			}
			else{
				$displayContent .= '<br>&nbsp;'.$this->prime_numbers[$i-1].'&nbsp;';
			}    
			for($j=0;$j<$this->count;$j++)
			{   
                if(($i==0 && $j==0) || $j==0){
					$displayContent .= '|';
				}else if($i==0){
					$displayContent .= '&nbsp;'.$this->prime_numbers[$j-1].'&nbsp;';
				}else{
					$displayContent .= '&nbsp;'.($this->prime_numbers[$i-1]*$this->prime_numbers[$j-1]).'&nbsp;';
				}
				if($i==0 && $j==($this->count-1)){
				$displayContent .= '<br>';	
				  for($k=0;$k< $this->count;$k++)
				  {
				  $displayContent .= '-----';	
				  }
				  
				}	
			}		
			$displayContent .= '<br>';	
		}
		return $displayContent; 
	}/* function displayTablePrimeNumbers($prime_numbers,$count)
	{
		$displayContent = '<table border =0 cellpadding="5" cellspacing="5">';
		for($i=0;$i<$count;$i++)
		{
			if($i==0){
				$displayContent .= '<tr style="text-decoration:underlined;"><td >'.($i+1).'</td>';
			}
			else{
				$displayContent .= '<tr  style=""><td>'.$prime_numbers[$i-1].'</td>';
			}    
			for($j=0;$j<$count;$j++)
			{
				if(($i==0 && $j==0) || $j==0){
					$displayContent .= '';
				}else if($i==0){
					$displayContent .= '<td style="">'.$prime_numbers[$j-1].'</td>';
				}else{
					$displayContent .= '<td style="">'.($prime_numbers[$i-1]*$prime_numbers[$j-1]).'</td>';
				}						
			}
			$displayContent .= '</tr>';	
		}
		$displayContent .= '<table>';
		return $displayContent; 
	}
	*/

}
?>
