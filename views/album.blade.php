@extends('layout.base')

@section('content')
    <main>
        <div class="container pt-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Library</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                </ol>
            </nav>
            <h1>Album name</h1>


            <div class="row">
                <div class="col-4"><img src="https://placeimg.com/360/360/nature" class="img-fluid img-thumbnail mb-4" /></div>
                <div class="col-4"><img src="https://placeimg.com/360/360/nature" class="img-fluid img-thumbnail mb-4" /></div>
                <div class="col-4"><img src="https://placeimg.com/360/360/nature" class="img-fluid img-thumbnail mb-4" /></div>
                <div class="col-4"><img src="https://placeimg.com/360/360/nature" class="img-fluid img-thumbnail mb-4" /></div>
                <div class="col-4"><img src="https://placeimg.com/360/360/nature" class="img-fluid img-thumbnail mb-4" /></div>
                <div class="col-4"><img src="https://placeimg.com/360/360/nature" class="img-fluid img-thumbnail mb-4" /></div>

            </div>

        </div>


    </main>
@endsection
