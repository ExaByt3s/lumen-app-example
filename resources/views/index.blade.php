@extends('layouts.app')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-5">
                    <h1>Анализ страницы</h1>
                    <hr class="my-3">
                    <form action="/domains" method="post">
                        <div class="form-group">
                            <label for="page-url-input">Введите URL веб-страницы:</label>
                            <input type="text" name="name" class="form-control" id="page-url-input" placeholder="https://www.example.com" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Анализировать</button>
                    </form>
                </div>  
                <div class="col-md-7">
                    Здесь будет информация о странице
                </div>          
            </div>
        </div>
    </div>
@endsection