<?php 

// a string of county data
$county_data = "1. Mombasa. – Abdulswamad Nassir – ODM,
2. Kwale. – Fatuma Achani – UDA,
3. Kilifi. – Gideon Mung’aro – ODM,
4. Tana River. – Dhadho Godhana – ODM,
5. Lamu. – Issa Abdallah Timamy – ANC,
6. Taita-Taveta. – Andrew Mwadime – Independent,
7. Garissa. – Nathif Jama – ODM,
8. Wajir. – Ahmed Abdullahi – ODM,
9. Mandera. – Mohamed Adan Khalif - UDM,
10. Marsabit – Mohamud Ali – ODM,
11. Isiolo – Abdi Hassan Guyo – Jubilee,
12. Meru – Kawira Mwangaza – Independent,
13. Tharaka Nithi – Muthomi Njuki – UDA,
14. Embu – Cecily Mbarire – UDA,
15. Kitui – Julius Malombe – Wiper,
16. Machakos – Wavinya Ndeti – Wiper,
17. Makueni – Mutula Kilonzo – Wiper.,
18. Nyandarua – Moses Kiarie – UDA,
19. Nyeri – Mutahi Kahiga – UDA,
20. Kirinyaga. – Ann Waiguru – UDA,
21. Murang’a – Irungu Kang’ata – UDA,
22. Kiambu. – Kimani Wamatangi – Jubilee,
23. Turkana. – Jeremiah Lomurkai – ODM,
24. West Pokot. – Simon Kachapin. – UDA,
25. Samburu. – Jonathan Leleliit – UDA,
26. Trans-Nzoia. – George Natembeya – DAP-K,
27. Uasin gishu. – Jonathan Bii – UDA,
28. Elgeyo Marakwet. – Wisley Rotich – UDA,
29. Nandi. – Stephen Sang – UDA,
30. Baringo – Benjamin Cheboi. – UDA,
31. Laikipia – Joshua Irungu – UDA,
32. Nakuru. – Susan Kihika – UDA,
33. Narok – Patrick Ole Ntutu – UDA,
34. Kajiado. – Joseph Ole Lenku – ODM,
35. Kericho. – Dr. Erick Mutai – UDA,
36. Bomet. – Hillary Barchok – UDA,
37. Kakamega. – Fernandes Barasa – ODM,
38. Vihiga. – Wilber Ottichilo – ODM,
39. Bungoma. – Ken Lusaka – Ford Kenya,
40. Busia. – Paul Otuoma – ODM,
41. Siaya. – James Orengo. – ODM,
42. Kisumu. – Anyang’ Nyong’o. – ODM,
43. Homabay. – Gladys Wanga – ODM,
44. Migori. – Ochillo Ayacko – ODM,
45. Kisii. – Simba Arati – ODM,
46. Nyamira. – Amos Nyaribo - UPA,
47. Nairobi. – Johnson Sakaja – UDA";


// You should NOT modify anything above this line

// Your code starts here

//print $county_data; //primitive data
//splitting data (splitting string by string in php)
/*
$small_string ="Simba Arati";
//delimeter is the string you are splitting by
$small_array=explode(' ',$small_string);
//print $small_array; echo $small_array; (primitive data types)
//complex print_r/var_dump
print "<br/>";
var_dump($small_array);

print "<br/>";
print_r($small_array);
?> 
*/
$county_array=explode(",",$county_data);
/*
print "<h1>The array</h1>";
var_dump($county_array);
print "<h1>The contents of the array</h1>";
echo $county_array[0].'<br/>';
echo $county_array[21].'<br/>';
echo $county_array[44].'<br/>';

print "<h1>The array</h1>"
//print_r(explode("–",$county_array[0]));
//to shorten, use a loop
*/

echo "<table border=1 cellspacing=5 cellpadding=5>";
echo "<thead>";
echo "<tr>";
echo '<th> #</th>c <th> county</th> <th> governor</th> <th> party</th>';
echo '</tr>';
echo '</thead>';
$party_count=array();


foreach($county_array as $key =>$row):
  echo "<tr>";
  $cells=explode('– ',$row);

  foreach($cells as $key=>$cell):
    if($key==0){
      $temp=explode('.',$cell);
      echo '<td>'.$temp[0].'</td>';
          echo '<td>'.$temp[1].'</td>';
    }elseif ($key==1) {
      if(strpos($cell,'- ')){
        $temp=explode('-',$cell);
        echo '<td>'.$temp[0].'</td>';
            echo '<td>'.$temp[1].'</td>';
                $party_count[]=$temp[1];
      }else{
        echo "<td>$cell</cell>";
      }

    }else{
      $party_count[]=$cell;

      echo "<td>$cell</cell>";
    }

endforeach;
  echo "</tr>";
endforeach;
echo "</table>";
echo '<br>';
$nice_array=array_count_values($party_count);
?>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js" ></script>
<canvas id="myChart" width="20" height="20" circumference="20">
</canvas>
<script>
const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: <?php echo json_encode(array_keys($nice_array))?>,
        datasets: [{
            label: '# of Votes',
            data:  <?php echo json_encode(array_values($nice_array))?>,
            backgroundColor: [
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 206, 86, 0.2)'
            ],
          
            borderWidth: 0.5
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>