@extends('layouts.app')
@section('content')
<div class="row">
                <div class="col-md-8 order-md-1">
                    <h4 class="mb-3">NOUVEAU DSO</h4>
                    <form class="needs-validation" method="post" action="#">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                               
                                <label for="id_user">Nom commercial</label>
                                <input type="text" class="form-control" id="id_user" name="id_user" placeholder=" " value="" required>

                                <!-- Champ généré automatiquement par le timestamp de Laravel -->
                                <!-- <label for="firstName">Date création de fiche</label>
                                <input type="date" class="form-control" id="dateCreation" placeholder="" value="" required> -->

                                <hr class="mb-4">
                                
                                <label for="date_demande">Date 1ère demande client</label>
                                <input type="date" class="form-control" id="date_demande" name="date_demande" placeholder="" value="" required>

                                <label for="date_rep">Date réponse souhaitée</label>
                                <input type="date" class="form-control" id="date_rep" name="date_rep" placeholder="" value="" required>

                                <hr class="mb-4">
                                
                                <label for="date_envoi">Date d'envoi de l'offre</label>
                                <input type="date" class="form-control" id="date_envoi" name="date_envoi" placeholder="" value="" required>

                                <label for="date_livraison">Date livraison souhaitée</label>
                                <input type="date" class="form-control" id="date_livraison" name="date_livraison" placeholder="" value="" required>

                                
                                <div class="py-3">
                                    <button class="btn btn-primary btn-lg btn-block" type="submit">Continuer</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
@endsection