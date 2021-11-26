<!DOCTYPE html>
<html>
    <head>

    </head>
<?php
$a='';  
   if(isset($_POST['submit']))
   {
      $a=(int)$_POST['a']/$_POST['b'];
   }

?>
    <body>
        <form action="" method="Post">
            <table border="1">
                <tr>
                      <td>
                          Moi nhap a
                      </td>
                      <td>
                          <input name="a"  type="text">
                      </td>
                </tr>
                <tr>
                <td>
                          Moi nhap b
                      </td>
                      <td>
                          <input name="b"  type="text">
                      </td>
                </tr>
                <tr>
                   <td>
                    <input type="text" value="<?php echo $a ?>">
                   </td>
                   <td>
                 <input type="submit" name="submit" value="ket qua"> 
                   </td>
                </tr>
            </table>
        </form>
    </body>
</html>