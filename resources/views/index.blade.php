@extends('layouts.app')
@section('title', 'create')

@section('content')
<!-- MultiStep Form -->
<div class="container-fluid" id="grad1">
    <div class="row justify-content-center mt-0">
        <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                
                <h2><strong>Create Your Resume</strong></h2>
                <p>Fill all form field to go to next step</p>
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <form id="msform" method="post" action="{{route('cv.create')}}">
                            @csrf
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="account"><strong>Personal Info</strong></li>
                                <li id="personal"><strong>Contact Info</strong></li>
                                <li id="skills"><strong>Skills</strong></li>
                                <li id="Education"><strong>Education</strong></li>
                                <li id="experience"><strong>Experience</strong></li>
                                <li id="Languages"><strong>Languages</strong></li>
                                <li id="confirm"><strong>Hobbies</strong></li>
                            </ul> <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Person info</h2> 
                                    <input type="text" value="{{ old('person_name') }}" name="person_name" placeholder="Enter Name"  />
                                    <input type="text" value="{{ old('age') }}" name="age" placeholder="Enter Age"  />
                                     <input type="text" value="{{ old('person_title') }}" name="person_title" placeholder="Enter Title"  /> 
                                     <input type="description" value="{{ old('person_description') }}" name="person_description"  placeholder="Enter Description" /> 
                                     
                                </div> 
                                <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Contact Information</h2> 
                                    <input type="text" value="{{ old('email') }}"  name="email"  placeholder="Enter Email" /> 
                                    <input type="number" value="{{ old('number') }}"  name="number"  placeholder="Enter Number" /> 
                                    <input type="text" value="{{ old('address') }}"  name="address"  placeholder="Enter Address" /> 
                                </div> 
                                
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> 
                                <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>
                            <fieldset>
                                <div id="" class="form-card">
                                    <h2 class="fs-title">Your Skill</h2>
                                    <div class="row">
                                    <div class="col-md-8">
                                    <input type="text" value="{{ old('skill_name[1]') }}" name="skill_name[1]"  placeholder="Enter skills" />
                                    </div> 
                                    <div class="col-md-2">
                                        <i class="bi-plus-circle-fill add" value="add"></i>
                                        <i class="bi-trash-fill remove" value="remove" ></i>

                                    </div>
                                    <div class="col-md-1">
                                    </div>
                                    <div class="col-md-8" id="new_chq" ></div>
                                    <input type="hidden" value="1" id="total_chq">
                                </div>
                                   
                                     </div> 
                                <input type="button" name="previous"  class="previous action-button-previous" value="Previous" /> 
                                <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>
                            <fieldset>
                                <div id="" class="form-card">
                                    <h2 class="fs-title" id='div_education'>Education 1</h2>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <input type="text"  value="{{ old('degree[1]') }}"  name="degree[1]" placeholder="Degree Name" /> 
                                            <input type="text"  value="{{ old('university[1]') }}"  name="university[1]" placeholder="University Name" /> 
                                            <input type="text" value="{{ old('education_year[1]') }}"  name="education_year[1]" placeholder="Education Year" /> 
                                            <input type="text" value="{{ old('education_description[1]') }}"  name="education_description[1]" placeholder="Education Description" />
                                        </div> 
                                        <div class="col-md-2">
                                            <i class="bi-plus-circle-fill addeducation" value="addeducation"></i>
                                            <i class="bi-trash-fill removeeducation" value="removeeducation" ></i>
                                        </div>
                                        <div class="col-md-1">
                                        </div>
                                        <div class="col-md-8" id="new_chqeducation" ></div>
                                        <input type="hidden" value="1" id="total_chqeducation">
                                    </div>                                   
                                </div> 
                                 <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> 
                                <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>
                            <fieldset>
                                <div id="" class="form-card">
                                    <h2 class="fs-title" id='div_experience'>Experience 1</h2>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <input type="text" value="{{ old('job_title[1]') }}"  name="job_title[1]" placeholder="Job Title" /> 
                                            <input type="text" value="{{ old('Company[1]') }}"  name="Company[1]" placeholder="Company Name" /> 
                                            <input type="date" value="{{ old('starting_date[1]') }}"  name="starting_date[1]"  /> 
                                            <input type="date" value="{{ old('last_date[1]') }}"  name="last_date[1]"  /> 
                                            <input type="text" value="{{ old('experience_description[1]') }}"  name="experience_description[1]" placeholder="experience Description" />
                                        </div> 
                                        <div class="col-md-2">
                                            <i class="bi-plus-circle-fill addExperience" value="addExperience"></i>
                                            <i class="bi-trash-fill removeExperience" value="removeExperience" ></i>
                                        </div>
                                        <div class="col-md-1">
                                        </div>
                                        <div class="col-md-8" id="new_chqexperience" ></div>
                                        <input type="hidden" value="1" id="total_chqexperience">
                                    </div>                                   
                                </div> 
                                 <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> 
                                <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>
                            <fieldset>
                                <div id="" class="form-card">
                                    <h2 class="fs-title">Languages</h2>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <input type="text"  value="{{ old('language_name[1]') }}"   name="language_name[1]" placeholder="Enter Language" />
                                        </div> 
                                        <div class="col-md-2">
                                            <i class="bi-plus-circle-fill addlanguage" value="addlanguage"></i>
                                            <i class="bi-trash-fill removelanguage" value="removelanguage" ></i>
                                        </div>
                                        <div class="col-md-1">
                                        </div>
                                        <div class="col-md-8" id="new_chqlanguage" ></div>
                                        <input type="hidden" value="1" id="total_chqlanguage">
                                    </div>                                   
                                </div> 
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> 
                                <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>
                            <fieldset>
                                <div id="" class="form-card">
                                    <h2 class="fs-title">Your Hobbies</h2>
                                    <div class="row">
                                    <div class="col-md-8">
                                    <input type="text"   value="{{old('hobby_name[1]')}}"   name="hobby_name[1]" placeholder="Enter Hobby" />
                                    </div> 
                                    <div class="col-md-2">
                                        <i class="bi-plus-circle-fill addhobby" value="addhobby"></i>
                                        <i class="bi-trash-fill removehobby" value="removehobby" ></i>

                                    </div>
                                    <div class="col-md-1">
                                    </div>
                                    <div class="col-md-8" id="new_chqhobby" ></div>
                                    <input type="hidden" value="1" id="total_chqhobby">
                                </div>
                                   
                                     </div> 

                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> 
                                <input type="submit"  class="action-button" value="Submit" />
                               
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $('.add').on('click', add);
        $('.remove').on('click', remove);

        function add() {
        var new_chq_no = parseInt($('#total_chq').val()) + 1;
        var new_input = "<input  type='text' name='skill_name["+new_chq_no+"]' placeholder='Enter Skills'  id='new_" + new_chq_no + "'> ";

        $('#new_chq').append(new_input);

        $('#total_chq').val(new_chq_no);
        }

        function remove() {
        var last_chq_no = $('#total_chq').val();

        if (last_chq_no > 1) {
            $('#new_' + last_chq_no).remove();
            $('#total_chq').val(last_chq_no - 1);
        }
        }
    </script>
    <script type="text/javascript">
        $('.addlanguage').on('click', add);
        $('.removelanguage').on('click', remove);

        function add() {
        var new_chq_nolanguage = parseInt($('#total_chqlanguage').val()) + 1;
        var new_inputlanguage = "<input  type='text' name='language_name["+new_chq_nolanguage+"]' placeholder='Enter language'  id='new_language" + new_chq_nolanguage + "'> ";

        $('#new_chqlanguage').append(new_inputlanguage);

        $('#total_chqlanguage').val(new_chq_nolanguage);
        }

        function remove() {
        var last_chq_nolanguage = $('#total_chqlanguage').val();

        if (last_chq_nolanguage > 1) {
        $('#new_language' + last_chq_nolanguage).remove();
        $('#total_chqlanguage').val(last_chq_nolanguage - 1);
        }
        }
    </script>
    <script type="text/javascript">
        $('.addhobby').on('click', add);
        $('.removehobby').on('click', remove);

        function add() {
        var new_chq_nohobby = parseInt($('#total_chqhobby').val()) + 1;
        var new_inputhobby = "<input  type='text' name='hobby_name["+new_chq_nohobby+"]' placeholder='Enter Hobby'  id='new_hobby" + new_chq_nohobby + "'> ";

        $('#new_chqhobby').append(new_inputhobby);

        $('#total_chqhobby').val(new_chq_nohobby);
        }

        function remove() {
        var last_chq_nohobby = $('#total_chqhobby').val();

        if (last_chq_nohobby > 1) {
        $('#new_hobby' + last_chq_nohobby).remove();
        $('#total_chqhobby').val(last_chq_nohobby - 1);
        }
        }
    </script>
    <script type="text/javascript">
        $('.addeducation').on('click', add);
        $('.removeeducation').on('click', remove);

        function add() {
        var new_chq_noeducation = parseInt($('#total_chqeducation').val()) + 1;
        var new_inputeducation = "<div  id='div_education"+new_chq_noeducation+"'  ><h2 class='fs-title'>Education "+new_chq_noeducation+"</h2><input type='text' name='degree["+new_chq_noeducation+"]' placeholder='Degree Name' id='new_education"+new_chq_noeducation+"' /> <input type='text' name='university["+new_chq_noeducation+"]' placeholder='University Name' /> <input type='text' name='education_year["+new_chq_noeducation+"]' placeholder='Education Year' /> <input type='text' name='education_description["+new_chq_noeducation+"]' placeholder='Education Description' /></div> ";

        $('#new_chqeducation').append(new_inputeducation);

        $('#total_chqeducation').val(new_chq_noeducation);
        }

        function remove() {
        var last_chq_noeducation = $('#total_chqeducation').val();
        window.alert(last_chq_noeducation);

        if (last_chq_noeducation > 1) {
        $('#div_education'+last_chq_noeducation).remove();
        $('#total_chqeducation').val(last_chq_noeducation - 1);
        }
        }
    </script>
        <script type="text/javascript">
            $('.addExperience').on('click', add);
            $('.removeExperience').on('click', remove);
    
            function add() {
            var new_chq_noexperince = parseInt($('#total_chqexperience').val()) + 1;
            
            var new_inputexperince = '<div  id="div_experience"'+new_chq_noexperince+'" ><h2 class="fs-title">Experince '+new_chq_noexperince+'</h2><input type="text" name="job_title['+new_chq_noexperince+']" placeholder="Job Title" /><input type="text" name="Company['+new_chq_noexperince+']" placeholder="Company Name" /><input type="date" name="starting_date['+new_chq_noexperince+']"  /><input type="date" name="last_date['+new_chq_noexperince+']"/><input type="text" name="experience_description['+new_chq_noexperince+']" placeholder="experience Description" /></div>';
            
            $('#new_chqexperience').append(new_inputexperince);
    
            $('#total_chqexperience').val(new_chq_noexperince);
            }
    
            function remove() {
            var last_chq_noexperince = $('#total_chqexperience').val();
            window.alert(last_chq_noexperince);
    
            if (last_chq_noexperince > 1) {
            $('#div_experience'+last_chq_noexperince).remove();
            $('#total_chqexperience').val(last_chq_noexperince - 1);
            }
            }
        </script>

@endsection