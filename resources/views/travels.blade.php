@extends("layouts.main")

@section("content")
<div class="container">
  <h2>Viaggi</h2>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#ID</th>
        <th scope="col">Città</th>
        <th scope="col">Paese</th>
        <th scope="col">Data di partenza</th>
        <th scope="col">Durata viaggio</th>
        <th scope="col">Costo</th>
      </tr>
    </thead>
    <tbody>

        @forelse ($travels as $travel)
        <tr>
            <th scope="row">{{ $travel->id }}</th>
            <td>{{ $travel->citta }}</td>
            <td>{{ $travel->paese }}</td>
            <td>{{ $travel->data_di_partenza }}</td>
            <td>{{ $travel->durata_viaggio }}</td>
            <td>{{ $travel->costo }}</td>
        </tr>
        @empty
            <h3>Nessun risultato trovato</h3>
        @endforelse





    </tbody>
  </table>
</div>
@endsection