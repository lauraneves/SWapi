@extends('layouts.app')

@section('content')   
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Clima</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($response->results as $planet)
                <tr>
                    <td>{{$planet->name}}</td>
                    <td>{{$planet->climate}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="pagination">
        <div class="btn-group">
            <?php for($i = 1; $i <= $number_pages; $i++)
            {
                echo "<a href='/planets/index.php?page=$i'>".$i."</a>"; 
            }?>
            {{-- <a href="/planets-page" type="button">Next</a> --}}
        </div>
    </div>
@endsection