@extends('master.master')
@section('title', 'DCA (Diploma in Computer Application)')

@section('content')
@include('courses.partials.course_detail', [
'image' => 'dca_banner.png',
'title' => 'DCA (Diploma in Computer Application)',
'description' => 'Comprehensive diploma covering basic to advanced concepts in computer software, MS Office, internet, and programming basics.',
'duration' => '6 Months',
'rating' => 4.6,
'reviews' => 41,
'curriculum' => [
'Computer Fundamentals',
'Windows',
'Microsoft Office(Word,Excel,PowerPoint,Access)',
'Accounting Package Of Hardware Maintenance',
'"C" Programming',
'DTP(corel Draw,Photoshop,Photo Maker)',
'Basic Concept Of Hardware Maintenance',
'English,Gujarati,Hindi& Urdu Typing',
'Internet(Outlook Express)'
]
])
@endsection