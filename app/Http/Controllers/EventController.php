<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    //Rota para index principal
    public function index(){
        $events = Event::all();
        return view('welcome',['events'=>$events]);













            //Declaro uma variável simluando vindo um valor vindo do BD
            // $nome = "Jodi";
            // $idade = "29";
            // $sexo = "Masculino";
            // $arr = [1,2,3,4,5,6,7,8,9,10];
            // return view('welcome', 
            // [
            //     //Retorno as variáveis
            //     'nome' =>$nome,
            //     'idade'=>$idade, 
            //     'sexo'=>$sexo,
            //     'arr'=>$arr
            // ]);
      
    }

    //Pagina de create
    public function create(){
        return view('events.create');
    }

    public function store(Request $request){

        $event = new Event;

        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;
        $event->items = $request->items;
        /*Insiriando imagem no banco*/
        if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;

            $extension = $requestImage -> extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/events'), $imageName);

            $event->image = $imageName;
        }

        $event ->save();

        return redirect('/')->with('msg','Evento criado com sucesso!');
    }

public function show($id){
    $event = Event::findOrFail($id);
    return view('events.show', ['event' => $event]);
}

}

