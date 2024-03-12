@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">payments</div>
  <div class="card-body">
      
      <form action="{{ url('payments') }}" method="post">
        {{-- {!! csrf_field() !!} --}}
        @csrf
        <label>Enrolment no</label></br>
        
        <select name="enrol_no" id="enrol_no">
          {{-- loop over an iterative array with id's and names --}}
          @foreach ($enrolments as $id=>$enrol_no )
            <option value="{{$id}}">
              {{ $enrol_no }}
            </option>

          @endforeach
        </select>

        <br><br>
        
        <label>Paid Date</label></br>
        <input type="text" name="paid_date" id="paid_date" class="form-control"></br>
        <label>Amount</label></br>
        <input type="text" name="amount" id="amount" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop