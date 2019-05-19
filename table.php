<?php
require_once ('includes/config.php');
?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>

        </title>
    </head>


<body>
    <h2>Select User</h2>
  <div>
    <form class="" method="post">
    <table class="">
        <thead>
        <th><input type="checkbox" value="select-all"></th>
        <th>Nama</th>
        <th>No telepon</th>
        <th>Kota</th>
        </thead>
            <tbody>
            <?
                include('config.php');
                    $query=mysqli_query($conn,"select * from `user`");
                    while($row=mysqli_fetch_array($query)){
                 ?>       
                        <tr>
                            <td><input type="checkbox" value="<?php echo $row['userid']; ?>" name="id[]"></td> <!-- don't forget to change this later -->
                            <td><?php echo $row['nama']; ?></td>
                            <td><?php echo $row['notelepon']; ?></td>
                            <td><?php echo $row['kota']; ?></td>
                        </tr>
                   <?     
                    }
                    ?>
            </tbody>
    </table>
    <br>
    <input type="submit" name="submit-notelepon" placeholder="test">
    </form>
</div>
          <div class="">
          <?
          if (isset($_POST['submit-notelepon'])){
          foreach ($_POST['id'] as $id){
          $sqlquery= mysqli_query($conn,"select * from `user` where userid='$id'");
                $phone_number_array = mysqli_fetch_array($sqlquery);
                echo $phone_number_array; 
                
          }

        }
            ?>
                <form action="sendsms.php" method="post">
                <input type="text" name="device_id" placeholder="masukan device id">
                <input type="text" name="notelepon" value="$srow['notelepon']">
                <input type="text" name="message_id" placeholder="masukan pesan">
                </form>
                

    </div>
</body>
</html>