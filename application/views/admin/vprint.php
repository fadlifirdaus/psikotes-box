<!DOCTYPE html>
<html>
	<head>
		<title>Print</title>
	</head>
	<body>
		
		<form action="<?= base_url('admin/cetak'); ?>" method="post">
			<table class="table">  
        <tr>
          <th>Full Name</th>
          <th>Email</th>
          <th>Date Created</th>
          <th>Foto</th>
        </tr>
        <?php foreach ($user as $us) : ?>
          
        <tr>
          <td><?= $us->name ?></td>
          <td><?= $us->email ?></td>
          <td><?= date('d F Y',$us->date_created) ?></td>
          <td><img src="<?= base_url(); ?>/assets/img/<?= $us->image; ?>" width="50" height="50"></td> 
        </tr>
        <?php endforeach; ?>
		  </table>
		  <a href="<?= base_url('admin/user'); ?>" class="btn btn-primary">Back</a>
    </form>
    

		<script type="text/javascript">
			window.cetak();
		</script>
	</body>
</html>