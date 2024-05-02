@extends('students.layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Student Information
                </div>
                <div class="float-end">
                    <a href="{{ route('students.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">

                    <div class="row">
                        <label for="dni" class="col-md-4 col-form-label text-md-end text-start"><strong>DNI:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $student->dni }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="first_name" class="col-md-4 col-form-label text-md-end text-start"><strong>Name:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $student->first_name }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="last_name" class="col-md-4 col-form-label text-md-end text-start"><strong>apellido:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $student->last_name }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="birthday" class="col-md-4 col-form-label text-md-end text-start"><strong>birthday:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $student->birthday }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="group" class="col-md-4 col-form-label text-md-end text-start"><strong>group</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $student->group }}
                        </div>
                    </div>
        
            </div>
        </div>
    </div>    
</div>
    
@endsection