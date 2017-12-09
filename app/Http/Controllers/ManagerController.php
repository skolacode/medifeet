<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth;

/* Trait */
use App\traits\getUsers;
use App\traits\getItems;

/* Model */
use App\Manager;
use App\User;
use App\Item;

class ManagerController extends Controller
{

    /* get all the users function
        > All Users
        > Manager Only
        > Staff only
        > Manager and Staff
        > User by Role

    */
    use getUsers;

    /* Get items function */
    use getItems;

    /* Get all the functios for registration */
    use RegistersUsers;

    /* Return Manager landing page */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view ('managers.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('managers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $manager = new Manager;

        $manager->fill($request->all());
        $manager->save();

        return redirect()->route('managers.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) /* bukan kau salah buat..by defautl dia mmg akn create kn type hint base on model  */
    {

        $user = User::find($id);

        return view('managers.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manager $manager)
    {
        $manager->fill($request->all());
        $manager->save();

        return redirect()->route('managers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manager $manager)
    {
        Manager::destroy($manager->id);

        return redirect()->route('managers.index');  
    }

    /* Staff list page - show all staff */
    public function staffList()
    {

        /* Get Manager and Staff Only */
        $users = $this->getManagerAndStaff();

        return view ('managers.staffList', compact('users'));
    }

    /* Show items list */
    public function counter()
    {

        $items = $this->allItems();

        return view('counter.index', compact('items'));
    }

    /* Show selected item*/
    public function showSelectedItem(Item $item)
    {

        return view('counter.selectedItem', compact('item'));
    }

    /**/
    public function stockUpdate(Request $request)
    {
        $this->updateStock($request);

        return redirect()->route('counter');
    }
}
