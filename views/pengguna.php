 <!-- Main Content -->
 <section class="content">

   <!-- Default box -->
   <div class="card">
     <div class="card-header">
       <h3 class="card-title">pengguna</h3>
     </div>
     <div class="card-body">
       <div class="row">
         <div class="col mb-3">
           <a href="index.php?halaman=tambah_pengguna" class="btn btn-primary float-right">
             <i class="fa fa-user-plus"></i>Tambah pengguna</a>
         </div>
       </div>



       <table id="example1" class="table table-bordered table-striped">
         <thead>
           <tr>
             <th>No</th>
             <th>Nama</th>
             <th>Username</th>
             <th>Level</th>
             <th>Aksi</th>
           </tr>
         </thead>
         <tbody>
           <?php
            include "koneksi.php";
            $no = 1;

            $sql = mysqli_query($koneksi, "SELECT*FROM pengguna");
            while ($data = mysqli_fetch_array($sql)){
              echo "
                   <tr>
                        <td>$no</td>
                        <td>$data[nama]</td>
                        <td>$data[username]</td>
                        <td>$data[level]</td>
                        <td><div class='btn-group'>
                        <a href='index.php?halaman=edit_pengguna&id=$data[id]'class='btn btn-sm btn-success' 
                        title='ubah data'><i class='fa fa-pencil-alt'></i></a>
                        <a href='db/db_pengguna.php?proses=hapus&id=$data[id]'class='btn btn-sm btn-danger' 
                         title='hapus data'><i class='fa fa-trash-alt'></i></a>
                       </div>
                       </td>
                   </tr>";
              $no++;
            }
            ?>

         </tbody>
     </div>
   </div>
   <!-- /.card-body -->
   <!-- <div class="card-footer">
          Footer
        </div> -->
   <!-- /.card-footer-->
   <!-- /.card -->
 </section>