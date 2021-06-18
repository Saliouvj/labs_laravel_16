<?php

namespace App\Http\Controllers;

use App\Models\BigTitle;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Discover;
use App\Models\Feature;
use App\Models\Footer;
use App\Models\Image;
use App\Models\Logo;
use App\Models\Map;
use App\Models\Post;
use App\Models\Service;
use App\Models\StandOut;
use App\Models\Subject;
use App\Models\Tag;
use App\Models\TagPost;
use App\Models\Testimonial;
use App\Models\Title;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;
use Stringable;

class FrontController extends Controller
{
    // HOME

    public function home() {
        $video = Video::find(1);
        $bigTitle = Bigtitle::find(1);
        $services9 = Service::inRandomOrder()->limit(9)->get();
        $services3 = Service::inRandomOrder()->limit(3)->get();
        $discover = Discover::find(1);
        $images = Image::all();
        $imactive = Image::where('active', 1)->get();
        $logo = Logo::find(1);
        $title = Title::all();
        $contact = Contact::find(1);
        $testimonials = Testimonial::all();
        $subjects = Subject::all();
        $footer = Footer::find(1);
        // $standout = StandOut::find(1);
        $users = User::where('job_id', '>', 1)->where('validate', 1)->get();
        $userRandom = $users->random(2);
        $ceo = User::where('job_id', 1)->where('validate', 1)->get();
        $centre = $ceo->random(1);
        
        return view('home', compact('video', 'services9', 'services3', 'discover', 'images', 'logo', 'title', 'contact', 'testimonials', 'subjects', 'footer', 'users', 'userRandom', 'ceo', 'centre', 'imactive', 'bigTitle'));
    }

    // CONTACT

    public function contact() {
        $map = Map::find(1);
        $logo = Logo::find(1);
        $contact = Contact::find(1);
        $subjects = Subject::all();
        $footer = Footer::find(1);
        return view('pages.contact', compact('map', 'logo', 'contact', 'subjects', 'footer'));
    }

    // SERVICES 

    public function services() {
        $services = Service::paginate(9)->fragment('servicePaginate');
        $featuresLeft = Feature::where('id', "<", 4)->get();
        $featuresRight = Feature::where('id', ">", 3)->get();
        $logo = Logo::find(1);
        $title = Title::all();
        $posts3 = Post::where('validate',1)->inRandomOrder()->limit(3)->get();
        $subjects = Subject::all();
        $contact = Contact::find(1);
        $footer = Footer::find(1);
        return view('pages.services', compact('services', 'featuresLeft', 'featuresRight', 'logo', 'title', 'posts3', 'subjects', 'contact', 'footer'));
    }

    // NEWSLETTER 

    public function newsletter() {
        $logo = Logo::find(1);
        return view('mail.newsletter', compact('logo'));
    }

    // BLOG

    public function blog() {
        $logo = Logo::find(1);
        $articles = Post::where('validate', 1)->where('trash', 0)->paginate(2)->fragment('blogpaginate');
        $categories = Category::all();
        $tags = Tag::all();
        $footer = Footer::find(1);
        $comments = Comment::all();
        return view('pages.blog', compact('logo', 'articles', 'categories', 'tags', 'footer', 'comments'));
    }

    // BLOG - CLIC SUR CATEGORY

    public function searchCat(Category $id) {
        $ref = $id;
        $articles = Post::where('category_id', $ref->id)->where('validate', 1)->where('trash', 0)->get();
        // $articles = Post::where('validate', 1)->where('trash', 0)->paginate(2)->fragment('blogpaginate');

        $logo = Logo::find(1);
        $tags = Tag::all();
        $categories = Category::all();
        $footer = Footer::find(1);
        return view('pages.blog-category', compact('ref', 'articles', 'logo', 'tags', 'categories', 'footer'));
    }

    // BLOG - CLIC SUR TAG

    public function searchTag(Tag $id) {
        $ref = $id;
        $articles = Post::where('validate', 1)->where('trash', 0)->paginate(2)->fragment('blogpaginate');

        $logo = Logo::find(1);
        $tags = Tag::all();
        $categories = Category::all();
        $footer = Footer::find(1);
        return view('pages.blog-tag', compact('ref', 'articles', 'logo', 'tags', 'categories', 'footer'));
    }

    // BLOG-POST - ID

    public function showArticle(Post $id) {
        $article = $id;
        $logo = Logo::find(1);
        $footer = Footer::find(1);
        $comments = Comment::where('post_id', $article->id)->where('validate', 1)->get();
        $categories = Category::all();
        $tags = Tag::all();
        return view('pages.blog-post', compact('article', 'footer', 'logo', 'comments', 'categories', 'tags'));
    }

    // BLOG-SEARCH

    public function search (Request $request) {
        $search = $request->search;
        $articleSearch = Post::where('title', 'LIKE', "%{$search}%")
                    ->orWhere('text', 'LIKE', "%{$search}%")
                    // ->orWhere('category_id', 'LIKE', "%{$search}%")
                    // ->orWhere('tag_id', 'LIKE', "%{$search}%")
                    ->get();

        $logo = Logo::find(1);
        $categories = Category::all();
        $tags = Tag::all();
        $footer = Footer::find(1);
        $comments = Comment::all();

        return view('pages.blog-search', compact('articleSearch', 'logo', 'categories', 'tags', 'footer', 'comments')); 
    }

}
