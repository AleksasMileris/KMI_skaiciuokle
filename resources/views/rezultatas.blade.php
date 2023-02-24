@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Rezultatas</div>

                    <div class="card-body">
                        <form method="post">
                            <p><strong>Jūsų KMI yra: </strong>{{ $kmi }}</p>
                            <hr>
                            <a class="btn btn-success" href="{{ route('index') }}">Atgal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
