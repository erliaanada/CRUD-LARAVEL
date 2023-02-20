@extends('students.layout')
@section('content')

        <div class="card" style="margin:20px;">
            <div class="card-header">Students page</div>
            <div class="card-body">
                <div class="card-body">
                    <h5 class="card-tittle">Name : {{ $students->name }}</h5>
                    <p class="card-text">Address : {{ $students->address }}</p>
                    <p class="card-text">Mobile :  {{ $students->mobile }}</p>
                </div>
            </hr>
            </div>
</div>