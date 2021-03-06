<?php 
    $getUser = $this->session->userdata('session_user');
    $getGrup = $this->session->userdata('session_grup');
?>
<html>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables user</h6>
        </div>

        <div class="card-body"> 
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Nama</th>
                            <th>Grup</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Nama</th>
                            <th>Grup</th>
                            <th></th>
                        </tr>
                    </tfoot>

                    <tbody>
                        <?php $no=1;// mendeklarasikan nilai no = 1
                            foreach($user as $baris){?> <!--digunakan sebagai perulangan array-->

                        <tr>
                            <td><?php echo $no++; ?></td> <!--menampilkan no dengan increment-->
                            <td><?php echo $baris->username; ?></td> <!--menampilkan username-->
                            <td><?php echo $baris->nama; ?></td> <!--menampilkan nama-->
                            <td><?php echo $baris->grup; ?></td> <!--menampilkan grup-->

                            <td>
                                <?php
                                    if ($getGrup == 1) {
                                        echo '<a href="'.base_url('Mahasiswa/edit/'.$baris->id).'" class="fa fa-edit"></a>';
                                        echo " ";
                                        echo '<a href="'.base_url('Mahasiswa/hapus/'.$baris->id).'" class="fa fa-times"></a>';
                                    }
                                ?>
                            </td>
                        </tr>
                        <?php   }  ?>
                    </tbody>
                </table>

                <!-- membuat button tambah, digunakan untuk menambahkan data. 
                Dan terhubung pada fungsi tambah pada controller Mahasiswa -->
                <a href="<?php echo base_url('Mahasiswa/tambah')?>" class="btn btn-success btn-icon-split">
                    <span class="text">Tambah Data</span>
                </a>
            </div>
        </div>
    </div>
</html>