<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\Menu;
use App\Models\Menu_item;
use App\Models\Page;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Models\Subject;
use App\Models\Press_midia;
use App\Models\Faq;
use App\Models\Testimonial;
use phpDocumentor\Reflection\Types\Null_;
use App\Models\Course;
use App\Models\Curriculun;
use App\Models\Slide;
use App\Models\Project;
use Mail;
use App\Mail\SendMail;
use App\Models\Anuncio;

class VivaController extends Controller
{

    public function index()
    {


        $menus = Menu_item::where('menu_id', 2)
            ->whereNull('parent_id')
            ->orderBy('order', 'ASC')->get();

        $submenus = Menu_item::where('menu_id', 2)
            ->whereNotNull('parent_id')
            ->orderBy('order', 'ASC')->get();

        $depoimentos = Testimonial::all();

        $ultimas = Post::where('category_id', 1)
            ->where('status', 'PUBLISHED')
            ->orderBy('created_at', 'DESC')
            ->take(6)->get();

        $cursos = Course::where('active',1)
            ->orderBy('created_at', 'DESC')
            ->take(6)->get();

        $slides =  Slide:: where('active',1)
            ->orderBy('created_at', 'DESC')
            ->get();
        
        $primeiro_slide =  Slide:: where('active',1)
            ->orderBy('created_at', 'DESC')
            ->first();
            //echo '<pre>';
            //print_r($primeiro_slide);
            //echo '</pre>';
            //die();


        return view('welcome', ['menus' => $menus, 'submenus' => $submenus, 'ultimas' => $ultimas, 'depoimentos' => $depoimentos, 'cursos' => $cursos, 'slides' => $slides, 'primeiro_slide' => $primeiro_slide]);
    }

    public function teste()
    {

        $menus = Menu_item::where('menu_id', 2)
            ->whereNull('parent_id')
            ->orderBy('order', 'ASC')->get();

        $submenus = Menu_item::where('menu_id', 2)
            ->whereNotNull('parent_id')
            ->orderBy('order', 'ASC')->get();

        $cursos = Course::where('active', '1')
            ->orderBy('created_at', 'DESC')
            ->paginate(5);


            return view('teste', ['menus' => $menus, 'submenus' => $submenus, 'cursos' => $cursos]);  

    }

    public function redeTrocas() 
    {
        $menus = Menu_item::where('menu_id', 2)
        ->whereNull('parent_id')
        ->orderBy('order', 'ASC')->get();

    $submenus = Menu_item::where('menu_id', 2)
        ->whereNotNull('parent_id')
        ->orderBy('order', 'ASC')->get();

    $anuncios = Anuncio::where('ativo', 1)
        ->orderBy('created_at', 'DESC')
        ->paginate(20);        


        return view('rede-trocas', ['menus' => $menus, 'submenus' => $submenus, 'anuncios' => $anuncios]);   
    }

    public function dashboard(){
        return view('dashboard');  
    }

    public function projetos_realizados() {

        $menus = Menu_item::where('menu_id', 2)
            ->whereNull('parent_id')
            ->orderBy('order', 'ASC')->get();

        $submenus = Menu_item::where('menu_id', 2)
            ->whereNotNull('parent_id')
            ->orderBy('order', 'ASC')->get();
            
        $projetos = Project::where('done', '1')
            ->orderBy('created_at', 'DESC')
            ->paginate(9);


        return view('realizados', ['menus' => $menus, 'titulo' => 'Portfólio Cia 2 Banquinhos', 'submenus' => $submenus, 'projetos' => $projetos]);  

    }

    public function projetos_viva() {

        $menus = Menu_item::where('menu_id', 2)
            ->whereNull('parent_id')
            ->orderBy('order', 'ASC')->get();

        $submenus = Menu_item::where('menu_id', 2)
            ->whereNotNull('parent_id')
            ->orderBy('order', 'ASC')->get();
            
        $projetos = Project::where([
            ['done', '1'],
            ['viva', '1'],
            ])
            ->orderBy('created_at', 'DESC')
            ->paginate(9);


        return view('realizados', ['menus' => $menus, 'titulo' => 'Portfólio Viva Zona Oeste', 'submenus' => $submenus, 'projetos' => $projetos]);  

    }

    public function projetos_cia() {

        $menus = Menu_item::where('menu_id', 2)
            ->whereNull('parent_id')
            ->orderBy('order', 'ASC')->get();

        $submenus = Menu_item::where('menu_id', 2)
            ->whereNotNull('parent_id')
            ->orderBy('order', 'ASC')->get();
            
        $projetos = Project::where([
            ['done', '1'],
            ['cia', '1'],
            ])
            ->orderBy('created_at', 'DESC')
            ->paginate(9);


        return view('realizados', ['menus' => $menus, 'titulo' => 'Portfólio Cia 2 Banquinhos', 'submenus' => $submenus, 'projetos' => $projetos]);  

    }

    public function projetos_andamento() {

        $menus = Menu_item::where('menu_id', 2)
            ->whereNull('parent_id')
            ->orderBy('order', 'ASC')->get();

        $submenus = Menu_item::where('menu_id', 2)
            ->whereNotNull('parent_id')
            ->orderBy('order', 'ASC')->get();
            
        $projetos = Project::where('done', '0')
            ->orderBy('created_at', 'DESC')
            ->paginate(9);


        return view('realizados', ['menus' => $menus, 'titulo' => 'Projetos em Andamento', 'submenus' => $submenus, 'projetos' => $projetos]);  

    }

    public function aula($id){

        $aula = Curriculun::where([
            ['slug', $id]
        ])->first();

        $curso = Course::where([
            ['id', $aula['course_id']],
            ['active', '1'],
        ])->first();

        $curriculos = Curriculun::where([
            ['course_id', $curso['id']]
            ])
            ->orderBy('category', 'ASC')
            ->orderBy('order', 'ASC')
            ->get();

        $categorias = Curriculun::where([
            ['course_id', $curso['id']]
            ])
            ->orderBy('order', 'ASC')
            ->groupBy('Category', 'course_id')
            ->get(); 

            return view('aula', ['curso' => $curso, 'curriculos' => $curriculos, 'categorias' => $categorias, 'aula' => $aula]);
    }

    public function curso($id) {

        $menus = Menu_item::where('menu_id', 2)
            ->whereNull('parent_id')
            ->orderBy('order', 'ASC')->get();

        $submenus = Menu_item::where('menu_id', 2)
            ->whereNotNull('parent_id')
            ->orderBy('order', 'ASC')->get();

        // dados da page

        $curso = Course::where([
            ['slug', $id],
            ['active', '1'],
        ])->first();

        $curriculos = Curriculun::where([
            ['course_id', $curso['id']]
            ])
            ->orderBy('category', 'ASC')
            ->orderBy('order', 'ASC')
            ->get();

        $categorias = Curriculun::where([
            ['course_id', $curso['id']]
            ])
            ->orderBy('order', 'ASC')
            ->groupBy('Category', 'course_id')
            ->get();
        
            
        return view('curso', ['menus' => $menus, 'submenus' => $submenus, 'curso' => $curso, 'curriculos' => $curriculos, 'categorias' => $categorias]);

    }


    public function curso_inscricao($id) {

        $menus = Menu_item::where('menu_id', 2)
            ->whereNull('parent_id')
            ->orderBy('order', 'ASC')->get();

        $submenus = Menu_item::where('menu_id', 2)
            ->whereNotNull('parent_id')
            ->orderBy('order', 'ASC')->get();

        // dados da page

        $curso = Course::where([
            ['slug', $id],
            ['active', '1'],
        ])->first();

        $curriculos = Curriculun::where([
            ['course_id', $curso['id']]
            ])
            ->orderBy('category', 'ASC')
            ->orderBy('order', 'ASC')
            ->get();

        $categorias = Curriculun::where([
            ['course_id', $curso['id']]
            ])
            ->orderBy('order', 'ASC')
            ->groupBy('Category', 'course_id')
            ->get();
        
            
        return view('curso', ['menus' => $menus, 'submenus' => $submenus, 'curso' => $curso, 'curriculos' => $curriculos, 'categorias' => $categorias]);

    }

    public function cursos() {

        $menus = Menu_item::where('menu_id', 2)
            ->whereNull('parent_id')
            ->orderBy('order', 'ASC')->get();

        $submenus = Menu_item::where('menu_id', 2)
            ->whereNotNull('parent_id')
            ->orderBy('order', 'ASC')->get();

        $cursos = Course::where('active', '1')
            ->orderBy('created_at', 'DESC')
            ->paginate(9);


        return view('cursos', ['menus' => $menus, 'submenus' => $submenus, 'cursos' => $cursos]);  

    }

    public function contato_store(Request $request){
        
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email',
            'assunto' => 'required',
            'mensagem' => 'required'
        ]);

        $data = array(
            'nome' => $request->nome,
            'email' => $request->email,
            'assunto' => $request->assunto,
            'mensagem' => $request->mensagem
        );

        Mail::to('herminio.prieto@gmail.com')
            ->send(new SendMail($data));

        return back()
            ->with('success', 'Obrigado pelo seu contato. Aguarde o retorno da nossa equipe');
    }

    public function contato()
    {

        $menus = Menu_item::where('menu_id', 2)
            ->whereNull('parent_id')
            ->orderBy('order', 'ASC')->get();

        $submenus = Menu_item::where('menu_id', 2)
            ->whereNotNull('parent_id')
            ->orderBy('order', 'ASC')->get();


        return view('contact', ['menus' => $menus, 'submenus' => $submenus]);
    }

    public function faq()
    {

        $menus = Menu_item::where('menu_id', 2)
            ->whereNull('parent_id')
            ->orderBy('order', 'ASC')->get();

        $submenus = Menu_item::where('menu_id', 2)
            ->whereNotNull('parent_id')
            ->orderBy('order', 'ASC')->get();

        $faqs = Faq::orderBy('order', 'ASC')->get();


        return view('faq', ['menus' => $menus, 'submenus' => $submenus, 'faqs' => $faqs]);
    }

    public function imprensa()
    {

        $menus = Menu_item::where('menu_id', 2)
            ->whereNull('parent_id')
            ->orderBy('order', 'ASC')->get();

        $submenus = Menu_item::where('menu_id', 2)
            ->whereNotNull('parent_id')
            ->orderBy('order', 'ASC')->get();

        // dados da page


        return view('imprensa', ['menus' => $menus, 'submenus' => $submenus]);
    }

    public function frame_imprensa()
    {
        $imagens = Press_midia::where('tipo','Imagem')
            ->orderBy('order', 'ASC')->get();
        
        $videos = Press_midia::where('tipo','Imagem')
            ->orderBy('order', 'ASC')->get();

        return view('frames.imprensa', ['videos' => $videos, 'imagens' => $imagens]);
    }

    public function numeros()
    {

        $menus = Menu_item::where('menu_id', 2)
            ->whereNull('parent_id')
            ->orderBy('order', 'ASC')->get();

        $submenus = Menu_item::where('menu_id', 2)
            ->whereNotNull('parent_id')
            ->orderBy('order', 'ASC')->get();

        // dados da page


        return view('numeros', ['menus' => $menus, 'submenus' => $submenus]);
    }    


    public function showPage($id)
    {

        $menus = Menu_item::where('menu_id', 2)
            ->whereNull('parent_id')
            ->orderBy('order', 'ASC')->get();

        $submenus = Menu_item::where('menu_id', 2)
            ->whereNotNull('parent_id')
            ->orderBy('order', 'ASC')->get();

        // dados da page

        $page = Page::where([
            ['slug', $id],
            ['status', 'ACTIVE'],
        ])->first();

        return view('pagina', ['menus' => $menus, 'submenus' => $submenus, 'page' => $page]);
    }

    public function colunas(){

        $menus = Menu_item::where('menu_id', 2)
            ->whereNull('parent_id')
            ->orderBy('order', 'ASC')->get();

        $submenus = Menu_item::where('menu_id', 2)
            ->whereNotNull('parent_id')
            ->orderBy('order', 'ASC')->get();

        $noticias = Post::where('category_id', 2)
            ->where('status', 'PUBLISHED')
            ->orderBy('created_at', 'DESC')
            ->take(5)->skip(0)->paginate(3);
        //$noticias = Post::all();

        return view('noticias', ['menus' => $menus, 'submenus' => $submenus, 'noticias' => $noticias, 'categoria'=>'Colunas']);  
    }

    public function showColunas($id)
    {

        $menus = Menu_item::where('menu_id', 2)
            ->whereNull('parent_id')
            ->orderBy('order', 'ASC')->get();

        $submenus = Menu_item::where('menu_id', 2)
            ->whereNotNull('parent_id')
            ->orderBy('order', 'ASC')->get();

        // dados da page

        $page = Post::where([
            ['slug', $id]
        ])->first();

        $category = Category::where('id', $page->category_id)->first()->toArray();

        $owner_post = User::where('id', $page->author_id)->first()->toArray();

        $ultimas = Post::where('category_id', 1)
            ->where('status', 'PUBLISHED')
            ->orderBy('created_at', 'DESC')
            ->take(3)->get();

        return view('noticia', ['menus' => $menus, 'submenus' => $submenus, 'page' => $page, 'category' => $category, 'owner_post' => $owner_post, 'ultimas' => $ultimas, 'categoria'=>'Colunas']);
    }

    public function noticias(){

        $menus = Menu_item::where('menu_id', 2)
            ->whereNull('parent_id')
            ->orderBy('order', 'ASC')->get();

        $submenus = Menu_item::where('menu_id', 2)
            ->whereNotNull('parent_id')
            ->orderBy('order', 'ASC')->get();

        $noticias = Post::where('category_id', 1)
            ->where('status', 'PUBLISHED')
            ->orderBy('created_at', 'DESC')
            ->paginate(5);


        return view('noticias', ['menus' => $menus, 'submenus' => $submenus, 'noticias' => $noticias, 'categoria'=>'Notícias']);  
    }

    public function showNews($id)
    {

        $menus = Menu_item::where('menu_id', 2)
            ->whereNull('parent_id')
            ->orderBy('order', 'ASC')->get();

        $submenus = Menu_item::where('menu_id', 2)
            ->whereNotNull('parent_id')
            ->orderBy('order', 'ASC')->get();

        // dados da page

        $page = Post::where([
            ['slug', $id]
        ])->first();

        $category = Category::where('id', $page->category_id)->first()->toArray();

        $owner_post = User::where('id', $page->author_id)->first()->toArray();

        $ultimas = Post::where('category_id', 1)
            ->where('status', 'PUBLISHED')
            ->orderBy('created_at', 'DESC')
            ->take(3)->get();

        return view('noticia', ['menus' => $menus, 'submenus' => $submenus, 'page' => $page, 'category' => $category, 'owner_post' => $owner_post, 'ultimas' => $ultimas, 'categoria'=>'Notícias']);
    }

    public function envieSuaNoticia()
    {

        $menus = Menu_item::where('menu_id', 2)
            ->whereNull('parent_id')
            ->orderBy('order', 'ASC')->get();

        $submenus = Menu_item::where('menu_id', 2)
            ->whereNotNull('parent_id')
            ->orderBy('order', 'ASC')->get();

        $tags = Subject::orderBy('name', 'ASC')->get();

        return view('envie-sua-noticia', ['menus' => $menus, 'submenus' => $submenus, 'tags'=> $tags]);
    }

    public function store_post(Request $request)
    {
        function gerarSlug($str)
        {
            $str = mb_strtolower($str); //Vai converter todas as letras maiúsculas pra minúsculas
            $str = preg_replace('/(â|á|ã)/', 'a', $str);
            $str = preg_replace('/(ê|é)/', 'e', $str);
            $str = preg_replace('/(í|Í)/', 'i', $str);
            $str = preg_replace('/(ú)/', 'u', $str);
            $str = preg_replace('/(ó|ô|õ|Ô)/', 'o', $str);
            $str = preg_replace('/(_|\/|!|\?|#)/', '', $str);
            $str = preg_replace('/( )/', '-', $str);
            $str = preg_replace('/ç/', 'c', $str);
            $str = preg_replace('/(-[-]{1,})/', '-', $str);
            $str = preg_replace('/(,)/', '-', $str);
            $str = strtolower($str);
            return $str;
            /*Significa que vai procurar por  qualquer um desses â|á|ã ou as outras 
        letras e, i, o, u e caracteres especiais e vai trocar pela letra normal ou pelo -*/
        }

        $post = new Post;

        $post->title = $request->title;
        $post->body = $request->body;
        $post->excerpt = $request->excerpt;
        $post->status = 'PENDING';
        $post->category_id = 1;
        $post->slug = gerarSlug($request->title, "-");

        //echo '<pre>';
        //print_r($request);
        //die();

        //image upload
        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . '.' . $extension;

            $requestImage->move(public_path('storage/posts'), $imageName);

            $post->image = 'posts/'.$imageName;
        }

        $user = auth()->user();
        $post->author_id = $user->id;

        $post->save();

        return redirect('/envie-sua-noticia/create')->with('msg', '<strong>Sucesso!</strong> Notícia enviada! Aguarde aprovação de nossa equipe.');
    }
}
