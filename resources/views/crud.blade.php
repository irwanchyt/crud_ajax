<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>crud 1 page</title>
    <style>
        .error{
            color:red;
        }
    </style>
</head>
<body>

 <div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="card text-center">
                <div class="card-header">
                  Data Siswa <button class="btn btn-primary ml-4" type="button" id="btn_reload"> reload data</button>
                  <button ctype="button" class="btn btn-primary" id="btn_add">tambah data</button>
                </div>
                <div class="card-body">
                    <table class="table text-center" id="t_siswa">
                        <thead>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                           <tr>
                               <td colspan="4" class="text-center">Loading Data Siswa...</td>
                           </tr>
                        </tbody>
                        <tfoot>

                        </tfoot>
                    </table>
                </div>
                <div class="card-footer text-muted">
                 
                </div>
              </div>

            </div>

    </div>

 </div>
   

   <form id="form_add">
        <div class="modal fade" id="modal_add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                       <label for="name">Name</label>
                       <input type="text" class="form-control" required name="name" id="name">
                    </div>
                    <div class="form-group">
                       <label for="alamat">Alamat</label>
                       <input type="text" class="form-control" required name="alamat" id="alamat">
                    </div>
                    <div class="form-group">
                       <label for="alamat">Alamat</label>
                       <select class="form-control" required name="jenis_kelamin" id="alamat" >
                           <option></option>
                            <option value="l"> Pria </option>
                            <option value="p"> perempuan </option>

                       </select>
                    </div>
                </div>
                <div class="modal-footer">
                    @csrf
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success" id="btn_save">Save</button>
                </div>
            </div>
            </div>
        </div>

   </form>

   
    
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.19.1/jquery.validate.js" type="text/javascript"></script>


<script src={{asset('crud.js')}} type="text/javascript"></script>

</body>
</html>