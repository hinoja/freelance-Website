<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;
// use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function generatePDF(Job $job) {


        $pdf = Pdf::loadView('download.test',['job'=>$job]);
        return $pdf->stream('listApplyJob');
    }
    public function download(Job $job)    {
       $pdf= Pdf::loadView('download.test',['job'=>$job]);
        return $pdf->stream('listApplyJob');
    }
}
