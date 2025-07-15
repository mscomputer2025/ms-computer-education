@extends('master.master')
@section('title', 'PGDCA (Post Graduate Diploma in Computer Application)')

@section('content')
@include('courses.partials.course_detail', [
'image' => 'pgdca_banner.png',
'title' => 'PGDCA (Post Graduate Diploma in Computer Application)',
'description' => 'Designed for graduates, this program develops high-level IT and programming skills for academic and industrial applications.',
'duration' => '12 Months',
'rating' => 4.9,
'reviews' => 49,
'curriculum' => [
'Computer Fundamentals',
'Windows OS',
'Microsoft Office(Word,Excel,PowerPoint,Access)',
'DTP(corel Draw,Photoshop,Photo Maker)',
'"C" Programming',
'"C++" Programming',
'Basic Concept Of Hardware Maintenance',
'Personality Development',
'Internat & Multimedia With Email Technology',
'New Technology',
'Examination of Modules',
'Project'
]
])
@endsection