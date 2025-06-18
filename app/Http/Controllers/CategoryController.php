<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    function create() {
        return view("categories-create");
    }
    function index() {
        if(isset($_GET['delete'])) {
            $id = ((int)($_GET['delete']));
            $cat = Category::find($id);
            if($cat != null) {
                $cat->delete();
            }
            return redirect('categories')
                ->with('message', 'Category with ID: ' . $id . ' deleted successfully.');

        } else {
            $categories = Category::all();
        }
        return view("categories-index");
    }

    function save_category(Request $r) {
      

        $cat = new Category();
        $cat->name = $r->name;
        $cat->details = $r->details;
        $cat->photo = "";

       
        $cat->save();

        header("Location:" .url('categories'));
        die();
    }



}
