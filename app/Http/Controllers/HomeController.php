<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Location;
use App\Models\User;
use Dompdf\Dompdf;
use App\Exports\PostExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\LocationExport;
use App\Exports\UsersExport;


class HomeController extends Controller
{
    //
    public function index(){
        $posts=Article::latest('created_at')->simplePaginate(5);
        return view('home', compact('posts'));
    }

    public function pergaulan(){
       
        $posts=Article::where('category_id',3)->latest('created_at')->simplePaginate(5);
        return view('home', compact('posts'));
    }
    public function sexual(){
       
        $posts=Article::where('category_id',4)->latest('created_at')->simplePaginate(5);
        return view('home', compact('posts'));
    }

    public function pencegahan(){
       
        $posts=Article::where('category_id',5)->latest('created_at')->simplePaginate(5);
        return view('home', compact('posts'));
    }

    public function printpdf(){
        $posts=Article::all();
        $html= view('print/pdf_post',compact('posts'));

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream();
    }

    public function printexcel(){
        return Excel::download(new PostExport, 'invoices.xlsx');
    } 
   
    public function print_lokasi(){
        $lokasi=Location::all();
        $html= view('print/pdf_location',compact('lokasi'));

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream();
    }

    public function excel_lokasi(){
        return Excel::download(new LocationExport, 'invoices.xlsx');
    } 

    public function excel_user(){
        return Excel::download(new UsersExport, 'invoices.xlsx');
    } 

    public function print_user(){
        $user=User::all();
        $html= view('print/pdf_user',compact('user'));

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream();
    }

}
