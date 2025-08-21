<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Product</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #a0c4ff, #4dabf7);
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #1e3a8a;
            font-weight: 600;
            margin-bottom: 40px;
        }

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px 15px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #2c3e50;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        img {
            border-radius: 5px;
            width: 100%; 
            max-width: 150px; 
            height: auto; 
            object-fit: cover;
            margin: 5px;
        }

    @media (max-width: 576px) {
        img {
            max-width: 120px;
             }
        }


        .btn {
            padding: 8px 12px;
            margin: 2px;
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-update {
            background-color: #1abc9c;
        }

        .btn-delete {
            background-color: #e74c3c;
        }

        .btn-update:hover {
            background-color: #16a085;
        }

        .btn-delete:hover {
            background-color: #c0392b;
        }

      
        @media (max-width: 576px) {
            .btn-update, .btn-delete {
                padding: 6px 10px;
                font-size: 12px;
            }

            td img {
                max-width: 80px;
            }
        }
    </style>
</head>
<body>

    <h2><i data-feather="box"></i> Daftar Product</h2>

    <div class="table-wrapper">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                    <th>Quantiti</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{$product->name}}</td>
                        <td>Rp{{ number_format($product->price, 0, ',', '.') }}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->stock}}</td>
                        <td>
                            <img src="/gambar/{{$product->image}}" alt="Product Image" width="200px">
                        </td>
                        <td>
                            <a href="{{route('edit_view', $product->id)}}" class="btn btn-update">
                                <i data-feather="edit"></i> Update
                            </a>
                            <a href="{{route('delete_product', $product->id)}}" class="btn btn-delete" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                <i data-feather="trash-2"></i> Delete
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        feather.replace();
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
