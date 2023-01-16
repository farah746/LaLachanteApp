<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\TextUI\XmlConfiguration\Group;

class ClientController extends Controller
{

    //  Une fois on depasse 5 lignes par tableau Ca d'affiche
    public function index(Request $request)
    {
        $client = new Client;
        $client->setConnection('mysql2');
        
        $data = DB::connection('mysql2')
        ->select('SELECT Contact.id_contact, Contact.nom, Contact.prenom, Contact.tel, Contact.email, Contact.id_client_stripe, Contact.url_client_stripe 
                    FROM Contact');

        $bdd = DB::connection('mysql2')->select('SELECT * FROM Contact');
        
        $perPage = 2;
        $clients = Client::sortable()->paginate(15)->withQueryString();
        return view('clients.index', compact('bdd', 'data', 'clients', 'perPage'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function multisearch(Request $request)
    {

        $multisearchnom = $request->get('multisearchnom');
        $multisearchtel = $request->get('multisearchtel');
        $multisearchprenom = $request->get('multisearchprenom');
        $multisearchmail = $request->get('multisearchmail');
        $multisearchstat = $request->get('multisearchstat');
        $clients = DB::connection('mysql2')->table('contact')

            ->where('mail', 'LIKE', '%' . $multisearchmail . '%')
            ->where('statut', 'LIKE', '%' . $multisearchstat . '%')
            ->where('tel', 'LIKE', '%' . $multisearchtel . '%')
            ->where('prenom', 'LIKE', '%' . $multisearchprenom . '%')
            ->where('nom', 'LIKE', '%' . $multisearchnom . '%')
            ->paginate(20);

        return view('clients.index', ['client' => $clients]);
    }

    // Direction view create

    public function create()
    {
        return view('clients.create');
    }

    // Processus de creation
    public function store(Request $request)
    {
        $request->validate([

            'id_contact' => 'required',
            'nom',
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

        Client::create($request->all());

        return redirect()->route('clients.index')
            ->with('success', '');
    }

    // Direction vers le view de details du groupe
    public function show(Client $bdd)
    {

        return view('clients.show', compact('bdd'));
    }

    // Direction vers le view de la modification du groupe
    public function edit(Client $clients)
    {
        return view('clients.edit', compact('clients'));
    }

    // Processus de modification du groupe
    public function update(Request $request, Client $clients)
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

        $clients->update($request->all());
        return redirect()->route('clients.index')
            ->with('success', '');
    }

    // Procesuus de la suppression du groupe
    public function destroy(Client $clients)
    {
        $clients->delete();
        return redirect()->route('clients.index')
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
