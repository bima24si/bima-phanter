</nav>

        <section id="content" class="container">
            <div class="row">
                <div class="col-md d-flex justify-content-center align-items-center">

                    {{-- Duluw, list & card --}}
                    <div class="card">
                        <div class="card-body">
                            <h3 class="mb-md-3">{{$name}}</h3>

                            <ul class="list-group mb-3">
                                <li class="list-group-item">Umur : {{$my_age}}</li>

                                <li class="list-group-item">Hobi : {{ implode(' . ', $hobbies) }}</li>

                                <li class="list-group-item">Tanggal Wisuda : {{$tgl_harus_wisuda}}</li>
                                <li class="list-group-item">Sisa Belajar : {{$time_to_study_left}} Tahun</li>
                                <li class="list-group-item">Semester : {{$current_semester}}</li>
                                <li class="list-group-item">Wejangan : {{$kata}}</li>
                                <li class="list-group-item">Cita-Cita : {{$future_goal}}</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>
