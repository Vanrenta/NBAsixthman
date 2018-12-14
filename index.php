<?php
require('controller/frontend.php');

try{
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'index') {
            toIndex();
        }else if($_GET['action'] == 'reg'){
            regIn($_POST['pseudo'], $_POST['pass'], $_POST['checked_passwd'], $_POST['mail'], $_POST['team']);
        }else if($_GET['action'] == 'toRegIn'){
            toRegIn();
        }else if($_GET['action'] == 'sess'){
            toSess();
        }else if($_GET['action'] == 'log'){
            logIn($_POST['epass'], $_POST['email']);
        }else if($_GET['action'] == 'logOut'){
            logOut();
        }else if($_GET['action'] == 'profile'){
            toProfile();
        }else if($_GET['action'] == 'toUpdateProfile'){
            toUpdateProfile();
        }else if($_GET['action'] == 'updateProfile'){
            updateProfile($_POST['pseudo'], $_POST['mail'], $_POST['team']);
        }else if($_GET['action'] == 'toUpdatePassword'){
            toUpdatePassword();
        }else if($_GET['action'] == 'updatePassword'){
            updatePassword($_POST['old_pass'], $_POST['new_pass'], $_POST['checked_pass']);
        }else if($_GET['action'] == 'moderator'){
            toModerate();
        }elseif ($_GET['action'] == 'addPlayer') {
            toAddPlayer();
        }else if($_GET['action'] == 'addAPlayer'){
            addPlayer($_POST['name'], $_POST['firstname'], $_POST['birthday'], $_POST['team']);
        }else if($_GET['action'] == 'searchPlayer'){
            searchPlayer($_POST['search']);
        }else if($_GET['action'] == 'playerView'){
            if(isset($_GET['id'])){
                playerView($_GET['id']);
            }else{
                playerView($_GET['string']);
            }
        }else if($_GET['action'] == 'addPicture'){
            if(isset($_GET['id'])){
                addPicture($_GET['id']);
            }else if(isset($_GET['idTeam'])){
                addPicture($_GET['idTeam']);
            }
        }else if($_GET['action'] == 'presentTeams'){
            presentTeams();
        }else if($_GET['action'] == 'addTeam'){
            toAddTeam();
        }else if($_GET['action'] == 'addATeam'){
            addTeam($_POST['franchise'], $_POST['city'], $_POST['creationDate']);
        }else if($_GET['action'] == 'presentTeam'){
            presentTeam($_GET['idTeam']);
        }
    }
    else {
        toIndex();
    }
}catch(Exception $e){
    echo 'Erreur: ' . $e->getMessage();
}