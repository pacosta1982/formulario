<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePersonaRequest;
use App\Http\Requests\UpdatePersonaRequest;
use App\Repositories\PersonaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\ImageGallery;
use App\Models\Persona;
use App\Models\Parentesco;
use App\Models\Persona_Parentesco;
use App\Models\Persona_Institucion;
use App\Models\Institucion_Cat;
use App\Models\Cuestionario;
use App\Models\Ciudad;
use App\Models\Discapacidad;
use App\Models\Enfermedad;
use App\Models\Persona_Discapacidad;
use App\Models\PersonaEnfermedad;
use App\Models\Estado;
use Flash;
use Auth;
use Response;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;



use App\Http\Controllers\Controller;
use App\Project;
use App\Exports\HistorialExport;
use App\Exports\ProjectExport;
use App\Http\Resources\ProjectResource as ProjectResource;
class ProjectController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index(Request $request)
    {

        return (new HistorialExport())->download('Inscripción_Formulario_'.'AMA'.'.xlsx');

    }

    public function details()
    {
        //$tasks = Project::paginate(20);
        // Return a collection of $task with pagination
       // return ProjectResource::collection($tasks);
    }

    public function showproject($id)
    {
       /// $tasks = Project::where('SEOBId', $id)->get();
        // Return a collection of $task with pagination
        //return ProjectResource::collection($tasks);
    }

    public function searchproject(Request $request)
    {
       // $projects = Project::query();
       // $searchTerm = $request->input('proyname');
       // $projects = $projects->where('SEOBProy', 'LIKE', "%{$searchTerm}%");
       // $projects = $projects->paginate(20);
        // Return a collection of $task with pagination
       // return ProjectResource::collection($projects);
    }

}
