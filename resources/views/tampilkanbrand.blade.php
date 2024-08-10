@extends('layout.admin')

@section('content')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js" defer></script>

<div class="content-wrapper" style="background-color: rgb(255, 247, 247); padding: 20px;">
    <div class="container">
        <div class="card shadow-sm" style="background-color: rgba(255, 255, 255, 0.9);">
            <div class="card-body">
                <div class="card" style="color:rgb(163, 75, 102); box-shadow: 5px 6px 12px rgb(219, 217, 251); background-color: rgba(255, 255, 255, 0.9); padding: 20px;">
                    <h2 class="text-center mb-5 mt-5" style="font-family: 'Quintessential', cursive;"><b>Edit Data Konten Video</b></h2>
                </div>
                <ol class="breadcrumb mb-4" style="background-color:  rgba(255, 255, 255, 0.9)">
                  <li class="breadcrumb-item"><a href="/brand" style="color:rgb(163, 75, 102)">Data Konten Video</a></li>
                  <li class="breadcrumb-item active" style="color:rgb(201, 167, 167)">Edit Data Konten Video</li>
              </ol>
                <form action="/updatebrand/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Jenis Brand</label>
                        <input type="text" name="name" class="form-control" value="{{ $data->name }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="link" class="form-label">Link</label>
                        <input type="text" class="form-control" name="link" value="{{ $data->link }}" required>
                    </div>
                  
                    <button type="submit" class="btn btn-primary" style="background-color:rgb(163, 75, 102); color: white;">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('styles')
<style>
    .content-wrapper {
        padding: 20px;
    }

    .card {
        margin-top: 20px;
    }

    .card-body {
        padding: 30px;
    }

    .form-label {
        color:rgb(163, 75, 102);
    }

    .btn-primary {
        background-color: rgb(163, 75, 102);
        color: white;
        border: none;
    }

    @media (max-width: 992px) {
        .card-body {
            padding: 20px;
        }
    }

    @media (max-width: 768px) {
        .card-body {
            padding: 10px;
        }

        .card {
            margin-top: 10px;
        }

        .form-label {
            font-size: 14px;
        }
    }
</style>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js" defer></script>
@endsection
