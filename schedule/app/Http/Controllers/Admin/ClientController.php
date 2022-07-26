<?php
// prv open
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{

  public function index() {
     $data = Client::query()->paginate(8);
     return view('admin.client.index', compact('data'));
  }

  public function create() {

  }

  public function getAllAcountId() {
   return view('name', $data);
  }

}
