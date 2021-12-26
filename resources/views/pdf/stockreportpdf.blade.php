<!doctype html>
<html lang="en">
   <head>
      <title>Laravel 8 Send Email with PDF Attachment</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   </head>
   <body>
      <div class="container">
         <div class="row">
            <div class="col-xl-6 col-lg-6 col-sm-12 m-auto">
               <table>
                  <thead>
                     <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Stock</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach ($product as $row)
                     <tr>
                        <td>{{$row->id}}</td>
                        <td>{{$row->title}}</td>
                        <td>{{$row->stock}}</td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </body>
</html>