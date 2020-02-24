@extends('Frontend.master')

@section('content')
    <div class="container">
        <form class="form-style-9">
            <h2>Vehicle Detail</h2>
            <ul>
                <div>
                    <li>
                        <input type="text" name="fname" class="field-style field-split align-left" placeholder="First Name"
                            required />
                        <input type="text" name="lname" class="field-style field-split align-right" placeholder="Last Name"
                            required />
                    </li>
                    <li>
                        <input type="text" name="phone" class="field-style field-split align-left" placeholder="Phone" />
                        <input type="email" name="email" class="field-style field-split align-right" placeholder="Email" />
                    </li>
                </div>
               {{--  {{ var_dump($brand)}} //checking if database is loaded or not

                {{ var_dump($type)}}

                {{ var_dump($variant) }}--}}

                <div>
                    <li>
                        <select name="brand" id="brand" class="field-style field-split align-left" required>
                            <option value="" disabled="true" selected="true">Select Brand</option>
                            @foreach($brands as  $key => $value)
                                <option value="{{ $key }}">{{$value}}</option>
                            @endforeach
                        </select>

                        <select name="type" id="type" class="field-style field-split align-right" required>
                            <option value="0" disabled="true" selected="true">Select Model</option>
                        </select>
                    </li>
                </div>

                <div>
                    <li>
                        <select name="variant" id="variant" class="field-style field-split align-left" required>
                            <option value="">Select variant</option>
                        </select>

                        <select name="date" class="field-style field-split align-right" required>
                            <option value="">Year Of Purchase</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                        </select>
                    </li>
                </div>

                <div>
                    <li>
                        <p>This Vehicle is?</p>
                        <input type="radio" name="status" value='old' checked> Old
                        <input type="radio" name="status" value='new'> Brand New
                    </li>
                </div>
                <div class="col-xs-4">
                    <li>
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Continue</button>
                    </li>
                </div>
            </ul>
        </form>
    </div>

    <script type="text/javascript">
        $('#brand').change(function(){
            var brandID = $(this).val();
            if(brandID){
                $.ajax({
                    type:'GET',
                    url:'{{url('getTypes')}}?brand_id='+brandID,
                    success:function (res) {
                        if(res){
                            $('#type').empty();
                            $('#type').append('<option>Select Model</option>');
                            $.each(res,function(key,value){
                                $('#type').append('<option value="'+key+'">'+value+'</option>');
                            });
                        }else{
                            $('#type').empty();
                        }
                    }

                });
            }else{
                $('#type').empty();
                $('#variant').empty();
            }
        });

        $('#type').on('change',function(){
            var typeID = $(this).val();
            if(typeID){
                $.ajax({
                    type:'GET',
                    url: '{{url('getVariants')}}?type_id='+typeID,
                    success:function (res) {
                        if(res){
                            $('#variant').empty();
                            $.each(res,function(key,value){
                                $('#variant').append('<option value="'+key+'">'+value+'</option>');
                            });
                        }else{
                            $('#variant').empty();
                        }
                    }
                });
            }else{
                $('#variant').empty();
            }
        });
    </script>

@endsection
