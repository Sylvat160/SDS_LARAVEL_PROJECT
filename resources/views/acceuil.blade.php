@extends('layouts.app')

@section('content')
<section id="acceuil">
        <div class="partone">
            <h1> Menu de gestion </h1>

            <div>
                <p>
                    <a id="ajoutE" style="cursor:pointer;">Ajouter un étudiant</a>
                </p>
                <p>
                    <a href="liste.php"> Consulter la liste des étudiants</a>
                </p>
                <p>
                    <a id="ajoutT" style="cursor:pointer;"> Ajouter un tuteur </a>
                </p>
            </div>
        </div>
        <div class="parttwo" id="parttwo">
            <h1> Ajouter un étudiant </h1>
            <section>
                <form action="" method="POST" id="formE">

                    <div>
                        <label for="nomE"><i class="fa-solid fa-user"></i></label>
                        <input type="text" name="nomE" placeholder="Nom">
                    </div>

                    <div>
                        <label for="prenomE"><i class="fa-solid fa-user"></i></label>
                        <input type="text" name="prenomE" placeholder="Prenom">
                    </div>

                    <div>
                        <label for="dateE"><i class="fa-regular fa-calendar"></i></label>
                        <input type="date" name="dateE" placeholder="Date de naissance">
                    </div>

                    <div>
                        <label for="emailE"><i class="fa-regular fa-envelope"></i></label>
                        <input type="mail" name="mailE" placeholder="E-mail">
                    </div>

                    <div>
                        <label for="numeroE"><i class="fa-solid fa-phone"></i></label>
                        <input type="text" name="numeroE" placeholder="numero">
                    </div>

                    <div class="tuteur">
                        <select name="tuteur" id="">
                            <option value="">choisir un tuteur</option>
                           
                        </select>
                    </div>

                    <button type='submit' name="infoE" value="ajouter"> Ajouter </button>

                </form>


            </section>
        </div>

        <div class="parttree" id="parttree">
            <h1> Ajouter un tuteur </h1>
            <section>
                <form action="" method="POST" id="formT">

                    <div>
                        <label for="nomT"><i class="fa-solid fa-user"></i></label>
                        <input type="text" name="nomT" placeholder="Nom">
                    </div>

                    <div>
                        <label for="prenomT"><i class="fa-solid fa-user"></i></label>
                        <input type="text" name="prenomT" placeholder="Prenom">
                    </div>

                    <div>
                        <label for="numeroT"><i class="fa-solid fa-phone"></i></label>
                        <input type="text" name="numeroT" placeholder="numero">
                    </div>


                    <button type='submit' name="infoT" value="ajouter"> Ajouter </button>

                </form>

                

            </section>
        </div>
    </section>
@endsection