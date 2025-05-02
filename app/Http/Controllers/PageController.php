<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function aboutDirectorMessage()
    {
        return view('pages.about-director-message');
    }

    public function aboutManagement()
    {
        return view('pages.about-management');
    }

    public function aboutVisionMission()
    {
        return view('pages.about-vision-mission');
    }

    public function admissionProcedure()
    {
        return view('pages.admission-procedure');
    }

    public function bpharmaFirstYear()
    {
        return view('pages.bpharma-1st-year');
    }

    public function canteen()
    {
        return view('pages.canteen');
    }

    public function contactUs()
    {
        return view('pages.contact-us');
    }

    public function courseBpharma()
    {
        return view('pages.course-bpharma');
    }

    public function courseDpharma()
    {
        return view('pages.course-dpharma');
    }

    public function dpharmaFirstYear()
    {
        return view('pages.dpharma-1st-year');
    }

    public function facilityComputerLab()
    {
        return view('pages.facility-computer-lab');
    }

    public function facilityLibrary()
    {
        return view('pages.facility-library');
    }

    public function facilityWifiCampus()
    {
        return view('pages.facility-wifi-campus');
    }

    public function feeStructure()
    {
        return view('pages.fee-structure');
    }

    public function firstAidTreatment()
    {
        return view('pages.first-aid-treatment');
    }

    public function mail()
    {
        return view('pages.mail');
    }

    public function medicalGarden()
    {
        return view('pages.medicinal-garden');
    }

    public function museum()
    {
        return view('pages.museum');
    }

    public function registrationForm()
    {
        return view('pages.registration-form');
    }

    public function seminarHall()
    {
        return view('pages.seminar-hall');
    }

    public function sportsField()
    {
        return view('pages.sports-field');
    }
}
