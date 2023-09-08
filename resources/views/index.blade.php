<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <h1>CRUD PEGAWAI</h1>
                <button class="btn btn-primary" onclick="create()">Add Pegawai</button>
                <div id="read" class="mt-3"></div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="page" class="p2"></div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            read();
        })

        function read() {
            $.get("{{ url('read') }}", {}, function(data, status) {
                $("#read").html(data);
            })
        }

        function create() {
            $.get("{{ url('create') }}", {}, function(data, status) {
                $("#exampleModalLabel").html('Create Pegawai');
                $("#page").html(data);
                $('#exampleModal').modal('show');
            })
        }

        function store() {
            var pegawai_nama = $("#pegawai_nama").val();
            var pegawai_jabatan = $("#pegawai_jabatan").val();
            var pegawai_umur = $("#pegawai_umur").val();
            var pegawai_alamat = $("#pegawai_alamat").val();
            $.ajax({
                type: "get",
                url: "{{ url('store') }}",
                data: "pegawai_nama=" + pegawai_nama + "&pegawai_jabatan=" + pegawai_jabatan + "&pegawai_umur=" + pegawai_umur + "&pegawai_alamat=" + pegawai_alamat ,
                success: function(data) {
                    $("page").html('');
                    $(".btn-close").click();
                    read();
                }
            })
        }

        function show(id) {
            $.get("{{ url('show') }}/" + id, {}, function(data, status) {
                $("#exampleModalLabel").html('Edit Pegawai');
                $("#page").html(data);
                $('#exampleModal').modal('show');
            })
        }

        function update(id) {
            var pegawai_nama = $("#pegawai_nama").val();
            var pegawai_jabatan = $("#pegawai_jabatan").val();
            var pegawai_umur = $("#pegawai_umur").val();
            var pegawai_alamat = $("#pegawai_alamat").val();
            $.ajax({
                type: "get",
                url: "{{ url('update') }}/" + id,
                data: "pegawai_nama=" + pegawai_nama + "&pegawai_jabatan=" + pegawai_jabatan + "&pegawai_umur=" + pegawai_umur + "&pegawai_alamat=" + pegawai_alamat ,
                success: function(data) {
                    $("page").html('');
                    $(".btn-close").click();
                    read();
                }
            })
        }

        function destroy(id) {
            $.ajax({
                type: "get",
                url: "{{ url('destroy') }}/" + id,
                success: function(data) {
                    read();
                }
            })
        }
    </script>
</body>

</html>
