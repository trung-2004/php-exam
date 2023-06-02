@extends("layouts.layout")
@section("main")
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="{{url("/create-student")}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Name</label>
                            <input name="name" type="text"  class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Age</label>
                            <input name="age" type="number"  class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Address</label>
                            <input name="address" type="text"  class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Telephone</label>
                            <input name="telephone" type="text"  class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
