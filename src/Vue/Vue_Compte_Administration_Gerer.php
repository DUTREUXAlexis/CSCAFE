<?php
namespace App\Vue;
use App\Utilitaire\Vue_Composant;

class Vue_Compte_Administration_Gerer extends Vue_Composant
{
    private string $msg;
    private string $action;

    function __construct (string $msg="", string $action= "Gerer_monCompte")
    {
        $this->msg=$msg;
        $this->action=$action;
    }


    function donneTexte(): string
    {
        return " 
    <H1>Gérer mon compte</H1>
    <table style='display: inline-block'>
        <tr>
            <td>
                <form style='display: contents'>
                    ".genereChampHiddenCSRF()."
                     <input type='hidden' name='case' value='$this->action'>
                     
                    <button type='submit' name='action' value='changerMDP'>Changer mot de passe </button>
                </form>
            </td>
        </tr>
        <tr>
            <td>
                <form style='display: contents'>
                    ".genereChampHiddenCSRF()."
                    <input type='hidden' name='case' value='$this->action'>
                    
                    <button type='submit' name='action' value='SeDeconnecter'>
                        Se déconnecter 
                    </button>
                </form>
            </td>
        </tr>
        <tr>
            <td>
                <form style='display: contents'>
                    ".genereChampHiddenCSRF()."
                    <input type='hidden' name='case' value='$this->action'>
                    
                    <button type='submit' name='action' value='modifierRGPD'>
                        Modifier la RGPD 
                    </button>
                </form>
            </td>
        </tr>
        <tr>
            <td>
                <form style='display: contents'>
                    ".genereChampHiddenCSRF()."
                    <input type='hidden' name='case' value='$this->action'>
                    
                    <button type='submit' name='action' value='detailsCompte'>
                        Details compte
                    </button>
                </form>
            </td>
        </tr>
        <tr>
            <td>
                <form style='display: contents; background: red; color: black;'>
                    ".genereChampHiddenCSRF()."
                    <input type='hidden' name='case' value='$this->action'>
                    
                    <button style=' border: red;background: red; color: black;'type='submit' name='action' value='suppCompte'>
                        Supprimer le compte
                    </button>
                </form>
            </td>
        </tr>
    </table>
    $this->msg
    ";
     }
}