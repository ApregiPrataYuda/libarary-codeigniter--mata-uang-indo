function indo_currency($nominal)
{
   $result = "rp "  . number_format($nominal, 2, ',', '.');
   return  $result;
   //return 'Rp. ' . number_format($nominal, 0, ",", ".");
}


//call at views data
indo_currency($name_your_loop->price)
