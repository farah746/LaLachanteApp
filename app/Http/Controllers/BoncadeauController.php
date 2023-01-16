<?php

namespace App\Http\Controllers;

use App\Models\Boncadeau;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\TextUI\XmlConfiguration\Group;

class BoncadeauController extends Controller
{

    //  Une fois on depasse 5 lignes par tableau Ca d'affiche
    public function index(Request $request)
    {
        $boncadeau = new Boncadeau;
        $boncadeau->setConnection('mysql2');
        
        $Boncadeaux = DB::select("SELECT * FROM Bon_cadeau");
        $perPage = 2;
        $bon = Boncadeau::sortable()->paginate(15)->withQueryString();
        return view('Boncadeaux.index', compact('Boncadeaux', 'bon', 'perPage'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function multisearch(Request $request)
    {

        $multisearchnom = $request->get('multisearchnom');
        $multisearchtel = $request->get('multisearchtel');
        $multisearchprenom = $request->get('multisearchprenom');
        $multisearchmail = $request->get('multisearchmail');
        $multisearchstat = $request->get('multisearchstat');
        $bon = DB::table('Bon_cadeau')

            ->where('id_bonCadeau', 'LIKE', '%' . $multisearchmail . '%')
            ->where('nom_destinataire', 'LIKE', '%' . $multisearchstat . '%')
            ->where('titre', 'LIKE', '%' . $multisearchtel . '%')
            ->where('message', 'LIKE', '%' . $multisearchprenom . '%')
            ->where('id_experience', 'LIKE', '%' . $multisearchnom . '%')
            ->paginate(20);

        return view('Boncadeaux.index', ['Boncadeaux' => $bon]);
    }

    // Direction view create

    public function create()
    {
        return view('Boncadeaux.create');
    }

    // Processus de creation
    public function store(Request $request)
    {
        $request->validate([

            'id_bonCadeau' => 'required',
            'nom_destinataire',
            'titre',
            'message',
            'id_experience'
        ]);

        Boncadeau::create($request->all());

        return redirect()->route('Boncadeaux.index')
            ->with('success', '');
    }

    // Direction vers le view de details du groupe
    public function show(Boncadeau $Boncadeaux)
    {

        return view('Boncadeaux.show', compact('Boncadeaux'));
    }

    // Direction vers le view de la modification du groupe
    public function edit(Boncadeau $Boncadeaux)
    {
        return view('Boncadeaux.edit', compact('Boncadeaux'));
    }

    // Processus de modification du groupe
    public function update(Request $request, Boncadeau $Boncadeaux)
    {
        $request->validate([

            'id_contact' => 'required',
            'nom' => 'required',
            'prenom',
            'tel',
            'mail',
            'statut',
            'num_facture',
            'url_fact_stripe',
            'adresse',
            'CP',
            'ville'
        ]);

        $Boncadeaux->update($request->all());
        return redirect()->route('Boncadeaux.index')
            ->with('success', '');
    }

    // Procesuus de la suppression du groupe
    public function destroy(Boncadeau $Boncadeaux)
    {
        $Boncadeaux->delete();
        return redirect()->route('Boncadeaux.index')
            ->with('success', '');
    }

    // Procesuus de la suppression plusieur groupe en meme temps
    public function deleteall_g(Request $request)
    {
        // $ids = $request->get('ids');
        // Client::whereIn('id', $ids)->delete();
        // return redirect('clients');
    }
    
}
