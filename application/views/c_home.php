<?php include('header.php');?>
 
<table class="table table-hover">
    <thead>
        <tr>
            <br />
            <p class="text-center">Jumlah Data: <?php echo $total_rows; ?></p>
        </tr>
        <tr>
      <th>id.</th>
      <th>Name</th>
      <th>phone</th>
      <th>email</th>
      
    </tr>
  </thead>
  <tbody>
    <?php 
      $no = 1;
      foreach ($hslquery->result() as $row) 
        { 
    ?>
    <tr>
      <td><?php echo $id; ?></td>
      <td><?php echo $row->name; ?></td>
      <td><?php echo $row->phone; ?></td>
      <td><?php echo $row->email; ?></td>
      
    </tr>
    <?php 
      
    } 
    ?>
    </tbody>
    </table>
    <?php echo $paginator; ?>
<?php include('footer.php');?>