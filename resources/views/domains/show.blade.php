@extends('layouts.app')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">URL страницы</th>
                        <th scope="col">Добавлена</th>
                        <th scope="col">Обновлена</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">{{ $domain->id }}</th>
                        <td>{{ $domain->name }}</td>
                        <td>{{ $domain->created_at }}</td>
                        <td>{{ $domain->updated_at }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection