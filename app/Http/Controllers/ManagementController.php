<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementController extends Controller
{
    
    
    public function index()
    {
        return view('university.colleges.management.tmimt_college_of_management');
    }
    public function mgmt_overview()
    {
        return view('university.colleges.management.mgmt_overview');
    }

    public function mgmt_highlight()
    {
        return view('university.colleges.management.mgmt_highlight');
    }

    public function mgmt_principal()
    {
        return view('university.colleges.management.mgmt_principal');
    }

    public function mgmt_academic_calendar()
    {
        return view('university.colleges.management.mgmt_academic_calendar');
    }

    public function training_placements_cell()
    {
        return view('university.colleges.management.mgmt_tpc');
    }

    public function corporate_advisory_board()
    {
        return view('university.colleges.management.mgmt_ca_board');
    }

    public function mgmt_placement_calendar()
    {
        return view('university.colleges.management.mgmt_placement_calendar');
    }

    public function mgmt_placement_brochure()
    {
        return view('university.colleges.management.mgmt_placement_brochure');
    }

    public function mgmt_news()
    {
        return view('university.colleges.management.mgmt_news');
    }

    public function mgmt_timetable()
    {
        return view('university.colleges.management.mgmt_timetable');
    }

    public function mgmt_anti_ragging()
    {
        return view('university.colleges.management.mgmt_anti_ragging');
    }

    public function mgmt_scst_committee()
    {
        return view('university.colleges.management.mgmt_scst_committee');
    }

    public function mgmt_icc_committee()
    {
        return view('university.colleges.management.mgmt_icc_committee');
    }

    public function mgmt_guestlecture()
    {
        return view('university.colleges.management.mgmt_guestlecture');
    }

    public function mgmt_contactus()
    {
        return view('university.colleges.management.mgmt_contactus');
    }

    public function mgmt_magazine()
    {
        return view('university.colleges.management.mgmt_magazine');
    }
    public function mgmt_gallery()
    {
        return view('university.colleges.management.mgmt_gallery');
    }
}