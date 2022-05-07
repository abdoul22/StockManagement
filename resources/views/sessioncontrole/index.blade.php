@extends('layout.index')

@section('content')
    <div class="container">

        <div>
            <h1>This is session controle page</h1>
            <table class="table" style="margin-top: 20px;">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">num</th>
                        <th scope="col">Produit</th>
                        <th scope="col">prix</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($controles as $controle)
                        <tr>
                            @php
                                $i = 0
                            @endphp
                            <th scope="row">{{++$i}}</th>
                            <td>{{$controle->name}}</td>
                            <td>{{$controle->price}}</td>
                            <td>
                                <a href="{{route('sessioncontrole.show')}}">voir</a>
                                <a href="{{route('sessioncontrole.edit')}}">modifier</a>
                                <form action="{{route('sessioncontrole.destroy')}}">
                                    @csrf
                                    @method('DELETE')
                                    <button>Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            {{-- {!!$controle->links()!!} --}}
        </div>
        {{-- card --}}
        <div class="row mt-5">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="{{route('sessioncontrole.create')}}" class="btn btn-primary">Creer une session</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- Endcard --}}
    </div>
@endsection
