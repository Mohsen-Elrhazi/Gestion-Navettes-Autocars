@extends("layouts.societe")
@section("content")
<!-- Modal Backdrop -->
<div class="col-lg-4 col-md-3">
    <div class="mt">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#backDropModal">
            <i class="fa-solid fa-plus"></i> Ajouter
        </button>

        <!-- Modal -->
        <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <form class="modal-content" method="POST" action="{{ route('offres.store') }}">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="backDropModalTitle">Ajouter offre</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label for="start_city" class="form-label">Ville de départ</label>
                                <input type="text" id="start_city" name="start_city" class="form-control"
                                    placeholder="Ville de départ" />
                                @error('start_city')
                                <span class="text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="end_city" class="form-label">Ville d'arrivée</label>
                                <input type="text" id="end_city" name="end_city" class="form-control"
                                    placeholder="Ville d'arrivée" />
                                @error('end_city')
                                <span class="text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label for="start_date" class="form-label">Date de départ</label>
                                <input type="date" id="start_date" name="start_date" class="form-control" />
                                @error('start_date')
                                <span class="text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="end_date" class="form-label">Date d'arrivée</label>
                                <input type="date" id="end_date" name="end_date" class="form-control" />
                                @error('end_date')
                                <span class="text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label for="start_time" class="form-label">Heure de départ</label>
                                <input type="time" id="start_time" name="start_time" class="form-control" />
                                @error('start_time')
                                <span class="text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="end_time" class="form-label">Heure d'arrivée</label>
                                <input type="time" id="end_time" name="end_time" class="form-control" />
                                @error('end_time')
                                <span class="text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label for="available_seats" class="form-label">Places disponibles</label>
                                <input type="number" id="available_seats" name="available_seats" class="form-control" />
                                @error('available_seats')
                                <span class="text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="total_seats" class="form-label">Nombre total de places</label>
                                <input type="number" id="total_seats" name="total_seats" class="form-control" />
                                @error('total_seats')
                                <span class="text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="description" class="form-label">Description</label>
                                <textarea id="description" name="description" class="form-control" rows="3"
                                    placeholder="Description de l'offre"></textarea>
                                @error('description')
                                <span class="text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">
                            Fermer
                        </button>
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal d'édition -->
@foreach ($offres as $offre)
<div class="modal fade" id="editModal{{ $offre->id }}" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <form class="modal-content" method="POST" action="{{ route('offres.update', $offre) }}">
            @csrf
            @method('PUT')
            <div class="modal-header">
                <h5 class="modal-title">Modifier l'offre</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Champs du formulaire pré-remplis -->
                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label for="start_city" class="form-label">Ville de départ</label>
                        <input type="text" id="start_city" name="start_city" class="form-control"
                            value="{{ $offre->start_city }}" />
                    </div>
                    <div class="col-md-6">
                        <label for="end_city" class="form-label">Ville d'arrivée</label>
                        <input type="text" id="end_city" name="end_city" class="form-control"
                            value="{{ $offre->end_city }}" />
                    </div>
                </div>
                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label for="start_date" class="form-label">Date de départ</label>
                        <input type="date" id="start_date" name="start_date" class="form-control"
                            value="{{ $offre->start_date }}" />
                    </div>
                    <div class="col-md-6">
                        <label for="end_date" class="form-label">Date d'arrivée</label>
                        <input type="date" id="end_date" name="end_date" class="form-control"
                            value="{{ $offre->end_date }}" />
                    </div>
                </div>
                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label for="start_time" class="form-label">Heure de départ</label>
                        <input type="time" id="start_time" name="start_time" class="form-control"
                            value="{{ $offre->start_time }}" />
                    </div>
                    <div class="col-md-6">
                        <label for="end_time" class="form-label">Heure d'arrivée</label>
                        <input type="time" id="end_time" name="end_time" class="form-control"
                            value="{{ $offre->end_time }}" />
                    </div>
                </div>
                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label for="available_seats" class="form-label">Places disponibles</label>
                        <input type="number" id="available_seats" name="available_seats" class="form-control"
                            value="{{ $offre->available_seats }}" />
                    </div>
                    <div class="col-md-6">
                        <label for="total_seats" class="form-label">Nombre total de places</label>
                        <input type="number" id="total_seats" name="total_seats" class="form-control"
                            value="{{ $offre->total_seats }}" />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <label for="description" class="form-label">Description</label>
                        <textarea id="description" name="description" class="form-control" rows="3"
                            placeholder="Description de l'offre">{{ $offre->description }}</textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
            </div>
        </form>
    </div>
</div>
@endforeach


<!-- affichage des offres -->
<table class="table table-bordered mt-2 text-center align-middle">
    <thead>
        <tr>
            <th>Start City</th>
            <th>End City</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Start Time</th>
            <th>End Time</th>
            <th>Available Seats</th>
            <th>Total Seats</th>
            <th>Actions</th>
            <!-- <th>Description</th> -->
        </tr>
    </thead>
    <tbody>
        @if(count($offres) > 0)
        @foreach($offres as $offre)
        <tr>
            <td>{{ $offre->start_city }}</td>
            <td>{{ $offre->end_city }}</td>
            <td>{{ $offre->start_date }}</td>
            <td>{{ $offre->end_date }}</td>
            <td>{{ $offre->start_time }}</td>
            <td>{{ $offre->end_time }}</td>
            <td>{{ $offre->available_seats }}</td>
            <td>{{ $offre->total_seats }}</td>
            <!-- <td>{{ $offre->description }}</td> -->
            <td>
                <a class="btn btn-warning" href="{{ route('offres.edit',$offre) }}" data-bs-toggle="modal"
                    data-bs-target="#editModal{{ $offre->id }}">Edit</a>
                <form action="{{ route('offres.destroy', $offre) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        @else
        <tr>
            <td colspan="9" class="text-center">Aucune offre disponible</td>
        </tr>
        @endif
    </tbody>

</table>

@endsection