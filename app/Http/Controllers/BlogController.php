<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Article;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Http\Requests\ArticleRequest;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }



    public function home()
    {
    
        $articles = Article::query()
            ->latest()   
            ->take(3)
            ->get();

        return view('home', compact('articles'));
    }

    public function index()
    {
        
        $articles = Article::query()
            ->latest()
            ->get();

        return view('articles.index', compact('articles'));
    }

    public function show(string $slug)
    {
        $article = Article::query()
            ->where('slug', $slug)
            ->firstOrFail();

        return view('articles.show', compact('article'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(ArticleRequest $request)
{
    $article = Article::create([
        'title' => $request->title,
        'slug' => $request->slug,
        'excerpt' => $request->excerpt,
        'content' => $request->content,
        'img' => $request->file('img')->store('public/images'), 
    ]);

    return redirect()->route('home')->with('articleCreated', 'Articolo creato con successo!');
}

    public function contact()
    {
        return view('contact'); 
    }

    public function contactSubmit(Request $request)
    {
        $validated = $request->validate([
            'user'    => ['required', 'string', 'max:100'],
            'email'   => ['required', 'email', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        try {
            
            $to = config('mail.contact_to.address', env('CONTACT_TO_EMAIL'));

            if (!$to) {
                throw new Exception('CONTACT_TO_EMAIL non configurata.');
            }

            Mail::to($to)->send(new ContactMail(
                $validated['user'],
                $validated['email'],
                $validated['message']
            ));
        } catch (Exception $e) {
            return redirect()
                ->route('home')
                ->with('emailError', 'Si è verificato un errore durante l\'invio del messaggio. Riprova più tardi.');
        }

        return redirect()->route('home')->with('emailSent', 'Messaggio inviato con successo!');
    }
}