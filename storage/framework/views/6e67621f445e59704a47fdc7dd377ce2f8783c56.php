<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
</head>
<body>
   <form action="<?php echo route('facebook.leads.post'); ?>" method="post" enctype="multipart/form-data">
      <?php echo csrf_field(); ?>
      <input type="file" name="leads" required>
      <button class="btn btn-success" type="submit">Submit</button>
   </form>
</body>
</html>
<?php /**PATH /home/stone/Desktop/Projects/PHP/baroncabot/resources/views/pages/import.blade.php ENDPATH**/ ?>