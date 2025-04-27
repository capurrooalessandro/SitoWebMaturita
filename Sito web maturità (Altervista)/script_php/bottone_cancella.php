<?php
echo <<< END
<td>
<form action='../riservata/lista_riservata.php' method='post'>
<input type='hidden' name='cancella' value='$record[id]'>
<input type='submit' value='Cancella record'>
</form>
</td>    
END;
?>
<!--ho dovuto togliere l'indentazione al codice all'interno di END altrimenti VS Code me lo da sbagliato-->
 