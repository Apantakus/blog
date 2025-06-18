<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view("posts-index", [
            'posts' => $posts,
        ]);
    }
    public function post_create()
    {
        $cat = Category::all();

        return view("posts-create", [
            'categories' => $cat,
        ]);
    }

    public function save_post(Request $r)
    {

        //echo "<pre>";
        $photo = '';
        print_r($_FILES);
        if (isset($_FILES['photo'])) {
            if ($_FILES['photo']['error'] == 0) {
                $photo = public_path('uploads/' . $_FILES['photo']['name']);

                if (move_uploaded_file($_FILES['photo']['tmp_name'], $photo)) {
                    echo "File uploaded successfully!";
                } else {
                    $photo = "";
                }
                $p              = new Post();
                $p->title       = $_POST['title'];
                $p->category_id = $_POST['category_id'];
                $p->body        = $_POST['body'];
                $p->photo       = $photo;
                $p->user_id     = 1;

                if ($p->save()) {

                    return redirect()->route('posts')->with('success', 'Post created successfully!');

                } else {
                    die("Failed to save post! Please try again later.");
                }

            }

            function delete_post()
            {
                if (isset($_GET['delete'])) {
                    $id   = ((int) ($_GET['delete']));
                    $post = Post::find($id);
                    if ($post != null) {
                        $post->delete();
                    }
                    return redirect('posts')
                        ->with('message', 'Post with ID: ' . $id . ' deleted successfully.');

                } else {
                    $posts = Post::all();
                }
                return view("posts-index");
            }
        }
    }
}
