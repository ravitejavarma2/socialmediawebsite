<?php
<!--<div class='uname'><?php 
    echo $_SESSION['un']; ?></div>--> 
$x="aaaaaavvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvaaaaaabbbbcccdddeeerrr jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj i am maneesh";
$y=explode(" ",$x);
$z="";
$b=array();
$q=array();
if(str_word_count($x)>1)
	{
for($i=0;$i<count($y);$i++)
{
	if(strlen($y[$i])>32)
	{


              $m=0;
              $n=32;
              $ax="";
             
              
              while(true)
            {
              $ax=substr($y[$i],$m,32);
                           
              array_push($q,$ax);

              $m=$n;
              $n=$n+32;
             

              
              
                
                if($m>strlen($y[$i]))
                {
                	
                	if(strlen($z)==0)
                	{
                		for($j=0;$j<count($q)-1;$j++)
                 		{
            				array_push($b,$q[$j]);
            			}
                	

                	if(strlen($q[count($q)-1])<32)
                	{
                		if((strlen($z)+strlen($q[count($q)-1]))<32)
							{
								$z=$z.$q[count($q)-1]." ";
							}

						else
							{
								array_push($b,$z);
								$z=$q[count($q)-1]." ";

							}
                		
                		
                	}
                	}
                	else
                	{
                		array_push($b,$z);
                		for($j=0;$j<count($q)-1;$j++)
                 		{
            				array_push($b,$q[$j]);
            			}
            			$z="";
            			if(strlen($q[count($q)-1])<32)
                	{
                		if((strlen($z)+strlen($q[count($q)-1]))<32)
							{
								$z=$z.$q[count($q)-1]." ";
							}

						else
							{
								array_push($b,$z);
								$z=$q[count($q)-1]." ";

							}
                		
                		
                	}

                	}

                 
                 break;
                }
              
             
            }

                		
            
            $q=[];
             
        

	}
	else{

	
		
		if((strlen($z)+strlen($y[$i]))<32)
		{
			$z=$z.$y[$i]." ";
		}

		else
		{
			array_push($b,$z);
			$z=$y[$i]." ";

		}
            }

	
}

if(strlen($z)<=32)
		{
			


			array_push($b,$z);
		}

}
else
{
	if(strlen($x)>32)
            {
              $m=0;
              $n=32;
              $ax="";
             
              
              while(true)
            {
              $ax=substr($x,$m,32);
                           
              array_push($b,$ax);

              $m=$n;
              $n=$n+32;
             

              
              
                
                if($m>strlen($x))
                {
                  
                 break;
                }
              
             
            }
        }

}
for($i=0;$i<count($b);$i++)
{
	echo "<div style='color:red;'>$b[$i]</div>";


}

 ?>
