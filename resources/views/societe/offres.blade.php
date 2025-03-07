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
                <form class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="backDropModalTitle">Ajouter offre</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label for="start_city" class="form-label">Ville de départ</label>
                                <input type="text" id="start_city" name="start_city" class="form-control"
                                    placeholder="Ville de départ" required />
                            </div>
                            <div class="col-md-6">
                                <label for="end_city" class="form-label">Ville d'arrivée</label>
                                <input type="text" id="end_city" name="end_city" class="form-control"
                                    placeholder="Ville d'arrivée" required />
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label for="start_date" class="form-label">Date de départ</label>
                                <input type="date" id="start_date" name="start_date" class="form-control" required />
                            </div>
                            <div class="col-md-6">
                                <label for="end_date" class="form-label">Date d'arrivée</label>
                                <input type="date" id="end_date" name="end_date" class="form-control" required />
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label for="start_time" class="form-label">Heure de départ</label>
                                <input type="time" id="start_time" name="start_time" class="form-control" required />
                            </div>
                            <div class="col-md-6">
                                <label for="end_time" class="form-label">Heure d'arrivée</label>
                                <input type="time" id="end_time" name="end_time" class="form-control" required />
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label for="available_seats" class="form-label">Places disponibles</label>
                                <input type="number" id="available_seats" name="available_seats" class="form-control"
                                    min="0" required />
                            </div>
                            <div class="col-md-6">
                                <label for="total_seats" class="form-label">Nombre total de places</label>
                                <input type="number" id="total_seats" name="total_seats" class="form-control" min="0"
                                    required />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="description" class="form-label">Description</label>
                                <textarea id="description" name="description" class="form-control" rows="3"
                                    placeholder="Description de l'offre"></textarea>
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

<table class="table table-bordered mt-2 text-center align-middle">
    <thead>
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

    </tbody>
</table>

@endsection