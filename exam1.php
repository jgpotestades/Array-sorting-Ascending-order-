<?php
/*
Create a single function (using your own algorithm) that will 
rearrange the values of the given sample arrays 
without using php reserved array sorting functions. 

The resulting print out should be in an ascending manner.

Sample arrays:
a. 4,3,1,2
b. 11,15,100,2,3,5
Additionally, for samble array b.: filter out the even numbers.
*/
?>

<?php
//==========SOLUTION:==================================================
function bubble ( $my_array )
{
	do
	{
		$swapped = false;

        //bubble sort
        for( $i = 0, $c = count( $my_array ) - 1; $i < $c; $i++ )
		{
            //
			if( $my_array[$i] > $my_array[$i + 1] )
			{
				list( $my_array[$i + 1], $my_array[$i] ) =
						array( $my_array[$i], $my_array[$i + 1] );
				$swapped = true;
			}
		}
	}
	while( $swapped );
return $my_array;
}


/**wrong logic - do not copy
function even($Brightideas)
{
    for ($i = 0, $c = count($Brightideas)-1; $i < $c; $i++)
    {
        if ($Brightideas[$i+1] % 2 == 0)
        {
            array_push($Brightideas, $Brightideas[$i+1]);
        }
    }

return $Brightideas;
}
***/

//array-a
$test_array_1= array(4, 3, 1, 2);

//array-b
$test_array_2= array(11,15,100,2,3,5);


//exam 1-a answers
echo "Exam 1 (Part a):\n";
echo "\tArray A:\n\t";
echo implode(', ',$test_array_1 );
echo "\n\tSorted Array (using bubble sort algorithm):\n\t";
echo implode(', ',bubble($test_array_1)). PHP_EOL;

/*exam 1-b answers
echo "\nExam  (Part b):\n";
echo "\tArray B:\n\t";
echo implode(', ',$test_array_2 );
echo "\n\tEven numbers from the Array:\n\t";
echo implode(', ',even($test_array_2)). PHP_EOL;
*/
?>

