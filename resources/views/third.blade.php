@extends('layouts.app')

@section('title') {{ $title }} @endsection

@section('content')
<div class="container my-4">

    <button class=" mb-4 btn btn-success add_field_button">Tambah</button>

<div class="input_fields_wrap"></div>

@endsection

@section('javascript')

<script>
$(document).ready(function() {
	var max_fields      = 10;
	var wrapper   		= $(".input_fields_wrap"); 
	var add_button      = $(".add_field_button"); 	
    var x = 0;
    
	$(add_button).click(function(e){ 
		e.preventDefault();
		if(x < max_fields){ 
			x++; 
			$(wrapper).append('<div id="kotakKecil" class="row justify-content-center"><div class="col-md-8"><div class="my-2 card"><div class="card-header">Kotak Kecil ' + x + '</div><div class="tree__card-body card-body"><a href="#" class="tree__button btn btn-danger remove_field">Remove</a></div></div></div></div>');
		}
	});
	
	$(wrapper).on("click",".remove_field", function(e){ 
		e.preventDefault(); $(this).parent('div').parent('div').remove(); x--;
	})
});
</script>

@endsection
