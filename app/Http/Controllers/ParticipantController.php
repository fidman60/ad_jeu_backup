<?php

namespace App\Http\Controllers;

use App\Exports\ParticipantsExport;
use App\Http\Requests\StoreParticipantRequest;
use App\Mail\ParticipateMail;
use App\Model\Participant;
use App\Model\ListData;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Excel;

use DB;

class ParticipantController extends Controller {

    protected $participant;

    public function __construct(Participant $participant){
        $this->participant = $participant;

        $this->middleware('auth')->only(['participantsList','participant']);
    }

    public function index(){
        return view('index');
    }

    public function store(StoreParticipantRequest $request){
        $data = $request->all();
        // dd($data['reparateur_ad']);exit();
        $this->participant->civilite = (int)$data['civilite'];
        $this->participant->nom = $data['nom'];
        $this->participant->prenom = $data['prenom'];
        $this->participant->date_naissance = $data['date_naissance'];
        $this->participant->email = $data['email'];
        $this->participant->tele = $data['tele'];
        $this->participant->adresse = $data['adresse'];
        $this->participant->cp = $data['cp'];
        $this->participant->ville = $data['ville'];
        $this->participant->reparateur_ad = $data['reparateur_ad'];
        $this->participant->no_facture_code_jeu = $data['no_facture_code_jeu'];
        $this->participant->date_facture = $data['date_facture'];
        $this->participant->save();
        $numero=date("dmY-h-i").".".ListData::find($this->participant->reparateur_ad)->first()->region."_".$this->participant->id;
        $this->participant->update(['numero' => $numero]);


        $toEmail = $data['email'];
        Mail::to($toEmail)
            ->send(new ParticipateMail($data['nom'], $data['civilite'], $numero));

        return view('success');
    }

    public function list(Request $request){
        $term=$_GET['term']['term'];
        // echo $term;
        $list= ListData::where('code_postal','LIKE', "%$term%")
                        ->orWhere('raison_sociale','LIKE', "%$term%")
                        ->get();
        $table1 = array();

        foreach ($list as $value) {
            $ligne = array('id' =>  $value->id, 'text' =>  $value->code_postal ." | " .$value->raison_sociale );
            $table1[]=$ligne;
        }

        $table2 = array('results' => $table1,'pagination'=>array('more'=>true));

        echo(json_encode($table2));

    }

    public function participantsList(){
        $participants = DB::table('participants')->orderBy('created_at','desc')->get();
        return view('admin')->with('participants',$participants);
    }

    public function participant($id){
        $participants = DB::table('participants')->where('id',$id)->get();;
        if (sizeof($participants) > 0)
            return view('participant')->with('participant',$participants[0]);
        return redirect('/admin');
    }

    public function exportParticipantsList(){
        //return Excel::download(new \App\Exports\ParticipantsExport(), 'participants.xls');
        return (new ParticipantsExport())->download('participants.xls');
    }

}
