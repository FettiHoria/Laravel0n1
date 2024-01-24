<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articol;

class ArticolController extends Controller
{

    public function getServicesArticol()
    {
        $articol = Articol::find('1');
        return view('services', ['articol' => $articol]);
    }

    public function getContactArticol()
    {
        $articol = Articol::find('2');
        return view('contact', ['articol' => $articol]);
    }

    public function getHomeArticol()
    {
        $articol = Articol::find('3');
        return view('home', ['articol' => $articol]);
    }

    public function editContactArticol(){
        if(auth()->user()->role !== 'admin')
            return redirect(route('ContactArticol'));
        $articol = Articol::find('2');
        return view('editcontact', ['articol' => $articol]);
    }

    public function editContactPost(Request $request){
        $request->validate([
            'contactArea' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg|max:2048',
        ]);
        $imageName = 'contactphoto.png';

        $data['corpText'] = $request->contactArea;

        Articol::where('name', "contact")
            ->update([
                'corpText' => $data['corpText']
            ]);
        if ($request->exists('image'))
            $request->image->move('images', $imageName);


        return redirect(route('ContactArticol'));
    }

    public function editServicesArticol(){
        if(auth()->user()->role !== 'admin')
            return redirect(route('ServicesArticol'));
        $articol = Articol::find('1');
        return view('editservices', ['articol' => $articol]);
    }

    public function editServicesPost(Request $request){
        $request->validate([
            'servicesArea' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg|max:2048',
        ]);
        $imageName = 'servicesphoto.png';

        $data['corpText'] = $request->servicesArea;

        Articol::where('name', "services")
            ->update([
                'corpText' => $data['corpText']
            ]);
        if ($request->exists('image'))
            $request->image->move('images', $imageName);


        return redirect(route('ServicesArticol'));
    }


    public function editHomeArticol(){
        if(auth()->user()->role !== 'admin')
            return redirect(route('HomeArticol'));
        $articol = Articol::find('2');
        return view('edithome', ['articol' => $articol]);
    }

    public function editHomePost(Request $request){
        $request->validate([
            'homeArea' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg|max:2048',
        ]);
        $imageName = 'homephoto.png';

        $data['corpText'] = $request->homeArea;

        Articol::where('name', "home")
            ->update([
                'corpText' => $data['corpText']
            ]);
        if ($request->exists('image'))
            $request->image->move('images', $imageName);


        return redirect(route('HomeArticol'));
    }
}
