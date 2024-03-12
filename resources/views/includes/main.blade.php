<!-- Main -->
<main>
    <!-- Section Train -->
    <section id="train">
        <!-- Table -->
        <table class="table">
            <!-- Table Head -->
            <thead>
                <tr>
                    <th>Azienda</th>
                    <th>Codice Treno</th>
                    <th>Stazione di Partenza</th>
                    <th>Stazione di Arrivo</th>
                    <th>Orario di Partenza</th>
                    <th>Orario di Arrivo</th>
                    <th>Numero Carrozze</th>
                    <th>In Orario</th>
                    <th>Cancellato</th>
                </tr>
            </thead>
            <!-- Table Body -->
            <tbody>
                <!-- Foreach -->
                @foreach ($trains as $train)
                    <tr>
                        <td>{{$train->company}}</td>
                        <td>{{$train->train_code}}</td>
                        <td>{{$train->departure_station}}</td>
                        <td>{{$train->arrival_station}}</td>
                        <td>{{$train->departure_time}}</td>
                        <td>{{$train->arrival_time}}</td>
                        <td>{{$train->number_of_carriages}}</td>
                        <td>{{ $train->in_time == 1 ? 'Si' : 'No' }}</td>
                        <td>{{ $train->canceled == 1 ? 'Si' : 'No' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</main>