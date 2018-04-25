 /* |------ | Section D-1 |------ */ /*================================ AMONT =========================================*/

<div class="Class__Input__Div">
    <label for="type_machine_amont">Type de machine AMONT</label>
    <input type="text" class="Class__Input" id="type_machine_amont" name="type_machine_amont">
</div>

<div class="Class__Input__Div">
    <label for="type_convoy_amont">Type de convoyage AMONT</label>
    <input type="text" class="Class__Input" id="type_convoy_amont" name="type_convoy_amont">
</div>

<div class="Class__Select__Div">
    <button id="___">Transfert AMONT</button>
    <select class="Class__Select" id="transfert_amont" name="transfert_amont">
        <option selected>Choisir</option>
        <option value="1">Plaque de glissement</option>
        <option value="2">A rouleaux</option>
        <option value="3">A courroies motorisées</option>
        <option value="4">Jointif</option>
        <option value="5">Aucun</option>
    </select>
</div>

<div class="Class__Select__Div">
    <button id="___">Arrivée produits / AMONT</button>
    <select class="Class__Select" id="arrivee_prod_amont" name="arrivee_prod_amont">
        <option selected>Choisir</option>
        <option value="1">Cadencé</option>
        <option value="2">Par Vague</option>
        <option value="3">Aléatoire</option>
        <option value="4">Manuel</option>
    </select>
</div>


/*================================ AVAL =========================================*/
<div class="Class__Input__Div">
    <label for="type_machine_aval">Type de machine AVAL</label>
    <input type="text" class="Class__Input" id="type_machine_aval" name="type_machine_aval">
</div>

<div class="Class__Input__Div">
    <label for="type_convoy_aval">Type de convoyage AVAL</label>
    <input type="text" class="Class__Input" id="type_convoy_aval" name="type_convoy_aval">
</div>

<div class="Class__Select__Div">
    <button id="___">Transfert AVAL</button>
    <select class="Class__Select" id="transfert_aval" name="transfert_aval">
        <option selected>Choisir</option>
        <option value="1">Plaque de glissement</option>
        <option value="2">A rouleaux</option>
        <option value="3">A courroies motorisées</option>
        <option value="4">Jointif</option>
        <option value="5">Aucun</option>
    </select>
</div>

<div class="Class__Input__Div">
    <label for="sortie_prod_aval">Sortie produits / AVAL</label>
    <input type="text" class="Class__Input" id="sortie_prod_aval" name="sortie_prod_aval">
</div>


/*================================ SENS MACHINE =========================================*/

<div class="Class__Select__Div">
    <button id="___">Sens de la machine</button>
    <select class="Class__Select" id="sens_machine" name="sens_machine">
        <option selected>Choisir</option>
        <option value="1">Gauche/Droite</option>
        <option value="2">Droite/Gauche</option>
    </select>
</div>


<div class="Class__Input__Div">
    <label for="cadence_souhaitee">Cadence souhaitée (Pdts/h)</label>
    <input type="number" class="Class__Input" id="cadence_souhaitee" name="cadence_souhaitee">
</div>

<div class="Class__Select__Div">
    <button id="___">Milieu</button>
    <select class="Class__Select" id="milieu" name="milieu">
        <option selected>Choisir</option>
        <option value="1">Salle blanche</option>
        <option value="2">Salle grise</option>
        <option value="3">Normale</option>
        <option value="4">Agressif</option>
        <option value="5">Poussiéreux</option>
    </select>
</div>


/*================================ HAUTEUR CONVOYEUR =========================================*/

<div class="Class__Input__Div">
    <label for="hauteur_convoyeur">Hauteur de convoyeur (mm)</label>
    <input type="number" class="Class__Input" id="hauteur_convoyeur" name="hauteur_convoyeur">
</div>

<div class="Class__Input__Div">
    <label for="espace_au_sol">Espace disponible au sol (m x m)</label>
    <input type="number" class="Class__Input" id="espace_au_sol" name="espace_au_sol">
</div>

<div class="Class__Input__Div">
    <label for="temp_local">T° du local de travail (°C)</label>
    <input type="number" class="Class__Input" id="temp_local" name="temp_local">
</div>



/* |------ | Section D-2 |------ */ /*================================ ASSERVISSEMENT=========================================*/


<div class="Class__Select__Div">
    <button id="___">Communication avec machine amont</button>
    <select class="Class__Select" id="comm_machine_amont" name="comm_machine_amont">
        <option selected>Choisir</option>
        <option value="1">Value1</option>
        <option value="2">Value2</option>
        <option value="3">Value3</option>
        <option value="4">Value4</option>
    </select>
</div>

<div class="Class__Select__Div">
    <button id="___">Communication avec machine aval</button>
    <select class="Class__Select" id="comm_machine_aval" name="comm_machine_aval">
        <option selected>Choisir</option>
        <option value="1">Value1</option>
        <option value="2">Value2</option>
        <option value="3">Value3</option>
        <option value="4">Value4</option>
    </select>
</div>

<div class="Class__Select__Div">
    <button id="___">Coupure sur bourrage</button>
    <select class="Class__Select" id="coupure_bourrage" name="coupure_bourrage">
        <option selected>Choisir</option>
        <option value="1">Value1</option>
        <option value="2">Value2</option>
        <option value="3">Value3</option>
        <option value="4">Value4</option>
    </select>
</div>

<div class="Class__Input__Div">
    <label for="descriptif">Descriptif :</label>
    <input type="text" class="Class__Input" id="descriptif" name="descriptif">
</div>



/* |------ | Section D-3 |------ */ /*================================ ENERGIES DISPONIBLES =========================================*/

<div class="Class__Select__Div">
    <button id="___">Tension</button>
    <select class="Class__Select" id="tension_elec" name="tension_elec">
        <option selected>Choisir</option>
        <option value="1">380 V Triphasé</option>
        <option value="2">220 V monophasé</option>
    </select>
</div>

<div class="Class__Select__Div">
    <button id="___">Régime de neutre</button>
    <select class="Class__Select" id="reg_de_neutre" name="reg_de_neutre">
        <option selected>Choisir</option>
        <option value="1">IT</option>
        <option value="2">TT</option>
        <option value="3">TNC</option>
        <option value="4">TNS</option>
        <option value="5">Pas de neutre</option>
    </select>
</div>

<div class="Class__Input__Div">
    <label for="debit_m3h">Débit m3/h</label>
    <input type="number" class="Class__Input" id="debit_m3h" name="debit_m3h">
</div>

<div class="Class__Input__Div">
    <label for="pression_bar">Pression (bar)</label>
    <input type="number" class="Class__Input" id="pression_bar" name="pression_bar">
</div>



/* |------ | Section D-4 |------ */ /*================================ Mode de contrôle demandé par le client =========================================*/


<div class="Class__Select__Div">
    <button id="___">Controle de conformité suivant spécifications</button>
    <select class="Class__Select" id="controle_conformite" name="controle_conformite">
        <option selected>Choisir</option>
        <option value="1">Value1</option>
        <option value="2">Value3</option>
    </select>
</div>

<div class="Class__Select__Div">
    <button id="___">Demande de FAT suivant spécifications</button>
    <select class="Class__Select" id="demande_fat" name="demande_fat">
        <option selected>Choisir</option>
        <option value="1">Value1</option>
        <option value="2">Value3</option>
    </select>
</div>

<div class="Class__Input__Div">
    <label for="date_desiree_fat">Date désirée :</label>
    <input type="date" class="Class__Input" id="date_desiree_fat" name="date_desiree_fat">
</div>

<div class="Class__Select__Div">
    <button id="___">Demande de CEM (Electromagnetisme)</button>
    <select class="Class__Select" id="demande_cem" name="demande_cem">
        <option selected>Choisir</option>
        <option value="1">Oui</option>
        <option value="2">Non</option>
    </select>
</div>

<div class="Class__Select__Div">
    <button id="___">Demande de certification externe</button>
    <select class="Class__Select" id="demande_certif_ext" name="demande_certif_ext">
        <option selected>Choisir</option>
        <option value="1">Oui</option>
        <option value="2">Non</option>
    </select>
</div>



/* |------ | Section D-5 |------ */ /*================================ Installation et mise en route =========================================*/

<div class="Class__Select__Div">
    <button id="___">Installation chez le client</button>
    <select class="Class__Select" id="install_client" name="install_client">
        <option selected>Choisir</option>
        <option value="1">Oui</option>
        <option value="2">Non</option>
    </select>
</div>

<div class="Class__Select__Div">
    <button id="___">Plan de prévention pour intervenir sur site</button>
    <select class="Class__Select" id="plan_prevention" name="plan_prevention">
        <option selected>Choisir</option>
        <option value="1">Oui</option>
        <option value="2">Non</option>
    </select>
</div>

<div class="Class__Select__Div">
    <button id="___">Mise En Route de la machine</button>
    <select class="Class__Select" id="mise_en_route" name="mise_en_route">
        <option selected>Choisir</option>
        <option value="1">Oui</option>
        <option value="2">Non</option>
    </select>
</div>

<div class="Class__Select__Div">
    <button id="___">Demande de certification externe</button>
    <select class="Class__Select" id="demande_certif_ext" name="demande_certif_ext">
        <option selected>Choisir</option>
        <option value="1">Oui</option>
        <option value="2">Non</option>
    </select>
</div>


/* |------ | Section D-6 |------ */ /*================================ Formation =========================================*/

<div class="Class__Select__Div">
    <button id="___">Sur machine</button>
    <select class="Class__Select" id="sur_machine" name="sur_machine">
        <option selected>Choisir</option>
        <option value="1">Oui</option>
        <option value="2">Non</option>
    </select>
</div>

<div class="Class__Select__Div">
    <button id="___">En salle</button>
    <select class="Class__Select" id="en_salle" name="en_salle">
        <option value="1">Oui</option>
        <option value="2">Non</option>
    </select>
</div>

<div class="Class__Input__Div">
    <label for="nombre_jours">Nombre de jours</label>
    <input type="number" class="Class__Input" id="nombre_jours" name="nombre_jours">
</div>

<div class="Class__Input__Div">
    <label for="nombre_personnes">Nombre de personnes</label>
    <input type="number" class="Class__Input" id="nombre_personnes" name="nombre_personnes">
</div>


/* |------ | Section D-7 |------ */ /*================================ Notice =========================================*/

<div class="Class__Select__Div">
    <button id="___">Papier</button>
    <select class="Class__Select" id="papier" name="papier">
        <option selected>Choisir</option>
        <option value="1">Oui</option>
        <option value="2">Non</option>
    </select>
</div>

<div class="Class__Input__Div">
    <label for="quantite">Quantité</label>
    <input type="___" class="Class__Input" id="quantite" name="quantite">
</div>


<div class="Class__Select__Div">
    <button id="___">CD</button>
    <select class="Class__Select" id="cd" name="cd">
        <option selected>Choisir</option>
        <option value="1">Oui</option>
        <option value="2">Non</option>
    </select>
</div>

<div class="Class__Select__Div">
    <button id="___">Numérique</button>
    <select class="Class__Select" id="numerique" name="numerique">
        <option selected>Choisir</option>
        <option value="1">Oui</option>
        <option value="2">Non</option>
    </select>
</div>

<div class="Class__Select__Div">
    <button id="___">Langue</button>
    <select class="Class__Select" id="langue" name="langue">
        <option selected>Choisir</option>
        <option value="1">Allemand</option>
        <option value="2">Anglais</option>
        <option value="3">Chinois</option>
        <option value="4">Espagnole</option>
        <option value="4">Français</option>
        <option value="4">Italien</option>
        <option value="4">Polonais</option>
        <option value="4">Portugais</option>
        <option value="4">Russe</option>
    </select>
</div>



/* |------ | Section D-8 |------ */ /* ================================ Transport =========================================*/


<div class="Class__Select__Div">
    <button id="___">Transport à la charge de Albagnac</button>
    <select class="Class__Select" id="charge_albagnac" name="charge_albagnac">
        <option value="1">Oui</option>
        <option value="2">Non</option>
    </select>
</div>

<div class="Class__Select__Div">
    <button id="___">Transport à la charge du client</button>
    <select class="Class__Select" id="charge_client" name="charge_client">
        <option value="1">Oui</option>
        <option value="2">Non</option>
    </select>
</div>





<div class="Class__Input__Div">
    <label for="__OO__">TexteARemplir</label>
    <input type="___" class="Class__Input" id="__OO__" name="__OO__">
</div>

<div class="Class__Select__Div">
    <button id="___">TexteARemplir</button>
    <select class="Class__Select" id="__OO__" name="__OO__">
        <option selected>Choisir</option>
        <option value="1">Value1</option>
        <option value="2">Value2</option>
        <option value="3">Value3</option>
        <option value="4">Value4</option>
    </select>
</div>