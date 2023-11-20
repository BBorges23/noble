@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<div class="container">
    <br>
    <h3 class="text-center">Registro De Ponto</h3>

    <table class="table   text-center table-secondary ">
        <thead class="table-dark  ">

        <tr class="rounded-pill" >
            <th scope="col">Nome</th>
            <th scope="col">Dia de Entrada</th>
            <th scope="col">Hora de Entrada</th>
            <th scope="col">Pausa</th>
            <th scope="col">Hora de Saida</th>
            <th scope="col">Dia da Saida</th>
            <th scope="col">Tempo</th>
            <th scope="col">Horas Extras</th>
        </tr>
        </thead>
        <tbody>
        @foreach($itens as $item)

            @if(\Carbon\Carbon::parse($item->entry_date)->isWeekend())
                <tr class="table-danger" >
                    <td > {{$item->user->name}} </td>
                    <td>{{ date('d-m-Y', strtotime( $item->entry_date))}}</td>
                    <td>Fim de semana</td>
                    <td>Fim de semana</td>
                    <td>Fim de semana</td>
                    <td>Fim de semana</td>
                    <td>Fim de semana</td>

                    <td>{{$item->getOverTime()}} h</td>
                </tr>
            @else
                <tr>
                    <td>{{$item->user->name}} </td>
                    <td>{{ date('d-m-Y', strtotime( $item->entry_date))}}</td>
                    <td>{{$item->entry_hour}}</td>
                    <td>{{$item->break_entry ." - ". $item->break_exit}}</td>
                    <td>{{$item->exit_hour}}</td>
                    <td>{{ date('d-m-Y', strtotime($item->exit_date)) }}</td>
                    <td class="{{$item->getHours() < "08:00" ? "text-danger" : "text-success"}}">{{$item->getHours()}} h</td>
                    <td>{{$item->getOverTime()}} h</td>
                </tr>
            @endif

        @endforeach
        </tbody>
    </table>
</div>
