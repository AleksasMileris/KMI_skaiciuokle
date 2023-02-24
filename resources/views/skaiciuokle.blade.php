@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">KMI Skaiciuokle</div>

                    <div class="card-body">
                            <form method="post" action="{{ route("rezultatas") }}">
                                @csrf
                                <div class="mb-3">
                                    <label class="label-control">Iveskite Svori</label>
                                    <input class="form-control" name="weight" placeholder="0">
                                    <label class="label-control">Iveskite ugi centimetrais</label>
                                    <input class="form-control" name="tall" placeholder="0">
                                </div>
                                <button class="btn btn-success">Skaičiuoti</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
