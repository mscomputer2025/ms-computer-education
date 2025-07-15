@extends('master.master')
@section('title', 'Diploma in Web Designing & Development')

@section('content')
@include('courses.partials.course_detail', [
    'image' => 'web_design_banner.jpg',
    'title' => 'Diploma in Web Designing & Development',
    'description' => 'Get hands-on with web technologies including HTML, CSS, JavaScript, and backend basics to build dynamic and responsive websites.',
    'duration' => '12  Months',
    'rating' => 4.7,
    'reviews' => 58,
    'curriculum' => [
        'HTML5 & CSS3 - Page structure and styling',
        'JavaScript & jQuery - Interactivity and DOM manipulation',
        'Responsive Design with Bootstrap',
        'Web Hosting & FTP',
        'Intro to PHP and MySQL',
        'Languages we teach: Java,PHP,Python,ASP.NET',
        'Project: Personal or Business Website'
    ]
])
@endsection
