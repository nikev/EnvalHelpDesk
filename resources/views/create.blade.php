@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">CREER UN TICKET</div>

                <div class="card-body">
                    <form method="POST" action={{ route('creer') }}>
                        {{ csrf_field() }}


                        <div class="form-group">

                        <div class="form-group">
                          <label for="categorie">Catégorie</label>
                          <select id="categorie" type="" class="form-control" name="categorie" >
                            <option value="" disabled selected>Veuillez choisir une Categorie d'incident svp</option>
                            <option value="Incident Materielle">Materielle</option>
                            <option value="Incident Logicielle">Logicielle</option>
                            <option value="Autres">Autres</option>

                        </select>
                        </div>

                        <div class="form-group">
                            <label for="niv_sev">Niveau de sévérité</label>
                            <select id="niv_sev" type="" class="form-control" name="niv_sev">
                             <option value=""disabled selected>Selectionnez un niveau de sévérité svp</option>
                              <option value="bas">Bas</option>
                              <option value="moyen">Moyen</option>
                              <option value="haut">Haut</option>

                          </select>
                          </div>

                          <div class="form-group">
                            <label for="serv">Service</label>
                            <select id="serv" type="" class="form-control" name="serv">
                             <option value=""disabled selected>Selectionnez un service svp</option>
                             <option value="Comptabilite">Comptabilite</option>
                             <option value="Service commercial">Service commercial</option>
                             <option value="Laboratoire">Laboratoire</option>
                             <option value="Laboratoire">Secretariat technique</option>
                             <option value="Qualite">Qualite</option>
                             <option value="RH">Ressources Humaines </option>
                             <option value="RH">Administration des ventes </option>
                            </select>
                        </div>



                          <div class="form-group">
                            <label for="description">Description</label>

                            <div class>
                                <textarea rows="10" id="decription" class="form-control" name="description"></textarea>


                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">CREER</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
