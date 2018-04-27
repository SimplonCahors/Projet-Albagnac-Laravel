@extends('layouts.app')

@section('title', 'Devis')

@section('content')

	@include('sous_nav')
	@include('breadcrumb')

	<section id="a">

		<form method="POST" action="">
			@csrf

			<div id="accordion">

				{{-- 1-ENVIRONNEMENT MACHINE --}}
				<div class="card">

					<div class="card-header" id="headingOne">
						<h5 class="mb-0">
							<a role="button"  class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								ENVIRONNEMENT MACHINE
							</a>
						</h5>
					</div>

					<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">

						<div class="card-body">

							{{-- ================================ AMONT ========================================= --}}
							<div class="a form-group">
								<label for="type_machine_amont">Type de machine AMONT</label>
								<input type="text" class="form-control" name="type_machine_amont" value="{{ $data1->type_machine_amont }}">
							</div>

							<div class="a form-group">
								<label for="type_convoy_amont">Type de convoyage AMONT</label>
								<input type="text" class="form-control" name="type_convoy_amont" value="{{ $data1->type_convoy_amont }}">
							</div>

							<div class="a form-group">
								<label for="categorie_client">Transfert AMONT</label>
								<select class="form-control" name="transfert_amont" value="{{ $data1->transfert_amont }}">
									<option selected>Choisir</option>
									<option value="Plaque de glissement">Plaque de glissement</option>
									<option value="À rouleaux">À rouleaux</option>
									<option value="À courroies motorisées">À courroies motorisées</option>
									<option value="Jointif">Jointif</option>
									<option value="Aucun">Aucun</option>
								</select>
							</div>

							<div class="a form-group">
								<label for="arrivee_prod_amont">Arrivée produits / AMONT</label>
								<select class="form-control" name="arrivee_prod_amont" value="{{ $data1->arrivee_prod_amont }}">
									<option selected>Choisir</option>
									<option value="Cadencé">Cadencé</option>
									<option value="Par Vague">Par Vague</option>
									<option value="Aléatoire">Aléatoire</option>
									<option value="Manuel">Manuel</option>
								</select>
							</div>
							<hr>

							{{-- ================================ AVAL ========================================= --}}
							<div class="a form-group">
								<label for="type_machine_aval">Type de machine AVAL</label>
								<input type="text" class="form-control" name="type_machine_aval" value="{{ $data1->type_machine_aval }}">
							</div>

							<div class="a form-group">
								<label for="type_convoy_aval">Type de convoyage AVAL</label>
								<input type="text" class="form-control" name="type_convoy_aval" value="{{ $data1->type_convoy_aval }}">
							</div>

							<div class="a form-group">
								<label for="transfert_aval">Transfert AVAL</label>
								<select class="form-control" name="transfert_aval" value="{{ $data1->transfert_aval }}">
									<option selected>Choisir</option>
									<option value="Plaque de glissement">Plaque de glissement</option>
									<option value="À rouleaux">À rouleaux</option>
									<option value="À courroies motorisées">À courroies motorisées</option>
									<option value="Jointif">Jointif</option>
									<option value="Aucun">Aucun</option>
								</select>
							</div>

							<div class="a form-group">
								<label for="sortie_prod_aval">Sortie produits / AVAL</label>
								<input type="text" class="form-control" name="sortie_prod_aval" value="{{ $data1->sortie_prod_aval }}">
							</div>
							<hr>

							{{-- ================================ SENS MACHINE ========================================= --}}
							<div class="a form-group">
								<label for="sens_machine">Sens de la machine</label>
								<select class="form-control" name="sens_machine" value="{{ $data1->sens_machine }}">
									<option selected>Choisir</option>
									<option value="Gauche/Droite">Gauche/Droite</option>
									<option value="Droite/Gauche">Droite/Gauche</option>
								</select>
							</div>


							<div class="a form-group">
								<label for="cadence_souhaitee">Cadence souhaitée (Pdts/h)</label>
								<input type="number" class="form-control" name="cadence_souhaitee" min="0" value="{{ $data1->cadence_souhaitee }}">
							</div>

							<div class="a form-group">
								<label for="milieu">Milieu</label>
								<select class="form-control" name="milieu" value="{{ $data1->milieu }}">
									<option selected>Choisir</option>
									<option value="Salle blanche">Salle blanche</option>
									<option value="Salle grise">Salle grise</option>
									<option value="Normale">Normale</option>
									<option value="Agressif">Agressif</option>
									<option value="Poussiéreux">Poussiéreux</option>
								</select>
							</div>
							<hr>

							{{-- ================================ HAUTEUR CONVOYEUR ========================================= --}}
							<div class="a form-group">
								<label for="hauteur_convoyeur">Hauteur de convoyeur (mm)</label>
								<input type="number" class="form-control" name="hauteur_convoyeur" min="0" value="{{ $data1->hauteur_convoyeur }}">
							</div>

							<div class="a form-group">
								<label for="espace_au_sol">Espace disponible au sol (m x m)</label>
								<input type="number" class="form-control" name="espace_au_sol" min="0" value="{{ $data1->espace_au_sol }}">
							</div>

							<div class="a form-group">
								<label for="temp_local">T° du local de travail (°C)</label>
								<input type="number" class="form-control" name="temp_local" value="{{ $data1->temp_local }}">
							</div>
							<hr>						

							{{-- ================================ ASSERVISSEMENT========================================= --}}
							<label>Asservissement</label>
							
							<div class="a form-group">
								<label for="comm_machine_amont">Communication avec machine amont</label>
								<select class="form-control" name="comm_machine_amont" value="{{ $data2->comm_machine_amont }}">
									<option selected>Choisir</option>
									<option value="Oui">Oui</option>
									<option value="Non">Non</option>
								</select>
							</div>

							<div class="a form-group">
								<label for="comm_machine_aval">Communication avec machine aval</label>
								<select class="form-control" name="comm_machine_aval" value="{{ $data2->comm_machine_aval }}">
									<option selected>Choisir</option>
									<option value="Oui">Oui</option>
									<option value="Non">Non</option>
								</select>
							</div>

							<div class="a form-group">
								<label for="coupure_bourrage">Coupure sur bourrage</label>
								<select class="form-control" name="coupure_bourrage" value="{{ $data2->coupure_bourrage }}">
									<option selected>Choisir</option>
									<option value="Oui">Oui</option>
									<option value="Non">Non</option>
								</select>
							</div>

							<div class="a form-group">
								<label for="descriptif">Descriptif :</label>
								<textarea class="form-control" name="descriptif" rows="3" placeholder="descriptif" value="{{ $data2->descriptif }}">
								</textarea>
							</div>
						</div>

					</div>

				</div>

				{{-- 2-ÉNERGIES DISPONIBLES --}}
				<div class="card">

					<div class="card-header" id="headingTwo">
						<h5 class="mb-0">
							<a role="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								ÉNERGIES DISPONIBLES
							</a>
						</h5>
					</div>

					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">

						<div class="card-body">

								<label>Tension</label>
							
							<div class="a form-group">
								<label for="tension_elec">Électrique</label>
								<select class="form-control" name="tension_elec" value="{{ $data3->tension_elec }}">
									<option selected>Choisir</option>
									<option value="380 V Triphasé">380 V Triphasé</option>
									<option value="220 V monophasé">220 V monophasé</option>
								</select>
							</div>

							<div class="a form-group">
								<label for="reg_de_neutre">Régime de neutre</label>
								<select class="form-control" name="reg_de_neutre" value="{{ $data3->reg_de_neutre }}">
									<option selected>Choisir</option>
									<option value="IT">IT</option>
									<option value="TT">TT</option>
									<option value="TNC">TNC</option>
									<option value="TNS">TNS</option>
									<option value="Pas de neutre">Pas de neutre</option>
								</select>
							</div>
							<hr>
							
							<label>Pneumatique</label>
							<div class="a form-group">
								<label for="debit_m3h">Débit m3/h</label>
								<input type="number" class="form-control" name="debit_m3h" value="{{ $data3->debit_m3h }}">
							</div>

							<div class="a form-group">
								<label for="pression_bar">Pression (bar)</label>
								<input type="number" class="form-control" name="pression_bar" value="{{ $data3->pression_bar }}">
							</div>

						</div>

					</div>

				</div>

				{{-- 3-MODE DE CONTRÔLE DEMANDÉ PAR LE CLIENT --}}
				<div class="card">

					<div class="card-header" id="headingThree">
						<h5 class="mb-0">
							<a role="button"  class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								MODE DE CONTRÔLE DEMANDÉ PAR LE CLIENT
							</a>
						</h5>
					</div>

					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">

						<div class="card-body">

							<div class="a form-group">
								<label for="controle_conformite">Controle de conformité suivant spécifications</label>
								<select class="form-control" name="controle_conformite" value="{{ $data4->controle_conformite }}">
									<option selected>Choisir</option>
									<option value="1">Oui</option>
									<option value="0">Non</option>
								</select>
							</div>

							<div class="a form-group">
								<label for="demande_fat">Demande de FAT suivant spécifications</label>
								<select class="form-control" name="demande_fat" value="{{ $data4->demande_fat }}">
									<option selected>Choisir</option>
									<option value="1">Oui</option>
									<option value="0">Non</option>
								</select>
							</div>

							<div class="a form-group">
								<label for="date_desiree_fat">Date désirée de demande de FAT suivant spécifications:</label>
								<input type="date" class="form-control" name="date_desiree_fat" value="{{ $data4->date_desiree_fat }}">
							</div>

							<div class="a form-group">
								<label for="demande_cem">Demande de CEM (Electromagnetisme)</label>
								<select class="form-control" name="demande_cem" value="{{ $data4->demande_cem }}">
									<option selected>Choisir</option>
									<option value="1">Oui</option>
									<option value="0">Non</option>
								</select>
							</div>

							<div class="a form-group">
								<label for="demande_certif_ext">Demande de certification externe</label>
								<select class="form-control" name="demande_certif_ext" value="{{ $data4->demande_certif_ext }}">
									<option selected>Choisir</option>
									<option value="1">Oui</option>
									<option value="0">Non</option>
								</select>
							</div>

						</div>

					</div>

				</div>

				{{-- 4-INSTALLATION ET MISE EN ROUTE --}}
				<div class="card">

					<div class="card-header" id="headingFour">
						<h5 class="mb-0">
							<a role="button"  class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								INSTALLATION ET MISE EN ROUTE
							</a>
						</h5>
					</div>

					<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">

						<div class="card-body">

							<div class="a form-group">
								<label for="install_client">Installation chez le client</label>
								<select class="form-control" name="install_client" value="{{ $data5->install_client }}">
									<option selected>Choisir</option>
									<option value="1">Oui</option>
									<option value="0">Non</option>
								</select>
							</div>

							<div class="a form-group">
								<label for="plan_prevention">Plan de prévention pour intervenir sur site</label>
								<select class="form-control" name="plan_prevention" value="{{ $data5->plan_prevention }}">
									<option selected>Choisir</option>
									<option value="1">Oui</option>
									<option value="0">Non</option>
								</select>
							</div>

							<div class="a form-group">
								<label for="mise_en_route">Mise En Route de la machine</label>
								<select class="form-control" name="mise_en_route" value="{{ $data5->mise_en_route }}">
									<option selected>Choisir</option>
									<option value="1">Oui</option>
									<option value="0">Non</option>
								</select>
							</div>

							<div class="a form-group">
								<label for="demande_certif_ext">Demande de certification externe</label>
								<select class="form-control" name="demande_certif_ext" value="{{ $data5->demande_certif_ext }}">
									<option selected>Choisir</option>
									<option value="1">Oui</option>
									<option value="0">Non</option>
								</select>
							</div>

						</div>

					</div>

				</div>

				{{-- 5-FORMATION --}}
				<div class="card">

					<div class="card-header" id="headingFive">
						<h5 class="mb-0">
							<a role="button"  class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
								FORMATION
							</a>
						</h5>
					</div>

					<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">

						<div class="card-body">

							<div class="a form-group">
								<label for="sur_machine">Sur machine</label>
								<select class="form-control" name="sur_machine" value="{{ $data6->sur_machine }}">
									<option selected>Choisir</option>
									<option value="1">Oui</option>
									<option value="0">Non</option>
								</select>
							</div>

							<div class="a form-group">
								<label for="en_salle">En salle</label>
								<select class="form-control" name="en_salle" value="{{ $data6->en_salle }}">
									<option selected>Choisir</option>								
									<option value="1">Oui</option>
									<option value="0">Non</option>
								</select>
							</div>

							<div class="a form-group">
								<label for="nombre_jours">Nombre de jours</label>
								<input type="number" class="form-control" name="nombre_jours" min="0" value="{{ $data6->nombre_jours }}">
							</div>

							<div class="a form-group">
								<label for="nombre_personnes">Nombre de personnes</label>
								<input type="number" class="form-control" name="nombre_personnes" min="0" value="{{ $data6->nombre_personnes }}">
							</div>

						</div>

					</div>

				</div>

				{{-- 6-NOTICE --}}
				<div class="card">

					<div class="card-header" id="headingSix">
						<h5 class="mb-0">
							<a role="button"  class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
								NOTICE
							</a>
						</h5>
					</div>

					<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">

						<div class="card-body">

							<div class="a form-group">
								<label for="papier">Papier</label>
								<select class="form-control" name="papier" value="{{ $data7->papier }}">
									<option selected>Choisir</option>
									<option value="1">Oui</option>
									<option value="0">Non</option>
								</select>
							</div>

							<div class="a form-group">
								<label for="quantite">Quantité</label>
								<input type="___" class="form-control" name="quantite" min="0" value="{{ $data7->quantite }}">
							</div>


							<div class="a form-group">
								<label for="cd">CD</label>
								<select class="form-control" name="cd" value="{{ $data7->cd }}">
									<option selected>Choisir</option>
									<option value="1">Oui</option>
									<option value="0">Non</option>
								</select>
							</div>

							<div class="a form-group">
								<label for="numerique">Numérique</label>
								<select class="form-control" name="numerique" value="{{ $data7->numerique }}">
									<option selected>Choisir</option>
									<option value="1">Oui</option>
									<option value="0">Non</option>
								</select>
							</div>

							<div class="a form-group">
								<label for="langue">Langue</label>
								<select class="form-control" name="langue" value="{{ $data7->langue }}">
									<option selected>Choisir</option>
									<option value="Allemand">Allemand</option>
									<option value="Anglais">Anglais</option>
									<option value="Chinois">Chinois</option>
									<option value="Espagnole">Espagnole</option>
									<option value="Français">Français</option>
									<option value="Italien">Italien</option>
									<option value="Polonais">Polonais</option>
									<option value="Portugais">Portugais</option>
									<option value="Russe">Russe</option>
								</select>
							</div>

						</div>

					</div>

				</div>

				{{-- 7-TRANSPORT --}}
				<div class="card">

					<div class="card-header" id="headingSeven">
						<h5 class="mb-0">
							<a role="button"  class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
								TRANSPORT
							</a>
						</h5>
					</div>

					<div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">

						<div class="card-body">

							<div class="a form-group">
								<label for="charge_albagnac">Transport à la charge de Albagnac</label>
								<select class="form-control" name="charge_albagnac" value="{{ $data8->charge_albagnac }}">
									<option selected>Choisir</option>
									<option value="1">Oui</option>
									<option value="0">Non</option>
								</select>
							</div>

							<div class="a form-group">
								<label for="charge_client">Transport à la charge du client</label>
								<select class="form-control" name="charge_client" value="{{ $data8->charge_client }}">
									<option selected>Choisir</option>
									<option value="1">Oui</option>
									<option value="0">Non</option>
								</select>
							</div>

						</div>

					</div>

				</div>
				
				<button type="button" class="btn btn-primary" type="submit">Valider ></button>

			</div>

		</form>

	</section>
	
@endsection