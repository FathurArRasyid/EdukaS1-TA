@extends('adPanel.layouts.main')

@section('container-header')
    <h1>Upload Video</h1>
@endsection

@section('container')
    <div class="table-responsive col-lg-8">
        <a href="/adPanel/video/create">
            <button class="btn btn-primary">Upload Video</button>
        </a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">Judul Video</th>
                    <th scope="col">Fakultas</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @if($videos!=null)
                    @foreach ($videos as $snapshot)
                        <tr>
                            <td>{{ $snapshot['Judul_Video'] }}</td>
                            <td>{{ $snapshot['Fakultas'] }}</td>
                            <td>{{ $snapshot['Jurusan'] }}</td>
                            <td>{{ $snapshot['Harga'] }}</td>
                            <td><a href="/adPanel/video/{{ $snapshot['Video'] }}/edit" class="btn btn-warning">Edit</a></td>
                            <td><a href="#" class="btn btn-danger">Delete</a></td>
                        </tr>
                    @endforeach
                @else
                <tr>
                    <td>video don't exist</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection