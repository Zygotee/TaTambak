@extends('layouts/admin/master-admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Tabel pengamatan suhu</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="tabel_suhu" class="display table table-striped table-hover table-bordered" >
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($suhu as $suhu)                    
                    <tr>
                            <td>{{date('Y-m-d', strtotime($suhu->waktu))}}</td>
                            <td>{{date('h:i:s', strtotime($suhu->waktu))}}</td>
                            <td>{{$suhu->nilai}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
@section('js')
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script src= "https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src= "https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src= "https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src= "https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src= "https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
    <script>
        $(document).ready(function() {
			$('#tabel_suhu').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'csv', 'excel'
                     ],
                aaSorting: [[0, 'desc']]
            });
        });
        var reload = window.setInterval('update()', 10000);
        var update = function(){

            $.ajax({
				type: 'get',
				url: url[0],
				success:function(data) {
                        if(data['nilai'] < 20 && > 30)
                        var text = data['nilai'].toString();
                swal({
                    title: "Suhu dibawah normal",
                    text: text,
                    icon : "error",
                    buttons: true,
                    dangerMode: true,
                });
                        console.log(data['nilai'])
                        
                       
               }
		    });
        };
        update();
    </script>





    </script>
@endsection