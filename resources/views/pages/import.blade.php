<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
</head>
<body>
   <form action="{!! route('facebook.leads.post') !!}" method="post" enctype="multipart/form-data">
      @csrf
      <input type="file" name="leads" required>
      <button class="btn btn-success" type="submit">Submit</button>
   </form>
</body>
</html>
