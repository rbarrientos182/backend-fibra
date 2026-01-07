<?php

namespace App\Http\Controllers\Api;

use App\Models\Evidence;
use App\Http\Controllers\Controller;
use App\Http\Resources\EvidenceResource;
use App\Http\Requests\StoreEvidenceRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class EvidenceController extends Controller
{
    // Para listar todas las evidencias
    public function index()
    {
        $evidencias = Evidence::with('user')->get();
        return EvidenceResource::collection($evidencias);
    }

    // Para mostrar una sola evidencia
    public function show(Evidence $evidence)
    {
        return new EvidenceResource($evidence);
    }

    public function store(StoreEvidenceRequest $request)
    {
        
        $data = $request->validated();
        $data['user_id'] = Auth::id();

        // Array de campos de imagen para procesar en bucle
        $camposImagen = ['img_visita', 'img_correo', 'img_whatsapp', 'img_sms'];

        foreach ($camposImagen as $campo) {
            if ($request->hasFile($campo)) {
                // Guarda en storage/app/public/evidencias
                $data[$campo] = $request->file($campo)->store('evidencias', 'public');
            }
        }

        $evidence = Evidence::create($data);

        return (new EvidenceResource($evidence))
            ->additional(['message' => 'Evidencia guardada con éxito']);

        /*return response()->json([
            'message' => 'Evidencia registrada con éxito',
            'data' => $evidence
        ], 201);*/
    }
}
