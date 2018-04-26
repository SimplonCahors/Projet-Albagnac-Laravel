@extends('layouts.app')
@section('content')
<div class="row">
                <div class="col-md-8 order-md-1">
                    <h4 class="mb-3">NOUVEAU DSO balala</h4>
                    <form class="needs-validation" method="post" action="admin-info">
                        <div class="row">
                            <div class="col-md-6 mb-3">

                                <label for="firstName">Nom commercial</label>
                                <input type="text" class="form-control" id="nomCommercial" placeholder="" value="" required>

                                <label for="firstName">Date création de fiche</label>
                                <input type="date" class="form-control" id="dateCreation" placeholder="" value="" required>

                                <hr class="mb-4">
                                
                                <label for="firstName">Date 1ère demande client</label>
                                <input type="date" class="form-control" id="dateDemande" placeholder="" value="" required>

                                <label for="firstName">Date réponse souhaitée</label>
                                <input type="date" class="form-control" id="dateReponse" placeholder="" value="" required>

                                <hr class="mb-4">
                                
                                <label for="firstName">Date 1ère demande client</label>
                                <input type="date" class="form-control" id="dateDemande" placeholder="" value="" required>

                                <label for="firstName">Date réponse souhaitée</label>
                                <input type="date" class="form-control" id="dateReponse" placeholder="" value="" required>

                                
                                <div class="py-3">
                                    <button class="btn btn-primary btn-lg btn-block" type="submit">Continuer</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
@endsection