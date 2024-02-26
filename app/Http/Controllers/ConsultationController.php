<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultation;

class ConsultationController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'disease_history' => 'required|',
            'current_symtoms' => 'required|'
        ]);

        return response([
            'message' => 'Request consultation sent successful'
        ]);
    }
}
