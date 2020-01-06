@extends('layouts.app')

@section('content')
<div class="container">
    <form class="form-style-9">
        <h2>Vehicle Detail</h2>
        <ul>
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
            <li>
                <select name="brand" id="brand" class="field-style field-split align-left" required>
                    <option value="0" disabled="true" selected="true">Select Brand</option>
                </select>
                <select name="version" id="ver" class="field-style field-split align-right" required>
                    <option value="0" disabled="true" selected="true">Select Model</option>
                </select>
            </li>
            <li>
                <select name="variant" class="field-style field-split align-left" required>
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
            <li>
                <p>This Vehicle is?</p>
                <input type="radio" name="status" value='old' checked> Old
                <input type="radio" name="status" value='new'> Brand New
            </li>
            <li>
                <input type="submit" value="Continue" />
            </li>
        </ul>
    </form>
</div>
@endsection