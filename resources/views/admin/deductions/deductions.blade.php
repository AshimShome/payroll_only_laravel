@extends('layouts.admin_master')

<style>
  .form-container, .table-container{
    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    background: #ffff;
    margin: 10px 0px;
    padding: 10px
  }
  .scroller {
  width: 520px;
  height: 620px;
  overflow-y: scroll;
  scrollbar-width: thin;
}


</style>
@section('content')
<div class="content-wrapper">
  <div class="container-fluid">
  <div class="row mx-2">


   <div class="col-md-6 p-2"> 
    <div class="form-container">
      <div>
        @if ($errors->any())
          <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
          </ul>
    </div>
@endif
      </div>
    <form id="form_id" >
      @csrf
      <div class="form-group">
        <label for="exampleInputEmail1">Deductions Name</label>
        <input type="text" class="form-control shadow-none" id="deductions_name" name="deductions_name"  >
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Amount</label>
        <input type="number"  class="form-control shadow-none" id="deductions_amount" name="deductions_amount"  >
      </div>
      
      <button type="submit" onclick="validateForm()" class="btn btn-primary">Add</button>

    </form>

  </div>
   </div>
   <div class="col-md-6 p-2">
    <div class="table-container scroller">
    <table class="table table-bordered">
      <thead class="thead-light">
        <tr>
          <th scope="col">SL</th>
          <th scope="col">Deductions Name</th>
          <th scope="col">Amount</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody id="tableInfo">
      
      </tbody>
    </table>
  </div>
   </div>
 </div>
</div>
  </div>

@endsection


@push('scripts')
<script>
$(document).ready(function(){
  allowanceShow();
$("#form_id").submit(function(event) {
  event.preventDefault()
  let form_data = new FormData($('#form_id')[0]);
 var actionUrl = `/deductions/store`;
 $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }
          });
$.ajax({ 
  type: "POST",
  url: actionUrl,
  data: form_data, // serializes the form's elements.
  contentType: false,
  processData: false,
  success: function(data)
  {
    $("#form_id").trigger("reset");
    Swal.fire({
      position: 'top-end',
      icon: 'success',
      title: 'Deductions saved Successfully',
      showConfirmButton: false,
      timer: 1500
    })
    allowanceShow();
  }
});

});    

function validateForm(){
  alert('message');

}


function allowanceShow() {
                $.ajax({
                    type: "GET",
                    url: `/deductions/show`,
                    success: function(response) {
                        var s = '';
                        var total = 1;
                        $('#tableInfo').empty()
                        $.each(response, function(key, value) {
                            s += `
                            <tr style="" class="footable-even">
                                <td><span class="footable-toggle"></span>${total++}</td>
                                <td>${value.deductions_name }</td>
                                <td>${value.deductions_amount } Taka</td>
                                <td>
                                    <a  href='#' class="btn btn-outline-warning btn-sm">Edit</a>
                                    <a href="#"class="btn btn-outline-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            `;
                        });
                        $('#tableInfo').append(s);
                    },
                });
            }
  });


  
  </script>
  @endpush
