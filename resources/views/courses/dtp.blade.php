@extends('master.master')
@section('title', 'DTP (Desktop Publishing)')

@section('content')
@include('courses.partials.course_detail', [
    'image' => 'dtp_banner.webp',
    'title' => 'DTP (Desktop Publishing)',
    'description' => 'Design professional brochures, posters, and print-ready layouts using publishing tools like CorelDRAW, Photoshop, and PageMaker.',
    'duration' => '3 Months',
    'rating' => 4.4,
    'reviews' => 28,
    'curriculum' => [
        'Introduction to Graphic Design',
        'CorelDRAW - Vector illustration and layout',
        'Adobe Photoshop - Image editing and retouching',
        'PageMaker/InDesign - Page layout for print',
        'Font & Typography Design',
        'Print Design Principles'
    ]
])
@endsection
