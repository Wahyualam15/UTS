<h3><p align=center><b>Rata Tengah</b> 
Data Pemantauan Covid19 Wilayah <th><?php echo $_POST['Wilayah'] ?></th><br>
<?php 
	echo "Per ";
	echo date('d-F-Y');
	echo date(' h:i:s A');
	 ?><br>
<th><?php echo $_POST['Operator'] ?></th>/<th><?php echo $_POST['NIM'] ?></th>
</h3>
<p align=center></b> 

<table border="1" width="60%">
        <tr>
        
            <th>    Positif     </th>
            <th>    Dirawat     </th>
            <th>    Sembuh      </th>
            <th>    meninggal   </th>
        </tr>

        <tr>
            
            <th><?php echo $_POST['Positif'] ?></th>
            <th><?php echo $_POST['Dirawat'] ?></th>
            <th><?php echo $_POST['Sembuh'] ?></th>
            <th><?php echo $_POST['Meninggal'] ?></th>
        </tr>
    </table>